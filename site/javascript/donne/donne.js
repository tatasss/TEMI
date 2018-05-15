var Donne=function(){};
Donne.prototype.get=function(){
    // var donne= localStorage.getItem("entreprise");
    var pays=localStorage.getItem("pays");
    var regime=localStorage.getItem("regimE");
    var randPays=mesPays();

    for(var i=0;i<randPays.length;i++){
        if(randPays[i].nom===pays){

            var mP=randPays[i];
            //localStorage.setItem('mP',mP);
            break;

        }

    }
    var actu=localStorage.getItem("actu");
    var marge=localStorage.getItem("marge");
    var mE=fabrique.entreprise(actu,marge);
    var pibChoisi;


        pibChoisi=mP.pib;
    /*localStorage.setItem("pin",pin);
    localStorage.setItem("pays",pays);
    localStorage.setItem("regimE",regimE);*/
    return{
        mE:mE,
        mP:mP,
        pibChoisi:pibChoisi,
        regime:regime

    }
};
Donne.prototype.donneRef=function(pays,regime,actu,marge){
    localStorage.setItem("actu",actu);
    localStorage.setItem("marge",marge);
    localStorage.setItem("pays",pays);
    localStorage.setItem("regime",regime);
};

var donne=new Donne();