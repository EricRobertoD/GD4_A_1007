<?php
include('../db.php');

?>
<?php

include '../component/sidebar.php';
?>
    <html>
        <body>
            <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
            <div class="body d-flex justify-content-between">
                <h4>Add New Data Series</h4>
                <a href="../page/seriesPage.php"><i style="color: red" class="fa fa-arrow-left fa-2x"></i></a>
            </div>

            <hr>
                <form action="../process/createSeriesProcess.php" method="post">
                    
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input name="name" type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Genre</label>
                        <select name="genre[]" size="2" class="form-control" multiple>
                            <option value="Action">Action</option>
                            <option value="Romance">Romance</option>
                            <option value="Fiction">Fiction</option>
                            <option value="Horror">Horror</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Year Release</label>
                        <input name="release" type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Episode</label>
                        <input name="episode" type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Season</label>
                        <input name="season" type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Synopsis</label>
                        <input name="synopsis" type="text" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary" name="create">Save</button>

                </form> 
            </div>
            </aside>
        </body>
    </html>
        