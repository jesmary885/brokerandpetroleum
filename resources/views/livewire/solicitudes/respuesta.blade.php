<div>

    <button title="Ver detalle" type="submit" class="btn text-green-500 btn-md font-bold" wire:click="open">
        VER RESPUESTA
    </button> 

    @if ($isopen)
        <div class="modal d-block" tabindex="-1" role="dialog" style="overflow-y: auto; display: block;">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title py-0 text-lg text-gray-800 font-bold"> Respuesta a tu solicitud</h5>
                    </div>
                    <div class="modal-body">

                        <h2 class="text-gray-700 font-bold text-md mb-2 text-justify mt-2">Respuesta</h2>
                        <div class="border border-gray-500 p-2 rounded-md">
                            <p class=" text-gray-600 text-justify">
                                {{$solicitud->respuesta_mensaje}}
                            </p>
                        </div>

                        @if($solicitud->respuesta_adjunta == 'si')

                        <div>
                            <h2 class="text-gray-700 font-bold text-md mb-2 text-justify mt-4">Documento adjunto</h2>

                            <div class=" flex justify-start ml-2">
                                <button class="text-green-600 text-lg hover:text-green-900" wire:click="download()">
                                    <i class="fas fa-download"></i>
                                </button>
                            </div>
                            
                        </div>

                        

                        @endif




                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn bg-gray-500 text-white" data-dismiss="modal" wire:click="close">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
    @endif
   
</div>