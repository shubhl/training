<?php
#https://paiza.io/projects/klycQecYwpMoZGhxTUJ7Fg
    $marks = [
        "rohit"=>["physics"=>80,"chemistry"=>70,"maths"=>80 ],
        "sunil"=>["physics"=>78,"chemistry"=>70,"maths"=>80 ],
        "abhishek"=>["physics"=>60,"chemistry"=>70,"maths"=>80 ]
        ];
        //multidimentional associative array with tabulor form
        echo "<table border ='2px' cellpading = '5x' callspacing = '0px'>
                <th>student name</th>
                <th>physics</th>
                <th>chemistry</th>
                <th>maths</th>
        ";
          
        foreach ($marks as $key=>$v1){
    
              echo "<tr>
                <td>$key</td>";
                
              foreach ($v1 as $v2){
            
                echo "<td>$v2 </td>" ;
                
            }
            echo "</tr>";
        }
        echo "</table>";
        
    ?>
