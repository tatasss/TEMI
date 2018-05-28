function getXMLHttpRequest() {
    let xhr = null;
    if (window.XMLHttpRequest || window.ActiveXObject) {
        if (window.ActiveXObject) {
            try {
                xhr = new ActiveXObject("Msxml2.XMLHTTP");
            } catch (e) {
                xhr = new ActiveXObject("Microsoft.XMLHTTP");
            }
        } else {
            xhr = new XMLHttpRequest();
        }
    } else {
        alert("Votre navigateur ne supporte pas l'objet XMLHTTPRequest...");
        return null;
    }

    return xhr;
}

let compte;
let html;
let attr;
let arr;

for (let cpt = 1; cpt < 59; cpt++) {

    let xhr = getXMLHttpRequest();
    xhr.onreadystatechange = function () {

        if (xhr.readyState === 4 && (xhr.status === 200)) {
            attr += "";

            for (let i = 0; i < xhr.responseXML.getElementsByTagName("wb:indicator").length; i++) {
                console.log(xhr.responseXML.getElementsByTagName("wb:indicator")[i].getAttribute("id").toString());
                attr += xhr.responseXML.getElementsByTagName("wb:indicator")[i].getAttribute("id").toString();
                attr += " :  -->" + xhr.responseXML.getElementsByTagName("wb:name")[i].childNodes[0].nodeValue;
                attr += "|";
            }

            sessionStorage.setItem("page" + cpt, attr)


        }
    };

    xhr.open("GET", "http://api.worldbank.org/v2/indicators?page=" + cpt, true);
    xhr.send(null);
    compte = cpt;

}
html = "<p>";
for (let i = 1; i < 59; i++) {
    arr = localStorage.getItem("page" + i).split("|");
    arr.forEach(function (item) {
        html += item + "<br/>";
    });


}
html += "</p>";
document.getElementById("lol").innerHTML = html;
