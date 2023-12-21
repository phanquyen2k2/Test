<?php
include_once("../Model/E_User.php");
include_once("../Model/E_DeitalUser.php");
class Model_User{
    public function getAllUser(){
        $link = mysqli_connect("127.0.0.1","root","","customer_management");
        $sql = "select * from user";
        $rs = mysqli_query($link,$sql);
        $row = mysqli_fetch_array($rs);
        $i = 0;
        while ($row!= null)
        {
            $Name = $row['Name'];
            $Address = $row['Address'];
            $City = $row['City'];
            $Phone= $row['Phone'];
            $userList[$i++] = new Entity_User($Name,$Address,$City,$Phone);
            $row = mysqli_fetch_array($rs);
        }
        return $userList;
    }
    public function getDeitalUser($name){
        $link = mysqli_connect("127.0.0.1","root","","customer_management");
        $sql = "SELECT * FROM user WHERE Name = '$name'";
        $rs = mysqli_query($link,$sql);
        $row = mysqli_fetch_array($rs);
        $i = 0;
        while ($row!= null)
        {
            $Name = $row['Name'];
            $Address = $row['Address'];
            $City = $row['City'];
            $Phone= $row['Phone'];
            $Email = $row['Email'];
            $Code=$row['Code'];
            $userList[$i++] = new Entity_DeitalUser($Name,$Address,$City,$Phone,$Email,$Code);
            $row = mysqli_fetch_array($rs);
        }
        return $userList;
    }
    public function UpdateUser($Name,$Address,$City,$Phone,$Code,$Email){
        $link = mysqli_connect("127.0.0.1","root","","customer_management");
        $sql = "UPDATE user
        SET Address = '$Address',
            City = '$City',
            Phone = '$Phone',
            Code = '$Code',
            Email = '$Email'
        WHERE Name = '$Name'";
        $rs = mysqli_query($link,$sql);
        return $rs;
    }
    public function SearchUser($search){
        $link = mysqli_connect("127.0.0.1","root","","customer_management");
        $sql="SELECT * FROM User WHERE Name LIKE '%$search%'";
        $rs=mysqli_query($link,$sql);
        $row = mysqli_fetch_array($rs);
        if ($row == null) return null;
        $i = 0;
        while ($row!= null)
        {
            $Name = $row['Name'];
            $Address = $row['Address'];
            $City = $row['City'];
            $Phone= $row['Phone'];
            $Email = $row['Email'];
            $Code=$row['Code'];
            $userList[$i++] = new Entity_DeitalUser($Name,$Address,$City,$Phone,$Email,$Code);
            $row = mysqli_fetch_array($rs);
        }
        return $userList;
    }
}
?>