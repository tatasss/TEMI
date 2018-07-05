/**
 * @description This function is a constructor of Manufactor Class
 * @constructor
 */
let Manufactor = function () {
};

/**
 * @Construct
 * @description The Constructor of Land
 * @param {string} code - the code of the land
 * @param {string} name - the name of the land
 * @param {Object} tax - the tax rates of the land (cfe,is,imf,irvm,irc,tva_petrole)
 * @param {Object} amortization - the depreciation of the land
 * @param {Object} investment - the parameters of the invest-government of the land
 * @param {string} override - the parameters of the invest-government of the land(but texte)
 * @param {string} source - zone and government type use by firm on the land
 * @return {{pib: number, code: string, name: string , taxes: Object, amortization: Object, investissement: Object, override: string, source: string}}
 */
Manufactor.prototype.land = function (code, name, tax, amortization, investment, override, source) {

    return {
        pib: ref.pibFind(code),
        /**
         * @description the getter of code
         * @return {string}
         */
        code: function () {
            return code;
        },
        /**
         * @description the getter of name
         * @return {string}
         */
        name: function () {
            return name;
        },
        /**
         * @description the getter of taxes
         * @return {Object}
         */
        impots: function () {
            return tax;
        },
        /**
         * @description the getter of amortization
         * @return {Object}
         */
        amortization: function () {
            return amortization;
        },
        /**
         * @description the getter of investissement
         * @return {Object}
         */
        investment: function () {
            return investment;
        },
        /**
         * @description the getter of override
         * @return {string}
         */
        override: function () {
            return override;
        },
        /**
         * @description the getter of source
         * @return {string}
         */
        source: function () {
            return source;
        },
        toString:function () {
            return this.name()+"|"+this.code()+"|"+this.impots().toString()+"|"+this.amortization().toString()+"|"+this.investment().toString()+"|"+this.override()+"|"+this.source();
        }
    };
};
/**
 * @constructs
 * @description This function is the constructor of the Impot Class
 * @param {number} cFE - the  CFE Impot Rates
 * @param {number} iS - the IS Impot Rates
 * @param {number} iMF - the IMF Impot Rates
 * @param {number} iRVM - the IRVM Impot Rates
 * @param {number} iRC - the IRC Impot Rates
 * @param {number} tVA_Petrole - The TVA on Petrole Rates
 * @return {{cfe: number, isImp: number, imf: number, irvm: number, irc: number, tva_petrole: number}}
 */
Manufactor.prototype.impot = function (cFE, iS, iMF, iRVM, iRC, tVA_Petrole) {
    return {
        /**
         * @description the getter of cfe
         * @return {number}
         */
        cfe: function () {
            return cFE;
        },
        /**
         * @description the getter of isImp
         * @return {number}
         */
        isImp: function () {
            return iS;
        },
        /**
         * @description the getter of imf
         * @return {number}
         */
        imf: function () {
            return iMF;
        },
        /**
         * @description the getter of irvm
         * @return {number}
         */
        irvm: function () {
            return iRVM;
        },
        /**
         * @description the getter of irc
         * @return {number}
         */
        irc: function () {
            return iRC
        },
        /**
         * @description the getter of tva_petrole
         * @return {number}
         */
        tva_petrole: function () {
            return tVA_Petrole;
        },
        toString :function(){
            return "["+this.cfe()+","+this.isImp()+","+this.imf()+","+this.irvm()+","+this.irc()+","+this.tva_petrole()+"]"
        }
    }
};
/**
 * @constructs
 * @description This function is a constructor of the Ammortissement Class
 * @param {number} construction - the coef of the construct
 * @param {number} equipement - the  coef of the equipement
 * @param {number} coefdegressif - the coef declining
 * @param {number} camion - the coef of the truck
 * @param {number} info - the coef odf the hardware
 * @param {number} bureau - the coef of the office equipment
 * @return {{construction: number, equipement: number, coefdegressif: number , camion: number , info: number , bureau: number}}
 */
