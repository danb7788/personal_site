<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Dan Berges</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="/css/style.css">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet"> 
</head>

<body>
    <nav class="navbar navbar-expand-sm pt-3">
        <a class="nav-link" href="/">Dan Berges</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
            </span>
        </button>  
        <div class="collapse navbar-collapse" id="main-navbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/companies">Companies</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="writing" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Writing</a>
                    <div class="dropdown-menu" aria-labelledby="writing">
                        <a class="dropdown-item" href="/writing/articles">Articles</a>
                        <a class="dropdown-item" href="/writing/books">Books</a>
                        <a class="dropdown-item" target="_blank" href="https://danberges.wordpress.com/">Fiction</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/coding">Coding</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="podcasting">Podcasting</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/music">Music</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="consulting">Consulting</a>
                </li>
            </ul>
        </div>
    </nav>

    <main role="main" @if(!isset($wide)) class="container" @else class="container-fluid" @endif>
        @yield('content')
    </main>

    <footer class="footer">
        <div class="container text-center text-muted">
            <p>©{{Carbon\Carbon::now()->format('Y')}} Dan Berges</p>
        </div>
    </footer>
</body>
</html>
