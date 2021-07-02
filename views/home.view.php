<?php
include 'controllers/Controller.php';

$addArticle = new Controller();

$me = $addArticle->get_all();


echo '<pre>';
        // print_r($me);
         echo '</pre>';?>
<section>

<div> <button> <a href="/add">add article</a></button> </div>
    <h1>Blog app </h1>
    <div class="tbl-header">
        <table cellpadding="0" cellspacing="0" border="0">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Title</th>
                    <th>Body</th>
                    <th>category</th>
                    <th>image</th>
                    <th>action</th>
                </tr>
            </thead>
        </table>
    </div>
    <div class="tbl-content">
        <table cellpadding="0" cellspacing="0" border="0">
            <tbody>
            <?php
            foreach ($me as $data) {
        //         echo '<pre>';
        // print_r($me);
        //  echo '</pre>';
          ?>
                <tr>
                    <td><?php echo $data["id"]?></td>
                    <td><?php echo $data["title"]?></td>
                    <td><?php echo $data["body"]?></td>
                    <td><?php echo $data["Category"]?></td>
                    <td><?php echo $data["image"]?></td>
                    <td><a href='views/delete.view.php?id=<?php echo $data["id"]?>'>D</a>
                    </td>
                    
                   
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
    </div>
</section>