<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"><?php echo $data['header']; ?></h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <?php if ($data['report']) : ?>
            <div class="btn-group me-2">
                <form action="<?php echo base_url() ?>/report/generate" method="POST">
                    <button type="submit" name="pdf" class="btn btn-sm btn-outline-secondary">Excel <i class="bi bi-file-earmark-spreadsheet"></i></button>
                </form>
            </div>
            <div class="btn-group me-2">
                <form action="<?php echo base_url() ?>/report/generate" method="POST">
                    <button type="submit" name="pdf" class="btn btn-sm btn-outline-secondary">PDF <i class="bi bi-filetype-pdf"></i></button>
                </form>
            </div>
        <?php endif; ?>
        <!-- <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
        </button> -->
    </div>
</div>