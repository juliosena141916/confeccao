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
            <h4 class="mb-0">Cadastrar no Estoque</h4>
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

            <form action="{{ route('fornecedor.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Id</label>
                    <input type="text" name="idFornecedor" class="form-control" value="{{ old('idFornecedor') }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Endereco</label>
                    <input type="text" name="enderecoFornecedor" class="form-control" value="{{ old('enderecoFornecedor') }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Telefone</label>
                    <input type="text" name="enderecoFornecedor" class="form-control" value="{{ old('enderecoFornecedor') }}">
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('estoque.index') }}" class="btn btn-secondary">
                        Voltar
                    </a>

                    <button type="submit" class="btn btn-success">
                        Cadastrar no Estoque
                    </button>
                </div>

            </form>

        </div>
    </div>

</div>

</body>
</html>