<?php 
	include ("baglantısı.php");
	
	if($_POST){
		// Post ettirdik
	$name		= $_POST["name"];
	$password	= $_POST["password"];
	
	//bütün kayıtları bir kereye mahsus olmak üzere listeliyoruz; daha doğrusu, bir diziye aktarmak için verileri çekiyoruz
		$yetkilisor = $db->prepare("SELECT * from kullanıcı");

        $yetkilisor->execute();
        $ukullanıcı = [];
        
        while ($YCek = $yetkilisor->fetch(PDO::FETCH_ASSOC)) {

            

        }

         // Çıktısı //queriyi tetikliyor
		//SELECT * FROM `kullanıcı`
		$result = $db->prepare("INSERT INTO kullanıcı SET dbname=?,dbpassword=?");
		

	}else{
		echo '
			<form action="" method="post"> 
				<label for="name">Name</label>
				<input type="text"  name="name" placeholder="Name"/>
				<label for="password">Password</label>
				<input type="password" name="password" placeholder="Password"/>
				<input type="e-posta" name="mail" placeholder="mail"/>
				<input type="Submit" value="Giriş Yap"/>
			</form>
			';
			echo 'üye iseniz giriş yapmak için <a href="giris_yap.php">tıklayın</a>';
	}