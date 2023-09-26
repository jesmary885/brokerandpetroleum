<div>

    <div wire:click="showModal" wire:loading.attr="disabled" class="p-2 text-white text-xs font-bold border rounded-lg cursor-pointer bg-red-600 text-center mt-4"> 
        SOLICITUD DE PRESUPUESTO
    </div>

    <x-dialog-modal  class="flex items-center" wire:model="showingModal">

        <x-slot name="title">
            
        </x-slot>

        <x-slot name="content">

            <div class="space-y-3">

            <div class=" mb-4">
    
                <div class="md:w-1/2">
                    <label class="block uppercase text-xs tracking-wide text-gray-800 mb-2">
                        Tipo de solicitud
                    </label>
                    <div class="relative">
                        <select wire:model="tipo" title="tipo" id="tipo" class="block w-full text-gray-400 py-2 px-4 pr-8 leading-tight rounded focus:outline-none focus:border-gray-500" name="tipo">
                                <option value="" selected>Seleccione una opción</option>
                                <option value="informacion">Información</option>
                                <option value="presupuesto">Presupuesto</option>
                        </select>

                        <x-input-error for="tipo" />
                        
                    </div>
                </div>
                
            </div>

            @if($tipo == "informacion")

            <div class="mb-2 w-full">
                <div >
                    <label class="block uppercase tracking-wide text-grey-darker text-xs mb-2" for="grid-password">
                        Escriba su solicitud
                    </label>
            
                        <textarea wire:model.defer="mensaje" class=" w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3" id="formGroupExampleInput" name="mensaje" cols="80" rows="2" placeholder="Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis molestiae quidem autem molestias corrupti nesciunt recusandae. Itaque consectetur "></textarea>
                        <x-input-error for="mensaje" />
                    </div>
                </div>
            </div>
                
            @endif

            @if($tipo == "presupuesto")

                <p class="font-bold text-gray-700 mb-2 uppercase tracking-wide text-grey-darker text-xs">
                    Complete todos los campos
                </p>

                <hr>

                <div class="flex justify-between w-full">
                    <div class=" mr-2">
                        <label class="w-full text-justify block uppercase tracking-wide text-grey-darker text-xs" >Cantidad</label>
                        <input type="text" wire:model="cantidad" class="form-control rounded py-1" id="formGroupExampleInput">
                        <x-input-error for="cantidad" />
                    </div>
                </div>

                <div class="flex justify-between">

                    <div class="form-group w-full mr-2">
                        <label class="w-full text-justify block uppercase tracking-wide text-grey-darker text-xs">Unidad</label>
                        <select wire:model="unidad" title="unidad" id="unidad" class="block w-full text-gray-400 py-2 px-2 pr-8 leading-tight rounded focus:outline-none focus:border-gray-500" name="unidad">
                            <option value="" selected>Seleccione una opción</option>
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
                            <option value="" selected>Seleccione una opción</option>
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
                            <option value="" selected>Seleccione una opción</option>
                            <option value="consumo_propio">Consumo propio</option>
                            <option value="reventa">Reventa</option>
    
                        </select>
                        <x-input-error for="uso" />
                    </div>
                </div>


                <div class="flex justify-between w-full">
                    <div class="form-group w-full">
                        <label class="w-full text-justify uppercase tracking-wide text-grey-darker text-xs form-control ">Fecha requerida</label>
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


            @endif


        </x-slot>

        <x-slot name="footer">
            <x-danger-button wire:click="save" wire:loading.attr="disabled" wire:target="editImage, update">
                Enviar
            </x-danger-button>
        </x-slot>

    </x-dialog-modal>

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



