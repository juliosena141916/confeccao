<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Cliente</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Cadastrar Cliente</h4>
        </div>

        <div class="card-body">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $erro)
                            <li>{{ $erro }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('clientes.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Nome</label>
                    <input type="text" name="nome" class="form-control" value="{{ old('nome') }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">CPF</label>
                    <input type="text" name="cpf" class="form-control" value="{{ old('cpf') }}">
                </div>

                <!-- <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                </div> -->

                <div class="mb-3">
                    <label class="form-label">Telefone</label>
                    <input type="text" name="telefone" class="form-control" value="{{ old('telefone') }}">
                </div>

                <!-- <div class="mb-3">
                    <label class="form-label">Endereço</label>
                    <input type="text" name="endereco" class="form-control" value="{{ old('endereco') }}">
                </div> -->

                <div class="mb-3">
                    <label class="form-label">Reserva</label>
                    <input type="text" name="reserva" class="form-control" value="{{ old('reserva') }}">
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('clientes.index') }}" class="btn btn-secondary">
                        Voltar
                    </a>

                    <button type="submit" class="btn btn-success">
                        Cadastrar Cliente
                    </button>
                </div>

            </form>

        </div>
    </div>

</div>

</body>
</html>