<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Charts Pembelian Dan Pengadaan barang</h1>
    <p class="mb-4">jumlah pengeluaran hasil dari pembeian dan pengadaan Barang di DLH TPA Bandengan Jepara pertahun </p>

    <!-- Content Row -->
    <div class="row">

        <div class="col-xl-8 col-lg-7">

            <!-- Bar Chart -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Total Pengeluaran</h6>
                </div>
                <div class="card-body">

                    <!-- <canvas id="myBarChart"></canvas> -->
                    <canvas id="myChart" width="200" height="100"></canvas>
                    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
                    <script type="text/javascript">
                        var ctx = document.getElementById('myChart').getContext('2d');
                        var myChart = new Chart(ctx, {
                            type: 'bar',
                            data: {
                                labels: [<?php
                                            if (count($barang) > 0) {
                                                foreach ($barang as $data) {
                                                    echo "'" . $data->tahun . "',";
                                                }
                                            }
                                            ?>],
                                datasets: [{
                                    label: "Pertahun",
                                    backgroundColor: "#4e73df",
                                    hoverBackgroundColor: "#2e59d9",
                                    borderColor: "#4e73df",
                                    data: [<?php
                                            if (count($barang) > 0) {
                                                foreach ($barang as $data) {
                                                    echo $data->harga . ", ";
                                                }
                                            }
                                            ?>],
                                }],
                            },
                            options: {
                                scales: {
                                    yAxes: [{
                                        ticks: {
                                            min: 0,
                                            max: 15000000,
                                            maxTicksLimit: 5,
                                            padding: 10,
                                            beginAtZero: true
                                        }
                                    }]
                                }
                            }
                        });
                    </script>

                </div>
            </div>

        </div>

        <!-- Donut Chart -->
        <div class="col-xl-4 col-lg-5">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Donut Chart</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-pie pt-4">
                        <canvas id="myPieChart"></canvas>
                    </div>
                    <hr>
                    Styling for the donut chart can be found in the <code>/js/demo/chart-pie-demo.js</code> file.
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->