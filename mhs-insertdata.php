<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, ini-">
        <title>Insert ke tabel mhs</title>
</head>
<body>

    <form method="POST" action="mhsinsertdataform.php">
        NIM<br>
        <input type="text" name="txNIM"><br>
        Nama<br>
        <input type="text" name="txNAMA"><br>
        JURUSAN<br>
        <select name="txJUR">
            <option value="SK"> SK </option>
            <option value="TI"> TI </option>
        </select>
        JENIS KELAMIN<br>
        <input type="radio" name="txJK" value="L">Laki-Laki<br>
        <input type="radio" name="txJK" value="P">Perempuan<br>
        TGL LAHIR<br>
        <input type="date" name="txTALAG"><br>
        Passcode<br>
        input type="text" name="txPASSCODE">
        <br><br>
        <button type="submit"> Simpan Data </button>
    </form>
</boddy>
</html>