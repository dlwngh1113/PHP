<x-layout>
    <x-slot:title>
        Post
    </x-slot:title>
    <p>{{ $post->title }}</p>
    <p>{{ $post->created_at }}</p>
    <p>{{ $post->content }}</p>
    <x-post post-id="{{ $post->id }}"/>
</x-layout>
