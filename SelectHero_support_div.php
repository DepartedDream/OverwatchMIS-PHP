<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?
    $conn=mysql_connect('localhost','root','Abc123');
    mysql_select_db("Overwatch",$conn);
    mysql_query("set names UTF8");
    $result=mysql_query("select * from Hero where HeroType=\"支援\"");
    while($row=mysql_fetch_assoc($result))
    {
        $heroId=$row["HeroId"];
        $heroName=$row["HeroName"];
        $heroType=$row["HeroType"];
        $heroAHtml="<a class=\"hero_a\" href =\"ShowHero.php?hero_id=$heroId&hero_name=$heroName\"></a>";
        $heroNameTextHtml="<div class=\"hero_name_text\">$heroName</div>";
        $heroDivHtml="<div class=\"hero\" style='background-image:url(resource/SelectHero/$heroId.png)'>$heroAHtml$heroNameTextHtml</div>";
        echo($heroDivHtml);
    }
?>