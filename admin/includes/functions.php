<?php
function pr($arr)
{
    echo '<pre>';
    print_r($arr);
}

function prx($arr)
{
    echo '<pre>';
    print_r($arr);
    die();
}

function get_safe_value($con,$str)
{
    if($str != "")
    {
        return mysqli_real_escape_string($con,$str);
    }
}

function update_cat_status($status,$id)
{
    $status = 0;
    if($this.checked)
    {
        $status = 0;
    }
    else {
        $status = 1;
    }
  $update = "update categories set status = '$status' where id = '$id'";
}

?>