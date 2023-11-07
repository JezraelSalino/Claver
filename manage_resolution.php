<?php
include_once 'header.php';
?>

<div class="container">

<div class="header">
<h6>Manage Legislative Files / Manage Resolution</h6>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" href="#addModal">Add Resolution</button>
</div>

<div class="feed">
    <div class="row p-3">
        <div class="col">
            <div class="mb-2">
                <label class="form-label">RESOLUTION NO.</label>
                <input type="text" class="form-control">
            </div>
            <div class="mb-2">
                <label class="form-label">ENACTED DATE</label>
                <input type="text" class="form-control">
            </div>
            <div class="mb-2">
                <label class="form-label">SECTOR</label>
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="col">
            <div class="mb-2">
                <label class="form-label">SESSION TRACKING NUMBER</label>
                <input type="text" class="form-control">
            </div>
            <div class="mb-2">
                <label class="form-label">LEGISLATION YEAR</label>
                <input type="text" class="form-control">
            </div>
            <div class="mb-2">
                <label class="form-label">SUB-SECTOR</label>
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="col">
            <div class="mb-2">
                <label class="form-label">AUTHOR</label>
                <input type="text" class="form-control">
            </div>
            <div class="mb-2">
                <label class="form-label">TITLE KEYWORDS</label>
                <input type="text" class="form-control">
            </div>
            <div class="mb-2">
                <label class="form-label">PILLAR</label>
                <input type="text" class="form-control">
            </div>
        </div>
    </div> 
    <div class="session-table p-3">
        <table class="table table-bordered">
            <thead>
                <tr>
                <th scope="col">DATE ENACTED</th>
                <th scope="col">RESOLUTION NO.</th>
                <th scope="col">RESOLUTION TITLE</th>
                <th scope="col">SUB-SECTOR</th>
                <th scope="col">PILLAR</th>
                <th scope="col">SESSION TRACKING NO.</th>
                <th scope="col">AUTHOR</th>
                <th scope="col">COMMITTEE ACTION</th>
                <th scope="col">LEGISLATION YEAR</th>
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
                <td>display all entire data</td>
                <td>display all entire data</td>
                <td>display all entire data</td>
            </tr>
        </tbody>
        </table>
    </div>
    </div>
</div>


<!-- ADD MODAL -->
<div class="modal fade" id="addModal" aria-hidden="true" data-bs-backdrop="static" aria-labelledby="addModalLabel" tabindex="-1">
  <div class="modal-dialog modal-xl modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addModalLabel">Add Resolution</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
            <div class="row p-3">
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="mb-2">
                        <label class="form-label">RESOLUTION NO.</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-2">
                        <label class="form-label">ENACTED DATE</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-2">
                        <label class="form-label">SECTOR</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-2">
                        <label class="form-label">RESOLUTION PDF FILE</label>
                        <input class="form-control" type="file" id="formFile">
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="mb-2">
                        <label class="form-label">SESSION TRACKING NUMBER</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-2">
                        <label class="form-label">LEGISLATION YEAR</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-2">
                        <label class="form-label">SUB-SECTOR</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="mb-2">
                        <label class="form-label">AUTHOR</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-2">
                        <label class="form-label">TITLE KEYWORDS</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-2">
                        <label class="form-label">PILLAR</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
        </div> 
            <div class="session-table p-3">
                <div class="mb-2">
                    <label class="form-label">RESOLUTION TITLE</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#mainModal" data-bs-toggle="modal" data-bs-dismiss="modal">Save and Sync Resolution</button>
        <button class="btn btn-primary" data-bs-target="#updateModal" data-bs-toggle="modal" data-bs-dismiss="modal">Update Document</button>
      </div>
    </div>
  </div>
</div>

<!-- UPDATE MODAL -->
<div class="modal fade" id="updateModal" aria-hidden="true" data-bs-backdrop="static" aria-labelledby="updateModalLabel" tabindex="-1">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="updateModalLabel">Update Resolution</h5>
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
