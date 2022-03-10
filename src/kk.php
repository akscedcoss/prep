<?php

include('config.php');
include('db.php');

function getPost()
    {
        $sql = "SELECT * FROM `posts`";
        $stmt = DB::getInstance()->query($sql);
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $row;

    }

    function setPost($id,$name,$price)
    {
        $sql = "INSERT INTO `posts` (`id`, `name`, `price`) VALUES ('$id', '$name', '$price');";
        $stmt = DB::getInstance()->query($sql);
        // $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // return $row;
        if($stmt)
        {
echo "sucess";
        }
        else{
echo "failure";
        }

    }

    function delete($id)
    {
        $sql =  "DELETE FROM posts WHERE id=$id";
        $stmt = DB::getInstance()->query($sql);
       
    }
    function edit($)
    {
        $sql =  "DELETE FROM posts WHERE id=$id";
        $stmt = DB::getInstance()->query($sql);
       
    }
    
print_r(getPost()) ;
// setPost(23,'sdv',34);
delete(12);
// print_r($_POST) ;