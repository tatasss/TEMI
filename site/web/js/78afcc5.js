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
 * @description This function is a constructor of verif class
 * @constructor
 */
let Verif = function () {
};
/**
 * @description This function verify if the the number is a purcent
 * @param {string} nombre - the number wold u verify if it's a purcent number
 * @return {number }
 */
Verif.prototype.verifPourcent = function (nombre) {
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
};
Verif.prototype.codeISO3 = function (code) {
    let tab = Array.from(code);
    if (tab.length !== 3) {
        throw new Error("le code doit comporter 3 lettres");
    }
    let regex1 = /[a-zA-Z]/;
    tab.forEach(function (item) {
        if (!regex1.test(item)) {
            throw new Error("le code doit être composé de 3 lettres et donc ne contiennent pas de chiffre")
        } else {
            code = code.toUpperCase();
        }
    });
    let xhr = getXMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && (xhr.status === 200)) {
            if (xhr.responseXML.getElementsByTagName("wb:country")[0] === undefined) {
                throw new Error("le code " + code + " n'existe pas");
            }
        }
    };
    xhr.open("GET", "https://api.worldbank.org/v2/countries/" + code, true);
    xhr.send(null);
};
Verif.prototype.stringer = function (str) {
    let regex1 = /[a-zA-Z0-9]+/;
    if (!regex1.test(str)) {
        throw new Error("veuillez entrer quelque chose");
    }
};
Verif.prototype.inter = function (str) {
    let regex1 = /^[1-9]+[0-9]*$/;
    if (str === '') {
        throw new Error("veuillez entrer quelque chose");
    }
    if (str === null) {
        throw new Error("veuillez entrer quelque chose");
    }
    if (str === undefined) {
        throw new Error("veuillez entrer quelque chose");
    }
    if (!regex1.test(str)) {
        throw new Error("veuillez entrer un entier");
    }
};
Verif.prototype.verifTauxInvest = function (str) {
    //console.log(str);
    let regex = /^[ ]*$/;
    if (!regex.test(str)) {
        if (str !== null) {
            if (str !== undefined) {
                let regex1 = /^[0-9]*[.]?[0-9]*$/;
                if (!regex1.test(str)) {
                    throw new Error("Veuillez entrer un pourcentage");
                }
                str = parseFloat(str);
                if (str > 100) {
                    throw new Error("le chiffre est supérieur à 100");
                }
                if (str < 0) {
                    throw new Error("le chiffre est inférieur à 00");
                }
            }

        }
    }
};
Verif.prototype.verifDureeInvest = function (str) {
    //console.log(str);
    let regex = /^[ ]*$/;
    if (!regex.test(str)) {
        if (str !== null) {
            if (str !== undefined) {
                let regex1 = /^[1-9]+[0-9]*$/;
                if (!regex1.test(str)) {
                    throw new Error("Veuillez entrer une duree");
                }
            }
        }
    }
};
/**
 * @type {Verif}
 */
let verif = new Verif();
/**
 * @description This function is a constructor of MyMath Class
 * @constructor
 */
let MyMath = function () {
};
/**
 * @description This function compute the return rate
 * @param {array} tab - the tab want to be use to find the return rate
 * @return {number} tri
 */
MyMath.prototype.tri = function (tab) {
    let numberOfTries = 1;
    let positive, negative;
    Array.prototype.slice.call(tab).forEach(function (value) {
        if (value > 0) positive = true;
        if (value < 0) negative = true;
    });
    if (!positive || !negative) throw new Error('TRI a besoin de valeur positif et negatif');
    /**
     * @description This function compute the NPV(Net Present Value)
     * @param {number} rate - the rate of the topic
     * @return {number}
     */
    function npv(rate) {
        numberOfTries++;
        if (numberOfTries > 1000) {
            throw new Error('IRR can\'t find a result');
        }
        let rrate = (1 + rate / 100);
        let npv = tab[0];
        for (let i = 1; i < tab.length; i++) {
            npv += (tab[i] / Math.pow(rrate, i));
        }
        return npv;
    }
    return Math.round(triReel(npv) * 100) / 100;
};
/**
 * @description This function is used by MyMath.tri to find  the real tri with a van
 * @param {function():number} fn the van
 * @return {number} tri
 */
triReel = function (fn) {
    let x = 1;
    while (fn(x) > 0) {
        x += 1;
    }
    while (fn(x) < 0) {
        x -= 0.01
    }
    return x + 0.01;
};
/**
 * @description This function compute the Net Present Value of the tab
 * @param {number} actu - the topic rates
 * @param {array} tab - the array of value want to be used to find the NPV
 * @return {number} NPV
 */
MyMath.prototype.van = function (actu, tab) {
    let lol = tab[0];
    let somme = 0;
    tab.forEach(function (item, index) {
        if (index > 0) {
            somme += (item / Math.pow((1 + actu), index));
        }
    });
    lol = lol + somme;
    return Math.round(lol);
};
/**
 * @description This function sum the value of the array
 * @param {array} tab -the array used to make a sum
 * @return {number} sum
 */
MyMath.prototype.sommeTab = function (tab) {
    let tot = 0;
    tab.forEach(function (item) {
        tot += item;
    });
    return tot;
};
/**
 * @description The function Round all the value Of a Tab on Unit choose
 * @param {array} tab - the tab want to be used to round it
 * @param {number} numberDec -the number of decimal want be round
 * @return {Array} tab
 */
MyMath.prototype.arrondirTabUnit = function (tab, numberDec) {
    if (numberDec == null) {
        numberDec = 0;
    }
    if (numberDec === undefined) {
        numberDec = 0;
    }
    if (numberDec < 0) {
        numberDec = 0;
    }
    let tabArr = [];
    tab.forEach(function (item) {
        if(item!==null){
            tabArr.push(Math.round(item * Math.pow(10, numberDec)) / (Math.pow(10, numberDec)));
        }
        else {
            tabArr.push(null);
        }

    });
    return tabArr;
};
MyMath.prototype.separatorNumber=function(number){

    number+='';
    let regExp1=/^-?[0-9]+\.?[0-9]*/;
    let result="";
    let tab=number.split(".");
    let mynum=[];
    if(regExp1.test(number)){
        tab.forEach(function (items,i) {
            mynum=Array.from(items);
            mynum.forEach(function (item,index){
                if ((index-(mynum.length%3)) % 3 === 0) {
                    if (index !== 0) {
                        result += " ";
                    }
                }
                result+=item;
            });
            if(i<tab.length-1){
                result+=".";
            }
        });
        //console.log("ici");
    }
    else{
        result=number;
        if (number==="null"){
            return null;
        } if (number==="undefined"){
            return undefined;
        }
    }

    return result

};
MyMath.prototype.separatorNumberArray=function (array) {
    let tab=[];
    array.forEach(function(item){
        tab.push(myMath.separatorNumber(item));
    });
    return tab;
};

/**
 * @type {MyMath}
 */
let myMath = new MyMath();
/**
 * @description This function is a constructor of Ref Class
 * @constructor
 */
let Ref = function () {
};
/**
 * @description this function find the name of the land with a code
 * @param {string} code - the code of the land
 * @return {string}
 */
Ref.prototype.donnerNomPays = function (code) {
    let randPays = land.pays;

    for (let i = 0; i < randPays.length; i++) {
        if (randPays[i].code() === code) {
            return randPays[i].name();
        }
    }
};
/**
 * @description this function find the code of the land with a name
 * @param {string} nom - the name of the land
 * @return {string}
 */
Ref.prototype.donnerCodePays = function (nom) {
    let randPays = land.pays;
    for (let i = 0; i < randPays.length; i++) {
        if (randPays[i].name() === nom) {
            return randPays[i].code();
        }
    }
};
/**
 *@description This function find the pib of the land with the landCode and the worldBank API
 * @param {string} code - the code of the land
 * @return {number} Pib
 */
Ref.prototype.pibFind = function (code) {
    let pib = 0;
    //console.log(code);
    let xhr = getXMLHttpRequest();
    if (localStorage.getItem("xmlPib : " + code) !== undefined) {
        if (localStorage.getItem("xmlPib : " + code) !== null) {
            return parseFloat(localStorage.getItem("xmlPib : " + code)) * 582.79;
        }
    }
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && (xhr.status === 200)) {
            try {
                if (xhr.responseXML.getElementsByTagName("wb:data")[0].childNodes[3].childNodes[5].firstChild.nodeValue.toString() === code) {
                    if (localStorage.getItem("xmlPib : " + code) === xhr.responseXML.getElementsByTagName("wb:data")[0].childNodes[5].childNodes[9].firstChild.nodeValue.toString()) {
                        return
                    }
                    localStorage.setItem("xmlPib : " + code, xhr.responseXML.getElementsByTagName("wb:data")[0].childNodes[5].childNodes[9].firstChild.nodeValue.toString());
                    //console.log("ici");
                }
            } catch (e) {
                console.log("Une erreur XML de l'api de workbank est apparu");
            }
            //console.log(xhr.responseXML);
        }
    };
    try {
        xhr.open("GET", "https://api.worldbank.org/v2/countries/" + code + "/indicators/NY.GDP.PCAP.CD", true);
        xhr.send(null);
        //console.log ("la");
    }
    catch (e) {
        console.log(e);
    }

    if (pib === 0) {
        pib = parseFloat(localStorage.getItem("xmlPib : " + code)) * 582.79;
    }
    //console.log(localStorage.getItem("xmlPib : " + code));
    return pib;

};
Ref.prototype.givePIB=function (code) {
    return parseFloat(localStorage.getItem("xmlPib : " + code)) * 582.79;
};
/**
 * @type {Ref}
 */
let ref = new Ref();
/**
 * @description This function is a constructor of BootstrapView Class
 * @constructor
 */
let BootstrapView = function () {
};
/**
 * @description This function create an Bootstrap Tabs
 * @return {string} html
 * @param colOne_head_lig - the left on the array , the head of the array and all the row ({array },{ string},{array,attr...})
 * take all arguments u put (1 array = 1row)
 */
BootstrapView.prototype.tableSE = function (colOne_head_lig) {
    let color;
    let args = arguments;
    let html;

    if (args[1] != null) {
        html = " <table class='table'>" + args[1] + "<tbody>";
    }
    else {
        html = " <table class='table monTab'><tbody>";
    }
    for (let i = 2; i < args.length; i++) {
        if (args[i].colorFirstCase === undefined) {
            args[i].colorFirstCase = " ";
        }
        if (args[i].colorFirstCase === null) {
            args[i].colorFirstCase = " ";
        }
        if (args[i].bottomBorder !== undefined && args[i].bottomBorder !== null) {
            html += `<tr class="bottomBorder">`;
            args[i].color += " bottomBorder";
            if (args[i].numTabdep !== undefined && args[i].numTabdep !== null) {
                if (args[i].numTabdep === 0) {
                    if (args[i].font_color !== undefined && args[i].font_color !== null) {

                        html += `<td class=\"font${args[i].font_color}\ bottomBorder">${args[0][i - 2]}</td>`;
                    }
                    else {
                        html += `<td class=\"bottomBorder\">${args[0][i - 2]}</td>`;
                    }
                }
                else {
                    html += `<td class="bottomBorder ">${args[0][i - 2]}</td>`;
                }
            }
            else {
                html += `<td class="bottomBorder ">${args[0][i - 2]}</td>`;
            }
        }
        else {
            html += "<tr>";
            if (args[i].numTabdep !== undefined && args[i].numTabdep !== null) {
                if (args[i].numTabdep === 0) {
                    if (args[i].font_color !== undefined && args[i].font_color !== null) {
                        html += `<td class=\"font${args[i].font_color}\">${args[0][i - 2]}</td>`;
                    }
                    else {
                        html += `<td >${args[0][i - 2]}</td>`;
                    }
                }
                else {
                    html += `<td >${args[0][i - 2]}</td>`;
                }
            }
            else {
                html += `<td>${args[0][i - 2]}</td>`;
            }
        }
        for (let j = 0; j < args[i].tab.length; j++) {
            if (j === 0) {
                if (args[i].colorFirstCase !== " ") {
                    color = args[i].colorFirstCase;
                }
                else {
                    color = args[i].color;
                }
                if (args[i].font_color !== undefined && args[i].font_color !== null) {
                    if (args[i].numTabdep !== undefined && args[i].numTabdep !== null && args[i].numTabdep !== 0) {
                        if (j + 1 === args[i].numTabdep) {
                            color += " font" + args[i].font_color
                        }

                    } else {

                        color += " font" + args[i].font_color;
                    }
                }
                if (args[i].tab[j] != null) {
                    //console.log("ici "+(args[i].color=="blue").toString());
                    html += `<td class=\"${color}\">${args[i].tab[j]}</td>`;
                }
                else {
                    html += `<td class=\"${color}\" />`;
                }

            }
            else {
                if (j === args[i].tab.length - 1) {
                    if (args[i].fontColorLastCase === "selectedPosNegNumber") {
                        if (args[i].tab[j] != null) {
                            if (args[i].tab[j] < 0) {
                                args[i].fontColorLastCase = "red";
                            }
                            else {
                                args[i].fontColorLastCase = " ";
                            }
                        }
                    }
                    if (args[i].fontColorLastCase !== undefined && args[i].fontColorLastCase !== null && args[i].fontColorLastCase !== " ")
                        args[i].font_color = args[i].fontColorLastCase;
                }
                if (args[i].font_color !== undefined && args[i].font_color !== null) {
                    if (args[i].numTabdep !== undefined && args[i].numTabdep !== null && args[i].numTabdep !== 0) {
                        if (j + 1 === args[i].numTabdep) {
                            args[i].color += " font" + args[i].font_color
                        }
                    } else {
                        args[i].color += " font" + args[i].font_color;
                    }
                }
                if (args[i].tab[j] != null) {
                    html += `<td class=\"${args[i].color}\">${args[i].tab[j]}</td>`;
                }
                else {
                    html += `<td class=\"${args[i].color}\" /> `;
                }
            }
        }
        html += "</tr>";
    }
    html += "</tbody></table>";
    return html;
};
/**
 * @description This function create a bootstrap pannel
 * @param {string} type - type of pannel (look doc on the site : https://www.w3schools.com/bootstrap/bootstrap_panels.asp)
 * @param {string} head - head of the pannel if he is null, the pannel is generate without head
 * @param {string} body - body of the pannel
 * @return {string} html
 */
BootstrapView.prototype.pan = function (type, head, body) {
    let result = "<div class='panel panel-" + type + " '>";
    if (head !== null) {
        result += "<div class='panel-heading'>";
        result += head;
        result += "</div>"
    }
    result += "<div class='panel-body'>";
    result += body;
    result += "</div></div>";
    return result;
};
/**
 * @description This function create the body of the page html
 * @param {string} body - the body of the page without topNav
 * @return {string} html
 */
BootstrapView.prototype.container = function (body) {
    return "<div class='container'>" + body + "</div>";
};
/**
 * @description this function use a grid basic bootstrap 10-2 mode.
 * @param {string} body - the string template ready inserted in the col to take 10/12 of the grid
 * @param {string} nav - the string html template  ready inserted in the column 2/12 on the right on the grid
 * @return {string} html
 */
BootstrapView.prototype.GridNavCote = function (body, nav) {
    let result = "<div class='row'><div class='col-sm-10'>";
    result += body;
    result += "</div><div class='col-sm-2'>";
    result += nav;
    result += "</div></div>";
    return result;
};
/**
 * @description this function create a button created with a tag <a>
 * @param {string} href  - the location where u want to go
 * @param {string} html - the entitled of your tag
 * @return {string} html
 */
BootstrapView.prototype.buttonBalA = function (href, html) {
    return `<a  class='btn btn-default' type='submit' href='${href}'>${html}</a>`;
};
/**
 * @description This unction create a button created with a tag <button>
 * @param {string} type - the type of button (look doc on the site : https://www.w3schools.com/bootstrap/bootstrap_ref_css_buttons.asp)
 * @param {function()} onclick - the callback where you want to use
 * @param {string} html - the entitled of your tag
 * @param {string} value - the value of your tag
 * @return {string} html
 */
BootstrapView.prototype.buttonBaBu = function (type, onclick, html, value) {
    return `<button class='btn btn-${type}' type='button' onclick="${onclick}" value="${value}" '>${html}</button>`;
};
/**
 * @description This function create a liste-vertical-group on bootstrap.
 * @param {array}tab - the array of your list
 * @return {string} html
 */
BootstrapView.prototype.listeItem = function (tab) {
    let html = "<ul class='list-group vertical-form'>";
    tab.forEach(function (item) {
        html += `<li class="list-group-item">${item}</li>`;
    });
    return html;
};
/**
 * @description This function create a collapse group pannel on bootstrap
 * @param {string} objCollapse -the obj of your collapse
 * (take all args ,collapse obj ={title:'yourTitle',body:'yourBody'})
 * @return {string} html
 */
