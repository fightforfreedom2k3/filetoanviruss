<?php
require_once('../../DB/dbhelper.php');
require_once('../../common/utility.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require_once "../main/main.php"
    ?>
</head>

<body>
    <!-- header -->
    <?php
    require_once "../main/header.php"
    ?>
    <!-- sidebar -->
    <?php
    require_once "../main/sidebar.php"
    ?>
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-table"></i> User List</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="index.html">User</a></li>
                        <li><i class="fa fa-table"></i>User List</li>
                    </ol>
                </div>
            </div>
            
            <div class="row">
                <div class="col-sm-12">
                    <section class="panel">
                        <header class="panel-heading">
                            List of Users
                        </header>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th style="width:50px;">#</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                //Lay danh sach danh muc tu database
                                $firstIndex = 0;

                                $sql         = 'select * from usser';
                                $userList = executeResult($sql);
                                foreach ($userList as $item) {
                                    echo '<tr>
                                            <td>' . (++$firstIndex) . '</td>
                                            <td>' . $item['username'] .'</td>
                                            <td>' . $item['password'] . '</td>
                                            <td>' . $item['Email'] . '</td>
                                        </tr>';
                                }
                                ?>

                            </tbody>
                        </table>

                    </section>
                </div>
            </div>

        </section>
    </section>

    <?php
    require_once "../main/js.php"
    ?>
</body>

</html>