@extends('site/layout')

@section('content')
<div class="container">
    <h2>Registros de Alterações</h2>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Data</th>
                <th>Usuário</th>
                <th>Operação</th>
                <th>Modelo</th>
                <th>ID do Registro</th>
                <th>Valores Antigos</th>
                <th>Valores Novos</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($logs as $log)
                <tr>
                    <td>{{ $log->created_at->format('d/m/Y H:i:s') }}</td>
                    <td>{{ $log->usuario->nome ?? 'Sistema' }}</td>
                    <td>{{ ucfirst($log->operacao) }}</td>
                    <td>{{ class_basename($log->tipo_modelo) }}</td>
                    <td>{{ $log->id_modelo }}</td>
                    <td>
                        @if($log->valores_anteriores)
                            <a href="#" data-bs-toggle="modal" data-bs-target="#modalAntigos{{ $log->id }}">
                                Ver JSON
                            </a>

                            <!-- Modal Valores Antigos -->
                            <div class="modal fade" id="modalAntigos{{ $log->id }}" tabindex="-1" aria-labelledby="modalAntigosLabel{{ $log->id }}" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-scrollable">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="modalAntigosLabel{{ $log->id }}">Valores Antigos</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                                  </div>
                                  <div class="modal-body">
                                    @php
                                        $dadosAntigos = is_string($log->valores_anteriores) ? json_decode($log->valores_anteriores, true) : $log->valores_anteriores;
                                    @endphp

                                    @if(is_array($dadosAntigos))
                                        <ul class="list-unstyled">
                                            @foreach($dadosAntigos as $chave => $valor)
                                                <li><strong>{{ $chave }}:</strong> {{ is_array($valor) ? json_encode($valor) : $valor }}</li>
                                            @endforeach
                                        </ul>
                                    @else
                                        <p>{{ $dadosAntigos }}</p>
                                    @endif
                                  </div>
                                </div>
                              </div>
                            </div>
                        @else
                            -
                        @endif
                    </td>
                    <td>
                        @if($log->valores_novos)
                            <a href="#" data-bs-toggle="modal" data-bs-target="#modalNovos{{ $log->id }}">
                                Ver JSON
                            </a>

                            <!-- Modal Valores Novos -->
                            <div class="modal fade" id="modalNovos{{ $log->id }}" tabindex="-1" aria-labelledby="modalNovosLabel{{ $log->id }}" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-scrollable">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="modalNovosLabel{{ $log->id }}">Valores Novos</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                                  </div>
                                  <div class="modal-body">
                                    @php
                                        $dadosNovos = is_string($log->valores_novos) ? json_decode($log->valores_novos, true) : $log->valores_novos;
                                    @endphp

                                    @if(is_array($dadosNovos))
                                        <ul class="list-unstyled">
                                            @foreach($dadosNovos as $chave => $valor)
                                                <li><strong>{{ $chave }}:</strong> {{ is_array($valor) ? json_encode($valor) : $valor }}</li>
                                            @endforeach
                                        </ul>
                                    @else
                                        <p>{{ $dadosNovos }}</p>
                                    @endif
                                  </div>
                                </div>
                              </div>
                            </div>
                        @else
                            -
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="d-flex justify-content-center">
        {{ $logs->links('pagination::bootstrap-4') }}
    </div>
</div>
@endsection
