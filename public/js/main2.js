$(document).ready(function(){
    
  //create foundation

  //input image

  //get clickable element
  $(".main-form  #image_container .svg-holder").on("click",function(){
      //onclick trigger hidden input event 
      let inputElement=$(".main-form #input-image");
      inputElement.trigger('click');
  });
  $(".main-form #trial").on("click", function(){
    let inputElement=$(".main-form #input-image");
    inputElement.trigger('click');
  });
  //show input file name under logo
  $(".main-form #input-image").change(function(e){
      let fileName=e.target.files[0].name;
      // $(".main-form #input-text").html(fileName);
      readURL(this);
      $(".main-form  .image-input svg").addClass("hidden");
      $(".main-form #input-text").addClass("hidden");
  });
 
  // get image source func
  function readURL(input) {
    if (input.files && input.files[0]) {
        let reader = new FileReader();
        reader.onload = function (e) {
            $('.main-form #trial')
                .attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }
}
  //input document copies
  
  //right section
  
  //get clickable element 
  $(" .main-form .documents-copies .right-svg").on("click",function(){
     let inputElement=$(".main-form .documents-copies #input-1");
     inputElement.trigger("click");
  });
  // show uploaded file for right section 
  $(".main-form .documents-copies #input-1").change(function(e){
    let fileName=e.target.files[0].name;
    $(".main-form .documents-copies #filename-1").html(fileName);
    //remove icon on file addition
    let icon=$(".main-form .documents-copies .right-svg svg");
    icon.addClass("hidden");

   });
  //left section 
  //get clickable element
  $(" .main-form .documents-copies .left-svg").on("click",function(){
    let inputElement=$(".main-form .documents-copies #input-2");
    inputElement.trigger("click");
 });
  //show uploaded file name
  $(".main-form .documents-copies #input-2").change(function(e){
    let fileName=e.target.files[0].name;
    $(".main-form .documents-copies #filename-2").html(fileName);
    //remove icon on file name addition
    let icon=$(".main-form .documents-copies .left-svg svg");
    icon.addClass("hidden");
   });

   // custom list js code

   // get list icon
   $(".main-page .nav  #list-icon").on("click",function(){
       //get list
       let myList=$(".main-page .nav  .nav-link.eval-mangement .list-holder #custom-list");
       myList.slideToggle();
   });

   //on document ready get main nav value and set it to the custom nav value
   let mainNav= $(".main-page #v-pills-tab");
   let mainNavValue=parseFloat(mainNav.css("width"));
   let customList= $(".main-page .custom-list");
   customList.css("width",mainNavValue);
   // set custom nav width to fit page nav on resize
   $(window).resize(function(){
     console.log("width changed");
     //get nav width
     let mainNav= $(".main-page #v-pills-tab");
     let mainNavValue=parseFloat(mainNav.css("width"));
     console.log(mainNavValue);
     //get custom list by id
     let customList= $(".main-page .custom-list");
     let customlistValue=parseFloat(customList.css("width"));
     console.log(customlistValue);
     if(mainNavValue!=customlistValue){
      customList.css("width",mainNavValue);
     }

   })
   
 

});