<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cropyeild</title>
    <style type="text/css">
    .container{
        margin:0 auto;
        width:80%;
        overflow:auto;
    }
    h1{
        margin-left: 350px;
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
    a: link{
        color: black;
    }
    .more{
    float:right; 
    margin-top: -1.25em ; 
    text-align: right; 
    padding-right:.5em ;
    max-width:45%
  }

</style>
</head>
<body>
    
    <h1>YEAR-WISE CROP YEILD PRODUCTION INDEX </h1>
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
                    <th>Column 8</th>
                    <th>Column 9</th>
                    <th>Column 10</th>
                    <th>Column 11</th>
                    <th>Column 12</th>
                    <th>Column 13</th>
                    <th>Column 14</th>
                    <th>Column 15</th>
                    <th>Column 16</th>
                    <th>Column 17</th>
                    <th>Column 18</th>
                    <th>Column 19</th>
                    <th>Column 20</th>
                    <th>Column 21</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if(($csvfile = fopen("datafile/Cropsyield.csv","r"))!= FALSE){
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
                            echo '<td>'.$csvdata[7].'</td>';
                            echo '<td>'.$csvdata[8].'</td>';
                            echo '<td>'.$csvdata[9].'</td>';
                            echo '<td>'.$csvdata[10].'</td>';
                            echo '<td>'.$csvdata[11].'</td>';
                            echo '<td>'.$csvdata[12].'</td>';
                            echo '<td>'.$csvdata[13].'</td>';
                            echo '<td>'.$csvdata[14].'</td>';
                            echo '<td>'.$csvdata[15].'</td>';
                            echo '<td>'.$csvdata[16].'</td>';
                            echo '<td>'.$csvdata[17].'</td>';
                            echo '<td>'.$csvdata[18].'</td>';
                            echo '<td>'.$csvdata[19].'</td>';
                            echo '<td>'.$csvdata[20].'</td>';


                        echo '</tr>';
                        
                    }
                }
                ?>

            </tbody>
        </table>
    </div>
        <div class ="more"><a href ="cropyeild1.php" > see all </a></div>
</body>
</html>