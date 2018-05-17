
var cptDonne=1;
Donne.prototype.donneRef=function(pays,regime,actu,marge){

    var randPays=mesPays();

    for(var i=0;i<randPays.length;i++){
        if(randPays[i].code===pays){

            var mP=randPays[i];

            break;

        }

    }
    Donne.prototype.pays=mP;
    Donne.prototype.regime=regime;
    Donne.prototype.actu=actu;
    Donne.prototype.marge=marge;
    Donne.prototype.entreprise=fabrique.entreprise(actu,marge);
    localStorage.setItem("donne "+cptDonne,[pays,regime,actu,marge]);
    cptDonne++;
};
Donne.prototype.donneRefCompa=function(pays,regime,actu,marge){

    var randPays=mesPays();

    for(var i=0;i<randPays.length;i++){
        if(randPays[i].code===pays){

            var mP=randPays[i];

            break;

        }

    }
    return{
        pays:mP,
        regime:regime,
        actu:actu,
        marge:marge,
        entreprise:fabrique.entreprise(actu,marge),
    }

};

Donne.prototype.donne2=function(numberdonne){
    var lol=localStorage.getItem("donne "+numberdonne);
    lol=lol.split(",");

    var randPays=mesPays();

    for(var i=0;i<randPays.length;i++){
        if(randPays[i].code===lol[0]){

            var mP=randPays[i];
            break;

        }

    }
    Donne.prototype.pays=mP;
    Donne.prototype.regime=lol[1];
    Donne.prototype.actu=lol[2];
    Donne.prototype.marge=lol[3];
    Donne.prototype.entreprise=fabrique.entreprise(lol[2],lol[3]);
};
