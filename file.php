<!DOCTYPE>
<html>
	<body>
		<?php
		    $readFile = fopen("read.txt","r");	
		    $writeFile = fopen("write.txt","w") or die("Unable to open file!");	 
		    $data = fread($readFile,filesize("read.txt"));
		    echo $data;
		    
		    fwrite($writeFile,$data);
		    fclose($readFile);
		    fclose($writeFile);		    
		?>
	</body>
</html>
