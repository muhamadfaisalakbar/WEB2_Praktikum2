<?php
$menus = [
    "Home" => "index.php",
    "Event" => "event.php",
    "About" => "about.php",

];
?>
<!-- Sidebar-->
<div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-light">Start Bootstrap</div>
                <?php
                foreach ($menus as $menu => $value) {
                ?>
                <div class="list-group list-group-flush">
                  <a class="list-gruop-item-action-list-group-item-light p-3" href="<?= $value ?>"><?= $menu ?></a> 
                </div>
                <?php
                }
                ?>
                
            </div>