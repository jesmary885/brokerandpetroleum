<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  

    <title>BrokerAndPetroleum</title>

    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
      integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm"
      crossorigin="anonymous"
    />

</head>

<body >

<div class="bg-white dark:bg-gray-900">
        <div class="flex justify-center h-screen">
            <div class="hidden bg-cover lg:block lg:w-2/3" style='background-image: url(img/BALANCIN.jpg);'>
                <div class="flex items-center h-full px-20 bg-gray-900 bg-opacity-40">
                    <div>
                        <h2 class="text-5xl font-bold text-white">Inicio de sesión</h2>
                    
                    <p class="max-w-xl mt-5 text-gray-300">Bienvenido nuevamente, completa todos los campos e inicia sesión, para acceder a todas las opciones que ofrece nuestro portal.</p>
                    </div>
                </div>
            </div>


            
            <div class="flex items-center w-full max-w-md px-6 mx-auto lg:w-2/6">

            <x-validation-errors class="mb-4" />
                <div class="flex-1">
                    <div class="text-center">
                        <div class=" flex justify-center">
                            <h2 class="text-4xl font-bold text-center text-gray-700 dark:text-white">Broker&Petroleum</h2>
                        </div>
                        
                        <p class="mt-3 text-gray-500 dark:text-gray-300">Sign in to access your account</p>
                    </div>

                    <div class="mt-8">
                        <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <label for="email" class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Email Address</label>


                        <div class="relative">
                            <div class="inline-flex items-center justify-center absolute left-0 top-0 h-full w-10 text-gray-40">
                                <i class="fas fa-envelope-open text-blue-500"></i>
                            </div>

                            <input type="email" name="email" id="email" placeholder="example@example.com" class="block w-full mt-2 pl-8 py-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />

                        </div>


                            <div class="mt-6">
                                <div class="flex justify-between mb-2">
                                    <label for="password" class="text-sm text-gray-600 dark:text-gray-200">Password</label>
                                    @if (Route::has('password.request'))
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                @endif
                                </div>

                                <div class="relative">
                                    <div class="inline-flex items-center justify-center absolute left-0 top-0 h-full w-10 text-gray-40">
                                        <i class="fas fa-user-lock text-blue-500"></i>
                                    </div>

                                    <input type="password" name="password" id="password" placeholder="Your Password" class="block w-full  pl-8 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                                </div>
                            </div>

                            <div class="mt-6">
                                
                                <button
                                    class="w-full px-4 py-2 tracking-wide text-white transition-colors duration-200 transform bg-blue-500 rounded-md hover:bg-blue-400 focus:outline-none focus:bg-blue-400 focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                                    Sign in
                                </button>
                            </div>

                        </form>

                        <p class="mt-6 text-sm text-center text-gray-400">Don&#x27;t have an account yet? <a href="{{ route('Registro') }}" class="text-blue-500 focus:outline-none focus:underline hover:underline">Sign up</a>.</p>
                    </div>
                </div>
            </div>
        </div>
</div>

</body>
</html>
