<?php require_once 'config/init.php'; 

$job = new Job;
$job_id = isset($_GET['id']) ? $_GET['id'] : null;
if(isset($_POST['submit']))
{
    $data =
    [
        'job_title'     =>$_POST['job_title'],
        'description'   =>$_POST['description'],
        'company'       =>$_POST['company'],
        'contact_user'  =>$_POST['contact_user'],
        'location'      =>$_POST['location'],
        'salary'        =>$_POST['salary'],
        'category_id'   =>$_POST['category_id'],
        'contact_email' =>$_POST['contact_email'],
        
    ];
    if($job->update($job_id,$data))
    {
        redirect('index.php','Your job has been updated successfully','success');
    }
    else
    {
        redirect('index.php','Your job could not be listed','error');
    }
}

$template = new Template('templates/job-edit.php');
$template->categories = $job->getCategories();

$template->job = $job->getJob($job_id);
echo $template;
// $db = new Database();