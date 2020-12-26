<title>CSV</title>
<?php

//Change the wheels.csv to your csv file name

$file = fopen("wheels.csv","r");
while (($row = fgetcsv($file, 0, ";")) !== FALSE) {
    //runs untill rows of the csv files end!
    foreach($row as $d){
        $stmt = "INSERT INTO table_name (`vendor`, `model`, `year`, `modification`, `lz_bolt`, `pcd_pattern`, `dia_center`, `bolt`, `create_time`, `description`) VALUES ('". $row[1] . ". ', '". $row[2] . ". ', '". $row[3]. ". ', '". $row[4] .". ', '". $row[5] .". ', '". $row[6] .". ', '". $row[7] .". ', '". $row[8]. ". ', '". $row[9]. ". ', '". $row[10]. ". '); <br>";
        echo $stmt;
        
    }
    
}
$message  = "Converted successfully!";
echo "<script>alert('$message');</script>"; 


?>
