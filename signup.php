<?php include( 'head.php') ?>

    <body>
        <section class="login-container w-100">
            <div class="login-container-inner w-100  fs-16 c-848">
                <div class="container">
                    <div class="bs-1 bg-white position-relative my-3"> <img src="assets/images/login-signup/login-right.png" class="position-absolute h-100 right-0 top-0  d-none d-lg-block">
                        <div class="p-3 p-sm-5">
                            <div class="c-pink fs-16 text-uppercase f-700">Welcome to</div>
                            <div class="login-logo mt-2 mb-4"><img src="assets/images/login-signup/logo@3x.png" alt="Logo"></div>
                            <div class="row">
                                <div class="col-lg-7 col-xsl-6">
                                    <div class="login-form mb-3">
                                        <form action="" autocomplete="off" class="form-cls">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group mb-3 mb-sm-4">
                                                        <label for="name">Name</label>
                                                        <input type="text" class="form-control br-0" id="email" required> </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group mb-3 mb-sm-4">
                                                        <label for="email">Email</label>
                                                        <input type="email" class="form-control br-0" id="email" required> </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group mb-3 mb-sm-4">
                                                        <label for="pwd">Password</label>
                                                        <input type="password" class="form-control br-0" id="pwd" required> </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group mb-3 mb-sm-4 position-res">
                                                        <label for="tel">Phone Number <button type="button" class="c-9c1 fs-12 f-600 b-0 br-0 p-0 bg-transparent cursorpointer position-absolute right-0 top-0 cursor-pointer" >Verify</button></label>
                                                        <input type="tel" class="form-control br-0" id="telphone" required> </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group mb-3 mb-sm-4">
                                                        <label for="otp">Enter OTP                                                          
                                                        </label>
                                                        <input type="number" class="form-control br-0" id="otp" maxlength="4" required> </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group mb-3 mb-sm-4">
                                                        <label for="referal">Have Referal Code?</label>
                                                        <input type="number" class="form-control br-0" id="referal" required> </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn c-fff f-600 px-5 py-2 bg-279 br-27 b-0 text-uppercase">Sign Up</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="login-links my-3">Already have account? <a href="signin.php" class="c-9c1 fs-16 text-uppercase f-600">Sign In</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
    <?php include( 'footer.php') ?>