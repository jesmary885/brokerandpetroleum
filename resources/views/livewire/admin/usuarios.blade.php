<div>
    <div class="card">
        <div class="card-header">
                <input wire:model="search" placeholder="Ingrese el nombre o correo del usuario a buscar" class="form-control">
       
        </div>
        @if ($users->count())
        <div class="overflow-x-auto relative shadow-md sm:rounded-lg">

            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-center">
                            Nombre
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Email
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Teléfono
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Localidad
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Rol
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Status
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                        <td class=" px-2 py-2">
                     {{$user->name}} 
                        </td>
                        <td class="px-2 py-2">
                            {{$user->email}}
                        </td>
                        <td class="px-6 py-2">
                            {{$user->phone}}
                        </td>
                        <td class="px-6 py-2">
                            {{$user->country->name}}  {{$user->provincia->name}}
                        </td>
                        <td class="px-6 py-2">
                            {{$user->roles->first()->name}}
                        </td>
                        <td class="px-6 py-2">
                            <div class="flex items-center">
                                @if($user->status == 'Inactivo')
                                <div class="h-2.5 w-2.5 rounded-full bg-red-500 mr-2"></div> {{$user->status}}
                                @else
                                <div class="h-2.5 w-2.5 rounded-full bg-green-500 mr-2"></div> {{$user->status}}
                                @endif
                            </div>
                        </td>
                        <td class="px-6 py-2">
                            @if($user->status == 'Inactivo')
                            <button class="btn btn-sm btn-success"

                                wire:click="activar('{{$user->id}}')">
                                ACTIVAR
                            </button>
                            @else
                            <button class="btn btn-sm btn-danger"
           
                                wire:click="inactivar('{{$user->id}}')">
                                DESACTIVAR
                            </button>
                            @endif
                        </td>
                    </tr>
                    
                    @endforeach
                </tbody>
            </table>


            </div>
            <div class="card-footer">
                {{$users->links()}}
            </div>
        @else
             <div class="card-body">
                <strong>No hay registros</strong>
            </div>
        @endif
            
    </div>
</div>

