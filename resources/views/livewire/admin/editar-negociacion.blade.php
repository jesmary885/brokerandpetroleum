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

                        <h2 class="text-sm ml-2 m-0 p-0 text-justify text-gray-800 font-bold"><i class="fas fa-info-circle"></i> Complete todos los campos y presiona Guardar</h2> 
                
                        <hr class="m-2 p-2">
                      

                            <div class="w-full">
                                <label class="w-full text-justify text-gray-800 font-bold">Fase</label>

                                <select wire:model="fase_id" title="fase" class="block w-1/2 text-gray-400 py-2 px-2 pr-8 leading-tight rounded focus:outline-none focus:border-gray-500">
                                    <option value="" selected>Seleccione una opción</option>
                                        @foreach ($fases as $fase)
                                    <option value="{{$fase->id}}">{{$fase->name}}</option>
                                    @endforeach
                                </select>
                                <x-input-error for="fase_id" />
                            </div>



                            <div class="w-full mt-4">
                                <label class="w-full text-justify text-gray-800 font-bold">Estado de cada documento y/o proceso</label>

                                <div class="mb-2">
                                    @foreach ($documentos as $documento)

                                        <p class=" text-start mb-2 " >{{$documento->name}}</p>

                                        <select wire:model="estado_documento.{{$documento->id}}" title="estado del documento" class="mb-3 block w-full text-gray-400 py-2 px-2 pr-8 leading-tight rounded focus:outline-none focus:border-gray-500" name="estado">
                                            <option value="" selected>Seleccione una opción</option>
                                                @foreach ($estados as $estado)
                                                    <option value="{{$estado->id}}">{{$estado->name}}</option>
                                                @endforeach
                                        </select>
                                        <x-input-error for="estado_documento.{{$documento->id}}" />

                                    @endforeach

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

