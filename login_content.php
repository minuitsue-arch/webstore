    <style type="text/css">
        .col-md-10 {
            background-repeat: no-repeat;
            background-image: linear-gradient(rgb(104, 145, 162), rgb(12, 97, 33));
        }

        /* Card component */
        .mycard.mycard-container {
            max-width: 3cap00px;
            height: 450px;
        }

        .mycard {
            background-color: #F7F7F7;
            padding: 20px 25px 30px;
            margin: 0 auto 25px;
            margin-top: 50px;
            -moz-border-radius: 10px;
            -webkit-border-radius: 10px;
            border-radius: 10px;
        }

        .profile-img-card {
            width: 100px;
            /* 👈 設定寬度，數值可依需求調整 (例如 80px ~ 120px) */
            height: auto;
            /* 👈 確保圖片等比例縮放，不會變形 */
            margin: 0 auto 10px auto;
            display: block;
            object-fit: contain;
            /* 👈 確保圖片在容器內完整顯示 */
        }

        .profile-name-card {
            font-size: 20px;
            text-align: center;
        }

        .form-signin input[type="email"],
        .form-signin input[type="password"],
        .form-signin button {
            width: 100%;
            height: 44px;
            font-size: 16px;
            display: block;
            margin-bottom: 20px;
        }

        .btn.btn-signin {
            font-weight: 700;
            background-color: rgb(104, 145, 162);
            color: white;
            height: 38px;
            transition: background-color 1s;
        }

        .btn.btn-signin:hover,
        .btn.btn-signin:focus,
        .btn.btn-signin:active {
            background-color: rgb(12, 97, 33);
        }

        .other a {
            color: rgb(104, 145, 162);
        }

        .other a:hover,
        .other a:focus,
        .other a:active {
            color: rgb(12, 97, 33);
        }
    </style>

    <!-- 會員HTML登入頁面 -->
                    <div class="mycard">
                        <div class="mycard-container">
                            <img id="profile-img" class="profile-img-card" src="images/logo03.svg" alt="logo">
                            <p id="profile-name" class="profile-name-card">電商藥粧：會員登入</p>
                            <form class="form-signin" action="" method="post" id="form1">
                                <input type="email" id="inputAccount" name="inputAccount" class="form-control"
                                    placeholder="Account" required autofocus />
                                <input type="password" id="inputPassword" name="inputPassword" class="form-control"
                                    placeholder="Password" required />
                                <button class="btn btn-signin mt-4" type="submit">sign in</button>
                            </form>
                            <div class="other mt-5 text-center">
                                <a href="register.php">註冊新帳號</a>　
                                <a href="#">忘記密碼？</a>
                            </div>
                        </div>
                    </div>