/*let genererVue;
genererVue = {
mE: "lol",
mP: "c'est mon pays",
pibchoix: "lol",
}*/
GenererVue.prototype.resultatHtml= function (regime) {
    //mis en place du tableaux des resultat
    let impotStatDuree = [];
    if (regime === "gen") {
        for (let i = 0; i < 5; i++) {
            impotStatDuree.push(" ");
        }
    }
    else {

    }

    let head = "<thead><tr><th/><th colspan=3 align=center>Taux statuaire</th><th colspan=2>Taux effectifs moyens</th><th colspan=2>Taux effectifs marginaux</th></tr>";
    head += "<tr><th/><th>Taux plein</th><th>Taux reduit</th><th>Durée</th><th>First Year</th><th>Five Year</th><th>First Year</th><th>Five Year</th></tr></thead>";
    let cfe = this.recupDonneTab(modele.mesdon().tauxeffMoyActualise.cfe, donne.pays.investissement.cfe, donne.pays.impots.cfe, false, false, false);
    let is = this.recupDonneTab(modele.mesdon().tauxeffMoyActualise.isimf, donne.pays.investissement.isamort, donne.pays.impots.isImp, true, false, false);
    let imf = this.recupDonneTab(modele.mesdon().tauxeffMoyActualise.isimf, donne.pays.investissement.imf, donne.pays.impots.imf, false, true, false);
    let irvm = this.recupDonneTab(modele.mesdon().tauxeffMoyActualise.irvm, donne.pays.investissement.irvm, donne.pays.impots.irvm, false, false, false);
    let irc = this.recupDonneTab(modele.mesdon().tauxeffMoyActualise.irc, donne.pays.investissement.irc, donne.pays.impots.irc, false, false, false);
    let tva = this.recupDonneTab(modele.mesdon().tauxeffMoyActualise.tvaPetrole, donne.pays.investissement.tvaPetrole, donne.pays.impots.tva_petrole, false, false, false);
    let tot = this.recupDonneTab(modele.mesdon().tauxeffMoyActualise.total, donne.pays.investissement.total, donne.pays.impots.imf, false, false, true);
    let bodyTest = bootstrap.tableSE(
        [`CFE</td><td>${donne.pays.impots.cfe}`, `IS</td><td class=\"fontred\">${this.mP.impots.isImp}`, `IMF</td><td class=\"fontred\">${this.mP.impots.imf}`, `IRVM</td><td>${this.mP.impots.irvm}`, `IRC</td><td>${this.mP.impots.irc}`, `TVA Petrole</td><td>${this.mP.impots.tva_petrole}`, "total</td><td>"],
        head,
        {tab:cfe,color:""},
        {tab:is,color:"",font_color:"red",numTabdep:0},
        {tab:imf,color:"",font_color:"red",numTabdep:0},
        {tab:irvm,color:""},
        {tab:irc,color:""},
        {tab:tva,color:""},
        {tab:tot,color:""});
    let pannelTab = bootstrap.pan("default", null, bodyTest);
    return bootstrap.pan("default", "<h1>Resultat</h1>", pannelTab);

};
GenererVue.prototype.recupDonneTab= function (effMoy, impDonne, donneImp, isIs, isImf, isTot) {
    let result = [];
    if (isTot) {
        result.push(null);
        result.push(null);
        /*result.push( effMoy[0]);
        result .push(effMoy[effMoy.length - 1]);*/
        result.push(modele.mesdon().tauxEffMargImpApImp[0]);
        result.push(modele.mesdon().tauxEffMargImpApImp[modele.mesdon().tauxEffMargImpApImp.length - 1]);
        return result;
    }
    else {
        if (donne.regime !== "Gen") {
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
            result.push(modele.mesdon().tauxEffMargImpApIsImf[0]);
            result.push(modele.mesdon().tauxEffMargImpApIsImf[modele.mesdon().tauxEffMargImpApIsImf.length - 1]);
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
GenererVue.prototype.pinbHTML= function (pays) {

    result = `<p>Le PIB par tête dans le pays ${pays} est de : ${Math.round(this.mP.pib)} FCFA</p>`;
    this.pibchoix = this.mP.pib;
    return result;
};
GenererVue.prototype.entrepriseHTML= function () {
    let result = "<p>L'entreprise simulée est supposée être localisée dans la plus grande ville du pays, employer " + (this.mE.cadre + this.mE.secretaire + this.mE.ouvrier) + " salariés et vendre la totalité de sa production sur le marché local. ";
    result += "<br/>Elles comporte donc " + this.mE.cadre + " cadre(s) dont l'indice salarial est de " + this.mE.indice_cadre;
    result += " , " + this.mE.secretaire + " secrétaire(s) dont l'indice salarial est de " + this.mE.indice_secretaire;
    result += " , " + this.mE.ouvrier + " ouvrier(s) dont l'indice salarial est de " + this.mE.indice_ouvrier + ".";
    result += "<br/>Elle verse " + this.mE.dividende + "% de ces bénéfices dans les dividendes";
    result += "<br/>Elle a un taux d'actualisation de " + this.mE.actuali + " %";
    result += "</p>";
    return result;
};
GenererVue.prototype. bilanHtml= function () {
    let actif = this.mE.terrain + this.mE.construction + this.mE.equipement + this.mE.camion + this.mE.info + this.mE.bureau + this.mE.stocks + this.mE.creanceCli + this.mE.dispoBanque;
    let passif = this.mE.capitalSocial + this.mE.detteLongTerme + this.mE.detteCourtTerme + this.mE.detteFournisseur;
    let col1 = ["<span style='font-size: smaller; '><strong>Actif immobilisé</strong></span>", "Terrain", "Constructions", "Equipement", "Camion", "Matériel informatique", "Matériel de Bureau", "<span style='font-size: smaller; '><strong>Actif circulant</strong></span>", "Stocks", "Creances Clients", "Disponibilités bancaires", "<strong>Actif</strong>"];
    let lin1 = {tab:[null, "<strong>Capitaux propre</strong>", null],color:""};
    let lin2 = {tab:[this.mE.terrain, "Capital social", this.mE.capitalSocial],color:""};
    let lin3 = {tab:[this.mE.construction, null, null],color:""};
    let lin4 = {tab:[this.mE.equipement, null, null],color:""};
    let lin5 = {tab:[this.mE.camion, null, null],color:""};
    let lin6 = {tab:[this.mE.info, null, null],color:""};
    let lin7 = {tab:[this.mE.bureau, null, null],color:""};
    let lin8 = {tab:[null, "<strong><span style='font-size: smaller; '>Dettes</span></strong>", null],color:""};
    let lin9 = {tab:[this.mE.stocks, "Dettes long terme", this.mE.detteLongTerme],color:""};
    let lin10 = {tab:[this.mE.creanceCli, "Dettes court terme", this.mE.detteCourtTerme],color:""};
    let lin11 = {tab:[this.mE.dispoBanque, "Dettes fournisseurs", this.mE.detteFournisseur],color:""};
    let lin12 = {tab:[`<strong>${actif}</strong>`, "<strong>passif</strong>", passif],color:""};
    let head = "<thead><tr><th colspan=3> Bilan à l'ouverture<th/><tr/><tr><th colspan=2>Actif</th><th colspan=2>Passif</th></tr></thead>";
    let tab = bootstrap.tableSE(col1, head, lin1, lin2, lin3, lin4, lin5, lin6, lin7, lin8, lin9, lin10, lin11, lin12);
    return bootstrap.pan("default", null, tab);
};
GenererVue.prototype.compteHtml= function () {
    let cote = ["Achats", "Petrole", "Depenses administratives", "Depenses publicitaires", "Depences d'entretien", "<strong>Impôts et taxes</strong>", "<strong>Masse Salariale</strong>", "Cadres", "Secrétaires", "Ouvriers", "<strong>Charges financières</strong>", "Charges financières", "<strong>Amortissement</strong>"];
    let head = "<thead><tr><th colspan=3> Compte de résultat<th/></tr><tr><th colspan=2>Charges</th><th colspan=2>Produit</th></tr></thead>";
    let lin0 = {tab:[this.mE.achat, "Ventes", this.mE.vente],color:""};
    let lin1 = {tab:[this.mE.petrole, null, null],color:""};
    let lin2 = {tab:[this.mE.depenseAdministrative, null, null],color:""};
    let lin3 = {tab:[this.mE.depensePub, null, null],color:""};
    let lin4 = {tab:[this.mE.depenseEntretien, null, null],color:""};
    let lin5 = {tab:[null, null, null],color:""};
    let lin6 = {tab:[null, null, null],color:""};
    let lin7 = {tab:[this.mE.cadre, null, null],color:""};
    let lin8 = {tab:[this.mE.secretaire, null, null],color:""};
    let lin9 = {tab:[this.mE.ouvrier, null, null],color:""};
    let lin10 = {tab:[null, null, null],color:""};
    let lin11 = {tab:[this.mE.chargeFinanciere, null, null],color:""};
    let lin12 = {tab:[null, null, null],color:""};

    let tab = bootstrap.tableSE(cote, head, lin0, lin1, lin2, lin3, lin4, lin5, lin6, lin7, lin8, lin9, lin10, lin11, lin12);
    return bootstrap.pan("default", null, tab);
};
GenererVue.prototype.donneesEconomique= function (pin, pays) {
    let result = this.pinbHTML(pin, pays);
    result += this.entrepriseHTML();
    result += this.bilanHtml();
    result += this.compteHtml(donne);
    return bootstrap.pan("default", "<h1>Données economiques</h1>", result);
};
/**
 * @return {string}
 */
GenererVue.prototype.ImpotHtml= function (monm) {
    let head = " <thead><tr><th colspan=5> Impot<th/></tr>";
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
    return bootstrap.tableSE(cote, head, {tab:cfe,color:""}, {tab:is,color:""}, {tab:imf,color:""}, {tab:irvm,color:""}, {tab:irc,color:""},{tab: tva,color:""});
};
GenererVue.prototype.amortissemEntHtml= function () {
    let head = "<thead><tr><th colspan=2> Amortissement<th/></tr><tr><th/><th>Durée Linéaire</th><th>Coef dégressif</th></tr></thead>";
    let cote = ["Construction", "Equipement", "Camion", "Matériel informatique", "Matériel bureau"];
    let lin1 = {tab:[this.mP.ammort.construction, this.mP.ammort.coefdegressif],color:""};
    let lin2 = {tab:[this.mP.ammort.equipement, this.mP.ammort.coefdegressif],color:""};
    let lin3 = {tab:[this.mP.ammort.camion, this.mP.ammort.coefdegressif],color:""};
    let lin4 = {tab:[this.mP.ammort.info, this.mP.ammort.coefdegressif],color:""};
    let lin5 = {tab:[this.mP.ammort.bureau, this.mP.ammort.coefdegressif],color:""};
    let tab = bootstrap.tableSE(cote, head, lin1, lin2, lin3, lin4, lin5);
    return bootstrap.pan("default", null, tab);
};
GenererVue.prototype.amortiExcepHTML= function () {
    return "<p> Pour les amortissements exceptionnels, le taux depend de l'investissement, il y a une limitation par rapport au bénéfice annuel et l'unité de la durée est l'année</p>";

};
GenererVue.prototype.donneesFiscal= function () {
    //mis en place des données fiscales

    //fin
    let pannelBody = bootstrap.pan("default", null, this.ImpotHtml(modele.mesdon()));
    pannelBody += this.amortissemEntHtml();
    pannelBody += this.amortiExcepHTML();
    return bootstrap.pan("default", "<h1>données fiscales</h1>", pannelBody);
};
GenererVue.prototype.bodyHtml= function (pin, pays, regimE) {
    let bodyglo = this.resultatHtml(regimE);
    bodyglo += this.donneesEconomique(pin, pays, regimE);
    bodyglo += this.donneesFiscal();
    return bodyglo;

};
GenererVue.prototype.navigationHtml= function (pays, regimE, actu, marge) {
    let regime;
    if (regimE === "gen") {
        regime = "code général des impots";
    }
    else {
        regime = "code des investissements";
    }
    let pannel = bootstrap.pan("default", "Paramétres", ref.donnerNomPays(pays) + "<br/>" + regime + "</br>" + actu + "</br>" + marge);
    let result = "<div class='vertical-menu'>" + pannel;
    result += bootstrap.buttonBalA("./graph.html", "voir graphique en cours");
    result += bootstrap.buttonBalA("./model.html", "voir model");
    result += bootstrap.buttonBalA("./index.html", "retour") + "</div>";
    return result;
};
GenererVue.prototype.mainHTML= function (pays, regimE, actu, marge) {
    this.mP = donne.pays;
    this.mE = donne.entreprise;
    return bootstrap.container(bootstrap.GridNavCote(this.bodyHtml(pays, regimE), this.navigationHtml(pays, regimE, actu, marge)));
};
GenererVue.prototype. petroleHtml= function (taxeAjout) {
    let cote = ["Pétrole</td><td>FCFA", "Taux</td><td>%", "TVA Petrole</td><td>FCFA"];
    let tab = bootstrap.tableSE(cote, null,{tab:taxeAjout.petrole,color:"blue"}, {tab:taxeAjout.taux,color:"yellow"}, {tab:taxeAjout.tva,color:""});
    return bootstrap.pan("default", null, tab);
};
GenererVue.prototype.chargeFinancierHtml= function (taxeAjout) {
    let cote = ["Charges financiéres</td><td>FCFA", "Taux</td><td>%", "IRC</td><td>FCFA"];
    let tab = bootstrap.tableSE(cote, null,{tab: myMath.arrondirTabUnit(taxeAjout.chargeFinance),color:"blue"},{tab: myMath.arrondirTabUnit(taxeAjout.taux, 2),color:"yellow"},{tab: myMath.arrondirTabUnit(taxeAjout.irc),color:""});
    return bootstrap.pan("default", null, tab);
};
GenererVue.prototype.emploieHtml= function (monm) {
    let cote = ["Salaire des cadres</td><td>FCFA", "Salaire des secrétaires</td><td>FCFA", "Salaire des ouvriers</td><td>FCFA"];
    cote.push("Masse Salariale</td><td>FCFA");
    cote.push("Taux</td><td>%");
    cote.push("CFE</td><td>FCFA");
    let tab = bootstrap.tableSE(cote, null,
        {tab:myMath.arrondirTabUnit(monm.employer.salaire_cadre, 0),color:"blue"},
        {tab:myMath.arrondirTabUnit(monm.employer.salaire_secretaire),color:"blue"},
        {tab:myMath.arrondirTabUnit(monm.employer.salaire_ouvrier),color:"blue"},
        {tab:myMath.arrondirTabUnit(monm.employer.masse_salarial),color:""},
        {tab:myMath.arrondirTabUnit(monm.employer.tauxCfe, 2),color:"yellow"},
        {tab:myMath.arrondirTabUnit(monm.employer.reel_CFE),color:""});
    return bootstrap.pan("default", null, tab);
};
GenererVue.prototype.comptableHtml= function (monm) {
    let cote = ["Vente</td><td class=\"bottomBorder\">FCFA"];
    cote.push("Achats</td><td>FCFA");
    cote.push("Pétrole</td><td>FCFA");
    cote.push("TVA pétrole</td><td>FCFA");
    cote.push("Dépenses administratives</td><td>FCFA");
    cote.push("Dépenses publicitaires</td><td>FCFA");
    cote.push("Dépenses Dépenes d'entretien</td><td class=\"bottomBorder\">FCFA");
    cote.push("Salaires des cadres</td><td>FCFA");
    cote.push("Salaires des secrétaires</td><td>FCFA");
    cote.push("Salaires des ouvriers</td><td>FCFA");
    cote.push("CFE</td><td class=\"bottomBorder\">FCFA");
    cote.push("Charges financières</td><td class=\"bottomBorder\">FCFA");
    cote.push("Amortissement</td><td class=\"bottomBorder\">FCFA");
    cote.push("Bénéfice comptable</td><td>FCFA");
    cote.push("Taux de marge  avant IS/IMF</td><td>%CA");
    let tab = bootstrap.tableSE(cote, null,
        {tab:myMath.arrondirTabUnit(monm.resultCompta.vente),color:"blue",bottomBorder:"true"},
        {tab:myMath.arrondirTabUnit(monm.resultCompta.achats),color:"blue"},
        {tab:myMath.arrondirTabUnit(monm.resultCompta.petrole),color:"blue"},
        {tab:myMath.arrondirTabUnit(monm.resultCompta.tva_petrole),color:""},
        {tab:myMath.arrondirTabUnit(monm.resultCompta.depense_admin),color:"blue"},
        {tab:myMath.arrondirTabUnit(monm.resultCompta.depense_pub),color:"blue"},
        {tab:myMath.arrondirTabUnit(monm.resultCompta.depense_entretien),color:"blue",bottomBorder:"true"},
        {tab:myMath.arrondirTabUnit(monm.resultCompta.salaire_cadre),color:"blue"},
        {tab:myMath.arrondirTabUnit(monm.resultCompta.salaire_secreataire),color:"blue"},
        {tab:myMath.arrondirTabUnit(monm.resultCompta.salaire_ouvrier),color:"blue"},
        {tab:myMath.arrondirTabUnit(monm.resultCompta.cfe),color:"",bottomBorder:"true"},
        {tab:myMath.arrondirTabUnit(monm.resultCompta.chargeFinanciere),color:"blue",bottomBorder:"true"},
        {tab:myMath.arrondirTabUnit(monm.resultCompta.amortissement),color:"",bottomBorder:"true"},
        {tab:myMath.arrondirTabUnit(monm.resultCompta.benefice_comptable),color:""},
        {tab:myMath.arrondirTabUnit(monm.resultCompta.taux_marge_avant__IS_ISMF, 1),color:""});
    return bootstrap.pan("default", null, tab);
};
GenererVue.prototype.ammortExcepHtml= function (monm) {
    let coteHead = ["Investissement</td><td>FCFA", "Taux</td><td>% Investissement", "Limitation</td><td>% Bénéfice comptable", "Durée</td><td>Années"];
    let tabHead = bootstrap.tableSE(coteHead, null,
        {tab:[Math.round(monm.ammortExcep.investissement)],color:"blue"},
        {tab:myMath.arrondirTabUnit([monm.ammortExcep.taux], 2),color:"yellow"},
        {tab:myMath.arrondirTabUnit([monm.ammortExcep.limitation], 2),color:"yellow"},
        {tab: myMath.arrondirTabUnit([monm.ammortExcep.duree]),color:"yellow"});


    let coteBody = ["Durée restante</td><td>Années", "Base amortissable</td><td>FCFA", "Charge d'amortissement</td><td>FCFA"];
    let tabBody = bootstrap.tableSE(coteBody, null,
        {tab: monm.ammortExcep.dureeTab,color:""},
        {tab: monm.ammortExcep.baseAmorti,color:""},
        {tab: monm.ammortExcep.chargeAmorti,color:""});
    return bootstrap.pan("info", tabHead, tabBody);
};
GenererVue.prototype.resultatImpotHtml= function (monm) {
    let cote = ["Bénéfice comptable</td><td>FCFA", "Amortissement exceptionnel</td><td>FCFA", "Bénéfice imposable</td><td>FCFA"];
    let tab = bootstrap.tableSE(cote, null, {tab:myMath.arrondirTabUnit(monm.resultImpot.benCompta),color:""},{tab: myMath.arrondirTabUnit(monm.resultImpot.amortExep),color:""},{tab: myMath.arrondirTabUnit(monm.resultImpot.benImpo),color:""});
    return bootstrap.pan("default", null, tab);
};
GenererVue.prototype.getAmmortGenneralHtml=function (monm) {
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
GenererVue.prototype.impotSocieteHtml= function (monm) {
    let is = [];
    let impSoc = [];
    for (let i = 0; i < 5; i++) {
        is.push(monm.impotSelected.is);
        impSoc.push(Math.round(monm.impotSociete[i]));
    }
    let cote = ["Benefice imposable</td><td>FCFA", "Taux</td><td>% bénéfice imposable", "IS</td><td>FCFA"];
    let tab = bootstrap.tableSE(cote, null,
        {
            tab:myMath.arrondirTabUnit(monm.resultImpot.benImpo),
            color:"",
         },
        {tab:myMath.arrondirTabUnit(is, 2),color:"yellow"}, {tab:myMath.arrondirTabUnit(impSoc),color:""}
)
    ;
    return bootstrap.pan("default", null, tab);
};
GenererVue.prototype.impotForfaitHtml= function (monm) {
    let imf = [];
    let impIMF = [];
    for (let i = 0; i < 5; i++) {
        imf.push(monm.impotSelected.is);
        impIMF.push(Math.round(monm.impotIMF[i]));
    }
    let cote = ["Ventes</td><td>FCFA", "Taux</td><td>%CA", "IMF</td><td>FCFA"];
    let tab = bootstrap.tableSE(cote, null, {tab:myMath.arrondirTabUnit(monm.resultCompta.vente),color:""}, {tab:myMath.arrondirTabUnit(imf, 2),color:"yellow"}, {tab:myMath.arrondirTabUnit(impIMF),color:""});
    return bootstrap.pan("default", null, tab);
};
GenererVue.prototype.isImfHtml= function (monm) {
    let cote = ["IS/IMF</td><td>FCFA", "Bénéfice après IS/IMF</td><td>FCFA", "Taux de marge  aprés IS/IMF</td><td>%CA"];
    let tab = bootstrap.tableSE(cote, null,{tab: myMath.arrondirTabUnit(monm.isImf),color:""},{tab: myMath.arrondirTabUnit(monm.resultCompta.benefice_comptable),color:""},{tab: myMath.arrondirTabUnit(monm.resultCompta.taux_marge_avant__IS_ISMF, 1),color:""});
    return bootstrap.pan("default", null, tab);
};
GenererVue.prototype.impotRevenuValeurMobilieres= function (monm) {
    let div = [];
    let irvm = [];
    for (let i = 0; i < 5; i++) {
        div.push(donne.entreprise.dividende);
        irvm.push(donne.pays.impots.irvm);
    }
    let cote = ["Bénéfice après IS/IMF</td><td>FCFA", "Distribution anuelle</td><td>% des bénéfice après IS/IMF", "taux</td><td>% des bénéfice après IS/IMF", "IRVM</td><td>FCFA"];
    let tab = bootstrap.tableSE(cote, null, {tab:myMath.arrondirTabUnit(monm.resultCompta.benefice_comptable),color:""},{tab: myMath.arrondirTabUnit(div, 2),color:"yellow"},{tab: myMath.arrondirTabUnit(irvm, 2),color:"blue"},{tab: myMath.arrondirTabUnit(monm.impotIRVM),color:""});
    return bootstrap.pan("default", null, tab);
};
GenererVue.prototype.actualisationHtml= function (monm) {
    let tab = bootstrap.tableSE(["actualisation"], null,{tab: myMath.arrondirTabUnit(monm.actualisation, 1),color:""});
    return bootstrap.pan("default", null, tab);
};
GenererVue.prototype.tabImpotEtTaxe= function (monm) {
    let cote = ["CFE</td><td>FCFA", "IS/IMF</td><td>FCFA", "IRVM</td><td>FCFA", "IRC</td><td>FCFA", "TVA Petrole</td><td>FCFA", "Total</td><td>FCFA"];
    let tab = bootstrap.tableSE(cote, null,
        {tab:myMath.arrondirTabUnit(monm.cfe),color:""},
        {tab:myMath.arrondirTabUnit(monm.isimf),color:""},
        {tab:myMath.arrondirTabUnit(monm.irvm),color:""},
        {tab:myMath.arrondirTabUnit(monm.irc),color:""},
        {tab:myMath.arrondirTabUnit(monm.tvaPetrole),color:""},
        {tab:myMath.arrondirTabUnit(monm.total),color:""}
    );
    return bootstrap.pan("default", null, tab);
};
GenererVue.prototype.tabTauxEffectifMoy= function (monm) {
    let tab = `<p> le TEMI est de ${Math.round(monm * 100) / 100} %</p>`;
    return bootstrap.pan("default", null, tab);
};
GenererVue.prototype.tabFluxTresorie= function (tab,color) {
    let cote = ["Courants</td><td>FCFA", "Actualisés</td><td>FCFA", " "];
    let lol = [null, null, null, null, null, null, null, "Somme"];
    //console.log(color);
    let mota = bootstrap.tableSE(cote, "<thead><tr><th/><th/><th/><th/><th/><th/><th/><th/><th>VAN</th></tr></thead>",
        {tab:myMath.arrondirTabUnit(tab.courant),color:"",colorFirstCase:color,fontColorLastCase:"selectedPosNegNumber"},
        {tab:myMath.arrondirTabUnit(tab.actu),color:"",colorFirstCase:color,fontColorLastCase:"selectedPosNegNumber"},{tab: lol,color:""});
    return bootstrap.pan("default", null, mota);
};
GenererVue.prototype.tauxRendementInt= function (tab) {
return bootstrap.pan("default", null, bootstrap.tableSE(["courants"], null, {
    tab: myMath.arrondirTabUnit(tab, 2),
    color: ""
}));
};



