<?php
include_once 'header.php';
?>

<div class="container">

<div class="header">
<h6>Legislative Personnel / Legilators Profile</h6>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" href="#mainModal">Add Legislators</button>
</div>

<div class="feed">
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Photo</th>
      <th scope="col">Legilators Profile</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><img src="images/🤓.png" alt=""></td>
      <td>ESCUTINLL, LARRY GALINATO</td>
      <td><button type="button" class="btn btn-success">Edit</button></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td><img src="images/🤓.png" alt=""></td>
      <td>DIEGAS, MARNIEL DAN GLORIA</td>
      <td><button type="button" class="btn btn-success">Edit</button></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td><img src="images/🤓.png" alt=""></td>
      <td>PARPAN, RUBEN D</td>
      <td><button type="button" class="btn btn-success">Edit</button></td>
    </tr>
  </tbody>
</table>
</div>
</div>

<!-- MAIN MODAL -->
<div class="modal fade" id="mainModal" aria-hidden="true" data-bs-backdrop="static" aria-labelledby="mainModalLabel" tabindex="-1">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="mainModalLabel">Legilators Profile</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="first-tab" data-bs-toggle="tab" data-bs-target="#first" type="button" role="tab" aria-controls="first" aria-selected="true">Personal Info</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="second-tab" data-bs-toggle="tab" data-bs-target="#second" type="button" role="tab" aria-controls="second" aria-selected="false">Insurance Info</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="third-tab" data-bs-toggle="tab" data-bs-target="#third" type="button" role="tab" aria-controls="third" aria-selected="false">Person to Contact</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="fourth-tab" data-bs-toggle="tab" data-bs-target="#fourth" type="button" role="tab" aria-controls="fourth" aria-selected="false">Image Profile</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="first" role="tabpanel" aria-labelledby="first-tab">
                    <div class="row p-3">
                        <div class="col-sm-12 col-md-6 col-lg-3 p-2">
                            <label >ID NUMBER</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3 p-2">
                            <label >STATUS</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3 p-2">
                            <label >LAST NAME</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3 p-2">
                            <label >FIRST NAME</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3 p-2">
                            <label >MIDDLE NAME</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3 p-2">
                            <label >SEX</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3 p-2">
                            <label >CIVIL STATUS</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3 p-2">
                            <label >BIRTH DATE</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3 p-2">
                            <label >EDUCATIONAL ATTAINMENT</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3 p-2">
                            <label >CONTACT NO.</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3 p-2">
                            <label >EMAIL ADDRESS</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3 p-2">
                            <label >RESIDENTIAL ADDRESS</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="second" role="tabpanel" aria-labelledby="second-tab">
                <div class="row p-3">
                        <div class="col-sm-12 col-md-6 col-lg-3 p-2">
                            <label >SSS ID</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3 p-2">
                            <label >GSIS ID NO.</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3 p-2">
                            <label >TIN NO. ID</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3 p-2">
                            <label >PHILHEALTH ID</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3 p-2">
                            <label >PAG-IBIG</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3 p-2">
                            <label >ELIGIBILITY / LICENCE NO.</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3 p-2">
                            <label >DATE ELECTED</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3 p-2">
                            <label >DATE ENDED</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="third" role="tabpanel" aria-labelledby="third-tab">
                <div class="row p-3">
                        <div class="col-sm-12 col-md-6 col-lg-3 p-2">
                            <label >NAME</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3 p-2">
                            <label >CONTACT NO.</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3 p-2">
                            <label >RELATIONSHIP</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="fourth" role="tabpanel" aria-labelledby="fourth-tab">
                <div class="legislators-image">
                        <img src="images/🤓.png" alt="">
                        <div class="mb-3">
                        <input class="form-control" type="file" id="formFile">
                        </div>
                </div>
                </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#addModal" data-bs-toggle="modal" data-bs-dismiss="modal">Add Legislator</button>
        <button class="btn btn-primary" data-bs-target="#updateModal" data-bs-toggle="modal" data-bs-dismiss="modal">Edit Legislator</button>
      </div>
    </div>
  </div>
</div>

