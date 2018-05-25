/**
 *@description This function find the pib of the land with the landCode and the worldBank API
 * @param {string} code - the code of the land
 * @return {number} Pib
 */
Fabrique.prototype.pibFind = function (code) {
    let pib = 0;
    let xhr = getXMLHttpRequest();
    if (localStorage.getItem("xmlPib : " + code) !== undefined) {
        if (localStorage.getItem("xmlPib : " + code) !== null) {
            return parseFloat(localStorage.getItem("xmlPib : " + code)) * 582.79;
        }
    }
    xhr.onreadystatechange = function () {

        if (xhr.readyState === 4 && (xhr.status === 200)) {

            // console.log( xhr.responseXML.getElementsByTagName("wb:data")[0].childNodes[3].childNodes[5].firstChild.nodeValue.toString());
            //monPib=readPib(xhr.responseXML);
            try {
                if (xhr.responseXML.getElementsByTagName("wb:data")[0].childNodes[3].childNodes[5].firstChild.nodeValue.toString() === code) {
                    if (localStorage.getItem("xmlPib : " + code) === xhr.responseXML.getElementsByTagName("wb:data")[0].childNodes[5].childNodes[9].firstChild.nodeValue.toString()) {
                        return
                    }
                    localStorage.setItem("xmlPib : " + xhr.responseXML.getElementsByTagName("wb:data")[0].childNodes[3].childNodes[5].firstChild.nodeValue.toString(), xhr.responseXML.getElementsByTagName("wb:data")[0].childNodes[5].childNodes[9].firstChild.nodeValue.toString());

                }


                //console.log(xhr.responseXML.getElementsByTagName("wb:data")[0].childNodes[3].childNodes[9].firstChild.nodeValue.toString());
            } catch (e) {
                console.log("Une erreur XML de l'api de workbank est apparu");
            }


        }
    };
    //console.log(localStorage.getItem("xmlPib : "+code));

    //console.log(monPib);
    try {
        xhr.open("GET", "http://api.worldbank.org/v2/countries/" + code + "/indicators/NY.GDP.PCAP.CD", true);
        xhr.send(null);
    }
    catch (e) {

    }


    //console.log("http://api.worldbank.org/v2/countries/"+code+"/indicators/NY.GDP.MKTP.CD" + "--> "+cpt );

    if (pib === 0) {
        pib = parseFloat(localStorage.getItem("xmlPib : " + code)) * 582.79;
    }
    return pib;

};
/**
 * @Construct
 * @description The Constructor of Land
 * @param {string} code - the code of the land
 * @param {string} nom - the name of the land
 * @param {Object} impot - the impots rates of the land (cfe,is,imf,irvm,irc,tva_petrole)
 * @param {Object} ammort - the depreciation of the land
 * @param {Object} investissment - the parameters of the invest-government of the land
 * @param {string} dispoDerog - the parameters of the invest-government of the land(but texte)
 * @param {string} source - zone and government type use by firm on the land
 * @return {{pib: number, code: string, nom: string , impots: Object, ammort: Object, investissement: Object, dispoDerog: string, source: string}}
 */
