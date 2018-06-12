let Ajout=function(){};
let ajout=new Ajout();

Ajout.prototype.addLand=function(){

    try{
        ajout.verifierChanp();
        let tax=maker.impot(Number.parseFloat($('#cfeImpPays').val()),Number.parseFloat($('#isImpPays').val()),Number.parseFloat($('#imfImpPays').val()),Number.parseFloat($('#irvmImpPays').val()),Number.parseFloat($('#ircImpPays').val()),Number.parseFloat($('#tvaPetroleImpPays').val()));
        let amort=maker.ammortissement($('#cfeAmmortPays').val(),Number.parseFloat($('#isAmmortPays').val()),Number.parseFloat($('#tvaPetroleAmmortPays').val()),Number.parseFloat($('#imfAmmortPays').val()),Number.parseFloat($('#irvmAmmortPays').val()),Number.parseFloat($('#ircAmmortPays').val()) );
console.log($('#tvaPetroleAmmortPays').val())
        let invest=maker.investir(ajout.investirProt("CFE"),ajout.investirProt("IS"),ajout.investirProt("IMF"),ajout.investirProt("IRVM"),ajout.investirProt("IRC"),maker.impotPays(null,null,null));

        let source=$('#nomCodeInvestPays').val()+"<br/>"+$('#nomRegInvestPays').val()+"<br/>"+$('#zonneInvestPays').val();
        land.ajouterPays(maker.land($("#codePays").val().toUpperCase(),$("#nomPays").val(),tax,amort,invest,$('#descDispoInvestPays').val(),source));
        document.location.href="./index.html";
    }
    catch (e) {
    }

};
Ajout.prototype.verifNull=function (data){
    console.log(data);
    let regex = /^[ ]*$/;
    if(regex.test(data)){
        return null;
    }
    if(data==="null"){
        return null;
    }
    if (data===null){
        return null;
    }
    return data;
};
Ajout.prototype.investirProt=function (impStr){
  return maker.impotPays(ajout.verifNull($('#duree'+impStr+'InvestPays').val()),ajout.verifNull($('#taux'+impStr+'InvestPays').val()),null);
};
Ajout.prototype.verifierChanp=function(){
        document.getElementById("formError").innerHTML="";
        ajout.verifLand();
        ajout.verifGeneral();
        ajout.verifInvestissement();
        if(document.getElementById("formError").innerHTML===bootstrap.alertDanger("Le formulaire n'est pas rempli correctement")){
            throw new Error("non valid");
        }
};
Ajout.prototype.verifInvestissement=function(){
    ajout.verifInvestTaxe($('#dureeCFEInvestPays').val(),$('#tauxCFEInvestPays').val(),"cfe");
    ajout.verifInvestTaxe($('#dureeISInvestPays').val(),$('#tauxISInvestPays').val(),"IS");
    ajout.verifInvestTaxe($('#dureeIMFInvestPays').val(),$('#tauxIMFInvestPays').val(),"IMF");
    ajout.verifInvestTaxe($('#dureeIRVMInvestPays').val(),$('#tauxIRVMInvestPays').val(),"IRVM");
    ajout.verifInvestTaxe($('#dureeIRCInvestPays').val(),$('#tauxIRCInvestPays').val(),"IRC");
    try{
        document.getElementById("descDispoError").innerHTML="";
        verif.stringer($('#descDispoInvestPays').val());
    }
    catch (e) {
        document.getElementById("descDispoError").innerHTML=bootstrap.alertDanger(e.message);
        document.getElementById("formError").innerHTML=bootstrap.alertDanger("Le formulaire n'est pas rempli correctement");
    }
    try{
        document.getElementById("nomCodeInvestError").innerHTML="";
        verif.stringer($('#nomCodeInvestPays').val());

    }
    catch (e) {
        document.getElementById("nomCodeInvestError").innerHTML=bootstrap.alertDanger(e.message);
        document.getElementById("formError").innerHTML=bootstrap.alertDanger("Le formulaire n'est pas rempli correctement");

    }
    try{
        document.getElementById("nomRegInvestError").innerHTML="";
        verif.stringer($('#nomRegInvestPays').val());
    }
    catch (e) {
        document.getElementById("nomRegInvestError").innerHTML=bootstrap.alertDanger(e.message);
        document.getElementById("formError").innerHTML=bootstrap.alertDanger("Le formulaire n'est pas rempli correctement");
    }
    try{
        document.getElementById("zonneInvestError").innerHTML="";
        verif.stringer($('#zonneInvestPays').val());
    }
    catch (e) {
        document.getElementById("zonneInvestError").innerHTML=bootstrap.alertDanger(e.message);
        document.getElementById("formError").innerHTML=bootstrap.alertDanger("Le formulaire n'est pas rempli correctement");
    }



};

