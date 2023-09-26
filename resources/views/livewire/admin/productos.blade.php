<div>
    <div class="card">
        <div class="card-header row flex justify-between ">

            <div class="flex-grow-1">
                <input wire:model="search" placeholder="Ingrese el nombre del producto a buscar" class="form-control">
            </div>
                <div class="ml-2 mr-2">
                    @livewire('admin.producto-create', ['accion'=>'create']) 
                </div>
       
        </div>
        @if ($productos->count())
        <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-center">
                            Nombre
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Categoría
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Caracteristicas
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Mostrar en Inicio
                        </th>
            
                        <th scope="col" class="px-6 py-3 text-center">
                            Estado
                        </th>
                        <th></th>

                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($productos as $producto)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                            <td class=" px-6 py-4 text-justify">
                                {{$producto->name}}
                            </td>
                            
                            <td class="px-6 py-4 text-justify">
                                    {{$producto->categoria->name}}</td>
                            <td class=" py-4 text-center ">
                                    
                                    <button class="btn btn-sm btn-success"
        
                                        wire:click="ver('{{$producto->id}}')">
                                        ver
                                    </button>
                                    
                                </td>

                            <td class=" px-6 py-4 text-center">
                                    {{$producto->page_view}}</td>
                            <td class=" px-6 py-4 text-center">
                                    {{$producto->status}}</td>

                            <td class="px-6 py-4 text-center">
                                    @if($producto->status == 'Inactivo')
                                    <button class=""
        
                                        wire:click="activar('{{$producto->id}}')">
                                        ACTIVAR
                                    </button>
                                    @else
                                    <button class="btn btn-sm btn-danger"
                   
                                        wire:click="inactivar('{{$producto->id}}')">
                                        DESACTIVAR
                                    </button>
                                    @endif
                            </td>

                            <td class="text-center">
                                @livewire('admin.producto-create', ['accion'=>'edit','producto' => $producto],key($producto->id))
                            </td>

                            <td class="py-4 whitespace-nowrap font-medium">
                                <a href="{{ route('producto.add.img', $producto) }}" class="btn btn-primary btn-sm">
                                    <i class="fas fa-image"></i>
                                </a>
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                {{$productos->links()}}
            </div>
        @else
             <div class="card-body">
                <strong>No hay registros</strong>
            </div>
        @endif
            
    </div>


    @push('js')

        <script>
            livewire.on('comment', function(ms){
                    Swal.fire({
                title: ms,
                showClass: {
                popup: 'animate__animated animate__fadeInDown'
                },
                hideClass: {
                popup: 'animate__animated animate__fadeOutUp'
                }
                })
            })
        </script>

    @endpush


</div>
