
<x-app-layout>

  <div class="video-wrapper">
    <div class=" video-title flex justify-center">
            
          
        </div> 


    <video autoplay loop muted class="w-full">
      <source src="/img/Banner 1.mp4" type="video/mp4" />
    
    </video>
  </div>




<div class="flex justify-center lg:-mt-44 ">

    <h2 class="font-bold text-gray-600 text-2xl">
    {{__('messages.productos')}}
    </h2>


</div>

<div class="flex justify-center mt-1 ">


    <h3 class="font-semibold text-gray-400 text-md">

      {{__('messages.subtitulo_productos')}}

    </h3>

</div>



    <div class="container py-8">

     @if (count($productos))
    
            <div class="glider-contain">
                <ul class="glider">
            
                    @foreach ($productos as $product)
                        
                        <li class="bg-white rounded-lg shadow {{ $loop->last ? '' : 'sm:mr-4' }}">
                            <a href="{{ route('products.show', $product) }}">
                                <article>
                                    <figure>
                                        <img class="h-48 w-full object-cover object-center" src="{{ Storage::url($product->images->first()->url) }}" alt="">
                                    </figure>

                                <div class="py-4 px-6">
                                        <h1 class="text-lg font-semibold">
                                            <a href="#">
                                                {{$product->name}}
                                            </a>
                                        </h1>

                                        <p class="font-bold text-trueGray-700">otro dato</p>
                                </div>
                                </article>
                            </a>
                        </li>

                    @endforeach
            
                </ul>
        
                <button aria-label="Previous" class="glider-prev">«</button>
                <button aria-label="Next" class="glider-next">»</button>
                <div role="tablist" class="dots"></div>
            </div>

    @else

        <div class="mb-4 h-48 flex justify-center items-center bg-white shadow-xl border border-gray-100 rounded-lg">
            <div class="rounded animate-spin ease duration-300 w-10 h-10 border-2 border-indigo-500"></div>
        </div>
        
    @endif


    {{-- <div class="bg-gray-200 mt-2 rounded-md">
        <div class="flex justify-between items-center py-28 px-5">
            <div class="w-1/2">
                <h2 class="text-5xl font-semibold text-gray-800">SOBRE NOSOTROS</h2>
                <h3 class="text-xl font-semibold text-gray-600 mt-4">¡Lorem ipsum dolor sit amet, consectetur adipisicing elit !</h3>
                <p class="text-gray-600 mt-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet quo temporibus possimus ipsam pariatur facilis iusto quasi ex, est necessitatibus reiciendis unde incidunt fugit esse! Mollitia ad obcaecati cum fuga.</p>
            </div>
            <div class="w-1/2 rounded-md">
                <div>
                    <video src="/img/Banner 2.mp4" autoplay="true" class=" h-full w-full rounded-md" muted="true" loop="true"></video>

                </div>
               
            </div>
        </div>
    </div> --}}

    <section class="relative mt-8  bg-blueGray-50 rounded-md mb-52 ">
<div class="relative pt-8 pb-32 flex content-center items-center justify-center min-h-screen-75">
        <div class="absolute top-0 w-full h-full bg-center bg-cover" style="
            background-image: url(img/fondo.jpg);
          ">
          <span id="blackOverlay" class="w-full h-full absolute opacity-75 bg-black"></span>
        </div>
        <div class="container relative mx-auto">
          <div class="items-center flex flex-wrap">
            <div class=" ml-auto mr-auto w-full">
              <div>
                <div class="w-full text-center">
                  <h1 class="text-white font-semibold text-5xl ">
                    Somos Broker & Petroleum
                  </h1>

                </div>

                <div class="w-full text-center mt-8">
               
                    <p class="mt-4 text-lg text-blueGray-200 lg:mx-52">
                      Empresa encargada de comercializar y distribuir productos derivados del petróleo. Nuestro proposito principal es garantizar calidad de servicio y de producto, ofreciendo transparencia, confiabilidad, y los mejores precios del mercado. Somos un equipo de trabajo que constantemente se encuentra mejorando habilidades y conocimientos para satisfacer las crecientes y diversas necesidades de nuestros proveedores y clientes.
                    </p>

        
                  

                </div>
                
                
              </div>
            </div>
          </div>
        </div>
       
      </div>
      <section class="pb-10 bg-blueGray-200 -mt-32 md:-mt-60  " >
        <div class="container mx-auto px-4">
          <div class="flex flex-wrap  md:flex-nowrap  md:justify-center ">
            <div class="lg:pt-12 pt-6 w-full md:w-6/12 px-4 text-center">
              <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                <div class="px-4 py-5 flex-auto">
                  <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-red-400">
                    <i class="fas fa-award"></i>
                  </div>
                  <h6 class="text-xl font-semibold">Misión</h6>
                  <p class="mt-2 mb-4 text-blueGray-500">
                    Buscar, abrir y asegurar mercados para garantizar un flujo comercial constante de materia  prima como lo es petróleo y sus derivados, dónde el resultado sea predecible para las refinerías y clientes con quienes operamos. 
                </div>
              </div>
            </div>
            <div class="w-full md:w-4/12 px-4 text-center">
              
            </div>
            <div class="lg:pt-12 pt-6  w-full md:w-6/12 px-4 text-center">
              <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                <div class="px-4 py-5 flex-auto">
                  <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-emerald-400">
                    <i class="fas fa-award"></i>
                  </div>
                  <h6 class="text-xl font-semibold">Visión</h6>
                  <p class="mt-2 mb-4 text-blueGray-500">
                  Ser el centro de formación líderes para el mercado petrolero en donde finanzas del mundo financiero, se afecten de manera positiva.
                  </p>

                  <p class=" mb-10  text-white">
                  
                  </p>

                  <p class=" text-white">
                    -
                  </p>
                </div>
              </div>
            </div>
          </div>
 
      </section>
      </section>

      




        
    </div>

    
    @section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">

    <link rel="stylesheet" href="{{ asset('vendor/FlexSlider/flexslider.css') }}">
@stop

    
</x-app-layout>
