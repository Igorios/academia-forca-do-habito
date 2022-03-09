
@extends ('layouts.estrutura')

@section('titulo', 'Força do Hábito')

@section('content')

<p class="localizacao-mapa"><ion-icon name="home"></ion-icon>Home > <ion-icon name="pencil"></ion-icon>Cadastrar Usuário</p>
<section class="mt-5 p-5">
    <form action="/users" method="GET">
    {{ csrf_field() }}
        <div class="form-group mt-3">
            <label for="name">Nome completo:</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="digite aqui...">
        </div>
        <div class="form-group mt-3">
            <label for="login">Login:</label>
            <input type="text" class="form-control" name="login" id="login" placeholder="digite aqui...">
        </div>
        <div class="form-group mt-3">
            <label for="senha">Senha:</label>
            <input type="password" class="form-control" name="senha" id="senha" placeholder="digite aqui...">
        </div>
        <div class="form-group mt-3">
            <label for="profile">Perfil:</label>
            <select name="select" class="w-100">
                <option id="profile" value="itemsProfile[]">Visualizador</option>
                <option id="profile" value="itemsProfile[]">Operador</option>
                <option id="profile" value="itemsProfile[]">Administrador</option>
            </select>
        </div>
        <input type="submit" class="btn btn-success mt-3" value="Salvar registro">
    </form>

</section>

@endsection