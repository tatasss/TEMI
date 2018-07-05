/**
 * @description This function is a constructor of ViewGenerator Class
 * @param {Model} modele - the modele use by this class to generate view
 * @constructor
 */
let ViewGenerator = function (modele) {
    this.modele = modele
};
/**
 * @description This function create a html to resultat in the index
 * @return {string}
 */
ViewGenerator.prototype.resultatHtml = function () {
    let impotStatDuree = [];
    if (this.modele.donnee.government() === "gen") {
        for (let i = 0; i < 5; i++) {
            impotStatDuree.push(" ");
        }
    }
    else {

    }
    let head = "<thead><tr><th/><th colspan=3 align=center>Taux statuaire</th><th colspan=2>Taux effectifs marginaux</th></tr>";
    head += "<tr><th/><th>Taux plein</th><th>Taux réduit</th><th>Durée</th><th>1re année</th><th>5e année</th></tr></thead>";
    let cfe = this.recupDonneTab(false, this.modele.donnee.land().investment().cfe(), this.modele.donnee.land().impots().cfe(),
        false, false, false);
    let is = this.recupDonneTab(false, this.modele.donnee.land().investment().isamort(),
        this.modele.donnee.land().impots().isImp(), true, false, false);

    let imf = this.recupDonneTab(false, this.modele.donnee.land().investment().imf(), this.modele.donnee.land().impots().imf(),
        false, true, false);
    let irvm = this.recupDonneTab(false, this.modele.donnee.land().investment().irvm(),
        this.modele.donnee.land().impots().irvm(), false, false, false);
    let irc = this.recupDonneTab(false, this.modele.donnee.land().investment().irc(), this.modele.donnee.land().impots().irc(),
        false, false, false);
    let tva = this.recupDonneTab(false, this.modele.donnee.land().investment().tvaPetrole(),
        this.modele.donnee.land().impots().tva_petrole(), false, false, false);
    let tot = this.recupDonneTab(this.modele.mesdon().tauxeffMoyCourent, this.modele.donnee.land().investment().total,
        this.modele.donnee.land().impots().imf(), false, false, true);
    let bodyTest = bootstrap.tableSE(
        [`CFE</td><td>${this.modele.donnee.land().impots().cfe()}`, `IS</td><td class=\"fontred\">${this.mP.impots().isImp()}`,
            `IMF</td><td class=\"fontred\">${this.mP.impots().imf()}`, `IRVM</td><td>${this.mP.impots().irvm()}`,
            `IRC</td><td>${this.mP.impots().irc()}`, `TVA Petrole</td><td>${this.mP.impots().tva_petrole()}`, "Total</td><td>"],
        head,
        {
            tab: myMath.arrondirTabUnit(cfe,2),
            color: ""
        },
        {
            tab: myMath.arrondirTabUnit(is,2),
            color: "",
            font_color: "red",
            numTabdep: 0
        },
        {
            tab: myMath.arrondirTabUnit(imf,2),
            color: "",
            font_color: "red",
            numTabdep: 0
        },
        {
            tab: myMath.arrondirTabUnit(irvm,2),
            color: ""
        },
        {
            tab: myMath.arrondirTabUnit(irc,2),
            color: ""
        },
        {
            tab: myMath.arrondirTabUnit(tva,2),
            color: ""
        },
        {
            tab: myMath.arrondirTabUnit(tot,2),
            color: ""
        });
    let pannelTab = bootstrap.pan("default", null, bodyTest);
    return this.investissementRegime() + bootstrap.pan("default", "<h1>Résultat</h1>", pannelTab);

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
ViewGenerator.prototype.recupDonneTab = function (effMoy, impDonne, donneImp, isIs, isImf, isTot) {
    let result = [];
    if (isTot) {
        result.push(null);
        result.push(null);
        result.push(Math.round(this.modele.mesdon().tauxEffMargImpApImp()[0]*100)/100);
        result.push(Math.round(this.modele.mesdon().tauxEffMargImpApImp()[this.modele.mesdon().tauxEffMargImpApImp().length - 1]*100)/100);
        return result;
    }
    else {
        if (this.modele.donnee.government() !== "Gen") {
            if (impDonne.taux() != null) {
                result.push(impDonne.taux());
            }
            else {
                if (impDonne.reducexo() != null) {
                    result.push(((1 - (impDonne.reducexo() / 100)) * (donneImp / 100)) * 100);
                }
                else {
                    result.push(null);
                    result.push(null);
                }
            }
            if (impDonne.taux() != null) {
                result.push(impDonne.duree());
            }
            if (impDonne.reducexo() != null) {
                result.push(impDonne.duree());
            }
        }
        if (isIs) {
            result.push(Math.round(this.modele.mesdon().tauxEffMargImpApIsImf()[0]*100)/100);
            result.push(Math.round(this.modele.mesdon().tauxEffMargImpApIsImf()[this.modele.mesdon().tauxEffMargImpApIsImf().length - 1]*100)/100);
        }
        else {
            if (!isImf) {
                result.push(null);
                result.push(null);
            }
        }
        return result;
    }
};
/**
 * @description This function create a html to give the gdp on the land
 * @return {string}
 */
ViewGenerator.prototype.pinbHTML = function () {
    return `<p>Le PIB par tête pour le pays ${this.mP.name()} est de : ${myMath.separatorNumber(Math.round(this.mP.pib))} FCFA</p>`;
};
/**
 * @description This function create a html to give a firm information
 * @return {string}
 */
ViewGenerator.prototype.entrepriseHTML = function () {
    let result = "<p>L'entreprise simulée est supposée être localisée dans la plus grande ville du pays, employer "
        + myMath.separatorNumber((this.mE.cadre() + this.mE.secretaire() + this.mE.ouvrier())) + " salariés et vendre la totalité de sa " +
        "production sur le marché local. ";
    result += "<br/>Elle comporte donc " + myMath.separatorNumber(this.mE.cadre()) + " cadre(s) dont l'indice salarial est de "
        + myMath.separatorNumber(this.mE.indice_cadre());
    result += " , " + myMath.separatorNumber(this.mE.secretaire()) + " secrétaire(s) dont l'indice salarial est de " + myMath.separatorNumber(this.mE.indice_secretaire());
    result += " , " + myMath.separatorNumber(this.mE.ouvrier()) + " ouvrier(s) dont l'indice salarial est de " + myMath.separatorNumber(this.mE.indice_ouvrier()) + ".";
    result += "<br/>Elle verse " + myMath.separatorNumber(this.mE.dividende()) + "% de ses bénéfices dans les dividendes";
    result += "<br/>Elle a un taux d'actualisation de " + myMath.separatorNumber(this.mE.actuali()) + " %";
    result += "</p>";
    return result;
};
/**
 * @description This function create a html to give a bilan Array on the firm used by the modele
 * @return {string}
 */
ViewGenerator.prototype.bilanHtml = function () {
    let actif = this.mE.terrain() + this.mE.construction() + this.mE.equipement() + this.mE.camion() + this.mE.info() +
        this.mE.bureau() + this.mE.stocks() + this.mE.creanceCli() + this.mE.dispoBanque();
    let passif = this.mE.capitalSocial() + this.mE.detteLongTerme() +
        this.mE.detteCourtTerme() + this.mE.detteFournisseur();
    let col1 = ["<span style='font-size: smaller; '><strong>Actif immobilisé</strong></span>",
        "Terrain", "Constructions", "Equipement", "Camion", "Matériel informatique", "Matériel de bureau",
        "<span style='font-size: smaller; '><strong>Actif circulant</strong></span>", "Stocks", "Créances Clients",
        "Disponibilités bancaires", "<strong>Actif</strong>"];
    let lin1 = {
        tab: myMath.separatorNumberArray([null, "<strong>Capitaux propres</strong>", null]),
        color: ""
    };
    let lin2 = {
        tab: myMath.separatorNumberArray([this.mE.terrain(), "Capital social", this.mE.capitalSocial()]),
        color: ""
    };
    let lin3 = {
        tab: myMath.separatorNumberArray([this.mE.construction(), null, null]),
        color: ""
    };
    let lin4 = {
        tab: myMath.separatorNumberArray([this.mE.equipement(), null, null]),
        color: ""
    };
    let lin5 = {
        tab: myMath.separatorNumberArray([this.mE.camion(), null, null]),
        color: ""
    };
    let lin6 = {
        tab: myMath.separatorNumberArray([this.mE.info(), null, null]),
        color: ""
    };
    let lin7 = {
        tab: myMath.separatorNumberArray([this.mE.bureau(), null, null]),
        color: ""
    };
    let lin8 = {
        tab: myMath.separatorNumberArray([null, "<strong><span style='font-size: smaller; '>Dettes</span></strong>", null]),
        color: ""
    };
    let lin9 = {
        tab: myMath.separatorNumberArray([this.mE.stocks(), "Dettes à long terme", this.mE.detteLongTerme()]),
        color: ""
    };
    let lin10 = {
        tab: myMath.separatorNumberArray([this.mE.creanceCli(), "Dettes à court terme", this.mE.detteCourtTerme()]),
        color: ""
    };
    let lin11 = {
        tab: myMath.separatorNumberArray([this.mE.dispoBanque(), "Dettes fournisseurs", this.mE.detteFournisseur()]),
        color: ""
    };
    let lin12 = {
        tab: myMath.separatorNumberArray([`<strong>${actif}</strong>`, "<strong>Passif</strong>", passif]),
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
ViewGenerator.prototype.compteHtml = function () {
    let cote = ["Achats", "Pétrole", "Dépenses administratives", "Dépenses publicitaires", "Dépenses d'entretien",
        "<strong>Impôts et taxes</strong>", "<strong>Masse salariale</strong>", "Cadres", "Secrétaires", "Ouvriers",
        "<strong>Charges financières</strong>", "Charges financières", "<strong>Amortissement</strong>"];
    let head = "<thead><tr><th colspan=3> Compte de résultat<th/></tr><tr><th colspan=2>Charges</th><th colspan=2>Produits</th></tr></thead>";
    let lin0 = {
        tab: myMath.separatorNumberArray([this.mE.achat(), "Ventes", this.mE.vente()]),
        color: ""
    };
    let lin1 = {
        tab: myMath.separatorNumberArray([this.mE.petrole(), null, null]),
        color: ""
    };
    let lin2 = {
        tab: myMath.separatorNumberArray([this.mE.depenseAdministrative(), null, null]),
        color: ""
    };
    let lin3 = {
        tab: myMath.separatorNumberArray([this.mE.depensePub(), null, null]),
        color: ""
    };
    let lin4 = {
        tab: myMath.separatorNumberArray([this.mE.depenseEntretien(), null, null]),
        color: ""
    };
    let lin5 = {
        tab: myMath.separatorNumberArray([null, null, null]),
        color: ""
    };
    let lin6 = {
        tab: myMath.separatorNumberArray([null, null, null]),
        color: ""
    };
    let lin7 = {
        tab: myMath.separatorNumberArray([this.mE.cadre(), null, null]),
        color: ""
    };
    let lin8 = {
        tab: myMath.separatorNumberArray([this.mE.secretaire(), null, null]),
        color: ""
    };
    let lin9 = {
        tab: myMath.separatorNumberArray([this.mE.ouvrier(), null, null]),
        color: ""
    };
    let lin10 = {
        tab: myMath.separatorNumberArray([null, null, null]),
        color: ""
    };
    let lin11 = {
        tab: myMath.separatorNumberArray([this.mE.chargeFinanciere(), null, null]),
        color: ""
    };
    let lin12 = {
        tab: myMath.separatorNumberArray([null, null, null]),
        color: ""
    };

    let tab = bootstrap.tableSE(cote, head, lin0, lin1, lin2, lin3, lin4, lin5, lin6, lin7, lin8, lin9, lin10, lin11, lin12);
    return bootstrap.pan("default", null, tab);
};
/**
 * @description This function create a html to give A economic data
 * @return {string}
 */
ViewGenerator.prototype.donneesEconomique = function () {
    let result = this.pinbHTML();
    result += this.entrepriseHTML();
    result += this.bilanHtml();
    result += this.compteHtml(this.modele.donnee);
    return bootstrap.pan("default", "<h1>Données Economiques</h1>", result);
};
/**
 * @description This function create a html to give the Impot of the land
 * @return {string}
 */
ViewGenerator.prototype.ImpotHtml = function () {
    let head = "<thead><tr><th colspan=5> Impôt<th/></tr>";
    head += "<tr><th/><th>1</th><th>2</th><th>3</th><th>4</th><th>5</th></tr>";
    head += "</thead>";let cfe = [];
    let is = [];
    let imf = [];
    let irvm = [];
    let irc = [];
    let tva = [];
    for (let i = 0; i < 5; i++) {
        cfe.push(this.modele.mesdon().impotSelected().cfe() + "%");
        is.push(this.modele.mesdon().impotSelected().is() + "%");
        imf.push(this.modele.mesdon().impotSelected().imf() + "%");
        irvm.push(this.modele.mesdon().impotSelected().irvm() + "%");
        irc.push(this.modele.mesdon().impotSelected().irc() + "%");
        tva.push(this.modele.mesdon().impotSelected().tvaPetrole() + "%");
    }
    let cote = ["CFE", "IS", "IMF", "IRVM", "IRC", "TVA Pétrole"];
    return bootstrap.tableSE(cote, head, {
            tab: myMath.separatorNumberArray(cfe),
            color: ""
        },
        {
            tab: myMath.separatorNumberArray(is),
            color: ""
        },
        {
            tab: myMath.separatorNumberArray(imf),
            color: ""
        },
        {
            tab: myMath.separatorNumberArray(irvm),
            color: ""
        },
        {
            tab: myMath.separatorNumberArray(irc),
            color: ""
        }, {
            tab: myMath.separatorNumberArray(tva),
            color: ""
        });
};
/**
 * @description This function create the HTML to ammortissement
 * @return {string}
 */
ViewGenerator.prototype.amortissementHtml = function () {
    let head = "<thead><tr><th colspan=2> Amortissement<th/></tr><tr><th/><th>Durée Linéaire</th><th>Coef dégressif</th></tr></thead>";
    let cote = ["Construction", "Equipement", "Camion", "Matériel informatique", "Matériel bureau"];
    let lin1 = {
        tab: myMath.separatorNumberArray([this.mP.amortization().construction(), this.mP.amortization().coefdegressif()]),
        color: ""
    };
    let lin2 = {
        tab: myMath.separatorNumberArray([this.mP.amortization().equipement(), this.mP.amortization().coefdegressif()]),
        color: ""
    };
    let lin3 = {
        tab: myMath.separatorNumberArray([this.mP.amortization().camion(), this.mP.amortization().coefdegressif()]),
        color: ""
    };
    let lin4 = {
        tab: myMath.separatorNumberArray([this.mP.amortization().info(), this.mP.amortization().coefdegressif()]),
        color: ""
    };
    let lin5 = {
        tab: myMath.separatorNumberArray([this.mP.amortization().bureau(), this.mP.amortization().coefdegressif()]),
        color: ""
    };
    let tab = bootstrap.tableSE(cote, head, lin1, lin2, lin3, lin4, lin5);
    return bootstrap.pan("default", null, tab);
};
/**
 * @description This function create the HTML to ammortissement Excep
 * @return {string}
 */
ViewGenerator.prototype.amortiExcepHTML = function () {
    return "<p> Pour les amortissements exceptionnels, le taux dépend de l'investissement, il y a une limitation par" +
        " rapport au bénéfice annuel et l'unité de durée est l'année.</p>";

};
/**
 * @description This function create the HTML to give a Fiscal Data
 * @return {string}
 */
ViewGenerator.prototype.donneesFiscal = function () {
    let pannelBody = bootstrap.pan("default", null, this.ImpotHtml(this.modele.mesdon()));
    pannelBody += this.amortissementHtml();
    pannelBody += this.amortiExcepHTML();
    return bootstrap.pan("default", "<h1>Données fiscales</h1>", pannelBody);
};
/**
 * @description This function create a  HTML to make a body
 * @return {string}
 */
ViewGenerator.prototype.bodyHtml = function () {
    let bodyglo = this.resultatHtml();
    bodyglo += this.donneesEconomique();
    bodyglo += this.donneesFiscal();
    return bodyglo;

};
/**
 * @description This function create the HTML to give the parameters and make any Button to navigate on the Model DATA
 * @return {string}
 */
ViewGenerator.prototype.navigationHtml = function () {
    let regime;
    if (this.modele.donnee.government() === "gen") {
        regime = "Code général des impôts";
    }
    else {
        regime = "Code des investissements";
    }
    let pannel = bootstrap.pan("default", "Paramètres", this.modele.donnee.land().name() + "<br/>" + regime + "</br>" + this.modele.donnee.topic() + "</br>" + this.modele.donnee.margin());
    let result = "<div class='vertical-menu'>" + pannel;
    result += bootstrap.buttonBalA("./modele", "Voir le résultat");
    result += bootstrap.buttonBalA("./", "Retour") + "</div>";
    return result;
};
/**
 * @description This function is the main to create a Data modele View on html
 * @return {string}
 */
ViewGenerator.prototype.mainHTML = function () {
    this.mP = this.modele.donnee.land();
    this.mE = this.modele.donnee.firm();
    return bootstrap.GridNavCote(this.bodyHtml(), this.navigationHtml());
};
/**
 * @description This function create a HTML to the petrole Tva Taxe on modele
 * @return {string}
 */
ViewGenerator.prototype.petroleHtml = function () {
    let cote = ["Pétrole</td><td>FCFA", "Taux</td><td>%", "TVA Pétrole</td><td>FCFA"];
    let tab = bootstrap.tableSE(cote, null, {
            tab: myMath.separatorNumberArray(this.modele.mesdon().taxeAjout().petrole()),
            color: "blue"
        },
        {
            tab: myMath.separatorNumberArray(this.modele.mesdon().taxeAjout().taux()),
            color: "yellow"
        },
        {
            tab: myMath.separatorNumberArray(this.modele.mesdon().taxeAjout().tva()),
            color: ""
        });
    return bootstrap.pan("default", null, tab);
};
/**
 * @description This function create a HTML for the Financial Taxe
 * @return {string}
 */
ViewGenerator.prototype.chargeFinancierHtml = function () {
    let cote = ["Charges financières</td><td>FCFA", "Taux</td><td>%", "IRC</td><td>FCFA"];
    let tab = bootstrap.tableSE(cote, null, {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(this.modele.mesdon().taxeCreance().chargeFinance())),
            color: "blue"
        },
        {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(this.modele.mesdon().taxeCreance().taux(), 2)),
            color: "yellow"
        },
        {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(this.modele.mesdon().taxeCreance().irc())),
            color: ""
        });
    return bootstrap.pan("default", null, tab);
};
/**
 * @description This function create the HTML to give the REAL cost on working force
 * @return {string}
 */
