<?php

function GetBlogposts(int $top = 0, int $status = 1){
    $query = 'SELECT * FROM blogposts ';
    $query = $query.'WHERE IsPublished='.$status.' ';
    $query = $query.'ORDER BY CreatedDate DESC ';
    if($top > 0)
        $query = $query.'LIMIT '.$top;
    return DB::select($query);
}

?>