
modele= function(){
    var mE=donne().mE;
    var mP=donne().mP;
    var pibchoix= donne().pibChoisi;
	var investissement=modeleManager.investissementModele(mE,pibchoix);
	var amortissement=modeleManager.ammortissment(mE,mP,pibchoix);
	var generalAmort=modeleManager.ammortGen(amortissement);
    var taxeValAjout=modeleManager.taxe_val_ajout(mE,mP,pibchoix);
    var employer=modeleManager.contributioForfEmploie(mE,mP,pibchoix);
	//-------------------------------
	//amortissement exceptionnel
	var invesAmortex;
	var tauxAmortEx;
	var limitationEx;
	var duree;
	//Un tableau
	//Taxe maintenant


    return{
    	investissement:investissement,
		amortissement:amortissement,
        taxeAjout:taxeValAjout,
		employer:employer,
		getAmmortHtml:function(){
    		var cpt=0;

            var html="<div class='panel panel-info'><div class=\"panel-heading\">ammortissement</div><div class=\"panel-body\">";
			html+="<table class='table'><thead></thead></thead><tbody><tr><td>Construction</td><td>FCFA</td>";
			for(var i=0;i<generalAmort.length;i++) {
                if (generalAmort[i] != "change") {
                    html += "<td>" + generalAmort[i] + "</td>";
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
                            html+="<td>informatique</td><td>FCFA</td>";
                            break;
                        case 3 :
                            html+="<td>bureau</td><td>FCFA</td>";
                            break;
                        /*default:
                            html+="<td>Equipement</td><td>FCFA</td>";
                            break;*/
					}
					cpt++;
                }
            }
            html+="</tr></tbody></table></div></div>";


		return html;
		}
	}

	
	
}
