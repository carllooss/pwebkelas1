<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <form method="GET" action="penerima.php">
        <!-- action sebagai tujuan -->
        <input type="text" name="text" placeholder="Masukkan Text"> <br> <!-- placeholder berfungsi untuk memberikan text atau nama di kolom formnya-->
        <input type="email" name="email" placeholder="Email"> <br>
        <input type="number" name="number" placeholder="Angka"> <br>
        <input type="file" name="file"> <br>
        <input type="hidden" name="hidden"> <br>
        <input type="password" name="password"> <br>
        <input type="date" name=""> <br>
        <input type="reset" value="Reset"> <!-- mengembalikan ke nilai awal-->
        <input type="submit" value="Kirim"> <!-- value untuk nama di tombolnya-->
        <button type="submit">Kirim</button>
    </form>
</body>

</html>