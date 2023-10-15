<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  

    <title>Broker&Petroleum</title>

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


        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="flex justify-center min-h-screen">

                <div class="hidden bg-cover lg:block lg:w-2/3" style='background-image: url(img/BALANCIN.jpg);'>
                    <div class="flex items-center h-full px-20 bg-gray-900 bg-opacity-40">
                        <div>
                            <h2 class="text-4xl font-bold text-white">Broker&Petroleum</h2>
                            
                            <p class="max-w-xl mt-3 text-gray-300">Bienvenido, registrate en nuestro portal completando todos los datos.</p>
                        </div>
                    </div>
                </div>

                <div class="flex items-center w-full max-w-3xl p-8 mx-auto lg:px-12 lg:w-3/5">
                    <div class="w-full">
                        <h1 class="text-2xl font-semibold tracking-wider text-gray-800 capitalize dark:text-white">
                            Registro de usuario
                        </h1>

                        <p class="mt-4 text-gray-500 dark:text-gray-400">
                            ¿Ya tienes una cuenta? Puedes iniciar sesión <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                                        Aquí
                            </a> 
                        </p>


                        <form  method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="flex justify-between mt-6">
                                <div class="w-full mr-2">
                                    <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">First Name</label>
                                    
                                    <div class="relative">
                                        <div class="inline-flex items-center justify-center absolute left-0 top-0 h-full w-10 text-gray-40">
                                            <i class="fas fa-id-card text-blue-500"></i>
                                        </div>
                                        <input id="name" type="text" name="name" type="text" placeholder="John" class="block w-full pl-8 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                                    </div>
                                </div>

                                <div class="w-full">
                                    <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Last name</label>
                                    <div class="relative">
                                        <div class="inline-flex items-center justify-center absolute left-0 top-0 h-full w-10 text-gray-40">
                                            <i class="fas fa-id-card text-blue-500"></i>
                                        </div>

                                        <input id="last_name" type="text" name="last_name" type="text" placeholder="Snow" class="block w-full pl-8 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                                    </div>
                                </div>

                            </div>

                            <div class="flex justify-between mt-4">
                                <div class="w-full mr-2">
                                    <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Phone number</label>
                                    <div class="relative">
                                        <div class="inline-flex items-center justify-center absolute left-0 top-0 h-full w-10 text-gray-40">
                                            <i class="fas fa-phone text-blue-500"></i>
                                        </div>
                                        <input id="phone" type="text" name="phone" placeholder="XXX-XX-XXXX-XXX" class="block w-full pl-8 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                                    </div>
                                </div>

                                <div class="w-full">
                                    <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Email address</label>
                                    <div class="relative">
                                        <div class="inline-flex items-center justify-center absolute left-0 top-0 h-full w-10 text-gray-40">
                                            <i class="fas fa-envelope-open text-blue-500"></i>
                                        </div>
                                        <input id="email" name="email" type="email" placeholder="johnsnow@example.com" class="block w-full pl-8 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                                    </div>
                                </div>
                            
                            </div>

                            <div class="flex justify-between mt-4">
                                <div class="w-full mr-2">
                                    <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Country</label>
                                    <input id="phone" type="text" name="phone" placeholder="XXX-XX-XXXX-XXX" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                                </div>

                                <div class="w-full mr-2">
                                    <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Province</label>
                                    <input id="phone" type="text" name="phone" placeholder="XXX-XX-XXXX-XXX" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                                </div>

                                
                            
                            </div>



                            <div class="flex justify-between mt-4">

                                <div class="w-full mr-2">
                                    <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Password</label>
                                    <div class="relative">
                                        <div class="inline-flex items-center justify-center absolute left-0 top-0 h-full w-10 text-gray-40">
                                            <i class="fas fa-user-lock text-blue-500"></i>
                                        </div>
                                    <input id="password" name="password" type="password" placeholder="Enter your password" class="block w-full pl-8 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                                    </div>
                                </div>

                                <div class="w-full">
                                    <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Confirm password</label>
                                    <div class="relative">
                                        <div class="inline-flex items-center justify-center absolute left-0 top-0 h-full w-10 text-gray-40">
                                            <i class="fas fa-user-lock text-blue-500"></i>
                                        </div>
                                        <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Enter your password" class="block w-full pl-8 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                                    </div>
                                </div>
                            </div>

                       
                                <div class="mt-6">
                                    <x-label for="terms">
                                        <div class="flex items-center">
                                            <x-checkbox name="terms" id="terms" required />

                                            <div class="ml-2">
                                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                        'terms_of_service' => '<a target="_blank" href="#" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                                        'privacy_policy' => '<a target="_blank" href="#" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                                ]) !!}
                                            </div>
                                        </div>
                                    </x-label>
                                </div>
                          

                            <div class="mt-4 flex justify-end">

                       

                                <button
                                    class="flex mt-4 items-center px-6 py-3 text-sm tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-500 rounded-md hover:bg-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                                    <span>Sign Up </span>

                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 rtl:-scale-x-100" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>

                            </div>

                            
                        </form>
                    </div>
                </div>
            </div>
            </body>
</html>
