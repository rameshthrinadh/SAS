
$(document).ready(function(){
    console.log("ready");
    
   $("#question_set").hide();
   $("#required").hide();
   $("#required0").hide();
});

var count;
$("#count").click(function() {

    inocheck();
    
});

// $(function() {
//     $("form").submit(function() {
//         console.log('asdfasd'); return false; });
// });
$("#inp").keyup(function(e) {
    if(e.keyCode==13){
    inocheck();
    }
})
function inocheck(){

    console.log("clicked");
    var i=document.getElementById('inp').value;
    console.log(i);
    count=i;

    if(i=='')
    {     
    $("#required").show();
    var timer=new Date().getTime() + 5000;

    var ct=setInterval(function(){

    var now=new Date().getTime();

    var timeleft=timer-now;

    var seconds = Math.floor((timeleft % (1000 * 60)) / 1000);

    if(timeleft<0){
        clearInterval(ct);
        $("#required").hide();
       
    }
},1000)
    }
    else if(i==0){
        
   $("#required0").show();
   var timer=new Date().getTime() + 5000;

   var ct=setInterval(function(){

   var now=new Date().getTime();

   var timeleft=timer-now;

   var seconds = Math.floor((timeleft % (1000 * 60)) / 1000); 

   if(timeleft<0){
       clearInterval(ct);
       $("#required0").hide();
      
   }
},1000)
    }
    else
    {   for(let k=0;k<i;k++)
        {
            let temp=k+1
            var ques='<p class=" display-7 text-info pt-5">Question '+ temp +'</p><div class="row"><div class="col"><div class="form-floating mb-3"><input type="text" name="question[]" class="form-control border question px-5" id="q'+k+'" placeholder="Enter the Question"><label for="floatingInput">Enter the Question </label></div></div></div><div class="row"><label>Options:-</label><div class="col-10 col-md-4 px-5"><input type="text" class="option  px-5 py-2" name="optionA[]" id="q'+k+'_1" placeholder="Enter OptionA"/><input type="text" name="optionB[]"class="option  px-5 py-2"id="q'+k+'_2" placeholder="Enter OptionB"/><input type="text" name="optionC[]" id="q'+k+'_3"class="option  px-5  py-2"placeholder="Enter OptionC"/><input type="text" name="optionD[]"id="q'+k+'_4" class="option  px-5 py-2"placeholder="Enter OptionD"/><input type="text" name="key[]" class="option  px-5 py-2"placeholder="Enter Key"/></div></div>'
            $("#questions").append(ques);
        }
        $("#question_set").show(1000);
    }
}