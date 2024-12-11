

<div class="container py-4">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h6>Update Data Kriteria</h6>
        </div>
        <div class="card-body">
          <form method="POST" action="<?= site_url('/Home/updateK/' . $datamb->criteria_id) ?>">
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input 
                type="text" 
                class="form-control" 
                id="name" 
                name="name" 
                value="<?= $datamb->name ?>" 
                required
              >
            </div>
            <div class="mb-3">
              <label for="weight" class="form-label">Weight</label>
              <input 
                type="number" 
                class="form-control" 
                id="weight" 
                name="weight" 
                value="<?= $datamb->weight ?>" 
                required
              >
            </div>
            <div class="mb-3">
              <label for="type" class="form-label">Type</label>
              <select class="form-control" id="type" name="type">
                <option value="Benefit" <?= $datamb->type == 'Benefit' ? 'selected' : '' ?>>Benefit</option>
                <option value="Cost" <?= $datamb->type == 'Cost' ? 'selected' : '' ?>>Cost</option>
              </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
