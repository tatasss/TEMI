

function validateForm() {


			var donne = $("#donne").val();
			var pibpnb=$("#PIBPNB").val();
			var pays =$("#PAYS").val();
			var regime=$("#REGIME").val();
			var x =donne + "\n"+pibpnb+ "\n"+pays+"\n"+regime;
			
			
			document.getElementById("result").innerHTML=genererVue.mainHTML(donne,pibpnb,pays,regime);
		
		
			
}


function testModele1(){

	var monTest= fabrique.armortirModele(26801197,10,2.5,"equipement");
    var html="<p>"+monTest.nom+"</p>"
	html+="<table class='table'><thead><tr><th>duree restante</th>";
	for(var i=0;i<5;i++){
		html+="<th>"+monTest.dureeRestante[i]+"</th>";
	}
	html+="</thead><tbody><tr><td>Base Amortissable</td>";
    for(var i=0;i<5;i++){
        html+="<td>"+monTest.baseAmortissable[i]+"</td>";
    }
    html+="</tr><tr><td>Taux Unitaire</td>"
    for(var i=0;i<5;i++){
        html+="<td>"+monTest.tauxLineaire[i]+"</td>";
    }
    html+="</tr><tr><td>Taux degressif</td>";
    for(var i=0;i<5;i++){
        html+="<td>"+monTest.tauxDegressif[i]+"</td>";
    }
    html+="</tr><tr><td>charge Amortissement</td>";
    for(var i=0;i<5;i++){
	html+="<td>"+monTest.chargeAmorti[i]+"</td>";
    }
    html+="</tr></tbody></table>";
    console.log(document.getElementById("test1"));
    document.getElementById("test1").innerHTML=html;
}
function testModele2(){
	var amortissement=[];
	var html="<p>";
	var mE=donne().mE;
	var mP=donne().mP;
	var pibchoix=donne().pibChoisi;
    amortissement.push(fabrique.armortirModele(Math.trunc(mE.construction*pibchoix),mP.ammort.construction,mP.ammort.coefdegressif,"construction"));
    amortissement.push(fabrique.armortirModele(mE.equipement*pibchoix,mP.ammort.equipement,mP.ammort.coefdegressif,"equipement"));
    amortissement.push(fabrique.armortirModele(mE.camion*pibchoix,mP.ammort.camion,mP.ammort.coefdegressif,"camion"));
    amortissement.push(fabrique.armortirModele(mE.info*pibchoix,mP.ammort.info,mP.ammort.coefdegressif,"informatique"));
    amortissement.push(fabrique.armortirModele(mE.bureau*pibchoix,mP.ammort.bureau,mP.ammort.coefdegressif,"bureau"));
    for(var i=0;i<amortissement.length;i++){
    	html+=amortissement[i].getHtml()+"<br/>";
	}
	html+="</p>";
    document.getElementById("test2").innerHTML=html;
}
function testModele3(){
	var monm=modele();

	var html="<h1>investissment</h1><p>investissement : "+monm.investissement+"</p><h1>Ammortissment :</h1>"+monm.getAmmortHtml();
    for(var i=0;i<monm.amortissement.length;i++){
        html+=monm.amortissement[i].getHtml()+"<br/>";
        document.getElementById("test3").innerHTML=html;
    }

}
function testModele4(){
    var monm=modele();
    var html="<p>contribution employer</p>";
    html+="<table class='table'><thead></thead>";
    html+="<tbody><tr><td>Salaire des cadres</td><td>FCFA</td>";
    for(var i=0;i<monm.employer.salaire_cadre.length;i++){
        html+="<td>"+monm.employer.salaire_cadre[i]+"</td>";
    }
    html+="</tr><tr><td>Salaire des secretaires</td><td>FCFA</td>";
    for(var i=0;i<monm.employer.salaire_secretaire.length;i++){
        html+="<td>"+monm.employer.salaire_secretaire[i]+"</td>";
    }
    html+="</tr><tr><td>Salaire des ouvrier</td><td>FCFA</td>";
    for(var i=0;i<monm.employer.salaire_ouvrier.length;i++){
        html+="<td>"+monm.employer.salaire_ouvrier[i]+"</td>";
    }
    html+="</tr><tr><td>masse Salarial</td><td>FCFA</td>";
    for(var i=0;i<monm.employer.masse_salarial.length;i++){
        html+="<td>"+monm.employer.masse_salarial[i]+"</td>";
    }
    html+="</tr><tr><td>taux</td><td>%</td>";
    for(var i=0;i<monm.employer.tauxCfe.length;i++){
        html+="<td>"+monm.employer.tauxCfe[i]+"</td>";
    }
    html+="</tr><tr><td>CFE</td><td>FCFA</td>";
    for(var i=0;i<monm.employer.reel_CFE.length;i++){
        html+="<td>"+monm.employer.reel_CFE[i]+"</td>";
    }
    html+="</tr></tbody></table>";

    document.getElementById("test4").innerHTML=html;
}