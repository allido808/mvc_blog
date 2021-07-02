<?php

  include 'controllers/Controller.php';

  $addArticle = new Controller();

  if(isset($_POST['title'])) {
   $me = $addArticle->insertController($_POST);
  }

?>

<div class="contact-us">
    <form action="" method="post">
        <label for="title">Title</label>
        <input id="title" name="title" required="" type="text" />
        <label for="category">Category
        </label>
        <input id="category" name="category" required="" type="text" />
        <label for="imgUrl">IMG URL</label>
        <input id="imgUrl" name="image" type="text" />
        <label for="body">YOUR ARTICLE</label>
        <textarea id="body" name="body" required="" rows="4">
        </textarea>
        <h3>
            <?php 
            if(isset($me)){
                print_r($me);
            }?>
        </h3>
        <br>
        <button id="submit" type="submit">SUBMIT</button>
    </form>
</div>