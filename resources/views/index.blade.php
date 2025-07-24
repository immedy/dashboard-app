<!DOCTYPE html>
<html lang="en">

<head>
    <title>RSUD DAYAKU RAJA</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
</head>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

<link rel="stylesheet" type="text/css" href="icomoon/icomoon.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="{{ asset('Dashboard/css/vendor.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('Dashboard/style.css') }}">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">

</head>

<body>

    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <defs>            
            <symbol id="laptop" viewBox="0 0 24 24">
                <path fill="currentColor"
                    d="M4 6h16v10H4m16 2a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2H4c-1.11 0-2 .89-2 2v10a2 2 0 0 0 2 2H0v2h24v-2z" />
            </symbol>            
        </defs>
    </svg>



    <section id="category">
        <div class="container ">
            <div class="d-md-flex justify-content-between align-items-center">
                <div>
                    <h2 class="display-6 fw-semibold">Aplikasi Web RSUD Dayaku Raja</h2>
                    <p class="text-secondary ">Pilih Aplikasi Sesuai Kebutuhan Anda</p>
                </div>
            </div>
            <div class="row g-md-3 mt-2">
                <div class="col-md-4">
                    <a href="http://192.168.10.180/signin" target="_blank">
                        <div class="primary rounded-3 p-4 my-3">
                            <div class="d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="60px" height="60px">
                                    <use href="#laptop" class="svg-primary" />
                                </svg>
                                <div class="ps-4">
                                    <p class="category-paragraph fw-bold text-uppercase mb-1">SIMRS KESIA</p>
                                    <p class="category-paragraph m-0">ip lokal </p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="http://192.168.10.163/apps/SIMpel/#welcome" target="_blank">
                        <div class="tertiary rounded-3 p-4 my-3">
                            <div class="d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="60px" height="60px">
                                    <use href="#laptop" class="svg-tertiary" />
                                </svg>
                                <div class="ps-4">
                                    <p class="category-paragraph fw-bold text-uppercase mb-1">SIMRSGOS</p>
                                    <p class="category-paragraph m-0">ip lokal</p>
                                </div>
                            </div>
                        </div>
                    </a>                    
                </div>
                <div class="col-md-4">
                  <a href="http://192.168.10.167:8085/login" target="_blank">
                    <div class="gray rounded-3 p-4 my-3">
                        <div class="d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60px" height="60px">
                                <use href="#laptop" class="svg-gray" />
                            </svg>
                            <div class="ps-4">
                                <p class="category-paragraph fw-bold text-uppercase mb-1">SIMPEG</p>
                                <p class="category-paragraph m-0">ip lokal</p>
                            </div>
                        </div>
                    </div>
                  </a>
                  <a href="http://192.168.10.195/apps/SIMpel" target="_blank">
                    <div class="secondary rounded-3 p-4 my-3">
                        <div class="d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60px" height="60px">
                                <use href="#laptop" class="svg-secondary" />
                            </svg>
                            <div class="ps-4">
                              <p class="category-paragraph fw-bold text-uppercase mb-1">SIMRSGOS MCU</p>
                              <p class="category-paragraph m-0">ip lokal</p>
                            </div>
                        </div>
                    </div>
                  </a>                    
                </div>
                <div class="col-md-4">
                  <a href="http://192.168.10.52" target="_blank">
                    <div class="tertiary rounded-3 p-4 my-3">
                        <div class="d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60px" height="60px">
                                <use href="#laptop" class="svg-tertiary" />
                            </svg>
                            <div class="ps-4">
                                <p class="category-paragraph fw-bold text-uppercase mb-1">SISTEM ABSENSI</p>
                                <p class="category-paragraph m-0">ip lokal</p>
                            </div>
                        </div>
                    </div>
                  </a>
                  <a href="http://192.168.10.59/login" target="_blank">
                    <div class="primary rounded-3 p-4 my-3">
                        <div class="d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60px" height="60px">
                                <use href="#laptop" class="svg-primary" />
                            </svg>
                            <div class="ps-4">
                                <p class="category-paragraph fw-bold text-uppercase mb-1">SISTEM AMBULAN</p>
                                <p class="category-paragraph m-0">ip lokal</p>
                            </div>
                        </div>
                    </div>
                  </a>
            </div>
        </div>
    </section>
    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="js/plugins.js"></script>
    <script src="js/script.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>

</html>
