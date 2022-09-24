<?php
include('../db.php');

$id = $_GET['id'];
$query = mysqli_query($con, "SELECT * FROM movies WHERE id = '$id'") or die(mysqli_error($con));
$data = mysqli_fetch_array($query);

?>
<?php

include '../component/sidebar.php';
?>
<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <div class="body d-flex">
        <h4>Edit Page</h4>
    </div>
    <hr>


    <form action="../process/editMovieProcess.php" method="post">
    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input name="name" type="text" class="form-control" value="<?php echo $data["name"]; ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Genre</label>
            <input name="genre" type="text" class="form-control" value="<?php echo $data["genre"]; ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Release</label>
            <input name="release" type="text" class="form-control" value="<?php echo $data["realese"]; ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Season</label>
            <input name="season" type="text" class="form-control" value="<?php echo $data["season"]; ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Synopsis</label>
            <input name="synopsis" type="text" class="form-control" value="<?php echo $data["synopsis"]; ?>">
        </div>

        <button type="submit" name="editbtn" class="btn btn-primary">Edit</button>
    </form>