var BootstrapVue=function(){};
BootstrapVue.prototype.tableSE =function (cfs) {
    var args = arguments;

    var html=" <table class='table'>"+args[1]+"<tbody>";

        for (var i = 2; i < args.length; i++) {
            html += "<tr><td>" + args[0][i-2] + "</td>";
            for (var j = 0; j < args[i].length; j++) {
                if(args[i][j]!=null){
                    html += "<td>" + args[i][j] + "</td>";
                }
                else {
                    html+="<td></td>"
                }

            }
            html += "</tr>";

        }

    html+="</tbody></table>";
    return html;
};
/*
* ajoute une entete au tableau
*
* */
BootstrapVue.prototype.tableAE =function (cfs) {
    var args = arguments;

    return " <table class='table'>"+args[0]+"<tbody>"+args[1]+"</tbody></table>";

};
BootstrapVue.prototype.addHeadTable =function (cfs) {
    var args = arguments;

    var html="<thead>";
    html+=args[1];
    if(args[0].length===args.length-1) {
        for (var i = 1; i < args.length; i++) {
            html += "<tr><th>" + args[0][i-1] + "</th>";
            for (var j = 0; j < args[i].length; j++) {
                html += "<th>" + args[i][j] + "</th>";
            }
            html += "</tr>";

        }
    }
    html+="</tbody></table>";
    return html;
};
