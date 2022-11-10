console.log("Running");
// $(document).ready(function () {
//     $('#vinculo').click(function () {
//         console.log("test");
//         $price = $('#price').val(); // puedes remplazar "parametro" por le parametro que desees ya sea standar o personalizado
//         $('#total').val($price);
//     });
// });

// $(document).ready(function () {
//     if (price != "") {
//         $('#price').keyup(function () {
//             var price = $("input#price").val();
//             var quantity = $("input#quantity").val();



//             // iva = (price * quantity) * 0.13
//             // ivaD = iva.toFixed(4);
//             // total = (price + ivaD) 
//             // totalD = total.toFixed(4);
//             // $("#wiva").val(totalD);

//             // woiva = (price * quantity)
//             // woivaD = Number(woiva).toFixed(4);
//             // $("#woiva").val(woivaD);
//             // $("#total").val(totalD);
//         });
//     } else {
//         $("#wiva").val('');
//         $("#woiva").val('');
//         $("#total").val('');
//     };
// });

function operation() {
    console.log("Testing")
    var price = $('input#price').val();
    var quantity = $('input#quantity').val();
    var iva = $('input#iva').val();

    if (isNaN(price) && isNaN(quantity) && isNaN(iva)) {
        console.log("precio no es numero");
    } else {
        if ((price % 1 == 0) && (quantity % 1 == 0) && (iva % 1 == 0)) {
            //entero
            console.log("precio, cantidad, iva son enteros");
        } else {
            //decimal
            var twiva = (price * quantity) / iva;
            var twoiva = (price * quantity)
            $("#wiva").val(twiva.toFixed(6));
            $("#woiva").val(twoiva.toFixed(6));
            $("#total").val(twiva.toFixed(6));
        }
    }
}


function buscar() {
    var textoBusqueda = $("input#codeProduct").val();

    if (textoBusqueda != "") {
        $.post("../Helpers/Utils/Consulta.php", { valorBusqueda: textoBusqueda }, function (mensaje) {
            var data = mensaje.split(' ');
            $("#description").val(data[0]);
            $("#stock").val(data[1]);
            $("#minstock").val(data[2]);
            // console.log(data[0]);
        });
    } else {
        $("#description").val('');
    };
};
