/**
 * @constructs
 * @param {string} pays - the code of the land use
 * @param {string} regime - the tax regime want be used
 * @param {number} actu - a discount rate want be used
 * @param {number} marge - margin rate want be used
 * @description  Constructor of the Class Donne , the speciality of this class is to create the object with a primal information to make a model
 */
let Donne = function (pays, regime, actu, marge) {
    let randPays = mesPays();
    let mP;
    for (let i = 0; i < randPays.length; i++) {
        if (randPays[i].code === pays) {

            mP = randPays[i];

            break;

        }

    }
    this.pays = mP;
    this.regime = regime;
    this.actu = actu;
    this.marge = marge;
    this.entreprise = fabrique.entreprise(actu, marge);
};