BootstrapView.prototype.collapse = function (objCollapse) {
    let args = arguments;
    let int;
    let html = "<div class='panel-group' id='accordion'>";
    for (let i = 1; i < args.length; i++) {
        if (args[0] !== null && args[0] !== undefined) {
            if (i === args[0]) {
                int = "in";
            }
            else {
                int = " ";
            }
        }
        html += `<div class="panel panel-default"><div class="panel-heading"><h4 class="panel-title">`;
        html += `<a data-toggle="collapse" data-parent="#accordion" href="#collapse${i + 1}">`;
        html += `${args[i].tittle}</a></h4></div><div id="collapse${i + 1}" class="panel-collapse collapse ${int}">`;
        html += "<div class='panel-body'>" + args[i].body + "</div>\n" +
            "</div>\n" +
            "</div>";
    }
    return html;//+"</div>";
};
/**
 * @description This function create an array for My temi (he is a little specific but U can use it
 * @param {Array} cote - a Array on the first column of array
 * @param {Array} head - a Array on the first Line of array
 * @param {Array} tab - A Double Dimension Array he is the body of the array
 * @param {Array} maMarge - is a array of marges rate
 * @param {string} titre - a filename of the excel Document
 * @return {string} html
 */
BootstrapView.prototype.bootstrapTemiTabSpe = function (cote, head, tab, maMarge, titre) {
    let myTab = [];
    let tabExcel=[];
    let cpt = 0;
    let landName;
    for (let i = 0; i < head.length / 6; i++) {
        myTab.push("<br/><table class='table' id='maTable"+cpt+"'><thead><tr><th/>")
    }
    head.forEach(function (item, index) {
        if (index % 6 === 0 && index > 0) {
            myTab[cpt] += "</tr></thread><tbody>";
            cpt++;
        }
        myTab[cpt] += "<th>";
        myTab[cpt] += item;
        myTab[cpt] += "</th>";
        if(index!==0){
            landName=item.slice(1,Array.from(item).length);
        }
        else {
            landName=item;
        }

        tabExcel.push(ref.donnerCodePays(item));
    });
    tab.forEach(function (item, index) {
        cpt = 0;
        myTab[cpt] += "<tr><td>";
        myTab[cpt] += cote[index] + "</td>";
        let cotee="";
        Array.from(cote[index]).forEach(function (item){
            if(item!==" "){
                cotee+=item;
            }
        });
        tabExcel.push(cotee);
        item.forEach(function (items, indexs) {
            if (indexs % 6 === 0 && indexs > 0) {
                myTab[cpt] += "</tr>";
                cpt++;
                myTab[cpt] += "<tr><td>";
                myTab[cpt] += cote[index] + "</td>";
            }
            myTab[cpt] += "<td>";
            //console.log(myMath.separatorNumber(Math.round(items * 100) / 100));
            myTab[cpt] += myMath.separatorNumber(Math.round(items * 100) / 100);
            myTab[cpt] += " % </td>";
            tabExcel.push(Math.round(items * 100) / 100);
        });
        myTab[cpt] += "</tr>\n";
    });
    for (let i = 0; i < head.length / 6; i++) {
        myTab[i] += "</tbody></table>";
    }
    let html = "<h1>Tableau des TEMI de chaque pays :</h1>";
    myTab.forEach(function (item) {
        html += item;
    });
    tabExcel.push("ligne");
    tabExcel.push("entreprise");
    tabExcel.push("marge_%");
    maMarge.forEach(function(item,index){
        tabExcel.push("entreprise"+(index+1));
        tabExcel.push(item);
    });
    tabExcel.push("ligne");
    tabExcel.push("ligne");
    tabExcel.push("actualisation");
    tabExcel.push(localStorage.getItem("compaActu")+"%");
    let reg;
    reg = " ";
    if (localStorage.getItem("compatRegime") === "gen") {
        reg = "codes_générales_des_impots";
    }
    else {
        reg = "codes_des_investissements";
    }
    tabExcel.push("ligne");
    tabExcel.push("ligne");
    tabExcel.push("régime_Fiscal");
    tabExcel.push(reg);
    titre+=".xls";
    let titreHtml="";
    Array.from(titre).forEach(function(item){
        if(item!==" "){
            titreHtml+=item;
        }
    });
    tabExcel.toString= function(){
        let html="";
        this.forEach(function(item, index){
            if(index===tabExcel.length){
                html+=item;
            }
            else{
                html+=item+",";
            }

        });
        return html;
    };
    //console.log(titreHtml);
    //console.log(tabExcel.toString());

    html+= `<a class="btn btn-default " download="${titreHtml}" href="#" id="anchorNewApi-xls" onClick=newApi('xls','${tabExcel.toString()}','${titreHtml}')>Récupérer Excel</a>`;
    //console.log(`<a class="btn btn-default " download="${titreHtml}" href="#" id="anchorNewApi-xls" onClick=newApi('xls','${tabExcel.toString()}','${titreHtml}')>Récupérer Excel</a>`);
    return html;
};
/**
 * @description This function create an alert
 * @param {string} str - the body of alert
 * @return {string}
 */
BootstrapView.prototype.alertDanger=function(str){
    return `<div class="alert alert-danger">${str}</div>`
};
/**
 * @type {BootstrapView}
 */
let bootstrap = new BootstrapView();
/**
 * @description This function is a constructor of Manufactor Class
 * @constructor
 */
let Manufactor = function () {
};

/**
 * @Construct
 * @description The Constructor of Land
 * @param {string} code - the code of the land
 * @param {string} name - the name of the land
 * @param {Object} tax - the tax rates of the land (cfe,is,imf,irvm,irc,tva_petrole)
 * @param {Object} amortization - the depreciation of the land
 * @param {Object} investment - the parameters of the invest-government of the land
 * @param {string} override - the parameters of the invest-government of the land(but texte)
 * @param {string} source - zone and government type use by firm on the land
 * @return {{pib: number, code: string, name: string , taxes: Object, amortization: Object, investissement: Object, override: string, source: string}}
 */
Manufactor.prototype.land = function (code, name, tax, amortization, investment, override, source) {

    return {
        pib: ref.pibFind(code),
        /**
         * @description the getter of code
         * @return {string}
         */
        code: function () {
            return code;
        },
        /**
         * @description the getter of name
         * @return {string}
         */
        name: function () {
            return name;
        },
        /**
         * @description the getter of taxes
         * @return {Object}
         */
        impots: function () {
            return tax;
        },
        /**
         * @description the getter of amortization
         * @return {Object}
         */
        amortization: function () {
            return amortization;
        },
        /**
         * @description the getter of investissement
         * @return {Object}
         */
        investment: function () {
            return investment;
        },
        /**
         * @description the getter of override
         * @return {string}
         */
        override: function () {
            return override;
        },
        /**
         * @description the getter of source
         * @return {string}
         */
        source: function () {
            return source;
        },
        toString:function () {
            return this.name()+"|"+this.code()+"|"+this.impots().toString()+"|"+this.amortization().toString()+"|"+this.investment().toString()+"|"+this.override()+"|"+this.source();
        }
    };
};
/**
 * @constructs
 * @description This function is the constructor of the Impot Class
 * @param {number} cFE - the  CFE Impot Rates
 * @param {number} iS - the IS Impot Rates
 * @param {number} iMF - the IMF Impot Rates
 * @param {number} iRVM - the IRVM Impot Rates
 * @param {number} iRC - the IRC Impot Rates
 * @param {number} tVA_Petrole - The TVA on Petrole Rates
 * @return {{cfe: number, isImp: number, imf: number, irvm: number, irc: number, tva_petrole: number}}
 */
Manufactor.prototype.impot = function (cFE, iS, iMF, iRVM, iRC, tVA_Petrole) {
    return {
        /**
         * @description the getter of cfe
         * @return {number}
         */
        cfe: function () {
            return cFE;
        },
        /**
         * @description the getter of isImp
         * @return {number}
         */
        isImp: function () {
            return iS;
        },
        /**
         * @description the getter of imf
         * @return {number}
         */
        imf: function () {
            return iMF;
        },
        /**
         * @description the getter of irvm
         * @return {number}
         */
        irvm: function () {
            return iRVM;
        },
        /**
         * @description the getter of irc
         * @return {number}
         */
        irc: function () {
            return iRC
        },
        /**
         * @description the getter of tva_petrole
         * @return {number}
         */
        tva_petrole: function () {
            return tVA_Petrole;
        },
        toString :function(){
            return "["+this.cfe()+","+this.isImp()+","+this.imf()+","+this.irvm()+","+this.irc()+","+this.tva_petrole()+"]"
        }
    }
};
/**
 * @constructs
 * @description This function is a constructor of the Ammortissement Class
 * @param {number} construction - the coef of the construct
 * @param {number} equipement - the  coef of the equipement
 * @param {number} coefdegressif - the coef declining
 * @param {number} camion - the coef of the truck
 * @param {number} info - the coef odf the hardware
 * @param {number} bureau - the coef of the office equipment
 * @return {{construction: number, equipement: number, coefdegressif: number , camion: number , info: number , bureau: number}}
 */
Manufactor.prototype.ammortissement = function (construction, equipement, coefdegressif, camion, info, bureau) {
    return {
        /**
         * @description the getter of construction
         * @return {number}
         */
        construction: function () {
            return construction;
        },
        /**
         * @description the getter of equipement
         * @return {number}
         */
        equipement: function () {
            return equipement;
        },
        /**
         * @description the getter of coefdegressif
         * @return {number}
         */
        coefdegressif: function () {
            return coefdegressif;
        },
        /**
         * @description the getter of camion
         * @return {number}
         */
        camion: function () {
            return camion;
        },
        /**
         * @description the getter of info
         * @return {number}
         */
        info: function () {
            return info;
        },
        /**
         * @description the getter of bureau
         * @return {number}
         */
        bureau: function () {
            return bureau;
        },
        toString:function(){
            return "["+this.construction()+","+this.equipement()+","+this.camion()+","+this.info()+","+this.bureau()+","+this.coefdegressif()+"]";
        }
    }
};
/**
 * @Construct
 * @description This function is the construct of the firm
 * @param {number} actu - the rates of the update
 * @param {number} marge - the rates of the margin
 * @return {{name: string, terrain: number, construction: number, equipement: number, camion: number, info: number, bureau: number, stocks: number, creanceCli: number, dispoBanque: number, capitalSocial: number, detteLongTerme: number, detteCourtTerme: number, detteFournisseur: number, achat: number, petrole: number, depenseAdministrative: number, depensePub: number, depenseEntretien: number, chargeFinanciere: number, vente: number, cadre: number, secretaire: number, ouvrier: number, indice_cadre: number, indice_secretaire: number, indice_ouvrier: number, dividende: number, actuali: number}}
 */
Manufactor.prototype.firm = function (actu, marge) {
    return {
        /**
         * @description the getter of name
         * @return {string}
         */
        name: function () {
            return "Djankov";
        },
        /**
         * @description the getter of terrain
         * @return {number}
         */
        terrain: function () {
            return 30
        },
        /**
         * @description the getter of construction
         * @return {number}
         */
        construction: function () {
            return 40;
        },
        /**
         * @description the getter of equipement
         * @return {number}
         */
        equipement: function () {
            return 60;
        },
        /**
         * @description the getter of camion
         * @return {number}
         */
        camion: function () {
            return 5;
        },
        /**
         * @description the getter of info
         * @return {number}
         */
        info: function () {
            return 5
        },
        /**
         * @description the getter of bureau
         * @return {number}
         */
        bureau: function () {
            return 5;
        },
        /**
         * @description the getter of stocks
         * @return {number}
         */
        stocks: function () {
            return 35;
        },
        /**
         * @description the getter of creanceCli
         * @return {number}
         */
        creanceCli: function () {
            return 50;
        },
        /**
         * @description the getter of dispoBanque
         * @return {number}
         */
        dispoBanque: function () {
            return 20;
        },
        /**
         * @description the getter of capitalSocial
         * @return {number}
         */
        capitalSocial: function () {
            return 102;
        },
        /**
         * @description the getter of detteLongTerme
         * @return {number}
         */
        detteLongTerme: function () {
            return 43;
        },
        /**
         * @description the getter of detteCourtTerme
         * @return {number}
         */
        detteCourtTerme: function () {
            return 55;
        },
        /**
         * @description the getter of detteFournisseur
         * @return {number}
         */
        detteFournisseur: function () {
            return 50;
        },
        /**
         * @description the getter of achat
         * @return {number}
         */
        achat: function () {
            return Math.round(1050 / (1 + marge / 100));
        },
        /**
         * @description the getter of petrole
         * @return {number}
         */
        petrole: function () {
            return 0;
        },
        /**
         * @description the getter of depenseAdministrative
         * @return {number}
         */
        depenseAdministrative: function () {
            return 10;
        },
        /**
         * @description the getter of depensePub
         * @return {number}
         */
        depensePub: function () {
            return 10.5;
        },
        /**
         * @description the getter of depenseEntretien
         * @return {number}
         */
        depenseEntretien: function () {
            return 3;
        },
        /**
         * @description the getter of chargeFinanciere
         * @return {number}
         */
        chargeFinanciere: function () {
            return 5.5;
        },
        /**
         * @description the getter of vente
         * @return {number}
         */
        vente: function () {
            return 1050;
        },
        /**
         * @description the getter of cadre
         * @return {number}
         */
        cadre: function () {
            return 4;
        },
        /**
         * @description the getter of secretaire
         * @return {number}
         */
        secretaire: function () {
            return 8;
        },
        /**
         * @description the getter of ouvrier
         * @return {number}
         */
        ouvrier: function () {
            return 48;
        },
        /**
         * @description the getter of indice_cadre
         * @return {number}
         */
        indice_cadre: function () {
            return 2.25;
        },
        /**
         * @description the getter of indice_secretaire
         * @return {number}
         */
        indice_secretaire: function () {
            return 1.25;
        },
        /**
         * @description the getter of indice_ouvrier
         * @return {number}
         */
        indice_ouvrier: function () {
            return 1;
        },
        /**
         * @description the getter of dividende
         * @return {number}
         */
        dividende: function () {
            return 50;
        },
        /**
         * @description the getter of actuali
         * @return {number}
         */
        actuali: function () {
            return actu;
        }
    }

};
/**
 * @constructs
 * @description This function is the constructor of the Investir Class
 * @param {Object} cfe - the  CFE Impot Rates
 * @param {Object} isammmort - the IS Impot Rates
 * @param {Object} imf - the IMF Impot Rates
 * @param {Object} irvm - the IRVM Impot Rates
 * @param {Object} irc - the IRC Impot Rates
 * @param {Object} tvaPetrole - The TVA on Petrole Rates
 * @return {{cfe: Object, isamort: Object, imf: Object, irvm: Object, irc: Object, tvaPetrole: Object}}
 */
Manufactor.prototype.investir = function (cfe, isammmort, imf, irvm, irc, tvaPetrole) {
    return {
        /**
         * @description the getter of cfe
         * @return {Object}
         */
        cfe: function () {
            return cfe;
        },
        /**
         * @description the getter of isamort
         * @return {Object}
         */
        isamort: function () {
            return isammmort
        },
        /**
         * @description the getter of imf
         * @return {Object}
         */
        imf: function () {
            return imf;
        },
        /**
         * @description the getter of irvm
         * @return {Object}
         */
        irvm: function () {
            return irvm;
        },
        /**
         * @description the getter of irc
         * @return {Object}
         */
        irc: function () {
            return irc;
        },
        /**
         * @description the getter of tvaPetrole
         * @return {Object}
         */
        tvaPetrole: function () {
            return tvaPetrole;
        },
        toString : function () {
            return "["+this.cfe()+","+this.isamort()+","+this.imf()+","+this.irvm()+","+this.irc()+","+this.tvaPetrole()+"]";
        }
    };
};
/**
 * @constructs
 * @description The function is the construct of the ImpotPays Class
 * @param {number} duree - the time of the Impot
 * @param {number} taux - the rates of the Impot
 * @param {number} reductonEcume - the reduc of the Impot
 * @return {{duree: number, taux:number, reducexo: number}}
 */
Manufactor.prototype.impotPays = function (duree, taux, reductonEcume) {
    return {
        /**
         * @description the getter of duree
         * @return {number}
         */
        duree: function () {
            return duree;
        },
        /**
         * @description the getter of taux
         * @return {number}
         */
        taux: function () {
            return taux;
        },
        /**
         * @description the getter of reducexo
         * @return {number}
         */
        reducexo: function () {
            return reductonEcume;
        },
        toString: function(){
            return "["+this.duree()+","+this.taux()+","+this.reducexo()+"]";
        }
    };
};
/**
 * @constructs
 * @description The function is the construct of the ImpotPays Class
 * @param {number} duree - the time of the Impot
 * @param {number} taux - the rates of the Impot
 * @param {number} reductonEcume - the reduc of the Impot
 * @param {number} ammortTauxEx - the rate of the Impot with ammortExcep
 * @param {number} ammortLimit - the limit of the amortization
 * @return {{duree: number , taux: number , reducexo: number , ammortTauxEx: number , ammortLimit: number}}
 */
