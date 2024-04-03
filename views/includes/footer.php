</div>

</div>

<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; El Guri Carniceria <?php echo date('Y'); ?></span>
        </div>
    </div>
</footer>

</div>

</div>

<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Esta seguro de salir del sistema?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                <a class="btn btn-primary" href="<?php echo RUTA . 'controllers/ventasController.php?option=logout'; ?>">Cerrar sesion</a>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo RUTA . 'assets/'; ?>vendor/jquery/jquery.min.js"></script>
<script src="<?php echo RUTA . 'assets/'; ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="<?php echo RUTA . 'assets/'; ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<script src="<?php echo RUTA . 'assets/'; ?>js/sb-admin-2.min.js"></script>

<script src="<?php echo RUTA . 'assets/'; ?>js/chart.js"></script>
<script src="<?php echo RUTA . 'assets/'; ?>vendor/fontawesome-free/all.min.js"></script>
<script src="<?php echo RUTA . 'assets/'; ?>js/snackbar.min.js"></script>
<script src="<?php echo RUTA . 'assets/'; ?>js/axios.min.js"></script>

<script type="text/javascript" src="<?php echo RUTA . 'assets/'; ?>js/datatables.min.js"></script>
<script type="text/javascript" src="<?php echo RUTA . 'assets/'; ?>js/moment.min.js"></script>
<script type="text/javascript" src="<?php echo RUTA . 'assets/'; ?>js/dataTables.dateTime.min.js"></script>
<script>
    const ruta = '<?php echo RUTA; ?>';

    function message(tipo, mensaje) {
        Snackbar.show({
            text: mensaje,
            pos: 'top-right',
            backgroundColor: tipo == 'success' ? '#079F00' : '#FF0303',
            actionText: 'Cerrar'
        });
    }
</script>
<?php
if (!empty($_GET['pagina'])) {
    $script = $_GET['pagina'] . '.js';
    if (file_exists('assets/js/' . $script)) {
        echo '<script src="'. RUTA . 'assets/js/' . $script .'"></script>';
    }
}else{
    echo '<script src="'. RUTA . 'assets/js/index.js"></script>';
} ?>

</body>

</html>