/**
 * @description This function create a html to resultat in the index
 * @param {string} regime - the government choose by the user
 * @return {string}
 */
GenererVue.prototype.resultatHtml = function (regime) {
    //mis en place du tableaux des resultat
    let impotStatDuree = [];
    if (regime === "gen") {
        for (let i = 0; i < 5; i++) {
            impotStatDuree.push(" ");
        }
    }
    else {

    }

    let head = "<thead><tr><th/><th colspan=3 align=center>Taux statuaire</th><th colspan=2>Taux effectifs marginaux</th></tr>";
    head += "<tr><th/><th>Taux plein</th><th>Taux reduit</th><th>Durée</th><th>First Year</th><th>Five Year</th></tr></thead>";
    let cfe = this.recupDonneTab(false, this.modele.donnee.pays.investissement.cfe, this.modele.donnee.pays.impots.cfe,
        false, false, false);
    let is = this.recupDonneTab(false, this.modele.donnee.pays.investissement.isamort,
        this.modele.donnee.pays.impots.isImp, true, false, false);
    let imf = this.recupDonneTab(false, this.modele.donnee.pays.investissement.imf, this.modele.donnee.pays.impots.imf,
        false, true, false);
    let irvm = this.recupDonneTab(false, this.modele.donnee.pays.investissement.irvm,
        this.modele.donnee.pays.impots.irvm, false, false, false);
    let irc = this.recupDonneTab(false, this.modele.donnee.pays.investissement.irc, this.modele.donnee.pays.impots.irc,
        false, false, false);
    let tva = this.recupDonneTab(false, this.modele.donnee.pays.investissement.tvaPetrole,
        this.modele.donnee.pays.impots.tva_petrole, false, false, false);
    let tot = this.recupDonneTab(this.modele.mesdon().tauxeffMoyCourent, this.modele.donnee.pays.investissement.total,
        this.modele.donnee.pays.impots.imf, false, false, true);
    let bodyTest = bootstrap.tableSE(
        [`CFE</td><td>${this.modele.donnee.pays.impots.cfe}`, `IS</td><td class=\"fontred\">${this.mP.impots.isImp}`,
            `IMF</td><td class=\"fontred\">${this.mP.impots.imf}`, `IRVM</td><td>${this.mP.impots.irvm}`,
            `IRC</td><td>${this.mP.impots.irc}`, `TVA Petrole</td><td>${this.mP.impots.tva_petrole}`, "total</td><td>"],
        head,
        {
            tab: cfe,
            color: ""
        },
        {
            tab: is,
            color: "",
            font_color: "red",
            numTabdep: 0
        },
        {
            tab: imf,
            color: "",
            font_color: "red",
            numTabdep: 0
        },
        {
            tab: irvm,
            color: ""
        },
        {
            tab: irc,
            color: ""
        },
        {
            tab: tva,
            color: ""
        },
        {
            tab: tot,
            color: ""
        });
    let pannelTab = bootstrap.pan("default", null, bodyTest);
    return this.investissementRegime() + bootstrap.pan("default", "<h1>Resultat</h1>", pannelTab);

};
/**
 * @description This function create a tab for resultatHtml
 * @param {Array} effMoy - the mean effectif tab
 * @param {Object} impDonne - the Impot of the land
 * @param {number} donneImp - the Impot Rate
 * @param {Boolean} isIs - Defined if the impot is IS
 * @param {Boolean } isImf - Defined if the impot is IMF
 * @param {Boolean} isTot -Defined If we make A total Row
 * @return {Array}
 */
GenererVue.prototype.recupDonneTab = function (effMoy, impDonne, donneImp, isIs, isImf, isTot) {
    let result = [];
    if (isTot) {
        result.push(null);
        result.push(null);
        /*result.push( effMoy[0]);
        result .push(effMoy[effMoy.length - 1]);*/
        result.push(this.modele.mesdon().tauxEffMargImpApImp[0]);
        result.push(this.modele.mesdon().tauxEffMargImpApImp[this.modele.mesdon().tauxEffMargImpApImp.length - 1]);
        return result;
    }
    else {
        if (this.modele.donnee.regime !== "Gen") {
            if (impDonne.taux != null) {
                result.push(impDonne.taux);
            }
            else {
                if (impDonne.reducexo != null) {
                    result.push(((1 - (impDonne.reducexo / 100)) * (donneImp / 100)) * 100);
                    // console.log(donneImp);
                }
                else {
                    result.push(null);
                    result.push(null);
                }
            }
            if (impDonne.taux != null || impDonne.reducexo != null) {
                result.push(impDonne.duree);
            }
        }
        if (isIs) {
            /*result.push(effMoy[0]);
            result.push(effMoy[effMoy.length - 1]);*/
            result.push(this.modele.mesdon().tauxEffMargImpApIsImf[0]);
            result.push(this.modele.mesdon().tauxEffMargImpApIsImf[this.modele.mesdon().tauxEffMargImpApIsImf.length - 1]);
        }
        else {
            if (!isImf) {
                /*result.push(effMoy[0]);
                result.push( effMoy[effMoy.length - 1]);*/
                result.push(null);
                result.push(null);
            }
        }
        return result;
    }
};
/**
 * @description This function create a html to give the gdp on the pays
 * @param {Object} pays - The name of the land
 * @return {string}
 */
