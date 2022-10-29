<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>

<body class="mx-5 mt-5 bg-dark">


    <h1 class="h4 text-white">Detalhes</h1>
    <div class="card  mb-3"style="max-width: 18rem;">
        <div class="card-header">
            Nome: {{ $client->name }}
        </div>
        <div class="card-body">
            <h5 class="card-title">Empresa: {{ $client->company }}
            </h5>
            <p class="card-text">E-mail: {{ $client->email }}</p>
            <p class="card-text">Serviços contratados: {{ $client->services }}</p>
        </div>
    </div>
    
    <div class="">
        <a href="{{ Route('client.showAll') }}" class="btn btn-sm btn-primary">Voltar</a>
    </div>
</body>

</html>
