<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
    <script>
        function remover(route) {
            if (confirm('Voce deseja remover o cliente?'))
                window.location = route;
        }
    </script>
</head>

<body class="mx-5 bg-dark text-white">

    @if (session()->has('success'))
        <div class="alert alert-success mt-5" role="alert">
            {{ session()->get('success') }}
        </div>
    @endif
    <h1 class="h4 mt-3">Todos os Clientes</h1>
    <div class="row">
        <table class="table table-dark table-striped">

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Empresa</th>
                    <th>Serviços contratados</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clients as $cl)
                    <tr>
                        <td>{{ $cl->id }}</td>
                        <td>{{ $cl->name }}</td>
                        <td>{{ $cl->email }}</td>
                        <td>{{ $cl->phone }}</td>
                        <td>{{ $cl->company }}</td>
                        <td>{{ $cl->services }}</td>
                        <td>
                            <a href="{{ route('clients.show', $cl->id) }}" class="btn btn-sm btn-success">Visualizar</a>
                            <a href="{{ route('client.edit', $cl->id) }}" class="btn btn-sm btn-warning">Editar</a>
                            <a href="#" onclick="remover('{{ route('client.destroy', $cl->id) }}');"
                                class="btn btn-sm btn-danger">Apagar</a>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div>
            <a href="{{ Route('client.index') }}" class="btn btn-sm btn-primary">Voltar</a>
        </div>

    </div>
</body>

</html>