GenererVue.prototype.pinbHTML = function (pays) {

    return `<p>Le PIB par tête dans le pays ${pays} est de : ${Math.round(this.mP.pib)} FCFA</p>`;
};
/**
 * @description This function creat a html to give a firm information
 * @return {string}
 */
GenererVue.prototype.entrepriseHTML = function () {
    let result = "<p>L'entreprise simulée est supposée être localisée dans la plus grande ville du pays, employer "
        + (this.mE.cadre + this.mE.secretaire + this.mE.ouvrier) + " salariés et vendre la totalité de sa " +
        "production sur le marché local. ";
    result += "<br/>Elles comporte donc " + this.mE.cadre + " cadre(s) dont l'indice salarial est de "
        + this.mE.indice_cadre;
    result += " , " + this.mE.secretaire + " secrétaire(s) dont l'indice salarial est de " + this.mE.indice_secretaire;
    result += " , " + this.mE.ouvrier + " ouvrier(s) dont l'indice salarial est de " + this.mE.indice_ouvrier + ".";
    result += "<br/>Elle verse " + this.mE.dividende + "% de ces bénéfices dans les dividendes";
    result += "<br/>Elle a un taux d'actualisation de " + this.mE.actuali + " %";
    result += "</p>";
    return result;
};
/**
 * @description This function create a html to give a bilan Array on the firm used by the modele
 * @return {string}
 */
GenererVue.prototype.bilanHtml = function () {
    let actif = this.mE.terrain + this.mE.construction + this.mE.equipement + this.mE.camion + this.mE.info +
        this.mE.bureau + this.mE.stocks + this.mE.creanceCli + this.mE.dispoBanque;
    let passif = this.mE.capitalSocial + this.mE.detteLongTerme +
        this.mE.detteCourtTerme + this.mE.detteFournisseur;
    let col1 = ["<span style='font-size: smaller; '><strong>Actif immobilisé</strong></span>",
        "Terrain", "Constructions", "Equipement", "Camion", "Matériel informatique", "Matériel de Bureau",
        "<span style='font-size: smaller; '><strong>Actif circulant</strong></span>", "Stocks", "Creances Clients",
        "Disponibilités bancaires", "<strong>Actif</strong>"];
    let lin1 = {
        tab: [null, "<strong>Capitaux propre</strong>", null],
        color: ""
    };
    let lin2 = {
        tab: [this.mE.terrain, "Capital social", this.mE.capitalSocial],
        color: ""
    };
    let lin3 = {
        tab: [this.mE.construction, null, null],
        color: ""
    };
    let lin4 = {
        tab: [this.mE.equipement, null, null],
        color: ""
    };
    let lin5 = {
        tab: [this.mE.camion, null, null],
        color: ""
    };
    let lin6 = {
        tab: [this.mE.info, null, null],
        color: ""
    };
    let lin7 = {
        tab: [this.mE.bureau, null, null],
        color: ""
    };
    let lin8 = {
        tab: [null, "<strong><span style='font-size: smaller; '>Dettes</span></strong>", null],
        color: ""
    };
    let lin9 = {
        tab: [this.mE.stocks, "Dettes long terme", this.mE.detteLongTerme],
        color: ""
    };
    let lin10 = {
        tab: [this.mE.creanceCli, "Dettes court terme", this.mE.detteCourtTerme],
        color: ""
    };
    let lin11 = {
        tab: [this.mE.dispoBanque, "Dettes fournisseurs", this.mE.detteFournisseur],
        color: ""
    };
    let lin12 = {
        tab: [`<strong>${actif}</strong>`, "<strong>passif</strong>", passif],
        color: ""
    };
    let head = "<thead><tr><th colspan=3> Bilan à l'ouverture<th/><tr/><tr><th colspan=2>Actif</th><th colspan=2>Passif</th></tr></thead>";
    let tab = bootstrap.tableSE(col1, head, lin1, lin2, lin3, lin4, lin5, lin6, lin7, lin8, lin9, lin10, lin11, lin12);
    return bootstrap.pan("default", null, tab);
};
/**
 * @description This function create a html to give a compte Array of the firm used to create a model
 * @return {string}
 */
