
MyMath.prototype.pascalTriangle=function(nombrePuiss){
    retour=[];
    var lol=function (nombrePuiss) {
        var tab=[];
        if(nombrePuiss===1){
            tab.push(1);
            return tab;
        }
        if(nombrePuiss===2){
            tab.push(1);
            tab.push(1);
            return tab;
        }
        var tabPrece=lol(nombrePuiss-1);
        tab.push(1);
        for(var i=1;i<tabPrece.length;i++){
            //console.log(tabPrece[i]+tabPrece[i-1]);
            tab.push(tabPrece[i]+tabPrece[i-1]);
        }
        tab.push(1);
        return tab;
    };
    retour=lol(nombrePuiss+1);

    return retour;


};
MyMath.prototype.tri=function(tab){

    var numberOfTries = 1;
    // Cash flow values must contain at least one positive value and one negative value
    var positive, negative;
    Array.prototype.slice.call(tab).forEach(function (value) {
        if (value > 0) positive = true;
        if (value < 0) negative = true;
    })
    if (!positive || !negative) throw new Error('TRI a besoin de valeur positif et negatif');
    function npv(rate) {
        numberOfTries++;
        if (numberOfTries > 1000) {
            throw new Error('IRR can\'t find a result');
        }
        var rrate = (1 + rate/100);
        var npv = tab[0];
        for (var i = 1; i < tab.length; i++) {
            npv += (tab[i] / Math.pow(rrate, i));
        }
        return npv;
    }
    return Math.round(triReel(npv) * 100) / 100;
},
    triReel=function(fn)  {
        //console.log("on entre dans seekzero");
        var x = 1;

        //console.log(fn(x));
        while (fn(x) > 0) {
            x += 1;
        }
        while (fn(x) < 0) {
            x -= 0.01
        }
        return x + 0.01;
    };
MyMath.prototype.van=function(actu, tab){
    var lol=0;
    for(var i=0;i<tab.length;i++){
        lol+=(tab[i]/Math.pow((1+actu),i));

    }
    lol= lol/(1+actu);
    // console.log(lol);
    return Math.round(lol);
};

MyMath.prototype.sommeTab=function (tab) {
    var tot=0;
    for(var i=0;i<tab.length;i++){
        tot+=tab[i];
    }
    return tot;
};
MyMath.prototype.divisionTabPurcent=function(tabDiv,tabDive){
    var tot=[];
    if(tabDiv.length!==tabDive.length){
        alert("lol, les tables ne sont  pas de même tailles\n"+tabDiv.length+"\n"+tabDive.length+"\ntaille tab");
        return null;
    }
    for(var i=0;i<=tabDiv.length;i++){
        //console.log(Math.round((tabDiv[i]/tabDive[i])*1000));
        tot.push(Math.round((tabDiv[i]/tabDive[i])*1000)/10);
    }
    return tot;
};