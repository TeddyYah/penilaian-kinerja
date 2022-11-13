<div class="container-fluid px-4">
    <h1 class="mt-4"><?= $title ?></h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active"><?= $title ?></li>
    </ol>
    <div class="row">
        <div class="card mb-4">
            <div class="container-fluid px-4">
                <?= $this->session->flashdata('msg') ?>
                <a href="<?= base_url('karyawan/tambah_karyawan') ?>" class="btn btn-primary float-end mt-3">
                    <i class="fa-solid fa-plus"></i> Add New
                </a>
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th class="text-center" style="min-width: 100px; width: 100px">ID</th>
                            <th style="min-width: 250px">Name</th>
                            <th class="text-center" style="min-width: 100px; width: 100px">
                                L/P
                            </th>
                            <th class="text-center" style="min-width: 230px; width: 230px">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;foreach($karyawan as $m) : ?>
                        <tr>
                            <td class="text-center"><?= $no++ ?></td>
                            <td><?= $m['nama_karyawan'] ?></td>
                            <td class="text-center"><?= $m['jenis_kelamin'] ?></td>
                            <td>
                                <a href="<?= base_url('karyawan/detail_karyawan/' . $m['id_karyawan']) ?>"
                                    class="btn btn-success">Detail</a>
                                <a href="<?= base_url('karyawan/ubah_karyawan/' . $m['id_karyawan']) ?>"
                                    class="btn btn-warning">Edit</a>
                                <a href="<?= base_url('karyawan/hapus_karyawan/' . $m['id_karyawan']) ?>"
                                    onclick="return confirm('Hapus data ini?')" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>