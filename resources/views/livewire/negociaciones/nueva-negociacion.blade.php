<div>

    <button title="Nueva negociación" type="submit" class="btn text-white bg-blue-600 ml-2 btn-sm py-2" wire:click="open">
        <i class="	fas fa-plus-circle"></i> Nueva Negociación
    </button> 
        

    @if ($isopen)
        <div class="modal d-block" tabindex="-1" role="dialog" style="overflow-y: auto; display: block;">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title py-0 text-lg text-gray-800 font-bold"> Nueva negociación</h5>
                    </div>
                    <div class="modal-body">

                        <div>

                            <p class="font-bold text-gray-700 mb-2 uppercase tracking-wide text-grey-darker text-xs">
                                Complete todos los campos
                            </p>
            
                            <hr>

                            <div class="w-full mb-2">
                                    <label class="w-full text-justify text-gray-800 font-bold">Producto</label>

                                    <select wire:model="producto_id" title="Producto" class="block w-full text-gray-400 py-2 px-2 pr-8 leading-tight rounded focus:outline-none focus:border-gray-500">
                                        <option value="" selected>Seleccione una opción</option>
                                            @foreach ($productos as $producto)
                                        <option value="{{$producto->id}}">{{$producto->name}}</option>
                                        @endforeach
                                    </select>
                                    <x-input-error for="producto_id" />
                            </div>
            
                            <div class="flex justify-between w-full mb-2">
                                <div class=" mr-2">
                                    <label class="w-full text-justify block uppercase tracking-wide text-grey-darker text-xs" >Cantidad</label>
                                    <input type="text" wire:model="cantidad" class="form-control rounded py-1" id="formGroupExampleInput">
                                    <x-input-error for="cantidad" />
                                </div>
                            </div>
            
                            <div class="flex justify-between mb-2">
            
                                <div class="form-group w-full mr-2">
                                    <label class="w-full text-justify block uppercase tracking-wide text-grey-darker text-xs">Unidad</label>
                                    <select wire:model="unidad" title="unidad" id="unidad" class="block w-full text-gray-400 py-2 px-2 pr-8 leading-tight rounded focus:outline-none focus:border-gray-500" name="unidad">
                                        <option value="" selected>Seleccione</option>
                                        <option value="unidad" selected>Unidad</option>
                                        <option value="litros">Litros</option>
                                        <option value="libras">Libras</option>
                                        <option value="piezas">Piezas</option>
                                        <option value="gramos">Gramos</option>
                                        <option value="frascos">Frascos</option>
                                        <option value="metros">Metros</option>
                                        <option value="metros_cuadrados">Metros cuadrados</option>
                                        <option value="metros_cubicos">Metros cúbicos</option>
                                        <option value="onzas">Onzas</option>
                                        <option value="mmlb">MMlb</option>
                                    </select>
                                    <x-input-error for="unidad" />
                                    
                                </div>
            
                                <div class="form-group w-full mr-2">
                                    <label class="w-full text-justify block uppercase tracking-wide text-grey-darker text-xs">Frecuencia</label>
                                    <select wire:model="frecuencia" title="frecuencia" id="frecuencia" class="block w-full text-gray-400 py-2 px-2 pr-8 leading-tight rounded focus:outline-none focus:border-gray-500" name="frecuencia">
                                        <option value="" selected>Seleccione</option>
                                        <option value="diario">Diario</option>
                                        <option value="semanal">Semanal</option>
                                        <option value="quincenal">Quincenal</option>
                                        <option value="mensual">Mensual</option>
                                        <option value="bimenstral">Bimestral</option>
                                        <option value="trimestral">Trimestral</option>
                                        <option value="semestral">Semestral</option>
                                        <option value="anual">Anual</option>
                                        <option value="unica_vez">Única vez</option>
                                        <option value="para_pruebas">Para pruebas</option>
                                    </select>
                                    <x-input-error for="frecuencia" />
                                    
                                </div>
            
            
                                <div class="form-group w-full">
                                    <label class="w-full text-justify block uppercase tracking-wide text-grey-darker text-xs">Uso del producto</label>
                                    <select wire:model="uso" title="uso" id="uso" class="block w-full text-gray-400 py-2 px-2 pr-8 leading-tight rounded focus:outline-none focus:border-gray-500" name="uso">
                                        <option value="" selected>Seleccione</option>
                                        <option value="consumo_propio">Consumo propio</option>
                                        <option value="reventa">Reventa</option>
                
                                    </select>
                                    <x-input-error for="uso" />
                                </div>
                            </div>
            
            
                            <div class="flex justify-between w-full">
                                <div class="form-group w-full">
                                    <label class="w-full text-justify uppercase  text-grey-darker text-xs  ">Fecha requerida</label>
                                    <div>
                                        <div wire:ignore x-data="datepicker()">
                                            <div class="flex flex-col">
                                                <div class="flex items-center">
                                                    <input 
                                                        type="text" 
                                                        class="px-4 py-1 outline-none cursor-pointer rounded" 
                                                        x-ref="myDatepicker" 
                                                        wire:model="fecha_requerida" 
                                                        placeholder="Seleccione la fecha">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
            
                                        <x-input-error for="fecha_requerida" />
                                    </div>
                                   
                                </div>
                            </div>
            
                            <div >
            
                                <label class="text-justify uppercase tracking-wide text-grey-darker text-xs form-control block">Comentarios</label>
                                <textarea wire:model.defer="mensaje" class=" w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3" id="formGroupExampleInput" name="mensaje" cols="80" rows="2" placeholder="Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis molestiae quidem autem molestias corrupti nesciunt recusandae. Itaque consectetur "></textarea>
            
                                <x-input-error for="mensaje" />
                            </div>





                        </div>
                      

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn bg-gray-500 text-white" data-dismiss="modal" wire:click="close">Cerrar</button>

                        <button type="button" class="btn bg-gray-500 text-white" data-dismiss="modal" wire:click="guardar">Guardar</button>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <script>
        document.addEventListener('alpine:init',()=>{
            Alpine.data('datepicker',()=>({
                fecha_requerida:null,
                init(){
                    flatpickr(this.$refs.myDatepicker, {dateFormat:'Y-m-d H:i', altInput:true, altFormat: 'F j, Y',})
                },
                reset(){
                    this.fecha_requerida= null;
                }
            }))
        })
    </script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>


    <script>
        livewire.on('alert', function(ms){
            toastr.options={
                "closeButton": true,
                "debug": false,
                "newestOnTop": false,
                "progressBar": true,
                "positionClass": "toast-top-right",
                "preventDuplicates": true,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }
                toastr.success(ms)
        })
    </script>
   
</div>