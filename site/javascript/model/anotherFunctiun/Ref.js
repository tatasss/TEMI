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