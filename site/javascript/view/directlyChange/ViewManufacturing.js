var htmlFormPays="<label for=\"sel1\">Pays:</label> <select class=\"form-control\" id=\"PAYS\">";
for(var i=0;i<mesPays().length;i++){
    if(mesPays()[i].nom!=="Guinée Bissao"){
        if(mesPays()[i].nom!=="Guinée équatoriale"){
            htmlFormPays+=`<option value=${mesPays()[i].code}>${mesPays()[i].nom}</option> `;
            //console.log(mesPays()[i].code)
        }
    }

}
htmlFormPays+="</select>";
document.getElementById("formPays").innerHTML=htmlFormPays;

