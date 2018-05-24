/**
 * @param {Array} modeleTab is the array of the modele use to put a graphique
 * @param {string} id is a element on document identification
 * @param {string} regime is a regime of the modele
 * @description function create a graphique with a module Chart.js
 * return nothing but touch the html with id parameter
 */
Graph.prototype.graphique = function (modeleTab, id, regime,maMarge,titre) {
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
            let entre = [];
            entreprise.forEach(function (item, index) {
                realColor = [];
                item.forEach(function () {
                    realColor.push(color[index]);
                });
                entre.push("entreprise " + (index + 1));
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
            console.log(maMarge);
            document.getElementById("tabTemi").innerHTML = bootstrap.bootstrapTemiTabSpe(entre, paysChoisi, entreprise,maMarge,titre);
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
            document.getElementById("tabTemi").innerHTML = " ";

        }
    }
    else {
        ctx.clearRect(0, 0, targetCanvas.width, targetCanvas.height);
        myChart = new Chart(ctx, null);
        myChart.clear();
        $(id).remove();
        $('iframe.chartjs-hidden-iframe').remove();
        document.getElementById("tabTemi").innerHTML = " "
    }

};

/**function create a random color array
 * @param {number} number is the number of color u want
 * @return {Array} colors  is an array with all color tab
 */
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

/**function create a chart.js color with an array of color
 * @param {Object} tab is the color (r,g b)
 * @return {string} the colors of chart.js
 */
function getColorString(tab) {
    return 'rgba(' + tab.r + ',' + tab.g + ',' + tab.b + ', 1)';
}

