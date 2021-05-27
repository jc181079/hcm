<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="{{ asset('js/jquery.js')}}"></script>
</head>
<body>
            @if (session('info'))
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="alert alert-success">
                                {{ session('info') }}
                            </div>
                        </div>
                    </div>
                </div>                
            @endif
            @if (session('warning'))
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="alert alert-warning">
                                {{ session('warning') }}
                            </div>
                        </div>
                    </div>
                </div>                
            @endif
    @yield('content')

    <script>
        $(document).ready(function(){
            $('#estado_id').on('change', function() {
                $.ajax({

                    url: '{{ route('getMunicipios')}}',
                    method: 'POST',
                    id_estado: $(this).val(),
                    data: $('#Form1').serialize()
                    

                }).done(function(res){

                    $('#municipio_id').empty();
                    $.each(res, function(index, value){
                        console.log("<option value='" +index+ "'>"+value+"</option>");
                        $('#municipio_id').append("<option value='" +index+ "'>"+value+"</option>");
                    });

                });
            });
        });
    </script>
</body>
</html>