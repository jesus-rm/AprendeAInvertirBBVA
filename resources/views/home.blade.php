@extends('adminlte::page')

@section('title', 'Aprende a invertir')

@section('content_header')
    <h1 class="m-0 text-dark encabezado">Inicio</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card mini-stat m-b-30">
                <div class="p-3 bg-success text-white">
                    <div class="mini-stat-icon">
                        <i class="mdi mdi-cube-outline float-right mb-0"></i>
                    </div>
                    <h6 class="text-uppercase mb-0 cards-cantidad">Ingresos</h6>
                </div>
                <div class="card-body">
                    <div class="border-bottom pb-4">
                        <span class="badge badge-warning"> ---- </span> <span class="ml-2 text-muted">Estable</span>
                    </div>
                    <div class="mt-4 text-muted">
                        <div class="float-right">
                            <h5 class="m-0">Cantidad: $12,000<i class="mdi mdi-arrow-up text-success ml-2"></i></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card mini-stat m-b-30">
                <div class="p-3 bg-success text-white">
                    <div class="mini-stat-icon">
                        <i class="mdi mdi-account-network float-right mb-0"></i>
                    </div>
                    <h6 class="text-uppercase mb-0 cards-cantidad">Gastos</h6>
                </div>
                <div class="card-body">
                    <div class="border-bottom pb-4">
                            <span class="badge badge-danger"> -12% </span> <span class="ml-2 text-muted">Baja</span>
                    </div>
                    <div class="mt-4 text-muted">
                        <div class="float-right">
                            <h5 class="m-0">Cantidad: $9,876.11<i class="mdi mdi-arrow-up text-success ml-2"></i></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card mini-stat m-b-30">
                <div class="p-3 bg-success text-white">
                    <div class="mini-stat-icon">
                        <i class="mdi mdi-tag-text-outline float-right mb-0"></i>
                    </div>
                    <h6 class="text-uppercase mb-0 cards-cantidad">Dinero en cuentas</h6>
                </div>
                <div class="card-body">
                    <div class="border-bottom pb-4">
                        <span class="badge badge-success"> +30% </span> <span class="ml-2 text-muted">Alta</span>
                    </div>
                    <div class="mt-4 text-muted">
                        <div class="float-right">
                            <h5 class="m-0">Cantidad: $10,000<i class="mdi mdi-arrow-down text-danger ml-2"></i></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card mini-stat m-b-30">
                <div class="p-3 bg-success text-white">
                    <div class="mini-stat-icon">
                        <i class="mdi mdi-cart-outline float-right mb-0"></i>
                    </div>
                    <h6 class="text-uppercase mb-0 cards-cantidad">Inversión</h6>
                </div>
                <div class="card-body">
                    <div class="border-bottom pb-4">
                        <span class="badge badge-danger"> 0% </span> <span class="ml-2 text-muted">Baja</span>
                    </div>
                    <div class="mt-4 text-muted">
                        <div class="float-right">
                            <h5 class="m-0">Cantidad: 0<i class="mdi mdi-arrow-up text-success ml-2"></i></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row contenedor-grafico">
        <div class="col-xl-8">
            <div class="card m-b-30">
                <div class="card-body">
                    <h4 class="mt-0 header-title">Gráfico anual</h4>
                    <ul class="list-inline widget-chart m-t-20 text-center">
                        <li>
                            <h4 class="ingresos"><b>- Ingresos</b></h4>
                        </li>
                        <li>
                            <h4 class="gastos"><b>- Gastos</b></h4>
                        </li>
                        <li>
                            <h4 class="ahorro"><b>- Ahorro</b></h4>
                        </li>
                    </ul>
                    <img class="grafica1" src="{{ asset('img/Graphics/ingr_egr.svg') }}" alt="Grafica">
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <section class="col-lg-7 connectedSortable ui-sortable">
            <!-- TO DO List -->
            <div class="card" style="position: relative; left: 0px; top: 0px;">
                <div class="card-header ui-sortable-handle">
                    <h3 class="card-title">
                        <i class="ion ion-clipboard mr-1"></i>
                        Planificador de ahorros
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <ul class="todo-list ui-sortable" data-widget="todo-list">
                        <li class="" style="">
                            <!-- checkbox -->
                            <div class="icheck-primary d-inline ml-2">
                                <input type="checkbox" value="" name="todo1" id="todoCheck1">
                                <label for="todoCheck1"></label>
                            </div>
                            <!-- todo text -->
                            <span class="text">Design a nice theme</span>
                            <!-- Emphasis label -->
                            <small class="badge badge-danger"><i class="far fa-clock"></i> 2 mins</small>
                            <!-- General tools such as edit or delete-->
                            <div class="tools">
                                <i class="fas fa-edit"></i>
                                <i class="fas fa-trash-o"></i>
                            </div>
                        </li>
                        <li class="" style="">
                            <!-- checkbox -->
                            <div class="icheck-primary d-inline ml-2">
                                <input type="checkbox" value="" name="todo1" id="todoCheck1">
                                <label for="todoCheck1"></label>
                            </div>
                            <!-- todo text -->
                            <span class="text">Design a nice theme</span>
                            <!-- Emphasis label -->
                            <small class="badge badge-danger"><i class="far fa-clock"></i> 2 mins</small>
                            <!-- General tools such as edit or delete-->
                            <div class="tools">
                                <i class="fas fa-edit"></i>
                                <i class="fas fa-trash-o"></i>
                            </div>
                        </li>
                        <li class="" style="">
                            <!-- checkbox -->
                            <div class="icheck-primary d-inline ml-2">
                                <input type="checkbox" value="" name="todo1" id="todoCheck1">
                                <label for="todoCheck1"></label>
                            </div>
                            <!-- todo text -->
                            <span class="text">Design a nice theme</span>
                            <!-- Emphasis label -->
                            <small class="badge badge-danger"><i class="far fa-clock"></i> 2 mins</small>
                            <!-- General tools such as edit or delete-->
                            <div class="tools">
                                <i class="fas fa-edit"></i>
                                <i class="fas fa-trash-o"></i>
                            </div>
                        </li>
                        <li class="" style="">
                            <!-- checkbox -->
                            <div class="icheck-primary d-inline ml-2">
                                <input type="checkbox" value="" name="todo1" id="todoCheck1">
                                <label for="todoCheck1"></label>
                            </div>
                            <!-- todo text -->
                            <span class="text">Design a nice theme</span>
                            <!-- Emphasis label -->
                            <small class="badge badge-danger"><i class="far fa-clock"></i> 2 mins</small>
                            <!-- General tools such as edit or delete-->
                            <div class="tools">
                                <i class="fas fa-edit"></i>
                                <i class="fas fa-trash-o"></i>
                            </div>
                        </li>
                        <li class="" style="">
                            <!-- checkbox -->
                            <div class="icheck-primary d-inline ml-2">
                                <input type="checkbox" value="" name="todo1" id="todoCheck1">
                                <label for="todoCheck1"></label>
                            </div>
                            <!-- todo text -->
                            <span class="text">Design a nice theme</span>
                            <!-- Emphasis label -->
                            <small class="badge badge-danger"><i class="far fa-clock"></i> 2 mins</small>
                            <!-- General tools such as edit or delete-->
                            <div class="tools">
                                <i class="fas fa-edit"></i>
                                <i class="fas fa-trash-o"></i>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                    <button type="button" class="btn btn-primary float-right"><i class="fas fa-plus"></i>Añadir elemento</button>
                </div>
            </div>
        <!-- /.card -->
        </section>
    </div>

    <div class="row">
        <div class="col-xl-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <h4 class="mt-0 header-title mb-4">Movimientos</h4>
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>Clave</th>
                                    <th>Concepto</th>
                                    <th>Tipo</th>
                                    <th>Referencia</th>
                                    <th>Fecha de operación</th>
                                </tr>

                            </thead>
                            <tbody>
                                <tr>
                                    <td>001</td>
                                    <td>Cargo compra</td>
                                    <td>Cargo</td>
                                    <td>61234434545642</td>
                                    <td>2017/04/25</td>
                                </tr>
                                <tr>
                                    <td>001</td>
                                    <td>Cargo compra</td>
                                    <td>Cargo</td>
                                    <td>61234434545642</td>
                                    <td>2017/04/25</td>
                                </tr>
                                <tr>
                                    <td>001</td>
                                    <td>Cargo compra</td>
                                    <td>Cargo</td>
                                    <td>61234434545642</td>
                                    <td>2017/04/25</td>
                                </tr>
                                <tr>
                                    <td>001</td>
                                    <td>Cargo compra</td>
                                    <td>Cargo</td>
                                    <td>61234434545642</td>
                                    <td>2017/04/25</td>
                                </tr>
                                <tr>
                                    <td>001</td>
                                    <td>Cargo compra</td>
                                    <td>Cargo</td>
                                    <td>61234434545642</td>
                                    <td>2014/06/02</td>
                                </tr>
                                <tr>
                                    <td>001</td>
                                    <td>Cargo compra</td>
                                    <td>Cargo</td>
                                    <td>42357676575776</td>
                                    <td>2014/03/15</td>
                                </tr>
                                <tr>
                                    <td>001</td>
                                    <td>Cargo compra</td>
                                    <td>Cargo</td>
                                    <td>61234434545642</td>
                                    <td>2013/04/25</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
@stop

@section('js')
@stop