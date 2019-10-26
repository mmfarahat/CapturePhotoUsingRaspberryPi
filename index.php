<Form Name="form1" Method="POST" ACTION="index.php">
    <INPUT TYPE="Submit" Name="Submit" VALUE="Take a Photo">
</Form>


<?php
if (isset($_POST['Submit'])) {

    //shell_exec("sudo gphoto2 --capture-image-and-download --filename '/var/www/html/testcamera/aa.jpg'");
    exec("sudo /var/www/html/testcamera/capture.sh");
    $dirname = getcwd() . "/";
    $images = glob($dirname . "*.jpg");

    foreach ($images as $image) {
        $imagePathList = explode("/", $image);
        $imagePath = "/" . $imagePathList[4] . "/" . $imagePathList[5];
        echo '<img width="500px" src="' . $imagePath . '" /><br />';
    }
}
?>