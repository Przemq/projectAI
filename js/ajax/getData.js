$( document ).ready(function() {

    var ajaxContainer = document.getElementById("ajax-container");
    var btn = document.getElementById("get-data");

    btn.addEventListener("click", function () {
        var request = new XMLHttpRequest();
        request.open('GET', '/services/getTable.php');
        request.onload = function () {
            var response = JSON.parse(request.responseText);
            renderHTML(response);
            console.log(request.responseText);
        };
        request.send();
    });

    function renderHTML(data) {
        var dataString = "";
        for (i = 0; i < data.data.length; i++) {
            dataString += "<p>" + data.data[i].name + "</p>";
       }
        ajaxContainer.insertAdjacentHTML("beforeend", dataString);
    }
});