<!-- ADD MODAL -->
<div class="modal fade" id="addModal" aria-hidden="true" data-bs-backdrop="static" aria-labelledby="addModalLabel" tabindex="-1">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addModalLabel">Add Legislator</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="addfirst-tab" data-bs-toggle="tab" data-bs-target="#addfirst" type="button" role="tab" aria-controls="addfirst" aria-selected="true">Personal Info</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="addsecond-tab" data-bs-toggle="tab" data-bs-target="#addsecond" type="button" role="tab" aria-controls="addsecond" aria-selected="false">Insurance Info</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="addthird-tab" data-bs-toggle="tab" data-bs-target="#addthird" type="button" role="tab" aria-controls="addthird" aria-selected="false">Person to Contact</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="addfourth-tab" data-bs-toggle="tab" data-bs-target="#addfourth" type="button" role="tab" aria-controls="addfourth" aria-selected="false">Image Profile</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="addfirst" role="tabpanel" aria-labelledby="addfirst-tab">
                    <div class="row p-3">
                        <div class="col-sm-12 col-md-6 col-lg-3 p-2">
                            <label >ID NUMBER</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3 p-2">
                            <label >STATUS</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3 p-2">
                            <label >LAST NAME</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3 p-2">
                            <label >FIRST NAME</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3 p-2">
                            <label >MIDDLE NAME</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3 p-2">
                            <label >SEX</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3 p-2">
                            <label >CIVIL STATUS</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3 p-2">
                            <label >BIRTH DATE</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3 p-2">
                            <label >EDUCATIONAL ATTAINMENT</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3 p-2">
                            <label >CONTACT NO.</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3 p-2">
                            <label >EMAIL ADDRESS</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3 p-2">
                            <label >RESIDENTIAL ADDRESS</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="addsecond" role="tabpanel" aria-labelledby="addsecond-tab">
                <div class="row p-3">
                        <div class="col-sm-12 col-md-6 col-lg-3 p-2">
                            <label >SSS ID</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3 p-2">
                            <label >GSIS ID NO.</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3 p-2">
                            <label >TIN NO. ID</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3 p-2">
                            <label >PHILHEALTH ID</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3 p-2">
                            <label >PAG-IBIG</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3 p-2">
                            <label >ELIGIBILITY / LICENCE NO.</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3 p-2">
                            <label >DATE ELECTED</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3 p-2">
                            <label >DATE ENDED</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="addthird" role="tabpanel" aria-labelledby="addthird-tab">
                <div class="row p-3">
                        <div class="col-sm-12 col-md-6 col-lg-3 p-2">
                            <label >NAME</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3 p-2">
                            <label >CONTACT NO.</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3 p-2">
                            <label >RELATIONSHIP</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="addfourth" role="tabpanel" aria-labelledby="addfourth-tab">
                <div class="legislators-image">
                        <img src="images/🤓.png" alt="">
                        <div class="mb-3">
                        <input class="form-control" type="file" id="formFile">
                        </div>
                </div>
                </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#mainModal" data-bs-toggle="modal" data-bs-dismiss="modal">Back to main</button>
      </div>
    </div>
  </div>
</div>

<!-- UPDATE MODAL -->
<div class="modal fade" id="updateModal" aria-hidden="true" data-bs-backdrop="static" aria-labelledby="updateModalLabel" tabindex="-1">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="updateModalLabel">Update Legislator</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="updatefirst-tab" data-bs-toggle="tab" data-bs-target="#updatefirst" type="button" role="tab" aria-controls="updatefirst" aria-selected="true">Personal Info</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="updatesecond-tab" data-bs-toggle="tab" data-bs-target="#updatesecond" type="button" role="tab" aria-controls="updatesecond" aria-selected="false">Insurance Info</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="updatethird-tab" data-bs-toggle="tab" data-bs-target="#updatethird" type="button" role="tab" aria-controls="updatethird" aria-selected="false">Person to Contact</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="updatefourth-tab" data-bs-toggle="tab" data-bs-target="#updatefourth" type="button" role="tab" aria-controls="updatefourth" aria-selected="false">Image Profile</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="updatefirst" role="tabpanel" aria-labelledby="updatefirst-tab">
                    <div class="row p-3">
                        <div class="col-sm-12 col-md-6 col-lg-3 p-2">
                            <label >ID NUMBER</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3 p-2">
                            <label >STATUS</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3 p-2">
                            <label >LAST NAME</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3 p-2">
                            <label >FIRST NAME</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3 p-2">
                            <label >MIDDLE NAME</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3 p-2">
                            <label >SEX</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3 p-2">
                            <label >CIVIL STATUS</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3 p-2">
                            <label >BIRTH DATE</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3 p-2">
                            <label >EDUCATIONAL ATTAINMENT</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3 p-2">
                            <label >CONTACT NO.</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3 p-2">
                            <label >EMAIL ADDRESS</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3 p-2">
                            <label >RESIDENTIAL ADDRESS</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="updatesecond" role="tabpanel" aria-labelledby="updatesecond-tab">
                <div class="row p-3">
                        <div class="col-sm-12 col-md-6 col-lg-3 p-2">
                            <label >SSS ID</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3 p-2">
                            <label >GSIS ID NO.</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3 p-2">
                            <label >TIN NO. ID</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3 p-2">
                            <label >PHILHEALTH ID</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3 p-2">
                            <label >PAG-IBIG</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3 p-2">
                            <label >ELIGIBILITY / LICENCE NO.</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3 p-2">
                            <label >DATE ELECTED</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3 p-2">
                            <label >DATE ENDED</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="updatethird" role="tabpanel" aria-labelledby="updatethird-tab">
                <div class="row p-3">
                        <div class="col-sm-12 col-md-6 col-lg-3 p-2">
                            <label >NAME</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3 p-2">
                            <label >CONTACT NO.</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3 p-2">
                            <label >RELATIONSHIP</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="updatefourth" role="tabpanel" aria-labelledby="updatefourth-tab">
                <div class="legislators-image">
                        <img src="images/🤓.png" alt="">
                        <div class="mb-3">
                        <input class="form-control" type="file" id="formFile">
                        </div>
                </div>
                </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#mainModal" data-bs-toggle="modal" data-bs-dismiss="modal">Back to main</button>
      </div>
    </div>
  </div>
</div>

<?php
include_once 'footer.php'
?>
