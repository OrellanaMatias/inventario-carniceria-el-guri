<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Historial de ventas realizadas</h1>
</div>
<div class="card">
    <div class="card-body">
        <div class="d-flex justify-content-center">
            <div class="form-group">
                <label for="desde">Desde</label>
                <input id="desde" class="form-control" type="text">
            </div>
            <div class="form-group">
                <label for="hasta">Hasta</label>
                <input id="hasta" class="form-control" type="text">
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-hover" style="width: 100%;" id="table_ventas">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Cliente</th>
                        <th scope="col">Productos</th>
                        <th scope="col">Total</th>
                        <th scope="col">Fecha</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>
</div>