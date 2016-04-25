<div class="container">
    <?php foreach ($jobList as $user): ?>
        <?php echo $user->job_name; ?>
    <?php endforeach; ?>
</div>

<?php echo $jobList->render(); ?>