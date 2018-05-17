Graph.prototype.graphique=function(modeleTab,id){
    var label=[];
    var dataset=[];

    //console.log(createColorSet(5))


        var pays=[];
        var entreprise=[];
    for(let i=0;i<modeleTab.length;i++) {
        pays.push(modeleTab[i]);
        for (let j = 0; j < pays.length; j++) {
            entreprise.push([]);
        }
        for (let j = 0; j < entreprise.length; j++) {
            console.log(pays[i]);
            entreprise[j].push(pays[i][0].modele.mesdon().tauxeffMoyCourent);
        }
    }
    var colorDif=createColorSet(entreprise.length);
    console.log(colorDif);
    color=[];
    for(let i=0;i<colorDif.length;i++){
        color.push(getColorString(colorDif[i]));
    }
    for(let i=0;i<entreprise.length;i++) {
        dataset.push({
            label:"entreprise "+i,
            data:entreprise[i],
            backgroundColor:color,
        })
    }

    //console.log(color);
    var ctx = document.getElementById(id).getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: label,
            datasets: dataset,

        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true,
                        stepValue:0.1,
                        max:100
                    }
                }]
            }
        }
    });
};
function createColorSet(number) {
    var colors=[],
        step=3*256/(number+1),
        cs=0,
        g;
    for(var i=0;i<number;i++) {
        cs=i*step;
        colors[i]=[];
        colors[i].r=Math.round(cs%256);
        colors[i].g=Math.round(cs/3);
        b=256-cs;
        while(b<0)
            b=b+256;
        colors[i].b=Math.round(b);
    }
    return colors;
};
function getColorString(tab){
    return 'rgba('+tab.r+','+tab.g+','+tab.b+', 1)'
}