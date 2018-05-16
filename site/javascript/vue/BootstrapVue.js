
BootstrapVue.prototype.tableSE =function (colOne_head_lig) {
    let color;
    let myFont;
    let args = arguments;
    let html;

    if(args[1]!=null) {
        html = " <table class='table'>" + args[1] + "<tbody>";
    }
    else{
        html=" <table class='table monTab'><tbody>";
    }
        for (let i = 2; i < args.length; i++) {
            if(args[i].colorFirstCase===undefined){
                args[i].colorFirstCase=" ";
            }
            if(args[i].colorFirstCase===null){
                args[i].colorFirstCase=" ";
            }
            if(args[i].bottomBorder!==undefined && args[i].bottomBorder!==null){
                html+=`<tr class="bottomBorder">`;
                args[i].color+=" bottomBorder";
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
                if(j===0){
                    if(args[i].colorFirstCase!== " "){
                        color=args[i].colorFirstCase;
                    }
                    else{
                        color=args[i].color;
                    }
                    if(args[i].font_color!==undefined && args[i].font_color!==null){
                        if(args[i].numTabdep!==undefined && args[i].numTabdep!==null && args[i].numTabdep!==0){
                            if(j+1===args[i].numTabdep){
                                color += " font" + args[i].font_color
                            }

                        }else {

                            color += " font" + args[i].font_color;
                        }
                    }
                    if(args[i].tab[j]!=null){
                        //console.log("ici "+(args[i].color=="blue").toString());
                        html += `<td class=\"${color}\">${args[i].tab[j]}</td>`;
                    }
                    else {
                        html+=`<td class=\"${color}\" />`;
                    }

                }
                else{
                    if(j===args[i].tab.length-1){
                        if(args[i].fontColorLastCase==="selectedPosNegNumber"){
                            if(args[i].tab[j]!=null){
                                if(args[i].tab[j]<0){
                                    args[i].fontColorLastCase="red";
                                }
                                else {
                                    args[i].fontColorLastCase=" ";
                                }
                            }
                        }
                        if(args[i].fontColorLastCase!==undefined && args[i].fontColorLastCase!==null && args[i].fontColorLastCase!==" ")
                        args[i].font_color=args[i].fontColorLastCase;
                    }
                    if(args[i].font_color!==undefined && args[i].font_color!==null){
                        if(args[i].numTabdep!==undefined && args[i].numTabdep!==null && args[i].numTabdep!==0){
                            if(j+1===args[i].numTabdep){
                                args[i].color += " font" + args[i].font_color
                            }
                        }else {
                            args[i].color += " font" + args[i].font_color;
                        }
                    }
                    if(args[i].tab[j]!=null){
                        //console.log("ici "+(args[i].color=="blue").toString());
                        html += `<td class=\"${args[i].color}\">${args[i].tab[j]}</td>`;
                    }
                    else {
                        html+=`<td class=\"${args[i].color}\" /> `;
                    }
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