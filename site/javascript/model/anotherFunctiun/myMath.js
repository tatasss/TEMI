
/**
 * @description This function compute the return rate
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
    //lol= lol/(1+topic);

    lol = lol + somme;
    //console.log("on sort du calcul VAN");
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
        tabArr.push(Math.round(item * Math.pow(10, numberDec)) / (Math.pow(10, numberDec)));
    });
    // console.log(tabArr);
    return tabArr;
};

