<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro - Imobiliária Prime</title>
    <!-- CSS do Bootstrap 5.3.0 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">


    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container py-5">
        <div class="row justify-content-center mb-5">
            <div class="col-md-6 text-center">
                <img src="{{ asset('caminho/para/sua/logo.png') }}" alt="Logo Imobiliária Prime" width="150">
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Formulário de Cadastro</h4>
                        <form action="{{ route('locatarios.store') }}" method="POST">
                            @csrf
                            <!-- ... -->
                            <div class="mb-3">
                                <label for="nome_completo" class="form-label">Nome Completo</label>
                                <input type="text" class="form-control @error('nome_completo') is-invalid @enderror"
                                    id="nome_completo" name="nome_completo" value="{{ old('nome_completo') }}">
                                @error('nome_completo')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- ... -->
                            <div class="mb-3">
                                <label for="cpf" class="form-label">CPF</label>
                                <input type="text" class="form-control @error('cpf') is-invalid @enderror"
                                    id="cpf" name="cpf" value="{{ old('cpf') }}">
                                @error('cpf')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="nacionalidade" class="form-label">Nacionalidade</label>
                                <input type="text" class="form-control @error('nacionalidade') is-invalid @enderror"
                                    id="nacionalidade" name="nacionalidade" value="{{ old('nacionalidade') }}">
                                @error('nacionalidade')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    id="email" name="email" value="{{ old('email') }}">
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="telefone_fixo" class="form-label">Telefone Fixo</label>
                                <input type="text" class="form-control @error('telefone_fixo') is-invalid @enderror"
                                    id="telefone_fixo" name="telefone_fixo" value="{{ old('telefone_fixo') }}">
                                @error('telefone_fixo')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="telefone_celular" class="form-label">Telefone Celular</label>
                                <input type="text"
                                    class="form-control @error('telefone_celular') is-invalid @enderror"
                                    id="telefone_celular" name="telefone_celular"
                                    value="{{ old('telefone_celular') }}">
                                @error('telefone_celular')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="profissao" class="form-label">Profissão</label>
                                <input type="text" class="form-control @error('profissao') is-invalid @enderror"
                                    id="profissao" name="profissao" value="{{ old('profissao') }}">
                                @error('profissao')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Campos referentes ao cônjuge -->
                            <div class="mb-3">
                                <label for="nome_conjuge" class="form-label">Nome do Cônjuge</label>
                                <input type="text" class="form-control @error('nome_conjuge') is-invalid @enderror"
                                    id="nome_conjuge" name="nome_conjuge" value="{{ old('nome_conjuge') }}">
                                @error('nome_conjuge')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="cpf_conjuge" class="form-label">CPF do Cônjuge</label>
                                <input type="text" class="form-control @error('cpf_conjuge') is-invalid @enderror"
                                    id="cpf_conjuge" name="cpf_conjuge" value="{{ old('cpf_conjuge') }}">
                                @error('cpf_conjuge')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="nacionalidade_conjuge" class="form-label">Nacionalidade do Cônjuge</label>
                                <input type="text"
                                    class="form-control @error('nacionalidade_conjuge') is-invalid @enderror"
                                    id="nacionalidade_conjuge" name="nacionalidade_conjuge"
                                    value="{{ old('nacionalidade_conjuge') }}">
                                @error('nacionalidade_conjuge')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- Fim dos campos referentes ao cônjuge -->

                            <!-- Adicione aqui os outros campos do formulário, como email, telefone, etc. -->
                            <button type="submit" class="btn btn-primary">Cadastrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
