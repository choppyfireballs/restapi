<html>
    <head>
        <title>
            <?= $entry->id?>
        </title>
        <?= $includes_view?>
    </head>
    <body>
        <?= $navbar_view?>
        <div class='panel panel-default diary-entry-panel'>
            <div class='panel-heading'><?= $entry->id?></div>
            <div class='panel-body'>
                <div class='entry-div'>
                    <?= $entry->content?>
                </div>
            </div>
        </div>
    </body>
</html>