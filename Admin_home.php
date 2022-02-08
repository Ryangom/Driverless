<?php
include 'admin_nav.php';
require 'inc/db.php';
?>
                <div class="container-fluid admin_user_info">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="text-dark mb-0">User Information</h3>
                    </div>
                    <div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                     <tr>
                                        <th>Id</th>
                                        <th>Full Name</th>
                                        <th>Email</th>
                                        <th>Username</th>
                                        <th>Date of Birth</th>
                                        <th>Postal Address</th>
                                        <th>Postal Code</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
<?php
$sql = "SELECT * FROM  users_info ";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
            echo"
            <tbody>
                <tr>
                    <td>". $row['ID'] ." </td>
                    <td>". $row['FullName'] ." </td>
                    <td>". $row['Email'] ." </td>
                    <td>". $row['Username'] ." </td>
                    <td>". $row['DOB'] ." </td>
                    <td>". $row['PostalAddress'] ." </td>
                    <td>". $row['PostalCode'] ." </td>
                    <td><button>Edit</button> <button>Delete</button></td>
                </tr> 
            </tbody>
            ";
        }
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

