const workField = ["الصحة", "التعليم", "الطفوله", "المرأة", "الإقتصاد", "ديني/اجتماعي/ثقافي", "البيئة", "اخر"];
const resources = ['كهرباء', 'مياه', 'تليفون ارضي'];
const funding = ['تمويل ذاتى', 'تمويل غير حكومى', "تمويل اجنبى", "تمويل حكومي"];
const properties = ['أراضي', 'سيارات', 'أجهزة طبية', 'مباني', 'ورش حرفية', 'أخرى'];
const sectionOneInputs = workField.concat(resources, funding, properties, ['نطاق عمل الجمعية', 'تنوع مؤسسي الجمعية', 'هناك تنوع في مصادر تمويل الجمعية', 'هل للجمعية فروع اخرى؟', 'طبيعة مقر الجمعية', 'وصف المقر (موقع متميز)', 'وصف المقر(مناسب لممارسة الأنشطة)']);
const sectionTwoInputs = ['هل عقدت الجمعية اجتماعات للجمعية العمومية الـعامين السابقين؟']
const sectionThreeInputs = ['هل لدى الجمعية دراسة لاحتياجات المجتمع خلال العشر سنوات الماضية؟', 'متى تم اعدادها ؟', 'من قام باعدادها ؟', 'هل تخصص الجمعية أنشطة للأسر الأكثر احتياجا؟', 'العاملين بالجمعية (أجهزة الإدارة)', 'بعض / كل أعضاء مجلس إدارة الجمعية', 'لجان الجممعية', 'العاملين بالجمعية(أجهزة الإدارة)', 'بعض / كل أعضاء مجلس ادارة الجمعية', 'لجان الجمعية', 'افراد من الجهات المموله لانشطة الجمعية', 'عام', 'موارد مالية', 'موارد بشرية', 'اخرى']
const sectionFourInputs = ['هل لدى الجمعية لائحة عمل داخلية مكتوبة ومعتمدة ؟','هل لدى الجمعية هيكل تنظيمي محدّث ومعتمد من مجلس الإدارة ؟','هل يوجد عاملين؟']
const sectionFiveInputs = ['هل يوجد نظام لحفظ المعلومات (الأرشفة) ؟', 'هل تنتظم الجمعية فى إخطار الجهة الادارية لمحاضر إجتماعات مجلس الادارة والجمعية العمومية فى المواعيد المحددة']
const sectionSixInputs = ['طريقة إتخاذ القرارات داخل مجلس الإدارة', 'نسبة أعضاء مجلس الإدارة الذين أنتظموا فى حضورالجلسات خلال العام الماضي']
const sectionSevenInputs = ['وجود لائحة مالية', 'قيود يومية مستخدمة ومحدثة','إتفاقيات التعاون  موجوده ومحدثة', 'سند صرف شيك / نقدية مستخدم ومحدث', 'صورة الشيك محتفظ بها بشكل دوري','مستند الصرف (فاتورة، إيصال، كشف، ..) مستخدمة ومحدثة', 'كشف ، تقرير ، مذكرة تسوية مستخدمة ومحدثة', 'عروض أسعار مستخدمةومحدثة', 'سند قبض', 'سند التحصيل', 'قسيمة إيداع بنكي', 'كشف حساب بنكي', 'مذكرة تسوية', 'محاضر جرد الاصول', 'الموازنة التقديرية']

