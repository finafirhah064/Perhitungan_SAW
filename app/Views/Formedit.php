
<div class="container py-4">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h6>Update Data Alternatif</h6>
                </div>
                <div class="card-body">
                    <!-- Form Update -->
                    <form method="POST" action="<?= site_url('Home/update_data/' . $datamb->supplier_id); ?>">
                     
                        <input type="hidden" name="supplier_id" value="<?= $datamb->supplier_id; ?>"> 
                        
                        <!-- Input untuk Name -->
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="<?= $datamb->name; ?>" required>
                        </div>

                        <button type="submit" class="btn btn-warning btn-sm">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
