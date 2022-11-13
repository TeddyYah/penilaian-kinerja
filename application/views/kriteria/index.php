<div class="container-fluid px-4">
    <h1 class="mt-4"><?= $title ?></h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active"><?= $title ?></li>
    </ol>
    <div class="row">
        <div class="row">
            <div class="card mb-4">
                <div class="container-fluid px-4">
                    <?= $this->session->flashdata('msg') ?>
                    <!-- <a href="<?= base_url('kriteria/tambah_kriteria') ?>" class="btn btn-primary float-end mt-3">
                        <i class="fa-solid fa-plus"></i> Add New
                    </a> -->
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th class="text-center" style="min-width: 100px; width: 100px">
                                    No.
                                </th>
                                <th style="min-width: 250px">Nama Kriteria</th>
                                <th class="text-center" style="min-width: 100px; width: 100px">
                                    Bobot
                                </th>
                                <th class="text-center" style="min-width: 100px; width: 100px">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;foreach($kriteria as $m) : ?>
                            <tr>
                                <td class="text-center"><?= $no++ ?></td>
                                <td><?= $m['nama_kriteria'] ?></td>
                                <td class="text-center"><?= $m['bobot_kriteria'] ?></td>
                                <td class="text-center">
                                    <a href="<?= base_url('kriteria/ubah_kriteria/' . $m['id_kriteria']) ?>" class="
                                        btn btn-warning">Edit</a>
                                    <!-- <a href="<?= base_url('kriteria/hapus_kriteria/' . $m['id_kriteria']) ?>"
                                        onclick="return confirm('Hapus data ini?')" class="btn btn-danger">Hapus</a> -->
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>