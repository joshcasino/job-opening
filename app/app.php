<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/job.php";

    $app = new Silex\Application();



    $app->get("/", function() {
        return "<!DOCTYPE html>
        <html>
            <head>
                <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css'>
                <meta charset='utf-8'>
                <title>Post a Job!</title>
            </head>
            <body>
                <div class='container'>
                    <h1>A New Job Posting!</h1>
                    <form action='/completed'>
                        <div class='form-group'>
                            <label for='title'>Posting Title:</label>
                            <input id='title' name='title' class='form-control' type='text'>
                        </div>
                        <div class='form-group'>
                            <label for='description'>Job Description</label>
                            <input id='description' name='description' class='form-control' type='text'>
                        </div>
                        <div class='form-group'>
                            <label for='contact'>Contact:</label>
                            <input id='contact' name='contact' class='form-control' type='text'>
                        </div>
                        <button type='submit' class='btn btn-success'name='button'>SUBMIT!</button>
                    </form>
                </div>
            </body>
        </html>
        ";
    });

    $app->get("/completed", function() {
        $title = $_GET["title"];
        $description = $_GET["description"];
        $contact = $_GET["contact"];

        $new_job = new Job($title, $description, $contact);

        return "A new posting has been created " . $new_job->get_job_summary();
    });

    return $app;
 ?>
