/**
 * @description This function is a constructor of Model class
 * @param {Data} donnee - the donne used to construct the model
 * @constructor
 */
let Model = function (donnee) {
    this.donnee = donnee;
};
/**
 * @description This function Keep all the ModeleData
 * @return {{impotSelected: {cfe, is, imf, irvm, irc, tvaPetrole}, investissement: number, amortissementGeneral: Array, amortissement: Array, taxeAjout: {petrole, taux, tva}, employer: {salaire_cadre, salaire_secretaire, salaire_ouvrier, masse_salarial, tauxCfe, reel_CFE}, impotIMF: Array, impotIRVM: Array, ammortExcep: {duree, investissement, taux, limitation, dureeTab, baseAmorti, chargeAmorti}, taxeCreance: {chargeFinance, taux, irc}, resultCompta: {vente, achats, petrole, tva_petrole, depense_entretien, depense_admin, depense_pub, salaire_ouvrier, salaire_secretaire, salaire_cadre, cfe, chargeFinanciere, amortissement, benefice_comptable, taux_marge_avant__IS_IMF}, resultImpot: {benCompta, amortExep, benImpo}, actualisation: Array, impotSociete: Array, isImf: Array, impotTaxeCourent: {cfe, isimf, irvm, irc, tvaPetrole, total}, impotTaxeActu: {cfe, isimf, irvm, irc, tvaPetrole, total}, fluxTresSansImp: {courant, topic}, tauxeffMoy: *, fluxTresSansISIMF: {courant, topic}, fluxTresApresImpot: {courant, topic}, tauxRendInterneSImp: Array, tauxRendInterneSISIMF: Array, tauxRendInterneAImp: Array, tauxEffMargImpApIsImf: Array, tauxEffMargImpApImp: Array}}
 */
