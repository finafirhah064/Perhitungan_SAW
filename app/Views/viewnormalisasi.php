<div class="container-fluid py-4">
  <div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0 d-flex justify-content-between">
          <h6>Tabel Normalisasi</h6>
          <!-- Button Tambah Data -->
        </div>
        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Supplier ID</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Criteria ID</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Normalisasi Nilai</th>
                </tr>
              </thead>
              <tbody>
                <?php if (!empty($dataMb)): ?>
                  <?php foreach ($dataMb as $normalisasi): ?>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm"><?php echo $normalisasi->supplier_id; ?></h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">
                          <?php echo $normalisasi->criteria_id ?? 'NULL'; ?>
                        </p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">
                          <?php echo number_format($normalisasi->norm_nilai, 2) ?? 'NULL'; ?>
                        </p>
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
