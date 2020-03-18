$(document).ready(function () {
    $('#tables').DataTable({
        responsive: true,
        "language": {
            "url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
        }
    });
});
$(document).ready(function () {
    $('#tables2').DataTable({
        responsive: true,
        "language": {
            "url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
        }
    });
});
$(document).ready(function () {
    $('#tables3').DataTable({
        responsive: true,
        "language": {
            "url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
        }
    });
});
$.datepicker.regional['es'] = {
    closeText: 'Cerrar',
    prevText: '< Ant',
    nextText: 'Sig >',
    currentText: 'Hoy',
    monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
    monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
    dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
    dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mié', 'Juv', 'Vie', 'Sáb'],
    dayNamesMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sá'],
    weekHeader: 'Sm',
    dateFormat: 'dd/mm/yy',
    firstDay: 1,
    isRTL: false,
    showMonthAfterYear: false,
    yearSuffix: ''
};
$.datepicker.setDefaults($.datepicker.regional['es']);
$(document).ready(function () {
    $("#datepicker").datepicker();
});

$(function () {
    $('[data-toggle="tooltip"]').tooltip()
});
//cargamos la tab
window.onload = function () {

    var url = document.location.toString();
    if (url.match('#')) {
        $('.nav-tabs a[href="#' + url.split('#')[1] + '"]').tab('show');
    }

    //Change hash for page-reload
    $('.nav-tabs a[href="#' + url.split('#')[1] + '"]').on('shown', function (e) {
        window.location.hash = e.target.hash;
    });
} 

$(document).ready(function(){
    var availableTags = [
        "Cliente 1",
        "Cliente 2",
        "Cliente 3",
        "Cliente 4",
        "Cliente 5",
      ];
      var availableTags2 = [
        "Tipo 1",
        "Tipo 2",
        "Tipo 3",
        "Tipo 4",
        "Tipo 5",
      ];
      var availableTags3 = [
        "Producto 1",
        "Producto 2",
        "Producto 3",
        "Producto 4",
        "Producto 5",
      ];
      $( "#cliente-complete" ).autocomplete({
        source: availableTags
      });
      $( "#tipo-venta" ).autocomplete({
        source: availableTags2
      });
      $( "#product" ).autocomplete({
        source: availableTags3
      });
      $( "#emision" ).datepicker();
      $( "#vence" ).datepicker();
      $( "#serv1" ).datepicker();
      $( "#serv2" ).datepicker();

      //tablas
      $('#product').on('autocompleteselect', function (e, ui) {
            var product = ui.item.value;
            var table = ' <tr><td>'+product+'</td><td>1</td><td>100</td><td></td><td class="total-td">100</td><td></td><td><i class="fas fa-trash-alt"></i></td></tr>';
            $('#products').append(table);
            $(this).val('');
            return false;

        });
      
      
      
});