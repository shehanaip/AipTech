<?php include "include/admin_header.php"; ?>
<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header("location: login.php");
}
?>
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
                            <small>Users</small>
                        </h1>
                       
                        <div class="col-xs-6">
                        <?php
$query = "select * from users";
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
        echo "<td><a href='categories.php?delete={$the_id}'>Delete</a></td>";
        echo "</tr>";
    }
    ?>
</tbody>
    </table>
</div>
                           <?php
                               if(isset($_GET['delete'])){
                                  $the_id = $_GET['delete']; 
                                  $query = "DELETE FROM users WHERE id = {$the_id}";
                                  $delete_query= mysqli_query($connection,$query);
                                  header("Location: categories.php");
                               }
                               ?>

                                    </tr>
                                </tbody>

 
                               

                            </thead>
                        </table>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    <?php include "include/admin_footer.php"; ?>
