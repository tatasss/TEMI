/**
 * @description This function give the Invest on the modele
 * @param {Object } mE - the firm used by the modele
 * @param {number} pibchoix - the pib want be used
 * @return {number} invest
 */
ModeleManager.prototype.investissementModele = function (mE, pibchoix) {
    return (mE.terrain + mE.construction + mE.equipement + mE.camion + mE.info + mE.bureau) * pibchoix;
};
/**
 * @description This function give the amortissement o the modele
 * @param {Object} mE - the firm used by the modele
 * @param {Object} mP - the Land used by the modele
 * @param {number} pibchoix - the pib want be used
 * @return {Array} ammort
 */
ModeleManager.prototype.ammortissment = function (mE, mP, pibchoix) {
    let amortissement = [];
    amortissement.push(fabrique.armortirModele(mE.construction * pibchoix, mP.ammort.construction, mP.ammort.coefdegressif, "Construction"));
    amortissement.push(fabrique.armortirModele(mE.equipement * pibchoix, mP.ammort.equipement, mP.ammort.coefdegressif, "Equipement"));
    amortissement.push(fabrique.armortirModele(mE.camion * pibchoix, mP.ammort.camion, mP.ammort.coefdegressif, "Camion"));
    amortissement.push(fabrique.armortirModele(mE.info * pibchoix, mP.ammort.info, mP.ammort.coefdegressif, "Informatique"));
    amortissement.push(fabrique.armortirModele(mE.bureau * pibchoix, mP.ammort.bureau, mP.ammort.coefdegressif, "Bureau"));
    return amortissement;

};
/**
 *@description This function give a general overview of the amortissement
 * @param {array} ammortissement - the array of the amortissment
 * @return {Array} amortGeneral
 */
ModeleManager.prototype.ammortGen = function (ammortissement) {
    let total = [0, 0, 0, 0, 0];
    let generalAmort = [];
    ammortissement.forEach(function (item) {
        item.chargeAmorti.forEach(function (items, index) {
            generalAmort.push(items);
            total[index] += items;
        });
        generalAmort.push("change");
    });
    total.forEach(function (item) {
        generalAmort.push(item);
    });
    return generalAmort;

};
/**
 *@description This function give the tva on petrole real
 * @param {Object } mE  - the firm used by the model
 * @param {Object} impot - the impot used on the land
 * @param {number} pibchoix - the pib want be used
 * @return {{petrole: Array, taux: Array, tva: Array}}
 */
ModeleManager.prototype.taxe_val_ajout = function (mE, impot, pibchoix) {
    let i;
//-------------------------------
    let petrole = [];
    let taux = [];
    let tva = [];
    //contribution forfaitaires

    for (i = 0; i < 5; i++) {
        petrole.push(mE.petrole * pibchoix);
    }

    for (i = 0; i < 5; i++) {
        taux.push(impot.tvaPetrole);
    }

    for (i = 0; i < 5; i++) {
        tva.push((mE.petrole * pibchoix) * (impot.tvaPetrole / 100));
    }
    if (tva.length === 6) {
        tva.pop();
    }
    return {
        petrole: petrole,
        taux: taux,
        tva: tva

    }
    //--------------------------------------
};
/**
 * @description This function give the tab Of the real price of the working force
 * @param {Object } mE  - the firm used by the model
 * @param {Object } mP  - the land used by the model
 * @param {number} pibchoix - the pib want be used
 * @param {Object} impot - the impot used on the land
 * @return {{salaire_cadre: Array, salaire_secretaire: Array, salaire_ouvrier: Array, masse_salarial: Array, tauxCfe: Array, reel_CFE: Array}}
 */
