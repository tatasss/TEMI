/**
 * @description This function is a constructor of ModelManager Class
 * @constructor
 */
let ModelManager = function () {
};
/**
 * @description This function give the Invest on the Entity
 * @param {Object } mE - the firm used by the Entity
 * @param {number} pibchoix - the pib want be used
 * @return {number} invest
 */
ModelManager.prototype.investissementModele = function (mE, pibchoix) {
    return (mE.terrain() + mE.construction() + mE.equipement() + mE.camion() + mE.info() + mE.bureau()) * pibchoix;
};
/**
 * @description This function give the amortissement o the Entity
 * @param {Object} mE - the firm used by the Entity
 * @param {Object} mP - the Land used by the Entity
 * @param {number} pibchoix - the pib want be used
 * @return {Array} amortization
 */
ModelManager.prototype.ammortissment = function (mE, mP, pibchoix) {
    let amortissement = [];
    amortissement.push(maker.armortirModele(mE.construction() * pibchoix, mP.amortization().construction(), mP.amortization().coefdegressif(), "Construction"));
    amortissement.push(maker.armortirModele(mE.equipement() * pibchoix, mP.amortization().equipement(), mP.amortization().coefdegressif(), "Equipement"));
    amortissement.push(maker.armortirModele(mE.camion() * pibchoix, mP.amortization().camion(), mP.amortization().coefdegressif(), "Camion"));
    amortissement.push(maker.armortirModele(mE.info() * pibchoix, mP.amortization().info(), mP.amortization().coefdegressif(), "Informatique"));
    amortissement.push(maker.armortirModele(mE.bureau() * pibchoix, mP.amortization().bureau(), mP.amortization().coefdegressif(), "Bureau"));
    return amortissement;
};
/**
 *@description This function give a general overview of the amortissement
 * @param {array} ammortissement - the array of the amortissment
 * @return {Array} amortGeneral
 */
