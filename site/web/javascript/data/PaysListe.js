/**
 * @description This function create all the land and put it on an Array
 *
 */
let Land = function () {
    // console.log("on entre");
    this.pays = [];
    let name = "";
    let code = "";
    let impStr = "";
    let impotStr;
    let impot;
    let ammortStr = "";
    let ammortiStr;
    let ammort;
    let investStr = "";
    let invest;
    let investTab;
    let overide = "";

    let source = "";
    let strPa = sessionStorage.getItem("land");
    let tab = strPa.split("\npays :");
    let tabis = [];
    let investImp = function (number, str) {
        //console.log(str);
        let taber = str.split(",");
        let result = [];
        taber.forEach(function (item) {
            //console.log(item);
            if (item === "null") {
                result.push(null);
            }
            else {
                result.push(Number.parseFloat(item));

            }
        });
        let invest;
        //console.log(result)
        if (number !== 2) {
            invest = maker.impotPays(result[0], result[1], result[2]);

        }
        else {
            invest = maker.isImpotPays(result[0], result[1], result[2], result[3], result[4])
        }
        return invest;
    };
    tab.forEach(function (item, index) {
        if (index === 0) {
            item = item.slice(7, Array.from(item).length);
        }
        item = item.split("|");
        tabis.push(item);
    });
    //console.log(tabis);
    for (let i=0; i < tabis.length; i++) {
        //console.log(i);
        name = tabis[i][0];
        code = tabis[i][1];
        //console.log(tabis[i]);
        impStr = tabis[i][2];
        impot = [];
        impotStr = [];
        ammortStr = tabis[i][3];
        ammortiStr = [];
        ammort = [];
        investStr = tabis[i][4];
        invest = [];
        overide = tabis[i][5];
        source = tabis[i][6];
        // console.log("on arrive la");
        impStr = impStr.slice(1, Array.from(impStr).length - 1);
        impotStr = impStr.split(",");
        impotStr.forEach(function (item) {
            if (item === "as d'impo") {
                impot = "pas d'impot";
            }
            else {
                impot.push(Number.parseFloat(item));
            }

        });
        ammortStr = ammortStr.slice(1, Array.from(ammortStr).length - 1);
        ammortiStr = ammortStr.split(",");
        ammortiStr.forEach(function (item) {
            if (item === "as d'ammortissemen") {
                ammort = "pas d'ammortissement";
            }
            else {
                ammort.push(Number.parseFloat(item));
            }

        });
        investStr = investStr.slice(1, Array.from(investStr).length - 1);
        investTab = investStr.split("],[");
        investTab.forEach(function (item, index) {
            if (index === 0) {
                item = item.slice(1, Array.from(item).length);
            }
            if (index === investTab.length - 1) {
                item = item.slice(0, Array.from(item).length - 1);
            }
            //console.log(item);
            if (item === "s d'investissme") {
                invest = "as d'investissmen";
            }
            else {
                invest.push(investImp(index + 1, item));
            }
        });
        let imp;
        let amm;
        let inv;
        //console.log("ici");
        if (name !== "Guinée Bissao") {
            if (name !== "Guinée équatoriale") {
                imp = maker.impot(impot[0], impot[1], impot[2], impot[3], impot[4], impot[5]);
                amm = maker.ammortissement(ammort[0], ammort[1], ammort[5], ammort[2], ammort[3], ammort[4]);
                inv = maker.investir(invest[0], invest[1], invest[2], invest[3], invest[4], invest[5]);
            }
            else {
                imp = impot;
                amm = ammort;
                inv = invest;
            }
        }
        else {
            imp = impot;
            amm = ammort;
            inv = invest;
        }
        //console.log("ici");
        //console.log(maker.land(code, name, imp, amm, inv, overide, source));
        this.pays.push(maker.land(code, name, imp, amm, inv, overide, source));

    }

    this.pays.toString = function () {
        let str = "";
        this.forEach(function (item) {
            str += "pays :\n" + item + "\n";
        });
        return str;
    }
    //console.log(this.pays.toString());
};
Land.prototype.ajouterPays = function (land) {
    this.pays.push(land);
    sessionStorage.setItem("land",this.pays.toString());
    // noinspection JSAnnotator
    land = new Land();

};

let land= new Land();