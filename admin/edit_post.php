<?php 

    require_once "connect.php";

    session_start();

    if (!isset($_SESSION['username'])) {
        header("location: login.php");
    }

    if (isset($_GET['edit'])) {
        $edit_id = $_GET['edit'];

        $edit_query = "SELECT * FROM posts WHERE post_id = '$edit_id'";

        $run_edit = mysqli_query($conn, $edit_query);

        while ($edit_row = mysqli_fetch_array($run_edit)) {
            $post_id = $edit_row['post_id'];
            $post_title = $edit_row['post_title'];
            $post_author = $edit_row['post_author'];
            $post_date = date('y-m-d');
            $post_keywords = $edit_row['post_keywords'];
            $post_image = $edit_row['post_image'];
            $post_content = $edit_row['post_content'];
        }
    }

    if (isset($_POST['submit'])) {
        $update_id = $_GET['edit_form'];
        $post_title = $_POST['title'];
        $post_date = date('y-m-d');
        $post_author = $_POST['author'];
        $post_keywords = $_POST['keywords'];
        $post_content = $_POST['content'];
        $post_image = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];

        move_uploaded_file($image_tmp, "../img/$post_image");

        $update_query = "UPDATE posts SET post_title = '$post_title', post_date = '$post_date', post_author = '$post_author',
                            post_image = '$post_image',post_keywords = '$post_keywords',post_content = '$post_content' WHERE post_id = '$update_id'";

        if (mysqli_query($conn, $update_query)) {
            echo "<script>alert('Post has been updated');</script>";
            header("location: view_posts.php");
         } else {
            echo "<script>alert('Somethin wrong!');</script>";
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
 
    <link rel="stylesheet" href="css/adminstyle.css">

 
</head>
<body>
  

    <header>
        <div class="container">
            <h1>Welcome to Admin Page Mr.<?php echo $_SESSION['username']; ?></h1>
        </div>
    </header>

    <section class="content">
        <div class="content_grid">
       
            <div class="sidebar">
                <h1>Welcome : </h1>
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
                <h1> Edit Post</h1>
                <form action="edit_post.php?edit_form=<?php echo $post_id; ?>" method="post" enctype="Multipart/form-data">

                    <table width="100%" align="center" border="6">
                    <tr>
                        <td align="center" colspan="6"><h1>Edit Post</h1></td>
                    </tr>
                   
                    <tr>
                        <td>Post Title</td>
                        <td><input type="text" name="title" size="50" value="<?php echo $post_title; ?>"></td>
                    </tr>
                   
                    <tr>
                        <td>Post Author</td>
                        <td><input type="text" name="author" size="50" value="<?php echo $post_author; ?>"></td>
                    </tr>
                    
                    <tr>
                        <td>Post Keywords</td>
                        <td><input type="text" name="keywords" size="50" value="<?php echo $post_keywords; ?>"></td>
                    </tr>
                    
                    <tr>
                        <td>Post Image</td>
                        <td><input type="file" name="image" size="50"><img width="100" height="100" src="../img/<?php echo $post_image; ?>" alt=""></td>
                    </tr>
                   
                    <tr>
                        <td>Post Content</td>
                        <td><textarea name="content" cols="50" rows="15"><?php echo $post_content;  ?></textarea></td>
                    </tr>
                   
                    <tr>
                        <td align="center" colspan="6"><input type="submit" name="submit" value="Update Now"></td>
                    </tr>


                    </table>
                </form>
            </div>
        </div>
    </section>
</body>
</html>