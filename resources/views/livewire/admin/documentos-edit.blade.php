<div>
    @if ($accion == 'create')

    <button title="Nueva documento" type="submit" class="btn bg-green-500 text-white " wire:click="open">
        <i class="fas fa-plus-circle"></i>
    </button> 
        
    @else

    <button title="Editar documento" type="submit" class="btn bg-green-500 text-white btn-sm" wire:click="open">
        <i class="fas fa-edit"></i>
    </button> 
        
    @endif

    @if ($isopen)
        <div class="modal d-block" tabindex="-1" role="dialog" style="overflow-y: auto; display: block;">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title py-0 text-lg text-gray-800 font-bold"> Registro de documento</h5>
                    </div>
                    <div class="modal-body">
                        <h2 class="text-sm ml-2 m-0 p-0 text-justify text-gray-800 font-bold"><i class="fas fa-info-circle"></i> Complete todos los campos y presiona Guardar</h2> 
                
                        <hr class="m-2 p-2">
                      
                        <div class="flex justify-between">

                            <div class="w-full mr-2">
                                <label class="w-full text-justify text-gray-800 font-bold">Nombre</label>
                                <input type="text" wire:model="name" class="form-control rounded" id="formGroupExampleInput">
                            </div>

                            <div class="w-full">
                                <label class="w-full text-justify text-gray-800 font-bold">Fase</label>

                                <select wire:model="fase_id" title="fase" class="block w-full text-gray-400 py-2 px-2 pr-8 leading-tight rounded focus:outline-none focus:border-gray-500">
                                    <option value="" selected>Seleccione una opción</option>
                                        @foreach ($fases as $fase)
                                    <option value="{{$fase->id}}">{{$fase->name}}</option>
                                    @endforeach
                                </select>
                                <x-input-error for="fase_id" />
                            </div>

                                
                        </div>


                    
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn bg-gray-500 text-white" data-dismiss="modal" wire:click="close">Cerrar</button>
                        <button type="button" class="btn bg-green-500 text-white" wire:click="save">Guardar</button>
                    </div>
                </div>
            </div>
        </div>
    @endif

</div>
