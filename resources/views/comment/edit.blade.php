@extends('main')

@section('content')
    {!! Breadcrumbs::render('commentEdit')  !!}
    {!! Form::model($comment, ['method'=> 'PATCH', 'action' => array('CommentController@update', $comment->id)])!!}
    <div class="container">

        @include('errors.errorLogic')
        @include('partials.commentForm', array('submitText' => 'Update your comment'))


    </div>
    {!! Form::close() !!}
@stop