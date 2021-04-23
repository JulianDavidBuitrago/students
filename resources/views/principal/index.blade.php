<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Boostrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   
    

</head>

<body class="antialiased">
    <div class="container">
        <div class="row">
          <div >
            <a href="{{ route('welcome') }}" class="btn btn-primary mt-4">Crear nuevo estudiante</a>
          </div>
            <table class="table border border-secondary mt-5">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Codigo</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col">Acción</th>
                  </tr>
                </thead>              
              <tbody>
              @foreach($students as $student)
                                <tr>
                                    <td>{{ $student->id }}</td>
                                    <td>{{ $student->nameStudent }}</td>
                                    <td>{{ $student->emailStudent }}</td>
                                    <td>{{ $student->codeStudent }}</td>
                                    <td>{{ $student->phoneStudent }}</td>
                                    <td>
                                        <form action="{{ route('students.destroy', $student) }}" method="POST">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <input 
                                                type="submit"
                                                value="Eliminar"
                                                class="btn btn-sm btn-danger"
                                                onclick="return confirm('¿Desea eliminar......?')">
                                        </form>

                                    </td>
                                    
                                </tr>
                            @endforeach
                        </tbody>
              
        </div>
    </div>
    
</body>

</html>
