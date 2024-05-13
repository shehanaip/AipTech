
<?php include "include/admin_header.php"; ?>
<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header("location: login.php");
}
?>
<body>

  <div id="wrapper">

        <!-- Navigation -->
      <?php include "include/admin_nav.php"; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">


                        <h1 class="page-header">
                        welcome to Admin
                            <small>Payment</small>
                        </h1>
                       
                        <div class="col-xs-6">
                        <center>    <br><br>
                            <h1>This is the payment link</h1>
       <a class="btn btn-success" href="https://dashboard.stripe.com/test/payments">Payment link here</a>
       </center>
</div>
                      

                              

 
                               

                         
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    <?php include "include/admin_footer.php"; ?>
