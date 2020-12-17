@extends('layout')

@section('title')Отзывы@endsection

@section('main_content')
<div class="container-fluid">
	<h1>Отзывы</h1>

	@if($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
	@endif
	
	<form method="post" action="/review/check">
		@csrf
		<input type="email" name="email" id="email" placeholder="Введите Ваш email" class="form-control"></br>
		<input type="text" name="subject" id="subject" placeholder="Введите Ваш отзыв" class="form-control"></br>
		<textarea name="message" id="message" placeholder="Введите сообщение" class="form-control"></textarea></br>
		<button type="submit" class="btn btn-success">Отправить</button>
	</form>
</div>
@endsection