Manufactor.prototype.ammortissement = function (construction, equipement, coefdegressif, camion, info, bureau) {
    return {
        /**
         * @description the getter of construction
         * @return {number}
         */
        construction: function () {
            return construction;
        },
        /**
         * @description the getter of equipement
         * @return {number}
         */
        equipement: function () {
            return equipement;
        },
        /**
         * @description the getter of coefdegressif
         * @return {number}
         */
        coefdegressif: function () {
            return coefdegressif;
        },
        /**
         * @description the getter of camion
         * @return {number}
         */
        camion: function () {
            return camion;
        },
        /**
         * @description the getter of info
         * @return {number}
         */
        info: function () {
            return info;
        },
        /**
         * @description the getter of bureau
         * @return {number}
         */
        bureau: function () {
            return bureau;
        },
        toString:function(){
            return "["+this.construction()+","+this.equipement()+","+this.camion()+","+this.info()+","+this.bureau()+","+this.coefdegressif()+"]";
        }
    }
};
/**
 * @Construct
 * @description This function is the construct of the firm
 * @param {number} actu - the rates of the update
 * @param {number} marge - the rates of the margin
 * @return {{name: string, terrain: number, construction: number, equipement: number, camion: number, info: number, bureau: number, stocks: number, creanceCli: number, dispoBanque: number, capitalSocial: number, detteLongTerme: number, detteCourtTerme: number, detteFournisseur: number, achat: number, petrole: number, depenseAdministrative: number, depensePub: number, depenseEntretien: number, chargeFinanciere: number, vente: number, cadre: number, secretaire: number, ouvrier: number, indice_cadre: number, indice_secretaire: number, indice_ouvrier: number, dividende: number, actuali: number}}
 */
Manufactor.prototype.firm = function (actu, marge) {
    return {
        /**
         * @description the getter of name
         * @return {string}
         */
        name: function () {
            return "Djankov";
        },
        /**
         * @description the getter of terrain
         * @return {number}
         */
        terrain: function () {
            return 30
        },
        /**
         * @description the getter of construction
         * @return {number}
         */
        construction: function () {
            return 40;
        },
        /**
         * @description the getter of equipement
         * @return {number}
         */
        equipement: function () {
            return 60;
        },
        /**
         * @description the getter of camion
         * @return {number}
         */
        camion: function () {
            return 5;
        },
        /**
         * @description the getter of info
         * @return {number}
         */
        info: function () {
            return 5
        },
        /**
         * @description the getter of bureau
         * @return {number}
         */
        bureau: function () {
            return 5;
        },
        /**
         * @description the getter of stocks
         * @return {number}
         */
        stocks: function () {
            return 35;
        },
        /**
         * @description the getter of creanceCli
         * @return {number}
         */
        creanceCli: function () {
            return 50;
        },
        /**
         * @description the getter of dispoBanque
         * @return {number}
         */
        dispoBanque: function () {
            return 20;
        },
        /**
         * @description the getter of capitalSocial
         * @return {number}
         */
        capitalSocial: function () {
            return 102;
        },
        /**
         * @description the getter of detteLongTerme
         * @return {number}
         */
        detteLongTerme: function () {
            return 43;
        },
        /**
         * @description the getter of detteCourtTerme
         * @return {number}
         */
        detteCourtTerme: function () {
            return 55;
        },
        /**
         * @description the getter of detteFournisseur
         * @return {number}
         */
        detteFournisseur: function () {
            return 50;
        },
        /**
         * @description the getter of achat
         * @return {number}
         */
        achat: function () {
            return Math.round(1050 / (1 + marge / 100));
        },
        /**
         * @description the getter of petrole
         * @return {number}
         */
        petrole: function () {
            return 0;
        },
        /**
         * @description the getter of depenseAdministrative
         * @return {number}
         */
        depenseAdministrative: function () {
            return 10;
        },
        /**
         * @description the getter of depensePub
         * @return {number}
         */
        depensePub: function () {
            return 10.5;
        },
        /**
         * @description the getter of depenseEntretien
         * @return {number}
         */
        depenseEntretien: function () {
            return 3;
        },
        /**
         * @description the getter of chargeFinanciere
         * @return {number}
         */
        chargeFinanciere: function () {
            return 5.5;
        },
        /**
         * @description the getter of vente
         * @return {number}
         */
        vente: function () {
            return 1050;
        },
        /**
         * @description the getter of cadre
         * @return {number}
         */
        cadre: function () {
            return 4;
        },
        /**
         * @description the getter of secretaire
         * @return {number}
         */
        secretaire: function () {
            return 8;
        },
        /**
         * @description the getter of ouvrier
         * @return {number}
         */
        ouvrier: function () {
            return 48;
        },
        /**
         * @description the getter of indice_cadre
         * @return {number}
         */
        indice_cadre: function () {
            return 2.25;
        },
        /**
         * @description the getter of indice_secretaire
         * @return {number}
         */
        indice_secretaire: function () {
            return 1.25;
        },
        /**
         * @description the getter of indice_ouvrier
         * @return {number}
         */
        indice_ouvrier: function () {
            return 1;
        },
        /**
         * @description the getter of dividende
         * @return {number}
         */
        dividende: function () {
            return 50;
        },
        /**
         * @description the getter of actuali
         * @return {number}
         */
        actuali: function () {
            return actu;
        }
    }

};
/**
 * @constructs
 * @description This function is the constructor of the Investir Class
 * @param {Object} cfe - the  CFE Impot Rates
 * @param {Object} isammmort - the IS Impot Rates
 * @param {Object} imf - the IMF Impot Rates
 * @param {Object} irvm - the IRVM Impot Rates
 * @param {Object} irc - the IRC Impot Rates
 * @param {Object} tvaPetrole - The TVA on Petrole Rates
 * @return {{cfe: Object, isamort: Object, imf: Object, irvm: Object, irc: Object, tvaPetrole: Object}}
 */
