<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </x-slot>
        @if (session()->has('success'))
        <div class="alert alert-success mt-5" role="alert">
            {{ session()->get('success') }}
        </div>
    @endif
    <div class="row mx-5 mt-5">
        <div>
            <a href="{{ Route('client.create') }}" class="btn btn-sm btn-primary">Cadastrar
                cliente</a>
        </div>

        <div class="mt-1">
            <a href="{{ Route('client.showAll') }}" class="btn btn-sm btn-primary">Mostrar todos
                clientes</a>
        </div>
    </div>
    </x-app-layout>
</body>

</html>
