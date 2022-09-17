<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');

echo ('<center>
        <div style="width:40%;display:flex;flex-direction: column;">
        <div style="display: flex;
            background: #d2cece;
            justify-content: flex-start;
            padding: 10px;
        ">Bây giờ là: ' . date('H:i d/m/Y') . '</div>' .
    "<form method='post' action='' 
            style='display:flex;flex-direction: column; 
            margin-top:20px; color:#fff' accept-charset='UTF-8'
        >
            <div style='display:flex; margin-bottom:20px; height:40px'>
                <label style='border:solid 2px #0980a0 ;
                    background: #1296ba;margin-right:20px ;
                    flex:1; line-height: 37px;' for='user-name'>
                    Tên đăng nhập
                </label>
                <input required name='username' 
                    style='flex:1; border:solid 2px #1296ba; outline:none; 
                        padding-left:8px' id='user-name' type='text'
                >
            </div>
            <div style='display:flex; height:40px'>
                <label style='border:solid 2px #0980a0; 
                    background: #1296ba;margin-right:20px ;
                    flex:1; line-height: 37px;' for='password'
                >
                    Mật khẩu
                </label>
                <input required name='password' 
                    style='flex:1; border:solid 2px #1296ba; 
                    outline:none; padding-left:8px' id='password' type='password'
                >
            </div>
            <div style='margin-top:20px'>
                <input style='color:#fff;cursor:pointer ;
                    padding:15px 40px; background: #1296ba; border:none; 
                    border-radius:8px' type='submit' value='Đăng nhập'
                >
            </div>
        </form>
        </div>
 </center>");