ViewGenerator.prototype.emploieHtml = function () {
    let cote = ["Salaire des cadres</td><td>FCFA", "Salaire des secrétaires</td><td>FCFA", "Salaire des ouvriers</td><td>FCFA"];
    cote.push("Masse Salariale</td><td>FCFA");
    cote.push("Taux</td><td>%");
    cote.push("CFE</td><td>FCFA");
    let tab = bootstrap.tableSE(cote, null,
        {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(this.modele.mesdon().employer().salaire_cadre(), 0)),
            color: "blue"
        },
        {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(this.modele.mesdon().employer().salaire_secretaire())),
            color: "blue"
        },
        {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(this.modele.mesdon().employer().salaire_ouvrier())),
            color: "blue"
        },
        {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(this.modele.mesdon().employer().masse_salarial())),
            color: ""
        },
        {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(this.modele.mesdon().employer().tauxCfe(), 2)),
            color: "yellow"
        },
        {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(this.modele.mesdon().employer().reel_CFE())),
            color: ""
        });
    return bootstrap.pan("default", null, tab);
};
/**
 * @description This function create the HTML to give the Comptability Result Array
 * @return {string}
 */
ViewGenerator.prototype.comptableHtml = function () {
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
    cote.push("Taux de margin  avant IS/IMF</td><td>%CA");
    let tab = bootstrap.tableSE(cote, null,
        {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(this.modele.mesdon().resultCompta().vente())),
            color: "blue",
            bottomBorder: "true"
        },
        {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(this.modele.mesdon().resultCompta().achats())),
            color: "blue"
        },
        {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(this.modele.mesdon().resultCompta().petrole())),
            color: "blue"
        },
        {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(this.modele.mesdon().resultCompta().tva_petrole())),
            color: ""
        },
        {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(this.modele.mesdon().resultCompta().depense_admin())),
            color: "blue"
        },
        {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(this.modele.mesdon().resultCompta().depense_pub())),
            color: "blue"
        },
        {
            tab:myMath.separatorNumberArray( myMath.arrondirTabUnit(this.modele.mesdon().resultCompta().depense_entretien())),
            color: "blue",
            bottomBorder: "true"
        },
        {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(this.modele.mesdon().resultCompta().salaire_cadre())),
            color: "blue"
        },
        {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(this.modele.mesdon().resultCompta().salaire_secretaire())),
            color: "blue"
        },
        {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(this.modele.mesdon().resultCompta().salaire_ouvrier())),
            color: "blue"
        },
        {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(this.modele.mesdon().resultCompta().cfe())),
            color: "",
            bottomBorder: "true"
        },
        {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(this.modele.mesdon().resultCompta().chargeFinanciere())),
            color: "blue",
            bottomBorder: "true"
        },
        {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(this.modele.mesdon().resultCompta().amortissement())),
            color: "",
            bottomBorder: "true"
        },
        {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(this.modele.mesdon().resultCompta().benefice_comptable())),
            color: ""
        },
        {
            tab: myMath.separatorNumberArray(myMath.separatorNumberArray(myMath.arrondirTabUnit(this.modele.mesdon().resultCompta().taux_marge_avant__IS_IMF()), 1)),
            color: ""
        });
    return bootstrap.pan("default", null, tab);
};
/**
 * @description This function create a HTML to give a amortissement Excep
 * @return {string}
 */
