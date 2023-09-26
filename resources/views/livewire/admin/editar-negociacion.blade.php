<div>

    <button title="Ver detalle" type="submit" class="btn text-green-500 btn-md" wire:click="open">
        <i class="	fas fa-edit"></i>
    </button> 
        

    @if ($isopen)
        <div class="modal d-block" tabindex="-1" role="dialog" style="overflow-y: auto; display: block;">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title py-0 text-lg text-gray-800 font-bold"> Editar negociación</h5>
                    </div>
                    <div class="modal-body">

            
                      

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn bg-gray-500 text-white" data-dismiss="modal" wire:click="close">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
    @endif
   
</div>

