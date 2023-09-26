<header class=" bg-black sticky top-0 " style="z-index: 900" x-data="dropdown()">
    <div class=" pt-5 pb-1 flex items-center h-24 container  justify-between md:justify-start">

        <a href="/" class="mx-6">
        <img src="img/LOGO_2.jpg" class="block h-12 md:h-20 w-40 md:w-52 alt="">
           
        </a>

         

        <div class="flex-1 hidden md:block">
            <div class="flex justify-center">
            <a  :class="{'bg-opacity-100 text-teal-500' : open}"
                x-on:click="show_idioma()"
                class="flex flex-col items-center justify-center order-last md:order-first px-6  md:px-4 bg-white bg-opacity-25 text-white cursor-pointer font-semibold">
                <svg class=" h-10 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </a> 
                
            @livewire('search')

            </div>
            
            
        </div>

        <div class="mx-6 relative hidden md:block">
            @auth
            
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        
                        <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                            <img class=" h-12 w-12 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                        </button>
                    
                    </x-slot>

                    <x-slot name="content">
                        <!-- Account Management -->
                        <div class="block px-4 py-2 text-xs text-gray-400">
                            {{ __('Manage Account') }}
                        </div>

                        <x-dropdown-link href="{{ route('profile.show') }}">
                            {{ __('Profile') }}
                        </x-jet-dropdown-link>

 
                        <x-dropdown-link href="{{ route('oficina.index') }}">
                               Mi oficina
                        </x-dropdown-link>


                        <div class="border-t border-gray-100"></div>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                            this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>

            @else

                <x-dropdown align="right" width="48">

                    <x-slot name="trigger">
                        <i class="fas fa-user-circle  text-gray-200 text-4xl cursor-pointer"></i>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link href="{{ route('login') }}">
                            {{ __('Login') }}
                        </x-dropdown-link>

                        <x-dropdown-link href="{{ route('Registro') }}">
                            {{ __('Register') }}
                        </x-dropdown-link>
                    </x-slot>

                </x-dropdown>

            @endauth
        </div>
</div>


    <div id="navigation-menu" :class="{'block': open, 'hidden': !open}" class="bg-opacity-50 absolute hidden w-full">
        {{-- Menu computadora --}}
        <div class="h-full hidden md:block container">
            <div class="grid grid-cols-5 relative border-blue-400">
                <div class="col-span-1 bg-gray-100 ">
                    <ul class=" mt-4 ml-4">

                        <p class="font-bold text-gray-700">IDIOMAS</p>
                        
                        <li class="navigation-link text-gray-700 font-semibold hover:bg-teal-400 hover:text-white">
                            <a href="#" class="py-2 px-4 text-sm flex items-center">

                                <span class="flex justify-center">
                                        Español
                                </span>

                            </a>

                        </li>

                        <li class="navigation-link text-gray-700 font-semibold hover:bg-teal-400 hover:text-white">
                            <a href="#" class="py-2 px-4 text-sm flex items-center">

                                <span class="flex justify-center">
                                        English
                                </span>

                            </a>

                        </li>
                    </ul>

                </div>

                <div class="col-span-1 bg-gray-100 ">
                    <ul class=" mt-4 ml-4">

                        <p class="font-bold text-gray-700">TU CUENTA</p>

                        @auth

                            <li class="navigation-link text-gray-700 font-semibold hover:bg-teal-400 hover:text-white">
                                <a href="#" class="py-2 px-4 text-sm flex items-center">

                                    <span class=" flex justify-center">
                                        {{ __('Profile') }}
                                    </span>

                                </a>

                            </li>

                            <li class="navigation-link text-gray-700 font-semibold hover:bg-teal-400 hover:text-white">
                                <a href="#" class="py-2 px-4 text-sm flex items-center">

                                    <span class=" flex justify-center">
                                        Mi oficina
                                    </span>

                                </a>

                            </li>
                        
                        

                        @else

                            <li class="navigation-link text-gray-700 font-semibold hover:bg-teal-400 hover:text-white">
                                <a href="#" class="py-2 px-4 text-sm flex items-center">

                                    <span class=" flex justify-center">
                                            Iniciar sesión
                                    </span>

                                </a>

                            </li>

                            <li class="navigation-link text-gray-700 font-semibold hover:bg-teal-400 hover:text-white">
                                <a href="#" class="py-2 px-4 text-sm flex items-center">

                                    <span class=" flex justify-center">
                                        Registrarse
                                    </span>

                                </a>

                            </li>

                        @endauth
                    </ul>

                </div>

                

                <div class="col-span-1 bg-gray-100">
                    <ul class=" mt-4 ml-4">

                        <p class="font-bold text-gray-700">PRODUCTOS</p>

                        @foreach ($productos as $producto)

                        <li class="navigation-link text-gray-700 font-semibold hover:bg-teal-400 hover:text-white">
                            <a href="#" class="py-2 px-4 text-sm flex items-center">

                                <span class="flex justify-center">
                                        {{$producto->name}}
                                </span>

                            </a>

                        </li>
                            
                        @endforeach
                        
                        

                  
                    </ul>

                </div>

                <div class="col-span-1 bg-gray-100">
                    <ul class=" mt-4 ml-4">

                        <p class="font-bold text-gray-700">INFORMACIÓN</p>
                        
                        <li class="navigation-link text-gray-700 font-semibold hover:bg-teal-400 hover:text-white">
                            <a href="#" class="py-2 px-4 text-sm flex items-center">

                                <span class="flex justify-center">
                                        Sobre nosotros
                                </span>

                            </a>

                        </li>

                        <li class="navigation-link text-gray-700 font-semibold hover:bg-teal-400 hover:text-white">
                            <a href="#" class="py-2 px-4 text-sm flex items-center">

                                <span class="flex justify-center">
                                        
                                </span>

                            </a>

                        </li>
                    </ul>

                </div>

                <div class="col-span-1 bg-gray-100">
                    <ul class=" mt-4 ml-4">

                        <div class="flex justify-center">
                            <p class="font-bold text-gray-700">SIGUENOS</p>

                        </div>

                        
                        
                        <li class="navigation-link text-gray-700 font-semibold hover:text-white">
                            <div class=" flex justify-center mt-4">
                                <div>
                                    <i class="fab fa-instagram mr-2 text-3xl font-bold text-gray-600"></i>
                                </div>
                
                                <div>
                                    <i class="fab fa-facebook-square ml-2 mr-2 text-3xl font-bold text-gray-600"></i>
                                </div>
                
                                <div>
                                    <i class="fab fa-twitter ml-2 mr-2 text-3xl font-bold text-gray-600"></i>
                                </div>
                            </div>

                        </li>

                      
                    </ul>

                </div>
               
            
            </div>
        </div>

      
</div>

    
</header>