Ajout.prototype.verifGeneral=function(){
    let cfeImp=$('#cfeImpPays').val();
    let isImp=$('#isImpPays').val();
    let imfImp=$('#imfImpPays').val();
    let irvmImp=$("#irvmImpPays").val();
    let ircImp=$("#ircImpPays").val();
    let tvaPetroleImp=$("#tvaPetroleImpPays").val();
    let cfeAmmort=$("#cfeAmmortPays").val();
    let isAmmort=$("#isAmmortPays").val();
    let imfAmmort=$("#imfAmmortPays").val();
    let irvmAmmort=$("#irvmAmmortPays").val();
    let ircAmmort=$("#ircAmmortPays").val();
    let tvaPetroleAmmort=$("#tvaPetroleAmmortPays").val();
    try{
        document.getElementById("errorCFEImp").innerHTML="";
        cfeImp=verif.verifPourcent(cfeImp);
    }
    catch (e) {
        document.getElementById("errorCFEImp").innerHTML=bootstrap.alertDanger(e.message);
        document.getElementById("formError").innerHTML=bootstrap.alertDanger("Le formulaire n'est pas rempli correctement");

    }
    try{
        document.getElementById("errorISImp").innerHTML="";
        isImp=verif.verifPourcent(isImp);
    }
    catch (e) {
        document.getElementById("errorISImp").innerHTML=bootstrap.alertDanger(e.message);
        document.getElementById("formError").innerHTML=bootstrap.alertDanger("Le formulaire n'est pas rempli correctement");

    }
    try{
        document.getElementById("errorIMFImp").innerHTML="";
        imfImp=verif.verifPourcent(imfImp);
    }
    catch (e) {
        document.getElementById("errorIMFImp").innerHTML=bootstrap.alertDanger(e.message);
        document.getElementById("formError").innerHTML=bootstrap.alertDanger("Le formulaire n'est pas rempli correctement");
    }
    try{
        document.getElementById("errorIRVMImp").innerHTML="";
        irvmImp=verif.verifPourcent(irvmImp);
    }
    catch (e) {
        document.getElementById("errorIRVMImp").innerHTML=bootstrap.alertDanger(e.message);
        document.getElementById("formError").innerHTML=bootstrap.alertDanger("Le formulaire n'est pas rempli correctement");
    }
    try{
        document.getElementById("errorIRCImp").innerHTML="";
        ircImp=verif.verifPourcent(ircImp);
    }
    catch (e) {
        document.getElementById("errorIRCImp").innerHTML=bootstrap.alertDanger(e.message);
        document.getElementById("formError").innerHTML=bootstrap.alertDanger("Le formulaire n'est pas rempli correctement");
    }//////////
    try{
        document.getElementById("errorTVAPETImp").innerHTML="";
        tvaPetroleImp=verif.verifPourcent(tvaPetroleImp);
    }
    catch (e) {
        document.getElementById("errorTVAPETImp").innerHTML=bootstrap.alertDanger(e.message);
        document.getElementById("formError").innerHTML=bootstrap.alertDanger("Le formulaire n'est pas rempli correctement");
    }
    try{
        document.getElementById("errorCFEAmmort").innerHTML="";
        verif.inter(cfeAmmort);
    }
    catch (e) {
        document.getElementById("errorCFEAmmort").innerHTML=bootstrap.alertDanger(e.message);
        document.getElementById("formError").innerHTML=bootstrap.alertDanger("Le formulaire n'est pas rempli correctement");
    }
    try{
        document.getElementById("errorISAmmort").innerHTML="";
        verif.inter(isAmmort);
    }
    catch (e) {
        document.getElementById("errorISAmmort").innerHTML=bootstrap.alertDanger(e.message);
        document.getElementById("formError").innerHTML=bootstrap.alertDanger("Le formulaire n'est pas rempli correctement");
    }
    try{
        document.getElementById("errorIMFAmmort").innerHTML="";
        verif.inter(imfAmmort);
    }
    catch (e) {
        document.getElementById("errorIMFAmmort").innerHTML=bootstrap.alertDanger(e.message);
        document.getElementById("formError").innerHTML=bootstrap.alertDanger("Le formulaire n'est pas rempli correctement");
    }
    try{
        document.getElementById("errorIRVMAmmort").innerHTML="";
        verif.inter(irvmAmmort);
    }
    catch (e) {
        document.getElementById("errorIRVMAmmort").innerHTML=bootstrap.alertDanger(e.message);
        document.getElementById("formError").innerHTML=bootstrap.alertDanger("Le formulaire n'est pas rempli correctement");
    }
    try{
        document.getElementById("errorIRCAmmort").innerHTML="";
        verif.inter(ircAmmort);
    }
    catch (e) {
        document.getElementById("errorIRCAmmort").innerHTML=bootstrap.alertDanger(e.message);
        document.getElementById("formError").innerHTML=bootstrap.alertDanger("Le formulaire n'est pas rempli correctement");
    }
    try{
        document.getElementById("errorTVAPETAmmort").innerHTML="";
        verif.verifPourcent(tvaPetroleAmmort);
    }
    catch (e) {
        document.getElementById("errorTVAPETAmmort").innerHTML=bootstrap.alertDanger(e.message);
        document.getElementById("formError").innerHTML=bootstrap.alertDanger("Le formulaire n'est pas rempli correctement");
    }
};
Ajout.prototype.verifInvestTaxe=function(duree,taux,nomTaxe){
    try{
        document.getElementById("duree"+nomTaxe.toUpperCase()+"Error").innerHTML="";
        verif.verifDureeInvest(duree);
    }
    catch (e) {
        document.getElementById("duree"+nomTaxe.toUpperCase()+"Error").innerHTML=bootstrap.alertDanger(e.message);
        document.getElementById("formError").innerHTML=bootstrap.alertDanger("Le formulaire n'est pas rempli correctement");
    }
    try{
        document.getElementById("taux"+nomTaxe.toUpperCase()+"Error").innerHTML="";
        verif.verifTauxInvest(taux);
    }
    catch (e) {
        document.getElementById("taux"+nomTaxe.toUpperCase()+"Error").innerHTML=bootstrap.alertDanger(e.message);
        document.getElementById("formError").innerHTML=bootstrap.alertDanger("Le formulaire n'est pas rempli correctement");
    }

};

Ajout.prototype.verifLand=function(){
    let nom=$("#nomPays").val();

    let code=$("#codePays").val();
    try{
        document.getElementById("errorNom").innerHTML="";
        verif.stringer(nom);
    }
    catch (e) {
        document.getElementById("errorNom").innerHTML=bootstrap.alertDanger(e.message);
        document.getElementById("formError").innerHTML=bootstrap.alertDanger("Le formulaire n'est pas rempli correctement");
    }
    try{
        document.getElementById("errorCode").innerHTML="";
        verif.codeISO3(code);
    }
    catch (e) {
        document.getElementById("errorCode").innerHTML=bootstrap.alertDanger(e.message);
        document.getElementById("formError").innerHTML=bootstrap.alertDanger("Le formulaire n'est pas rempli correctement");
    }

};