<script type="text/javascript">
function showStuff(id) {
    var x = document.getElementById(id);
	if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
</script>
<pre>
	Jika Tabel Guru Klik Button
	
		 <button onclick="showStuff('id_guru'); return false;">Tabel Guru</button>

<form action="" method="post">
	Tabel    <select name="tbl">                 
				<option value="kosong">Pilih</option>
				<option value="tbl_guru" onclick="showStuff('id_guru'); return false;">Guru</option>
				<option value="tbl_siswa">Siswa</option>
			 </select>
	
	ID Awal  <input type="text" name="iduserawal">
	
	ID Akhir <input type="text" name="iduserakhir">
	<div id="id_guru" style="display: none;">
	ID Guru  <select name="id_tengah">
				<option value="1802">1802</option>
				<option value="1803">1803</option>
			</select>
	</div>
	<input type="submit" name="submit">
</pre>
</form>


<?php
$host = "localhost";
	$user = "smkmkuni_ol";
	$pass = "kuningan45511";
	$db = "smkmkuni_ol";
	
	try{
		$con = mysqli_connect($host, $user, $pass);
		$pdo = new pdo("mysql:host=$host;dbname=$db", $user, $pass);
		$pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
		//echo "Koneksi Berhasil";
		$dbh = null;
	}catch (Exception $e){
		echo "Koneksi atau Query Bermasalah => ".$e->getMessage();
	}
		
if (isset($_POST['submit'])){
	
	$tbl = $_POST['tbl'];
	$tengah = $_POST['id_tengah'];
	$awal = $_POST['iduserawal'];
	$akhir = $_POST['iduserakhir'];
	
	
	if ($tbl == "kosong"){
		echo "Silahkan pilih tabel dulu.";
	}else{
		
		echo "ID Awal : ".$awal." <br/>ID Akhir : ".$akhir."<br/><br/>";
		for ($i = $awal; $i < $akhir; $i++){
			if (strlen($i) == 1){
				$nol = "00";
			}else if (strlen($i) == 2){
				$nol = "0";
			}else if (strlen($i) == 3){
				$nol = "";
			}
			if ($tbl == "tbl_guru"){
				$u[$i] = $pdo->query("SELECT * FROM tbl_guru WHERE id_guru='GRU.$tengah.$nol$i'")->fetch();
				$a     = $pdo->query("SELECT * FROM admin WHERE username='GRU.$tengah.$nol$i'")->fetch();
				if ($u[$i]['id_guru'] == "GRU.$tengah.$nol$i"){
					if ($a['username'] == "GRU.$tengah.$nol$i"){
						echo "[<span style='color:red'> Failed! </span>] GRU.1802.$nol$i Sudah Aktif.<br/>";
					}else{
						
						$insert = $pdo->query("INSERT INTO admin(id, username, password, nama, foto, Level) VALUES ('', '".$u[$i]['id_guru']."', '".md5($u[$i]['id_guru'])."', '".$u[$i]['nama_guru']."', 'profil1.jpg', 'Guru')");
						if ($insert){
							echo "[<span style='color:green'> Success! </span>] ".$u[$i]['id_guru']." - ".$u[$i]['nama_guru']." Berhasil diaktifkan.<br/>";
						}else{
							echo "[<span style='color:red'> Failed! </span>] ".$u[$i]['id_guru']." - ".$u[$i]['nama_guru']." Gagal diaktifkan.<br/>";
						}
					}
				}else{
					echo "[<span style='color:red'> Failed! </span>] GRU.1802.$nol$i tidak ada di tabel guru.<br/>";
				}
			}else if ($tbl == "tbl_siswa"){
				$u[$i] = $pdo->query("SELECT * FROM tbl_siswa WHERE id_siswa='$i' LIMIT 900000")->fetch();
				$a     = $pdo->query("SELECT * FROM admin WHERE username='".$u[$i]['NIS']."' LIMIT 900000")->fetch();
				if ($u[$i]['id_siswa'] == "$i"){
					if ($a['username'] == $u[$i]['NIS']){
						echo "[<span style='color:red'> Failed! </span>] ID $i - NIS ".$u[$i]['NIS']." Sudah Aktif.<br/>";
					}else{
						
						$insert = $pdo->query("INSERT INTO admin(id, username, password, nama, foto, Level) VALUES ('', '".$u[$i]['NIS']."', '".md5($u[$i]['NIS'])."', '".$u[$i]['nama_siswa']."', 'profil1.jpg', 'Siswa')");
						if ($insert){
							echo "[<span style='color:green'> Success! </span>]  ID $i - NIS ".$u[$i]['NIS']." Berhasil diaktifkan.<br/>";
						}else{
							echo "[<span style='color:red'> Failed! </span>]  ID $i - NIS ".$u[$i]['NIS']." Gagal diaktifkan.<br/>";
						}
					}
				}else{
					echo "[<span style='color:red'> Failed! </span>] ID $i tidak ada di tabel siswa.<br/>";
				}
			}
		}
	}
}
?>
