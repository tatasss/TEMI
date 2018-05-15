
var cptDonne=1;
Donne.prototype.donneRef=function(pays,regime,actu,marge){
    /*localStorage.setItem("actu",actu);
    localStorage.setItem("marge",marge);
    localStorage.setItem("pays",pays);
    localStorage.setItem("regime",regime);*/
    var randPays=mesPays();

    for(var i=0;i<randPays.length;i++){
        if(randPays[i].nom===pays){

            var mP=randPays[i];
            //localStorage.setItem('mP',mP);
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

Donne.prototype.donne2=function(numberdonne){
    var lol=localStorage.getItem("donne "+numberdonne);
    lol=lol.split(",");
    //console.log(lol);
    var randPays=mesPays();

    for(var i=0;i<randPays.length;i++){
        if(randPays[i].nom===lol[0]){

            var mP=randPays[i];
            //localStorage.setItem('mP',mP);
            break;

        }

    }
    Donne.prototype.pays=mP;
    Donne.prototype.regime=lol[1];
    Donne.prototype.actu=lol[2];
    Donne.prototype.marge=lol[3];
    Donne.prototype.entreprise=fabrique.entreprise(lol[2],lol[3]);
};