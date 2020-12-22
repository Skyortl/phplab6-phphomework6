<?
$usersFile = "data/users.txt";
define("IMAGES_FOLDER_PATH", "data/images/");
function register($name, $password, $email) {
    define('MIN_LENGTH', 3);
    define('MAX_LENGTH', 30);
    define('FIELD_SEPARATOR', ':');
    $name = trim(htmlspecialchars($name));
    $password = trim(htmlspecialchars($password));
    $email = trim(htmlspecialchars($email));
    if(empty($name) || empty($password) || empty($email)) {
        echo "<h3><span style='color: red;'> Need to fill all fields</span><h3>";
        return false;
    }
    if(strlen($name) < MIN_LENGTH || strlen($name) > MAX_LENGTH || strlen($email) < MIN_LENGTH || count($email) > MAX_LENGTH) {
        echo "<h3><span style='color: red;'> Incorrect length</span><h3>";
        return false;
    }
    global $usersFile;
    $fd = fopen($usersFile, 'a+');
    while (!feof($fd)) {
        $line = fgets($fd);
        $readFieldArray = explode(FIELD_SEPARATOR, $line);
        if($readFieldArray[0] == $name) {
            echo "<h3><span style='color: red;'> Such user is already registered</span><h3>";
            return false;
        }
        
    }
    $line = implode(FIELD_SEPARATOR, [$name, md5($password), $email])."\r\n";
    fputs($fd, $line);
    fclose($fd);
    return true;
}
function uploadImage($image) {
    $filePath = IMAGES_FOLDER_PATH.$image['name'];
    return move_uploaded_file($image['tmp_name'], $filePath);
}
function getImages() {
    return array_slice(scandir(IMAGES_FOLDER_PATH), 2);
}
function deleteImage($imageName)
{
    $filePath = IMAGES_FOLDER_PATH.$imageName;
    return unlink($filePath);
}
?>