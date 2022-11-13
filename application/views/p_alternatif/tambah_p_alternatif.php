<div class="container-fluid px-4">
    <h1 class="mt-4"><?= $title ?></h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item">
            <a href="<?= base_url('p_alternatif') ?>">Penilaian Alternatif</a>
        </li>
        <li class="breadcrumb-item active"><?= $title ?></li>
    </ol>
    <div class="row">
        <div class="card mb-4">
            <div class="card-body">
                <?php if (!$penilaian) : ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Seluruh data karyawan sudah ada penilaian, silahkan input karyawan terlebih dahulu</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php else : ?>
                <form action="" method="post">
                    <label class="mb-2">Karyawan</label>
                    <div class="col-12 col-md-10 form-floating mb-3">
                        <select class="form-control" name="id_karyawan">
                            <option value="">-- Pilih Karyawan --</option>
                            <?php foreach( $penilaian as $j ) : ?>
                            <option value="<?= $j['id_karyawan'] .". ". $j['nama_karyawan']; ?>">
                                <?= $j['nama_karyawan']; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <small class="form-text text-danger"><?= form_error('id_karyawan'); ?></small>
                    </div>

                    <div class="row">
                        <div class="col-12 col-md-2">
                            <label class="mb-2">Kehadiran</label>
                            <div class="form-floating mb-3">
                                <select class="form-control" id="kehadiran" name="kehadiran">
                                    <option value="-- Pilih Rating --">-- Pilih Rating --</option>
                                    <?php foreach( $rating as $j ) : ?>
                                    <option value="<?= $j; ?>"><?= $j ."/5 x 0,20"  ; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <small class="form-text text-danger"><?= form_error('kehadiran'); ?></small>
                            </div>
                        </div>
                        <div class="col-12 col-md-2">
                            <label class="mb-2">Sikap/Etika</label>
                            <div class="form-floating mb-3">
                                <select class="form-control" id="etika" name="etika">
                                    <option value="">-- Pilih Rating --</option>
                                    <?php foreach( $rating as $j ) : ?>
                                    <option value="<?= $j; ?>"><?= $j ."/5 x 0,25"; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <small class="form-text text-danger"><?= form_error('etika'); ?></small>
                            </div>
                        </div>
                        <div class="col-12 col-md-2">
                            <label class="mb-2">Disiplin Waktu</label>
                            <div class="form-floating mb-3">
                                <select class="form-control" id="disiplin_waktu" name="disiplin_waktu">
                                    <option value="">-- Pilih Rating --</option>
                                    <?php foreach( $rating as $j ) : ?>
                                    <option value="<?= $j; ?>"><?= $j ."/5 x 0,20"; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <small class="form-text text-danger"><?= form_error('disiplin_waktu'); ?></small>
                            </div>
                        </div>
                        <div class="col-12 col-md-2">
                            <label class="mb-2">Kualitas</label>
                            <div class="form-floating mb-3">
                                <select class="form-control" id="kualitas" name="kualitas">
                                    <option value="">-- Pilih Rating --</option>
                                    <?php foreach( $rating as $j ) : ?>
                                    <option value="<?= $j; ?>"><?= $j ."/5 x 0,20"; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <small class="form-text text-danger"><?= form_error('kualitas'); ?></small>
                            </div>
                        </div>
                        <div class="col-12 col-md-2">
                            <label class="mb-2">Kuantitas</label>
                            <div class="form-floating mb-3">
                                <select class="form-control" id="kuantitas" name="kuantitas">
                                    <option value="">-- Pilih Rating --</option>
                                    <?php foreach( $rating as $j ) : ?>
                                    <option value="<?= $j; ?>"><?= $j ."/5 x 0,15"; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <small class="form-text text-danger"><?= form_error('kuantitas'); ?></small>
                            </div>
                        </div>
                    </div>
                    <button type="submit" name="tambah" class="btn btn-primary">Tambah Data</button>
                </form>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>