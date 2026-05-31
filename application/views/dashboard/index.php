<h1 class="h3 mb-4 text-gray-800">Dashboard</h1>

<div class="row">

    <!-- Total Kategori -->
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <h5>Total Kategori</h5>
                <h3><?= $total_kategori; ?></h3>
            </div>
        </div>
    </div>

    <!-- Total Buku -->
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <h5>Total Buku</h5>
                <h3><?= $total_buku; ?></h3>
            </div>
        </div>
    </div>

    <!-- Total Anggota -->
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <h5>Total Anggota</h5>
                <h3><?= $total_anggota; ?></h3>
            </div>
        </div>
    </div>

</div>

<!-- Chart -->
<div class="card shadow mb-4">
    <div class="card-body">
        <canvas id="chartDashboard"></canvas>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
const ctx = document.getElementById('chartDashboard');

new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Kategori', 'Buku', 'Anggota'],
        datasets: [{
            label: 'Jumlah Data',
            data: [
                <?= $total_kategori; ?>,
                <?= $total_buku; ?>,
                <?= $total_anggota; ?>
            ],
            backgroundColor: [
                '#4e73df',
                '#1cc88a',
                '#36b9cc'
            ],
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>