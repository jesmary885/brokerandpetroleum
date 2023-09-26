<div>
    <div class="card">
        <div class="card-header">
                <input wire:model="search" placeholder="Ingrese el nombre del usuario o nro de solicitud" class="form-control">
       
        </div>
        @if ($solicituds->count())
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
                            Tipo 
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Usuario solicitante
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Detalle
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Estado
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($solicituds as $solicitud)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                        <td class=" px-2 py-2 text-center">
                            {{$solicitud->id}} 
                        </td>
                        <td class="px-2 py-2 text-center">
                            {{$solicitud->created_at}}
                        </td>
                        <td class="px-6 py-2 text-center">
                            {{$solicitud->tipo_solicitud}}
                        </td>
                        <td class="px-6 py-2 text-center">
                            {{$solicitud->user->name}}
                        </td>
                        
                        <td class=" text-center">
                            @livewire('admin.detalle-solicitud', ['solicitud' => $solicitud],key($solicitud->id))
                        </td>

                        <td class="px-6 py-2 text-center">
                            {{$solicitud->status}}
                        </td>

                        <td class="text-center">
                            @livewire('admin.responder-solicitud', ['solicitud' => $solicitud],key($solicitud->id))
                        </td>
                       
                        
                    </tr>
                    
                    @endforeach
                </tbody>
            </table>


            </div>
            <div class="card-footer">
                {{$solicituds->links()}}
            </div>
        @else
             <div class="card-body">
                <strong>No hay registros</strong>
            </div>
        @endif
            
    </div>
</div>
