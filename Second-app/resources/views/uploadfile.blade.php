<h1>Upload File</h1>

<form action="uploadfile" method="POST" enctype="multipart/form-data">
    @csrf
<input type="file" name="file"><br><br>
<button type="submit">Upload</button>
</form>