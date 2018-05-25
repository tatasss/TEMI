/**
 * @description This function Keep all the ModeleData
 * @return {{impotSelected: {cfe, is, imf, irvm, irc, tvaPetrole}, investissement: number, amortissementGeneral: Array, amortissement: Array, taxeAjout: {petrole, taux, tva}, employer: {salaire_cadre, salaire_secretaire, salaire_ouvrier, masse_salarial, tauxCfe, reel_CFE}, impotIMF: Array, impotIRVM: Array, ammortExcep: {duree, investissement, taux, limitation, dureeTab, baseAmorti, chargeAmorti}, taxeCreance: {chargeFinance, taux, irc}, resultCompta: {vente, achats, petrole, tva_petrole, depense_entretien, depense_admin, depense_pub, salaire_ouvrier, salaire_secretaire, salaire_cadre, cfe, chargeFinanciere, amortissement, benefice_comptable, taux_marge_avant__IS_IMF}, resultImpot: {benCompta, amortExep, benImpo}, actualisation: Array, impotSociete: Array, isImf: Array, impotTaxeCourent: {cfe, isimf, irvm, irc, tvaPetrole, total}, impotTaxeActu: {cfe, isimf, irvm, irc, tvaPetrole, total}, fluxTresSansImp: {courant, actu}, tauxeffMoyCourent: *, fluxTresSansISIMF: {courant, actu}, fluxTresApresImpot: {courant, actu}, tauxRendInterneSImp: Array, tauxRendInterneSISIMF: Array, tauxRendInterneAImp: Array, tauxEffMargImpApIsImf: Array, tauxEffMargImpApImp: Array}}
 */
Modele.prototype.mesdon = function () {
    let mE = this.donnee.entreprise;
    let mP = this.donnee.pays;
    //console.log(donnee.entreprise);
    let impotSelected = modeleManager.selectTaxe(mP, this.donnee);
    let pibchoix = this.donnee.pays.pib;
    let investissement = Math.trunc(modeleManager.investissementModele(mE, pibchoix));
    let amortissement = modeleManager.ammortissment(mE, mP, pibchoix);
    let generalAmort = modeleManager.ammortGen(amortissement);
    let taxeValAjout = modeleManager.taxe_val_ajout(mE, impotSelected, pibchoix);

    let emploi = modeleManager.contributionForfEmploie(mE, mP, pibchoix, impotSelected);

    let taxeCreance = modeleManager.taxe_creance(mE, impotSelected, pibchoix);
    let resultCompta = modeleManager.comptableResult(mE, pibchoix, taxeValAjout.tva, emploi.salaire_cadre,
        emploi.salaire_secretaire, emploi.salaire_ouvrier, emploi.reel_CFE, generalAmort);
    let ammortExcep = modeleManager.ammortExcept(mP, resultCompta.benefice_comptable, this.donnee.regime, this.donnee);
    let resultImpot = modeleManager.impotResult(resultCompta.benefice_comptable, ammortExcep.chargeAmorti);
    let impotSociete = [];
    let impotIMF = [];
    let impotIRVM = [];
    let actualisation = [];

    for (let i = 0; i < 5; i++) {
        actualisation.push(1 / Math.pow(1 + (mE.actuali / 100), i) * 100);
        // console.log(Math.round(((1/Math.pow(1+(mE.actuali/100),i))*100)*10)/10);
    }
    let lol, lol2;
    for (let i = 0; i < 5; i++) {
        lol = resultImpot.benImpo[i];
        lol2 = (impotSelected.is / 100);
        impotSociete.push(lol * lol2);
    }
    for (let i = 0; i < 5; i++) {
        impotIMF.push(resultCompta.vente[i] * (impotSelected.imf / 100));
        //console.log(resultImpot.benImpo[i]*mP.impots.isImp)
    }
    for (let i = 0; i < 5; i++) {
        impotIRVM.push(resultCompta.benefice_comptable[i] * (impotSelected.irvm / 100) * (mE.dividende / 100));

        //console.log(impotIRVM[i]);
    }
    //console.log(emploi);
    let isimf = modeleManager.iSIMFtab(impotSociete, impotIMF);
    let impotTaxeCourent = modeleManager.impotTaxeCourent(mE.actuali, emploi, isimf, impotIRVM, taxeCreance, taxeValAjout);
    let impotTaxeActu = modeleManager.impotTaxeActu(actualisation, emploi, isimf, impotIRVM, taxeCreance, taxeValAjout);
    let fluxTresSansImp = modeleManager.fluxTresoriesI(mE, pibchoix, resultCompta, actualisation);
    //console.log("model le flux de tresorie sans imp :"+fluxTresSansImp.courant.toString());//console.log("model le flux de tresorie sans imp fin");
    let fluxTresSansISIMF = modeleManager.fluxTresoriesImp(fluxTresSansImp, impotTaxeCourent.isimf, impotTaxeActu.isimf, mE.actuali);
    //console.log("model le flux de tresorie sans ISIMF :"+fluxTresSansISIMF.courant.toString());
    let fluxTresApresImpot = modeleManager.fluxTresoriesImp(fluxTresSansImp, impotTaxeCourent.total, impotTaxeActu.total, mE.actuali);
    // console.log(taxeValAjout);

    let tauxeffMoyC = modeleManager.tauxEffectif(fluxTresSansImp.courant[fluxTresSansImp.courant.length - 1],
        fluxTresApresImpot.courant[fluxTresApresImpot.courant.length - 1]);

    let tauxRendInterneSImp = modeleManager.tauxRendementInterne(fluxTresSansImp.courant);
    let tauxRendInterneSISIMF = modeleManager.tauxRendementInterne(fluxTresSansISIMF.courant);
    let tauxRendInterneAImp = modeleManager.tauxRendementInterne(fluxTresApresImpot.courant);
    let tauxEffMargImpApIsImf = modeleManager.tauxEffectifMarginaux(tauxRendInterneSImp, tauxRendInterneSISIMF);
    let tauxEffMargImpApImp = modeleManager.tauxEffectifMarginaux(tauxRendInterneSImp, tauxRendInterneAImp);
    return {
        impotSelected: impotSelected,
        investissement: investissement,
        amortissementGeneral: generalAmort,
        amortissement: amortissement,
        taxeAjout: taxeValAjout,
        employer: emploi,
        impotIMF: impotIMF,
        impotIRVM: impotIRVM,
        ammortExcep: ammortExcep,
        taxeCreance: taxeCreance,
        resultCompta: resultCompta,
        resultImpot: resultImpot,
        actualisation: actualisation,
        impotSociete: impotSociete,
        isImf: isimf,
        impotTaxeCourent: impotTaxeCourent,
        impotTaxeActu: impotTaxeActu,
        fluxTresSansImp: fluxTresSansImp,
        tauxeffMoyCourent: tauxeffMoyC,
        fluxTresSansISIMF: fluxTresSansISIMF,
        fluxTresApresImpot: fluxTresApresImpot,
        tauxRendInterneSImp: tauxRendInterneSImp,
        tauxRendInterneSISIMF: tauxRendInterneSISIMF,
        tauxRendInterneAImp: tauxRendInterneAImp,
        tauxEffMargImpApIsImf: tauxEffMargImpApIsImf,
        tauxEffMargImpApImp: tauxEffMargImpApImp
    }


};
