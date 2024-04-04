<?php 
    include('sidebar.php');
    $id = $_GET['id'];
    $rs = Connection()->query("SELECT * FROM `gallery` WHERE `id`='$id'");
    $row = mysqli_fetch_assoc($rs);
?>
                <div class="col-10">
                    <div class="content-right">
                        <div class="top" style="border-radius: 20px;  background-color:#a91bc6">
                            <h3 style="color:azure;">Add Sport News</h3>
                        </div>
                        <div class="bottom">
                            <figure>
                                <form method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>name</label>
                                        <input type="text" class="form-control" name="name" value="<?php echo $row['name']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>File</label>
                                        <input type="file" name="thumbnail" class="form-control">
                                        <input type="hidden" name="old_thumbnail" value="<?php echo $row['thumbnail']; ?>">
                                        <img src="./assets/image/<?php echo $row['thumbnail']; ?>" alt="" width="100px" height="100px">
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea class="form-control" name="description"><?php echo $row['description']; ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" name="btn_update_gallery" class="btn btn-danger">Update</button>
                                    </div>
                                </form>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
<script>
    $(document).ready(function(){
        $('#thumbnail').change(function(){
            $("img").hide();
        });
    })
</script>