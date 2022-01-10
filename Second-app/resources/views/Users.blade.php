<h1> Users Page </h1> 
@include('inner')

<h1> Hello {{$users}}</h1> 

@if($users=="Aniket")
<h2>Hello, {{$users}}</h2>
@elseif($users=="Rishabh")
<h2>Hello, {{$users}}</h2>
@else
<h2>Hello, {{$users}}</h2>
@endif

@foreach($users as $user)
<h3>{{$user}}</h3> 
@endforeach


