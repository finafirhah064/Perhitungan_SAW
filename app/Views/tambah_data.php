<div class="container py-4">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h6>Tambah Data Alternatif</h6>
        </div>
        <div class="card-body">
        <form method="POST" action="<?php echo site_url('Home/simpanA')?>">
            <div class="mb-3">
              <label for="supplier_id" class="form-label">Supplier ID</label>
              <input type="text" class="form-control" id="supplier_id" name="supplier_id" required>
            </div>
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
