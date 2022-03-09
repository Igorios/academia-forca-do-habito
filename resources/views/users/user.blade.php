
@extends ('layouts.estrutura')

@section('titulo', 'Força do Hábito')

@section('content')

<p class="localizacao-mapa"><ion-icon name="home"></ion-icon>Home > <ion-icon name="pencil"></ion-icon>Cadastrar Usuário</p>
<section class="mt-5 p-5">
    <form action="/users" method="POST">
    {{ csrf_field() }}
        <div class="form-group mt-3">
            <label for="name">Nome completo:</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="digite aqui..." required>
        </div>
        <div class="form-group mt-3">
            <label for="login">Login:</label>
            <input type="email" class="form-control" name="login" id="login" placeholder="digite aqui..." required>
        </div>
        <div class="form-group mt-3">
            <label for="password">Senha:</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="digite aqui..." required>
        </div>
        <div class="form-group mt-3">
            <label for="profile">Perfil:</label>
            <select name="profile" class="w-100">
                <option value="operador">Operador</option>
                <option value="visualizador">Visualizador</option>
                <option value="administrador">Administrador</option>
            </select>
        </div>
        <input type="submit" class="btn btn-success mt-3" value="Salvar registro">
    </form>

</section>

@endsection