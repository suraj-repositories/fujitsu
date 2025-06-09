@auth
    Role : {{ Auth::user()->hasRole('user') ? 'User' : (Auth::user()->hasRole('admin') ? 'admin' : 'superadmin') }}<br>
    <form action="{{ route('logout') }}" method="post"><button type="submit">LOGOUT</button></form>
@endauth

@guest
    <form action="{{ route('login') }}"><button type="submit">LOGIN</button></form>
@endguest