ModeleManager.prototype.contributionForfEmploie = function (mE, mP, pibchoix, impot) {
    let i;
    let salaireCadre = [];
    for (i = 0; i < 5; i++) {
        salaireCadre.push(mE.cadre * mE.indice_cadre * pibchoix);
    }
    let salaireSecretaire = [];
    for (i = 0; i < 5; i++) {
        salaireSecretaire.push(mE.secretaire * mE.indice_secretaire * pibchoix);
    }
    let salaireOuvrier = [];
    for (i = 0; i < 5; i++) {
        salaireOuvrier.push(mE.ouvrier * mE.indice_ouvrier * pibchoix);
    }
    let masseSalarial = [];
    for (i = 0; i < 5; i++) {
        masseSalarial.push(salaireCadre[i] + salaireSecretaire[i] + salaireOuvrier[i]);
    }
    let taux = [];
    for (i = 0; i < 5; i++) {
        taux.push(impot.cfe);

    }
    let reelCFE = [];
    for (i = 0; i < 5; i++) {
        reelCFE.push(masseSalarial[i] * (taux[i] / 100));
    }
    return {
        salaire_cadre: salaireCadre,
        salaire_secretaire: salaireSecretaire,
        salaire_ouvrier: salaireOuvrier,
        masse_salarial: masseSalarial,
        tauxCfe: taux,
        reel_CFE: reelCFE

    };
};
/**
 * @description this function give the real taxe Rate
 * @param {Object } mP  - the land used by the model
 * @param {Object} donne - the Donne used by the model
 * @return {{cfe: number, is: number, imf: number, irvm: number, irc: number, tvaPetrole: number}}
 */
ModeleManager.prototype.selectTaxe = function (mP, donne) {
    //console.log ("on entre")
    let cfe, is, imf, irvm, irc, tvaPetrole;
    //console.log(mP);

    if (donne.regime === "gen") {
        cfe = mP.impots.cfe;
        is = mP.impots.isImp;
        imf = mP.impots.imf;
        irvm = mP.impots.irvm;
        irc = mP.impots.irc;
        tvaPetrole = mP.impots.tva_petrole;

    }
    else {

        if (mP.investissement.duree < 5) {
            cfe = mP.impots.cfe;
            is = mP.impots.isImp;
            imf = mP.impots.imf;
            irvm = mP.impots.irvm;
            irc = mP.impots.irc;
            tvaPetrole = mP.impots.tva_petrole;
        }
        else {
            if (mP.investissement.cfe.taux != null) {
                cfe = mP.investissement.cfe.taux;
            }
            else {
                if (mP.investissement.cfe.reducexo != null) {
                    cfe = ((1 - (mP.investissement.cfe.reducexo / 100)) * (mP.impots.cfe / 100)) * 100;
                }
                else {
                    cfe = mP.impots.cfe;
                }

            }
            if (mP.investissement.isamort.taux != null) {
                is = mP.investissement.isamort.taux;
            }
            else {
                if (mP.investissement.isamort.reducexo != null) {

                    is = (((1 - (mP.investissement.isamort.reducexo / 100)) * (mP.impots.isImp / 100)) * 100);
                    //console.log((1-(mP.investissement.isamort.reducexo/100)));
                }
                else {
                    is = mP.impots.isImp;
                }

            }
            if (mP.investissement.imf.taux != null) {
                imf = mP.investissement.imf.taux;
            }
            else {
                if (mP.investissement.imf.reducexo != null) {
                    imf = ((1 - (mP.investissement.imf.reducexo / 100)) * (mP.impots.imf / 100)) * 100;
                }
                else {
                    imf = mP.impots.imf;
                }

            }
            if (mP.investissement.irvm.taux != null) {
                irvm = mP.investissement.irvm.taux;
            }
            else {
                if (mP.investissement.irvm.reducexo != null) {
                    irvm = ((1 - (mP.investissement.irvm.reducexo / 100)) * (mP.impots.irvm / 100)) * 100;
                }
                else {
                    irvm = mP.impots.irvm;
                }

            }
            if (mP.investissement.irc.taux != null) {
                irc = mP.investissement.irc.taux;
            }
            else {
                if (mP.investissement.irc.reducexo != null) {
                    irc = ((1 - (mP.investissement.irc.reducexo / 100)) * (mP.impots.irc / 100)) * 100;
                }
                else {
                    irc = mP.impots.irc;
                }

            }
            if (mP.investissement.tvaPetrole.taux != null) {
                tvaPetrole = mP.investissement.tvaPetrole.taux;
            }
            else {
                if (mP.investissement.irc.reducexo != null) {
                    tvaPetrole = ((1 - (mP.investissement.tvaPetrole.reducexo / 100)) * (mP.impots.tva_petrole / 100)) * 100;
                }
                else {
                    tvaPetrole = mP.impots.tva_petrole;
                }

            }
        }


    }
    //console.log(is);
    return {
        cfe: cfe,
        is: is,
        imf: imf,
        irvm: irvm,
        irc: irc,
        tvaPetrole: tvaPetrole,
    }

};
/**
 * @description This function give the real price of the Creance used by the modele
 * @param {Object } mE  - the firm used by the model
 * @param {Object} impot - the impot used on the land
 * @param {number} pibchoix - the pib want be used
 * @return {{chargeFinance: Array, taux: Array, irc: Array}}
 */
