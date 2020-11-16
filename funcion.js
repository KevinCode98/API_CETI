$('#loadDocentes').click( function () {
    $('#messages').first('p').text('Cargando docentes...');
    $('#messages').show();
    $.ajax(
        {
            'url' : 'http://thegymlife.online/docentes',
            'success' : function(data){
                $('#messages').hide();
                $('#DocentesTable > tbody').empty();
                for(b in data){
                    addDocente (data[b]);
                }
                $('#docenteForm').show();
            }
        }
    )
});

function addDocente (docente){
    $('#DocentesTable tr:last').after('<tr><td>' + docente.id + '</td><td>' + docente.nombre + '</td><td>' + docente.materia + '</td><td>' + docente.carrera + '</td></tr>');
}