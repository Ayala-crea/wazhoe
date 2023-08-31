
<div class="container mt-5">
  <div class="row">
    <div class="col-lg-6 mx-auto">
      <div class="card">
        <div class="card-header">
          Informasi Pembayaran
        </div>
        <div class="card-body">
          <h5 class="card-title">Nomor Rekening</h5>
          <p class="card-text">Silakan transfer ke nomor rekening berikut:</p>
          <h3 class="text-center">1234-5678-9012-3456</h3>
          <p class="text-center">a/n Bank ABC</p>
          <p class="text-center">Mohon segera melakukan pembayaran untuk memproses pesanan Anda.</p>
          <button type="button" class="btn btn-primary btn-block" data-bs-toggle="modal" data-bs-target="#uploadModal">Kirim Bukti Transfer</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="uploadModal" tabindex="-1" aria-labelledby="uploadModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="uploadModalLabel">Upload Bukti Transfer</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Form untuk mengunggah bukti transfer -->
        <form>
          <div class="mb-3">
            <label for="buktiTransfer" class="form-label">Pilih File Bukti Transfer</label>
            <input type="file" class="form-control" id="buktiTransfer" accept=".jpg, .jpeg, .png, .pdf" required>
          </div>
          <button type="submit" class="btn btn-primary">Upload</button>
        </form>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<br>
<br>
<br>
