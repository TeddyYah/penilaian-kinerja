<div class="container-fluid px-4">
    <h1 class="mt-4"><?= $title ?></h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item">
            <a href="<?= base_url('karyawan') ?>">Daftar Karyawan</a>
        </li>
        <li class="breadcrumb-item active"><?= $title ?></li>
    </ol>
    <div class="row">
        <div class="card mb-4">
            <div class="card-body">
                <form action="" method="post">
                    <input type="hidden" name="id_karyawan" value="<?= $karyawan['id_karyawan']; ?>">
                    <div class="form-floating mb-3">
                        <input class="form-control" id="nik" name="nik_karyawan" type="number"
                            value="<?= $karyawan['nik_karyawan']; ?>" />
                        <label for="nik">NIK</label>
                        <small class="form-text text-danger"><?= form_error('nik_karyawan'); ?></small>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="nama" name="nama_karyawan" type="text"
                            value="<?= $karyawan['nama_karyawan']; ?>" />
                        <label for="nama">Nama</label>
                        <small class="form-text text-danger"><?= form_error('nama_karyawan'); ?></small>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="form-floating mb-3">
                                <input class="form-control" id="tempatlahir" name="tempat_lahir" type="text"
                                    value="<?= $karyawan['tempat_lahir']; ?>" />
                                <label for="tempatlahir">Tempat Lahir</label>
                                <small class="form-text text-danger"><?= form_error('tempat_lahir'); ?></small>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-floating mb-3">
                                <input class="form-control" id="tanggallahir" name="tanggal_lahir" type="date"
                                    value="<?= $karyawan['tanggal_lahir']; ?>" />
                                <label for="tanggallahir">Tanggal Lahir</label>
                                <small class="form-text text-danger"><?= form_error('tempat_lahir'); ?></small>
                            </div>
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="alamat" name="alamat" type="text"
                            value="<?= $karyawan['alamat']; ?>" />
                        <label for="alamat">Alamat</label>
                        <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
                    </div>
                    <div class="form-floating mb-3">
                        <select class="form-control" id="jeniskelamin" name="jenis_kelamin">
                            <option value="">-- Pilih Jenis Kelamin --</option>
                            <?php foreach( $gender as $j ) : ?>
                            <?php if( $j == $karyawan['jenis_kelamin'] ) : ?>
                            <option value="<?= $j; ?>" selected><?= $j; ?></option>
                            <?php else : ?>
                            <option value="<?= $j; ?>"><?= $j; ?></option>
                            <?php endif; ?>
                            <?php endforeach; ?>
                        </select>
                        <small class="form-text text-danger"><?= form_error('jenis_kelamin'); ?></small>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="telepon" name="no_telepon" type="number"
                            value="<?= $karyawan['no_telepon']; ?>" />
                        <label for="telepon">Telepon</label>
                        <small class="form-text text-danger"><?= form_error('no_telepon'); ?></small>
                    </div>
                    <button type="submit" name="ubah" class="btn btn-primary">Ubah Data</button>
                </form>
            </div>
        </div>
    </div>
</div>