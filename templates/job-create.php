<?php include 'includes/header.php'; ?>
<br>
<div class="container">
    <h2 class="page-header">Create Job Listing</h2>
    <form method="post" action="create.php"> 
  <div class="form-group">
    <label for="Company">Company</label>
    <input type="text" class="form-control" id="company"name="company" placeholder="Enter company name">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
<div class="form-group">
    <label for="Category">Category</label>
      <select class="form-control" name="category_id" id="category">
        <option value="0">Choose Category</option>
        <?php foreach ($categories as $value): ?>
            <option value="<?php echo $value->id; ?>"><?php echo $value->name;?></option>
        <?php endforeach; ?>   
    </select>
</div>
<div class="form-group">
    <label for="jobtitle">Job Title</label>
    <input type="text" class="form-control" id="jobtitle"name="job_title" placeholder="Enter job title ">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
  <div class="form-group">
    <label for="Description">Description</label>
    <input type="text" class="form-control" id="description"name="description" placeholder="Enter Description ">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
  <div class="form-group">
    <label for="Location">Location</label>
    <input type="text" class="form-control" id="location"name="location" placeholder="Enter location name">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
  <div class="form-group">
    <label for="Salary">Salary</label>
    <input type="text" class="form-control" id="salary"name="salary" placeholder="Enter salary">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
  <div class="form-group">
    <label for="Contact User">Contact User</label>
    <input type="text" class="form-control" id="contact_user"name="contact_user" placeholder="Enter User name">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
  <div class="form-group">
    <label for="Contact">Contact Email</label>
    <input type="text" class="form-control" id="contact_email"name="contact_email" placeholder="Enter contact email ">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  
</form>
</div>
<?php include 'includes/footer.php'; ?>