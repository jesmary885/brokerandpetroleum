<div>
    @if ($accion == 'create')

    <button title="Nueva fase" type="submit" class="btn bg-green-500 text-white " wire:click="open">
        <i class="fas fa-plus-circle"></i>
    </button> 
        
    @else

    <button title="Editar fase" type="submit" class="btn bg-green-500 text-white btn-sm" wire:click="open">
        <i class="fas fa-edit"></i>
    </button> 
        
    @endif

    @if ($isopen)
        <div class="modal d-block" tabindex="-1" role="dialog" style="overflow-y: auto; display: block;">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title py-0 text-lg text-gray-800 font-bold"> Registro de fase</h5>
                    </div>
                    <div class="modal-body">
                        <h2 class="text-sm ml-2 m-0 p-0 text-justify text-gray-800 font-bold"><i class="fas fa-info-circle"></i> Complete todos los campos y presiona Guardar</h2> 
                
                        <hr class="m-2 p-2">
                      
                        <div class="flex justify-between">

                            <div class="w-full mr-2">
                                <label class="w-full text-justify text-gray-800 font-bold">Nro</label>
                                <input type="number" wire:model="nro" class="form-control rounded" id="formGroupExampleInput">
                            </div>

                            <div class="w-full mr-2">
                                <label class="w-full text-justify text-gray-800 font-bold">Nombre</label>
                                <input type="text" wire:model="name" class="form-control rounded" id="formGroupExampleInput">
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

