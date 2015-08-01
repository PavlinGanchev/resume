
<h3>Comments</h3>

@if( $comments )
    @foreach($comments as $comment)
        <hr/>
        <article>

            <h4>{{ $comment->title }}</h4>

            <div><p>{{ $comment->body }}</p></div>
            <div>
                <p class="viewPublished">Published by:<br/> Date: {{ $comment->published_at }}</p>
            </div>
        </article>
        @if( Auth::user()->id == $comment->user_id)
            <a href="{{ action('CommentController@edit', array('id' => $comment->id)) }}" class="button special">Edit</a>
        @endif
    @endforeach
@else
    <article>hello</article>
@endif