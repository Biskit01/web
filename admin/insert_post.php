<?php

    session_start();
    
    require_once "connect.php";


    if (!isset($_SESSION['username'])) {
        header('location: login.php');
    }

    if(isset($_POST['submit'])) {

        $post_title = $_POST['title'];
        $post_date = date('y-m-d');
        $post_author = $_POST['author'];
        $post_class = $_POST['class'];
        $post_content = $_POST['content'];
        $post_image = $_FILES['image']['name'];
        $image_tmp = $_FILES['name']['tmp_name'];

        move_uploaded_file($image_tmp, "../img/$post_image");

        $insert_query = "INSERT INTO posts (post_title, post_date, post_author, post_image, post_keywords, post_content )
                        VALUES ('$post_title', '$post_date', '$post_author', '$post_image', '$post_keywords', '$post_content')"; 
    
                if (mysqli_query($conn, $insert_query)) {
                    echo "<script>alert('Post published successfully');</script>";
                    header("location: view_posts.php");
                } else {
                    echo"<script>alert('Something wrong!);</script>";
            }
    }

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Post page</title>
 
    <link rel="stylesheet" href="css/ggg.css">

 
</head>
<body>
  

    <header>
        <div class="container">
            <h1>Welcome to Admin Page Mr.</h1>
        </div>
    </header>

    <section class="content">
        <div class="content_grid">
       
            <div class="sidebar">
            <div class ="aaa">
                   <button class="ll" <input type="button" onclick="window.location.href='index.php'" value="link_text">Home</button>
                </div>
                <div class ="aaa">
                   <button class="ll"<input type="button" onclick="window.location.href='view_posts.php'" value="link_text">view Posts</button>
                </div>
                <div class ="aaa">
                   <button class="ll"<input type="button" onclick="window.location.href='insert_post.php'" value="link_text">Insert Post</button>
                </div>
                <div class ="aaa">
                   <button class="ll"<input type="button" onclick="window.location.href='logout.php'" value="link_text">Log out</button>
                </div>
            </div>
        
            <div class="showinfo">
                <h1>View ALL Post</h1>
                <form action="insert_post.php" method="post" enctype="Multipart/form-data">

                    <table width="100%" align="center" border="6">
                    <tr>
                        <td align="center" colspan="6"><h1>Insert New Post</h1></td>
                    </tr>
                  
                    <tr>
                        <td>Post Title</td>
                        <td><input type="text" name="title" size="50"></td>
                    </tr>
                   
                    <tr>
                        <td>Post Author</td>
                        <td><input type="text" name="author" size="50"></td>
                    </tr>
                    
                    <tr>
                        <td>Post Class</td>
                        <td><input type="text" name="Class" size="50"></td>
                    </tr>
                   
                    <tr>
                        <td>Post Image</td>
                        <td><input type="file" name="image" size="50"></td>
                    </tr>
                   
                    <tr>
                        <td>Post Content</td>
                        <td><textarea name="content" cols="50" rows="15"></textarea></td>
                    </tr>
                   
                    <tr>
                        <td align="center" colspan="6"><input type="submit" name="submit" value="Publish Now"></td>
                    </tr>

                    </table>
                </form>
            </div>
        </div>
    </section>
</body>
</html>