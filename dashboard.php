<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Travel Tour: Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/319afa374e.js"></script>
</head>

<body>
    <div class="container-fluid bg-danger text-white p-3">
        <h2 class="display-1">
		<i class="fas fa-user-cog"></i> Dashboard</h2>
    </div>
    <div class="container mx-auto mt-5 my-5">
        <div class="row">
            <div class="col-md-4">
                <a class="btn btn-primary btn-lg w-100" role="button" href="addPost.php"><i
                        class="fas fa-plus-circle"></i> Add Post</a>
            </div>
            <div class="col-md-4">
                <a class="btn btn-success btn-lg w-100" role="button" href="categoriesPage.php"><i
                        class="fas fa-folder-plus"></i> Add Category</a>
            </div>
            <div class="col-md-4">
                <a class="btn btn-warning text-white btn-lg w-100" role="button" href="usersPage.php"><i
                        class="fas fa-user-plus"></i> Add User</a>
            </div>
        </div>
        <div class="row"> 
           <div class="container-fluid mt-5">
                <h3>MEMBER LIST</h3>
            </div>
            <?php
                include 'travel-action.php';
                $memberList = $ContactObj->Display_member();
            ?>
            <div class="col-md-12">
                <table class="table table-striped table-hover mt-2">
                    <thead class="thead thead-dark">
                        <th>#</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Birthday</th>
                        <th>Phone Number</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Address</th>
                        <th>Credit Number</th>
                        <th>Passport No</th>
                        <th></th>
                        <th></th>
                    </thead>
                    <tbody>           
                        <?php
                            foreach($memberList as $row){
                                $member_id = $row['member_id'];
                        ?>
                        <tr>
                                <td><?php echo $row['member_id'] ?></td>
                                <td><?php echo $row['f_name'] ?></td>
                                <td><?php echo $row['l_name'] ?></td>
                                <td><?php echo $row['birth_day'] ?></td>
                                <td><?php echo $row['phone_num'] ?></td>
                                <td><?php echo $row['e_mail'] ?></td>
                                <td><?php echo $row['pass_word'] ?></td>
                                <td><?php echo $row['home_address'] ?></td>
                                <td><?php echo $row['credit_num'] ?></td>
                                <td><?php echo $row['passport'] ?></td>
                                <td>                            
                                    <a href="update_mem.php?member_id=<?php echo $member_id ?>" class="btn btn-info">Update</a>   
                                </td>
                                <td>
                                    <a href="delete_mem.php?member_id=<?php echo $member_id ?>" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        <div class="row"> 
           <div class="container-fluid mt-5">
                <h3>RESERVATION LIST</h3>
            </div>
            <?php
                include 'travel-action.php';
                $reserveList = $ContactObj->Display_reservation();
            ?>
            <div class="col-md-12">
                <table class="table table-striped table-hover mt-2">
                    <thead class="thead thead-dark">
                        <th>#</th>
                        <th>Destination</th>
                        <th>Departure Airport</th>
                        <th>Departure Date</th>
                        <th>Stay Days</th>
                        <th>Number Of Persons</th>
                        <th>Number Of Rooms</th>
                        <th>Requirements</th>
                        <th></th>                                            

                    </thead>
                    <tbody>           
                        <?php
                            foreach($reserveList as $row){
                            $reservation_id = $row['reservation_id'];
                        ?>
                        <tr>
                                <td><?php echo $row['reservation_id'] ?></td>
                                <td><?php echo $row['destination'] ?></td>
                                <td><?php echo $row['airport'] ?></td>
                                <td><?php echo $row['dep_date'] ?></td>
                                <td><?php echo $row['stay'] ?></td>
                                <td><?php echo $row['persons'] ?></td>
                                <td><?php echo $row['rooms'] ?></td>
                                <td><?php echo $row['requirements'] ?></td>
                                <td><?php echo $row['member_id'] ?></td>
                                <!-- <td>                            
                                    <a href="update_reserve.php?id=<?php  ?>" class="btn btn-info">Update</a>   
                                </td> -->
                                <td>
                                    <a href="delete_reserve.php?id=<?php echo $reservation_id ?>" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        <div class="row"> 
           <div class="container-fluid mt-5">
                <h3>COMMENT LIST</h3>
            </div>
            <?php
                include 'travel-action.php';
                $commentList = $ContactObj->Display_contact();
            ?>
            <div class="col-md-12">
                <table class="table table-striped table-hover mt-2">
                    <thead class="thead thead-dark">
                        <th>#</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Comment</th>
                        <th></th>                                            
                    </thead>
                    <tbody>           
                        <?php
                            foreach($commentList as $row){
                            $contact_id = $row['contact_id'];
                        ?>
                        <tr>
                                <td><?php echo $row['contact_id'] ?></td>
                                <td><?php echo $row['firast_name'] ?></td>
                                <td><?php echo $row['last_name'] ?></td>
                                <td><?php echo $row['email_add'] ?></td>
                                <td><?php echo $row['comment'] ?></td>
                                <!-- <td>                            
                                    <a href="update_reserve.php?id=<?php  ?>" class="btn btn-info">Update</a>   
                                </td> -->
                                <td>
                                    <a href="delete_contact.php?id=<?php echo $contact_id ?>" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

        </div>
</body>

</html>