let startTime = new Date().getTime();

let elapsedTime = 0;
let monModele;
if (localStorage.getItem("don") !== undefined && localStorage.getItem("don") !== null) {
    let tab = localStorage.getItem("don").split(",");

    monModele = new Modele(new Donne(tab[0], tab[1], tab[2], tab[3]));
}

/**
 * @description This function show a modal when u click on the button "demarrer comparaison"
 */
function showModal() {

    $("#myBtn").click(function () {
        $("#myModal").modal();


    });
    $("#myCont").click(function () {
        //$("#myModal").modal("hide");

        debutCompa($("#actualistionCompa").val(), $("#REGIMECmpta").val());
    });


}

/**
 * @description This function load a graphForm page anf load on memory actu and regime
 * @param {number} actu - the actu rates of the firm
 * @param {string} regime - the regime use by the user
 */
function debutCompa(actu, regime) {
    console.log("ici");

    try {

        actu = verifPourcent(actu);
        localStorage.setItem("compaActu", actu);
        localStorage.setItem("compatRegime", regime);
        let stateObj = {foo: "bar"};

        history.pushState(stateObj, window.location.href);
        console.log(history.state);
        window.location.href = "./graphForm.html";
        history.replaceState(stateObj, "some useless title", "./graphForm.html");
    } catch (e) {
        alert(e.toString());
        document.location.href = "./index.html"
    }
}

/**
 * @description This function start the calcul with a parameters enter on html page
 */
function validateForm() {
    let actualisation = $("#actualisation").val();
    let marge = $("#marge").val();
    try {
        actualisation = verifPourcent(actualisation);
    }
    catch (e) {
        alert("Le taux d'actualisation doit être compris entre 0 et 100");
        return;
    }
    try {
        marge = verifPourcent(marge);
    }
    catch (e) {
        alert("Le taux de marge doit être compris entre 0 et 100 ");
        return;
    }
    let pays = $("#PAYS").val();
    let regime = $("#REGIME").val();
    //var x =data + "\n"+pibpnb+ "\n"+pays+"\n"+regime;
    localStorage.setItem("don", [pays, regime, actualisation, marge].toString());
    let donne = new Donne(pays, regime, actualisation, marge);
    if (donne.pays() !== undefined) {
        if (donne.pays() != null) {
            let XD=donne.pays().code();
            //while(localStorage.getItem("xmlPib : " +XD)==null) {

                console.log("pib du pays : "+donne.pays().pib.toString());

            //}
        }
    }
    monModele = new Modele(donne);
    let genererVue = new GenererVue(monModele);
    document.getElementById("result").innerHTML = genererVue.mainHTML(pays, regime, actualisation, marge);
    elapsedTime = new Date().getTime() - startTime;
}

/**
 * @description This function give the XMLHttpRequest Object
 * @return {XMLHttpRequest}
 */
function getXMLHttpRequest() {
    let xhr = null;
    if (window.XMLHttpRequest || window.ActiveXObject) {
        if (window.ActiveXObject) {
            try {
                xhr = new ActiveXObject("Msxml2.XMLHTTP");
            } catch (e) {
                xhr = new ActiveXObject("Microsoft.XMLHTTP");
            }
        } else {
            xhr = new XMLHttpRequest();
        }
    } else {
        alert("Votre navigateur ne supporte pas l'objet XMLHTTPRequest...");
        return null;
    }

    return xhr;
}

/**
 * @description This function verify if the the number is a purcent
 * @param {number} nombre - the number wold u verify if it's a purcent number
 * @return {number }
 */
function verifPourcent(nombre) {
    //console.log(nombre);
    let regex1 = /^[0-9]*[.]?[0-9]*$/;
    if (!regex1.test(nombre)) {
        throw new Error("Veuillez entrer un pourcentage");
    }
    if (nombre === "") {
        throw new Error("Veuillez entrer quelque chose");
    }
    if (nombre === undefined) {
        throw new Error("Veuillez entrer quelque chose");
    }
    if (nombre === null) {
        throw new Error("Veuillez entrer quelque chose");
    }

    nombre = parseFloat(nombre);
    if (nombre > 100) {
        throw new Error("le chiffre est supérieur à 100");
    }
    if (nombre < 0) {
        throw new Error("le chiffre est inférieur à 00");
    }
    return nombre;
}

