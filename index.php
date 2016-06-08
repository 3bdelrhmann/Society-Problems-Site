<!DOCTYPE html>
<html lang="ar">

<head>
    <title>Society Problems</title>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="style.css" />
    <meta charset="UTF-8">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <div class="row">
        <div class="col s12 header center-align">
            <div class="logo-container">
                <img src="images/Logo.png" alt="Society Problems Logo !" />
            </div>
            <div class="col s12 navbar-container center-align">
                <ul class="navbar" style='padding-bottom: 0 !important;margin-bottom: 0;'>
                    <li><a href="#" class="waves-effect waves-light btn">الرئيسية</a></li>
                    <li><a href="#" class="waves-effect waves-light btn">اضافة منشور جديد</a></li>
                </ul>

                <ul class="navbar">
                    <li>
                        <a href="#loginForm" class="waves-effect waves-light btn modal-trigger">تسجيل / تسجيل دخول</a>
                    </li>
                    <li><a href="#" class="waves-effect waves-light btn">نبذة عن الموقع</a></li>
                    <li><a href="#" class="waves-effect waves-light btn">الاقسام هنا</a></li>
                    <li><a href="#" class="waves-effect waves-light btn">الاقسام هنا</a></li>
                    <li><a href="#" class="waves-effect waves-light btn">الاقسام هنا</a></li>
                </ul>
                <div id="loginForm" class="modal modal-fixed-footer" style="width: 70%;">
                    <div class="modal-content">
                        <h5 class="darkblue">تسجيل / تسجيل الدخول</h5>
                        <form class="register col l6 m12" style="border-right: 1px solid #2D3E52;">
                            <h6 style="font-family: Droid-Bold;" class="darkblue">تسجيل مستخدم جديد</h6>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type='text' class="validate" id="first-name" />
                                    <label for="first-name">الاسم الكامل</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s12">
                                    <input type='email' class="validate" id="email" />
                                    <label for="email">البريد الالكتروني</label>
                                </div>
                            </div>


                            <div class="row">
                                <div class="input-field col s12">
                                    <input type='password' class="validate" id="password" />
                                    <label for="password">كلمة المرور</label>
                                </div>
                            </div>
                        </form>

                        <form class="login col l6 m12">
                            <h6 style="font-family: Droid-Bold;" class="darkblue">تسجيل دخول</h6>

                            <div class="row">
                                <div class="input-field col s12">
                                    <input type='email' class="validate" id="email" />
                                    <label for="email">البريد الالكتروني</label>
                                </div>
                            </div>


                            <div class="row">
                                <div class="input-field col s12">
                                    <input type='password' class="validate" id="password" />
                                    <label for="password">كلمة المرور</label>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer ">
                        <a href="#! " class=" modal-action modal-close waves-effect waves-green btn-flat ">دخول</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js "></script>
    <script src="js/materialize.min.js "></script>
    <script src="js/main.js "></script>
</body>

</html>