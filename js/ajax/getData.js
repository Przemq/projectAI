var btn = document.getElementById("btn");
var ajaxContainer = document.getElementById("ajax-container");

btn.addEventListener("click", function () {
    var request  = new XMLHttpRequest();
    request.open('GET', 'http://ajax.dev/json/json.txt');
    request.onload = function () {
        var response = JSON.parse(request.responseText);
        renderHTML(response);
    };
    request.send();
});

function renderHTML(data) {
    var dataString = "";

    for (i = 0; i < data.length; i ++) {
        dataString += "<p>" + data[i].name + " is a " + data[i].species +  "</p>";
    }

    ajaxContainer.insertAdjacentHTML("beforeend", dataString);
}