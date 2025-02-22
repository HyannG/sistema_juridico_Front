<!DOCTYPE html>
<html>
<head>
    <title>Processos</title>
</head>
<body>
    <h1>Processos</h1>
    <ul>
        @foreach ($processos as $processo)
            <li>
                <strong>Número:</strong> {{ $processo['numero'] }}<br>
                <strong>Cliente:</strong> {{ $processo['cliente'] }}<br>
                <strong>Status:</strong> {{ $processo['status'] }}<br>
                <strong>Tipo:</strong> {{ $processo['tipo'] }}<br>
                <strong>Parte Contrária:</strong> {{ $processo['parte_contraria'] }}<br>
                <strong>Juiz:</strong> {{ $processo['juiz'] }}<br>
                <strong>Última Atualização:</strong> {{ $processo['ultima_atualizacao'] }}<br>
            </li>
            <br>
        @endforeach
    </ul>
</body>
</html>