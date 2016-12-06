<!DOCTYPE html>
<html>
<head>
    <title>
        @yield('title','Bucket List Manager')
    </title>
    <meta charset='utf-8'>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type='text/css' rel='stylesheet'>
    @yield('head')
</head>
<body>
  @if(Session::get('flash_message') != null)
       <div class='flash_message'>{{ Session::get('flash_message') }}</div>
   @endif
  @if(session('success'))
    {{ session('success') }}
  @endif
    <header>
        <img
        src='http://pbs.twimg.com/media/CkYFVmzWUAAvxoa.jpg'
        style='width:100%'
        alt='Travel Photo'>
    </header>
    <nav class="nav navbar-light bg-faded">
    <ul class="nav navbar-nav" role="navigation">
        @if(Auth::check())
            <li><a href='/'>Home</a></li>
            <li><a href='/bucketlist/create'>Add a Destination!</a></li>
            <li><a href='/auth/logout'>Log out</a></li>
        @else
            <li><a href='/'>Home</a></li>
            <li><a href='/auth/login'>Log in</a></li>
            <li><a href='/auth/register'>Register</a></li>
        @endif
    </ul>
</nav>
    <section>
        @yield('content')
    </section>
    <footer>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</body>
</html>
