window.addEventListener("DOMContentLoaded", (event) => {
  // Simple-DataTables
  // https://github.com/fiduswriter/Simple-DataTables/wiki

  new simpleDatatables.DataTable("#datatablesSimple", {
    fixedColumns: false,
    perPageSelect: false,
    labels: {
      placeholder: "Cari karyawan...",
      perPage: "{select} data per halaman",
      noRows: "Tidak ada data",
      info: "Menampilkan {start} hingga {end} data karyawan dari total {rows} data",
    },
  });
});