// const sectionSevenInputs = ['وجود لائحة مالية', 'قيود يومية مستخدمة ومحدثة', 'سند صرف شيك / نقدية مستخدم ومحدث', 'صورة الشيك محتفظ بها بشكل دوري', 'كشف ، تقرير ، مذكرة تسوية مستخدمة ومحدثة', 'عروض أسعار مستخدمةومحدثة', 'سند قبض', 'سند التحصيل', 'قسيمة إيداع بنكي', 'كشف حساب بنكي', 'مذكرة تسوية', 'محاضر جرد الاصول', 'الموازنة التقديرية']
const sectionEightInputs =['دفتر اليومية الامريكية', 'دفتر الإيرادات والمصروفات', 'دفتر البنك', 'دفتر الخزينة', 'سجل الأصول الثابتة', 'دفتر عهدة المخازن', 'سجل العضوية والأشتراكات', 'سجل المساهمات النقدية']
const sectionNineInputs =['وجود فصل بين الوظائف', 'الرقابة المستندية من حيث ترقيم المستندات وتسلسلها', 'الرقابة المحاسبية والمراجعة الداخلية', 'وجود سلطات للاعتماد وإعتماد المستندات قبل وبعد الصرف والتحصيل', 'الإجراءات المخزنية مطبقة بشكل صحيح داخل الجمعية', 'إجراءات الصرف وتسوية السلف داخل الجمعية', 'الاجراءات الخاصة بمراقبة الحفاظ على الاصول الثابتة للجمعية']
const sectionTenInputs =['ميزان مراجعة شهري', 'تقارير مالية موجوده ومحدثة', 'الميزانية العمومية', 'حساب الإيرادات والمصروفات', 'حساب المقبوضات والمدفوعات']
const othersInputs = ['(اخرى)ميادين عمل الجمعية', '(اخرى)نطاق عمل الجمعية'];
const fileText  = ['اسم المشروع' ,"الفئة المستهدفه",  "عدد المستفيدين", "الهيكل الوظيفي","مصدر التمويل"]
let finalObject = new Object();
let sectionOneTotal = 0;
let sectionTwoTotal = 0;
let sectionThreeTotal = 0;
let sectionFourTotal = 0;
let sectionFiveTotal = 0;
let sectionSixTotal = 0;
let sectionSevenTotal=0;
let sectionEightTotal=0;
let sectionNineTotal=0;
let sectionTenTotal=0;
let currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab


function showOtherTextField(divId, selectId, comparedValue, name) {
    let div = document.getElementById(divId);
    let select = document.getElementById(selectId);
    let textField = div.getElementsByTagName('input')
    if (select.options) {
        let option = select.options[select.selectedIndex];
        if (option.value === comparedValue ) {
            textField[0].classList.replace('hidden', 'visible');
        } else {
            textField[0].classList.add('hidden')
        }
    } else {
        if (select.checked) {
            textField[0].classList.replace('hidden', 'visible');
        } else {
            textField[0].classList.add('hidden')
        }
    }

}


function showTab() {
    let x = document.getElementsByClassName("evaluation-form-step");
    if(currentTab === 0 || currentTab === 1) {
        x[currentTab].style.display = "block";
        if (currentTab === (x.length - 1)) {
            document.getElementById("nextBtn").innerHTML = "التالى (بعد الضغط قم بالتأكيد)";
        } else {
            document.getElementById("nextBtn").innerHTML = "<span class='bold'>التالي</span><div id=\"next-subTitle\">(التقييم الذاتي المالي)</div>";
            document.getElementById("next-subTitle").style.display = "block";
        } }
}

function nextPrev(n) {
    let formData = Object.fromEntries(new FormData(document.querySelector('form')).entries())
    let x = document.getElementsByClassName("evaluation-form-step");
    if( currentTab === 0 && stepOneValidation()) {
    x[currentTab].style.display = "none";
    currentTab = currentTab + n;
    
    // data = CalculateSections(formData);
    // console.log("FINAL", data);
    // nextBtn = document.getElementById('nextBtn');
    // nextBtn.classList.add('d-none');
    // submit = document.getElementById('submit');
    // submit.classList.remove('d-none');
    }
    else if (currentTab ===1 &&  stepTwoValidation()) {
    let formData = Object.fromEntries(new FormData(document.querySelector('form')).entries());

    data = CalculateSections(formData);
    console.log("FINAL", data);

    submit = document.getElementById('submit');
    submit.classList.remove('d-none');
    //  nextBtn = document.getElementById('nextBtn');
    // nextBtn.classList.add('d-none');
    // submit = document.getElementById('submit');
    // submit.classList.remove('d-none');
    
    }
    showTab(currentTab);

}


function onUpload(event) {
    let button = document.getElementById('file-button')
    let icon = document.getElementById('upload-icon');
    if (!event || !event.target || !event.target.files || event.target.files.length === 0) {
        return;
    }
    const name = event.target.files[0].name;
    const lastDot = name.lastIndexOf('.');
    const fileName = name.substring(0, lastDot);
    icon.style.display = 'hidden';
    button.innerHTML = fileName;

}

