<h1>User List</h1>
</br>
<table border="1">
<tr>
    <td>ID</td>
    <td>Name</td>
    <td>Email</td>
    <td>Image_File</td>
</tr>
@foreach($collection as $user)
<tr>
    <td>{{$user['id']}}</td>
    <td>{{$user['name']}}</td>
    <td>{{$user['email']}}</td>
    <td><img src={{$user['avatar']}} alt="profile pics"></td>
</tr>
@endforeach
</table>

*/