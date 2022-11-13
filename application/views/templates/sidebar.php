<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Main Menu</div>
                    <a class="nav-link" href="<?= base_url('home') ?>">
                        <div class=" sb-nav-link-icon">
                            <i class="fas fa-tachometer-alt"></i>
                        </div>
                        Home
                    </a>
                    <a class="nav-link" href="<?= base_url('karyawan') ?>">
                        <div class="sb-nav-link-icon">
                            <i class="fa-solid fa-users"></i>
                        </div>
                        Karyawan
                    </a>
                    <a class="nav-link" href="<?= base_url('kriteria') ?>">
                        <div class="sb-nav-link-icon">
                            <i class="fa-solid fa-puzzle-piece"></i>
                        </div>
                        Kriteria
                    </a>
                    <a class="nav-link" href="<?= base_url('penilaian') ?>">
                        <div class="sb-nav-link-icon">
                            <i class="fa-solid fa-ranking-star"></i>
                        </div>
                        Penilaian
                    </a>
                    <a class="nav-link" href="<?= base_url('auth/logout'); ?>">
                        <div class="sb-nav-link-icon">
                            <i class="fa-solid fa-right-from-bracket"></i>
                        </div>
                        Logout
                    </a>
                </div>
            </div>
            <!-- <div class="sb-sidenav-footer">
                <div class="small">Masuk sebagai:</div>
                <?php 
                 $email = $this->input->post('email');
                 $password = $this->input->post('password');
         
                 $user = $this->db->get_where('user', ['email' => $email])->row_array();
                ?>
                <?= 
                $user['nama_karyawan']
                ?>
            </div> -->
        </nav>
    </div>
    <div id="layoutSidenav_content">
        <main>