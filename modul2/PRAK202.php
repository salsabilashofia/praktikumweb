<style>
.error {color: red;}
</style>

<?php
    $nama = $nim = $jeniskelamin = "";
    $namawajib = $nimwajib = $jeniskelaminwajib = "";

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["nama"])) {
            $namawajib = "Nama tidak boleh kosong";
        } else {
            $nama = $_POST["nama"];
        }

        if (empty($_POST["nim"])) {
            $nimwajib = "NIM tidak boleh kosong";
        } else {
            $nim = $_POST["nim"];
        }

        if (empty($_POST["jeniskelamin"])) {
            $jeniskelaminwajib = "Jenis kelamin tidak boleh kosong";
        } else {
            $jeniskelamin = $_POST["jeniskelamin"];
        }
    }
?>

<p><span class="error"></span></p>
<form method = "POST" >
    <div>
        <label for="">Nama : </label>
        <input type="text" name="nama">
        <span class="error">* <?php echo $namawajib;?></span>
    </div>
    <div>
        <label for="">NIM : </label>
        <input type="text" name="nim">
        <span class="error">* <?php echo $nimwajib;?></span>
    </div>
    <div>
        <label for="">Jenis Kelamin : </label> <span class="error">* <?php echo $jeniskelaminwajib;?></span> <br/>
        <input type="radio" name="jeniskelamin" value="Laki-Laki" > Laki - Laki <br/> 
        <input type="radio" name="jeniskelamin" value="Perempuan"> Perempuan <br/>

    </div>
    <button type="submit">Submit</button>
</form>

<?php
    if($nama != NULL && $nim != NULL && $jeniskelamin != NULL) {
      echo "$nama <br/>";
      echo "$nim <br/>";
      echo "$jeniskelamin <br/>";
    }
?>