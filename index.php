<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    
        <?php
           if(isset($_POST['adress'])){
           
               $rss = simplexml_load_file($_POST['url']); 
           
           }
          if(isset($_POST['news'])){
               
               $news = $_POST['feedPage'];
               $page = file_get_contents($news);
               echo $page;
               
             }
        ?>
        <form method="post" action="" name="feed">
            <input type="url" placeholder="Enter Rss Feed URL" name="url">
            <input type="submit" name="adress" value="Select feed">
            <select name="feedPage">
                
                <?php  foreach ($rss->channel->item as $url){
    
                echo "<option name='url'>$url->link</option>";}?>
            </select>
            <input type="submit" name="news" value="Load news">
           
        </form>
        
        
        
    </body>
</html>

