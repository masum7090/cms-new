@extends('layouts.collegeMaster')

@section('content')

<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="row">
                <div class="col-md-6">
                    <div class="col-md-12">
                        <div class="card" id="college_des_header_welcome_card">
                            <div id="college_des_header_welcome_card_text">
                                <h3 class="font">Welcome to CMS (College panel)</h3>
                                <h5 class="font"><b>National University, Bangladesh.</b></h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div style="background-color:transparent; text-align:right;">
                      
                        <div class="row">
                           
                            <div class="col-md-12">
                                <table class="table" style="border:#F3F5FF;">
                                    <tr style="border:#F3F5FF;">
                                        <td colspan="2"><b><span style="font-size:30px;">{{Auth::user()->name}}</span></b></td>
                                    </tr>
                                    <tr style="border:#F3F5FF;">
                                        <td colspan="2">{{Auth::user()->address}}</td>
                                    </tr>
                                    <tr style="border:#F3F5FF;">
                                        <td> <span style="margin-left:120%; font-size:16px;"> <b>College Code</b> </span> </td>
                                        <td>{{Auth::user()->col_code}}</td>
                                    </tr>
                                    <tr style="border:#F3F5FF;">
                                        <td> <span style="margin-left:120%; font-size:16px;"><b>Email</b></span></td>
                                        <td>{{Auth::user()->email}}</td>
                                    </tr>
                                    <tr style="border:#F3F5FF;">
                                        <td> <span style="margin-left:120%; font-size:16px;"><b>Phone No</b></span></td>
                                        <td>{{Auth::user()->phone}}</td>
                                    </tr>
                                </table>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 grid-margin transparent">
            <div class="row">
                <div class="col-md-3 mb-4">
                    <div class="card" style="height:140px; background-image: linear-gradient( 83.2deg,  rgba(150,93,233,1) 10.8%, rgba(99,88,238,1) 94.3% ); color:#fff; box-shadow: rgba(255, 255, 255, 0.1) 0px 1px 1px 0px inset, rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;">
                        <div class="card-body">
                            <p class="mb-4"> <i class="icon-head menu-icon" id="tada_icon"></i> Total Teacher</p>
                            <p class="fs-30 mb-2">400</p>
                            <p>10.00% (30 days)</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card" style="height:140px; color:#fff; background-image: linear-gradient( 171.8deg,  rgba(5,111,146,1) 13.5%, rgba(6,57,84,1) 78.6% );">
                        <div class="card-body">
                            <p class="mb-4"> <i class="ti-id-badge menu-icon"  id="tada_icon"></i> Number Staffs</p>
                            <p class="fs-30 mb-2">34</p>
                            <p>2.00% (30 days)</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4 stretch-card transparent">
                    <div class="card" style="height:140px; background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(37,145,251,0.98) 0.1%, rgba(0,7,128,1) 99.8% ); color:#fff; box-shadow: rgba(255, 255, 255, 0.1) 0px 1px 1px 0px inset, rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;">
                        <div class="card-body">
                            <p class="mb-4"> <i class="ti-user menu-icon"  id="tada_icon"></i> Total Student</p>
                            <p class="fs-30 mb-2">6134</p>
                            <p>22.00% (30 days)</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 mb-4 transparent">
                    <div class="card" style="height:140px; background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(14,174,87,1) 0%, rgba(12,116,117,1) 90% ); color:#fff; box-shadow: rgba(255, 255, 255, 0.1) 0px 1px 1px 0px inset, rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;">
                        <div class="card-body" style="color:#fff;">
                            <p class="mb-4"> <i class="ti-book menu-icon"  id="tada_icon"></i> Number of Subjects</p>
                            <p class="fs-30 mb-2">8</p>
                            <p>0.22% (30 days)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <h3>Form Fill-up Status</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                    <div class="col-md-3">
                        <div class="card" id="college_form_fillup_status_card_active">
                            <h4>General info</h4>
                        </div>
                    </div>
                    <div class="col-md-3">
                       <div class="card" id="college_form_fillup_status_card">
                            <h4>Physical Facilities</h4>
                        </div>
                    </div>
                    <div class="col-md-3">
                       <div class="card" id="college_form_fillup_status_card_disabled">
                            <h4>
                                <del>Students info</del> <br>
                                <ins>Disabled bu NU</ins> !
                            </h4>
                        </div>
                    </div>
                    <div class="col-md-3">
                       <div class="card" id="college_form_fillup_status_card_disabled">
                            <h4><del>Teacher & Staff info</del> <br>
                            <ins>Disabled bu NU</ins> !</h4>
                        </div>
                    </div>
                    <div class="col-md-3">
                       <div class="card" id="college_form_fillup_status_card_disabled">
                            <h4><del>Miscellaneous Affairs</del> <br>
                            <ins>Disabled bu NU</ins> !</h4>
                        </div>
                    </div>
                    <div class="col-md-3">
                       <div class="card" id="college_form_fillup_status_card_disabled">
                            <h4><del>Teacher List</del> <br>
                            <ins>Disabled bu NU</ins> !</h4>
                        </div>
                    </div>
                    <div class="col-md-3">
                       <div class="card" id="college_form_fillup_status_card_disabled">
                            <h4><del>Affiliation Info Statement</del> <br>
                            <ins>Disabled bu NU</ins> ! </h4>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
