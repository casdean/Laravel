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

    @isset($professor)
            @foreach($professores as $professor)
                <h3>{{ $professor->nome }}</h3>
                <h3>{{ $professor->email }}</h3>
                <h3>{{ $professor->telefone }}</h3>
            @endforeach
    @endisset
</div>