/**
 * @description This function create all the land and put it on an Array
 * @return {Array}
 */
function mesPays() {

    let Pays = [];
    let ben = fabrique.investir(fabrique.impotPays(null, null, null), fabrique.isImpotPays(5, null, 100, null, null), fabrique.impotPays(null, null, null), fabrique.impotPays(null, null, null), fabrique.impotPays(null, null, null), fabrique.impotPays(null, null, null));
    let bfa = fabrique.investir(fabrique.impotPays(5, null, 100), fabrique.isImpotPays(5, null, null, 50, 50), fabrique.impotPays(null, null, null), fabrique.impotPays(null, null, null), fabrique.impotPays(null, null, null), fabrique.impotPays(null, null, null));
    let cmr = fabrique.investir(fabrique.impotPays(null, null, null), fabrique.isImpotPays(5, null, 50, null, null), fabrique.impotPays(null, null, null), fabrique.impotPays(5, null, 50), fabrique.impotPays(null, null, null), fabrique.impotPays(null, null, null));
    let caf = fabrique.investir(fabrique.impotPays(null, null, null), fabrique.isImpotPays(3, null, 100, null, null), fabrique.impotPays(null, null, null), fabrique.impotPays(null, null, null), fabrique.impotPays(null, null, null), fabrique.impotPays(null, null, null));
    let cog = fabrique.investir(fabrique.impotPays(null, null, null), fabrique.isImpotPays(3, null, 100, null, null), fabrique.impotPays(null, null, null), fabrique.impotPays(null, null, null), fabrique.impotPays(null, null, null), fabrique.impotPays(null, null, null));
    let civ = fabrique.investir(fabrique.impotPays(7, 2.2, null), fabrique.isImpotPays(7, null, 100, null, null), fabrique.impotPays(null, null, null), fabrique.impotPays(null, null, null), fabrique.impotPays(null, null, null), fabrique.impotPays(null, null, null));
    let gab = fabrique.investir(fabrique.impotPays(null, null, null), fabrique.isImpotPays(5, null, 100, null, null), fabrique.impotPays(null, null, null), fabrique.impotPays(null, null, null), fabrique.impotPays(null, null, null), fabrique.impotPays(null, null, null));
    let mli = fabrique.investir(fabrique.impotPays(null, null, null), fabrique.isImpotPays(7, 25, null, null, null), fabrique.impotPays(null, null, null), fabrique.impotPays(null, null, null), fabrique.impotPays(null, null, null), fabrique.impotPays(null, null, null));
    let ner = fabrique.investir(fabrique.impotPays(null, null, null), fabrique.isImpotPays(null, null, null, null, null), fabrique.impotPays(6, null, 100), fabrique.impotPays(null, null, null), fabrique.impotPays(null, null, null), fabrique.impotPays(null, null, null));
    let sen = fabrique.investir(fabrique.impotPays(5, null, 100), fabrique.isImpotPays(5, null, null, 40, 50), fabrique.impotPays(null, null, null), fabrique.impotPays(null, null, null), fabrique.impotPays(null, null, null), fabrique.impotPays(null, null, null));
    let tcd = fabrique.investir(fabrique.impotPays(null, null, null), fabrique.isImpotPays(5, null, 100, null, null), fabrique.impotPays(5, null, 100), fabrique.impotPays(null, null, null), fabrique.impotPays(null, null, null), fabrique.impotPays(null, null, null));
    let tgo = fabrique.investir(fabrique.impotPays(5, 2, null), fabrique.isImpotPays(5, null, 2, 40, 50), fabrique.impotPays(null, null, null), fabrique.impotPays(null, null, null), fabrique.impotPays(null, null, null), fabrique.impotPays(null, null, null));
    Pays.push(fabrique.pays("BEN", "Benin", fabrique.impot(4, 30, 0.75, 10, 15, 18), fabrique.ammortissement(20, 10, 2.5, 3, 2, 10), ben,"Exonération d’IS pendant 5 ans","Code des investissements <br/>régime A<br/> zone 1\n"));
    Pays.push(fabrique.pays("BFA", "Burkina Faso", fabrique.impot(3, 27.5, 0.5, 12.5, 25, 18), fabrique.ammortissement(20, 10, 2.5, 3, 2, 10), bfa,"– Exonération de la taxe patronale d’apprentissage pendant 5 ans.\n" +
        "– Déduction d’IS pendant 5 ans, à hauteur de 50% de l’investissement, dans la limite de 50% du bénéfice imposable.\n","Code des investissements\n" +
        "<br/>régime A<br/> zone normale,<br/>" +
        "bien que le seuil d’investissement de 100 millions de FCFA ne soit pas atteint.\n"));
    Pays.push(fabrique.pays("CMR", "Cameroun", fabrique.impot(2.5, 33, 2.2, 16.5, 16.5, 19.25), fabrique.ammortissement(20, 10, 1, 3, 4, 10), cmr,"– Réduction de 50% de l’IS pendant 5 ans.\n" +
        "– Réduction de 50% de l’IRVM sur les dividendes pendant 5 ans\n","Modalités d’application des incitations à l’investissement privé" +
        "<br/>catégorie A"));
    Pays.push(fabrique.pays("CAF", "Republique Centraficaine", fabrique.impot(0, 30, 1.85, 15, 15, 19), fabrique.ammortissement(20, 10, 1, 3, 4, 10), caf,"Exonération d’IS pendant 3 ans","Charte des investissements\n" +
        "<br/>zone normale.\n"));
    Pays.push(fabrique.pays("COG", "Republique du Congo", fabrique.impot(7.5, 30, 1, 15, 15, 18.9), fabrique.ammortissement(20, 10, 1, 3, 4, 10), cog,"– Exonération d’IS pendant 3 ans.","Modalités d’application de la charte des investissements\n" +
        "<br/>régime général G<br/> zone unique<br/>"));
    Pays.push(fabrique.pays("CIV", "Côte d Ivoire", fabrique.impot(2.8, 25, 0.5, 15, 18, 9), fabrique.ammortissement(20, 5, 2, 3, 2, 10), civ,"– Réduction de 50% de la contribution nationale pour le développement économique, culturel et social de la nation pendant 7 ans.,– Exonération d’IS pendant 7 ans.","Code des investissements\n" +
        "<br/>régime d’agrément élargi aux PME<br/> zone A.\n"));
    Pays.push(fabrique.pays("GAB", "Gabon", fabrique.impot(5, 30, 1, 20, 20, 18), fabrique.ammortissement(20, 10, 1, 3, 4, 10), gab,"Exonération d’IS pendant 5 ans.","Promotion des PME et PMI,<br/>" +
        "bien que le chiffre d’affaires annuel dépasse 2 milliards de FCFA.\n"));
    Pays.push(fabrique.pays("GNB", "Guinée Bissao", "pas d'impot", "pas d'ammortissement", "pas d'investissment","",""));
    Pays.push(fabrique.pays("GNQ", "Guinée équatoriale", "pas d'impot", "pas d'ammortissement", "pas d'investissment","",""));
    Pays.push(fabrique.pays("MLI", "Mali", fabrique.impot(7.5, 30, 1, 10, 13, 18), fabrique.ammortissement(20, 10, 2.5, 3, 2, 10), mli,"Taux réduit d’IS (25% au lieu de 30%) pendant 7 ans.","Code des investissements\n" +
        "<br/>régime A<br/>zone unique\n"));
    Pays.push(fabrique.pays("NER", "Niger", fabrique.impot(3, 30, 1.5, 10, 20, 19), fabrique.ammortissement(20, 10, 1, 4, 2, 10), ner,"Exonération d’IMF pendant 6 ans","Code des investissements\n" +
        "<br/>régime promotionnel<br/>\n" +
        "zone normale"));
    Pays.push(fabrique.pays("SEN", "Senegal", fabrique.impot(3, 30, 0.5, 10, 16, 18), fabrique.ammortissement(20, 10, 2.5, 3, 2, 10), sen,"",""));
    Pays.push(fabrique.pays("TCD", "Tchad", fabrique.impot(8.7, 35, 1.5, 20, 20, 18), fabrique.ammortissement(20, 10, 1, 3, 3, 10), tcd,"",""));
    Pays.push(fabrique.pays("TGO", "Togo", fabrique.impot(3, 29, 1, 13, 6, 18), fabrique.ammortissement(20, 10, 2.5, 3, 2, 10), tgo,"",""));
    return Pays;
}

