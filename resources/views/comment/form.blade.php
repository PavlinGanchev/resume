@extends('main')

@section('content')
    {!! Breadcrumbs::render('comment')  !!}
{!! Form::open([ 'action' => 'CommentController@store'])!!}
<div class="container">

    @include('errors.errorLogic')
    @include('partials.commentForm', array('submitText' => 'Create new comment'))

</div>
{!! Form::close() !!}
@stop