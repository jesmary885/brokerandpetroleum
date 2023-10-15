<div>
    <div class="flex justify-center min-h-screen">

        <div class="hidden bg-cover lg:block lg:w-2/3" style='background-image: url(img/BALANCIN.jpg);'>
            <div class="flex items-center h-full px-20 bg-gray-900 bg-opacity-40">
                <div>
                    <h2 class="text-5xl font-bold text-white">Registro de usuario</h2>
                    
                    <p class="max-w-xl mt-5 text-gray-300">Bienvenido, registrate en nuestro portal completando todos los datos.</p>
                </div>
            </div>
        </div>

        <div class="flex items-center w-full max-w-3xl p-8 mx-auto lg:px-12 lg:w-3/5">
            <div class="w-full">
                <div class=" flex justify-center">
                    <h1 class="text-4xl font-bold text-center text-gray-700 dark:text-white ">
                        Broker&Petroleum
                   </h1>

                </div>
                

                <p class="mt-4 text-gray-500 dark:text-gray-400">
                    ¿Ya tienes una cuenta? Puedes iniciar sesión <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                                Aquí
                    </a> 
                </p>

                    <div class="flex justify-between mt-6">
                        <div class="w-full mr-2">
                            <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">First Name</label>
                            
                            <div class="relative">
                                <div class="inline-flex items-center justify-center absolute left-0 top-0 h-full w-10 text-gray-40">
                                    <i class="fas fa-id-card text-blue-500"></i>
                                </div>
                                <input wire:model="name" id="name" type="text" name="name" type="text" placeholder="John" class="block w-full pl-8 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                            </div>
                            <x-input-error for="name" />
                        </div>

                        <div class="w-full">
                            <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Last name</label>
                            <div class="relative">
                                <div class="inline-flex items-center justify-center absolute left-0 top-0 h-full w-10 text-gray-40">
                                    <i class="fas fa-id-card text-blue-500"></i>
                                </div>

                                <input wire:model="last_name" id="last_name" type="text" name="last_name" type="text" placeholder="Snow" class="block w-full pl-8 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                            </div>

                            <x-input-error for="last_name" />
                        </div>

                    </div>

                    <div class="flex justify-between mt-4">
                        <div class="w-full mr-2">
                            <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Phone number</label>
                            <div class="relative">
                                <div class="inline-flex items-center justify-center absolute left-0 top-0 h-full w-10 text-gray-40">
                                    <i class="fas fa-phone text-blue-500"></i>
                                </div>
                                <input wire:model="phone" id="phone" type="number" name="phone" placeholder="XXX-XX-XXXX-XXX" class="block w-full pl-8 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                            </div>
                            <x-input-error for="phone" />
                        </div>

                        <div class="w-full">
                            <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Email address</label>
                            <div class="relative">
                                <div class="inline-flex items-center justify-center absolute left-0 top-0 h-full w-10 text-gray-40">
                                    <i class="fas fa-envelope-open text-blue-500"></i>
                                </div>
                                <input wire:model="email" id="email" name="email" type="email" placeholder="johnsnow@example.com" class="block w-full pl-8 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                            </div>
                            <x-input-error for="email" />
                        </div>
                    
                    </div>

                    <div class="flex justify-between mt-4">
                        <div class="w-full mr-2">
                            <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Country</label>
                            <div class="relative">
                                <div class="inline-flex items-center justify-center absolute left-0 top-0 h-full w-10 text-gray-40">
                                    <i class="fas fa-map-marker-alt text-blue-500"></i>
                                </div>
                                <select wire:model.lazy="country_id" class="block w-full bg-gray-50 border border-gray-200 text-gray-400 py-1 pl-8 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                    <option value="" selected>Seleccione una opción</option>
                                    @foreach ($countries as $country)
                                        <option value="{{$country->id}}">{{$country->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <x-input-error for="country_id" />
                        </div>
                        

                       

                        <div class="w-full mr-2">
                            <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Province</label>
                            <div class="relative">
                                <div class="inline-flex items-center justify-center absolute left-0 top-0 h-full w-10 text-gray-40">
                                    <i class="fas fa-map-marker-alt text-blue-500"></i>
                                </div>
                                <select wire:model.lazy="provincia_id" class="block w-full bg-gray-50 border border-gray-200 text-gray-400 py-1 px-4 pr-8 pl-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                    <option value="" selected>Seleccione una opción</option>
                                    @foreach ($provincias as $provincia)
                                        <option value="{{$provincia->id}}">{{$provincia->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <x-input-error for="provincia_id" />
                        </div>
                    </div>
       
                    <div class="flex justify-between mt-4">

                        <div class="w-full mr-2">
                            <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Password</label>
                            <div class="relative">
                                <div class="inline-flex items-center justify-center absolute left-0 top-0 h-full w-10 text-gray-40">
                                    <i class="fas fa-user-lock text-blue-500"></i>
                                </div>
                            <input wire:model="password" id="password" name="password" type="password" placeholder="Enter your password" class="block w-full pl-8 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                            </div>
                            <x-input-error for="password" />
                        </div>

                        <div class="w-full">
                            <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Confirm password</label>
                            <div class="relative">
                                <div class="inline-flex items-center justify-center absolute left-0 top-0 h-full w-10 text-gray-40">
                                    <i class="fas fa-user-lock text-blue-500"></i>
                                </div>
                                <input wire:model="password_confirmation" type="password" id="password_confirmation" name="password_confirmation" placeholder="Enter your password" class="block w-full pl-8 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                            </div>
                            <x-input-error for="password_confirmation" />
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
                            class="flex mt-4 items-center px-6 py-3 text-sm tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-500 rounded-md hover:bg-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-50" wire:click="save" > 
                            <span>Sign Up </span>

                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 rtl:-scale-x-100" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>

                    </div>


            </div>
        </div>
    </div>
</div>
