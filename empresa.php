<?php require 'inc/header.php' ?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-11 px-4">
    <div class="pt-3 pb-2 mb-3">
        <h4 class="h2 pb-3 mb-3 border-bottom  d-flex justify-content-between align-items-center">Empresa <a href="clientes-table.php" class="btn btn-sm btn-primary text-small text-white">Volver</a></h4>
        <div class="content">
            <div class="card">
                <div class="card-body">
                    <h6 class="d-flex justify-content-between align-items-center">Datos de contacto <span class="btn btn-link small text-muted text-small"><a href="" data-toggle="modal" data-target="#editCompany">Editar</a></span></h6>
                    <address>
                        <a href="">info@elcosito.com</a><br>
                       <strong>Dirección: </strong>dirección Demo<br>
                       <strong>CP: </strong>1111<br>
                       <strong>Provincia: </strong>Cordoba, Argentina<br>
                       <strong>Teléfono principal: </strong>11 5555 6666<br>
                       <strong>Teléfono secundario: </strong>11 15 5558 9991<br>
                       <strong>CUIT: </strong>20112223332<br>
                       <strong>Condición: </strong> IVA Responsable Inscripto
                    </address>
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-body">
                <h6 class="d-flex justify-content-between align-items-center">Contactos <span class="btn btn-link small text-muted text-small"><a href="" data-toggle="modal" data-target="#addContact"><i class="fas fa-plus"></i></a></span></h6>
                <table class="table table-bordered" id="tables">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Teléfono</th>
                            <th>Tipo</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Juan Iriart</td>
                            <td>jeiriart@gmail.com</td>
                            <td>11 2222 3333</td>
                            <td>Técnico</td>
                            <td>
                                <a href="#" title="Editar Contacto" class="btn btn-primary" data-toggle="tooltip" data-placement="top"><i class="fas fa-highlighter"></i></a>
                                <a href="#" title="Eliminar Contacto" class="btn btn-danger" data-toggle="tooltip" data-placement="top"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Lucas Lagomarsino</td>
                            <td>lucas.larmarsino@gmail.com</td>
                            <td>11 2222 3333</td>
                            <td>Administrativo</td>
                            <td>
                                <a href="#" title="Editar Contacto" class="btn btn-primary" data-toggle="tooltip" data-placement="top"><i class="fas fa-highlighter"></i></a>
                                <a href="#" title="Eliminar Contacto" class="btn btn-danger" data-toggle="tooltip" data-placement="top"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>El coso</td>
                            <td>elcoso@generencia.com</td>
                            <td>11 2222 3333</td>
                            <td>Generencia</td>
                            <td>
                                <a href="#" title="Editar Contacto" class="btn btn-primary" data-toggle="tooltip" data-placement="top"><i class="fas fa-highlighter"></i></a>
                                <a href="#" title="Eliminar Contacto" class="btn btn-danger" data-toggle="tooltip" data-placement="top"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                </div>
                <div class="card-footer text-center">
                <a href="" data-toggle="modal" data-target="#addContact">Agregar contacto <i class="fas fa-plus"></i></a>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- Modal new-->
<div class="modal fade bd-example-modal-lg" id="editCompany" tabindex="-1" role="dialog" aria-labelledby="editCompanyLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editCompanyLabel">Agregar Empresa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" id="form-modal" name="form">
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-md-6 col-12">
                            <label for="">Empresa</label>
                            <input type="text" name="name" placeholder="Nombre" class="form-control" value="El Cosito S.A">
                        </div>
                        <div class="form-group col-md-6 col-12">
                            <label for="">Email</label>
                            <input type="email" name="email" placeholder="Email" class="form-control" value="info@elcosito.com">
                        </div>
                        <div class="form-group col-md-6 col-12">
                            <label for="">Dirección</label>
                            <input type="text" name="address" placeholder="Dirección" class="form-control" value="Dirección demo">
                        </div>
                        <div class="form-group col-md-6 col-12">
                            <label for="">Provincia</label>
                            <input type="text" name="state" placeholder="Provincia" class="form-control" value="Provincia demo">
                        </div>
                        <div class="form-group col-md-6 col-12">
                            <label for="">Teléfono principal</label>
                            <input type="text" name="phone" placeholder="Teléfono Principal" class="form-control" value="11 5555 6666">
                        </div>
                        <div class="form-group col-md-6 col-12">
                            <label for="">Teléfono secundario</label>
                            <input type="text" name="phone2" placeholder="Teléfono Secundario" class="form-control" value="11 15 5558 9991">
                        </div>
                        <div class="title-add d-block w-100 mb-3">
                            <h5 class="modal-title">Datos de facturación</h5>
                        </div>
                        <div class="form-group col-md-6 col-12">
                            <label for="">CUIT</label>
                            <input type="text" name="cuit" placeholder="CUIT" class="form-control" value="20112223332">
                        </div>
                        <div class="form-group col-md-6 col-12">
                            <label for="">Condición</label>
                            <select name="idIVAReceptor" id="idivareceptor" class="form-control">
                                <option value="" selected="selected" style="color:#888;">seleccionar...</option>
                                <option value="1" selected>IVA Responsable Inscripto</option>
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
<!-- add contact -->
<div class="modal fade bd-example-modal-lg" id="addContact" tabindex="-1" role="dialog" aria-labelledby="addContactLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addContactLabel">Agregar Contacto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" id="form-modal" name="form">
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-md-6 col-12">
                            <label for="">Nombre</label>
                            <input type="text" name="name" placeholder="Nombre" class="form-control">
                        </div>
                        <div class="form-group col-md-6 col-12">
                            <label for="">Email</label>
                            <input type="email" name="email" placeholder="Email" class="form-control">
                        </div>
                        <div class="form-group col-md-6 col-12">
                            <label for="">Teléfono principal</label>
                            <input type="text" name="phone" placeholder="Teléfono Principal" class="form-control">
                        </div>
                        <div class="form-group col-md-6 col-12">
                            <label for="">Tipo</label>
                            <select name="type" class="form-control">
                                <option value="" selected="selected" style="color:#888;">seleccionar...</option>
                                <option value="1" selected>Ténico</option>
                                <option value="4">Administrativo</option>
                                <option value="5">Gerencia</option>
                                <option value="6">Otro</option>
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
<?php require 'inc/footer.php' ?>