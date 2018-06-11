<?php include( 'head.php') ?>

    <body>
        <?php include( 'top-sidebar.php') ?>
            <?php include('innerpage-heading.php') ?>
                <div class="wrapper">
                    <div class="card br-0 b-0 mb-3">
                        <div class="card-header c-282 fs-24 bb-1 p-3">
                            <div class="row">
                                <div class="col-sm-6">Total Investment</div>
                                <div class="col-sm-6 text-right c-848 fs-20"> Total Earned : <span class="c-279  f-600"><b>&#8377;</b></span><span class="c-279  f-600">530000</span></div>
                            </div>
                        </div>
                        <div class="card-body px-0">
                            <div class="table-responsive">
                                <table id="table_id" class="table  display">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Action</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>INR (&#8377;)</th>
                                            <th>Age</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>01552145D12HH</td>
                                            <td>Deposit</td>
                                            <td>08/12/2017</td>
                                            <td>Completed</td>
                                            <td>150000</td>
                                            <td>6 month</td>
                                        </tr>
                                        <tr>
                                            <td>01552145D12HH</td>
                                            <td>Deposit</td>
                                            <td>08/12/2017</td>
                                            <td>Completed</td>
                                            <td>150000</td>
                                            <td>1st Month</td>
                                        </tr>
                                        <tr>
                                            <td>01552145D12HH</td>
                                            <td>Deposit</td>
                                            <td>08/12/2017</td>
                                            <td>Pending</td>
                                            <td>150000</td>
                                            <td>2 month</td>
                                        </tr>
                                        <tr>
                                            <td>01552145D12HH</td>
                                            <td>Deposit</td>
                                            <td>08/12/2017</td>
                                            <td>Completed</td>
                                            <td>150000</td>
                                            <td>6 month</td>
                                        </tr>
                                        <tr>
                                            <td>01552145D12HH</td>
                                            <td>Deposit</td>
                                            <td>08/12/2017</td>
                                            <td>Completed</td>
                                            <td>150000</td>
                                            <td>1st Month</td>
                                        </tr>
                                        <tr>
                                            <td>01552145D12HH</td>
                                            <td>Deposit</td>
                                            <td>08/12/2017</td>
                                            <td>Pending</td>
                                            <td>150000</td>
                                            <td>2 month</td>
                                        </tr>
                                        <tr>
                                            <td>01552145D12HH</td>
                                            <td>Deposit</td>
                                            <td>08/12/2017</td>
                                            <td>Completed</td>
                                            <td>150000</td>
                                            <td>6 month</td>
                                        </tr>
                                        <tr>
                                            <td>01552145D12HH</td>
                                            <td>Deposit</td>
                                            <td>08/12/2017</td>
                                            <td>Completed</td>
                                            <td>150000</td>
                                            <td>1st Month</td>
                                        </tr>
                                        <tr>
                                            <td>01552145D12HH</td>
                                            <td>Deposit</td>
                                            <td>08/12/2017</td>
                                            <td>Pending</td>
                                            <td>150000</td>
                                            <td>2 month</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="utr">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <!-- Modal Header -->
                            <div class="modal-header b-0 px-2 py-1">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <!-- Modal body -->
                            <div class="modal-body">
                                <form action="/action_page.php">
                                    <div class="form-group">
                                        <label for="utr">Enter UTR number</label>
                                        <input type="number" class="form-control b-0 bb-2 br-0" id="utr"> </div>
                                    <button type="submit" class="btn btn-primary btn-lg d-block w-100 ">Save</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <?php include('footer.php') ?>