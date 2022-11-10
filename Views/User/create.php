<?php headertemplate($data); ?>

<h2><?php echo isset($data['page_title']) ? $data['page_title'] : 'Titulo'; ?></h2>

<div class="card shadow p-4 mt-4">

    <div class="card-body">

        <form class="row g-3" action="<?php echo base_url(); ?>/user/store" method="post">

            <div class="col-md-6">
                <label for="roll" class="form-label">Asignar roll <span class="text-danger">*</span></label>
                <select name="roll" id="roll" class="form-select">
                    <option disabled selected>
                        Seleccione un roll
                    </option>
                    <?php foreach ($data['rolls'] as $roll) : ?>
                        <option value="<?php echo $roll->id; ?>">
                            <?php echo $roll->name_roll; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                <p class="text-danger"><?php echo isset($data['rollError']) && !is_null($data['rollError']) && !empty($data['rollError']) ? $data['rollError'] : '' ?></p>
            </div>


            <div class="col-md-6">
                <label for="warehouse" class="form-label">Asignar bodega <span class="text-danger">*</span></label>
                <select name="warehouse" id="warehouse" class="form-select">
                    <option disabled selected>
                        Seleccione una bodega
                    </option>
                    <?php foreach ($data['warehouses'] as $warehouse) : ?>
                        <option value="<?php echo $warehouse->warehouse_code; ?>">
                            <?php echo $warehouse->warehouse_name; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                <p class="text-danger"><?php echo isset($data['warehouseError']) && !is_null($data['warehouseError']) && !empty($data['warehouseError']) ? $data['warehouseError'] : '' ?></p>
            </div>


            <div class="col-md-6">
                <label for="firstname" class="form-label">Nombres</label>
                <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Nombres">
            </div>


            <div class="col-md-6">
                <label for="lastname" class="form-label">Apellidos</label>
                <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Apellidos">
            </div>


            <div class="col-md-6">
                <label for="username" class="form-label">Nombre de usuario</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Nombre de usuario">
            </div>


            <div class="col-md-6">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" name="password">
            </div>


            <!-- <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="status" disabled checked>
                    <label class="form-check-label" for="status">
                        Activo
                    </label>
                </div>
            </div> -->

            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="status" name="status">
                    <label class="form-check-label" for="status">
                        Activo
                    </label>
                </div>
            </div>


            <div class="col-12">
                <button type="submit" class="btn btn-primary">Crear usuario</button>
            </div>

        </form>
    </div>
</div>

<?php footertemplate($data); ?>