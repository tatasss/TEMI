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
    for (let i = 0; i < tabis.length; i++) {
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
        this.pays.push(maker.land(code, name, imp, amm, inv, overide, source));

    }

    this.pays.toString = function () {
        let str = "";
        this.forEach(function (item) {
            str += "pays :\n" + item + "\n";
        });
        return str;
    }
};
Land.prototype.ajouterPays = function (lande) {
    let monBool = true;
    let monNom = '';
    let source = '';

    for (let i = 0; i < this.pays.length; i++) {
        monNom = '';
        Array.from(this.pays[i].name()).forEach(function (letter) {
            if (letter !== "\n") {
                monNom += letter;
            }
        });
        if (lande.code() === this.pays[i].code()) {
            if (lande.name() === monNom) {
                if (lande.impots().cfe() === this.pays[i].impots().cfe()) {
                    if (lande.impots().isImp() === this.pays[i].impots().isImp()) {
                        if (lande.impots().imf() === this.pays[i].impots().imf()) {
                            if (lande.impots().irvm() === this.pays[i].impots().irvm()) {
                                if (lande.impots().irc() === this.pays[i].impots().irc()) {
                                    if (lande.impots().tva_petrole() === this.pays[i].impots().tva_petrole()) {
                                        if (lande.amortization().construction() === this.pays[i].amortization().construction()) {
                                            if (lande.amortization().equipement() === this.pays[i].amortization().equipement()) {
                                                if (lande.amortization().coefdegressif() === this.pays[i].amortization().coefdegressif()) {
                                                    if (lande.amortization().camion() === this.pays[i].amortization().camion()) {
                                                        if (lande.amortization().info() === this.pays[i].amortization().info()) {
                                                            if (lande.amortization().bureau() === this.pays[i].amortization().bureau()) {
                                                                if (lande.investment().cfe().duree() === this.pays[i].investment().cfe().duree()) {
                                                                    if (lande.investment().cfe().taux() === this.pays[i].investment().cfe().taux()) {
                                                                        if (lande.investment().cfe().reducexo() === this.pays[i].investment().cfe().reducexo()) {
                                                                            if (lande.investment().isamort().duree() === this.pays[i].investment().isamort().duree()) {
                                                                                if (lande.investment().isamort().taux() === this.pays[i].investment().isamort().taux()) {
                                                                                    if (lande.investment().isamort().reducexo() === this.pays[i].investment().isamort().reducexo()) {
                                                                                        if (lande.investment().isamort().ammortTauxEx() === this.pays[i].investment().isamort().ammortTauxEx()) {
                                                                                            if (lande.investment().isamort().ammortLimit() === this.pays[i].investment().isamort().ammortLimit()) {
                                                                                                if (lande.investment().imf().duree() === this.pays[i].investment().imf().duree()) {
                                                                                                    if (lande.investment().imf().taux() === this.pays[i].investment().imf().taux()) {
                                                                                                        if (lande.investment().imf().reducexo() === this.pays[i].investment().imf().reducexo()) {
                                                                                                            if (lande.investment().irvm().duree() === this.pays[i].investment().irvm().duree()) {
                                                                                                                if (lande.investment().irvm().taux() === this.pays[i].investment().irvm().taux()) {
                                                                                                                    if (lande.investment().irvm().reducexo() === this.pays[i].investment().irvm().reducexo()) {
                                                                                                                        if (lande.investment().irc().duree() === this.pays[i].investment().irc().duree()) {
                                                                                                                            if (lande.investment().irc().taux() === this.pays[i].investment().irc().taux()) {
                                                                                                                                if (lande.investment().irc().reducexo() === this.pays[i].investment().irc().reducexo()) {
                                                                                                                                    if (lande.investment().tvaPetrole().duree() === this.pays[i].investment().tvaPetrole().duree()) {
                                                                                                                                        if (lande.investment().tvaPetrole().taux() === this.pays[i].investment().tvaPetrole().taux()) {
                                                                                                                                            if (lande.investment().tvaPetrole().reducexo() === this.pays[i].investment().tvaPetrole().reducexo()) {

                                                                                                                                                if (lande.override() === this.pays[i].override()) {
                                                                                                                                                    source = '';
                                                                                                                                                    Array.from(this.pays[i].source().toString()).forEach(function (item) {
                                                                                                                                                        if (item !== '\n') {
                                                                                                                                                            source += item;
                                                                                                                                                        }
                                                                                                                                                    });
                                                                                                                                                    if (lande.source().toString() === source) {
                                                                                                                                                        //console.log("ici");
                                                                                                                                                        monBool = false;
                                                                                                                                                        break;
                                                                                                                                                    }
                                                                                                                                                }
                                                                                                                                            }
                                                                                                                                        }
                                                                                                                                    }
                                                                                                                                }
                                                                                                                            }
                                                                                                                        }
                                                                                                                    }
                                                                                                                }
                                                                                                            }
                                                                                                        }
                                                                                                    }
                                                                                                }
                                                                                            }
                                                                                        }
                                                                                    }
                                                                                }
                                                                            }
                                                                        }
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
    if (monBool) {
        this.pays.push(lande);
        sessionStorage.setItem("land", this.pays.toString());
    }
    land = new Land();
};
let land = new Land();