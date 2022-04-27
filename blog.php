<?php
echo<<<_HEAD1
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width">
  <title>SMVDGroup</title>
  <link rel="stylesheet" href="style.css">
  <div class="topnav">
   <a href="home.html"><b>SMVDGroup</b></a>
   <a href="publications.html">Publications</a>
   <a href="members.html">Members</a>
   <a class="active" href="blog.php">Blog</a>
   <a href="contact.html">Contact</a>
  </div>
</head>
<body>
  <div id="particles-js">
    <div id="displaybox">
      <h1> Blog Posts <h1>
      <hr>
_HEAD1;
$blog_posts = scandir('/opt/lampp/htdocs/SMVDSite/blogs');
$blog_posts = array_slice($blog_posts, 2);
foreach ($blog_posts as $post_file) {
  $post = str_replace("_"," ",$post_file);
  $title = explode("----",$post)[0];
  $author = explode("----",$post)[1];
  $author = explode(".",$author)[0];
  echo "<h2> <a><b>$title</b> </h2>
  <p>$author</p>
  <a class='clean-link' href='/SMVDSite/blogs/$post_file'><p>Read this post</p><a>
  <hr>";
}
    echo <<<_TAIL1
    </div>
  </div>
  <!-- scripts -->
  <script src="js/particles.js"></script>
  <script src="js/app.js"></script>
<div id="footer">
  <p class="footer-text"><b> Site coded my Miles McGibbon using particles.js & highlight.js </b></p>
</div>
</body>
</html>
_TAIL1;
?>
