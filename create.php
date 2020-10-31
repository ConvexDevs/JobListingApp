<?php require_once 'config/init.php'; 

$job = new Job;
$template = new Template('templates/job-create.php');
$template->categories = $job->getCategories();
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
    if($job->create($data))
    {
        redirect('index.php','Your job has been listed successfully','success');
    }
    else
    {
        redirect('index.php','Your job could not be listed','error');
    }
}


echo $template;
// $db = new Database();