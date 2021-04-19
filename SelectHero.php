<!DOCTYPE html>
<html lang="zh">

<head>
    <?include "MasterPageHead.html";?>
    <script src="js/SelectHero.js"></script>
    <link type="text/css" rel="stylesheet" href="css/SelectHero.css">
</head>

<body>
    <div id="background"></div>
    <audio src="resource/selecthero/heromusic.mp3" autoplay="autoplay"></audio>
    <?include "MasterPageBody.html";?>
    <div id="title">请选择一名英雄</div>
    <div class="hero_type_div">
        <div class="hero_type_center">
            <div class="hero_type_logo">
                <svg viewBox="0 0 32 32">
                    <path d="M29 10.7v6.2c0 .6-.1 1.1-.4 1.6-2.9 5.3-6.8 9.7-11.8 13.2-.6.4-1 .4-1.6 0-4.9-3.4-8.8-7.8-11.7-13-.3-.6-.4-1.2-.4-1.8 0-3.9.1-7.8 0-11.7-.1-2.9 2.1-3.3 4-3.8C10.4.6 13.3 0 16.6 0c3.1 0 7.7 1.1 9.4 1.6 1.3.4 2.7.9 2.9 2.2.1 1.1 0 2.2.1 3.3v3.6z"></path>
                </svg>
            </div>
            <div class="hero_type_title">重装</div>
        </div>
    </div>
    <div class="heros_div">
        <div id="tank_div" class="hero_portrait_div">
            <?include "SelectHero_tank_div.php";?>
        </div>
    </div>
    <div class="hero_type_div">
        <div class="hero_type_center">
            <div class="hero_type_logo">
                <svg viewBox="0 0 32 32">
                    <g>
                        <path d="M2.1 28.1h7.1V32H2.1z"></path>
                        <path d="M9.1 7v-.7C8.6 1.5 5.6 0 5.6 0s-3 1.5-3.5 6.3V25.4h7V7z"></path>
                    </g>
                    <g>
                        <path d="M12.5 28.1h7.1V32h-7.1z"></path>
                        <path d="M19.5 7v-.7C19 1.5 16 0 16 0s-3 1.5-3.5 6.3V25.4h7V7z"></path>
                    </g>
                    <g>
                        <path d="M22.9 28.1H30V32h-7.1z"></path>
                        <path d="M29.9 7v-.7C29.4 1.5 26.4 0 26.4 0s-3 1.5-3.5 6.3V25.4h7V7z"></path>
                    </g>
                </svg>
            </div>
            <div class="hero_type_title">输出</div>
        </div>
    </div>
    <div class="heros_div">
        <div id="damage_div" class="hero_portrait_div">
            <?include "SelectHero_damage_div.php";?>
        </div>
    </div>
    <div class="hero_type_div">
        <div class="hero_type_center">
            <div class="hero_type_logo">
                <svg viewBox="0 0 32 32">
                    <path fill-rule="evenodd" d="M29.3 10.2h-7.5V2.7c0-1.5-1.2-2.7-2.7-2.7h-6.3c-1.5 0-2.7 1.2-2.7 2.7v7.5H2.7c-1.5 0-2.7 1.2-2.7 2.7v6.3c0 1.5 1.2 2.7 2.7 2.7h7.5v7.5c0 1.5 1.2 2.7 2.7 2.7h6.3c1.5 0 2.7-1.2 2.7-2.7v-7.5h7.5c1.5 0 2.7-1.2 2.7-2.7v-6.3c-.1-1.5-1.3-2.7-2.8-2.7z"></path>
                </svg>
            </div>
            <div class="hero_type_title">支援</div>
        </div>
    </div>
    <div class="heros_div">
        <div id="support_div" class="hero_portrait_div">
            <?include "SelectHero_support_div.php";?>
        </div>
    </div>
</body>

</html>