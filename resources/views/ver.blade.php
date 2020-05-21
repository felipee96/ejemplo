<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<h1 style="text-align: center; margin-bottom: 80px">VER REGISTROS</h1>

<body
    style="width: 50%; display: block; margin-left: auto; margin-right: auto; background: rgb(116, 214, 157); margin-top: 50px">
    <table class="table" style="background: whitesmoke">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Telefono</th>
            <th scope="col">Correo</th>

          </tr>
        </thead>
        <tbody>
            @foreach (verRegistro() as $row)
            <tr>
                <th scope="row">{{$row->id }}</th>
                <td>{{$row->nombre }}</td>
                <td>{{$row->apellido }}</td>
                <td>{{$row->telefono }}</td>
                <td>{{$row->correo }}</td>
                <td>
                    <a href="/Editar/{{$row->id }}" class="btn btn-success pull-right btn-sm" style="">EDITAR</a>
                </td>
                <td>
                    <form action="/Eliminar/{{$row->id }}" method="post">
                        {{ csrf_field()}}
                        {{ method_field('DELETE')}}
                        <button type="submit" class="btn btn-danger btn-sm" style="">ELIMINAR</button>
                    </form>
                </td>
            </tr>
            @endforeach-
        </tbody>
      </table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</body>

</html>