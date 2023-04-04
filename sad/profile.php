<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="profile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    
<!-- The sidebar -->
<div class="sidebar">
  <a href="index.php"><i class="fa fa-fw fa-home"></i> Home</a>
  <a href="index.php"><i class="fa fa-fw fa-wrench"></i> Services</a>
  <a href="#clients"><i class="fa fa-fw fa-user"></i> Clients</a>
  <a href="#contact"><i class="fa fa-fw fa-envelope"></i> Contact</a>
</div>
<img src="images/avatar.png" alt="Avatar" class="avatar">


<!--Form -->
<div style="margin-left: 10%; width: 88%;" class="container">
  <form action="action_page.php">

    <label style="color:black" for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="First Name...">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Last Name...">

    <label for="lname">Present Address</label>
    <input type="text" id="lname" name="presentaddress" placeholder="Present Address...">

    <label for="lname">Parmanent Address</label>
    <input type="text" id="lname" name="parmanentaddress" placeholder="Parmanent Address...">

    <label for="lname">Phone</label>
    <input type="text" id="lname" name="Phone" placeholder="Phone...">

    <label for="lname">Date of Birth</label>
    <input type="text" id="lname" name="birth" placeholder="Date of Birth...">

    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="australia">Bangladesh</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>

    <label for="lname">Nationality</label>
    <input type="text" id="lname" name="nationality" placeholder="Nationality...">

    <label for="lname">Religion</label>
    <input type="text" id="lname" name="religion" placeholder="Religion...">

   
    <input style="color:white" type="submit" value="Submit">

  </form>
</div>

</body>
</html>