Manufactor.prototype.isImpotPays = function (duree, taux, reductonEcume, ammortTauxEx, ammortLimit) {
    return {
        /**
         * @description the getter of duree
         * @return {number}
         */
        duree: function () {
            return duree;
        },
        /**
         * @description the getter of taux
         * @return {number}
         */
        taux: function () {
            return taux;
        },
        /**
         * @description the getter of reductonEcume
         * @return {number}
         */
        reducexo: function () {
            return reductonEcume;
        },
        /**
         * @description the getter of ammortTauxEx
         * @return {number}
         */
        ammortTauxEx: function () {
            return ammortTauxEx;
        },
        /**
         * @description the getter of ammortLimit
         * @return {number}
         */
        ammortLimit: function () {
            return ammortLimit;
        },
        toString: function(){
            return "["+this.duree()+","+this.taux()+","+this.reducexo()+","+this.ammortTauxEx()+","+this.ammortLimit()+"]";
        }
    };
};
/**
 * @constructs
 * @description This function is the construct of the AmortirModele Class
 * @param {number} prix - the price u have to start the function
 * @param {number} durLin - the time of the amortissement
 * @param {number} coef - the coef of the amortissement
 * @param {string} nom - the name of the amortissement
 * @return {{dureeRestante: Array, baseAmortissable: Array, tauxLineaire: Array, tauxDegressif: Array, chargeAmorti: Array, name: string, getHtml: (function(): string)}}
 */
Manufactor.prototype.armortirModele = function (prix, durLin, coef, nom) {
    let dureeRestante = [];
    let baseAmortissable = [];
    let tauxLineaire = [];
    let tauxDegressif = [];
    let chargeAmorti = [];
    let purcent;
    let coefdegr;
    if (nom === "Equipement") {
        coefdegr = coef;
    }
    else {
        coefdegr = 1;
    }
    dureeRestante.push(durLin);
    baseAmortissable.push(Math.round(prix));
    if (durLin > 0) {
        tauxLineaire.push(((1 / durLin) * 100));
    } else {
        tauxLineaire.push(0);
    }
    if (durLin === 0) {
        tauxDegressif.push(0);
    } else {
        if (tauxLineaire[0] === 100) {
            tauxDegressif.push(100);
        }
        else {
            if (coefdegr * tauxLineaire[0] > tauxLineaire[0]) {
                tauxDegressif.push((coefdegr * (tauxLineaire[0])));
            }
            else {
                tauxDegressif.push(tauxLineaire[0])
            }
        }
    }
    chargeAmorti.push(Math.round(baseAmortissable[0] * (tauxDegressif[0] / 100)));
    for (let i = 1; i < 5; i++) {

        if (dureeRestante[i - 1] > 0) {
            dureeRestante.push(dureeRestante[i - 1] - 1);
        }
        else {
            dureeRestante.push(0);
        }
        baseAmortissable.push(baseAmortissable[i - 1] - chargeAmorti[i - 1]);
        if (dureeRestante[i] > 0) {
            tauxLineaire.push(((1 / dureeRestante[i]) * 100));
        }
        else {
            tauxLineaire.push(0);
        }
        if (dureeRestante[i] === 0) {
            tauxDegressif.push(0);
        }
        else {
            if (coefdegr * tauxLineaire[0] > 100) {
                tauxDegressif.push(100);
            }
            else {
                if (coefdegr * tauxLineaire[0] > tauxLineaire[i]) {
                    tauxDegressif.push(Math.round((durLin * coefdegr) * 100) / 100);
                }
                else {
                    tauxDegressif.push(tauxLineaire[i]);
                }
            }
        }
        purcent = tauxDegressif[i] / 100;

        chargeAmorti.push(Math.trunc(baseAmortissable[i] * purcent));
    }

    return {
        /**
         * @description the getter of dureeRestante
         * @return {Array}
         */
        dureeRestante: function () {
            return dureeRestante;
        },
        /**
         * @description the getter of baseAmortissable
         * @return {Array}
         */
        baseAmortissable: function () {
            return baseAmortissable;
        },
        /**
         * @description the getter of tauxLineaire
         * @return {Array}
         */
        tauxLineaire: function () {
            return tauxLineaire;
        },
        /**
         * @description the getter of tauxDegressif
         * @return {Array}
         */
        tauxDegressif: function () {
            return tauxDegressif;
        },
        /**
         * @description the getter of chargeAmorti
         * @return {Array}
         */
        chargeAmorti: function () {
            return chargeAmorti
        },
        /**
         * @description the getter of name
         * @return {string}
         */
        name: function () {
            return nom;
        },
        /**
         * @description This function create the html code of the Amortir class
         * @return {string} html
         */
        getHtml: function () {

            let cote2 = ["Base amortissable</td><td>FCFA", "Taux unitaire</td><td>%", "Taux dégréssif</td><td>%", "Charge amortissement</td><td>FCFAS"];
            let html = "<div class='panel panel-info'><div class=\"panel-heading\">";
            let cote1 = ["Durée linéaire</td><td>Année", "Coef dégréssif</td><td>Coef"];
            let head = `<thead><tr><th>${this.name()}</th><th>FCFA</th><th class='blue'>${myMath.separatorNumber(this.baseAmortissable()[0])}</th></tr></thead>`;
            html += bootstrap.tableSE(cote1, head, {
                    tab: myMath.separatorNumberArray([this.dureeRestante()[0]]),
                    color: "yellow"
                },
                {
                    tab: myMath.separatorNumberArray([coefdegr]),
                    color: "yellow"
                });
            html += "</div> <div class='panel-body'>";
            let head2 = "<thead><tr><th>Durée restante</th><th>Annee</th>";
            for (let i = 0; i < 5; i++) {
                head2 += `<th>${myMath.separatorNumber(this.dureeRestante()[i])}</th>`;
            }
            head2 += "</thead>";
            let tauxLin = [];
            let tauxDegr = [];
            this.tauxLineaire().forEach(function (item) {
                tauxLin.push(Math.round(item * 100) / 100);
            });
            this.tauxDegressif().forEach(function (item) {
                tauxDegr.push(Math.round(item * 100) / 100);
            });
            html += bootstrap.tableSE(cote2, head2, {
                    tab: myMath.separatorNumberArray(this.baseAmortissable()),
                    color: ""
                },
                {
                    tab: myMath.separatorNumberArray(tauxLin),
                    color: ""
                },
                {
                    tab: myMath.separatorNumberArray(tauxDegr),
                    color: ""
                },
                {
                    tab: myMath.separatorNumberArray(this.chargeAmorti()),
                    color: ""
                });
            html += "</div></div>";
            return html;
        }
    };
};
/**
 * @type {Manufactor}
 */
let maker = new Manufactor();

/**
 * @description This function is a constructor of ModelManager Class
 * @constructor
 */
let ModelManager = function () {
};
/**
 * @description This function give the Invest on the Entity
 * @param {Object } mE - the firm used by the Entity
 * @param {number} pibchoix - the pib want be used
 * @return {number} invest
 */
ModelManager.prototype.investissementModele = function (mE, pibchoix) {
    return (mE.terrain() + mE.construction() + mE.equipement() + mE.camion() + mE.info() + mE.bureau()) * pibchoix;
};
/**
 * @description This function give the amortissement o the Entity
 * @param {Object} mE - the firm used by the Entity
 * @param {Object} mP - the Land used by the Entity
 * @param {number} pibchoix - the pib want be used
 * @return {Array} amortization
 */
ModelManager.prototype.ammortissment = function (mE, mP, pibchoix) {
    let amortissement = [];
    amortissement.push(maker.armortirModele(mE.construction() * pibchoix, mP.amortization().construction(), mP.amortization().coefdegressif(), "Construction"));
    amortissement.push(maker.armortirModele(mE.equipement() * pibchoix, mP.amortization().equipement(), mP.amortization().coefdegressif(), "Equipement"));
    amortissement.push(maker.armortirModele(mE.camion() * pibchoix, mP.amortization().camion(), mP.amortization().coefdegressif(), "Camion"));
    amortissement.push(maker.armortirModele(mE.info() * pibchoix, mP.amortization().info(), mP.amortization().coefdegressif(), "Informatique"));
    amortissement.push(maker.armortirModele(mE.bureau() * pibchoix, mP.amortization().bureau(), mP.amortization().coefdegressif(), "Bureau"));
    return amortissement;
};
/**
 *@description This function give a general overview of the amortissement
 * @param {array} ammortissement - the array of the amortissment
 * @return {Array} amortGeneral
 */
ModelManager.prototype.ammortGen = function (ammortissement) {
    let total = [0, 0, 0, 0, 0];
    let generalAmort = [];
    ammortissement.forEach(function (item) {
        item.chargeAmorti().forEach(function (items, index) {
            generalAmort.push(items);
            total[index] += items;
        });
        generalAmort.push("change");
    });
    total.forEach(function (item) {
        generalAmort.push(item);
    });
    return generalAmort;
};
/**
 *@description This function give the tva on petrole real
 * @param {Object } mE  - the firm used by the model
 * @param {Object} impot - the impot used on the land
 * @param {number} pibchoix - the pib want be used
 * @return {{petrole: Array, taux: Array, tva: Array}}
 */
ModelManager.prototype.taxe_val_ajout = function (mE, impot, pibchoix) {
    let i;
    let petrole = [];
    let taux = [];
    let tva = [];
    for (i = 0; i < 5; i++) {
        petrole.push(mE.petrole() * pibchoix);
    }
    for (i = 0; i < 5; i++) {
        taux.push(impot.tvaPetrole());
    }
    for (i = 0; i < 5; i++) {
        tva.push((mE.petrole() * pibchoix) * (impot.tvaPetrole() / 100));
    }
    if (tva.length === 6) {
        tva.pop();
    }
    return {
        /**
         * @description the getter of petrole
         * @return {Array}
         */
        petrole: function () {
            return petrole;
        },
        /**
         * @description the getter of taux
         * @return {Array}
         */
        taux: function () {
            return taux;
        },
        /**
         * @description the getter of tva
         * @return {Array}
         */
        tva: function () {
            return tva;
        },
    }
};
/**
 * @description This function give the tab Of the real price of the working force
 * @param {Object } mE  - the firm used by the model
 * @param {Object } mP  - the land used by the model
 * @param {number} pibchoix - the pib want be used
 * @param {Object} impot - the impot used on the land
 * @return {{salaire_cadre: Array, salaire_secretaire: Array, salaire_ouvrier: Array, masse_salarial: Array, tauxCfe: Array, reel_CFE: Array}}
 */
ModelManager.prototype.contributionForfEmploie = function (mE, mP, pibchoix, impot) {
    let i;
    let salaireCadre = [];
    for (i = 0; i < 5; i++) {
        salaireCadre.push(mE.cadre() * mE.indice_cadre() * pibchoix);
    }
    let salaireSecretaire = [];
    for (i = 0; i < 5; i++) {
        salaireSecretaire.push(mE.secretaire() * mE.indice_secretaire() * pibchoix);
    }
    let salaireOuvrier = [];
    for (i = 0; i < 5; i++) {
        salaireOuvrier.push(mE.ouvrier() * mE.indice_ouvrier() * pibchoix);
    }
    let masseSalarial = [];
    for (i = 0; i < 5; i++) {
        masseSalarial.push(salaireCadre[i] + salaireSecretaire[i] + salaireOuvrier[i]);
    }
    let taux = [];
    for (i = 0; i < 5; i++) {
        taux.push(impot.cfe());
    }
    let reelCFE = [];
    for (i = 0; i < 5; i++) {
        reelCFE.push(masseSalarial[i] * (taux[i] / 100));
    }
    return {
        /**
         * @description the getter of salaire_cadre
         * @return {Array}
         */
        salaire_cadre: function () {
            return salaireCadre;
        },
        /**
         * @description the getter of salaire_secretaire
         * @return {Array}
         */
        salaire_secretaire: function () {
            return salaireSecretaire;
        },
        /**
         * @description the getter of salaire_ouvrier
         * @return {Array}
         */
        salaire_ouvrier: function () {
            return salaireOuvrier;
        },
        /**
         * @description the getter of masse_salarial
         * @return {Array}
         */
        masse_salarial: function () {
            return masseSalarial;
        },
        /**
         * @description the getter of tauxCfe
         * @return {Array}
         */
        tauxCfe: function () {
            return taux;
        },
        /**
         * @description the getter of reel_CFE
         * @return {Array}
         */
        reel_CFE: function () {
            return reelCFE;
        },
    };
};
/**
 * @description this function give the real taxe Rate
 * @param {Object } mP  - the land used by the model
 * @param {Object} donne - the Data used by the model
 * @return {{cfe: number, is: number, imf: number, irvm: number, irc: number, tvaPetrole: number}}
 */
ModelManager.prototype.selectTaxe = function (mP, donne) {
    let cfe, is, imf, irvm, irc, tvaPetrole;
    if (donne.government() === "gen") {
        cfe = mP.impots().cfe();
        is = mP.impots().isImp();
        imf = mP.impots().imf();
        irvm = mP.impots().irvm();
        irc = mP.impots().irc();
        tvaPetrole = mP.impots().tva_petrole();
    }
    else {
        if (mP.investment().duree < 5) {
            cfe = mP.impots().cfe();
            is = mP.impots().isImp();
            imf = mP.impots().imf();
            irvm = mP.impots().irvm();
            irc = mP.impots().irc();
            tvaPetrole = mP.impots().tva_petrole();
        }
        else {
            if (mP.investment().cfe().taux() != null) {
                cfe = mP.investment().cfe().taux();
            }
            else {
                if (mP.investment().cfe().reducexo() != null) {
                    cfe = ((1 - (mP.investment().cfe().reducexo() / 100)) * (mP.impots().cfe() / 100)) * 100;
                }
                else {
                    cfe = mP.impots().cfe();
                }
            }
            if (mP.investment().isamort().taux() != null) {
                is = mP.investment().isamort().taux();
            }
            else {
                if (mP.investment().isamort().reducexo() != null) {

                    is = (((1 - (mP.investment().isamort().reducexo() / 100)) * (mP.impots().isImp() / 100)) * 100);
                }
                else {
                    is = mP.impots().isImp();
                }
            }
            if (mP.investment().imf().taux() != null) {
                imf = mP.investment().imf().taux();
            }
            else {
                if (mP.investment().imf().reducexo() != null) {
                    imf = ((1 - (mP.investment().imf().reducexo() / 100)) * (mP.impots().imf() / 100)) * 100;
                }
                else {
                    imf = mP.impots().imf();
                }
            }
            if (mP.investment().irvm().taux() != null) {
                irvm = mP.investment().irvm().taux;
            }
            else {
                if (mP.investment().irvm().reducexo() != null) {
                    irvm = ((1 - (mP.investment().irvm().reducexo() / 100)) * (mP.impots().irvm() / 100)) * 100;
                }
                else {
                    irvm = mP.impots().irvm();
                }
            }
            if (mP.investment().irc().taux() != null) {
                irc = mP.investment().irc().taux();
            }
            else {
                if (mP.investment().irc().reducexo != null) {
                    irc = ((1 - (mP.investment().irc().reducexo() / 100)) * (mP.impots().irc() / 100)) * 100;
                }
                else {
                    irc = mP.impots().irc();
                }
            }
            if (mP.investment().tvaPetrole().taux() != null) {
                tvaPetrole = mP.investment().tvaPetrole().taux();
            }
            else {
                if (mP.investment().irc().reducexo() != null) {
                    tvaPetrole = ((1 - (mP.investment().tvaPetrole().reducexo() / 100)) * (mP.impots().tva_petrole() / 100)) * 100;
                }
                else {
                    tvaPetrole = mP.impots().tva_petrole();
                }
            }
        }
    }
    return {
        /**
         * @description the getter of cfe
         * @return {number}
         */
        cfe: function () {
            return cfe;
        },
        /**
         * @description the getter of is
         * @return {number}
         */
        is: function () {
            return is;
        },
        /**
         * @description the getter of imf
         * @return {number}
         */
        imf: function () {
            return imf;
        },
        /**
         * @description the getter of irvm
         * @return {number}
         */
        irvm: function () {
            return irvm;
        },
        /**
         * @description the getter of irc
         * @return {number}
         */
        irc: function () {
            return irc;
        },
        /**
         * @description the getter of tvaPetrole
         * @return {number}
         */
        tvaPetrole: function () {
            return tvaPetrole;
        },
    }
};
/**
 * @description This function give the real price of the Creance used by the Entity
 * @param {Object } mE  - the firm used by the model
 * @param {Object} impot - the impot used on the land
 * @param {number} pibchoix - the pib want be used
 * @return {{chargeFinance: Array, taux: Array, irc: Array}}
 */
ModelManager.prototype.taxe_creance = function (mE, impot, pibchoix) {
    let i;
    let chargeFin = [];
    let taux = [];
    let irc = [];
    for (i = 0; i < 5; i++) {
        chargeFin.push(mE.chargeFinanciere() * pibchoix);
    }
    for (i = 0; i < 5; i++) {
        taux.push(impot.irc());
    }
    for (i = 0; i < 5; i++) {
        irc.push((mE.chargeFinanciere() * pibchoix) * (impot.irc() / 100));
    }
    return {
        /**
         * @description the getter of chargeFinance
         * @return {Array}
         */
        chargeFinance: function () {
            return chargeFin;
        },
        /**
         * @description the getter of taux
         * @return {Array}
         */
        taux: function () {
            return taux;
        },
        /**
         * @description the getter of irc
         * @return {Array}
         */
        irc: function () {
            return irc;
        },
    }
};
/**
 * @description this function give the result of the comptability
 * @param {Object } mE  - the firm used by the model
 * @param {number} pibchoix - the pib want be used
 * @param {Array } tva - the tva on petrole used by the model
 * @param {Array } salaire_cadre - the real price of cadre
 * @param {Array } salaire_secretaire - the real price of secretaire
 * @param {Array } salaire_ouvrier - the real price of ouvrier
 * @param {Array } reel_CFE - the real price of Cfe
 * @param {Array } ammortissemment -the  amortissment of the model
 * @return {{vente: Array, achats: Array, petrole: Array, tva_petrole: Array, depense_entretien: Array, depense_admin: Array, depense_pub: Array, salaire_ouvrier: Array, salaire_secretaire: Array, salaire_cadre: Array, cfe: Array, chargeFinanciere: Array, amortissement: Array, benefice_comptable: Array, taux_marge_avant__IS_IMF: Array}}
 */
