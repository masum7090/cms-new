@extends('layouts.master')

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12">
            <div class="card" style="margin-bottom:20px;">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseOne" aria-expanded="false"
                                aria-controls="flush-collapseOne">
                                <span style="font-size:16px; color:#857C7C; font-family: 'Lato', sans-serif;"><b>Custom
                                        Search</b></span>
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card"
                                            style=" border:none; padding:5px; font-family: 'Lato', sans-serif;">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label><b>District</b></label>
                                                            <select class="form-select form-select-sm"
                                                                aria-label=".form-select-sm example"
                                                                style="border-radius: 0%; margin-top:-5px; margin-bottom:10px;">
                                                                <option selected>Select Division</option>
                                                                <option value="1">Dhaka</option>
                                                                <option value="2">Khulna</option>
                                                                <option value="3">Barisal</option>
                                                                <option value="3">Rajshahi</option>
                                                                <option value="3">Rangpur</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label><b>District</b></label>
                                                            <select class="form-select form-select-sm"
                                                                aria-label=".form-select-sm example"
                                                                style="border-radius: 0%; margin-top:-5px; margin-bottom:10px;">
                                                                <option selected>Select District</option>
                                                                <option value="1">Dhaka</option>
                                                                <option value="2">Faridpur</option>
                                                                <option value="3">Gazipur</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label><b>Thana/Upazila</b></label>
                                                            <select class="form-select form-select-sm"
                                                                aria-label=".form-select-sm example"
                                                                style="border-radius: 0%; margin-top:-5px; margin-bottom:10px;">
                                                                <option selected>Select Thana/Upazila</option>
                                                                <option value="1">Nabinagar</option>
                                                                <option value="2">Faridpur</option>
                                                                <option value="3">Gazipur</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label><b>Union</b></label>
                                                            <select class="form-select form-select-sm"
                                                                aria-label=".form-select-sm example"
                                                                style="border-radius: 0%; margin-top:-5px; margin-bottom:10px;">
                                                                <option selected>Select Union</option>
                                                                <option value="1">Nabinagar</option>
                                                                <option value="2">Faridpur</option>
                                                                <option value="3">Gazipur</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label><b>College Code</b></label>
                                                            <input type="number" class="form-control"
                                                                placeholder="Enter college code"
                                                                style="border-radius: 0%; margin-top:-5px; margin-bottom:10px">
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label><b>College Category</b></label>
                                                            <select class="form-select form-select-sm"
                                                                aria-label=".form-select-sm example"
                                                                style="border-radius: 0%; margin-top:-5px; margin-bottom:10px;">
                                                                <option selected>Select College Category</option>
                                                                <option value="1">Male</option>
                                                                <option value="2">Female</option>
                                                                <option value="3">Both</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label><b>College Type</b></label>
                                                            <select class="form-select form-select-sm"
                                                                aria-label=".form-select-sm example"
                                                                style="border-radius: 0%; margin-top:-5px; margin-bottom:10px;">
                                                                <option selected>Select College Type</option>
                                                                <option value="1">Govt</option>
                                                                <option value="2">Non-Govt</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label><b>College Group</b></label>
                                                            <select class="form-select form-select-sm"
                                                                aria-label=".form-select-sm example"
                                                                style="border-radius: 0%; margin-top:-5px; margin-bottom:10px;">
                                                                <option selected>Select College Group</option>
                                                                <option value="1">grp_a_g</option>
                                                                <option value="2">grp_a_ng</option>
                                                                <option value="3">grp_b_g</option>
                                                                <option value="4">grp_b_ng</option>
                                                                <option value="5">grp_c</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label><b>Select single/multiple digree</b></label>
                                                            <select id="multi_option" multiple name="native-select"
                                                                placeholder="Select digree"
                                                                data-silent-initial-value-set="false">
                                                                <option value="1">Degree (Pass)</option>
                                                                <option value="2">Honours</option>
                                                                <option value="3">Masters Preliminary</option>
                                                                <option value="4">Masters Final</option>
                                                                <option value="5">Professional (Honours)</option>
                                                                <option value="6">Professional (Masters)</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                                        <button class="btn me-md-2" type="button"
                                                            style="background-color: #5050B2; color:#fff;"><i
                                                                class="fa fa-search menu-icon"></i>
                                                            <span>Search</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-12">
            <div class="card" style="border-bottom:none;">
                <span
                    style="padding:10px; padding-left:12px; font-size:16px; color:#7A7A7A; font-family: 'Lato', sans-serif;"><b>Form
                        List (College wise)</b></span>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card" style="padding:10px; overflow-x:auto; border-top:none;">
                <table class="table table-striped table-bordered text-center" id="form_list_table">
                    <thead>
                        <tr id="grave">
                            <th id="gravey" scope="col">SL</th>
                            <th id="gravey" scope="col">College Code</th>
                            <th id="gravey" scope="col">College Name</th>
                            <th id="gravey" scope="col">Email</th>
                            <th id="gravey" scope="col">General info</th>
                            <th id="gravey" scope="col">Physical Facilities</th>
                            <th id="gravey" scope="col">Students Info</th>
                            <th id="gravey" scope="col">Teacher & Staff Info</th>
                            <th id="gravey" scope="col">Miscellaneous Affairs</th>
                            <th id="gravey" scope="col">Teacher List</th>
                            <th id="gravey" scope="col">Affiliation Info Statement</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="font-family: 'Lato', sans-serif;">
                            <th scope="row">1</th>
                            <th>1231</th>
                            <td>Dhaka Commerce College</td>
                            <td>dcc@gmail.com</td>
                            <td>
                                <button type="button" class="viewBtn" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    <i class="far fa-eye"></i>
                                </button>
                                <div class="modal fade" id="exampleModal" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content" id="printableArea">
                                            <div class="form_modal_header">
                                                <div class="row" style="margin-top:20px;">
                                                    <div class="col-md-3" style="margin-top:20px; margin-left:-30px;">
                                                        <!-- <button class="btn btn-success" type="button" onclick="printDiv('printableArea')" value="print a div!"><i
                                                                class="fa fa-print" aria-hidden="true"></i>
                                                            Print</button> -->

                                                        <button class="btn" type="button" onclick="myFunction()"
                                                            style="background-color: #A89924; color:#fff;"><i
                                                                class="fa fa-file-pdf-o menu-icon"></i>
                                                            <span>Export as pdf</span></button>
                                                    </div>
                                                    <div class="col-md-7 text-center">
                                                        <div class="text-center"
                                                            style="display:flex; text-align:center;">
                                                            <img id="modal_nu_logo"
                                                                src="{{asset('assets/images/logo1.png')}}" alt="logo" />
                                                            <span style="display:block">
                                                                <h5 id="form_modul_nu_header">জাতীয় বিশ্ববিদ্যালয়,
                                                                </h5>
                                                                <span style="font-size: 22px;">গাজীপুর</span>
                                                            </span>
                                                        </div>
                                                        <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
                                                    </div>
                                                    <div class="col-md-2 text-right">
                                                        <button type="button" class="btn rounded-circle"
                                                            data-bs-dismiss="modal"
                                                            style="margin-right:20px; background-color:#A31818; color:#fff;"
                                                            aria-label="Close"><i class="fa fa-close"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row" style="margin-top:-20px;">
                                                <div class="col-md-12" style="margin-left:65%;">
                                                    <div class="form-group"
                                                        style="margin-bottom:0px; display:flex; width:30%;">
                                                        <label style="margin-top:15px; ">জাতীয় বিশ্ববিদ্যালয় কোড:
                                                        </label>
                                                        <input type="number" class="form-control" value="5642"
                                                            name="collBnName" style="margin-left:10px;" style=""
                                                            disabled />
                                                    </div>

                                                    <div class="form-group"
                                                        style="margin-bottom:0px; display:flex; width:30%;">
                                                        <label class="col-form-label" style="margin-top:8px;">কলেজের
                                                            এমপিও কোড:
                                                        </label>
                                                        <input type="number" class="form-control" value="3302"
                                                            name="collBnName" style="margin-left:10px;" disabled />
                                                    </div>
                                                </div>
                                                <div class="col-md-12" style="margin-top:-1%;">
                                                    <span
                                                        style="float:center; margin-left:10px; font-size: 18px; font-weight: bold;">
                                                        ক. সাধারণ তথ্য</span>
                                                </div>
                                            </div>

                                            <div class="modal-body" style="margin-top:-30px;">
                                                <form class="form-sample">
                                                    <div class="row"
                                                        style="height:600px; overflow-y: scroll; padding:20px;">
                                                        <!-- Section (1/KA) -->
                                                        <div class="card"
                                                            style="margin:10px; border: 1px solid #BDBDBD; border-radius:0; padding: 20px; width: 100%;">
                                                            <h4 class="card-title"
                                                                style="margin-top:-30px; background-color:#fff; width:15%; font-size:16px;">
                                                                প্রতিষ্ঠানের নাম:</h4>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group" style="margin-bottom:0px;">
                                                                        <label class="col-form-label"
                                                                            style="float:left; margin-bottom:-5px;">
                                                                            বাংলা <span
                                                                                style="font-size:12px;">(অনুমতি/স্বীকৃতি/অধিভুক্তি
                                                                                পত্র অনুযায়ী)</span></label>
                                                                        <input type="text" class="form-control"
                                                                            value="ঢাকা কমার্স কলেজ" name="collBnName"
                                                                            disabled />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group" style="margin-bottom:0px;">
                                                                        <label class="col-form-label"
                                                                            style="float:left; margin-bottom:-5px;">
                                                                            ইংরেজি (ব্লক লেটার)</label>
                                                                        <input type="text" class="form-control"
                                                                            value="DHAKA COMMERCE COLLEGE"
                                                                            name="collBnName" disabled />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Section (1/KHA) -->
                                                        <div class="card"
                                                            style="margin:10px; border: 1px solid #D3D1D1; border-radius:0; padding: 20px; width: 100%;">
                                                            <h4 class="card-title"
                                                                style="margin-top:-30px; background-color:#fff; width:15%; font-size:16px;">
                                                                ঠিকানা:
                                                            </h4>
                                                            <div class="row">
                                                                <div class="col-md-12" style="margin-top:-10px;">
                                                                    <div class="form-group" style="margin-bottom:0px;">
                                                                        <label class="col-form-label"
                                                                            style="margin-bottom:-5px; float:left;">গ্রাম/হোল্ডিং
                                                                            নং ও রাস্তা:</label>
                                                                        <input type="text" class="form-control"
                                                                            value="Academic Building - 2, Commerce College Road"
                                                                            name="collBnName" disabled />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <div class="form-group" style="margin-bottom:0px;">
                                                                        <label class="col-form-label"
                                                                            style="margin-bottom:-5px; float:left;">ডাকঘর</label>
                                                                        <input type="text" class="form-control"
                                                                            value="Mirpur 1216" name="collBnName"
                                                                            disabled />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <div class="form-group" style="margin-bottom:0px;">
                                                                        <label class="col-form-label"
                                                                            style="margin-bottom:-5px; float:left;">পোস্ট
                                                                            কোড</label>
                                                                        <input type="number" class="form-control"
                                                                            value="1216" name="collBnName" disabled />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group" style="margin-bottom:0px;">
                                                                        <label class="col-form-label"
                                                                            style="margin-bottom:-5px; float:left;">ইউনিয়ন/ওয়ার্ড</label>
                                                                        <input type="text" class="form-control"
                                                                            value="Mirpur" name="collBnName" disabled />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group" style="margin-bottom:0px;">
                                                                        <label class="col-form-label"
                                                                            style="margin-bottom:-5px; float:left;">উপজেলা/থানা</label>
                                                                        <input type="text" class="form-control"
                                                                            value="Mirpur" name="collBnName" disabled />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group" style="margin-bottom:0px;">
                                                                        <label class="col-form-label"
                                                                            style="margin-bottom:-5px; float:left;">জেলা</label>
                                                                        <input type="text" class="form-control"
                                                                            value="Dhaka" name="collBnName" disabled />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group" style="margin-bottom:0px;">
                                                                        <label class="col-form-label"
                                                                            style="margin-bottom:-5px; float:left;">বিভাগ:</label>
                                                                        <input type="text" class="form-control"
                                                                            value="Dhaka" name="collBnName" disabled />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group" style="margin-bottom:0px;">
                                                                        <label class="col-form-label"
                                                                            style="margin-bottom:-5px; float:left;">ফোন:</label>
                                                                        <input type="tel" class="form-control"
                                                                            value="017037725818" name="collBnName"
                                                                            disabled />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group" style="margin-bottom:0px;">
                                                                        <label class="col-form-label"
                                                                            style="margin-bottom:-5px; float:left;">
                                                                            মোবাইল নং:</label>
                                                                        <input type="tel" class="form-control"
                                                                            value="29899560" name="collBnName"
                                                                            disabled />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group" style="margin-bottom:0px;">
                                                                        <label class="col-form-label"
                                                                            style="margin-bottom:-5px; float:left;">ফ্যাক্স</label>
                                                                        <input type="text" class="form-control"
                                                                            value="N/A" name="collBnName" disabled />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group" style="margin-bottom:0px;">
                                                                        <label class="col-form-label"
                                                                            style="margin-bottom:-5px; float:left;">ইমেইল</label>
                                                                        <input type="email" class="form-control"
                                                                            value="dcc@gmail.com" name="collBnName"
                                                                            disabled />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group" style="margin-bottom:0px;">
                                                                        <label class="col-form-label"
                                                                            style="margin-bottom:-5px; float:left;">ওয়েবসাইট</label>
                                                                        <input type="text" class="form-control"
                                                                            value="www.dcc.com" name="collBnName"
                                                                            disabled />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group" style="margin-bottom:0px;">
                                                                        <label class="col-form-label"
                                                                            style="margin-bottom:-5px; float:left;">জাতীয়
                                                                            সংসদ নির্বাচনী এলাকা:</label>
                                                                        <input type="text" class="form-control"
                                                                            value="Dhaka" name="collBnName" disabled />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group" style="margin-bottom:0px;">
                                                                        <label class="col-form-label"
                                                                            style="margin-bottom:-5px; float:left;">নম্বর</label>
                                                                        <input type="text" class="form-control"
                                                                            value="14" name="collBnName" disabled />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Section (2) -->
                                                        <div class="card"
                                                            style="margin:10px; border: 1px solid #D3D1D1; border-radius:0; padding: 20px; width: 100%;">
                                                            <!-- <h4 class="card-title"
                                                                style="margin-top:-28px; background-color:#fff; width:28%; font-size:16px;">
                                                                Establish at
                                                            </h4> -->
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group" style="margin-bottom:0px;">
                                                                        <label class="col-form-label"
                                                                            style="margin-bottom:-5px; float:left;">কলেজ
                                                                            প্রতিষ্ঠার তারিখ:</label>
                                                                        <input type="text" class="form-control"
                                                                            value="22/12/1997" name="collBnName"
                                                                            disabled />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Section (3) -->
                                                        <div class="card"
                                                            style="margin:10px; border: 1px solid #D3D1D1; border-radius:0; padding: 20px; width: 100%;">
                                                            <!-- <h4 class="card-title"
                                                                style="margin-top:-28px; background-color:#fff; width:28%; font-size:16px;">
                                                                Institutional info
                                                            </h4> -->
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <div class="form-group" style="margin-bottom:0px;">
                                                                        <label class="col-form-label"
                                                                            style="margin-bottom:-5px; float:left;">প্রতিষ্ঠান
                                                                            স্তর:</label>
                                                                        <div class="form-group"
                                                                            style="margin-bottom:0px;">
                                                                            <input type="text" class="form-control"
                                                                                value="স্নাতকোত্তর" name="collBnName"
                                                                                disabled />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <div class="form-group" style="margin-bottom:0px;">
                                                                        <label class="col-form-label"
                                                                            style="margin-bottom:-5px; float:left;">প্রতিষ্ঠানটির
                                                                            সর্বনিম্ন স্তর:</label>
                                                                        <input type="text" class="form-control"
                                                                            value="উচ্চ মাধ্যমিক" name="collBnName"
                                                                            disabled />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group" style="margin-bottom:0px;">
                                                                        <label class="col-form-label"
                                                                            style="margin-bottom:-5px; float:left;">ব্যবস্থাপনা:</label>
                                                                        <input type="text" class="form-control"
                                                                            value="বেসরকারি" name="collBnName"
                                                                            disabled />
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-2">
                                                                    <div class="form-group" style="margin-bottom:0px;">
                                                                        <label class="col-form-label"
                                                                            style="margin-bottom:-5px; float:left;">প্রতিষ্ঠানের
                                                                            ধরণ:</label>
                                                                        <input type="text" class="form-control"
                                                                            value="সহশিক্ষা" name="collBnName"
                                                                            disabled />
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-3">
                                                                    <div class="form-group" style="margin-bottom:0px;">
                                                                        <label class="col-form-label"
                                                                            style="margin-bottom:-5px; float:left;">ভৌগোলিক
                                                                            অবস্থান:</label>
                                                                        <input type="text" class="form-control"
                                                                            value="সমতল" name="collBnName" disabled />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Section (4) -->
                                                        <div class="card" style="margin:10px;
                                                            border: 1px solid #D3D1D1; 
                                                            border-radius:0; 
                                                            padding: 20px; width: 100%;">

                                                            <h4 class="card-title"
                                                                style="margin-top:-28px; margin-bottom:20px; background-color:#fff; width:24%; font-size:16px;">
                                                                স্বীকৃতি সংক্রান্ত তথ্য
                                                            </h4>

                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <table class="table border-secondary">
                                                                        <thead>
                                                                            <tr>
                                                                                <th scope="col">স্তর</th>
                                                                                <th scope="col">স্বীকৃতি/অনুমতি </th>
                                                                                <th scope="col">প্রথম অনুমতির তারিখ</th>
                                                                                <th scope="col">প্রথম স্বীকৃতির তারিখ
                                                                                </th>
                                                                                <th scope="col">সর্বশেষ স্বীকৃতি/অনুমতির
                                                                                    মেয়াদ শেষ হওয়ার তারিখ</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody style="text-align:left">
                                                                            <tr>
                                                                                <td>১। উচ্চ মাধ্যমিক</td>
                                                                                <td>
                                                                                    <input type="text" class=" border-0"
                                                                                        style="background:transparent;"
                                                                                        value="স্বীকৃতি প্রাপ্ত"
                                                                                        name="collBnName" disabled />
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text" class=" border-0"
                                                                                        style="background:transparent;"
                                                                                        value="N/A" name="collBnName"
                                                                                        disabled />
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text" class=" border-0"
                                                                                        style="background:transparent;"
                                                                                        value="22/12/1997"
                                                                                        name="collBnName" disabled />
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text" class=" border-0"
                                                                                        style="background:transparent;"
                                                                                        value="22/12/2040"
                                                                                        name="collBnName" disabled />
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>২। স্নাতক পাস</td>
                                                                                <td>
                                                                                    <input type="text" class=" border-0"
                                                                                        style="background:transparent;"
                                                                                        value="অনুমতি প্রাপ্ত"
                                                                                        name="collBnName" disabled />
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text" class=" border-0"
                                                                                        style="background:transparent;"
                                                                                        value="22/12/2005"
                                                                                        name="collBnName" disabled />
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text" class=" border-0"
                                                                                        style="background:transparent;"
                                                                                        value="N/A" name="collBnName"
                                                                                        disabled />
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text" class=" border-0"
                                                                                        style="background:transparent;"
                                                                                        value="22/12/2030"
                                                                                        name="collBnName" disabled />
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>৩। স্নাতক সম্মান</td>
                                                                                <td>
                                                                                    <input type="text" class=" border-0"
                                                                                        style="background:transparent;"
                                                                                        value="অনুমতি প্রাপ্ত"
                                                                                        name="collBnName" disabled />
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text" class=" border-0"
                                                                                        style="background:transparent;"
                                                                                        value="22/12/2010"
                                                                                        name="collBnName" disabled />
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text" class=" border-0"
                                                                                        style="background:transparent;"
                                                                                        value="N/A" name="collBnName"
                                                                                        disabled />
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text" class=" border-0"
                                                                                        style="background:transparent;"
                                                                                        value="22/12/2028"
                                                                                        name="collBnName" disabled />
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>৪। স্নাতকোত্তর</td>
                                                                                <td>
                                                                                    <input type="text" class=" border-0"
                                                                                        style="background:transparent;"
                                                                                        value="অনুমতি প্রাপ্ত"
                                                                                        name="collBnName" disabled />
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text" class=" border-0"
                                                                                        style="background:transparent;"
                                                                                        value="22/12/2016"
                                                                                        name="collBnName" disabled />
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text" class=" border-0"
                                                                                        style="background:transparent;"
                                                                                        value="N/A" name="collBnName"
                                                                                        disabled />
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text" class=" border-0"
                                                                                        style="background:transparent;"
                                                                                        value="22/12/2035"
                                                                                        name="collBnName" disabled />
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Section (5) -->
                                                        <div class="card" style="margin:10px;
                                                            border: 1px solid #D3D1D1; 
                                                            border-radius:0; 
                                                            padding: 20px; width: 100%;">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group" style="margin-bottom:0px;">
                                                                        <label class="col-form-label"
                                                                            style="margin-bottom:-5px; float:left;">প্রতিষ্ঠানটি
                                                                            কি এমপিওভুক্ত?</label>
                                                                        <input type="text" class="form-control"
                                                                            value="Yes" name="collBnName" disabled />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Section (6) -->
                                                        <div class="card" style="margin:10px;
                                                            border: 1px solid #D3D1D1; 
                                                            border-radius:0; 
                                                            padding: 20px; width: 100%;">
                                                            <h4 class="card-title"
                                                                style="margin-top:-28px; margin-bottom:20px; background-color:#fff; width:24%; font-size:16px;">
                                                                এমপিওভুক্ত হলে স্তর ও তারিখ
                                                            </h4>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <table class="table border-secondary">
                                                                        <thead>
                                                                            <tr>
                                                                                <th scope="col">এমপিওভুক্তির স্তর</th>
                                                                                <th scope="col">এমপিওভুক্তির তারিখ </th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody style="text-align:left">
                                                                            <tr>
                                                                                <td>১। উচ্চ মাধ্যমিক</td>
                                                                                <td>
                                                                                    <input type="text" class=" border-0"
                                                                                        style="background:transparent;"
                                                                                        value="22/12/2005"
                                                                                        name="collBnName" disabled />
                                                                                </td>

                                                                            </tr>
                                                                            <tr>
                                                                                <td>২। স্নাতক পাস</td>
                                                                                <td>
                                                                                    <input type="text" class=" border-0"
                                                                                        style="background:transparent;"
                                                                                        value="22/12/2010"
                                                                                        name="collBnName" disabled />
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>৩। স্নাতক সম্মান</td>
                                                                                <td>
                                                                                    <input type="text" class=" border-0"
                                                                                        style="background:transparent;"
                                                                                        value="22/12/2018"
                                                                                        name="collBnName" disabled />
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>৪। স্নাতকোত্তর</td>
                                                                                <td>
                                                                                    <input type="text" class=" border-0"
                                                                                        style="background:transparent;"
                                                                                        value="22/12/2020"
                                                                                        name="collBnName" disabled />
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Section (7) -->
                                                        <div class="card" style="margin:10px;
                                                            border: 1px solid #D3D1D1; 
                                                            border-radius:0; 
                                                            padding: 20px; width: 100%;">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group" style="margin-bottom:0px;">
                                                                        <label class="col-form-label"
                                                                            style="margin-bottom:-5px; float:left;">প্রতিষ্ঠানটির
                                                                            নিকটবর্তী প্রশাসনিক ইউনিট:
                                                                        </label>
                                                                        <input type="text" class="form-control"
                                                                            value="জেলা সদর" name="collBnName"
                                                                            disabled />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Section (8) -->
                                                        <div class="card" style="margin:10px;
                                                            border: 1px solid #D3D1D1; 
                                                            border-radius:0; 
                                                            padding: 20px; width: 100%;">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group" style="margin-bottom:0px;">
                                                                        <label class="col-form-label"
                                                                            style="margin-bottom:-5px; float:left;">প্রতিষ্ঠানটির
                                                                            নিকটবর্তী ইউনিটের দূরত্ব:
                                                                        </label>
                                                                        <input type="text" class="form-control"
                                                                            value="10 km" name="collBnName" disabled />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Section (9) -->
                                                        <div class="card" style="margin:10px;
                                                            border: 1px solid #D3D1D1; 
                                                            border-radius:0; 
                                                            padding: 20px; width: 100%;">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group" style="margin-bottom:0px;">
                                                                        <label class="col-form-label"
                                                                            style="margin-bottom:-5px; float:left;">নিকটবর্তী
                                                                            অনুরূপ শিক্ষা প্রতিষ্ঠান দূরত্ব:
                                                                        </label>
                                                                        <input type="text" class="form-control"
                                                                            value="2 km" name="collBnName" disabled />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Section (10) -->
                                                        <div class="card" style="margin:10px;
                                                            border: 1px solid #D3D1D1; 
                                                            border-radius:0; 
                                                            padding: 20px; width: 100%;">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group" style="margin-bottom:0px;">
                                                                        <label class="col-form-label"
                                                                            style="margin-bottom:-5px; float:left;">প্রতিষ্ঠানটি
                                                                            কোন এলাকায়:
                                                                        </label>
                                                                        <input type="text" class="form-control"
                                                                            value="সিটি কর্পোরেশন" name="collBnName"
                                                                            disabled />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Section (10) -->
                                                        <div class="card" style="margin:10px;
                                                            border: 1px solid #D3D1D1; 
                                                            border-radius:0; 
                                                            padding: 20px; width: 100%;">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group" style="margin-bottom:0px;">
                                                                        <label class="col-form-label"
                                                                            style="margin-bottom:-5px; float:left;">জাতীয়
                                                                            বিশ্ববিদ্যালয়ের অধিভুক্ত নিকটবর্তী ন্যূনতম
                                                                            ২ টি প্রতিষ্ঠানের নাম ও ঠিকানা:
                                                                        </label>
                                                                        <input type="text" class="form-control"
                                                                            value="Govt. Bangla College, Mirpur, Dhaka-1216"
                                                                            name="collBnName" disabled />
                                                                        <input type="text" class="form-control"
                                                                            value="BCIC COLLEGE, Mirpur,Dhaka-1216"
                                                                            name="collBnName" disabled />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Section (11) -->
                                                        <div class="card" style="margin:10px;
                                                            border: 1px solid #D3D1D1; 
                                                            border-radius:0; 
                                                            padding: 20px; width: 100%;">

                                                            <h4 class="card-title"
                                                                style="margin-top:-28px; margin-bottom:20px; background-color:#fff; width:24%; font-size:16px;">
                                                                গভর্নিং বডি/কমিটি সংক্রান্ত তথ্য
                                                            </h4>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group" style="margin-bottom:0px;">
                                                                        <label class="col-form-label"
                                                                            style="margin-bottom:-5px; float:left;">গভর্নিং
                                                                            বডির ধরন
                                                                        </label>
                                                                        <input type="text" class="form-control"
                                                                            value="নিয়মিত" name="collBnName"
                                                                            disabled />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group" style="margin-bottom:0px;">
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <label class="col-form-label"
                                                                                    style="margin-bottom:-5px; float:left;">গভর্নিং
                                                                                    বডি থাকলে:
                                                                                </label> <br>
                                                                            </div>

                                                                            <div class="col-md-6">
                                                                                <label class="col-form-label"
                                                                                    style="margin-bottom:-5px; float:left;">অনুমোদনের
                                                                                    তারিখ
                                                                                </label> <br>
                                                                                <input type="text" class="form-control"
                                                                                    value="01/01/2021" name="collBnName"
                                                                                    disabled />

                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <label class="col-form-label"
                                                                                    style="margin-bottom:-5px; float:left;">মেয়াদ
                                                                                    উত্তীর্ণের তারিখ
                                                                                </label> <br>
                                                                                <input type="text" class="form-control"
                                                                                    value="01/01/2025" name="collBnName"
                                                                                    disabled />
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group" style="margin-bottom:0px;">
                                                                        <label class="col-form-label"
                                                                            style="margin-bottom:-5px; float:left;">কমিটিতে
                                                                            মোট সদস্য সংখ্যা
                                                                        </label>
                                                                        <input type="text" class="form-control"
                                                                            value="10" name="collBnName" disabled />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group" style="margin-bottom:0px;">
                                                                        <label class="col-form-label"
                                                                            style="margin-bottom:-5px; float:left;">মহিলা
                                                                            সদস্য সংখ্যা
                                                                        </label>
                                                                        <input type="text" class="form-control"
                                                                            value="4" name="collBnName" disabled />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group" style="margin-bottom:0px;">
                                                                        <label class="col-form-label"
                                                                            style="margin-bottom:-5px; float:left;">বিগত
                                                                            এক বছরে কমিটির অনুষ্ঠিত সভার সংখ্যা:
                                                                        </label>
                                                                        <input type="text" class="form-control"
                                                                            value="5 টি" name="collBnName" disabled />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group" style="margin-bottom:0px;">
                                                                        <label class="col-form-label"
                                                                            style="margin-bottom:-5px; float:left;">কমিটির
                                                                            সদস্যদের নামের তালিকা এবং সভার উপস্থিত
                                                                            তালিকা সংযুক্ত করুন:
                                                                        </label> <br><br>
                                                                        <button class="btn btn-success"
                                                                            style="margin-left:-166%; margin-top:10px;"
                                                                            type="buttom">Download</button>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group" style="margin-bottom:0px;">
                                                                        <label class="col-form-label"
                                                                            style="margin-bottom:-5px; float:left;">প্রতিষ্ঠাতা
                                                                            সদস্য সংখ্যা কত?
                                                                        </label>
                                                                        <input type="text" class="form-control"
                                                                            value="5" name="collBnName" disabled />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <button type="button" class="viewBtn">
                                    <i class="far fa-eye"></i>
                                </button>
                            </td>
                            <td>
                                <button type="button" class="viewBtnnot">
                                    <i class="fas fa-eye-slash"></i>
                                </button>
                            </td>
                            <td>
                                <button type="button" class="viewBtnnot">
                                    <i class="fas fa-eye-slash"></i>
                                </button>
                            </td>
                            <td>
                                <button type="button" class="viewBtnnot">
                                    <i class="fas fa-eye-slash"></i>
                                </button>
                            </td>
                            <td>
                                <button type="button" class="viewBtnnot">
                                    <i class="fas fa-eye-slash"></i>
                                </button>
                            </td>
                            <td>
                                <button type="button" class="viewBtnnot">
                                    <i class="fas fa-eye-slash"></i>
                                </button>
                            </td>
                        </tr>
                        <tr style="font-family: 'Lato', sans-serif;">
                            <th scope="row">2</th>
                            <th>1231</th>
                            <td>Dhaka Commerce College</td>
                            <td>dcc@gmail.com</td>
                            <td>
                                <button type="button" class="viewBtn">
                                    <i class="far fa-eye"></i>
                                </button>
                            </td>
                            <td>
                                <button type="button" class="viewBtnnotsubmit">
                                    <i class="far fa-eye"></i>
                                </button>
                            </td>
                            <td>
                                <button type="button" class="viewBtnnot">
                                    <i class="fas fa-eye-slash"></i>
                                </button>
                            </td>
                            <td>
                                <button type="button" class="viewBtnnot">
                                    <i class="fas fa-eye-slash"></i>
                                </button>
                            </td>
                            <td>
                                <button type="button" class="viewBtnnot">
                                    <i class="fas fa-eye-slash"></i>
                                </button>
                            </td>
                            <td>
                                <button type="button" class="viewBtnnot">
                                    <i class="fas fa-eye-slash"></i>
                                </button>
                            </td>
                            <td>
                                <button type="button" class="viewBtnnot">
                                    <i class="fas fa-eye-slash"></i>
                                </button>
                            </td>
                        </tr>
                        <tr style="font-family: 'Lato', sans-serif;">
                            <th scope="row">3</th>
                            <th>1231</th>
                            <td>Dhaka Commerce College</td>
                            <td>dcc@gmail.com</td>
                            <td>
                                <button type="button" class="viewBtn">
                                    <i class="far fa-eye"></i>
                                </button>
                            </td>
                            <td>
                                <button type="button" class="viewBtnnotsubmit">
                                    <i class="far fa-eye"></i>
                                </button>
                            </td>
                            <td>
                                <button type="button" class="viewBtnnot">
                                    <i class="fas fa-eye-slash"></i>
                                </button>
                            </td>
                            <td>
                                <button type="button" class="viewBtnnot">
                                    <i class="fas fa-eye-slash"></i>
                                </button>
                            </td>
                            <td>
                                <button type="button" class="viewBtnnot">
                                    <i class="fas fa-eye-slash"></i>
                                </button>
                            </td>
                            <td>
                                <button type="button" class="viewBtnnot">
                                    <i class="fas fa-eye-slash"></i>
                                </button>
                            </td>
                            <td>
                                <button type="button" class="viewBtnnot">
                                    <i class="fas fa-eye-slash"></i>
                                </button>
                            </td>
                        </tr>
                        <tr style="font-family: 'Lato', sans-serif;">
                            <th scope="row">4</th>
                            <th>1231</th>
                            <td>Dhaka Commerce College</td>
                            <td>dcc@gmail.com</td>
                            <td>
                                <button type="button" class="viewBtnnotsubmit">
                                    <i class="far fa-eye"></i>
                                </button>
                            </td>
                            <td>
                                <button type="button" class="viewBtn">
                                    <i class="far fa-eye"></i>
                                </button>
                            </td>
                            <td>
                                <button type="button" class="viewBtnnot">
                                    <i class="fas fa-eye-slash"></i>
                                </button>
                            </td>
                            <td>
                                <button type="button" class="viewBtnnot">
                                    <i class="fas fa-eye-slash"></i>
                                </button>
                            </td>
                            <td>
                                <button type="button" class="viewBtnnot">
                                    <i class="fas fa-eye-slash"></i>
                                </button>
                            </td>
                            <td>
                                <button type="button" class="viewBtnnot">
                                    <i class="fas fa-eye-slash"></i>
                                </button>
                            </td>
                            <td>
                                <button type="button" class="viewBtnnot">
                                    <i class="fas fa-eye-slash"></i>
                                </button>
                            </td>
                        </tr>
                        <tr style="font-family: 'Lato', sans-serif;">
                            <th scope="row">5</th>
                            <th>1231</th>
                            <td>Dhaka Commerce College</td>
                            <td>dcc@gmail.com</td>
                            <td>
                                <button type="button" class="viewBtn">
                                    <i class="far fa-eye"></i>
                                </button>
                            </td>
                            <td>
                                <button type="button" class="viewBtn">
                                    <i class="far fa-eye"></i>
                                </button>
                            </td>
                            <td>
                                <button type="button" class="viewBtnnot">
                                    <i class="fas fa-eye-slash"></i>
                                </button>
                            </td>
                            <td>
                                <button type="button" class="viewBtnnot">
                                    <i class="fas fa-eye-slash"></i>
                                </button>
                            </td>
                            <td>
                                <button type="button" class="viewBtnnot">
                                    <i class="fas fa-eye-slash"></i>
                                </button>
                            </td>
                            <td>
                                <button type="button" class="viewBtnnot">
                                    <i class="fas fa-eye-slash"></i>
                                </button>
                            </td>
                            <td>
                                <button type="button" class="viewBtnnot">
                                    <i class="fas fa-eye-slash"></i>
                                </button>
                            </td>
                        </tr>
                        <tr style="font-family: 'Lato', sans-serif;">
                            <th scope="row">6</th>
                            <th>1231</th>
                            <td>Dhaka Commerce College</td>
                            <td>dcc@gmail.com</td>
                            <td>
                                <button type="button" class="viewBtnnotsubmit">
                                    <i class="far fa-eye"></i>
                                </button>
                            </td>
                            <td>
                                <button type="button" class="viewBtnnotsubmit">
                                    <i class="far fa-eye"></i>
                                </button>
                            </td>
                            <td>
                                <button type="button" class="viewBtnnot">
                                    <i class="fas fa-eye-slash"></i>
                                </button>
                            </td>
                            <td>
                                <button type="button" class="viewBtnnot">
                                    <i class="fas fa-eye-slash"></i>
                                </button>
                            </td>
                            <td>
                                <button type="button" class="viewBtnnot">
                                    <i class="fas fa-eye-slash"></i>
                                </button>
                            </td>
                            <td>
                                <button type="button" class="viewBtnnot">
                                    <i class="fas fa-eye-slash"></i>
                                </button>
                            </td>
                            <td>
                                <button type="button" class="viewBtnnot">
                                    <i class="fas fa-eye-slash"></i>
                                </button>
                            </td>
                        </tr>
                        <tr style="font-family: 'Lato', sans-serif;">
                            <th scope="row">7</th>
                            <th>1231</th>
                            <td>Dhaka Commerce College</td>
                            <td>dcc@gmail.com</td>
                            <td>
                                <button type="button" class="viewBtn">
                                    <i class="far fa-eye"></i>
                                </button>
                            </td>
                            <td>
                                <button type="button" class="viewBtn">
                                    <i class="far fa-eye"></i>
                                </button>
                            </td>
                            <td>
                                <button type="button" class="viewBtnnot">
                                    <i class="fas fa-eye-slash"></i>
                                </button>
                            </td>
                            <td>
                                <button type="button" class="viewBtnnot">
                                    <i class="fas fa-eye-slash"></i>
                                </button>
                            </td>
                            <td>
                                <button type="button" class="viewBtnnot">
                                    <i class="fas fa-eye-slash"></i>
                                </button>
                            </td>
                            <td>
                                <button type="button" class="viewBtnnot">
                                    <i class="fas fa-eye-slash"></i>
                                </button>
                            </td>
                            <td>
                                <button type="button" class="viewBtnnot">
                                    <i class="fas fa-eye-slash"></i>
                                </button>
                            </td>
                        </tr>
                        <tr style="font-family: 'Lato', sans-serif;">
                            <th scope="row">8</th>
                            <th>1231</th>
                            <td>Dhaka Commerce College</td>
                            <td>dcc@gmail.com</td>
                            <td>
                                <button type="button" class="viewBtn">
                                    <i class="far fa-eye"></i>
                                </button>
                            </td>
                            <td>
                                <button type="button" class="viewBtn">
                                    <i class="far fa-eye"></i>
                                </button>
                            </td>
                            <td>
                                <button type="button" class="viewBtnnot">
                                    <i class="fas fa-eye-slash"></i>
                                </button>
                            </td>
                            <td>
                                <button type="button" class="viewBtnnot">
                                    <i class="fas fa-eye-slash"></i>
                                </button>
                            </td>
                            <td>
                                <button type="button" class="viewBtnnot">
                                    <i class="fas fa-eye-slash"></i>
                                </button>
                            </td>
                            <td>
                                <button type="button" class="viewBtnnot">
                                    <i class="fas fa-eye-slash"></i>
                                </button>
                            </td>
                            <td>
                                <button type="button" class="viewBtnnot">
                                    <i class="fas fa-eye-slash"></i>
                                </button>
                            </td>
                        </tr>
                        <tr style="font-family: 'Lato', sans-serif;">
                            <th scope="row">9</th>
                            <th>1231</th>
                            <td>Dhaka Commerce College</td>
                            <td>dcc@gmail.com</td>
                            <td>
                                <button type="button" class="viewBtnnotsubmit">
                                    <i class="far fa-eye"></i>
                                </button>
                            </td>
                            <td>
                                <button type="button" class="viewBtn">
                                    <i class="far fa-eye"></i>
                                </button>
                            </td>
                            <td>
                                <button type="button" class="viewBtnnot">
                                    <i class="fas fa-eye-slash"></i>
                                </button>
                            </td>
                            <td>
                                <button type="button" class="viewBtnnot">
                                    <i class="fas fa-eye-slash"></i>
                                </button>
                            </td>
                            <td>
                                <button type="button" class="viewBtnnot">
                                    <i class="fas fa-eye-slash"></i>
                                </button>
                            </td>
                            <td>
                                <button type="button" class="viewBtnnot">
                                    <i class="fas fa-eye-slash"></i>
                                </button>
                            </td>
                            <td>
                                <button type="button" class="viewBtnnot">
                                    <i class="fas fa-eye-slash"></i>
                                </button>
                            </td>
                        </tr>
                        <tr style="font-family: 'Lato', sans-serif;">
                            <th scope="row">10</th>
                            <th>1231</th>
                            <td>Dhaka Commerce College</td>
                            <td>dcc@gmail.com</td>
                            <td>
                                <button type="button" class="viewBtn">
                                    <i class="far fa-eye"></i>
                                </button>
                            </td>
                            <td>
                                <button type="button" class="viewBtnnotsubmit">
                                    <i class="far fa-eye"></i>
                                </button>
                            </td>
                            <td>
                                <button type="button" class="viewBtnnot">
                                    <i class="fas fa-eye-slash"></i>
                                </button>
                            </td>
                            <td>
                                <button type="button" class="viewBtnnot">
                                    <i class="fas fa-eye-slash"></i>
                                </button>
                            </td>
                            <td>
                                <button type="button" class="viewBtnnot">
                                    <i class="fas fa-eye-slash"></i>
                                </button>
                            </td>
                            <td>
                                <button type="button" class="viewBtnnot">
                                    <i class="fas fa-eye-slash"></i>
                                </button>
                            </td>
                            <td>
                                <button type="button" class="viewBtnnot">
                                    <i class="fas fa-eye-slash"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <nav aria-label="Page navigation example" style="margin-top:10px; border:0px;">
                <ul class="pagination justify-content-end">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true"><i class="fa fa-chevron-left"></i></a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#"><i class="fa fa-chevron-right"></i></a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>

<script>
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        window.print();

        document.body.innerHTML = originalContents;
    }

</script>

@endsection
