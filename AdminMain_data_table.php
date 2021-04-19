<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?
    if ($_COOKIE["Admin"] != null)
    {
        if ($_GET["tableType"] == "英雄" || $_GET["tableType"] == null)       
        {
            $conn=mysql_connect('localhost','root','Abc123');
            mysql_select_db("Overwatch",$conn);
            mysql_query("set names UTF8");
            $result=mysql_query("select * from Hero");
            echo("<tr><td>英雄id</td><td>英雄名称</td><td>英雄类别</td><td>操作</td></tr>");
            while($row=mysql_fetch_assoc($result))
            {
                $heroId=$row["HeroId"];
                $heroName=$row["HeroName"];
                $heroType=$row["HeroType"];
                $edit_input_html="<input type=\"button\" class=\"edit_input\" spellcheck=\"false\" value=\"编辑\">";
                $delete_input_html="<input type=\"button\" class=\"delete_input\" spellcheck=\"false\" value=\"删除\">";
                echo("<tr><td>$heroId</td><td>$heroName</td><td>$heroType</td><td>$edit_input_html$delete_input_html</td></tr>");
            }
            for($i=0;$i<3;$i++)
            {
                $insertLine=$insertLine."<td><input type =\"text\" spellcheck=\"false\"></td>";
            }
            $insertLine=$insertLine."<td><input type=\"button\" id=\"insert_input\" value=\"添加\"></td>";
            $insertLine="<tr>$insertLine</tr>";
            echo($insertLine);
        }
        else if ($_GET["tableType"]== "技能")
        {
            $conn=mysql_connect('localhost','root','Abc123');
            mysql_select_db("Overwatch",$conn);
            mysql_query("set names UTF8");
            $result=mysql_query("select * from Skill");
            echo("<tr><td>技能id</td><td>技能名称</td><td>技能描述</td><td>英雄id</td><td>操作</td></tr>");
            while($row=mysql_fetch_assoc($result))
            {
                $skillId=$row["SkillId"];
                $skillName=$row["SkillName"];
                $skillDetail=$row["SkillDetail"];
                $heroId=$row["HeroId"];
                $edit_input_html="<input type=\"button\" class=\"edit_input\" spellcheck=\"false\" value=\"编辑\">";
                $delete_input_html="<input type=\"button\" class=\"delete_input\" spellcheck=\"false\" value=\"删除\">";
                echo("<tr><td>$skillId</td><td>$skillName</td><td>$skillDetail</td><td>$heroId</td><td>$edit_input_html$delete_input_html</td></tr>");
            }
            for($i=0;$i<4;$i++)
            {
                $insertLine=$insertLine."<td><input type =\"text\" spellcheck=\"false\"></td>";
            }
            $insertLine=$insertLine."<td><input type=\"button\" id=\"insert_input\" value=\"添加\"></td>";
            $insertLine="<tr>$insertLine</tr>";
            echo($insertLine);
        }
        else if ($_GET["tableType"] == "地图")
        {
            $conn=mysql_connect('localhost','root','Abc123');
            mysql_select_db("Overwatch",$conn);
            mysql_query("set names UTF8");
            $result=mysql_query("select * from Map");
            echo("<tr><td>地图id</td><td>地图名称</td><td>地图类别</td><td>操作</td></tr>");
            while($row=mysql_fetch_assoc($result))
            {
                $mapId=$row["MapId"];
                $mapName=$row["MapName"];
                $mapType=$row["MapType"];
                $edit_input_html="<input type=\"button\" class=\"edit_input\" spellcheck=\"false\" value=\"编辑\">";
                $delete_input_html="<input type=\"button\" class=\"delete_input\" spellcheck=\"false\" value=\"删除\">";
                echo("<tr><td>$mapId</td><td>$mapName</td><td>$mapType</td><td>$edit_input_html$delete_input_html</td></tr>");
            }
            for($i=0;$i<3;$i++)
            {
                $insertLine=$insertLine."<td><input type =\"text\" spellcheck=\"false\"></td>";
            }
            $insertLine=$insertLine."<td><input type=\"button\" id=\"insert_input\" value=\"添加\"></td>";
            $insertLine="<tr>$insertLine</tr>";
            echo($insertLine);
        }
    }
    else
    {
        echo("<script>window.location.href='Main.php'</script>");
    }
?>