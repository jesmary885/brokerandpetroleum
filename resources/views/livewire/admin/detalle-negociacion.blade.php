<div>

    <button title="Ver detalle" type="submit" class="btn text-green-500 btn-md" wire:click="open">
        <i class="	fas fa-eye"></i>
    </button> 
        

    @if ($isopen)
        <div class="modal d-block" tabindex="-1" role="dialog" style="overflow-y: auto; display: block;">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title py-0 text-lg text-gray-800 font-bold"> Detalle de negociación</h5>
                    </div>
                    <div class="modal-body">

                        <div>

                            <h2 class="text-gray-700 font-bold text-md mb-3 text-justify">
                                {{$negociacion->producto->name}}
                            </h2>


                            <div class="col-12 col-md-12 col-lg-12 order-2 order-md-1 mb-2">
                                <div class="row">
                                    <div class="col-12 col-sm-4">
                                        <div class="info-box bg-light">
                                            <div class="info-box-content">
                                                <span class="info-box-text text-center text-muted">Cantidad</span>
                                                <span class="info-box-number text-center text-muted mb-0">{{$negociacion->quantity}}</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-4">
                                        <div class="info-box bg-light">
                                            <div class="info-box-content">
                                                <span class="info-box-text text-center text-muted">Unidad</span>
                                                <span class="info-box-number text-center text-muted mb-0">{{$negociacion->unity}}</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-4">
                                        <div class="info-box bg-light">
                                            <div class="info-box-content">
                                                <span class="info-box-text text-center text-muted">Frecuencia</span>
                                                <span class="info-box-number text-center text-muted mb-0">{{$negociacion->frequency}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                

                                <div>

                                    <div class=" flex justify-start mb-1">

                                        <span class="text-gray-700 font-semibold text-sm">Proveedor: </span>
                                
                                        <p class="text-gray-600 ml-2">
                                          
                                        </p>

                                    </div>

                                    <div class=" flex justify-start">

                                        <span class="text-gray-700 font-semibold text-sm">Tipo de uso: </span>
                                
                                        <p class="text-gray-600 ml-2">
                                            {{$negociacion->product_use}}
                                        </p>

                                    </div>

                                    <h2 class="text-gray-700 font-bold text-md mb-2 text-justify mt-4">Comentario</h2>
                                    <div class="border border-gray-500 p-2 rounded-md">
                                        <p class=" text-gray-600 text-justify">
                                            {{$negociacion->comments}}
                                        </p>
                                    </div>
                                </div>

                            </div>

            




                        </div>
                      

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn bg-gray-500 text-white" data-dismiss="modal" wire:click="close">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
    @endif
   
</div>
