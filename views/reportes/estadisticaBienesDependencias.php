<?php require_once('assets/components/header.php'); ?>

    <!-- Main Content -->
    <div id="content">

        <?php require_once('assets/components/navbar.php'); ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Titulo -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800"><?= $data['page_title']; ?></h1>
                
            </div>

            <!-- Tabla Datos -->
            <div class="card shadow mb-2">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Estadísticas Asignaciones por Dependencias</h6>
                    <span>Desde: <?= $data['desde']; ?>  <br/>Hasta: <?= $data['hasta']; ?></span>
                </div>
                <div class="card-body">

                    <div class="m-auto"><canvas id="chartAsignados" width="330" height="230"></canvas></div>
                    
                    
                </div>
            </div>
            <div class="card shadow mb-2">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Estadísticas de Desincorporaciones por Dependencias</h6>
                    <span>Desde: <?= $data['desde']; ?>  <br/>Hasta: <?= $data['hasta']; ?></span>
                </div>
                <div class="card-body">

                    <div class="m-auto"><canvas id="chartDesincorporados" width="330" height="230"></canvas></div>
                    
                    
                </div>
            </div>
        </div>
    </div>
    <!-- End of Main Content -->


    <?php require_once('assets/components/footer.php'); ?>

    </div>
    <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <?php require_once('assets/components/modals.php'); ?>
    <?php require_once('assets/components/scripts.php'); ?>
    <script src="<?= media(); ?>/chart.js/dist/Chart.min.js"></script>
    <script>
        $(document).ready(function () {  
            var cp = document.getElementById('chartAsignados');
            var chartAsignados = new Chart(cp, {
                type: 'bar',
                data: {
                    labels: [
                        '<?=$data["incorD"][0]?>', '<?=$data["incorD"][1]?>','<?=$data["incorD"][2]?>', 
                        '<?=$data["incorD"][3]?>', '<?=$data["incorD"][4]?>','<?=$data["incorD"][5]?>', 
                        '<?=$data["incorD"][6]?>', '<?=$data["incorD"][7]?>','<?=$data["incorD"][8]?>', 
                    ],
                    datasets: [{
                        label: 'Cantidad de Asignaciones',
                        data: [
                            '<?=$data["incorB"][0]?>', '<?=$data["incorB"][1]?>', '<?=$data["incorB"][2]?>',
                            '<?=$data["incorB"][3]?>', '<?=$data["incorB"][4]?>', '<?=$data["incorB"][5]?>',
                            '<?=$data["incorB"][6]?>', '<?=$data["incorB"][7]?>', '<?=$data["incorB"][8]?>',
                        ],
                        backgroundColor: [                            
                            'rgba(54, 162, 235, 0.9)',
                            'rgba(255, 206, 86, 0.9)',
                            'rgba(24, 255, 255, 0.9)',
                            'rgba(200, 99, 132, 0.9)',
                            'rgba(153, 102, 255, 0.9)',
                            'rgba(255, 159, 64, 0.9)',
                            'rgba(238, 255, 65, 0.9)',
                            'rgba(67, 160, 71, 0.9)',
                            'rgba(24, 215, 255, 0.9)',
                        
                        ],
                        borderColor: [                            
                            'rgba(54, 182, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(24, 255, 255, 1)',
                            'rgba(200, 99, 132, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)',
                            'rgba(238, 255, 65, 1)',
                            'rgba(67, 160, 71, 1)',
                            'rgba(24, 215, 255, 1)',
                        ],
                        borderWidth: 0
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                fontColor: "black",
                                fontSize: 12,
                                // stepSize: 1,
                                beginAtZero: true
                            }
                        }],
                        xAxes: [{
                            ticks: {
                                fontColor: "black",
                                fontSize: 12,
                                stepSize: 1,
                                beginAtZero: true
                            }
                        }]
                    },
                    legend: {
                        labels: {
                            // This more specific font property overrides the global property
                            fontColor: 'black',
                            fontFamily: 'Arial',
                            fontSize: 12
                        }
                    },
                    
                }
            });

            var cc = document.getElementById('chartDesincorporados');
            var chartDesincorporados = new Chart(cc, {
                type: 'line',
                data: {
                    labels: [
                        '<?=$data["incorD"][0]?>', '<?=$data["incorD"][1]?>','<?=$data["incorD"][2]?>', 
                        '<?=$data["incorD"][3]?>', '<?=$data["incorD"][4]?>','<?=$data["incorD"][5]?>', 
                        '<?=$data["incorD"][6]?>', '<?=$data["incorD"][7]?>','<?=$data["incorD"][8]?>', 
                    ],
                    datasets: [{
                        label: 'Cantidad de Desincorporaciones',
                        data: [
                            '<?=$data["incorB"][0]?>', '<?=$data["incorB"][1]?>', '<?=$data["incorB"][2]?>',
                            '<?=$data["incorB"][3]?>', '<?=$data["incorB"][4]?>', '<?=$data["incorB"][5]?>',
                            '<?=$data["incorB"][6]?>', '<?=$data["incorB"][7]?>', '<?=$data["incorB"][8]?>',
                        ],
                        backgroundColor: [                            
                            'rgba(54, 162, 235, 0.45)',
                            'rgba(255, 206, 86, 0.45)',
                            'rgba(24, 255, 255, 0.45)',
                            'rgba(200, 99, 132, 0.45)',
                            'rgba(153, 102, 255, 0.45)',
                            'rgba(255, 159, 64, 0.45)',
                            'rgba(238, 255, 65, 0.45)',
                            'rgba(67, 160, 71, 0.45)',
                            'rgba(24, 215, 255, 0.9)',
                        
                        ],
                        borderColor: [                            
                            'rgba(54, 182, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(24, 255, 255, 1)',
                            'rgba(200, 99, 132, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)',
                            'rgba(238, 255, 65, 1)',
                            'rgba(67, 160, 71, 1)',
                            'rgba(24, 215, 255, 1)',
                        ],
                        borderWidth: 0
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                fontColor: "black",
                                fontSize: 12,
                                // stepSize: 1,
                                beginAtZero: true
                            }
                        }],
                        xAxes: [{
                            ticks: {
                                fontColor: "black",
                                fontSize: 12,
                                stepSize: 1,
                                beginAtZero: true
                            }
                        }]
                    },
                    legend: {
                        labels: {
                            // This more specific font property overrides the global property
                            fontColor: 'black',
                            fontFamily: 'Arial',
                            fontSize: 12
                        }
                    },
                    
                }
            });
        });
        
    </script>
</body>
</html>