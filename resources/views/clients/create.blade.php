
@extends ('layouts.estrutura')

@section('titulo', 'Força do Hábito')

@section('content')

<p class="localizacao-mapa"><ion-icon name="home"></ion-icon>Home > <ion-icon name="pencil"></ion-icon>Cadastrar Cliente</p>
<section class="mt-5 p-5">
    <form action="/clients" method="POST">
    {{ csrf_field() }}
        <div class="form-group">
            <label for="name">Nome do Cliente:</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="digite aqui..." required>
        </div>
        <div class="form-group mt-3">
            <label for="category">Categoria:</label> <br>
            <select name="category" class="w-100">
                <option value="gratis">Grátis</option>
                <option value="normal">Normal</option>
                <option value="premio">Prêmio</option>
            </select>
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