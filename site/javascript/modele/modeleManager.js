var modeleManager= {
    investissementModele :function (mE, pibchoix) {
        return (mE.terrain + mE.construction + mE.equipement + mE.camion + mE.info + mE.bureau) * pibchoix;
    },
    ammortissment : function (mE, mP, pibchoix) {
        var amortissement = [];
        amortissement.push(fabrique.armortirModele(mE.construction * pibchoix, mP.ammort.construction, mP.ammort.coefdegressif, "Construction"));
        amortissement.push(fabrique.armortirModele(mE.equipement * pibchoix, mP.ammort.equipement, mP.ammort.coefdegressif, "Equipement"));
        amortissement.push(fabrique.armortirModele(mE.camion * pibchoix, mP.ammort.camion, mP.ammort.coefdegressif, "Camion"));
        amortissement.push(fabrique.armortirModele(mE.info * pibchoix, mP.ammort.info, mP.ammort.coefdegressif, "Informatique"));
        amortissement.push(fabrique.armortirModele(mE.bureau * pibchoix, mP.ammort.bureau, mP.ammort.coefdegressif, "Bureau"));
        return amortissement;

    },
    ammortGen : function (ammortissement) {
        var total=[0,0,0,0,0];
        var generalAmort = [];
        for (var i = 0; i < ammortissement.length; i++) {
            for (var j = 0; j < ammortissement[i].chargeAmorti.length; j++) {
                generalAmort.push(ammortissement[i].chargeAmorti[j]);
                total[j]=total[j]+ammortissement[i].chargeAmorti[j];
            }
            generalAmort.push("change");

        }

        for(var i=0;i<total.length;i++){
            generalAmort.push(total[i]);
        }
        return generalAmort;

    },
    taxe_val_ajout : function (mE, mP, pibchoix) {
        //-------------------------------
        var petrole = [];
        var taux = [];
        var tva = [];
        //contribution forfaitaires

        for (var i = 0; i < 5; i++) {
            petrole.push(mE.petrole * pibchoix);
        }

        for (var i = 0; i < 5; i++) {
            taux.push(mP.impots.tva_petrole);
        }

        for (var i = 0; i < 5; i++) {
            tva.push((mE.petrole * pibchoix) / (mP.impots.tva_petrole/100));
        }

        return{
            petrole:petrole,
            taux:taux,
            tva:tva

        }
        //--------------------------------------
    },
    contributionForfEmploie :function (mE, mP, pibchoix) {
        var salaireCadre = []
        for (var i = 0; i < 5; i++) {
            salaireCadre.push(Math.trunc(mE.cadre * mE.indice_cadre * pibchoix));
        }
        var salaireSecretaire = []
        for (var i = 0; i < 5; i++) {
            salaireSecretaire.push(Math.trunc(mE.secretaire * mE.indice_secretaire * pibchoix));
        }
        var salaireOuvrier = []
        for (var i = 0; i < 5; i++) {
            salaireOuvrier.push(Math.trunc(mE.ouvrier * mE.indice_ouvrier * pibchoix));
        }
        var masseSalarial = []
        for (var i = 0; i < 5; i++) {
            masseSalarial.push(salaireCadre[i] + salaireSecretaire[i] + salaireOuvrier[i]);
        }
        var taux = [];
        for (var i = 0; i < 5; i++) {
            taux.push(mP.impots.cfe);
        }
        var reelCFE = [];
        for (var i = 0; i < 5; i++) {
            reelCFE.push(Math.trunc(masseSalarial[i] * (taux[i] / 100)));
        }


        var employer = {
            salaire_cadre: salaireCadre,
            salaire_secretaire: salaireSecretaire,
            salaire_ouvrier: salaireOuvrier,
            masse_salarial: masseSalarial,
            tauxCfe: taux,
            reel_CFE: reelCFE

        };
        return employer;
    },
    taxe_creance : function (mE, mP, pibchoix) {
        //-------------------------------
        var chargeFin = [];
        var taux = [];
        var irc = [];
        //contribution forfaitaires

        for (var i = 0; i < 5; i++) {
            chargeFin.push(Math.trunc(mE.chargeFinanciere * pibchoix));
        }

        for (var i = 0; i < 5; i++) {
            taux.push(mP.impots.irc);
        }

        for (var i = 0; i < 5; i++) {
            irc.push(Math.trunc((mE.chargeFinanciere * pibchoix) * (mP.impots.irc/100)));
        }

        return{
            chargeFinance:chargeFin,
            taux:taux,
            irc:irc

        }
        //--------------------------------------
    },
    comptableResult : function(mE,pibchoix,tva,salaire_cadre,salaire_secretaire,salaire_ouvrier,reel_CFE,amortissemment){
        //console.log("on entre dans compta");
        let i;
        let vente = [];
        let achats = [];
        let petrole=[];
        let tva_petrole=tva;
        let depense_admin=[];
        let depense_pub=[];
        let depense_entretien=[];
        var salaireCadre=salaire_cadre;
        let salaire_secreataire=salaire_secretaire;
        let salaireOuvrier=salaire_ouvrier;
        let CFE=reel_CFE;
        //console.log("cfe variable entrée:\n"+reel_CFE);
        //console.log("cfe variable sortie:\n"+CFE);
        let chargeFinancier=[];
        let amortissement=[];
        let benefice_comptable = [];
        let taux_marge_avant__IS_ISMF = [];

        var cpt=0;
        for ( i = 0; i <amortissemment.length;i++){
            //console.log(cpt);
            if(amortissemment[i]=="change"){
                cpt++;
            }
            else{
                if(cpt>4){
                    //console.log("ici");
                    amortissement.push(amortissemment[i]);
                }
            }

        }

        for ( i = 0; i < 5; i++) {
            vente.push(Math.trunc(mE.vente * pibchoix));
            achats.push(Math.trunc(mE.achat * pibchoix));
            petrole.push(Math.trunc(mE.petrole * pibchoix));
            depense_admin.push(Math.trunc(mE.depenseAdministrative * pibchoix));
            depense_pub.push(Math.trunc(mE.depensePub * pibchoix));
            depense_entretien.push(Math.trunc(mE.depenseEntretien * pibchoix));
            chargeFinancier.push(Math.trunc(mE.chargeFinanciere * pibchoix));

        }
        for ( i = 0; i < 5; i++) {
            benefice_comptable.push(vente[i]-(achats[i]+petrole[i]+tva_petrole[i]+depense_admin[i]+depense_pub[i]+depense_entretien[i]+salaireCadre[i]+salaireOuvrier[i]+salaire_secreataire[i]+CFE[i]+chargeFinancier[i]+amortissement[i]));
            taux_marge_avant__IS_ISMF.push((benefice_comptable[i]/vente[i])*100);
        }
        return{
            vente:vente,
            achats:achats,
            petrole:petrole,
            tva_petrole:tva_petrole,//non
            depense_entretien:depense_entretien,
            depense_admin:depense_admin,
            depense_pub:depense_pub,
            salaire_ouvrier:salaireOuvrier,
            salaire_secreataire:salaire_secreataire,
            salaire_cadre:salaireCadre,
            cfe:CFE,//non

            chargeFinanciere:chargeFinancier,
            //fin
            amortissement:amortissement,
            benefice_comptable:benefice_comptable,
            taux_marge_avant__IS_ISMF:taux_marge_avant__IS_ISMF
        };



    },
    impotResult:function(benCompta,amortExep){
        var benImpo=[];
        for(var i=0;i<5;i++){
            benImpo.push(benCompta[i]-amortExep[i]);
        }
        return{
            benCompta:benCompta,
            amortExep:amortExep,
            benImpo:benImpo,
        };
    },
    ammortExcept:function(mP,benCompta,regime){
        //amortissement exceptionnel
        var investissment=Math.round((donne().mE.terrain+donne().mE.construction+donne().mE.equipement+donne().mE.camion+donne().mE.info+donne().mE.bureau)*donne().pibChoisi);
        var taux;
        var limitation;
        var duree;
        var tDuree=[];
        var baseAmorti=[];
        var chargeAmorti=[];
       // console.log(investissment);
        if(regime=="nongen"){
            if(mP.investissement.isamort.ammortTauxEx!=null){
                taux=mP.investissement.isamort.ammortTauxEx;
            }
            else{
                taux=0;
            }
            if(mP.investissement.isamort.ammortLimit!=null){
                limitation=mP.investissement.isamort.ammortLimit;
            }
            else{
                limitation=0;
            }
            if(mP.investissement.isamort.duree!=null){
                duree=mP.investissement.isamort.duree;
            }
            else{
                duree=0;
            }

        }
        else{
            taux=0;
            limitation=0;
            duree=0;
        }
        tDuree.push(duree);
        for(var i=1;i<5;i++){
            tDuree.push(tDuree[i-1]-1);
            if(tDuree[i]<0){
                tDuree[i]=0;
            }
        }
        baseAmorti.push(investissment*(taux/100));
        for(var i=0;i<5;i++){
            if(tDuree <=0){
                chargeAmorti.push(0)
            }
            else {
                if (benCompta[i] <= 0) {
                    chargeAmorti.push(0)
                }
                else {
                    if ((limitation/100)*benCompta[i] > baseAmorti[i]) {
                        chargeAmorti.push(baseAmorti[i]);
                    }
                    else {
                        chargeAmorti.push(Math.round((limitation/100) * benCompta[i]));
                    }
                }
            }
            if(i<4){
                baseAmorti.push(baseAmorti[i]-chargeAmorti[i]);
            }

        }
        return{
            duree:duree,
            investissement:investissment,
            taux:taux,
            limitation:limitation,
            dureeTab:tDuree,
            baseAmorti:baseAmorti,
            chargeAmorti:chargeAmorti
        }
    },
    iSIMFtab:function(is,imf){
        var monTab=[];
        for (var i=0;i<5;i++){
            if(is[i]>=imf[i]){
                monTab.push(Math.round(is[i]));
            }
            else{
                monTab.push(Math.round(imf[i]));
            }
        }
        return monTab;
    },
    impotTaxeCourent:function(actu,employer,isImf,impotIRVM,taxeCreance,taxeAjout){

        var cfe=employer.reel_CFE;
        var isimf=isImf;
        var irvm=impotIRVM;
        var irc=taxeCreance.irc;
        var tvaPetrole=taxeAjout.tva;
        var total=[];
        for(var i=0;i<5;i++){
            total.push(Math.round(cfe[i]+isimf[i]+irc[i]+irvm[i]+tvaPetrole[i]));
        }
        cfe.push(Math.round(this.van(actu/100,cfe)));
        isimf.push(Math.round(this.van(actu/100,isimf)));
        irvm.push(Math.round(this.van(actu/100,irvm)));
        irc.push(Math.round(this.van(actu/100,irc)));
        tvaPetrole.push(Math.round(this.van(actu/100,tvaPetrole)));
        total.push(Math.round(this.van(actu/100,total)));
        return{
            cfe:cfe,
            isimf:isimf,
            irvm:irvm,
            irc:irc,
            tvaPetrole:tvaPetrole,
            total:total
        }




    },
    impotTaxeActu:function(actu,employer,isImf,impotIRVM,taxeCreance,taxeAjout){
        var cfe=[];

        var isimf=[];
        var irvm=[];
        var irc=[];
        var tvaPetrole=[];
        var total=[];
        var totactu=0;

        for(var i=0;i<5;i++){
            totactu=(Math.round(actu[i]*10)/10);

            cfe.push(Math.round(employer.reel_CFE[i]*((Math.round(totactu*10))/1000)));
            //console.log(employer.reel_CFE[i]);
            isimf.push(Math.round(isImf[i]*((Math.round(totactu*10))/1000)));
            irvm.push(Math.round(impotIRVM[i]*((Math.round(totactu*10))/1000)));
            irc.push(Math.round(taxeCreance.irc[i]*((Math.round(totactu*10))/1000)));
            tvaPetrole.push(Math.round(taxeAjout.tva[i]*((Math.round(totactu*10))/1000)));
            total.push(Math.round(cfe[i]+isimf[i]+irc[i]+irvm[i]+tvaPetrole[i]));
        }
        cfe.push(this.sommeTab(cfe));
        isimf.push((this.sommeTab(isimf)));
        irvm.push(this.sommeTab(irvm));
        irc.push(this.sommeTab(irc));
        tvaPetrole.push(this.sommeTab(tvaPetrole));
        total.push(this.sommeTab(total));




        return{
            cfe:cfe,
            isimf:isimf,
            irvm:irvm,
            irc:irc,
            tvaPetrole:tvaPetrole,
            total:total
        }

    },
    tauxEffectifCour:function(fluxtresor,impTaxe){
        var courant=[];
        for (var i=1;i<fluxtresor.length;i++){
            courant.push(fluxtresor[i]);
        }
        var cfe=this.divisionTabPurcent(impTaxe.cfe,courant);
        var isimf=this.divisionTabPurcent(impTaxe.isimf,courant);
        var irvm=this.divisionTabPurcent(impTaxe.irvm,courant);
        var irc=this.divisionTabPurcent(impTaxe.irc,courant);
        var tvaPetrole=this.divisionTabPurcent(impTaxe.tvaPetrole,courant);
        var total=this.divisionTabPurcent(impTaxe.total,courant);
        cfe.pop();
        isimf.pop();
        irvm.pop();
        irc.pop();
        tvaPetrole.pop();
        total.pop();
        return{
            cfe:cfe,
            isimf:isimf,
            irvm:irvm,
            irc:irc,
            tvaPetrole:tvaPetrole,
            total:total
        }

    },
    fluxTresoriesI:function(entreprise,pin,compta,actu){
        var courant=[];
        var courantBis=[];
        var actuel=[];
        var actuelBis=[];
        var totactu;
        //console.log(entreprise);
        courant.push(-Math.round((entreprise.capitalSocial+entreprise.detteLongTerme+entreprise.detteCourtTerme+entreprise.detteFournisseur)*pin));
        actuel.push(-Math.round((entreprise.capitalSocial+entreprise.detteLongTerme+entreprise.detteCourtTerme+entreprise.detteFournisseur)*pin));
        for (var i=0;i<compta.vente.length;i++){

            //console.log(compta.vente[i]-compta.achats[i]-compta.petrole[i]-compta.depense_entretien[i]-compta.depense_admin[i]-compta.depense_pub[i]-compta.salaire_ouvrier[i]-compta.salaire_cadre[i]-compta.salaire_secreataire[i]-compta.chargeFinanciere);

            courant.push(compta.vente[i]-compta.achats[i]-compta.petrole[i]-compta.depense_entretien[i]-compta.depense_admin[i]-compta.depense_pub[i]-compta.salaire_ouvrier[i]-compta.salaire_cadre[i]-compta.salaire_secreataire[i]-compta.chargeFinanciere[i]);


        }
        for (var i=1;i<courant.length;i++){
            totactu=(Math.round(actu[i-1]*10)/10);
            courantBis.push(courant[i]);
            actuel.push(Math.round(courant[i]*((Math.round(totactu*10))/1000)));
            actuelBis.push(actuel[i]);
            //console.log(((Math.round(totactu*10))/1000));
        }

        courant.push(this.van(entreprise.actuali/100,courantBis));
        actuel.push(this.sommeTab(actuelBis));
        return{
          courant:courant,
          actu:actuel,
        };
    },
    fluxTresoriesImp:function(fluxTresorie,tabImpotC,tabImpotA,actuel){
      var actu=[];
      var courant=[];
    courant.push(fluxTresorie.courant[0]);
    actu.push(fluxTresorie.actu[0]);

      for (var i=1;i<fluxTresorie.actu.length-1;i++){
        actu.push(fluxTresorie.actu[i]-tabImpotA[i-1]);
      }

      actu.push(this.sommeTab(actu));
        //console.log(actu)
      for (var i=1;i<fluxTresorie.courant.length-1;i++){
          courant.push(fluxTresorie.courant[i]-tabImpotC[i-1]);

      }


      courant.push(this.van(actuel/100,courant));
        return{
            courant:courant,
            actu:actu,
        };


    },
    tauxRendementInterne:function(tab){
        var taux=[];
        var tau;
        var tabBis=[];
        tabBis.push(tab[0]);

        for (var i =1;i<tab.length-1;i++){

            tabBis.push(tab[i]);
            try{
                tau=this.tri(tabBis);
            }catch (e) {
                tau=0;
            }


            if(tau<0){
                tau=0;
            }

            taux.push(tau);
        }
        //console.log(this.tri(tabBis));
        return taux;
    },
    tauxEffectifMarginaux:function(tabSi,tabAi){
        var tot=[];
        for (var i=0; i<tabSi.length;i++){
            if(tabSi[i]>0){
                tot.push(Math.round((((tabSi[i]-tabAi[i])/tabSi[i])*100)*100)/100);
            }
            else {
                tot.push(0);
            }
        }
        return tot;
    },
    pascalTriangle:function(nombrePuiss){
        retour=[];
        var lol=function (nombrePuiss) {
            var tab=[];
            if(nombrePuiss===1){
                tab.push(1);
                return tab;
            }
            if(nombrePuiss===2){
                tab.push(1);
                tab.push(1);
                return tab;
            }
            var tabPrece=lol(nombrePuiss-1);
            tab.push(1);
            for(var i=1;i<tabPrece.length;i++){
                //console.log(tabPrece[i]+tabPrece[i-1]);
                tab.push(tabPrece[i]+tabPrece[i-1]);
            }
            tab.push(1);
            return tab;
        };
        retour=lol(nombrePuiss);

        return retour;


    },
    tri:function(tab){

        var numberOfTries = 1;
        // Cash flow values must contain at least one positive value and one negative value
        var positive, negative;
        Array.prototype.slice.call(tab).forEach(function (value) {
            if (value > 0) positive = true;
            if (value < 0) negative = true;
        })
        if (!positive || !negative) throw new Error('TRI a besoin de valeur positif et negatif');
        function npv(rate) {
            numberOfTries++;
            if (numberOfTries > 1000) {
                throw new Error('IRR can\'t find a result');
            }
            var rrate = (1 + rate/100);
            var npv = tab[0];
            for (var i = 1; i < tab.length; i++) {
                npv += (tab[i] / Math.pow(rrate, i));
            }
            return npv;
        }
        return Math.round(this.seekZero(npv) * 100) / 100;
    },
    seekZero:function(fn)  {
        var x = 1;
        while (fn(x) > 0) {
            x += 1;
        }
        while (fn(x) < 0) {
            x -= 0.01
        }
        return x + 0.01;
    },
    van:function(actu, tab){
        var lol=0;
        for(var i=0;i<tab.length;i++){
            lol+=(tab[i]/Math.pow((1+actu),i));

        }
        lol= lol/(1+actu);
       // console.log(lol);
        return Math.round(lol);
    },

    sommeTab:function (tab) {
        var tot=0;
        for(var i=0;i<tab.length;i++){
            tot+=tab[i];
        }
        return tot;
    },
    divisionTabPurcent:function(tabDiv,tabDive){
        var tot=[];
        if(tabDiv.length!==tabDive.length){
            alert("lol, les tables ne sont  pas de même tailles\n"+tabDiv.length+"\n"+tabDive.length+"\ntaille tab");
            return null;
        }
        for(var i=0;i<=tabDiv.length;i++){
            //console.log(Math.round((tabDiv[i]/tabDive[i])*1000));
            tot.push(Math.round((tabDiv[i]/tabDive[i])*1000)/10);
        }
        return tot;
    }


};