Fabrique.prototype.pays = function (code, nom, impot, ammort, investissment, dispoDerog, source) {

    return {
        pib: this.pibFind(code),
        code: code,
        nom: nom,
        impots: impot,
        ammort: ammort,
        investissement: investissment,
        dispoDerog: dispoDerog,
        source: source
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
Fabrique.prototype.impot = function (cFE, iS, iMF, iRVM, iRC, tVA_Petrole) {
    return {
        cfe: cFE,
        isImp: iS,
        imf: iMF,
        irvm: iRVM,
        irc: iRC,
        tva_petrole: tVA_Petrole,
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
Fabrique.prototype.ammortissement = function (construction, equipement, coefdegressif, camion, info, bureau) {
    return {
        construction: construction,
        equipement: equipement,
        coefdegressif: coefdegressif,
        camion: camion,
        info: info,
        bureau: bureau,
    }
};
/**
 * @Construct
 * @description This function is the construct of the firm
 * @param {number} actu - the rates of the update
 * @param {number} marge - the rates of the margin
 * @return {{nom: string, terrain: number, construction: number, equipement: number, camion: number, info: number, bureau: number, stocks: number, creanceCli: number, dispoBanque: number, capitalSocial: number, detteLongTerme: number, detteCourtTerme: number, detteFournisseur: number, achat: number, petrole: number, depenseAdministrative: number, depensePub: number, depenseEntretien: number, chargeFinanciere: number, vente: number, cadre: number, secretaire: number, ouvrier: number, indice_cadre: number, indice_secretaire: number, indice_ouvrier: number, dividende: number, actuali: number}}
 */
Fabrique.prototype.entreprise = function (actu, marge) {
    return {
        nom: "Djankov",
        terrain: 30,
        construction: 40,
        equipement: 60,
        camion: 5,
        info: 5,
        bureau: 5,
        stocks: 35,
        creanceCli: 50,
        dispoBanque: 20,
        capitalSocial: 102,
        detteLongTerme: 43,
        detteCourtTerme: 55,
        detteFournisseur: 50,
        achat: Math.round(1050 / (1 + marge / 100)),
        petrole: 0,
        depenseAdministrative: 10,
        depensePub: 10.5,
        depenseEntretien: 3,
        chargeFinanciere: 5.5,
        vente: 1050,
        cadre: 4,
        secretaire: 8,
        ouvrier: 48,
        indice_cadre: 2.25,
        indice_secretaire: 1.25,
        indice_ouvrier: 1,
        dividende: 50,
        actuali: actu
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
Fabrique.prototype.investir = function (cfe, isammmort, imf, irvm, irc, tvaPetrole) {
    return {
        cfe: cfe,
        isamort: isammmort,
        imf: imf,
        irvm: irvm,
        irc: irc,
        tvaPetrole: tvaPetrole
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
Fabrique.prototype.impotPays = function (duree, taux, reductonEcume) {
    return {
        duree: duree,
        taux: taux,
        reducexo: reductonEcume
    };
};
/**
 * @constructs
 * @description The function is the construct of the ImpotPays Class
 * @param {number} duree - the time of the Impot
 * @param {number} taux - the rates of the Impot
 * @param {number} reductonEcume - the reduc of the Impot
 * @param {number} ammortTauxEx - the rate of the Impot with ammortExcep
 * @param {number} ammortLimit - the limit of the ammort
 * @return {{duree: number , taux: number , reducexo: number , ammortTauxEx: number , ammortLimit: number}}
 */
Fabrique.prototype.isImpotPays = function (duree, taux, reductonEcume, ammortTauxEx, ammortLimit) {
    return {
        duree: duree,
        taux: taux,
        reducexo: reductonEcume,
        ammortTauxEx: ammortTauxEx,
        ammortLimit: ammortLimit
    };
};
/**
 * @constructs
 * @description This function is the construct of the AmortirModele Class
 * @param {number} prix - the price u have to start the function
 * @param {number} durLin - the time of the amortissement
 * @param {number} coef - the coef of the amortissement
 * @param {string} nom - the name of the amortissement
 * @return {{dureeRestante: Array, baseAmortissable: Array, tauxLineaire: Array, tauxDegressif: Array, chargeAmorti: Array, nom: string, getHtml: (function(): string)}}
 */
Fabrique.prototype.armortirModele = function (prix, durLin, coef, nom) {
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
        dureeRestante: dureeRestante,
        baseAmortissable: baseAmortissable,
        tauxLineaire: tauxLineaire,
        tauxDegressif: tauxDegressif,
        chargeAmorti: chargeAmorti,
        nom: nom,
        /**
         * @description This function create the html code of the Amortir class
         * @return {string} html
         */
        getHtml: function () {

            let cote2 = ["Base amortissable</td><td>FCFA", "Taux unitaire</td><td>%", "Taux dégréssif</td><td>%", "Charge amortissement</td><td>FCFAS"];
            let html = "<div class='panel panel-info'><div class=\"panel-heading\">";
            let cote1 = ["Durée linéaire</td><td>Année", "Coef dégréssif</td><td>Coef"];
            let head = `<thead><tr><th>${this.nom}</th><th>FCFA</th><th class='blue'>${this.baseAmortissable[0]}</th></tr></thead>`;
            html += bootstrap.tableSE(cote1, head, {
                    tab: [this.dureeRestante[0]],
                    color: "yellow"
                },
                {
                    tab: [coefdegr],
                    color: "yellow"
                });
            html += "</div> <div class='panel-body'>";
            let head2 = "<thead><tr><th>Durée restante</th><th>Annee</th>";
            for (let i = 0; i < 5; i++) {
                head2 += `<th>${this.dureeRestante[i]}</th>`;
            }
            head2 += "</thead>";
            let tauxLin = [];
            let tauxDegr = [];
            this.tauxLineaire.forEach(function (item) {
                tauxLin.push(Math.round(item * 100) / 100);
            });
            this.tauxDegressif.forEach(function (item) {
                tauxDegr.push(Math.round(item * 100) / 100);
            });
            html += bootstrap.tableSE(cote2, head2, {
                    tab: this.baseAmortissable,
                    color: ""
                },
                {
                    tab: tauxLin,
                    color: ""
                },
                {
                    tab: tauxDegr,
                    color: ""
                },
                {
                    tab: this.chargeAmorti,
                    color: ""
                });
            html += "</div></div>";
            return html;
        }
    };
};


