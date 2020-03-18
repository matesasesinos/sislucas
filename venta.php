<?php require 'inc/header.php' ?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-11 px-4">
    <div class="pt-3 pb-2 mb-3">
        <h4 class="h2 pb-3 mb-3 border-bottom  d-flex justify-content-between align-items-center">Venta <a href="venta.php" class="btn btn-info add-company"><i class="fas fa-plus"></i></a></span></h4>
        <div class="row">
            <div class="col-md-4 col-12">
                <div class="form-group">
                    <label for="">Cliente</label>
                    <input type="text" name="cliente" id="cliente-complete" value="<?php echo !isset($_GET['cliente']) ? '' : $_GET['cliente']; ?>" class="form-control" placeholder="Cliente">
                </div>
                <div class="form-group">
                    <label for="">Tipo de venta</label>
                    <input type="text" name="tipo" id="tipo-venta" value="<?php echo !isset($_GET['tipo']) ? '' : $_GET['tipo']; ?>" class="form-control" placeholder="Tipo de venta">
                </div>
            </div>
            <div class="col-md-4 col-12">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="">Emisión</label>
                            <input type="text" name="emision" id="emision" class="form-control" placeholder="Emisión">
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="">Vencimiento</label>
                            <input type="text" name="vence" id="vence" class="form-control" placeholder="Vencimiento">
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="">Inicio Servicio</label>
                            <input type="text" name="serv1" id="serv1" class="form-control" placeholder="Inicio Servicio">
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="">Fin Servicio</label>
                            <input type="text" name="serv2" id="serv2" class="form-control" placeholder="Fin Servicio">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-3">
            <div class="col-6">
                <div class="form-group">
                    <input type="text" name="product" id="product" placeholder="Seleccionar Producto" class="form-control">
                </div>
            </div>
            <div class="col-3">
                <button type="button" class="btn btn-success" id="add-product"><i class="fas fa-plus"></i></button>
            </div>
        </div>
        <div class="row pt-3">
            <div class="col-12">
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>Producto</th>
                            <th>Cant</th>
                            <th>Precio</th>
                            <th>Descuento</th>
                            <th>Subtotal</th>
                            <th>IVA</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody id="products">
                    </tbody>
                </table>
            </div>
            <div class="col-12">
                <div class=" m-2 border-top"></div>
            </div>
            <div class="col-md-6 col-12">
                <div class="form-group">
                    <label for="">Nota para el cliente</label>
                    <textarea name="" id="" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="">Nota interna</label>
                    <textarea name="" id="" class="form-control"></textarea>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="row d-flex justify-content-between mb-3 align-items-baseline">
                    <div class="col-6">
                        Descuento
                    </div>
                    <div class="col-6">
                    <input type="text" name="descuento-gral" id="" class="form-control">
                    </div>
                </div>
                <div class="row d-flex justify-content-between">
                    <div class="col-6">Total</div>
                    <div class="col-6 text-right font-weight-bold">ARS <div id="total">150</div></div>
                </div>
                <div class="row d-flex justify-content-between mt-5">
                    <div class="col-md-4 col-12">
                        <button class="btn btn-dark btn-block">Cancelar</button>
                    </div>
                    <div class="col-md-4 col-12">
                        <button class="btn btn-info btn-block">Guardar</button>
                    </div>
                    <div class="col-md-4 col-12">
                        <button class="btn btn-success btn-block">Cobrar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php require 'inc/footer.php' ?>