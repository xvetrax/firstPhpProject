<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h2>Miestai</h2>
    
<table border="1" cellpadding="2" cellspacing="0">
  <tr>
    <th>Miestas</th>
    <th>Veiksmai</th>
  </tr>
  <?php if (isset($cities) && count($cities) > 0) : ?>
    <? foreach ($cities as $city) : ?>
    <tr>
      <td><?= $city['title']; ?></td>
      <td>
      <a href="index.php?action=admin&function=cities&edit=<?= $city['id']; ?>">Redaguoti</a>
      <a href="index.php?action=admin&function=cities&delete=<?= $city['id']; ?>"
        onclick="return confirm('Ar tikrai?')">Trinti</a>
      </td>
    </tr>
    <? endforeach; ?>
  <?php else : ?>
    <tr>
      <td colspan="2">Miestų dar nėra įvesta.</td>
    </tr>
  <?php endif; ?>
</table>

<hr />
<form action="" method="post">
  Naujas miestas:
  <br />
  <input type="text" name="title" />
  <input type="submit" name="insert_submit" value=" Saugoti " />
</form>

</body>
</html>