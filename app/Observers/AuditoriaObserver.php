<?php

namespace App\Observers;

use Illuminate\Support\Facades\Auth;
use App\Models\Audit;
use Illuminate\Database\Eloquent\Model;

class AuditoriaObserver
{
    public function created(Model $model)
    {
        $this->registrar('criar', $model, null, $model->getAttributes());
    }

    public function updated(Model $model)
    {
        $this->registrar('atualizar', $model, $model->getOriginal(), $model->getChanges());
    }

    public function deleted(Model $model)
    {
        $this->registrar('deletar', $model, $model->getOriginal(), null);
    }

    protected function registrar(string $operacao, Model $model, $valoresAnteriores = null, $valoresNovos = null)
    {
        $usuario = Auth::user();

        Audit::create([
            'id_usuario' => $usuario?->id,
            'tipo_modelo' => get_class($model),
            'id_modelo' => $model->getKey(),
            'operacao' => $operacao,
            'valores_anteriores' => $valoresAnteriores ? json_encode($valoresAnteriores) : null,
            'valores_novos' => $valoresNovos ? json_encode($valoresNovos) : null,
        ]);
    }
}
