<html>
<head>
<?php
	include ("lib_func.php");
?>
<title>SKUMPTK</title>

<link rel="SHORTCUT ICON" href="favicon.ico"> 
<link href="css.css" rel="stylesheet" type="text/css">
</head>
<body>
	<table width="100%" align="center" border="0" bordercolor="#FFFFFF">
	<tr><td colspan="2" align="center" bgcolor="#006699"><?php header_web();?></td></tr>
	<tr>
		<td width="200px" valign="top" bgcolor="#006699"><?php menu();?></td>
		<td valign="top"><p class="judul"><center><h3><b>PENAMBAHAN IDENTITAS<br><hr color="#006699"></b></h3></center></p>
		<p>
        <form method="post" action="id_proses_tambah.php">
        <table align="center" bgcolor="white" border="0">
        	<tr><td colspan="2" align="center" class="judultable"><b>TAMBAH IDENTITAS BARU</b></td></tr>
            <tr><td>Nama Lengkap</td><td><input type="text" name="nama" size="31" maxlength="50" /></td></tr>
            <tr><td>Tempat Lahir</td><td><input type="text" name="tempatlahir" size="31" maxlength="30" /></td></tr>
            <tr><td>Tanggal Lahir (ddmmyyyy)</td><td><input type="text" name="tgllahir" size="31" maxlength="8" /></td></tr>
            <tr><td>Jenis Kelamin</td><td><input type="text" name="jk" size="31" maxlength="1" /></td></tr>
            <tr><td>Agama</td><td><input type="text" name="agama" size="31" maxlength="10" /></td></tr>
            <tr><td>Status Kepegawaian</td><td><input type="text" name="statuspgw" size="31" maxlength="25" /></td></tr>
            <tr><td>Jabatan Struktural/Fungsional</td><td><input type="text" name="jabatan" size="31" maxlength="50" /></td></tr>
            <tr><td>Pangkat/Gol. Ruang</td><td><input type="text" name="pangkatgol" size="31" maxlength="30" /></td></tr>
            <tr><td>Instansi</td><td><input type="text" name="instansi" size="31" maxlength="28" /></td></tr>
            <tr><td>Masa Kerja Golongan</td><td><input type="text" name="masakerja" size="31" maxlength="10" /></td></tr>
            <tr><td>Di Gaji menurut</td><td><input type="text" name="gaji" size="31" maxlength="10" /></td></tr>
            <tr><td>Alamat Tinggal</td><td><input type="text" name="alamat" size="31" maxlength="35" /></td></tr>
            <tr><td></td><td><input type="submit" value="Simpan" /> <input type="reset" /></td></tr>
		</table>
        </form></p>
		<p>&nbsp; </p></td>
	</tr>
	<tr><td colspan="2" bgcolor="#006699"><?php footer_web();?></td></tr>
	</table>
</body>
</html>