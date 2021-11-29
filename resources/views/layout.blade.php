<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Happy Book Store</title>
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
        crossorigin="anonymous"
    >
</head>
<body>
    <header class="p-5 bg-primary">
       <h1 class="text-center text-light">Happy Book Store</h1>
    </header>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container d-flex justify-content-center">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-primary" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a 
                        class="nav-link dropdown-toggle text-primary" 
                        href="#" id="navbarDropdown" 
                        role="button" 
                        data-bs-toggle="dropdown" 
                        aria-expanded="false"
                    >
                        Category
                    </a>
                    <ul class="dropdown-menu text-primary" aria-labelledby="navbarDropdown">
                        @foreach ($categories as $c)
                            <li>
                                <a 
                                    class="dropdown-item" 
                                    href="/category/{{$c->id}}"
                                >
                                    {{$c->category}}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>              
                <li class="nav-item">
                <a class="nav-link text-primary" href="/contact">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
    <section>
        <div class="container min-vh-100">
            <div class="row">
                <h1 class="my-3 fw-bold">@yield('heading')</h1>
                <div class="col-9">
                    @yield('main')
                </div>
                <div class="col-3">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Categories</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                                <tr>
                                    <td>
                                        <a class="text-decoration-none" href="/category/{{$category->id}}">
                                            {{$category->category}}
                                        </a>
                                    </td>
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