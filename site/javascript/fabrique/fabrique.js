var fabrique={
	pays: function(pIB,pNB,code,nom,impot,ammort,investissment){
		return {
			pib:pIB,
			pnb:pNB,
			code:code,
			nom:nom,
			impots:impot,
			ammort:ammort,
			investissement:investissment,
		};
	},
	impot:function(cFE,iS,iMF,iRVM,iRC,tVA_Petrole){
		return{
			cfe:cFE,
			isImp:iS,
			imf:iMF,
			irvm:iRVM,
			irc:iRC,
			tva_petrole:tVA_Petrole,
		}
	},
	ammortissement:function(construction,equipement,coefdegressif,camion,info,bureau){
		return{
			construction:construction,
			equipement:equipement,
			coefdegressif:coefdegressif,
			camion:camion,
			info:info,
			bureau:bureau,
		}
	},
	entreprise : function(donne){
		if(donne=="Djankov"){
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
				achat:875,
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
				actuali:8
			}
		}
		else{
			alert("pas encore fait")
		}
		return
		
	},
	investir:function(cfe,isammmort,imf,irvm){
		return{
			cfe:cfe,
			isamort:isammmort,
			imf:imf,
			irvm:irvm
		};
	},
	impotPays:function(duree,taux,reductonEcume){
		return{
			duree:duree,
			taux:taux,
			reducexo:reductonEcume
		};
	},
	isImpotPays:function(duree,taux,reductonEcume,ammortTauxEx,ammortLimit){
        return{
            duree:duree,
            taux:taux,
            reducexo:reductonEcume,
			ammortTauxEx:ammortTauxEx,
			ammortLimit:ammortLimit
        };
	},

	armortirModele:function(prix,durLin,coef,nom){
		var dureeRestante=[];
		var  baseAmortissable=[];
        var tauxLineaire=[];
        var tauxDegressif=[];
        var chargeAmorti=[];
        var purcent;
        var coefdegr;
        if(nom=="Equipement"){
        	coefdegr=coef;
		}
		else{
        	coefdegr=1;
		}
		dureeRestante.push(durLin);
		baseAmortissable.push(Math.trunc(prix));
		if(durLin>0){
			tauxLineaire.push(Math.round(((1/durLin)*100)*100)/100);
		}else{tauxLineaire.push(0);}
		if(durLin==0){
			tauxDegressif.push(0);
		}else {
			if(tauxLineaire[0]==100){
				tauxDegressif.push(100);
			}
			else{
				if(coefdegr*tauxLineaire[0]>tauxLineaire[0]){
					tauxDegressif.push(Math.round((coefdegr*(tauxLineaire[0]))*100)/100);
				}
				else{
                    tauxDegressif.push(tauxLineaire[0])
				}
			}
		}
		chargeAmorti.push(Math.trunc(baseAmortissable[0]*(tauxDegressif[0]/100)));
		for(var i=1; i<5;i++){

			if(dureeRestante[i-1]>0){
					dureeRestante.push(dureeRestante[i-1]-1);
			}
			else{
				dureeRestante.push(0);
			}
			baseAmortissable.push(Math.trunc(baseAmortissable[i-1]-chargeAmorti[i-1]));
			if(dureeRestante[i]>0){
				tauxLineaire.push(Math.round(((1/dureeRestante[i])*100)*100)/100);
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
</div>*/
				var html="<div class='panel panel-info'><div class=\"panel-heading\">"
				html+="<table class='table'><thead><tr><th>"+this.nom+"</th><th>FCFA</th><th>"+this.baseAmortissable[0]+"</th></tr></thead>";
				html+="<tbody><tr><td>Durée linéaire</td><td>Année</td><td>"+this.dureeRestante[0]+"</td></tr>";
            	html+="<tr><td>Coef dégréssif</td><td>Coef</td><td>"+coefdegr+"</td></tr></tbody></table>";
            	html+="</div> <div class='panel-body'>"
                html+="<table class='table'><thead><tr><th>Durée restante</th><th>Annee</th>";
                for(var i=0;i<5;i++){
                    html+="<th>"+this.dureeRestante[i]+"</th>";
                }
                html+="</thead><tbody><tr><td>Base amortissable</td><td>FCFA</td>";
                for(var i=0;i<5;i++){
                    html+="<td>"+this.baseAmortissable[i]+"</td>";
                }
                html+="</tr><tr><td>Taux unitaire</td><td>%</td>"
                for(var i=0;i<5;i++){
                    html+="<td>"+this.tauxLineaire[i]+"</td>";
                }
                html+="</tr><tr><td>Taux dégréssif</td><td>%</td>";
                for(var i=0;i<5;i++){
                    html+="<td>"+this.tauxDegressif[i]+"</td>";
                }
                html+="</tr><tr><td>Charge amortissement</td><td>FCFAS</td>";
                for(var i=0;i<5;i++){
                    html+="<td>"+this.chargeAmorti[i]+"</td>";
                }
                html+="</tr></tbody></table></div></div>";
                return html;
			}
		};
	},
};
function mesPays(){
	var Pays=[];
    var ben=fabrique.investir(fabrique.impotPays(null,null,null),fabrique.isImpotPays(5,null,100,null,null),fabrique.impotPays(null,null,null),fabrique.impotPays(null,null,null));
	var bfa=fabrique.investir(fabrique.impotPays(5,null,100),fabrique.isImpotPays(5,null,null,50,50),fabrique.impotPays(null,null,null),fabrique.impotPays(null,null,null));
	var cmr=fabrique.investir(fabrique.impotPays(null,null,null),fabrique.isImpotPays(5,null,50,null,null),fabrique.impotPays(null,null,null),fabrique.impotPays(5,null,50));
	var caf=fabrique.investir(fabrique.impotPays(null,null,null),fabrique.isImpotPays(3,null,100,null,null),fabrique.impotPays(null,null,null),fabrique.impotPays(null,null,null));
	var cog=fabrique.investir(fabrique.impotPays(null,null,null),fabrique.isImpotPays(3,null,100,null,null),fabrique.impotPays(null,null,null),fabrique.impotPays(null,null,null));
	var civ=fabrique.investir(fabrique.impotPays(7,2.7,null),fabrique.isImpotPays(7,null,100,null,null),fabrique.impotPays(null,null,null),fabrique.impotPays(null,null,null));
    var gab=fabrique.investir(fabrique.impotPays(null,null,null),fabrique.isImpotPays(5,null,100,null,null),fabrique.impotPays(null,null,null),fabrique.impotPays(null,null,null));
	var mli=fabrique.investir(fabrique.impotPays(null,null,null),fabrique.isImpotPays(7,25,null,null,null),fabrique.impotPays(null,null,null),fabrique.impotPays(null,null,null));
    var ner=fabrique.investir(fabrique.impotPays(null,null,null),fabrique.isImpotPays(null,null,null,null,null),fabrique.impotPays(6,null,100),fabrique.impotPays(null,null,null));
    var sen=fabrique.investir(fabrique.impotPays(5,null,100),fabrique.isImpotPays(5,null,null,40,50),fabrique.impotPays(null,null,null),fabrique.impotPays(null,null,null));
    var tcd=fabrique.investir(fabrique.impotPays(null,null,null),fabrique.isImpotPays(5,null,100,null,null),fabrique.impotPays(5,null,100),fabrique.impotPays(null,null,null));
    var tgo=fabrique.investir(fabrique.impotPays(5,2,null),fabrique.isImpotPays(2,40,50,null,null),fabrique.impotPays(null,null,null),fabrique.impotPays(null,null,null));
    Pays.push(fabrique.pays(446686.610403263,443922.063555894,"BEN","Benin",fabrique.impot(4,30,0.75,10,15,18),fabrique.ammortissement(20,10,2.5,3,2,10),ben));
	Pays.push(fabrique.pays(352538.787047328,348520.408267351,"BFA","Burkina Faso",fabrique.impot(3,27.5,0.5,12.5,25,18),fabrique.ammortissement(20,10,2.5,3,2,10),bfa));
	Pays.push(fabrique.pays(695841.358548324,689556.462319832,"CMR","Cameroun",fabrique.impot(2.5,33,2.2,16.5,16.5,19.25),fabrique.ammortissement(20,10,1,3,4,10),cmr));
	Pays.push(fabrique.pays(177266.484115533,178004.935333146,"CAF","Republique Centraficaine",fabrique.impot(0,30,1.85,15,15,19),fabrique.ammortissement(20,10,1,3,4,10),caf));
	Pays.push(fabrique.pays(1555959.36758179,1288336.46183605,"COG","Republique du Congo",fabrique.impot(7.5,30,1,15,15,18.9),fabrique.ammortissement(20,10,1,3,4,10),cog));
	Pays.push(fabrique.pays(764337.037161964,734803.305020822,"CIV","Côte d'Ivoire",fabrique.impot(2.8,25,0.5,15,18,9),fabrique.ammortissement(20,5,2,3,2,10),civ));
	Pays.push(fabrique.pays(5325868.9119871,4714968.57762138,"GAB","Gabon",fabrique.impot(5,30,1,20,20,18),fabrique.ammortissement(20,10,1,3,4,10),gab));
	Pays.push(fabrique.pays(280739.989103106,280507.620772524,"GNB","Guinée Bissao","pas d'impot","pas d'ammortissement","pas d'investissment"));
	Pays.push(fabrique.pays(9353479.8395634,4755006.03129549,"GNQ","Guinée équatoriale","pas d'impot","pas d'ammortissement","pas d'investissment"));
	Pays.push(fabrique.pays(348319.045959615,328489.97164378,"MLI","Mali",fabrique.impot(7.5,30,1,10,13,18),fabrique.ammortissement(20,10,2.5,3,2,10),mli));
	Pays.push(fabrique.pays(211299.740610518,205366.832074831,"NER","Niger",fabrique.impot(3,30,1.5,10,20,19),fabrique.ammortissement(20,10,1,4,2,10),ner));
	Pays.push(fabrique.pays(527605.945821168,520918.056941268,"SEN","Sénégal",fabrique.impot(3,30,0.5,10,16,18),fabrique.ammortissement(20,10,2.5,3,2,10),sen));
	Pays.push(fabrique.pays(506611.404253741,481513.982465513,"TCD","Tchad",fabrique.impot(8.7,35,1.5,20,20,18),fabrique.ammortissement(20,10,1,3,3,10),tcd));
	Pays.push(fabrique.pays(313975.411596333,282665.90659975,"TGO","Togo",fabrique.impot(3,29,1,13,6,18),fabrique.ammortissement(20,10,2.5,3,2,10),tgo));
	return Pays;
}
