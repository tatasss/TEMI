Graph.prototype.graphique = function (modeleTab, id, regime) {
    document.getElementById("graph-container").innerHTML = `<canvas id=${id}><canvas>`;
    var label=[];
    var dataset=[];
    var colorDif;
    var color;
    var targetCanvas = document.getElementById(id);
    var ctx = targetCanvas.getContext('2d');
    var myChart;
    if (modeleTab.length !== 0) {
        if (modeleTab[0].length !== 0) {
            colorDif = createColorSet(modeleTab[0].length);
            color = [];

            for (let i = 0; i < colorDif.length; i++) {
                color.push(getColorString(colorDif[i]));
            }

            var pays = [];
            var donneDataset = [];
            for (let i = 0; i < modeleTab.length; i++) {
                pays.push(modeleTab[i]);
                donneDataset.push([]);
                for (let j = 0; j < pays[i].length; j++) {

                    donneDataset[i].push(pays[i][j].modele.mesdon().tauxeffMoyCourent);
                    /*console.log(pays[i][j].donne.pays.nom)
                    console.log(pays[i][j].modele.mesdon().fluxTresApresImpot)
                    console.log(pays[i][j].modele.mesdon().tauxeffMoyCourent)*/
                }
            }
            var entreprise = [];
            for (let i = 0; i < donneDataset[0].length; i++) {
                entreprise.push([]);
                for (let j = 0; j < donneDataset.length; j++) {
                    entreprise[i].push(donneDataset[j][i]);

                }

            }
            var realColor;
            console.log(entreprise);

            for (let i = 0; i < entreprise.length; i++) {
                realColor = [];
                for (let j = 0; j < entreprise[i].length; j++) {
                    realColor.push(color[i]);
                    //console.log(color[i]);
                }
                dataset.push({
                    label: "entreprise " + (i + 1) + " taux de marge avant impot = " + modeleTab[0][i].donne.marge + " % ",
                    data: entreprise[i],
                    backgroundColor: realColor,
                });


            }
            var payTab = [];

            for (let i = 0; i < modeleTab.length; i++) {
                payTab.push(modeleTab[i][0].donne.pays.nom);
            }


            //console.log(color);
            myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: payTab,
                    datasets: dataset,

                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true,
                                stepValue: 0.1,
                                max: 100
                            },
                            scaleLabel: {
                                display: true,
                                labelString: 'pourcentage %'
                            }
                        }],
                        xAxes: [{
                            display: true,
                            ticks: {
                                autoSkip: false,
                            }
                        }]
                    },
                    title: {
                        display: true,
                        text: 'TEMI Global avec le regime fiscal :' + regime
                    }
                }
            });

        }
        else {
            ctx.clearRect(0, 0, targetCanvas.width, targetCanvas.height);
            myChart = new Chart(ctx, null);
            myChart.clear();
            $(id).remove();
            $('iframe.chartjs-hidden-iframe').remove();

        }
    }
    else {
        ctx.clearRect(0, 0, targetCanvas.width, targetCanvas.height);
        myChart = new Chart(ctx, null);
        myChart.clear();
        $(id).remove();
        $('iframe.chartjs-hidden-iframe').remove();
    }

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
}
function getColorString(tab){
    return 'rgba('+tab.r+','+tab.g+','+tab.b+', 1)'
}