/*
function testModele1(){

	var monTest= manufacturing.armortirModele(26801197,10,2.5,"equipement");
    var html="<p>"+monTest.nom+"</p>"
	html+="<table class='table'><thead><tr><th>duree restante</th>";
	for(var i=0;i<5;i++){
		html+="<th>"+monTest.dureeRestante[i]+"</th>";
	}
	html+="</thead><tbody><tr><td>Base Amortissable</td>";
    for(var i=0;i<5;i++){
        html+="<td>"+monTest.baseAmortissable[i]+"</td>";
    }
    html+="</tr><tr><td>Taux Unitaire</td>"
    for(var i=0;i<5;i++){
        html+="<td>"+monTest.tauxLineaire[i]+"</td>";
    }
    html+="</tr><tr><td>Taux degressif</td>";
    for(var i=0;i<5;i++){
        html+="<td>"+monTest.tauxDegressif[i]+"</td>";
    }
    html+="</tr><tr><td>charge Amortissement</td>";
    for(var i=0;i<5;i++){
	html+="<td>"+monTest.chargeAmorti[i]+"</td>";
    }
    html+="</tr></tbody></table>";
    console.log(document.getElementById("test1"));
    document.getElementById("test1").innerHTML=html;
}
function testModele2(){
	var amortissement=[];
	var html="<p>";
	var mE=data.get().mE;
	var mP=data.get().mP;
	var pibchoix=data.get().pibChoisi;
    amortissement.push(manufacturing.armortirModele(Math.trunc(mE.construction*pibchoix),mP.ammort.construction,mP.ammort.coefdegressif,"construction"));
    amortissement.push(manufacturing.armortirModele(mE.equipement*pibchoix,mP.ammort.equipement,mP.ammort.coefdegressif,"equipement"));
    amortissement.push(manufacturing.armortirModele(mE.camion*pibchoix,mP.ammort.camion,mP.ammort.coefdegressif,"camion"));
    amortissement.push(manufacturing.armortirModele(mE.info*pibchoix,mP.ammort.info,mP.ammort.coefdegressif,"informatique"));
    amortissement.push(manufacturing.armortirModele(mE.bureau*pibchoix,mP.ammort.bureau,mP.ammort.coefdegressif,"bureau"));
    for(var i=0;i<amortissement.length;i++){
    	html+=amortissement[i].getHtml()+"<br/>";
	}
	html+="</p>";
    document.getElementById("test2").innerHTML=html;
}
function testModele3(){
	var monm=model();

	var html="<h1>investissment</h1><p>investissement : "+monm.investissement+"</p><h1>Ammortissment :</h1>"+monm.getAmmortHtml();
    for(var i=0;i<monm.amortissement.length;i++){
        html+=monm.amortissement[i].getHtml()+"<br/>";
        document.getElementById("test3").innerHTML=html;
    }

}
function testModele4(){
    var monm=model();
    var html="<p>contribution employer</p>";
    html+="<table class='table'><thead></thead>";
    html+="<tbody><tr><td>Salaire des cadres</td><td>FCFA</td>";
    for(var i=0;i<monm.employer.salaire_cadre.length;i++){
        html+="<td>"+monm.employer.salaire_cadre[i]+"</td>";
    }
    html+="</tr><tr><td>Salaire des secretaires</td><td>FCFA</td>";
    for(var i=0;i<monm.employer.salaire_secretaire.length;i++){
        html+="<td>"+monm.employer.salaire_secretaire[i]+"</td>";
    }
    html+="</tr><tr><td>Salaire des ouvrier</td><td>FCFA</td>";
    for(var i=0;i<monm.employer.salaire_ouvrier.length;i++){
        html+="<td>"+monm.employer.salaire_ouvrier[i]+"</td>";
    }
    html+="</tr><tr><td>masse Salarial</td><td>FCFA</td>";
    for(var i=0;i<monm.employer.masse_salarial.length;i++){
        html+="<td>"+monm.employer.masse_salarial[i]+"</td>";
    }
    html+="</tr><tr><td>taux</td><td>%</td>";
    for(var i=0;i<monm.employer.tauxCfe.length;i++){
        html+="<td>"+monm.employer.tauxCfe[i]+"</td>";
    }
    html+="</tr><tr><td>CFE</td><td>FCFA</td>";
    for(var i=0;i<monm.employer.reel_CFE.length;i++){
        html+="<td>"+monm.employer.reel_CFE[i]+"</td>";
    }
    html+="</tr></tbody></table>";

    document.getElementById("test4").innerHTML=html;
}*/