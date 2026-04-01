<div>
    <!-- Act only according to that maxim whereby you can, at the same time, will that it should become a universal law. - Immanuel Kant -->

    @foreach($professores as $professor)
        <h3>{{ $professor->nome }}</h3>
        <h3>{{ $professor->cpf}}</h3>
        
    @endforeach

</div>
