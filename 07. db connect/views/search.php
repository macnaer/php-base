<?php
session_start();
?>

<div class="container">
    <div class="row">
        <div class="col-10">
        <header>
            <h2>Title</h2>
        </header>
        <aside>
            Lorem ipsum dolor sim amet
        </aside>
        </div>
        <div class="col-2">
         Hello, <?= $_SESSION["username"]; ?>
         <a href="exit.php?exit=true">Exit</a> 
        </div>
    </div>
</div>