ModelManager.prototype.ammortGen = function (ammortissement) {
    let total = [0, 0, 0, 0, 0];
    let generalAmort = [];
    ammortissement.forEach(function (item) {
        item.chargeAmorti().forEach(function (items, index) {
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
ModelManager.prototype.taxe_val_ajout = function (mE, impot, pibchoix) {
    let i;
    let petrole = [];
    let taux = [];
    let tva = [];
    for (i = 0; i < 5; i++) {
        petrole.push(mE.petrole() * pibchoix);
    }
    for (i = 0; i < 5; i++) {
        taux.push(impot.tvaPetrole());
    }
    for (i = 0; i < 5; i++) {
        tva.push((mE.petrole() * pibchoix) * (impot.tvaPetrole() / 100));
    }
    if (tva.length === 6) {
        tva.pop();
    }
    return {
        /**
         * @description the getter of petrole
         * @return {Array}
         */
        petrole: function () {
            return petrole;
        },
        /**
         * @description the getter of taux
         * @return {Array}
         */
        taux: function () {
            return taux;
        },
        /**
         * @description the getter of tva
         * @return {Array}
         */
        tva: function () {
            return tva;
        },
    }
};
/**
 * @description This function give the tab Of the real price of the working force
 * @param {Object } mE  - the firm used by the model
 * @param {Object } mP  - the land used by the model
 * @param {number} pibchoix - the pib want be used
 * @param {Object} impot - the impot used on the land
 * @return {{salaire_cadre: Array, salaire_secretaire: Array, salaire_ouvrier: Array, masse_salarial: Array, tauxCfe: Array, reel_CFE: Array}}
 */
ModelManager.prototype.contributionForfEmploie = function (mE, mP, pibchoix, impot) {
    let i;
    let salaireCadre = [];
    for (i = 0; i < 5; i++) {
        salaireCadre.push(mE.cadre() * mE.indice_cadre() * pibchoix);
    }
    let salaireSecretaire = [];
    for (i = 0; i < 5; i++) {
        salaireSecretaire.push(mE.secretaire() * mE.indice_secretaire() * pibchoix);
    }
    let salaireOuvrier = [];
    for (i = 0; i < 5; i++) {
        salaireOuvrier.push(mE.ouvrier() * mE.indice_ouvrier() * pibchoix);
    }
    let masseSalarial = [];
    for (i = 0; i < 5; i++) {
        masseSalarial.push(salaireCadre[i] + salaireSecretaire[i] + salaireOuvrier[i]);
    }
    let taux = [];
    for (i = 0; i < 5; i++) {
        taux.push(impot.cfe());
    }
    let reelCFE = [];
    for (i = 0; i < 5; i++) {
        reelCFE.push(masseSalarial[i] * (taux[i] / 100));
    }
    return {
        /**
         * @description the getter of salaire_cadre
         * @return {Array}
         */
        salaire_cadre: function () {
            return salaireCadre;
        },
        /**
         * @description the getter of salaire_secretaire
         * @return {Array}
         */
        salaire_secretaire: function () {
            return salaireSecretaire;
        },
        /**
         * @description the getter of salaire_ouvrier
         * @return {Array}
         */
        salaire_ouvrier: function () {
            return salaireOuvrier;
        },
        /**
         * @description the getter of masse_salarial
         * @return {Array}
         */
        masse_salarial: function () {
            return masseSalarial;
        },
        /**
         * @description the getter of tauxCfe
         * @return {Array}
         */
        tauxCfe: function () {
            return taux;
        },
        /**
         * @description the getter of reel_CFE
         * @return {Array}
         */
        reel_CFE: function () {
            return reelCFE;
        },
    };
};
/**
 * @description this function give the real taxe Rate
 * @param {Object } mP  - the land used by the model
 * @param {Object} donne - the Data used by the model
 * @return {{cfe: number, is: number, imf: number, irvm: number, irc: number, tvaPetrole: number}}
 */
ModelManager.prototype.selectTaxe = function (mP, donne) {
    let cfe, is, imf, irvm, irc, tvaPetrole;
    if (donne.government() === "gen") {
        cfe = mP.impots().cfe();
        is = mP.impots().isImp();
        imf = mP.impots().imf();
        irvm = mP.impots().irvm();
        irc = mP.impots().irc();
        tvaPetrole = mP.impots().tva_petrole();
    }
    else {
        if (mP.investment().duree < 5) {
            cfe = mP.impots().cfe();
            is = mP.impots().isImp();
            imf = mP.impots().imf();
            irvm = mP.impots().irvm();
            irc = mP.impots().irc();
            tvaPetrole = mP.impots().tva_petrole();
        }
        else {
            if (mP.investment().cfe().taux() != null) {
                cfe = mP.investment().cfe().taux();
            }
            else {
                if (mP.investment().cfe().reducexo() != null) {
                    cfe = ((1 - (mP.investment().cfe().reducexo() / 100)) * (mP.impots().cfe() / 100)) * 100;
                }
                else {
                    cfe = mP.impots().cfe();
                }
            }
            if (mP.investment().isamort().taux() != null) {
                is = mP.investment().isamort().taux();
            }
            else {
                if (mP.investment().isamort().reducexo() != null) {

                    is = (((1 - (mP.investment().isamort().reducexo() / 100)) * (mP.impots().isImp() / 100)) * 100);
                }
                else {
                    is = mP.impots().isImp();
                }
            }
            if (mP.investment().imf().taux() != null) {
                imf = mP.investment().imf().taux();
            }
            else {
                if (mP.investment().imf().reducexo() != null) {
                    imf = ((1 - (mP.investment().imf().reducexo() / 100)) * (mP.impots().imf() / 100)) * 100;
                }
                else {
                    imf = mP.impots().imf();
                }
            }
            if (mP.investment().irvm().taux() != null) {
                irvm = mP.investment().irvm().taux;
            }
            else {
                if (mP.investment().irvm().reducexo() != null) {
                    irvm = ((1 - (mP.investment().irvm().reducexo() / 100)) * (mP.impots().irvm() / 100)) * 100;
                }
                else {
                    irvm = mP.impots().irvm();
                }
            }
            if (mP.investment().irc().taux() != null) {
                irc = mP.investment().irc().taux();
            }
            else {
                if (mP.investment().irc().reducexo != null) {
                    irc = ((1 - (mP.investment().irc().reducexo() / 100)) * (mP.impots().irc() / 100)) * 100;
                }
                else {
                    irc = mP.impots().irc();
                }
            }
            if (mP.investment().tvaPetrole().taux() != null) {
                tvaPetrole = mP.investment().tvaPetrole().taux();
            }
            else {
                if (mP.investment().irc().reducexo() != null) {
                    tvaPetrole = ((1 - (mP.investment().tvaPetrole().reducexo() / 100)) * (mP.impots().tva_petrole() / 100)) * 100;
                }
                else {
                    tvaPetrole = mP.impots().tva_petrole();
                }
            }
        }
    }
    return {
        /**
         * @description the getter of cfe
         * @return {number}
         */
        cfe: function () {
            return cfe;
        },
        /**
         * @description the getter of is
         * @return {number}
         */
        is: function () {
            return is;
        },
        /**
         * @description the getter of imf
         * @return {number}
         */
        imf: function () {
            return imf;
        },
        /**
         * @description the getter of irvm
         * @return {number}
         */
        irvm: function () {
            return irvm;
        },
        /**
         * @description the getter of irc
         * @return {number}
         */
        irc: function () {
            return irc;
        },
        /**
         * @description the getter of tvaPetrole
         * @return {number}
         */
        tvaPetrole: function () {
            return tvaPetrole;
        },
    }
};
/**
 * @description This function give the real price of the Creance used by the Entity
 * @param {Object } mE  - the firm used by the model
 * @param {Object} impot - the impot used on the land
 * @param {number} pibchoix - the pib want be used
 * @return {{chargeFinance: Array, taux: Array, irc: Array}}
 */
ModelManager.prototype.taxe_creance = function (mE, impot, pibchoix) {
    let i;
    let chargeFin = [];
    let taux = [];
    let irc = [];
    for (i = 0; i < 5; i++) {
        chargeFin.push(mE.chargeFinanciere() * pibchoix);
    }
    for (i = 0; i < 5; i++) {
        taux.push(impot.irc());
    }
    for (i = 0; i < 5; i++) {
        irc.push((mE.chargeFinanciere() * pibchoix) * (impot.irc() / 100));
    }
    return {
        /**
         * @description the getter of chargeFinance
         * @return {Array}
         */
        chargeFinance: function () {
            return chargeFin;
        },
        /**
         * @description the getter of taux
         * @return {Array}
         */
        taux: function () {
            return taux;
        },
        /**
         * @description the getter of irc
         * @return {Array}
         */
        irc: function () {
            return irc;
        },
    }
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
ModelManager.prototype.comptableResult = function (mE, pibchoix, tva, salaire_cadre, salaire_secretaire, salaire_ouvrier, reel_CFE, ammortissemment) {
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
    let chargeFinancier = [];
    let amortissement = [];
    let benefice_comptable = [];
    let taux_marge_avant__IS_ISMF = [];

    let cpt = 0;
    ammortissemment.forEach(function (item) {
        if (item === "change") {
            cpt++;
        }
        else {
            if (cpt > 4) {
                amortissement.push(item);
            }
        }

    });
    for (i = 0; i < 5; i++) {
        vente.push(mE.vente() * pibchoix);
        achats.push(mE.achat() * pibchoix);
        petrole.push(mE.petrole() * pibchoix);
        depense_admin.push(mE.depenseAdministrative() * pibchoix);
        depense_pub.push(mE.depensePub() * pibchoix);
        depense_entretien.push(mE.depenseEntretien() * pibchoix);
        chargeFinancier.push(mE.chargeFinanciere() * pibchoix);

    }
    for (i = 0; i < 5; i++) {
        benefice_comptable.push(vente[i] - (achats[i] + petrole[i] + tva_petrole[i] + depense_admin[i]
            + depense_pub[i] + depense_entretien[i] + salaireCadre[i] + salaireOuvrier[i] + salaire_secreataire[i]
            + CFE[i] + chargeFinancier[i] + amortissement[i]));
        taux_marge_avant__IS_ISMF.push((benefice_comptable[i] / vente[i]) * 100);
    }
    return {
        /**
         * @description the getter of vente
         * @return {Array}
         */
        vente: function () {
            return vente;
        },
        /**
         * @description the getter of achats
         * @return {Array}
         */
        achats: function () {
            return achats;
        },
        /**
         * @description the getter of petrole
         * @return {Array}
         */
        petrole: function () {
            return petrole;
        },
        /**
         * @description the getter of tva_petrole
         * @return {Array}
         */
        tva_petrole: function () {
            return tva_petrole;
        },//non
        /**
         * @description the getter of depense-entretien
         * @return {Array}
         */
        depense_entretien: function () {
            return depense_entretien;
        },
        /**
         * @description the getter of depense_admin
         * @return {Array}
         */
        depense_admin: function () {
            return depense_admin;
        },
        /**
         * @description the getter of depense_pub
         * @return {Array}
         */
        depense_pub: function () {
            return depense_pub;
        },
        /**
         * @description the getter of salaire_ouvrier
         * @return {Array}
         */
        salaire_ouvrier: function () {
            return salaireOuvrier;
        },
        /**
         * @description the getter of salaire_secretaire
         * @return {Array}
         */
        salaire_secretaire: function () {
            return salaire_secreataire;
        },
        /**
         * @description the getter of salaire_cadre
         * @return {Array}
         */
        salaire_cadre: function () {
            return salaireCadre;
        },
        /**
         * @description the getter of cfe
         * @return {Array}
         */
        cfe: function () {
            return CFE;
        },//non
        /**
         * @description the getter of chargeFinanciere
         * @return {Array}
         */
        chargeFinanciere: function () {
            return chargeFinancier;
        },
        //fin
        /**
         * @description the getter of amortissment
         * @return {Array}
         */
        amortissement: function () {
            return amortissement;
        },
        /**
         * @description the getter of benefice_comptable
         * @return {Array}
         */
        benefice_comptable: function () {
            return benefice_comptable;
        },
        /**
         * @description the getter of taux_marge_avant__IS_IMF
         * @return {Array}
         */
        taux_marge_avant__IS_IMF: function () {
            return taux_marge_avant__IS_ISMF;
        },
    };


};
/**
 *@description This function give the result of impot
 * @param {Array} benCompta - the profit of the comptability
 * @param {Array} amortExep - the amortissement Excep used by a model
 * @return {{benCompta: Array, amortExep: Array, benImpo: Array}}
 */
ModelManager.prototype.impotResult = function (benCompta, amortExep) {
    let benImpo = [];
    for (let i = 0; i < 5; i++) {
        benImpo.push(benCompta[i] - amortExep[i]);
    }
    return {
        /**
         * @description the getter of benCompta
         * @return {Array}
         */
        benCompta: function () {
            return benCompta;
        },
        /**
         * @description the getter of amortExep
         * @return {Array}
         */
        amortExep: function () {
            return amortExep;
        },
        /**
         * @description the getter of benImpo
         * @return {Array}
         */
        benImpo: function () {
            return benImpo;
        },
    };
};
/**
 *@description This function give the Amortissement Exep
 * @param {Object } mP  - the land used by the model
 * @param {Array} benCompta - the profit of the comptability
 * @param {String} regime - the government used by the modem
 * @param {Object} donneRef - the Data used by the model
 * @return {{duree: number, investment: number, taux: number, limitation: number, dureeTab: Array, baseAmorti: Array, chargeAmorti: Array}}
 */
ModelManager.prototype.ammortExcept = function (mP, benCompta, regime, donneRef) {
    let i;
    let investissment = (donneRef.firm().terrain() + donneRef.firm().construction()
        + donneRef.firm().equipement() + donneRef.firm().camion() + donneRef.firm().info()
        + donneRef.firm().bureau()) * donneRef.land().pib;
    let taux;
    let limitation;
    let duree;
    let tDuree = [];
    let baseAmorti = [];
    let chargeAmorti = [];
    if (regime === "nongen") {
        if (mP.investment().isamort().ammortTauxEx() != null) {
            taux = mP.investment().isamort().ammortTauxEx();
        }
        else {
            taux = 0;
        }
        if (mP.investment().isamort().ammortLimit() != null) {
            limitation = mP.investment().isamort().ammortLimit();
        }
        else {
            limitation = 0;
        }
        if (mP.investment().isamort().duree() != null) {
            duree = mP.investment().isamort().duree();
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
        /**
         * @description the getter of duree
         * @return {number}
         */
        duree: function () {
            return duree;
        },
        /**
         * @description the getter of investment
         * @return {number}
         */
        investment: function () {
            return investissment;
        },
        /**
         * @description the getter of taux
         * @return {number}
         */
        taux: function () {
            return taux;
        },
        /**
         * @description the getter of limitation
         * @return {number}
         */
        limitation: function () {
            return limitation;
        },
        /**
         * @description the getter of dureeTab
         * @return {Array}
         */
        dureeTab: function () {
            return tDuree;
        },
        /**
         * @description the getter of baseAmorti
         * @return {Array}
         */
        baseAmorti: function () {
            return baseAmorti;
        },
        /**
         * @description the getter of chargeAmorti
         * @return {Array}
         */
        chargeAmorti: function () {
            return chargeAmorti;
        },
    }
};
/**
 *@description This function give the real impot (is or imf ) paid by the Firm
 * @param {Array}  is - the real Is Impot give by the model
 * @param {Array}  imf - the real imf Impot give by the model
 * @return {Array}
 */
ModelManager.prototype.iSIMFtab = function (is, imf) {
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
ModelManager.prototype.impotTaxeCourent = function (actu, employer, isImf, impotIRVM, taxeCreance, taxeAjout) {
    let cfe = [];
    let isimf = [];
    let irvm = [];
    let irc = [];
    let tvaPetrole = [];
    let total = [];
    for (let i = 0; i < 5; i++) {
        cfe.push(employer.reel_CFE()[i]);
        isimf.push(isImf[i]);
        irvm.push(impotIRVM[i]);
        irc.push(taxeCreance.irc()[i]);
        tvaPetrole.push(taxeAjout.tva()[i]);
        total.push(cfe[i] + isimf[i] + irc[i] + irvm[i] + tvaPetrole[i]);
    }
    cfe.push(myMath.van(actu / 100, cfe));
    isimf.push(myMath.van(actu / 100, isimf));
    irvm.push(myMath.van(actu / 100, irvm));
    irc.push(myMath.van(actu / 100, irc));
    tvaPetrole.push(myMath.van(actu / 100, tvaPetrole));
    total.push(myMath.van(actu / 100, total));
    return {
        /**
         * @description the getter of cfe
         * @return {Array}
         */
        cfe: function () {
            return cfe;
        },
        /**
         * @description the getter of isimf
         * @return {Array}
         */
        isimf: function () {
            return isimf;
        },
        /**
         * @description the getter of irvm
         * @return {Array}
         */
        irvm: function () {
            return irvm;
        },
        /**
         * @description the getter of irc
         * @return {Array}
         */
        irc: function () {
            return irc;
        },
        /**
         * @description the getter of tvaPetrole
         * @return {Array}
         */
        tvaPetrole: function () {
            return tvaPetrole;
        },
        /**
         * @description the getter of total
         * @return {Array}
         */
        total: function () {
            return total;
        },
    }
};
/**
 *@description  This function give the real price of all taxe paid with topic
 * @param {number} actu - a discount rate want be used
 * @param {Object} employer - a Real Price of Working Force used by a model
 * @param {Array}  isImf -  the real IS or IMF Impot give by the model
 * @param {Array}   impotIRVM -  the real IRVM Impot give by the model
 * @param {Object} taxeCreance - the real Creance taxe used by a model
 * @param {Object} taxeAjout - the real Val Ajout taxe used by a model
 * @return {{cfe: Array, isimf: Array, irvm: Array, irc: Array, tvaPetrole: Array, total: Array}}
 */
ModelManager.prototype.impotTaxeActu = function (actu, employer, isImf, impotIRVM, taxeCreance, taxeAjout) {
    let cfe = [];
    let isimf = [];
    let irvm = [];
    let irc = [];
    let tvaPetrole = [];
    let total = [];
    let totactu = 0;
    for (let i = 0; i < 5; i++) {
        totactu = actu[i];
        cfe.push(employer.reel_CFE()[i] * (totactu / 100));
        isimf.push(isImf[i] * (totactu / 100));
        irvm.push(impotIRVM[i] * (totactu / 100));
        irc.push(taxeCreance.irc()[i] * (totactu / 100));
        tvaPetrole.push(taxeAjout.tva()[i] * (totactu / 100));
        total.push(cfe[i] + isimf[i] + irc[i] + irvm[i] + tvaPetrole[i]);
    }
    cfe.push(myMath.sommeTab(cfe));
    isimf.push((myMath.sommeTab(isimf)));
    irvm.push(myMath.sommeTab(irvm));
    irc.push(myMath.sommeTab(irc));
    tvaPetrole.push(myMath.sommeTab(tvaPetrole));
    total.push(myMath.sommeTab(total));
    return {
        /**
         * @description the getter of cfe
         * @return {Array}
         */
        cfe: function () {
            return cfe;
        },
        /**
         * @description the getter of isimf
         * @return {Array}
         */
        isimf: function () {
            return isimf;
        },
        /**
         * @description the getter of irvm
         * @return {Array}
         */
        irvm: function () {
            return irvm;
        },
        /**
         * @description the getter of irc
         * @return {Array}
         */
        irc: function () {
            return irc;
        },
        /**
         * @description the getter of tvaPetrole
         * @return {Array}
         */
        tvaPetrole: function () {
            return tvaPetrole;
        },
        /**
         * @description the getter of total
         * @return {Array}
         */
        total: function () {
            return total;
        },
    }
};
/**
 *@description This function give the TEMI
 * @param {number} vanSI - a NPV Without Taxe
 * @param {number} vanAI - a NPV with Taxe
 * @return {number}
 */
ModelManager.prototype.tauxEffectif = function (vanSI, vanAI) {
    return ((vanSI - vanAI) / vanSI) * 100;
};
/**
 * @description This function give the cash Flow of the firm on the land without Taxe
 *  @param {Object } entreprise  - the land used by the model
 * @param {number} pin - the pib want be used
 * @param {Object} compta - The comptability result in the Entity
 * @param {number} actu - a discount rate want be used
 * @return {{courant: Array, topic: Array}}
 */
ModelManager.prototype.fluxTresoriesI = function (entreprise, pin, compta, actu) {
    let courant = [];
    let courantBis = [];
    let actuel = [];
    let actuelBis = [];
    let totactu;
    courant.push(-(entreprise.capitalSocial() + entreprise.detteLongTerme() + entreprise.detteCourtTerme() + entreprise.detteFournisseur()) * pin);
    actuel.push(-(entreprise.capitalSocial() + entreprise.detteLongTerme() + entreprise.detteCourtTerme() + entreprise.detteFournisseur()) * pin);
    compta.vente().forEach(function (item, index) {
        courant.push(item - compta.achats()[index] - compta.petrole()[index] - compta.depense_entretien()[index]
            - compta.depense_admin()[index] - compta.depense_pub()[index] - compta.salaire_ouvrier()[index]
            - compta.salaire_cadre()[index] - compta.salaire_secretaire()[index] - compta.chargeFinanciere()[index]);

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
    courant.push(myMath.van(entreprise.actuali() / 100, courant));
    actuel.push(myMath.sommeTab(actuelBis));
    return {
        /**
         * @description the getter of courant
         * @return {Array}
         */
        courant: function () {
            return courant;
        },
        /**
         * @description the getter of topic
         * @return {Array}
         */
        topic: function () {
            return actuel;
        },
    };
};
/**
 *@description This function give the cash FLow of the firm in the land with taxe
 * @param {Object }  fluxTresorie - the cash FLow of the firm in the land without taxe
 * @param {Array} tabImpotC - Taxe Of the land on the firm
 * @param {Array} tabImpotA - Taxe Of the land on the firm topic
 * @param {number} actuel - a discount rate want be used
 * @return {{courant: Array, topic: Array}}
 */
ModelManager.prototype.fluxTresoriesImp = function (fluxTresorie, tabImpotC, tabImpotA, actuel) {
    let actu = [];
    let courant = [];
    courant.push(fluxTresorie.courant()[0]);
    actu.push(fluxTresorie.topic()[0]);
    fluxTresorie.topic().forEach(function (item, index) {
        if (index > 0 && index < fluxTresorie.topic().length - 1) {
            actu.push(item - tabImpotA[index - 1]);
        }
    });
    fluxTresorie.courant().forEach(function (item, index) {
        if (index > 0 && index < fluxTresorie.courant().length - 1) {
            courant.push(item - tabImpotC[index - 1]);
        }
    });
    actu.push(myMath.sommeTab(actu));
    courant.push(myMath.van(actuel / 100, courant));
    return {
        /**
         * @description the getter of courant
         * @return {Array}
         */
        courant: function () {
            return courant;
        },
        /**
         * @description the getter of topic
         * @return {Array}
         */
        topic: function () {
            return actu;
        },
    };


};
/**
 *@description This function give a return rates evolution Table
 * @param {Array} tab - the array want to compute this
 * @return {Array}
 */
ModelManager.prototype.tauxRendementInterne = function (tab) {
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
ModelManager.prototype.tauxEffectifMarginaux = function (tabSi, tabAi) {
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
/**
 *@description This function give a return rates total
 * @param {Array} tab - the array want to compute this
 * @return {number}
 */
ModelManager.prototype.tauxRenInterTot=function(tab){
    let topic=[];
    let tau;
    tab.forEach(function(item,index){
        if( index < tab.length - 1){
            topic.push(item);
        }
    });
    try {
        tau = myMath.tri(topic);
    } catch (e) {
        //console.log("lol");
        tau = 0;
    }
    if (tau < 0) {
        tau = 0;
    }
    return tau;
};


/**
 * @type {ModelManager}
 */
let modelManager = new ModelManager();