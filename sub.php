<?php
$c = @mysqli_connect("localhost","root","","techxnoss");
$q = "CREATE TABLE `techxnoss`.`subscribers` ( `user_id` INT NOT NULL AUTO_INCREMENT , `email` TEXT NOT NULL , `date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`user_id`))";
$s = $c->query($q);
if($s){
print_r("Table created");
}else{
print_r("Error");
}
?>