ModelManager.prototype.comptableResult = function (mE, pibchoix, tva, salaire_cadre, salaire_secretaire, salaire_ouvrier, reel_CFE, ammortissemment) {
    let i;
    let vente = [];
    let achats = [];
    let petrole = [];
    let tva_petrole = tva;
    let depense_admin = [];
    let depense_pub = [];
    let depense_entretien = [];
    let salaireCadre = salaire_cadre;
    let salaire_secreataire = salaire_secretaire;
    let salaireOuvrier = salaire_ouvrier;
    let CFE = reel_CFE;
    let chargeFinancier = [];
    let amortissement = [];
    let benefice_comptable = [];
    let taux_marge_avant__IS_ISMF = [];

    let cpt = 0;
    ammortissemment.forEach(function (item) {
        if (item === "change") {
            cpt++;
        }
        else {
            if (cpt > 4) {
                amortissement.push(item);
            }
        }

    });
    for (i = 0; i < 5; i++) {
        vente.push(mE.vente() * pibchoix);
        achats.push(mE.achat() * pibchoix);
        petrole.push(mE.petrole() * pibchoix);
        depense_admin.push(mE.depenseAdministrative() * pibchoix);
        depense_pub.push(mE.depensePub() * pibchoix);
        depense_entretien.push(mE.depenseEntretien() * pibchoix);
        chargeFinancier.push(mE.chargeFinanciere() * pibchoix);

    }
    for (i = 0; i < 5; i++) {
        benefice_comptable.push(vente[i] - (achats[i] + petrole[i] + tva_petrole[i] + depense_admin[i]
            + depense_pub[i] + depense_entretien[i] + salaireCadre[i] + salaireOuvrier[i] + salaire_secreataire[i]
            + CFE[i] + chargeFinancier[i] + amortissement[i]));
        taux_marge_avant__IS_ISMF.push((benefice_comptable[i] / vente[i]) * 100);
    }
    return {
        /**
         * @description the getter of vente
         * @return {Array}
         */
        vente: function () {
            return vente;
        },
        /**
         * @description the getter of achats
         * @return {Array}
         */
        achats: function () {
            return achats;
        },
        /**
         * @description the getter of petrole
         * @return {Array}
         */
        petrole: function () {
            return petrole;
        },
        /**
         * @description the getter of tva_petrole
         * @return {Array}
         */
        tva_petrole: function () {
            return tva_petrole;
        },//non
        /**
         * @description the getter of depense-entretien
         * @return {Array}
         */
        depense_entretien: function () {
            return depense_entretien;
        },
        /**
         * @description the getter of depense_admin
         * @return {Array}
         */
        depense_admin: function () {
            return depense_admin;
        },
        /**
         * @description the getter of depense_pub
         * @return {Array}
         */
        depense_pub: function () {
            return depense_pub;
        },
        /**
         * @description the getter of salaire_ouvrier
         * @return {Array}
         */
        salaire_ouvrier: function () {
            return salaireOuvrier;
        },
        /**
         * @description the getter of salaire_secretaire
         * @return {Array}
         */
        salaire_secretaire: function () {
            return salaire_secreataire;
        },
        /**
         * @description the getter of salaire_cadre
         * @return {Array}
         */
        salaire_cadre: function () {
            return salaireCadre;
        },
        /**
         * @description the getter of cfe
         * @return {Array}
         */
        cfe: function () {
            return CFE;
        },//non
        /**
         * @description the getter of chargeFinanciere
         * @return {Array}
         */
        chargeFinanciere: function () {
            return chargeFinancier;
        },
        //fin
        /**
         * @description the getter of amortissment
         * @return {Array}
         */
        amortissement: function () {
            return amortissement;
        },
        /**
         * @description the getter of benefice_comptable
         * @return {Array}
         */
        benefice_comptable: function () {
            return benefice_comptable;
        },
        /**
         * @description the getter of taux_marge_avant__IS_IMF
         * @return {Array}
         */
        taux_marge_avant__IS_IMF: function () {
            return taux_marge_avant__IS_ISMF;
        },
    };


};
/**
 *@description This function give the result of impot
 * @param {Array} benCompta - the profit of the comptability
 * @param {Array} amortExep - the amortissement Excep used by a model
 * @return {{benCompta: Array, amortExep: Array, benImpo: Array}}
 */
ModelManager.prototype.impotResult = function (benCompta, amortExep) {
    let benImpo = [];
    for (let i = 0; i < 5; i++) {
        benImpo.push(benCompta[i] - amortExep[i]);
    }
    return {
        /**
         * @description the getter of benCompta
         * @return {Array}
         */
        benCompta: function () {
            return benCompta;
        },
        /**
         * @description the getter of amortExep
         * @return {Array}
         */
        amortExep: function () {
            return amortExep;
        },
        /**
         * @description the getter of benImpo
         * @return {Array}
         */
        benImpo: function () {
            return benImpo;
        },
    };
};
/**
 *@description This function give the Amortissement Exep
 * @param {Object } mP  - the land used by the model
 * @param {Array} benCompta - the profit of the comptability
 * @param {String} regime - the government used by the modem
 * @param {Object} donneRef - the Data used by the model
 * @return {{duree: number, investment: number, taux: number, limitation: number, dureeTab: Array, baseAmorti: Array, chargeAmorti: Array}}
 */
ModelManager.prototype.ammortExcept = function (mP, benCompta, regime, donneRef) {
    let i;
    let investissment = (donneRef.firm().terrain() + donneRef.firm().construction()
        + donneRef.firm().equipement() + donneRef.firm().camion() + donneRef.firm().info()
        + donneRef.firm().bureau()) * donneRef.land().pib;
    let taux;
    let limitation;
    let duree;
    let tDuree = [];
    let baseAmorti = [];
    let chargeAmorti = [];
    if (regime === "nongen") {
        if (mP.investment().isamort().ammortTauxEx() != null) {
            taux = mP.investment().isamort().ammortTauxEx();
        }
        else {
            taux = 0;
        }
        if (mP.investment().isamort().ammortLimit() != null) {
            limitation = mP.investment().isamort().ammortLimit();
        }
        else {
            limitation = 0;
        }
        if (mP.investment().isamort().duree() != null) {
            duree = mP.investment().isamort().duree();
        }
        else {
            duree = 0;
        }
    }
    else {
        taux = 0;
        limitation = 0;
        duree = 0;
    }
    tDuree.push(duree);
    for (i = 1; i < 5; i++) {
        tDuree.push(tDuree[i - 1] - 1);
        if (tDuree[i] < 0) {
            tDuree[i] = 0;
        }
    }
    baseAmorti.push(investissment * (taux / 100));
    for (i = 0; i < 5; i++) {
        if (tDuree <= 0) {
            chargeAmorti.push(0)
        }
        else {
            if (benCompta[i] <= 0) {
                chargeAmorti.push(0)
            }
            else {
                if ((limitation / 100) * benCompta[i] > baseAmorti[i]) {
                    chargeAmorti.push(baseAmorti[i]);
                }
                else {
                    chargeAmorti.push((limitation / 100) * benCompta[i]);
                }
            }
        }
        if (i < 4) {
            baseAmorti.push(baseAmorti[i] - chargeAmorti[i]);
        }
    }
    return {
        /**
         * @description the getter of duree
         * @return {number}
         */
        duree: function () {
            return duree;
        },
        /**
         * @description the getter of investment
         * @return {number}
         */
        investment: function () {
            return investissment;
        },
        /**
         * @description the getter of taux
         * @return {number}
         */
        taux: function () {
            return taux;
        },
        /**
         * @description the getter of limitation
         * @return {number}
         */
        limitation: function () {
            return limitation;
        },
        /**
         * @description the getter of dureeTab
         * @return {Array}
         */
        dureeTab: function () {
            return tDuree;
        },
        /**
         * @description the getter of baseAmorti
         * @return {Array}
         */
        baseAmorti: function () {
            return baseAmorti;
        },
        /**
         * @description the getter of chargeAmorti
         * @return {Array}
         */
        chargeAmorti: function () {
            return chargeAmorti;
        },
    }
};
/**
 *@description This function give the real impot (is or imf ) paid by the Firm
 * @param {Array}  is - the real Is Impot give by the model
 * @param {Array}  imf - the real imf Impot give by the model
 * @return {Array}
 */
ModelManager.prototype.iSIMFtab = function (is, imf) {
    let monTab = [];
    for (let i = 0; i < 5; i++) {
        if (is[i] >= imf[i]) {
            monTab.push(is[i]);
        }
        else {
            monTab.push(imf[i]);
        }
    }
    return monTab;
};
/**
 *@description  This function give the real price of all taxe paid
 * @param {number} actu - a discount rate want be used
 * @param {Object} employer - a Real Price of Working Force used by a model
 * @param {Array}  isImf -  the real IS or IMF Impot give by the model
 * @param {Array}   impotIRVM -  the real IRVM Impot give by the model
 * @param {Object} taxeCreance - the real Creance taxe used by a model
 * @param {Object} taxeAjout - the real Val Ajout taxe used by a model
 * @return {{cfe: Array, isimf: Array, irvm: Array, irc: Array, tvaPetrole: Array, total: Array}}
 */
ModelManager.prototype.impotTaxeCourent = function (actu, employer, isImf, impotIRVM, taxeCreance, taxeAjout) {
    let cfe = [];
    let isimf = [];
    let irvm = [];
    let irc = [];
    let tvaPetrole = [];
    let total = [];
    for (let i = 0; i < 5; i++) {
        cfe.push(employer.reel_CFE()[i]);
        isimf.push(isImf[i]);
        irvm.push(impotIRVM[i]);
        irc.push(taxeCreance.irc()[i]);
        tvaPetrole.push(taxeAjout.tva()[i]);
        total.push(cfe[i] + isimf[i] + irc[i] + irvm[i] + tvaPetrole[i]);
    }
    cfe.push(myMath.van(actu / 100, cfe));
    isimf.push(myMath.van(actu / 100, isimf));
    irvm.push(myMath.van(actu / 100, irvm));
    irc.push(myMath.van(actu / 100, irc));
    tvaPetrole.push(myMath.van(actu / 100, tvaPetrole));
    total.push(myMath.van(actu / 100, total));
    return {
        /**
         * @description the getter of cfe
         * @return {Array}
         */
        cfe: function () {
            return cfe;
        },
        /**
         * @description the getter of isimf
         * @return {Array}
         */
        isimf: function () {
            return isimf;
        },
        /**
         * @description the getter of irvm
         * @return {Array}
         */
        irvm: function () {
            return irvm;
        },
        /**
         * @description the getter of irc
         * @return {Array}
         */
        irc: function () {
            return irc;
        },
        /**
         * @description the getter of tvaPetrole
         * @return {Array}
         */
        tvaPetrole: function () {
            return tvaPetrole;
        },
        /**
         * @description the getter of total
         * @return {Array}
         */
        total: function () {
            return total;
        },
    }
};
/**
 *@description  This function give the real price of all taxe paid with topic
 * @param {number} actu - a discount rate want be used
 * @param {Object} employer - a Real Price of Working Force used by a model
 * @param {Array}  isImf -  the real IS or IMF Impot give by the model
 * @param {Array}   impotIRVM -  the real IRVM Impot give by the model
 * @param {Object} taxeCreance - the real Creance taxe used by a model
 * @param {Object} taxeAjout - the real Val Ajout taxe used by a model
 * @return {{cfe: Array, isimf: Array, irvm: Array, irc: Array, tvaPetrole: Array, total: Array}}
 */
ModelManager.prototype.impotTaxeActu = function (actu, employer, isImf, impotIRVM, taxeCreance, taxeAjout) {
    let cfe = [];
    let isimf = [];
    let irvm = [];
    let irc = [];
    let tvaPetrole = [];
    let total = [];
    let totactu = 0;
    for (let i = 0; i < 5; i++) {
        totactu = actu[i];
        cfe.push(employer.reel_CFE()[i] * (totactu / 100));
        isimf.push(isImf[i] * (totactu / 100));
        irvm.push(impotIRVM[i] * (totactu / 100));
        irc.push(taxeCreance.irc()[i] * (totactu / 100));
        tvaPetrole.push(taxeAjout.tva()[i] * (totactu / 100));
        total.push(cfe[i] + isimf[i] + irc[i] + irvm[i] + tvaPetrole[i]);
    }
    cfe.push(myMath.sommeTab(cfe));
    isimf.push((myMath.sommeTab(isimf)));
    irvm.push(myMath.sommeTab(irvm));
    irc.push(myMath.sommeTab(irc));
    tvaPetrole.push(myMath.sommeTab(tvaPetrole));
    total.push(myMath.sommeTab(total));
    return {
        /**
         * @description the getter of cfe
         * @return {Array}
         */
        cfe: function () {
            return cfe;
        },
        /**
         * @description the getter of isimf
         * @return {Array}
         */
        isimf: function () {
            return isimf;
        },
        /**
         * @description the getter of irvm
         * @return {Array}
         */
        irvm: function () {
            return irvm;
        },
        /**
         * @description the getter of irc
         * @return {Array}
         */
        irc: function () {
            return irc;
        },
        /**
         * @description the getter of tvaPetrole
         * @return {Array}
         */
        tvaPetrole: function () {
            return tvaPetrole;
        },
        /**
         * @description the getter of total
         * @return {Array}
         */
        total: function () {
            return total;
        },
    }
};
/**
 *@description This function give the TEMI
 * @param {number} vanSI - a NPV Without Taxe
 * @param {number} vanAI - a NPV with Taxe
 * @return {number}
 */
ModelManager.prototype.tauxEffectif = function (vanSI, vanAI) {
    return ((vanSI - vanAI) / vanSI) * 100;
};
/**
 * @description This function give the cash Flow of the firm on the land without Taxe
 *  @param {Object } entreprise  - the land used by the model
 * @param {number} pin - the pib want be used
 * @param {Object} compta - The comptability result in the Entity
 * @param {number} actu - a discount rate want be used
 * @return {{courant: Array, topic: Array}}
 */
ModelManager.prototype.fluxTresoriesI = function (entreprise, pin, compta, actu) {
    let courant = [];
    let courantBis = [];
    let actuel = [];
    let actuelBis = [];
    let totactu;
    courant.push(-(entreprise.capitalSocial() + entreprise.detteLongTerme() + entreprise.detteCourtTerme() + entreprise.detteFournisseur()) * pin);
    actuel.push(-(entreprise.capitalSocial() + entreprise.detteLongTerme() + entreprise.detteCourtTerme() + entreprise.detteFournisseur()) * pin);
    compta.vente().forEach(function (item, index) {
        courant.push(item - compta.achats()[index] - compta.petrole()[index] - compta.depense_entretien()[index]
            - compta.depense_admin()[index] - compta.depense_pub()[index] - compta.salaire_ouvrier()[index]
            - compta.salaire_cadre()[index] - compta.salaire_secretaire()[index] - compta.chargeFinanciere()[index]);

    });
    courantBis.push(courant[0]);
    actuelBis.push(actuel[0]);
    courant.forEach(function (item, index) {
        if (index !== 0) {
            totactu = (actu[index - 1]);
            courantBis.push(item);
            actuel.push(item * (totactu / 100));
            actuelBis.push(actuel[index]);
        }

    });
    courant.push(myMath.van(entreprise.actuali() / 100, courant));
    actuel.push(myMath.sommeTab(actuelBis));
    return {
        /**
         * @description the getter of courant
         * @return {Array}
         */
        courant: function () {
            return courant;
        },
        /**
         * @description the getter of topic
         * @return {Array}
         */
        topic: function () {
            return actuel;
        },
    };
};
/**
 *@description This function give the cash FLow of the firm in the land with taxe
 * @param {Object }  fluxTresorie - the cash FLow of the firm in the land without taxe
 * @param {Array} tabImpotC - Taxe Of the land on the firm
 * @param {Array} tabImpotA - Taxe Of the land on the firm topic
 * @param {number} actuel - a discount rate want be used
 * @return {{courant: Array, topic: Array}}
 */
