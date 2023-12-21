<?php
include_once("../Model/M_User.php");
class Controller_User{
    public function invoke(){
        if (isset($_GET['name']))
        {
            $name = $_GET['name'];
            $modelUser = new Model_User();
       
            $userList = $modelUser->getDeitalUser($name);
             include_once("../View/DeitalUser.php");
        }
        elseif(isset($_GET['edit']))
        {
            $name = $_GET['edit'];
            $modelUser = new Model_User();
        
            $userList = $modelUser->getDeitalUser($name);
            include_once("../View/UpdateUser.php");
        }
        elseif(isset($_POST['search'])){
            $search= $_POST['searchvalue'];
            $modelUser=new Model_User();
            $userList=$modelUser->SearchUser($search);
            include_once("../View/HomeUser.php");
        }
        elseif(isset($_POST['update']))
        {
            $Name = $_POST['name'];
            $Address=$_POST['add'];
            $City=$_POST['city'];
            $Phone=$_POST['phone'];
            $Code=$_POST['code'];
            $Email=$_POST['email'];
            $modelUser = new Model_User();
            $isUpdated = $modelUser->UpdateUser($Name,$Address,$City,$Phone,$Code,$Email);
            if ($isUpdated == false)
            {
                echo "có lỗi xảy ra, sửa không thành công";
            }
            else 
            {
                include_once("../index.php");
            }
        }
        
        else {
        $modelUser=new Model_User();
        $userList=$modelUser->getAllUser();
        include_once("../View/HomeUser.php");
        }
        
    }
}
$C_User=new Controller_User();
$C_User->invoke();
?>