ViewGenerator.prototype.ammortExcepHtml = function () {
    let coteHead = ["Investissement</td><td>FCFA", "Taux</td><td>% investissement", "Limitation</td><td>% Bénéfice comptable", "Durée</td><td>Années"];
    let tabHead = bootstrap.tableSE(coteHead, null,
        {
            tab: myMath.separatorNumberArray([Math.round(this.modele.mesdon().ammortExcep().investment())]),
            color: "blue"
        },
        {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit([this.modele.mesdon().ammortExcep().taux()], 2)),
            color: "yellow"
        },
        {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit([this.modele.mesdon().ammortExcep().limitation()], 2)),
            color: "yellow"
        },
        {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit([this.modele.mesdon().ammortExcep().duree()])),
            color: "yellow"
        });


    let coteBody = ["Durée restante</td><td>Années", "Base amortissable</td><td>FCFA", "Charge d'amortissement</td><td>FCFA"];
    let tabBody = bootstrap.tableSE(coteBody, null,
        {
            tab: myMath.separatorNumberArray(this.modele.mesdon().ammortExcep().dureeTab()),
            color: ""
        },
        {
            tab: myMath.separatorNumberArray(this.modele.mesdon().ammortExcep().baseAmorti()),
            color: ""
        },
        {
            tab: myMath.separatorNumberArray(this.modele.mesdon().ammortExcep().chargeAmorti()),
            color: ""
        });
    return bootstrap.pan("info", tabHead, tabBody);
};
/**
 * @description this function create a HTML to give a Impot Result Array
 * @return {string}
 */
