<div>
    <!-- Simplicity is the consequence of refined emotions. - Jean D'Alembert -->

    @foreach($cursos as $curso)
        <h3>{{ $curso->nome }}</h3>
        <h3>{{ $curso->periodo }}</h3>
        
    @endforeach
</div>
