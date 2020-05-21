<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Crud</title>
</head>
<h1 style="text-align: center; margin-bottom: 80px">ESTO ES UNA PRUEBA</h1>

<body
    style="width: 50%; display: block; margin-left: auto; margin-right: auto; background: rgb(165, 236, 227); margin-top: 100px">
    <form method="POST" action="{{url('/guardar')}}">
        {{ csrf_field()}}
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="formGroupExampleInput">Nombres</label>
                <input type="text" class="form-control" id="nombre" name="nombre"
                    placeholder="Por favor escriba su nombre" required>
            </div>
            <div class="form-group col-md-6">
                <label for="formGroupExampleInput">Apellidos</label>
                <input type="text" class="form-control" id="apellido" name="apellido"
                    placeholder="Por favor escriba su apellido" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="formGroupExampleInput">Correo</label>
                <input type="text" class="form-control" id="correo" name="correo"
                    placeholder="Por favor escriba su correo" required>
            </div>
            <div class="form-group col-md-6">
                <label for="formGroupExampleInput">Telefono</label>
                <input type="number" class="form-control" id="telefono" name="telefono"
                    placeholder="Por favor escriba su telefono" required>
            </div>
        </div>
        <div style="text-align:center;">
            <button type="submit" class="btn btn-success">Guardar</button>

        </div>
        <div  style="text-align:center;">
          <br>
        </div>

    </form>
    <div style="text-align:center;">
    <a href="/Ver"><button class="btn btn-success">Ver registros</button></a>
     </div>

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
