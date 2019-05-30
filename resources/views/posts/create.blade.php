@extends('layouts.app')

@section('content')
        <h1>Create Post</h1>  
           {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST' ])!!}
            <div class="form-ground">
                {{form::label('title', 'Title')}}
            {{form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
           
             {!! Form::close() !!}
            </div>
            <div class="form-ground">
                    {{form::label('body', 'Body')}}
                {{form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Body Text'])}}
            </div>
            {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
            {!! Form::close() !!}
@endsection