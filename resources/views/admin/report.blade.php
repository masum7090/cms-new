@extends('layouts.master')

@section('content')
<div class="content-wrapper">
    <div class="row" style="margin-bottom:20px;">
        <div class="col-md-12">
            <div class="card" style="border-bottom:none;">
                <span
                    style="padding:10px; padding-left:20px; font-size:16px; color:#857C7C; font-family: 'Lato', sans-serif;"><b>Custom
                        Search</b></span>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card" style="padding:20px; font-family: 'Lato', sans-serif;">
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
                            <button onclick="show_RESULT('1')" class="btn me-md-2" type="button"
                                style="background-color: #5050B2; color:#fff;"><i
                                    class="fa fa-search menu-icon"></i><span> Search</span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12" id="result">
            <div class="card border-bottom-0" style="margin-top:20px; border-bottom:none; overflow:hidden;">
                <div class="row">
                    <div class="col-md-12" style="background-color: #5B5B5B; color:#fff; text-align:center; padding:8px;">
                        <span style="padding-left:10px;">Select Columns</span>
                    </div>
                </div>
                <div class="row" style="padding-left:30px; padding-top:10px; padding-bottom:10px; text-align:center;">
                    <div class="col-md-2">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input">
                            college_code
                        </label>
                    </div>
                    <div class="col-md-2">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input">
                            college_name
                        </label>
                    </div>
                    <div class="col-md-2">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input">
                            principal_mobile
                        </label>
                    </div>
                    <div class="col-md-1">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input">
                            email
                        </label>
                    </div>
                    <div class="col-md-2">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input">
                            institute_level
                        </label>
                    </div>
                    <div class="col-md-2">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input">
                            management_type
                        </label>
                    </div>
                    <div class="col-md-2">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input">
                            institute_type
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" style="margin-bottom:20px;">
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button class="btn me-md-2" type="button" style="background-color: #5050B2; color:#fff;"><i
                                    class="	fa fa-server menu-icon"></i>
                                <span> View Table</span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card border-top-0">
                <table class="table table-striped table-bordered text-center" id="form_list_table" style="padding:10px; overflow-x:auto; border-top:none; border-top:none;">
                    <thead>
                        <tr id="grave">
                            <th id="gravey" scope="col">sl</th>
                            <th id="gravey" scope="col">College Code</th>
                            <th id="gravey" scope="col">College Name</th>
                            <th id="gravey" scope="col">Email</th>
                            <th id="gravey" scope="col">Principal Mobile</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="font-family: 'Lato', sans-serif;">
                            <th scope="row">1</th>
                            <th>1231</th>
                            <td>Dhaka Commerce College</td>
                            <td>dcc@gmail.com</td>
                            <td>01723758518</td>
                        </tr>
                        <tr style="font-family: 'Lato', sans-serif;">
                            <th scope="row">2</th>
                            <th>1234</th>
                            <td>Dhaka City College</td>
                            <td>dc_college@gmail.com</td>
                            <td>01723785678</td>
                        </tr>
                        <tr style="font-family: 'Lato', sans-serif;">
                            <th scope="row">3</th>
                            <th>1365</th>
                            <td>Dhaka College</td>
                            <td>dc@gmail.com</td>
                            <td>01975468519</td>
                        </tr>
                    </tbody>
                </table>
                <div class="row" style="margin-top:30px; margin-bottom:30px;">
                    <div class="col-md-12">
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button class="btn me-md-2" type="button" style="background-color: #B03627; color:#fff;"><i
                                    class="fa fa-times menu-icon"></i>
                                <span>Reset</span></button>
                            <button class="btn me-md-2" type="button" style="background-color: #24A87A; color:#fff;"><i
                                    class="fa fa-file-excel-o menu-icon"></i>
                                <span>Export as csv</span></button>
                            <button class="btn me-md-2" type="button" style="background-color: #A89924; color:#fff;"><i
                                    class="fa fa-file-pdf-o menu-icon"></i>
                                <span>Export as pdf</span></button>
                            <button class="btn me-md-2" type="button" style="background-color: #3D850C; color:#fff;"><i
                                    class="fa fa-print menu-icon"></i>
                                <span>Print</span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    function show_RESULT(id) {

    }

</script>
@endsection
