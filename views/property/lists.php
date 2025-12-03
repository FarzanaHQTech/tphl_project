<h2>Property List</h2>

<?php while ($p = $properties->fetch_assoc()): ?>
    <div style="margin-bottom:20px;">
        <h3><?= $p['title'] ?></h3>
        <p><?= $p['location'] ?> — $<?= $p['price'] ?></p>
        <img src="/uploads/<?= $p['image'] ?>" width="200">
    </div>
<?php endwhile; ?>
