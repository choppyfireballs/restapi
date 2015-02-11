    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
		<?php echo "<a class='navbar-brand' href='http://".$_SERVER['HTTP_HOST']."'>Home</a>";?>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav" id="bs-example-navbar-collapse-1">
                    <li>
                        <?php echo "<a href='http://".$_SERVER['HTTP_HOST']."/sudoku/public/sudoku'>Sudoku <span class='sr-only'></span></a>";?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