ModelManager.prototype.fluxTresoriesImp = function (fluxTresorie, tabImpotC, tabImpotA, actuel) {
    let actu = [];
    let courant = [];
    courant.push(fluxTresorie.courant()[0]);
    actu.push(fluxTresorie.topic()[0]);
    fluxTresorie.topic().forEach(function (item, index) {
        if (index > 0 && index < fluxTresorie.topic().length - 1) {
            actu.push(item - tabImpotA[index - 1]);
        }
    });
    fluxTresorie.courant().forEach(function (item, index) {
        if (index > 0 && index < fluxTresorie.courant().length - 1) {
            courant.push(item - tabImpotC[index - 1]);
        }
    });
    actu.push(myMath.sommeTab(actu));
    courant.push(myMath.van(actuel / 100, courant));
    return {
        /**
         * @description the getter of courant
         * @return {Array}
         */
        courant: function () {
            return courant;
        },
        /**
         * @description the getter of topic
         * @return {Array}
         */
        topic: function () {
            return actu;
        },
    };


};
/**
 *@description This function give a return rates evolution Table
 * @param {Array} tab - the array want to compute this
 * @return {Array}
 */
ModelManager.prototype.tauxRendementInterne = function (tab) {
    let taux = [];
    let tau;
    let tabBis = [];
    tabBis.push(tab[0]);
    tab.forEach(function (item, index) {
        if (index > 0 && index < tab.length - 1) {
            tabBis.push(item);
            try {
                tau = myMath.tri(tabBis);
            } catch (e) {
                tau = 0;
            }
            if (tau < 0) {
                tau = 0;
            }
            taux.push(tau);
        }
    });

    //console.log(this.tri(tabBis));
    return taux;
};
/**
 *@description This function give the effective rate
 * @param {Array} tabSi - An Array want to be calc (cashFlow) without Taxe
 * @param {Array} tabAi -  An Array Want to be calc(cashFlow) with Taxe
 * @return {Array}
 */
ModelManager.prototype.tauxEffectifMarginaux = function (tabSi, tabAi) {
    let tot = [];
    tabSi.forEach(function (item, index) {
        if (item > 0) {
            tot.push((((item - tabAi[index]) / item) * 100));
        }
        else {
            tot.push(0);
        }
    });
    return tot;
};
/**
 *@description This function give a return rates total
 * @param {Array} tab - the array want to compute this
 * @return {number}
 */
ModelManager.prototype.tauxRenInterTot=function(tab){
    let topic=[];
    let tau;
    tab.forEach(function(item,index){
        if( index < tab.length - 1){
            topic.push(item);
        }
    });
    try {
        tau = myMath.tri(topic);
    } catch (e) {
        //console.log("lol");
        tau = 0;
    }
    if (tau < 0) {
        tau = 0;
    }
    return tau;
};


/**
 * @type {ModelManager}
 */
let modelManager = new ModelManager();
/**
 * @description This function is a constructor of Model class
 * @param {Data} donnee - the donne used to construct the model
 * @constructor
 */
let Model = function (donnee) {
    this.donnee = donnee;
};
/**
 * @description This function Keep all the ModeleData
 * @return {{impotSelected: {cfe, is, imf, irvm, irc, tvaPetrole}, investissement: number, amortissementGeneral: Array, amortissement: Array, taxeAjout: {petrole, taux, tva}, employer: {salaire_cadre, salaire_secretaire, salaire_ouvrier, masse_salarial, tauxCfe, reel_CFE}, impotIMF: Array, impotIRVM: Array, ammortExcep: {duree, investissement, taux, limitation, dureeTab, baseAmorti, chargeAmorti}, taxeCreance: {chargeFinance, taux, irc}, resultCompta: {vente, achats, petrole, tva_petrole, depense_entretien, depense_admin, depense_pub, salaire_ouvrier, salaire_secretaire, salaire_cadre, cfe, chargeFinanciere, amortissement, benefice_comptable, taux_marge_avant__IS_IMF}, resultImpot: {benCompta, amortExep, benImpo}, actualisation: Array, impotSociete: Array, isImf: Array, impotTaxeCourent: {cfe, isimf, irvm, irc, tvaPetrole, total}, impotTaxeActu: {cfe, isimf, irvm, irc, tvaPetrole, total}, fluxTresSansImp: {courant, topic}, tauxeffMoy: *, fluxTresSansISIMF: {courant, topic}, fluxTresApresImpot: {courant, topic}, tauxRendInterneSImp: Array, tauxRendInterneSISIMF: Array, tauxRendInterneAImp: Array, tauxEffMargImpApIsImf: Array, tauxEffMargImpApImp: Array}}
 */
Model.prototype.mesdon = function () {
    let mE = this.donnee.firm();
    let mP = this.donnee.land();
    let impotSelected = modelManager.selectTaxe(mP, this.donnee);
    let pibchoix = this.donnee.land().pib;
    let investissement = Math.trunc(modelManager.investissementModele(mE, pibchoix));
    let amortissement = modelManager.ammortissment(mE, mP, pibchoix);
    let generalAmort = modelManager.ammortGen(amortissement);
    let taxeValAjout = modelManager.taxe_val_ajout(mE, impotSelected, pibchoix);
    let emploi = modelManager.contributionForfEmploie(mE, mP, pibchoix, impotSelected);
    let taxeCreance = modelManager.taxe_creance(mE, impotSelected, pibchoix);
    let resultCompta = modelManager.comptableResult(mE, pibchoix, taxeValAjout.tva(), emploi.salaire_cadre(),
        emploi.salaire_secretaire(), emploi.salaire_ouvrier(), emploi.reel_CFE(), generalAmort);
    let ammortExcep = modelManager.ammortExcept(mP, resultCompta.benefice_comptable(), this.donnee.government(), this.donnee);
    let resultImpot = modelManager.impotResult(resultCompta.benefice_comptable(), ammortExcep.chargeAmorti());
    let impotSociete = [];
    let impotIMF = [];
    let impotIRVM = [];
    let actualisation = [];
    for (let i = 0; i < 5; i++) {
        actualisation.push(1 / Math.pow(1 + (mE.actuali() / 100), i) * 100);
    }
    let lol, lol2;
    for (let i = 0; i < 5; i++) {
        lol = resultImpot.benImpo()[i];
        lol2 = (impotSelected.is() / 100);
        impotSociete.push(lol * lol2);
    }
    for (let i = 0; i < 5; i++) {
        impotIMF.push(resultCompta.vente()[i] * (impotSelected.imf() / 100));
    }
    for (let i = 0; i < 5; i++) {
        impotIRVM.push(resultCompta.benefice_comptable()[i] * (impotSelected.irvm() / 100) * (mE.dividende() / 100));
    }
    let isimf = modelManager.iSIMFtab(impotSociete, impotIMF);
    let impotTaxeCourent = modelManager.impotTaxeCourent(mE.actuali(), emploi, isimf, impotIRVM, taxeCreance, taxeValAjout);
    let impotTaxeActu = modelManager.impotTaxeActu(actualisation, emploi, isimf, impotIRVM, taxeCreance, taxeValAjout);
    let fluxTresSansImp = modelManager.fluxTresoriesI(mE, pibchoix, resultCompta, actualisation);
    let fluxTresSansISIMF = modelManager.fluxTresoriesImp(fluxTresSansImp, impotTaxeCourent.isimf(), impotTaxeActu.isimf(), mE.actuali());
    let fluxTresApresImpot = modelManager.fluxTresoriesImp(fluxTresSansImp, impotTaxeCourent.total(), impotTaxeActu.total(), mE.actuali());
    let tauxeffMoyC = modelManager.tauxEffectif(fluxTresSansImp.courant()[fluxTresSansImp.courant().length - 1],
        fluxTresApresImpot.courant()[fluxTresApresImpot.courant().length - 1]);
    let tauxRendInterneSImp = modelManager.tauxRendementInterne(fluxTresSansImp.courant());
    let tauxRendInterneSImpTot = modelManager.tauxRenInterTot(fluxTresSansImp.topic());
    let tauxRendInterneSISIMF = modelManager.tauxRendementInterne(fluxTresSansISIMF.courant());
    let tauxRendInterneSISIMFTop = modelManager.tauxRenInterTot(fluxTresSansISIMF.topic());
    let tauxRendInterneAImp = modelManager.tauxRendementInterne(fluxTresApresImpot.courant());
    let tauxRendInterneAImpTot = modelManager.tauxRenInterTot(fluxTresApresImpot.topic());
    let tauxEffMargImpApIsImf = modelManager.tauxEffectifMarginaux(tauxRendInterneSImp, tauxRendInterneSISIMF);
    let tauxEffMargImpApImp = modelManager.tauxEffectifMarginaux(tauxRendInterneSImp, tauxRendInterneAImp);
    return {
        /**
         * @description the getter of impotSelected
         * @return {{cfe: number, is: number, imf: number, irvm: number, irc: number, tvaPetrole: number}}
         */
        impotSelected: function () {
            return impotSelected;
        },
        /**
         * @description the getter of investissement
         * @return {number}
         */
        investissement: function () {
            return investissement;
        },
        /**
         * @description the getter of ammortissementGeneral
         * @return {Array}
         */
        amortissementGeneral: function () {
            return generalAmort;
        },
        /**
         * @description the getter of the getter of amortissement
         * @return {Array}
         */
        amortissement: function () {
            return amortissement;
        },
        /**
         * @description the getter of taxeAjout
         * @return {{petrole: Array, taux: Array, tva: Array}}
         */
        taxeAjout: function () {
            return taxeValAjout;
        },
        /**
         * @description the getter of employer
         * @return {{salaire_cadre: Array, salaire_secretaire: Array, salaire_ouvrier: Array, masse_salarial: Array, tauxCfe: Array, reel_CFE: Array}}
         */
        employer: function () {
            return emploi;
        },
        /**
         * @description the getter of impotIMF
         * @return {Array}
         */
        impotIMF: function () {
            return impotIMF;
        },
        /**
         * @description the getter of impotIRVM
         * @return {Array}
         */
        impotIRVM: function () {
            return impotIRVM;
        },
        /**
         * @description the getter of ammortExcep
         * @return {{duree: number, investissement: number, taux: number, limitation: number, dureeTab: Array, baseAmorti: Array, chargeAmorti: Array}}
         */
        ammortExcep: function () {
            return ammortExcep;
        },
        /**
         * @description the getter of taxe creance
         * @return {{chargeFinance: Array, taux: Array, irc: Array}}
         */
        taxeCreance: function () {
            return taxeCreance
        },
        /**
         * @description the getter of resultCompta
         * @return {{vente: Array, achats: Array, petrole: Array, tva_petrole: Array, depense_entretien: Array, depense_admin: Array, depense_pub: Array, salaire_ouvrier: Array, salaire_secretaire: Array, salaire_cadre: Array, cfe: Array, chargeFinanciere: Array, amortissement: Array, benefice_comptable: Array, taux_marge_avant__IS_IMF: Array}}
         */
        resultCompta: function () {
            return resultCompta;
        },
        /**
         * @description the getter of resultImpot
         * @return {{benCompta: Array, amortExep: Array, benImpo: Array}}
         */
        resultImpot: function () {
            return resultImpot;
        },
        /**
         * @description the getter of actualisation
         * @return {Array}
         */
        actualisation: function () {
            return actualisation;
        },
        /**
         * @description the getter of impotSociete
         * @return {Array}
         */
        impotSociete: function () {
            return impotSociete;
        },
        /**
         * @description the getter of isImf
         * @return {Array}
         */
        isImf: function () {
            return isimf;
        },
        /**
         * @description the getter of impotTaxeCourent
         * @return {{cfe: Array, isimf: Array, irvm: Array, irc: Array, tvaPetrole: Array, total: Array}}
         */
        impotTaxeCourent: function () {
            return impotTaxeCourent
        },
        /**
         * @description the getter of impotTaxeActu
         * @return {{cfe: Array, isimf: Array, irvm: Array, irc: Array, tvaPetrole: Array, total: Array}}
         */
        impotTaxeActu: function () {
            return impotTaxeActu;
        },
        /**
         * @description the getter of fluxTresSansImp
         * @return {{courant: Array, topic: Array}}
         */
        fluxTresSansImp: function () {
            return fluxTresSansImp;
        },
        /**
         * @description the getter of tauxeffMoyCourent
         * @return {number}
         */
        tauxeffMoyCourent: function () {
            return tauxeffMoyC;
        },
        /**
         * @description the getter of fluxTresSansISIMF
         * @return {{courant: Array, topic: Array}}
         */
        fluxTresSansISIMF: function () {
            return fluxTresSansISIMF;
        },
        /**
         * @description the getter of fluxTresApresImpot
         * @return {{courant: Array, topic: Array}}
         */
        fluxTresApresImpot: function () {
            return fluxTresApresImpot;
        },
        /**
         * @description the getter of tauxRendInterneSImp
         * @return {Array}
         */
        tauxRendInterneSImp: function () {
            return tauxRendInterneSImp;
        },
        /**
         * @description the getter of tauxRendInterneSImpToT
         * @return {number}
         */
        tauxRendInterneSImpTot:function(){
            return tauxRendInterneSImpTot;
        },
        /**
         * @description the getter of tauxRendInterneSISIMF
         * @return {Array}
         */
        tauxRendInterneSISIMF: function () {
            return tauxRendInterneSISIMF;
        },
        /**
         * @description the getter of tauxRendInterneSISIMFTot
         * @return {number}
         */
        tauxRendInterneSISIMFTot: function () {
            return tauxRendInterneSISIMFTop;
        },
        /**
         * @description the getter of tauxRendInterneAImp
         * @return {Array}
         */
        tauxRendInterneAImp: function () {
            return tauxRendInterneAImp;
        },
        /**
         * @description the getter of tauxRendInterneAImpTot
         * @return {number}
         */
        tauxRendInterneAImpTot: function () {
            return tauxRendInterneAImpTot;
        },
        /**
         * @description the getter of tauxEffMArgImpApIsIMF
         * @return {Array}
         */
        tauxEffMargImpApIsImf: function () {
            return tauxEffMargImpApIsImf;
        },
        /**
         * @description the getter of tauxEffMargImpApImp
         * @return {Array}
         */
        tauxEffMargImpApImp: function () {
            return tauxEffMargImpApImp;
        }
    }
};
/**
 * @description This function is a constructor of Graph Class
 * @constructor
 */
let Graph = function () {
};
/**
 * @param {Array} modeleTab - the array of the Entity use to put a graphique
 * @param {string} idGraph - the id of the graph
 * @param {string} idText - the id of the text
 * @param {string} regime - a government of the Entity
 * @param {Array} maMarge - A Array of the margin Rate
 * @param {string} titre - a filename of the excel outPut
 * @description This function create a graphique with a module Chart.js
 * return nothing but touch the html with id parameter
 */
Graph.prototype.graphique = function (modeleTab, idGraph, idText, regime, maMarge, titre) {
    document.getElementById("graph-container").innerHTML = `<div class="row"><div class="col-sm-10"><canvas id="${idGraph}"> </canvas></div><div class="col-sm-2"> <div id="js-legend" class="chart-legend"></div> </div> </div><div id="${idText}"></div>`;
    let dataset = [];
    let colorDif;
    let color;
    let targetCanvas = document.getElementById(idGraph);
    let ctx = targetCanvas.getContext('2d');
    let myChart;
    if (modeleTab.length !== 0) {
        if (modeleTab[0].length === 0) {
            ctx.clearRect(0, 0, targetCanvas.width, targetCanvas.height);
            myChart = new Chart(ctx, null);
            myChart.clear();
            $(idGraph).remove();
            $('iframe.chartjs-hidden-iframe').remove();
            document.getElementById(idText).innerHTML = " ";
        }
        else {
            colorDif = createColorSet(modeleTab[0].length);
            color = [];
            colorDif.forEach(function (item) {
                color.push(getColorString(item));
            });
            let pays = [];
            let donneDataset = [];
            modeleTab.forEach(function (item, index) {
                pays.push(item);
                donneDataset.push([]);
                pays[index].forEach(function (item2) {
                    donneDataset[index].push(item2.modele.mesdon().tauxeffMoyCourent());
                })
            });
            let entreprise = [];
            donneDataset[0].forEach(function (lol, index) {
                entreprise.push([]);
                donneDataset.forEach(function (item) {
                    entreprise[index].push(item[index]);
                });
            });
            let realColor;
            let entre = [];
            entreprise.forEach(function (item, index) {
                realColor = [];
                item.forEach(function () {
                    realColor.push(color[index]);
                });
                entre.push("entreprise " + (index + 1));
                dataset.push({
                    label: "entreprise " + (index + 1) + " taux de marge avant impot = " + modeleTab[0][index].donne.margin() + " % ",
                    data: item,
                    backgroundColor: realColor,
                });
            });
            let payTab = [];
            modeleTab.forEach(function (item) {
                payTab.push(item[0].donne.land().name());
            });
            let myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: payTab,
                    datasets: dataset,
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true,
                                stepValue: 0.1,
                            },
                            scaleLabel: {
                                display: true,
                                labelString: 'pourcentage %'
                            }
                        }],
                        xAxes: [{
                            display: true,
                            ticks: {
                                autoSkip: false,
                            }
                        }]
                    },
                    legend: {
                        display: false,
                        position: "right",
                        fullWidth: false,
                    },
                    title: {
                        display: true,
                        text: 'TEMI Global avec le régime fiscal :' + regime
                    },
                    responsive: true,
                }
            });
            let legendsHTML = "<ul class='1-legend'>";
            let getLEgend = myChart.legend.legendItems;
            getLEgend.forEach(function (item, index) {
                legendsHTML += `<li><span style="background-color: ${item.fillStyle}"> </span> entreprise ${index + 1} </li> `
            });
            legendsHTML += "</ul>";
            document.getElementById('js-legend').innerHTML = legendsHTML;
            $("#js-legend > ul > li").on(`click`, function () {
                let index = $(this).index();
                $(this).toggleClass("strike");
                let ci = myChart;
                let curr = ci.data.datasets[index];
                curr.hidden = !curr.hidden;
                ci.update();
            });
            document.getElementById(idText).innerHTML = this.tableau(entreprise, maMarge, titre);
        }
    }
    else {
        ctx.clearRect(0, 0, targetCanvas.width, targetCanvas.height);
        myChart = new Chart(ctx, null);
        myChart.clear();
        $(idGraph).remove();
        $('iframe.chartjs-hidden-iframe').remove();
        document.getElementById(idText).innerHTML = " "
    }
};
/**
 * @description This function create a HTML table of TEMI
 * @param {Array} entreprise - the tab of entreprise TEMI
 * @param {Array} maMarge - the tab of marge
 * @param {string} titre - the name of Excel File
 * @return {string}
 */
