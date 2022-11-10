var url = 'http://localhost/proyectos/bodega/api/getUser';

$(document).ready(function () {
    console.log("En usurio");
    var funcion = "";

    getUser(102592);

    function getUser(data) {
        funcion = 'find_user'

        $.ajax({
            type: "POST",
            url: url,
            data: { data: data, funcion : 'find_user' } ,
            success: function (response) {

                var jsonData = JSON.parse(response);

                console.log(jsonData);
                
            }
        });
    }
})