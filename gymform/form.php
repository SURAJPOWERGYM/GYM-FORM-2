<?php include("connection.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="form-container">
        <form action="#" method="post">
    <h1>POWERGYM - JAY BAJRANG</h1>
    <p>FILL THIS FORM TO JOIN OUR POWERGYM FAMILY !</p><br><br>

 
   

         <label for="username">Type your username</label>
         <input type="text" id="username" name="username" placeholder="Enter your username" required><br><br>
         
         
         
         
         <label for="number">Type your NUMBER</label>
         <input type="number" id="number" name="phone_number" placeholder="Enter your phone no." required><br><br>
         
         
         
         
         <input type="radio" id="cash" name="p-method" value="cash">
            <label for="cash">CASH</label>
            <input type="radio" id="online" name="p-method" value="online">
            <label for="online">ONLINE</label>

         
         
         
         <textarea name="address" rows="4" cols="50" placeholder="ENTER YOUR ADDRESS HERE" required></textarea><br><br>
         
         
         
         
         <label for="proof">ENTER YOUR ID PROOF</label>
         <input type="text" id="proof" name="id_proof" placeholder="eg. AADHAR CARD" required><br><br>
         
         <div class="mem-type">
             
             <label for="mem_type">CHOOSE YOUR MEMBERSHIP PERIOD</label>
             <select name="mem_period" id="mem_type" required>
                 <option value="1month">1 MONTH</option>
                 <option value="3month">3 MONTHS</option>
                 <option value="6month">6 MONTHS</option>
                 <option value="1year">1 YEAR</option>
        </select><br><br>
 


        
        <label for="mem_start-dt">CHOOSE THE DATE IN WHICH YOU ARE FILLING THIS FORM NOW</label>
        <input type="date" id="mem_start-dt" name="mem_start" required><br><br>
        
        
        
        <label for="mem_end-dt">CHOOSE THE DATE IN WHICH YOU END THIS MEMBERSHIP</label>
        <input type="date" id="mem_end-dt" name="mem_end" required><br><br>
        
        <div class="btn">

            <button type="submit" value="register" class="btn" name="submit"> SUBMIT
        </div>
        </form>
    </div>
        
        




</body>

</html>

<?php
include("connection.php");

if(isset($_POST['submit'])) {
    // Form has been submitted, process the data
    $username     = $_POST['username'];
    $phone_number = $_POST['phone_number'];
    $p_method     = $_POST['p-method'];
    $address      = $_POST['address'];
    $id_proof     = $_POST['id_proof'];
    $mem_period   = $_POST['mem_period'];
    $mem_start    = $_POST['mem_start'];
    $mem_end      = $_POST['mem_end'];

    $query = "INSERT INTO form VALUES ('$username', '$phone_number', '$p_method', '$address', '$id_proof', '$mem_period', '$mem_start', '$mem_end')";
    $data = mysqli_query($conn, $query);

    if ($data) {
        echo "Data inserted into the database.";
    } else {
        echo "Failed to insert data.";
    }
}
?>