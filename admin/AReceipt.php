<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Manage Payment Receipt</title>
    <!-- Custom CSS -->
    <link href="../dist/css/style.css" rel="stylesheet">
    <link href="../dist/css/pages/file-upload.css" rel="stylesheet">
    <link href="../assets/node_modules/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
    <!-- page css -->
    <link href="../dist/css/pages/footable-page.css" rel="stylesheet">
    <link href="../dist/css/pages/tab-page.css" rel="stylesheet">
    <!-- Footable CSS -->
    <link href="../assets/node_modules/footable/css/footable.core.css" rel="stylesheet">
    <link href="../assets/node_modules/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
    <style>
        .datepicker {
            z-index: 1600 !important;
            /* has to be larger than 1050 */
        }
    </style>

</head>

<body class="skin-blue-dark fixed-layout">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Loading</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <?php require_once("ATopbar.php") ?>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <?php require_once("ASideBar.php") ?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Payment Receipt Management</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="ACalendar.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="AInvoice.php">Invoice</a></li>
                                <li class="breadcrumb-item active">Payment Receipt</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Invoices #1</h4>
                                <hr>
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist" id="teacherTab">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#receiptTab" role="tab">
                                            <span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Receipt</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#addReceiptTab" role="tab">
                                            <span class="hidden-sm-up"><i class="ti-pencil"></i></span> <span class="hidden-xs-down">Add Receipt</span>
                                        </a>
                                    </li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content tabcontent-border">
                                    <!-- Receipt panel -->
                                    <div class="tab-pane active" id="receiptTab" role="tabpanel">
                                        <div class="p-20">
                                            <div class="table-responsive ">
                                                <table id="mytable" class="table m-t-5 table-hover contact-list" data-page-size="5">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Date</th>
                                                            <th>Amount(RM)</th>
                                                            <th>Description</th>
                                                            <th>Type</th>
                                                            <th data-sort-ignore="true">File</th>
                                                            <th data-sort-ignore="true">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>10/1/2021</td>
                                                            <td>540</td>
                                                            <td>pay by cash</td>
                                                            <td>Cash</td>
                                                            <td>-</td>
                                                            <td>
                                                                <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#editModal">Edit</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>10/1/2021</td>
                                                            <td>540</td>
                                                            <td>if pay by online and upload file</td>
                                                            <td>Online</td>
                                                            <td><a href="../img/receipttest.pdf" download>receipttest.pdf</td>
                                                            <td>
                                                                <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#editModal">Edit</button>
                                                            </td>
                                                        </tr>

                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <td colspan="2">
                                                                <a href="AInvoice.php" type="button" class="btn btn-primary">Return</a>
                                                            </td>
                                                            <td colspan="7">
                                                                <div class="text-right">
                                                                    <ul class="pagination"> </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- add receipt panel -->
                                    <div class="tab-pane" id="addReceiptTab" role="tabpanel">
                                        <div class="p-20">
                                            <form class="form-material" id="addReceiptForm">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <label class="col-md-12" for="bdate">Receipt Date</span>
                                                        </label>
                                                        <div class="col-md-12">
                                                            <input type="text" id="bdate" name="bdate" class="form-control mydatepicker" placeholder="dd/mm/yyyy" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <label class="col-md-12" for="example-text3">Amount (RM)</span>
                                                        </label>
                                                        <div class="col-md-12">
                                                            <input type="number" id="example-text3" name="example-text" class="form-control" placeholder="enter receipt amount" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <label class="col-md-12">Description</label>
                                                        <div class="col-md-12">
                                                            <textarea class="form-control" rows="3" placeholder="enter receipt description" required></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <label class="col-sm-12">Type</label>
                                                        <div class="col-sm-12">
                                                            <select class="form-control" required>
                                                                <option hidden disabled selected value=""> -- select receipt type -- </option>
                                                                <option>Cash</option>
                                                                <option>Online</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <label class="col-sm-12">Upload Receipt File</label>
                                                        <div class="col-sm-12 fileinput fileinput-new input-group" data-provides="fileinput">
                                                            <div class="form-control" data-trigger="fileinput">
                                                                <i class="glyphicon glyphicon-file fileinput-exists"></i>
                                                                <span class="fileinput-filename"></span>
                                                            </div>
                                                            <span class="input-group-addon btn btn-default btn-file">
                                                                <span class="fileinput-new">Select file</span>
                                                                <span class="fileinput-exists">Change</span>
                                                                <input type="hidden">
                                                                <!-- get file data from this below input -->
                                                                <input type="file" name="...">
                                                            </span>
                                                            <a href="javascript:void(0)" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-actions">
                                                    <button type="submit" class="btn btn-info waves-effect waves-light">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- edit receipt modal -->
                <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="exampleModalLabel1">Edit Receipt</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <form class="form-material" id="editReceiptForm">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label class="col-md-12" for="bdate">Receipt Date</span>
                                        </label>
                                        <div class="col-md-12">
                                            <input type="text" id="bdate" name="bdate" class="form-control mydatepicker text-muted" placeholder="dd/mm/yyyy" value="01/01/2021" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12" for="example-text3">Amount (RM)</span>
                                        </label>
                                        <div class="col-md-12">
                                            <input type="number" id="example-text3" name="example-text" class="form-control text-muted" placeholder="enter receipt amount" value="540" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Description</label>
                                        <div class="col-md-12">
                                            <textarea class="form-control text-muted" rows="3" placeholder="enter receipt description" required>pay by cash</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-12">Type</label>
                                        <div class="col-sm-12">
                                            <select class="form-control text-muted" required>
                                                <option selected value="cash">Cash</option>
                                                <option value="online">Online</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-12">Upload Receipt File</label>
                                        <div class="col-sm-12 fileinput fileinput-new input-group" data-provides="fileinput">
                                            <div class="form-control" data-trigger="fileinput">
                                                <i class="glyphicon glyphicon-file fileinput-exists"></i>
                                                <span class="fileinput-filename"></span>
                                            </div>
                                            <span class="input-group-addon btn btn-default btn-file">
                                                <span class="fileinput-new">Select file</span>
                                                <span class="fileinput-exists">Change</span>
                                                <input type="hidden">
                                                <!-- get file data from this below input -->
                                                <input type="file" name="...">
                                            </span>
                                            <a href="javascript:void(0)" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-info">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


                <!-- End PAge Content -->
                <!-- ============================================================== -->

            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer">
            © 2021 Music Academy Management System
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap popper Core JavaScript -->
    <script src="../assets/node_modules/popper/popper.min.js"></script>
    <script src="../assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../dist/js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../dist/js/custom.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/pages/jasny-bootstrap.js"></script>
    <script src="../dist/js/pages/mask.js"></script>
    <!-- Footable -->
    <script src="../assets/node_modules/footable/js/footable.all.min.js"></script>
    <!-- Sweet-Alert  -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Date Picker Plugin JavaScript -->
    <script src="../assets/node_modules/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>

    <script>
        // Date Picker
        $('.mydatepicker').datepicker({
            format: 'dd/mm/yyyy',
            autoclose: true,
            todayHighlight: true
        });

        // footable
        $('#mytable').footable();

        // edit receipt form
        $("#editReceiptForm").submit(function(e) {
            e.preventDefault();
            Swal.fire({
                title: 'Confirm Edit?',
                icon: 'warning',
                allowOutsideClick: false,
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, confirm!'
            }).then((result) => {
                if (result.isConfirmed) {
                    // DO EDIT RECEIPT HERE THEN FIRE SWAL
                    Swal.fire(
                        'Done!',
                        'Receipt Edited.',
                        'success'
                    ).then(() => {
                        window.location.href = "AReceipt.php";
                    })
                }
            })
        })
    </script>

</body>

</html>