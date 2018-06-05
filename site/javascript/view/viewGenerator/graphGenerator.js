/**
 * @param {Array} modeleTab - the array of the modele use to put a graphique
 * @param {string} idGraph - the id of the graph
 * @param {string} idText - the id of the text
 * @param {string} regime - a government of the modele
 * @param {Array} maMarge - A Array of the margin Rate
 * @param {string} titre - a filename of the excel outPut
 * @description This function create a graphique with a module Chart.js
 * return nothing but touch the html with id parameter
 */
Graph.prototype.graphique = function (modeleTab, idGraph,idText, regime,maMarge,titre) {
    document.getElementById("graph-container").innerHTML = `<canvas id="${idGraph}"> </canvas><div id="${idText}"></div>`;
    let dataset = [];
    let colorDif;
    let color;
    let targetCanvas = document.getElementById(idGraph);
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
                    donneDataset[index].push(item2.modele.mesdon().tauxeffMoyCourent());
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
                    label: "entreprise " + (index + 1) + " taux de marge avant impot = " + modeleTab[0][index].donne.margin() + " % ",
                    data: item,
                    backgroundColor: realColor,
                });
            });
            let payTab = [];
            modeleTab.forEach(function (item) {
                payTab.push(item[0].donne.land().name());
            });
            document.getElementById(idText).innerHTML = this.tableau(entreprise,maMarge,titre);
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
                    legend:{
                        display:true,
                        position:"right",
                        fullWidth:false,

                    },
                    //maintainAspectRatio: false,
                    title: {
                        display: true,
                        text: 'TEMI Global avec le government fiscal :' + regime
                    },
                    responsive:true,
                }
            });
        }
        else {
            ctx.clearRect(0, 0, targetCanvas.width, targetCanvas.height);
            myChart = new Chart(ctx, null);
            myChart.clear();
            $(idGraph).remove();
            $('iframe.chartjs-hidden-iframe').remove();
            document.getElementById(idText).innerHTML = " ";
        }
    }
    else {
        ctx.clearRect(0, 0, targetCanvas.width, targetCanvas.height);
        myChart = new Chart(ctx, null);
        myChart.clear();
        $(idGraph).remove();
        $('iframe.chartjs-hidden-iframe').remove();
        document.getElementById(idText).innerHTML = " "
    }
};
/**
 * @description This function create a HTML table of TEMI
 * @param {Array} entreprise - the tab of entreprise TEMI
 * @param {Array} maMarge - the tab of marge
 * @param {string} titre - the name of Excel File
 * @return {string}
 */
Graph.prototype.tableau=function (entreprise,maMarge,titre) {
    let entrer=[];
    entreprise.forEach(function(item,index){
        entrer.push("entreprise " + (index + 1));
    });
    return bootstrap.bootstrapTemiTabSpe(entrer, paysChoisi, entreprise,maMarge,titre);
};
/**
 * @description This function create a random color array
 * @param {number} number - the number of color u want
 * @return {Array} colors  - an array with all color tab
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
/**
 * @description This function create a chart.js color with an array of color
 * @param {Object} tab - the color (r,g b)
 * @return {string} the colors of chart.js
 */
function getColorString(tab) {
    return 'rgba(' + tab.r + ',' + tab.g + ',' + tab.b + ', 1)';
}