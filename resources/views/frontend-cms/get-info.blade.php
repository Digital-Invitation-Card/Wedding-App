<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.ico" type="image/ico" />
    <title>Get-Info!</title>
    <!-- Bootstrap -->
    <link href="{{asset('backend_asset/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('backend_asset/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href=".{{asset('backend_asset/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{asset('backend_asset/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="{{asset('backend_asset/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{asset('backend_asset/vendors/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet" />
    <!-- bootstrap-daterangepicker -->
    <link href="{{asset('backend_asset/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
    <link href="{{asset('backend_asset/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('backend_asset/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('backend_asset/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('backend_asset/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('backend_asset/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('backend_asset/build/css/custom.min.css')}}" rel="stylesheet">
    <link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="container" role="main">
                <div class="row">
                    <div class="col-md-12 col-sm-12  ">
                        <div class="x_panel">
                            <div class="x_title">
                                <div id="wizard" class="form_wizard wizard_horizontal">
                                    <ul class="wizard_steps">
                                        <li>
                                            <a href="#step-1">
                                                <span class="step_no">1</span>
                                                <span class="step_descr">
                                                    info<br />
                                                    <small>Step 1</small>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#step-2">
                                                <span class="step_no">2</span>
                                                <span class="step_descr">
                                                    Step 2<br />
                                                    <small>Step 2 description</small>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#step-3">
                                                <span class="step_no">3</span>
                                                <span class="step_descr">
                                                    Step 3<br />
                                                    <small>Step 3 description</small>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#step-4">
                                                <span class="step_no">4</span>
                                                <span class="step_descr">
                                                    Step 4<br />
                                                    <small>Step 4 description</small>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                    <form class="form-horizontal form-label-left">
                                        <div id="step-1">
                                            <div class="form-group row">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Which side show Frist <span class="required">*</span>
                                                </label>
                                                <select class="form-control" name="from_side" id="from_side" aria-label="Default select example">
                                                    <option value="">Select</option>
                                                    <option value="BRIDE">Bride</option>
                                                    <option value="GROOM">Groom</option>
                                                </select>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Select Language<span class="required">*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <select class="form-control" name="lang" id="lang" aria-label="Default select example">
                                                        <option value="">Select</option>
                                                        <option value="MARATHI">MARATHI</option>
                                                        <option value="ENGLISH">ENGLISH</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Images For SLider(max 3 images)</label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <input type="file" class="form-control" name="slider_img" id="slider_img">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Middle Name / Initial</label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <input type="file" class="form-control" name="groom_img" id="groom_img" placeholder="Enter First Name">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Middle Name / Initial</label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <input type="file" class="form-control" name="bride_img" id="bride_img" placeholder="Enter First Name">
                                                </div>
                                            </div>

                                        </div>
                                        <div id="step-2">
                                            <h2 class="StepTitle">Step 2 Content</h2>
                                            <div class="form-group row">
                                                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">groom_first_name</label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <input type="text" class="form-control" name="groom_first_name" id="groom_first_name" placeholder="Enter First Name">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">groom_middle_name Name / Initial</label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <input type="text" class="form-control" name="groom_middle_name" id="groom_middle_name" placeholder="Enter Middle Name">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">groom_last_name Name</label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <input type="text" class="form-control" name="groom_last_name" id="groom_last_name" placeholder="Enter Last Name">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">groom_last_name Name</label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <input type="text" class="form-control" name="groom_father_first_name" id="groom_father_first_name" placeholder="Enter Middle Name">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">groom_last_name Name</label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <input type="text" class="form-control" name="groom_father_middle_name" id="groom_father_middle_name" placeholder="Enter Middle Name">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">groom_last_name Name</label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <input type="text" class="form-control" name="groom_father_last_name" id="groom_father_last_name" placeholder="Enter Last Name">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">groom_last_name Name</label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <input type="file" class="form-control" name="groom_father_img" id="groom_father_img" placeholder="Enter Last Name">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">groom_last_name Name</label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <input type="text" class="form-control" name="groom_mother_first_name" id="groom_mother_first_name" placeholder="Enter Middle Name">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">groom_last_name Name</label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <input type="text" class="form-control" name="groom_mother_middle_name" id="groom_mother_middle_name" placeholder="Enter Middle Name">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">groom_last_name Name</label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <input type="text" class="form-control" name="groom_mother_last_name" id="groom_mother_last_name" placeholder="Enter Middle Name">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">groom_last_name Name</label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <input type="text" class="form-control" name="groom_mother_img" id="groom_mother_img" placeholder="Enter Middle Name">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">groom_last_name Name</label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <input type="text" class="form-control" name="groom_sister_name" id="groom_sister_name" placeholder="groom_sister_name Middle Name">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">groom_last_name Name</label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <input type="file" class="form-control" name="groom_sister_img" id="groom_sister_img" placeholder="groom_sister_name Middle Name">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">groom_last_name Name</label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <input type="text" class="form-control" name="groom_brother_name" id="groom_brother_name" placeholder="Enter Middle Name">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">groom_last_name Name</label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <input type="file" class="form-control" name="groom_brother_img" id="groom_brother_img" placeholder="Enter Middle Name">
                                                </div>
                                            </div>
                                        </div>
                                        <div id="step-3">
                                            <h2 class="StepTitle">Step 3 Content</h2>
                                            <div class="form-group row">
                                                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">groom_last_name Name</label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <input type="text" class="form-control" name="bride_first_name" id="bride_first_name" placeholder="Enter First Name">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">groom_last_name Name</label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <input type="text" class="form-control" name="bride_middle_name" id="bride_middle_name" placeholder="Enter First Name">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">groom_last_name Name</label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <input type="text" class="form-control" name="bride_last_name" id="bride_middle_name" placeholder="Enter First Name">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">groom_last_name Name</label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <input type="text" class="form-control" name="bride_father_first_name" id="bride_father_first_name" placeholder="Enter Middle Name">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">groom_last_name Name</label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <input type="text" class="form-control" name="bride_father_middle_name" id="bride_father_middle_name" placeholder="Enter Middle Name">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">groom_last_name Name</label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <input type="text" class="form-control" name="bride_father_last_name" id="bride_father_last_name" placeholder="Enter Middle Name">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">groom_last_name Name</label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <input type="text" class="form-control" name="bride_father_img" id="bride_father_bride_father_img" placeholder="Enter Middle Name">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">groom_last_name Name</label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <input type="file" class="form-control" name="bride_father_img" id="bride_father_bride_father_img" placeholder="Enter Middle Name">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">groom_last_name Name</label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <input type="text" class="form-control" name="bride_mother_first_name" id="bride_mother_first_name" placeholder="Enter Middle Name">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">groom_last_name Name</label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <input type="text" class="form-control" name="bride_mother_middle_name" id="bride_mother_middle_name" placeholder="Enter Middle Name">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">groom_last_name Name</label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <input type="text" class="form-control" name="bride_mother_last_name" id="bride_mother_last_name" placeholder="Enter Middle Name">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">groom_last_name Name</label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <input type="file" class="form-control" name="bride_mother_img" id="bride_mother_img" placeholder="Enter Middle Name">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">groom_last_name Name</label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <input type="text" class="form-control" name="bride_sister_name" id="bride_sister_name" placeholder="Enter Middle Name">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">groom_last_name Name</label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <input type="file" class="form-control" name="bride_sister_file" id="bride_sister_file" placeholder="Enter Middle Name">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">groom_last_name Name</label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <input type="text" class="form-control" name="bride_brother_name" id="bride_brother_name" placeholder="Enter Middle Name">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">groom_last_name Name</label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <input type="file" class="form-control" name="bride_brother_img" id="bride_brother_img" placeholder="Enter Middle Name">
                                                </div>
                                            </div>
                                        </div>
                                        <div id="step-4">
                                            <h2 class="StepTitle">Step 4 Content</h2>
                                            <div class="form-group row">
                                                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">groom_last_name Name</label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <input type="date" class="form-control" name="add_start_date" id="add_start_date" placeholder="Enter First Name">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">groom_last_name Name</label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <input type="date" class="form-control" name="add_end_date" id="add_end_date" placeholder="Enter First Name">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">groom_last_name Name</label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <input type="date" class="form-control" name="haldi_date" id="haldi_date" placeholder="Enter First Name">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">groom_last_name Name</label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <input type="date" class="form-control" name="wedding_date" id="wedding_date" placeholder="Enter First Name">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">groom_last_name Name</label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <input type="date" class="form-control" name="reception_date" id="reception_date" placeholder="Enter First Name">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">groom_last_name Name</label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <input type="date" class="form-control" name="haldi_function_address" id="haldi_function_address" placeholder="Enter First Name">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">groom_last_name Name</label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <input type="date" class="form-control" name="wedding_address" id="wedding_address" placeholder="Enter First Name">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">groom_last_name Name</label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <input type="date" class="form-control" name="wedding_address_link" id="wedding_address_link" placeholder="Enter First Name">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">groom_last_name Name</label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <input type="date" class="form-control" name="reception_function_address" id="reception_function_address" placeholder="Enter First Name">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- End SmartWizard Content -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.footer')
    <script>
        $(document).ready(function() {
            $('.nav-item a').on('click', function(e) {
                e.preventDefault();
                $(this).tab('show')
            });

            function clear_icon() {
                $('#id_icon').html('');
                $('#post_title_icon').html('');
            }

            function fetch_data(page, sort_type, sort_by, query) {
                $.ajax({
                    url: "/add-wedding-info?page=" + page + "&sortby=" + sort_by + "&sorttype=" + sort_type + "&query=" + query,
                    success: function(data) {
                        $('tbody').html('');
                        $('tbody').html(data);
                    }
                })
            }

            $(document).on('keyup', '#serach', function() {
                var query = $('#serach').val();
                var column_name = $('#hidden_column_name').val();
                var sort_type = $('#hidden_sort_type').val();
                var page = $('#hidden_page').val();
                fetch_data(page, sort_type, column_name, query);
            });

            $(document).on('click', '.sorting', function() {
                var column_name = $(this).data('column_name');
                var order_type = $(this).data('sorting_type');
                var reverse_order = '';
                if (order_type == 'asc') {
                    $(this).data('sorting_type', 'desc');
                    reverse_order = 'desc';
                    clear_icon();
                    $('#' + column_name + '_icon').html('<span class="glyphicon glyphicon-triangle-bottom"></span>');
                }
                if (order_type == 'desc') {
                    $(this).data('sorting_type', 'asc');
                    reverse_order = 'asc';
                    clear_icon
                    $('#' + column_name + '_icon').html('<span class="glyphicon glyphicon-triangle-top"></span>');
                }
                $('#hidden_column_name').val(column_name);
                $('#hidden_sort_type').val(reverse_order);
                var page = $('#hidden_page').val();
                var query = $('#serach').val();
                fetch_data(page, reverse_order, column_name, query);
            });

            $(document).on('click', '.pagination a', function(event) {
                event.preventDefault();
                var page = $(this).attr('href').split('page=')[1];
                $('#hidden_page').val(page);
                var column_name = $('#hidden_column_name').val();
                var sort_type = $('#hidden_sort_type').val();

                var query = $('#serach').val();

                $('li').removeClass('active');
                $(this).parent().addClass('active');
                fetch_data(page, sort_type, column_name, query);
            });
            $('#weddin_form').on('submit', function(event) {
                event.preventDefault();
                $.ajax({
                    url: "{{ route('ajaxupload.action') }}",
                    method: "POST",
                    data: new FormData(this),
                    dataType: 'JSON',
                    contentType: false,
                    cache: false,
                    processData: false,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(data) {
                        console.log(data);
                        $('#message').css('display', 'block');
                        $('#message').html(data.message);
                        $('#message').addClass(data.class_name);
                        $('#uploaded_image').html(data.uploaded_image);
                    }
                })
            });

        });
    </script>