var genererVue={
	mE : "lol",
	mP:"c'est mon pays",
	pibchoix:"lol",
	resultatHtml:function(regime){
		//mis en place du tableaux des resultat
		var result="<div class='panel panel-default'><div class='panel-heading'><h1>Resultat</h1></div>";
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
		result+=" <table class='table'><thead><tr><th></th><th colspan=3 align=center>Taux statuaire</th><th colspan=2>Taux effectifs moyens</th><th colspan=2>Taux effectifs marginaux</th></tr></thead>";
		result+="<tr><th></th><th>Taux plein</th><th>Taux reduit</th><th>Durée</th><th>First Year</th><th>Five Year</th><th>First Year</th><th>Five Year</th></tr>";
		result+="<tbody>";
		//pas oublier de completer avec les élémEnts calculer
		result+="<tr><td>CFE</td><td>"+mP.impots.cfe+"</td><td></td><td></td><td><td></td><td></td></td><td></td></tr>";
		result+="<tr><td>IS</td><td>"+mP.impots.isImp+"<td></td><td></td><td></td><td></td></td><td></td><td></td></tr>";
		result+="<tr><td>IMF</td><td>"+mP.impots.imf+"</td><td></td><td></td><td></td><td></td><td></td><td></td></tr>";
		result+="<tr><td>IRVM</td><td>"+mP.impots.irvm+"</td><td></td><td><td></td><td></td><td></td><td></td></td></tr>";
		result+="<tr><td>IRC</td><td>"+mP.impots.irc+"</td><td></td><td></td><td></td><td></td><td></td><td></td></tr>";
		result+="<tr><td>TVA Petrole</td><td>"+mP.impots.tva_petrole+"</td><td></td><td><td></td><td></td><td></td><td></td></td></tr>";
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
			result="<p>Le PIB par tête dans le pays "+ pays +" est de : "+ mP.pib +" FCFA</p>";
			pibchoix=mP.pib
		}
		else{
			result="<p>Le PNB par tête dans le pays "+pays+" est de :"+mP.pnb+" FCFA</p>";
			pibchoix=mP.pnb;
		}

		return result;
	},
	entrepriseHTML:function(){
		var result="<p>L'entreprise simulée est supposée être localisée dans la plus grande ville du pays, employer "+"60"+" salariés et vendre la totalité de sa production sur le marché local. ";
		result+="<br/>Elles comporte donc "+mE.cadre+" cadre(s) dont l'indice salarial est de "+mE.indice_cadre;
		result+=" , "+mE.secretaire+" secrétaire(s) dont l'indice salarial est de "+mE.indice_secretaire;
		result+=" , "+mE.ouvrier+" ouvrier(s) dont l'indice salarial est de "+mE.indice_ouvrier + ".";
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
		result+=" <table class='table'><thead><tr><th colspan=4> Bilan à l'ouverture<th/><tr/><tr><th colspan=2>Actif</th><th colspan=2>Passif</th></tr></thead>";
		result+="<tbody><font size -1><tr><td colspan=2><font size='-1'><strong>Actif immobilisé</strong></font></td><td colspan=2><strong><font size='-1'>Capitaux propre</strong></font></td></tr>";
		result+=`<tr><td>Terrain</td><td>${mE.terrain}</td><td>Capital social</td><td>${mE.capitalSocial}</td></tr>`;
		result+=`<tr><td>Constructions</td><td>${mE.construction}</td><td></td><td></td></tr>`;
		result+=`<tr><td>Equipement</td><td>${mE.equipement}</td><td></td><td></td></tr>`;
		result+=`<tr><td>Camion</td><td>${mE.camion}</td><td></td><td></td></tr>`;
		result+=`<tr><td>Matériel informatique</td><td>${mE.info}</td><td></td><td></td></tr>`;
		result+=`<tr><td>Matériel de Bureau</td><td>${mE.bureau}</td><td></td><td></td></tr>`;
		result+='<tr><td colspan=2><font size=\'-1\'><strong>Actif circulant</strong></font></td><td colspan=2><strong><font size=\'-1\'>Dettes</strong></font></td></tr>';
		result+=`<tr><td>Stocks</td><td>${mE.stocks}</td><td>Dettes à long termE</td><td>${mE.detteLongTerme}</td></tr>`;
		result+=`<tr><td>Creances Clients</td><td>${mE.creanceCli}</td><td>Dettes à court terme</td><td>${mE.detteCourtTerme}</td></tr>`;
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
		result+="<tr><td>Depences d'entretien</td><td>"+mE.depenseEntretien+"</td><td></td><td></td></tr>";
		result+="<tr><td colspan=2><font size='-1'><strong>Impôts et taxes</strong></font></td><td></td><td></td></tr>";
		result+="<tr><td colspan=2><font size='-1'><strong>Masse Salariale</strong></font></td><td></td><td></td></tr>";
		result+="<tr><td>Cadres</td><td>"+mE.cadre*mE.indice_cadre+"</td><td></td><td></td></tr>";
		result+="<tr><td>Secrétaires</td><td>"+mE.secretaire*mE.indice_secretaire+"</td><td></td><td></td></tr>";
		result+="<tr><td>Ouvriers</td><td>"+mE.ouvrier*mE.indice_ouvrier+"</td><td></td><td></td></tr>";
		result+="<tr><td colspan=2><font size='-1'><strong>Charges financières</strong></font></td><td></td><td></td></tr>";
		result+="<tr><td>Charges Fianancières</td><td>"+mE.chargeFinanciere+"</td><td></td><td></td></tr>";
		result+="<tr><td colspan=2><font size='-1'><strong>AmortissemEnt</strong></font></td><td></td><td></td></tr>";
		result+="</font></tbody>";
		result+="</table>";
		result+="</div></div></div>";
		return result
	},
	donneesEconomique:function(donne,pin,pays,regimE){
		//mis en place des données economiques
		//pays
		var result="<div class='panel panel-default'><div class='panel-heading'><h1>Données economiques</h1></div>";
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
		// language=HTML
        result+=`<tr><td>CFE</td><td>${mP.impots.cfe}% </td><td>${mP.impots.cfe} %</td><td>${mP.impots.cfe} %</td><td>${mP.impots.cfe} %</td><td>${mP.impots.cfe} %</td></tr>`;
		result+=`<tr><td>IS</td><td>${mP.impots.isImp} %</td><td>${mP.impots.isImp} %</td><td>${mP.impots.isImp} %</td><td>${mP.impots.isImp} %</td><td>${mP.impots.isImp} %</td></tr>`;
		result+=`<tr><td>IMF</td><td>${mP.impots.imf} %</td><td>${mP.impots.imf} %</td><td>${mP.impots.imf} %</td><td>${mP.impots.imf} %</td><td>${mP.impots.imf} %</td></tr>`;
		result+="<tr><td>IRVM</td><td>"+mP.impots.irvm+" %</td><td>"+mP.impots.irvm+" %</td><td>"+mP.impots.irvm+" %</td><td>"+mP.impots.irvm+" %</td><td>"+mP.impots.irvm+" %</td></tr>";
		result+="<tr><td>IRC</td><td>"+mP.impots.irc+" %</td><td>"+mP.impots.irc+" %</td><td>"+mP.impots.irc+" %</td><td>"+mP.impots.irc+" %</td><td>"+mP.impots.irc+" %</td></tr>";
		result+="<tr><td>TVA Petrole</td><td>"+mP.impots.tva_petrole+" %</td><td>"+mP.impots.tva_petrole+" %</td><td>"+mP.impots.tva_petrole+" %</td><td>"+mP.impots.tva_petrole+" %</td><td>"+mP.impots.tva_petrole+" %</td></tr>";
		result+="</tbody>";
		result+="</table>";
		return result;
	},
	amortissemEntHtml:function(){
		var result="<div class='panel panel-default'><div class='panel-body'>";
		result+=" <table class='table'><thead><tr><th colspan=3> Amortissement<th/></tr>";
		result+="<tr><th></th><th>Durée Linéaire</th><th>Coef dégressif</th></tr>";
		result+="</thead><tbody>";
		result+="<tr><td>Constructions</td><td>"+mP.ammort.construction+"</td><td>"+mP.ammort.coefdegressif+"</td></tr>";
		result+="<tr><td>Equipement</td><td>"+mP.ammort.equipement+"</td><td>"+mP.ammort.coefdegressif+"</td></tr>";
		result+="<tr><td>Camion</td><td>"+mP.ammort.camion+"</td><td>"+mP.ammort.coefdegressif+"</td></tr>";
		result+="<tr><td>Matériel informatique</td><td>"+mP.ammort.info+"</td><td>"+mP.ammort.coefdegressif+"</td></tr>";
		result+="<tr><td>Matériel de bureau</td><td>"+mP.ammort.bureau+"</td><td>"+mP.ammort.coefdegressif+"</td></tr>";
		result+="</tbody>";
		result+="</table>";
		result+="</div></div>";
		return result
	},
	amortiExcepHTML:function(){
		return "<p> Pour les amortissement exceptionnels, le taux depend de l'investissemEnts, il y a une limitation par rapport au bénéfice annuels et l'unité de la durée est l'année";
		
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
		var result="<div class='vertical-menu'><div class='panel panel-default '><div class='panel-heading'>Paramétres</div>";
		result+="<div class='panel-body'>";
		result+=donne+"</br>"+pin+"<br/>"+pays+"<br/>"+regime+"</br>";
		result+="</div></div>";

		result+="<a  class='btn btn-default' type='submit' href='./test.html'>voir test en cours</a>";
        result+="<a class='btn btn-default' href='./modele.html'>voir modele en cours</a>";
		result+="<a  id='retour' class='btn btn-default' value='back' href='./index.html' >retour</a></div>";
		return result
	},
	mainHTML:function(donne,pin,pays,regimE){
			donneRef(donne,pin,pays,regimE);
			mE=fabrique.entreprise(donne);
			localStorage.setItem('mE',mE);


			var randPays=mesPays();

			for(var i=0;i<randPays.length;i++){
				if(randPays[i].nom==pays){

					mP=randPays[i];
					localStorage.setItem('mP',mP);
					break;
					
				}

			}

			var result=this.bodyHtml(donne,pin,pays,regimE);
			result+="</div>";
			result+="<div class='col-sm-2'>";
			result+=this.navigationHtml(donne,pin,pays,regimE);
			result+="</div></div>";
			result+="</div></body></html>";
			//prompt(global)
		console.log(mP.nom);
			return result;
	},
	petroleHtml:function(taxeAjout){
        let html="<div class='panel panel-default'><div class='panel-body'>"
		html+="<table class='table'><tbody><tr>";
        //console.log(typeof "lol");
        html+="<td>Pétrole</td><td>FCFA</td>"
        for (var i=0;i<taxeAjout.petrole.length;i++){
			html+="<td>"+taxeAjout.petrole[i]+"</td>";

		}
		html+="</tr>";
        html+="<td>Taux</td><td>%</td>"
        for (var i=0;i<taxeAjout.taux.length;i++){
            html+="<td>"+taxeAjout.taux[i]+"</td>";

        }
        html+="</tr>";
        html+="<td>TVA Petrole</td><td>FCFA</td>"
        for (var i=0;i<taxeAjout.tva.length;i++){
            html+="<td>"+taxeAjout.tva[i]+"</td>"
        }
        html+="</tr></tbody></table></div></div>";

		return html;
	},
    chargeFinancierHtml:function(taxeAjout){
        let html="<div class='panel panel-default'><div class='panel-body'>"
        html+="<table class='table'><tbody><tr>";
        //console.log(typeof "lol");
        html+="<td>Charges financiéres</td><td>FCFA</td>"
        for (var i=0;i<taxeAjout.chargeFinance.length;i++){
            html+="<td>"+taxeAjout.chargeFinance[i]+"</td>";

        }
        html+="</tr>";
        html+="<td>Taux</td><td>%</td>"
        for (var i=0;i<taxeAjout.taux.length;i++){
            html+="<td>"+taxeAjout.taux[i]+"</td>";

        }
        html+="</tr>";
        html+="<td>IRC</td><td>FCFA</td>"
        for (var i=0;i<taxeAjout.irc.length;i++){
            html+="<td>"+taxeAjout.irc[i]+"</td>"
        }
        html+="</tr></tbody></table></div></div>";

        return html;
    },
	emploieHtml:function(monm){
        var html="<div class='panel panel-default'><div class='panel-body'><table class='table'>";
        html+="<tbody><tr><td>Salaire des cadres</td><td>FCFA</td>";
        for(var i=0;i<monm.employer.salaire_cadre.length;i++){
            html+="<td>"+monm.employer.salaire_cadre[i]+"</td>";
        }
        html+="</tr><tr><td>Salaire des secrétaires</td><td>FCFA</td>";
        for(var i=0;i<monm.employer.salaire_secretaire.length;i++){
            html+="<td>"+monm.employer.salaire_secretaire[i]+"</td>";
        }
        html+="</tr><tr><td>Salaire des ouvriers</td><td>FCFA</td>";
        for(var i=0;i<monm.employer.salaire_ouvrier.length;i++){
            html+="<td>"+monm.employer.salaire_ouvrier[i]+"</td>";
        }
        html+="</tr><tr><td>Masse Salariale</td><td>FCFA</td>";
        for(var i=0;i<monm.employer.masse_salarial.length;i++){
            html+="<td>"+monm.employer.masse_salarial[i]+"</td>";
        }
        html+="</tr><tr><td>Taux</td><td>%</td>";
        for(var i=0;i<monm.employer.tauxCfe.length;i++){
            html+="<td>"+monm.employer.tauxCfe[i]+"</td>";
        }
        html+="</tr><tr><td>CFE</td><td>FCFA</td>";
        for(var i=0;i<monm.employer.reel_CFE.length;i++){
            html+="<td>"+monm.employer.reel_CFE[i]+"</td>";
        }
        html+="</tr></tbody></table></div></div>";
        return html;
	},
	comptableHtml:function(monm){
		var html="<div class='panel panel-default'><div class='panel-body'><table class='table'>";
        html+="<tbody><tr><td>Vente</td><td>FCFA</td>";
        for(var i=0;i<monm.resultCompta.vente.length;i++){
            html+="<td>"+monm.resultCompta.vente[i]+"</td>";
        }
        html+="<tr><td>Achats</td><td>FCFA</td>";
        for(var i=0;i<monm.resultCompta.achats.length;i++){
            html+="<td>"+monm.resultCompta.achats[i]+"</td>";
        }
        html+="<tr><td>Pétrole</td><td>FCFA</td>";
        for(var i=0;i<monm.resultCompta.petrole.length;i++){
            html+="<td>"+monm.resultCompta.petrole[i]+"</td>";
        }
        html+="<tr><td>TVA pétrole</td><td>FCFA</td>";
        for(var i=0;i<monm.resultCompta.tva_petrole.length;i++){
            html+="<td>"+monm.resultCompta.tva_petrole[i]+"</td>";
        }

        html+="<tr><td>Dépenses administratives</td><td>FCFA</td>";
        for(var i=0;i<monm.resultCompta.depense_admin.length;i++){
            html+="<td>"+monm.resultCompta.depense_admin[i]+"</td>";
        }
        html+="<tr><td>Dépenses publicitaires</td><td>FCFA</td>";
        for(var i=0;i<monm.resultCompta.depense_pub.length;i++){
            html+="<td>"+monm.resultCompta.depense_pub[i]+"</td>";
        }
        html+="<tr><td>Dépenes d'entretien</td><td>FCFA</td>";
        for(var i=0;i<monm.resultCompta.depense_entretien.length;i++){
            html+="<td>"+monm.resultCompta.depense_entretien[i]+"</td>";
        }
        html+="<tr><td>Salaires des cadres</td><td>FCFA</td>";
        for(var i=0;i<monm.resultCompta.salaire_cadre.length;i++){
            html+="<td>"+monm.resultCompta.salaire_cadre[i]+"</td>";
        }
        html+="<tr><td>Salaires des secrétaires</td><td>FCFA</td>";
        for(var i=0;i<monm.resultCompta.salaire_secreataire.length;i++){
            html+="<td>"+monm.resultCompta.salaire_secreataire[i]+"</td>";
        }
        html+="<tr><td>Salaires des ouvriers</td><td>FCFA</td>";
        for(var i=0;i<monm.resultCompta.salaire_ouvrier.length;i++){
            html+="<td>"+monm.resultCompta.salaire_ouvrier[i]+"</td>";
        }
       /* console.log("reultat compta :\n");
	console.log(monm.resultCompta);*/
        html+="<tr><td>CFE</td><td>FCFA</td>";
        //console.log(monm.resultCompta);
        for(var i=0;i<monm.resultCompta.cfe.length;i++){
            html+="<td>"+monm.resultCompta.cfe[i]+"</td>";
        }
        html+="<tr><td>Charges financières</td><td>FCFA</td>";
        for(var i=0;i<monm.resultCompta.chargeFinanciere.length;i++){
            html+="<td>"+monm.resultCompta.chargeFinanciere[i]+"</td>";
        }
        html+="<tr><td>Amortissement</td><td>FCFA</td>";
        for(var i=0;i<monm.resultCompta.amortissement.length;i++){
            html+="<td>"+monm.resultCompta.amortissement[i]+"</td>";
        }
        html+="<tr><td>Bénéfice comptable</td><td>FCFA</td>";
        for(var i=0;i<monm.resultCompta.benefice_comptable.length;i++){
            html+="<td>"+monm.resultCompta.benefice_comptable[i]+"</td>";
        }
        html+="<tr><td>Taux de marge  avant IS/IMF</td><td>%CA</td>";
        for(var i=0;i<monm.resultCompta.taux_marge_avant__IS_ISMF.length;i++){
            html+="<td>"+Math.round(monm.resultCompta.taux_marge_avant__IS_ISMF[i]*10)/10+"</td>";
        }
        html+="</tr></tbody></table></div></div>";
        return html;
	},
	ammortExcepHtml:function (monm) {
		//console.log("on entre dans ammortExcep de generer vue");
        //console.log(monm);
        var html="<div class='panel panel-info'><div class='panel-heading'>";
		html+="<table class='table'><tbody>";
        html+="<tr><td>Investissement</td><td>FCFA</td><td>"+monm.ammortExcep.investissement+"</td>";
        html+="<tr><td>Taux</td><td>% Investissement</td><td>"+monm.ammortExcep.taux+"</td>";
        html+="<tr><td>Limitation</td><td>% Bénéfice comptable</td><td>"+monm.ammortExcep.limitation+"</td>"
        html+="<tr><td>Durée</td><td>Années</td><td>"+monm.ammortExcep.duree+"</td></tr></tbody></table></div><div class='panel-body'><table class='table'>"
        html+="<tbody><tr><td>Durée restante</td><td>Années</td>";
        for(var i=0;i<monm.ammortExcep.dureeTab.length;i++){
            html+="<td>"+monm.ammortExcep.dureeTab[i]+"</td>";
        }
        html+="<tr><td>Base amortissable</td><td>FCFA</td>";
        for(var i=0;i<monm.ammortExcep.baseAmorti.length;i++){
            html+="<td>"+monm.ammortExcep.baseAmorti[i]+"</td>";
        }
        html+="<tr><td>Charge d'amortissement</td><td>FCFA</td>";
        for(var i=0;i<monm.ammortExcep.chargeAmorti.length;i++){
            html+="<td>"+monm.ammortExcep.chargeAmorti[i]+"</td>";
        }
        html+="</tr></tbody></table></div></div>";
        return html;
    },
	resultatImpotHtml:function (monm) {
        var html="<div class='panel panel-default'><div class='panel-body'>";
        html+="<table class='table'><tbody>";
        html+="<tr><td>Bénéfice comptable</td><td>FCFA</td>";
        for(var i=0;i<monm.resultImpot.benCompta.length;i++){
            html+="<td>"+monm.resultImpot.benCompta[i]+"</td>";
        }
        html+="<tr><td>Amortissement exceptionnel</td><td>FCFA</td>";
        for(var i=0;i<monm.resultImpot.amortExep.length;i++){
            html+="<td>"+monm.resultImpot.amortExep[i]+"</td>";
        }
        html+="<tr><td>Bénéfice imposable</td><td>FCFA</td>";
        for(var i=0;i<monm.resultImpot.benImpo.length;i++){
            html+="<td>"+monm.resultImpot.benImpo[i]+"</td>";
        }
        html+="</tr></tbody></table></div></div>";
        return html;
    },
    getAmmortGenneralHtml:function(monm){
        var cpt=0;


        var html="<div class='panel panel-info'><div class=\"panel-heading\">Amortissement</div><div class=\"panel-body\">";
        html+="<table class='table'><thead></thead></thead><tbody><tr><td>Construction</td><td>FCFA</td>";
        for(var i=0;i<monm.amortissementGeneral.length;i++) {
            if (monm.amortissementGeneral[i] != "change") {
                html += "<td>" + monm.amortissementGeneral[i] + "</td>";
            }
            else {
                html += "</tr><tr>";
                switch (cpt){
                    case 0 :
                        html+="<td>Equipement</td><td>FCFA</td>";
                        break;
                    case 1 :
                        html+="<td>Camion</td><td>FCFA</td>";
                        break;
                    case 2 :
                        html+="<td>Informatique</td><td>FCFA</td>";
                        break;
                    case 3 :
                        html+="<td>Bureau</td><td>FCFA</td>";
                        break;
                    default:
                        html+="<td>Total</td><td>FCFA</td>";
                        break;
                }
                cpt++;
            }
        }
        html+="</tr></tbody></table></div></div>";


        return html;
    },
	impotSocieteHtml:function(monm){
		var entt=donne().mP;
        var html="<div class='panel panel-default'><div class='panel-body'>";
        html+="<table class='table'><tbody>";
        html+="<tr><td>Benefice imposable</td><td>FCFA</td>";
        for(var i=0;i<monm.resultImpot.benImpo.length;i++){
            html+="<td>"+monm.resultImpot.benImpo[i]+"</td>";
        }
        html+="</tr><tr><td>Taux</td><td>% bénéfice imposable</td>";
        //console.log(entt.impots.isImp);
        for(var i=0;i<monm.resultImpot.benImpo.length;i++){
            html+="<td>"+entt.impots.isImp+"</td>";
        }
        html+="</tr><tr><td>Bénéfice imposable</td><td>FCFA</td>";
        for(var i=0;i<monm.impotSociete.length;i++){
            html+="<td>"+monm.impotSociete[i]+"</td>";
        }
        html+="</tr></tbody></table></div></div>";
        return html;

	},
	impotForfaitHtml:function(monm){
        var entt=donne().mP;
        var html="<div class='panel panel-default'><div class='panel-body'>";
        html+="<table class='table'><tbody>";
        html+="<tr><td>Ventes</td><td>FCFA</td>";
        for(var i=0;i<monm.resultCompta.vente.length;i++){
            html+="<td>"+monm.resultCompta.vente[i]+"</td>";
        }
        html+="</tr><tr><td>Taux</td><td>%CA</td>";
        //console.log(entt.impots.isImp);
        for(var i=0;i<monm.resultImpot.benImpo.length;i++){
            html+="<td>"+entt.impots.imf+"</td>";
        }
        html+="</tr><tr><td>Bénéfice imposable</td><td>FCFA</td>";
        for(var i=0;i<monm.impotIMF.length;i++){
            html+="<td>"+monm.impotIMF[i]+"</td>";
        }
        html+="</tr></tbody></table></div></div>";
        return html;
	},
	isImfHtml:function(monm){
        var html="<div class='panel panel-default'><div class='panel-body'><table class='table'>";
        html+="<tbody>";
        html+="<tr><td>IS/IMF</td><td>FCFA</td>";
        for(var i=0;i<monm.isImf.length;i++){
            html+="<td>"+monm.isImf[i]+"</td>";
        }
        html+="<tr><td>Bénéfice après IS/IMF</td><td>FCFA</td>";
        for(var i=0;i<monm.resultCompta.benefice_comptable.length;i++){
            html+="<td>"+monm.resultCompta.benefice_comptable[i]+"</td>";
        }

        html+="</tr><tr><td>Taux de marge  aprés IS/IMF</td><td>%CA</td>";
        for(var i=0;i<monm.resultCompta.taux_marge_avant__IS_ISMF.length;i++){
            html+="<td>"+Math.round(monm.resultCompta.taux_marge_avant__IS_ISMF[i]*10)/10+"</td>";
        }
        html+="</tr></tbody></table></div></div>";
        return html;
	},
	impotRevenuValeurMobilieres:function(monm){
        var paus=donne().mP;
        var ent=donne().mE;
        var html="<div class='panel panel-default'><div class='panel-body'><table class='table'>";
        html+="<tbody>";
        html+="<tr><td>Bénéfice après IS/IMF</td><td>FCFA</td>"
        for(var i=0;i<monm.resultCompta.benefice_comptable.length;i++){
            html+="<td>"+monm.resultCompta.benefice_comptable[i]+"</td>";
        }
        html+="</tr><tr><td>Distribution anuelle</td><td>% des bénéfice après IS/IMF</td>";
        for(var i=0; i<5;i++){
        	html+="<td>"+ent.dividende+"</td>"
		}
        html+="</tr><tr><td>taux</td><td>% des bénéfice après IS/IMF</td>";
        for(var i=0; i<5;i++){
            html+="<td>"+paus.impots.irvm+"</td>";
        }
        html+="</tr><tr><td>IRVM</td><td>FCFA</td>";
        for(var i=0;i<monm.impotIRVM.length;i++){
        	//console.log(monm.impotIRVM[i]);
            html+="<td>"+monm.impotIRVM[i]+"</td>";
        }
        html+="</tr></tbody></table></div></div>";
        return html;
	},
	actualisationHtml:function (monm) {
        var html="<div class='panel panel-default'><div class='panel-body'><table class='table'>";
        html+="<tbody>";
        html+="<tr><td>Facteur d'actualisation</td>"
        for(var i=0;i<monm.actualisation.length;i++){
            html+="<td>"+monm.actualisation[i]+"</td>";
        }
        html+="</tr></tbody></table></div></div>";
        return html;

    },
	tabImpotEtTaxe:function(monm){
	    //console.log(monm)
	    //console.log("on rentre dans impot et taxe");
        var html="<div class='panel panel-default'><div class='panel-body'><table class='table'>";
        html+="<tbody>";
        html+="<tr><td>CFE</td><td>FCFA</td>"
        for(var i=0;i<monm.cfe.length;i++){
            html+="<td>"+monm.cfe[i]+"</td>";
        }
        html+="</tr><tr><td>IS/IMF</td><td>FCFA</td>"
        for(var i=0;i<monm.isimf.length;i++){
            html+="<td>"+monm.isimf[i]+"</td>";
        }
        html+="</tr><tr><td>IRVM</td><td>FCFA</td>"
        for(var i=0;i<monm.irvm.length;i++){
            html+="<td>"+monm.irvm[i]+"</td>";
        }
        html+="</tr><tr><td>IRC</td><td>FCFA</td>"
        for(var i=0;i<monm.irc.length;i++){
            html+="<td>"+monm.irc[i]+"</td>";
        }
        html+="</tr><tr><td>TVA Petrole</td><td>FCFA</td>"
        for(var i=0;i<monm.tvaPetrole.length;i++){
            html+="<td>"+monm.tvaPetrole[i]+"</td>";
        }
        html+="</tr><tr><td>Total</td><td>FCFA</td>"
        for(var i=0;i<monm.total.length;i++){
            html+="<td>"+monm.total[i]+"</td>";
        }
        html+="</tr></tbody></table></div></div>";
        return html;



	},
    tabTauxEffectifMoy:function(monm){
        //console.log(monm)
        //console.log("on rentre dans impot et taxe");
        var html="<div class='panel panel-default'><div class='panel-body'><table class='table'>";
        html+="<tbody>";
        html+="<tr><td>CFE</td><td>% flux de trésorie</td>"
        for(var i=0;i<monm.cfe.length;i++){
            html+="<td>"+monm.cfe[i]+"</td>";
        }
        html+="</tr><tr><td>IS/IMF</td><td>% flux de trésorie</td>"
        for(var i=0;i<monm.isimf.length;i++){
            html+="<td>"+monm.isimf[i]+"</td>";
        }
        html+="</tr><tr><td>IRVM</td><td>% flux de trésorie</td>"
        for(var i=0;i<monm.irvm.length;i++){
            html+="<td>"+monm.irvm[i]+"</td>";
        }
        html+="</tr><tr><td>IRC</td><td>% flux de trésorie</td>"
        for(var i=0;i<monm.irc.length;i++){
            html+="<td>"+monm.irc[i]+"</td>";
        }
        html+="</tr><tr><td>TVA Petrole</td><td>% flux de trésorie</td>"
        for(var i=0;i<monm.tvaPetrole.length;i++){
            html+="<td>"+monm.tvaPetrole[i]+"</td>";
        }
        html+="</tr><tr><td>Total</td><td>% flux de trésorie</td>"
        for(var i=0;i<monm.total.length;i++){
            html+="<td>"+monm.total[i]+"</td>";
        }
        html+="</tr></tbody></table></div></div>";
        return html;



    },
	tabFluxTresorie:function(tab){
        var html="<div class='panel panel-default'><div class='panel-body'><table class='table'>";
        html+="<tbody>";
        html+="<tr><td>Courants</td><td>FCFA</td>";
        for(var i=0;i<tab.courant.length;i++){
            html+="<td>"+tab.courant[i]+"</td>";
        }
        html+="</tr><tr><td>Actualisés</td><td>FCFA</td>"
        for(var i=0;i<tab.actu.length;i++){
            html+="<td>"+tab.actu[i]+"</td>";
        }
        html+="</tr></tbody></table></div></div>";
        return html;
    },
    tauxRendementInt:function(tab){
        var html="<div class='panel panel-default'><div class='panel-body'><table class='table'>";
        html+="<tbody>";
        html+="<tr><td>Courants</td><td>%</td>";
        for(var i=0;i<tab.length;i++){
            html+="<td>"+tab[i]+"</td>";
        }
        html+="</tr></tbody></table></div></div>";
        return html;
    }

};