ModeleManager.prototype.taxe_creance = function (mE, impot, pibchoix) {
    let i;
//-------------------------------
    let chargeFin = [];
    let taux = [];
    let irc = [];
    //contribution forfaitaires

    for (i = 0; i < 5; i++) {
        chargeFin.push(mE.chargeFinanciere * pibchoix);
    }

    for (i = 0; i < 5; i++) {
        taux.push(impot.irc);
    }

    for (i = 0; i < 5; i++) {
        irc.push((mE.chargeFinanciere * pibchoix) * (impot.irc / 100));
    }

    return {
        chargeFinance: chargeFin,
        taux: taux,
        irc: irc

    }
    //--------------------------------------
};
/**
 * @description this function give the result of the comptability
 * @param {Object } mE  - the firm used by the model
 * @param {number} pibchoix - the pib want be used
 * @param {Array } tva - the tva on petrole used by the model
 * @param {Array } salaire_cadre - the real price of cadre
 * @param {Array } salaire_secretaire - the real price of secretaire
 * @param {Array } salaire_ouvrier - the real price of ouvrier
 * @param {Array } reel_CFE - the real price of Cfe
 * @param {Array } ammortissemment -the  amortissment of the model
 * @return {{vente: Array, achats: Array, petrole: Array, tva_petrole: Array, depense_entretien: Array, depense_admin: Array, depense_pub: Array, salaire_ouvrier: Array, salaire_secretaire: Array, salaire_cadre: Array, cfe: Array, chargeFinanciere: Array, amortissement: Array, benefice_comptable: Array, taux_marge_avant__IS_IMF: Array}}
 */
ModeleManager.prototype.comptableResult = function (mE, pibchoix, tva, salaire_cadre, salaire_secretaire, salaire_ouvrier, reel_CFE, ammortissemment) {
    //console.log("on entre dans compta");
    let i;
    let vente = [];
    let achats = [];
    let petrole = [];
    let tva_petrole = tva;
    let depense_admin = [];
    let depense_pub = [];
    let depense_entretien = [];
    let salaireCadre = salaire_cadre;
    let salaire_secreataire = salaire_secretaire;
    let salaireOuvrier = salaire_ouvrier;
    let CFE = reel_CFE;
    //console.log("cfe variable entrée:\n"+reel_CFE);
    //console.log("cfe variable sortie:\n"+CFE);
    let chargeFinancier = [];
    let amortissement = [];
    let benefice_comptable = [];
    let taux_marge_avant__IS_ISMF = [];

    let cpt = 0;
    ammortissemment.forEach(function (item) {
        //console.log(cpt);
        if (item === "change") {
            cpt++;
        }
        else {
            if (cpt > 4) {
                //console.log("ici");
                amortissement.push(item);
            }
        }

    });

    for (i = 0; i < 5; i++) {
        vente.push(mE.vente * pibchoix);
        achats.push(mE.achat * pibchoix);
        petrole.push(mE.petrole * pibchoix);
        depense_admin.push(mE.depenseAdministrative * pibchoix);
        depense_pub.push(mE.depensePub * pibchoix);
        depense_entretien.push(mE.depenseEntretien * pibchoix);
        chargeFinancier.push(mE.chargeFinanciere * pibchoix);

    }
    for (i = 0; i < 5; i++) {
        benefice_comptable.push(vente[i] - (achats[i] + petrole[i] + tva_petrole[i] + depense_admin[i]
            + depense_pub[i] + depense_entretien[i] + salaireCadre[i] + salaireOuvrier[i] + salaire_secreataire[i]
            + CFE[i] + chargeFinancier[i] + amortissement[i]));
        taux_marge_avant__IS_ISMF.push((benefice_comptable[i] / vente[i]) * 100);
    }
    return {
        vente: vente,
        achats: achats,
        petrole: petrole,
        tva_petrole: tva_petrole,//non
        depense_entretien: depense_entretien,
        depense_admin: depense_admin,
        depense_pub: depense_pub,
        salaire_ouvrier: salaireOuvrier,
        salaire_secretaire: salaire_secreataire,
        salaire_cadre: salaireCadre,
        cfe: CFE,//non

        chargeFinanciere: chargeFinancier,
        //fin
        amortissement: amortissement,
        benefice_comptable: benefice_comptable,
        taux_marge_avant__IS_IMF: taux_marge_avant__IS_ISMF
    };


};
/**
 *@description This function give the result of impot
 * @param {Array} benCompta - the profit of the comptability
 * @param {Array} amortExep - the amortissement Excep used by a model
 * @return {{benCompta: Array, amortExep: Array, benImpo: Array}}
 */
