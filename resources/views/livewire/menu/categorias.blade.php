<header class=" bg-teal-400 " x-data="dropdown()" @mouseover.away = "close()">

    <a  :class="{'bg-opacity-100' : open}"
        @mouseover="show_idioma()">
        
            <p class="text-white font-bold cursor-pointer"> Productos <i class="fas fa-sort-down"></i></p>
    </a>

    <nav id="navigation-menu" 
        :class="{'block': open, 'hidden': !open}"
        class="bg-trueGray-700 bg-opacity-25 absolute hidden">

        {{-- Menu computadora --}}
        <div class=" pt-2 h-full hidden md:block z-40">
           
            <ul class="bg-gray-200 rounded-md">

                @foreach ($productos as $product)
                    
                    <li class="navigation-link text-gray-600 hover:text-white font-bold hover:bg-teal-400">
                        <a href="{{ route('products.show', $product) }}" class="py-2 px-4 text-sm flex items-center">
                            {{$product->name}}

                        </a>

                    </li>
                @endforeach
                
                
            </ul>

        </div>
    </nav>
</header>

