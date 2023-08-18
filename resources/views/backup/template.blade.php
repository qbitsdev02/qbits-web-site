<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d9e42506e1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('stile.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container nav_home">
        <nav class="navbar navbar-expand-lg" aria-label="Offcanvas navbar large">
            <div class="container-fluid">
              <a class="navbar-brand" href="#"><img src="{{ asset('image/logo/qbits_inc.png') }}" alt="qbits inc" style="width: 100px;"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasNavbar2" aria-labelledby="offcanvasNavbar2Label">
                <div class="offcanvas-header">
                  <h5 class="offcanvas-title" id="offcanvasNavbar2Label">Offcanvas</h5>
                  <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                  <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                      <a class="nav-link actives" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Service</a>
                      </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">About</a>
                    </li>

                      <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                      </li>
                      <li class="nav-item">
                        <div class="dropdown">
                            <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-globe" style="color: #ff7900;"></i>
                            </button>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Español</a></li>
                              <li><a class="dropdown-item" href="#">Ingles</a></li>
                            </ul>
                          </div>
                      </li>
                  </ul>
                </div>
              </div>
            </div>
        </nav>
    </div>

    @yield('body')

    @yield('footer')

    <div class="container text-centers footer_qbits">
      <div class="row justify-item-center">
        <div class="col-4">
          <i class="fa-brands fa-facebook" style="color: #ff7900;"></i>
          <i class="fa-brands fa-instagram" style="color: #ff7900;"></i>
          <i class="fa-brands fa-youtube" style="color: #ff7900;"></i>
        </div>
        <div class="col-4">
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius accusamus similique consectetur, porro necessitatibus optio?
        </div>
        <div class="col-4 text-left">
          <div>
            <span><i class="fa-solid fa-location-dot" style="color: #e17900;"></i> Lorem ipsum dolor sit.</span>
          </div>
          <div>
            <span><i class="fa-solid fa-mobile-screen-button" style="color: #ff7900;"></i> +1 12 123 124 4</span>
          </div>
          <div>
            <span><i class="fa-solid fa-envelope" style="color: #ff7900;"></i> sales@qbitsinc.com</span>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    @yield('script')

</body>
</html>



