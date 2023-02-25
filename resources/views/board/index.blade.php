<x-layout>
    <x-slot:title>
        Board
    </x-slot:title>
    <div class="container-lb">
        <table style="text-align: center">
            <th>title</th>
            <th>created_at</th>
            @foreach ($posts as $post)
                <tr>
                    <td><a href="{{ route('board.show', ['id' => $id, 'post' => $post->id]) }}">{{ $post->title }}</a></td>
                    <td>{{ $post->created_at }}</td>
                </tr>
            @endforeach
        </table>

        {{ $posts->links() }}

        <button type="button" onclick="location.href='{{ route('board.index', ['id' => $id]) }}'">New Post</button>
    </div>
</x-layout>
