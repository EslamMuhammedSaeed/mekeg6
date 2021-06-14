<section class="foundation-assessment-section mt-5">
    <div class="container-fluid">
        <div class="foundation-assessment-title mb-3"><h4>التقييم المؤسسى</h4></div>
        <div class="container foundation-assessment-container text-right shadow-sm">
            <div class="row px-3">
                إﺗﻤﺎﻣﻚ ﻟﻌﻤﻠﻴﺔ اﻟﺘﻘﻴﻴﻢ اﻟﻤﺆﺳﺴﻰ وإﻧﺸﺎء ﻣﻠﻒ ﻟﻤﺆﺳﺴﺘﻚ ﻳﻤﻜﻨﻚ ﻣﻦ اﻟﺤﺼﻮل ﻋﻠﻰ اﺳﺘﺸﺎرات ﻓﻨﻴﺔ ﻓﻰ ﻣﺠﺎﻟﺎت اﻟﺘﻨﻤﻴﺔ اﻟﻤﺠﺘﻤﻌﻴﺔ وﺍﻟﺎﺷﺘراك ﻓﻰ اﻟﺪوﺭات اﻟﺘﺪرﻳﺒﻴﺔ وﺍﻟﻤﺴارات اﻟﻤﻘﺪﻣﺔ ﻣﻦ ﻗﻄﺎع إﺩﺍﺭة اﻟﺠﻤﻌﻴﺎت ﺑﺎﻟﻤﺆﺳﺴﺔ.
            </div>
            <div class="row text-center mt-3 mb-2">
                @if($foundation->autoEvaluationDone == 1)
                    <a class="btn btn-mekeg d-block mx-auto" href="/foundation/auto_evaluation_result">التقييم الذاتى</a>
                @else
                    <a class="btn btn-mekeg d-block mx-auto" href="/foundation/auto_evaluation">التقييم الذاتى</a>
                @endif
            </div>
        </div>
    </div>
</section>