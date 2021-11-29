<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Happy Book Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link text-light" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Category
                </a>
                <ul class="dropdown-menu text-light" aria-labelledby="navbarDropdown">
                    @foreach ($categories as $c)
                        <li><a class="dropdown-item" href="/category/{{$c->id}}">{{$c->category}}</a></li>
                    @endforeach
                </ul>
                </li>              
                <li class="nav-item">
                <a class="nav-link text-light" href="/contact">Contact</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    <section>
        <div class="container min-vh-100">
            <div class="row">
                <h1 class="my-3">@yield('heading')</h1>
                <div class="col-10">
                    @yield('main')
                </div>
                <div class="col-2">
                    <table class="table table-warning">
                        <thead>
                            <tr class="table-dark text-light">
                                <th>Categories</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                                <tr>
                                    <td><a href="/category/{{$category->id}}">{{$category->category}}</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>                    
                </div>
            </div>
        </div>
    </section>
    <footer class="bg-primary text-light text-center py-3">
        HAPPY BOOK STORE ALL RIGHT RESERVED
    </footer>
    <script 
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
        crossorigin="anonymous"
    ></script>
</body>
</html>