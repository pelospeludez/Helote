@extends('layouts.app')

@section('content')
    <h1>Create an article</h1>
    <hr/>
    {!! Form::open(array('action' => array('ArticleController@store','files' => true))) !!}

    <div class="form-group">
        {{Form::label('tittle','Tittle:')}}
        {{Form::text('tittle',null,['class'=>'form-control'])}}
    </div>


    <div class="form-group">
        {{Form::label('Body','Body:')}}
        {{Form::textarea('Body',null,['class'=>'form-control'])}}
    </div>

    <div class="form-group">
        {!!Form::submit('Add article',['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
@endsection

