<style>
    .comment-nickname{
        width: 70%;
        float: left;
        text-align: left;
    }
    .commnet-recommend{
        width: 30%;
        float: left;
        text-align: right;
    }
    .comment-content{
        min-width: 100%;
    }
</style>

<x-layout>
    <x-slot:title>
        Post
    </x-slot:title>
    <x-board/>
<div class="container-lb" style="text-align: center">
    <p>{{ $post->title }}</p>
    <p>{{ $post->created_at }}</p>
    <p>{{ $post->content }}</p>
    <div>
        @foreach ($comments as $comment)
            <div>
                <div class="comment-nickname">
                    {{ $comment->name }}
                </div>
                <div class="comment-recommend">
                    <button type="button">Recommend - {{ $comment->recommend }}</button>
                    <button type="button">UnRecommend - {{ $comment->unrecommend }}</button>
                </div>
                <div class="comment-content">{{ $comment->content }}</div>
            </div>
        @endforeach
    </div>
</div>
</x-layout>
