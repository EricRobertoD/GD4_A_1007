<?php 
    include('../db.php');

    $id = $_SESSION['series']['id'] = $_GET['id'];
    $query = mysqli_query($con, "SELECT * FROM series WHERE id = '$id'") or die(mysqli_error($con));
    $data = mysqli_fetch_array($query);
    
    ?>
    <?php
    
    include '../component/sidebar.php';
    ?>
    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
        <div class="body d-flex">
            <h4>Edit Data Series</h4>
        </div>
        <hr>
    
    
        <form action="../process/editSeriesProcess.php" method="post">
        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input name="name" type="text" class="form-control" value="<?php echo $data["name"]; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Genre</label>
                        <label class="form-label">Genre</label>
                        <input type="text" class="form-control" value="<?php echo $data['genre'] ?>" disabled>
                        <select name="genre[]" size="2" class="form-control" multiple>
                            <option value="Action">Action</option>
                            <option value="Romance">Romance</option>
                            <option value="Fiction">Fiction</option>
                            <option value="Horror">Horror</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Year Release</label>
                        <input name="release" type="text" class="form-control" value="<?php echo $data["realease"]; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Episode</label>
                        <input name="episode" type="text" class="form-control" value="<?php echo $data["episode"]; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Season</label>
                        <input name="season" type="text" class="form-control" value="<?php echo $data["season"]; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Synopsis</label>
                        <input name="synopsis" type="text" class="form-control" value="<?php echo $data["synopsis"]; ?>">
                    </div>

                    <button type="submit" class="btn btn-primary" name="edit">Edit</button>

                </form> 