GenererVue.prototype.compteHtml = function () {
    let cote = ["Achats", "Petrole", "Depenses administratives", "Depenses publicitaires", "Depenses d'entretien",
        "<strong>Impôts et taxes</strong>", "<strong>Masse Salariale</strong>", "Cadres", "Secrétaires", "Ouvriers",
        "<strong>Charges financières</strong>", "Charges financières", "<strong>Amortissement</strong>"];
    let head = "<thead><tr><th colspan=3> Compte de résultat<th/></tr><tr><th colspan=2>Charges</th><th colspan=2>Produit</th></tr></thead>";
    let lin0 = {
        tab: [this.mE.achat, "Ventes", this.mE.vente],
        color: ""
    };
    let lin1 = {
        tab: [this.mE.petrole, null, null],
        color: ""
    };
    let lin2 = {
        tab: [this.mE.depenseAdministrative, null, null],
        color: ""
    };
    let lin3 = {
        tab: [this.mE.depensePub, null, null],
        color: ""
    };
    let lin4 = {
        tab: [this.mE.depenseEntretien, null, null],
        color: ""
    };
    let lin5 = {
        tab: [null, null, null],
        color: ""
    };
    let lin6 = {
        tab: [null, null, null],
        color: ""
    };
    let lin7 = {
        tab: [this.mE.cadre, null, null],
        color: ""
    };
    let lin8 = {
        tab: [this.mE.secretaire, null, null],
        color: ""
    };
    let lin9 = {
        tab: [this.mE.ouvrier, null, null],
        color: ""
    };
    let lin10 = {
        tab: [null, null, null],
        color: ""
    };
    let lin11 = {
        tab: [this.mE.chargeFinanciere, null, null],
        color: ""
    };
    let lin12 = {
        tab: [null, null, null],
        color: ""
    };

    let tab = bootstrap.tableSE(cote, head, lin0, lin1, lin2, lin3, lin4, lin5, lin6, lin7, lin8, lin9, lin10, lin11, lin12);
    return bootstrap.pan("default", null, tab);
};
/**
 * @description This function create a html to give A economic data
 * @param {number} pin - the Pib of the land choose to make a model
 * @param {String} pays - the name of the land choose to make a model
 * @return {string}
 */
GenererVue.prototype.donneesEconomique = function (pin, pays) {
    let result = this.pinbHTML(pin, pays);
    result += this.entrepriseHTML();
    result += this.bilanHtml();
    result += this.compteHtml(this.modele.donnee);
    return bootstrap.pan("default", "<h1>Données economiques</h1>", result);
};
/**
 * @description This function create a html to give the Impot of the land
 * @param {Object} monm - The modele use
 * @return {string}
 */
GenererVue.prototype.ImpotHtml = function (monm) {
    let head = "<thead><tr><th colspan=5> Impot<th/></tr>";
    head += "<tr><th/><th>1</th><th>2</th><th>3</th><th>4</th><th>5</th></tr>";
    head += "</thead>";
    let cfe = [];
    let is = [];
    let imf = [];
    let irvm = [];
    let irc = [];
    let tva = [];
    for (let i = 0; i < 5; i++) {
        cfe.push(monm.impotSelected.cfe + "%");
        is.push(monm.impotSelected.is + "%");
        imf.push(monm.impotSelected.imf + "%");
        irvm.push(monm.impotSelected.irvm + "%");
        irc.push(monm.impotSelected.irc + "%");
        tva.push(monm.impotSelected.tvaPetrole + "%");
    }
    let cote = ["CFE", "IS", "IMF", "IRVM", "IRC", "TVA Petrole"];
    return bootstrap.tableSE(cote, head, {
            tab: cfe,
            color: ""
        },
        {
            tab: is,
            color: ""
        },
        {
            tab: imf,
            color: ""
        },
        {
            tab: irvm,
            color: ""
        },
        {
            tab: irc,
            color: ""
        }, {
            tab: tva,
            color: ""
        });
};
/**
 * @description This function create the HTML to ammortissement
 * @return {string}
 */