Model.prototype.mesdon = function () {
    let mE = this.donnee.firm();
    let mP = this.donnee.land();
    let impotSelected = modelManager.selectTaxe(mP, this.donnee);
    let pibchoix = this.donnee.land().pib;
    let investissement = Math.trunc(modelManager.investissementModele(mE, pibchoix));
    let amortissement = modelManager.ammortissment(mE, mP, pibchoix);
    let generalAmort = modelManager.ammortGen(amortissement);
    let taxeValAjout = modelManager.taxe_val_ajout(mE, impotSelected, pibchoix);
    let emploi = modelManager.contributionForfEmploie(mE, mP, pibchoix, impotSelected);
    let taxeCreance = modelManager.taxe_creance(mE, impotSelected, pibchoix);
    let resultCompta = modelManager.comptableResult(mE, pibchoix, taxeValAjout.tva(), emploi.salaire_cadre(),
        emploi.salaire_secretaire(), emploi.salaire_ouvrier(), emploi.reel_CFE(), generalAmort);
    let ammortExcep = modelManager.ammortExcept(mP, resultCompta.benefice_comptable(), this.donnee.government(), this.donnee);
    let resultImpot = modelManager.impotResult(resultCompta.benefice_comptable(), ammortExcep.chargeAmorti());
    let impotSociete = [];
    let impotIMF = [];
    let impotIRVM = [];
    let actualisation = [];
    for (let i = 0; i < 5; i++) {
        actualisation.push(1 / Math.pow(1 + (mE.actuali() / 100), i) * 100);
    }
    let lol, lol2;
    for (let i = 0; i < 5; i++) {
        lol = resultImpot.benImpo()[i];
        lol2 = (impotSelected.is() / 100);
        impotSociete.push(lol * lol2);
    }
    for (let i = 0; i < 5; i++) {
        impotIMF.push(resultCompta.vente()[i] * (impotSelected.imf() / 100));
    }
    for (let i = 0; i < 5; i++) {
        impotIRVM.push(resultCompta.benefice_comptable()[i] * (impotSelected.irvm() / 100) * (mE.dividende() / 100));
    }
    let isimf = modelManager.iSIMFtab(impotSociete, impotIMF);
    let impotTaxeCourent = modelManager.impotTaxeCourent(mE.actuali(), emploi, isimf, impotIRVM, taxeCreance, taxeValAjout);
    let impotTaxeActu = modelManager.impotTaxeActu(actualisation, emploi, isimf, impotIRVM, taxeCreance, taxeValAjout);
    let fluxTresSansImp = modelManager.fluxTresoriesI(mE, pibchoix, resultCompta, actualisation);
    let fluxTresSansISIMF = modelManager.fluxTresoriesImp(fluxTresSansImp, impotTaxeCourent.isimf(), impotTaxeActu.isimf(), mE.actuali());
    let fluxTresApresImpot = modelManager.fluxTresoriesImp(fluxTresSansImp, impotTaxeCourent.total(), impotTaxeActu.total(), mE.actuali());
    let tauxeffMoyC = modelManager.tauxEffectif(fluxTresSansImp.courant()[fluxTresSansImp.courant().length - 1],
        fluxTresApresImpot.courant()[fluxTresApresImpot.courant().length - 1]);
    let tauxRendInterneSImp = modelManager.tauxRendementInterne(fluxTresSansImp.courant());
    let tauxRendInterneSImpTot = modelManager.tauxRenInterTot(fluxTresSansImp.topic());
    let tauxRendInterneSISIMF = modelManager.tauxRendementInterne(fluxTresSansISIMF.courant());
    let tauxRendInterneSISIMFTop = modelManager.tauxRenInterTot(fluxTresSansISIMF.topic());
    let tauxRendInterneAImp = modelManager.tauxRendementInterne(fluxTresApresImpot.courant());
    let tauxRendInterneAImpTot = modelManager.tauxRenInterTot(fluxTresApresImpot.topic());
    let tauxEffMargImpApIsImf = modelManager.tauxEffectifMarginaux(tauxRendInterneSImp, tauxRendInterneSISIMF);
    let tauxEffMargImpApImp = modelManager.tauxEffectifMarginaux(tauxRendInterneSImp, tauxRendInterneAImp);
    return {
        /**
         * @description the getter of impotSelected
         * @return {{cfe: number, is: number, imf: number, irvm: number, irc: number, tvaPetrole: number}}
         */
        impotSelected: function () {
            return impotSelected;
        },
        /**
         * @description the getter of investissement
         * @return {number}
         */
        investissement: function () {
            return investissement;
        },
        /**
         * @description the getter of ammortissementGeneral
         * @return {Array}
         */
        amortissementGeneral: function () {
            return generalAmort;
        },
        /**
         * @description the getter of the getter of amortissement
         * @return {Array}
         */
        amortissement: function () {
            return amortissement;
        },
        /**
         * @description the getter of taxeAjout
         * @return {{petrole: Array, taux: Array, tva: Array}}
         */
        taxeAjout: function () {
            return taxeValAjout;
        },
        /**
         * @description the getter of employer
         * @return {{salaire_cadre: Array, salaire_secretaire: Array, salaire_ouvrier: Array, masse_salarial: Array, tauxCfe: Array, reel_CFE: Array}}
         */
        employer: function () {
            return emploi;
        },
        /**
         * @description the getter of impotIMF
         * @return {Array}
         */
        impotIMF: function () {
            return impotIMF;
        },
        /**
         * @description the getter of impotIRVM
         * @return {Array}
         */
        impotIRVM: function () {
            return impotIRVM;
        },
        /**
         * @description the getter of ammortExcep
         * @return {{duree: number, investissement: number, taux: number, limitation: number, dureeTab: Array, baseAmorti: Array, chargeAmorti: Array}}
         */
        ammortExcep: function () {
            return ammortExcep;
        },
        /**
         * @description the getter of taxe creance
         * @return {{chargeFinance: Array, taux: Array, irc: Array}}
         */
        taxeCreance: function () {
            return taxeCreance
        },
        /**
         * @description the getter of resultCompta
         * @return {{vente: Array, achats: Array, petrole: Array, tva_petrole: Array, depense_entretien: Array, depense_admin: Array, depense_pub: Array, salaire_ouvrier: Array, salaire_secretaire: Array, salaire_cadre: Array, cfe: Array, chargeFinanciere: Array, amortissement: Array, benefice_comptable: Array, taux_marge_avant__IS_IMF: Array}}
         */
        resultCompta: function () {
            return resultCompta;
        },
        /**
         * @description the getter of resultImpot
         * @return {{benCompta: Array, amortExep: Array, benImpo: Array}}
         */
        resultImpot: function () {
            return resultImpot;
        },
        /**
         * @description the getter of actualisation
         * @return {Array}
         */
        actualisation: function () {
            return actualisation;
        },
        /**
         * @description the getter of impotSociete
         * @return {Array}
         */
        impotSociete: function () {
            return impotSociete;
        },
        /**
         * @description the getter of isImf
         * @return {Array}
         */
        isImf: function () {
            return isimf;
        },
        /**
         * @description the getter of impotTaxeCourent
         * @return {{cfe: Array, isimf: Array, irvm: Array, irc: Array, tvaPetrole: Array, total: Array}}
         */
        impotTaxeCourent: function () {
            return impotTaxeCourent
        },
        /**
         * @description the getter of impotTaxeActu
         * @return {{cfe: Array, isimf: Array, irvm: Array, irc: Array, tvaPetrole: Array, total: Array}}
         */
        impotTaxeActu: function () {
            return impotTaxeActu;
        },
        /**
         * @description the getter of fluxTresSansImp
         * @return {{courant: Array, topic: Array}}
         */
        fluxTresSansImp: function () {
            return fluxTresSansImp;
        },
        /**
         * @description the getter of tauxeffMoyCourent
         * @return {number}
         */
        tauxeffMoyCourent: function () {
            return tauxeffMoyC;
        },
        /**
         * @description the getter of fluxTresSansISIMF
         * @return {{courant: Array, topic: Array}}
         */
        fluxTresSansISIMF: function () {
            return fluxTresSansISIMF;
        },
        /**
         * @description the getter of fluxTresApresImpot
         * @return {{courant: Array, topic: Array}}
         */
        fluxTresApresImpot: function () {
            return fluxTresApresImpot;
        },
        /**
         * @description the getter of tauxRendInterneSImp
         * @return {Array}
         */
        tauxRendInterneSImp: function () {
            return tauxRendInterneSImp;
        },
        /**
         * @description the getter of tauxRendInterneSImpToT
         * @return {number}
         */
        tauxRendInterneSImpTot:function(){
            return tauxRendInterneSImpTot;
        },
        /**
         * @description the getter of tauxRendInterneSISIMF
         * @return {Array}
         */
        tauxRendInterneSISIMF: function () {
            return tauxRendInterneSISIMF;
        },
        /**
         * @description the getter of tauxRendInterneSISIMFTot
         * @return {number}
         */
        tauxRendInterneSISIMFTot: function () {
            return tauxRendInterneSISIMFTop;
        },
        /**
         * @description the getter of tauxRendInterneAImp
         * @return {Array}
         */
        tauxRendInterneAImp: function () {
            return tauxRendInterneAImp;
        },
        /**
         * @description the getter of tauxRendInterneAImpTot
         * @return {number}
         */
        tauxRendInterneAImpTot: function () {
            return tauxRendInterneAImpTot;
        },
        /**
         * @description the getter of tauxEffMArgImpApIsIMF
         * @return {Array}
         */
        tauxEffMargImpApIsImf: function () {
            return tauxEffMargImpApIsImf;
        },
        /**
         * @description the getter of tauxEffMargImpApImp
         * @return {Array}
         */
        tauxEffMargImpApImp: function () {
            return tauxEffMargImpApImp;
        }
    }
};