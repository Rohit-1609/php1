<div> 
@for($i=0;$i<10;$i++)
<h3> {{$i}}</h3>
@endfor
</div>



@foreach($users as $user)
<h3>{{$user}}</h3> 
@endforeach


<script>
   var data = @json($users);
   console.warn(data[0])
</script>