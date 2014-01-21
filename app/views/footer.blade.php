@section("footer")
    <div class="footer">
        <div class="container">
            @if (Auth::check())
                <a href="{{ URL::route("user/logout") }}">
                    Logout {{ Auth::user()->username }}
                </a>
            @else
                <a href="{{ URL::route("user/login") }}">
                    Login
                </a>
            @endif
        </div>
    </div>
@show