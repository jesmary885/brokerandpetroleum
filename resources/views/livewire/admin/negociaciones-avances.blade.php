<div>

    <button title="Ver avance" type="submit" class="btn text-green-500 btn-md" wire:click="open">
        <i class="	fas fa-eye"></i>
    </button> 
        

    @if ($isopen)
        <div class="modal d-block" tabindex="-1" role="dialog" style="overflow-y: auto; display: block;">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title py-0 text-lg text-gray-800 font-bold"> Avance de la negociación</h5>
                    </div>
                    <div class="modal-body">

                        <div>

                            <div class="container-fluid">

                                <div class="row">
                                    <div class="col-md-12">
                                
                                        <div class="timeline">
                                            @foreach ($procesos_documentos as $item)
                                                <div class="time-label">
                                                    <span class="bg-green text-sm">{{$item->updated_at}}</span>
                                                </div>

                                                <div>
                                                    @if($item->estados_procesos_documentos->color == 'verde') 
                                                        <i class="fas fa-check-double bg-green"></i>
                                                    @elseif($item->estados_procesos_documentos->color == 'amarillo') 
                                                        <i class="fas fa-exclamation-triangle bg-yellow"></i>
                                                    @else
                                                        <i class="	fas fa-times-circle bg-red"></i>
                                                    @endif
                                                    <div class="timeline-item">
                                                        <span class="time"><i class="fas fa-clock"></i> {{$item->documentos->fase->name}}</span>
                                                        <h3 class="timeline-header">{{$item->documentos->name}}</h3>
                                                        <div class="timeline-body">
                                                            <div class="flex justify-start">
                                                                {{$item->estados_procesos_documentos->name}}

                                                            </div>
                                                   
                                                        </div>
                                                  
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
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