<?php
function get_services()
{
    try 
    {
        //import credentials
            require 'database.php';
        //query sql
            $sql ="select * from services;";
        //use query php
            $query = mysqli_query($db,$sql);
            
            return $query;

        //Show results
            // echo "<pre>";
            // var_dump(mysqli_fetch_assoc($query));
            // echo "</pre>";


        //close connection

            mysqli_close($db);
    }
    catch(\Throwable $th)
    {
        var_dump($th);
    }
}
get_services();