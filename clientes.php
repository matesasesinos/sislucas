<?php require 'inc/header.php'; ?>
<?php require 'api/clientes.php';?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="h1">Todos los Clientes</h1>
        </div>
        <div class="col-12">
            <div class="table-responsive">
                <table class="table" id="tables">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Fecha Registro</th>
                            <th>Email</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($datos as $d):?>
                        <tr>
                            <td><?php echo $d->id?></td>
                            <td><?php echo $d->name?></td>
                            <td><?php echo $d->created?></td>
                            <td><?php echo $d->email?></td>
                            <td>
                                <a href=""><i data-feather="at-sign"></i></a>
                                <a href=""><i data-feather="dollar-sign"></i></a>
                                <a href=""><i data-feather="edit-3"></i></a>
                                <a href="" style="color: red"><i data-feather="power"></i></a>
                            </td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php require 'inc/footer.php'; ?>