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

    public $isopen = false, $categorias, $categoria_id, $name_es, $other_features_es, $file, $name_en, $other_features_en;
    public $accion,$producto, $estado = 'inactivo';

    public function mount(Producto $producto, $accion){
        $this->producto = $producto;
        $this->accion = $accion;

        $this->categorias = Categoria::all();
        if($producto){
            $this->categoria_id = $producto->categoria_id;
            $this->name_es = $producto->name_es;
            $this->other_features_es = $producto->other_features_es;
            $this->name_en = $producto->name_en;
            $this->other_features_en = $producto->other_features_en;
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
        'name_es' => 'required|max:30',
        'categoria_id' => 'required',
        'other_features_es' => 'required',
        'name_en' => 'required|max:30',
        'other_features_en' => 'required',
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
            $producto->name_es = $this->name_es;
            $producto->categoria_id = $this->categoria_id;
            $producto->other_features_es = $this->other_features_es;
            $producto->name_en = $this->name_en;
            $producto->other_features_en = $this->other_features_en;
            $producto->file = $url;
            $producto->page_view = $page_view;
            $producto->status = 'Activo';
            $producto->save();

        }

        else{
            $this->producto->update([
                'name_es' => $this->name_es,
                'other_features_es' => $this->other_feactures_es,
                'name_en' => $this->name_en,
                'other_features_en' => $this->other_feactures_en,
                'categoria_id' => $this->categoria_id,
                'file' => $url,
                'page_view' => $page_view
            ]);

        }

       
        $this->reset(['name_es','file','other_features_es','categoria_id','isopen','name_en','other_features_en']);
        $this->emitTo('admin.productos','render');

        $this->emit('alert','Datos registrados correctamente');



    }
}
