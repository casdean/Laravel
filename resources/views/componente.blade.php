<div>
    <!-- Because you are alive, everything is possible. - Thich Nhat Hanh -->

    
    @foreach($componentes as $componente)
        <h3>{{ $componente->nome }}</h3>
        <h3>{{ $componente->horario}}</h3>
        
    @endforeach




</div>
