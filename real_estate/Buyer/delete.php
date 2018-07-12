<?php 
session_start();
if ($_SESSION["username"]==null) {
   header("location:../index.php");
}

?>
<!DOCTYPE html>
<head>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/admin_home.css">
<script>
    function Deleteuser(UserName)
    {
        if(confirm("You want to delete this record ?"))
        {
        window.location.href="delete_user.php?UserName="+UserName;
        }
    }
</script>
</head>
<body>
<header>
    <div class="dropdown" id="account"><br><br>
        <div id="logo">
            <a href="admin_home.php">
                <img src="../logo.jpg" width="60" height="60" class="img-circle">   
                <font color="white">REal </font>
            </a>
        </div>
        <div class="dropdown" id="account">
            <div>
                    <div class="tab-pane" id="srd">
                                <center><br>
                                    <div class="alert alert-danger fade in">
                                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                                        <h4>Updte</h4>
                                    </div>
                                    <div class="input-group col-md-4">
                                        <input class="form-control" placeholder="Search...">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default">Go</button>
                                        </span>
                                    </div>
                                    <br>
                                    <?php
                                        $UserName = $_SESSION['username'];  
                                        $con = @mysql_connect("localhost","root","");
                                        if (!$con)
                                            {
                                              die('Could not connect: ' . mysql_error());
                                            }
                                        mysql_select_db("re", $con);
                                        $result = mysql_query("SELECT CustomerID, UserName, FirstName, LastName, Gender, Address, City, PhoneNumber, CustomerType, Email, Password, Profile_Picture FROM customer_reg WHERE UserName='$UserName'");
                                        echo "<table class='table table-bordered'>";
                                            echo "<tr class='label-danger'>";
                                                echo"<th>Profile Picture</th>";
                                                echo"<th>CustomerID</th>";
                                                echo"<th>UserName</th>";
                                                echo"<th>FirstName</th>";
                                                echo"<th>Gender </th>";
                                                echo"<th>Address</th>";
                                                echo"<th>City</th>";
                                                echo"<th>PhoneNumber</th>";
                                                echo"<th>Email </th>";
                                                echo"<th>Role</th>";
                                                echo"<th>Password</th>";

                                            echo"</tr>";
                                            while($row = mysql_fetch_array($result))
                                              {
                                                echo "<tr>";
                                                 echo "<td>" . "<img class='img-circle' width='50' height='50' src='images/users/".$row['Profile_Picture']."'". "</td>";
                                                   echo "<th>" . $row['CustomerID'] . "</th>";
                                                   echo "<th>" . $row['UserName'] . "</th>";
                                                   echo "<th>" . $row['FirstName'] . "</th>";
                                                   echo "<th>" . $row['LastName'] . "</th>";
                                                   echo "<th>" . $row['Gender'] . "</th>";
                                                  echo "<th>" . $row['Address'] . "</th>";
                                                  echo "<th>" . $row['City'] . "</th>";
                                                   echo "<th>" . $row['PhoneNumber'] . "</th>";
                                                   echo "<th>" . $row['CustomerType'] . "</th>";
                                                   echo "<th>" . $row['Email'] . "</th>";
                                                   echo "<th>" .$row['Password'] . "</th>";
                                                    // echo "<td><a href='javascript:DeleteUser('$row[email]')><span class='glyphicon glyphicon-trash'></span></a></td>";
                                    ?>       
                                                <td>
                                                        <a href="javascript:Deleteuser('<?php echo $row['UserName']; ?>')">
                                                            <button type="button" class="btn btn-danger">Delete</button>
                                                        </a>
                                                    </td>
                                                </tr>
                                    <?php
                                              }
                                        echo"</table>";
                                    ?>
                                </center> 
                              </div>  
                            </div> 
                        <center>
                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

    


</body>
</html>
