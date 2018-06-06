/**
 * @description This function is a constructor of MyMath Class
 * @constructor
 */
let MyMath = function () {
};
/**
 * @description This function is a constructor of ModelManager Class
 * @constructor
 */
let ModelManager = function () {
};
/**
 * @description This function is a constructor of BootstrapView Class
 * @constructor
 */
let BootstrapView = function () {
};
/**
 * @description This function is a constructor of Manufactor Class
 * @constructor
 */
let Manufactor = function () {
};
/**
 * @description This function is a constructor of ViewGenerator Class
 * @param {Model} modele - the modele use by this class to generate view
 * @constructor
 */
let ViewGenerator = function (modele) {
    this.modele = modele
};
/**
 * @description This function is a constructor of Model class
 * @param {Data} donnee - the donne used to construct the model
 * @constructor
 */
let Model = function (donnee) {
    this.donnee = donnee;
};
/**
 * @description This function is a constructor of verif class
 * @constructor
 */
let Verif = function () {
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
/**
 * @type {MyMath}
 */
let myMath = new MyMath();
/**
 * @type {ModelManager}
 */
let modelManager = new ModelManager();
/**
 * @type {BootstrapView}
 */
let bootstrap = new BootstrapView();
/**
 * @type {Manufactor}
 */
let maker = new Manufactor();
/**
 * @type {Ref}
 */
let ref = new Ref();
/**
 * @type {Verif}
 */
let verif =new Verif();
/**
 * @type {Graph}
 */
let graph = new Graph();
/**
 * @description this function find the name of the land with a code
 * @param {string} code - the code of the land
 * @return {string}
 */
Ref.prototype.donnerNomPays = function (code) {
    let randPays = mesPays();

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
    let randPays = mesPays();
    for (let i = 0; i < randPays.length; i++) {
        if (randPays[i].name() === nom) {
            return randPays[i].code();
        }
    }
};