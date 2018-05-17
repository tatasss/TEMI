Fabrique.prototype.pibFind= function(code){
	var pib=0;
	var xhr=getXMLHttpRequest();
	if(localStorage.getItem("xmlPib : "+code)!==undefined){
        if(localStorage.getItem("xmlPib : "+code)!==null){
			return parseFloat(localStorage.getItem("xmlPib : "+code))*582.79;
        }
	}
	xhr.onreadystatechange = function() {

		if (xhr.readyState == 4 && (xhr.status == 200)) {

		   // console.log( xhr.responseXML.getElementsByTagName("wb:data")[0].childNodes[3].childNodes[5].firstChild.nodeValue.toString());
			//monPib=readPib(xhr.responseXML);
			try {
				if(xhr.responseXML.getElementsByTagName("wb:data")[0].childNodes[3].childNodes[5].firstChild.nodeValue.toString()===code){
					if( localStorage.getItem("xmlPib : "+code)===xhr.responseXML.getElementsByTagName("wb:data")[0].childNodes[5].childNodes[9].firstChild.nodeValue.toString()){
						return
					}
					localStorage.setItem("xmlPib : "+xhr.responseXML.getElementsByTagName("wb:data")[0].childNodes[3].childNodes[5].firstChild.nodeValue.toString(), xhr.responseXML.getElementsByTagName("wb:data")[0].childNodes[5].childNodes[9].firstChild.nodeValue.toString());

				}


				//console.log(xhr.responseXML.getElementsByTagName("wb:data")[0].childNodes[3].childNodes[9].firstChild.nodeValue.toString());
			}catch (e) {
				console.log("Une erreur XML de l'api de workbank est apparu");
			}
			// noinspection JSAnnotator
			return;
			//console.log(xhr.responseXML.getElementsByTagName("wb:data")[0].childNodes[3].childNodes[9].firstChild.nodeValue.toString());
		}
	};
	//console.log(localStorage.getItem("xmlPib : "+code));

	//console.log(monPib);
	try{
		xhr.open("GET", "http://api.worldbank.org/v2/countries/"+code+"/indicators/NY.GDP.PCAP.CD", true);
		xhr.send(null);
	}
	catch (e) {

	}


	//console.log("http://api.worldbank.org/v2/countries/"+code+"/indicators/NY.GDP.MKTP.CD" + "--> "+cpt );

	if(pib===0){
		pib=parseFloat(localStorage.getItem("xmlPib : "+code))*582.79;
	}
	 return pib;

};
Fabrique.prototype.pays= function(code,nom,impot,ammort,investissment){

	return {
		pib:this.pibFind(code),
		code:code,
		nom:nom,
		impots:impot,
		ammort:ammort,
		investissement:investissment,
	};
};
Fabrique.prototype.impot=function(cFE,iS,iMF,iRVM,iRC,tVA_Petrole){
	return{
		cfe:cFE,
		isImp:iS,
		imf:iMF,
		irvm:iRVM,
		irc:iRC,
		tva_petrole:tVA_Petrole,
	}
};
Fabrique.prototype.ammortissement=function(construction,equipement,coefdegressif,camion,info,bureau){
	return{
		construction:construction,
		equipement:equipement,
		coefdegressif:coefdegressif,
		camion:camion,
		info:info,
		bureau:bureau,
	}
};
Fabrique.prototype.entreprise = function(actu,marge){

	/*if(data=="Djankov"){*/
		return{
			nom:"Djankov",
			terrain:30,
			construction:40,
			equipement:60,
			camion:5,
			info:5,
			bureau:5,
			stocks:35,
			creanceCli:50,
			dispoBanque:20,
			capitalSocial:102,
			detteLongTerme:43,
			detteCourtTerme:55,
			detteFournisseur:50,
			achat:Math.round(1050/(1+marge/100)),
			petrole:0,
			depenseAdministrative:10,
			depensePub:10.5,
			depenseEntretien:3,
			chargeFinanciere:5.5,
			vente:1050,
			cadre:4,
			secretaire:8,
			ouvrier:48,
			indice_cadre:2.25,
			indice_secretaire:1.25,
			indice_ouvrier:1,
			dividende:50,
			actuali:actu
		}
	/*}
	else{
		alert("pas encore fait")
	}
	return
	*/
};
Fabrique.prototype.investir=function(cfe,isammmort,imf,irvm,irc,tvaPetrole){
	return{
		cfe:cfe,
		isamort:isammmort,
		imf:imf,
		irvm:irvm,
		irc:irc,
		tvaPetrole:tvaPetrole
	};
};
Fabrique.prototype.impotPays=function(duree,taux,reductonEcume){
	return{
		duree:duree,
		taux:taux,
		reducexo:reductonEcume
	};
};
Fabrique.prototype.isImpotPays=function(duree,taux,reductonEcume,ammortTauxEx,ammortLimit){
	return{
		duree:duree,
		taux:taux,
		reducexo:reductonEcume,
		ammortTauxEx:ammortTauxEx,
		ammortLimit:ammortLimit
	};
};

