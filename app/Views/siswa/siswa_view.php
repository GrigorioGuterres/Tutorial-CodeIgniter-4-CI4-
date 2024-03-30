<?= view('layout/header_view') ?>


    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11">

    <div class="container-fluid">
        <!-- Button to Open the Modal -->
        <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#addSiswaModal">
            AUMENTA DADUS
        </button>

        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>ID Siswa</th>
                    <th>Nama</th>
                    <th>Tanggal Lahir</th>
                    <th>ID Turma</th>
                    <th>ID Materi</th>
                    <th>Obs</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($siswa as $row) : ?>
                    <tr>
                        <td><?= $row['id_siswa'] ?></td>
                        <td><?= $row['nama'] ?></td>
                        <td><?= $row['tanggal_lahir'] ?></td>
                        <td><?= $row['namaturma'] ?></td> <!-- Menampilkan nama turma -->
                        <td><?= $row['namaMateri'] ?></td> <!-- Menampilkan nama materi -->
                        <td><?= $row['obs'] ?></td>
                        <td>
                            <a href="#" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editSiswaModal<?= $row['id_siswa'] ?>">Edit</a>
                            <a href="/delete-siswa/<?= $row['id_siswa'] ?>" class="btn btn-danger btn-sm delete-btn" data-id="<?= $row['id_siswa'] ?>">Hapus</a>
                        </td>
                    </tr>


                    <!-- Modal Edit -->
                    <div class="modal" id="editSiswaModal<?= $row['id_siswa'] ?>">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header bg-primary">
                                    <h4 class="modal-title">Edit Siswa</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>

                                <!-- Modal Body -->
                                <div class="modal-body">
                                    <form action="/update-siswa/<?= $row['id_siswa'] ?>" method="post">
                                        <div class="form-group">
                                            <label for="editNama">Nama:</label>
                                            <input type="text" class="form-control" id="editNama" name="nama" value="<?= $row['nama'] ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="editTanggalLahir">Tanggal Lahir:</label>
                                            <input type="date" class="form-control" id="editTanggalLahir" name="tanggal_lahir" value="<?= $row['tanggal_lahir'] ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="editIdTurma">ID Turma:</label>
                                            <select class="form-control" id="editIdTurma" name="id_turma" required>
                                                <?php foreach ($turma as $t) : ?>
                                                    <option value="<?= $t['idTurma'] ?>" <?= ($t['idTurma'] == $row['id_turma']) ? 'selected' : '' ?>><?= $t['namaturma'] ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="editIdMateri">ID Materi:</label>
                                            <select class="form-control" id="editIdMateri" name="id_materi" required>
                                                <?php foreach ($materi as $m) : ?>
                                                    <option value="<?= $m['idMateri'] ?>" <?= ($m['idMateri'] == $row['id_materi']) ? 'selected' : '' ?>><?= $m['namaMateri'] ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="editObs">Obs:</label>
                                            <textarea class="form-control" id="editObs" name="obs" rows="4"><?= $row['obs'] ?></textarea>
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
    <div class="modal" id="addSiswaModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header bg-primary">
                    <h4 class="modal-title">AUMENTA DADUS SISWA</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal Body -->
                <div class="modal-body">
                    <form action="/save-siswa" method="post">
                        <div class="form-group">
                            <label for="nama">Nama:</label>
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_lahir">Tanggal Lahir:</label>
                            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
                        </div>
                        <div class="form-group">
                            <label for="id_turma">ID Turma:</label>
                            <select class="form-control" id="id_turma" name="id_turma" required>
                                <?php foreach ($turma as $t) : ?>
                                    <option value="<?= $t['idTurma'] ?>"><?= $t['namaturma'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="id_materi">ID Materi:</label>
                            <select class="form-control" id="id_materi" name="id_materi" required>
                                <?php foreach ($materi as $m) : ?>
                                    <option value="<?= $m['idMateri'] ?>"><?= $m['namaMateri'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="obs">Obs:</label>
                            <textarea class="form-control" id="obs" name="obs" rows="4"></textarea>
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
        $(document).ready(function() {
            $('.delete-btn').on('click', function(e) {
                e.preventDefault();

                const href = $(this).attr('href');
                const id = $(this).data('id');

                Swal.fire({
                    title: 'Ita boot Aseita hamos Dadus nee?',
                    text: "Dadus nee hamos Permanente!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Aseita, hapus!',
                    cancelButtonText: 'Cansela'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = href;
                    }
                });
            });
        });
    </script>

</body>

</html>

<?= view('layout/footer_view') ?>