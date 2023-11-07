<?php
include_once 'header.php';
?>

<div class="container">

<div class="header">
<h6>Manage Legislative Acivity / Manage Session</h6>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" href="#mainModal">Add Session</button>
</div>

<div class="feed">
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Session details</th>
      <th scope="col">Attendance</th>
      <th scope="col">Encoded by</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Session No. 036-2023</td>
      <td>Attendance</td>
      <td>jmnasayao</td>
      <td><button type="button" class="btn btn-success">Edit</button></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Session No. 036-2023</td>
      <td>Attendance</td>
      <td>jmnasayao</td>
      <td><button type="button" class="btn btn-success">Edit</button></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Session No. 036-2023</td>
      <td>Attendance</td>
      <td>jmnasayao</td>
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
        <h5 class="modal-title" id="mainModalLabel">Session</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
            <div class="row p-3">
                <div class="col-sm-12 col-md-6 col-lg-3 p-2">
                    <label>SESSION TRACKING NO.</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 p-2">
                    <label>SESSION NUMBER</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 p-2">
                    <label>LEGISLATION YEAR</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 p-2">
                    <label>SESSION DATE</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 p-2">
                    <label>SESSION TYPE</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 p-2">
                    <label>PRESIDING OFFICER</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="session-table p-3">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                        <th scope="col">SESSION TRACKING NO.</th>
                        <th scope="col">SESSION NUMBER</th>
                        <th scope="col">LEGISLATION YEAR</th>
                        <th scope="col">SESSION DATE</th>
                        <th scope="col">SESSION TYPE</th>
                        <th scope="col">PRESIDING OFFICER</th>
                        </tr>
                    </thead>
                <tbody>
                    <tr>
                        <td>display all entire data</td>
                        <td>display all entire data</td>
                        <td>display all entire data</td>
                        <td>display all entire data</td>
                        <td>display all entire data</td>
                        <td>display all entire data</td>
                    </tr>
                    <tr>
                        <td>display all entire data</td>
                        <td>display all entire data</td>
                        <td>display all entire data</td>
                        <td>display all entire data</td>
                        <td>display all entire data</td>
                        <td>display all entire data</td>
                    </tr>
                    <tr>
                        <td>display all entire data</td>
                        <td>display all entire data</td>
                        <td>display all entire data</td>
                        <td>display all entire data</td>
                        <td>display all entire data</td>
                        <td>display all entire data</td>
                    </tr>
                </tbody>
                </table>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#addModal" data-bs-toggle="modal" data-bs-dismiss="modal">Add Session</button>
        <button class="btn btn-primary" data-bs-target="#updateModal" data-bs-toggle="modal" data-bs-dismiss="modal">Edit Session</button>
      </div>
    </div>
  </div>
</div>

