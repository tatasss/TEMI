let BootstrapVue = function () {
};
BootstrapVue.prototype.tableSE =function (colOne_head_lig) {
    let args = arguments;
    let html;
    if(args[1]!=null) {
        html = " <table class='table'>" + args[1] + "<tbody>";
    }
    else{
        html=" <table class='table monTab'><tbody>";
    }
        for (let i = 2; i < args.length; i++) {
            html += `<tr><td>${args[0][i - 2]}</td>`;
           //console.log(args[i]);
            for (let j = 0; j < args[i].length; j++) {
                if(args[i][j]!=null){
                    html += `<td>${args[i][j]}</td>`;
                }
                else {
                    html+="<td/>"
                }

            }
            html += "</tr>";

        }

    html+="</tbody></table>";
    return html;
};
BootstrapVue.prototype.pan= function(type, head, body){

    let result = "<div class='panel panel-" + type + " '>";
    if(head!==null){
      result+= "<div class='panel-heading'>";
      result+=head;
      result+="</div>"
  }
  result+= "<div class='panel-body'>";
  result+=body;
  result+="</div></div>";
  return result;
};
BootstrapVue.prototype.container=function(html){
    return "<div class='container'>"+html+"</div>";
};
/**
 * @return {string}
 */
BootstrapVue.prototype.GridNavCote=function(body,nav){
    let result="<div class='row'><div class='col-sm-10'>";
    result+=body;
    result+="</div><div class='col-sm-2'>";
    result+=nav;
    result+="</div></div>";
    return result;
};
BootstrapVue.prototype.buttonBalA=function(href, html){
    return `<a  class='btn btn-default' type='submit' href='${href}'>${html}</a>`;
};