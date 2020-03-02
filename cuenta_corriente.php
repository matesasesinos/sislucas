<?php require 'inc/header.php'; ?>
<?php require 'api/clientes.php'; ?>
<?php //require 'conf/init.php';
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1 class="h1">Cliente: {nombre del cliente}</h1>
        </div>
        <div class="col-12 col-md-8">
            <div class="card">
                <header class="card-header">
                    <h3 class="card-title">Servicios</h3>
                </header>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table" id="table">
                            <thead>
                                <tr>
                                    <th>Servicio</th>
                                    <th>Monto</th>
                                    <th>Pago</th>
                                    <td>Debe</td>
                                    <td>Fecha pago</td>
                                    <td></td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>www.elcoso.com</td>
                                    <td>$2000</td>
                                    <td><span class="badge badge-success">Completo</span></td>
                                    <td>0</td>
                                    <td>02/03/2020</td>
                                    <td><a href=""><i data-feather="edit-3"></i></a></td>
                                </tr>
                                <tr>
                                    <td>H: www.elcoso2.com</td>
                                    <td>$2000</td>
                                    <td><span class="badge badge-warning">Parcial</span></td>
                                    <td>$1500</td>
                                    <td>02/02/2020</td>
                                    <td><a href=""><i data-feather="edit-3"></i></a></td>
                                </tr>
                                <tr>
                                    <td>H: www.elcoso2.com</td>
                                    <td>$2000</td>
                                    <td><span class="badge badge-danger">NO</span></td>
                                    <td>$2000</td>
                                    <td>-</td>
                                    <td><a href=""><i data-feather="edit-3"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
        <div class="col-12 col-md-4">
            <div class="card">
                <header class="card-header">
                    <h3 class="card-title">Agregar nuevo servicio</h3>
                </header>
                <form action="">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Seleccionar Tipo</label>
                            <select name="" id="" class="form-control">
                                <option value=""> -- seleccione --</option>
                                <option value="">Hosting</option>
                                <option value="">Diseño Web</option>
                                <option value="">Programación</option>
                                <option value="">Otros</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Seleccionar servicio</label>
                            <select name="" id="" class="form-control">
                                <option value=""> -- seleccione --</option>
                                <option value="">Hosting 1</option>
                                <option value="">Hosting 2</option>
                                <option value="">Hosting 3</option>
                                <option value="">Hosting 4</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Vencimiento</label>
                            <input type="text" name="date" id="datepicker" value="" class="form-control">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary" type="button">Agregar</button>
                    </div>
                </form>
            </div>


        </div>
    </div>
</div>

<?php require 'inc/footer.php'; ?>