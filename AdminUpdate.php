<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?
    if ($_COOKIE["Admin"] != null)
    {
        $oldId = $_GET["oldId"];
        $tableType = $_GET["tableType"];
        $text1 = $_GET["text1"];
        $text2 = $_GET["text2"];
        $text3 = $_GET["text3"];
        $text4 = $_GET["text4"];
        $conn=mysql_connect('localhost','root','Abc123');
        mysql_select_db("Overwatch",$conn);
        mysql_query("set names UTF8");
        if(substr($text1,0,1)=="1")
        {
            mysql_query("update Hero set HeroId='$text1',HeroName='$text2',HeroType='$text3' where HeroId='$oldId'");
            if(mysql_affected_rows()>0)
            {
                $status="true";
            }
            else
            {
                $status="false";
            }
        }
        else if(substr($text1,0,1)=="3")
        {
            mysql_query("update Skill set SkillId='$text1',SkillName='$text2',SkillDetail='$text3',HeroId='$text4' where SkillId='$oldId'");
            if(mysql_affected_rows()>0)
            {
                $status="true";
            }
            else
            {
                $status="false";
            }
        }
        else if(substr($text1,0,1)=="4")
        {
            mysql_query("update Map set MapId='$text1',MapName='$text2',MapType='$text3' where MapId='$oldId'");
            if(mysql_affected_rows()>0)
            {
                $status="true";
            }
            else
            {
                $status="false";
            }
        }
        else
        {
            $status="false";
        }
        echo("<script>window.location.href='AdminMain.php?tableType=$tableType&status=$status'</script>");
    }
    else
    {
        echo("<script>window.location.href='Main.php'</script>");
    }
?>