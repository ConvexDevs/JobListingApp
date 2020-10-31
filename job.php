<?php require_once 'config/init.php'; 

$job = new Job;
$template = new Template('templates/job-single.php');
$template->categories = $job->getCategories();

if(isset($_POST['del_id']))
{
    $del_id = $_POST['del_id'];
    if($job->deleteJob($del_id))
    {
        redirect('index.php',"Job deleted successfully","success");
    }
    else
    {
        redirect('index.php','Job could not be deleted',"error");
    }
}

$job_id = isset($_GET['id']) ? $_GET['id'] :null;
$template->job = $job->getJob($job_id);
$template->categories = $job->getCategory(3);
// die(var_dump($template->categories));
echo $template;
// $db = new Database();
//olympic sports
//artx sports
//mustang sports
//friesien sports