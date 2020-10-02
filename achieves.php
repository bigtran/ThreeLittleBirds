<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <?php require("inc/header.php");?>
        

    </head>

    <body class="blog">

        <!-- Preloader Gif -->
        <div class="doc-loader"></div>

                                


        <div id="content" class="site-content">

            <div class="content-left">
                <?php require("inc/sidebar.php");?>
            </div>

            <div class="content-right">
                <div class="content-right-holder">
                    <div class="blog-holder">
                        <h2 class="page-title">
                            <a href="post.php">文章归档 · Achieves</a>
                        </h2>
                        <ul>
                        <?php 
                            foreach ($articles as $key => $article_meta) {
                                # code...
                        ?>
                        <li> <a href="article/<?=$article_meta['slug']?>" class="achieve_title"><?=$article_meta['title']?> <span class="small_gray">on <?=$article_meta['date']?></span></a> </li>
                        <?php
                            }
                        ?>
                        </ul>
                    </div>                
                </div>
            </div>
            <div class="clear"></div>            
        </div>


        <?php require("inc/footer.php");?>
        
    </body>
</html>