<h1> Member List</h1>

<table  border = "1" >
    <tr>
        <td>Id</td>
        <td>Name</td>
        <td>Email</td>
        <td>Address</td>
        <td>Action</td>
      
      </tr>
      @foreach($members as $member)
     <tr>
          <td>{{ $member['id'] }}</td>
          <td>{{ $member['name'] }}</td>
          <td>{{ $member['email'] }}</td>
          <td>{{ $member['address'] }}</td>
          <td><a href={{"delete/" . $member['id'] }}>Delete</a></td>
          <td><a href={{"update/" . $member['id'] }} >Update</a></td>
     </tr>
     @endforeach
</table>

<!--
<div>
  {{$members->links()}}
</div>
-->call_user_func

<!--
<style>
   .w-5
   {
       display:none;
   }

</style>
-->