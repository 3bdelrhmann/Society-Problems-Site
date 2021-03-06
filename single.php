<!DOCTYPE html>
<html lang="ar">

<head>
    <title>Society Problems</title>
    <meta charset="UTF-8">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize-rtl.css" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="style.css" />
    <link type="text/css" rel="stylesheet" href="css/single.css" />
</head>

<body>
    <div class="row CustomRow">

        <!-- Navbar Starts Here ! -->

        <div class="col s12 header center-align z-depth-1">
            <div class="container">
                <div class="logo-container">
                    <h1 class="logo">Society Problems</h1>
                </div>
                <div class="col s12 navbar-container center-align">
                    <button class="mobile-toggle">
                        <i style="color:#aaa;font-size:30px;" class="fa fa-bars"></i>
                    </button>
                    <ul class="navbar" style='padding-bottom: 0 !important;margin-bottom: 0;'>
                        <li>
                            <a href="#loginForm" class="waves-effect waves-light btn modal-trigger">تسجيل / تسجيل دخول</a>
                        </li>
                        <li><a href="index.html" class="home waves-effect waves-light btn"><b>الرئيسية</b></a></li>
                        <li id="sectionsLink">
                            <a href="#" class="dropdownToggle waves-effect waves-light btn"><i class="fa fa-sort-desc fa-fw"></i>اقسام الموقع</a>
                        </li>
                    </ul>
                    <div id="loginForm" class="modal modal-fixed-footer " style="width: 70%;">
                        <div class="modal-content">
                            <div class="header-modal">
                                <h5 class="darkblue">تسجيل / تسجيل الدخول</h5>
                            </div>
                            <form class=" left register col l6 m12" style="border-right:1px solid #ddd;border-top: 1px solid #ddd;">
                                <div class="header-register">
                                    <h6 style="font-family: Swissra-light;" class="darkblue2">تسجيل مستخدم جديد</h6>
                                </div>
                                <div class="content-register">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <label for="FnameLname">الأسم الاول والاخير</label>
                                            <input required type='text' class="validate" id="FnameLname" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <label for="Username">اسم المستخدم</label>
                                            <input required type='text' class="validate" id="Username" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <label for="email-reg">البريد الالكتروني</label>
                                            <input required type='email' class="validate" id="email-reg" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <label for="password-reg">كلمة المرور</label>
                                            <input required type='password' class="validate" id="password-reg" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input type='submit' style="background: #3b77bd;
                                    color: #fff;" class="waves-effect btn" value="تسجيل" />
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <form class="right login col l6 m12" style="border-top: 1px solid #ddd;">
                                <h6 style="font-family: Swissra-light;" class="darkblue2">تسجيل دخول</h6>
                                <div class="content-login">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <label for="email-log">البريد الالكتروني او اسم المستخدم</label>
                                            <input required type='email' class="validate" id="email-log" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <label for="password-log">كلمة المرور</label>
                                            <input required type='password' class="validate" id="password-log" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input type='submit' style="background: #3b77bd;
                                    color: #fff;" class="waves-effect btn" value="تسجيل الدخول" />
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer ">
                            <a href="#! " class=" modal-action modal-close waves-effect btn-flat darkblue2">خروج</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <ul class="dropdown bg-darkblue z-depth-1">
            <div class="container">
                <li>
                    <a class="btn btn-flat waves-effect waves-light" href='category.html'>مشاكل اجتماعية</a>
                </li>
                <li>
                    <a class="btn btn-flat waves-effect waves-light" href='category.html'>مشاكل مادية</a>
                </li>
                <li>
                    <a class="btn btn-flat waves-effect waves-light" href='category.html'>مشاكل خيالية</a>
                </li>
                <li>
                    <a class="btn btn-flat waves-effect waves-light" href='category.html'>عام</a>
                </li>
            </div>
        </ul>
    </div>


    <!-- Navbar ends here ! -->
    <!-- Body starts here ! -->

    <div class="container">
        <div class="row CustomRow">
            <div class="body-container">
                <section class="col l9 s12">
                    <article class="z-depth-1 article col s12">
                        <div class="article-header col s12">
                            <div class="title-content col m7 s12">
                                <h1><a href="#">ما هو "لوريم إيبسوم " ؟</a></h1>
                            </div>
                            <div class="author-content col m5 s12">
                                <div class="author-img col l3 m3 s5">
                                    <img class="circle responsive-img " src="images/user.jpg " alt="Author Image " />
                                </div>
                                <div class="author-name col l9 m9 s7">
                                    <p><a href="author.html">عبد الرحمن محمد</a></p>
                                    <p class="article-date">13 / 9 / 2016 - في - 4:35 pm</p>
                                </div>
                            </div>
                        </div>
                        <div class="content col m12 ">
                            <article class="content-article col s12">
                                <p>
                                    لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من الزمن لم تقضي على هذا النص، بل انه حتى صار مستخدماً وبشكله الأصلي في الطباعة والتنضيد الإلكتروني. هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء. العديد من برامح النشر المكتبي وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم بشكل إفتراضي كنموذج عن النص، وإذا قمت بإدخال "lorem ipsum" في أي محرك بحث ستظهر العديد من المواقع الحديثة العهد في نتائج البحث. على مدى السنين ظهرت نسخ جديدة ومختلفة من نص لوريم إيبسوم، أحياناً عن طريق الصدفة، وأحياناً عن عمد كإدخال بعض العبارات الفكاهية إليها.
                                </p>
                            </article>
                            <div class="footer-content center col s12 ">
                                <span class="col m3 s12">
                                    عدد المشاهدات :
                                    <span>1000</span>
                                </span>
                                <span class="col m3 s12">
                                    عدد التعليقات :
                                    <span>1000</span>
                                </span>
                                <span class="col m3 s12">
                                    قسم :
                                    <span>عام</span>
                                </span>
                                <span class="col m3 s12">
                                  تاريخ :
                                  <span>
                                    2016/3/13
                                  </span>
                                </span>
                            </div>
                        </div>
                    </article>
                    <article class="comments-title article col s12 z-depth-1">
                        <div class="article-header col s12 valign-wrapper">
                            <div class="title-content comments-title col s12 valign">
                                <h1><a href="#">التعليقات</a></h1>
                            </div>
                        </div>
                    </article>
                    <div class="comments-container">
                        <article class="article comment-article col s12 z-depth-1">
                            <div class="comment-author-container col s12">
                                <div class="comment-author col s12 valign-wrapper">
                                    <div class="author-img col m1 s2">
                                        <img class="circle responsive-img valign" src="images/user.jpg" />
                                    </div>

                                    <div class="author-name col m11 s10">
                                        <h4>محمد ايهاب</h4>
                                    </div>

                                </div>
                                <div class="col s8 m6 l4">
                                    <hr style="margin: 0;">
                                </div>
                            </div>

                            <div class="comment-body col s12">
                                <p>
                                    لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من الزمن لم تقضي على هذا النص، بل انه حتى صار مستخدماً وبشكله الأصلي في الطباعة والتنضيد الإلكتروني. هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هن
                                </p>
                            </div>
                        </article>
                        <div class="comment-container">
                            <article class="article comment-article col s12 z-depth-1">
                                <div class="comment-author-container col s12">
                                    <div class="comment-author col s12 valign-wrapper">
                                        <div class="author-img col m1 s2">
                                            <img class="circle responsive-img valign" src="images/user.jpg" />
                                        </div>

                                        <div class="author-name col m11 s10">
                                            <h4>محمد ايهاب</h4>
                                        </div>

                                    </div>
                                    <div class="col s8 m6 l4">
                                        <hr style="margin: 0;">
                                    </div>
                                </div>

                                <div class="comment-body col s12">
                                    <p>
                                        لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من الزمن لم تقضي على هذا النص، بل انه حتى صار مستخدماً وبشكله الأصلي في الطباعة والتنضيد الإلكتروني. هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هن
                                    </p>
                                </div>
                            </article>

                            <article class="article reply-article col l8 m12">
                                <div class="reply-container col s12">
                                    <div class="comment-author-container col s12">
                                        <div class="comment-author col s12 valign-wrapper">
                                            <div class="author-img col m1 s2">
                                                <img class="circle responsive-img valign" src="images/user.jpg" />
                                            </div>

                                            <div class="author-name col m11 s10">
                                                <h4>محمد ايهاب</h4>
                                            </div>

                                        </div>
                                        <div class="col s8 m6 l4">
                                            <hr style="margin: 0;">
                                        </div>
                                    </div>

                                    <div class="reply-body col s12">
                                        <p>
                                            لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص
                                        </p>
                                    </div>
                                </div>
                            </article>

                            <article class="article reply-article col l8 m12">
                                <div class="reply-container col s12">
                                    <div class="comment-author-container col s12">
                                        <div class="comment-author col s12 valign-wrapper">
                                            <div class="author-img col m1 s2">
                                                <img class="circle responsive-img valign" src="images/user.jpg" />
                                            </div>

                                            <div class="author-name col m11 s10">
                                                <h4>محمد ايهاب</h4>
                                            </div>

                                        </div>
                                        <div class="col s8 m6 l4">
                                            <hr style="margin: 0;">
                                        </div>
                                    </div>

                                    <div class="reply-body col s12">
                                        <p>
                                            لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص
                                        </p>
                                    </div>
                                </div>
                            </article>


                        </div>

                        <article class="article comment-article col s12 z-depth-1">
                            <div class="comment-author-container col s12">
                                <div class="comment-author col s12 valign-wrapper">
                                    <div class="author-img col m1 s2">
                                        <img class="circle responsive-img valign" src="images/user.jpg" />
                                    </div>

                                    <div class="author-name col m11 s10">
                                        <h4>محمد ايهاب</h4>
                                    </div>

                                </div>
                                <div class="col s8 m6 l4">
                                    <hr style="margin: 0;">
                                </div>
                            </div>

                            <div class="comment-body col s12">
                                <p>
                                    لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من الزمن لم تقضي على هذا النص، بل انه حتى صار مستخدماً وبشكله الأصلي في الطباعة والتنضيد الإلكتروني. هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هن
                                </p>
                            </div>
                        </article>
                    </div>
                </section>
                <aside class="center-align col l3 s12">
                    <div class="content-aside ">
                        <div class="Ads300250">
                            <p>
                            </p>
                        </div>
                    </div>
                    <div class="content-aside top10">
                        <div class="aside-title">
                            <h6>افضل 10 مؤلفين مشاكل خيالية</h6>
                        </div>

                        <div class="aside-content">
                            <ul style="padding: 0;text-align: right;">
                                <li>
                                    <img src="images/user.jpg" class="user-aside" style="border-radius: 48%;" />
                                    <a href="author.html">عبد الرحمان محمااا</a>
                                </li>
                                <li>
                                    <img src="images/user.jpg" class="user-aside" style="border-radius: 48%;" />
                                    <a href="author.html">عبد الرحمان محمااا</a>
                                </li>
                                <li>
                                    <img src="images/user.jpg" class="user-aside" style="border-radius: 48%;" />
                                    <a href="author.html">عبد الرحمان محمااا</a>
                                </li>
                                <li>
                                    <img src="images/user.jpg" class="user-aside" style="border-radius: 48%;" />
                                    <a href="author.html">عبد الرحمان محمااا</a>
                                </li>
                                <li>
                                    <img src="images/user.jpg" class="user-aside" style="border-radius: 48%;" />
                                    <a href="author.html">عبد الرحمان محمااا</a>
                                </li>
                                <li>
                                    <img src="images/user.jpg" class="user-aside" style="border-radius: 48%;" />
                                    <a href="author.html">عبد الرحمان محمااا</a>
                                </li>
                                <li>
                                    <img src="images/user.jpg" class="user-aside" style="border-radius: 48%;" />
                                    <a href="author.html">عبد الرحمان محمااا</a>
                                </li>
                                <li>
                                    <img src="images/user.jpg" class="user-aside" style="border-radius: 48%;" />
                                    <a href="author.html">عبد الرحمان محمااا</a>
                                </li>
                                <li>
                                    <img src="images/user.jpg" class="user-aside" style="border-radius: 48%;" />
                                    <a href="author.html">عبد الرحمان محمااا</a>
                                </li>
                                <li>
                                    <img src="images/user.jpg" class="user-aside" style="border-radius: 48%;" />
                                    <a href="author.html">عبد الرحمان محمااا</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="content-aside">
                        <div class="Ads160600">
                            <p>
                            </p>
                        </div>
                    </div>
                </aside>
            </div>
        </div>

        <div class="row footer-row CustomRow">
            <footer style="background: #FFF;overflow: auto;">
                <div class="col s12">
                    <div class="col m4 s12 footer-section">
                        <div style="border-bottom: 1px solid #ddd; " class="footer-title ">
                            <h6>خريطة الموقع</h6>
                        </div>

                        <div class="footer-content col s12 ">
                            <ul class="col s6 ">
                                <li class="title">
                                    <a href="index.html">الرئيسية</a>
                                </li>
                                <li><a href="# ">اتصل بنا</a></li>

                                <li><a href="# ">عن الموقع</a></li>
                            </ul>
                            <ul class="col s6 ">
                                <li class="title ">
                                    <a href="# ">شرح الاقسام</a>
                                </li>
                                <li><a href="# ">العام</a></li>
                                <li><a href="# ">العام</a></li>
                                <li><a href="# ">العام</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col m4 s12 footer-section">
                        <div class="footer-title">
                            <h6>تابعنا علي</h6>
                        </div>
                        <div class="footer-content">
                            <div class="icons-container">
                                <a href="#"><i class="icon fa fa-facebook-square"></i></a>
                                <a href="#"><i class="icon fa fa-twitter-square"></i></a>
                                <a href="#"><i class="icon fa fa-youtube-square"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col m4 s12 footer-section">
                        <div class="footer-title">
                            <h6>تابع المنشورات</h6>
                        </div>

                        <div class="footer-content">
                            <form class="col s12">
                                <div class="input-field">
                                    <label for="newsemail">
                                        بالبريد
                                    </label>
                                    <input type="email" id="newsemail" class="validate" />
                                </div>

                                <div class="input-field">
                                    <input class="waves-effect waves btn validate" required type="submit" value="اشتراك" style="background: #3b77bd;
                                    color: #fff;" />
                                </div>
                            </form>

                        </div>
                    </div>

                </div>
                <div class="copyrights center col s12 ">
                    <h6>
                        &copy; جميع الحقوق محفوظة لفريق
                        <a style="color: #3b77bd; "href="# ">Rowyter</a>.
                    </h6>
                </div>
            </footer>
        </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/Plugins/nicescroll/jquery.nicescroll.min.js "></script>
    <script src="js/materialize-rtl.js"></script>
    <script src="js/main.js "></script>
</body>

</html>