ModeleManager.prototype.impotResult = function (benCompta, amortExep) {
    let benImpo = [];
    for (let i = 0; i < 5; i++) {
        benImpo.push(benCompta[i] - amortExep[i]);
    }
    return {
        benCompta: benCompta,
        amortExep: amortExep,
        benImpo: benImpo,
    };
};
/**
 *@description This function give the Amortissement Exep
 * @param {Object } mP  - the land used by the model
 * @param {Array} benCompta - the profit of the comptability
 * @param {String} regime - the government used by the modem
 * @param {Object} donneRef - the Donne used by the model
 * @return {{duree: number, investissement: number, taux: number, limitation: number, dureeTab: Array, baseAmorti: Array, chargeAmorti: Array}}
 */
ModeleManager.prototype.ammortExcept = function (mP, benCompta, regime, donneRef) {
    //amortissement exceptionnel
    let i;
// console.log(donneRef);


    let investissment = (donneRef.entreprise.terrain + donneRef.entreprise.construction
        + donneRef.entreprise.equipement + donneRef.entreprise.camion + donneRef.entreprise.info
        + donneRef.entreprise.bureau) * donneRef.pays.pib;
    let taux;
    let limitation;
    let duree;
    let tDuree = [];
    let baseAmorti = [];
    let chargeAmorti = [];
    // console.log(investissment);
    if (regime === "nongen") {
        if (mP.investissement.isamort.ammortTauxEx != null) {
            taux = mP.investissement.isamort.ammortTauxEx;
        }
        else {
            taux = 0;
        }
        if (mP.investissement.isamort.ammortLimit != null) {
            limitation = mP.investissement.isamort.ammortLimit;
        }
        else {
            limitation = 0;
        }
        if (mP.investissement.isamort.duree != null) {
            duree = mP.investissement.isamort.duree;
        }
        else {
            duree = 0;
        }

    }
    else {
        taux = 0;
        limitation = 0;
        duree = 0;
    }
    tDuree.push(duree);
    for (i = 1; i < 5; i++) {
        tDuree.push(tDuree[i - 1] - 1);
        if (tDuree[i] < 0) {
            tDuree[i] = 0;
        }
    }
    baseAmorti.push(investissment * (taux / 100));
    for (i = 0; i < 5; i++) {
        if (tDuree <= 0) {
            chargeAmorti.push(0)
        }
        else {
            if (benCompta[i] <= 0) {
                chargeAmorti.push(0)
            }
            else {
                if ((limitation / 100) * benCompta[i] > baseAmorti[i]) {
                    chargeAmorti.push(baseAmorti[i]);
                }
                else {
                    chargeAmorti.push((limitation / 100) * benCompta[i]);
                }
            }
        }
        if (i < 4) {
            baseAmorti.push(baseAmorti[i] - chargeAmorti[i]);
        }

    }
    return {
        duree: duree,
        investissement: investissment,
        taux: taux,
        limitation: limitation,
        dureeTab: tDuree,
        baseAmorti: baseAmorti,
        chargeAmorti: chargeAmorti
    }
};
/**
 *@description This function give the real impot (is or imf ) paid by the Firm
 * @param {Array}  is - the real Is Impot give by the model
 * @param {Array}  imf - the real imf Impot give by the model
 * @return {Array}
 */
