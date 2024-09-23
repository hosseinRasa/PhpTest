<?php
$users = null;
 if($users  &&  count($users) > 0  )
    echo "hello";
$i = 0;
while($i  <= 10){
     $users[] = ["Name" => "hossein$i", "Family" => "rasa$i", "Age" => 20 + $i, "IsAdmin" => true] ;

    $i++;
}

include_once "functions.php";

echo "
<table style='border: 1px dotted black'>
<thead >
<th>
<tr>
<td>نام </td><td>نام خانوادگی</td><td>سن</td><td>ادمین؟</td>
</tr>
</th>
</thead>
<tbody >
";
?>
<?php foreach ($users as $user): ?>
<?php
echo"
<td style = 'border: 1px dotted black' > $user[Name]</td >
<td style = 'border: 1px dotted black' > $user[Family]</td >
<td style = 'border: 1px dotted black' > $user[Age]</td >
<td style = 'border: 1px dotted black' > " . var_export($user["IsAdmin"] , true)   ."</td >
</tr > 
"; ?>
<?php endforeach;?>

 </tbody>

</table> ;