GenererVue.prototype.amortissementHtml = function () {
    let head = "<thead><tr><th colspan=2> Amortissement<th/></tr><tr><th/><th>Durée Linéaire</th><th>Coef dégressif</th></tr></thead>";
    let cote = ["Construction", "Equipement", "Camion", "Matériel informatique", "Matériel bureau"];
    let lin1 = {
        tab: [this.mP.ammort.construction, this.mP.ammort.coefdegressif],
        color: ""
    };
    let lin2 = {
        tab: [this.mP.ammort.equipement, this.mP.ammort.coefdegressif],
        color: ""
    };
    let lin3 = {
        tab: [this.mP.ammort.camion, this.mP.ammort.coefdegressif],
        color: ""
    };
    let lin4 = {
        tab: [this.mP.ammort.info, this.mP.ammort.coefdegressif],
        color: ""
    };
    let lin5 = {
        tab: [this.mP.ammort.bureau, this.mP.ammort.coefdegressif],
        color: ""
    };
    let tab = bootstrap.tableSE(cote, head, lin1, lin2, lin3, lin4, lin5);
    return bootstrap.pan("default", null, tab);
};
/**
 * @description This function create the HTML to ammortissement Excep
 * @return {string}
 */
GenererVue.prototype.amortiExcepHTML = function () {
    return "<p> Pour les amortissements exceptionnels, le taux depend de l'investissement, il y a une limitation par" +
        " rapport au bénéfice annuel et l'unité de la durée est l'année</p>";

};
/**
 * @description This function create the HTML to give a Fiscal Data
 * @return {string}
 */
GenererVue.prototype.donneesFiscal = function () {
    //mis en place des données fiscales

    //fin
    let pannelBody = bootstrap.pan("default", null, this.ImpotHtml(this.modele.mesdon()));
    pannelBody += this.amortissementHtml();
    pannelBody += this.amortiExcepHTML();
    return bootstrap.pan("default", "<h1>données fiscales</h1>", pannelBody);
};
/**
 * @description This function create a  HTML to make a body
 * @param {float} pin - the PIB of the land choose
 * @param {string} pays - the name of the land
 * @param {string} regimE - the government of the model
 * @return {string}
 */
GenererVue.prototype.bodyHtml = function (pin, pays, regimE) {
    let bodyglo = this.resultatHtml(regimE);
    bodyglo += this.donneesEconomique(pin, pays, regimE);
    bodyglo += this.donneesFiscal();
    return bodyglo;

};
/**
 * @description This function create the HTML to give the parameters and make any Button to navigate on the Modele DATA
 * @param {string} pays - the name of the land
 * @param {string} regimE - the government of the model
 * @param {float} actu - the actu rates
 * @param {float} marge -teh margin Rates
 * @return {string}
 */
GenererVue.prototype.navigationHtml = function (pays, regimE, actu, marge) {
    let regime;
    if (regimE === "gen") {
        regime = "code général des impots";
    }
    else {
        regime = "code des investissements";
    }
    let pannel = bootstrap.pan("default", "Paramétres", ref.donnerNomPays(pays) + "<br/>" + regime + "</br>" + actu + "</br>" + marge);
    let result = "<div class='vertical-menu'>" + pannel;
    result += bootstrap.buttonBalA("./model.html", "voir résultat");
    result += bootstrap.buttonBalA("./index.html", "retour") + "</div>";
    return result;
};
/**
 * @description This function is the main to create a Data modele View on html
 * @param {string} pays - the name of the land
 * @param {string} regimE - the government of the model
 * @param {float} actu - the actu rates
 * @param {float} marge -teh margin Rates
 * @return {string}
 */
GenererVue.prototype.mainHTML = function (pays, regimE, actu, marge) {
    this.mP = this.modele.donnee.pays;
    this.mE = this.modele.donnee.entreprise;
    return bootstrap.container(bootstrap.GridNavCote(this.bodyHtml(this.mP.nom, regimE), this.navigationHtml(pays, regimE, actu, marge)));
};
/**
 * @description This function create a HTML to the petrole Tva Taxe on modele
 * @param {Object} taxeAjout -the Taxe Ajout on the model
 * @return {string}
 */
GenererVue.prototype.petroleHtml = function (taxeAjout) {
    let cote = ["Pétrole</td><td>FCFA", "Taux</td><td>%", "TVA Petrole</td><td>FCFA"];
    let tab = bootstrap.tableSE(cote, null, {tab: taxeAjout.petrole, color: "blue"}, {
            tab: taxeAjout.taux,
            color: "yellow"
        },
        {
            tab: taxeAjout.tva,
            color: ""
        });
    return bootstrap.pan("default", null, tab);
};
/**
 * @description This function create a HTML for the Financial Taxe
 * @param {Object }taxeAjout - the charge Finance Modele Object
 * @return {string}
 */
