<html>
  <head>
    <title>ディレクトリ内の画像を一覧表示する</title>
  </head>
  <body>

    <?php
      //ディレクトリ名
      $dir_name = dir("kataomoi3.com");

      //URL
      $file_url = "/Users/t-maezawa/Desktop/あしらい/手書き/kataomoi3.com";

      echo"<p>ディレクトリ：".realpath($dir_name->path) . "</p>";
      echo"<p>画像一覧</p>";

      //ディレクトリ内の画像を表示する
      while($file_name = $dir_name->read()) {

        $path = $dir_name->path . "/" . $file_name;

        if (@getimagesize($path)) {
          echo"<a href=\"$file_url". $file_name . "\" target=\"_blank\">";
          echo"<img src= $file_url$file_name width=\"100\"></a> ";
        }
      }

      $dir_name->close();
    ?>

  </body>
</html>
