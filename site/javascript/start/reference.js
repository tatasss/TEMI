let MyMath = function () {
};
let ModeleManager = function () {
};
let BootstrapVue = function () {
};

let Fabrique = function () {
};
let GenererVue = function (modele) {
    this.modele = modele
};
let Modele = function (donnee) {
    this.donnee = donnee;
};
let Ref = function () {
};
let Graph = function () {
};


//----------------------------------------------------------------------------------------------------------------------
let myMath = new MyMath();
let modeleManager = new ModeleManager();
let bootstrap = new BootstrapVue();
let fabrique = new Fabrique();
let ref = new Ref();
let graph = new Graph();

//----------------------------------------------------------------------------------------------------------------------
Ref.prototype.donnerNomPays = function (code) {
    let randPays = mesPays();

    for (let i = 0; i < randPays.length; i++) {
        if (randPays[i].code === code) {

            return randPays[i].nom;

        }

    }
};
Ref.prototype.donnerCodePays = function (nom) {
    let randPays = mesPays();

    for (let i = 0; i < randPays.length; i++) {
        if (randPays[i].nom === nom) {

            return randPays[i].code;

        }

    }
};