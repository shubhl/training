<?php
#https://paiza.io/projects/jWU9edi6pLKmQ-kML2quSg
    $marks = [
        [1, "sunil","manager",50000 ],
        [2,"sajan","ass.maneger",40000],
        [3, "anil","slaesman",25000]
        ];
        echo "<table border ='2px' cellpading = '2px',cellspacing= '0px'>
        <tr>
        <th>emp ,id </th>
        <th>name</th>
        <th>designation</th>
        <th>salary</th>
        </tr>
        
        ";
        
        foreach ($marks as list ($id,$name,$designation,$salary)){
          echo "<tr> <td>$id</td> <td>$name</td> <td>$designation</td> <td>$salary</td></tr>";  
        }
         echo "</table>"
        
?>
