    <?php 
    session_start();
    if(isset($_SESSION['unique_id'])){
        header("location: users.php");
    }
    ?>
    <!DOCTYPE html>
        <!-- Coding By CodingNepal - youtube.com/codingnepal -->
        <html lang="en">
        <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>ChatConnect | Login</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
        <!--Google fonts link-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&family=Lexend+Deca:wght@400;500;800&family=Permanent+Marker&family=Poppins:ital,wght@0,400;0,800;1,500;1,600&family=Ubuntu:ital,wght@0,300;0,400;1,400;1,500&family=VT323&display=swap" rel="stylesheet">

    </head>
    <body>
    <div class="wrapper">
        <section class="form login">
        <header style="color: #9294F3; font-family: 'Permanent Marker', cursive;" class="title">LOGIN</header>
        <form action="LoginB.php" method="POST" enctype="multipart/form-data" autocomplete="off">
            <div class="error-text"></div>
            <div class="field input">
            <label>Email Address</label>
            <input type="text" name="email" placeholder="Enter your email" required>
            </div>
            <div class="field input">
            <label>Password</label>
            <input type="password" name="password" placeholder="Enter your password" required>
            <i class="fas fa-eye"></i>
            </div>
            <div class="field button">
            <input type="submit" name="submit" value="Continue to Chat">
            </div>
        </form>
        <div class="link">Not yet signed up? <a href="SignUp.php">Signup now</a></div>
        </section>
    </div>
    
    <script src="pass-show-hide.js"></script>
    <script src="login.js"></script>

    </body>
    </html>
