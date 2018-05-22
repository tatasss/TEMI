Graph.prototype.graphique = function (modeleTab, id, regime) {
    document.getElementById("graph-container").innerHTML = `<canvas id=${id}><canvas>`;

    let dataset = [];
    let colorDif;
    let color;
    let targetCanvas = document.getElementById(id);
    let ctx = targetCanvas.getContext('2d');
    let myChart;
    if (modeleTab.length !== 0) {
        if (modeleTab[0].length !== 0) {
            colorDif = createColorSet(modeleTab[0].length);
            color = [];
            colorDif.forEach(function (item) {
                color.push(getColorString(item));
            });


            let pays = [];
            let donneDataset = [];
            modeleTab.forEach(function (item, index) {
                pays.push(item);
                donneDataset.push([]);
                pays[index].forEach(function (item2) {
                    donneDataset[index].push(item2.modele.mesdon().tauxeffMoyCourent);
                })

            });
            let entreprise = [];
            donneDataset[0].forEach(function (lol, index) {
                entreprise.push([]);
                donneDataset.forEach(function (item) {
                    entreprise[index].push(item[index]);
                });
            });
            let realColor;
            let entre = []
            entreprise.forEach(function (item, index) {
                realColor = [];
                item.forEach(function () {
                    realColor.push(color[index]);
                });
                entre.push("entreprise " + (index + 1) );
                dataset.push({
                    label: "entreprise " + (index + 1) + " taux de marge avant impot = " + modeleTab[0][index].donne.marge + " % ",
                    data: item,
                    backgroundColor: realColor,
                });
            });
            let payTab = [];
            modeleTab.forEach(function (item) {
                payTab.push(item[0].donne.pays.nom);
            });
            //----------------------------------------------------------------------------------------------------------
            //ici la parti sur le tableau des temi
            document.getElementById("tabTemi").innerHTML = bootstrap.bootstrapTemiTabSpe(entre,paysChoisi, entreprise);
            //----------------------------------------------------------------------------------------------------------
            //console.log(color);
            new Chart(ctx, {
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
            document.getElementById("tabTemi").innerHTML=" ";

        }
    }
    else {
        ctx.clearRect(0, 0, targetCanvas.width, targetCanvas.height);
        myChart = new Chart(ctx, null);
        myChart.clear();
        $(id).remove();
        $('iframe.chartjs-hidden-iframe').remove();
        document.getElementById("tabTemi").innerHTML=" "
    }

};

function createColorSet(number) {
    let colors = [],
        step = 3 * 256 / (number + 1),
        cs = 0,
        g;
    let b;
    for (let i = 0; i < number; i++) {
        cs = i * step;
        colors[i] = [];
        colors[i].r = Math.round(cs % 256);
        colors[i].g = Math.round(cs / 3);
        b = 256 - cs;
        while (b < 0)
            b = b + 256;
        colors[i].b = Math.round(b);
    }
    return colors;
}

function getColorString(tab) {
    return 'rgba(' + tab.r + ',' + tab.g + ',' + tab.b + ', 1)';
}

BootstrapVue.prototype.bootstrapTemiTabSpe = function (cote, head, tab) {
    let myTab=[];
    var cpt=0;
    for(let i=0; i<head.length/6;i++){
        myTab.push("<br/><table class='table'><thead><tr><th/>")
    }

    head.forEach(function (item,index) {
        if(index%6===0 && index >0){
            myTab[cpt]+="</tr></thread><tbody>";
            cpt++;
        }
        myTab[cpt] += "<th>";
        myTab[cpt]+= item;
        myTab[cpt]+= "</th>";

    });
    /*for(let i=0; i<head.length/6;i++){
        myTab[i]+="</th></thread><tbody>";
    }*/

    tab.forEach(function (item, index) {
        cpt=0;
        myTab[cpt]  += "<tr><td>";
        myTab[cpt]  += cote[index] + "</td>";

        item.forEach(function (items,indexs) {
            if(indexs%6===0 && indexs>0){
                myTab[cpt]  +="</tr>";
                cpt++;
                myTab[cpt]+="<tr><td>";
                myTab[cpt]  += cote[index] + "</td>";
            }
            myTab[cpt]  +=  "<td>";
            myTab[cpt]  +=  Math.round(items*100)/100;
            myTab[cpt]  +=  " % </td>";
        });
        myTab[cpt]  +=  "</tr>\n";
    });
    for(let i=0; i<head.length/6;i++){
        myTab[i]+="</tbody></table>";
    }
    var html="<h1>Tableau des TEMI de chaque pays :</h1>";
    myTab.forEach(function(item){
        html+=item;
    });
    return html;


};