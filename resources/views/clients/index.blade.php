<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Clientes</title>
</head>

<header>
    <!--função logout-->
    @if (Auth::user() == null)
        <a class="" href="{{ route('register') }}">Registrar</a>
    @else
        <div style="text-align: end">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button >
                    <a :href="route('logout')" class="btn btn-sm btn-light"
                        onclick="event.preventDefault();
                        this.closest('form').submit();">
                        {{ __('Sair') }}
                    </a>
                </button>
            </form>
        </div>
    @endif
    <!-- fim função logout-->

</header>

<body class="mx-3 mt-5 bg-dark">
    @if (session()->has('success'))
        <div class="alert alert-success mt-5" role="alert">
            {{ session()->get('success') }}
        </div>
    @endif


    <div class="d-grid gap-2 col-6 mx-auto">

        <a href="{{ Route('client.create') }}" class="btn btn-sm btn-success">Cadastrar cliente</a>
        <a href="{{ Route('client.showAll') }}" class="btn btn-sm btn-primary">Mostrar todos clientes</a>
    </div>

</body>

</html>
