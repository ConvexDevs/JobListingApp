<?php require 'includes/header.php'; ?>
<div class="container">
    <h2 class=" page-header">
        <?php echo $job->job_title;?> 
        <small>
            (<?php echo $job->location; ?>)
        </small>
    </h2>
    <hr>
    <small>Posted by (<?php echo $job->contact_user ?>) on (<?php echo $job->post_date ?>)</small><hr> 
    
    <p class="lead"><?php echo $job->description; ?></p>
    <ul class="list-group">
        <li class="list-group-item"><strong>Company : </strong><?php echo $job->company; ?></li>
        <li class="list-group-item"><strong>Salary : </strong><?php echo $job->salary; ?></li>
        <li class="list-group-item"><strong>Contact : </strong><?php echo $job->contact_email; ?></li>
        
    </ul>
    <!-- <hr> -->
    <br>
    <a href="index.php">Go Back</a>
    <hr>
    <div class="well">
        <a href="edit.php?id=<?php echo $job->id; ?>" class="btn btn-primary">Edit</a>
        <form style="display:inline;" method="post" action="job.php">
    
        <input type="hidden" class="form-control" value="<?php echo $job->id;?>" name="del_id">
        <input type="submit"  class="btn btn-danger" value="Delete">
        </form>
    </div>
</div>

<?php require 'includes/footer.php'; ?>