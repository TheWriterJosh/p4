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
      {{ Session::get('flash_message') }}
    @endif
    <header>
        <img
        src='http://pbs.twimg.com/media/CkYFVmzWUAAvxoa.jpg'
        style='width:100%'
        alt='Travel Photo'>
    </header>
    <section>
        @yield('content')
    </section>
    <footer>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
      @yield('body')
</body>
</html>
