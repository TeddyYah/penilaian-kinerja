<div class="container-fluid px-4">
    <h1 class="mt-4"><?= $title ?></h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item">
            <a href="<?= base_url('penilaian') ?>">Penilaian</a>
        </li>
        <li class="breadcrumb-item active"><?= $title ?></li>
    </ol>
    <div class="row">
        <div class="card mb-4">
            <div class="container-fluid px-4">
                <?= $this->session->flashdata('msg') ?>
                <!-- <a href="<?= base_url('p_alternatif/tambah_p_alternatif') ?>" class="btn btn-primary float-end mt-3">
                    <i class="fa-solid fa-plus"></i> Add New
                </a> -->
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th style="
                            min-width: 25px;
                            width: 25px;
                            vertical-align: middle;" class="text-center">ID
                            </th>
                            <th style="
                            min-width: 150px;
                            width: 150px;
                            vertical-align: middle;">Name
                            </th>
                            <th style="
                            min-width: 85px;
                            width: 85px;
                            max-width: 85px;
                            vertical-align: middle;" class="text-center">Kehadiran <br>
                            </th>
                            <th style="
                            min-width: 70px;
                            width: 70px;
                            max-width: 70px;
                            vertical-align: middle;" class="text-center">Sikap / Etika
                            </th>
                            <th style="
                            min-width: 70px;
                            width: 70px;
                            max-width: 70px;
                            vertical-align: middle;" class="text-center">Disiplin Waktu
                            </th>
                            <th style="
                            min-width: 80px;
                            width: 80px;
                            max-width: 80px;
                            vertical-align: middle;" class="text-center">Kualitas
                            </th>
                            <th style="
                            min-width: 80px;
                            width: 80px;
                            max-width: 80px;
                            vertical-align: middle;" class="text-center">Kuantitas
                            </th>
                            <th style="
                            min-width: 80px;
                            width: 80px;
                            max-width: 80px;
                            vertical-align: middle;" class="text-center">Total
                            </th>
                            <!-- <th style="
                            min-width: 80px;
                            width: 80px;
                            max-width: 80px;
                            vertical-align: middle;" class="text-center">Action
                            </th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;foreach($penilaian as $m) : ?>
                        <tr>
                            <td class="text-center"><?= $no++ ?></td>
                            <td><?= $m['nama_karyawan'] ?></td>
                            <td class="text-center"><?= $m['kehadiran'] ?></td>
                            <td class="text-center"><?= $m['etika'] ?></td>
                            <td class="text-center"><?= $m['disiplin_waktu'] ?></td>
                            <td class="text-center"><?= $m['kualitas'] ?></td>
                            <td class="text-center"><?= $m['kuantitas'] ?></td>

                            <td class="text-center"><?= $m['total'] ?></td>
                            <!-- <td class="text-center">
                                <a href="<?= base_url('p_alternatif/ubah_p_alternatif/' . $m['id_p_alternatif']) ?>"
                                    class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Edit">
                                    <i class="fas fa-edit"></i></a>
                            </td> -->
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>