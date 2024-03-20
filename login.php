<?php

	include ("baglantısı.php");
	
	if($_POST)
	{
		$name =$_POST["name"];
		$pass =$_POST["pass"];


		$query  = $db->query("SELECT * FROM kullanıcı WHERE dbname='$name' && dbpassword='$pass'",PDO::FETCH_ASSOC);
		if ( $say = $query -> rowCount() ){

			if( $say > 0 ){
				session_start();
				$_SESSION['oturum']=true;
				$_SESSION['name']=$name;
				$_SESSION['pass']=$pass;
				
				print 'Hoş geldiniz '.$name;
				echo '
					<a href="logout.php">çıkış yap</a>
				';
				
			}else{
				echo "oturum açılmadı hata";
			}
		}else{
			echo "<h1>Kullanıcı adı veya şifre hatalı</h1>";
			echo '
				<form action="giris_yap.php" method="post">
					<input type="text" name="name"/>
					<input type="password" name="pass"/>
					<input type="submit" />
				</form>
			';
		}
	}else{
		echo " <h1> lütfen giriş yapın</h1>";
		echo '
			<form action="giris_yap.php" method="post">
				<input type="text" name="name"/>
				<input type="password" name="pass"/>
				<input type="submit" />
			</form>
		';
		echo 'üye değilseniz üye olmak için <a href="kayit.php">Tıklayın</a>';
	}
	
?>