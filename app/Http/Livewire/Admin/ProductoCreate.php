<?php

namespace App\Http\Livewire\Admin;

use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProductoCreate extends Component
{

    use WithFileUploads;

    public $isopen = false, $categorias, $categoria_id, $name, $other_features, $file;
    public $accion,$producto, $estado = 'inactivo';

    public function mount(Producto $producto, $accion){
        $this->producto = $producto;
        $this->accion = $accion;

        $this->categorias = Categoria::all();
        if($producto){
            $this->categoria_id = $producto->categoria_id;
            $this->name = $producto->name;
            $this->other_features = $producto->other_features;
        }

        

    }

    public function open()
    {
        $this->isopen = true;  
    }
    public function close()
    {
        $this->isopen = false;  
    }

    protected $rules = [
        'estado' => 'required',
        'name' => 'required|max:30',
        'categoria_id' => 'required',
        'other_features' => 'required',
    ];


    public function render()
    {
        return view('livewire.admin.producto-create');
    }

    public function save(){
        $rules = $this->rules;
        $this->validate($rules);

        if($this->file) $url = Storage::put('public/documentos_productos', $this->file);
        else $url = '';

        if($this->estado == 0) $page_view = 'no'; 
        else $page_view = 'si';

        if($this->accion == 'create'){
            $producto = new Producto();
            $producto->name = $this->name;
            $producto->categoria_id = $this->categoria_id;
            $producto->other_features = $this->other_features;
            $producto->file = $url;
            $producto->page_view = $page_view;
            $producto->status = 'Activo';
            $producto->save();

        }

        else{
            $this->producto->update([
                'name' => $this->name,
                'other_features' => $this->other_feactures,
                'categoria_id' => $this->categoria_id,
                'file' => $url,
                'page_view' => $page_view
            ]);

        }

       
        $this->reset(['name','file','other_features','categoria_id','isopen']);
        $this->emitTo('admin.productos','render');

        $this->emit('alert','Datos registrados correctamente');



    }
}
