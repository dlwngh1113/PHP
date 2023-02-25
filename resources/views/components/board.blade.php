<style>
.banner-label{
    width: inherit;
    float: left;
    padding: 10px;
    text-align: center;
    align-content: center;
    color: black;
    background-color: #99C1F1;
}
ul li { float: left; margin-left: 20px; list-style: none;}
.navbar-nav{
    color: #c4db66;
}
.nav-link{
    color: black;
    text-decoration: none;
}
</style>

<ul class="banner-label">
    @foreach ($boards as $board)
        <li class="nav-item">
            <a class="nav-link" href="{{ route('board.', $board->id) }}">{{ $board->name }}</a>
        </li>
    @endforeach
</ul>
