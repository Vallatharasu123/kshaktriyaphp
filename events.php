<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kshaktriya</title>
    <script src="assets/script/jquery.min.js"></script>
</head>
<body>
    <style>
        body{
            background: linear-gradient(0.25turn, #3f87a6, #ebf8e1, #f69d3c);
        }
        .event_details_container{
            padding:20px;
            background:rgba(255,255,255,0.3);
        }
        h1,h3{
            text-align:center;
        }
    </style>
<?php include 'db.php';
        $sql="select * from events where event_category='1' ";
        $result = $con->query($sql);
        if ($result->num_rows > 0) {  ?>
            <?php
    while($row = $result->fetch_assoc()) {  
    ?>
<div class="event_details_container">
    <h1>Technical Events</h1>
    <h3><?php echo $row['event_name'] ;?> </h3>
    <p class='desc'><?php echo $row['event_description'] ;?></p>
    <p>Event Coordinator : <?php echo $row['event_coordinator_name'] ;?></p>
    <p>Contact Number : <?php echo $row['event_coordinator_number'] ;?></p>
</div>
           

            <?php

    }
    }
else{
    echo "No Events";
}
    ?>
      
   <script> 
      var desc=$('.desc').html();
    desc=desc.split('@');
    $('.desc').html("Events Details : ")
    for (let index = 0; index <desc.length; index++) {
        let nonindex=index+1;
        $('.desc').append("<p class='event_details'>"+nonindex+"."+desc[index]+"</p>");
        
    }
   </script>
</body>
</html>