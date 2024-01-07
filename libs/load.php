<?php

function load_template($name)
{
    // print("including ".__DIR__."../_templates/$name.php");
    include $_SERVER['DOCUMENT_ROOT']."/ramji/_templates/$name.php";
}