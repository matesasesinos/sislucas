<?php require 'inc/header.php' ?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="pt-3 pb-2 mb-3">
        <h1 class="h2 pb-3 mb-3 border-bottom">Contacto de empresa <span class="small float-right"><a href="#" class="btn btn-info" data-toggle="modal" data-target="#newModal">Agregar Contacto <i class="fas fa-user-plus"></i></a></span></h1>

        <div class="table-responsive">
            <table class="table table-bordered" id="tables">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Tipo</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td>1</td>
                    <td>Nombre contacto</td>
                    <td>contacto@elmail.com</td>
                    <td>Ténico</td>
                    <td>
                        <span title="Editar" class="btn btn-info" data-id="1" data-toggle="modal" data-target="#newModal"><i class="fas fa-eye" data-toggle="tooltip" data-placement="top" ></i></span>
                        <a href="#" title="Contacto por defecto" class="btn btn-secondary" data-toggle="tooltip" data-placement="top"><i class="fas fa-id-badge"></i></a>
                        <a href="#" title="Borrar" class="btn btn-danger" data-toggle="tooltip" data-placement="top"><i class="far fa-trash-alt"></i></a>
                    </td>
                    </tr>
                    <tr>
                    <td>1</td>
                    <td>Nombre contacto</td>
                    <td>contacto@elmail.com</td>
                    <td>Ténico</td>
                    <td>
                        <span title="Editar" class="btn btn-info" data-id="1" data-toggle="modal" data-target="#newModal"><i class="fas fa-eye" data-toggle="tooltip" data-placement="top" ></i></span>
                        <a href="#" title="Contacto por defecto" class="btn btn-secondary" data-toggle="tooltip" data-placement="top"><i class="fas fa-id-badge"></i></a>
                        <a href="#" title="Borrar" class="btn btn-danger" data-toggle="tooltip" data-placement="top"><i class="far fa-trash-alt"></i></a>
                    </td>
                    </tr>
                    <tr>
                    <td>1</td>
                    <td>Nombre contacto</td>
                    <td>contacto@elmail.com</td>
                    <td>Ténico</td>
                    <td>
                        <span title="Editar" class="btn btn-info" data-id="1" data-toggle="modal" data-target="#newModal"><i class="fas fa-eye" data-toggle="tooltip" data-placement="top" ></i></span>
                        <a href="#" title="Contacto por defecto" class="btn btn-success" data-toggle="tooltip" data-placement="top"><i class="fas fa-id-badge"></i></a>
                        <a href="#" title="Borrar" class="btn btn-danger" data-toggle="tooltip" data-placement="top"><i class="far fa-trash-alt"></i></a>
                    </td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
</main>
<!-- Modal new-->
<div class="modal fade" id="newModal" tabindex="-1" role="dialog" aria-labelledby="newModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newModalLabel">Agregar Contacto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" id="form-modal" name="form">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Nombre</label>
                        <input type="text" name="name" placeholder="Nombre" class="form-control form-control-lg">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" name="email" placeholder="Email" class="form-control form-control-lg">
                    </div>
                    <div class="form-group">
                        <label for="">Tipo</label>
                        <select name="type" id="" class="form-control form-control-lg">
                            <option value=""> -- seleccionar --</option>
                            <option value="1">Técnico</option>
                            <option value="2">Administrativo</option>
                            <option value="3">Otro</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Observaciones</label>
                        <textarea name="observations" class="form-control form-control-lg"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php require 'inc/footer.php' ?>