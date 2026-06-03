<div>
    <form action=" {{ route('prof.add') }} " method="post">
        @csrf
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome">

        <label for="email">Email:</label>
        <input type="text" name="email" id="email">

        <label for="telefone">telefone:</label>
        <input type="text" name="telefone" id="telefone">

        <button type="submit">Enviar</button>

    @isset($success)
            <h1>{{ $success }}</h1>
        @endisset
    </form>

    <table border="1">
        <tr>
            <td>Nome do Professor</td>
            <td colspan="2">Ações</td>
        </tr>
        @isset($professores)
                @foreach($professores as $professor)
                    <tr>
                        <td>
                        <h3>{{ $professor->nome }}</h3>
                        <h3>{{ $professor->email }}</h3>
                        <h3>{{ $professor->telefone }}</h3>
                        </td>
                        <td>
                            <form action="{{ route('prof.remove', ['id' => $professor->id]) }}" method="GET">
                                <button type="submit">Remover</button>
                            </form>
                        </td>
                            <form action="{{ route('prof.atualizar', ['id' => $professor->id]) }}" method="GET">
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
