<!DOCTYPE html>
<html lang="zh">
<head>
    <?include "MasterPageHead.html";?>
    <script src="js/AdminMain.js"></script>
    <link type="text/css" rel="stylesheet" href="css/AdminMain.css">
</head>
<body>
    <video id="bg_video" src="resource/AdminMain/background.mp4" autoplay="autoplay" muted="muted" loop="loop"></video>
    <?include "MasterPageBody.html";?>
    <div id="table_type_div">
        <select name="tableType" id="table_type_select">
            <option>英雄</option>
            <option>技能</option>
            <option>地图</option>
        </select>
    </div>
    <table id="data_table">
        <?include "AdminMain_data_table.php";?>
    </table>
</body>
</html>