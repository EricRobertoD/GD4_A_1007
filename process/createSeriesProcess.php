<?php
    if(isset($_POST['create'])){
        include('../db.php');

        $name = $_POST['name'];
        $genre = $_POST['genre'];
        $realese = $_POST['release'];
        $episode = $_POST['episode'];
        $season = $_POST['season'];
        $synopsis = $_POST['synopsis'];

        if(empty($name) OR empty($genre) OR empty($realese) OR empty($episode) OR empty($season) OR empty($synopsis)){
            
            echo
                '<script>
                alert("Input Fields tidak boleh kosong");
                window.location = "../page/seriesPage.php";
                </script>';
        }else{
            
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
            $query = mysqli_query($con, "INSERT INTO series(name, genre, realese, episode, season, synopsis) VALUES('$name', '$strgenre', '$realese', '$episode', '$season', '$synopsis')") or die(mysqli_error($con)); 
        
            if($query){
                echo
                    '<script>
                        alert("Create Success");
                        window.location = "../page/seriesPage.php"
                    </script>';
            }else{
                echo
                    '<script>
                        alert("Create Failed");
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