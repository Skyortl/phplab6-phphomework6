<h2>Gallery</h2>
<?
    if(isset($_POST['delete'])) {
        deleteImage($_POST['imageName']);
    }
    $images = getImages();
    echo "<div class='row'>";
    if(count($images)) {
        foreach ($images as $key => $value) {
            echo "
                <img class='w-25 img-thumbnail' src='".IMAGES_FOLDER_PATH."$value' alt='$value'>
                <form action='index.php?page=3' method='POST'>
                    <input type='hidden' name='imageName' value='$value'/>
                    <input class='btn btn-danger ml-1 mt-1 mr-3' type='submit' name='delete' value='Delete'/>
                </form>";
        }
        echo "</div>";
    }
    else {
        echo "<a class='nav-link' href='index.php?page=2'>Add your first image</a>";
    }
?>