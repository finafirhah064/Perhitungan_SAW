<div class="container-fluid py-4">
  <div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h6>Kriteria Table</h6>
          <button class="btn btn-primary btn-sm" onclick="window.location.href='/Home/forminputkriteria'">Tambah Data</button>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID_kriteria</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Bobot</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Type</th>
                </tr>
              </thead>
              <tbody>
                <?php if (!empty($dataMb)): ?>
                  <?php foreach ($dataMb as $kriteria): ?>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm"><?php echo $kriteria->criteria_id; ?></h6>
                          </div>
                        </div>
                   
                   
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0"><?php echo $kriteria->name; ?></p>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold"><?php echo $kriteria->weight; ?></span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold"><?php echo $kriteria->type; ?></span>
                      </td>
                      <td class="text-center">
                        <a href="<?= base_url('/Home/EditK/' . $kriteria->criteria_id); ?>" class="btn btn-warning btn-sm">Update</a>
                        <a href="<?= base_url('/Home/deleteK/' . $kriteria->criteria_id); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?');">Delete</a>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                <?php else: ?>
                  <tr>
                    <td colspan="4" class="text-center">
                      <p class="text-xs font-weight-bold mb-0">Data tidak ditemukan</p>
                    </td>
                  </tr>
                <?php endif; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
