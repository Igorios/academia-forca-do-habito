
@extends ('layouts.estrutura')

@section('titulo', 'Força do Hábito')

@section('content')

<p class="localizacao-mapa"><ion-icon name="home"></ion-icon>Home > <ion-icon name="pencil"></ion-icon>Relatório Usuário</p>

<div class="col-md-10 offset-md-1 dashboard-events-container">
    @if ( count($register) > 0) 

    <table class="table">
        <thead>
            <tr>
                <hr class="m-auto">
                <th scope="col">Nome</th>
                <th scope="col">Login</th>
                <th scope="col">Perfil</th>
                <th scope="col">Menu</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($register as $register)
            <tr>
                <td>{{ $register->name }}</td>
                <td>{{ $register->login }}</td>
                <td>{{ $register->profile }}<td> 
                <form action="/users/{{ $register->id }}" method="POST">
                {{ csrf_field() }}
                @method('DELETE')
                    <button type="submit" class="btn delete-btn">
                        <ion-icon name="trash-outline"></ion-icon>Deletar
                    </button>
                </form>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
        <hr>
        <p>Nenhum registro Aqui :(</p>
        <p>Faça o seu <a href="/users/user">registro</a></p>
    @endif
</div>

@endsection