
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    
        <?php
            
           $rss = simplexml_load_file('rss.xml'); 
           if(isset($_POST['news'])){$news = $_POST['feedPage'];header("Location:$news");}
        ?>
        <form method="post" action="" name="feed">
            <select name="feedPage">
                <?php  foreach ($rss->channel->item as $url){
    
                echo "<option name='url'>$url->link</option>";}?>
            </select>
            <input type="submit" name="news" value="Read News">
           
        </form>
        
    </body>
</html>

