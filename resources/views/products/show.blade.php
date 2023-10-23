<x-app-layout>
    <div class="container py-8 mt-10">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-6">
            <div>
                <div class="flexslider">
                    <ul class="slides">
                        @foreach ($product->images as $image)

                            @if ($product->images->count())
             
                            <li data-thumb=" {{ Storage::url($image->url) }}">
                                <img src=" {{ Storage::url($image->url) }}" />
                            </li>
                            
                            @else

                            <li data-thumb="https://cdn.pixabay.com/photo/2017/02/15/11/05/texture-2068283_960_720.jpg">
                                <img src="https://cdn.pixabay.com/photo/2017/02/15/11/05/texture-2068283_960_720.jpg" />
                            </li>
                          
                            @endif
                        
                

                        @endforeach
                        
                    </ul>
                </div>

                
            </div>

            <div>
                @if(session('locale')=='es')
                    <h1 class="text-2xl font-bold text-gray-700">{{$product->name_es}}</h1>
                @else
                    <h1 class="text-2xl font-bold text-gray-700">{{$product->name_en}}</h1>
                @endif
                

                <div class="flex">
                    <p class="text-trueGray-700">{{__('messages.categoria')}} : {{$product->categoria->name}} </p>
                   
                </div>

                <div class="mt-4 text-gray-700">
                    <h2 class="font-bold text-2xl">{{__('messages.Descripción')}} </h2>
                    @if(session('locale')=='es')
                        {!!$product->other_features_es!!}
                    @else
                        {!!$product->other_features_en!!}
                    @endif
        
                </div>

                @if($product->file)

                    <hr class="m-2 p-2">


                    <p class="text-2xl font-semibold text-trueGray-700 mt-4">{{__('messages.documentos')}}</p>

                
                    <td class="text-center">
                        @livewire('products.download-file',['product' => $product])
                    </td>
                @endif

                <hr class="mt-4">

                @auth

                <div class="flex justify-start ">
                    @livewire('products.presupuesto', ['product' => $product])

                </div>

                @else

                    <div class="flex justify-between mb-2 mt-2">
                        <p>{{__('messages.Haz click')}}  <a class="underline text-md text-gray-600 mx-1 px-1 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-400" href="{{ route('login') }}">
                            {{__('messages.aquí')}} 
                                        </a> {{__('messages.para iniciar sesión y solicitar información sobre este producto')}} </p>
                            
                                        
                                
                    </div>

                
                
                @endauth
                
                

            </div>
        </div>
        
    </div>


 

@push('script')

        {{-- jquery --}}
        <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->

        {{-- FlexSlider --}}
        <script src="{{ asset('vendor/FlexSlider/jquery.flexslider-min.js') }}"></script>
        <script>
            $(document).ready(function() {
                $('.flexslider').flexslider({
                    animation: "slide",
                    controlNav: "thumbnails"
                });
            });

        </script>
@endpush

</x-app-layout>