ModeleManager.prototype.iSIMFtab = function (is, imf) {
    let monTab = [];
    for (let i = 0; i < 5; i++) {
        if (is[i] >= imf[i]) {
            monTab.push(is[i]);
        }
        else {
            monTab.push(imf[i]);
        }
    }
    return monTab;
};
/**
 *@description  This function give the real price of all taxe paid
 * @param {number} actu - a discount rate want be used
 * @param {Object} employer - a Real Price of Working Force used by a model
 * @param {Array}  isImf -  the real IS or IMF Impot give by the model
 * @param {Array}   impotIRVM -  the real IRVM Impot give by the model
 * @param {Object} taxeCreance - the real Creance taxe used by a model
 * @param {Object} taxeAjout - the real Val Ajout taxe used by a model
 * @return {{cfe: Array, isimf: Array, irvm: Array, irc: Array, tvaPetrole: Array, total: Array}}
 */
ModeleManager.prototype.impotTaxeCourent = function (actu, employer, isImf, impotIRVM, taxeCreance, taxeAjout) {

    let cfe = [];
    let isimf = [];
    let irvm = [];
    let irc = [];
    let tvaPetrole = [];
    let total = [];
    for (let i = 0; i < 5; i++) {
        cfe.push(employer.reel_CFE[i]);
        isimf.push(isImf[i]);
        irvm.push(impotIRVM[i]);
        irc.push(taxeCreance.irc[i]);
        tvaPetrole.push(taxeAjout.tva[i]);
        total.push(cfe[i] + isimf[i] + irc[i] + irvm[i] + tvaPetrole[i]);
    }
    cfe.push(myMath.van(actu / 100, cfe));
    isimf.push(myMath.van(actu / 100, isimf));
    irvm.push(myMath.van(actu / 100, irvm));
    irc.push(myMath.van(actu / 100, irc));
    tvaPetrole.push(myMath.van(actu / 100, tvaPetrole));
    total.push(myMath.van(actu / 100, total));
    return {
        cfe: cfe,
        isimf: isimf,
        irvm: irvm,
        irc: irc,
        tvaPetrole: tvaPetrole,
        total: total
    }


};
/**
 *@description  This function give the real price of all taxe paid with actu
 * @param {number} actu - a discount rate want be used
 * @param {Object} employer - a Real Price of Working Force used by a model
 * @param {Array}  isImf -  the real IS or IMF Impot give by the model
 * @param {Array}   impotIRVM -  the real IRVM Impot give by the model
 * @param {Object} taxeCreance - the real Creance taxe used by a model
 * @param {Object} taxeAjout - the real Val Ajout taxe used by a model
 * @return {{cfe: Array, isimf: Array, irvm: Array, irc: Array, tvaPetrole: Array, total: Array}}
 */
ModeleManager.prototype.impotTaxeActu = function (actu, employer, isImf, impotIRVM, taxeCreance, taxeAjout) {
    let cfe = [];

    let isimf = [];
    let irvm = [];
    let irc = [];
    let tvaPetrole = [];
    let total = [];
    let totactu = 0;

    for (let i = 0; i < 5; i++) {
        totactu = actu[i];

        cfe.push(employer.reel_CFE[i] * (totactu / 100));
        //console.log(employer.reel_CFE[i]);
        isimf.push(isImf[i] * (totactu / 100));
        irvm.push(impotIRVM[i] * (totactu / 100));
        irc.push(taxeCreance.irc[i] * (totactu / 100));
        tvaPetrole.push(taxeAjout.tva[i] * (totactu / 100));
        total.push(cfe[i] + isimf[i] + irc[i] + irvm[i] + tvaPetrole[i]);
    }
    cfe.push(myMath.sommeTab(cfe));
    isimf.push((myMath.sommeTab(isimf)));
    irvm.push(myMath.sommeTab(irvm));
    irc.push(myMath.sommeTab(irc));
    tvaPetrole.push(myMath.sommeTab(tvaPetrole));
    total.push(myMath.sommeTab(total));


    return {
        cfe: cfe,
        isimf: isimf,
        irvm: irvm,
        irc: irc,
        tvaPetrole: tvaPetrole,
        total: total
    }

};
/**
 *@description This function give the TEMI
 * @param {number} vanSI - a NPV Without Taxe
 * @param {number} vanAI - a NPV with Taxe
 * @return {number}
 */
ModeleManager.prototype.tauxEffectif = function (vanSI, vanAI) {
    /*console.log("on entre dans taux effectif");
    console.log(vanSI);
    console.log(vanAI);
    console.log((vanSI-vanAI)/vanSI);
    console.log("on sort dans taux effectif");*/
    return ((vanSI - vanAI) / vanSI) * 100;

};
/**
 * @description This function give the cash Flow of the firm on the land without Taxe
 *  @param {Object } entreprise  - the land used by the model
 * @param {number} pin - the pib want be used
 * @param {Object} compta - The comptability result in the modele
 * @param {number} actu - a discount rate want be used
 * @return {{courant: Array, actu: Array}}
 */
