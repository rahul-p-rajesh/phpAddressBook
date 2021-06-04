<?php
    include "../config.php";
    include "listContactAction.php";    
    global $base_image_uri;
    //print_r($fetch_result);
    
    echo "
        <div class='container'>
            <table class='table table-hover'>
                <thead>
                    <tr>
                        <th scope='col' style='display:none'>id</th>
                        <th scope='col'>Profile Pic</th>
                        <th scope='col'>Name</th>
                        <th scope='col'>Email</th>
                        <th scope='col'>Phone No</th>
                        <th scope='col'>Address</th>
                        <th scope='col'>Actions</th>
                    </tr>
                </thead>
                <tbody>";
                ?>
                <?php 
                    global $fetch_result; // list  contact variables
                    if($GLOBALS['fetch_result'] != ""){
                        while($row = mysqli_fetch_assoc($GLOBALS['fetch_result'])){
                            // print_r($row);
                            $img_location = $base_image_uri.'../uploads/'.$row['images'];
                            echo "
                            <tr>
                            <td style='display:none'>$row[id]</td>
                            <td><img src='$img_location' style='width:50px; height:50px;border-radius: 50%;' alt='img'  ></td>
                            <td> $row[first_name] $row[last_name]</td>
                            <td> $row[email]</td>
                            <td> $row[phone_number]</td>
                            <td> $row[address]</td>
                            <td >
                            <a href='$base_image_uri./editContact.php?editId=$row[id]'  class='edit btn btn-sm btn-warning '>
                                Edit <i class='fas fa-user-edit'></i>
                            </a>
                            <a href='./deleteAction.php?imgName=$row[images]&deleteId=$row[id]' class='delete btn btn-sm btn-danger'>
                                Delete <i class='fas fa-trash-alt'></i>
                            </a>
                        </tr>
                        ";
                        }
                    }else{
                        echo "<td> data loading </td>";
                    }
                ?>
<?php
    echo" </tbody>
            </table>
        </div>'
    ";
?>
