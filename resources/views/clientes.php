<table border="1">
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Ações</th>
    </tr>
    
    
    @foreach ($clientes as $cliente)
        <tr>
            <td>{{ $cliente['id'] }}</td>
            <td>{{ $cliente['nome'] }}</td>
        </tr>
    @endforeach
    
        
    
</table>