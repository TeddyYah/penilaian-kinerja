<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Register - SB Admin</title>
    <link href="<?= base_url() ?>assets/css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Create Account</h3>
                                </div>
                                <div class="card-body">
                                    <form class="user" method="post" action="<?= base_url('auth/registration'); ?>">

                                        <div class="form-floating mb-3">
                                            <div class="form-floating">
                                                <input class="form-control" id="nik_karyawan" type="number"
                                                    name="nik_karyawan" value="<?= set_value('nik_karyawan'); ?>" />
                                                <label>Nik Karyawan</label>
                                                <?= form_error('nik_karyawan', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <div class="form-floating">
                                                <input class="form-control" id="nama_karyawan" type="text"
                                                    name="nama_karyawan" value="<?= set_value('nama_karyawan'); ?>" />
                                                <label>Nama Karyawan</label>
                                                <?= form_error('nama_karyawan', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <div class="form-floating">
                                                <input class="form-control" id="email" type="email" name="email"
                                                    value="<?= set_value('email'); ?>" />
                                                <label>Email</label>
                                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="password1" type="password"
                                                        name="password1" placeholder="Create a password" />
                                                    <label>Password</label>
                                                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="password2" type="password"
                                                        name="password2" placeholder="Confirm password" />
                                                    <label>Confirm Password</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-4 mb-0">
                                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                                Create Account
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="<?= base_url('auth'); ?>">Have an account? Go to
                                            login</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="<?= base_url() ?>assets/js/scripts.js"></script>
</body>

</html>