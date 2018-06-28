function createDebutPAys(){
    sessionStorage.clear();
    let pays = [];
    let ben = maker.investir(maker.impotPays(null, null, null), maker.isImpotPays(5, null, 100, null, null), maker.impotPays(null, null, null), maker.impotPays(null, null, null), maker.impotPays(null, null, null), maker.impotPays(null, null, null));
    let bfa = maker.investir(maker.impotPays(5, null, 100), maker.isImpotPays(5, null, null, 50, 50), maker.impotPays(null, null, null), maker.impotPays(null, null, null), maker.impotPays(null, null, null), maker.impotPays(null, null, null));
    let cmr = maker.investir(maker.impotPays(null, null, null), maker.isImpotPays(5, null, 50, null, null), maker.impotPays(null, null, null), maker.impotPays(5, null, 50), maker.impotPays(null, null, null), maker.impotPays(null, null, null));
    let caf = maker.investir(maker.impotPays(null, null, null), maker.isImpotPays(3, null, 100, null, null), maker.impotPays(null, null, null), maker.impotPays(null, null, null), maker.impotPays(null, null, null), maker.impotPays(null, null, null));
    let cog = maker.investir(maker.impotPays(null, null, null), maker.isImpotPays(3, null, 100, null, null), maker.impotPays(null, null, null), maker.impotPays(null, null, null), maker.impotPays(null, null, null), maker.impotPays(null, null, null));
    let civ = maker.investir(maker.impotPays(7, 2.2, null), maker.isImpotPays(7, null, 100, null, null), maker.impotPays(null, null, null), maker.impotPays(null, null, null), maker.impotPays(null, null, null), maker.impotPays(null, null, null));
    let gab = maker.investir(maker.impotPays(null, null, null), maker.isImpotPays(5, null, 100, null, null), maker.impotPays(null, null, null), maker.impotPays(null, null, null), maker.impotPays(null, null, null), maker.impotPays(null, null, null));
    let mli = maker.investir(maker.impotPays(null, null, null), maker.isImpotPays(7, 25, null, null, null), maker.impotPays(null, null, null), maker.impotPays(null, null, null), maker.impotPays(null, null, null), maker.impotPays(null, null, null));
    let ner = maker.investir(maker.impotPays(null, null, null), maker.isImpotPays(null, null, null, null, null), maker.impotPays(6, null, 100), maker.impotPays(null, null, null), maker.impotPays(null, null, null), maker.impotPays(null, null, null));
    let sen = maker.investir(maker.impotPays(5, null, 100), maker.isImpotPays(5, null, null, 40, 50), maker.impotPays(null, null, null), maker.impotPays(null, null, null), maker.impotPays(null, null, null), maker.impotPays(null, null, null));
    let tcd = maker.investir(maker.impotPays(null, null, null), maker.isImpotPays(5, null, 100, null, null), maker.impotPays(5, null, 100), maker.impotPays(null, null, null), maker.impotPays(null, null, null), maker.impotPays(null, null, null));
    let tgo = maker.investir(maker.impotPays(5, 2, null), maker.isImpotPays(5, null, 2, 40, 50), maker.impotPays(null, null, null), maker.impotPays(null, null, null), maker.impotPays(null, null, null), maker.impotPays(null, null, null));
    pays.push(maker.land("BEN", "Bénin", maker.impot(4, 30, 0.75, 10, 15, 18), maker.ammortissement(20, 10, 2.5, 3, 2, 10), ben, "Exonération d’IS pendant 5 ans", "Code des investissements <br/>régime A<br/> zone 1\n"));
    pays.push(maker.land("BFA", "Burkina Faso", maker.impot(3, 27.5, 0.5, 12.5, 25, 18), maker.ammortissement(20, 10, 2.5, 3, 2, 10), bfa, "– Exonération de la taxe patronale d’apprentissage pendant 5 ans.\n" +
        "– Déduction d’IS pendant 5 ans, à hauteur de 50% de l’investissement, dans la limite de 50% du bénéfice imposable.\n", "Code des investissements\n" +
        "<br/>régime A<br/> zone normale,<br/>" +
        "bien que le seuil d’investissement de 100 millions de FCFA ne soit pas atteint.\n"));
    pays.push(maker.land("CMR", "Cameroun", maker.impot(2.5, 33, 2.2, 16.5, 16.5, 19.25), maker.ammortissement(20, 10, 1, 3, 4, 10), cmr, "– Réduction de 50% de l’IS pendant 5 ans.\n" +
        "– Réduction de 50% de l’IRVM sur les dividendes pendant 5 ans\n", "Modalités d’application des incitations à l’investissement privé" +
        "<br/>catégorie A"));
    pays.push(maker.land("CAF", "République Centraficaine", maker.impot(0, 30, 1.85, 15, 15, 19), maker.ammortissement(20, 10, 1, 3, 4, 10), caf, "Exonération d’IS pendant 3 ans", "Charte des investissements\n" +
        "<br/>zone normale.\n"));
    pays.push(maker.land("COG", "République du Congo", maker.impot(7.5, 30, 1, 15, 15, 18.9), maker.ammortissement(20, 10, 1, 3, 4, 10), cog, "– Exonération d’IS pendant 3 ans.", "Modalités d’application de la charte des investissements\n" +
        "<br/>régime général G<br/> zone unique<br/>"));
    pays.push(maker.land("CIV", "Côte d Ivoire", maker.impot(2.8, 25, 0.5, 15, 18, 9), maker.ammortissement(20, 5, 2, 3, 2, 10), civ, "– Réduction de 50% de la contribution nationale pour le développement économique, culturel et social de la nation pendant 7 ans.,– Exonération d’IS pendant 7 ans.", "Code des investissements\n" +
        "<br/>régime d’agrément élargi aux PME<br/> zone A.\n"));
    pays.push(maker.land("GAB", "Gabon", maker.impot(5, 30, 1, 20, 20, 18), maker.ammortissement(20, 10, 1, 3, 4, 10), gab, "Exonération d’IS pendant 5 ans.", "Promotion des PME et PMI,<br/>" +
        "bien que le chiffre d’affaires annuel dépasse 2 milliards de FCFA.\n"));
    pays.push(maker.land("MLI", "Mali", maker.impot(7.5, 30, 1, 10, 13, 18), maker.ammortissement(20, 10, 2.5, 3, 2, 10), mli, "Taux réduit d’IS (25% au lieu de 30%) pendant 7 ans.", "Code des investissements\n" +
        "<br/>régime A<br/>zone unique\n"));
    pays.push(maker.land("NER", "Niger", maker.impot(3, 30, 1.5, 10, 20, 19), maker.ammortissement(20, 10, 1, 4, 2, 10), ner, "Exonération d’IMF pendant 6 ans", "Code des investissements\n" +
        "<br/>régime promotionnel<br/>\n" +
        "zone normale"));
    pays.push(maker.land("SEN", "Sénégal", maker.impot(3, 30, 0.5, 10, 16, 18), maker.ammortissement(20, 10, 2.5, 3, 2, 10), sen, "", ""));
    pays.push(maker.land("TCD", "Tchad", maker.impot(8.7, 35, 1.5, 20, 20, 18), maker.ammortissement(20, 10, 1, 3, 3, 10), tcd, "", ""));
    pays.push(maker.land("TGO", "Togo", maker.impot(3, 29, 1, 13, 6, 18), maker.ammortissement(20, 10, 2.5, 3, 2, 10), tgo, "", ""));
    pays.toString =function(){
        let str="";
        this.forEach(function(item){
            str+="pays :\n"+item+"\n";
        });
        return str;
    };
    sessionStorage.setItem("land",pays.toString());
    //console.log("ici");
}
if(sessionStorage.getItem("land")===undefined) {
    createDebutPAys();
    window.reload(true);
    // console.log("session undefined")
}
if(sessionStorage.getItem("land")===null) {
    createDebutPAys();
    window.reload(true);
    //console.log("session null")
}

if(sessionStorage.getItem("land")==="null") {
    createDebutPAys();
    window.reload(true);
    //console.log("session null")
}