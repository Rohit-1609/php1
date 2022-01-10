<h1>User login page</h1>

<form action="users3" method="POST">
    @csrf
<input  type="text" name="user" placeholder="Enter user name:-"> <br> <br>
<input  type="password" name="password" placeholder="Enter user password:-"> <br> <br>
<button>Login</button>
</form>
