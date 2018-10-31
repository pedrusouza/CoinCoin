<h2><?php echo $title; ?></h2>

<?php foreach ($news as $usuarios): ?>

        <div class="main">
                <?php echo $usuarios['nome']; ?>
        </div>
        <p><a href="<?php echo site_url('news/'.$usuarios['nome']); ?>">View article</a></p>

<?php endforeach; ?>