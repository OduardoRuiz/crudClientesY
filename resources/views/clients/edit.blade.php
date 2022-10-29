<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Editar cadastro</title>
</head>

<body class="bg-dark">

    <div class="mx-5 text-white">
       
        <h1 class="h4 mx-5 mt-3">Cadastrar novo cliente</h1>
        <form method="POST" action="{{ Route('client.update', $client->id) }}">
            @csrf <!--CSRF para habilitar a proteção de input de valores-->
            <div class="form-group mt-3 mx-5">
                <input type="text" name="name" class="form-control  " required value="{{$client->name}}">
            </div>
            <div class="form-group mt-3 mx-5">
                <input type="text" name="email" class="form-control  " value="{{$client->email}}">
            </div>
            <div class="form-group mt-3 mx-5">
                <input type="text" name="phone" class="form-control  " required value="{{$client->phone}}">
            </div>
            <div class="form-group mt-3  mx-5">
                <input type="text" name="company" class="form-control  " required value="{{$client->company}}">
            </div>
            <div class="form-group mt-3  mx-5">
                <select class="form-select" name="services" multiple>
                    <option value="Social Media">Social Media</option>
                    <option value="CRM">CRM</option>
                    <option value="Mídia">Mídia</option>
                    <option value="SEO">SEO</option>

                </select>
            </div>
            <div class="mx-5 mt-4">
                <button type="submit" class="btn btn-success btn-sm">Salvar</button>
                <a href="{{ Route('client.showAll') }}" class="btn btn-sm btn-primary">Voltar</a>

            </div>
        </form>

    </div>




</body>


</html>
