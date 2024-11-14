<?php
include "admin_header.php"; ?>


<form action="<?= base_url() ?>test.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

<?php include "admin_footer.php"; ?>