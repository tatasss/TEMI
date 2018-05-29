let htmlFormPays = "<label for=\"sel1\">Pays:</label> <select class=\"form-control\" id=\"PAYS\">";
mesPays().forEach(function (item) {
    if (item.nom() !== "Guinée Bissao") {
        if (item.nom() !== "Guinée équatoriale") {
            htmlFormPays += `<option value=${item.code()}>${item.nom()}</option> `;
        }
    }
});
htmlFormPays += "</select>";
document.getElementById("formPays").innerHTML = htmlFormPays;

