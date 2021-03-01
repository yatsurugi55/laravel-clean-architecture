<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Product</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="col-md-12">
                <h2>Index</h2>
                <table border="1">
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>type</th>
                        <th>made_in</th>
                        <th>stock</th>
                        <th>edit</th>
                        <th>delete</th>
                    </tr>
                    @foreach ($viewModel->products as $product)
                        <tr>
                            <td>{{ $product->id }} </td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->type }}</td>
                            <td>{{ $product->made_in }}</td>
                            <td>{{ $product->stock }}</td>
                            <td>
                                <a href="/edit_ca/{{ $product->id }}">
                                    <button type="button" class="btn btn-primary">Edit</button>
                                </a>
                            </td>
                            <td>
                                <a href="/delete_ca/{{ $product->id }}">
                                    <button type="button" class="btn btn-primary">Delete</button>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </table>
                <div class="btn_create">
                    <a href="/create_ca">
                        <button type="button" class="btn btn-primary">Create</button>
                    </a>
                </div>
            </div>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    </body>
</html>
