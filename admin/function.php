<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<?php 
    function Connection(){
        $connection = new mysqli('localhost','root','','project_introduction');
        return $connection;
    }

    function Resgister(){
        if(isset($_POST['btn_register'])){
            $username = $_POST['username'];
            $email= $_POST['email'];
            $password = $_POST['password'];
            $profile = $_FILES['profile']['name'];
            if(!empty($username) && !empty($email) && !empty($password) && !empty($profile)){
                $profile = date('dmyhis').'_'.$profile;
                $path = './assets/image/'.$profile;
                move_uploaded_file($_FILES['profile']['tmp_name'],$path);

                $password = md5($password);
                $sql = "INSERT INTO `user`(`username`, `email`, `password`, `profile`) VALUES ('$username','$email','$password','$profile')";
                $rs = Connection()->query($sql);
                if($rs){
                    header('location:login.php');
                }
            }
        }
    }
    Resgister();
    
    session_start();
    function Login(){
        if(isset($_POST['btn_login'])){
            $name_email = $_POST['name_email'];
            $password = $_POST['password'];
            if(!empty($name_email) && !empty($password)){
                $password = md5($password);
                $sql = "SELECT * FROM `user` WHERE (`username`='$name_email' OR `email`='$name_email') AND `password`='$password'";
                $rs = Connection()->query($sql);
                $row = mysqli_fetch_assoc($rs);
                if(!empty($row)){
                    $id = $row['id'];
                    $_SESSION['user']= $id;
                    header('location:index.php');
                }else{
                    echo '
                        <script>
                            $(document).ready(function(){
                                swal({
                                    title: "Error 404 not found",
                                    text: "We can not find this account",
                                    icon: "Error",
                                    button: "Back",
                                });
                            });
                        </script>
                    ';
                }
            }
        }
    }
    Login();
    function Logout(){
        if(isset($_POST['btn-logout'])){
            unset($_SESSION['user']);
        }
    }
    Logout();

    function Introduction(){
        if(isset($_POST['btn-add_introduction'])){
            // echo 112;
            $title = $_POST['title'];
            $description = $_POST['description'];
            $thumbnail = $_FILES['thumbnail']['name'];
            $tmp_thumbnail = $_FILES['thumbnail']['tmp_name'];

            if(!empty($title)&& !empty($thumbnail) && !empty($description)){
                $thumbnail = date('dmyhis').'_'.$thumbnail;
                $path = './assets/image/'.$thumbnail;
                move_uploaded_file($tmp_thumbnail,$path);
    
                $sql = "INSERT INTO `introduction`( `title`,`thumbnail`,`description`) VALUES ('$title','$thumbnail','$description')";
                $rs = Connection()->query($sql);
                if($rs){
                    echo '
                        <script>
                            $(document).ready(function(){
                                swal({
                                    title: "Success",
                                    text: "Insert success",
                                    icon: "success",
                                    button: "Done",
                                });
                            });
                        </script>
                    ';
                }
            }
            
        }
   }
   Introduction();

   function GetIntro(){
        $sql="SELECT * FROM `introduction` ORDER BY `id` DESC ";
        $rs = Connection()->query($sql);
        while($row = mysqli_fetch_assoc($rs)){
            echo'
                <tr>
                    <td>'.$row['title'].'</td>
                    <td><img src="./assets/image/'.$row['thumbnail'].'" width="80px" hieght="80px"></td>
                    <td>'.$row['description'].'</td>
                    <td>'.$row['create_at'].'</td>
                    <td width="150px">
                        <a href="update_intro.php?id='.$row['id'].'" class="btn btn-primary">Update</a>
                        <button type="button" remove-id="'.$row['id'].'" class="btn btn-danger btn-remove" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Remove
                        </button>
                    </td>
                </tr>
            ';
        }
   }

    function DeleteIntro(){
        if(isset($_POST['btn_delete_intro'])){
            $delete_id = $_POST['remove_id'];
            $sql = "DELETE FROM `introduction` WHERE `id` = '$delete_id'";
            $rs  = Connection()->query($sql);
            if($rs){
                echo'
                    <script>
                        $(document).ready(function(){
                            swal({
                                title: "Success",
                                text: "Delete success",
                                icon: "success",
                                button: "Done",
                            });
                        });
                    </script>
                ';
            }
        }
    }
    DeleteIntro();

    function UpdateIntro(){
        if(isset($_POST['btn_update_intro'])){
            $id = $_GET['id'];
            $title = $_POST['title'];
            $description = $_POST['description'];
            $thumbnail = $_FILES['thumbnail']['name'];
            $tmp_thumbnail = $_FILES['thumbnail']['tmp_name'];
            if(empty($thumbnail)){
                $thumbnail = $_POST['old_thumbnail'];
            }else{
                $thumbnail = date('dmyhis').'_'.$thumbnail;
                $path = './assets/image/'.$thumbnail;
                move_uploaded_file($tmp_thumbnail,$path);
            }
            if(!empty($title)&& !empty($thumbnail) && !empty($description)){
                $sql = "UPDATE `introduction` SET `title`='$title',`thumbnail`='$thumbnail',`description`='$description' WHERE `id`='$id'";
                $rs = Connection()->query($sql);
                if($rs){
                    echo '
                        <script>
                            $(document).ready(function(){
                                swal({
                                    title: "Success",
                                    text: "Update success",
                                    icon: "success",
                                    button: "Done",
                                });
                            });
                        </script>
                    ';
                }
            }
        }
    }UpdateIntro();

    function Gallery(){
        if(isset($_POST['btn-add_gallery'])){
            // echo 112;
            $name = $_POST['name'];
            $description = $_POST['description'];
            $thumbnail = $_FILES['thumbnail']['name'];
            $tmp_thumbnail = $_FILES['thumbnail']['tmp_name'];

            if(!empty($name)&& !empty($thumbnail) && !empty($description)){
                $thumbnail = rand(1,999).'_'.$thumbnail;
                $path = './assets/image/'.$thumbnail;
                move_uploaded_file($tmp_thumbnail,$path);
    
                $sql = "INSERT INTO `gallery`(`name`,`thumbnail`,`description`) VALUES ('$name','$thumbnail','$description')";
                $rs = Connection()->query($sql);
                if($rs){
                    echo '
                        <script>
                            $(document).ready(function(){
                                swal({
                                    title: "Success",
                                    text: "Insert success",
                                    icon: "success",
                                    button: "Done",
                                });
                            });
                        </script>
                    ';
                }
                else{
                    echo '
                        <script>
                            $(document).ready(function(){
                                swal({
                                    title: "Error",
                                    text: "Data Can Not Insert",
                                    icon: "error",
                                    button: "Done",
                                });
                            });
                        </script>
                    ';
                }
            }
            
        }
    }
    Gallery();

    function Getgallery(){
        $sql = "SELECT * FROM `gallery` ORDER BY id DESC";
        $rs = Connection()->query($sql);
        while($row = mysqli_fetch_assoc($rs)){
            echo '
                <tr>
                    <td>'.$row['name'].'</td>
                    <td><img src="./assets/image/'.$row['thumbnail'].'" width="80px" hieght="80px"></td>
                    <td>'.$row['description'].'</td>
                    <td>'.$row['create_at'].'</td>
                    <td width="150px">
                        <a href="update-gallery.php?id='.$row['id'].'" class="btn btn-primary">Update</a>
                        <button type="button" remove-id="'.$row['id'].'" class="btn btn-danger btn-remove" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Remove
                        </button>
                    </td>
                </tr>  
            ';
        }
    }

    function deleteGallery(){
        if(isset($_POST['btn_delete_gallery'])){
            $remove_id = $_POST['remove_id'];
            $sql = "DELETE FROM `gallery` WHERE `id` = '$remove_id'";
            $rs = Connection()->query($sql);
            if($rs){
                echo'
                    <script>
                        $(document).ready(function(){
                            swal({
                                title: "Success",
                                text: "Delete success",
                                icon: "success",
                                button: "Done",
                            });
                        });
                    </script>
                ';
            }
        }
    }
    deleteGallery();

    function UpdateGallery(){
        if(isset($_POST["btn_update_gallery"])){
            $id = $_GET['id'];
            $name = $_POST['name'];
            $description = $_POST['description'];
            $thumbnail = $_FILES['thumbnail']['name'];
            $tmp_thumbnail = $_FILES['thumbnail']['tmp_name'];
            
            if(empty($thumbnail)){
                $thumbnail = $_POST['old_thumbnail'];
            }
            else{
                $thumbnail = rand(1,999).'_'.$thumbnail;
                $path = './assets/image/'.$thumbnail;
                move_uploaded_file($tmp_thumbnail,$path);
            }

            if(!empty($name)&& !empty($thumbnail) && !empty($description)){
               
                $sql = "UPDATE `gallery` SET `name`='$name',`thumbnail`='$thumbnail',`description`='$description' WHERE `id`= '$id'";
                $rs  = Connection()->query($sql);
                if($rs){
                    echo '
                        <script>
                            $(document).ready(function(){
                                swal({
                                    title: "Success",
                                    text: "Update success",
                                    icon: "success",
                                    button: "Done",
                                });
                            });
                        </script>
                    ';
                }
            }
        }
    }
    UpdateGallery();

    function GetFeedback(){
        $sql ="SELECT * FROM `feedback` ORDER BY `id` DESC";
        $rs = Connection()->query($sql);
        while($row = mysqli_fetch_assoc($rs)){
            echo '
                <tr>
                    <td>'.$row['name'].'</td>
                    <td>'.$row['email'].'</td>
                    <td>'.$row['message'].'</td>
                    <td>'.$row['create_at'].'</td>
                    <td width="150px">
                        <a href="update-gallery.php?id='.$row['id'].'" class="btn btn-primary">Update</a>
                        <button type="button" remove-id="'.$row['id'].'" class="btn btn-danger btn-remove" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Remove
                        </button>
                    </td>
                </tr>  
            ';
        }
    }

?>