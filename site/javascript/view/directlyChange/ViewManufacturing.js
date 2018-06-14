let htmlFormPays = "<label for=\"sel1\">Pays:</label> <select class=\"form-control\" id=\"PAYS\">";
land.pays.forEach(function (item) {
    if (item.name() !== "Guinée Bissao") {
        if (item.name() !== "Guinée équatoriale") {
            htmlFormPays += `<option value=${item.code()}>${item.name()}</option> `;
        }
    }
});
htmlFormPays += "</select>";

document.getElementById("formPays").innerHTML = htmlFormPays;
