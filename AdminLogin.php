<!DOCTYPE html>
<html lang="zh">
<head>
    <?include "MasterPageHead.html";?>
    <link href="css/AdminLogin.css" rel="stylesheet" />
</head>
<body>
    <video id="bg_video" src="resource/AdminLogin/background.mp4" autoplay="autoplay" muted="muted" loop="loop"></video>
    <?include "MasterPageBody.html";?>
    <form id="form_login" method="post" action="AdminLogin_login_button.php">
        <div id="admin_logo_div">
            <svg class="icon" viewBox="0 0 1024 1024" version="1.1">
                <path d="M512 568.889c-159.289 0-284.444-125.156-284.444-284.445S352.71 0 
                    512 0s284.444 125.156 284.444 284.444S671.29 568.89 512 568.89zM512 
                    512c125.156 0 227.556-102.4 227.556-227.556S637.156 56.89 512 56.89s-227.556 
                    102.4-227.556 227.555S386.844 512 512 512z m312.889 512c-79.645 
                    0-142.222-62.578-142.222-142.222s62.577-142.222 142.222-142.222S967.11 802.133
                    967.11 881.778 904.533 1024 824.89 1024z m0-56.889c45.511 0 85.333-39.822 
                    85.333-85.333s-39.822-85.334-85.333-85.334-85.333 39.823-85.333 85.334 39.822 85.333
                    85.333 85.333zM796.444 455.111h56.89v284.445h-56.89z m56.89 0H967.11V512H853.333z 
                    m0 113.778H967.11v56.889H853.333z"
                    fill="#2c2c2c">
                </path>
                <path d="M512 512l-51.2 62.578C261.689 597.333 113.778 762.31 113.778
                    967.11h-56.89v-56.889h5.69C91.022 688.356 278.756 512 512 512z m0 0l-51.2
                    62.578C261.689 597.333 113.778 762.31 113.778 967.11h-56.89v-56.889h5.69C91.022 
                    688.356 278.756 512 512 512z"
                    fill="#2c2c2c">
                </path>
            </svg>
        </div>
        <div id="username_div" class="lb_tb_div">
            <div id="lb_username" class="Label">用户名</div>
            <input type="text" class="TextBox" id="tb_username" name="userName" spellcheck="false">
        </div>
        <div id="password_div" class="lb_tb_div">
            <div id="lb_password" class="Label">密码&nbsp&nbsp&nbsp</div>
            <input type="password" class="TextBox" id="tb_password" name="password" spellcheck="false">
        </div>
        <div id="login_button_div">
            <input type="submit" id="login_button" spellcheck="false">
        </div>
    </form>
</body>
</html>