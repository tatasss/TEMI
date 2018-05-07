const monm = modele();
let investPart = "<p>investissement : " + monm.investissement + "</p>";

document.getElementById("invest").innerHTML = investPart;
let amm=genererVue.getAmmortGenneralHtml(monm);
amm+="<br/>"
for(var i=0;i<monm.amortissement.length;i++){
    amm+=monm.amortissement[i].getHtml()+"<br/>";

}
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
