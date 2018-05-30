let startTime = new Date().getTime();

let elapsedTime = 0;
let monModele;
if (localStorage.getItem("don") !== undefined && localStorage.getItem("don") !== null) {
    let tab = localStorage.getItem("don").split(",");

    monModele = new Model(new Data(tab[0], tab[1], tab[2], tab[3]));
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
 * @description This function load a graphForm page anf load on memory topic and government
 * @param {number} actu - the topic rates of the firm
 * @param {string} regime - the government use by the user
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
    //var x =data + "\n"+pibpnb+ "\n"+land+"\n"+government;
    localStorage.setItem("don", [pays, regime, actualisation, marge].toString());
    let donne = new Data(pays, regime, actualisation, marge);
    if (donne.land() !== undefined) {
        if (donne.land() != null) {
            //let XD=donne.land().code();
            //while(localStorage.getItem("xmlPib : " +XD)==null) {

                console.log("pib du land : "+donne.land().pib.toString());

            //}
        }
    }
    monModele = new Model(donne);
    let genererVue = new ViewGenerator(monModele);
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
    let ben = maker.investir(maker.impotPays(null, null, null), maker.isImpotPays(5, null, 100, null, null), maker.impotPays(null, null, null), maker.impotPays(null, null, null), maker.impotPays(null, null, null), maker.impotPays(null, null, null));
    let bfa = maker.investir(maker.impotPays(5, null, 100), maker.isImpotPays(5, null, null, 50, 50), maker.impotPays(null, null, null), maker.impotPays(null, null, null), maker.impotPays(null, null, null), maker.impotPays(null, null, null));
    let cmr = maker.investir(maker.impotPays(null, null, null), maker.isImpotPays(5, null, 50, null, null), maker.impotPays(null, null, null), maker.impotPays(5, null, 50), maker.impotPays(null, null, null), maker.impotPays(null, null, null));
    let caf = maker.investir(maker.impotPays(null, null, null), maker.isImpotPays(3, null, 100, null, null), maker.impotPays(null, null, null), maker.impotPays(null, null, null), maker.impotPays(null, null, null), maker.impotPays(null, null, null));
    let cog = maker.investir(maker.impotPays(null, null, null), maker.isImpotPays(3, null, 100, null, null), maker.impotPays(null, null, null), maker.impotPays(null, null, null), maker.impotPays(null, null, null), maker.impotPays(null, null, null));
    let civ = maker.investir(maker.impotPays(7, 2.2, null), maker.isImpotPays(7, null, 100, null, null), maker.impotPays(null, null, null), maker.impotPays(null, null, null), maker.impotPays(null, null, null), maker.impotPays(null, null, null));
    let gab = maker.investir(maker.impotPays(null, null, null), maker.isImpotPays(5, null, 100, null, null), maker.impotPays(null, null, null), maker.impotPays(null, null, null), maker.impotPays(null, null, null), maker.impotPays(null, null, null));
    let mli = maker.investir(maker.impotPays(null, null, null), maker.isImpotPays(7, 25, null, null, null), maker.impotPays(null, null, null), maker.impotPays(null, null, null), maker.impotPays(null, null, null), maker.impotPays(null, null, null));
    let ner = maker.investir(maker.impotPays(null, null, null), maker.isImpotPays(null, null, null, null, null), maker.impotPays(6, null, 100), maker.impotPays(null, null, null), maker.impotPays(null, null, null), maker.impotPays(null, null, null));
    let sen = maker.investir(maker.impotPays(5, null, 100), maker.isImpotPays(5, null, null, 40, 50), maker.impotPays(null, null, null), maker.impotPays(null, null, null), maker.impotPays(null, null, null), maker.impotPays(null, null, null));
    let tcd = maker.investir(maker.impotPays(null, null, null), maker.isImpotPays(5, null, 100, null, null), maker.impotPays(5, null, 100), maker.impotPays(null, null, null), maker.impotPays(null, null, null), maker.impotPays(null, null, null));
    let tgo = maker.investir(maker.impotPays(5, 2, null), maker.isImpotPays(5, null, 2, 40, 50), maker.impotPays(null, null, null), maker.impotPays(null, null, null), maker.impotPays(null, null, null), maker.impotPays(null, null, null));
    Pays.push(maker.land("BEN", "Benin", maker.impot(4, 30, 0.75, 10, 15, 18), maker.ammortissement(20, 10, 2.5, 3, 2, 10), ben,"Exonération d’IS pendant 5 ans","Code des investissements <br/>régime A<br/> zone 1\n"));
    Pays.push(maker.land("BFA", "Burkina Faso", maker.impot(3, 27.5, 0.5, 12.5, 25, 18), maker.ammortissement(20, 10, 2.5, 3, 2, 10), bfa,"– Exonération de la taxe patronale d’apprentissage pendant 5 ans.\n" +
        "– Déduction d’IS pendant 5 ans, à hauteur de 50% de l’investissement, dans la limite de 50% du bénéfice imposable.\n","Code des investissements\n" +
        "<br/>régime A<br/> zone normale,<br/>" +
        "bien que le seuil d’investissement de 100 millions de FCFA ne soit pas atteint.\n"));
    Pays.push(maker.land("CMR", "Cameroun", maker.impot(2.5, 33, 2.2, 16.5, 16.5, 19.25), maker.ammortissement(20, 10, 1, 3, 4, 10), cmr,"– Réduction de 50% de l’IS pendant 5 ans.\n" +
        "– Réduction de 50% de l’IRVM sur les dividendes pendant 5 ans\n","Modalités d’application des incitations à l’investissement privé" +
        "<br/>catégorie A"));
    Pays.push(maker.land("CAF", "Republique Centraficaine", maker.impot(0, 30, 1.85, 15, 15, 19), maker.ammortissement(20, 10, 1, 3, 4, 10), caf,"Exonération d’IS pendant 3 ans","Charte des investissements\n" +
        "<br/>zone normale.\n"));
    Pays.push(maker.land("COG", "Republique du Congo", maker.impot(7.5, 30, 1, 15, 15, 18.9), maker.ammortissement(20, 10, 1, 3, 4, 10), cog,"– Exonération d’IS pendant 3 ans.","Modalités d’application de la charte des investissements\n" +
        "<br/>régime général G<br/> zone unique<br/>"));
    Pays.push(maker.land("CIV", "Côte d Ivoire", maker.impot(2.8, 25, 0.5, 15, 18, 9), maker.ammortissement(20, 5, 2, 3, 2, 10), civ,"– Réduction de 50% de la contribution nationale pour le développement économique, culturel et social de la nation pendant 7 ans.,– Exonération d’IS pendant 7 ans.","Code des investissements\n" +
        "<br/>régime d’agrément élargi aux PME<br/> zone A.\n"));
    Pays.push(maker.land("GAB", "Gabon", maker.impot(5, 30, 1, 20, 20, 18), maker.ammortissement(20, 10, 1, 3, 4, 10), gab,"Exonération d’IS pendant 5 ans.","Promotion des PME et PMI,<br/>" +
        "bien que le chiffre d’affaires annuel dépasse 2 milliards de FCFA.\n"));
    Pays.push(maker.land("GNB", "Guinée Bissao", "pas d'impot", "pas d'ammortissement", "pas d'investissment","",""));
    Pays.push(maker.land("GNQ", "Guinée équatoriale", "pas d'impot", "pas d'ammortissement", "pas d'investissment","",""));
    Pays.push(maker.land("MLI", "Mali", maker.impot(7.5, 30, 1, 10, 13, 18), maker.ammortissement(20, 10, 2.5, 3, 2, 10), mli,"Taux réduit d’IS (25% au lieu de 30%) pendant 7 ans.","Code des investissements\n" +
        "<br/>régime A<br/>zone unique\n"));
    Pays.push(maker.land("NER", "Niger", maker.impot(3, 30, 1.5, 10, 20, 19), maker.ammortissement(20, 10, 1, 4, 2, 10), ner,"Exonération d’IMF pendant 6 ans","Code des investissements\n" +
        "<br/>régime promotionnel<br/>\n" +
        "zone normale"));
    Pays.push(maker.land("SEN", "Senegal", maker.impot(3, 30, 0.5, 10, 16, 18), maker.ammortissement(20, 10, 2.5, 3, 2, 10), sen,"",""));
    Pays.push(maker.land("TCD", "Tchad", maker.impot(8.7, 35, 1.5, 20, 20, 18), maker.ammortissement(20, 10, 1, 3, 3, 10), tcd,"",""));
    Pays.push(maker.land("TGO", "Togo", maker.impot(3, 29, 1, 13, 6, 18), maker.ammortissement(20, 10, 2.5, 3, 2, 10), tgo,"",""));
    return Pays;
}