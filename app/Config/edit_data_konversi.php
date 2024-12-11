<div class="container-fluid py-4">
  <div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h6>Edit Data Konversi</h6>
        </div>
        <div class="card-body">
          <form method="POST" action="<?= site_url('Home/updateKonversi/' . $konversi->id); ?>">

            <!-- Dropdown Supplier -->
            <div class="mb-3">
              <label for="supplier_id" class="form-label">Supplier</label>
              <select class="form-control" id="supplier_id" name="supplier_id" required>
                <option value="">-- Pilih Supplier --</option>
                <?php foreach ($supplier_id as $supplier): ?>
                  <option value="<?= $supplier->id; ?>" <?= $supplier->id == $konversi->supplier_id ? 'selected' : ''; ?>>
                    <?= $supplier->name; ?>
                  </option>
                <?php endforeach; ?>
              </select>
            </div>

            <!-- Dropdown Criteria -->
            <div class="mb-3">
              <label for="criteria_id" class="form-label">Criteria</label>
              <select class="form-control" id="criteria_id" name="criteria_id" required>
                <option value="">-- Pilih Criteria --</option>
                <?php foreach ($criteria as $criterion): ?>
                  <option value="<?= $criterion->id; ?>" <?= $criterion->id == $konversi->criteria_id ? 'selected' : ''; ?>>
                    <?= $criterion->name; ?>
                  </option>
                <?php endforeach; ?>
              </select>
            </div>

            <!-- Input Nilai -->
            <div class="mb-3">
              <label for="nilai" class="form-label">Nilai</label>
              <input type="number" class="form-control" id="nilai" name="nilai" step="0.01" value="<?= $konversi->nilai; ?>" required>
            </div>

            <!-- Tombol Simpan -->
            <button type="submit" class="btn btn-primary">Update</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
