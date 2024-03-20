<?php
	include ("baglantısı.php");
	
	$query = $db->query("SELECT * FROM dbtest", PDO::FETCH_ASSOC);
	if ( $query->rowCount() ){
		foreach( $query as $row ){
			print "<div style='padding:5px; margin:5px; background-color:#fff;'>"."Kullanıcı adın : ".$row['kullanıcı']."<br>"."Şifren : ".$row['dbpassword']."</div>";
		}
	}
?>