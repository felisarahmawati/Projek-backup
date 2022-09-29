<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header hader">
        <h3 class="modal-title" id="exampleModalLabel">Edit Kategori</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <label class="label">User ID</label>
            <input class="form-control" type="text" id="id" placeholder="2374627">
            <label class="label">Nama</label>
            <input class="form-control" type="text" id="nama" placeholder="Ahmad Arif">
            <label class="label">Jumlah Dana</label>
            <input class="form-control" type="text" id="dana" placeholder="Rp 10,000,000">
            <label class="label mb-2">Status</label>
            <select class="form-select" id="status">
                <option value="pending">Pending</option>
                <option value="disetujui">Disetujui</option>
                <option value="ditolak">Ditolak</option>
            </select>
        </div>
        <div class="modal-footer d-md-block">
            <button type="button" class="btn btn-primary btn-sm">SETUJU</button>
            <button type="button" class="btn btn-danger btn-sm">TIDAK</button>
        </div>
    </div>
    </div>
</div>