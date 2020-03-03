<?php require 'inc/header.php'; ?>
<?php require 'api/clientes.php'; ?>
<?php //require 'conf/init.php';
?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <header class="card-header">
                    <h3 class="card-title">Operación nº: 1 <span class="small float-right" style="font-size: 14px;line-height: 35px;">Cliente: <a href=""> { nombre cliente }</a></span></h3>
                </header>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <h5>Detalles</h5>
                            <table class="table table-bordered">
                                <tr>
                                    <th scope="row">Servicio</th>
                                    <td>www.elcoso2.com</td>
                                </tr>
                                <tr>
                                    <th scope="row">Fecha de contratación</th>
                                    <td>02/02/2020</td>
                                </tr>
                                <tr>
                                    <th scope="row">Vencimiento</th>
                                    <td>02/02/2021 (faltan x días)</td>
                                </tr>
                                <tr>
                                    <th scope="row">Medio de pago</th>
                                    <td>Transferencia Bancaria</td>
                                </tr>
                                <tr>
                                    <th scope="row">Costo</th>
                                    <td>2000 ARS</td>
                                </tr>
                                <tr>
                                    <th scope="row">Monto pagado</th>
                                    <td>1500 ARS</td>
                                </tr>
                                <tr>
                                    <th scope="row">Debe</th>
                                    <td>500 ARS</td>
                                </tr>
                            </table>
                            <h5>Agregados</h5>
                            <table class="table table-bordered">
                                <tr>
                                    <th scope="row">Monto</th>
                                    <td>2000</td>
                                </tr>
                                <tr>
                                    <th scope="row">Concepto</th>
                                    <td>Backups</td>
                                </tr>
                                <tr>
                                    <th scope="row">Pagado</th>
                                    <td><span class="badge badge-success">SI</span></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6 col-12">
                            <h5>Nota <span class="float-right small">
                            <a href=""><i class="fas fa-highlighter"></i></a>
                            </span></h5>
                            <p class="border rounded p-3">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi explicabo illo labore vero quis doloremque officiis aperiam deleniti
                            
                            </p>
                            <h5>Agregar dinero</h5>
                            <form action="" class="border rounded p-3">
                                <div class="form-group">
                                    <label for="">Monto</label>
                                    <input type="text" name="monto" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Concepto</label>
                                    <textarea name="" id="" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">Pagado</label>
                                    <select name="" id="" class="form-control">
                                        <option value="">SI</option>
                                        <option value="">NO</option>
                                        <option value="">Parcial</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Entrega</label>
                                    <input type="text" name="entrega" class="form-control">
                                </div>
                                <button class="btn btn-primary">Agregar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require 'inc/footer.php'; ?>