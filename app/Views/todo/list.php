<h3><?= $title ?></h3>
<?php foreach ($todos as $todo): ?>
    <h4><?= $todo['title'] ?></h4>
    <p><?= $todo['description'] ?></p>
<?php endforeach;?>