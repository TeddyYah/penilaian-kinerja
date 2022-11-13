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
                <form action="" method="post">
                    <input type="hidden" name="id_p_alternatif" value="<?= $penilaian['id_p_alternatif']; ?>">
                    <div class="form-floating mb-3 col-12 col-md-10">
                        <input class="form-control" id="id_karyawan" name="id_karyawan" type="text"
                            value="<?= $penilaian['id_karyawan']; ?>" readonly />
                        <label for="id_karyawan">ID Karyawan</label>
                        <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-2">
                            <label class="mb-2">Kehadiran</label>
                            <div class="form-floating mb-3">
                                <select class="form-control" id="kehadiran" name="kehadiran">
                                    <option value="">-- Pilih Rating --</option>
                                    <?php foreach( $rating as $j ) : ?>
                                    <?php if( $j == $penilaian['kehadiran'] ) : ?>
                                    <option value="<?= $j; ?>" selected><?= $j."/5 x 0,20"; ?></option>
                                    <?php else : ?>
                                    <option value="<?= $j; ?>"><?= $j."/5 x 0,20"; ?></option>
                                    <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
                                <small class="form-text text-danger"><?= form_error('kehadiran'); ?></small>
                            </div>
                        </div>
                        <div class="col-12 col-md-2">
                            <label class="mb-2">Sikap/Etika</label>
                            <div class="form-floating mb-3">
                                <select class="form-control" id="etika" name="etika">
                                    <?php foreach( $rating as $j ) : ?>
                                    <?php if( $j == $penilaian['etika'] ) : ?>
                                    <option value="<?= $j; ?>" selected><?= $j."/5 x 0,25"; ?></option>
                                    <?php else : ?>
                                    <option value="<?= $j; ?>"><?= $j."/5 x 0,25"; ?></option>
                                    <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
                                <small class="form-text text-danger"><?= form_error('etika'); ?></small>
                            </div>
                        </div>
                        <div class="col-12 col-md-2">
                            <label class="mb-2">Disiplin Waktu</label>
                            <div class="form-floating mb-3">
                                <select class="form-control" id="disiplin_waktu" name="disiplin_waktu">
                                    <?php foreach( $rating as $j ) : ?>
                                    <?php if( $j == $penilaian['disiplin_waktu'] ) : ?>
                                    <option value="<?= $j; ?>" selected><?= $j."/5 x 0,20"; ?></option>
                                    <?php else : ?>
                                    <option value="<?= $j; ?>"><?= $j."/5 x 0,20"; ?></option>
                                    <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
                                <small class="form-text text-danger"><?= form_error('disiplin_waktu'); ?></small>
                            </div>
                        </div>
                        <div class="col-12 col-md-2">
                            <label class="mb-2">Kualitas</label>
                            <div class="form-floating mb-3">
                                <select class="form-control" id="kualitas" name="kualitas">
                                    <?php foreach( $rating as $j ) : ?>
                                    <?php if( $j == $penilaian['kualitas'] ) : ?>
                                    <option value="<?= $j; ?>" selected><?= $j."/5 x 0,20"; ?></option>
                                    <?php else : ?>
                                    <option value="<?= $j; ?>"><?= $j."/5 x 0,20"; ?></option>
                                    <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
                                <small class="form-text text-danger"><?= form_error('kualitas'); ?></small>
                            </div>
                        </div>
                        <div class="col-12 col-md-2">
                            <label class="mb-2">Kuantitas</label>
                            <div class="form-floating mb-3">
                                <select class="form-control" id="kuantitas" name="kuantitas">
                                    <?php foreach( $rating as $j ) : ?>
                                    <?php if( $j == $penilaian['kuantitas'] ) : ?>
                                    <option value="<?= $j; ?>" selected><?= $j."/5 x 0,15"; ?></option>
                                    <?php else : ?>
                                    <option value="<?= $j; ?>"><?= $j."/5 x 0,15"; ?></option>
                                    <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
                                <small class="form-text text-danger"><?= form_error('kuantitas'); ?></small>
                            </div>
                        </div>
                    </div>
                    <button type="submit" name="ubah" class="btn btn-primary">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>
</div>