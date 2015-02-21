<html>
    <head>
        <title>Diary entries</title>
        <?php echo $includes_view?>
    </head>
    <body>
        <?php echo $navbar_view?>
        
        <div class="panel panel-default diary_panel">
            <div class='panel-heading'>Entries</div>
            <div class='panel-body'>
                <?php foreach($entries as $entry){
                    echo "<div>"
                    . "<a href='http://".Request::server('HTTP_HOST')."/home/public/entry/".$entry->id."'>".$entry->id."</a>"
                    . "</div>";
                }
                ?>
            </div>
        </div>
    </body>
</html>