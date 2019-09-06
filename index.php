
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="post" action="">
           
            <input type="url" placeholder="Enter Rss Feed URL" name="url">
            <input type="submit" name="adress" value="Read News">

        </form>
    
        <?php
           if(isset($_POST['adress'])){
           
               $rss = simplexml_load_file($_POST['url']); 
           }
           
           if(isset($_POST['news'])){
                
               $news = $_POST['feedPage'];
               header("Location:$news");
                
           }
           
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

