<div>
    @if ($accion == 'create')

    <button title="Nuevo producto" type="submit" class="btn bg-green-500 text-white " wire:click="open">
        <i class="fas fa-plus-circle"></i>
    </button> 
        
    @else

    <button title="Editar producto" type="submit" class="btn bg-green-500 text-white btn-sm" wire:click="open">
        <i class="fas fa-edit"></i>
    </button> 
        
    @endif

    @if ($isopen)
        <div class="modal d-block" tabindex="-1" role="dialog" style="overflow-y: auto; display: block;">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title py-0 text-lg text-gray-800 font-bold"> Registro de producto</h5>
                    </div>
                    <div class="modal-body">
                        <h2 class="text-sm ml-2 m-0 p-0 text-justify text-gray-800 font-bold"><i class="fas fa-info-circle"></i> Complete todos los campos y presiona Guardar</h2> 
                
                        <hr class="m-2 p-2">
                        <div class="flex justify-end mb-2">
                            <div class="custom-control custom-switch"> 
                                <input value="1" wire:model="estado" type="checkbox" class="custom-control-input" id="customSwitch1">
                                <label class="custom-control-label" for="customSwitch1">Visualizar al inicio</label>
                            </div>
                        </div>
                        <div class="flex justify-between">
                                <div class="w-full mr-2">
                                    <label class="w-full text-justify text-gray-800 font-bold">Nombre (español)</label>
                                    <input type="text" wire:model="name_es" class="form-control rounded" id="formGroupExampleInput">
                                </div>

                                <div class="w-full mr-2">
                                    <label class="w-full text-justify text-gray-800 font-bold">Nombre (english)</label>
                                    <input type="text" wire:model="name_en" class="form-control rounded" id="formGroupExampleInput">
                                </div>

                                
                        </div>

                        <div class="flex justify-between mt-2">
                            

                            <div class="w-1/2">
                                <label class="w-full text-justify text-gray-800 font-bold">Categoría</label>

                                <select wire:model="categoria_id" title="Categoria" class="block w-full text-gray-400 py-2 px-2 pr-8 leading-tight rounded focus:outline-none focus:border-gray-500">
                                    <option value="" selected>Seleccione una opción</option>
                                        @foreach ($categorias as $categoria)
                                    <option value="{{$categoria->id}}">{{$categoria->name}}</option>
                                    @endforeach
                                </select>
                                <x-input-error for="categoria_id" />
                            </div>
                    </div>

                        <div class="mt-4 mb-2 w-full">
                              
                            <label class="w-full text-justify text-gray-800 font-bold">
                                Caracteristicas (español)
                            </label>
                            
                            <textarea wire:model.defer="other_features" class=" w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3" cols="80" rows="2" ></textarea>
                            <x-input-error for="other_features_es" />
                     
                        </div>

                        <div class="mt-4 mb-2 w-full">
                              
                            <label class="w-full text-justify text-gray-800 font-bold">
                                Caracteristicas (english)
                            </label>
                            
                            <textarea wire:model.defer="other_features" class=" w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3" cols="80" rows="2" ></textarea>
                            <x-input-error for="other_features_en" />
                     
                        </div>

                        <div class="w-full">
                                <div class="flex">
                                    <i class="	fas fa-file-image mt-2 mr-2 text-gray-800 font-bold"></i>
                                    <h2 class="text-md inline mt-2 text-gray-800 font-bold mb-2">Documentos</h2>
                                </div> 
                                <div class="row">
                                    <div class="col">
                                        <div class="w-full h-full">         
                                            @if ($file)
                                            <img src="{{ $file->temporaryUrl() }}" width="100%" height="100%">
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-group">
                                            <input type="file" wire:model="file" id="file" class="block w-full text-base font-normal text-gray-300 bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out focus:text-gray-300 focus:border-blue-600 focus:outline-none" accept="image/*">
                                            @error('file')
                                            <small class="text-danger">{{$message}}</small>
                                            @enderror
                                            <p>Tipos de archivos permitidos: JPG, JPEG, PNG. Tamaño máximo 3MB.</p>
                                        </div>
                                    </div>
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
    @push('js')
        <script>
            document.addEventListener('alpine:init',()=>{
                Alpine.data('datepicker',()=>({
                    last_date:null,
                    fecha_fin:null,
                    init(){
                        flatpickr(this.$refs.myDatepicker, {dateFormat:'Y-m-d H:i', altInput:true, altFormat: 'F j, Y',})
                    },
                    reset(){
                        this.last_date= null;
                    }
                }))
            })
        </script>
    @endpush
</div>


