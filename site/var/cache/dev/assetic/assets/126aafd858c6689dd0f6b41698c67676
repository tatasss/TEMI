let startTime = new Date().getTime();
let elapsedTime = 0;
//console.log(land.pays);
let monModele;
if (localStorage.getItem("don") !== undefined && localStorage.getItem("don") !== null) {
    let tab = localStorage.getItem("don").split(",");
    monModele = new Model(new Data(tab[0], tab[1], tab[2], tab[3]));
}

/**
 * @description This function show a modal when u click on the button "demarrer comparaison"
 */
function showModal() {
    let mod=$("#REGIME").val();
    $("#myBtn").click(function () {
        if ($("#actualisation").val() !== undefined) {
            if ($("#actualisation").val() !== null) {
                document.getElementById("actualistionCompa").value=$("#actualisation").val();
            }
        }
        $('#REGIMECmpta option[value='+mod+']').attr("selected", "selected");
        $("#myModal").modal();
    });
    $("#myCont").click(function () {
        localStorage.setItem("retour1",$("#REGIMECmpta").val());
        localStorage.setItem("retour2",$("#actualistionCompa").val());
        debutCompa($("#actualistionCompa").val(), $("#REGIMECmpta").val());
    });
}
/**
 * @description This function load a graphForm page anf load on memory topic and government
 * @param {number} actu - the topic rates of the firm
 * @param {string} regime - the government use by the user
 */
function debutCompa(actu, regime) {
    try {

        actu = verif.verifPourcent(actu);
        localStorage.setItem("compaActu", actu);
        localStorage.setItem("compatRegime", regime);
        let stateObj = {foo: "bar"};
        history.pushState(stateObj, window.location.href);
        console.log(history.state);
        window.location.href = "./graph";
        history.replaceState(stateObj, "some useless title", "./graph");
    } catch (e) {
        alert(e.toString());
        document.location.href="./";
    }
}
function retourModal(){
    localStorage.setItem("retour1",$("#REGIMECmpta").val());
    localStorage.setItem("retour2",$("#actualistionCompa").val());
    window.location.href="./";
}
/**
 * @description This function start the calcul with a parameters enter on html page
 */
function validateForm() {
    let actualisation = $("#actualisation").val();
    let marge = $("#marge").val();
    try {
        actualisation = verif.verifPourcent(actualisation);
    }
    catch (e) {
        alert("Le taux d'actualisation doit être compris entre 0 et 100");
        return;
    }
    try {
        marge = verif.verifPourcent(marge);
    }
    catch (e) {
        alert("Le taux de marge doit être compris entre 0 et 100 ");
        return;
    }
    let pays = $("#PAYS").val();
    let regime = $("#REGIME").val();
    localStorage.setItem("don", [pays, regime, actualisation, marge].toString());
    let donne = new Data(pays, regime, actualisation, marge);
    if (donne.land() !== undefined) {
        if (donne.land() != null) {
            console.log("pib du pays : " + donne.land().pib.toString());
        }
    }
    monModele = new Model(donne);
    let genererVue = new ViewGenerator(monModele);
    document.getElementById("result").innerHTML = genererVue.mainHTML(pays, regime, actualisation, marge);
    elapsedTime = new Date().getTime() - startTime;
}