<!-- ADD MODAL -->
<div class="modal fade" id="addModal" aria-hidden="true" data-bs-backdrop="static" aria-labelledby="addModalLabel" tabindex="-1">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addModalLabel">Add Session</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
            <div class="row p-3">
                <div class="col-sm-12 col-md-6 col-lg-3 p-1">
                    <label>SESSION TRACKING NO.</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 p-1">
                    <label>SESSION NUMBER</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 p-1">
                    <label>LEGISLATION YEAR</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 p-1">
                    <label>SESSION DATE</label>
                    <input type="date" class="form-control">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 p-1">
                    <label>SESSION TYPE</label>
                    <select class="form-select">
                    <option value="1" selected>Regular Session</option>
                    <option value="2">Regular Session</option>
                    <option value="3">Regular Session</option>
                    </select>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 p-1">
                    <label>PRESIDING OFFICER</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 p-1">
                    <label>MINUTES OF SESSION</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 p-1">
                    <label>JOURNAL OF SESSION</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="addfirst-tab" data-bs-toggle="tab" data-bs-target="#addfirst" type="button" role="tab" aria-controls="addfirst" aria-selected="true">Attendance</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="addsecond-tab" data-bs-toggle="tab" data-bs-target="#addsecond" type="button" role="tab" aria-controls="addsecond" aria-selected="false">I dont know</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="addthird-tab" data-bs-toggle="tab" data-bs-target="#addthird" type="button" role="tab" aria-controls="addthird" aria-selected="false">Document Category</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="addfirst" role="tabpanel" aria-labelledby="addfirst-tab">
                    <div class="session-table p-3">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                <th scope="col">NAMES OF LEGISLATURE</th>
                                <th scope="col">DESIGNATION</th>
                                <th scope="col">REMARKS</th>
                                </tr>
                            </thead>
                        <tbody>
                            <tr>
                                <td>display all entire data</td>
                                <td>display all entire data</td>
                                <td class="remarks">
                                <select class="form-select custom-select">
                                <option value="1" selected>Absent</option>
                                <option value="2">Present</option>
                                <option value="3">On-Leave</option>
                                <option value="4">Office Business</option>
                                </select>
                                </td>
                            </tr>
                            <tr>
                                <td>display all entire data</td>
                                <td>display all entire data</td>
                                <td class="remarks">
                                <select class="form-select custom-select">
                                <option value="1" selected>Absent</option>
                                <option value="2">Present</option>
                                <option value="3">On-Leave</option>
                                <option value="4">Office Business</option>
                                </select>
                                </td>
                            </tr>
                            <tr>
                                <td>display all entire data</td>
                                <td>display all entire data</td>
                                <td class="remarks">
                                <select class="form-select custom-select">
                                <option value="1" selected>Absent</option>
                                <option value="2">Present</option>
                                <option value="3">On-Leave</option>
                                <option value="4">Office Business</option>
                                </select>
                                </td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="addsecond" role="tabpanel" aria-labelledby="addsecond-tab">
                <div class="session-table p-3">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                <th scope="col">ORDINANCES PASSED</th>
                                <th scope="col">RESOLUTION PASSED</th>
                                <th scope="col">COMMITTEE REPORTS RENDERED</th>
                                </tr>
                            </thead>
                        <tbody>
                            <tr>
                                <td>display all entire data</td>
                                <td>display all entire data</td>
                                <td>display all entire data</td>
                            </tr>
                            <tr>
                                <td>display all entire data</td>
                                <td>display all entire data</td>
                                <td>display all entire data</td>
                            </tr>
                            <tr>
                                <td>display all entire data</td>
                                <td>display all entire data</td>
                                <td>display all entire data</td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="addthird" role="tabpanel" aria-labelledby="addthird-tab">
                <div class="session-table p-3">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                <th scope="col">PROPOSED ORDINANCE</th>
                                <th scope="col">PROPOSED RESOLUTION</th>
                                <th scope="col">PETITIONS AND REQUEST</th>
                                <th scope="col">COMMUNICATIONS</th>
                                </tr>
                            </thead>
                        <tbody>
                            <tr>
                                <td>display all entire data</td>
                                <td>display all entire data</td>
                                <td>display all entire data</td>
                                <td>display all entire data</td>
                            </tr>
                            <tr>
                                <td>display all entire data</td>
                                <td>display all entire data</td>
                                <td>display all entire data</td>
                                <td>display all entire data</td>
                            </tr>
                            <tr>
                                <td>display all entire data</td>
                                <td>display all entire data</td>
                                <td>display all entire data</td>
                                <td>display all entire data</td>
                            </tr>
                        </tbody>
                        </table>
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
        <h5 class="modal-title" id="updateModalLabel">Update Session</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
            <div class="row p-3">
                <div class="col-sm-12 col-md-6 col-lg-3 p-1">
                    <label>SESSION TRACKING NO.</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 p-1">
                    <label>SESSION NUMBER</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 p-1">
                    <label>LEGISLATION YEAR</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 p-1">
                    <label>SESSION DATE</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 p-1">
                    <label>SESSION TYPE</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 p-1">
                    <label>PRESIDING OFFICER</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 p-1">
                    <label>MINUTES OF SESSION</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 p-1">
                    <label>JOURNAL OF SESSION</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="updatefirst-tab" data-bs-toggle="tab" data-bs-target="#updatefirst" type="button" role="tab" aria-controls="updatefirst" aria-selected="true">Attendance</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="updatevsecond-tab" data-bs-toggle="tab" data-bs-target="#updatesecond" type="button" role="tab" aria-controls="updatesecond" aria-selected="false">I dont know</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="updatethird-tab" data-bs-toggle="tab" data-bs-target="#updatethird" type="button" role="tab" aria-controls="updatethird" aria-selected="false">Document Category</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="updatefirst" role="tabpanel" aria-labelledby="updatefirst-tab">
                    <div class="session-table p-3">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                <th scope="col">NAMES OF LEGISLATURE</th>
                                <th scope="col">DESIGNATION</th>
                                <th scope="col">REMARKS</th>
                                </tr>
                            </thead>
                        <tbody>
                            <tr>
                                <td>display all entire data</td>
                                <td>display all entire data</td>
                                <td>display all entire data</td>
                            </tr>
                            <tr>
                                <td>display all entire data</td>
                                <td>display all entire data</td>
                                <td>display all entire data</td>
                            </tr>
                            <tr>
                                <td>display all entire data</td>
                                <td>display all entire data</td>
                                <td>display all entire data</td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="updatesecond" role="tabpanel" aria-labelledby="updatesecond-tab">
                <div class="session-table p-3">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                <th scope="col">ORDINANCES PASSED</th>
                                <th scope="col">RESOLUTION PASSED</th>
                                <th scope="col">COMMITTEE REPORTS RENDERED</th>
                                </tr>
                            </thead>
                        <tbody>
                            <tr>
                                <td>display all entire data</td>
                                <td>display all entire data</td>
                                <td>display all entire data</td>
                            </tr>
                            <tr>
                                <td>display all entire data</td>
                                <td>display all entire data</td>
                                <td>display all entire data</td>
                            </tr>
                            <tr>
                                <td>display all entire data</td>
                                <td>display all entire data</td>
                                <td>display all entire data</td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="updatethird" role="tabpanel" aria-labelledby="updatethird-tab">
                <div class="session-table p-3">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                <th scope="col">PROPOSED ORDINANCE</th>
                                <th scope="col">PROPOSED RESOLUTION</th>
                                <th scope="col">PETITIONS AND REQUEST</th>
                                <th scope="col">COMMUNICATIONS</th>
                                </tr>
                            </thead>
                        <tbody>
                            <tr>
                                <td>display all entire data</td>
                                <td>display all entire data</td>
                                <td>display all entire data</td>
                                <td>display all entire data</td>
                            </tr>
                            <tr>
                                <td>display all entire data</td>
                                <td>display all entire data</td>
                                <td>display all entire data</td>
                                <td>display all entire data</td>
                            </tr>
                            <tr>
                                <td>display all entire data</td>
                                <td>display all entire data</td>
                                <td>display all entire data</td>
                                <td>display all entire data</td>
                            </tr>
                        </tbody>
                        </table>
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
