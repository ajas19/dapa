<?php
$db = mysqli_connect("localhost", "root", "", "phpcrud");


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP crud</title>


    <script>
        function valid() {
            var firstname = document.getElementById("name");
            var email = document.getElementById("email");
            var adderss = document.getElementById("address");

            var namePtn = /^\w{5,12}$/;
            var usernamePtn = /^([a-zA-Z0-9])+([\w]{2,})+$/;
            var cNamePtn = /^[I][C][T]$/;
            var phoPtn = /^[0][7][0-2 4-8][0-9]{7}$/;
            var emailPtn = /^([a-zA-Z0-9\.\_-])+@([A-Za-z0-9])+.([a-z]{1,3})$/;
            var pwPtn = /((?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%]).{6,15})/;

            if (!firstname.value.match(namePtn)) {
                //alert("Please enter your first name properly!");
                x = document.getElementById("error");
                x.innerHTML = "Name is not valid";
                x.style.color = "Red";
                return false;
            }


            if (!email.value.match(emailPtn)) {
                x = document.getElementById("Eerror");
                x.innerHTML = "Mail is not valid";
                x.style.color = "Red";
                return false;
            }

            if (!adderss.value.match(namePtn)) {
                x = document.getElementById("Perror");
                x.innerHTML = "Invalid address type";
                x.style.color = "Red";
                return false;
            }
        }
    </script>




</head>

<body>

    <form action="" method="post" onsubmit="return valid()">
        <table>
            <tr>
                <td> <label>Name</label></td>
                <td><input type="text" name="name" id="name" placeholder="Enter Name"><span id="error"></span></td>
            </tr>

            <tr>
                <td><label>Email</label></td>
                <td>
                    <input type="text" name="email" id="email" placeholder="Enter Email"><span id="Eerror"></span>
                </td>
            </tr>

            <tr>
                <td><label>Address</Address></label></td>
                <td><input type="text" name="address" id="address" placeholder="Enter Address"><span id="Perror"></span></td>
            </tr>
            <tr>

            </tr>

            <tr>
                <td> <input type="submit" name="submit" value="submit"></td>
                <td> <input type="reset" name="reset"> </td>
            </tr>
        </table>
    </form>
    <br>
    <hr>

    <h3>
        User list
    </h3>

    <table style="width: 90%" border="">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>

        </tr>

        <?php
        $i = 1;
        $qry = "select * from user";
        $run = $db->query($qry);
        if ($run->num_rows > 0) {
            while ($row = $run->fetch_assoc()) {
                $id = $row['id'];

        ?>
                <tr>
                    <td> <?php echo $i++; ?> </td>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['address'] ?></td>


                </tr>

        <?php
            }
        }

        ?>

    </table>
</body>

</html>

<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];


    $qr = "insert into user  values(null, 
                                    '$name',
                                    '$email',
                                    '$address')";


    if (mysqli_query($db, $qr)) {

        // echo '<script>("Success");</script>';
        header('location:user.php');
    } else {
        echo mysqli_error($db);
    }
}
?>