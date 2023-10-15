<div>
    <div class="card">
        <div class="card-header row flex justify-between ">

            <div class="flex-grow-1">
                <input wire:model="search" placeholder="Ingrese el nombre del estado a buscar" class="form-control">
            </div>
                <div class="ml-2 mr-2">
                    @livewire('admin.estados-documentos-procesos-edit', ['accion'=>'create']) 
                </div>
       
        </div>
        @if ($estados->count())
        <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-center">
                            Nombre
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Color
                        </th>
                        
                        <th></th>

                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($estados as $estado)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                            <td class=" px-6 py-4 text-center">
                                {{$estado->name}}
                            </td>

                            <td class=" px-6 py-4 text-center">
                                {{$estado->color}}
                            </td>
                            


                            <td class="text-center">
                                @livewire('admin.estados-documentos-procesos-edit', ['accion'=>'edit','estado' => $estado],key($estado->id))
                            </td>

             

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                {{$estados->links()}}
            </div>
        @else
             <div class="card-body">
                <strong>No hay registros</strong>
            </div>
        @endif
            
    </div>


    


</div>

