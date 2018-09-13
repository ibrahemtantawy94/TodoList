<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>todo</title>
</head>
<body>
    @include('inc.navbar')
    <div class="container">
            @include('inc.messages')
                @yield('content')
            </div>
            <footer id="footer" class="text-center">
                <p>Copyright &copy; 2018 TodosApp</p>
            </footer>
</body>
</html>