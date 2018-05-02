	function validateForm() {


			var donne = document.forms["myForm"]["donne"].value;
			var pibpnb=document.forms["myForm"]["PIBPNB"].value;
			var pays =document.forms["myForm"]["PAYS"].value;
			var regime=document.forms["myForm"]["REGIME"].value;
			var x =donne + "\n"+pibpnb+ "\n"+pays+"\n"+regime;
			mainHTML(donne,pibpnb,pays,regime);
		
			
		}
	function enteteHtml(){
				document.write("<head><link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'></head>");
				document.write("<nav class='navbar navbar-inverse'><div class='container-fluid'><div class='navbar-header'><a class='navbar-brand' href='#'>Cerdi</a></div></div></nav><div class='container'>");	
		}
	function resultatHtml(){
		//mis en place du tableaux des resultat
		document.write("<div class='panel panel-default'><div class='panel-heading'><h1>resultat</h1></div>");
		document.write("<div class='panel-body'>")
		document.write("<div class='panel panel-default'><div class='panel-body'>");
		document.write(" <table class='table'><thead><tr><th></th><th colspan=3 align=center>taux statuaire</th><th colspan=2>Taux effectifs moyens</th><th colspan=2>Taux effectifs marginaux</th></tr></thead>");
		document.write("<tr><th></th><th>Taux plein</th><th>Taux reduit</th><th>Durée</th><th>First Year</th><th>Five Year</th><th>First Year</th><th>Five Year</th></tr>")
		document.write("<tbody>");
		//pas oublier de completer avec les éléments calculer
		document.write("<tr><td>CFE</td><td></td><td></td><td></td><td><td></td><td></td></td><td></td></tr>");
		document.write("<tr><td>IS</td><td><td></td><td></td><td></td><td></td></td><td></td><td></td></tr>");
		document.write("<tr><td>IMF</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>");
		document.write("<tr><td>IRVM</td><td></td><td></td><td><td></td><td></td><td></td><td></td></td></tr>");
		document.write("<tr><td>IRC</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>");
		document.write("<tr><td>TVA Petrole</td><td></td><td></td><td><td></td><td></td><td></td><td></td></td></tr>");
		document.write("<tr><td>total</td><td></td><td></td><td><td></td><td></td><td></td><td></td></td></tr>");
		document.write("</tbody>");
		document.write("</table>");
		document.write("</div></div></div></div>");
		//fin du tableaux
		
	}
	function pinbHTML(pin,pays){
		document.write("<div class='panel panel-default'><div class='panel-heading'><h1>données economiques</h1></div>");
		document.write("<div class='panel-body'>")
		if(pin=="PIB/Tete"){
			document.write("<p>le PIB par tête dans le pays"+pays+"est de :"+"______________"+" FCFA</p>")
			
		}
		else{
			document.write("<p>le PNB par tête dans le pays"+pays+"est de :"+"______________"+" FCFA</p>")
		}
	}
	function entrepriseHTML(){
		document.write("<p>L'entreprise simulée est supposée être localisée dans la plus grande ville du pays, employer "+"60"+" salariés et vendre la totalité de sa production sur le marché local. ")
		document.write("<br/>Elles comporte donc "+"4"+" cadre dont l'indice salarial est de "+"2.25");
		document.write(" , "+"8"+" secrétaire dont l'indice salarial est de "+"1.25");
		document.write(" , "+"48"+" ouvrier dont l'indice salarial est de "+"1");
		document.write("<br/>Elle verse "+"__"+" de ces bénéfices dans les dividendes");
		document.write("<br/>Elle a un taux d'actualisation de "+"__"+" %");
		document.write("</p>");
	}
	function bilanHtml(){
		//bilan
			document.write("<div class='panel panel-default'><div class='panel-body'>");
		 document.write(" <table class='table'><thead><tr><th colspan=4> bilan à l'ouverture<th/><tr/><tr><th colspan=2>Actif</th><th colspan=2>Passif</th></tr></thead>");
		 document.write("<tbody><font size -1><tr><td colspan=2><font size='-1'><strong>Actif immobilisé</strong></font></td><td colspan=2><strong><font size='-1'>Capitaux propre</strong></font></td></tr>");
		 document.write("<tr><td>Terrain</td><td></td><td>Capital Social</td><td></td></tr>");
		 document.write("<tr><td>Constructions</td><td></td><td></td><td></td></tr>");
		 document.write("<tr><td>Equipement</td><td></td><td></td><td></td></tr>");
		 document.write("<tr><td>Camion</td><td></td><td></td><td></td></tr>");
		 document.write("<tr><td>Matériel informatique</td><td></td><td></td><td></td></tr>");
		 document.write("<tr><td>Materiel de Bureau</td><td></td><td></td><td></td></tr>");
		document.write("<tr><td colspan=2><font size='-1'><strong>Actif circulant</strong></font></td><td colspan=2><strong><font size='-1'>Dettes</strong></font></td></tr>") 
		document.write("<tr><td>Stocks</td><td></td><td>Dettes à long terme</td><td></td></tr>");
		document.write("<tr><td>Creances Clients</td><td></td><td>Dettes à court terme</td><td></td></tr>");
		document.write("<tr><td>Disponibilités bancaires</td><td></td><td>Dettes fournisseurs</td><td></td></tr>");
		document.write("<tr><td><strong>Actif</strong></td><td></td><td><strong>Passif</strong></td><td></td></tr>");
		document.write("</font></tbody>");
		document.write("</table>");
		document.write("</div></div>");
	}
	function compteHtml(){
		document.write("<div class='panel panel-default'><div class='panel-body'>");
		document.write(" <table class='table'><thead><tr><th colspan=4> Compte de résultat<th/></tr><tr><th colspan=2>Charges</th><th colspan=2>Produit</th></tr></thead>");
		document.write("<tbody><font size -1><tr><td colspan=2><font size='-1'><strong>Achats de biens et services</strong></font></td><td colspan=2><strong><font size='-1'>Ventes</strong></font></td></tr>");
		document.write("<tr><td>Achats</td><td></td><td>Ventes</td><td></td></tr>");
		document.write("<tr><td>Petrole</td><td></td><td></td><td></td></tr>");
		document.write("<tr><td>Depenses administratives</td><td></td><td></td><td></td></tr>");
		document.write("<tr><td>Depenses publicitaires</td><td></td><td></td><td></td></tr>");
		document.write("<tr><td>Depences d entretien</td><td></td><td></td><td></td></tr>");
		document.write("<tr><td colspan=2><font size='-1'><strong>Impôts et taxes</strong></font></td></tr>");
		document.write("<tr><td colspan=2><font size='-1'><strong>Masse Salariale</strong></font></td></tr>");
		document.write("<tr><td>Cadres</td><td></td><td></td><td></td></tr>");
		document.write("<tr><td>Secrétaires</td><td></td><td></td><td></td></tr>");
		document.write("<tr><td>Ouvriers</td><td></td><td></td><td></td></tr>");
		document.write("<tr><td colspan=2><font size='-1'><strong>Charges financières</strong></font></td></tr>");
		document.write("<tr><td>Charges Fiananciéres</td><td></td><td></td><td></td></tr>");
		document.write("<tr><td colspan=2><font size='-1'><strong>Amortissement</strong></font></td></tr>");
		document.write("</font></tbody>");
		document.write("</table>");
		document.write("</div></div></div>");
	}
	function donnéesEconomique(donne,pin,pays,regime){
		//mis en place des données economiques
		//pays
		pinbHTML(pin,pays);
		//entreprise
		entrepriseHTML();
		//compte et bilan
		bilanHtml();
		//compte
		compteHtml();
		 //fin
	}
	function ImpotHtml(){
		document.write(" <table class='table'><thead><tr><th colspan=6> Impot<th/></tr>");
		document.write("<tr><th></th><th>1</th><th>2</th><th>3</th><th>4</th><th>5</th></tr>");
		document.write("</thead><tbody>");
		document.write("<tr><td>CFE</td><td></td><td></td><td></td><td></td><td></td></tr>");
		document.write("<tr><td>IS</td><td></td><td></td><td></td><td></td><td></td></tr>");
		document.write("<tr><td>IMF</td><td></td><td></td><td></td><td></td><td></td></tr>");
		document.write("<tr><td>IRVM</td><td></td><td></td><td></td><td></td><td></td></tr>");
		document.write("<tr><td>IRC</td><td></td><td></td><td></td><td></td><td></td></tr>");
		document.write("<tr><td>TVA Petrole</td><td></td><td></td><td></td><td></td><td></td></tr>");
		document.write("</tbody>");
		document.write("</table>");
	}
	function amortissementHtml(){
		document.write("<div class='panel panel-default'><div class='panel-body'>");
		document.write(" <table class='table'><thead><tr><th colspan=3> Amortissement<th/></tr>");
		document.write("<tr><th></th><th>Durée Linéaire</th><th>Coef dégressif</th></tr>");
		document.write("</thead><tbody>");
		document.write("<tr><td>Constructions</td><td></td><td></td></tr>");
		document.write("<tr><td>Equipement</td><td></td><td></td></tr>");
		document.write("<tr><td>Camion</td><td></td><td></td></tr>");
		document.write("<tr><td>Materiel informatique</td><td></td><td></td></tr>");
		document.write("<tr><td>Materiel de bureau</td><td></td><td></td></tr>");
		document.write("</tbody>");
		document.write("</table>");
		document.write("</div></div>");
	}
	function  amortiExcepHTML(){
		document.write("<p> Pour les amortissement exceptionnels, le taux depend de l'investissements, il y a une limitation par rapport au bénéfice annuels et a donc une durée comptai en année");
	}
	function donnéesFiscal(){
		 //mis en place des données fiscales
		document.write("<div class='panel panel-default'><div class='panel-heading'><h1>données fiscales</h1></div>");
		document.write("<div class='panel-body'>");
		document.write("<div class='panel panel-default'><div class='panel-body'>");
		ImpotHtml();
		document.write("</div></div>")
		 //tableau amortissement
		amortissementHtml();
		//amortissement exceptionnel
		amortiExcepHTML();
		document.write("</div></div>");
		//fin
		 
	}
	function bodyHtml(donne,pin,pays,regime){
		
		resultatHtml();
		donnéesEconomique(donne,pin,pays,regime);
		donnéesFiscal();
		
		
	}
	function navigationHtml(donne,pin,pays,regime){
		document.write("<div class='col-sm-2'>");
		document.write("<div class='panel panel-default'><div class='panel-heading'>Paramétres</div>");
		document.write("<div class='panel-body'>")
		document.write(donne+"</br>"+pin+"<br/>"+pays+"<br/>"+regime+"</br>");
		document.write("</div></div>");	
		document.write(" <button type='submit' class='btn btn-default' onclick='javascript:window.location.reload()'>retour</button></div></div>");
	}
	function mainHTML(donne,pin,pays,regime){
			enteteHtml();
			document.write("<div class='row'><div class='col-sm-10'>");
			bodyHtml(donne,pin,pays,regime);
			document.write("</div></div>");
			navigationHtml(donne,pin,pays,regime);
	}
