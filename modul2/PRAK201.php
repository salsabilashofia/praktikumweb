<form method = "POST">
    <div>
        <label for="">Nama 1 : </label>
        <input type="text" id="nama" name="nama[]">
    </div>
    <div>
        <label for="">Nama 2 : </label>
        <input type="text" id="nama" name="nama[]">
    <div>
        <label for="">Nama 3 : </label>
        <input type="text" id="nama" name="nama[]">
    </div>
    <button type="submit">Urutkan</button>
</form>

<?php
    $nama = [];

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if(isset($_POST['nama'])){
            $nama = $_POST['nama'];
        }
    }
    sort($nama);
    echo"<br/>";
    foreach ($nama as $terurut => $namaurut) {
        echo "$namaurut<br>";
    }
?>