ViewGenerator.prototype.resultatImpotHtml = function () {
    let cote = ["Bénéfice comptable</td><td>FCFA", "Amortissement exceptionnel</td><td>FCFA", "Bénéfice imposable</td><td>FCFA"];
    let tab = bootstrap.tableSE(cote, null, {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(this.modele.mesdon().resultImpot().benCompta())),
            color: ""
        },
        {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(this.modele.mesdon().resultImpot().amortExep())),
            color: ""
        },
        {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(this.modele.mesdon().resultImpot().benImpo())),
            color: ""
        });
    return bootstrap.pan("default", null, tab);
};
/**
 * @description This function create a HTML to give the general Amortissement
 * @return {string}
 */
ViewGenerator.prototype.getAmmortGenneralHtml = function () {
    let cpt = 0;
    let tab = "<table class='table'><thead/></thead><tbody><tr><td>Construction</td><td>FCFA</td>";
    for (let i = 0; i < this.modele.mesdon().amortissementGeneral().length; i++) {
        if (this.modele.mesdon().amortissementGeneral()[i] !== "change") {
            tab += `<td>${myMath.separatorNumber(Math.round(this.modele.mesdon().amortissementGeneral()[i]))}</td>`;
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
    return bootstrap.pan("info", "Amortissement", tab);
};
/**
 * @description This function create a HTML to give a IS impot Array
 * @return {string}
 */
ViewGenerator.prototype.impotSocieteHtml = function () {
    let is = [];
    let impSoc = [];
    for (let i = 0; i < 5; i++) {
        is.push(this.modele.mesdon().impotSelected().is());
        impSoc.push(Math.round(this.modele.mesdon().impotSociete()[i]));
    }
    let cote = ["Bénéfice imposable</td><td>FCFA", "Taux</td><td>% bénéfice imposable", "IS</td><td>FCFA"];
    let tab = bootstrap.tableSE(cote, null,
        {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(this.modele.mesdon().resultImpot().benImpo())),
            color: "",
        },
        {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(is, 2)),
            color: "yellow"
        },
        {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(impSoc)),
            color: ""
        }
        )
    ;
    return bootstrap.pan("default", null, tab);
};
/**
 * @description This function create a HTML to give a IMF Impot on modele
 * @return {string}
 */
