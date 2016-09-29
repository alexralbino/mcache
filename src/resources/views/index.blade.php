@extends('mixdinternet/admix::index')

@section('content')
    <section class="content">
        <div class="box flat">
            <div class="box-header with-border">
                <h3 class="box-title">
                    Controle de cache
                </h3>
            </div>

            <div class="box-body table-responsive">
                <table class="table table-striped table-hover table-action jq-table-rocket">
                    <thead>
                    <th>Liberar cache</th>
                    <th></th>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Liberar cache da aplicação</td>
                        <td>
                            @include('mixdinternet/mcache::partials.actions.btn.exec', ['route' => 'admin.mcache.refresh', 'action' => 'application'])
                        </td>
                    </tr>
                    <tr>
                        <td>Liberar cache das imagens</td>
                        <td>
                            @include('mixdinternet/mcache::partials.actions.btn.exec', ['route' => 'admin.mcache.refresh', 'action' => 'images'])
                        </td>
                    </tr>
                    <tr>
                        <td>Liberar cache das views</td>
                        <td>
                            @include('mixdinternet/mcache::partials.actions.btn.exec', ['route' => 'admin.mcache.refresh', 'action' => 'views'])
                        </td>
                    </tr>
                    <tr>
                        <td>Liberar cache das rotas</td>
                        <td>
                            @include('mixdinternet/mcache::partials.actions.btn.exec', ['route' => 'admin.mcache.refresh', 'action' => 'routes'])
                        </td>
                    </tr>
                    <tr>
                        <td>Liberar cache de otimização</td>
                        <td>
                            @include('mixdinternet/mcache::partials.actions.btn.exec', ['route' => 'admin.mcache.refresh', 'action' => 'clear-compiled'])
                        </td>
                    </tr>
                    </tbody>
                </table>
                <table class="table table-striped table-hover table-action jq-table-rocket">
                    <thead>
                    <th>Criar cache</th>
                    <th></th>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Criar cache das rotas</td>
                        <td>
                            @include('mixdinternet/mcache::partials.actions.btn.exec', ['route' => 'admin.mcache.refresh', 'action' => 'routes-cache'])
                        </td>
                    </tr>
                    <tr>
                        <td>Criar cache de otimização</td>
                        <td>
                            @include('mixdinternet/mcache::partials.actions.btn.exec', ['route' => 'admin.mcache.refresh', 'action' => 'optimize'])
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection