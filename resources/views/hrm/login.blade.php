@extends('hrm.layout')
@section('content')
<div class="card">
  <div class="card-header">Login</div>
  <div class="card-body">
      
      <form action="" method="POST">
        {!! csrf_field() !!}
        
        <label>email</label></br>
        <input type="text" name="Username" id="username" value="{{@$superadmin->username}}" class="form-control"></br>
        <label>Mobile</label></br>
        <input type="text" name="Password" id="password" value="{{@$superadmin->password}}" class="form-control"></br>
        <input type="submit" value="login" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop