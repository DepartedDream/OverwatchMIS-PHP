<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?
    $heroId=$_GET["hero_id"];
    $heroName=$_GET["hero_name"];
    $skillIdAttr="skill_id=$heroId";
    $skillNameAttr="skill_name=\"$heroName\"";
    $skillDescribeAttr = "skill_detail=\"&nbsp\"";
    $skillHeroIdAttr = "hero_id=\"$heroId\"";
    $skillPicAttr = "style =\"background-image:url(resource/showhero/$heroId/$heroId.png)\"";
    $skillLogoHtml ="<div class=\"skill_logo\"$skillIdAttr $skillNameAttr $skillDescribeAttr $skillHeroIdAttr $skillPicAttr $skillPicAttr></div>";
    echo($skillLogoHtml);
    $conn=mysql_connect('localhost','root','Abc123');
    mysql_select_db("Overwatch",$conn);
    mysql_query("set names UTF8");
    $result=mysql_query("select * from Skill where HeroId=$heroId");
    while($row=mysql_fetch_assoc($result))
    {
        $skillId=$row["SkillId"];
        $skillName=$row["SkillName"];
        $skillDetail=$row["SkillDetail"];
        $skillIdAttr = "skill_id=\"$skillId\"";
        $skillNameAttr = "skill_name=\"$skillName\"";
        $skillDescribeAttr = "skill_detail=\"$skillDetail\"";
        $skillHeroIdAttr = "hero_id=\"$heroId\"";
        $skillPicAttr= "style =\"background-image:url(resource/showhero/$heroId/$skillId.png)\""; 
        $skillLogoHtml ="<div class=\"skill_logo\"$skillIdAttr $skillNameAttr $skillDescribeAttr $skillHeroIdAttr $skillPicAttr $skillPicAttr></div>";
        echo($skillLogoHtml);
    }
?>