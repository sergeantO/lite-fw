<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $title; ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style><?php include(ROOT . '/vendor/core/CSS_castil.php'); ?></style>
    </head>
    
    <body>        
        <div id="wrapper">
            <header id="header">
                <div class="inner"><?php include('header.tpl'); ?></div>
            </header> 
            
            <div class="row">
                <aside id="sidebar">
                    <div class="inner"><?php include('sidebar.tpl'); ?></div>
                </aside>

                <main>
                    <div class="inner"><?php include $content; ?></div>
                </main>
            </div>

            <footer id="footer">
                <div class="inner"><?php include('footer.tpl'); ?></div>
            </footer>
        </div>
    </body>
</html>
