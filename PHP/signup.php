<?php session_start();

// Style the page
echo '<style>

body{
    margin : 0;
    padding: 0;
    background: linear-gradient(to left, rgb(0, 114, 187), rgb(113, 122, 239));
    height: 100vh;
    overflow: hidden;
}

.form-container{
    position: relative;
    top: 50%;
    transform: translateY(-50%);
    font-family: "Roboto", sans-serif;
    width: 100%;
    max-width: 500px;
    margin: 0 auto;
}

.form-container{
   position: absolute;
   top: 50%;
   left: 50%;
   transform: translate(-50%, -50%);
   width: 400px;
   background: white;
   border-radius: 10px;
}

.form-container h1{
    text-align: center;
    padding: 20px 0;
    font-size: 30px;
    font-weight: bold;
    border-bottom: 1px solid #2c3e50;
}

.form-container form{
padding: 0 40px;
box-sizing: border-box;
}

form .text_field{
    position: relative;
    border-bottom: 1px solid #2c3e50;
    margin: 30px 0;
}

.text_field input{
    width: 100%;
    padding: 0 5px;
    height: 40px;
    font-size: 15px;
    border: none;
    outline: none;
    background: none;
}

.submit-signup{
    width: 100%;
    height: 40px;
    background: #2c3e50;
    border: none;
    outline: none;
    color: white;
    font-size: 15px;
    cursor: pointer;
    border-radius: 20px;
    margin-top: 20px;
}

</style>';

// Head of the page
echo '<head>
<title>Sign Up</title>
</head>';

// Make sign-up form if you know that user is not logged in
if (!isset($_SESSION['user_id'])) {
    echo '<div class="form-container">';
    echo '<h1>Sign Up</h1>';
    echo '<form action="signup.php" method="post">
        <div class="text_field">
            <input autofocus class="form-control" name="username" placeholder="Username" type="text" required/>
        </div>
        <div class="text_field">
            <input class="form-control" name="password" placeholder="Password" type="password" required/>
        </div>
        <div class="text_field">
            <input class="form-control" name="confirmation" placeholder="Confirm Password" type="password" required/>
        </div>
       
        <button type="submit" class="submit-signup">Sign Up</button>
    </form>';
    echo '</div>';
}