Fabrique.prototype.armortirModele=function(prix,durLin,coef,nom){
	var dureeRestante=[];
	var  baseAmortissable=[];
	var tauxLineaire=[];
	var tauxDegressif=[];
	var chargeAmorti=[];
	var purcent;
	var coefdegr;
	if(nom==="Equipement"){
		coefdegr=coef;
	}
	else{
		coefdegr=1;
	}
	dureeRestante.push(durLin);
	baseAmortissable.push(Math.round(prix));
	if(durLin>0){
		tauxLineaire.push(((1/durLin)*100));
	}else{tauxLineaire.push(0);}
	if(durLin===0){
		tauxDegressif.push(0);
	}else {
		if(tauxLineaire[0]===100){
			tauxDegressif.push(100);
		}
		else{
			if(coefdegr*tauxLineaire[0]>tauxLineaire[0]){
				tauxDegressif.push((coefdegr*(tauxLineaire[0])));
			}
			else{
				tauxDegressif.push(tauxLineaire[0])
			}
		}
	}
	chargeAmorti.push(Math.round(baseAmortissable[0]*(tauxDegressif[0]/100)));
	for(var i=1; i<5;i++){

		if(dureeRestante[i-1]>0){
				dureeRestante.push(dureeRestante[i-1]-1);
		}
		else{
			dureeRestante.push(0);
		}
		baseAmortissable.push(baseAmortissable[i-1]-chargeAmorti[i-1]);
		if(dureeRestante[i]>0){
			tauxLineaire.push(((1/dureeRestante[i])*100));
		}
		else{
				tauxLineaire.push(0);
		}
		if(dureeRestante[i]==0){
			tauxDegressif.push(0);
		}
		else{
			if(coefdegr*tauxLineaire[0]>100){
				tauxDegressif.push(100);
			}
			else{
				if(coefdegr*tauxLineaire[0]>tauxLineaire[i]){
					tauxDegressif.push(Math.round((durLin*coefdegr)*100)/100);
				}
				else{
					tauxDegressif.push(tauxLineaire[i]);
				}
			}
		}
		purcent=tauxDegressif[i]/100;

		chargeAmorti.push(Math.trunc(baseAmortissable[i]*purcent));
	}

	return{
		dureeRestante:dureeRestante,
		baseAmortissable:baseAmortissable,
		tauxLineaire:tauxLineaire,
		tauxDegressif:tauxDegressif,
		chargeAmorti:chargeAmorti,
		nom:nom,
		getHtml:function(){
			/*<div class='panel panel-default'>
<div class="panel-heading">Panel Heading</div>
<div class="panel-body">Panel Content</div>
</div>*/		var cote2=["Base amortissable</td><td>FCFA","Taux unitaire</td><td>%","Taux dégréssif</td><td>%","Charge amortissement</td><td>FCFAS"];
			var html="<div class='panel panel-info'><div class=\"panel-heading\">";
			var cote1=["Durée linéaire</td><td>Année","Coef dégréssif</td><td>Coef"];
			var head="<thead><tr><th>"+this.nom+"</th><th>FCFA</th><th class='blue'>"+this.baseAmortissable[0]+"</th></tr></thead>";
			html+=bootstrap.tableSE(cote1,head,{tab:[this.dureeRestante[0]],color:"yellow"},{tab:[coefdegr],color:"yellow"});
			html+="</div> <div class='panel-body'>"
			var head2="<thead><tr><th>Durée restante</th><th>Annee</th>";
			for(var i=0;i<5;i++){
				head2+="<th>"+this.dureeRestante[i]+"</th>";
			}
			head2+="</thead>";
			var tauxLin=[];
			var tauxDegr=[];
			for(var i=0;i<this.tauxLineaire.length;i++){
				tauxLin.push(Math.round(this.tauxLineaire[i]*100)/100);
				tauxDegr.push(Math.round(this.tauxDegressif[i]*100)/100);
			}
			html+=bootstrap.tableSE(cote2,head2,{tab:this.baseAmortissable,color:""},{tab:tauxLin,color:""},{tab:tauxDegr,color:""},{tab:this.chargeAmorti,color:""});
			html+="</div></div>";
			return html;
		}
	};
};


