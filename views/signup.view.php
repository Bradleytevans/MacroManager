<?php require('partials/head.php'); ?>
<h1>Sign Up Below!</h1>
<form action="/createAccount" method="post">
    <label for="username">Username: </label><input type="text" name="username"></input>
    <label for="email">Email: </label><input type="text" name="email"></input>
    <label for="password">Password: </label><input type="text" name="password"></input>
    <button type="submit">Submit</button>
</form>
<?php require('partials/footer.php'); ?>