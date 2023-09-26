<div>

    <button title="Responder solicitud" type="submit" class="btn text-blue-500 btn-md" wire:click="open">
        <i class="fas fa-reply"></i>
    </button> 
        

    @if ($isopen)
        <div class="modal d-block" tabindex="-1" role="dialog" style="overflow-y: auto; display: block;">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title py-0 text-lg text-gray-800 font-bold"> Responder solicitud</h5>
                    </div>
                    <div class="modal-body">

                        <div>

                            <div class=" w-full">

                                <textarea wire:model.defer="mensaje" class=" w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-1" cols="80" rows="2" placeholder="Escriba aquí el mensaje"></textarea>
                                <x-input-error for="mensaje" />
                         
                            </div>

                            <div class="w-full">
                                <div class="flex">
                                    <i class="	fas fa-file-image mt-2 mr-2 text-gray-800 font-bold"></i>
                                    <h2 class="text-md inline mt-2 text-gray-800 font-bold mb-2">Documentos</h2>
                                </div> 
                                <div>
                                    <div>
                                        <div class="form-group">
                                            <input type="file" wire:model="file" id="file" class="block w-full text-base font-normal text-gray-300 bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out focus:text-gray-300 focus:border-blue-600 focus:outline-none">
                                            @error('file')
                                            <small class="text-danger">{{$message}}</small>
                                            @enderror
                                           
                                        </div>
                                    </div>
                                </div>
                        </div>






                        </div>
                      

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn bg-gray-500 text-white" data-dismiss="modal" wire:click="close">Cerrar</button>

                        <button type="button" class="btn bg-gray-500 text-white" data-dismiss="modal" wire:click="enviar">Enviar</button>
                    </div>
                </div>
            </div>
        </div>
    @endif
   
</div>