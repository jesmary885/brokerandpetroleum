<header class=" bg-teal-400 absolute w-full" style="z-index: 100">
    <div class="grid grid-cols-2 px-4 container">
        <div class="flex items-center h-10 justify-between md:justify-start">
                <div class="mr-8">
                    @livewire('menu.idioma')
                </div>

                <div class="mr-8">
                @livewire('menu.categorias')
                </div>

                <div>
                @livewire('menu.contenido')
                </div>

        </div>

        <div class="col-span-1">

            <div class=" flex justify-end ">
                <div>
                    <i class="fab fa-instagram ml-2 mr-2 text-3xl font-bold text-white"></i>
                </div>

                <div>
                    <i class="fab fa-facebook-square ml-2 mr-2 text-3xl font-bold text-white"></i>
                </div>

                <div>
                    <i class="fab fa-twitter ml-2 mr-2 text-3xl font-bold text-white"></i>
                </div>
            </div>
        </div>
        
    </div>
  

</header>
