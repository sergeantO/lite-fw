<?php foreach ($items as $item): ?>
    <a href="/news/<?php echo $item->id; ?>"><?php echo $item->title; ?></a>
    <p><?php echo $item->date; ?></p>
    <hr>
<?php endforeach; ?>
