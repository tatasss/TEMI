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
    //console.log(mesPays());
    let mP;

    for (let i = 0; i < randPays.length; i++) {

        if (randPays[i].code() === pays) {

            mP = randPays[i];

            break;

        }

    }
    /**
     *@description The getter of land
     * @return {Object}
     */
    this.pays =function(){
        return mP;
    };
    /**
     * @description The getter of regime
     * @return {string}
     */
    this.regime =function(){
        return regime;
    };
    /**
     * @description The getter of actu
     * @return {number}
     */
    this.actu =function(){
        return actu;
    };
    /**
     * @description The getter of marge
     * @return {number}
     */
    this.marge =function(){
        return marge;
    };
    /**
     * @description The getter of firm
     * @return {{nom: string, terrain: number, construction: number, equipement: number, camion: number, info: number, bureau: number, stocks: number, creanceCli: number, dispoBanque: number, capitalSocial: number, detteLongTerme: number, detteCourtTerme: number, detteFournisseur: number, achat: number, petrole: number, depenseAdministrative: number, depensePub: number, depenseEntretien: number, chargeFinanciere: number, vente: number, cadre: number, secretaire: number, ouvrier: number, indice_cadre: number, indice_secretaire: number, indice_ouvrier: number, dividende: number, actuali: number}}
     */
    this.entreprise =function(){
        return fabrique.entreprise(actu, marge);
    }
};