function stepTwoValidation() {
    let x = document.getElementById("step-2");
    let formData = Object.fromEntries(new FormData(document.querySelector('form')).entries())
    let y = x.getElementsByTagName("input");
    let data = new Object();
    for (let i = 0; i < y.length; i++) {
        // If a field is empty...
        data[y[i].name] = y[i].value
        if (!Object.keys(formData).includes(y[i].name)) {
            y[i].className += " invalid";
        }
    }


    let isStepTwoValid = Object.keys(data).every(key => Object.keys(formData).includes(key));
    return isStepTwoValid;
}

function stepOneValidation() {
    let x = document.getElementsByClassName("evaluation-form-step");
    let formData = Object.fromEntries(new FormData(document.querySelector('form')).entries())
    let y = x[currentTab].getElementsByTagName("select");
    let isFieldExist = Object.keys(formData).some(key => workField.includes(key));
    let isFundingExist = Object.keys(formData).some(key => funding.includes(key));
    let isResourcesExist = Object.keys(formData).some(key => resources.includes(key));
    let isPropsExist = Object.keys(formData).some(key => properties.includes(key));
    let valid = true, isStepOneValid;
    for (let i = 0; i < y.length; i++) {
        if (y[i].value === "أختر") {
            y[i].className += " invalid";
            valid = false;
        } else {
            y[i].classList.remove("invalid");
        }

    }

    isStepOneValid = valid && isFieldExist && isFundingExist && isResourcesExist && isPropsExist;
    return isStepOneValid;
}

function changeClass(element) {
    if (element.classList.contains('invalid')) {
        element.classList.remove("invalid");
    }
}

function changeRadioClass(name) {
    let elements = document.getElementsByName(name);
    for (let i = 0; i < elements.length; i++) {
        if (elements[i].classList.contains('invalid')) {
            elements[i].classList.remove("invalid");
        }
    }
}

