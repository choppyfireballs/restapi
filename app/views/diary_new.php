<html>
    <head>
        <title>New Diary Entry
        </title>
        <?= $includes_view?>
    </head>
    <body>
        <?= $navbar_view?>
        <div class='panel panel-default new-entry-panel'>
            <?= Form::open(array('route'=>'new_diary_entry'));?>
                <div class='panel-heading'>New Diary Entry</div>
                <div class='panel-body'>
                    <div class='title-input'>
                        <input type='text' class='form-control entry-title' name='id'>
                    </div>
                    <div class='textarea-input'>
                        <textarea name='content' class='form-control entry-textarea' style='height:100%' wrap="hard">
                        </textarea>
                    </div>
                    <div class='entry-button'>
                        <button class='btn btn-default' type='submit' value='Enter'>Enter</button>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>