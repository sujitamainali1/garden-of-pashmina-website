<?php
    session_start();
?>

<table>
    <thead>
        <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Password</th>
            <th>Operation</th>

</tr>
</thead>

<tbody>

<?php
    include_once '../script/view.php';
    if(isset($_SESSION ['allusers'])){
        $allusers = $_SESSION['allusers'];
        foreach ($allusers as $individualUser){
            echo "<tr>";
            echo "<td>". $indiviualUser ['firstname']. "</td>";
            echo "<td>".$individualUser['lastname']."</td>";
            echo "<td>".$individualUser['email']."</td>";
            echo "<td>"."<a href ='update.php?email=$individualUser[email]&firstname=$individualUser[firstname]&lastname=$individualUser[lastname]   '> <button>Edit</button></a>" . "</td>"; 
            echo "<td>"."<a href ='../script/delete.php?'email=$individualUser[email]&firstname=$individualUser[firstname]&lastname=$individualUser[lastname]   '> <button>Delete</button></a>" . "</td>"; 

            echo "</tr>";
        }
    }
?>




<!-- <tr>
        <td>John</td>
        <td>Cena</td>
        <td>Johnwwe@gmail.com</td>
    <</tr>
    <tr>
    <td>sujita</td>
        <td>mainali</td>
        <td>smainali@gmail.com</td>
    </tr> -->

</table>