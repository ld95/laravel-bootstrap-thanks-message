<!doctype html>
<html lang="en">
@include('includes.head')
<body>
<div class="container">
    <header class="container">
        @include('includes.mainNav')
    </header>
    <main role="main">
        @yield('content')
    </main>

    <footer>
        @include('includes.footer')
    </footer>
</div>

</body>
</html>