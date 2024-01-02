@include('admin.header')
<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-12 col-sm-12  ">
            <div class="x_panel">
                <div class="x_title">
                    <h2><i class="fa fa-bars"></i> Tabs <small>Float left</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Settings 1</a>
                                <a class="dropdown-item" href="#">Settings 2</a>
                            </div>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                    <ul class="nav nav-tabs bar_tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card-box table-responsive">
                                        <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Position</th>
                                                    <th>Office</th>
                                                    <th>Age</th>
                                                    <th>Start date</th>
                                                    <th>Salary</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @include('admin.wedding-table')
                                                <input type="hidden" name="hidden_page" id="hidden_page" value="1" />
                                                <input type="hidden" name="hidden_column_name" id="hidden_column_name" value="id" />
                                                <input type="hidden" name="hidden_sort_type" id="hidden_sort_type" value="asc" />
                                            </tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div id="wizard" class="form_wizard wizard_horizontal">
                                <ul class="wizard_steps">
                                    <li>
                                        <a href="#step-1">
                                            <span class="step_no">1</span>
                                            <span class="step_descr">
                                                Step 1<br />
                                                <small>First Section</small>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#step-2">
                                            <span class="step_no">2</span>
                                            <span class="step_descr">
                                                Step 2<br />
                                                <small>Groom And Bride Info</small>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#step-3">
                                            <span class="step_no">3</span>
                                            <span class="step_descr">
                                                Step 3<br />
                                                <small> Metting Info </small>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#step-4">
                                            <span class="step_no">4</span>
                                            <span class="step_descr">
                                                Step 4<br />
                                                <small>Groom Info</small>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#step-5">
                                            <span class="step_no">5</span>
                                            <span class="step_descr">
                                                Step 5<br />
                                                <small>Bride Info</small>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#step-6">
                                            <span class="step_no">6</span>
                                            <span class="step_descr">
                                                Step 6<br />
                                                <small>Prewedding Images</small>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#step-7">
                                            <span class="step_no">7</span>
                                            <span class="step_descr">
                                                Step 7<br />
                                                <small>Wedding Functions</small>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                                <form id="weddin_form" method="post" class="form-horizontal form-label-left" enctype="multipart/form-data">
                                    <div id="step-1">
                                        <div class="form-group row">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Which side show Frist <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <select class="form-control" name="from_side" id="from_side" aria-label="Default select example">
                                                    <option value="">Select</option>
                                                    <option value="BRIDE">Bride</option>
                                                    <option value="GROOM">Groom</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Select Teamplate<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <select class="form-control" name="sample_teamplate" id="sample_teamplate" aria-label="Default select example">
                                                    <option value="">Select</option>
                                                    <option value="smaple-1">Sample 1</option>
                                                    <option value="smaple-2">Sample 2</option>
                                                    <option value="smaple-3">Sample 3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Images For Background </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="file" class="form-control" name="background_img" id="background_img">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Welcome text</label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="text" class="form-control" name="welcome_text" id="welcome_text" placeholder="Enter Welcome Text">
                                            </div>
                                        </div>
                                    </div>
                                    <div id="step-2">
                                        <h2 class="StepTitle">Step 2 Groom And Bride Info</h2>
                                        <div class="form-group row">
                                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Wedding Quotes</label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="text" class="form-control" name="wedding_tag_line" id="wedding_tag_line" placeholder="Enter Wedding Quotes">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Groom Full Name</label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="text" class="form-control" name="groom_full_name" id="groom_full_name" placeholder="Enter Full Name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Bride Full Name</label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="text" class="form-control" name="bride_full_name" id="bride_full_name" placeholder="Enter Full Name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Groom Info(Fathar name with Address)</label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="text" class="form-control" name="groom_family_info_with_address" id="groom_family_info_with_address" placeholder="Enter Info Where are form with address">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Bride Info(Fathar name with Address)</label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="text" class="form-control" name="bride_family_info_with_address" id="bride_family_info_with_address" placeholder="Enter Info Where are form with address">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Groom Image</label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="file" class="form-control" name="groom_img" id="groom_img" placeholder="Enter Middle Name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Bride Image</label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="file" class="form-control" name="bride_img" id="bride_img" placeholder="Enter Middle Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div id="step-3">
                                        <h2 class="StepTitle">Step 3 Meeting</h2>
                                        <div class="form-group row">
                                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Meeting Title 1</label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="text" class="form-control" name="meeting_title_first" id="meeting_title_first" placeholder="Enter M">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Frist Meeting date</label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="date" class="form-control" name="meeting_first_date" id="meeting_first_date" placeholder="Enter Meeting First Date">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Frist Meeting Description</label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="text" class="form-control" name="meeting_first_description" id="meeting_first_description" placeholder="Enter First Meeting Description">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Frist Meeting Image</label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="file" class="form-control" name="meeting_first_img" id="meeting_first_img" placeholder="Enter First Meeting Description">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Meeting Title 2</label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="text" class="form-control" name="meeting_title_second" id="meeting_title_second" placeholder="Enter M">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Second Meeting date</label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="date" class="form-control" name="meeting_second_date" id="meeting_second_date" placeholder="Enter Meeting Second Date">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Second Meeting Description</label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="text" class="form-control" name="meeting_second_description" id="meeting_second_description" placeholder="Enter Second Meeting Description">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Second Meeting Image</label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="file" class="form-control" name="meeting_second_img" id="meeting_second_img" placeholder="Enter Second Meeting Description">
                                            </div>
                                        </div>
                                    </div>
                                    <div id="step-4">
                                        <h2 class="StepTitle">Step 4 Groom Family Info</h2>
                                        <div class="form-group row">
                                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Groom Father Full Name</label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="text" class="form-control" name="groom_fathar_full_name" id="groom_fathar_full_name" placeholder="Enter fathar Full Name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Groom Father Image</label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="file" class="form-control" name="groom_fathar_img" id="groom_fathar_img" placeholder="Enter fathar Full Name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Groom Mother Full Name</label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="text" class="form-control" name="grrom_mother_full_name" id="grrom_mother_full_name" placeholder="Enter Mother Full Name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Groom Mother Image</label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="file" class="form-control" name="grrom_mother_img" id="grrom_mother_img" placeholder="Enter Mother Full Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div id="step-5">
                                        <h2 class="StepTitle">Step 4 Bride Info</h2>
                                        <div class="form-group row">
                                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Bride Father Full Name</label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="text" class="form-control" name="bride_fathar_full_name" id="bride_fathar_full_name" placeholder="Enter fathar Full Name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Bride Father Image</label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="file" class="form-control" name="bride_fathar_img" id="bride_fathar_img" placeholder="Enter fathar Full Name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Bride Mother Full Name</label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="text" class="form-control" name="bride_mother_full_name" id="bride_mother_full_name" placeholder="Enter Mother Full Name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Bride Mother Image</label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="file" class="form-control" name="bride_mother_img" id="grrom_mother_img" placeholder="Enter Mother Full Name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Bride Sister/Brother Name 1</label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="text" class="form-control" name="bride_cousin_first_name" id="bride_cousin_first_name" placeholder="Enter Cousin Name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Bride Sister/Brother Name 2</label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="text" class="form-control" name="bride_cousin_second_name" id="bride_cousin_second_name" placeholder="Enter Cousin Name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Sister/Brother Name 3</label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="text" class="form-control" name="bride_cousin_third_name" id="bride_cousin_third_name" placeholder="Enter cousin Name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Sister/Brother Name 4</label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="text" class="form-control" name="bride_cousin_fourth_name" id="bride_cousin_fourth_name" placeholder="Enter cousin Name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align"> Sister/Brother Name 5</label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="text" class="form-control" name="bride_cousin_fifth_name" id="bride_cousin_fifth_name" placeholder="Enter Cousin Name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align"> Sister/Brother Image 1</label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="file" class="form-control" name="bride_cousin_first_img" id="bride_cousin_first" placeholder="Enter First Name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align"> Sister/Brother Image 2</label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="file" class="form-control" name="bride_cousin_second_img" id="bride_cousin_second_img" placeholder="Enter First Name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align"> Sister/Brother Image 3</label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="file" class="form-control" name="bride_cousin_third_img" id="bride_cousin_third_img" placeholder="Enter First Name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align"> Sister/Brother Image 4</label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="file" class="form-control" name="bride_cousin_fourth_img" id="bride_cousin_fourth_img" placeholder="Enter First Name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align"> Sister/Brother Image 5</label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="file" class="form-control" name="bride_cousin_fifth_img" id="bride_cousin_fifth_img" placeholder="Enter First Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div id="step-6">
                                        <h2 class="StepTitle">Step 4 Prewedding Images</h2>
                                        <div class="form-group row">
                                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Prewedding Images 1</label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="file" class="form-control" name="prewedding_img_1" id="prewedding_img_1" placeholder="Enter fathar Full Name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Prewedding Images 2</label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="file" class="form-control" name="prewedding_img_2" id="prewedding_img_2" placeholder="Enter fathar Full Name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Prewedding Images 3</label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="file" class="form-control" name="prewedding_img_3" id="prewedding_img_3" placeholder="Enter fathar Full Name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Prewedding Images 4</label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="file" class="form-control" name="prewedding_img_4" id="prewedding_img_4" placeholder="Enter fathar Full Name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Prewedding Images 5</label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="file" class="form-control" name="prewedding_img_5" id="prewedding_img_5" placeholder="Enter fathar Full Name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Prewedding Images 6</label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="file" class="form-control" name="prewedding_img_6" id="prewedding_img_6" placeholder="Enter fathar Full Name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Prewedding Images 7</label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="file" class="form-control" name="prewedding_img_7" id="prewedding_img_7" placeholder="Enter fathar Full Name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Prewedding Images 8</label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="file" class="form-control" name="prewedding_img_8" id="prewedding_img_8" placeholder="Enter fathar Full Name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Prewedding Videos Link </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="file" class="form-control" name="prewedding_video_link" id="prewedding_video_link" placeholder="Enter fathar Full Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div id="step-7">
                                        <h2 class="StepTitle">Step 4 Wedding Function </h2>
                                        <div class="form-group row">
                                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Haldi Function Date</label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="date" class="form-control" name="haldi_date" id="haldi_date" placeholder="Enter date">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Haldi Function Address</label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="text" class="form-control" name="haldi_address" id="haldi_address" placeholder="Enter date">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Wedding date</label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="date" class="form-control" name="wedding_date" id="wedding_date" placeholder="Enter Wedding Date">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Add Start date</label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="date" class="form-control" name="add_start_date" id="add_start_date" placeholder="Enter Wedding Date">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Add End date</label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="datetime-local" class="form-control" name="add_end_date" id="add_end_date" placeholder="Enter Wedding Date">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Wedding Address</label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="text" class="form-control" name="wedding_address" id="wedding_address" placeholder="Enter Wedding Address">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Wedding Address (Google map link)</label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="text" class="form-control" name="google_map_link" id="google_map_link" placeholder="Enter Wedding Address Google Map Link">
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
   

    });
</script>