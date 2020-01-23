@extends('layouts.app')

@section('content')
	
	<div class="container">
		<form class="form-horizontal" action="{{ url('/update_user', $user['id']) }}" method="post">
			<!--<input type="hidden" name="_method" value="put">-->
		  {{ csrf_field() }}
			<fieldset class="form-horizontal">
			  <div class="form-group"><label class="col-sm-2 control-label">Имя:</label>
			    <div class="col-sm-10">
			      <input type="text" name="name" class="form-control" placeholder="" value="{{ $user['name'] }}">
			    </div>
			  </div>
			  <div class="form-group"><label class="col-sm-2 control-label">E-mail:</label>
			    <div class="col-sm-10">
			      <input type="text" name="email" class="form-control" placeholder="" value="{{$user['email']}}">
			    </div>
			  </div>
			  <div class="form-group"><label class="col-sm-2 control-label">Пароль:</label>
			    <div class="col-sm-10">
			      <input type="password" name="password" class="form-control" placeholder="" value="">
			    </div>
			  </div>
			  @foreach ($user['services'] as $ser)
				  <div class="form-group"><label class="col-sm-2 control-label">Услуга:</label>
					<div class="col-sm-10">
					  <input type="text" name="service" class="form-control" placeholder="" value="{{ $ser['name_serv']}}">
					</div>
				  </div>
			 @endforeach
			  @foreach ($user['employees'] as $emp)
				  <div class="form-group"><label class="col-sm-2 control-label">Мастер:</label>
					<div class="col-sm-10">
					  <input type="text" name="service" class="form-control" placeholder="" value="{{ $emp['employee']}}">
					</div>
				  </div>
			 @endforeach
			  <div class="form-group">
			    <div class="col-sm-4 col-sm-offset-2">
			      <button class="btn btn-primary" type="submit">Сохранить</button>
			    </div>
			  </div>
		  	</fieldset>
		</form>
	</div>

@endsection