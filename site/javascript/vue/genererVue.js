
let bootstrap=new BootstrapVue();
let genererVue={
	mE : "lol",
	mP:"c'est mon pays",
	pibchoix:"lol",

	resultatHtml:function(regime){
		//mis en place du tableaux des resultat
		let result="<div class='panel panel-default'><div class='panel-heading'><h1>Resultat</h1></div>";
		let impotStatDuree=[];
		if(regime=="gen"){
			for(let i=0; i<5;i++){
				impotStatDuree.push(" ");
			}
		}
		else{
			
		}
		result+="<div class='panel-body'>";
		result+="<div class='panel panel-default'><div class='panel-body'>";
		let head="<thead><tr><th></th><th colspan=3 align=center>Taux statuaire</th><th colspan=2>Taux effectifs moyens</th><th colspan=2>Taux effectifs marginaux</th></tr>";
        head+="<tr><th></th><th>Taux plein</th><th>Taux reduit</th><th>Durée</th><th>First Year</th><th>Five Year</th><th>First Year</th><th>Five Year</th></tr></thead>";
        let cfe=this.recupDonneTab(modele().fluxeffMoyActualise.cfe,donne.get().mP.investissement.cfe,donne.get().mP.impots.cfe,false,false,false);
        let is=this.recupDonneTab(modele().fluxeffMoyActualise.isimf,donne.get().mP.investissement.isamort,donne.get().mP.impots.isImp,true,false,false);
        let imf=this.recupDonneTab(modele().fluxeffMoyActualise.isimf,donne.get().mP.investissement.imf,donne.get().mP.impots.imf,false,true,false);
        let irvm=this.recupDonneTab(modele().fluxeffMoyActualise.irvm,donne.get().mP.investissement.irvm,donne.get().mP.impots.irvm,false,false,false);
        let irc=this.recupDonneTab(modele().fluxeffMoyActualise.irc,donne.get().mP.investissement.irc,donne.get().mP.impots.irc,false,false,false);
        let tva=this.recupDonneTab(modele().fluxeffMoyActualise.tvaPetrole,donne.get().mP.investissement.tvaPetrole,donne.get().mP.impots.tva_petrole,false,false,false);
        let tot=this.recupDonneTab(modele().fluxeffMoyActualise.total,donne.get().mP.investissement.total,donne.get().mP.impots.imf,false,false,true);
        let bodyTest=bootstrap.tableSE(["CFE</td><td>"+donne.get().mP.impots.cfe+"</td>","IS<td>"+mP.impots.isImp+"</td>","IMF<td>"+mP.impots.imf+"</td>","IRVM<td>"+mP.impots.irvm+"</td>","IRC<td>"+mP.impots.irc+"</td>","TVA Petrole<td>"+mP.impots.tva_petrole+"</td>","total</td><td>"],head ,cfe,is,imf,irvm,irc,tva,tot);
        result+=bodyTest
		result+="</div></div></div></div>";
		//fin du tableaux*/
		return result;
		
	},
    recupDonneTab:function(effMoy,impDonne,donneImp,isIs,isImf,isTot){
        let result=[];
        if(isTot){
            result.push(null);
            result.push(null);
            result.push( effMoy[0]);
            result .push(effMoy[effMoy.length - 1]);
            result.push(modele().tauxEffMargImpApImp[0]);
            result.push(modele().tauxEffMargImpApImp[modele().tauxEffMargImpApImp.length-1]);
            return result;
        }
        else {
            if (donne.get().regime !== "Gen") {
                if (impDonne.taux != null) {
                    result .push(impDonne.taux);
                }
                else {
                    if (impDonne.reducexo != null) {
                        result.push( ((1 - (impDonne.reducexo / 100)) * (donneImp / 100)) * 100);
                        // console.log(donneImp);
                    }
                    else{
                        result.push(null);
                        result.push(null);
                    }
                }
                if (impDonne.taux != null || impDonne.reducexo != null) {
                    result .push(impDonne.duree);
                }
            }
            if (isIs) {
                result.push(effMoy[0]);
                result.push(effMoy[effMoy.length - 1]);
                result.push(modele().tauxEffMargImpApIsImf[0]);
                result.push(modele().tauxEffMargImpApIsImf[modele().tauxEffMargImpApIsImf.length - 1]);
            }
            else {
                if (!isImf) {
                    result.push(effMoy[0]);
                    result.push( effMoy[effMoy.length - 1]);
                    result.push(null);
                    result.push(null);
                }
            }
            return result;
        }
    },
	pinbHTML:function(pin,pays){
		let result;
		if(pin==="PIB/Tete"){
			// language=HTML
            result=`<p>Le PIB par tête dans le pays ${pays} est de : ${mP.pib} FCFA</p>`;
			pibchoix=mP.pib
		}
		else{
			result=`<p>Le PNB par tête dans le pays ${pays} est de :${mP.pnb} FCFA</p>`;
			pibchoix=mP.pnb;
		}

		return result;
	},
	entrepriseHTML:function(){
		let result="<p>L'entreprise simulée est supposée être localisée dans la plus grande ville du pays, employer "+"60"+" salariés et vendre la totalité de sa production sur le marché local. ";
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
		let actif=mE.terrain+mE.construction+mE.equipement+mE.camion+mE.info+mE.bureau+mE.stocks+mE.creanceCli+mE.dispoBanque;
		let passif=mE.capitalSocial+mE.detteLongTerme+mE.detteCourtTerme+mE.detteFournisseur;
		let result="<div class='panel panel-default'><div class='panel-body'>";
		let col1=["<font size='-1'><strong>Actif immobilisé</strong></font>","Terrain","Constructions","Equipement","Camion","Matériel informatique","Matériel de Bureau","<font size='-1'><strong>Actif circulant</strong></font>","Stocks","Creances Clients","Disponibilités bancaires","<strong>Actif</strong>"];
		let lin1=[null,"<strong>Capitaux propre</strong>",null];
		let lin2=[mE.terrain,"Capital social",mE.capitalSocial];
		let lin3=[mE.construction,null,null];
		let lin4=[mE.equipement,null,null];
		let lin5=[mE.camion,null,null];
		let lin6=[mE.info,null,null];
		let lin7=[mE.bureau,null,null];
		let lin8=[null,"<strong><font size='-1'>Dettes</strong>",null];
		let lin9=[mE.stocks,"Dettes long terme",mE.detteLongTerme];
		let lin10=[mE.creanceCli,"Dettes court terme",mE.detteCourtTerme];
		let lin11=[mE.dispoBanque,"Dettes fournisseurs",mE.detteFournisseur];
		let lin12=["<strong>"+actif+"</strong>","<strong>passif</strong>",passif];
		let head="<thead><tr><th colspan=4> Bilan à l'ouverture<th/><tr/><tr><th colspan=2>Actif</th><th colspan=2>Passif</th></tr></thead>";
		result+=bootstrap.tableSE(col1,head,lin1,lin2,lin3,lin4,lin5,lin6,lin7,lin8,lin9,lin10,lin11,lin12)
		result+="</div></div>";
		return result;
	},
	compteHtml:function(donne){
        let cote=["Achats","Petrole","Depenses administratives","Depenses publicitaires","Depences d'entretien","<strong>Impôts et taxes</strong>","<strong>Masse Salariale</strong>","Cadres","Secrétaires","Ouvriers","<strong>Charges financières</strong>","Charges financières","<strong>Amortissement</strong>"]
		let result="<div class='panel panel-default'><div class='panel-body'>";
		let head="<thead><tr><th colspan=4> Compte de résultat<th/></tr><tr><th colspan=2>Charges</th><th colspan=2>Produit</th></tr></thead>";
		let lin0=[mE.achat,"Ventes",mE.vente];
		let lin1=[mE.petrole,null,null];
		let lin2=[mE.depenseAdministrative,null,null];
		let lin3=[mE.depensePub,null,null];
		let lin4=[mE.depenseEntretien,null,null];
		let lin5=[null,null,null];
		let lin6=[null,null,null];
		let lin7=[mE.cadre,null,null];
		let lin8=[mE.secretaire,null,null];
		let lin9=[mE.ouvrier,null,null];
		let lin10=[null,null,null];
		let lin11=[mE.chargeFinanciere,null,null];
		let lin12=[null,null,null];

		result+=bootstrap.tableSE(cote,head,lin0,lin1,lin2,lin3,lin4,lin5,lin6,lin7,lin8,lin9,lin10,lin11,lin12);
		result+="</div></div></div>";
		return result;
	},
	donneesEconomique:function(pin,pays,regimE){
		//mis en place des données economiques
		//pays
		let result="<div class='panel panel-default'><div class='panel-heading'><h1>Données economiques</h1></div>";
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
    /**
     * @return {string}
     */
    ImpotHtml:function(monm){
        let head=" <thead><tr><th colspan=6> Impot<th/></tr>";
        head+="<tr><th></th><th>1</th><th>2</th><th>3</th><th>4</th><th>5</th></tr>";
        head+="</thead>";
        // language=HTML
        let cfe=[];
        let is=[];
        let imf=[];
        let irvm=[];
        let irc=[];
        let tva=[];
        for (let i=0;i<5;i++){
            cfe.push(monm.impotSelected.cfe +"%");
            is.push(monm.impotSelected.is+"%");
            imf.push(monm.impotSelected.imf+"%");
            irvm.push(monm.impotSelected.irvm+"%");
            irc.push(monm.impotSelected.irc+"%");
            tva.push(monm.impotSelected.tvaPetrole+"%");
        }
        let cote=["CFE","IS","IMF","IRVM","IRC","TVA Petrole"];
        return bootstrap.tableSE(cote,head,cfe,is,imf,irvm,irc,tva);
    },
	amortissemEntHtml:function(){
		let result="<div class='panel panel-default'><div class='panel-body'>";
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
		return result;
	},
    amortiExcepHTML: function () {
        return "<p> Pour les amortissement exceptionnels, le taux depend de l'investissemEnts, il y a une limitation par rapport au bénéfice annuels et l'unité de la durée est l'année";

    },
	donneesFiscal:function(){
		 //mis en place des données fiscales
		let result="<div class='panel panel-default'><div class='panel-heading'><h1>données fiscales</h1></div>";
		result+="<div class='panel-body'>";
		result+="<div class='panel panel-default'><div class='panel-body'>";
		result+=this.ImpotHtml(modele());
		result+="</div></div>";
		 //tableau amortissemEnt
		result+=this.amortissemEntHtml();
		//amortissemEnt exceptionnel
		result+=this.amortiExcepHTML();
		result+="</div>";
		//fin
		return result;
	},
	bodyHtml:function(pin,pays,regimE){
		let bodyglo= "<div class='container'><div class='row'><div class='col-sm-10'>"+this.resultatHtml(regimE);
		bodyglo+=this.donneesEconomique(pin,pays,regimE);
		bodyglo+=this.donneesFiscal()+"</div>";
		return bodyglo;
		
	},
	navigationHtml:function(pin,pays,regimE,actu,marge){
		let regime;
		if (regimE="gen"){
			regime="Régime général";
		}
		else{
			regime="Régime des investissements";
		}
		let result="<div class='vertical-menu'><div class='panel panel-default '><div class='panel-heading'>Paramétres</div>";
		result+="<div class='panel-body'>";
		result+=pin+"<br/>"+pays+"<br/>"+regime+"</br>"+actu+"</br>"+marge;
		result+="</div></div>";

		result+="<a  class='btn btn-default' type='submit' href='./test.html'>voir test en cours</a>";
        result+="<a class='btn btn-default' href='./modele.html'>voir modele en cours</a>";
		result+="<a  id='retour' class='btn btn-default' value='back' href='./index.html' >retour</a></div>";
		return result
	},
	mainHTML:function(pin,pays,regimE,actu,marge){
            mP=donne.get().mP;
            mE=donne.get().mE;


			let result=this.bodyHtml(pin,pays,regimE);
			result+="</div>";
			result+="<div class='col-sm-2'>";
			result+=this.navigationHtml(pin,pays,regimE,actu,marge);
			result+="</div></div>";
			result+="</div></body></html>";
			//prompt(global)
		//console.log(mP.nom);
			return result;
	},
	petroleHtml:function(taxeAjout){
        let html="<div class='panel panel-default'><div class='panel-body'>"
		html+="<table class='table'><tbody><tr>";
        let cote=["Pétrole</td><td>FCFA","Taux</td><td>%","TVA Petrole</td><td>FCFA"];
        html+=bootstrap.tableSE(cote,null,taxeAjout.petrole,taxeAjout.taux,taxeAjout.tva);
        html+="</div></div>";

		return html;
	},
    chargeFinancierHtml:function(taxeAjout){
        let html="<div class='panel panel-default'><div class='panel-body'>"
        html+="<table class='table'><tbody><tr>";
        //console.log(typeof "lol");
        html+="<td>Charges financiéres</td><td>FCFA</td>"
        for (let i=0;i<taxeAjout.chargeFinance.length;i++){
            html+="<td>"+taxeAjout.chargeFinance[i]+"</td>";

        }
        html+="</tr>";
        html+="<td>Taux</td><td>%</td>"
        for (let i=0;i<taxeAjout.taux.length;i++){
            html+="<td>"+taxeAjout.taux[i]+"</td>";

        }
        html+="</tr>";
        html+="<td>IRC</td><td>FCFA</td>"
        for (let i=0;i<taxeAjout.irc.length;i++){
            html+="<td>"+taxeAjout.irc[i]+"</td>"
        }
        html+="</tr></tbody></table></div></div>";

        return html;
    },
	emploieHtml:function(monm){
        let html="<div class='panel panel-default'><div class='panel-body'><table class='table'>";
        html+="<tbody><tr><td>Salaire des cadres</td><td>FCFA</td>";
        for(let i=0;i<monm.employer.salaire_cadre.length;i++){
            html+="<td>"+monm.employer.salaire_cadre[i]+"</td>";
        }
        html+="</tr><tr><td>Salaire des secrétaires</td><td>FCFA</td>";
        for(let i=0;i<monm.employer.salaire_secretaire.length;i++){
            html+="<td>"+monm.employer.salaire_secretaire[i]+"</td>";
        }
        html+="</tr><tr><td>Salaire des ouvriers</td><td>FCFA</td>";
        for(let i=0;i<monm.employer.salaire_ouvrier.length;i++){
            html+="<td>"+monm.employer.salaire_ouvrier[i]+"</td>";
        }
        html+="</tr><tr><td>Masse Salariale</td><td>FCFA</td>";
        for(let i=0;i<monm.employer.masse_salarial.length;i++){
            html+="<td>"+monm.employer.masse_salarial[i]+"</td>";
        }
        html+="</tr><tr><td>Taux</td><td>%</td>";
        for(let i=0;i<monm.employer.tauxCfe.length;i++){
            html+="<td>"+monm.employer.tauxCfe[i]+"</td>";
        }
        html+="</tr><tr><td>CFE</td><td>FCFA</td>";
        for(let i=0;i<monm.employer.reel_CFE.length;i++){
            html+="<td>"+monm.employer.reel_CFE[i]+"</td>";
        }
        html+="</tr></tbody></table></div></div>";
        return html;
	},
	comptableHtml:function(monm){
		let html="<div class='panel panel-default'><div class='panel-body'><table class='table'>";
        html+="<tbody><tr><td>Vente</td><td>FCFA</td>";
        for(let i=0;i<monm.resultCompta.vente.length;i++){
            html+="<td>"+monm.resultCompta.vente[i]+"</td>";
        }
        html+="<tr><td>Achats</td><td>FCFA</td>";
        for(let i=0;i<monm.resultCompta.achats.length;i++){
            html+="<td>"+monm.resultCompta.achats[i]+"</td>";
        }
        html+="<tr><td>Pétrole</td><td>FCFA</td>";
        for(let i=0;i<monm.resultCompta.petrole.length;i++){
            html+="<td>"+monm.resultCompta.petrole[i]+"</td>";
        }
        html+="<tr><td>TVA pétrole</td><td>FCFA</td>";
        for(let i=0;i<monm.resultCompta.tva_petrole.length;i++){
            html+="<td>"+monm.resultCompta.tva_petrole[i]+"</td>";
        }

        html+="<tr><td>Dépenses administratives</td><td>FCFA</td>";
        for(let i=0;i<monm.resultCompta.depense_admin.length;i++){
            html+="<td>"+monm.resultCompta.depense_admin[i]+"</td>";
        }
        html+="<tr><td>Dépenses publicitaires</td><td>FCFA</td>";
        for(let i=0;i<monm.resultCompta.depense_pub.length;i++){
            html+="<td>"+monm.resultCompta.depense_pub[i]+"</td>";
        }
        html+="<tr><td>Dépenes d'entretien</td><td>FCFA</td>";
        for(let i=0;i<monm.resultCompta.depense_entretien.length;i++){
            html+="<td>"+monm.resultCompta.depense_entretien[i]+"</td>";
        }
        html+="<tr><td>Salaires des cadres</td><td>FCFA</td>";
        for(let i=0;i<monm.resultCompta.salaire_cadre.length;i++){
            html+="<td>"+monm.resultCompta.salaire_cadre[i]+"</td>";
        }
        html+="<tr><td>Salaires des secrétaires</td><td>FCFA</td>";
        for(let i=0;i<monm.resultCompta.salaire_secreataire.length;i++){
            html+="<td>"+monm.resultCompta.salaire_secreataire[i]+"</td>";
        }
        html+="<tr><td>Salaires des ouvriers</td><td>FCFA</td>";
        for(let i=0;i<monm.resultCompta.salaire_ouvrier.length;i++){
            html+="<td>"+monm.resultCompta.salaire_ouvrier[i]+"</td>";
        }
       /* console.log("reultat compta :\n");
	console.log(monm.resultCompta);*/
        html+="<tr><td>CFE</td><td>FCFA</td>";
        //console.log(monm.resultCompta);
        for(let i=0;i<monm.resultCompta.cfe.length;i++){
            html+="<td>"+monm.resultCompta.cfe[i]+"</td>";
        }
        html+="<tr><td>Charges financières</td><td>FCFA</td>";
        for(let i=0;i<monm.resultCompta.chargeFinanciere.length;i++){
            html+="<td>"+monm.resultCompta.chargeFinanciere[i]+"</td>";
        }
        html+="<tr><td>Amortissement</td><td>FCFA</td>";
        for(let i=0;i<monm.resultCompta.amortissement.length;i++){
            html+="<td>"+monm.resultCompta.amortissement[i]+"</td>";
        }
        html+="<tr><td>Bénéfice comptable</td><td>FCFA</td>";
        for(let i=0;i<monm.resultCompta.benefice_comptable.length;i++){
            html+="<td>"+monm.resultCompta.benefice_comptable[i]+"</td>";
        }
        html+="<tr><td>Taux de marge  avant IS/IMF</td><td>%CA</td>";
        for(let i=0;i<monm.resultCompta.taux_marge_avant__IS_ISMF.length;i++){
            html+="<td>"+Math.round(monm.resultCompta.taux_marge_avant__IS_ISMF[i]*10)/10+"</td>";
        }
        html+="</tr></tbody></table></div></div>";
        return html;
	},
	ammortExcepHtml:function (monm) {
		//console.log("on entre dans ammortExcep de generer vue");
        //console.log(monm);
        let html="<div class='panel panel-info'><div class='panel-heading'>";
		html+="<table class='table'><tbody>";
        html+="<tr><td>Investissement</td><td>FCFA</td><td>"+monm.ammortExcep.investissement+"</td>";
        html+="<tr><td>Taux</td><td>% Investissement</td><td>"+monm.ammortExcep.taux+"</td>";
        html+="<tr><td>Limitation</td><td>% Bénéfice comptable</td><td>"+monm.ammortExcep.limitation+"</td>"
        html+="<tr><td>Durée</td><td>Années</td><td>"+monm.ammortExcep.duree+"</td></tr></tbody></table></div><div class='panel-body'><table class='table'>"
        html+="<tbody><tr><td>Durée restante</td><td>Années</td>";
        for(let i=0;i<monm.ammortExcep.dureeTab.length;i++){
            html+="<td>"+monm.ammortExcep.dureeTab[i]+"</td>";
        }
        html+="<tr><td>Base amortissable</td><td>FCFA</td>";
        for(let i=0;i<monm.ammortExcep.baseAmorti.length;i++){
            html+="<td>"+monm.ammortExcep.baseAmorti[i]+"</td>";
        }
        html+="<tr><td>Charge d'amortissement</td><td>FCFA</td>";
        for(let i=0;i<monm.ammortExcep.chargeAmorti.length;i++){
            html+="<td>"+monm.ammortExcep.chargeAmorti[i]+"</td>";
        }
        html+="</tr></tbody></table></div></div>";
        return html;
    },
	resultatImpotHtml:function (monm) {
        let html="<div class='panel panel-default'><div class='panel-body'>";
        html+="<table class='table'><tbody>";
        html+="<tr><td>Bénéfice comptable</td><td>FCFA</td>";
        for(let i=0;i<monm.resultImpot.benCompta.length;i++){
            html+="<td>"+monm.resultImpot.benCompta[i]+"</td>";
        }
        html+="<tr><td>Amortissement exceptionnel</td><td>FCFA</td>";
        for(let i=0;i<monm.resultImpot.amortExep.length;i++){
            html+="<td>"+monm.resultImpot.amortExep[i]+"</td>";
        }
        html+="<tr><td>Bénéfice imposable</td><td>FCFA</td>";
        for(let i=0;i<monm.resultImpot.benImpo.length;i++){
            html+="<td>"+monm.resultImpot.benImpo[i]+"</td>";
        }
        html+="</tr></tbody></table></div></div>";
        return html;
    },
    getAmmortGenneralHtml:function(monm){
        let cpt=0;


        let html="<div class='panel panel-info'><div class=\"panel-heading\">Amortissement</div><div class=\"panel-body\">";
        html+="<table class='table'><thead></thead></thead><tbody><tr><td>Construction</td><td>FCFA</td>";
        for(let i=0;i<monm.amortissementGeneral.length;i++) {
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
		let entt=donne.get().mP;
        let html="<div class='panel panel-default'><div class='panel-body'>";
        html+="<table class='table'><tbody>";
        html+="<tr><td>Benefice imposable</td><td>FCFA</td>";
        for(let i=0;i<monm.resultImpot.benImpo.length;i++){
            html+="<td>"+monm.resultImpot.benImpo[i]+"</td>";
        }
        html+="</tr><tr><td>Taux</td><td>% bénéfice imposable</td>";
        console.log(monm);
        for(let i=0;i<monm.resultImpot.benImpo.length;i++){
            html+="<td>"+monm.impotSelected.is+"</td>";
        }
        html+="</tr><tr><td>Bénéfice imposable</td><td>FCFA</td>";
        for(let i=0;i<monm.impotSociete.length;i++){
            html+="<td>"+monm.impotSociete[i]+"</td>";
        }
        html+="</tr></tbody></table></div></div>";
        return html;

	},
	impotForfaitHtml:function(monm){
       // let entt=donne.get().mP;
        let html="<div class='panel panel-default'><div class='panel-body'>";
        html+="<table class='table'><tbody>";
        html+="<tr><td>Ventes</td><td>FCFA</td>";
        for(let i=0;i<monm.resultCompta.vente.length;i++){
            html+="<td>"+monm.resultCompta.vente[i]+"</td>";
        }
        html+="</tr><tr><td>Taux</td><td>%CA</td>";
        //console.log(entt.impots.isImp);
        for(let i=0;i<monm.resultImpot.benImpo.length;i++){
            html+="<td>"+monm.impotSelected.imf+"</td>";
        }
        html+="</tr><tr><td>Bénéfice imposable</td><td>FCFA</td>";
        for(let i=0;i<monm.impotIMF.length;i++){
            html+="<td>"+monm.impotIMF[i]+"</td>";
        }
        html+="</tr></tbody></table></div></div>";
        return html;
	},
	isImfHtml:function(monm){
        let html="<div class='panel panel-default'><div class='panel-body'><table class='table'>";
        html+="<tbody>";
        html+="<tr><td>IS/IMF</td><td>FCFA</td>";
        for(let i=0;i<monm.isImf.length;i++){
            html+="<td>"+monm.isImf[i]+"</td>";
        }
        html+="<tr><td>Bénéfice après IS/IMF</td><td>FCFA</td>";
        for(let i=0;i<monm.resultCompta.benefice_comptable.length;i++){
            html+="<td>"+monm.resultCompta.benefice_comptable[i]+"</td>";
        }

        html+="</tr><tr><td>Taux de marge  aprés IS/IMF</td><td>%CA</td>";
        for(let i=0;i<monm.resultCompta.taux_marge_avant__IS_ISMF.length;i++){
            html+="<td>"+Math.round(monm.resultCompta.taux_marge_avant__IS_ISMF[i]*10)/10+"</td>";
        }
        html+="</tr></tbody></table></div></div>";
        return html;
	},
	impotRevenuValeurMobilieres:function(monm){
        let paus=donne.get().mP;
        let ent=donne.get().mE;
        let html="<div class='panel panel-default'><div class='panel-body'><table class='table'>";
        html+="<tbody>";
        html+="<tr><td>Bénéfice après IS/IMF</td><td>FCFA</td>"
        for(let i=0;i<monm.resultCompta.benefice_comptable.length;i++){
            html+="<td>"+monm.resultCompta.benefice_comptable[i]+"</td>";
        }
        html+="</tr><tr><td>Distribution anuelle</td><td>% des bénéfice après IS/IMF</td>";
        for(let i=0; i<5;i++){
        	html+="<td>"+ent.dividende+"</td>"
		}
        html+="</tr><tr><td>taux</td><td>% des bénéfice après IS/IMF</td>";
        for(let i=0; i<5;i++){
            html+="<td>"+paus.impots.irvm+"</td>";
        }
        html+="</tr><tr><td>IRVM</td><td>FCFA</td>";
        for(let i=0;i<monm.impotIRVM.length;i++){
        	//console.log(monm.impotIRVM[i]);
            html+="<td>"+monm.impotIRVM[i]+"</td>";
        }
        html+="</tr></tbody></table></div></div>";
        return html;
	},
	actualisationHtml:function (monm) {
        let html="<div class='panel panel-default'><div class='panel-body'><table class='table'>";
        html+="<tbody>";
        html+="<tr><td>Facteur d'actualisation</td>"
        for(let i=0;i<monm.actualisation.length;i++){
            html+="<td>"+monm.actualisation[i]+"</td>";
        }
        html+="</tr></tbody></table></div></div>";
        return html;

    },
	tabImpotEtTaxe:function(monm){
	    //console.log(monm)
	    //console.log("on rentre dans impot et taxe");
        let html="<div class='panel panel-default'><div class='panel-body'><table class='table'>";
        html+="<tbody>";
        html+="<tr><td>CFE</td><td>FCFA</td>"
        for(let i=0;i<monm.cfe.length;i++){
            html+="<td>"+monm.cfe[i]+"</td>";
        }
        html+="</tr><tr><td>IS/IMF</td><td>FCFA</td>"
        for(let i=0;i<monm.isimf.length;i++){
            html+="<td>"+monm.isimf[i]+"</td>";
        }
        html+="</tr><tr><td>IRVM</td><td>FCFA</td>"
        for(let i=0;i<monm.irvm.length;i++){
            html+="<td>"+monm.irvm[i]+"</td>";
        }
        html+="</tr><tr><td>IRC</td><td>FCFA</td>"
        for(let i=0;i<monm.irc.length;i++){
            html+="<td>"+monm.irc[i]+"</td>";
        }
        html+="</tr><tr><td>TVA Petrole</td><td>FCFA</td>"
        for(let i=0;i<monm.tvaPetrole.length;i++){
            html+="<td>"+monm.tvaPetrole[i]+"</td>";
        }
        html+="</tr><tr><td>Total</td><td>FCFA</td>"
        for(let i=0;i<monm.total.length;i++){
            html+="<td>"+monm.total[i]+"</td>";
        }
        html+="</tr></tbody></table></div></div>";
        return html;



	},
    tabTauxEffectifMoy:function(monm){
        //console.log(monm)
        //console.log("on rentre dans impot et taxe");
        let html="<div class='panel panel-default'><div class='panel-body'><table class='table'>";
        html+="<tbody>";
        html+="<tr><td>CFE</td><td>% flux de trésorie</td>"
        for(let i=0;i<monm.cfe.length;i++){
            html+="<td>"+monm.cfe[i]+"</td>";
        }
        html+="</tr><tr><td>IS/IMF</td><td>% flux de trésorie</td>"
        for(let i=0;i<monm.isimf.length;i++){
            html+="<td>"+monm.isimf[i]+"</td>";
        }
        html+="</tr><tr><td>IRVM</td><td>% flux de trésorie</td>"
        for(let i=0;i<monm.irvm.length;i++){
            html+="<td>"+monm.irvm[i]+"</td>";
        }
        html+="</tr><tr><td>IRC</td><td>% flux de trésorie</td>"
        for(let i=0;i<monm.irc.length;i++){
            html+="<td>"+monm.irc[i]+"</td>";
        }
        html+="</tr><tr><td>TVA Petrole</td><td>% flux de trésorie</td>"
        for(let i=0;i<monm.tvaPetrole.length;i++){
            html+="<td>"+monm.tvaPetrole[i]+"</td>";
        }
        html+="</tr><tr><td>Total</td><td>% flux de trésorie</td>"
        for(let i=0;i<monm.total.length;i++){
            html+="<td>"+monm.total[i]+"</td>";
        }
        html+="</tr></tbody></table></div></div>";
        return html;



    },
	tabFluxTresorie:function(tab){
        let html="<div class='panel panel-default'><div class='panel-body'><table class='table'>";
        html+="<tbody>";
        html+="<tr><td>Courants</td><td>FCFA</td>";
        for(let i=0;i<tab.courant.length;i++){
            html+="<td>"+tab.courant[i]+"</td>";
        }
        html+="</tr><tr><td>Actualisés</td><td>FCFA</td>"
        for(let i=0;i<tab.actu.length;i++){
            html+="<td>"+tab.actu[i]+"</td>";
        }
        html+="</tr></tbody></table></div></div>";
        return html;
    },
    tauxRendementInt:function(tab){
        let html="<div class='panel panel-default'><div class='panel-body'><table class='table'>";
        html+="<tbody>";
        html+="<tr><td>Courants</td><td>%</td>";
        for(let i=0;i<tab.length;i++){
            html+="<td>"+tab[i]+"</td>";
        }
        html+="</tr></tbody></table></div></div>";
        return html;
    }

};

