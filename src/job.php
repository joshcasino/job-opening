<?php
    class Job
    {
        private $title;
        private $description;
        private $contact;

    function __construct($title, $description, $contact)
    {
        $this->title = $title;
        $this->description = $description;
        $this->contact = $contact;
    }

    function get_job_summary() {
        return $this->title . ": " . $this->description . "<br>" . $this->contact->get_contact();
    }

    }

?>
