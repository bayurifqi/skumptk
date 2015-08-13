<html>
<head>
<meta charset="utf-8">
<?php
	include("lib_func.php");
?>
<title>SKUMPTK</title>
<link rel="SHORTCUT ICON" href="favicon.ico" />
<link href="css.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<table width="100%" align="center" border="0" bordercolor="#FFFFFF">
	<tr><td colspan="2" align="center" bgcolor="#006699"><?php header_web();?></td></tr>
	<tr>
		<td width="200px" valign="top" bgcolor="006699"><?php menu();?></td>
		<td valign="top"><p class="judul">PENAMBAHAN IDENTITAS BARU</p>
		<p>
        <?php
			error_reporting(0);
			$no_id=1;
			$link=koneksi_db();
			$nama=$_POST['nama'];
			$tempatlahir=$_POST['tempatlahir'];
			$tgllahir=$_POST['tgllahir'];
			$jk=$_POST['jk'];
			$agama=$_POST['agama'];
			$statuspgw=$_POST['statuspgw'];
			$jabatan=$_POST['jabatan'];
			$pangkatgol=$_POST['pangkatgol'];
			$instansi=$_POST['instansi'];
			$masakerja=$_POST['masakerja'];
			$gaji=$_POST['gaji'];
			$alamat=$_POST['alamat'];

			$sql="INSERT INTO `db_skumptk`.`t_id` (`no_id`, `nama`, `tempatlahir`, `tgllahir`, `jk`, `agama`, `statuspgw`, `jabatan`, `pangkatgol`, `instansi`, `masakerja`, `gaji`, `alamat`) VALUES ('$no_id','$nama','$tempatlahir','$tgllahir','$jk',
						'$agama','$statuspgw','$jabatan','$pangkatgol',
						'$instansi','$masakerja','$gaji','$alamat')";
			$res=mysql_query($sql,$link);
			if($res){
				/*$id_kategori=mysql_insert_id($link); */?> 
                <div class="info">Data Identitas baru telah disimpan dengan nama
                <b><?=$nama?></b></div>
                <?php
                } 
			else {
			?> 
            	<div class="error"><?php echo mysql_error(); ?>
                <br></div> 
                <?php
                } 
		?></p>
		<p>&nbsp; </p></td>
	</tr>
	<tr><td colspan="2" bgcolor="#006699"><?php footer_web();?></td></tr>
	</table>
</body>
</html>