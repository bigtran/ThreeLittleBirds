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
                        <article class="blog-item-holder">
                            <div class="featured-image">
                                <img src="<?=$theme_url?>images/blog_img_01.jpg" alt="" />
                            </div>
                            <div class="item-text">
                                <div class="item-info">
                                    <div class="item-info-left">
                                        <ul>
                                            <li class="item-info-title">Date</li>
                                            <li class="item-info-text">Sep 27, 2020</li>
                                        </ul>

                                    </div>
                                    <div class="item-info-right">

                                        <ul>
                                            <li class="item-info-title">In</li>
                                            <li class="item-info-text">Daily Life</li>
                                        </ul>
                                    </div>
                                </div>
                                <h2 class="entry-title">
                                    <a href="post.php">孙子兵法·计篇</a>
                                </h2>
                                <div class="excerpt">
                                    孙子曰:兵者，国之大事，死生之地，存亡之道，不可不察也。 故经之以五事，校之以计，而索其情:一曰道，二曰天，三曰地，四曰将，五曰法。
                                    道者，令民与上同意，可与之死，可与之生，而不危也；天者，阴阳、寒暑、时制也；地者，远近、险易、广狭、死生也；将者，智、信、仁、勇、严也；法者，曲制、官道、主用也。
                                    凡此五者，将莫不闻，知之者胜，不知之者不胜。
                                </div>
                                <a href="single.html" class="read-more">Read More</a>
                            </div>
                        </article>
                    </div>                
                </div>
            </div>
            <div class="clear"></div>            
        </div>


        <?php require("inc/footer.php");?>
        
    </body>
</html>