{{-- <nav class="navbar navbar-expand-lg navbar-light bg-color" >
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img width="70px" class="img-fuild" src="../images/logo.png">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
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
                    <a class="nav-link" href="#"> تقييم المؤسسات</a>
                </li>   
            </ul> 
            <ul class="navbar-nav mr-auto text-center px-0 ">
                <li class="nav-item dropdown text-center">
                  <a class="nav-link dropdown-toggle text-white login-dropdown" href="#" id="navbardrop" data-toggle="dropdown" style="background-color: #f1891c">
                    تسجيل الدخول
                  </a>
                  <div class="dropdown-menu text-center">
                    <a class="dropdown-item" href="#">دخول الأفراد</a>
                    <a class="dropdown-item" href="#">دخول الجمعيات</a>
                    
                  </div>
                </li> 
        
                <li class="nav-item dropdown mx-0 text-center">
                    <a class="nav-link dropdown-toggle text-white reg-dropdown" href="#" id="navbardrop" data-toggle="dropdown" >
                      إنشاء حساب
                    </a>
                    <div class="dropdown-menu text-center">
                      <a class="dropdown-item" href="#">حساب فردى</a>
                      <a class="dropdown-item" href="#">حساب جمعية</a>
                      
                    </div>
                </li> 
            </ul>

                       
        </div>
    </div>
</nav>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <!-- Brand -->
    <a class="navbar-brand" href="#">Logo</a>
  
    <!-- Links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Link 1</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link 2</a>
      </li>
  
      <!-- Dropdown -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
          Dropdown link
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Link 1</a>
          <a class="dropdown-item" href="#">Link 2</a>
          <a class="dropdown-item" href="#">Link 3</a>
        </div>
      </li>
    </ul>
  </nav> --}}

<nav class="navbar navbar-expand-lg navbar-dark py-0 px-3" style="background-color: #034939">
    
    <a class="navbar-brand my-1 py-0 mr-2" href="{{route('landing_page')}}">
        <img class="mt-2 ml-3" width="70px" class="img-fuild" src="../images/logo.png">
    </a>
        
    
    
    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="navbar-collapse collapse text-center" id="navbarColor01" style="">
      <ul class="navbar-nav ml-auto text-center px-0">
        <li class="nav-item">
            <a class="nav-link" href="#" >من نحن </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#" >التدريب و بناء القدرات </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#" >الاستشارات الفنية </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('lab')}}" >مختبر تطوير المنظمات   </a>
        </li>  
        <li class="nav-item">
            <a class="nav-link" href="{{route('news')}}" >أحدث الأخبار  </a>
        </li>  
        
    </ul>

    

      @if(Auth::user())
      <ul class="navbar-nav mr-auto text-center px-0 ">
        <li class="nav-item dropdown text-center">
          <a class="nav-link dropdown-toggle text-white mt-3" href="" id="navbardrop" data-toggle="dropdown" >
            <span class="user-name mx-2" style="">{{Auth::user()->name}}</span>
          </a>
          <div class="dropdown-menu text-center">
            <a class="dropdown-item" href="{{route('dashboard')}}" style="font-size: 15px">الصفحة الرئيسية</a>
            <form action="/logout" method="post">
              @csrf
              <div class=" text-white " id="navbardrop"  >
                <input type="submit" value="تسجيل الخروج" style="color :black; background-color:white ; border:0">
                
              </div>
            </form>
            
          </div>
        </li>
        <div class="container-fluid  mx-0 nav-header text-right text-white">
          {{-- <a href="{{route('dashboard')}}">
             <p class="ml-2 user-name" style="">{{Auth::user()->name}}</p>
          </a> --}}
          <img class="mb-3 mb-lg-0" width="50px" height="50px" src="{{ filter_var(Auth::user()->avatar, FILTER_VALIDATE_URL) ? Auth::user()->avatar : Voyager::image( Auth::user()->avatar ) }}" alt="" style="border-radius:50%; border: 2px solid #79D601">

        </div>
       
      </ul>

      @else
      <ul class="navbar-nav mr-auto text-center px-0 mt-3 ">
          <li class="nav-item dropdown text-center">
            <a class="nav-link  px-lg-3 text-white login-dropdown" href="#">
              تسجيل الدخول
            </a>
            {{-- <div class="dropdown-menu text-center">
              <a class="dropdown-item" href="{{route('login')}}">دخول الأفراد</a>
              <a class="dropdown-item" href="#">دخول الجمعيات</a>
              
            </div> --}}
          </li> 

          <li class="nav-item dropdown mx-0 text-center mb-3">
              <a class="nav-link  px-lg-3 text-white reg-dropdown" href="#" >
                إنشاء حساب
              </a>
              {{-- <div class="dropdown-menu text-center">
                <a class="dropdown-item" href="#">حساب فردى</a>
                <a class="dropdown-item" href="foundation/register">حساب جمعية</a>
                
              </div> --}}
          </li>
      </ul> 
      @endif  
    
      
    </div>
</nav>