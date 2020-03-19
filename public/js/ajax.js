    window.onload = function () {
jQuery('#seherler').show();
            jQuery('#seherler').get(0).selectedIndex = 30;
        jQuery('#olke').css('opacity','0.7');
        $('select[name=olkeler] option.gizle2').css('display', 'none');
    
    $('select[name=seherler] option.gizle').css('display', 'none');

   

}
    
      
$.ajaxSetup({

    headers: {
    
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    
    }
    
    });
    
    jQuery('span.xlist, span.alist').click(function(){
        var data=jQuery(this).attr("id");
        jQuery('#temanot').hide();
        var datadil= location.pathname;

             if (data==""){
                     jQuery('.forecast').hide();
             }
             else{
         jQuery("#load3").show();             
    jQuery('.forecast').hide();

           jQuery.ajax({
        type: 'post',
        url: 'ajax',
        data: {data:data,datadil:datadil},
        success: function(result) {
                             

            jQuery("#load3").hide();             
    jQuery('.forecast').show();

    jQuery('.forecast').html(result);


      },
               
           statusCode:{
               
               404:function(){
                   
                   alert("yoxdu sehife");
                   
                   
               }
           }   
          })
             }
        
        
    });

  
    jQuery('#seherler, #olkeler').change(function(){
        var data=jQuery(this).val();
        jQuery('#temanot').hide();
        var datadil= location.pathname;

        if (window.matchMedia("(max-width: 1024px)").matches) {
            $('#azelist').hide();
            $('#xaricilist').hide();
            $('.footer').hide();

        }

             if (data==""){
                     jQuery('.forecast, .listing').hide();
             }
             else{
         jQuery("#load3").show();             
    jQuery('.forecast').hide();

           jQuery.ajax({
        type: 'post',
        url: 'ajax',
        data: {data:data,datadil:datadil},
        success: function(result) {
            $('#azelist').show();
            $('#xaricilist').show();
            $('.footer').show();        

            jQuery("#load3").hide();             
    jQuery('.forecast, .listing').show();

    jQuery('.forecast').html(result);


      },
               
           statusCode:{
               
               404:function(){
                   
                   alert("yoxdu sehife");
                   
                   
               }
           }   
          })
             }
        
        
    });
  
    
    
    jQuery('#olke').change(function(){
        if (jQuery('#olke option:selected').val()=="aze"){
            jQuery('#seherler').show();
            jQuery('#seherler').get(0).selectedIndex = 0;
    jQuery('.forecast').hide();
  jQuery('#seherad').html("");
            jQuery('#olkeler').hide();
            jQuery('#olke').css('opacity','0.7');
        }
          if(jQuery('#olke option:selected').val()=="xarici"){

            jQuery('#olkeler').show();
         jQuery('#olkeler').get(0).selectedIndex = 0;
  jQuery('#seherad').html("");

                  jQuery('.forecast').hide();

             jQuery('#seherler').hide();
              jQuery('#olke').css('opacity','0.7');
          }  
    
    });
    
    
     $('.xlist').click(function(){
        $('#seherler').hide();
        $('#olkeler').show();
        jQuery('#olke').get(0).selectedIndex = 1;
        jQuery('#olke').css('opacity','0.7');

                  var id=$(this).attr('id');
                  $("#olkeler option").each(function() {   
                    if(jQuery(this).val()==id){
                        jQuery(this).prop("selected","selected");

                    }
                  });

    });
      $('.alist').click(function(){
 $('#olkeler').hide();
 $('#seherler').show();
jQuery('#olke').get(0).selectedIndex = 0;
   jQuery('#olke').css('opacity','0.7');

   var id=$(this).attr('id');

   $("#seherler option").each(function() {   
    if(jQuery(this).val()==id){
        jQuery(this).prop("selected","selected");

    }
  });



    });
    
      $(".xlist, .alist, #olkeler, #seherler").click(function(e){
           e.preventDefault();
   $(window).scrollTop(0);

      });
    

    $(document).ready(function(){
	   $(window).bind('scroll', function() {
	   var navHeight = $( window ).height() - 500;
			 if ($(window).scrollTop() > navHeight) {
				 $('#fixed').addClass('fixed');
                  $('#olke').addClass('olke');
                 $('#olke').removeClass('olke1');
                 $('#olkeler').removeClass('olkeler1');
                  $('#olkeler').addClass('olkeler');
                  $('#seherler').addClass('seherler');
                  $('#seherler').removeClass('seherler1');
                  $('#spanaxtar').hide();

			 }
			 else {
				 $('#fixed').removeClass('fixed');
                    $('#olke').removeClass('olke');
                     $('#olke').addClass('olke1');

                  $('#olkeler').removeClass('olkeler');
                   $('#olkeler').addClass('olkeler1');

                  $('#seherler').removeClass('seherler');
                   $('#seherler').addClass('seherler1');
                   $('#spanaxtar').show();

			 }
		});
      
	});
    
    jQuery('#menu1').click(function(){
      jQuery("#azelist .list-group-item").slideToggle(200);

    });
        jQuery('#menu2').click(function(){
      jQuery("#xaricilist .list-group-item").slideToggle(200);

    });
   
    jQuery('#btnaxtar2').click(function () { 
      jQuery('#btnaxtar2').hide();
      jQuery('#btnaxtar').show();
      jQuery('#axtar').fadeIn(300);
      if (window.matchMedia("(max-width: 1024px)").matches) {
        jQuery('.dil').hide();
    }

    });
    jQuery('#spanaxtar').mouseleave(function () { 
      jQuery('#axtar').fadeOut(300);
      jQuery('#btnaxtar2').show();
      jQuery('#btnaxtar').hide();
      if (window.matchMedia("(max-width: 1024px)").matches) {
        jQuery('.dil').show();
    }

    });

    $('#axtar').keyup(function(evt){
     var txt = $(this).val();
     var $locale= location.pathname;

     if($locale=='/az' || $locale=='/' ){
      

     $(this).val(txt.replace(/([\wöçşğüı])/gi, 
function(a, b){return b.replace("I","ı").toLowerCase()}).replace(/(^[a-zöçşğüı]|[\s|\.][a-zöçşğüı])/g, 
function(c, d){return d.replace("i","İ").toUpperCase()}));
//jQuery("#axtar").css("text-transform", "capitalize");
}

else if($locale=='/en' || $locale=='/ru'  ){
   
  $(this).val(txt.replace(/^(.)|\s(.)/g, function($1){ return $1.toUpperCase( ); }));
}
    });

    $('#axtar').keypress(function(event){
      
      var keycode = (event.keyCode ? event.keyCode : event.which);
      if(keycode == '13'){
        var datadil= location.pathname;

        jQuery('#axtar').hide();
        jQuery('#btnaxtar').hide();
        jQuery('#btnaxtar2').show();
        jQuery('#temanot').hide();
        if (window.matchMedia("(max-width: 1024px)").matches) {
          $('#azelist').hide();
          $('#xaricilist').hide();
          $('.footer').hide();
          jQuery('.dil').show();
      }
        jQuery('#temanot').hide();

        var datatext=jQuery("#axtar").val();
        var t=jQuery("#olkeler").text();
  if(datatext==""){
    jQuery("#axtar").val("");           
  
  $.alert({
    icon: 'fa fa-info-circle',
  title: '<span class="text-danger">Xəta!</span>',
  content: '<span class="text-danger"> Zəhmət olmasa düzgün şəhər adı qeyd ediniz! (nümunə:Lənkəran)</span>',
  type: 'danger',      
  
  closeIcon: true,
  closeIconClass: 'fa fa-close',
  
     
  
  });
  }
  
  
  
  else if(datatext!=""){
    $("select#olkeler option").each(function() {   
         //jQuery('#olke').get(0).selectedIndex = 0;
  
  
  
  
          if(jQuery(this).text()==datatext){
            jQuery("#olkeler").show();
  
            jQuery('#olke').get(0).selectedIndex = 1;
            jQuery("#seherler").hide();
  
            jQuery('#temanot').hide();
  
              jQuery(this).prop("selected","selected");
              var data=jQuery(this).val();
  
  
             if (data==""){
                     jQuery('.forecast').hide();
             }
             else{
         jQuery("#load3").show();             
    jQuery('.forecast').hide();
  
           jQuery.ajax({
        type: 'post',
        url: 'ajax',
        data: {data:data,datadil:datadil},
        success: function(result) {
  
          jQuery("#axtar").val("").hide();           
  
            jQuery("#load3").hide();             
    jQuery('.forecast').show();
  
    jQuery('.forecast').html(result);
  
  
      },
               
           statusCode:{
               
               404:function(){
                   
                   alert("yoxdu sehife");
                   
                   
               }
           }   
          })
             }
            }
            else{
              jQuery('.forecast').hide();
            
            }
          });
          $("#seherler option").each(function() {   
            //jQuery('#olke').get(0).selectedIndex = 0;
  
         
  
             if(jQuery(this).text()==datatext){
              jQuery("#seherler").show();
  
               jQuery('#olke').get(0).selectedIndex = 0;
               jQuery("#olkeler").hide();
               jQuery('#temanot').hide();
  
                 jQuery(this).prop("selected","selected");
                 var data=jQuery(this).val();
     
                if (data==""){
                        jQuery('.forecast').hide();
                }
                else{
            jQuery("#load3").show();             
       jQuery('.forecast').hide();
     
              jQuery.ajax({
           type: 'post',
           url: 'ajax',
           data: {data:data,datadil:datadil},
           success: function(result) {
     
             jQuery("#axtar").val("").hide();           
     
               jQuery("#load3").hide();             
       jQuery('.forecast').show();
     
       jQuery('.forecast').html(result);
     
     
         },
                  
              statusCode:{
                  
                  404:function(){
                      
                      alert("yoxdu sehife");
                      
                      
                  }
              }   
             })
                }
               }
  else{
    jQuery('.forecast').hide();
  
  }
       
  
             });
  
            }
            else {
              jQuery("#olkeler").hide();
  
              jQuery("#seherler").hide();
                              jQuery('.forecast').hide();
                              jQuery('#temanot').show();
            
            }
            jQuery("#axtar").val("");         

      }
  });
 
  
    jQuery('#btnaxtar').click(function(){
      jQuery('#axtar').hide();
      jQuery('#btnaxtar').hide();
      jQuery('#btnaxtar2').show();
      jQuery('#temanot').hide();

      var datatext=jQuery("#axtar").val();
      var datadil= location.pathname;

      if (window.matchMedia("(max-width: 1024px)").matches) {
        $('#azelist').hide();
        $('#xaricilist').hide();
        $('.footer').hide();
        jQuery('.dil').show();
    }
      var t=jQuery("#olkeler").text();
if(datatext==""){
  jQuery("#axtar").val("");           
  jQuery('#btnaxtar2').show();
$.alert({
  icon: 'fa fa-info-circle',
title: '<span class="text-danger">Xəta!</span>',
content: '<span class="text-danger" style="font-size:20px"> Zəhmət olmasa düzgün şəhər adı qeyd ediniz! (nümunə:Lənkəran)</span>',
type: 'danger',      

closeIcon: true,
closeIconClass: 'fa fa-close',

   

});
}



else if(datatext!=""){

  $("select#olkeler option").each(function() {   
       //jQuery('#olke').get(0).selectedIndex = 0;




        if(jQuery(this).text()==datatext){
          jQuery("#olkeler").show();

          jQuery('#olke').get(0).selectedIndex = 1;
          jQuery("#seherler").hide();

          jQuery('#temanot').hide();

            jQuery(this).prop("selected","selected");
            var data=jQuery(this).val();


           if (data==""){
                   jQuery('.forecast').hide();
           }
           else{
       jQuery("#load3").show();             
  jQuery('.forecast').hide();

         jQuery.ajax({
      type: 'post',
      url: 'ajax',
      data: {data:data,datadil:datadil},
      success: function(result) {
  if (window.matchMedia("(max-width: 1024px)").matches) {
        jQuery('.dil').show();
    }
    jQuery('#btnaxtar').hide();
    jQuery('#btnaxtar2').show();

        jQuery("#axtar").val("").hide();           

          jQuery("#load3").hide();             
  jQuery('.forecast').show();

  jQuery('.forecast').html(result);


    },
             
         statusCode:{
             
             404:function(){
                 
                 alert("yoxdu sehife");
                 
                 
             }
         }   
        })
           }
          }
          else{
            jQuery('.forecast').hide();
          
          }
        });
        $("#seherler option").each(function() {   
          //jQuery('#olke').get(0).selectedIndex = 0;

       

           if(jQuery(this).text()==datatext){
            jQuery("#seherler").show();

             jQuery('#olke').get(0).selectedIndex = 0;
             jQuery("#olkeler").hide();
             jQuery('#temanot').hide();

               jQuery(this).prop("selected","selected");
               var data=jQuery(this).val();
   
              if (data==""){
                      jQuery('.forecast').hide();
              }
              else{
          jQuery("#load3").show();             
     jQuery('.forecast').hide();
   
            jQuery.ajax({
         type: 'post',
         url: 'ajax',
         data: {data:data,datadil:datadil},
         success: function(result) {
          if (window.matchMedia("(max-width: 1024px)").matches) {
            jQuery('.dil').show();
        }
        jQuery('#btnaxtar').hide();
        jQuery('#btnaxtar2').show();

           jQuery("#axtar").val("").hide();           
   
             jQuery("#load3").hide();             
     jQuery('.forecast').show();
   
     jQuery('.forecast').html(result);
   
   
       },
                
            statusCode:{
                
                404:function(){
                    
                    alert("yoxdu sehife");
                    
                    
                }
            }   
           })
              }
             }
else{
  jQuery('.forecast').hide();

}
     

           });

          }
          else {
            jQuery("#olkeler").hide();

            jQuery("#seherler").hide();
                            jQuery('.forecast').hide();
                            jQuery('#temanot').show();
          
          }
          jQuery("#axtar").val("");           

  });