



<!DOCTYPE html>
<html lang="en">

<head>
    
    
    <style>
          
        .well {
            background: rgba(0, 0, 0, 0.7);
            border: none;
            height: 100px;
			width: 300px;
        }
        
        body {
            background-image: url('images/home_bg.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        
        h4 {
            color: #ffbb2b;
        }
        h6
        {
            color: navajowhite;
            font-family:  monospace;
        }


    </style>
    
    
</head>

<body>
   
        
        <?php
        $con = mysqli_connect('localhost','root','','hms');
       $sql ="SELECT * FROM `todo` ";
        $result = mysqli_query($con, $sql);
        if($result)
        {
            if(mysqli_num_rows($result) > 0)
            {
//      
                while($row = mysqli_fetch_array($result))
                {
                    
                    echo "<center>
                            <div class='row'>
                            <div class='col-md-2'></div>
                            <div class='col-md-6 well'>
							
                               <i> <h4>".$row['data']."</h4><hr>
                                <h6>Time: ".$row['stime']." </h6>
                                <h6>Date: ".$row['sdate']."</h6></i>
                                
                            </div>
                            &nbsp;&nbsp;
                            <a href='delete.php?id=".$row['id']."'><button class='btn btn-primary button'><i>Delete</i></button></a>
                            </div>
                            
                    </center>
                    
                         ";
                    
                    
                }
                
                
                          
            }
            else
            {
                echo "<center><b><i>NO Data Exist<hr></b></i></center>";
            }
        }
        else
        {
            echo "Cannot connect to server".$result;
        }
        
        
        
        
        
        ?>


    </div>
    
    
    
    
    




</body>

</html>