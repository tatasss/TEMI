function base(){
    //localStorage.setItem("retour1",$("#REGIMECmpta").val());
    //localStorage.setItem("retour2",$("#actualistionCompa").val());
   // window.location.reload();
   // console.log(localStorage.getItem("retour1"));
    let mod=localStorage.getItem("retour1");
    let act=localStorage.getItem("retour2");
    if (act !== undefined) {
        if (act!== null) {
            document.getElementById("actualisation").value=act;
        }
    }
    //console.log( $('#REGIME option[value='+mod+']').attr("selected", "selected"));
    $('#REGIME option[value='+mod+']').attr("selected", "selected");
    //$('#REGIME option[value!='+mod+']').attr("selected", "");
}
let regime="";
let act="";
if(localStorage.getItem("retour1")!==undefined){
    if(localStorage.getItem("retour1")!==null){
        regime=localStorage.getItem("retour1");
    }
}
if(localStorage.getItem("retour2")!==undefined){
    if(localStorage.getItem("retour2")!==null){
        act=localStorage.getItem("retour2")
    }
}
localStorage.clear();
localStorage.setItem("retour1",regime);
localStorage.setItem("retour2",act);
base();