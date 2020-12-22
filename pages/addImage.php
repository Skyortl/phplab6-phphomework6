<h2>Add image</h2>
<?
if(!isset($_POST['regbtn'])) {
?>
<form action="index.php?page=2" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <input type="file" id="image" class="form-control-file mb-1" name="image" accept="image/*" required>
        <input type="submit" id="btn-submit" class="btn btn-primary" name="regbtn" value="Add photo">
    </div>
</form>
<?
} else {
    if(uploadImage($_FILES['image'])) {
        echo "<script type='text/javascript'>location.href = 'index.php?page=3';</script>";
    }
    else {
        echo 'Can\'t upload file';
    }
}
?>