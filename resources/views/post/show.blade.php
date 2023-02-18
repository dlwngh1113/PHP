<x-layout>
    <x-slot:title>
        Post
    </x-slot:title>
    <x-board/>
<div style="text-align: center">
    <p>{{ $post->title }}</p>
    <p>{{ $post->created_at }}</p>
</div>
<div class="container-lb" style="text-align: center">
    <p>{{ $post->content }}</p>
</div>
</x-layout>