ViewGenerator.prototype.impotForfaitHtml = function () {
    let imf = [];
    let impIMF = [];
    for (let i = 0; i < 5; i++) {
        imf.push(this.modele.mesdon().impotSelected().imf());
        impIMF.push(Math.round(this.modele.mesdon().impotIMF()[i]));
    }
    let cote = ["Ventes</td><td>FCFA", "Taux</td><td>%CA", "IMF</td><td>FCFA"];
    let tab = bootstrap.tableSE(cote, null, {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(this.modele.mesdon().resultCompta().vente())),
            color: ""
        },
        {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(imf, 2)),
            color: "yellow"
        },
        {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(impIMF)),
            color: ""
        });
    return bootstrap.pan("default", null, tab);
};
/**
 * @description This function create a HTML to give the IS/IMF Array
 * @return {string}
 */
ViewGenerator.prototype.isImfHtml = function () {
    let cote = ["IS/IMF</td><td>FCFA", "Bénéfice après IS/IMF</td><td>FCFA", "Taux de marge  après IS/IMF</td><td>%CA"];
    let tab = bootstrap.tableSE(cote, null, {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(this.modele.mesdon().isImf())),
            color: ""
        },
        {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(this.modele.mesdon().resultCompta().benefice_comptable())),
            color: ""
        },
        {
            tab: myMath.separatorNumberArray( myMath.arrondirTabUnit(this.modele.mesdon().resultCompta().taux_marge_avant__IS_IMF(), 1)),
            color: ""
        });
    return bootstrap.pan("default", null, tab);
};
/**
 * @description This function create the HTML to give the IRVM Impot on modele
 * @return {string}
 */