GenererVue.prototype.chargeFinancierHtml = function (taxeAjout) {
    let cote = ["Charges financiéres</td><td>FCFA", "Taux</td><td>%", "IRC</td><td>FCFA"];
    let tab = bootstrap.tableSE(cote, null, {
            tab: myMath.arrondirTabUnit(taxeAjout.chargeFinance),
            color: "blue"
        },
        {
            tab: myMath.arrondirTabUnit(taxeAjout.taux, 2),
            color: "yellow"
        },
        {
            tab: myMath.arrondirTabUnit(taxeAjout.irc),
            color: ""
        });
    return bootstrap.pan("default", null, tab);
};
/**
 * @description This function create the HTML to give the REAL cost on working force
 * @param {Object} monm - the modele used to create the view
 * @return {string}
 */
GenererVue.prototype.emploieHtml = function (monm) {
    let cote = ["Salaire des cadres</td><td>FCFA", "Salaire des secrétaires</td><td>FCFA", "Salaire des ouvriers</td><td>FCFA"];
    cote.push("Masse Salariale</td><td>FCFA");
    cote.push("Taux</td><td>%");
    cote.push("CFE</td><td>FCFA");
    let tab = bootstrap.tableSE(cote, null,
        {
            tab: myMath.arrondirTabUnit(monm.employer.salaire_cadre, 0),
            color: "blue"
        },
        {
            tab: myMath.arrondirTabUnit(monm.employer.salaire_secretaire),
            color: "blue"
        },
        {
            tab: myMath.arrondirTabUnit(monm.employer.salaire_ouvrier),
            color: "blue"
        },
        {
            tab: myMath.arrondirTabUnit(monm.employer.masse_salarial),
            color: ""
        },
        {
            tab: myMath.arrondirTabUnit(monm.employer.tauxCfe, 2),
            color: "yellow"
        },
        {
            tab: myMath.arrondirTabUnit(monm.employer.reel_CFE),
            color: ""
        });
    return bootstrap.pan("default", null, tab);
};
/**
 * @description This function create the HTML to give the Comptability Result Array
 * @param {Object} monm - The modele used to create a view
 * @return {string}
 */
GenererVue.prototype.comptableHtml = function (monm) {
    let cote = ["Vente</td><td class=\"bottomBorder\">FCFA"];
    cote.push("Achats</td><td>FCFA");
    cote.push("Pétrole</td><td>FCFA");
    cote.push("TVA pétrole</td><td>FCFA");
    cote.push("Dépenses administratives</td><td>FCFA");
    cote.push("Dépenses publicitaires</td><td>FCFA");
    cote.push("Dépenses d'entretien</td><td class=\"bottomBorder\">FCFA");
    cote.push("Salaires des cadres</td><td>FCFA");
    cote.push("Salaires des secrétaires</td><td>FCFA");
    cote.push("Salaires des ouvriers</td><td>FCFA");
    cote.push("CFE</td><td class=\"bottomBorder\">FCFA");
    cote.push("Charges financières</td><td class=\"bottomBorder\">FCFA");
    cote.push("Amortissement</td><td class=\"bottomBorder\">FCFA");
    cote.push("Bénéfice comptable</td><td>FCFA");
    cote.push("Taux de marge  avant IS/IMF</td><td>%CA");
    let tab = bootstrap.tableSE(cote, null,
        {
            tab: myMath.arrondirTabUnit(monm.resultCompta.vente),
            color: "blue",
            bottomBorder: "true"
        },
        {
            tab: myMath.arrondirTabUnit(monm.resultCompta.achats),
            color: "blue"
        },
        {
            tab: myMath.arrondirTabUnit(monm.resultCompta.petrole),
            color: "blue"
        },
        {
            tab: myMath.arrondirTabUnit(monm.resultCompta.tva_petrole),
            color: ""
        },
        {
            tab: myMath.arrondirTabUnit(monm.resultCompta.depense_admin),
            color: "blue"
        },
        {
            tab: myMath.arrondirTabUnit(monm.resultCompta.depense_pub),
            color: "blue"
        },
        {
            tab: myMath.arrondirTabUnit(monm.resultCompta.depense_entretien),
            color: "blue",
            bottomBorder: "true"
        },
        {
            tab: myMath.arrondirTabUnit(monm.resultCompta.salaire_cadre),
            color: "blue"
        },
        {
            tab: myMath.arrondirTabUnit(monm.resultCompta.salaire_secretaire),
            color: "blue"
        },
        {
            tab: myMath.arrondirTabUnit(monm.resultCompta.salaire_ouvrier),
            color: "blue"
        },
        {
            tab: myMath.arrondirTabUnit(monm.resultCompta.cfe),
            color: "",
            bottomBorder: "true"
        },
        {
            tab: myMath.arrondirTabUnit(monm.resultCompta.chargeFinanciere),
            color: "blue",
            bottomBorder: "true"
        },
        {
            tab: myMath.arrondirTabUnit(monm.resultCompta.amortissement),
            color: "",
            bottomBorder: "true"
        },
        {
            tab: myMath.arrondirTabUnit(monm.resultCompta.benefice_comptable),
            color: ""
        },
        {
            tab: myMath.arrondirTabUnit(monm.resultCompta.taux_marge_avant__IS_IMF, 1),
            color: ""
        });
    return bootstrap.pan("default", null, tab);
};
/**
 * @description This function create a HTML to give a amortissement Excep
 * @param {Object} monm - The modele use to generate a Html
 * @return {string}
 */
