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
        margin-left: 500px;
        margin-right: 200px;
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
    p{
        margin-left: 150px;
        font-weight: bold;
        font-size: 1em;
        font-style: italic;
        font-family: cursive;
    }
</style>
</head>
<body>
    
    <h1>AREA OF CULTIVATION </h1>
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
                    <th>Column 22</th>
                    <th>Column 23</th>
                    <th>Column 24</th>
                    <th>Column 25</th>
                    <th>Column 26</th>
                    <th>Column 27</th>
                    <th>Column 28</th>
                    <th>Column 29</th>
                    <th>Column 30</th>
                    <th>Column 31</th>
                    <th>Column 32</th>
                    <th>Column 33</th>
                    <th>Column 34</th>
                    <th>Column 35</th>
                    <th>Column 36</th>

                </tr>
            </thead>
            <tbody>
                <?php
                    if(($csvfile = fopen("datafile/cultivation.csv","r"))!= FALSE){
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
                            echo '<td>'.$csvdata[21].'</td>';
                            echo '<td>'.$csvdata[22].'</td>';
                            echo '<td>'.$csvdata[23].'</td>';
                            echo '<td>'.$csvdata[24].'</td>';
                            echo '<td>'.$csvdata[25].'</td>';
                            echo '<td>'.$csvdata[26].'</td>';
                            echo '<td>'.$csvdata[27].'</td>';
                            echo '<td>'.$csvdata[28].'</td>';
                            echo '<td>'.$csvdata[29].'</td>';
                            echo '<td>'.$csvdata[30].'</td>';
                            echo '<td>'.$csvdata[31].'</td>';
                            echo '<td>'.$csvdata[32].'</td>';
                            echo '<td>'.$csvdata[33].'</td>';
                            echo '<td>'.$csvdata[34].'</td>';
                            echo '<td>'.$csvdata[35].'</td>';
                        echo '</tr>';
                    }
                }
                ?>
             </tbody>
        </table>
    </div>
    <p>Sources: 1. Directorate of Economics and Statistics, Ministry of Agriculture And Farmers Welfare<br>                             
                2.  Tea Board, Ministry of Commerce & Industry<br>                         
                3.  Coffee Board, Ministry of Commerce & Industry<br>                              
                4. Rubber Board, Ministry of Commerce & Industry <br>                           
                * Area as on 31.12.2013            P:  Provisional<br></p>                            

</body>
</html>