@extends('layouts.app');

@section('content')

	<h4 class="page-header">
		글 수정
	</h4>


 	<form method="post" action="{{ route('posts.update', $post->id) }}">
 	{!! csrf_field() !!}

 	@include('posts.partial.form')

 	<div class="form-group text-center">
 		<button type='submit' class='btn btn-primary'> 수정</button>
 	</div>
 		
 	</form>
 	

@endsection