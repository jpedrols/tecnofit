<?php

namespace App\Http\Livewire\Painel;

use App\Models\Movement;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Geral extends Component
{
    public $usuario;
    public $senha;
    public $movimentos;
    public $rank_por_movimento;

    public function logar() {
        if ($this->usuario == 'admin' && $this->senha == 'admin') {
            session()->put(["logado" => 'sim']);
            $this->dispatchBrowserEvent( 'toastr:success', [
                'message' =>  'Bem-Vindo',
            ]);
        } else {
            $this->dispatchBrowserEvent( 'toastr:error', [
                'message' =>  'Informações incorretas',
            ]);
        }

        $this->usuario = "";
        $this->senha = "";
    }

    public function deslogar() {
        session()->forget("logado");
        $this->dispatchBrowserEvent( 'toastr:success', [
            'message' =>  'Até breve!',
        ]);
    }
 
    public function render()
    {
        $this->movimentos = Movement::orderBy('name', 'Asc')->get();

        return view('livewire.painel.geral');
    }
}
