<!-- @import jquery & sweet alert  -->
<?php
    function Connection(){
        $connection = new mysqli('localhost','root','','project_introduction');
        return $connection;
    }
    function GetIntro(){
        $sql = "SELECT * FROM `introduction` ORDER BY `id` DESC LIMIT 3";
        $rs= Connection()->query($sql);
        while($row = mysqli_fetch_assoc($rs)){
            echo '
                <div class="tm-media">
                    <img src="../admin/assets/image/'.$row['thumbnail'].'"  alt="Intro image">
                    <div class="tm-media-body">
                        <h2><a href="#" class="tm-text-primary">'.$row['title'].'</a></h2>
                        <p class="tm-mb-20 tm-text-small">
                            '.$row['description'].'
                        </p>
                        <span class="tm-text-secondary tm-media-span tm-text-small">
                            '.$row['create_at'].'
                        </span>
                        <hr class="tm-hr tm-mr">
                    </div>
                </div>
            ';
        }
        
    }
    
    function GetGallery(){
        $sql = "SELECT * FROM `gallery` ORDER BY `id` DESC";
        $rs = Connection()->query($sql);
        while($row = mysqli_fetch_assoc($rs)){
            echo'
                <figure class="effect-goliath tm-gallery-item">
                    <img src="../admin/assets/image/'.$row['thumbnail'].'" alt="Image" width="300px" height="200px" style="object-fit: cover;" />
                    <figcaption>
                        <h2>'.$row['name'].'</h2>
                        <p>'.$row['description'].'</p>
                        <a href="../admin/assets/image/'.$row['thumbnail'].'">View more</a>
                    </figcaption>			
                </figure>
            ';
        }
    }

    function FeedBack(){
        if(isset($_POST['btn-feedback'])){
            $name = $_POST['name'];
            $email= $_POST['email'];
            $message = $_POST['message'];
            if(!empty($name) && !empty($email) && !empty($message)){
                $sql = "INSERT INTO `feedback`(`name`, `email`, `message`) VALUES ('$name','$email','$message')";
                $rs  = Connection()->query($sql);
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
    FeedBack();
?>