<p>Welcome, {{ Auth::user()->username }}</p>
<br/>
<a href='{{ route('logout') }}'>Logout</a>
