var genererVue={
	mE : "lol",
	mP:"c'est mon pays",
	pibchoix:"lol",
	resultatHtml:function(regime){
		//mis en place du tableaux des resultat
		var result="<div class='panel panel-default'><div class='panel-heading'><h1>resultat</h1></div>";
		var impotStatDuree=[];
		if(regime=="gen"){
			for(var i=0; i<5;i++){
				impotStatDuree.push(" ");
			}
		}
		else{
			
		}
		result+="<div class='panel-body'>";
		result+="<div class='panel panel-default'><div class='panel-body'>";
		result+=" <table class='table'><thead><tr><th></th><th colspan=3 align=center>taux statuaire</th><th colspan=2>Taux effectifs moyens</th><th colspan=2>Taux effectifs marginaux</th></tr></thead>";
		result+="<tr><th></th><th>Taux plein</th><th>Taux reduit</th><th>Durée</th><th>First Year</th><th>Five Year</th><th>First Year</th><th>Five Year</th></tr>";
		result+="<tbody>";
		//pas oublier de completer avec les élémEnts calculer
		result+="<tr><td>CFE</td><td>"+mP.impot.cfe+"</td><td></td><td></td><td><td></td><td></td></td><td></td></tr>";
		result+="<tr><td>IS</td><td>"+mP.impot.is+"<td></td><td></td><td></td><td></td></td><td></td><td></td></tr>";
		result+="<tr><td>IMF</td><td>"+mP.impot.imf+"</td><td></td><td></td><td></td><td></td><td></td><td></td></tr>";
		result+="<tr><td>IRVM</td><td>"+mP.impot.irvm+"</td><td></td><td><td></td><td></td><td></td><td></td></td></tr>";
		result+="<tr><td>IRC</td><td>"+mP.impot.irc+"</td><td></td><td></td><td></td><td></td><td></td><td></td></tr>";
		result+="<tr><td>TVA Petrole</td><td>"+mP.impot.tva_petrole+"</td><td></td><td><td></td><td></td><td></td><td></td></td></tr>";
		result+="<tr><td>total</td><td></td><td></td><td><td></td><td></td><td></td><td></td></td></tr>";
		result+="</tbody>";
		result+="</table>";
		result+="</div></div></div></div>";
		//fin du tableaux*/
		return result;
		
	},
	pinbHTML:function(pin,pays){
		var result;
		if(pin=="PIB/Tete"){
			result="<p>le PIB par tête dans le pays "+ pays +" est de : "+ mP.pib +" FCFA</p>";
			pibchoix=mP.pib
		}
		else{
			result="<p>le PNB par tête dans le pays "+pays+" est de :"+mP.pnb+" FCFA</p>";
			pibchoix=mP.pnb;
		}
		return result;
	},
	entrepriseHTML:function(){
		var result="<p>L'entreprise simulée est supposée être localisée dans la plus grande ville du pays, employer "+"60"+" salariés et vendre la totalité de sa production sur le marché local. ";
		result+="<br/>Elles comporte donc "+mE.cadre+" cadre dont l'indice salarial est de "+mE.indice_cadre;
		result+=" , "+mE.secretaire+" secrétaire dont l'indice salarial est de "+mE.indice_secretaire;
		result+=" , "+mE.ouvrier+" ouvrier dont l'indice salarial est de "+mE.indice_ouvrier;
		result+="<br/>Elle verse "+mE.dividende+"% de ces bénéfices dans les dividendes";
		result+="<br/>Elle a un taux d'actualisation de "+mE.actuali+" %";
		result+="</p>";
		return result;
	},
	bilanHtml:function(){
		//bilan
		var actif=mE.terrain+mE.construction+mE.equipement+mE.camion+mE.info+mE.bureau+mE.stocks+mE.creanceCli+mE.dispoBanque;
		var passif=mE.capitalSocial+mE.detteLongTerme+mE.detteCourtTerme+mE.detteFournisseur;
		var result="<div class='panel panel-default'><div class='panel-body'>";
		result+=" <table class='table'><thead><tr><th colspan=4> bilan à l'ouverture<th/><tr/><tr><th colspan=2>Actif</th><th colspan=2>Passif</th></tr></thead>";
		result+="<tbody><font size -1><tr><td colspan=2><font size='-1'><strong>Actif immobilisé</strong></font></td><td colspan=2><strong><font size='-1'>Capitaux propre</strong></font></td></tr>";
		result+="<tr><td>Terrain</td><td>"+mE.terrain+"</td><td>Capital Social</td><td>"+mE.capitalSocial+"</td></tr>";
		result+="<tr><td>Constructions</td><td>"+mE.construction+"</td><td></td><td></td></tr>";
		result+="<tr><td>Equipement</td><td>"+mE.equipement+"</td><td></td><td></td></tr>";
		result+="<tr><td>Camion</td><td>"+mE.camion+"</td><td></td><td></td></tr>";
		result+="<tr><td>Matériel informatique</td><td>"+mE.info+"</td><td></td><td></td></tr>";
		result+="<tr><td>Materiel de Bureau</td><td>"+mE.bureau+"</td><td></td><td></td></tr>";
		result+="<tr><td colspan=2><font size='-1'><strong>Actif circulant</strong></font></td><td colspan=2><strong><font size='-1'>Dettes</strong></font></td></tr>"; 
		result+="<tr><td>Stocks</td><td>"+mE.stocks+"</td><td>Dettes à long termE</td><td>"+mE.detteLongTerme+"</td></tr>";
		result+="<tr><td>Creances Clients</td><td>"+mE.creanceCli+"</td><td>Dettes à court termE</td><td>"+mE.detteCourtTerme+"</td></tr>";
		result+="<tr><td>Disponibilités bancaires</td><td>"+mE.dispoBanque+"</td><td>Dettes fournisseurs</td><td>"+mE.detteFournisseur+"</td></tr>";
		result+="<tr><td><strong>Actif</strong></td><td>"+actif+"</td><td><strong>Passif</strong></td><td>"+passif+"</td></tr>";
		result+="</font></tbody>";
		result+="</table>";
		result+="</div></div>";
		return result;
	},
	compteHtml:function(donne){
		
		var result="<div class='panel panel-default'><div class='panel-body'>";
		result+=" <table class='table'><thead><tr><th colspan=4> Compte de résultat<th/></tr><tr><th colspan=2>Charges</th><th colspan=2>Produit</th></tr></thead>";
		result+="<tbody><font size -1><tr><td colspan=2><font size='-1'><strong>Achats de biens et services</strong></font></td><td colspan=2><strong><font size='-1'>Ventes</strong></font></td></tr>";
		result+="<tr><td>Achats</td><td>"+mE.terrain+"</td><td>Ventes</td><td>"+mE.vente+"</td></tr>";
		result+="<tr><td>Petrole</td><td>"+mE.petrole+"</td><td></td><td></td></tr>";
		result+="<tr><td>Depenses administratives</td><td>"+mE.depenseAdministrative+"</td><td></td><td></td></tr>";
		result+="<tr><td>Depenses publicitaires</td><td>"+mE.depensePub+"</td><td></td><td></td></tr>";
		result+="<tr><td>Depences d entretien</td><td>"+mE.depenseEntretien+"</td><td></td><td></td></tr>";
		result+="<tr><td colspan=2><font size='-1'><strong>Impôts et taxes</strong></font></td><td></td><td></td></tr>";
		result+="<tr><td colspan=2><font size='-1'><strong>Masse Salariale</strong></font></td><td></td><td></td></tr>";
		result+="<tr><td>Cadres</td><td>"+mE.cadre*mE.indice_cadre+"</td><td></td><td></td></tr>";
		result+="<tr><td>Secrétaires</td><td>"+mE.secretaire*mE.indice_secretaire+"</td><td></td><td></td></tr>";
		result+="<tr><td>Ouvriers</td><td>"+mE.ouvrier*mE.indice_ouvrier+"</td><td></td><td></td></tr>";
		result+="<tr><td colspan=2><font size='-1'><strong>Charges financières</strong></font></td><td></td><td></td></tr>";
		result+="<tr><td>Charges Fiananciéres</td><td>"+mE.chargeFinanciere+"</td><td></td><td></td></tr>";
		result+="<tr><td colspan=2><font size='-1'><strong>AmortissemEnt</strong></font></td><td></td><td></td></tr>";
		result+="</font></tbody>";
		result+="</table>";
		result+="</div></div></div>";
		return result
	},
	donneesEconomique:function(donne,pin,pays,regimE){
		//mis en place des données economiques
		//pays
		var result="<div class='panel panel-default'><div class='panel-heading'><h1>données economiques</h1></div>";
		result+="<div class='panel-body'>";
		result+=this.pinbHTML(pin,pays);
		//entreprise
		result+=this.entrepriseHTML();
		//compte et bilan
		result+=this.bilanHtml();
		//compte
		result+=this.compteHtml(donne);
		result+="</div>";
		 //fin
		 return result;
	},
	ImpotHtml:function(){
		var result=" <table class='table'><thead><tr><th colspan=6> Impot<th/></tr>";
		result+="<tr><th></th><th>1</th><th>2</th><th>3</th><th>4</th><th>5</th></tr>";
		result+="</thead><tbody>";
		result+="<tr><td>CFE</td><td>"+mP.impot.cfe+"% </td><td>"+mP.impot.cfe+" %</td><td>"+mP.impot.cfe+" %</td><td>"+mP.impot.cfe+" %</td><td>"+mP.impot.cfe+" %</td></tr>";
		result+="<tr><td>IS</td><td>"+mP.impot.is+" %</td><td>"+mP.impot.is+" %</td><td>"+mP.impot.is+" %</td><td>"+mP.impot.is+" %</td><td>"+mP.impot.is+" %</td></tr>";
		result+="<tr><td>IMF</td><td>"+mP.impot.imf+" %</td><td>"+mP.impot.imf+" %</td><td>"+mP.impot.imf+" %</td><td>"+mP.impot.imf+" %</td><td>"+mP.impot.imf+" %</td></tr>";
		result+="<tr><td>IRVM</td><td>"+mP.impot.irvm+" %</td><td>"+mP.impot.irvm+" %</td><td>"+mP.impot.irvm+" %</td><td>"+mP.impot.irvm+" %</td><td>"+mP.impot.irvm+" %</td></tr>";
		result+="<tr><td>IRC</td><td>"+mP.impot.irc+" %</td><td>"+mP.impot.irc+" %</td><td>"+mP.impot.irc+" %</td><td>"+mP.impot.irc+" %</td><td>"+mP.impot.irc+" %</td></tr>";
		result+="<tr><td>TVA Petrole</td><td>"+mP.impot.tva_petrole+" %</td><td>"+mP.impot.tva_petrole+" %</td><td>"+mP.impot.tva_petrole+" %</td><td>"+mP.impot.tva_petrole+" %</td><td>"+mP.impot.tva_petrole+" %</td></tr>";
		result+="</tbody>";
		result+="</table>";
		return result;
	},
	amortissemEntHtml:function(){
		var result="<div class='panel panel-default'><div class='panel-body'>";
		result+=" <table class='table'><thead><tr><th colspan=3> AmortissemEnt<th/></tr>";
		result+="<tr><th></th><th>Durée Linéaire</th><th>Coef dégressif</th></tr>";
		result+="</thead><tbody>";
		result+="<tr><td>Constructions</td><td>"+mP.ammort.construction+"</td><td>"+mP.ammort.coefdegressif+"</td></tr>";
		result+="<tr><td>EquipemEnt</td><td>"+mP.ammort.equipement+"</td><td>"+mP.ammort.coefdegressif+"</td></tr>";
		result+="<tr><td>Camion</td><td>"+mP.ammort.camion+"</td><td>"+mP.ammort.coefdegressif+"</td></tr>";
		result+="<tr><td>Materiel informatique</td><td>"+mP.ammort.info+"</td><td>"+mP.ammort.coefdegressif+"</td></tr>";
		result+="<tr><td>Materiel de bureau</td><td>"+mP.ammort.bureau+"</td><td>"+mP.ammort.coefdegressif+"</td></tr>";
		result+="</tbody>";
		result+="</table>";
		result+="</div></div>";
		return result
	},
	amortiExcepHTML:function(){
		return "<p> Pour les amortissemEnt exceptionnels, le taux depend de l'investissemEnts, il y a une limitation par rapport au bénéfice annuels et a donc une durée comptai en année";
		
	},
	donneesFiscal:function(){
		 //mis en place des données fiscales
		var result="<div class='panel panel-default'><div class='panel-heading'><h1>données fiscales</h1></div>";
		result+="<div class='panel-body'>";
		result+="<div class='panel panel-default'><div class='panel-body'>";
		result+=this.ImpotHtml();
		result+="</div></div>";
		 //tableau amortissemEnt
		result+=this.amortissemEntHtml();
		//amortissemEnt exceptionnel
		result+=this.amortiExcepHTML();
		result+="</div>";
		//fin
		return result
		 
	},
	bodyHtml:function(donne,pin,pays,regimE){
		var bodyglo= "<div class='container'><div class='row'><div class='col-sm-10'>"+this.resultatHtml(regimE);
		bodyglo+=this.donneesEconomique(donne,pin,pays,regimE);
		bodyglo+=this.donneesFiscal()+"</div>";
		return bodyglo;
		
	},
	navigationHtml:function(donne,pin,pays,regimE){
		var regime;
		if (regimE="gen"){
			regime="Régime général";
		}
		else{
			regime="Régime des investissements";
		}
		var result="<div class='panel panel-default'><div class='panel-heading'>Paramétres</div>";
		result+="<div class='panel-body'>";
		result+=donne+"</br>"+pin+"<br/>"+pays+"<br/>"+regime+"</br>";
		result+="</div></div>";	
		result+=" <button type='submit'  id='retour' class='btn btn-default' value='back' onclick='documEnt.location.href=documEnt.referrer' >retour</button>";
		return result
	},
	mainHTML:function(donne,pin,pays,regimE){
			mE=fabrique.entreprise(donne);
			console.log(pays);
			var randPays=mesPays();
			console.log(randPays.length);
			for(var i=0;i<randPays.length;i++){
				if(randPays[i].nom==pays){
					console.log("vrai");
					mP=randPays[i];
					break;
					
				}
				console.log(randPays[i].nom +"faux");
			}
			
			var result=this.bodyHtml(donne,pin,pays,regimE);
			result+="</div>";
			result+="<div class='col-sm-2'>";
			result+=this.navigationHtml(donne,pin,pays,regimE);
			result+="</div></div>";
			result+="</div></body></html>";
			//prompt(global)
			return result;
	}
};