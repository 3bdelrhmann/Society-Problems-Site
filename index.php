<!DOCTYPE html>
<html lang="ar">

<head>
    <title>Society Problems</title>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="style.css" />
    <meta charset="UTF-8">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>
    <div class="row">
        <div class="col s12 header center-align z-depth-1">
            <div class="container">
                <div class="logo-container">
                    <h6 class="logo">Society Problems</h6>
                </div>
                <div class="col s12 navbar-container center-align">
                    <button class="mobile-toggle">
                        <i class="material-icons">menu</i>
                    </button>
                    <ul class="navbar" style='padding-bottom: 0 !important;margin-bottom: 0;'>
                        <li>
                            <a href="#loginForm" class="waves-effect waves-light btn modal-trigger">تسجيل / تسجيل دخول</a>
                        </li>
                        <li><a href="#" class="home waves-effect waves-light btn"><b>الرئيسية</b></a></li>
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
                                            <input type='submit' class="waves-effect btn" value="تسجيل" />
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
                                            <input type='submit' class="waves-effect btn" value="تسجيل الدخول" />
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
            <li><a class="btn btn-flat waves-effect waves-light" href='#'>مشاكل اجتماعية</a></li>
            <li><a class="btn btn-flat waves-effect waves-light" href='#'>مشاكل مادية</a></li>
            <li><a class="btn btn-flat waves-effect waves-light" href='#'>عام</a></li>
            <li><a class="btn btn-flat waves-effect waves-light" href='#'>مشاكل خيالية</a></li>
            <li><a class="btn btn-flat waves-effect waves-light" href='#'>شرح الاقسام</a></li>
          </div>
        </ul>
    </div>
    <div class="container">
      <div class="row">
        <div class="body-container">
          <section class="col m9 s12 right main">
            <div class="main-header z-depth-2">
              <h5>المنشورات الحديثة</h5>
              <p>
                 ترتيباً حسب :&nbsp;
                <a class='dropdown-button btn' href='#' data-activates='dropdown1'>الاكثر مشاهدة <i class="fa fa-sort-desc fa-fw"></i></a>
                <ul id='dropdown1' class='dropdown-content'>
                  <li><a href="#!">الاعلي تقييماً</a></li>
                  <li class="divider"></li>
                </ul>
              </p>
            </div>
            <section class="articles col s12">
              <article class="z-depth-1 article right col s12">
                <div class="author right col s12 m2">
                  <div class="author-img col s12">
                    <img class="circle responsive-img" src="images/user.jpg" alt="Author Image" />
                  </div>
                  <div class="author-name col s12">
                    <p>Abdelrhman Mohamed</p>
                  </div>
                </div>
                <div class="content col m10">
                  <div class="title-content  col s12">
                    <h5>ما هو "لوريم إيبسوم" ؟</h5>
                  </div>
                  <article class="content-article col s12">
                    <p>
                      لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من الزمن لم تقضي على هذا النص، بل انه حتى صار مستخدماً وبشكله الأصلي في الطباعة والتنضيد الإلكتروني.
                    </p>
                  </article>
                  <div class="footer-content center col s12">
                    <p>
                      <span class="right">عدد المشاهدات : 1000 </span>
                      <span>قسم : عام</span>
                      <span class="left">تاريخ : 2016/3/13 </span>
                    </p>
                  </div>
                </div>
              </article>
              <article class="z-depth-1 article right col s12">
                <div class="author right col s12 m2">
                  <div class="author-img col s12">
                    <img class="circle responsive-img" src="images/user.jpg" alt="Author Image" />
                  </div>
                  <div class="author-name col s12">
                    <p>Abdelrhman Mohamed</p>
                  </div>
                </div>
                <div class="content col m10">
                  <div class="title-content  col s12">
                    <h5>ما هو "لوريم إيبسوم" ؟</h5>
                  </div>
                  <article class="content-article col s12">
                    <p>
                      لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من الزمن لم تقضي على هذا النص، بل انه حتى صار مستخدماً وبشكله الأصلي في الطباعة والتنضيد الإلكتروني.
                    </p>
                  </article>
                  <div class="footer-content center col s12">
                    <p>
                      <span class="right">عدد المشاهدات : 1000 </span>
                      <span>قسم : عام</span>
                      <span class="left">تاريخ : 2016/3/13 </span>
                    </p>
                  </div>
                </div>
              </article>
              <article class="z-depth-1 article right col s12">
                <div class="author right col s12 m2">
                  <div class="author-img col s12">
                    <img class="circle responsive-img" src="images/user.jpg" alt="Author Image" />
                  </div>
                  <div class="author-name col s12">
                    <p>Abdelrhman Mohamed</p>
                  </div>
                </div>
                <div class="content col m10">
                  <div class="title-content  col s12">
                    <h5>ما هو "لوريم إيبسوم" ؟</h5>
                  </div>
                  <article class="content-article col s12">
                    <p>
                      لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من الزمن لم تقضي على هذا النص، بل انه حتى صار مستخدماً وبشكله الأصلي في الطباعة والتنضيد الإلكتروني.
                    </p>
                  </article>
                  <div class="footer-content center col s12">
                    <p>
                      <span class="right">عدد المشاهدات : 1000 </span>
                      <span>قسم : عام</span>
                      <span class="left">تاريخ : 2016/3/13 </span>
                    </p>
                  </div>
                </div>
              </article>
              <article class="z-depth-1 article right col s12">
                <div class="author right col s12 m2">
                  <div class="author-img col s12">
                    <img class="circle responsive-img" src="images/user.jpg" alt="Author Image" />
                  </div>
                  <div class="author-name col s12">
                    <p>Abdelrhman Mohamed</p>
                  </div>
                </div>
                <div class="content col m10">
                  <div class="title-content  col s12">
                    <h5>ما هو "لوريم إيبسوم" ؟</h5>
                  </div>
                  <article class="content-article col s12">
                    <p>
                      لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من الزمن لم تقضي على هذا النص، بل انه حتى صار مستخدماً وبشكله الأصلي في الطباعة والتنضيد الإلكتروني.
                    </p>
                  </article>
                  <div class="footer-content center col s12">
                    <p>
                      <span class="right">عدد المشاهدات : 1000 </span>
                      <span>قسم : عام</span>
                      <span class="left">تاريخ : 2016/3/13 </span>
                    </p>
                  </div>
                </div>
              </article>
              <article class="z-depth-1 article right col s12">
                <div class="author right col s12 m2">
                  <div class="author-img col s12">
                    <img class="circle responsive-img" src="images/user.jpg" alt="Author Image" />
                  </div>
                  <div class="author-name col s12">
                    <p>Abdelrhman Mohamed</p>
                  </div>
                </div>
                <div class="content col m10">
                  <div class="title-content  col s12">
                    <h5>ما هو "لوريم إيبسوم" ؟</h5>
                  </div>
                  <article class="content-article col s12">
                    <p>
                      لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من الزمن لم تقضي على هذا النص، بل انه حتى صار مستخدماً وبشكله الأصلي في الطباعة والتنضيد الإلكتروني.
                    </p>
                  </article>
                  <div class="footer-content center col s12">
                    <p>
                      <span class="right">عدد المشاهدات : 1000 </span>
                      <span>قسم : عام</span>
                      <span class="left">تاريخ : 2016/3/13 </span>
                    </p>
                  </div>
                </div>
              </article>
              <article class="z-depth-1 article right col s12">
                <div class="author right col s12 m2">
                  <div class="author-img col s12">
                    <img class="circle responsive-img" src="images/user.jpg" alt="Author Image" />
                  </div>
                  <div class="author-name col s12">
                    <p>Abdelrhman Mohamed</p>
                  </div>
                </div>
                <div class="content col m10">
                  <div class="title-content  col s12">
                    <h5>ما هو "لوريم إيبسوم" ؟</h5>
                  </div>
                  <article class="content-article col s12">
                    <p>
                      لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من الزمن لم تقضي على هذا النص، بل انه حتى صار مستخدماً وبشكله الأصلي في الطباعة والتنضيد الإلكتروني.
                    </p>
                  </article>
                  <div class="footer-content center col s12">
                    <p>
                      <span class="right">عدد المشاهدات : 1000 </span>
                      <span>قسم : عام</span>
                      <span class="left">تاريخ : 2016/3/13 </span>
                    </p>
                  </div>
                </div>
              </article>
              <article class="z-depth-1 article right col s12">
                <div class="author right col s12 m2">
                  <div class="author-img col s12">
                    <img class="circle responsive-img" src="images/user.jpg" alt="Author Image" />
                  </div>
                  <div class="author-name col s12">
                    <p>Abdelrhman Mohamed</p>
                  </div>
                </div>
                <div class="content col m10">
                  <div class="title-content  col s12">
                    <h5>ما هو "لوريم إيبسوم" ؟</h5>
                  </div>
                  <article class="content-article col s12">
                    <p>
                      لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من الزمن لم تقضي على هذا النص، بل انه حتى صار مستخدماً وبشكله الأصلي في الطباعة والتنضيد الإلكتروني.
                    </p>
                  </article>
                  <div class="footer-content center col s12">
                    <p>
                      <span class="right">عدد المشاهدات : 1000 </span>
                      <span>قسم : عام</span>
                      <span class="left">تاريخ : 2016/3/13 </span>
                    </p>
                  </div>
                </div>
              </article>
            </section>
          </section>
          <aside class="center-align col m3 s12">
            <div class="content-aside">
              <div class="Ads300250">
                <p>
                  300 * 250
                </p>
              </div>
            </div>
            <div class="content-aside">
              <div class="Ads160600">
                <p>
                  160 * 600
                </p>
              </div>
            </div>
          </aside>
        </div>
      </div>
    </div>
    <div class="row">
      <footer>
        <div class="content-footer">
          
        </div>
      </footer>
    </div>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js "></script>
    <script src="js/Plugins/nicescroll/jquery.nicescroll.min.js "></script>
    <script src="js/materialize.min.js "></script>
    <script src="js/main.js "></script>
</body>

</html>
