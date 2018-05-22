/**Function create an Bootstrap Tabs
 * @return {string} html
 * @param colOne_head_lig the left on the array , the head of the array and all the row ({array },{ string},{arrays})
 * take all arguments u put (1 array = 1row)
 */
BootstrapVue.prototype.tableSE = function (colOne_head_lig) {
    let color;
    let args = arguments;
    let html;

    if (args[1] != null) {
        html = " <table class='table'>" + args[1] + "<tbody>";
    }
    else {
        html = " <table class='table monTab'><tbody>";
    }
    for (let i = 2; i < args.length; i++) {
        if (args[i].colorFirstCase === undefined) {
            args[i].colorFirstCase = " ";
        }
        if (args[i].colorFirstCase === null) {
            args[i].colorFirstCase = " ";
        }
        if (args[i].bottomBorder !== undefined && args[i].bottomBorder !== null) {
            html += `<tr class="bottomBorder">`;
            args[i].color += " bottomBorder";
            if (args[i].numTabdep !== undefined && args[i].numTabdep !== null) {
                if (args[i].numTabdep === 0) {
                    if (args[i].font_color !== undefined && args[i].font_color !== null) {

                        html += `<td class=\"font${args[i].font_color}\ bottomBorder">${args[0][i - 2]}</td>`;
                    }
                    else {
                        html += `<td class=\"bottomBorder\">${args[0][i - 2]}</td>`;
                    }
                }
                else {
                    html += `<td class="bottomBorder ">${args[0][i - 2]}</td>`;
                }
            }
            else {
                html += `<td class="bottomBorder ">${args[0][i - 2]}</td>`;
            }
        }
        else {
            html += "<tr>";
            if (args[i].numTabdep !== undefined && args[i].numTabdep !== null) {
                if (args[i].numTabdep === 0) {
                    if (args[i].font_color !== undefined && args[i].font_color !== null) {
                        html += `<td class=\"font${args[i].font_color}\">${args[0][i - 2]}</td>`;
                    }
                    else {
                        html += `<td >${args[0][i - 2]}</td>`;
                    }
                }
                else {
                    html += `<td >${args[0][i - 2]}</td>`;
                }
            }
            else {
                html += `<td>${args[0][i - 2]}</td>`;
            }
        }
        for (let j = 0; j < args[i].tab.length; j++) {
            if (j === 0) {
                if (args[i].colorFirstCase !== " ") {
                    color = args[i].colorFirstCase;
                }
                else {
                    color = args[i].color;
                }
                if (args[i].font_color !== undefined && args[i].font_color !== null) {
                    if (args[i].numTabdep !== undefined && args[i].numTabdep !== null && args[i].numTabdep !== 0) {
                        if (j + 1 === args[i].numTabdep) {
                            color += " font" + args[i].font_color
                        }

                    } else {

                        color += " font" + args[i].font_color;
                    }
                }
                if (args[i].tab[j] != null) {
                    //console.log("ici "+(args[i].color=="blue").toString());
                    html += `<td class=\"${color}\">${args[i].tab[j]}</td>`;
                }
                else {
                    html += `<td class=\"${color}\" />`;
                }

            }
            else {
                if (j === args[i].tab.length - 1) {
                    if (args[i].fontColorLastCase === "selectedPosNegNumber") {
                        if (args[i].tab[j] != null) {
                            if (args[i].tab[j] < 0) {
                                args[i].fontColorLastCase = "red";
                            }
                            else {
                                args[i].fontColorLastCase = " ";
                            }
                        }
                    }
                    if (args[i].fontColorLastCase !== undefined && args[i].fontColorLastCase !== null && args[i].fontColorLastCase !== " ")
                        args[i].font_color = args[i].fontColorLastCase;
                }
                if (args[i].font_color !== undefined && args[i].font_color !== null) {
                    if (args[i].numTabdep !== undefined && args[i].numTabdep !== null && args[i].numTabdep !== 0) {
                        if (j + 1 === args[i].numTabdep) {
                            args[i].color += " font" + args[i].font_color
                        }
                    } else {
                        args[i].color += " font" + args[i].font_color;
                    }
                }
                if (args[i].tab[j] != null) {
                    //console.log("ici "+(args[i].color=="blue").toString());
                    html += `<td class=\"${args[i].color}\">${args[i].tab[j]}</td>`;
                }
                else {
                    html += `<td class=\"${args[i].color}\" /> `;
                }
            }
        }
        html += "</tr>";
    }
    html += "</tbody></table>";
    return html;
};
/**function create a bootstrap pannel
 * @param {string} type of pannel (look doc on the site : https://www.w3schools.com/bootstrap/bootstrap_panels.asp)
 * @param {string} head of the pannel if he is null, the pannel is generate without head
 * @param {string} body of the pannel
 * @return {string} html
 */
