@extends('admin.app')
		
@section('content')
<div class="container">  
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">Register System</div>

        <div class="panel-body">

          @if (count($errors) > 0)
            <div class="alert alert-danger">
              <strong>Whoops!</strong> There were some problems with your input.<br><br>
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif

          <form action="{{ URL('admin/users') }}" enctype="multipart/form-data" method="POST">
         
      
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            User Name:<input type="text" name="name" class="form-control" required="required">
            <br>
            Email Address:<input type="text" name="email" class="form-control" required="required">
            <br>
            Password: <input type="password" name="password" class="form-control" required="required">
            <br>
             Re-enter:<input type="password" name="password_confirmation" class="form-control" required="required">
            <br/><br/><button class="btn btn-lg btn-info">Submit</button>
      
          </form>

        </div>
      </div>
    </div>
  </div>
</div>  
@endsection

 