<?php
    include '../component/sidebar.php'
?>

        <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
        <h4 >SHOW PROFILE</h4>
        <hr>
        <div class="d-flex">
        
            <table class="table ">
            <tr>
                <th>Name</th>
                <td><?php echo $_SESSION["user"]["name"];?></td> 
            </tr>

            <tr>
                <th>Email</th>
                <td><?php echo $_SESSION["user"]["email"];?></td>
            </tr>

            <tr>
                <th>Phone Number</th>
                <td><?php echo $_SESSION["user"]["phonenum"];?></td> 
            </tr>

            <tr>
                <th>Membership</th>
                <td><?php echo $_SESSION["user"]["membership"];?></td> 
            </tr>
    
        </table>

        </div>
</body>
</html>