<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venda;
use App\Models\Cliente;

class TransacaoController extends Controller
{
    public function index()
    {
        $vendas = Venda::with('cliente')
            ->orderBy('data', 'desc')
            ->paginate(5);

        return view('transacoes', compact('vendas'));
    }

    public function create()
    {
        $clientes = Cliente::select('id', 'nome')->get();
        return view('nova_transacao', compact('clientes'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'usuario'     => 'required|exists:clientes,id',
            'data'        => 'required|date',
            'forma_pgto'  => 'required|string|max:255',
            'moeda'       => 'required|string|max:10',
            'valor'       => 'required|numeric|min:0',
            'status'      => 'required|string|in:pendente,pago',
            'descricao'   => 'nullable|string|max:1000',
        ]);

        $venda = new Venda();
        $venda->id_cliente = $validated['usuario'];
        $venda->data = $validated['data'];
        $venda->forma_pgto = strtolower($validated['forma_pgto']);
        $venda->moeda = strtoupper($validated['moeda']);
        $venda->valor = $validated['valor'];
        $venda->status = strtolower($validated['status']);

        if (!empty($validated['descricao'])) {
            $venda->descricao = strtolower($this->removeAcentos($validated['descricao']));
        }

        $venda->save();

        return redirect()->route('transacoes.index')->with('success', 'Transação criada com sucesso!');
    }

    public function show(Venda $venda)
    {
        // Implementar se necessário
    }

    public function edit(Venda $venda)
    {
        return view('baixa', compact('venda'));
    }

    public function update(Request $request, Venda $venda)
    {
        $validated = $request->validate([
            'forma_pgto' => 'nullable|string|max:255',
        ]);

        $venda->status = 'pago';
        $venda->forma_pgto = strtolower($this->removeAcentos($validated['forma_pgto'] ?? ''));
        $venda->save();

        return redirect()->route('transacoes.index')->with('success', 'Pagamento informado!');
    }

    public function destroy(Venda $venda)
    {
        // Implementar se necessário
    }

    private function removeAcentos($string)
    {
        $mapa = [
            'á' => 'a',
            'à' => 'a',
            'ã' => 'a',
            'â' => 'a',
            'ä' => 'a',
            'é' => 'e',
            'è' => 'e',
            'ê' => 'e',
            'ë' => 'e',
            'í' => 'i',
            'ì' => 'i',
            'î' => 'i',
            'ï' => 'i',
            'ó' => 'o',
            'ò' => 'o',
            'õ' => 'o',
            'ô' => 'o',
            'ö' => 'o',
            'ú' => 'u',
            'ù' => 'u',
            'û' => 'u',
            'ü' => 'u',
            'ç' => 'c',
            'Á' => 'a',
            'À' => 'a',
            'Ã' => 'a',
            'Â' => 'a',
            'Ä' => 'a',
            'É' => 'e',
            'È' => 'e',
            'Ê' => 'e',
            'Ë' => 'e',
            'Í' => 'i',
            'Ì' => 'i',
            'Î' => 'i',
            'Ï' => 'i',
            'Ó' => 'o',
            'Ò' => 'o',
            'Õ' => 'o',
            'Ô' => 'o',
            'Ö' => 'o',
            'Ú' => 'u',
            'Ù' => 'u',
            'Û' => 'u',
            'Ü' => 'u',
            'Ç' => 'c'
        ];

        return strtr($string, $mapa);
    }
}
