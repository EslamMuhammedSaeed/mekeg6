<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    {{-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> --}}
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=""> <!--Add site description here!-->
    <title>Misr El-Kheir</title>
    <!--start css files-->
    <link rel="shortcut icon" href="{{ asset('images/mekeg_logo.png') }}" type="image/png">
    <!--start css files-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Barlow&family=Luckiest+Guy&family=Potta+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    

    
    <link rel="stylesheet" href="{{asset('css/lab.css')}}">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    {{-- <link rel="stylesheet" href="../style/all.min.css"><!--FontAwesome-->
    <link rel="stylesheet" href="../style/bootstrap.min.css">
    <link rel="stylesheet" href="../style/main.css"> --}}
    <!--end css files-->
</head>
<body class="text-right">
    <!--Start Navbar section-->
    {{-- <nav class="navbar articles-nav navbar-expand-lg navbar-light bg-color">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img class="img-fuild" src="{{asset('images/logo.png')}}">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 space-evenly">
                    <li class="nav-item">
                        <a class="nav-link active we" aria-current="page" href="#">من نحن</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> التدريب وبناء القدرات</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> والإستشارات الفنية</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> اتقييم المؤسسات</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> أﺣﺪث اﻟﺄﺧﺒﺎر </a>
                    </li>
                    <div class="user-name">
                        <h2 class="h1 nav-heading-left">اﺳﻢ اﻟﻤﺴﺘﺨﺪم</h2>
                        <a href="#" class="btn logout"> ﺗﺴﺠﻴﻞ اﻟﺨﺮﻮج
                            <svg width="56" height="52" viewBox="0 0 56 52" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <rect width="56" height="52" fill="url(#pattern0)"/>
                                <defs>
                                <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                <use xlink:href="#image0" transform="translate(-0.0119287) scale(0.00186835 0.00201207)"/>
                                </pattern>
                                <image id="image0" width="548" height="497" xlink:href="data:image/png;base64,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"/>
                                </defs>
                            </svg>        
                        </a>
                    </div>                
                </ul>            
            </div>
        </div>
    </nav> --}}
    @include('landing_layout.inc.nav')

    <!--End Navbar section-->
    <!--start header section-->
    <header >
        <section class="container">
            <div class="banner lab-article-banner w-100">
                <div class="overlay"></div>
                <h2>مختبر تطوير اداء المنظمات الاهلية</h2>
            </div>
      </section>
    </header>
     <!--end header section-->
    <main class="mokhtaber">
        <article class="lab-article container">
            <section>
                <div class="row">
                    <div class="col-12">
                        <div class="heading-container">
                            <div class="icon">
                                <svg width="30" height="38" viewBox="0 0 30 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.5 26.069H22.5V29.7931H7.5V26.069ZM7.5 18.6207H22.5V22.3448H7.5V18.6207ZM18.75 0H3.75C1.6875 0 0 1.67586 0 3.72414V33.5172C0 35.5655 1.66875 37.2414 3.73125 37.2414H26.25C28.3125 37.2414 30 35.5655 30 33.5172V11.1724L18.75 0ZM26.25 33.5172H3.75V3.72414H16.875V13.0345H26.25V33.5172Z" fill="#79D601"/>
                                </svg>        
                            </div>
                            <h2>وصف برنامج المختبر:</h2>
                        </div>
                        <div class="text-content">
                            <p>
                                تم تعميم برنامج المختبر بمنهجية علمية تستهدف التعليم على أسس العمل للقائمين على المنظمات الأهلية بالإضافة إلي أنشطه الدعم الفني، ومن المتوقع أن المنظمات التي ستنضم إلى المختبر تمكث قدر من الزمن مع الفجوات المؤسسية التي تم رصدها والتعامل معها.
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="target">
                            <div class="icon-holder">
                                <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M49.8812 10.3492C49.9997 10.6346 50.0309 10.9488 49.9708 11.2519C49.9108 11.5551 49.7621 11.8336 49.5437 12.0523L43.2937 18.3023C43.1484 18.4473 42.9758 18.5622 42.786 18.6405C42.5962 18.7188 42.3928 18.7589 42.1875 18.7586H33.4594L29.2312 22.9867C29.7079 23.9845 29.8164 25.1187 29.5376 26.1887C29.2589 27.2588 28.6108 28.1959 27.7079 28.8343C26.8051 29.4728 25.7056 29.7715 24.6038 29.6777C23.502 29.5838 22.4688 29.1035 21.6869 28.3216C20.905 27.5397 20.4247 26.5066 20.3309 25.4048C20.2371 24.303 20.5358 23.2035 21.1742 22.3006C21.8127 21.3978 22.7498 20.7497 23.8198 20.4709C24.8899 20.1922 26.0241 20.3007 27.0219 20.7773L31.25 16.5492V7.82106C31.2496 7.61573 31.2897 7.41235 31.368 7.22253C31.4463 7.03271 31.5612 6.86018 31.7062 6.71481L37.9562 0.464811C38.1748 0.245727 38.4534 0.0964633 38.7569 0.0359421C39.0604 -0.0245791 39.375 0.00636803 39.6608 0.12486C39.9467 0.243353 40.1909 0.444054 40.3626 0.70152C40.5342 0.958986 40.6255 1.26162 40.625 1.57106V9.38356H48.4375C48.7467 9.38361 49.0489 9.47539 49.3059 9.64728C49.5629 9.81917 49.7631 10.0634 49.8812 10.3492ZM44.6656 12.5054H39.0625C38.6481 12.5054 38.2507 12.3408 37.9576 12.0478C37.6646 11.7548 37.5 11.3573 37.5 10.9429V5.34606L34.375 8.47106V15.6336H41.5406L44.6656 12.5086V12.5054ZM48.7719 17.2429C49.5687 19.6867 50 22.2992 50 25.0086C49.9982 30.2895 48.3241 35.4342 45.2179 39.705C42.1117 43.9757 37.7328 47.1532 32.7093 48.7817C27.6857 50.4101 22.2755 50.406 17.2544 48.7699C12.2333 47.1337 7.85935 43.9496 4.75964 39.6741C1.65994 35.3985 -0.00624238 30.2513 1.75748e-05 24.9704C0.00627753 19.6894 1.68466 14.5461 4.79449 10.278C7.90432 6.00985 12.2859 2.8361 17.3108 1.21185C22.3357 -0.412393 27.7459 -0.4037 32.7656 1.23669L30.2406 3.76481C25.6018 2.62104 20.7162 3.02742 16.3301 4.92184C11.944 6.81626 8.29876 10.0946 5.95131 14.2558C3.60386 18.417 2.68332 23.2324 3.33033 27.9661C3.97734 32.6998 6.15632 37.0915 9.53434 40.4702C12.9124 43.8489 17.3036 46.0287 22.0372 46.6766C26.7708 47.3246 31.5863 46.405 35.748 44.0583C39.9097 41.7117 43.1887 38.0671 45.084 33.6814C46.9793 29.2957 47.3866 24.4101 46.2437 19.7711L48.7719 17.2429ZM40.3125 21.8836C40.9836 25.1744 40.5766 28.5939 39.1516 31.6352C37.7267 34.6765 35.3597 37.1777 32.4015 38.7681C29.4434 40.3585 26.0515 40.9533 22.7287 40.4646C19.4059 39.9758 16.329 38.4293 13.9541 36.0545C11.5792 33.6796 10.0328 30.6027 9.544 27.2799C9.05522 23.9571 9.6501 20.5652 11.2405 17.607C12.8309 14.6489 15.3321 12.2819 18.3734 10.8569C21.4147 9.43199 24.8342 9.02492 28.125 9.69606V12.9023C25.4702 12.2174 22.6639 12.4244 20.1383 13.4913C17.6127 14.5582 15.5079 16.4258 14.1482 18.8066C12.7884 21.1873 12.2491 23.9491 12.6133 26.6665C12.9775 29.3839 14.225 31.9062 16.1637 33.8449C18.1024 35.7835 20.6247 37.0311 23.3421 37.3953C26.0595 37.7595 28.8212 37.2201 31.202 35.8604C33.5827 34.5006 35.4504 32.3959 36.5173 29.8703C37.5842 27.3447 37.7911 24.5383 37.1062 21.8836H40.3125Z" fill="#79D601"/>
                                </svg>         
                            </div>
                            <div class="text-content">
                                <h2>الهدف العام:</h2>
                                <p>" تحسين الأداء المؤسسي والبرامجي للمنظمات الأهلية وربطها بتطبيقات التنمية المستدامة"</p>
                            </div>
                       </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="target">
                            <div class="icon-holder">
                                <i class="far fa-user-circle"></i>                
                            </div>
                            <div class="text-content">
                                <h2>الفئات المستهدفة:</h2>
                                <p>الجمعيات والمؤسسات الأهلية.</p>
                            </div>
                       </div>
                    </div>
                </div>
            </section>
            <section class="conditions">
                <div class="content">
                    <h4 class="heading">شروط التقدم للمختبر:</h4>
                    <div class="point">
                        <svg width="12" height="14" viewBox="0 0 12 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M-3.49691e-07 7L12 0.0717959L12 13.9282L-3.49691e-07 7Z" fill="#084C3D"/>
                        </svg>
                        <p class="text">
                             ألا تكون المنظمة محظورة من وزارة التضامن الإجتماعي
                        </p>    
                    </div>
                    <div class="point">
                        <svg width="12" height="14" viewBox="0 0 12 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M-3.49691e-07 7L12 0.0717959L12 13.9282L-3.49691e-07 7Z" fill="#084C3D"/>
                        </svg>
                        <p class="text">
                            أن تكون مقيمة مؤسسيا من خلال فريق برنامج تطوير الجمعيات الأهلية.
                        </p>    
                    </div>
                    <div class="point">
                        <svg width="12" height="14" viewBox="0 0 12 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M-3.49691e-07 7L12 0.0717959L12 13.9282L-3.49691e-07 7Z" fill="#084C3D"/>
                        </svg>
                        <p class="text">
                            يفضل أن يكون لها سابقة تعاون مع المؤسسة وأن لا تكون محظورة من أحد قطاعاتها. 

                        </p>    
                    </div>
                </div>
            </section>
            <section class="conditions pros">
                <div class="content">
                    <h4 class="heading">مميزات الحصول على خدمات المختبر:</h4>
                    <div class="point">
                        <svg width="12" height="14" viewBox="0 0 12 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M-3.49691e-07 7L12 0.0717959L12 13.9282L-3.49691e-07 7Z" fill="#084C3D"/>
                        </svg>
                        <p class="text">
                             إتاحة وتوفير فرص لحصول المنظمات الأهلية التي يمثلها المشاركون على استشارات تنموية                        </p>    
                    </div>
                    <div class="point">
                        <svg width="12" height="14" viewBox="0 0 12 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M-3.49691e-07 7L12 0.0717959L12 13.9282L-3.49691e-07 7Z" fill="#084C3D"/>
                        </svg>
                        <p class="text">
                            لتطوير الأوضاع المؤسسية والتنظيمية والبرامجية لمنظماتهم الأهلية عبر البريد الإلكتروني أو الزيارات الميدانية.                         </p>    
                    </div>
                    <div class="point">
                        <svg width="12" height="14" viewBox="0 0 12 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M-3.49691e-07 7L12 0.0717959L12 13.9282L-3.49691e-07 7Z" fill="#084C3D"/>
                        </svg>
                        <p class="text">
                            أغلب الخدمات مقدمة مجاناً بدون أي رسوم على المنظمة الأهلية التي يمثلها المتدرب. 
                        </p>    
                    </div>
                </div>
            </section>
            <section class="conditions steps">
                <div class="content">
                    <h4 class="heading">خطوات التسجيل:</h4>
                    <div class="point">
                        <svg width="14" height="16" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.77496 12.1H0.684961V9.1H9.77496V12.1ZM17.3157 19H13.9857V2.47L17.3157 0.0399991V19Z" fill="#084C3D"/>
                        </svg>     
                        <p class="text">
                            في البداية تقوم الجمعية بالتسجيل الالكتروني علي المنصة (مرفق إستمارة تسجيل الجمعية).        
                        </p>    
                    </div>
                    <div class="point">
                        <svg width="18" height="18" viewBox="0 0 26 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.6441 13.1H0.554102V10.1H9.6441V13.1ZM25.4349 3.56H22.1949C20.6049 3.56 19.3449 4.25 18.4149 5.63C17.6049 6.86 17.1849 8.27 17.1849 9.92V20H13.8549V11.72C13.8549 5.09 16.1949 0.649999 22.1949 0.649999C22.8549 0.649999 23.9349 0.649999 25.4349 0.619999V3.56Z" fill="#084C3D"/>
                        </svg>      
                        <p class="text">
                            يقوم الأدمن بالموافقة أو عدم الموافقة علي الجمعية بناء علي المعايير الداخلية الخاصة بالقطاع والمستهدف المطلوب .                        </p>    
                    </div>
                    <div class="point">
                        <svg width="18" height="18" viewBox="0 0 29 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.0142 13.1H0.924219V10.1H10.0142V13.1ZM28.055 3.8C28.055 5.57 27.425 6.95 26.135 7.91C25.025 8.75 23.555 9.17 21.725 9.17H17.555V20H14.225V0.769999H17.555V6.11C19.985 6.11 20.285 5.09 20.285 3.02V0.769999H22.925V3.8C22.925 4.67 22.925 6.2 21.935 6.53C24.725 6.53 24.815 5.09 24.815 3.02V0.769999H28.055V3.8Z" fill="#084C3D"/>
                        </svg>     
                        <p class="text">
                            في حالة موافقة الأدمن علي الجمعية، يتم ارسال رسالة الكترونية للجمعية مباشرة وتنص الرسالة علي انه ( تم قبول الجمعية للإنضمام للمختبر ويرجي الدخول علي المنصة لإستكمال باقي البيانات).
                        </p>    
                    </div>
                    <div class="point">
                        <svg width="18" height="18" viewBox="0 0 25 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.0982 13.1H0.00820313V10.1H9.0982V13.1ZM24.619 20H19.189C15.439 20 12.679 17.75 12.679 14.51C12.679 12.02 14.059 10.52 16.789 10.01C14.359 9.29 13.129 7.73 13.129 5.33C13.129 2.51 15.469 0.649999 18.739 0.649999H23.959V3.35H19.309C17.419 3.35 16.519 4.49 16.519 6.17C16.519 7.64 17.779 8.75 19.309 8.75H20.929V11H19.189C17.329 11 16.069 12.17 16.069 14.21C16.069 16.01 17.329 17.21 19.189 17.21H24.619V20Z" fill="#084C3D"/>
                        </svg>           
                        <p class="text">
                            يتم تصنيف الجمعيات التي تم قبولها بناء علي مشروعات القطاع، علي أن يضم كل تصنيف مجموعه من الجمعيات بنفس المشروع، ويكون لكل جمعية صفحة خاصة بها، هذه الصفحة تكون متاحة لمسئول التواصل بالجمعية للدخول عليها والإطلاع علي مجموعة من الملفات ( تقرير التقييم الذاتي – تقرير التقييم المؤسسي القبلي - خطة بناء القدرات للجمعية – تقرير التقييم المؤسسي البعدي).
                        </p>    
                    </div>
                    <div class="point">
                        <svg width="18" height="18" viewBox="0 0 27 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.20465 11.1H0.114648V8.1H9.20465V11.1ZM26.4654 9.51C26.4654 13.86 23.8854 16.83 19.5954 16.83C15.3054 16.83 12.6654 14.07 12.6654 9.54C12.6654 7.65 13.6254 5.58 15.5454 3.39C17.1354 1.59 18.4254 0.51 19.4754 0.12C20.5854 0.51 21.9354 1.56 23.5254 3.27C25.5054 5.4 26.4654 7.5 26.4654 9.51ZM23.0454 9.63C23.0454 7.5 21.1554 4.29 19.5054 3.39C17.9754 4.2 15.9354 7.56 15.9354 9.63C15.9354 12.21 17.3154 13.8 19.5054 13.8C21.6354 13.8 23.0454 12.21 23.0454 9.63Z" fill="#084C3D"/>
                        </svg>              
                        <p class="text">
                            بعد أن يتم إرسال الرسالة للجمعية تقوم الجمعية بالدخول علي المختبر وإجراء التقييم الذاتي مرفق ملف إستمارة التقييم الذاتي – مرفق ملف تحليل درجات التقييم الذاتي – مرفق ملف للتقارير المستخرجة من قاعدة البيانات الخاصة بالتقرير الذاتي – مرفق ملف تقرير تقييم ذاتي للجمعية
                        </p>    
                    </div>
                    <div class="point">
                        <svg width="18" height="18" viewBox="0 0 26 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.6441 13.1H0.554102V10.1H9.6441V13.1ZM13.8549 3.56H17.0949C18.6849 3.56 19.9449 4.25 20.8749 5.63C21.6849 6.86 22.1049 8.27 22.1049 9.92V20H25.4349V11.72C25.4349 5.09 23.0949 0.649999 17.0949 0.649999C16.4349 0.649999 15.3549 0.649999 13.8549 0.619999V3.56Z" fill="#084C3D"/>
                        </svg>                      
                        <p class="text">
                            بعد أن تقوم الجمعية بإجراء التقييم الذاتي يتم التواصل مع الجمعية وتحديد معها موعد زيارة للتقييم المؤسسي.
                        </p>                    
                    </div>
                    <div class="point">
                        <svg width="18" height="18" viewBox="0 0 27 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.30719 13.1H0.217188V10.1H9.30719V13.1ZM21.888 20H17.508L12.918 0.649999H16.338L19.788 16.28L22.728 0.649999H26.388L21.888 20Z" fill="#084C3D"/>
                        </svg>                             
                        <p class="text">
                            بناء علي التقييم المؤسسي الخاص بالجمعية يتم إعداد خطة بناء قدرات بشكل اتوماتيكي الكتروني بناء علي نتائج التقييم المؤسسي، علي أن يتم إعتماد الخطة من الأدمن.
                        </p>                    
                    </div>
                    <div class="point">
                        <svg width="18" height="18" viewBox="0 0 27 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.30719 13.1H0.217188V10.1H9.30719V13.1ZM26.388 20H22.728L19.788 4.34L16.338 20H12.918L17.508 0.649999H21.888L26.388 20Z" fill="#084C3D"/>
                        </svg>                                  
                        <p class="text">
                            يتم متابعة الجمعية من أجل تنفيذ التدخلات المدرجة بالخطة، وتحديد ما يتم تنفيذه ونسبة الإنجاز.
                        </p>                    
                    </div>
                    <div class="point">
                        <svg width="18" height="18" viewBox="0 0 26 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.17535 13.1H0.0853516V10.1H9.17535V13.1ZM25.9261 7.43V20H22.6261V12.92C21.7261 13.97 20.5561 14.51 19.0861 14.51C16.8961 14.51 15.2161 13.79 14.0461 12.38C12.9961 11.09 12.4861 9.41 12.4861 7.34C12.4861 5.39 13.0861 3.77 14.3161 2.54C15.5461 1.28 17.1361 0.649999 19.0861 0.649999C21.0661 0.649999 22.6861 1.31 23.9761 2.6C25.2661 3.89 25.9261 5.48 25.9261 7.43ZM22.5061 7.67C22.5061 6.62 22.2361 5.72 21.6961 4.97C21.0661 4.13 20.2561 3.71 19.2361 3.71C18.2461 3.71 17.4361 4.13 16.8661 4.94C16.3561 5.63 16.1161 6.5 16.1161 7.55C16.1161 8.6 16.3861 9.5 16.9261 10.25C17.5561 11.06 18.3661 11.48 19.3861 11.48C20.3761 11.48 21.1861 11.06 21.7561 10.25C22.2661 9.53 22.5061 8.66 22.5061 7.67Z" fill="#084C3D"/>
                        </svg>                                       
                        <p class="text">
                            . بعد أن يتم إنجاز خطة بناء القدرات من خلال الجمعية يتم إجراء التقييم المؤسسي البعدي للجمعية وقياس الأثر.                        </p>                    
                    </div>
                    <div class="point">
                        <svg width="18" height="18" viewBox="0 0 26 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.57086 12.1H0.480859V9.1H9.57086V12.1ZM17.1116 19H13.7816V2.47L17.1116 0.0399991V19ZM25.5109 15.91L21.3109 13.81V9.19L25.5109 11.26V15.91Z" fill="#084C3D"/>
                        </svg>                                                                
                        <p class="text">
                            بناء علي نتيجة التقييم المؤسسي البعدي للجمعية يتم إستخراج شهادة التخرج للجمعية.                     
                        </p>                    
                    </div>
                    <div class="point">
                        <svg width="18" height="18" viewBox="0 0 26 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.0103 12.1H0.920313V9.1H10.0103V12.1ZM17.5511 19H14.2211V2.47L17.5511 0.0399991V19ZM25.0804 19H21.7504V2.47L25.0804 0.0399991V19Z" fill="#084C3D"/>
                        </svg>                                                                     
                        <p class="text">
                            يجب أن يتضمن المختبر إمكانية إنشاء جروبات واتس للجمعيات إعتمادا علي ارقام التواصل مع الجمعية في صفحة التسجيل.                        </p>                    
                    </div>
                    <div class="point">
                        <svg width="22" height="22" viewBox="0 0 34 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.87945 13.1H0.789453V10.1H9.87945V13.1ZM17.4202 20H14.0902V3.47L17.4202 1.04V20ZM33.1995 3.56H29.9595C28.3695 3.56 27.1095 4.25 26.1795 5.63C25.3695 6.86 24.9495 8.27 24.9495 9.92V20H21.6195V11.72C21.6195 5.09 23.9595 0.649999 29.9595 0.649999C30.6195 0.649999 31.6995 0.649999 33.1995 0.619999V3.56Z" fill="#084C3D"/>
                        </svg>                                                                              
                        <p class="text">
                            يتم إعداد أجندة داخل المختبر تتضمن كافة الأحداث والأنشطة التي تتم مع الجمعيات.  
                        </p>                    
                    </div>
                </div>
            </section>
            <section class="options">
                <div class="button-holder row">
                    <div class="col-12 col-sm-12 col-md-6">
                        <a href="{{route('login')}}" class="btn btn-success py-3 login">تسجيل الدخول</a>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6">
                        <a href="/foundation/register" class="btn btn-success py-3 register">انشئ حساب لمنظمتك</a>
                    </div>
                </div>
            </section>
            <section class="sponsors">
                <div class="heading">
                    <h2>الجهات الراعية لبرامج بناء القدرات:</h2>
                </div>
                <div class="row">
                    <div class="col-lg-2 col-md-4 col-sm-6 col-12 mt-2">
                        <div class="sponsor">
                            <div class="logo-holder">
                                <img class="img-fluid" src="{{asset('images/NQI.jpg')}}" alt="QNI">                   
                            </div>
                            <a href="https://www.govserv.org/EG/Cairo/509202865764418/%D8%A7%D9%84%D9%85%D8%B9%D9%87%D8%AF-%D8%A7%D9%84%D9%82%D9%88%D9%85%D9%8A-%D9%84%D9%84%D8%AC%D9%88%D8%AF%D8%A9---National-Quality-Institute" class="link">المعهد القومي للجودة</a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                        <div class="sponsor">
                            <div class="logo-holder">
                                <img class="img-fluid" src="{{asset('images/NG1.jpg')}}" alt="NG pic">                   
                            </div>
                            <a href="http://www.nmi.gov.eg/" class="link">المعهد القومي للحوكمة<br> والتنمية المستدامة</a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                        <div class="sponsor">
                            <div class="logo-holder">
                                <img class="img-fluid" src="{{asset('images/university.jpg')}}" alt="NG pic" style="max-width: 180px">                   
                            </div>
                            <a href="https://bsu.edu.eg/" class="link">جامعة بني سويف</a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                        <div class="sponsor">
                            <div class="logo-holder">
                                <img class="img-fluid" src="{{asset('images/general-uni.jpg')}}" alt="general uni pic">                   
                            </div>
                            <a href="http://fngo.org.eg/NGO/default.aspx" class="link">الاتحاد العام للجمعيات <br>والمؤسسات الأهلية</a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                        <div class="sponsor">
                            <div class="logo-holder">
                                <img class="img-fluid un" src="{{asset('images/UN.jpg')}}" alt="UN pic">                   
                            </div>
                            <a href="https://www.undp.org/" class="link">برنامج الامم المتحدة اللإنمائي</a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                        <div class="sponsor">
                            <div class="logo-holder">
                                <img class="img-fluid un" src="{{asset('images/NGOs.png')}}" alt="ngo's pic">                   
                            </div>
                            <a href="https://www.shabakaegypt.net/" class="link">الشبكة العربية للمنظمات الأهلية</a>
                        </div>
                    </div>
                </div>
            </section>
        </article>
    </main>
    <!--start js files-->
    <script src="{{asset('/js/all.min.js')}}"></script><!--FontAwesome-->
    <script src="{{asset('/js/main.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>