<div>
    <div class="card">
        <div class="card-header flex justify-between">
                <input wire:model="search" class="flex-1" placeholder="Ingrese el nro de negociación a buscar" class="form-control">

                @livewire('negociaciones.nueva-negociacion') 

        </div>
        @if ($negociaciones->count())
        <div class="overflow-x-auto relative shadow-md sm:rounded-lg">

            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-center">
                            Nro
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Fecha
                        </th>

                        <th scope="col" class="px-6 py-3 text-center">
                            Fase
                        </th>

                  
                        <th scope="col" class="px-6 py-3 text-center">
                            Detalle
                        </th>
            
                        <th scope="col" class="px-6 py-3 text-center">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($negociaciones as $negociacion)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                        <td class=" px-2 py-2 text-center">
                            {{$negociacion->id}} 
                        </td>
                        <td class="px-2 py-2 text-center">
                            {{$negociacion->created_at}}
                        </td>
                        <td class="px-6 py-2 text-center">
                            {{$negociacion->phase}}
                        </td>
              
                        
                        <td class=" text-center">
                            @livewire('negociaciones.detalle-negociacion', ['negociacion' => $negociacion],key($negociacion->id))
                        </td>

               

                        <td class="text-center">
                            @livewire('admin.editar-negociacion', ['negociacion' => $negociacion],key($negociacion->id))
                        </td>
                       
                        
                    </tr>
                    
                    @endforeach
                </tbody>
            </table>


            </div>
            <div class="card-footer">
                {{$negociaciones->links()}}
            </div>
        @else
             <div class="card-body">
                <strong>No hay registros</strong>
            </div>
        @endif
            
    </div>
</div>
