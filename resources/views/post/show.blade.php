<x-layout>
    <x-slot:title>
        Post
    </x-slot:title>
<div class="container-lb" style="text-align: center">
    <p>{{ $post->title }}</p>
    <p>{{ $post->created_at }}</p>
    <p>{{ $post->content }}</p>
    <x-post post-id="{{ $post->id }}"/>
</div>
</x-layout>
