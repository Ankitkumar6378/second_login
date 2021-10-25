

<!DOCTYPE html>
<html>
    <head>
        <title>LOGIN PAGE</title>
    </head>
    <link rel="stylesheet" href="style.css">
 

    <body>
        <div class="container"> 

        <form id="form" action="login.php"method="post">
            <h2>LOGIN PAGE</h2>
            <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	     <?php } ?>
                <label>User Name</label>
                <input type="text" name="uname" id="uname"placeholder="User Name"class="login" ><br>
                
                <label>Password</label>
                <input type="password" name="password" placeholder="Password"class="login" ><br>
                
                <button id="btn" value="Submit"onclick="login()">Login</button>

                <!-- <a href="signup.php">click to signup</a> -->
            </form>
        </div>
        <script>
        function login() {

            var error = 0;
          


            var Username = document.getElementById("uname").value;
            var pass = document.getElementById("password").value;


            var filter = /^(?=.{3,20}$)(?![.])(?!.*[_.]{2})[a-zA-Z0-9]+(?<![.])$/
            // var uppercase = /^[A-Z]/;  ////Regular expression;
            


             if (!filter.test(Username)) {
                error = 1;
                alert("Enter valid email id.");

            }
            


            else if (!filter.test(pass)) {
                error = 1;
                alert("Enter valid email id.");

            }

            




            else {

                if (error == 0) {
                    document.getElementById("form").submit();
                }


            }



        }

       

    </script>

        
      
</body>
</html>
        