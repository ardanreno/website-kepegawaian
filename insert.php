<?php

require_once 'connect.php';

require_once 'header.php';

?>
<div class="container">
    <?php

    if (isset($_POST['addnew'])) {

        if (empty($_POST['nama']) || empty($_POST['posisi']) || empty($_POST['address']) || empty($_POST['contact'])) {
            echo "Please fillout all required fields";
        } else {
            $nama  = $_POST['nama'];
            $posisi   = $_POST['posisi'];
            $address    = $_POST['address'];
            $contact    = $_POST['contact'];
            $sql = "INSERT INTO users(nama,posisi,address,contact) 
            VALUES('$nama','$posisi','$address','$contact')";

            if ($con->query($sql) === TRUE) {
                echo "<div class='alert alert-success'>Successfully added new user</div>";
            } else {
                echo "<div class='alert alert-danger'>Error: There was an error while adding new user</div>";
            }
        }
    }
    ?>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="box">
                <h3><i class="glyphicon glyphicon-plus"></i>&nbsp;Add New User</h3>
                <form action="" method="POST">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" id="nama" name="nama" class="form-control"><br>
                    <label for="posisi">Posisi</label>
                    <input type="text" id="posisi" name="posisi" class="form-control"><br>
                    <label for="address">Alamat</label>
                    <textarea rows="4" name="address" class="form-control"></textarea><br>
                    <label for="contact">No.Tlp</label>
                    <input type="text" id="contact" name="contact" class="form-control"><br>
                    <br>
                    <input type="submit" name="addnew" class="btn btn-success" value="Add New">
                </form>
            </div>
        </div>
    </div>
</div>

<?php

require_once 'footer.php';
?>