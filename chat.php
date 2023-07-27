    <?php 
    session_start();
    include_once "connection.php";
    if(!isset($_SESSION['unique_id'])){
        header("location: login.php");
    }
    ?>
    <!DOCTYPE html>
        <!-- Coding By CodingNepal - youtube.com/codingnepal -->
        <html lang="en">
        <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Realtime Chat App | CodingNepal</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    </head>
    <body>
    <div class="wrapper">
        <section class="chat-area">
        <header>
            <?php 
            $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$user_id}");
            if(mysqli_num_rows($sql) > 0){
                $row = mysqli_fetch_assoc($sql);
            }else{
                header("location: users.php");
            }
            ?>
            <a href="users.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
            <img src="images/<?php echo $row['user_pdp']; ?>" alt="">
            <div class="details">
            <span><?php echo $row['first_name']. " " . $row['last_name'] ?></span>
            <p><?php echo $row['status']; ?></p>
            </div>
        </header>
        <div class="chat-box">

        </div>
        <form action="#" class="typing-area">
            <input type="text" class="incoming_id" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
            <input type="text" name="message" class="input-field" placeholder="Type a message here..." autocomplete="off">
            <button><i class="fab fa-telegram-plane"></i></button>
        </form>
        </section>
    </div>

    <script src="chat.js"></script> 

    </body>
    </html>
