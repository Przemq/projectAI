$( document ).ready(function() {

    var ajaxContainer = document.getElementById("ajax-container");
    var btn = document.getElementById("get-data");

    btn.addEventListener("click", function () {
        var request = new XMLHttpRequest();
        request.open('GET', '/services/getTable.php');
        request.onload = function () {
            console.log(request.responseText);
            var response = JSON.parse(request.responseText);

            renderHTML(response);
        };
        request.send();
    });

    function renderHTML(data) {
        var dataString = "";

        for (i = 0; i < data.length; i++) {
            dataString += "<p>" + data[i].name + "</p>";
        }

        ajaxContainer.insertAdjacentHTML("beforeend", dataString);
    }
});