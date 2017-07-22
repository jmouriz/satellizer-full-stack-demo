<!doctype html>
<html>
   <head>
      <base href="../../" />
      <meta charset="utf-8" />
      <title>Autorizar aplicación</title>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
      <link rel="shortcut icon" href="resources/images/application.ico">
      <link rel="stylesheet" href="resources/styles/fonts.css" />
      <link rel="stylesheet" href="resources/styles/authorize.css" />
   </head>
   <body>
      <center>
         <form method="post">
            <p>¿Quieres permitirle a <b><?php print $client; ?></b> acceder a los siguientes recursos?</p>
            <ul>
            <?php foreach ($resources as $resource): ?>
              <li><?php print $resource ?></li>
            <?php endforeach ?>
            </ul>
            <button type="submit" name="authorized" value="yes">Sí</button>
            <button type="submit" name="authorized" value="no">No</button>
         </form>
      </center>
   <body>
</html>