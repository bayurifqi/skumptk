<html>
<head>
<?php
	include("lib_func.php");
?>
<title>Situs e-Order</title>
<link rel="SHORTCUT ICON" href="favicon.ico">
<link href="css.css" rel="stylesheet" type="text/css">
</head>
<body>
<table width="100%" align="center" border=0 bordercolor="#FFFFFF">
<tr><td colspan=2 align="center" bgcolor="#006699"><?php header_web();?></td></tr>
<tr>
	<td width="200px" valign="top" bgcolor="006699"><?php menu();?></td>
	<td valign="top"><p class="judul">DATA IDENTITAS PEGAWAI</p>
	<?php
	$link=koneksi_db();
	$sql="SELECT * FROM t_id";
	$res=mysql_query($sql,$link) or die(mysql_error());
	$banyakrecord=mysql_num_rows($res);
	if($banyakrecord>0){
	?>
		<div class="info">Data ditemukan sebanyak: <b><?php echo $banyakrecord;?></b> Record</div>
		<table border=0 align="center">
			<tr class="judultable"><td colspan=10>IDENTITAS</td></tr>
			<tr class="judultable"> 
						<td>Nama</td>
						<td>Tempat Lahir</td>
						<td>Tanggal Lahir</td>
						<td>Jenis Kelamin</td>
						<td>Agama</td>
						<td>Status Kepegawaian</td>
						<td>Jabatan Struktural/Fungsional</td>
						<td>Pangkat/Golongan</td>
						<td>Instansi</td>
						<td>Masa Kerja Golongan</td>
						<td>Di Gaji Menurut</td>
						<td>Alamat</td>
			</tr>
			<?php
				$i=0;
				while($data=mysql_fetch_array($res)){
					$i++;
			?>
			<tr class="<?php if($i%2==1) echo "isitabelganjil";else echo "isitabelgenap";?>">
				
				<td><?php echo $data['nama'];?></td>
				<td><?php echo $data['tempatlahir'];?></td>
				<td><?php echo $data['tgllahir'];?></td>
				<td><?php echo $data['jk'];?></td>
				<td><?php echo $data['agama'];?></td>
				<td><?php echo $data['statuspgw'];?></td>
				<td><?php echo $data['jabatan'];?></td>
				<td><?php echo $data['pangkatgol'];?></td>
				<td><?php echo $data['instansi'];?></td>
				<td><?php echo $data['masakerja'];?></td>
				<td><?php echo $data['gaji'];?></td>
				<td><?php echo $data['alamat'];?></td>


				<!--<td align="right"><?php echo number_format($data['harga'],0);?></td>
				<td align="right"><?php echo number_format($data['stok'],0);?></td>
				<td align="right"><?php echo number_format($data['diskon'],0);?>%</td>
				<td align="center"><?php echo $data['dijual'];?></td>
				<td align="center"><?php echo $data['dihapus'];?></td>-->
			</tr>
		<?php
			}
		?>
		</table>
	<?php
	}
	else{
	?>
		<div class="warning">Data tidak ditemukan!.</div>
	<?php
	}
	?>
	<p>&nbsp; </p></td>
</tr>
<tr><td colspan=2 bgcolor="#006699"><?php footer_web();?></td></tr>
</table>
</body>
</html>