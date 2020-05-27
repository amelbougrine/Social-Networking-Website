<?php

class Post{
    private $user_obj;
    private $con; 
    public function __construct($con, $user){
        $this->con = $con;
        $this->user_obj = new User($con, $user);
    }
    public function submitPost($body, $user_to, $imageName){
        $body = strip_tags($body);
        $body = mysqli_real_escape_string($this->con, $body);
        $check_empty = preg_replace('/\s+/', '', $body);
        if($check_empty != ""){
            $body_array = preg_split("/\s+/", $body);
            $body = implode(" ", $body_array);        
            $date_added = date("Y-m-d H:i:s");   
            $added_by = $this->user_obj->getUsername();  
            if($user_to == $added_by)
                $user_to = "none";
            $query = mysqli_query($this->con, "INSERT INTO posts (body, added_by, user_to, date_added, user_closed, deleted, likes, image) VALUES('$body', '$added_by', '$user_to', '$date_added', 'no', 'no', '0', '$imageName')");
            $returned_id = mysqli_insert_id($this->con);
        }
    }
}

?>