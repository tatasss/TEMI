function newApi(format, tab,titre) {
    console.log("on entre");
    let args=tab.split(",");
    let tabExcel=[];
    let cpt=0;
    let regex1 = /^entreprise.*$/;
    tabExcel.push([]);
    tabExcel[0].push(" ");
    for (let i=0;i<args.length;i++){
        if(regex1.test(args[i])){
            tabExcel.push([]);
            cpt++;
        }
        if(args[i]==="ligne"){
            tabExcel.push([]);
            cpt++;
        }
        else{
            tabExcel[cpt].push(args[i]);
        }

    }
    console.log(tabExcel);
    return ExcellentExport.convert({
        anchor: 'anchorNewApi-' + format,
        filename: titre ,
        format: format
    }, [{
        name: 'feuille TEMI',
        from: {
            array:tabExcel
        }
    }]);
}