BootstrapVue.prototype.pan = function (type, head, body) {

    let result = "<div class='panel panel-" + type + " '>";
    if (head !== null) {
        result += "<div class='panel-heading'>";
        result += head;
        result += "</div>"
    }
    result += "<div class='panel-body'>";
    result += body;
    result += "</div></div>";
    return result;
};
/**function create the body of the page html
 * @param {string} body of the page without topNav
 * @return {string} html
 */
BootstrapVue.prototype.container = function (body) {
    return "<div class='container'>" + body + "</div>";
};
/**Function use a grid basic bootstrap 10-2 mode.
 * @param {string} body is the string template ready inserted in the col to take 10/12 of the grid
 * @param {string} nav is the string html template  ready inserted in the column 2/12 on the right on the grid
 * @return {string} html
 */
BootstrapVue.prototype.GridNavCote = function (body, nav) {
    let result = "<div class='row'><div class='col-sm-10'>";
    result += body;
    result += "</div><div class='col-sm-2'>";
    result += nav;
    result += "</div></div>";
    return result;
};
/**Function create a button created with a tag <a>
 * @param {string} href  is the location where u want to go
 * @param {string} html is the entitled of your tag
 * @return {string} html
 */
BootstrapVue.prototype.buttonBalA = function (href, html) {
    return `<a  class='btn btn-default' type='submit' href='${href}'>${html}</a>`;
};
/**Function create a button created with a tag <button>
 * @param {string} type of button (look doc on the site : https://www.w3schools.com/bootstrap/bootstrap_ref_css_buttons.asp)
 * @param {function()} onclick is the callback where you want to use
 * @param {string} html is the entitled of your tag
 * @param {string} value is the value of your tag
 * @return {string} html
 */
BootstrapVue.prototype.buttonBaBu = function (type, onclick, html, value) {
    return `<button class='btn btn-${type}' type='button' onclick="${onclick}" value="${value}" '>${html}</button>`;
};
/**function create a liste-vertical-group on bootstrap.
 * @param {array}tab is the array of your list
 * @return {string} html
 */
BootstrapVue.prototype.listeItem = function (tab) {
    let html = "<ul class='list-group vertical-form'>";
    tab.forEach(function (item) {
        html += `<li class="list-group-item">${item}</li>`;
    });
    return html;
};
/**function create a collapse group pannel on bootstrap
 * @param {string} objCollapse is the obj of your collapse
 * (take all args ,collapse obj ={title:'yourTitle',body:'yourBody'})
 * @return {string} html
 */
BootstrapVue.prototype.collapse = function (objCollapse) {
    let args = arguments;
    let int;

    //console.log(args[0]);
    let html = "<div class='panel-group' id='accordion'>";
    for (let i = 1; i < args.length; i++) {
        if (args[0] !== null && args[0] !== undefined) {
            if (i === args[0]) {
                int = "in";
            }
            else {
                int = " ";
            }
        }
        //console.log(int)
        html += `<div class="panel panel-default"><div class="panel-heading"><h4 class="panel-title">`;
        html += `<a data-toggle="collapse" data-parent="#accordion" href="#collapse${i + 1}">`;
        html += `${args[i].tittle}</a></h4></div><div id="collapse${i + 1}" class="panel-collapse collapse ${int}">`;
        html += "<div class='panel-body'>" + args[i].body + "</div>\n" +
            "</div>\n" +
            "</div>";
    }
    return html;//+"</div>";
};