GenererVue.prototype.ammortExcepHtml = function (monm) {
    let coteHead = ["Investissement</td><td>FCFA", "Taux</td><td>% Investissement", "Limitation</td><td>% Bénéfice comptable", "Durée</td><td>Années"];
    let tabHead = bootstrap.tableSE(coteHead, null,
        {
            tab: [Math.round(monm.ammortExcep.investissement)],
            color: "blue"
        },
        {
            tab: myMath.arrondirTabUnit([monm.ammortExcep.taux], 2),
            color: "yellow"
        },
        {
            tab: myMath.arrondirTabUnit([monm.ammortExcep.limitation], 2),
            color: "yellow"
        },
        {
            tab: myMath.arrondirTabUnit([monm.ammortExcep.duree]),
            color: "yellow"
        });


    let coteBody = ["Durée restante</td><td>Années", "Base amortissable</td><td>FCFA", "Charge d'amortissement</td><td>FCFA"];
    let tabBody = bootstrap.tableSE(coteBody, null,
        {
            tab: monm.ammortExcep.dureeTab,
            color: ""
        },
        {
            tab: monm.ammortExcep.baseAmorti, color: ""
        },
        {
            tab: monm.ammortExcep.chargeAmorti,
            color: ""
        });
    return bootstrap.pan("info", tabHead, tabBody);
};
/**
 * @description this function create a HTML to give a Impot Result Array
 *  @param {Object} monm - The modele use to generate a Html
 * @return {string}
 */
GenererVue.prototype.resultatImpotHtml = function (monm) {
    let cote = ["Bénéfice comptable</td><td>FCFA", "Amortissement exceptionnel</td><td>FCFA", "Bénéfice imposable</td><td>FCFA"];
    let tab = bootstrap.tableSE(cote, null, {
            tab: myMath.arrondirTabUnit(monm.resultImpot.benCompta),
            color: ""
        },
        {
            tab: myMath.arrondirTabUnit(monm.resultImpot.amortExep),
            color: ""
        },
        {
            tab: myMath.arrondirTabUnit(monm.resultImpot.benImpo),
            color: ""
        });
    return bootstrap.pan("default", null, tab);
};
/**
 * @description This function create a HTML to give the general Amortissement
 *  @param {Object} monm - The modele use to generate a Html
 * @return {string}
 */
GenererVue.prototype.getAmmortGenneralHtml = function (monm) {
    let cpt = 0;
    let tab = "<table class='table'><thead/></thead><tbody><tr><td>Construction</td><td>FCFA</td>";
    for (let i = 0; i < monm.amortissementGeneral.length; i++) {
        if (monm.amortissementGeneral[i] !== "change") {
            tab += `<td>${Math.round(monm.amortissementGeneral[i])}</td>`;
        }
        else {
            tab += "</tr><tr>";
            switch (cpt) {
                case 0 :
                    tab += "<td>Equipement</td><td>FCFA</td>";
                    break;
                case 1 :
                    tab += "<td>Camion</td><td>FCFA</td>";
                    break;
                case 2 :
                    tab += "<td>Informatique</td><td>FCFA</td>";
                    break;
                case 3 :
                    tab += "<td>Bureau</td><td>FCFA</td>";
                    break;
                default:
                    tab += "<td>Total</td><td>FCFA</td>";
                    break;
            }
            cpt++;
        }
    }
    tab += "</tr></tbody></table>";
    return bootstrap.pan("info", "Amortissment", tab);
};
/**
 * @description This function create a HTML to give a IS impot Array
 * @param {Object} monm - The modele use to generate a Html
 * @return {string}
 */
