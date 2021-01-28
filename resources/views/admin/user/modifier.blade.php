<?php 
     use App\Models\User;
    
     $users = User::all();
?>
<h1>MODIFIER User</h1>

@foreach($users as $user)
<form method="POST">
    @csrf
<input type="hidden" name='id' value="{{$user->id}}">

    <p>Nom : </p>
    <input type="text" name='name' value="{{$user->name}}"/>

    <p>Email :</p>
    <input type="text" name="email" value="{{$user->email}}"/>
    <button type="submit">MODIFIER</button>
</form>
@endforeach