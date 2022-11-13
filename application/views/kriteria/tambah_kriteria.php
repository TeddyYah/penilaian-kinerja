<div class="container-fluid px-4">
    <h1 class="mt-4"><?= $title ?></h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item">
            <a href="<?= base_url('kriteria') ?>">Daftar Kriteria</a>
        </li>
        <li class="breadcrumb-item active"><?= $title ?></li>
    </ol>
    <div class="row">
        <div class="card mb-4">
            <div class="card-body">
                <form action="" method="post">
                    <div class="form-floating mb-3">
                        <input class="form-control" id="simbol_kriteria" name="simbol_kriteria" type="text"
                            placeholder="Simbol Kriteria" />
                        <label for="simbol_kriteria">Simbol Kriteria</label>
                        <small class="form-text text-danger"><?= form_error('simbol_kriteria'); ?></small>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="nama_kriteria" name="nama_kriteria" type="text"
                            placeholder="Nama Kriteria" />
                        <label for="nama_kriteria">Nama Kriteria</label>
                        <small class="form-text text-danger"><?= form_error('nama_kriteria'); ?></small>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="form-floating mb-3">
                                <input class="form-control" id="ket_kriteria" name="ket_kriteria" type="text"
                                    placeholder="Keterangan Kriteria" />
                                <label for="ket_kriteria">Keterangan Kriteria</label>
                                <small class="form-text text-danger"><?= form_error('ket_kriteria'); ?></small>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-floating mb-3">
                                <input class="form-control" id="nilai_kriteria" name="nilai_kriteria" type="text"
                                    placeholder="Nilai Kriteria<" />
                                <label for="nilai_kriteria">Nilai Kriteria</label>
                                <small class="form-text text-danger"><?= form_error('nilai_kriteria'); ?></small>
                            </div>
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="bobot_kriteria" name="bobot_kriteria" type="text"
                            placeholder="Bobot Kriteria" />
                        <label for="bobot_kriteria">Bobot Kriteria</label>
                        <small class="form-text text-danger"><?= form_error('bobot_kriteria'); ?></small>
                    </div>
                    <button type="submit" name="tambah" class="btn btn-primary">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>
</div>