ViewGenerator.prototype.impotRevenuValeurMobilieres = function () {
    let div = [];
    let irvm = [];
    for (let i = 0; i < 5; i++) {
        div.push(this.modele.donnee.firm().dividende());
        irvm.push(this.modele.donnee.land().impots().irvm());
    }
    let cote = ["Bénéfice après IS/IMF</td><td>FCFA", "Distribution anuelle</td><td>% des bénéfices après IS/IMF", "Taux</td><td>% des bénéfices après IS/IMF", "IRVM</td><td>FCFA"];
    let tab = bootstrap.tableSE(cote, null, {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(this.modele.mesdon().resultCompta().benefice_comptable())),
            color: ""
        },
        {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(div, 2)),
            color: "yellow"
        },
        {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(irvm, 2)),
            color: "blue"
        },
        {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(this.modele.mesdon().impotIRVM())),
            color: ""
        });
    return bootstrap.pan("default", null, tab);
};
/**
 * @description This function create a HTML to give a Actualisation Array
 * @return {string}
 */
ViewGenerator.prototype.actualisationHtml = function () {
    let tab = bootstrap.tableSE(["Actualisation"], null, {
        tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(this.modele.mesdon().actualisation(), 1)),
        color: ""
    });
    return bootstrap.pan("default", null, tab);
};
/**
 * @description This function create a HTML to give All Impot and Taxe used by a Model
 * @param  {Object} monm - The impot use by the modele use to generate a Html
 * @return {string}
 */
