<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Scrolling Nav - Start Bootstrap Template</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/comIndex.css" rel="stylesheet" />
    </head>
    <body id="page-top" style="background-color: blueviolet">
        <!-- Navigation navbar-dark bg-dark -->
        <nav class="navbar navbar-expand-lg  fixed-top" id="mainNav" style="background-color: black ">
            <div class="container px-4">
                <a class="navbar-brand" href="#"><h5><b>JomOnBoard</b></h5></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('auth.register')}}">Register</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('auth.login') }}">Login</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header bg-primary bg-gradient -->
        <header class="text-white" style="background-color: blueviolet">
            <div class="container px-4 text-center">
                <h1 class="fw-bolder">Hello Employer!</h1>
                <h1 class="fw-bolder">Welcome to Jom On Board(J.O.B)</h1>
                <p class="lead">This is the platform where you can use to provide your company's job vacancy.Please proceed by registering your company with our website or can login if you already register.</p>
                <br><br>
                <a class="btn btn-lg btn-light" href="{{ route('auth.register') }}">Register</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a class="btn btn-lg btn-light" href="{{ route('auth.login') }}">Login</a>
            </div>
        </header>
      
        <!-- Contact section-->
        <section id="contact" style="background-color: white" >
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-8">
                        <h2>Contact us</h2>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero odio fugiat voluptatem dolor, provident officiis, id iusto! Obcaecati incidunt, qui nihil beatae magnam et repudiandae ipsa exercitationem, in, quo totam.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container px-4"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
