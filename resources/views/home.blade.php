@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <form action="{{ route('enquesta') }}" method="GET">
        <div class="card text-center">
            <div class="card-body">
                <h5 class="card-title mb-4">Seleccionar la empresa con la que estás trabajando</h5>
                <select id="selectEmpresa" class="form-select form-select-lg mb-3" aria-label="Large select example">
                    <option value="" selected>Seleccionar empresa</option>
                    @foreach ($empresas as $empresa)
                    <option value="{{ $empresa->id_empresa }}">{{ $empresa->nombre }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="card text-center mt-5">
            <div class="card-body">
                <h5 class="card-title">Seleccionar la encuesta</h5>
                <p class="card-text">Después de seleccionar la empresa, selecciona la encuesta que quieres responder</p>
                <select id="selectEnquesta" name="selectEnquesta" class="form-select form-select-lg mb-3" aria-label="Large select example">
                    <option value="" selected>Seleccionar encuesta</option>
                </select>
                <button id="getSurvey" type="submit" class="btn btn-primary">Responder la pregunta</button>
            </div>
        </div>
    </form>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
     var token = $('meta[name="csrf-token"]').attr('content');
     console.log(token)
   $(document).ready(function() {
    // Agrega un evento change al select de empresas
    $('#selectEmpresa').change(function() {
        // Obtén el valor seleccionado
        var idEmpresa = $(this).val();

        // Construye la URL de la solicitud AJAX concatenando el ID de la empresa a la ruta
        var url = '/get-encuestas-por-empresa/' + idEmpresa;

        // Realiza una solicitud AJAX para obtener las encuestas de la empresa seleccionada
        $.ajax({
            url: url,
            method: 'GET', // Método HTTP
            headers: {
                'X-CSRF-TOKEN': token
            },
            success: function(response) {
                // Limpia el select de encuestas
                $('#selectEnquesta').empty();
                console.log(response)
                // Agrega las opciones de encuestas devueltas por el servidor al select de encuestas
                $.each(response, function(index, encuesta) {
                    $('#selectEnquesta').append($('<option>', {
                        value: encuesta.id_encuesta,
                        text: encuesta.descripcion
                    }));
                });
            },
            error: function(xhr, status, error) {
                // Maneja cualquier error que ocurra durante la solicitud AJAX
                console.error(error);
            }
        });
    });
});
</script>

@endsection