ViewGenerator.prototype.tabImpotEtTaxe = function (monm) {
    let cote = ["CFE</td><td>FCFA", "IS/IMF</td><td>FCFA", "IRVM</td><td>FCFA", "IRC</td><td>FCFA", "TVA Pétrole</td><td>FCFA", "Total</td><td>FCFA"];
    let tab = bootstrap.tableSE(cote, null,
        {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(monm.cfe())),
            color: ""
        },
        {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(monm.isimf())),
            color: ""
        },
        {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(monm.irvm())),
            color: ""
        },
        {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(monm.irc())),
            color: ""
        },
        {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(monm.tvaPetrole())),
            color: ""
        },
        {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(monm.total())),
            color: ""
        }
    );
    return bootstrap.pan("default", null, tab);
};
/**
 * @description This function create the HTML to Give The TEMI By a land on a firm
 * @return {string}
 */
ViewGenerator.prototype.tabTauxEffectifMoy = function () {
    let tab = `<p> le TEMI est de ${myMath.separatorNumber(Math.round(this.modele.mesdon().tauxeffMoyCourent() * 100) / 100)} %</p>`;
    return bootstrap.pan("default", null, tab);
};
/**
 * @description This function create a HTML to give a cash FLOW ARRAY
 * @param {Object} tab - The Table of cash Flow Array
 * @param {String} color -The Color Of the year 0 Cash Flow Data
 * @return {string}
 */
