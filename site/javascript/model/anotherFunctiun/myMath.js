/*
* @description The Function Create the Array with a Pascal Triangle Line on the number enter
 * @param {number} nombrePuiss - the number of the pow want be used
 * @return {Array} pascal

MyMath.prototype.pascalTriangle=function(nombrePuiss){
    let retour=[];
    let lol=function (nombrePuiss) {
        let tab=[];
        if(nombrePuiss===1){
            tab.push(1);
            return tab;
        }
        if(nombrePuiss===2){
            tab.push(1);
            tab.push(1);
            return tab;
        }
        let tabPrece=lol(nombrePuiss-1);
        tab.push(1);
        for(let i=1;i<tabPrece.length;i++){
            //console.log(tabPrece[i]+tabPrece[i-1]);
            tab.push(tabPrece[i]+tabPrece[i-1]);
        }
        tab.push(1);
        return tab;
    };
    retour=lol(nombrePuiss+1);

    return retour;


};*/
/**
 * @Description This function compute the return rate
 * @param {array} tab - the tab want to be use to find the return rate
 * @return {number} tri
 */
MyMath.prototype.tri = function (tab) {

    let numberOfTries = 1;
    // Cash flow values must contain at least one positive value and one negative value
    let positive, negative;
    Array.prototype.slice.call(tab).forEach(function (value) {
        if (value > 0) positive = true;
        if (value < 0) negative = true;
    });
    if (!positive || !negative) throw new Error('TRI a besoin de valeur positif et negatif');

    /**
     * This function compute the NPV(Net Present Value)
     * @param {number} rate - the rate of the actu
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
 * This function is used by MyMath.tri to find  the real tri with a van
 * @param {function():number} fn the van
 * @return {number} tri
 */
triReel = function (fn) {
    //console.log("on entre dans seekzero");
    let x = 1;

    //console.log(fn(x));
    while (fn(x) > 0) {
        x += 1;
    }
    while (fn(x) < 0) {
        x -= 0.01
    }
    return x + 0.01;
};
/**
 * @Description This function compute the Net Present Value of the tab
 * @param {number} actu - the actu rates
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
    //lol= lol/(1+actu);

    lol = lol + somme;
    //console.log("on sort du calcul VAN");
    return Math.round(lol);
};
/**
 * @Description This function sum the value of the array
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
/*
 * @Description This function divide the value of 2 array
 * @param {array} tabDiv -the array used to make a divide
 * @param {array} tabDive -the array used to make a divide
 * @return {number} div
MyMath.prototype.divisionTabPurcent=function(tabDiv,tabDive){
    let tot=[];
    if(tabDiv.length!==tabDive.length){
        alert("lol, les tables ne sont  pas de même tailles\n"+tabDiv.length+"\n"+tabDive.length+"\ntaille tab");
        return null;
    }
    for(let i=0;i<=tabDiv.length;i++){
        //console.log(Math.round((tabDiv[i]/tabDive[i])*1000));
        tot.push(Math.round((tabDiv[i]/tabDive[i])*1000)/10);
    }
    return tot;
};*/
/**
 * @Description The function Round all the value Of a Tab on Unit choose
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
        tabArr.push(Math.round(item * Math.pow(10, numberDec)) / (Math.pow(10, numberDec)));
    });
    // console.log(tabArr);
    return tabArr;
};