Graph.prototype.tableau = function (entreprise, maMarge, titre) {
    let entrer = [];
    entreprise.forEach(function (item, index) {
        entrer.push("entreprise " + (index + 1));
    });
    return bootstrap.bootstrapTemiTabSpe(entrer, paysChoisi, entreprise, maMarge, titre);
};
/**
 * @description This function create a random color array
 * @param {number} number - the number of color u want
 * @return {Array} colors  - an array with all color tab
 */
function createColorSet(number) {
    let colors = [],
        step = 3 * 256 / (number + 1),
        cs = 0,
        g;
    let b;
    for (let i = 0; i < number; i++) {
        cs = i * step;
        colors[i] = [];
        colors[i].r = Math.round(cs % 256);
        colors[i].g = Math.round(cs / 3);
        b = 256 - cs;
        while (b < 0)
            b = b + 256;
        colors[i].b = Math.round(b);
    }
    return colors;
}
/**
 * @description This function create a chart.js color with an array of color
 * @param {Object} tab - the color (r,g b)
 * @return {string} the colors of chart.js
 */
function getColorString(tab) {
    return 'rgba(' + tab.r + ',' + tab.g + ',' + tab.b + ', 1)';
}
/**
 * @type {Graph}
 */
let graph = new Graph();
/**
 * @description This function is a constructor of ViewGenerator Class
 * @param {Model} modele - the modele use by this class to generate view
 * @constructor
 */
let ViewGenerator = function (modele) {
    this.modele = modele
};
/**
 * @description This function create a html to resultat in the index
 * @return {string}
 */
ViewGenerator.prototype.resultatHtml = function () {
    let impotStatDuree = [];
    if (this.modele.donnee.government() === "gen") {
        for (let i = 0; i < 5; i++) {
            impotStatDuree.push(" ");
        }
    }
    else {

    }
    let head = "<thead><tr><th/><th colspan=3 align=center>Taux statuaire</th><th colspan=2>Taux effectifs marginaux</th></tr>";
    head += "<tr><th/><th>Taux plein</th><th>Taux réduit</th><th>Durée</th><th>1re année</th><th>5e année</th></tr></thead>";
    let cfe = this.recupDonneTab(false, this.modele.donnee.land().investment().cfe(), this.modele.donnee.land().impots().cfe(),
        false, false, false);
    let is = this.recupDonneTab(false, this.modele.donnee.land().investment().isamort(),
        this.modele.donnee.land().impots().isImp(), true, false, false);

    let imf = this.recupDonneTab(false, this.modele.donnee.land().investment().imf(), this.modele.donnee.land().impots().imf(),
        false, true, false);
    let irvm = this.recupDonneTab(false, this.modele.donnee.land().investment().irvm(),
        this.modele.donnee.land().impots().irvm(), false, false, false);
    let irc = this.recupDonneTab(false, this.modele.donnee.land().investment().irc(), this.modele.donnee.land().impots().irc(),
        false, false, false);
    let tva = this.recupDonneTab(false, this.modele.donnee.land().investment().tvaPetrole(),
        this.modele.donnee.land().impots().tva_petrole(), false, false, false);
    let tot = this.recupDonneTab(this.modele.mesdon().tauxeffMoyCourent, this.modele.donnee.land().investment().total,
        this.modele.donnee.land().impots().imf(), false, false, true);
    let bodyTest = bootstrap.tableSE(
        [`CFE</td><td>${this.modele.donnee.land().impots().cfe()}`, `IS</td><td class=\"fontred\">${this.mP.impots().isImp()}`,
            `IMF</td><td class=\"fontred\">${this.mP.impots().imf()}`, `IRVM</td><td>${this.mP.impots().irvm()}`,
            `IRC</td><td>${this.mP.impots().irc()}`, `TVA Petrole</td><td>${this.mP.impots().tva_petrole()}`, "Total</td><td>"],
        head,
        {
            tab: myMath.arrondirTabUnit(cfe,2),
            color: ""
        },
        {
            tab: myMath.arrondirTabUnit(is,2),
            color: "",
            font_color: "red",
            numTabdep: 0
        },
        {
            tab: myMath.arrondirTabUnit(imf,2),
            color: "",
            font_color: "red",
            numTabdep: 0
        },
        {
            tab: myMath.arrondirTabUnit(irvm,2),
            color: ""
        },
        {
            tab: myMath.arrondirTabUnit(irc,2),
            color: ""
        },
        {
            tab: myMath.arrondirTabUnit(tva,2),
            color: ""
        },
        {
            tab: myMath.arrondirTabUnit(tot,2),
            color: ""
        });
    let pannelTab = bootstrap.pan("default", null, bodyTest);
    return this.investissementRegime() + bootstrap.pan("default", "<h1>Résultat</h1>", pannelTab);

};
/**
 * @description This function create a tab for resultatHtml
 * @param {Array} effMoy - the mean effectif tab
 * @param {Object} impDonne - the Impot of the land
 * @param {number} donneImp - the Impot Rate
 * @param {Boolean} isIs - Defined if the impot is IS
 * @param {Boolean } isImf - Defined if the impot is IMF
 * @param {Boolean} isTot -Defined If we make A total Row
 * @return {Array}
 */
ViewGenerator.prototype.recupDonneTab = function (effMoy, impDonne, donneImp, isIs, isImf, isTot) {
    let result = [];
    if (isTot) {
        result.push(null);
        result.push(null);
        result.push(Math.round(this.modele.mesdon().tauxEffMargImpApImp()[0]*100)/100);
        result.push(Math.round(this.modele.mesdon().tauxEffMargImpApImp()[this.modele.mesdon().tauxEffMargImpApImp().length - 1]*100)/100);
        return result;
    }
    else {
        if (this.modele.donnee.government() !== "Gen") {
            if (impDonne.taux() != null) {
                result.push(impDonne.taux());
            }
            else {
                if (impDonne.reducexo() != null) {
                    result.push(((1 - (impDonne.reducexo() / 100)) * (donneImp / 100)) * 100);
                }
                else {
                    result.push(null);
                    result.push(null);
                }
            }
            if (impDonne.taux() != null) {
                result.push(impDonne.duree());
            }
            if (impDonne.reducexo() != null) {
                result.push(impDonne.duree());
            }
        }
        if (isIs) {
            result.push(Math.round(this.modele.mesdon().tauxEffMargImpApIsImf()[0]*100)/100);
            result.push(Math.round(this.modele.mesdon().tauxEffMargImpApIsImf()[this.modele.mesdon().tauxEffMargImpApIsImf().length - 1]*100)/100);
        }
        else {
            if (!isImf) {
                result.push(null);
                result.push(null);
            }
        }
        return result;
    }
};
/**
 * @description This function create a html to give the gdp on the land
 * @return {string}
 */
ViewGenerator.prototype.pinbHTML = function () {
    return `<p>Le PIB par tête pour le pays ${this.mP.name()} est de : ${myMath.separatorNumber(Math.round(this.mP.pib))} FCFA</p>`;
};
/**
 * @description This function create a html to give a firm information
 * @return {string}
 */
ViewGenerator.prototype.entrepriseHTML = function () {
    let result = "<p>L'entreprise simulée est supposée être localisée dans la plus grande ville du pays, employer "
        + myMath.separatorNumber((this.mE.cadre() + this.mE.secretaire() + this.mE.ouvrier())) + " salariés et vendre la totalité de sa " +
        "production sur le marché local. ";
    result += "<br/>Elle comporte donc " + myMath.separatorNumber(this.mE.cadre()) + " cadre(s) dont l'indice salarial est de "
        + myMath.separatorNumber(this.mE.indice_cadre());
    result += " , " + myMath.separatorNumber(this.mE.secretaire()) + " secrétaire(s) dont l'indice salarial est de " + myMath.separatorNumber(this.mE.indice_secretaire());
    result += " , " + myMath.separatorNumber(this.mE.ouvrier()) + " ouvrier(s) dont l'indice salarial est de " + myMath.separatorNumber(this.mE.indice_ouvrier()) + ".";
    result += "<br/>Elle verse " + myMath.separatorNumber(this.mE.dividende()) + "% de ses bénéfices dans les dividendes";
    result += "<br/>Elle a un taux d'actualisation de " + myMath.separatorNumber(this.mE.actuali()) + " %";
    result += "</p>";
    return result;
};
/**
 * @description This function create a html to give a bilan Array on the firm used by the modele
 * @return {string}
 */
ViewGenerator.prototype.bilanHtml = function () {
    let actif = this.mE.terrain() + this.mE.construction() + this.mE.equipement() + this.mE.camion() + this.mE.info() +
        this.mE.bureau() + this.mE.stocks() + this.mE.creanceCli() + this.mE.dispoBanque();
    let passif = this.mE.capitalSocial() + this.mE.detteLongTerme() +
        this.mE.detteCourtTerme() + this.mE.detteFournisseur();
    let col1 = ["<span style='font-size: smaller; '><strong>Actif immobilisé</strong></span>",
        "Terrain", "Constructions", "Equipement", "Camion", "Matériel informatique", "Matériel de bureau",
        "<span style='font-size: smaller; '><strong>Actif circulant</strong></span>", "Stocks", "Créances Clients",
        "Disponibilités bancaires", "<strong>Actif</strong>"];
    let lin1 = {
        tab: myMath.separatorNumberArray([null, "<strong>Capitaux propre</strong>", null]),
        color: ""
    };
    let lin2 = {
        tab: myMath.separatorNumberArray([this.mE.terrain(), "Capital social", this.mE.capitalSocial()]),
        color: ""
    };
    let lin3 = {
        tab: myMath.separatorNumberArray([this.mE.construction(), null, null]),
        color: ""
    };
    let lin4 = {
        tab: myMath.separatorNumberArray([this.mE.equipement(), null, null]),
        color: ""
    };
    let lin5 = {
        tab: myMath.separatorNumberArray([this.mE.camion(), null, null]),
        color: ""
    };
    let lin6 = {
        tab: myMath.separatorNumberArray([this.mE.info(), null, null]),
        color: ""
    };
    let lin7 = {
        tab: myMath.separatorNumberArray([this.mE.bureau(), null, null]),
        color: ""
    };
    let lin8 = {
        tab: myMath.separatorNumberArray([null, "<strong><span style='font-size: smaller; '>Dettes</span></strong>", null]),
        color: ""
    };
    let lin9 = {
        tab: myMath.separatorNumberArray([this.mE.stocks(), "Dettes à long terme", this.mE.detteLongTerme()]),
        color: ""
    };
    let lin10 = {
        tab: myMath.separatorNumberArray([this.mE.creanceCli(), "Dettes à court terme", this.mE.detteCourtTerme()]),
        color: ""
    };
    let lin11 = {
        tab: myMath.separatorNumberArray([this.mE.dispoBanque(), "Dettes fournisseurs", this.mE.detteFournisseur()]),
        color: ""
    };
    let lin12 = {
        tab: myMath.separatorNumberArray([`<strong>${actif}</strong>`, "<strong>Passif</strong>", passif]),
        color: ""
    };
    let head = "<thead><tr><th colspan=3> Bilan à l'ouverture<th/><tr/><tr><th colspan=2>Actif</th><th colspan=2>Passif</th></tr></thead>";
    let tab = bootstrap.tableSE(col1, head, lin1, lin2, lin3, lin4, lin5, lin6, lin7, lin8, lin9, lin10, lin11, lin12);
    return bootstrap.pan("default", null, tab);
};
/**
 * @description This function create a html to give a compte Array of the firm used to create a model
 * @return {string}
 */
ViewGenerator.prototype.compteHtml = function () {
    let cote = ["Achats", "Pétrole", "Dépenses administratives", "Dépenses publicitaires", "Dépenses d'entretien",
        "<strong>Impôts et taxes</strong>", "<strong>Masse Salariale</strong>", "Cadres", "Secrétaires", "Ouvriers",
        "<strong>Charges financières</strong>", "Charges financières", "<strong>Amortissement</strong>"];
    let head = "<thead><tr><th colspan=3> Compte de résultat<th/></tr><tr><th colspan=2>Charges</th><th colspan=2>Produit</th></tr></thead>";
    let lin0 = {
        tab: myMath.separatorNumberArray([this.mE.achat(), "Ventes", this.mE.vente()]),
        color: ""
    };
    let lin1 = {
        tab: myMath.separatorNumberArray([this.mE.petrole(), null, null]),
        color: ""
    };
    let lin2 = {
        tab: myMath.separatorNumberArray([this.mE.depenseAdministrative(), null, null]),
        color: ""
    };
    let lin3 = {
        tab: myMath.separatorNumberArray([this.mE.depensePub(), null, null]),
        color: ""
    };
    let lin4 = {
        tab: myMath.separatorNumberArray([this.mE.depenseEntretien(), null, null]),
        color: ""
    };
    let lin5 = {
        tab: myMath.separatorNumberArray([null, null, null]),
        color: ""
    };
    let lin6 = {
        tab: myMath.separatorNumberArray([null, null, null]),
        color: ""
    };
    let lin7 = {
        tab: myMath.separatorNumberArray([this.mE.cadre(), null, null]),
        color: ""
    };
    let lin8 = {
        tab: myMath.separatorNumberArray([this.mE.secretaire(), null, null]),
        color: ""
    };
    let lin9 = {
        tab: myMath.separatorNumberArray([this.mE.ouvrier(), null, null]),
        color: ""
    };
    let lin10 = {
        tab: myMath.separatorNumberArray([null, null, null]),
        color: ""
    };
    let lin11 = {
        tab: myMath.separatorNumberArray([this.mE.chargeFinanciere(), null, null]),
        color: ""
    };
    let lin12 = {
        tab: myMath.separatorNumberArray([null, null, null]),
        color: ""
    };

    let tab = bootstrap.tableSE(cote, head, lin0, lin1, lin2, lin3, lin4, lin5, lin6, lin7, lin8, lin9, lin10, lin11, lin12);
    return bootstrap.pan("default", null, tab);
};
/**
 * @description This function create a html to give A economic data
 * @return {string}
 */
ViewGenerator.prototype.donneesEconomique = function () {
    let result = this.pinbHTML();
    result += this.entrepriseHTML();
    result += this.bilanHtml();
    result += this.compteHtml(this.modele.donnee);
    return bootstrap.pan("default", "<h1>Données Economiques</h1>", result);
};
/**
 * @description This function create a html to give the Impot of the land
 * @return {string}
 */
ViewGenerator.prototype.ImpotHtml = function () {
    let head = "<thead><tr><th colspan=5> Impôt<th/></tr>";
    head += "<tr><th/><th>1</th><th>2</th><th>3</th><th>4</th><th>5</th></tr>";
    head += "</thead>";
    let cfe = [];
    let is = [];
    let imf = [];
    let irvm = [];
    let irc = [];
    let tva = [];
    for (let i = 0; i < 5; i++) {
        cfe.push(this.modele.mesdon().impotSelected().cfe() + "%");
        is.push(this.modele.mesdon().impotSelected().is() + "%");
        imf.push(this.modele.mesdon().impotSelected().imf() + "%");
        irvm.push(this.modele.mesdon().impotSelected().irvm() + "%");
        irc.push(this.modele.mesdon().impotSelected().irc() + "%");
        tva.push(this.modele.mesdon().impotSelected().tvaPetrole() + "%");
    }
    let cote = ["CFE", "IS", "IMF", "IRVM", "IRC", "TVA Pétrole"];
    return bootstrap.tableSE(cote, head, {
            tab: myMath.separatorNumberArray(cfe),
            color: ""
        },
        {
            tab: myMath.separatorNumberArray(is),
            color: ""
        },
        {
            tab: myMath.separatorNumberArray(imf),
            color: ""
        },
        {
            tab: myMath.separatorNumberArray(irvm),
            color: ""
        },
        {
            tab: myMath.separatorNumberArray(irc),
            color: ""
        }, {
            tab: myMath.separatorNumberArray(tva),
            color: ""
        });
};
/**
 * @description This function create the HTML to ammortissement
 * @return {string}
 */
