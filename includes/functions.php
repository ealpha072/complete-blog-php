<?php 
    function getPublishedPosts(){
        global $conn;
        $myquery = "SELECT * FROM posts WHERE published=true";
        $result = mysqli_query($conn, $myquery);
        $allposts  =mysqli_fetch_all($result, MYSQLI_ASSOC);

        return $allposts;
    }


 ?>