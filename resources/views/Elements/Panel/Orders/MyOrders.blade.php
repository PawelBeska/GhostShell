<div class="layout-content">
    <div class="layout-content-body">
        <div class="title-bar">
            <h1 class="title-bar-title">
                <span class="d-ib">Panel - Moje zlecenia</span>

            </h1>

        </div>
        <div class="row gutter-xs">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-actions">
                            <button type="button" class="card-action card-toggler" title="Collapse"></button>
                            <button type="button" class="card-action card-reload" title="Reload"></button>
                            <button type="button" class="card-action card-remove" title="Remove"></button>
                        </div>
                        <strong>Basic Table</strong>
                    </div>
                    <div class="card-body" data-toggle="match-height" >
                        <table class="table">
                            <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">Nazwa</th>
                                <th class="text-center">Etap</th>
                                <th class="text-center">Postęp</th>
                                <th class="text-center">Data rozpoczęcia</th>
                                <th class="text-center">Data zakończenia</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Opcje</th>
                            </tr>
                            </thead>
                            <tbody>
@php $z=0;@endphp
                            @foreach($orders->getOrders() as $order)
@php $z++;@endphp
                                <tr>
                                    <td class="text-center">{{$z}}</td>
                                    <td class="text-center">{{$order->name}}</td>
                                    <td class="text-center">{{$order->stage['name']}}</td>
                                    <td class="text-center">{{$order->stage['progress']}}</td>
                                    <td class="text-center">{{$order->stage['started_at']}}</td>
                                    <td class="text-center">{{$order->stage['ended_at']}}</td>
                                <td class="text-center">
                                    <span class="label label-outline-{{$order->status['color']}}">{{$order->status['name']}}</span>
                                </td>

                                <td class="text-center">
                                    <div class="dropdown">
                                        <button class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown" type="button" aria-expanded="false">
                                            Więcej
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="/zlecenia/{{$order->id}}">Podgląd</a></li>
                                            <li><a href="#">Kontakt</a></li>
                                            <li role="separator" class="divider"></li>
                                            <li class="disabled"> <a href="#">Opłać</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>