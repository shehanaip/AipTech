<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header("location: login.php");
}
?>
<?php include "include/admin_header.php"; ?>
<body>
<?php
$connection = mysqli_connect('localhost', 'root', '', 'aip_tech');

if (!$connection) {
    die("Database connection failed: " . mysqli_error($connection));
}
?>

    <div id="wrapper">

        <!-- Navigation -->
      <?php include "include/admin_nav.php"; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">


                        <h1 class="page-header">
                        Welcome To Admin
                            <small>Profile</small>
                        </h1>
                       
                        <div class="col-xs-6">
                        <?php
$query = "select * from admin";
$select_data = mysqli_query($connection, $query);
?>
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr><th>ID</th>
                                    <th>Name</th>
                                    <th>Password</th>
                                    <th>Email</th>
                                </tr>
                                <tbody>
    <?php
    while ($row = mysqli_fetch_assoc($select_data)) {
        $the_id = $row['id'];
        $name = $row['name'];
        $password = $row['password'];
        $email = $row['email'];
        echo "<tr>";
        echo "<td>{$the_id}</td>";
        echo "<td>{$name}</td>";
        echo "<td>{$password}</td>";
        echo "<td>{$email}</td>";
        echo "</tr>";
    }
    ?>
</tbody>
    </table>
</div>
                      

                                    </tr>
                                </tbody>

 
                               

                            </thead>
                        </table>
                        </div>
                    </div>
                    <div class="logout">
                        <form action="" method="post">
                        &nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-success" name="logout">LogOut</button>
                        </form>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    <?php include "include/admin_footer.php"; ?>
    <?php 
if(isset($_POST['logout'])){
    session_destroy();
    header("location: login.php");
}

?>