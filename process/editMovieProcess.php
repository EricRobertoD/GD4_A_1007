<?php
include('../db.php');

if (isset($_POST['editbtn'])) {

    $id = $_POST['id'];
    $name = $_POST['name'];
    $genre = $_POST['genre'];
    $release = $_POST['release'];
    $season = $_POST['season'];
    $synopsis = $_POST['synopsis'];

    if(empty($name) OR empty($genre) OR empty($release) OR empty($season) OR empty($synopsis)){
        
        echo
        '<script>
        alert("Input Fields tidak boleh kosong");
        window.location = "../page/listMoviesPage.php";
        </script>';
    }else{ 
        $update = mysqli_query($con, "UPDATE `movies` SET `name`='$name',`genre`='$genre',`realese`='$release',`season`='$season', `synopsis` = '$synopsis' WHERE id='$id'") or die(mysqli_error($con)); 
        if($update){ 
            echo 
            '<script> 
                alert("Edit Success"); 
                window.location = "../page/listMoviesPage.php";
            </script>'; 
        }else{ 
            echo 
            '<script> 
                alert("Edit Failed"); 
                window.location = "../page/listMoviesPage.php";
            </script>'; 
        }
    }
}else{
    echo 
    '<script> 
        window.location = "../page/listMoviesPage.php";
    </script>';
}
?>