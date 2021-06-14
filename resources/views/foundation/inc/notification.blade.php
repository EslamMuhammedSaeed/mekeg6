<section class="notifications-section mt-5">
             
    <div class="container-fluid">
        <div class="notifications-title"><h4>الإشعارات</h4></div>
        <div class="notifications-container container text-right">

            @forelse ($notifications as $notification)
            <div class="notification my-3 mx-3">
                <p>{{$notification->content}}</p>
            </div>  
            @empty
            <div class="notification my-3 mx-3">
                <p>لا توجد إشعارات</p>
            </div>
            @endforelse
            
      

        </div>
    </div>
</section>