<?php

include 'connect.php';

error_reporting(0);

if(isset($_POST['submit1'])){
    $name = $_POST['name1'];
    $email = $_POST['email1'];
    $comment = $_POST['comment1'];

    $sql = "INSERT INTO comments (name, email, comment)
             VALUES ('$name', '$email', '$comment')";
    $result = mysqli_query($conn, $sql);
    if($result ){
        echo "<script>alert('Comment added succesfully.')</script>";
    } else{
        echo "<script>alert('Comment does not add.')</script>";
    }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comment Box</title>

    <link rel="stylesheet" href="CommentStyle.css">
</head>
<body>
    <div class="wrapper">
        <form action="" method="POST" class="form1">
            <div class="row">
                <div class="input-group">
                    <label for="name">Name</label>
                   <input type="text" name="name1" id="name" placeholder="Enter your Name" required> 
                </div>
                <div class="input-group">
                    <label for="email">Email</label>
                   <input type="text" name="email1" id="email" placeholder="Enter your Email" required> 
                </div>
            </div>
            <div class="input-group textarea">
                <label for="comment">Comment</label>
               <textarea type="text" name="comment1" id="comment" placeholder="Enter your Comment" required></textarea> 
            </div>
            <div class="input-group">
                <button name="submit1" class="btn1">Post Comment</button>
            </div>
        </form>
        <div class="prev-comments">
            <?php
            
            $sql = "SELECT * FROM comments";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0){
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <div class="single-item">
                <h4><?php echo $row['name']; ?></h4>
                <a href="mailto:<?php echo $row['email']; ?>"><?php echo $row['email']; ?></a>
                <p><?php echo $row['comment']; ?></p>
            </div>
            <?php
                }
            }
            
            ?>

        </div>
    </div>
</body>
</html>