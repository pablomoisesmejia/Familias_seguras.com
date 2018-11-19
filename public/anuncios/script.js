// Add Record
function addRecord() {
    // get values
    var nombre = $("#nombre").val();
    var apellido = $("#apellido").val();
    var alias = $("#alias").val();
    var password = $("#password").val();
    var email = $("#email").val();

    // Add record
    $.post("ajax/addRecord.php", {
        nombre: nombre,
        apellido: apellido,
        alias: alias,
        password: password,
        email:email
    }, function (data, status) {
        // close the popup


        // clear fields from the popup
        $("#nombre").val("");
        $("#apellido").val("");
        $("#alias").val("");
        $("#password").val("");
        $("#email").val("");
    });
}