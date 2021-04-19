<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?
    $conn=mysql_connect('localhost','root','Abc123');
    mysql_select_db("Overwatch",$conn);
    mysql_query("set names UTF8");
    $result=mysql_query("select * from Map");
    while($row=mysql_fetch_assoc($result))
    {
        $mapId=$row["MapId"];
        $mapName=$row["MapName"];
        $mapType=$row["MapType"];
        $mapIdAttr ="map_id=\"$mapId\"";
        $mapTypeAttr ="map_type=\"$mapType\"";
        $mapPicAttr="style =\"background-image:url(resource/showmap/$mapId.jpg)\"";
        $mapNameHTML ="<div class=\"map_text\">$mapName</div>";
        $mapHTML ="<div class=\"map\"$mapIdAttr $mapTypeAttr $mapPicAttr,>$mapNameHTML</div>";
        echo($mapHTML);
    }
?>