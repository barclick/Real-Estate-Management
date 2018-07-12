<head>   
    <link href="assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>

<body>
<?php 
include  'Adminpage.php';
 ?>

    <!--  wrapper -->    

            <div class="row">
                 <!--  page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Tables</h1>
                </div>
                 <!-- end  page header -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Advanced Tables
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th> hh</th>
                                            <th>ii</th>
                                            <th>mm(s)</th>
                                            <th>nn version</th>
                                            <th>vv grade</th>
                                            <th>ff</th>
                                            <th>ff</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="odd ">
                                            <td>km</td>
                                            <td>Internet Explorer 4.0</td>
                                            <td>Win 95+</td>
                                            <td class="">4</td>
                                            <td class="center">X</td>
                                            <th>ff</th>
                                            <th>ff</th>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td>Trident</td>
                                            <td>Internet Explorer 5.0</td>
                                            <td>Win 95+</td>
                                            <td class="center">5</td>
                                            <td class="center">C</td>
                                            <th>ff</th>
                                            <th>ff</th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
            
                      
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="assets/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
    </script>

</body>

</html>
