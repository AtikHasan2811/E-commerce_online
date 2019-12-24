<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('/')}}favicon.ico">

    <title>@yield('title','Master page')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('/')}}dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('/')}}dist/css/dashboard.css" rel="stylesheet">
</head>

<body>
@include('admin.nav')

<div class="container-fluid">
    <div class="row">
        @include('admin.sidebar')

       @yield('content')
    </div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="{{asset('/')}}dist/js/jquery-slim.min.js"><\/script>')</script>
<script src="{{asset('/')}}dist/js/popper.min.js"></script>
<script src="{{asset('/')}}dist/js/bootstrap.min.js"></script>

<!-- Icons -->
<script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
<script>
    feather.replace()
</script>

</body>
</html>
