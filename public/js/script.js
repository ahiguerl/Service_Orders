$(document).ready(function(){
    $('#alert').hide(); // oculta la barra de alerta
    $(".btn-delete").click(function(e){
        e.preventDefault(); // previene que la página se actualice
        if (!confirm("¿Está seguro de eliminar?")) {
            return false;
        }

        var row = $(this).parents('tr');
        var form = $(this).parents('form');
        var url = form.attr('action');

        $('#alert').show();
        $.post(url, form.serialize(), function(result){
            row.fadeOut(); // oculta la fila
            //$('#products-total').html(result.total);
            $('#alert').html(result.message);
        }).fail(function(){
            $('#alert').html("algo salió mal");
        });
    });
});
