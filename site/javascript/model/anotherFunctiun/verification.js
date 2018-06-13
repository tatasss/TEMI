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