<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
</head>
<body>

    <h1>O usuário é Caio?</h1>

    @if ($apelido_nome == 'Caio')
        <h2>Sim</h2>
    @else
        <h2>Não</h2>
    @endif
    <hr>

    @for ($i=1; $i<=10; $i++)
        <h4> O Valor de I é: {{$i}} </h4>
    @endfor
    <hr>

    <h1>Os ingredientes para o bolo são: </h1>
    @foreach ($ingredientes as $ingrediente)
        <ul>
            <li>{{$ingrediente}} - 
            @component('components.botao')
                @slot('cor')
                blue
                @endslot
                @slot('href')
                https://google.com.br
                @endslot
            Editar
            @endcomponent
            @component('components.botao')
                @slot('cor')
                red
                @endslot
                @slot('href')
                https://google.com.br
                @endslot
            Deletar
            @endcomponent
            </li>
        </ul>
    @endforeach


</body>
</html>