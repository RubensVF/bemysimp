<?php
require_once '../vendor/autoload.php';
require_once 'filesList.php'; 

try {

    $db = new PDO('mysql:host='.DATABASE_HOST.';dbname=' . DATABASE_NAME, DATABASE_USER, DATABASE_PASS);

    // echo 'Creating <strong>post_media</strong> table<br>';

    //$db->query("");
    $db->query("DELETE FROM options_table WHERE option_name = 'hgr_left'");
    $db->query("DELETE FROM options_table WHERE option_name = 'hgr_right'");
    $db->query("DELETE FROM options_table WHERE option_name = 'header_fcolor'");
    $db->query("DELETE FROM options_table WHERE option_name = 'red_btn_bg'");
    $db->query("DELETE FROM options_table WHERE option_name = 'red_btn_font'");
    $db->query("DELETE FROM options_table WHERE option_name = 'homepage_header_image'");


} catch(\Exception $e) {
    echo 'Cannot connect to database.';
    die($e->getMessage());
}

?>

<style>
body {
    font-size: 18px;
    line-height: 30px;;
}
</style>
<?php 

use Symfony\Component\Filesystem\Filesystem;

$file = new Filesystem;
$pathToUpgradeFiles = getcwd();
$pathToActualFiles = $pathToUpgradeFiles . '/../';


foreach($filesList as $f) {
    if(empty($f)) continue;

    if(is_array($f)) {

       foreach($f as $delete) {
           echo 'Removing redundant file: ' . $delete . '<br>';
           @$file->remove($delete);
       }

    }else {

        echo 'Replacing <strong>' . $f . '</strong><br>';

        $copyFile = $pathToUpgradeFiles . '/upgrade-files/' . $f;
        $toFile = $pathToActualFiles . $f;

        try {

            if ($f == 'js' || $f == 'public/uploads/cms-uploads' || $f == 'public/uploads/chunks' || $f == 'svg' || $f == 'images'
               || $f == 'css' || $f == 'resources/vueapp' || $f == 'resources/views/partials' || $f == 'resources/views/posts') {


                // copy folders
                 $file->remove($toFile);
                 $file->mirror($copyFile, $toFile);

                // don't uncomment this line
                // it is used by @crivion to genereate this very upgrader
//                $file->mirror($toFile, $copyFile);

            } else {

                // copy from upgrade-files/ to ../
                 $file->copy($copyFile, $toFile, true);

                // don't uncomment this - it's used by @crivion
                // to generate upgrade-files
                // copy from files ../ to upgrade-files/
//                $file->copy($toFile, $copyFile, true);

            }

        } catch (\Exception $e) {
            echo $e->getMessage() . '<br>';
        }

    }// if array (delete)

}

?>
<hr>
<h3 style="color: #cc0000">Congratulations, you are now on v2.0 - please remove /upgrader/ folder for SECURITY REASONS</h3>
