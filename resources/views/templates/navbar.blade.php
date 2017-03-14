<div class="nav navbar-default">
    <a class="navbar-brand" href="{{ route('home') }}">ToDo-List</a>
    <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
            @if(Auth::check())
                <li><a href="#">{{ Auth::user()->username }}</a></li>
                <li><a href="{{ route('signout') }}">SignOut</a></li>
            @else
                <li><a href="{{ route('signin') }}">SignIn</a></li>
                <li><a href="{{ route('signup') }}">SignUp</a></li>
            @endif
        </ul>
    </div>
</div>