<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Nueva venta</h1>
</div>

<div class="row">
    <div class="col-md-5">
        <div class="card">
            <div class="card-body">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-search"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Barcode" id="seacrh">
                </div>
                <div class="table-responsive">
                    <table class="table" id="table_temp" style="width: 100%;">
                        <thead>
                            <tr>
                                <th scope="col">Nombre</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Cant</th>
                                <th scope="col">SubTotal</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-between">
                    <h5>Datos del cliente</h5>
                    <button class="btn btn-info" data-toggle="modal" data-target="#modal-cliente"><i class="fas fa-search"></i> Cliente</button>
                </div>
                <hr>
                <div class="row">
                    <input type="hidden" id="id-cliente" value="1">
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-users"></i></span>
                            </div>
                            <input type="text" class="form-control" id="nombre-cliente" placeholder="Nombre" readonly>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-home"></i></span>
                            </div>
                            <input type="text" class="form-control" id="dir-cliente" placeholder="Dirección" readonly>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-credit-card mr-1"></i> Metodo</span>
                            </div>
                            <select id="metodo" class="form-control">
                                <option value="EFECTIVO">EFECTIVO</option>
                                <option value="TRASNFERENCIA">TRASNFERENCIA</option>
                                <option value="COD QR">COD QR</option>
                                <option value="OTRO">OTRO</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <button type="button" class="btn btn-primary btn-block" id="btn-guardar"><i class="fas fa-print"></i> Guardar</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="col-md-7">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table" id="table_venta" style="width: 100%;">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Barcode</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Stock</th>
                                        <th scope="col">Precio</th>
                                        <th>Accion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="modal-cliente" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Seleccionar cliente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table" id="table_clientes" style="width: 100%;">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Nombre</th>
                                <th scope="col">Telefono</th>
                                <th scope="col">Direccion</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>