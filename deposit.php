<?php include( 'head.php') ?>

    <body>
        <?php include( 'top-sidebar.php') ?>
            <?php include('innerpage-heading.php') ?>
                <div class="wrapper">
                    <div class="card br-0 b-0 mb-3">
                    <div class="card-body fs-18 f-600 ">It's mandatory to add bank account details for the INR Deposit.</div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <div class="card br-0 bs-0 b-0">
                                 <div class="card-header c-282 fs-24 bb-1 p-3">Deposit INR</div>
                                <div class="card-body p-0 p-sm-3  fs-16 c-848">
                                    <form action="">
                                        
                                        <div class="form-group row no-gutters mb-4">
                                            <input type="number" id="inr" class="form-control bg-ebe px-3 py-3 br-10 b-2" placeholder="Please Enter INR" >
                                        </div>
                                  <button class="btn bg-279 c-fff f-600 fs-20 mt-2" type="submit">Deposit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3">
                        <div class="card br-0 bs-0 b-0 mb-3">
                            <div class="card-header c-282 fs-24 bb-1 p-3">Account Detail</div>
                            <div class="card-body p-3 mb-3">
                            <ul class="nav row seperator m-0 no-gutters position-relative">
                                <li class="col-6"><div class="fs-18 c-282 mb-2">Account Number</div><div class="fs-16 c-848">01225565331622</div></li>
                                 <li class="col-6"><div class="fs-18 c-282 mb-2">Account Name</div><div class="fs-16 c-848 text-truncate">Rakesh Gowda Bangalore abcdefghijjklmnopqurstuvwxyz</div></li>
                                 <li class="col-6"><div class="fs-18 c-282 mb-2">IFSC Code</div><div class="fs-16 c-848">SBI00002515522</div></li>
                                 <li class="col-6"><div class="fs-18 c-282 mb-2">Branch</div><div class="fs-16 c-848">Dollars colony branch</div></li>
                                </ul>
                            </div>
                            </div>
                            
                        </div>
                    </div>
                       <div class="card br-0 b-0 mb-3">
                        <div class="card-header c-282 fs-24 bb-1 p-3">INR Payment Instruction</div>
                        <div class="card-body c-848 fs-16">
                            <p>You may maintain an INR balance in your Unocoin account which you may use to buy bitcoin instantaneously. Complete the form above before you transfer INR to our bank account. We do not accept cash deposits and you will need to use NEFT/RTGS/IMPS from your registered bank account only. Once you transfer INR, come back to this page and update the REFERENCE NUMBER of your transfer against the deposit order you created. Once we receive INR into our bank account, your DEPOSIT order will be processed in 3-4 working hours but may take up to 24 hours. Our processing hours is between 10 AM to 7 PM on weekdays (Mon-Sat).</p>
                            <p>We can only hold your INR in your INR wallet for up to 300 days. If you do not completely use your INR balance within 300 days, we will refund the remaining balance back to your bank account. We have limits on the amount of INR you may hold in your INR balance. We have accounts with State Bank of India to which you may send INR payments.</p>
                           
                        </div>
                    </div>
                       <div class="card br-0 b-0 mb-3">
                        <div class="card-header c-282 fs-24 bb-1 p-3">Deposit History</div>
                        <div class="card-body px-0">
                            <div class="table-responsive">
                                <table id="table_id" class="table  display">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Requested Time</th>
                                            <th>INR</th>
                                              <th>Reference No.</th>
                                              <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>01552145D12</td>
                                            <td>08/15/2015 05:33 PM</td>
                                            <td>150000</td>
                                            <td>- <button class="btn bg-279 c-fff float-right py-1"  data-toggle="modal" data-target="#utr">Update</button></td>
                                            <td>Receipt Pending</td>
                                        </tr>
                                        <tr>
                                            <td>01552145D12</td>
                                            <td>08/15/2015 05:33 PM</td>
                                            <td>150000</td>
                                               <td>- <button class="btn bg-279 c-fff float-right py-1"  data-toggle="modal" data-target="#utr">Update</button></td>
                                            <td>Receipt Pending</td>
                                        </tr>
                                        <tr>
                                            <td>01552145D12</td>
                                            <td>08/15/2015 05:33 PM</td>
                                            <td>150000</td>
                                            <td>25331563551</td>
                                            <td>Completed</td>
                                        </tr>
                                        <tr>
                                            <td>01552145D12</td>
                                            <td>08/15/2015 05:33 PM</td>
                                            <td>150000</td>
                                            <td>- <button class="btn bg-279 c-fff float-right py-1"  data-toggle="modal" data-target="#utr">Update</button></td>
                                            <td>Receipt Pending</td>
                                        </tr>
                                        <tr>
                                            <td>01552145D12</td>
                                            <td>08/15/2015 05:33 PM</td>
                                            <td>150000</td>
                                          <td>25331563551</td>
                                            <td>Completed</td>
                                        </tr>
                                        
                                        
                                        
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
        <div class="modal fade" id="utr">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">     <!-- Modal Header -->
      <div class="modal-header b-0 px-2 py-1">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
         <form action="">
  <div class="form-group">
    <label for="utr">Enter UTR number</label>
    <input type="number" class="form-control b-0 bb-2 br-0" id="utr" required>
  </div>


  <button type="submit" class="btn btn-primary btn-lg d-block w-100 ">Save</button>
</form> 
      </div>
    </div>
  </div>
</div>
                <?php include('footer.php') ?>