ViewGenerator.prototype.amortissementHtml = function () {
    let head = "<thead><tr><th colspan=2> Amortissement<th/></tr><tr><th/><th>Durée Linéaire</th><th>Coef dégressif</th></tr></thead>";
    let cote = ["Construction", "Equipement", "Camion", "Matériel informatique", "Matériel bureau"];
    let lin1 = {
        tab: myMath.separatorNumberArray([this.mP.amortization().construction(), this.mP.amortization().coefdegressif()]),
        color: ""
    };
    let lin2 = {
        tab: myMath.separatorNumberArray([this.mP.amortization().equipement(), this.mP.amortization().coefdegressif()]),
        color: ""
    };
    let lin3 = {
        tab: myMath.separatorNumberArray([this.mP.amortization().camion(), this.mP.amortization().coefdegressif()]),
        color: ""
    };
    let lin4 = {
        tab: myMath.separatorNumberArray([this.mP.amortization().info(), this.mP.amortization().coefdegressif()]),
        color: ""
    };
    let lin5 = {
        tab: myMath.separatorNumberArray([this.mP.amortization().bureau(), this.mP.amortization().coefdegressif()]),
        color: ""
    };
    let tab = bootstrap.tableSE(cote, head, lin1, lin2, lin3, lin4, lin5);
    return bootstrap.pan("default", null, tab);
};
/**
 * @description This function create the HTML to ammortissement Excep
 * @return {string}
 */
ViewGenerator.prototype.amortiExcepHTML = function () {
    return "<p> Pour les amortissements exceptionnels, le taux dépend de l'investissement, il y a une limitation par" +
        " rapport au bénéfice annuel et l'unité de la durée est l'année.</p>";

};
/**
 * @description This function create the HTML to give a Fiscal Data
 * @return {string}
 */
ViewGenerator.prototype.donneesFiscal = function () {
    let pannelBody = bootstrap.pan("default", null, this.ImpotHtml(this.modele.mesdon()));
    pannelBody += this.amortissementHtml();
    pannelBody += this.amortiExcepHTML();
    return bootstrap.pan("default", "<h1>Données fiscales</h1>", pannelBody);
};
/**
 * @description This function create a  HTML to make a body
 * @return {string}
 */
ViewGenerator.prototype.bodyHtml = function () {
    let bodyglo = this.resultatHtml();
    bodyglo += this.donneesEconomique();
    bodyglo += this.donneesFiscal();
    return bodyglo;

};
/**
 * @description This function create the HTML to give the parameters and make any Button to navigate on the Model DATA
 * @return {string}
 */
ViewGenerator.prototype.navigationHtml = function () {
    let regime;
    if (this.modele.donnee.government() === "gen") {
        regime = "Code général des impôts";
    }
    else {
        regime = "Code des investissements";
    }
    let pannel = bootstrap.pan("default", "Paramètres", this.modele.donnee.land().name() + "<br/>" + regime + "</br>" + this.modele.donnee.topic() + "</br>" + this.modele.donnee.margin());
    let result = "<div class='vertical-menu'>" + pannel;
    result += bootstrap.buttonBalA("./modele", "Voir le résultat");
    result += bootstrap.buttonBalA("./", "Retour") + "</div>";
    return result;
};
/**
 * @description This function is the main to create a Data modele View on html
 * @return {string}
 */
ViewGenerator.prototype.mainHTML = function () {
    this.mP = this.modele.donnee.land();
    this.mE = this.modele.donnee.firm();
    return bootstrap.GridNavCote(this.bodyHtml(), this.navigationHtml());
};
/**
 * @description This function create a HTML to the petrole Tva Taxe on modele
 * @return {string}
 */
ViewGenerator.prototype.petroleHtml = function () {
    let cote = ["Pétrole</td><td>FCFA", "Taux</td><td>%", "TVA Pétrole</td><td>FCFA"];
    let tab = bootstrap.tableSE(cote, null, {
            tab: myMath.separatorNumberArray(this.modele.mesdon().taxeAjout().petrole()),
            color: "blue"
        },
        {
            tab: myMath.separatorNumberArray(this.modele.mesdon().taxeAjout().taux()),
            color: "yellow"
        },
        {
            tab: myMath.separatorNumberArray(this.modele.mesdon().taxeAjout().tva()),
            color: ""
        });
    return bootstrap.pan("default", null, tab);
};
/**
 * @description This function create a HTML for the Financial Taxe
 * @return {string}
 */
ViewGenerator.prototype.chargeFinancierHtml = function () {
    let cote = ["Charges financiéres</td><td>FCFA", "Taux</td><td>%", "IRC</td><td>FCFA"];
    let tab = bootstrap.tableSE(cote, null, {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(this.modele.mesdon().taxeCreance().chargeFinance())),
            color: "blue"
        },
        {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(this.modele.mesdon().taxeCreance().taux(), 2)),
            color: "yellow"
        },
        {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(this.modele.mesdon().taxeCreance().irc())),
            color: ""
        });
    return bootstrap.pan("default", null, tab);
};
/**
 * @description This function create the HTML to give the REAL cost on working force
 * @return {string}
 */
ViewGenerator.prototype.emploieHtml = function () {
    let cote = ["Salaire des cadres</td><td>FCFA", "Salaire des secrétaires</td><td>FCFA", "Salaire des ouvriers</td><td>FCFA"];
    cote.push("Masse Salariale</td><td>FCFA");
    cote.push("Taux</td><td>%");
    cote.push("CFE</td><td>FCFA");
    let tab = bootstrap.tableSE(cote, null,
        {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(this.modele.mesdon().employer().salaire_cadre(), 0)),
            color: "blue"
        },
        {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(this.modele.mesdon().employer().salaire_secretaire())),
            color: "blue"
        },
        {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(this.modele.mesdon().employer().salaire_ouvrier())),
            color: "blue"
        },
        {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(this.modele.mesdon().employer().masse_salarial())),
            color: ""
        },
        {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(this.modele.mesdon().employer().tauxCfe(), 2)),
            color: "yellow"
        },
        {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(this.modele.mesdon().employer().reel_CFE())),
            color: ""
        });
    return bootstrap.pan("default", null, tab);
};
/**
 * @description This function create the HTML to give the Comptability Result Array
 * @return {string}
 */
ViewGenerator.prototype.comptableHtml = function () {
    let cote = ["Vente</td><td class=\"bottomBorder\">FCFA"];
    cote.push("Achats</td><td>FCFA");
    cote.push("Pétrole</td><td>FCFA");
    cote.push("TVA pétrole</td><td>FCFA");
    cote.push("Dépenses administratives</td><td>FCFA");
    cote.push("Dépenses publicitaires</td><td>FCFA");
    cote.push("Dépenses d'entretien</td><td class=\"bottomBorder\">FCFA");
    cote.push("Salaires des cadres</td><td>FCFA");
    cote.push("Salaires des secrétaires</td><td>FCFA");
    cote.push("Salaires des ouvriers</td><td>FCFA");
    cote.push("CFE</td><td class=\"bottomBorder\">FCFA");
    cote.push("Charges financières</td><td class=\"bottomBorder\">FCFA");
    cote.push("Amortissement</td><td class=\"bottomBorder\">FCFA");
    cote.push("Bénéfice comptable</td><td>FCFA");
    cote.push("Taux de margin  avant IS/IMF</td><td>%CA");
    let tab = bootstrap.tableSE(cote, null,
        {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(this.modele.mesdon().resultCompta().vente())),
            color: "blue",
            bottomBorder: "true"
        },
        {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(this.modele.mesdon().resultCompta().achats())),
            color: "blue"
        },
        {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(this.modele.mesdon().resultCompta().petrole())),
            color: "blue"
        },
        {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(this.modele.mesdon().resultCompta().tva_petrole())),
            color: ""
        },
        {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(this.modele.mesdon().resultCompta().depense_admin())),
            color: "blue"
        },
        {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(this.modele.mesdon().resultCompta().depense_pub())),
            color: "blue"
        },
        {
            tab:myMath.separatorNumberArray( myMath.arrondirTabUnit(this.modele.mesdon().resultCompta().depense_entretien())),
            color: "blue",
            bottomBorder: "true"
        },
        {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(this.modele.mesdon().resultCompta().salaire_cadre())),
            color: "blue"
        },
        {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(this.modele.mesdon().resultCompta().salaire_secretaire())),
            color: "blue"
        },
        {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(this.modele.mesdon().resultCompta().salaire_ouvrier())),
            color: "blue"
        },
        {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(this.modele.mesdon().resultCompta().cfe())),
            color: "",
            bottomBorder: "true"
        },
        {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(this.modele.mesdon().resultCompta().chargeFinanciere())),
            color: "blue",
            bottomBorder: "true"
        },
        {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(this.modele.mesdon().resultCompta().amortissement())),
            color: "",
            bottomBorder: "true"
        },
        {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(this.modele.mesdon().resultCompta().benefice_comptable())),
            color: ""
        },
        {
            tab: myMath.separatorNumberArray(myMath.separatorNumberArray(myMath.arrondirTabUnit(this.modele.mesdon().resultCompta().taux_marge_avant__IS_IMF()), 1)),
            color: ""
        });
    return bootstrap.pan("default", null, tab);
};
/**
 * @description This function create a HTML to give a amortissement Excep
 * @return {string}
 */
ViewGenerator.prototype.ammortExcepHtml = function () {
    let coteHead = ["Investissement</td><td>FCFA", "Taux</td><td>% investissement", "Limitation</td><td>% Bénéfice comptable", "Durée</td><td>Années"];
    let tabHead = bootstrap.tableSE(coteHead, null,
        {
            tab: myMath.separatorNumberArray([Math.round(this.modele.mesdon().ammortExcep().investment())]),
            color: "blue"
        },
        {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit([this.modele.mesdon().ammortExcep().taux()], 2)),
            color: "yellow"
        },
        {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit([this.modele.mesdon().ammortExcep().limitation()], 2)),
            color: "yellow"
        },
        {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit([this.modele.mesdon().ammortExcep().duree()])),
            color: "yellow"
        });


    let coteBody = ["Durée restante</td><td>Années", "Base amortissable</td><td>FCFA", "Charge d'amortissement</td><td>FCFA"];
    let tabBody = bootstrap.tableSE(coteBody, null,
        {
            tab: myMath.separatorNumberArray(this.modele.mesdon().ammortExcep().dureeTab()),
            color: ""
        },
        {
            tab: myMath.separatorNumberArray(this.modele.mesdon().ammortExcep().baseAmorti()),
            color: ""
        },
        {
            tab: myMath.separatorNumberArray(this.modele.mesdon().ammortExcep().chargeAmorti()),
            color: ""
        });
    return bootstrap.pan("info", tabHead, tabBody);
};
/**
 * @description this function create a HTML to give a Impot Result Array
 * @return {string}
 */
ViewGenerator.prototype.resultatImpotHtml = function () {
    let cote = ["Bénéfice comptable</td><td>FCFA", "Amortissement exceptionnel</td><td>FCFA", "Bénéfice imposable</td><td>FCFA"];
    let tab = bootstrap.tableSE(cote, null, {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(this.modele.mesdon().resultImpot().benCompta())),
            color: ""
        },
        {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(this.modele.mesdon().resultImpot().amortExep())),
            color: ""
        },
        {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(this.modele.mesdon().resultImpot().benImpo())),
            color: ""
        });
    return bootstrap.pan("default", null, tab);
};
/**
 * @description This function create a HTML to give the general Amortissement
 * @return {string}
 */
ViewGenerator.prototype.getAmmortGenneralHtml = function () {
    let cpt = 0;
    let tab = "<table class='table'><thead/></thead><tbody><tr><td>Construction</td><td>FCFA</td>";
    for (let i = 0; i < this.modele.mesdon().amortissementGeneral().length; i++) {
        if (this.modele.mesdon().amortissementGeneral()[i] !== "change") {
            tab += `<td>${myMath.separatorNumber(Math.round(this.modele.mesdon().amortissementGeneral()[i]))}</td>`;
        }
        else {
            tab += "</tr><tr>";
            switch (cpt) {
                case 0 :
                    tab += "<td>Equipement</td><td>FCFA</td>";
                    break;
                case 1 :
                    tab += "<td>Camion</td><td>FCFA</td>";
                    break;
                case 2 :
                    tab += "<td>Informatique</td><td>FCFA</td>";
                    break;
                case 3 :
                    tab += "<td>Bureau</td><td>FCFA</td>";
                    break;
                default:
                    tab += "<td>Total</td><td>FCFA</td>";
                    break;
            }
            cpt++;
        }
    }
    tab += "</tr></tbody></table>";
    return bootstrap.pan("info", "Amortissement", tab);
};
/**
 * @description This function create a HTML to give a IS impot Array
 * @return {string}
 */
ViewGenerator.prototype.impotSocieteHtml = function () {
    let is = [];
    let impSoc = [];
    for (let i = 0; i < 5; i++) {
        is.push(this.modele.mesdon().impotSelected().is());
        impSoc.push(Math.round(this.modele.mesdon().impotSociete()[i]));
    }
    let cote = ["Bénéfice imposable</td><td>FCFA", "Taux</td><td>% bénéfice imposable", "IS</td><td>FCFA"];
    let tab = bootstrap.tableSE(cote, null,
        {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(this.modele.mesdon().resultImpot().benImpo())),
            color: "",
        },
        {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(is, 2)),
            color: "yellow"
        },
        {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(impSoc)),
            color: ""
        }
        )
    ;
    return bootstrap.pan("default", null, tab);
};
/**
 * @description This function create a HTML to give a IMF Impot on modele
 * @return {string}
 */
ViewGenerator.prototype.impotForfaitHtml = function () {
    let imf = [];
    let impIMF = [];
    for (let i = 0; i < 5; i++) {
        imf.push(this.modele.mesdon().impotSelected().imf());
        impIMF.push(Math.round(this.modele.mesdon().impotIMF()[i]));
    }
    let cote = ["Ventes</td><td>FCFA", "Taux</td><td>%CA", "IMF</td><td>FCFA"];
    let tab = bootstrap.tableSE(cote, null, {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(this.modele.mesdon().resultCompta().vente())),
            color: ""
        },
        {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(imf, 2)),
            color: "yellow"
        },
        {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(impIMF)),
            color: ""
        });
    return bootstrap.pan("default", null, tab);
};
/**
 * @description This function create a HTML to give the IS/IMF Array
 * @return {string}
 */
ViewGenerator.prototype.isImfHtml = function () {
    let cote = ["IS/IMF</td><td>FCFA", "Bénéfice après IS/IMF</td><td>FCFA", "Taux de marge  après IS/IMF</td><td>%CA"];
    let tab = bootstrap.tableSE(cote, null, {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(this.modele.mesdon().isImf())),
            color: ""
        },
        {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(this.modele.mesdon().resultCompta().benefice_comptable())),
            color: ""
        },
        {
            tab: myMath.separatorNumberArray( myMath.arrondirTabUnit(this.modele.mesdon().resultCompta().taux_marge_avant__IS_IMF(), 1)),
            color: ""
        });
    return bootstrap.pan("default", null, tab);
};
/**
 * @description This function create the HTML to give the IRVM Impot on modele
 * @return {string}
 */
ViewGenerator.prototype.impotRevenuValeurMobilieres = function () {
    let div = [];
    let irvm = [];
    for (let i = 0; i < 5; i++) {
        div.push(this.modele.donnee.firm().dividende());
        irvm.push(this.modele.donnee.land().impots().irvm());
    }
    let cote = ["Bénéfice après IS/IMF</td><td>FCFA", "Distribution anuelle</td><td>% des bénéfice après IS/IMF", "Taux</td><td>% des bénéfice après IS/IMF", "IRVM</td><td>FCFA"];
    let tab = bootstrap.tableSE(cote, null, {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(this.modele.mesdon().resultCompta().benefice_comptable())),
            color: ""
        },
        {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(div, 2)),
            color: "yellow"
        },
        {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(irvm, 2)),
            color: "blue"
        },
        {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(this.modele.mesdon().impotIRVM())),
            color: ""
        });
    return bootstrap.pan("default", null, tab);
};
/**
 * @description This function create a HTML to give a Actualisation Array
 * @return {string}
 */
ViewGenerator.prototype.actualisationHtml = function () {
    let tab = bootstrap.tableSE(["Actualisation"], null, {
        tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(this.modele.mesdon().actualisation(), 1)),
        color: ""
    });
    return bootstrap.pan("default", null, tab);
};
/**
 * @description This function create a HTML to give All Impot and Taxe used by a Model
 * @param  {Object} monm - The impot use by the modele use to generate a Html
 * @return {string}
 */
ViewGenerator.prototype.tabImpotEtTaxe = function (monm) {
    let cote = ["CFE</td><td>FCFA", "IS/IMF</td><td>FCFA", "IRVM</td><td>FCFA", "IRC</td><td>FCFA", "TVA Pétrole</td><td>FCFA", "Total</td><td>FCFA"];
    let tab = bootstrap.tableSE(cote, null,
        {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(monm.cfe())),
            color: ""
        },
        {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(monm.isimf())),
            color: ""
        },
        {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(monm.irvm())),
            color: ""
        },
        {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(monm.irc())),
            color: ""
        },
        {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(monm.tvaPetrole())),
            color: ""
        },
        {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(monm.total())),
            color: ""
        }
    );
    return bootstrap.pan("default", null, tab);
};
/**
 * @description This function create the HTML to Give The TEMI By a land on a firm
 * @return {string}
 */
