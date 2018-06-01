/**
 * @description the test
 */
function testModele1() {

    let i;
    let monTest = maker.armortirModele(26801197, 10, 2.5, "equipement");
    let html = `<p>${monTest.name()}</p>`;
    html += "<table class='table'><thead><tr><th>duree restante</th>";
    for (i = 0; i < 5; i++) {
        html += `<th>${monTest.dureeRestante()[i]}</th>`;
    }
    html += "</thead><tbody><tr><td>Base Amortissable</td>";
    for (i = 0; i < 5; i++) {
        html += `<td>${monTest.baseAmortissable()[i]}</td>`;
    }
    html += "</tr><tr><td>Taux Unitaire</td>";
    for (i = 0; i < 5; i++) {
        html += `<td>${monTest.tauxLineaire()[i]}</td>`;
    }
    html += "</tr><tr><td>Taux degressif</td>";
    for (i = 0; i < 5; i++) {
        html += `<td>${monTest.tauxDegressif()[i]}</td>`;
    }
    html += "</tr><tr><td>charge Amortissement</td>";
    for (i = 0; i < 5; i++) html += `<td>${monTest.chargeAmorti()[i]}</td>`;
    html += "</tr></tbody></table>";
    console.log(document.getElementById("test1"));
    document.getElementById("test1").innerHTML = html;
}

/**
 * @description the test
 */
function testModele2() {
    let amortissement = [];
    let donnee = new Data("BEN", "gen", 7.5, 22.5);
    let html = "<p>";
    let mE = donnee.firm();
    let mP = donnee.land();

    let pibchoix = donnee.land().pib;
    amortissement.push(maker.armortirModele(Math.trunc(mE.construction() * pibchoix), mP.amortization().construction(), mP.amortization().coefdegressif(), "construction"));
    amortissement.push(maker.armortirModele(mE.equipement() * pibchoix, mP.amortization().equipement(), mP.amortization().coefdegressif(), "equipement"));
    amortissement.push(maker.armortirModele(mE.camion() * pibchoix, mP.amortization().camion(), mP.amortization().coefdegressif(), "camion"));
    amortissement.push(maker.armortirModele(mE.info() * pibchoix, mP.amortization().info(), mP.amortization().coefdegressif(), "informatique"));
    amortissement.push(maker.armortirModele(mE.bureau() * pibchoix, mP.amortization().bureau(), mP.amortization().coefdegressif(), "bureau"));
    for (let i = 0; i < amortissement.length; i++) {
        html += amortissement[i].getHtml() + "<br/>";
    }
    html += "</p>";
    document.getElementById("test2").innerHTML = html;
}

/**
 * @description the test
 */
function testModele3() {
    let monm = new Model(new Data("BEN", "gen", 7.5, 22.5));

    let html = "<h1>investissment</h1><p>investissement : " + monm.mesdon().investissement() + "</p><h1>Ammortissment :</h1>";
    for (let i = 0; i < monm.mesdon().amortissement().length; i++) {
        html += monm.mesdon().amortissement()[i].getHtml() + "<br/>";
        document.getElementById("test3").innerHTML = html;
    }

}

/**
 * @description the test
 */
function testModele4() {
    let i;
    let monm = new Model(new Data("BEN", "gen", 7.5, 22.5));
    let html = "<p>contribution employer</p>";
    html += "<table class='table'><thead/>";
    html += "<tbody><tr><td>Salaire des cadres</td><td>FCFA</td>";
    for (i = 0; i < monm.mesdon().employer().salaire_cadre().length; i++) {
        html += `<td>${monm.mesdon().employer().salaire_cadre()[i]}</td>`;
    }
    html += "</tr><tr><td>Salaire des secretaires</td><td>FCFA</td>";
    for (i = 0; i < monm.mesdon().employer().salaire_secretaire().length; i++) {
        html += `<td>${monm.mesdon().employer().salaire_secretaire()[i]}</td>`;
    }
    html += "</tr><tr><td>Salaire des ouvrier</td><td>FCFA</td>";
    for (i = 0; i < monm.mesdon().employer().salaire_ouvrier().length; i++) {
        html += `<td>${monm.mesdon().employer().salaire_ouvrier()[i]}</td>`;
    }
    html += "</tr><tr><td>masse Salarial</td><td>FCFA</td>";
    for (i = 0; i < monm.mesdon().employer().masse_salarial().length; i++) {
        html += `<td>${monm.mesdon().employer().masse_salarial()[i]}</td>`;
    }
    html += "</tr><tr><td>taux</td><td>%</td>";
    for (i = 0; i < monm.mesdon().employer().tauxCfe().length; i++) {
        html += `<td>${monm.mesdon().employer().tauxCfe()[i]}</td>`;
    }
    html += "</tr><tr><td>CFE</td><td>FCFA</td>";
    for (i = 0; i < monm.mesdon().employer().reel_CFE().length; i++) {
        html += `<td>${monm.mesdon().employer().reel_CFE()[i]}</td>`;
    }
    html += "</tr></tbody></table>";

    document.getElementById("test4").innerHTML = html;
}

/**
 * @description the test
 */
function testModele5() {
    let mod = new Model(new Data("BEN", "gen", 7.5, 22.5));
    document.getElementById("test5").innerHTML = bootstrap.tableSE(["actualisation"], null, {
        tab: mod.mesdon().actualisation(),
        color: ""
    });
}
