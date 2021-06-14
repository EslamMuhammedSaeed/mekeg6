<nav class="navbar navbar-expand-lg navbar-dark py-0 px-3 fixed-top" style="background-color: #034939">
    
    <a class="navbar-brand my-1 py-0 mr-2" href="{{route('landing_page')}}">
        <img class="mt-2 ml-3" width="70px" class="img-fuild" src="../images/logo.png">
    </a>
    
        
    
    
    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="navbar-collapse collapse text-center" id="navbarColor01" style="">
        <span class="navbar-text">
            مختبر تطوير آداء المنظمات الأهلية
        </span>
      
        <ul class="navbar-nav mr-auto px-0 mt-0 text-center ">
            <li class="nav-item dropdown text-center">
              <form action="/logout" method="post">
                @csrf
                <div class="nav-link px-lg-3 text-white pt-0" id="navbardrop"  >
                  <input type="submit" value="تسجيل الخروج" style="color :white; background-color:#034939 ; border:0">
                  
                  <i class="fa fa-sign-out mr-1" aria-hidden="true" style="font-size: 15px"></i>
                </div>
              </form>
              
              
            </li> 

        </ul>
      
    </div>
</nav>