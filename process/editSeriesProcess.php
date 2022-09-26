<?php
    include('../db.php');
    if(isset($_POST['edit'])){

        $id = $_POST['id'];
        $name = $_POST['name'];
        $genre = $_POST['genre'];
        $realese = $_POST['release'];
        $episode = $_POST['episode'];
        $season = $_POST['season'];
        $synopsis = $_POST['synopsis'];
        
        $strgenre="";
        $tmpvar = 0;
        $number = count($genre);
        foreach ($genre as $mgenre) {
            $strgenre .= $mgenre;

            $tmpvar = $tmpvar + 1;
            if ($tmpvar < $number) {
                $strgenre .= ", ";
              }
        }

        if(empty($name) OR empty($genre) OR empty($realese) OR empty($episode) OR empty($season) OR empty($synopsis)){
            
            echo
                '<script>
                alert("Input Fields tidak boleh kosong");
                window.location = "../page/seriesPage.php";
                </script>';
        }else{
            
            $update = mysqli_query($con, "UPDATE `series` SET `name`='$name',`genre`='$strgenre',`realese`='$realese',`episode`='$episode',`season`='$season', `synopsis` = '$synopsis' WHERE id='$id'") or die(mysqli_error($con)); 
        
            if($update){
                echo
                    '<script>
                        alert("Update Success");
                        window.location = "../page/seriesPage.php"
                    </script>';
            }else{
                echo
                    '<script>
                        alert("Update Failed");
                    </script>';
                }
            }
        }else{
            echo
                '<script>
                    window.history.back()
                </script>';
        }

        
?>