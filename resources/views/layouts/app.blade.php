<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />


        <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
        <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">

        {{--TOASTR--}}
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

        {{-- Fontawesome --}}
        <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">

        {{-- Glider --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/glider-js/1.7.7/glider.min.css" integrity="sha512-YM6sLXVMZqkCspZoZeIPGXrhD9wxlxEF7MzniuvegURqrTGV2xTfqq1v9FJnczH+5OGFl5V78RgHZGaK34ylVg==" crossorigin="anonymous" />

        {{-- FlexSlider --}}
        <link rel="stylesheet" href="{{ asset('vendor/FlexSlider/flexslider.css') }}">

        {{-- Glider --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/glider-js/1.7.7/glider.min.js" integrity="sha512-tHimK/KZS+o34ZpPNOvb/bTHZb6ocWFXCtdGqAlWYUcz+BGHbNbHMKvEHUyFxgJhQcEO87yg5YqaJvyQgAEEtA==" crossorigin="anonymous"></script>

        {{-- jquery --}}
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

         {{-- datetimepicker --}}
    
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css">   
        <script src="https://unpkg.com/moment"></script>
        <script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js"></script>

        {{-- flatpickr--}}

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        {{-- FlexSlider --}}
        <script src="{{ asset('vendor/FlexSlider/jquery.flexslider-min.js') }}"></script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles

<style>

    .video-title {
    background: #000;
    }

    @media only screen and (min-width : 1000px) {
    .video-wrapper {
        height: 0;
        padding-bottom: 56.25%;
        position: relative;
        width: 100%;
    }

    .video-wrapper video {
        height: 100%;
        position: absolute;
        top: -198px;
        bottom: 120px;
        left: 0;
        width: 100%;
    }

    .video-title {
        position: absolute;
        top: 10%;
        margin: 0 auto;
        z-index: 99;
    }
    }
</style>
    </head>

    <body class="font-sans antialiased">
       

        <div class="min-h-screen bg-gray-100 relative">
            
            @livewire('navigation')

      

            <!-- Page Content -->
            <main >
                {{ $slot }}
            </main>

            <footer class="absolute left-0 bottom-0  bg-black pt-8 pb-6 w-full">
                <div class="container mx-auto px-4">
                  <div class="flex flex-wrap text-left lg:text-left">
                    <div class="w-full lg:w-6/12 px-4">
                      <h4 class="text-3xl fonat-semibold text-blueGray-200">¡Mantengámonos en contacto!</h4>
                      <h5 class="text-lg mt-0 mb-2 text-blueGray-300">
                        Encuéntranos en cualquiera de estas plataformas, respondemos 1-2 días hábiles.
                      </h5>
                      <div class="mt-6 lg:mb-0 mb-6">
                        <button class="bg-white text-lightBlue-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2" type="button">
                          <i class="fab fa-twitter"></i></button><button class="bg-white text-lightBlue-600 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2" type="button">
                          <i class="fab fa-facebook-square"></i></button><button class="bg-white text-pink-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2" type="button">
                          <i class="fab fa-dribbble"></i></button><button class="bg-white text-blueGray-800 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2" type="button">
                          <i class="fab fa-github"></i>
                        </button>
                      </div>
                    </div>
              
                  </div>
                  <hr class="my-6 border-blueGray-300">
                  <div class="flex flex-wrap items-center md:justify-between justify-center">
                    <div class="w-full md:w-4/12 px-4 mx-auto text-center">
                      <div class="text-sm text-blueGray-300 font-semibold py-1">
                        Copyright © <span id="get-current-year">2023</span> Broker&Petroleum
                      </div>
                    </div>
                  </div>
                </div>
              </footer>

        </div>

        @stack('modals')

        @livewireScripts


        <script>
            function dropdown(){
                return {
                    open: false,
                    show(){
                        if(this.open){
                            //Se cierra el menu
                            this.open = false;
                            //document.getElementsByTagName('html')[0].style.overflow = 'auto'
                            console.log('cerrado')
                        }else{
                            //Esta abriendo el menu
                            this.open = true;
                            //document.getElementsByTagName('html')[0].style.overflow = 'hidden'
                            console.log('abierto')
                        }
                    },
                    close(){
                        this.open = false;
                        //document.getElementsByTagName('html')[0].style.overflow = 'auto'
                        console.log('cerrandito')
                    }
                }
            }
        </script>

    <script>

        window.addEventListener('load', function(){

            new Glider(document.querySelector('.glider'), {
                slidesToShow: 'auto',
                slidesToScroll: 'auto',

                draggable: true,
                dots: '.glider-' + '~ .dots',
                arrows: {
                    prev: '.glider-' + '~ .glider-prev',
                    next: '.glider-' + '~ .glider-next'
                },
                responsive: [
                    {
                        breakpoint: 640,
                        settings: {
                            slidesToShow: 2.5,
                            slidesToScroll: 2,
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 2.5,
                            slidesToScroll: 2,
                        }
                    },

                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 2.5,
                            slidesToScroll: 2,
                        }
                    },

                    {
                        breakpoint: 1280,
                        settings: {
                            slidesToShow: 3.5,
                            slidesToScroll: 3,
                        }
                    },
                ]
            });

        });
    
    </script>

        @stack('script')

        <script>
        livewire.on('alert', function(ms){
            toastr.options={
                "closeButton": true,
  "debug": false,
  "newestOnTop": false,
  "progressBar": true,
  "positionClass": "toast-top-right",
  "preventDuplicates": true,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
            }
            toastr.success(ms)
        })
        </script>

    </body>



   
</html>