ViewGenerator.prototype.tabTauxEffectifMoy = function () {
    let tab = `<p> le TEMI est de ${myMath.separatorNumber(Math.round(this.modele.mesdon().tauxeffMoyCourent() * 100) / 100)} %</p>`;
    return bootstrap.pan("default", null, tab);
};
/**
 * @description This function create a HTML to give a cash FLOW ARRAY
 * @param {Object} tab - The Table of cash Flow Array
 * @param {String} color -The Color Of the year 0 Cash Flow Data
 * @return {string}
 */
ViewGenerator.prototype.tabFluxTresorie = function (tab, color) {
    let cote = ["Courants</td><td>FCFA", "Actualisés</td><td>FCFA", " "];
    let lol = [null, null, null, null, null, null, null, "Somme"];
    //console.log(color);
    let mota = bootstrap.tableSE(cote, "<thead><tr><th/><th/><th/><th/><th/><th/><th/><th/><th>VAN</th></tr></thead>",
        {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(tab.courant())),
            color: "",
            colorFirstCase: color,
            fontColorLastCase: "selectedPosNegNumber"
        },
        {
            tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(tab.topic())),
            color: "",
            colorFirstCase: color,
            fontColorLastCase: "selectedPosNegNumber"
        },
        {
            tab: lol,
            color: ""
        });
    return bootstrap.pan("default", null, mota);
};
/**
 * @description This function create a HTML to give a return rate Array
 * @param {Array} tab -the Array of the return rate
 * @param {number} number - the TRI total on the period studied
 * @return {string}
 */
ViewGenerator.prototype.tauxRendementInt = function (tab,number) {
    return bootstrap.pan("default", null, `${bootstrap.tableSE(["Courants"], null, {
        tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(tab, 2)),
        color: ""
    })}<p> Le taux de rendement interne sur les 5 années est de ${myMath.separatorNumber(number)}%</p>`);
};
/**
 * @description This function create a HTML to give a return rate Array
 * @param {Array} tab -the Array of the return rate
 * @return {string}
 */
ViewGenerator.prototype.tauxMargInt = function (tab) {
    return bootstrap.pan("default", null, `${bootstrap.tableSE(["Courants"], null, {
        tab: myMath.separatorNumberArray(myMath.arrondirTabUnit(tab, 2)),
        color: ""
    })}`);
};
/**
 *@description This function create the HTML to give the investment Government Describe
 * @return {string}
 */
ViewGenerator.prototype.investissementRegime = function () {
    let html = "<p>";
    if (this.modele.donnee.government() !== "gen") {
        html += "La formulation de plusieurs hypothèses a été nécessaire afin de déterminer à quel régime privilégié " +
            "l’entreprise modélisée peut prétendre. L’investissement concerne une firm nouvelle. Il ne s’agit " +
            "pas d’un investment d’extension des capacités de production d’une firm déjà existante. " +
            " Le montant d’investissement éligible au code des investissements correspond à l’actif immobilisé de " +
            "l’entreprise, soit 145×PNB/tête.  L’entreprise est située dans la capitale du land.  L’entreprise" +
            " crée 60 emplois.  L’entreprise n’est pas exportatrice. Elle vend la totalité de sa production sur" +
            " le marché national. L’entreprise commence sa phase d’exploitation : les cinq années modélisées " +
            "sont les cinq premières années d’exploitation de l’firm nouvelle, l’investissement a déjà eu lieu.";
        html += "<br/>";
        html += "Ces hypothèses conduisent généralement à retenir le régime du code des investissements le moins " +
            "avantageux fiscalement (souvent appelé régime A), car la taille de l’entreprise est insuffisante " +
            "pour être éligible aux régimes supérieurs.";
        html += "</p><p>";

        html += this.modele.donnee.land().source();
    }
    html += "</p>";
    return html;

};




/**
 * @constructs
 * @param {string} landName - the code of the land use
 * @param {string} government - the tax government want be used
 * @param {number} topic - a discount rate want be used
 * @param {number} margin - margin rate want be used
 * @description  Constructor of the Class Data , the speciality of this class is to create the object with a primal information to make a model
 */
let Data = function (landName, government, topic, margin) {
    let randLands =land;
    let mP;
    for (let i = 0; i < randLands.pays.length; i++) {
        if (randLands.pays[i].code() === landName) {
            mP = randLands.pays[i];
            break;
        }
    }
    /**
     *@description The getter of land
     * @return {Object}
     */
    this.land =function(){

        mP.pib=ref.givePIB(mP.code());
        return mP;

    };
    /**
     * @description The getter of government
     * @return {string}
     */
    this.government =function(){
        return government;
    };
    /**
     * @description The getter of topic
     * @return {number}
     */
    this.topic =function(){
        return topic;
    };
    /**
     * @description The getter of margin
     * @return {number}
     */
    this.margin =function(){
        return margin;
    };
    /**
     * @description The getter of firm
     * @return {{name: string, terrain: number, construction: number, equipement: number, camion: number, info: number, bureau: number, stocks: number, creanceCli: number, dispoBanque: number, capitalSocial: number, detteLongTerme: number, detteCourtTerme: number, detteFournisseur: number, achat: number, petrole: number, depenseAdministrative: number, depensePub: number, depenseEntretien: number, chargeFinanciere: number, vente: number, cadre: number, secretaire: number, ouvrier: number, indice_cadre: number, indice_secretaire: number, indice_ouvrier: number, dividende: number, actuali: number}}
     */
    this.firm =function(){
        return maker.firm(topic, margin);
    }
};
/**
 * @description This function create all the land and put it on an Array
 *
 */
let Land = function () {
    // console.log("on entre");
    this.pays = [];
    let name = "";
    let code = "";
    let impStr = "";
    let impotStr;
    let impot;
    let ammortStr = "";
    let ammortiStr;
    let ammort;
    let investStr = "";
    let invest;
    let investTab;
    let overide = "";

    let source = "";
    let strPa = sessionStorage.getItem("land");
    let tab = strPa.split("\npays :");
    let tabis = [];
    let investImp = function (number, str) {
        //console.log(str);
        let taber = str.split(",");
        let result = [];
        taber.forEach(function (item) {
            //console.log(item);
            if (item === "null") {
                result.push(null);
            }
            else {
                result.push(Number.parseFloat(item));

            }
        });
        let invest;
        //console.log(result)
        if (number !== 2) {
            invest = maker.impotPays(result[0], result[1], result[2]);

        }
        else {
            invest = maker.isImpotPays(result[0], result[1], result[2], result[3], result[4])
        }
        return invest;
    };
    tab.forEach(function (item, index) {
        if (index === 0) {
            item = item.slice(7, Array.from(item).length);
        }
        item = item.split("|");
        tabis.push(item);
    });
    //console.log(tabis);
    for (let i = 0; i < tabis.length; i++) {
        //console.log(i);
        name = tabis[i][0];
        code = tabis[i][1];
        //console.log(tabis[i]);
        impStr = tabis[i][2];
        impot = [];
        impotStr = [];
        ammortStr = tabis[i][3];
        ammortiStr = [];
        ammort = [];
        investStr = tabis[i][4];
        invest = [];
        overide = tabis[i][5];
        source = tabis[i][6];
        // console.log("on arrive la");
        impStr = impStr.slice(1, Array.from(impStr).length - 1);
        impotStr = impStr.split(",");
        impotStr.forEach(function (item) {
            if (item === "as d'impo") {
                impot = "pas d'impot";
            }
            else {
                impot.push(Number.parseFloat(item));
            }

        });
        ammortStr = ammortStr.slice(1, Array.from(ammortStr).length - 1);
        ammortiStr = ammortStr.split(",");
        ammortiStr.forEach(function (item) {
            if (item === "as d'ammortissemen") {
                ammort = "pas d'ammortissement";
            }
            else {
                ammort.push(Number.parseFloat(item));
            }

        });
        investStr = investStr.slice(1, Array.from(investStr).length - 1);
        investTab = investStr.split("],[");
        investTab.forEach(function (item, index) {
            if (index === 0) {
                item = item.slice(1, Array.from(item).length);
            }
            if (index === investTab.length - 1) {
                item = item.slice(0, Array.from(item).length - 1);
            }
            //console.log(item);
            if (item === "s d'investissme") {
                invest = "as d'investissmen";
            }
            else {
                invest.push(investImp(index + 1, item));
            }
        });
        let imp;
        let amm;
        let inv;
        if (name !== "Guinée Bissao") {
            if (name !== "Guinée équatoriale") {
                imp = maker.impot(impot[0], impot[1], impot[2], impot[3], impot[4], impot[5]);
                amm = maker.ammortissement(ammort[0], ammort[1], ammort[5], ammort[2], ammort[3], ammort[4]);
                inv = maker.investir(invest[0], invest[1], invest[2], invest[3], invest[4], invest[5]);
            }
            else {
                imp = impot;
                amm = ammort;
                inv = invest;
            }
        }
        else {
            imp = impot;
            amm = ammort;
            inv = invest;
        }
        this.pays.push(maker.land(code, name, imp, amm, inv, overide, source));

    }

    this.pays.toString = function () {
        let str = "";
        this.forEach(function (item) {
            str += "pays :\n" + item + "\n";
        });
        return str;
    }
};
Land.prototype.ajouterPays = function (lande) {
    let monBool = true;
    let monNom = '';
    let source = '';

    for (let i = 0; i < this.pays.length; i++) {
        monNom = '';
        Array.from(this.pays[i].name()).forEach(function (letter) {
            if (letter !== "\n") {
                monNom += letter;
            }
        });
        if (lande.code() === this.pays[i].code()) {
            if (lande.name() === monNom) {
                if (lande.impots().cfe() === this.pays[i].impots().cfe()) {
                    if (lande.impots().isImp() === this.pays[i].impots().isImp()) {
                        if (lande.impots().imf() === this.pays[i].impots().imf()) {
                            if (lande.impots().irvm() === this.pays[i].impots().irvm()) {
                                if (lande.impots().irc() === this.pays[i].impots().irc()) {
                                    if (lande.impots().tva_petrole() === this.pays[i].impots().tva_petrole()) {
                                        if (lande.amortization().construction() === this.pays[i].amortization().construction()) {
                                            if (lande.amortization().equipement() === this.pays[i].amortization().equipement()) {
                                                if (lande.amortization().coefdegressif() === this.pays[i].amortization().coefdegressif()) {
                                                    if (lande.amortization().camion() === this.pays[i].amortization().camion()) {
                                                        if (lande.amortization().info() === this.pays[i].amortization().info()) {
                                                            if (lande.amortization().bureau() === this.pays[i].amortization().bureau()) {
                                                                if (lande.investment().cfe().duree() === this.pays[i].investment().cfe().duree()) {
                                                                    if (lande.investment().cfe().taux() === this.pays[i].investment().cfe().taux()) {
                                                                        if (lande.investment().cfe().reducexo() === this.pays[i].investment().cfe().reducexo()) {
                                                                            if (lande.investment().isamort().duree() === this.pays[i].investment().isamort().duree()) {
                                                                                if (lande.investment().isamort().taux() === this.pays[i].investment().isamort().taux()) {
                                                                                    if (lande.investment().isamort().reducexo() === this.pays[i].investment().isamort().reducexo()) {
                                                                                        if (lande.investment().isamort().ammortTauxEx() === this.pays[i].investment().isamort().ammortTauxEx()) {
                                                                                            if (lande.investment().isamort().ammortLimit() === this.pays[i].investment().isamort().ammortLimit()) {
                                                                                                if (lande.investment().imf().duree() === this.pays[i].investment().imf().duree()) {
                                                                                                    if (lande.investment().imf().taux() === this.pays[i].investment().imf().taux()) {
                                                                                                        if (lande.investment().imf().reducexo() === this.pays[i].investment().imf().reducexo()) {
                                                                                                            if (lande.investment().irvm().duree() === this.pays[i].investment().irvm().duree()) {
                                                                                                                if (lande.investment().irvm().taux() === this.pays[i].investment().irvm().taux()) {
                                                                                                                    if (lande.investment().irvm().reducexo() === this.pays[i].investment().irvm().reducexo()) {
                                                                                                                        if (lande.investment().irc().duree() === this.pays[i].investment().irc().duree()) {
                                                                                                                            if (lande.investment().irc().taux() === this.pays[i].investment().irc().taux()) {
                                                                                                                                if (lande.investment().irc().reducexo() === this.pays[i].investment().irc().reducexo()) {
                                                                                                                                    if (lande.investment().tvaPetrole().duree() === this.pays[i].investment().tvaPetrole().duree()) {
                                                                                                                                        if (lande.investment().tvaPetrole().taux() === this.pays[i].investment().tvaPetrole().taux()) {
                                                                                                                                            if (lande.investment().tvaPetrole().reducexo() === this.pays[i].investment().tvaPetrole().reducexo()) {

                                                                                                                                                if (lande.override() === this.pays[i].override()) {
                                                                                                                                                    source = '';
                                                                                                                                                    Array.from(this.pays[i].source().toString()).forEach(function (item) {
                                                                                                                                                        if (item !== '\n') {
                                                                                                                                                            source += item;
                                                                                                                                                        }
                                                                                                                                                    });
                                                                                                                                                    if (lande.source().toString() === source) {
                                                                                                                                                        //console.log("ici");
                                                                                                                                                        monBool = false;
                                                                                                                                                        break;
                                                                                                                                                    }
                                                                                                                                                }
                                                                                                                                            }
                                                                                                                                        }
                                                                                                                                    }
                                                                                                                                }
                                                                                                                            }
                                                                                                                        }
                                                                                                                    }
                                                                                                                }
                                                                                                            }
                                                                                                        }
                                                                                                    }
                                                                                                }
                                                                                            }
                                                                                        }
                                                                                    }
                                                                                }
                                                                            }
                                                                        }
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
    if (monBool) {
        this.pays.push(lande);
        sessionStorage.setItem("land", this.pays.toString());
    }
    land = new Land();
};
let land = new Land();
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

const genererVue = new ViewGenerator(monModele);
let investPart = "<p>Investissement : " + myMath.separatorNumber(genererVue.modele.mesdon().investissement()) + "</p>";
document.getElementById("invest").innerHTML = investPart;
let amm = genererVue.getAmmortGenneralHtml();
amm += "<br/>";
genererVue.modele.mesdon().amortissement().forEach(function (item) {
    amm += item.getHtml() + "<br/>";
});
document.getElementById("param").innerHTML =genererVue.modele.donnee.land().name();
document.getElementById("pet").innerHTML = genererVue.petroleHtml();
document.getElementById("amortization").innerHTML = amm;
document.getElementById("ammortExp").innerHTML = genererVue.ammortExcepHtml();
document.getElementById("emp").innerHTML = genererVue.emploieHtml();
document.getElementById("creance").innerHTML = genererVue.chargeFinancierHtml();
document.getElementById("compta").innerHTML = genererVue.comptableHtml();
document.getElementById("impot").innerHTML = genererVue.resultatImpotHtml();
document.getElementById("impotSoc").innerHTML = genererVue.impotSocieteHtml();
document.getElementById("impotfor").innerHTML = genererVue.impotForfaitHtml();
document.getElementById("ISIMF").innerHTML = genererVue.isImfHtml();
document.getElementById("irvm").innerHTML = genererVue.impotRevenuValeurMobilieres();
document.getElementById("topic").innerHTML = genererVue.actualisationHtml();
document.getElementById("impTaxeC").innerHTML = genererVue.tabImpotEtTaxe(genererVue.modele.mesdon().impotTaxeCourent());
document.getElementById("impTaxeA").innerHTML = genererVue.tabImpotEtTaxe(genererVue.modele.mesdon().impotTaxeActu());
document.getElementById("fluxeffmoyC").innerHTML = genererVue.tabTauxEffectifMoy(genererVue.modele.mesdon().tauxeffMoyCourent());
document.getElementById("fluxTresSaImp").innerHTML = genererVue.tabFluxTresorie(genererVue.modele.mesdon().fluxTresSansImp(), "red");
document.getElementById("fluxTresSaISIMF").innerHTML = genererVue.tabFluxTresorie(genererVue.modele.mesdon().fluxTresSansISIMF(), "blue");
document.getElementById("fluxTresAvImpot").innerHTML = genererVue.tabFluxTresorie(genererVue.modele.mesdon().fluxTresApresImpot(), "blue");
document.getElementById("tauxRendInterneSi").innerHTML = genererVue.tauxRendementInt(genererVue.modele.mesdon().tauxRendInterneSImp(),genererVue.modele.mesdon().tauxRendInterneSImpTot());
document.getElementById("tauxRendInterneSISIMF").innerHTML = genererVue.tauxRendementInt(genererVue.modele.mesdon().tauxRendInterneSISIMF(),genererVue.modele.mesdon().tauxRendInterneSISIMFTot());
document.getElementById("tauxRendInterneAi").innerHTML = genererVue.tauxRendementInt(genererVue.modele.mesdon().tauxRendInterneAImp(),genererVue.modele.mesdon().tauxRendInterneAImpTot());
document.getElementById("tauxEffMargImpApIsImf").innerHTML = genererVue.tauxMargInt(genererVue.modele.mesdon().tauxEffMargImpApIsImf());
document.getElementById("tauxEffMargImpApImp").innerHTML = genererVue.tauxMargInt(genererVue.modele.mesdon().tauxEffMargImpApImp());