function CalculateSections (formData) {
    // const finalObject = new Object();
    const projectsData = {};
    const sectionOneData = [];
    Object.keys(formData).forEach((key) => {
        if(sectionOneInputs.includes(key)){
            sectionOneTotal += parseFloat(formData[key].split('-')[0]);
            if(formData[key].split('-')[1]){
                 finalObject.workArea = formData[key].split('-')[1];
                 console.log(finalObject.workArea);
             }
            if(workField.includes(key)){
                sectionOneData.push(key)
            }

        }
        else if(sectionTwoInputs.includes(key)) {
            sectionTwoTotal += parseFloat(formData[key])
        }
        else if(sectionThreeInputs.includes(key)) {
            sectionThreeTotal += parseFloat(formData[key])
        }
        else if(sectionFourInputs.includes(key)) {
            sectionFourTotal += parseFloat(formData[key])
        }
        else if(sectionFiveInputs.includes(key)) {
            sectionFiveTotal += parseFloat(formData[key])
        }
        else if(sectionSixInputs.includes(key)) {
            sectionSixTotal += parseFloat(formData[key])
        }
        else if(sectionSevenInputs.includes(key)) {
            sectionSevenTotal += parseFloat(formData[key])
        }
        else if(sectionEightInputs.includes(key)) {
            sectionEightTotal += parseFloat(formData[key])
        }
        else if(sectionNineInputs.includes(key)) {
            sectionNineTotal += parseFloat(formData[key])
        }
        else if(sectionTenInputs.includes(key)) {
            sectionTenTotal += parseFloat(formData[key])
        }else if(othersInputs.includes(key)){
            finalObject[key] = formData[key]
        }else if (fileText.includes(key.split('-')[0])){
            const eachProject = {}

            if(key.split('-')[1] === key.split('-')[1]){
                const splittedKey = key.split('-')[0];
                eachProject[splittedKey] = formData[key]
            }
            projectsData[key] = formData[key]
        }
        finalObject.projectData = projectsData;

    })
    finalObject.sectionOne = sectionOneTotal;
    finalObject.sectionTwo = sectionTwoTotal;
    finalObject.sectionThree = sectionThreeTotal;
    finalObject.sectionFour = sectionFourTotal;
    finalObject.sectionFive = sectionFiveTotal;
    finalObject.sectionSix = sectionSixTotal;
    finalObject.sectionSeven = sectionSevenTotal;
    finalObject.sectionEight = sectionEightTotal;
    finalObject.sectionNine = sectionNineTotal;
    finalObject.sectionTen = sectionTenTotal;
    finalObject.selfAssessment = sectionOneTotal + sectionTwoTotal + sectionThreeTotal + sectionFourTotal + sectionFiveTotal + sectionSixTotal;
    finalObject.financialAssessment = sectionSevenTotal + sectionEightTotal + sectionNineTotal;
    finalObject.workField = sectionOneData.join();
    // console.log(sectionOneTotal);
    autoEvaluationSection1 = document.getElementById("autoEvaluationSection1");
    autoEvaluationSection2 = document.getElementById("autoEvaluationSection2");
    autoEvaluationSection3 = document.getElementById("autoEvaluationSection3");
    autoEvaluationSection4 = document.getElementById("autoEvaluationSection4");
    autoEvaluationSection5 = document.getElementById("autoEvaluationSection5");
    autoEvaluationSection6 = document.getElementById("autoEvaluationSection6");
    autoEvaluationSection7 = document.getElementById("autoEvaluationSection7");
    autoEvaluationSection8 = document.getElementById("autoEvaluationSection8");
    autoEvaluationSection9 = document.getElementById("autoEvaluationSection9");
    autoEvaluationSection10 = document.getElementById("autoEvaluationSection10");
    selfAssessment = document.getElementById("selfAssessment");
    financialAssessment = document.getElementById("financialAssessment");
    autoEvaluationTotal = document.getElementById("autoEvaluationTotal");
    workScope = document.getElementById("workScope");
    workFields = document.getElementById("workFields");
    autoEvaluationClass = document.getElementById("autoEvaluationClass")

    autoEvaluationSection1.value = sectionOneTotal;
    autoEvaluationSection2.value = sectionTwoTotal;
    autoEvaluationSection3.value = sectionThreeTotal;
    autoEvaluationSection4.value = sectionFourTotal;
    autoEvaluationSection5.value = sectionFiveTotal;
    autoEvaluationSection6.value = sectionSixTotal;
    autoEvaluationSection7.value = sectionSevenTotal;
    autoEvaluationSection8.value = sectionEightTotal;
    autoEvaluationSection9.value = sectionNineTotal;
    autoEvaluationSection10.value = sectionTenTotal;
    selfAssessment.value = sectionOneTotal + sectionTwoTotal + sectionThreeTotal + sectionFourTotal + sectionFiveTotal + sectionSixTotal;;
    financialAssessment.value = sectionSevenTotal + sectionEightTotal + sectionNineTotal + sectionTenTotal;
    autoEvaluationTotal.value = parseFloat(selfAssessment.value) + parseFloat(financialAssessment.value);
    workFields.value = sectionOneData.join(); ;
    workScope.value = finalObject.workArea ;

    if(autoEvaluationTotal.value >= 70){
        autoEvaluationClass.value = 'أ';
    }else if(autoEvaluationTotal.value < 70 && autoEvaluationTotal.value >= 60 ){
        autoEvaluationClass.value = 'ب';
    }else if(autoEvaluationTotal.value < 60 && autoEvaluationTotal.value >= 50 ){
        autoEvaluationClass.value = 'ج';
    }else{
        autoEvaluationClass.value = 'د';
    }
    
    //  console.log(financialAssessment.value);
    // return finalObject;
}

document.getElementById("add-input-button").onclick = function() {
        let form = document.getElementById("inputs-container");
        let div = document.createElement('div');
        div.className = 'd-flex flex-wrap justify-content-between small-mb';
       let allInputs = form.getElementsByTagName('input').length;

       let counter = allInputs === 0 ? 0 : allInputs - (4 * (allInputs / 5))
            for ( let i = 0; i < 5 ; i++ ) {
                    let label = document.createElement('label');
                    label.innerText = fileText[i];
                    label.className = 'block text-align color';
                    let input = document.createElement("input");
                    let innerDiv = document.createElement('div');
                    input.type = "text";
                    input.name = fileText[i] + "-" + counter;
                    innerDiv.appendChild(label);
                    innerDiv.appendChild(input)
                    div.appendChild(innerDiv);
        }

        form.appendChild(div)

    }

