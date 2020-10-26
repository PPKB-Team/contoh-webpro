<html>
<head>
<title>Telkom University</title>
</head>
<body>
    <p>Form Mahasiswa</p>
    <form action="<?php echo site_url('kampus/show_data');?>" 
			method="POST">
        <p>Nama: </p>
		<input type="text" name="nama"/> <br /><br/>
        <p>NIM: </p>
        <input type="text" name="nim"/> <br /><br/>
        <p>Jurusan: </p>
        <input type="text" name="jurusan"/> <br /><br/>
        <p>Fakultas: </p>
        <input type="text" name="fakultas"/> <br /><br/>
        <p>Semester: </p>
        <select name="semester">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
        </select><br/><br/>
        <input type="submit" value="Submit" />
    </form>
</body>
</html>
