<?php include( 'head.php') ?>

    <body>
        <?php include( 'top-sidebar.php') ?>
            <?php include('profile-heading.php') ?>
                <div class="wrapper">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card br-0 bs-0 b-0 profile-edit-details position-relative p-3  my-2">
                                <div class="card-head position-absolute top-0 right-0">
                                    <div class="profile-edit-btn">
                                        <ul class="nav">
                                        <li><button class="edit bg-transparent b-0 cursor-pointer m-1 p-0" title="Edit"><span class="sprites sprites-edit"></span></button></li>
                                        <li><button class="save bg-transparent b-0 cursor-pointer m-1 p-0" title="Save"><span class="sprites sprites-save"></span></button></li>
                                        <li><button class="cancel bg-transparent b-0 cursor-pointer m-1 p-0" title="Cancel"><span class="sprites sprites-cancel"></span></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body p-0 p-sm-3  fs-16 c-848">
                                    <form action="" enctype="multipart/form-data">
                                        <div class="profilepic-container rounded-circle w-72 h-72 ml-auto mr-auto position-relative bs-1 mb-3">
                                          <img src="assets/images/profile-pic.jpg" alt="Profile Picture" class="profile-img">
                                          <input type="file" id="name" class="col-sm-9 c-282 profile-pic position-absolute bottom-0 left-0 right-0 m-auto" value="" accept="image/gif, image/jpeg, image/png"> 
                                            <span class="pic-change position-absolute bottom-0 left-0 right-0 text-center fs-12 c-fff">Change</span>
                                        </div>
                                        <div class="form-group row no-gutters pb-3">
                                            <label for="name" class="col-sm-3 ">Full Name</label>
                                            <input type="text" id="name" class="col-sm-9 c-282  pl-sm-2" value="Rakesh Gowda" >
                                        </div>
                                        <div class="form-group row no-gutters pb-3">
                                            <label for="pan" class="col-sm-3 ">PAN Number</label>
                                            <input type="text" class="col-sm-9 c-282  pl-sm-2" id="pan" value="PAN123" >
                                        </div>
                                        <div class="form-group row no-gutters pb-3">
                                            <label for="phone" class="col-sm-3 ">Phone Number</label>
                                            <input type="tel" class="col-sm-9 c-282 pl-sm-2" value="1234567890" id="phone" > 
                                        </div>
                                        <div class="form-group row no-gutters pb-3">
                                            <label for="addres" class="col-sm-3">Address </label>
                                            <textarea type="text" class="col-sm-9 c-282  pl-sm-2" id="addres" rows="3" disabled>#4, 1st Floor, Above IDBI Bank, 80 Feet Road, Ashwath Nagar(Dollars Colony), Bengaluru - 560094, Karnataka 
                                            </textarea>
                                        </div>
                                        <div class="form-group row no-gutters pb-3 ">
                                            <label for="openon" class="col-sm-3 ">A/c open on</label>
                                            <input type="date" class="col-sm-9 c-282  pl-sm-2" id="openon" value="12/08/2018" >     
                                            
                                        </div>
                                        <div class="form-group row no-gutters pb-3">
                                            <label for="verifiedon" class="col-sm-3 ">A/c Verified on </label>
                                            <input type="date" class="col-sm-9 c-282  pl-sm-2" id="verifiedon" > 
                                        </div>
                                        <div class="form-group row no-gutters pb-3">
                                            <label for="refcode" class="col-sm-3 ">Referral Code</label>
                                            <input type="text" class="col-sm-9 c-282  pl-sm-2" id="refcode" value="ref123" > 
                                        </div>
                                        
                                        <div class="row">
                                        <div class="col-4">
                                              <div class="upload-wrapper position-relative text-center position-relative cursor-pointer">
                                                          <label class="form-label"><img src="assets/images/upload.png" class="d-block mr-auto ml-auto mb-3">Upload Photo</label>
                                                  <input type="file" >
                                            </div>
                                            </div>
                                              <div class="col-4">
                                              <div class="upload-wrapper position-relative text-center position-relative  cursor-pointer">
                                                          <label class="form-label"><img src="assets/images/upload.png" class="d-block mr-auto ml-auto mb-3">Upload Passport</label>
                                                  <input type="file" >
                                            </div>
                                            </div>
                                              <div class="col-4">
                                              <div class="upload-wrapper position-relative text-center position-relative  cursor-pointer">
                                                          <label class="form-label"><img src="assets/images/upload.png" class="d-block mr-auto ml-auto mb-3">Upload PAN card</label>
                                                  <input type="file" >
                                            </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                        <div class="card br-0 bs-0 b-0 mt-2 mb-3">
                            <div class="card-header c-282 fs-24 bb-1 p-3">Account Detail</div>
                            <div class="card-body p-3">
                            <ul class="nav row seperator m-0 no-gutters position-relative">
                                <li class="col-6"><div class="fs-18 c-282 mb-2">Account Number</div><div class="fs-16 c-848">01225565331622</div></li>
                                 <li class="col-6"><div class="fs-18 c-282 mb-2">Account Name</div><div class="fs-16 c-848 text-truncate">Rakesh Gowda Bangalore abcdefghijjklmnopqurstuvwxyz</div></li>
                                 <li class="col-6"><div class="fs-18 c-282 mb-2">IFSC Code</div><div class="fs-16 c-848">SBI00002515522</div></li>
                                 <li class="col-6"><div class="fs-18 c-282 mb-2">Branch</div><div class="fs-16 c-848">Dollars colony branch</div></li>
                                </ul>
                            </div>
                            </div>
                               <div class="card br-0 b-0">
                        <div class="card-header c-282 fs-24 bb-1 p-3">Previous Login</div>
                        <div class="card-body px-0">
                            <div class="table-responsive">
                                <table id="table_id" class="table  display">
                                    <thead>
                                        <tr>
                                            <th>Login Time</th>
                                            <th>Login IP</th>
                                            <th>User Agent</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>05/11/18</td>
                                            <td>180.151.215.109</td>
                                            <td>Windows NT 10.0/ Chrome</td>
                                        </tr>
                                           <tr>
                                            <td>05/11/18</td>
                                            <td>180.151.215.109</td>
                                            <td>Windows NT 10.0/ Chrome</td>
                                        </tr>
                                           <tr>
                                            <td>06/11/18</td>
                                            <td>180.151.215.109</td>
                                            <td>Windows NT 10.0/ Chrome</td>
                                        </tr>
                                           <tr>
                                            <td>05/11/18</td>
                                            <td>180.151.215.109</td>
                                            <td>Windows NT 10.0/ Chrome</td>
                                        </tr>
                                           <tr>
                                            <td>05/11/18</td>
                                            <td>180.151.215.109</td>
                                            <td>Windows NT 10.0/ Chrome</td>
                                        </tr>
                                        
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                        </div>
                    </div>
                </div>
                <?php include('footer.php') ?>