ModeleManager.prototype.fluxTresoriesI = function (entreprise, pin, compta, actu) {
    let courant = [];
    let courantBis = [];
    let actuel = [];
    let actuelBis = [];
    let totactu;
    //console.log(entreprise);
    courant.push(-(entreprise.capitalSocial + entreprise.detteLongTerme + entreprise.detteCourtTerme + entreprise.detteFournisseur) * pin);
    actuel.push(-(entreprise.capitalSocial + entreprise.detteLongTerme + entreprise.detteCourtTerme + entreprise.detteFournisseur) * pin);
    compta.vente.forEach(function (item, index) {

        courant.push(item - compta.achats[index] - compta.petrole[index] - compta.depense_entretien[index]
            - compta.depense_admin[index] - compta.depense_pub[index] - compta.salaire_ouvrier[index]
            - compta.salaire_cadre[index] - compta.salaire_secretaire[index] - compta.chargeFinanciere[index]);

    });

    courantBis.push(courant[0]);
    actuelBis.push(actuel[0]);
    courant.forEach(function (item, index) {
        if (index !== 0) {
            totactu = (actu[index - 1]);
            courantBis.push(item);
            actuel.push(item * (totactu / 100));
            actuelBis.push(actuel[index]);
        }

    });

    //console.log("fluxTresoriesI fin");
    courant.push(myMath.van(entreprise.actuali / 100, courant));
    actuel.push(myMath.sommeTab(actuelBis));
    //console.log(courant);
    return {
        courant: courant,
        actu: actuel,
    };
};
/**
 *@description This function give the cash FLow of the firm in the land with taxe
 * @param {Object }  fluxTresorie - the cash FLow of the firm in the land without taxe
 * @param {Array} tabImpotC - Taxe Of the land on the firm
 * @param {Array} tabImpotA - Taxe Of the land on the firm actu
 * @param {number} actuel - a discount rate want be used
 * @return {{courant: Array, actu: Array}}
 */
ModeleManager.prototype.fluxTresoriesImp = function (fluxTresorie, tabImpotC, tabImpotA, actuel) {
    let actu = [];
    let courant = [];
    courant.push(fluxTresorie.courant[0]);
    actu.push(fluxTresorie.actu[0]);
    fluxTresorie.actu.forEach(function (item, index) {
        if (index > 0 && index < fluxTresorie.actu.length - 1) {
            actu.push(item - tabImpotA[index - 1]);
        }
    });
    fluxTresorie.courant.forEach(function (item, index) {
        if (index > 0 && index < fluxTresorie.courant.length - 1) {
            courant.push(item - tabImpotC[index - 1]);
        }
    });
    actu.push(myMath.sommeTab(actu));
    courant.push(myMath.van(actuel / 100, courant));
    return {
        courant: courant,
        actu: actu,
    };


};
/**
 *@description This function give a return rates evolution Table
 * @param {Array} tab - the array want to compute this
 * @return {Array}
 */
ModeleManager.prototype.tauxRendementInterne = function (tab) {
    let taux = [];
    let tau;
    let tabBis = [];
    tabBis.push(tab[0]);
    tab.forEach(function (item, index) {
        if (index > 0 && index < tab.length - 1) {
            tabBis.push(item);
            try {
                tau = myMath.tri(tabBis);
            } catch (e) {
                tau = 0;
            }


            if (tau < 0) {
                tau = 0;
            }

            taux.push(tau);
        }

    });

    //console.log(this.tri(tabBis));
    return taux;
};
/**
 *@description This function give the effective rate
 * @param {Array} tabSi - An Array want to be calc (cashFlow) without Taxe
 * @param {Array} tabAi -  An Array Want to be calc(cashFlow) with Taxe
 * @return {Array}
 */
ModeleManager.prototype.tauxEffectifMarginaux = function (tabSi, tabAi) {
    let tot = [];
    tabSi.forEach(function (item, index) {
        if (item > 0) {
            tot.push((((item - tabAi[index]) / item) * 100));
        }
        else {
            tot.push(0);
        }
    });
    return tot;
};


