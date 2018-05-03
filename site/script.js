

function validateForm() {


			var donne = $("#donne").val();
			var pibpnb=$("#PIBPNB").val();
			var pays =$("#PAYS").val();
			var regime=$("#REGIME").val();
			var x =donne + "\n"+pibpnb+ "\n"+pays+"\n"+regime;
			
			
			document.getElementById("result").innerHTML=genererVue.mainHTML(donne,pibpnb,pays,regime);
		
		
			
}

function resultat(donne,pibpnb,pays,regime){
	
	
}