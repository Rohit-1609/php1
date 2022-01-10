<h1>Member list</h1>

<table border="1">
  @foreach($data as $item)
      <tr>
             <td>{{$item->id}}</td>
             <td>{{$item->name}}</td>
             <td>{{$item->email}}</td>   
             <td>{{$item->address}}</td>
      </tr>
  @endforeach
</table>