var htmlFormPays="<label for=\"sel1\">Pays:</label> <select class=\"form-control\" id=\"PAYS\">";
for(var i=0;i<mesPays().length;i++){
    if(mesPays()[i].nom!=="Guinée Bissao"){
        if(mesPays()[i].nom!=="Guinée équatoriale"){
            htmlFormPays+=`<option value=${mesPays()[i].nom}>${mesPays()[i].nom}</option> `;
        }
    }

}
htmlFormPays+="</select>";
document.getElementById("formPays").innerHTML=htmlFormPays;
function mesPays(){

    var Pays=[];
    var ben=fabrique.investir(fabrique.impotPays(null,null,null),fabrique.isImpotPays(5,null,100,null,null),fabrique.impotPays(null,null,null),fabrique.impotPays(null,null,null),fabrique.impotPays(null,null,null),fabrique.impotPays(null,null,null));
    var bfa=fabrique.investir(fabrique.impotPays(5,null,100),fabrique.isImpotPays(5,null,null,50,50),fabrique.impotPays(null,null,null),fabrique.impotPays(null,null,null),fabrique.impotPays(null,null,null),fabrique.impotPays(null,null,null));
    var cmr=fabrique.investir(fabrique.impotPays(null,null,null),fabrique.isImpotPays(5,null,50,null,null),fabrique.impotPays(null,null,null),fabrique.impotPays(5,null,50),fabrique.impotPays(null,null,null),fabrique.impotPays(null,null,null));
    var caf=fabrique.investir(fabrique.impotPays(null,null,null),fabrique.isImpotPays(3,null,100,null,null),fabrique.impotPays(null,null,null),fabrique.impotPays(null,null,null),fabrique.impotPays(null,null,null),fabrique.impotPays(null,null,null));
    var cog=fabrique.investir(fabrique.impotPays(null,null,null),fabrique.isImpotPays(3,null,100,null,null),fabrique.impotPays(null,null,null),fabrique.impotPays(null,null,null),fabrique.impotPays(null,null,null),fabrique.impotPays(null,null,null));
    var civ=fabrique.investir(fabrique.impotPays(7,2.2,null),fabrique.isImpotPays(7,null,100,null,null),fabrique.impotPays(null,null,null),fabrique.impotPays(null,null,null),fabrique.impotPays(null,null,null),fabrique.impotPays(null,null,null));
    var gab=fabrique.investir(fabrique.impotPays(null,null,null),fabrique.isImpotPays(5,null,100,null,null),fabrique.impotPays(null,null,null),fabrique.impotPays(null,null,null),fabrique.impotPays(null,null,null),fabrique.impotPays(null,null,null));
    var mli=fabrique.investir(fabrique.impotPays(null,null,null),fabrique.isImpotPays(7,25,null,null,null),fabrique.impotPays(null,null,null),fabrique.impotPays(null,null,null),fabrique.impotPays(null,null,null),fabrique.impotPays(null,null,null));
    var ner=fabrique.investir(fabrique.impotPays(null,null,null),fabrique.isImpotPays(null,null,null,null,null),fabrique.impotPays(6,null,100),fabrique.impotPays(null,null,null),fabrique.impotPays(null,null,null),fabrique.impotPays(null,null,null));
    var sen=fabrique.investir(fabrique.impotPays(5,null,100),fabrique.isImpotPays(5,null,null,40,50),fabrique.impotPays(null,null,null),fabrique.impotPays(null,null,null),fabrique.impotPays(null,null,null),fabrique.impotPays(null,null,null));
    var tcd=fabrique.investir(fabrique.impotPays(null,null,null),fabrique.isImpotPays(5,null,100,null,null),fabrique.impotPays(5,null,100),fabrique.impotPays(null,null,null),fabrique.impotPays(null,null,null),fabrique.impotPays(null,null,null));
    var tgo=fabrique.investir(fabrique.impotPays(5,2,null),fabrique.isImpotPays(5,null,2,40,50),fabrique.impotPays(null,null,null),fabrique.impotPays(null,null,null),fabrique.impotPays(null,null,null),fabrique.impotPays(null,null,null));
    Pays.push(fabrique.pays("BEN","Benin",fabrique.impot(4,30,0.75,10,15,18),fabrique.ammortissement(20,10,2.5,3,2,10),ben));
    Pays.push(fabrique.pays("BFA","Burkina Faso",fabrique.impot(3,27.5,0.5,12.5,25,18),fabrique.ammortissement(20,10,2.5,3,2,10),bfa));
    Pays.push(fabrique.pays("CMR","Cameroun",fabrique.impot(2.5,33,2.2,16.5,16.5,19.25),fabrique.ammortissement(20,10,1,3,4,10),cmr));
    Pays.push(fabrique.pays("CAF","Republique Centraficaine",fabrique.impot(0,30,1.85,15,15,19),fabrique.ammortissement(20,10,1,3,4,10),caf));
    Pays.push(fabrique.pays("COG","Republique du Congo",fabrique.impot(7.5,30,1,15,15,18.9),fabrique.ammortissement(20,10,1,3,4,10),cog));
    Pays.push(fabrique.pays("CIV","Côte d'Ivoire",fabrique.impot(2.8,25,0.5,15,18,9),fabrique.ammortissement(20,5,2,3,2,10),civ));
    Pays.push(fabrique.pays("GAB","Gabon",fabrique.impot(5,30,1,20,20,18),fabrique.ammortissement(20,10,1,3,4,10),gab));
    Pays.push(fabrique.pays("GNB","Guinée Bissao","pas d'impot","pas d'ammortissement","pas d'investissment"));
    Pays.push(fabrique.pays("GNQ","Guinée équatoriale","pas d'impot","pas d'ammortissement","pas d'investissment"));
    Pays.push(fabrique.pays("MLI","Mali",fabrique.impot(7.5,30,1,10,13,18),fabrique.ammortissement(20,10,2.5,3,2,10),mli));
    Pays.push(fabrique.pays("NER","Niger",fabrique.impot(3,30,1.5,10,20,19),fabrique.ammortissement(20,10,1,4,2,10),ner));
    Pays.push(fabrique.pays("SEN","Senegal",fabrique.impot(3,30,0.5,10,16,18),fabrique.ammortissement(20,10,2.5,3,2,10),sen));
    Pays.push(fabrique.pays("TCD","Tchad",fabrique.impot(8.7,35,1.5,20,20,18),fabrique.ammortissement(20,10,1,3,3,10),tcd));
    Pays.push(fabrique.pays("TGO","Togo",fabrique.impot(3,29,1,13,6,18),fabrique.ammortissement(20,10,2.5,3,2,10),tgo));
    return Pays;
};