GenererVue.prototype.impotSocieteHtml = function (monm) {
    let is = [];
    let impSoc = [];
    for (let i = 0; i < 5; i++) {
        is.push(monm.impotSelected.is);
        impSoc.push(Math.round(monm.impotSociete[i]));
    }
    let cote = ["Benefice imposable</td><td>FCFA", "Taux</td><td>% bénéfice imposable", "IS</td><td>FCFA"];
    let tab = bootstrap.tableSE(cote, null,
        {
            tab: myMath.arrondirTabUnit(monm.resultImpot.benImpo),
            color: "",
        },
        {
            tab: myMath.arrondirTabUnit(is, 2),
            color: "yellow"
        },
        {
            tab: myMath.arrondirTabUnit(impSoc),
            color: ""
        }
        )
    ;
    return bootstrap.pan("default", null, tab);
};
/**
 * @description This function create a HTML to give a IMF Impot on modele
 * @param {Object} monm - The modele use to generate a Html
 * @return {string}
 */
GenererVue.prototype.impotForfaitHtml = function (monm) {
    let imf = [];
    let impIMF = [];
    for (let i = 0; i < 5; i++) {
        imf.push(monm.impotSelected.is);
        impIMF.push(Math.round(monm.impotIMF[i]));
    }
    let cote = ["Ventes</td><td>FCFA", "Taux</td><td>%CA", "IMF</td><td>FCFA"];
    let tab = bootstrap.tableSE(cote, null, {
            tab: myMath.arrondirTabUnit(monm.resultCompta.vente),
            color: ""
        },
        {
            tab: myMath.arrondirTabUnit(imf, 2),
            color: "yellow"
        },
        {
            tab: myMath.arrondirTabUnit(impIMF),
            color: ""
        });
    return bootstrap.pan("default", null, tab);
};
/**
 * @description This function create a HTML to give the IS/IMF Array
 * @param {Object} monm - The modele use to generate a Html
 * @return {string}
 */
GenererVue.prototype.isImfHtml = function (monm) {
    let cote = ["IS/IMF</td><td>FCFA", "Bénéfice après IS/IMF</td><td>FCFA", "Taux de marge  aprés IS/IMF</td><td>%CA"];
    let tab = bootstrap.tableSE(cote, null, {
            tab: myMath.arrondirTabUnit(monm.isImf),
            color: ""
        },
        {
            tab: myMath.arrondirTabUnit(monm.resultCompta.benefice_comptable),
            color: ""
        },
        {
            tab: myMath.arrondirTabUnit(monm.resultCompta.taux_marge_avant__IS_IMF, 1),
            color: ""
        });
    return bootstrap.pan("default", null, tab);
};
/**
 * @description This function create the HTML to give the IRVM Impot on modele
 * @param {Object} monm - The modele use to generate a Html
 * @return {string}
 */
GenererVue.prototype.impotRevenuValeurMobilieres = function (monm) {
    let div = [];
    let irvm = [];
    for (let i = 0; i < 5; i++) {
        div.push(this.modele.donnee.entreprise.dividende);
        irvm.push(this.modele.donnee.pays.impots.irvm);
    }
    let cote = ["Bénéfice après IS/IMF</td><td>FCFA", "Distribution anuelle</td><td>% des bénéfice après IS/IMF", "taux</td><td>% des bénéfice après IS/IMF", "IRVM</td><td>FCFA"];
    let tab = bootstrap.tableSE(cote, null, {
            tab: myMath.arrondirTabUnit(monm.resultCompta.benefice_comptable),
            color: ""
        },
        {
            tab: myMath.arrondirTabUnit(div, 2),
            color: "yellow"
        },
        {
            tab: myMath.arrondirTabUnit(irvm, 2),
            color: "blue"
        },
        {
            tab: myMath.arrondirTabUnit(monm.impotIRVM),
            color: ""
        });
    return bootstrap.pan("default", null, tab);
};
/**
 * @description This function create a HTML to give a Actualisation Array
 *  @param {Object} monm - The modele use to generate a Html
 * @return {string}
 */
GenererVue.prototype.actualisationHtml = function (monm) {
    let tab = bootstrap.tableSE(["actualisation"], null, {
        tab: myMath.arrondirTabUnit(monm.actualisation, 1),
        color: ""
    });
    return bootstrap.pan("default", null, tab);
};
/**
 * @description This function create a HTML to give All Impot and Taxe used by a Modele
 * @param  @param {Object} monm - The impot use by the modele use to generate a Html
 * @return {string}
 */
