<ul class="banner-label">
    @foreach ($boards as $board)
        <li class="nav-item">
            <a class="nav-link" href="{{ route('board.', $board->id) }}">{{ $board->name }}</a>
        </li>
    @endforeach
</ul>
