
modele= function(){
    var mE=donne.entreprise;
    var mP=donne.pays;
    //console.log(donne.entreprise);
    var impotSelected=modeleManager.selectTaxe(mP);
    var pibchoix= donne.pays.pib;
	var investissement=Math.trunc(modeleManager.investissementModele(mE,pibchoix));
	var amortissement=modeleManager.ammortissment(mE,mP,pibchoix);
	var generalAmort=modeleManager.ammortGen(amortissement);
    var taxeValAjout=modeleManager.taxe_val_ajout(mE,impotSelected,pibchoix);

    var emploi=modeleManager.contributionForfEmploie(mE,mP,pibchoix,impotSelected);

    var taxeCreance=modeleManager.taxe_creance(mE,impotSelected,pibchoix);
    var resultCompta=modeleManager.comptableResult(mE,pibchoix,taxeValAjout.tva,emploi.salaire_cadre,emploi.salaire_secretaire,emploi.salaire_ouvrier,emploi.reel_CFE,generalAmort);
    var ammortExcep=modeleManager.ammortExcept(mP,resultCompta.benefice_comptable,donne.regime);
    var resultImpot=modeleManager.impotResult(resultCompta.benefice_comptable,ammortExcep.chargeAmorti);
    var impotSociete=[];
    var impotIMF=[];
    var impotIRVM=[];
    var actualisation=[];

    for (var i=0;i<5;i++){
        actualisation.push(1/Math.pow(1+(mE.actuali/100),i)*100);
       // console.log(Math.round(((1/Math.pow(1+(mE.actuali/100),i))*100)*10)/10);
    }
    for (var i=0;i<5;i++){
        impotSociete.push(resultImpot.benImpo[i]*(impotSelected.is/100));
        //console.log(resultImpot.benImpo[i]*mP.impots.isImp)
    }
    for (var i=0;i<5;i++){
        impotIMF.push(resultCompta.vente[i]*(impotSelected.imf/100));
        //console.log(resultImpot.benImpo[i]*mP.impots.isImp)
    } for (var i=0;i<5;i++){
        impotIRVM.push(resultCompta.benefice_comptable[i]*(impotSelected.irvm/100)*(mE.dividende/100));

        //console.log(impotIRVM[i]);
    }
    //console.log(emploi);
    var isimf=modeleManager.iSIMFtab(impotSociete,impotIMF);
    var impotTaxeCourent=modeleManager.impotTaxeCourent(mE.actuali,emploi,isimf,impotIRVM,taxeCreance,taxeValAjout);
    var impotTaxeActu=modeleManager.impotTaxeActu(actualisation,emploi,isimf,impotIRVM,taxeCreance,taxeValAjout);
    var fluxTresSansImp=modeleManager.fluxTresoriesI(mE,pibchoix,resultCompta,actualisation);
    //console.log("model le flux de tresorie sans imp :"+fluxTresSansImp.courant.toString());//console.log("model le flux de tresorie sans imp fin");
    var fluxTresSansISIMF=modeleManager.fluxTresoriesImp(fluxTresSansImp,impotTaxeCourent.isimf,impotTaxeActu.isimf,mE.actuali);
    //console.log("model le flux de tresorie sans ISIMF :"+fluxTresSansISIMF.courant.toString());
    var fluxTresApresImpot=modeleManager.fluxTresoriesImp(fluxTresSansImp,impotTaxeCourent.total,impotTaxeActu.total,mE.actuali);
    //console.log(fluxTresSansImp.courant);
   // console.log(fluxTresApresImpot.courant[fluxTresApresImpot.courant.length-1]);

    var tauxeffMoyC=modeleManager.tauxEffectif(fluxTresSansImp.courant[fluxTresSansImp.courant.length-1],fluxTresApresImpot.courant[fluxTresApresImpot.courant.length-1]);
    var tauxeffMoyA=modeleManager.tauxEffectif(fluxTresSansImp.actu[fluxTresSansImp.actu.length-1],fluxTresApresImpot.actu[fluxTresApresImpot.actu.length-1]);

    var tauxRendInterneSImp=modeleManager.tauxRendementInterne(fluxTresSansImp.courant);
    var tauxRendInterneSISIMF=modeleManager.tauxRendementInterne(fluxTresSansISIMF.courant);
    var tauxRendInterneAImp=modeleManager.tauxRendementInterne(fluxTresApresImpot.courant);
    var tauxEffMargImpApIsImf=modeleManager.tauxEffectifMarginaux(tauxRendInterneSImp,tauxRendInterneSISIMF);
    var tauxEffMargImpApImp=modeleManager.tauxEffectifMarginaux(tauxRendInterneSImp,tauxRendInterneAImp);
    return{
        impotSelected:impotSelected,
    	investissement:investissement,
        amortissementGeneral:generalAmort,
		amortissement:amortissement,
        taxeAjout:taxeValAjout,
		employer:emploi,
        impotIMF:impotIMF,
        impotIRVM:impotIRVM,
        ammortExcep:ammortExcep,
        taxeCreance:taxeCreance,
        resultCompta:resultCompta,
        resultImpot:resultImpot,
        actualisation:actualisation,
        impotSociete:impotSociete,
        isImf:isimf,
        impotTaxeCourent:impotTaxeCourent,
        impotTaxeActu:impotTaxeActu,
        fluxTresSansImp:fluxTresSansImp,
        tauxeffMoyCourent:tauxeffMoyC,
        tauxeffMoyActualise:tauxeffMoyA,
        fluxTresSansISIMF:fluxTresSansISIMF,
        fluxTresApresImpot:fluxTresApresImpot,
        tauxRendInterneSImp:tauxRendInterneSImp,
        tauxRendInterneSISIMF:tauxRendInterneSISIMF,
        tauxRendInterneAImp:tauxRendInterneAImp,
        tauxEffMargImpApIsImf:tauxEffMargImpApIsImf,
        tauxEffMargImpApImp:tauxEffMargImpApImp
	}

	
	
};
