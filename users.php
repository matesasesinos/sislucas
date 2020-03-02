<?php require 'inc/header.php'; ?>
<?php require 'api/clientes.php';?>
<?php //require 'conf/init.php';?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>Crear Admin</h2>
        </div>
        <div class="col-12">
            <form action="" id="form">
                <div class="form-group">
                    <label for="">Nombre</label>
                    <input type="text" name="name" required value="" placeholder="Nombre" class="form-control form-control-lg" />
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" required value="" placeholder="Email" class="form-control form-control-lg" />
                </div>
                <div class="form-group">
                    <label for="">Contraseña</label>
                    <input type="password" name="password" id="" class="form-control form-control-lg" required placeholder="Contraseña" >
                </div>
                <button type="submit" class="btn btn-primary btn-lg">Agregar</button>
            </form>
        </div>
    </div>
</div>
<?php require 'inc/footer.php'; ?>