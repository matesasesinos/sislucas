<?php require 'inc/header.php'?>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-11 px-4">
      <div class="pt-3 pb-2 mb-3">
        <h1 class="h4 pb-3 mb-3 border-bottom">Clientes <a href="#" class="btn btn-info add-company" data-toggle="modal" data-target="#addCompany"><i class="fas fa-plus"></i></a></span></h4>
        <div class="table-responsive">
            <table class="table table-bordered" id="tables">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Razón social</th>
                        <th>Email</th>
                        <th>Fecha Alta</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>El Cosito S.A.</td>
                        <td>info@elcosito.com</td>
                        <td>01-02-2020</td>
                        <td>
                            <a href="#" title="Servicios" class="btn btn-primary" data-toggle="tooltip" data-placement="top"><i class="fas fa-list"></i></a>
                            <a href="contactos.php" title="Contactos" class="btn btn-secondary" data-toggle="tooltip" data-placement="top"><i class="fas fa-users"></i></a>
                            <a href="#" title="Cuentas" class="btn btn-primary" data-toggle="tooltip" data-placement="top"><i class="fas fa-piggy-bank"></i></a>
                            <a href="#" title="Editar" class="btn btn-info" data-toggle="tooltip" data-placement="top"><i class="fas fa-eye"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>El Cosito S.A.</td>
                        <td>info@elcosito.com</td>
                        <td>01-02-2020</td>
                        <td>
                            <a href="#" title="Servicios" class="btn btn-primary" data-toggle="tooltip" data-placement="top"><i class="fas fa-list"></i></a>
                            <a href="contactos.php" title="Contactos" class="btn btn-secondary" data-toggle="tooltip" data-placement="top"><i class="fas fa-users"></i></a>
                            <a href="#" title="Cuentas" class="btn btn-primary" data-toggle="tooltip" data-placement="top"><i class="fas fa-piggy-bank"></i></a>
                            <a href="#" title="Editar" class="btn btn-info" data-toggle="tooltip" data-placement="top"><i class="fas fa-eye"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>El Cosito S.A.</td>
                        <td>info@elcosito.com</td>
                        <td>01-02-2020</td>
                        <td>
                            <a href="#" title="Servicios" class="btn btn-primary" data-toggle="tooltip" data-placement="top"><i class="fas fa-list"></i></a>
                            <a href="contactos.php" title="Contactos" class="btn btn-secondary" data-toggle="tooltip" data-placement="top"><i class="fas fa-users"></i></a>
                            <a href="#" title="Cuentas" class="btn btn-primary" data-toggle="tooltip" data-placement="top"><i class="fas fa-piggy-bank"></i></a>
                            <a href="#" title="Editar" class="btn btn-info" data-toggle="tooltip" data-placement="top"><i class="fas fa-eye"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>El Cosito S.A.</td>
                        <td>info@elcosito.com</td>
                        <td>01-02-2020</td>
                        <td>
                            <a href="#" title="Servicios" class="btn btn-primary" data-toggle="tooltip" data-placement="top"><i class="fas fa-list"></i></a>
                            <a href="contactos.php" title="Contactos" class="btn btn-secondary" data-toggle="tooltip" data-placement="top"><i class="fas fa-users"></i></a>
                            <a href="#" title="Cuentas" class="btn btn-primary" data-toggle="tooltip" data-placement="top"><i class="fas fa-piggy-bank"></i></a>
                            <a href="#" title="Editar" class="btn btn-info" data-toggle="tooltip" data-placement="top"><i class="fas fa-eye"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
      </div>
    </main>
    <div class="modal fade bd-example-modal-lg" id="addCompany" tabindex="-1" role="dialog" aria-labelledby="addCompanyLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addCompanyLabel">Agregar Empresa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" id="form-modal" name="form">
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-md-6 col-12">
                            <label for="">Empresa</label>
                            <input type="text" name="name" placeholder="Nombre" class="form-control ">
                        </div>
                        <div class="form-group col-md-6 col-12">
                            <label for="">Email</label>
                            <input type="email" name="email" placeholder="Email" class="form-control">
                        </div>
                        <div class="form-group col-md-6 col-12">
                            <label for="">Dirección</label>
                            <input type="text" name="address" placeholder="Dirección" class="form-control">
                        </div>
                        <div class="form-group col-md-6 col-12">
                            <label for="">Provincia</label>
                            <input type="text" name="state" placeholder="Provincia" class="form-control">
                        </div>
                        <div class="form-group col-md-6 col-12">
                            <label for="">Teléfono principal</label>
                            <input type="text" name="phone" placeholder="Teléfono Principal" class="form-control">
                        </div>
                        <div class="form-group col-md-6 col-12">
                            <label for="">Teléfono secundario</label>
                            <input type="text" name="phone2" placeholder="Teléfono Secundario" class="form-control">
                        </div>
                        <div class="title-add d-block w-100 mb-3">
                            <h5 class="modal-title">Datos de facturación</h5>
                        </div>
                        <div class="form-group col-md-6 col-12">
                            <label for="">CUIT</label>
                            <input type="text" name="cuit" placeholder="CUIT" class="form-control">
                        </div>
                        <div class="form-group col-md-6 col-12">
                            <label for="">Condición</label>
                            <select name="idIVAReceptor" id="idivareceptor" class="form-control">
                                <option value="" selected="selected" style="color:#888;">seleccionar...</option>
                                <option value="1">IVA Responsable Inscripto</option>
                                <option value="4">IVA Sujeto Exento</option>
                                <option value="5">Consumidor Final</option>
                                <option value="6">Responsable Monotributo</option>
                                <option value="7">Sujeto No Categorizado</option>
                                <option value="8">Proveedor del Exterior</option>
                                <option value="9">Cliente del Exterior</option>
                                <option value="10">IVA Liberado - Ley Nº 19.640</option>
                                <option value="11">IVA Responsable Inscripto - Agente de Percepción</option>
                                <option value="13">Monotributista Social</option>
                                <option value="15">IVA No Alcanzado</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>
   <?php require 'inc/footer.php'?>