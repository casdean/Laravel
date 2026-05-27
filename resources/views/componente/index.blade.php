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

    @isset($componentes)
            @foreach($componentes as $componente)
                <h3>{{ $componente->nome }}</h3>
                <h3>{{ $componente->hora_inicio }}</h3>
                <h3>{{ $componente->hora_fim }}</h3>
            @endforeach
    @endisset
</div>
