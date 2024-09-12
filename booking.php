<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customar Details</title>
</head>
<body>

    <h1>Enter Your Parsonal Details:~</h1>

    <form action="booking1.php" method="post">

    <div class="from-group">
        <label for="name">Enter Your Name:- </label>
        <input type="text" id="name" name="name" required><br>
    </div>

    <div class="from-group">
        <lebel for="age">Enter Your Age:- </lebel>
        <input type="number" id="age" name="age" required><br>
    </div>

    <div class="from-group">
        <label for="father">Enter Your Father Name:- </label>
        <input type="text" id="father" name="father" required><br>
    </div>

    <div class="from-group">
        <label for="mobile">Enter Your Number:- </label>
        <input type="number" id="mobile" name="mobile" value="91" required><br>
    </div>

    <div class="from-group">
        <label for="address">Enter Your Address:- </label>
        <input type="text" id="adress" name="address" required><br>
    </div>

    <div class="from-group">
        <label for="gender">Choose Your Gender:-</label>
        <select name="gender" id="gender" required>
        <option name="chose">Select Your Gender</option>
        <option name="male">Male</option>
        <option name="female">Female</option>
        <option name="others">Others</option>
        </select>
    </div>

    <button type="submit" value="btn btn-primary">Next</button>
    </form>


</body>
</html>