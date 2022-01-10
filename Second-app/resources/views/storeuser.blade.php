<h1> Add new menber </h1>
@if(session('user'))
   <h3>Data Saved For {{session('user')}}</h3>
@endif
<form action ="storeu" method="POST">
    @csrf
<input type="text" name="user" placeholder="Enter user name"><br><br>
<input type="password" name="password" placeholder="Enter user password"><br><br>
<input type="text" name="email" placeholder="Enter user email"><br><br>
<button type="submit">Add user</button>
</form>

