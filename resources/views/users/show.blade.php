@extends('layouts.app')

@section('content')
	<div class="container">
		<a href="{{route('user.index')}}" class="btn btn-primary">Назад</a>
		<hr>
		<ul>
			<li>Name: {{$user -> name or ''}}</li>
			<li>Email: {{$user -> email or ''}}</li>
			<li>Service: {{$user -> order -> service or ''}}</li>
		</ul>
	</div>
@endsection