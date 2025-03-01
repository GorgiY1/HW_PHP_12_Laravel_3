<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/script.js') }}"></script>
    <title>Tasks</title>
    <style>
        main {
            align-self: center;
            align-content: center;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <header>
            <div class="menu">
                <a href="/">Tasks</a>
                <a href="/create">Create</a>

            </div>
        </header>
        <hr>
        <main>
            @yield('content')
        </main>
        <hr>
        <footer id="footerId" class="w-100 bg-dark ">
             <div class="footer_parent">
                <p id="copyright"></p>
             </div>
        </footer>
    </div>
</body>
</html>
