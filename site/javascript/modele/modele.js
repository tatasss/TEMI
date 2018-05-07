
modele= function(){
    var mE=donne().mE;
    var mP=donne().mP;
    var pibchoix= donne().pibChoisi;
	var investissement=Math.trunc(modeleManager.investissementModele(mE,pibchoix));
	var amortissement=modeleManager.ammortissment(mE,mP,pibchoix);
	var generalAmort=modeleManager.ammortGen(amortissement);
    var taxeValAjout=modeleManager.taxe_val_ajout(mE,mP,pibchoix);
    var emploi=modeleManager.contributionForfEmploie(mE,mP,pibchoix);

    var taxeCreance=modeleManager.taxe_creance(mE,mP,pibchoix);
    var resultCompta=modeleManager.comptableResult(mE,pibchoix,taxeValAjout.tva,emploi.salaire_cadre,emploi.salaire_secretaire,emploi.salaire_ouvrier,emploi.reel_CFE,generalAmort);
    var ammortExcep=modeleManager.ammortExcept(mP,resultCompta.benefice_comptable,donne().regime);
    var resultImpot=modeleManager.impotResult(resultCompta.benefice_comptable,ammortExcep.chargeAmorti);
    var impotSociete=[];
    var impotIMF=[];
    var impotIRVM=[];
    var actualisation=[];

    for (var i=0;i<5;i++){
        actualisation.push(Math.round(((1/Math.pow(1+(mE.actuali/100),i))*100)*10)/10);
    }
    for (var i=0;i<5;i++){
        impotSociete.push(resultImpot.benImpo[i]*(mP.impots.isImp/100));
        //console.log(resultImpot.benImpo[i]*mP.impots.isImp)
    }
    for (var i=0;i<5;i++){
        impotIMF.push(Math.round(resultCompta.vente[i]*(mP.impots.imf/100)));
        //console.log(resultImpot.benImpo[i]*mP.impots.isImp)
    } for (var i=0;i<5;i++){
        impotIRVM.push(Math.round(resultCompta.benefice_comptable[i]*(mP.impots.irvm/100)*(mE.dividende/100)));

        //console.log(impotIRVM[i]);
    }
    console.log(emploi);
    var isimf=modeleManager.iSIMFtab(impotSociete,impotIMF);
    var impotTaxeCourent=modeleManager.impotTaxeCourent(emploi,isimf,impotIRVM,taxeCreance,taxeValAjout);

    return{
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
	}

	
	
}
