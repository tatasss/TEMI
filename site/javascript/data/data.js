let Donne=function(pays,regime,actu,marge){
    let randPays=mesPays();
    let mP;
    for(let i=0;i<randPays.length;i++){
        if(randPays[i].code===pays){

            mP=randPays[i];

            break;

        }

    }
    this.pays=mP;
    this.regime=regime;
    this.actu=actu;
    this.marge=marge;
    this.entreprise=fabrique.entreprise(actu,marge);
};
