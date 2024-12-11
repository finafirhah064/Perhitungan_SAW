<div class="container py-4">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h6>Tambah Data Kriteria</h6>
        </div>
        <div class="card-body">
          <form method="POST" action="<?php echo site_url('Home/simpanK')?>">
            <div class="mb-3">
              <label for="criteria_id" class="form-label">Criteria ID</label>
              <input type="text" class="form-control" id="criteria_id" name="criteria_id" required>
            </div>
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
              <label for="weight" class="form-label">Weight</label>
              <input type="number" class="form-control" id="weight" name="weight" required>
            </div>
            <div class="mb-3">
              <label for="type" class="form-label">Type</label>
              <select class="form-control" id="type" name="type">
                <option value="Benefit">Benefit</option>
                <option value="Cost">Cost</option>
              </select>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
