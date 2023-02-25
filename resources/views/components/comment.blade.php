<style>
    .comment-nickname{
        width: 70%;
        float: left;
        text-align: left;
        background-color: #e2eeae;
    }
    .commnet-like{
        width: 30%;
        float: left;
        text-align: right;
        background-color: #e2eeae;
    }
    .comment-content{
        min-width: inherit;
        background-color: #acbb6b;
    }
</style>

<div>
    <p style="text-align: left"><strong>댓글 목록</strong></p>
    @foreach ($comments as $comment)
        <div>
            <div class="comment-nickname">
                {{ $comment->name }}
            </div>
            <div class="comment-like">
                <button type="button" onclick="location.href='{{ route('comment.verificate_like', ['commentId' => $comment->id]) }}'"><img src="{{ asset('image/thumb.png') }}" alt="thunb comment" width="25px">{{ $comment->like }}</button>
                <button type="button" onclick="location.href='{{ route('comment.verificate_dislike', ['commentId' => $comment->id]) }}'"><img src="{{ asset('image/unthumb.png') }}" alt="unthumb comment" width="25px">{{ $comment->dislike }}</button>
            </div>
            <div class="comment-content">{{ $comment->content }}</div>
        </div>
    @endforeach

    <p style="text-align: left"><strong>댓글 쓰기</strong></p>
    <form method="POST" action="{{ route('comment.register') }}">
        @csrf
        <input type="text" placeholder="content" name="content">
        <input type="hidden" name="postId" value="{{ $comment->post_id }}">
        <input type="submit" value="write">
    </form>
</div>
