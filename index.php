<?php require_once 'config/init.php'; 

$job = new Job;
$template = new Template('templates/frontpage.php');
$template->categories = $job->getCategories();

$category = isset($_GET['category']) ? $_GET['category'] :null;
if($category)
{
    // die(var_dump($category));
    $template->jobs = $job->getJobByCategory($category);
    $template->title = 'Jobs in '.$job->getCategory($category)->name;
}
else
{
    $template->jobs = $job->getAllJobs();
    $template->title = 'Latest Jobs';
}

echo $template;
// $db = new Database();