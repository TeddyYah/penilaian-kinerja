<div class="container-fluid px-4">
    <h1 class="mt-4"><?= $title ?></h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item">
            <a href="<?= base_url('karyawan') ?>">Daftar Karyawan</a>
        </li>
        <li class="breadcrumb-item active"><?= $title ?></li>
    </ol>
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <center>
                        <table>
                            <tr>
                                <td width="150px" class="pb-3">NIK</td>
                                <td width="20px" class="pb-3">:</td>
                                <td width="200px" class="pb-3"><?= $karyawan['nik_karyawan'];  ?></td>
                            </tr>
                            <tr>
                                <td width="150px" class="pb-3">Nama</td>
                                <td width="20px" class="pb-3">:</td>
                                <td width="200px" class="pb-3"><?= $karyawan['nama_karyawan'];  ?></td>
                            </tr>
                            <tr>
                                <td width="150px" class="pb-3">Tempat Lahir</td>
                                <td width="20px" class="pb-3">:</td>
                                <td width="200px" class="pb-3"><?= $karyawan['tempat_lahir'];  ?></td>
                            </tr>
                            <tr>
                                <td width="150px" class="pb-3">Tanggal Lahir</td>
                                <td width="20px" class="pb-3">:</td>
                                <td width="200px" class="pb-3"><?= $karyawan['tanggal_lahir'];  ?></td>
                            </tr>
                            <tr>
                                <td width="150px" class="pb-3">Alamat</td>
                                <td width="20px" class="pb-3">:</td>
                                <td width="1500px" class="pb-3"><?= $karyawan['alamat'];  ?></td>
                            </tr>
                            <tr>
                                <td width="150px" class="pb-3">Jenis Kelamin</td>
                                <td width="20px" class="pb-3">:</td>
                                <td width="200px" class="pb-3"><?= $karyawan['jenis_kelamin'];  ?></td>
                            </tr>
                            <tr>
                                <td width="150px" class="pb-3">No. Telepon</td>
                                <td width="20px" class="pb-3">:</td>
                                <td width="200px" class="pb-3"><?= $karyawan['no_telepon'];  ?></td>
                            </tr>
                        </table>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>