<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

    <h1>Cadastro</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            {{ $errors->first() }}
        </div>
    @endif

    <form method="POST" action="/register">
        @csrf

        <div class="mb-3">
            <label class="form-label">Nome</label>
            <input type="name" name="name" class="form-control" value="{{ old('name') }}">
        </div>

        <div class="mb-3">
            <label class="form-label">E-mail</label>
            <input type="email" name="email" class="form-control" value="{{ old('email') }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Senha</label>
            <input type="password" name="password" class="form-control">
        </div>

        <button class="btn btn-primary">Entrar</button>
    </form>

</body>
</html>