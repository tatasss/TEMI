const genererVue = new GenererVue(monModele);
let investPart = "<p>investissement : " + genererVue.modele.mesdon().investissement() + "</p>";

document.getElementById("invest").innerHTML = investPart;

let amm = genererVue.getAmmortGenneralHtml();
amm += "<br/>";
genererVue.modele.mesdon().amortissement().forEach(function (item) {
    amm += item.getHtml() + "<br/>";
});
document.getElementById("param").innerHTML =genererVue.modele.donnee.pays().nom();
document.getElementById("pet").innerHTML = genererVue.petroleHtml();
document.getElementById("ammort").innerHTML = amm;
document.getElementById("ammortExp").innerHTML = genererVue.ammortExcepHtml();
document.getElementById("emp").innerHTML = genererVue.emploieHtml();
document.getElementById("creance").innerHTML = genererVue.chargeFinancierHtml();
document.getElementById("compta").innerHTML = genererVue.comptableHtml();
document.getElementById("impot").innerHTML = genererVue.resultatImpotHtml();
document.getElementById("impotSoc").innerHTML = genererVue.impotSocieteHtml();
document.getElementById("impotfor").innerHTML = genererVue.impotForfaitHtml();
document.getElementById("ISIMF").innerHTML = genererVue.isImfHtml();
document.getElementById("irvm").innerHTML = genererVue.impotRevenuValeurMobilieres();
document.getElementById("actu").innerHTML = genererVue.actualisationHtml();
document.getElementById("impTaxeC").innerHTML = genererVue.tabImpotEtTaxe(genererVue.modele.mesdon().impotTaxeCourent());
document.getElementById("impTaxeA").innerHTML = genererVue.tabImpotEtTaxe(genererVue.modele.mesdon().impotTaxeActu());



document.getElementById("fluxeffmoyC").innerHTML = genererVue.tabTauxEffectifMoy(genererVue.modele.mesdon().tauxeffMoyCourent());
document.getElementById("fluxTresSaImp").innerHTML = genererVue.tabFluxTresorie(genererVue.modele.mesdon().fluxTresSansImp(), "red");
document.getElementById("fluxTresSaISIMF").innerHTML = genererVue.tabFluxTresorie(genererVue.modele.mesdon().fluxTresSansISIMF(), "blue");
document.getElementById("fluxTresAvImpot").innerHTML = genererVue.tabFluxTresorie(genererVue.modele.mesdon().fluxTresApresImpot(), "blue");
document.getElementById("tauxRendInterneSi").innerHTML = genererVue.tauxRendementInt(genererVue.modele.mesdon().tauxRendInterneSImp());
document.getElementById("tauxRendInterneSISIMF").innerHTML = genererVue.tauxRendementInt(genererVue.modele.mesdon().tauxRendInterneSISIMF());
document.getElementById("tauxRendInterneAi").innerHTML = genererVue.tauxRendementInt(genererVue.modele.mesdon().tauxRendInterneAImp());
document.getElementById("tauxEffMargImpApIsImf").innerHTML = genererVue.tauxRendementInt(genererVue.modele.mesdon().tauxEffMargImpApIsImf());
document.getElementById("tauxEffMargImpApImp").innerHTML = genererVue.tauxRendementInt(genererVue.modele.mesdon().tauxEffMargImpApImp());

