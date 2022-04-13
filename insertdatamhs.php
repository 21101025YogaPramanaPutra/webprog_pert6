<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>tambah data mahasiswa</title>
</head>
<body>
	<h3>tambah data mahasiswa</h3>
	<form action="dbinsertdatamhs.php" method="POST">
		
			NIM
			<div>
			<input type="text" name="tkname">
			</div>
			NAMA
			<div>
			<input type="text" name="tkname">	
			</div>
			jenis kelamin
			<div>
				<select name="txJK">
					<option value="L"></option>
					<option value="P"></option>
				</select>	
			</div>
			TGL lahir
			<div>
				<input type="date" name="txTALAG">
			</div>
			jurusan
			<div>
			<select name="txJUR">
				<option value="MTI"></option>
				<option value="KAB"></option>
			</select>
			</div>
			passcode
			<div>
				<input type="password" name="txPASSS">
			</div>

			<div>
				<button type="submit">simpan data</button>
			</div>
	</form>
</body>
</html>