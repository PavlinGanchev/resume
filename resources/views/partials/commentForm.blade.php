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
            {!! Form::submit( $submitText, ['class' => 'button special']) !!}
        </li>
        <li>
            {!! Form::reset( 'Reset the form') !!}
        </li>
    </ul>

</div>