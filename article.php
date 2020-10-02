<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <?php require("inc/header.php");?>
        <link rel="stylesheet" type="text/css"  href='<?=_themeUrl()?>assets/editor.md/css/editormd.preview.css' /> 
    </head>

    <body class="single single-post">

        <!-- About Content -->
        <div id="content" class="site-content">

            <div class="content-left">
                <?php require("inc/sidebar.php");?>
            </div>

            <div class="content-right">
                <div id="custom-toc-container">#custom-toc-container</div>
                <div class="content-right-holder">
                    <!--<div class="header-page-content">
                        <img src="images/single_item_01.jpg" alt="" />
                    </div>-->


                    <div class="entry-holder">
                        <!--<h1 class="entry-title">
                            <?=$theArticle['meta']['title']?>
                        </h1>-->
                        <div class="entry-content" id="entry-content">

                            <div class="entry-content-md" style="display: none;">
                            <?=$theArticle['content']?>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="clear"></div>
        </div>        

        <?php require("inc/footer.php");?>

        <script src="<?=_themeUrl()?>assets/editor.md/lib/marked.min.js"></script>
        <script src="<?=_themeUrl()?>assets/editor.md/lib/prettify.min.js"></script>
        
        <script src="<?=_themeUrl()?>assets/editor.md/lib/raphael.min.js"></script>
        <script src="<?=_themeUrl()?>assets/editor.md/lib/underscore.min.js"></script>
        <script src="<?=_themeUrl()?>assets/editor.md/lib/sequence-diagram.min.js"></script>
        <script src="<?=_themeUrl()?>assets/editor.md/lib/flowchart.min.js"></script>
        <script src="<?=_themeUrl()?>assets/editor.md/lib/jquery.flowchart.min.js"></script>
        <script src="<?=_themeUrl()?>assets/editor.md/editormd.js"></script>
        <script type="text/javascript">
            $(function() {
                var testEditormdView;

                testEditormdView = editormd.markdownToHTML("entry-content", {
                        markdown        : $(".entry-content-md").html(),
                        //htmlDecode      : true,       // 开启 HTML 标签解析，为了安全性，默认不开启
                        htmlDecode      : "style,script,iframe",  // you can filter tags decode
                        //toc             : false,
                        tocm            : true,    // Using [TOCM]
                        tocContainer    : "#custom-toc-container", // 自定义 ToC 容器层
                        //gfm             : false,
                        tocDropdown     : true,
                        // markdownSourceCode : true, // 是否保留 Markdown 源码，即是否删除保存源码的 Textarea 标签
                        emoji           : true,
                        taskList        : true,
                        tex             : true,  // 默认不解析
                        flowChart       : true,  // 默认不解析
                        sequenceDiagram : true,  // 默认不解析
                    });
            });
            
        </script>
    </body>
</html>