<?= view('layout/header_view') ?>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11">
    <div class="container-fluid">

    <!-- Button to Open the Modal -->
    <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#addMateriModal">
        AUMENTA DADUS
    </button>

    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>ID Materi</th>
                <th>Nama Materi</th>
                <th>Keterangan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($materi as $row): ?>
                <tr>
                    <td><?= $row['idMateri'] ?></td>
                    <td><?= $row['namaMateri'] ?></td>
                    <td><?= $row['keterangan'] ?></td>
                    <td>
                        <a href="#" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editMateriModal<?= $row['idMateri'] ?>">Edit</a>
                        <a href="/delete-materi/<?= $row['idMateri'] ?>" class="btn btn-danger btn-sm delete-btn" data-id="<?= $row['idMateri'] ?>">Hapus</a>
                    </td>
                </tr>
                <!-- Modal Edit -->
                <div class="modal" id="editMateriModal<?= $row['idMateri'] ?>">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header bg-primary">
                                <h4 class="modal-title">Edit Materi</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal Body -->
                            <div class="modal-body">
                                <form action="/update-materi/<?= $row['idMateri'] ?>" method="post">
                                    <div class="form-group">
                                        <label for="editNamaMateri">Nama Materi:</label>
                                        <input type="text" class="form-control" id="editNamaMateri" name="namaMateri" value="<?= $row['namaMateri'] ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="editKeterangan">Keterangan:</label>
                                        <textarea class="form-control" id="editKeterangan" name="keterangan" rows="4" required><?= $row['keterangan'] ?></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!-- Add Data Modal -->
<div class="modal" id="addMateriModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header bg-primary">
                <h4 class="modal-title">Aumenta Dadus Materi</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">
                <form action="/save-materi" method="post">
                    <div class="form-group">
                        <label for="namaMateri">Nama Materi:</label>
                        <input type="text" class="form-control" id="namaMateri" name="namaMateri" required>
                    </div>
                    <div class="form-group">
                        <label for="keterangan">Keterangan:</label>
                        <textarea class="form-control" id="keterangan" name="keterangan" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>

        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(document).ready(function(){
        $('.delete-btn').on('click', function(e){
            e.preventDefault();
            const href = $(this).attr('href');
            const id = $(this).data('id');
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Data ini akan dihapus!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = href;
                }
            });
        });
    });
</script>



<?= view('layout/footer_view') ?>
