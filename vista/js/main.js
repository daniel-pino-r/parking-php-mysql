function display(val) {
    document.getElementById('result').value = val;
}

//FUNCION PARA EVITAR QUE LA PAGINA SE RECARGUE CUANDO ENVIEN EL FORMULARIO
$(function () {

    $('#form1').on('submit', function (event) {
        event.preventDefault();

    });
});


