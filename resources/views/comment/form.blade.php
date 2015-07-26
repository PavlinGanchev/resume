@extends('main')

@section('content')
{!! Form::open([ 'action' => 'CommentController@store'])!!}
<div class="container">

    @include('errors.errorLogic')


    <div class="row uniform">
        <div class="12u">
            {!! Form::label('title','Title:') !!}
            {!! Form::text('title' ) !!}
        </div>
    </div>

    <div class="row uniform">
        <div class="12u">
            {!! Form::label('body','Body:') !!}
            {!! Form::textarea('body') !!}
        </div>
    </div>
     <div class="row uniform">
         <ul class="actions">
             <li>
                 {!! Form::submit( 'Add new comment', ['class' => 'button special']) !!}
             </li>
             <li>
                 {!! Form::reset( 'Reset the form') !!}
             </li>
         </ul>

     </div>
</div>
{!! Form::close() !!}
@stop