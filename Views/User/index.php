<?php headertemplate($data); ?>

<h2><?php echo isset($data['page_title']) ? $data['page_title'] : 'Titulo'; ?></h2>

<div class="card shadow mt-3">
    <div class="card-header">
        <div class="">
            <a class="btn btn-primary btn-sm " href="<?php echo base_url(); ?>/user/create" role="button"><i class="bi bi-plus-circle-fill"></i> Crear usuario</a>
        </div>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="card-footer text-muted">
        Footer
    </div>
</div>

<?php footertemplate($data); ?>