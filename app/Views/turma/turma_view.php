<?= view('layout/header_view') ?>


<div class="container-fluid">

    <!-- Button to Open the Modal -->
    <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#addTurmaModal">
        AUMENTA DADUS
    </button>

    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>ID Turma</th>
                <th>Nama Turma</th>
                <th>Observasi</th>
                <th>Action</th> <!-- Kolom Action -->
            </tr>
        </thead>
        <tbody>
            <?php foreach ($turma as $row): ?>
                <tr>
                    <td><?= $row['idTurma'] ?></td>
                    <td><?= $row['namaturma'] ?></td>
                    <td><?= $row['Observasi'] ?></td>
                    <td>
                        <a href="#" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editTurmaModal<?= $row['idTurma'] ?>">Edit</a>
                        <a href="/delete-turma/<?= $row['idTurma'] ?>" class="btn btn-danger btn-sm delete-btn" data-id="<?= $row['idTurma'] ?>">Hapus</a>
                    </td>
                </tr>

                <!-- Modal Edit -->
                <div class="modal" id="editTurmaModal<?= $row['idTurma'] ?>">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <!-- Modal Header -->
                            <div class="modal-header bg-primary">
                                <h4 class="modal-title">Edit Data Turma</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <!-- Modal Body -->
                            <div class="modal-body">
                                <form action="/update-turma/<?= $row['idTurma'] ?>" method="post">
                                    <div class="form-group">
                                        <label for="edit-namaturma">Nama Turma:</label>
                                        <input type="text" class="form-control" id="edit-namaturma" name="namaturma" value="<?= $row['namaturma'] ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="edit-Observasi">Observasi:</label>
                                        <textarea class="form-control" id="edit-Observasi" name="Observasi" rows="4" required><?= $row['Observasi'] ?></textarea>
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

<!-- The Modal -->
<div class="modal" id="addTurmaModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header bg-primary">
                <h4 class="modal-title">AUMENTA DADUS TURMA</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">
                <form action="/save-turma" method="post">
                    <div class="form-group">
                        <label for="namaturma">Nama Turma:</label>
                        <input type="text" class="form-control" id="namaturma" name="namaturma" required>
                    </div>
                    <div class="form-group">
                        <label for="Observasi">Observasi:</label>
                        <textarea class="form-control" id="Observasi" name="Observasi" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
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
