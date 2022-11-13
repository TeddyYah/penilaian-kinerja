</main>
<footer class="py-4 bg-light mt-auto">
    <div class="container-fluid px-4">
        <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted">Copyright &copy; Your Website 2022</div>
            <div>
                <a href="#">Privacy Policy</a>
                &middot;
                <a href="#">Terms &amp; Conditions</a>
            </div>
        </div>
    </div>
</footer>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="<?= base_url() ?>assets/demo/chart-area-demo.js"></script>
<script src="<?= base_url() ?>assets/demo/chart-bar-demo.js"></script>
<script src="<?= base_url() ?>assets/js/scripts.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script>
window.addEventListener("DOMContentLoaded", (event) => {
    // Simple-DataTables
    // https://github.com/fiduswriter/Simple-DataTables/wiki

    new simpleDatatables.DataTable("#datatablesSimple", {
        fixedColumns: false,
        perPageSelect: false,
        labels: {
            placeholder: "Cari karyawan...",
            noRows: "Tidak ada data",
            info: "Menampilkan {start} hingga {end} data karyawan dari total {rows} data",
        },
    });
});
</script>
</body>

</html>