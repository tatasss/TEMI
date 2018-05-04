var modeleManager= {
    investissementModele :function (mE, pibchoix) {
        return (mE.terrain + mE.construction + mE.equipement + mE.camion + mE.info + mE.bureau) * pibchoix;
    },
    ammortissment : function (mE, mP, pibchoix) {
        var amortissement = [];
        amortissement.push(fabrique.armortirModele(mE.construction * pibchoix, mP.ammort.construction, mP.ammort.coefdegressif, "construction"));
        amortissement.push(fabrique.armortirModele(mE.equipement * pibchoix, mP.ammort.equipement, mP.ammort.coefdegressif, "equipement"));
        amortissement.push(fabrique.armortirModele(mE.camion * pibchoix, mP.ammort.camion, mP.ammort.coefdegressif, "camion"));
        amortissement.push(fabrique.armortirModele(mE.info * pibchoix, mP.ammort.info, mP.ammort.coefdegressif, "informatique"));
        amortissement.push(fabrique.armortirModele(mE.bureau * pibchoix, mP.ammort.bureau, mP.ammort.coefdegressif, "bureau"));
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
            taux.push(mP.impot.tva_petrole);
        }

        for (var i = 0; i < 5; i++) {
            tva.push((mE.petrole * pibchoix) / (mP.impot.tva_petrole/100));
        }

        return{
            petrole:petrole,
            taux:taux,
            tva:tva

        }
        //--------------------------------------
    },
    contributioForfEmploie :function (mE, mP, pibchoix) {
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
            taux.push(mP.impot.cfe);
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
            taux.push(mP.impot.irc);
        }

        for (var i = 0; i < 5; i++) {
            irc.push(Math.trunc((mE.chargeFinanciere * pibchoix) / (mP.impot.irc/100)));
        }

        return{
            chargeFinance:chargeFin,
            taux:taux,
            irc:irc

        }
        //--------------------------------------
    },
   /* comptaresult : function(mE,pibchoix,mod){
        let i;
        let vente = [];
        let achats = [];
        let petrole=[];
        let tva_petrole=[];
        let depense_admin=[];
        let depense_pub=[];
        let depense_entretien=[];
        let salaire_cadre=[];
        let salaire_secreataire=[];
        let salaire_ouvrier=[];
        let CFE=[]
        let chargeFinancier=[];
        let amortissement=[];
        let benefice_comptable = [];
        let taux_marge_avant__IS_ISMF = [];
        for (i = 0; i < 5; i++) {
            vente.push(Math.trunc(mE.vente * pibchoix));
        }
        for (i = 0; i < 5; i++) {
            achats.push(Math.trunc(mE.achat * pibchoix));
        }
        for (i = 0; i < 5; i++) {
            petrole.push(Math.trunc(mE.petrole * pibchoix));
        }

        tva_petrole=mod.taxeAjout.tva;
        for (i = 0; i < 5; i++) {
            depense_admin.push(Math.trunc(mE.depenseAdministrative * pibchoix));
        }
        for (i = 0; i < 5; i++) {
            depense_pub.push(Math.trunc(mE.depensePub * pibchoix));
        }
        for (i = 0; i < 5; i++) {
            depense_entretien.push(Math.trunc(mE.depenseEntretien * pibchoix));
        }

            salaire_cadre=mod.employer.salaire_cadre;
            salaire_secreataire=mod.employer.salaire_secretaire;
            salaire_ouvrier=mod.employer.salaire_ouvrier;
            CFE=mod.employer.reel_CFE;
        for (i = 0; i < 5; i++) {
            chargeFinancier.push(Math.trunc(mE.chargeFinanciere * pibchoix));
        }
        amortissement=mod.




    }*/
}