const monm = modele();
let investPart = "<p>investissement : " + monm.investissement + "</p>";

document.getElementById("invest").innerHTML = investPart;
let amm=genererVue.getAmmortGenneralHtml(monm);
amm+="<br/>";
for(let i=0;i<monm.amortissement.length;i++){
    amm+=monm.amortissement[i].getHtml()+"<br/>";

}

console.log(donne.get().mP.pib)
document.getElementById("pet").innerHTML=genererVue.petroleHtml(monm.taxeAjout);
document.getElementById("ammort").innerHTML=amm;
document.getElementById("ammortExp").innerHTML=genererVue.ammortExcepHtml(monm);
document.getElementById("emp").innerHTML=genererVue.emploieHtml(monm);
document.getElementById("creance").innerHTML=genererVue.chargeFinancierHtml(monm.taxeCreance);
document.getElementById("compta").innerHTML=genererVue.comptableHtml(monm);
document.getElementById("impot").innerHTML=genererVue.resultatImpotHtml(monm);
document.getElementById("impotSoc").innerHTML=genererVue.impotSocieteHtml(monm);
document.getElementById("impotfor").innerHTML=genererVue.impotForfaitHtml(monm);
document.getElementById("ISIMF").innerHTML=genererVue.isImfHtml(monm);
document.getElementById("irvm").innerHTML=genererVue.impotRevenuValeurMobilieres(monm);
document.getElementById("actu").innerHTML=genererVue.actualisationHtml(monm);
document.getElementById("impTaxeC").innerHTML=genererVue.tabImpotEtTaxe(monm.impotTaxeCourent);
document.getElementById("impTaxeA").innerHTML=genererVue.tabImpotEtTaxe(monm.impotTaxeActu);
document.getElementById("fluxTresSaImp").innerHTML=genererVue.tabFluxTresorie(monm.fluxTresSansImp);
document.getElementById("fluxeffmoyC").innerHTML=genererVue.tabTauxEffectifMoy(monm.fluxeffMoyCourent);
document.getElementById("fluxeffmoyA").innerHTML=genererVue.tabTauxEffectifMoy(monm.fluxeffMoyActualise);
document.getElementById("fluxTresSaISIMF").innerHTML=genererVue.tabFluxTresorie(monm.fluxTresSansISIMF);
document.getElementById("fluxTresAvImpot").innerHTML=genererVue.tabFluxTresorie(monm.fluxTresApresImpot);
document.getElementById("tauxRendInterneSi").innerHTML=genererVue.tauxRendementInt(monm.tauxRendInterneSImp);
document.getElementById("tauxRendInterneSISIMF").innerHTML=genererVue.tauxRendementInt(monm.tauxRendInterneSISIMF);
document.getElementById("tauxRendInterneAi").innerHTML=genererVue.tauxRendementInt(monm.tauxRendInterneAImp);
document.getElementById("tauxEffMargImpApIsImf").innerHTML=genererVue.tauxRendementInt(monm.tauxEffMargImpApIsImf);
document.getElementById("tauxEffMargImpApImp").innerHTML=genererVue.tauxRendementInt(monm.tauxEffMargImpApImp);
//console.log(modeleManager.tauxRendementInterne(monm.fluxTresSansImp.courant));

