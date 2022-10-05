<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Category Name</th>
        </tr>
    </thead>
    <tbody>
    @foreach($category as $c)
    <tr>
        <td>{{$c->id}}</td>
        <td>{{$c->category_name}}</td>
    </tr>
    @endforeach
    </tbody>
</table>