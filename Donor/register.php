
    <?php  
      include_once ('C:\xampp\htdocs\BMSfin\JBB\Login\Factory.php');
      $factory=new Factory();
      $user = $factory->getUser("donor");  
       
       if(isset($_POST['create'])){ 
        $register = $user->register($_REQUEST['name'], $_REQUEST['nic_no'], stripslashes($_REQUEST['password1']),stripslashes($_REQUEST['password2']), $_REQUEST['address'], $_REQUEST['mobile_no'], $_REQUEST['age'], $_REQUEST['blood_group']);  
          if($register){  
             echo "Registration Successful!";  
          }
          else
          {  
             echo "Entered email already exist!";  
          }  
       }  
    ?>  
        <html>
<link rel="stylesheet" href="reg.css" type="text/css">
<style>
    body {
        background-image: url('Donn.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed; 
        background-size: cover;
    }
    .btn{
            width: 430px;
            height: 50px;
            border-radius: 20px;
            font-size: 20px;
        }
</style>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up Form</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <div>
            <form action="register.php" method="post">

            <h1>Donor Sign Up</h1>

            <fieldset>
            <legend><span class="number">A</span>Your basic info</legend>
            <label for="name">Name:</label>
            <input type="text" name="name" required>

            <label for="nic">NIC-NO:</label>
            <input type="text" name="nic_no" required>

            <label for="password">Password:</label>
            <input type="password" name="password1" required>

            <label for="password">Confirm Password:</label>
            <input type="password" name="password2" required>

            </fieldset>

            <fieldset>
            <legend><span class="number">B</span>Your profile</legend>
            <label for="Address">Address:</label>
            <textarea id="Address" name="address" required></textarea>
            <label for="mobile-no">Mobile-No:</label>
            <input type="mobile-no" name="mobile_no" onkeypress="return onlyNumberKey(event)" pattern="[0-9]{10}" maxlength="10" required> 

            <label for="AGE">AGE:</label>
            <input type="AGE" name="age" onkeypress="return onlyNumberKey(event)" maxlength="2" required>

            </fieldset>


            <fieldset>
            <label for="type">Blood-Type:</label>
            <select id="type" name="blood_group">
            <optgroup label="A">
                <option value="A+">A+</option>
                <option value="A-">A-</option>
            </optgroup>
            <optgroup label="B">
                <option value="B+">B+</option>
                <option value="B-">B-</option>
            </optgroup>
            <optgroup label="AB">
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
            </optgroup>
            <optgroup label="O">
                <option value="O+">O+</option>
                <option value="O-">O-</option>
                
            </optgroup>
            </select>
            </fieldset>
            <input type="submit" id='register' name="create" value="SignUp" class="btn">
        </div>
    
    </body>
    <script> 
    function onlyNumberKey(evt) { 
          
        // Only ASCII charactar in that range allowed 
        var ASCIICode = (evt.which) ? evt.which : evt.keyCode 
        if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57)) 
            return false; 
        return true; 
    } 
    </script> 
</html>