<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Registrar estudiante</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Boostrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    
    <script>
        $(document).ready(function() {
            $('.onlyNumber').keypress(function(tecla) {
                if (tecla.charCode < 48 || tecla.charCode > 57){
                    $(this).css('border', '2px solid red');
                    return false;
                }else{
                    $(this).css('border', '2px solid green');
                }

            });

            $('.onlyLetter').keypress(function(tecla) {
                if (tecla.charCode > 47 && tecla.charCode < 58) {
                    $(this).css('border', '2px solid red');
                    return false;
                }else{
                    $(this).css('border', '2px solid green');
                }

            });
        });

    </script>

</head>

<body class="antialiased">
    <div class="container">
        <div class="jumbotron mt-5">
            <h1 class="text-center">Registrar Estudiante</h1>

            <form method="POST" action="{{ route('students.store') }}">
                @csrf

                <div class="form-group">
                    <label for="nameStudent" class="control-label">Nombres</label>
                    <input type="text" class="form-control onlyLetter" id="nameStudent" name="nameStudent"
                        placeholder="Ingrese su nombre" value="{{ old('nameStudent') }}">
                    {{ $errors->first('nameStudent') }} <br>
                </div>
                @error('nameStudent')
                    <div class="alert alert-danger">{{ 'ingrese un nombre valido' }}</div>
                @enderror

                <div class="form-group">
                    <label for="surnameStudent" class="control-label">Apellidos</label>
                    <input type="text" class="form-control onlyLetter" id="surnameStudent" name="surnameStudent"
                        placeholder="Ingrese sus apellidos" value="{{ old('surnameStudent') }}">
                </div>
                @error('surnameStudent')
                    <div class="alert alert-danger">{{ 'ingrese un apellido valido' }}</div>
                @enderror


                <div class="form-group">
                    <label for="documentTypeStudent" class="control-label">Tipo de documento</label>
                    <select class="form-control" id="documentTypeStudent" name="documentTypeStudent"
                        value="{{ old('documentTypeStudent') }}">
                        <option value="CC">Cédula de ciudadanía</option>
                        <option value="RC">Registro Civil</option>
                        <option value="TI">Tarjeta de identidad</option>
                        <option value="CE">Cédula de extranjería</option>
                        <option value="PA">Pasaporte</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="documentNumberStudent" class="control-label">Documento de identidad</label>
                    <input type="number" class="form-control onlyNumber" id="documentNumberStudent"
                        name="documentNumberStudent" placeholder="Ingrese el docuemnto de identidad del estudiante"
                        value="{{ old('documentNumberStudent') }}">
                </div>
                @error('documentNumberStudent')
                    <div class="alert alert-danger">{{ 'Ingrese un documento valido' }}</div>
                @enderror

                <div class="form-group">
                    <label for="codeStudent" class="control-label">Codigo del estudiante</label>
                    <input type="text" class="form-control onlyNumber" id="codeStudent" name="codeStudent"
                        placeholder="Ingrese el código del estudiante" value="{{ old('codeStudent') }}">
                </div>
                @error('codeStudent')
                    <div class="alert alert-danger">{{ 'Ingrese un código valido' }}</div>
                @enderror

                <div class="form-group">
                    <label for="sexStudent" class="control-label">Sexo</label>
                    <select class="form-control" id="sexStudent" name="sexStudent" value="{{ old('sexStudent') }}">
                        <option value="M">Masculino</option>
                        <option value="F">Femenino</option>
                        <option value="SD">Sin definir</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="phoneStudent" class="control-label">Teléfono</label>
                    <input type="text" class="form-control onlyNumber" id="phoneStudent" name="phoneStudent"
                        placeholder="Ingrese su teléfono" value="{{ old('phoneStudent') }}">
                </div>
                @error('phoneStudent')
                    <div class="alert alert-danger">{{ 'Ingrese un teléfono valido' }}</div>
                @enderror

                <div class="form-group">
                    <label for="emailStudent" class="control-label">Email</label>
                    <input type="text" class="form-control" id="emailStudent" name="emailStudent"
                        placeholder="Ingrese su correo" value="{{ old('emailStudent') }}">
                </div>
                @error('emailStudent')
                    <div class="alert alert-danger">{{ 'Ingrese un correo valido' }}</div>
                @enderror


                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                    <a href="{{ route('index') }}" class="btn btn-primary">Atras</a>
                </div>

            </form>

        </div>

    </div>
</body>

</html>
