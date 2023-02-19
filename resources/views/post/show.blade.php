<x-layout>
    <x-slot:title>
        Post
    </x-slot:title>
    <x-board/>
<div class="container-lb" style="text-align: center">
    <p>{{ $post->title }}</p>
    <p>{{ $post->created_at }}</p>
    <p>{{ $post->content }}</p>
    <x-comment post-id="{{ $post->id }}"/>
</div>
</x-layout>
