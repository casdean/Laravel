<div>
<form action=" {{ route('admin.add') }} " method="post">
        @csrf
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome">

        <label for="nome">Email:</label>
        <input type="text" name="nome" id="nome">

        <label for="nome">Telefone:</label>
        <input type="text" name="nome" id="nome">

        <label for="nome">CPF::</label>
        <input type="text" name="nome" id="nome">

        <label for="nome">Usuário:</label>
        <input type="text" name="nome" id="nome">

        <label for="nome">Senha:</label>
        <input type="text" name="nome" id="nome">

        <label for="nome">Status:</label>
        <input type="text" name="nome" id="nome">

        <button type="submit">Enviar</button>

    @isset($success)
            <h1>{{ $success }}</h1>
        @endisset
    </form>

    <table border="1">
        <tr>
            <td>Nome do Admin</td>
            <td colspan="2">Ações</td>
        </tr>
        @isset($admins)
                @foreach($admins as $admin)
                    <tr>
                        <td>
                        <h3>{{ $admin->nome }}</h3>
                        <h3>{{ $admin->email }}</h3>
                        <h3>{{ $admin->telefone }}</h3>
                        <h3>{{ $admin->cpf }}</h3>
                        <h3>{{ $admin->usuario }}</h3>
                        <h3>{{ $admin->senha }}</h3>
                        <h3>{{ $admin->status }}</h3>
                        </td>
                        <td>
                            <form action="{{ route('admin.remove', ['id' => $admin->id]) }}" method="GET">
                                <button type="submit">Remover</button>
                            </form>
                        </td>
                            <form action="{{ route('admin.atualizar', ['id' => $admin->id]) }}" method="GET">
                                <button type="submit">Atualizar</button>
                            </form>
            
                        <td>
                            <button type="submit">Atualizar</button>
                        </td>
                    </tr>
                @endforeach
        @endisset
    </table>
</div>