GenererVue.prototype.tabImpotEtTaxe = function (monm) {
    let cote = ["CFE</td><td>FCFA", "IS/IMF</td><td>FCFA", "IRVM</td><td>FCFA", "IRC</td><td>FCFA", "TVA Petrole</td><td>FCFA", "Total</td><td>FCFA"];
    let tab = bootstrap.tableSE(cote, null,
        {
            tab: myMath.arrondirTabUnit(monm.cfe),
            color: ""
        },
        {
            tab: myMath.arrondirTabUnit(monm.isimf),
            color: ""
        },
        {
            tab: myMath.arrondirTabUnit(monm.irvm),
            color: ""
        },
        {
            tab: myMath.arrondirTabUnit(monm.irc),
            color: ""
        },
        {
            tab: myMath.arrondirTabUnit(monm.tvaPetrole),
            color: ""
        },
        {
            tab: myMath.arrondirTabUnit(monm.total),
            color: ""
        }
    );
    return bootstrap.pan("default", null, tab);
};
/**
 * @description This function create the HTML to Give The TEMI By a land on a firm
 *  @param {Object} monm - The TEMI on the modele use to generate a Html
 * @return {string}
 */
GenererVue.prototype.tabTauxEffectifMoy = function (monm) {
    let tab = `<p> le TEMI est de ${Math.round(monm * 100) / 100} %</p>`;
    return bootstrap.pan("default", null, tab);
};
/**
 * @description This function create a HTML to give a cash FLOW ARRAY
 * @param {Object} tab - The Table of cash Flow Array
 * @param {String} color -The Color Of the year 0 Cash Flow Data
 * @return {string}
 */
GenererVue.prototype.tabFluxTresorie = function (tab, color) {
    let cote = ["Courants</td><td>FCFA", "Actualisés</td><td>FCFA", " "];
    let lol = [null, null, null, null, null, null, null, "Somme"];
    //console.log(color);
    let mota = bootstrap.tableSE(cote, "<thead><tr><th/><th/><th/><th/><th/><th/><th/><th/><th>VAN</th></tr></thead>",
        {
            tab: myMath.arrondirTabUnit(tab.courant),
            color: "",
            colorFirstCase: color,
            fontColorLastCase: "selectedPosNegNumber"
        },
        {
            tab: myMath.arrondirTabUnit(tab.actu),
            color: "",
            colorFirstCase: color,
            fontColorLastCase: "selectedPosNegNumber"
        },
        {
            tab: lol,
            color: ""
        });
    return bootstrap.pan("default", null, mota);
};
/**
 * @description This function create a HTML to give a return rate Array
 * @param {Array} tab -the Array of the return rate
 * @return {string}
 */
GenererVue.prototype.tauxRendementInt = function (tab) {
    return bootstrap.pan("default", null, bootstrap.tableSE(["courants"], null, {
        tab: myMath.arrondirTabUnit(tab, 2),
        color: ""
    }));
};
/**
 *@description This function create the HTML to give the Investissement Government Describe
 * @return {string}
 */
GenererVue.prototype.investissementRegime = function () {
    let html = "<p>";
    if (this.modele.donnee.regime !== "gen") {
        html += "La formulation de plusieurs hypothèses a été nécessaire afin de déterminer à quel régime privilégié " +
            "l’entreprise modélisée peut prétendre. L’investissement concerne une entreprise nouvelle. Il ne s’agit " +
            "pas d’un investissement d’extension des capacités de production d’une entreprise déjà existante. " +
            " Le montant d’investissement éligible au code des investissements correspond à l’actif immobilisé de " +
            "l’entreprise, soit 145×PNB/tête.  L’entreprise est située dans la capitale du pays.  L’entreprise" +
            " crée 60 emplois.  L’entreprise n’est pas exportatrice. Elle vend la totalité de sa production sur" +
            " le marché national. L’entreprise commence sa phase d’exploitation : les cinq années modélisées " +
            "sont les cinq premières années d’exploitation de l’entreprise nouvelle, l’investissement a déjà eu lieu.";
        html += "<br/>";
        html += "Ces hypothèses conduisent généralement à retenir le régime du code des investissements le moins " +
            "avantageux fiscalement (souvent appelé régime A), car la taille de l’entreprise est insuffisante " +
            "pour être éligible aux régimes supérieurs.";
        html += "</p><p>";

        html += this.modele.donnee.pays.source;
    }
    html += "</p>";
    return html;

};



