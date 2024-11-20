
<table border='2'>

    <tr>
        <th>id</th>
        <th>name</th>
        <th>descripotion</th>
        <th>created at </th>
        <th>updatedat</th>
        <th>ACtions</th>
    </tr>
    @foreach ($categories as  $category)
<tr>
    <td>{{ $category->id }}</td>
    <td>{{ $category->name }}</td>
    <td>{{ $category->description }}</td>
    <td>{{ $category->created_at }}</td>
    <td>{{ $category->updated_at }}</td>
    <td>
         <a href="{{ URL('/categories/'.$category->id) }}">Show</a>
         <a href="{{ URL('/categories/'.$category->id) }}">delete</a>
         <a href="{{ URL('/categories/'.$category->id) }}">edit</a>
        </td>
</tr>
    @endforeach
</table>