Manufactor.prototype.investir = function (cfe, isammmort, imf, irvm, irc, tvaPetrole) {
    return {
        /**
         * @description the getter of cfe
         * @return {Object}
         */
        cfe: function () {
            return cfe;
        },
        /**
         * @description the getter of isamort
         * @return {Object}
         */
        isamort: function () {
            return isammmort
        },
        /**
         * @description the getter of imf
         * @return {Object}
         */
        imf: function () {
            return imf;
        },
        /**
         * @description the getter of irvm
         * @return {Object}
         */
        irvm: function () {
            return irvm;
        },
        /**
         * @description the getter of irc
         * @return {Object}
         */
        irc: function () {
            return irc;
        },
        /**
         * @description the getter of tvaPetrole
         * @return {Object}
         */
        tvaPetrole: function () {
            return tvaPetrole;
        },
        toString : function () {
            return "["+this.cfe()+","+this.isamort()+","+this.imf()+","+this.irvm()+","+this.irc()+","+this.tvaPetrole()+"]";
        }
    };
};
/**
 * @constructs
 * @description The function is the construct of the ImpotPays Class
 * @param {number} duree - the time of the Impot
 * @param {number} taux - the rates of the Impot
 * @param {number} reductonEcume - the reduc of the Impot
 * @return {{duree: number, taux:number, reducexo: number}}
 */
Manufactor.prototype.impotPays = function (duree, taux, reductonEcume) {
    return {
        /**
         * @description the getter of duree
         * @return {number}
         */
        duree: function () {
            return duree;
        },
        /**
         * @description the getter of taux
         * @return {number}
         */
        taux: function () {
            return taux;
        },
        /**
         * @description the getter of reducexo
         * @return {number}
         */
        reducexo: function () {
            return reductonEcume;
        },
        toString: function(){
            return "["+this.duree()+","+this.taux()+","+this.reducexo()+"]";
        }
    };
};
/**
 * @constructs
 * @description The function is the construct of the ImpotPays Class
 * @param {number} duree - the time of the Impot
 * @param {number} taux - the rates of the Impot
 * @param {number} reductonEcume - the reduc of the Impot
 * @param {number} ammortTauxEx - the rate of the Impot with ammortExcep
 * @param {number} ammortLimit - the limit of the amortization
 * @return {{duree: number , taux: number , reducexo: number , ammortTauxEx: number , ammortLimit: number}}
 */
Manufactor.prototype.isImpotPays = function (duree, taux, reductonEcume, ammortTauxEx, ammortLimit) {
    return {
        /**
         * @description the getter of duree
         * @return {number}
         */
        duree: function () {
            return duree;
        },
        /**
         * @description the getter of taux
         * @return {number}
         */
        taux: function () {
            return taux;
        },
        /**
         * @description the getter of reductonEcume
         * @return {number}
         */
        reducexo: function () {
            return reductonEcume;
        },
        /**
         * @description the getter of ammortTauxEx
         * @return {number}
         */
        ammortTauxEx: function () {
            return ammortTauxEx;
        },
        /**
         * @description the getter of ammortLimit
         * @return {number}
         */
        ammortLimit: function () {
            return ammortLimit;
        },
        toString: function(){
            return "["+this.duree()+","+this.taux()+","+this.reducexo()+","+this.ammortTauxEx()+","+this.ammortLimit()+"]";
        }
    };
};
/**
 * @constructs
 * @description This function is the construct of the AmortirModele Class
 * @param {number} prix - the price u have to start the function
 * @param {number} durLin - the time of the amortissement
 * @param {number} coef - the coef of the amortissement
 * @param {string} nom - the name of the amortissement
 * @return {{dureeRestante: Array, baseAmortissable: Array, tauxLineaire: Array, tauxDegressif: Array, chargeAmorti: Array, name: string, getHtml: (function(): string)}}
 */
