<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Celke</title>
</head>

<body>

    <a href="{{ route('conta.index') }}">Listar</a><br>

    <h2>Detalhes da Conta</h2>

    {{-- Verificar se existe a sessão success e imprimir o valor --}}
    @if (session('success'))
        <span style="color: #082;">
            {{ session('success') }}
        </span>
    @endif

</body>

</html>
