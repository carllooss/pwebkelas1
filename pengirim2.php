<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="get" action="penerima.php">
        <input type="hidden" name="umur" value="18" />
        <p>
            Nama <br>
            <input type="text" name="nama" />
        </p>
        <p>
            Email <br>
            <input type="email" name="email" />
        </p>
        <p>
            Password <br>
            <input type="password" name="password" />
        </p>
        <p>
            Jenis Kelamin :
            <input type="radio" name="jeniskelamin" value="Laki-Laki">Laki-Laki
            <input type="radio" name="jeniskelamin" value="Perempuan">Perempuan
        </p>
        <p>
            Kewarganegaraan :
            <select name="kewarganegaraan">
                <option value="WNA">WNA</option>
                <option value="WNI">WNI</option>
            </select>
        </p>
        <p>
            Alamat : <br>
            <textarea name="alamat">
            </textarea>
        </p>
        <button type="submit">Kirim</button>
    </form>
</body>

</html>