Manufactor.prototype.armortirModele = function (prix, durLin, coef, nom) {
    let dureeRestante = [];
    let baseAmortissable = [];
    let tauxLineaire = [];
    let tauxDegressif = [];
    let chargeAmorti = [];
    let purcent;
    let coefdegr;
    if (nom === "Equipement") {
        coefdegr = coef;
    }
    else {
        coefdegr = 1;
    }
    dureeRestante.push(durLin);
    baseAmortissable.push(Math.round(prix));
    if (durLin > 0) {
        tauxLineaire.push(((1 / durLin) * 100));
    } else {
        tauxLineaire.push(0);
    }
    if (durLin === 0) {
        tauxDegressif.push(0);
    } else {
        if (tauxLineaire[0] === 100) {
            tauxDegressif.push(100);
        }
        else {
            if (coefdegr * tauxLineaire[0] > tauxLineaire[0]) {
                tauxDegressif.push((coefdegr * (tauxLineaire[0])));
            }
            else {
                tauxDegressif.push(tauxLineaire[0])
            }
        }
    }
    chargeAmorti.push(Math.round(baseAmortissable[0] * (tauxDegressif[0] / 100)));
    for (let i = 1; i < 5; i++) {

        if (dureeRestante[i - 1] > 0) {
            dureeRestante.push(dureeRestante[i - 1] - 1);
        }
        else {
            dureeRestante.push(0);
        }
        baseAmortissable.push(baseAmortissable[i - 1] - chargeAmorti[i - 1]);
        if (dureeRestante[i] > 0) {
            tauxLineaire.push(((1 / dureeRestante[i]) * 100));
        }
        else {
            tauxLineaire.push(0);
        }
        if (dureeRestante[i] === 0) {
            tauxDegressif.push(0);
        }
        else {
            if (coefdegr * tauxLineaire[0] > 100) {
                tauxDegressif.push(100);
            }
            else {
                if (coefdegr * tauxLineaire[0] > tauxLineaire[i]) {
                    tauxDegressif.push(Math.round((durLin * coefdegr) * 100) / 100);
                }
                else {
                    tauxDegressif.push(tauxLineaire[i]);
                }
            }
        }
        purcent = tauxDegressif[i] / 100;

        chargeAmorti.push(Math.trunc(baseAmortissable[i] * purcent));
    }

    return {
        /**
         * @description the getter of dureeRestante
         * @return {Array}
         */
        dureeRestante: function () {
            return dureeRestante;
        },
        /**
         * @description the getter of baseAmortissable
         * @return {Array}
         */
        baseAmortissable: function () {
            return baseAmortissable;
        },
        /**
         * @description the getter of tauxLineaire
         * @return {Array}
         */
        tauxLineaire: function () {
            return tauxLineaire;
        },
        /**
         * @description the getter of tauxDegressif
         * @return {Array}
         */
        tauxDegressif: function () {
            return tauxDegressif;
        },
        /**
         * @description the getter of chargeAmorti
         * @return {Array}
         */
        chargeAmorti: function () {
            return chargeAmorti
        },
        /**
         * @description the getter of name
         * @return {string}
         */
        name: function () {
            return nom;
        },
        /**
         * @description This function create the html code of the Amortir class
         * @return {string} html
         */
        getHtml: function () {

            let cote2 = ["Base amortissable</td><td>FCFA", "Taux unitaire</td><td>%", "Taux dégréssif</td><td>%", "Charges amortissement</td><td>FCFAS"];
            let html = "<div class='panel panel-info'><div class=\"panel-heading\">";
            let cote1 = ["Durée linéaire</td><td>Année", "Coef dégressif</td><td>Coef"];
            let head = `<thead><tr><th>${this.name()}</th><th>FCFA</th><th class='blue'>${myMath.separatorNumber(this.baseAmortissable()[0])}</th></tr></thead>`;
            html += bootstrap.tableSE(cote1, head, {
                    tab: myMath.separatorNumberArray([this.dureeRestante()[0]]),
                    color: "yellow"
                },
                {
                    tab: myMath.separatorNumberArray([coefdegr]),
                    color: "yellow"
                });
            html += "</div> <div class='panel-body'>";
            let head2 = "<thead><tr><th>Durée restante</th><th>Annee</th>";
            for (let i = 0; i < 5; i++) {
                head2 += `<th>${myMath.separatorNumber(this.dureeRestante()[i])}</th>`;
            }
            head2 += "</thead>";
            let tauxLin = [];
            let tauxDegr = [];
            this.tauxLineaire().forEach(function (item) {
                tauxLin.push(Math.round(item * 100) / 100);
            });
            this.tauxDegressif().forEach(function (item) {
                tauxDegr.push(Math.round(item * 100) / 100);
            });
            html += bootstrap.tableSE(cote2, head2, {
                    tab: myMath.separatorNumberArray(this.baseAmortissable()),
                    color: ""
                },
                {
                    tab: myMath.separatorNumberArray(tauxLin),
                    color: ""
                },
                {
                    tab: myMath.separatorNumberArray(tauxDegr),
                    color: ""
                },
                {
                    tab: myMath.separatorNumberArray(this.chargeAmorti()),
                    color: ""
                });
            html += "</div></div>";
            return html;
        }
    };
};
/**
 * @type {Manufactor}
 */
let maker = new Manufactor();
