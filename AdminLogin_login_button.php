<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?
    $conn=mysql_connect('localhost','root','Abc123');
    mysql_select_db("Overwatch",$conn);
    mysql_query("set names UTF8");
    $userName=$_POST["userName"];
    $result=mysql_query("select AdminPwd from Admin where AdminName=\"$userName\"");
    $row=mysql_fetch_assoc($result);
    if($row["AdminPwd"]==$_POST["password"])
    {
        setcookie("Admin",time()+600);
        echo("<script>window.location.href='AdminMain.php'</script>");
    }
    else
    {
        echo("<script>alert('账号或密码错误')</script>");
    }
?>