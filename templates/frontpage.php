<?php require 'includes/header.php'; ?>

<main role="main">
  <!-- Main jumbotron for a primary marketing message or call to action -->
   <div class="jumbotron">
    <div class="container new">
      <h1 class="display-2">Find a Job</h1>
      <form method="GET" action="/">
          <select name="category" class="form-control"> 
            <option value="0">Choose a Category</option>
            <?php foreach($categories as $category):?>
              <option value="<?php echo $category->id;?>"><?php echo $category->name;?></option>
            <?php endforeach;?>
          </select>
          <br>
          <input type="submit" class="btn btn-primary btn-lg" value="FIND">
      </form>
      
    </div>
  </div>
<div class="container new">
    <!-- Example row of columns -->
    <h3><?php echo $title;?></h3>
    <?php foreach($jobs as $job): ?>
    <div class="row ">
        
            <div class="col-lg-6">
                <h4><?php echo $job->job_title; ?></h4>
                <p><?php echo  $job->description; ?></p>
            </div>
            <div class="col-lg-6 ">
                <p><a class="btn btn-secondary" href="job.php?id=<?php echo $job->id ?>" role="button">View details &raquo;</a></p>
            </div>
           
    </div>
    <hr>
      <?php endforeach; ?>
  </div> <!-- /container -->

</main>
<?php require 'includes/footer.php'; ?>