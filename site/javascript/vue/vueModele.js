const monm = modele();
let investPart = "<p>investissement : " + monm.investissement + "</p>";

document.getElementById("invest").innerHTML = investPart;
let amm=monm.getAmmortHtml();
amm+="<br/>"
for(var i=0;i<monm.amortissement.length;i++){
    amm+=monm.amortissement[i].getHtml()+"<br/>";

}
document.getElementById("pet").innerHTML=genererVue.petroleHtml(monm.taxeAjout);
document.getElementById("ammort").innerHTML=amm;
document.getElementById("emp").innerHTML=genererVue.emploieHtml(monm);