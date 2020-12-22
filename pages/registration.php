<h2>Registration</h2>
<?
if(!isset($_POST['regbtn'])){
    ?>
<form action="index.php?page=4" method="POST" id="reg-form">
    <div class="form-group">
        <input type="text" class="form-control mb-1" name="login" placeholder="Login">
        <input type="text" class="form-control mb-1" name="email" placeholder="E-mail">
        <input type="password" id="password" class="form-control mb-1" name="passw1" placeholder="Password">
        <input type="password" id="confirm-password" class="form-control mb-1" name="passw2" placeholder="Confirm password">
        <input type="submit" id="btn-submit" class="btn btn-primary" name="regbtn" value="Add user">
    </div>
</form>
<script type="text/javascript">
    $("#reg-form").submit(function(event) {
        var password = $("#password").val();
        var confirmPassword = $("#confirm-password").val();
        if (password != confirmPassword) {
            event.preventDefault();
            $("#password").val('');
            $("#confirm-password").val('');
            $("#reg-form").html("<h3><span style='color:red'>Passwords don't match</span></h3>");
        }
    });
</script>
<?
} else {
    if(register($_POST["login"], $_POST["passw1"], $_POST["email"])) {
        echo "<h3><span style='color:green'>User successfully added</span></h3>";
    }
}
?>