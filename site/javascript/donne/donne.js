donne=function(){
    var donne= localStorage.getItem("entreprise");
    var pibpnb= localStorage.getItem("pin");
    var pays=localStorage.getItem("pays");
    var regime=localStorage.getItem("regimE");
    var randPays=mesPays();

    for(var i=0;i<randPays.length;i++){
        if(randPays[i].nom==pays){

            var mP=randPays[i];
            localStorage.setItem('mP',mP);
            break;

        }

    }
    var mE=fabrique.entreprise(donne);
    var pibChoisi;
    if(pibpnb=="PIB/Tete"){

        pibChoisi=mP.pib;
    }
    else{

        pibChoisi=mP.pnb;
    }
    /*localStorage.setItem("pin",pin);
    localStorage.setItem("pays",pays);
    localStorage.setItem("regimE",regimE);*/
    return{
        mE:mE,
        mP:mP,
        pibChoisi:pibChoisi,


    }
}
donneRef=function(donne,pin,pays,regimE){
    localStorage.setItem("entreprise",donne);
    localStorage.setItem("pin",pin);
    localStorage.setItem("pays",pays);
    localStorage.setItem("regimE",regimE);
}