ViewGenerator.prototype.tabFluxTresorie = function (tab, color) {
    let cote = ["Courants</td><td>FCFA", "Actualisés</td><td>FCFA", " "];
    let lol = [null, null, null, null, null, null, null, "Somme"];
    //console.log(color);
    let mota = bootstrap.tableSE(cote, "<thead><tr><th/><th/><th/><th/><th/><th/><th/><th/><th>VAN</th></tr></thead>",
        {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(tab.courant())),
            color: "",
            colorFirstCase: color,
            fontColorLastCase: "selectedPosNegNumber"
        },
        {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(tab.topic())),
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
 * @param {number} number - the TRI total on the period studied
 * @return {string}
 */
ViewGenerator.prototype.tauxRendementInt = function (tab,number) {
    return bootstrap.pan("default", null, `${bootstrap.tableSE(["Courants"], null, {
        tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(tab, 2)),
        color: ""
    })}<p> Le taux de rendement interne sur les 5 années est de ${myMath.separatorNumber(number)}%</p>`);
};
/**
 * @description This function create a HTML to give a return rate Array
 * @param {Array} tab -the Array of the return rate
 * @return {string}
 */
ViewGenerator.prototype.tauxMargInt = function (tab) {
    return bootstrap.pan("default", null, `${bootstrap.tableSE(["Courants"], null, {
        tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(tab, 2)),
        color: ""
    })}`);
};
/**
 *@description This function create the HTML to give the investment Government Describe
 * @return {string}
 */
ViewGenerator.prototype.investissementRegime = function () {
    let html = "<p>";
    if (this.modele.donnee.government() !== "gen") {
        html += "La formulation de plusieurs hypothèses a été nécessaire afin de déterminer à quel régime privilégié " +
            "l’entreprise modélisée peut prétendre. L’investissement concerne une firm nouvelle. Il ne s’agit " +
            "pas d’un investment d’extension des capacités de production d’une firm déjà existante. " +
            " Le montant d’investissement éligible au code des investissements correspond à l’actif immobilisé de " +
            "l’entreprise, soit 145×PNB/tête.  L’entreprise est située dans la capitale du land.  L’entreprise" +
            " crée 60 emplois.  L’entreprise n’est pas exportatrice. Elle vend la totalité de sa production sur" +
            " le marché national. L’entreprise commence sa phase d’exploitation : les cinq années modélisées " +
            "sont les cinq premières années d’exploitation de l’firm nouvelle, l’investissement a déjà eu lieu.";
        html += "<br/>";
        html += "Ces hypothèses conduisent généralement à retenir le régime du code des investissements le moins " +
            "avantageux fiscalement (souvent appelé régime A), car la taille de l’entreprise est insuffisante " +
            "pour être éligible aux régimes supérieurs.";
        html += "</p><p>";

        html += this.modele.donnee.land().source();
    }
    html += "</p>";
    return html;

};



