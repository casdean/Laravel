<div>
    <form action=" {{ route('comp.add') }} " method="post">
        @csrf
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome">

        <label for="hora_inicio">Hora de Início:</label>
        <input type="text" name="inicio" id="inicio">

        <label for="hora_fim">Hora Final:</label>
        <input type="text" name="fim" id="fim">

        <button type="submit">Enviar</button>

    @isset($success)
            <h1>{{ $success }}</h1>
        @endisset
    </form>

    <table border="1">
        <tr>
            <td>Nome do Componente</td>
            <td colspan="2">Ações</td>
        </tr>
        @isset($componentes)
                @foreach($componentes as $componente)
                    <tr>
                        <td>
                        <h3>{{ $componente->nome }}</h3>
                        <h3>{{ $componente->hora_inicio }}</h3>
                        <h3>{{ $componente->hora_fim }}</h3>
                        </td>
                        <td>
                            <form action="{{ route('comp.remove', ['id' => $componente->id]) }}" method="GET">
                                <button type="submit">Remover</button>
                            </form>
                        </td>
                            <form action="{{ route('comp.atualizar', ['id' => $componente->id]) }}" method="GET">
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
