/**
 * @constructs
 * @param {string} landName - the code of the land use
 * @param {string} government - the tax government want be used
 * @param {number} topic - a discount rate want be used
 * @param {number} margin - margin rate want be used
 * @description  Constructor of the Class Data , the speciality of this class is to create the object with a primal information to make a model
 */
let Data = function (landName, government, topic, margin) {
    let randLands = mesPays();
    let mP;
    for (let i = 0; i < randLands.length; i++) {
        if (randLands[i].code() === landName) {
            mP = randLands[i];
            break;
        }

    }
    /**
     *@description The getter of land
     * @return {Object}
     */
    this.land =function(){
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
