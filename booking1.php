<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>booking details</title>
</head>
<body>
    
    <h1>Enter Your Booking Details:~</h1>

    <?php
    $name=$_POST['name'] ?? '';
    $age=$_POST['age'] ?? '';
    $father=$_POST['father'] ?? '';
    $mobile=$_POST['mobile'] ?? '';
    $address=$_POST['address'] ?? '';
    $gender=$_POST['gender'] ?? '';
    ?>

    <form action="booking2.php" method="post">
        <input type="hidden" name="name" value="<?php echo $name;?>">
        <input type="hidden" name="age" value="<?php echo $age;?>">
        <input type="hidden" name="father" value="<?php echo $father;?>">
        <input type="hidden" name="mobile" value="<?php echo $mobile;?>">
        <input type="hidden" name="address" value="<?php echo $address;?>">
        <input type="hidden" name="gender" value="<?php echo $gender;?>">

        <div class="from-group">
            <label for="location">Your Location</label>
            <select name="location" id="location">
                <option name="choose">Choose Your Location</option>
                <option name="kolkata">KOLKATA</option>
                <option name="delhi">DELHI</option>
                <option name="hydrabad">HYDRABAD</option>
                <option name="goa">GOA</option>
                <option name="bengaluru">BENGALURU</option>
            </select>
        </div>

        <div class="from-group">
            <label for="destination">Destination</label>
            <select name="destination" id="destination">
                <option name="choose">Choose Your Location</option>
                <option name="kolkata">BENGALURU</option>
                <option name="delhi">GOA</option>
                <option name="hydrabad">HYDRABAD</option>
                <option name="goa">DELHI</option>
                <option name="bengaluru">KOLKATA</option>
            </select>
        </div>

        <div class="from-group">
            <label for="type">Travel Type</label>
            <select name="travel" id="travel">
                <option name="choose">Choose your Travel Type</option>
                <option name="economy">Economy</option>
                <option name="premiam">Premium Economy</option>
                <option name="bisness">Bisness</option>
            </select>
        </div>

        <div class="from-group">
            <label for="journey">Journey Date</label>
            <input type="date" id="journey" name="journey" required><br>
        </div>

        <div class="from-group">
            <label for="member">Enter Number Of Pasenger</label>
            <input type="number" id="member" name="member" required ><br>
        </div>

        <button type="submit" value="btn btn-primary">Submit</button>
    </form>

</body>
</html>