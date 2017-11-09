@extends('layouts.admin')
@section('content')

<h1>Edit Post</h1>

<div class="row">

	<div class="col-sm-3">
		<img src="{{$post->photo ? '/photos/shares/' . $post->photo->file : 'http://placehold.it/400x400'}}" alt="" class="img-responsive">
	</div>

	<div class="col-sm-9">

	{!! Form::model($post, ['route' => ['update', $post->id], 'method' => 'PATCH']) !!}

		<div class="form-group">
			{!! Form::label('title', 'Title:') !!}
			{!! Form::text('title', null, ['class'=>'form-control']) !!}
		</div>

{{-- 		<div class="form-group">
			{!! Form::label('category_id', 'Category:') !!}
			{!! Form::select('category_id', $categories, null, ['class'=>'form-control']) !!}
		</div> --}}

		<div class="form-group">
			{!! Form::label('photo_id', 'Photo:') !!}
			{!! Form::file('photo_id', null, ['class'=>'form-control']) !!}
		</div>	

		<div class="form-group">
			{!! Form::label('body', 'Content:') !!}
			{!! Form::textarea('body', null, ['class'=>'form-control']) !!}
		</div>	

		<div class="form-group">
			{!! Form::submit('Update Post', ['class'=>'btn btn-primary col-sm-6']) !!}
		</div>

	{!! Form::close() !!}

{{-- 	{!! Form::open(['method'=>'DELETE', 'action'=>['AdminPostsController@destroy', $post->id]]) !!}
	
		<div class="form-group">
			{!! Form::submit('Delete Post', ['class'=>'btn btn-danger col-sm-6']) !!}
		</div>
	


	{!! Form::close() !!} --}}
	</div>
</div>

{{-- <div class="row">
	@include('includes.form-error')
</div> --}}
@include('includes.tinyeditor')
@stop