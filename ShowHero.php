<!DOCTYPE html>
<html lang="zh">

<head>
    <?include "MasterPageHead.html";?>
    <link href="css/ShowHero.css" type="text/css" rel="stylesheet" />
    <script src="js/ShowHero.js"></script>
</head>

<body>
    <video id="show_video" autoplay="autoplay" muted="muted"></video>
    <?include "MasterPageBody.html";?>
    <div id="show_div">
        <div id="skill_name"></div>
        <div id="skill_detail"></div>
        <div id="skill_div">
            <?include "ShowHero_skill_div.php";?>
        </div>
    </div>
</body>

</html>