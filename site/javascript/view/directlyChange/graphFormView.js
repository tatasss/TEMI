let cptEnt=0;
let paysChoisi=[];
let paysChoisiHtml=[];
let margeTab=[];
let ent=[];
let posIn=0;


 supelemPays=function(code){

    // console.log("code de :" + code)
     paysChoisi.forEach(function(item, index) {
         //console.log(index);
         if(ref.donnerCodePays(item)===code){
             paysChoisi.splice(index,1);
             paysChoisiHtml.splice(index,1);

         }
     });
     posIn=1;
     //console.log(posIn);
     document.body.click();
     //console.log(index);
    //paysChoisi=monTab;
};
supelemEnt=function(marge){
    let madon;
    let cptEnt2 = 0;
    ent=[];
    margeTab.forEach(function(item,index){
        if(item===marge){
            margeTab.splice(index,1);

        }
       // console.log(margeTab.toString());
    });
    margeTab.forEach(function(item){
        madon = `<strong>entreprise ${cptEnt2 + 1} :</strong><br/>taux de marge:<br/>${item} % `;
        madon += bootstrap.buttonBaBu("danger", `supelemEnt('${item}')`, "<spam class='glyphicon glyphicon-remove'/> supprimer", item);
        ent.push(madon);
        cptEnt2+=1;
    });
    //console.log(margeTab);
    cptEnt=cptEnt2;
    posIn=2;
};
let htmlFormPays = "<label for=\"sel1\">Pays:</label> <select class=\"form-control\" id=\"PAYS\">";
htmlFormPays+=`<option value='tousPays'>Tous les Pays</option> `;
for(let i=0; i<mesPays().length; i++){
    if(mesPays()[i].nom!=="Guinée Bissao"){
        if(mesPays()[i].nom!=="Guinée équatoriale"){
            htmlFormPays+=`<option value=${mesPays()[i].code}>${mesPays()[i].nom}</option> `;
            //console.log(mesPays()[i].code)
        }
    }


}
htmlFormPays+="</select>";
document.getElementById("formPays").innerHTML=htmlFormPays;
let reg;
$( "body" ).delegate( "button", "click", function() {
    let bool;
    if($(this).parents('div').attr('id')==="addPays"){
        posIn=1;

        if($("#PAYS").val()==="tousPays"){
            paysChoisi=[];
            for (let i=0;i<mesPays().length;i++){
                if(mesPays()[i].nom!=="Guinée Bissao") {
                    if (mesPays()[i].nom !== "Guinée équatoriale") {
                        paysChoisi.push(mesPays()[i].nom);
                    }
                }
            }
        }
        else {
            bool = false;
            for (let i = 0; i < paysChoisi.length; i++) {
                if (paysChoisi[i] === ref.donnerNomPays($('#PAYS').val())) {
                    bool = true;
                }
            }


            if (bool === false) {
                paysChoisi.push(ref.donnerNomPays($('#PAYS').val()));
            }
           // console.log(paysChoisi.toString());
        }

    }
    if($(this).parents('div').attr('id')==="addEnt"){

        try {
            verifPourcent($('#marge').val());

            posIn = 2;

            bool = false;

            let madon = `<strong>entreprise ${cptEnt + 1} :</strong><br/>taux de marge:<br/>${$('#marge').val()} % `;
            madon += bootstrap.buttonBaBu("danger", `supelemEnt('${$('#marge').val()}')`, "<spam class='glyphicon glyphicon-remove'/> supprimer", $('#marge').val());

            for (let i = 0; i < margeTab.length; i++) {
                if (margeTab[i] === $('#marge').val()) {
                    bool = true;
                }
            }


            if (bool === false) {
                margeTab.push($('#marge').val());
                ent.push(madon);
                cptEnt += 1;
            }
        }
        catch(e){
            alert(e.toString());
        }
        //console.log(ent.toString());
    }
    paysChoisiHtml=[];
    for(let i =0;i<paysChoisi.length;i++){
        paysChoisiHtml.push(paysChoisi[i] +bootstrap.buttonBaBu("danger",`supelemPays('${ref.donnerCodePays(paysChoisi[i])}')`,"<spam class='glyphicon glyphicon-remove'/> supprimer",ref.donnerCodePays(paysChoisi[i])));
    }
    //console.log(paysChoisi.length);
    //console.log(margeTab.length);

    let donneTab = [];
    let modeleTab = [];
    for(let i=0;i<paysChoisi.length;i++){
                donneTab.push([]);
                //console.log(donneTab[i]);
                for(let j=0;j<margeTab.length;j++){

                    donneTab[i].push(new Donne(ref.donnerCodePays(paysChoisi[i]),localStorage.getItem("compatRegime"),localStorage.getItem("compaActu"),margeTab[j]));
                }
            }
            //console.log(donneTab);
            for (let i=0;i<donneTab.length;i++) {
                modeleTab[i] = [];
                for (let j = 0; j < margeTab.length; j++) {
                    modeleTab[i].push({donne:donneTab[i][j],modele:new Modele(donneTab[i][j])});
                }
            }
            graph.graphique(modeleTab,"chartCompa",reg);

    document.getElementById("param").innerHTML=bootstrap.collapse(posIn,{tittle:"pays",body:bootstrap.listeItem(paysChoisiHtml)},
        {tittle:"entreprise :",body:bootstrap.listeItem(ent)});
});
reg = " ";
if(localStorage.getItem("compatRegime")==="gen"){
    reg="codes générales des impots";
}
else{
    reg="codes des investissements";
}
document.getElementById("info").innerHTML=`<p>Le taux d'actualisation pour toutes les entreprises est de ${localStorage.getItem("compaActu")} %.<br/> Le regime dans tous les pays utilisé par les entreprises est : ${reg} .`;
//[pays][entreprise]
