<x-layout>
    <x-slot:title>
        New Post
    </x-slot:title>
    <form method="POST" action="{{ route('board.store', ['id' => $id]) }}">
        @csrf
        <p style="min-width: 100%;"><input type="text" name="title" placeholder="title" style="min-width: inherit"></p>
        @error('title')
            <p class="error">{{ $errors->first('title') }}</p>
        @enderror
        <p style="min-width: 100%"><input type="text" name="content" placeholder="content" style="min-height: 50vh; min-width: inherit;"></p>
        @error('content')
            <p class="error">{{ $errors->first('content') }}</p>
        @enderror
        <button type="submit">Put up</button>
    </form>
</x-layout>
