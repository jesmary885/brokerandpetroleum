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
       

        <div class="min-h-screen bg-gray-100">
            
            @livewire('navigation')

      

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>

            <footer>

                <div class=" h-48 pt-4 pb-8 text-gray-200 bg-gray-400 text-center ">
                    <div class="grid grid-cols-3 gap-6">
                        <div>
                            <p class="text-gray-800 font-bold text-lg mb-2">
                                Legal
                            </p>

                            <p class="text-gray-500 font-bold text-md">
                            Sobre nosotros
                            </p>

                            <p class="text-gray-500 font-bold text-md">
                            Términos y condiciones
                            </p>

                            <p class="text-gray-500 font-bold text-md">
                            política de privacidad
                            </p>

                        </div>

                        <div>

                            <p class="text-gray-800 font-bold text-lg mb-2">
                                Encuentranos en:
                            </p>

                            <p class="text-gray-500 font-bold text-md text-justify">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto, dignissimos. Earum quam officiis itaque dolores maiores ab id ducimus rem, officia rerum possimus sit perspiciatis magnam, minima cum ipsum asperiores!
                            </p>

                          

                            

                        </div>

                        <div>

                            <p class="text-gray-800 font-bold text-lg mb-2">
                                Siguenos en:
                            </p>

                            <div class="flex justify-center ">

                                <div>
                                    <i class="fab fa-instagram ml-2 mr-2 text-3xl font-bold text-gray-200"></i>
                                </div>

                                <div>
                                    <i class="fab fa-facebook-square ml-2 mr-2 text-3xl font-bold text-gray-200"></i>
                                </div>

                                <div>
                                    <i class="fab fa-twitter ml-2 mr-2 text-3xl font-bold text-gray-200"></i>
                                </div>

                            </div>

                        

                        </div>

                    </div>
        
                    
</div>

                <section class="h-12 p-4 text-gray-200 bg-black text-center">
                    <h3 class="text-gray-300 text-md font-bold"> COPYRIGHT© 2023 - BROKERPREMIUM</h3>
                    
                </section>

            </footer>

        </div>

        @stack('modals')

        @livewireScripts


        <script>
            function dropdown(){
                return {
                    open: false,
                    show_idioma(){
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
