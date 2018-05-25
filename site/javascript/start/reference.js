/**
 * @description This function is a constructor of MyMath Class
 * @constructor
 */
let MyMath = function () {
};
/**
 * @description This function is a constructor of ModeleManager Class
 * @constructor
 */
let ModeleManager = function () {
};
/**
 * @description This function is a constructor of BootstrapVue Class
 * @constructor
 */
let BootstrapVue = function () {
};
/**
 * @description This function is a constructor of Fabrique Class
 * @constructor
 */
let Fabrique = function () {
};
/**
 * @description This function is a constructor of GenererVue Class
 * @param {Modele} modele - the modele use by this class to generate view
 * @constructor
 */
let GenererVue = function (modele) {
    this.modele = modele
};
/**
 * @description This function is a constructor of Modele class
 * @param {Donne} donnee - the donne used to construct the model
 * @constructor
 */
let Modele = function (donnee) {
    this.donnee = donnee;
};
/**
 * @description This function is a constructor of Ref Class
 * @constructor
 */
let Ref = function () {
};
/**
 * @description This function is a constructor of Graph Class
 * @constructor
 */
let Graph = function () {
};


//----------------------------------------------------------------------------------------------------------------------
/**
 * @type {MyMath}
 */
let myMath = new MyMath();
/**
 * @type {ModeleManager}
 */
let modeleManager = new ModeleManager();
/**
 * @type {BootstrapVue}
 */
let bootstrap = new BootstrapVue();
/**
 * @type {Fabrique}
 */
let fabrique = new Fabrique();
/**
 * @type {Ref}
 */
let ref = new Ref();
/**
 * @type {Graph}
 */
let graph = new Graph();

//----------------------------------------------------------------------------------------------------------------------
/**
 * @description this function find the name of the land with a code
 * @param {string} code - the code of the land
 * @return {string}
 */
Ref.prototype.donnerNomPays = function (code) {
    let randPays = mesPays();

    for (let i = 0; i < randPays.length; i++) {
        if (randPays[i].code === code) {

            return randPays[i].nom;

        }

    }
};
/**
 * @description this function find the code of the land with a name
 * @param {string} nom - the name of the land
 * @return {string}
 */
Ref.prototype.donnerCodePays = function (nom) {
    let randPays = mesPays();

    for (let i = 0; i < randPays.length; i++) {
        if (randPays[i].nom === nom) {

            return randPays[i].code;

        }

    }
};