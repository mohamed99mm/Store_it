<body>
<table border="2px">
<td>id</td>
<td>math</td>
<td>physics</td>
<td>created date</td>
<td>update date</td>
@foreach($results as $result)
    <tr>
        <td>{{$result->id}}</td>
        <td>{{$result->math}}</td>
        <td>{{$result->physics}}</td>
        <td>{{$result->created_at}}</td>
        <td>{{$result->updated_at}}</td>
        <td><button><></button></td>
    </tr>
    @endforeach
    </table>
</body>
