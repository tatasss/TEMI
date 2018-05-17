let MyMath =function(){};
let ModeleManager=function(){};
let BootstrapVue = function () {};
let Donne=function(){};
let Fabrique=function(){};
let GenererVue=function(){};
let Modele=function(donnee){this.donnee=donnee}
let Ref=function(){};
let Graph=function(){};



//----------------------------------------------------------------------------------------------------------------------
let myMath=new MyMath();
let modeleManager= new ModeleManager();
let bootstrap=new BootstrapVue();
let fabrique=new Fabrique();
let genererVue=new GenererVue();
let ref=new Ref();
let graph=new Graph();

//----------------------------------------------------------------------------------------------------------------------
Ref.prototype.donnerNomPays=function(code){
    var randPays=mesPays();

    for(var i=0;i<randPays.length;i++){
        if(randPays[i].code===code){

            return randPays[i].nom;

        }

    }
};
Ref.prototype.donnerCodePays=function(nom){
    var randPays=mesPays();

    for(var i=0;i<randPays.length;i++){
        if(randPays[i].nom===nom){

            return randPays[i].code;

        }

    }
};