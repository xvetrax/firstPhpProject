<?php
if (isset($_POST['login'])) {
    if (isset($_POST['name']) && $_POST['name'] == 'admin' && isset($_POST['password']) && $_POST['password'] == 'krepsinis') {
        $_SESSION['username'] = 'admin';
    }
}

if (isset($_SESSION['username'])) {
    ?>
  <div>
    <a href="index.php?action=admin&function=courts">Aikštelės</a> | 
    <a href="index.php?action=admin&function=cities">Miestai</a> | 
    <a href="logout.php">Atsijungti</a> 
  </div>	
  
  <?php
    $function = (isset($_GET['function'])) ? $_GET['function'] : '';
    if ($function == 'cities') include('cities.php');
    if ($function == 'courts') include('courts.php');
} else {
    ?>
  <br />
  <form action="" method="post">
    Vardas:
    <br />
    <input type="text" name="name" />
    <br /><br />
    Slaptažodis:
    <br />
    <input type="password" name="password" />
    <br /><br />
    <input type="submit" name="login" value=" Prisijungti " />	
  </form>
  <?php

}

