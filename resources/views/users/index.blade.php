@extends('layouts.app')

@section('content')
	<div class="container">
		<h1>Записи на услугу</h1>
		<a href="{{url('/create_user')}}" class="btn btn-primary">Создать</a>
		
		<hr>

		<table class="footable table table-stripped toggle-arrow-tiny" data-page-size="20">
		  <thead>
		    <tr>
		      <th data-toggle="true">Имя</th>
		      <th data-toggle="true">E-mail</th>
		      <th data-hide="phone">Услуга</th>
			  <th data-hide="phone">Цена</th>
			  <th data-hide="phone">Мастер</th>
		      <th class="text-right" data-sort-ignore="true">Действие</th>
		    </tr>
		  </thead>
		  <tbody>
		    @forelse ($data as $d)
		      <tr>
		        <td>{{ $d['name'] }}</td>
		        <td>{{ $d['email'] }}</td>
		        <td>
					@foreach($d['order'] as $ord)
						<p>{{ $ord['name_serv'] }}</p>	
					@endforeach
				</td>
				<td>
					@foreach($d['order'] as $ord)
				 <p>{{ $ord['cost'] }} </p>
					@endforeach
				</td>
				<td>
					@foreach($d['order'] as $ord)
						<p>{{ $ord['employee'] }} </p>
					@endforeach
				</td>
		        <td class="text-right">
		          <form onsubmit="if(confirm('Удалить?')){ return true }else{ return false }" method="POST" action="{{ url('/delete_user', $d['id'])}}" method="post">
		            <!--<input type="hidden" name="_method" value="DELETE">-->
		            {{ csrf_field() }}
		            <div class="btn-group">
		              <a class="btn btn-primary" href="{{ url('/edit_user', $d['id']) }}">Редактировать</a>
		              <button type="submit" class="btn btn-danger">Удалить</button>
		            </div>
		          </form>
		        </td>
		      </tr>
		    @empty
		      <tr>
		        <td colspan="5" class="text-center">
		          <h2 class="ui center aligned icon header" class="center aligned">
		            <i class="circular database icon"></i>
		            Данные отсутствуют
		          </h2>
		        </td>
		      </tr>
		    @endforelse

		  </tbody>
		</table>
	</div>
@endsection