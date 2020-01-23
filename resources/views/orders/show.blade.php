@extends('layouts.app')

@section('content')
	<div class="container">
		<a href="{{route('user.index')}}" class="btn btn-primary">Назад</a>
		<hr>
		<ul>
			<li>Service: {{$order -> service or ''}}</li>
			<li>User name: {{$order -> user -> name  or ''}}</li>
			<li>User email: {{$order -> user -> email  or ''}}</li>
		</ul>
	</div>
@endsection