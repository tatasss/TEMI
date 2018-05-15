
let genererVue={
	mE : "lol",
	mP:"c'est mon pays",
	pibchoix:"lol",

	resultatHtml:function(regime){
		//mis en place du tableaux des resultat
		let impotStatDuree=[];
		if(regime==="gen"){
			for(let i=0; i<5;i++){
				impotStatDuree.push(" ");
			}
		}
		else{
			
		}
		let head="<thead><tr><th/><th colspan=3 align=center>Taux statuaire</th><th colspan=2>Taux effectifs moyens</th><th colspan=2>Taux effectifs marginaux</th></tr>";
        head+="<tr><th/><th>Taux plein</th><th>Taux reduit</th><th>Durée</th><th>First Year</th><th>Five Year</th><th>First Year</th><th>Five Year</th></tr></thead>";
        let cfe=this.recupDonneTab(modele().fluxeffMoyActualise.cfe,donne.pays.investissement.cfe,donne.pays.impots.cfe,false,false,false);
        let is=this.recupDonneTab(modele().fluxeffMoyActualise.isimf,donne.pays.investissement.isamort,donne.pays.impots.isImp,true,false,false);
        let imf=this.recupDonneTab(modele().fluxeffMoyActualise.isimf,donne.pays.investissement.imf,donne.pays.impots.imf,false,true,false);
        let irvm=this.recupDonneTab(modele().fluxeffMoyActualise.irvm,donne.pays.investissement.irvm,donne.pays.impots.irvm,false,false,false);
        let irc=this.recupDonneTab(modele().fluxeffMoyActualise.irc,donne.pays.investissement.irc,donne.pays.impots.irc,false,false,false);
        let tva=this.recupDonneTab(modele().fluxeffMoyActualise.tvaPetrole,donne.pays.investissement.tvaPetrole,donne.pays.impots.tva_petrole,false,false,false);
        let tot=this.recupDonneTab(modele().fluxeffMoyActualise.total,donne.pays.investissement.total,donne.pays.impots.imf,false,false,true);
        let bodyTest=bootstrap.tableSE([`CFE</td><td>${donne.pays.impots.cfe}</td>`,`IS<td>${this.mP.impots.isImp}</td>`,`IMF<td>${this.mP.impots.imf}</td>`,`IRVM<td>${this.mP.impots.irvm}</td>`,`IRC<td>${this.mP.impots.irc}</td>`,`TVA Petrole<td>${this.mP.impots.tva_petrole}</td>`,"total</td><td>"],head ,cfe,is,imf,irvm,irc,tva,tot);
        let pannelTab=bootstrap.pan("default",null,bodyTest);
        return bootstrap.pan("default", "<h1>Resultat</h1>", pannelTab);
		
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
            if (donne.regime !== "Gen") {
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
	pinbHTML:function(pays){

            result=`<p>Le PIB par tête dans le pays ${pays} est de : ${Math.round(this.mP.pib)} FCFA</p>`;
			this.pibchoix=this.mP.pib;
		return result;
	},
	entrepriseHTML:function(){
		let result="<p>L'entreprise simulée est supposée être localisée dans la plus grande ville du pays, employer "+(this.mE.cadre+this.mE.secretaire+this.mE.ouvrier)+" salariés et vendre la totalité de sa production sur le marché local. ";
		result+="<br/>Elles comporte donc "+this.mE.cadre+" cadre(s) dont l'indice salarial est de "+this.mE.indice_cadre;
		result+=" , "+this.mE.secretaire+" secrétaire(s) dont l'indice salarial est de "+this.mE.indice_secretaire;
		result+=" , "+this.mE.ouvrier+" ouvrier(s) dont l'indice salarial est de "+this.mE.indice_ouvrier + ".";
		result+="<br/>Elle verse "+this.mE.dividende+"% de ces bénéfices dans les dividendes";
		result+="<br/>Elle a un taux d'actualisation de "+this.mE.actuali+" %";
		result+="</p>";
		return result;
	},
	bilanHtml:function(){
		let actif=this.mE.terrain+this.mE.construction+this.mE.equipement+this.mE.camion+this.mE.info+this.mE.bureau+this.mE.stocks+this.mE.creanceCli+this.mE.dispoBanque;
		let passif=this.mE.capitalSocial+this.mE.detteLongTerme+this.mE.detteCourtTerme+this.mE.detteFournisseur;
		let col1=["<span style='font-size: smaller; '><strong>Actif immobilisé</strong></span>","Terrain","Constructions","Equipement","Camion","Matériel informatique","Matériel de Bureau","<span style='font-size: smaller; '><strong>Actif circulant</strong></span>","Stocks","Creances Clients","Disponibilités bancaires","<strong>Actif</strong>"];
		let lin1=[null,"<strong>Capitaux propre</strong>",null];
		let lin2=[this.mE.terrain,"Capital social",this.mE.capitalSocial];
		let lin3=[this.mE.construction,null,null];
		let lin4=[this.mE.equipement,null,null];
		let lin5=[this.mE.camion,null,null];
		let lin6=[this.mE.info,null,null];
		let lin7=[this.mE.bureau,null,null];
		let lin8=[null,"<strong><span style='font-size: smaller; '>Dettes</span></strong>",null];
		let lin9=[this.mE.stocks,"Dettes long terme",this.mE.detteLongTerme];
		let lin10=[this.mE.creanceCli,"Dettes court terme",this.mE.detteCourtTerme];
		let lin11=[this.mE.dispoBanque,"Dettes fournisseurs",this.mE.detteFournisseur];
		let lin12=[`<strong>${actif}</strong>`,"<strong>passif</strong>",passif];
		let head="<thead><tr><th colspan=3> Bilan à l'ouverture<th/><tr/><tr><th colspan=2>Actif</th><th colspan=2>Passif</th></tr></thead>";
		let tab=bootstrap.tableSE(col1,head,lin1,lin2,lin3,lin4,lin5,lin6,lin7,lin8,lin9,lin10,lin11,lin12);
        return bootstrap.pan("default", null, tab);
	},
	compteHtml:function(){
        let cote=["Achats","Petrole","Depenses administratives","Depenses publicitaires","Depences d'entretien","<strong>Impôts et taxes</strong>","<strong>Masse Salariale</strong>","Cadres","Secrétaires","Ouvriers","<strong>Charges financières</strong>","Charges financières","<strong>Amortissement</strong>"];
		let head="<thead><tr><th colspan=3> Compte de résultat<th/></tr><tr><th colspan=2>Charges</th><th colspan=2>Produit</th></tr></thead>";
		let lin0=[this.mE.achat,"Ventes",this.mE.vente];
		let lin1=[this.mE.petrole,null,null];
		let lin2=[this.mE.depenseAdministrative,null,null];
		let lin3=[this.mE.depensePub,null,null];
		let lin4=[this.mE.depenseEntretien,null,null];
		let lin5=[null,null,null];
		let lin6=[null,null,null];
		let lin7=[this.mE.cadre,null,null];
		let lin8=[this.mE.secretaire,null,null];
		let lin9=[this.mE.ouvrier,null,null];
		let lin10=[null,null,null];
		let lin11=[this.mE.chargeFinanciere,null,null];
		let lin12=[null,null,null];

		let tab=bootstrap.tableSE(cote,head,lin0,lin1,lin2,lin3,lin4,lin5,lin6,lin7,lin8,lin9,lin10,lin11,lin12);
        return bootstrap.pan("default", null, tab);
	},
	donneesEconomique:function(pin,pays){
		let result=this.pinbHTML(pin,pays);
		result+=this.entrepriseHTML();
		result+=this.bilanHtml();
		result+=this.compteHtml(donne);
        return bootstrap.pan("default", "<h1>Données economiques</h1>", result);
	},
    /**
     * @return {string}
     */
    ImpotHtml:function(monm){
        let head=" <thead><tr><th colspan=5> Impot<th/></tr>";
        head+="<tr><th/><th>1</th><th>2</th><th>3</th><th>4</th><th>5</th></tr>";
        head+="</thead>";
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
		let head="<thead><tr><th colspan=2> Amortissement<th/></tr><tr><th/><th>Durée Linéaire</th><th>Coef dégressif</th></tr></thead>";
		let cote=["Construction","Equipement","Camion","Matériel informatique","Matériel bureau"];
		let lin1=[this.mP.ammort.construction,this.mP.ammort.coefdegressif];
		let lin2=[this.mP.ammort.equipement,this.mP.ammort.coefdegressif];
		let lin3=[this.mP.ammort.camion,this.mP.ammort.coefdegressif];
		let lin4=[this.mP.ammort.info,this.mP.ammort.coefdegressif];
		let lin5=[this.mP.ammort.bureau,this.mP.ammort.coefdegressif];
		let tab=bootstrap.tableSE(cote,head,lin1,lin2,lin3,lin4,lin5);
        return bootstrap.pan("default", null, tab);
	},
    amortiExcepHTML: function () {
        return "<p> Pour les amortissements exceptionnels, le taux depend de l'investissement, il y a une limitation par rapport au bénéfice annuel et l'unité de la durée est l'année</p>";

    },
	donneesFiscal:function(){
		 //mis en place des données fiscales

		//fin
        let pannelBody=bootstrap.pan("default",null,this.ImpotHtml(modele()));
        pannelBody+=this.amortissemEntHtml();
        pannelBody+=this.amortiExcepHTML();
        return bootstrap.pan("default", "<h1>données fiscales</h1>", pannelBody) ;
	},
	bodyHtml:function(pin,pays,regimE){
		let bodyglo= this.resultatHtml(regimE);
		bodyglo+=this.donneesEconomique(pin,pays,regimE);
		bodyglo+=this.donneesFiscal();
		return bodyglo;
		
	},
	navigationHtml:function(pays,regimE,actu,marge){
		let regime;
		if (regimE==="gen"){
			regime="Régime général";
		}
		else{
			regime="Régime des investissements";
		}
		let pannel=bootstrap.pan("default","Paramétres",pays+"<br/>"+regime+"</br>"+actu+"</br>"+marge);
        let result="<div class='vertical-menu'>"+pannel;
		result+=bootstrap.buttonBalA("./graphique.html","voir graphique en cours");
        result+=bootstrap.buttonBalA("./modele.html","voir modele");
        result+=bootstrap.buttonBalA("./index.html","retour")+"</div>";
		return result;
	},
	mainHTML:function(pays,regimE,actu,marge){
            this.mP=donne.pays;
            this.mE=donne.entreprise;
        return bootstrap.container(bootstrap.GridNavCote(this.bodyHtml( pays, regimE), this.navigationHtml( pays, regimE, actu, marge)));
	},
	petroleHtml:function(taxeAjout){
        let cote=["Pétrole</td><td>FCFA","Taux</td><td>%","TVA Petrole</td><td>FCFA"];
        let tab=bootstrap.tableSE(cote,null,taxeAjout.petrole,taxeAjout.taux,taxeAjout.tva);
        return bootstrap.pan("default", null, tab);
	},
    chargeFinancierHtml:function(taxeAjout){
        let cote=["Charges financiéres</td><td>FCFA","Taux</td><td>%","IRC</td><td>FCFA"];
        let tab=bootstrap.tableSE(cote,null,taxeAjout.chargeFinance,taxeAjout.taux,taxeAjout.irc);
        return bootstrap.pan("default", null, tab);
    },
	emploieHtml:function(monm){
        let cote=["Salaire des cadres</td><td>FCFA","Salaire des secrétaires</td><td>FCFA","Salaire des ouvriers</td><td>FCFA"];
        cote.push("Masse Salariale</td><td>FCFA");
        cote.push("Taux</td><td>%");
        cote.push("CFE</td><td>FCFA");
        let tab=bootstrap.tableSE(cote,null,monm.employer.salaire_cadre,monm.employer.salaire_secretaire,monm.employer.salaire_ouvrier,monm.employer.masse_salarial,monm.employer.tauxCfe,monm.employer.reel_CFE);
        return bootstrap.pan("default", null, tab);
	},
	comptableHtml:function(monm){
		let cote=["Vente</td><td>FCFA"];
		cote.push("Achats</td><td>FCFA");
		cote.push("Pétrole</td><td>FCFA");
		cote.push("TVA pétrole</td><td>FCFA");
		cote.push("Dépenses administratives</td><td>FCFA");
		cote.push("Dépenses publicitaires</td><td>FCFA");
		cote.push("Dépenses Dépenes d'entretien</td><td>FCFA");
		cote.push("Salaires des cadres</td><td>FCFA");
		cote.push("Salaires des secrétaires</td><td>FCFA");
		cote.push("Salaires des ouvriers</td><td>FCFA");
		cote.push("CFE</td><td>FCFA");
		cote.push("Charges financières</td><td>FCFA");
		cote.push("Amortissement</td><td>FCFA");
		cote.push("Bénéfice comptable</td><td>FCFA");
		cote.push("Taux de marge  avant IS/IMF</td><td>%FA");
		let tauxMarge=[];
        for(let i=0;i<monm.resultCompta.taux_marge_avant__IS_ISMF.length;i++){
            tauxMarge.push(Math.round(monm.resultCompta.taux_marge_avant__IS_ISMF[i]*10)/10);
        }
		let tab=bootstrap.tableSE(cote,null,monm.resultCompta.vente,monm.resultCompta.achats,monm.resultCompta.petrole,monm.resultCompta.tva_petrole,
            monm.resultCompta.depense_admin,monm.resultCompta.depense_pub,monm.resultCompta.depense_entretien,
            monm.resultCompta.salaire_cadre,monm.resultCompta.salaire_secreataire,monm.resultCompta.salaire_ouvrier,
            monm.resultCompta.cfe,monm.resultCompta.chargeFinanciere,monm.resultCompta.amortissement,
            monm.resultCompta.benefice_comptable, tauxMarge);
        return bootstrap.pan("default",null,tab);
	},
	ammortExcepHtml:function (monm) {
		let coteHead=["Investissement</td><td>FCFA","Taux</td><td>% Investissement","Limitation</td><td>% Bénéfice comptable","Durée</td><td>Années"];
		let tabHead=bootstrap.tableSE(coteHead,null,[monm.ammortExcep.investissement],[monm.ammortExcep.taux],[monm.ammortExcep.limitation],[monm.ammortExcep.duree]);
		let coteBody=["Durée restante</td><td>Années","Base amortissable</td><td>FCFA","Charge d'amortissement</td><td>FCFA"];
		let tabBody=bootstrap.tableSE(coteBody,null,monm.ammortExcep.dureeTab,monm.ammortExcep.baseAmorti,monm.ammortExcep.chargeAmorti);
		return bootstrap.pan("info",tabHead,tabBody);
    },
	resultatImpotHtml:function (monm) {
        let cote=["Bénéfice comptable</td><td>FCFA","Amortissement exceptionnel</td><td>FCFA","Bénéfice imposable</td><td>FCFA"];
        let tab=bootstrap.tableSE(cote,null,monm.resultImpot.benCompta,monm.resultImpot.amortExep,monm.resultImpot.benImpo);
        return bootstrap.pan("default",null,tab);
    },
    getAmmortGenneralHtml:function(monm){
        let cpt=0;
        let tab="<table class='table'><thead/></thead><tbody><tr><td>Construction</td><td>FCFA</td>";
        for(let i=0;i<monm.amortissementGeneral.length;i++) {
            if (monm.amortissementGeneral[i] !== "change") {
                tab += `<td>${monm.amortissementGeneral[i]}</td>`;
            }
            else {
                tab += "</tr><tr>";
                switch (cpt){
                    case 0 :
                        tab+="<td>Equipement</td><td>FCFA</td>";
                        break;
                    case 1 :
                        tab+="<td>Camion</td><td>FCFA</td>";
                        break;
                    case 2 :
                        tab+="<td>Informatique</td><td>FCFA</td>";
                        break;
                    case 3 :
                        tab+="<td>Bureau</td><td>FCFA</td>";
                        break;
                    default:
                        tab+="<td>Total</td><td>FCFA</td>";
                        break;
                }
                cpt++;
            }
        }
        tab+="</tr></tbody></table>";
        return bootstrap.pan("info","Amortissment",tab);
    },
	impotSocieteHtml:function(monm){
        let is=[];
        let impSoc=[];
        for (let i=0;i<5;i++){
            is.push(monm.impotSelected.is);
            impSoc.push(Math.round(monm.impotSociete[i]));
        }
        let cote=["Benefice imposable</td><td>FCFA","Taux</td><td>% bénéfice imposable","IS</td><td>FCFA"];
        let tab=bootstrap.tableSE(cote,null,monm.resultImpot.benImpo,is,impSoc);
        return bootstrap.pan("default",null,tab);
	},
	impotForfaitHtml:function(monm){
        let imf=[];
        let impIMF=[];
        for (let i=0;i<5;i++){
            imf.push(monm.impotSelected.is);
            impIMF.push(Math.round(monm.impotIMF[i]));
        }
        let cote=["Ventes</td><td>FCFA","Taux</td><td>%CA","IMF</td><td>FCFA"];
        let tab=bootstrap.tableSE(cote,null,monm.resultCompta.vente,imf,impIMF);
        return bootstrap.pan("default",null,tab);
	},
	isImfHtml:function(monm){
        let impISIMF=[];
        for (let i=0;i<5;i++){
            impISIMF.push(Math.round(monm.resultCompta.taux_marge_avant__IS_ISMF[i]*10)/10);
        }
        let cote=["IS/IMF</td><td>FCFA","Bénéfice après IS/IMF</td><td>FCFA","Taux de marge  aprés IS/IMF</td><td>%CA"];
        let tab=bootstrap.tableSE(cote,null,monm.isImf,monm.resultCompta.benefice_comptable,impISIMF);
        return bootstrap.pan("default",null,tab);
	},
	impotRevenuValeurMobilieres:function(monm){
        let div=[];
        let irvm=[];
        for(let i=0; i<5;i++){
            div.push(donne.entreprise.dividende);
            irvm.push(donne.pays.impots.irvm);
        }
        let cote=["Bénéfice après IS/IMF</td><td>FCFA","Distribution anuelle</td><td>% des bénéfice après IS/IMF","taux</td><td>% des bénéfice après IS/IMF","IRVM</td><td>FCFA"];
        let tab=bootstrap.tableSE(cote,null,monm.resultCompta.benefice_comptable,div,irvm,monm.impotIRVM);
        return bootstrap.pan("default",null,tab);
	},
	actualisationHtml:function (monm) {
        let tab=bootstrap.tableSE(["actualisation"],null,monm.actualisation);
        return bootstrap.pan("default",null,tab);
    },
	tabImpotEtTaxe:function(monm){
        let cote=["CFE</td><td>FCFA","IS/IMF</td><td>FCFA","IRVM</td><td>FCFA","IRC</td><td>FCFA","TVA Petrole</td><td>FCFA","Total</td><td>FCFA"];
        let tab=bootstrap.tableSE(cote,null,monm.cfe,monm.isimf,monm.irvm,monm.irc,monm.tvaPetrole,monm.total);
        return bootstrap.pan("default",null,tab);
	},
    tabTauxEffectifMoy:function(monm){
        let cote=["CFE</td><td>% flux de trésorie","IS/IMF</td><td>% flux de trésorie","IRVM</td><td>% flux de trésorie","IRC</td><td>% flux de trésorie","TVA Petrole</td><td>% flux de trésorie","Total</td><td>% flux de trésorie"];
        let tab=bootstrap.tableSE(cote,null,monm.cfe,monm.isimf,monm.irvm,monm.irc,monm.tvaPetrole,monm.total);
       return bootstrap.pan("default",null,tab);
    },
	tabFluxTresorie:function(tab){
       let cote=["Courants</td><td>FCFA","Actualisés</td><td>FCFA"," "];
       let lol=[null,null,null,null,null,null,null,"Somme"];
       let mota=bootstrap.tableSE(cote,"<thead><tr><th/><th/><th/><th/><th/><th/><th/><th/><th>VAN</th></tr></thead>",tab.courant,tab.actu,lol);
       return bootstrap.pan("default",null,mota);
    },
    tauxRendementInt:function(tab){
        return bootstrap.pan("default",null,bootstrap.tableSE(["courants"],null,tab));
    }

};

