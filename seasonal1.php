<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seasonalcrop</title>
    <link rel="stylesheet" href="navbar.css">
    <style type="text/css">
    .container{
        margin:0 auto;
        width:80%;
        overflow:auto;
    }
    h1{
        margin-left: 250px;
        margin-right: 100px;
        margin-bottom: 30px;
        margin-top: 50px;    
        font-weight: bold;
        color: maroon;
        font-style: italic;
    
    }   
    table.gridtable{
        margin:0 auto;
        width:95%;
        overflow:auto;
        font-family: helvetica,arial,sans-serif;
        font-size:15px;
        color:black;
        border-width:2px;
        border-color:black;
        border-collapse: collapse;
        text-align:center;
        background-color: lightgreen;
    }
    table.gridtable th{
        border-width: 2px;
        padding:10px;
        border-style: solid;
        border-color:black;
        background-color:green;
    }
    table.gridtable td{
        border-width: 2px;
        padding:10px;
        border-style:solid;
        border-color:black;
        background-color: lightgreen;
    }
    .error{
        color:white;
        background-color: red;
    }
    body{
        background-color: white; 
    }
   

</style>
</head>
<body>
    
    <h1>STATE-YEAR WISE CROP PRODUCTION ITS SEASON AND AREA </h1>
    <div class="container">
        <table class="gridtable">
            <thead>
                <tr>
                    <th>Column 1</th>
                    <th>Column 2</th>
                    <th>Column 3</th>
                    <th>Column 4</th>
                    <th>Column 5</th>
                    <th>Column 6</th>
                    <th>Column 7</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if(($csvfile = fopen("datafile/seasonalcropdata.csv","r"))!= FALSE){
                        while (($csvdata = fgetcsv($csvfile,1000, ",")) != FALSE){
                            $colcount = count($csvdata);
                            echo '<tr>';
                            echo '<td>'.$csvdata[0].'</td>';
                            echo '<td>'.$csvdata[1].'</td>';
                            echo '<td>'.$csvdata[2].'</td>';
                            echo '<td>'.$csvdata[3].'</td>';
                            echo '<td>'.$csvdata[4].'</td>';
                            echo '<td>'.$csvdata[5].'</td>';
                            echo '<td>'.$csvdata[6].'</td>';
                        
                        echo '</tr>';
                    }
                }
                ?>

            </tbody>
        </table>
    </div>
</body>
</html>