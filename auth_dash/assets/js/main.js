$(window).on("load",function(){
    $(".scroll").mCustomScrollbar({
      setWidth:false,
      setHeight:false,
      setTop:0,
      setLeft:0,
      axis:"y",
      scrollbarPosition:"inside",
      scrollInertia:950,
      autoDraggerLength:true,
      autoHideScrollbar:false,
      autoExpandScrollbar:false,
      alwaysShowScrollbar:0,
      snapAmount:null,
      snapOffset:0,
      mouseWheel:{
        enable:true,
        scrollAmount:"auto",
        axis:"y",
        preventDefault:false,
        deltaFactor:"auto",
        normalizeDelta:false,
        invert:false,
        disableOver:["select","option","keygen","datalist","textarea"]
      },
      scrollButtons:{
        enable:false,
        scrollType:"stepless",
        scrollAmount:"auto"
      },
      keyboard:{
        enable:true,
        scrollType:"stepless",
        scrollAmount:"auto"
      },
      contentTouchScroll:25,
      advanced:{
        autoExpandHorizontalScroll:false,
        autoScrollOnFocus:"input,textarea,select,button,datalist,keygen,a[tabindex],area,object,[contenteditable='true']",
        updateOnContentResize:true,
        updateOnImageLoad:true,
        updateOnSelectorChange:false,
        releaseDraggableSelectors:false
      },
      theme:"light",
      callbacks:{
        onInit:false,
        onScrollStart:false,
        onScroll:false,
        onTotalScroll:false,
        onTotalScrollBack:false,
        whileScrolling:false,
        onTotalScrollOffset:0,
        onTotalScrollBackOffset:0,
        alwaysTriggerOffsets:true,
        onOverflowY:false,
        onOverflowX:false,
        onOverflowYNone:false,
        onOverflowXNone:false
      },
      live:false,
      liveSelector:null
    });
    
  });



! function(o, e, p) {
      "use strict";
      p('[data-toggle="popover"]').popover(), p("#show-popover").popover({
        title: "Popover Show Event",
        content: "Bonbon chocolate cake. Pudding halvah pie apple pie topping marzipan pastry marzipan cupcake.",
        trigger: "click",
        placement: "right"
      }).on("show.bs.popover", function() {
        alert("Show event fired.")
      }), p("[data-popup=popover-color]").popover({
        template: '<div class="popover"><div class="bg-teal"><div class="popover-arrow"></div><div class="popover-inner"></div></div></div>'
      }), p("[data-popup=popover-border]").popover({
        template: '<div class="popover"><div class="border-orange"><div class="popover-arrow"></div><div class="popover-inner"></div></div></div>'
      })
    }(window, document, jQuery);




$('#datetimepicker_mask').datetimepicker({
    mask:'9999/19/39 29:59',
  });
  $('#datetimepicker').datetimepicker();
  $('#datetimepicker').datetimepicker({value:'2015/04/15 05:06'});
  $('#datetimepicker1').datetimepicker({
    datepicker:false,
    format:'H:i',
    step:5
  });
  $('.date-timepicker2').datetimepicker({
    timepicker:false,
    format:'d/m/Y',
    formatDate:'d/m/Y'
  });
  $('#datetimepicker3').datetimepicker({
    inline:true
  });
  $('.date-timepicker').datetimepicker();
  $('#open').click(function(){
    $('#datetimepicker4').datetimepicker('show');
  });
  $('#close').click(function(){
    $('#datetimepicker4').datetimepicker('hide');
  });


    tinymce.init({
    selector: '#myTextarea,#myTextarea2',
    language: 'tr',
    theme: "silver",
    branding: false,
        height:400,
    fontsize_formats: "8pt 10pt 12pt 14pt 18pt 24pt 36pt",
    plugins: [
      "image code",
      "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
      "searchreplace wordcount visualblocks visualchars code filemanager responsivefilemanager fullscreen insertdatetime media nonbreaking",
      "save table contextmenu directionality emoticons template paste textcolor"
    ],
    toolbar: "responsivefilemanager | undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | image code | print preview media | forecolor backcolor fontsizeselect emoticons",
    image_advtab: true ,
    external_filemanager_path: baseUrl + "/assets/vendors/filemanager/",
      filemanager_title:"Fayl Meneceri" ,
    external_plugins: {
      "responsivefilemanager":  baseUrl + "/assets/vendors/tinymce/plugins/responsivefilemanager/plugin.min.js",
      "flickr":           baseUrl + "/assets/vendors/tinymce/plugins/flickr/plugin.min.js",
      "youtube":          baseUrl + "/assets/vendors/tinymce/plugins/youtube/plugin.min.js",
      "filemanager":        baseUrl + "/assets/vendors/filemanager/plugin.min.js"
    },
    relative_urls: true,
    remove_script_host : true,
    document_base_url : baseUrl,
    filemanager_access_key:"demo"
  }); 




$(document).ready(function() {
    $(".popconfirm").popConfirm();      
    $(".popconfirm1").popConfirm();
    $(".popconfirm2").popConfirm();     
var span = document.getElementById('clock');

  function time() {
    var d = new Date();
    var s = d.getSeconds();
    var m = d.getMinutes();
    var h = d.getHours();
    span.textContent = 
      " "+ ("0" + h).substr(-2) + ":" + ("0" + m).substr(-2) + ":" + ("0" + s).substr(-2);
  }
  setInterval(time, 1000);
  });

   
/* ================================================  SCRIPTS  ==================================================*/

$(document).ready(function() {
    $('#logo_file').change(function(){
        var file_data = $('#logo_file').prop('files')[0];   
        var form_data = new FormData();                  
        form_data.append('logo_file', file_data);
        $.ajax({
            url: "core/ajax/logo_upload.php",
            type: "POST",
            data: form_data,
            dataType: "json",
            contentType: false,
            cache: false,
            processData:false,
            beforeSend:function(){
                   $('.loader').show();
                }, 
            success: function(data){
              $("#for_main_logo").load(" #for_main_logo");
                if(data.status == 200)
                     {
                      $('.loader').hide();
                        $.toast({
                          heading: 'Uğurlu!',
                          text: data.message,
                          showHideTransition: 'slide',
                          icon: 'success',
                          loaderBg: '#fff',
                          position: 'top-right'
                        })
                     }
                 else if(data.status == 204)
                 {
                  $('.loader').hide();
                    $.toast({
                      heading: 'Xəta',
                      text: data.message,
                      showHideTransition: 'slide',
                      icon: 'error',
                      loaderBg: '#fff',
                      position: 'top-right'
                    })
                 }
            }
        });
    });

    $('#mail_logo').change(function(){
      var file_data = $('#mail_logo').prop('files')[0];   
      var form_data = new FormData();                  
      form_data.append('mail_logo', file_data);
      $.ajax({
          url: "core/ajax/mail_logo.php",
          type: "POST",
          data: form_data,
          dataType: "json",
          contentType: false,
          cache: false,
          processData:false,
          beforeSend:function(){
                 $('.loader').show();
              }, 
          success: function(data){
            $("#for_mail_logo").load(" #for_mail_logo");
              if(data.status == 200)
                   {
                    $('.loader').hide();
                      $.toast({
                        heading: 'Uğurlu!',
                        text: data.message,
                        showHideTransition: 'slide',
                        icon: 'success',
                        loaderBg: '#fff',
                        position: 'top-right'
                      })
                   }
               else if(data.status == 204)
               {
                $('.loader').hide();
                  $.toast({
                    heading: 'Xəta',
                    text: data.message,
                    showHideTransition: 'slide',
                    icon: 'error',
                    loaderBg: '#fff',
                    position: 'top-right'
                  })
               }
          }
      });
  });


   $('#favicon').change(function(){
      var file_data = $('#favicon').prop('files')[0];   
      var form_data = new FormData();                  
      form_data.append('favicon', file_data);
      $.ajax({
          url: "core/ajax/favicon_upload.php",
          type: "POST",
          data: form_data,
          dataType: "json",
          contentType: false,
          cache: false,
          processData:false,
          beforeSend:function(){
                 $('.loader').show();
              }, 
          success: function(data){
            $("#for_favicon").load(" #for_favicon");
              if(data.status == 200)
                   {
                    $('.loader').hide();
                      $.toast({
                        heading: 'Uğurlu!',
                        text: data.message,
                        showHideTransition: 'slide',
                        icon: 'success',
                        loaderBg: '#fff',
                        position: 'top-right'
                      })
                   }
               else if(data.status == 204)
               {
                $('.loader').hide();
                  $.toast({
                    heading: 'Xəta',
                    text: data.message,
                    showHideTransition: 'slide',
                    icon: 'error',
                    loaderBg: '#fff',
                    position: 'top-right'
                  })
               }
          }
      });
  });

/* AVATAR CHANGE */

$('#avatar').change(function(){
        var file_data = $('#avatar').prop('files')[0];   
        var form_data = new FormData();                  
        form_data.append('avatar', file_data);
        $.ajax({
            url: "core/ajax/avatar.php",
            type: "POST",
            data: form_data,
            dataType: "json",
            contentType: false,
            cache: false,
            processData:false,
            beforeSend:function(){
                   $('.loader').show();
                }, 
            success: function(data){
              $("#for_avatar").load(" #for_avatar");
                if(data.status == 200)
                     {
                      $('.loader').hide();
                        $.toast({
                          heading: 'Uğurlu!',
                          text: data.message,
                          showHideTransition: 'slide',
                          icon: 'success',
                          loaderBg: '#fff',
                          position: 'top-right'
                        })
                     }
                 else if(data.status == 204)
                 {
                  $('.loader').hide();
                    $.toast({
                      heading: 'Xəta',
                      text: data.message,
                      showHideTransition: 'slide',
                      icon: 'error',
                      loaderBg: '#fff',
                      position: 'top-right'
                    })
                 }
            }
        });
    });


/* AVATAR CHANGE END*/


 $('#signature').change(function(){
    var file_data = $('#signature').prop('files')[0];   
    var form_data = new FormData();                  
    form_data.append('signature', file_data);
    $.ajax({
        url: "core/ajax/signature_upload.php",
        type: "POST",
        data: form_data,
        dataType: "json",
        contentType: false,
        cache: false,
        processData:false,
        beforeSend:function(){
               $('.loader').show();
            }, 
        success: function(data){
          $("#for_signature").load(" #for_signature");
            if(data.status == 200)
                 {
                  $('.loader').hide();
                    $.toast({
                      heading: 'Uğurlu!',
                      text: data.message,
                      showHideTransition: 'slide',
                      icon: 'success',
                      loaderBg: '#fff',
                      position: 'top-right'
                    })
                 }
             else if(data.status == 204)
             {
              $('.loader').hide();
                $.toast({
                  heading: 'Xəta',
                  text: data.message,
                  showHideTransition: 'slide',
                  icon: 'error',
                  loaderBg: '#fff',
                  position: 'top-right'
                })
             }
        }
    });
});

   /* UPDATE SETTİNGS */
  $('#update_settings').click(function (e) {
      e.preventDefault();
      var form = $("#settings_form");
      $.ajax
        ({
          type: "POST",
          url: "core/ajax/update_settings.php",
          data: form.serialize(),
          dataType: "json",
          success: function (data) {
             if(data.status == 200)
                   {
                    $('.loader').hide();
                      $.toast({
                        heading: 'Uğurlu!',
                        text: data.message,
                        showHideTransition: 'slide',
                        icon: 'success',
                        loaderBg: '#fff',
                        position: 'top-right'
                      })
                   }
               else if(data.status == 204)
               {
                $('.loader').hide();
                  $.toast({
                    heading: data.title,
                    text: data.message,
                    showHideTransition: 'slide',
                    icon: 'error',
                    loaderBg: '#fff',
                    position: 'top-right'
                  })
               }
          }
        });
    });
  if ($('textarea[name=whatsapp]').length) {
    var wh = CodeMirror.fromTextArea(document.getElementById('whatsapp'), {
    lineNumbers: true,
        matchBrackets: true,
        mode: "text/x-php",
        indentUnit: 4,
        indentWithTabs: true,
        lineWrapping: true,
        theme : "material"
    });
  }
  if ($('textarea[name=ekstra]').length) {
    var editableCodeMirror = CodeMirror.fromTextArea(document.getElementById('ekstra'), {
        lineNumbers: true,
        matchBrackets: true,
        mode: "text/x-php",
        indentUnit: 4,
        indentWithTabs: true,
        lineWrapping: true,
        theme : "material"
    });
  }
  if ($('textarea[name=google_analytics]').length) {
    var ga = CodeMirror.fromTextArea(document.getElementById('google_analytics'), {
    lineNumbers: false,
        matchBrackets: true,
        mode: "text/html",
        indentUnit: 4,
        indentWithTabs: true,
    lineWrapping: true,
        theme : "material"
    });
  }
  if ($('textarea[name=dogrulama_kodu]').length) {
    var dk = CodeMirror.fromTextArea(document.getElementById('dogrulama_kodu'), {
        lineNumbers: false,
        matchBrackets: true,
        mode: "text/html",
        indentUnit: 4,
        indentWithTabs: true,
        lineWrapping: true,
        theme : "material"
    });
  }
  if ($('textarea[name=google_maps]').length) {
    var gm = CodeMirror.fromTextArea(document.getElementById('google_maps'), {
        lineNumbers: false,
        matchBrackets: true,
        mode: "text/html",
        indentUnit: 4,
        indentWithTabs: true,
        lineWrapping: true,
        theme : "material"
    });
  }
  if ($('textarea[name=canli_destek]').length) {
    var cd = CodeMirror.fromTextArea(document.getElementById('canli_destek'), {
        lineNumbers: false,
        matchBrackets: true,
        mode: "text/html",
        indentUnit: 4,
        indentWithTabs: true,
        lineWrapping: true,
        theme : "material"
    });
  }
  /* UPDATE API SETTİNGS */
  $('#api_update_button').click(function (e) {
      e.preventDefault();
      // var form = $("#api_form");  
      var fd = new FormData();    
      fd.append( 'whatsapp', wh.getValue() );  
      fd.append( 'google_analytics', ga.getValue() );  
      fd.append( 'dogrulama_kodu', dk.getValue() );  
      fd.append( 'google_maps', gm.getValue() );  
      fd.append( 'canli_destek', cd.getValue() );  
      $.ajax
        ({
          type: "POST",
          url: "core/ajax/update_api_settings.php",
          data: fd,
          dataType: "json",
          processData: false,
          contentType: false,
          success: function (data) {
             if(data.status == 200)
                   {
                    $('.loader').hide();
                      $.toast({
                        heading: 'Uğurlu!',
                        text: data.message,
                        showHideTransition: 'slide',
                        icon: 'success',
                        loaderBg: '#fff',
                        position: 'top-right'
                      })
                   }
               else if(data.status == 204)
               {
                $('.loader').hide();
                  $.toast({
                    heading: data.title,
                    text: data.message,
                    showHideTransition: 'slide',
                    icon: 'error',
                    loaderBg: '#fff',
                    position: 'top-right'
                  })
               }
          }
        });
    });  

  /* UPDATE SOCİAL LİNKS */

  $('#update_socials').click(function (e) {
      e.preventDefault();
      var form = $("#social");
      $.ajax
        ({
          type: "POST",
          url: "core/ajax/update_socials.php",
          data: form.serialize(),
          dataType: "json",
          success: function (data) {
             if(data.status == 200)
                   {
                    $('.loader').hide();
                      $.toast({
                        heading: 'Uğurlu!',
                        text: data.message,
                        showHideTransition: 'slide',
                        icon: 'success',
                        loaderBg: '#fff',
                        position: 'top-right'
                      })
                   }
               else if(data.status == 204)
               {
                $('.loader').hide();
                  $.toast({
                    heading: data.title,
                    text: data.message,
                    showHideTransition: 'slide',
                    icon: 'error',
                    loaderBg: '#fff',
                    position: 'top-right'
                  })
               }
          }
        });
    });
      
/* UPDATE CONTACT SETTINGS */

  $('#site_bakim_submit').click(function (e) {
      e.preventDefault();
      var form = $("#site_bakim_form");
      $.ajax
        ({
          type: "POST",
          url: "core/ajax/update_site_status.php",
          data: form.serialize(),
          dataType: "json",
          success: function (data) {
             if(data.status == 200)
                   {
                    $('.loader').hide();
                      $.toast({
                        heading: 'Uğurlu!',
                        text: data.message,
                        showHideTransition: 'slide',
                        icon: 'success',
                        loaderBg: '#fff',
                        position: 'top-right'
                      })
                   }
               else if(data.status == 204)
               {
                $('.loader').hide();
                  $.toast({
                    heading: data.title,
                    text: data.message,
                    showHideTransition: 'slide',
                    icon: 'error',
                    loaderBg: '#fff',
                    position: 'top-right'
                  })
               }
          }
        });
    });


/* UPDATE CONTACT SETTINGS */

  $('#update_contact_info').click(function (e) {
      e.preventDefault();
      var form = $("#contact_settings");
      $.ajax
        ({
          type: "POST",
          url: "core/ajax/update_contact.php",
          data: form.serialize(),
          dataType: "json",
          success: function (data) {
             if(data.status == 200)
                   {
                    $('.loader').hide();
                      $.toast({
                        heading: 'Uğurlu!',
                        text: data.message,
                        showHideTransition: 'slide',
                        icon: 'success',
                        loaderBg: '#fff',
                        position: 'top-right'
                      })
                   }
               else if(data.status == 204)
               {
                $('.loader').hide();
                  $.toast({
                    heading: data.title,
                    text: data.message,
                    showHideTransition: 'slide',
                    icon: 'error',
                    loaderBg: '#fff',
                    position: 'top-right'
                  })
               }
          }
        });
    });
      
/* UPDATE SMTP MAIL SETTINGS */

  $('#send_email_config').click(function (e) {
      e.preventDefault();
      var form = $("#smtp_form");
      $.ajax
        ({
          type: "POST",
          url: "core/ajax/update_smtp.php",
          data: form.serialize(),
          dataType: "json",
          success: function (data) {
             if(data.status == 200)
                   {
                    $('.loader').hide();
                      $.toast({
                        heading: 'Uğurlu!',
                        text: data.message,
                        showHideTransition: 'slide',
                        icon: 'success',
                        loaderBg: '#fff',
                        position: 'top-right'
                      })
                   }
               else if(data.status == 204)
               {
                $('.loader').hide();
                  $.toast({
                    heading: data.title,
                    text: data.message,
                    showHideTransition: 'slide',
                    icon: 'error',
                    loaderBg: '#fff',
                    position: 'top-right'
                  })
               }
          }
        });
    });
      


/*  UPDATE PROFİLE İNFO */

$('#add_pass').click(function (e) {
      e.preventDefault();
      var form = $("#pass_add_form");
      $.ajax
        ({
          type: "POST",
          url: "core/ajax/add_bl_pass.php",
          data: form.serialize(),
          dataType: "json",
          success: function (data) {
             if(data.status == 200)
                   {
                    $('.loader').hide();
                      $.toast({
                        heading: data.title,
                        text: data.message,
                        showHideTransition: 'slide',
                        icon: 'success',
                        loaderBg: '#fff',
                        position: 'top-right'
                      })
                   }
               else if(data.status == 204)
               {
                $('.loader').hide();
                  $.toast({
                    heading: data.title,
                    text: data.message,
                    showHideTransition: 'slide',
                    icon: 'error',
                    loaderBg: '#fff',
                    position: 'top-right'
                  })
               }
          }
        });
    });


/* ADD PASSWORD FOR BLACKLIST */


  /* UPDATE MODULS STATUS */


$('.chk').change(function() {
    var modid  = $('.modul').data('id');
    var datid  = $(this).data('id');
    var ch     = $(this).is(':checked') ? 1 : 0
   $post = $(this);
   $.ajax({
       url: 'core/ajax/module_update.php',
       type: 'post',
       dataType: "json",
       data: {
           'dataid': datid,
           'check' : ch
       },
       success: function(data){
                     if(data.status == 200)
                     {
                        $.toast({
                          heading: data.title,
                          text: data.message,
                          showHideTransition: 'slide',
                          icon: 'success',
                          loaderBg: '#fff',
                          position: 'top-right'
                        })
                     }
                     if(data.status == 204)
                     {
                        $.toast({
                          heading: data.title,
                          text: data.message,
                          showHideTransition: 'slide',
                          icon: 'error',
                          loaderBg: '#fff',
                          position: 'top-right'
                        })
                     }
                  }  
   });
});


  /***************** NEWS ADD ******************/

  $("#news_add_form").on('submit', function(e){
    e.preventDefault();
    $.ajax({
      type: 'POST',
      url: 'core/ajax/add_news.php',
      data: new FormData(this),
      dataType: 'json',
      contentType: false,
      cache: false,
      processData:false,
      beforeSend: function(){
        $('#add_news').attr("disabled","disabled");
        $('#news_add_form').css("opacity",".5");
      },
      success: function(data){ 
         if(data.status == 200)
         {
          $('#news_add_form')[0].reset();
            $.toast({
              heading: data.title,
              text: data.message,
              showHideTransition: 'slide',
              icon: 'success',
              loaderBg: '#fff',
              position: 'top-right'
            })
         }
         if(data.status == 204)
         {
            $.toast({
              heading: data.title,
              text: data.message,
              showHideTransition: 'slide',
              icon: 'error',
              loaderBg: '#fff',
              position: 'top-right'
            })
         }
        $('#news_add_form').css("opacity","");
        $("#add_news").removeAttr("disabled");
      }
    });
  });
  
  // File type validation
  $("#cover_photo").change(function() {
    var file = this.files[0];
    var imagefile = file.type;
    var match= ['application/pdf', 'application/msword', 'application/vnd.ms-office', 'image/jpeg', 'image/png', 'image/jpg'];
    if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2]) || (imagefile==match[3]) || (imagefile==match[4]) || (imagefile==match[5]))){
      alert('Sorry, only PDF, DOC, JPG, JPEG, & PNG files are allowed to upload.');
      $("#cover_photo").val('');
      return false;
    }
  });
 

  /*************** NEWS ADD END ***************/


/***************** NEWS EDIT FORM START ******************/

  $("#news_edit_form").on('submit', function(e){
    e.preventDefault();
    $.ajax({
      type: 'POST',
      url: '../core/ajax/edit_news.php',
      data: new FormData(this),
      dataType: 'json',
      contentType: false,
      cache: false,
      processData:false,
      beforeSend: function(){
        $('#edit_news').attr("disabled","disabled");
        $('#news_edit_form').css("opacity",".5");
      },
      success: function(data){ 
         if(data.status == 200)
         {
          $('#news_edit_form')[0].reset();
            $.toast({
              heading: data.title,
              text: data.message,
              showHideTransition: 'slide',
              icon: 'success',
              loaderBg: '#fff',
              position: 'top-right'
            })
         }
         if(data.status == 204)
         {
            $.toast({
              heading: data.title,
              text: data.message,
              showHideTransition: 'slide',
              icon: 'error',
              loaderBg: '#fff',
              position: 'top-right'
            })
         }
        $('#news_edit_form').css("opacity","");
        $("#edit_news").removeAttr("disabled");
      }
    });
  });
  
  // File type validation
  $("#news_cover_photo").change(function() {
    var file = this.files[0];
    var imagefile = file.type;
    var match= ['image/jpeg', 'image/png', 'image/jpg'];
    if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2]) || (imagefile==match[3]) || (imagefile==match[4]) || (imagefile==match[5]))){
      alert('Sorry, only JPG, JPEG, & PNG files are allowed to upload.');
      $("#news_cover_photo").val('');
      return false;
    }
  });
 

  /*************** NEWS EDIT FORM END ***************/



 /***************** BLOG ADD ******************/

  $("#city_add_form").on('submit', function(e){
    e.preventDefault();
    $.ajax({
      type: 'POST',
      url: 'core/ajax/add_city.php',
      data: new FormData(this),
      dataType: 'json',
      contentType: false,
      cache: false,
      processData:false,
      beforeSend: function(){
        $('#add_city').attr("disabled","disabled");
        $('#city_add_form').css("opacity",".5");
      },
      success: function(data){ 
         if(data.status == 200)
         {
          $('#city_add_form')[0].reset();
            $.toast({
              heading: data.title,
              text: data.message,
              showHideTransition: 'slide',
              icon: 'success',
              loaderBg: '#fff',
              position: 'top-right'
            })
         }
         if(data.status == 204)
         {
            $.toast({
              heading: data.title,
              text: data.message,
              showHideTransition: 'slide',
              icon: 'error',
              loaderBg: '#fff',
              position: 'top-right'
            })
         }
        $('#city_add_form').css("opacity","");
        $("#add_city").removeAttr("disabled");
      }
    });
  });
  
  // File type validation
  $("#blog_cover_photo").change(function() {
    var file = this.files[0];
    var imagefile = file.type;
    var match= ['image/jpeg', 'image/png', 'image/jpg'];
    if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2]) || (imagefile==match[3]) || (imagefile==match[4]) || (imagefile==match[5]))){
      alert('Sorry, only JPG, JPEG, & PNG files are allowed to upload.');
      $("#blog_cover_photo").val('');
      return false;
    }
  });
 

  /*************** BLOG ADD END ***************/

/***************** BLOG EDIT FORM START ******************/

  $("#city_edit_form").on('submit', function(e){
    e.preventDefault();
    $.ajax({
      type: 'POST',
      url: '../core/ajax/edit_cities.php',
      data: new FormData(this),
      dataType: 'json',
      contentType: false,
      cache: false,
      processData:false,
      beforeSend: function(){
        $('#edit_city').attr("disabled","disabled");
        $('#city_edit_form').css("opacity",".5");
      },
      success: function(data){ 
         if(data.status == 200)
         {
          $('#city_edit_form')[0].reset();
            $.toast({
              heading: data.title,
              text: data.message,
              showHideTransition: 'slide',
              icon: 'success',
              loaderBg: '#fff',
              position: 'top-right'
            })
         }
         if(data.status == 204)
         {
            $.toast({
              heading: data.title,
              text: data.message,
              showHideTransition: 'slide',
              icon: 'error',
              loaderBg: '#fff',
              position: 'top-right'
            })
         }
        $('#city_edit_form').css("opacity","");
        $("#edit_city").removeAttr("disabled");
      }
    });
  });
  

   $("#metro_edit_form").on('submit', function(e){
    e.preventDefault();
    $.ajax({
      type: 'POST',
      url: '../core/ajax/edit_metro.php',
      data: new FormData(this),
      dataType: 'json',
      contentType: false,
      cache: false,
      processData:false,
      beforeSend: function(){
        $('#edit_metro').attr("disabled","disabled");
        $('#metro_edit_form').css("opacity",".5");
      },
      success: function(data){ 
         if(data.status == 200)
         {
          $('#metro_edit_form')[0].reset();
            $.toast({
              heading: data.title,
              text: data.message,
              showHideTransition: 'slide',
              icon: 'success',
              loaderBg: '#fff',
              position: 'top-right'
            })
         }
         if(data.status == 204)
         {
            $.toast({
              heading: data.title,
              text: data.message,
              showHideTransition: 'slide',
              icon: 'error',
              loaderBg: '#fff',
              position: 'top-right'
            })
         }
        $('#metro_edit_form').css("opacity","");
        $("#edit_metro").removeAttr("disabled");
      }
    });
  });

  // File type validation
  $("#blog_cover_photo").change(function() {
    var file = this.files[0];
    var imagefile = file.type;
    var match= ['image/jpeg', 'image/png', 'image/jpg'];
    if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2]) || (imagefile==match[3]) || (imagefile==match[4]) || (imagefile==match[5]))){
      alert('Sorry, only JPG, JPEG, & PNG files are allowed to upload.');
      $("#blog_cover_photo").val('');
      return false;
    }
  });
 

  /*************** BLOG EDIT FORM END ***************/






  /* LIVE SHECK BLACKLIST PASSWORD */


   $('#sifre').keyup(function() {
      var usercheck = $(this).val();
      // $('#usercheck').html('<img src="loading.gif" width="150" />');
        $.post(
          "core/ajax/check_blacklist.php", 
          {sifre: usercheck} , 
          function(data)
          {
         if (data.status == true)
         {
            $('#usercheck').parent('div').removeClass('has-error').addClass('has-success');
            $('#update_profile').removeAttr('disabled');
         } 
         else 
         {
            $('#usercheck').parent('div').removeClass('has-success').addClass('has-error');
            $('#update_profile').prop("disabled",true);
         }
            $('#usercheck').html(data.msg);
         },'json');
   });

   $('#second_sifre').keyup(function() {
      var usercheck = $(this).val();
      // $('#usercheck').html('<img src="loading.gif" width="150" />');
        $.post(
          "core/ajax/check_blacklist.php", 
          {sifre: usercheck} , 
          function(data)
          {
         if (data.status == true)
         {
            $('#usercheck2').parent('div').removeClass('has-error').addClass('has-success');
            $('#update_profile').removeAttr('disabled');
         } 
         else 
         {
            $('#usercheck2').parent('div').removeClass('has-success').addClass('has-error');
            $('#update_profile').prop("disabled",true);
         }
            $('#usercheck2').html(data.msg);
         },'json');
   });

  /* LIVE SHECK BLACKLIST PASSWORD END */

  $('#update_profile').click(function (e) {
      e.preventDefault();
      var form = $("#profile_form");
      $.ajax
        ({
          type: "POST",
          url: "core/ajax/update_profile.php",
          data: form.serialize(),
          dataType: "json",
          success: function (data) {
             if(data.status == 200)
                   {
                    $('.loader').hide();
                      $.toast({
                        heading: 'Uğurlu!',
                        text: data.message,
                        showHideTransition: 'slide',
                        icon: 'success',
                        loaderBg: '#fff',
                        position: 'top-right'
                      })
                   }
               else if(data.status == 204)
               {
                $('.loader').hide();
                  $.toast({
                    heading: data.title,
                    text: data.message,
                    showHideTransition: 'slide',
                    icon: 'error',
                    loaderBg: '#fff',
                    position: 'top-right'
                  })
               }
          }
        });
    });
  
  /* ADD MENU START*/

$('#add_menu').click(function (e) {
      e.preventDefault();
      var form = $("#add_menu_form");
      $.ajax
        ({
          type: "POST",
          url: "core/ajax/add_menu.php",
          data: form.serialize(),
          dataType: "json",
          success: function (data) {
             if(data.status == 200)
                   {
                    $('.loader').hide();
                      $.toast({
                        heading: 'Uğurlu!',
                        text: data.message,
                        showHideTransition: 'slide',
                        icon: 'success',
                        loaderBg: '#fff',
                        position: 'top-right'
                      })
                   }
               else if(data.status == 204)
               {
                $('.loader').hide();
                  $.toast({
                    heading: data.title,
                    text: data.message,
                    showHideTransition: 'slide',
                    icon: 'error',
                    loaderBg: '#fff',
                    position: 'top-right'
                  })
               }
          }
        });
    });


  /* ADD MENU END*/

  /***************** SLIDE ADD ******************/

  $("#slide_add_form").on('submit', function(e){
    e.preventDefault();
    $.ajax({
      type: 'POST',
      url: 'core/ajax/add_slider.php',
      data: new FormData(this),
      dataType: 'json',
      contentType: false,
      cache: false,
      processData:false,
      beforeSend: function(){
        $('#add_slide').attr("disabled","disabled");
        $('#slide_add_form').css("opacity",".5");
      },
      success: function(data){ 
         if(data.status == 200)
         {
          $('#slide_add_form')[0].reset();
            $.toast({
              heading: data.title,
              text: data.message,
              showHideTransition: 'slide',
              icon: 'success',
              loaderBg: '#fff',
              position: 'top-right'
            })
         }
         if(data.status == 204)
         {
            $.toast({
              heading: data.title,
              text: data.message,
              showHideTransition: 'slide',
              icon: 'error',
              loaderBg: '#fff',
              position: 'top-right'
            })
         }
        $('#slide_add_form').css("opacity","");
        $("#add_slide").removeAttr("disabled");
      }
    });
  });
  
  // File type validation
  $("#slide_photo").change(function() {
    var file = this.files[0];
    var imagefile = file.type;
    var match= ['image/jpeg', 'image/png', 'image/jpg'];
    if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2]) || (imagefile==match[3]) || (imagefile==match[4]) || (imagefile==match[5]))){
      alert('Sorry, only JPG, JPEG, & PNG files are allowed to upload.');
      $("#slide_photo").val('');
      return false;
    }
  });
 

  /*************** SLIDE ADD END ***************/

/***************** SLIDE ADD VIDEO ***************/

 $("#slide_add_video_form").on('submit', function(e){
    e.preventDefault();
    $.ajax({
      type: 'POST',
      url: 'core/ajax/add_video_slider.php',
      data: new FormData(this),
      dataType: 'json',
      contentType: false,
      cache: false,
      processData:false,
      beforeSend: function(){
        $('#add_slider_video').attr("disabled","disabled");
        $('#slide_add_video_form').css("opacity",".5");
      },
      success: function(data){ 
         if(data.status == 200)
         {
          $('#slide_add_video_form')[0].reset();
            $.toast({
              heading: data.title,
              text: data.message,
              showHideTransition: 'slide',
              icon: 'success',
              loaderBg: '#fff',
              position: 'top-right'
            })
         }
         if(data.status == 204)
         {
            $.toast({
              heading: data.title,
              text: data.message,
              showHideTransition: 'slide',
              icon: 'error',
              loaderBg: '#fff',
              position: 'top-right'
            })
         }
        $('#slide_add_video_form').css("opacity","");
        $("#add_slider_video").removeAttr("disabled");
      }
    });
  });


/************************************************/


/***************EDIT VIDEO SLIDER*****************/


$("#slide_edit_video_form").on('submit', function(e){
    e.preventDefault();
    $.ajax({
      type: 'POST',
      url: '../core/ajax/edit_video_slider.php',
      data: new FormData(this),
      dataType: 'json',
      contentType: false,
      cache: false,
      processData:false,
      beforeSend: function(){
        $('#edit_slider_video').attr("disabled","disabled");
        $('#slide_edit_video_form').css("opacity",".5");
      },
      success: function(data){ 
         if(data.status == 200)
         {
          $('#slide_edit_video_form')[0].reset();
            $.toast({
              heading: data.title,
              text: data.message,
              showHideTransition: 'slide',
              icon: 'success',
              loaderBg: '#fff',
              position: 'top-right'
            })
         }
         if(data.status == 204)
         {
            $.toast({
              heading: data.title,
              text: data.message,
              showHideTransition: 'slide',
              icon: 'error',
              loaderBg: '#fff',
              position: 'top-right'
            })
         }
        $('#slide_edit_video_form').css("opacity","");
        $("#edit_slider_video").removeAttr("disabled");
      }
    });
  });

/*****************************************************/

/***************** SLIDE EDIT START ******************/

  $("#slider_edit_form").on('submit', function(e){
    e.preventDefault();
    $.ajax({
      type: 'POST',
      url: '../core/ajax/edit_slider.php',
      data: new FormData(this),
      dataType: 'json',
      contentType: false,
      cache: false,
      processData:false,
      beforeSend: function(){
        $('#slider_update').attr("disabled","disabled");
        $('#slider_edit_form').css("opacity",".5");
      },
      success: function(data){ 
         if(data.status == 200)
         {
          $("#slider_edit_form").load(" #slider_edit_form");
          $('#slider_edit_form')[0].reset();
            $.toast({
              heading: data.title,
              text: data.message,
              showHideTransition: 'slide',
              icon: 'success',
              loaderBg: '#fff',
              position: 'top-right'
            })
         }
         if(data.status == 204)
         {
            $.toast({
              heading: data.title,
              text: data.message,
              showHideTransition: 'slide',
              icon: 'error',
              loaderBg: '#fff',
              position: 'top-right'
            })
         }
        $('#slider_edit_form').css("opacity","");
        $("#slider_update").removeAttr("disabled");
      }
    });
  });
  
  // File type validation
  $("#slide_photo").change(function() {
    var file = this.files[0];
    var imagefile = file.type;
    var match= ['image/jpeg', 'image/png', 'image/jpg'];
    if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2]) || (imagefile==match[3]) || (imagefile==match[4]) || (imagefile==match[5]))){
      alert('Sorry, only JPG, JPEG, & PNG files are allowed to upload.');
      $("#slide_photo").val('');
      return false;
    }
  });
 

  /*************** SLIDE EDIT END ***************/





  /*############################ BACKGROUND IMAGES ################################*/

 $('#cookies').change(function(){
        var file_data = $('#cookies').prop('files')[0];   
        var form_data = new FormData();                  
        form_data.append('cookies', file_data);
        $.ajax({
            url: "core/ajax/cookies_background.php",
            type: "POST",
            data: form_data,
            dataType: "json",
            contentType: false,
            cache: false,
            processData:false,
            beforeSend:function(){
                   $('.loader').show();
                }, 
            success: function(data){
              $("#for_cookies").load(" #for_cookies");
                if(data.status == 200)
                     {
                      $('.loader').hide();
                        $.toast({
                          heading: 'Uğurlu!',
                          text: data.message,
                          showHideTransition: 'slide',
                          icon: 'success',
                          loaderBg: '#fff',
                          position: 'top-right'
                        })
                     }
                 else if(data.status == 204)
                 {
                  $('.loader').hide();
                    $.toast({
                      heading: 'Xəta',
                      text: data.message,
                      showHideTransition: 'slide',
                      icon: 'error',
                      loaderBg: '#fff',
                      position: 'top-right'
                    })
                 }
            }
        });
    });


 $('#login_page').change(function(){
        var file_data = $('#login_page').prop('files')[0];   
        var form_data = new FormData();                  
        form_data.append('login_page', file_data);
        $.ajax({
            url: "core/ajax/login_background.php",
            type: "POST",
            data: form_data,
            dataType: "json",
            contentType: false,
            cache: false,
            processData:false,
            beforeSend:function(){
                   $('.loader').show();
                }, 
            success: function(data){
              $("#for_login").load(" #for_login");
                if(data.status == 200)
                     {
                      $('.loader').hide();
                        $.toast({
                          heading: 'Uğurlu!',
                          text: data.message,
                          showHideTransition: 'slide',
                          icon: 'success',
                          loaderBg: '#fff',
                          position: 'top-right'
                        })
                     }
                 else if(data.status == 204)
                 {
                  $('.loader').hide();
                    $.toast({
                      heading: 'Xəta',
                      text: data.message,
                      showHideTransition: 'slide',
                      icon: 'error',
                      loaderBg: '#fff',
                      position: 'top-right'
                    })
                 }
            }
        });
    });

    $('#contact').change(function(){
        var file_data = $('#contact').prop('files')[0];   
        var form_data = new FormData();                  
        form_data.append('contact', file_data);
        $.ajax({
            url: "core/ajax/contact_background.php",
            type: "POST",
            data: form_data,
            dataType: "json",
            contentType: false,
            cache: false,
            processData:false,
            beforeSend:function(){
                   $('.loader').show();
                }, 
            success: function(data){
              $("#for_contact").load(" #for_contact");
                if(data.status == 200)
                     {
                      $('.loader').hide();
                        $.toast({
                          heading: 'Uğurlu!',
                          text: data.message,
                          showHideTransition: 'slide',
                          icon: 'success',
                          loaderBg: '#fff',
                          position: 'top-right'
                        })
                     }
                 else if(data.status == 204)
                 {
                  $('.loader').hide();
                    $.toast({
                      heading: 'Xəta',
                      text: data.message,
                      showHideTransition: 'slide',
                      icon: 'error',
                      loaderBg: '#fff',
                      position: 'top-right'
                    })
                 }
            }
        });
    });

     $('#contact_home').change(function(){
        var file_data = $('#contact_home').prop('files')[0];   
        var form_data = new FormData();                  
        form_data.append('contact_home', file_data);
        $.ajax({
            url: "core/ajax/home_contact_background.php",
            type: "POST",
            data: form_data,
            dataType: "json",
            contentType: false,
            cache: false,
            processData:false,
            beforeSend:function(){
                   $('.loader').show();
                }, 
            success: function(data){
              $("#for_home_contact").load(" #for_home_contact");
                if(data.status == 200)
                     {
                      $('.loader').hide();
                        $.toast({
                          heading: 'Uğurlu!',
                          text: data.message,
                          showHideTransition: 'slide',
                          icon: 'success',
                          loaderBg: '#fff',
                          position: 'top-right'
                        })
                     }
                 else if(data.status == 204)
                 {
                  $('.loader').hide();
                    $.toast({
                      heading: 'Xəta',
                      text: data.message,
                      showHideTransition: 'slide',
                      icon: 'error',
                      loaderBg: '#fff',
                      position: 'top-right'
                    })
                 }
            }
        });
    });

    $('#about').change(function(){
        var file_data = $('#about').prop('files')[0];   
        var form_data = new FormData();                  
        form_data.append('about', file_data);
        $.ajax({
            url: "core/ajax/about_background.php",
            type: "POST",
            data: form_data,
            dataType: "json",
            contentType: false,
            cache: false,
            processData:false,
            beforeSend:function(){
                   $('.loader').show();
                }, 
            success: function(data){
              $("#for_about").load(" #for_about");
                if(data.status == 200)
                     {
                      $('.loader').hide();
                        $.toast({
                          heading: 'Uğurlu!',
                          text: data.message,
                          showHideTransition: 'slide',
                          icon: 'success',
                          loaderBg: '#fff',
                          position: 'top-right'
                        })
                     }
                 else if(data.status == 204)
                 {
                  $('.loader').hide();
                    $.toast({
                      heading: 'Xəta',
                      text: data.message,
                      showHideTransition: 'slide',
                      icon: 'error',
                      loaderBg: '#fff',
                      position: 'top-right'
                    })
                 }
            }
        });
    });


     $('#photo_gallery').change(function(){
        var file_data = $('#photo_gallery').prop('files')[0];   
        var form_data = new FormData();                  
        form_data.append('photo_gallery', file_data);
        $.ajax({
            url: "core/ajax/photo_gallery_background.php",
            type: "POST",
            data: form_data,
            dataType: "json",
            contentType: false,
            cache: false,
            processData:false,
            beforeSend:function(){
                   $('.loader').show();
                }, 
            success: function(data){
              $("#for_photo_gallery").load(" #for_photo_gallery");
                if(data.status == 200)
                     {
                      $('.loader').hide();
                        $.toast({
                          heading: 'Uğurlu!',
                          text: data.message,
                          showHideTransition: 'slide',
                          icon: 'success',
                          loaderBg: '#fff',
                          position: 'top-right'
                        })
                     }
                 else if(data.status == 204)
                 {
                  $('.loader').hide();
                    $.toast({
                      heading: 'Xəta',
                      text: data.message,
                      showHideTransition: 'slide',
                      icon: 'error',
                      loaderBg: '#fff',
                      position: 'top-right'
                    })
                 }
            }
        });
    });

     $('#why_us').change(function(){
        var file_data = $('#why_us').prop('files')[0];   
        var form_data = new FormData();                  
        form_data.append('why_us', file_data);
        $.ajax({
            url: "core/ajax/why_us_background.php",
            type: "POST",
            data: form_data,
            dataType: "json",
            contentType: false,
            cache: false,
            processData:false,
            beforeSend:function(){
                   $('.loader').show();
                }, 
            success: function(data){
              $("#for_why_us").load(" #for_why_us");
                if(data.status == 200)
                     {
                      $('.loader').hide();
                        $.toast({
                          heading: 'Uğurlu!',
                          text: data.message,
                          showHideTransition: 'slide',
                          icon: 'success',
                          loaderBg: '#fff',
                          position: 'top-right'
                        })
                     }
                 else if(data.status == 204)
                 {
                  $('.loader').hide();
                    $.toast({
                      heading: 'Xəta',
                      text: data.message,
                      showHideTransition: 'slide',
                      icon: 'error',
                      loaderBg: '#fff',
                      position: 'top-right'
                    })
                 }
            }
        });
    });

  /*######################## BACKGROUND IMAGES END ################################*/


  /***************** ADD ALBUM START ******************/

  $("#album_add_form").on('submit', function(e){
    e.preventDefault();
    $.ajax({
      type: 'POST',
      url: 'core/ajax/add_album.php',
      data: new FormData(this),
      dataType: 'json',
      contentType: false,
      cache: false,
      processData:false,
      beforeSend: function(){
        $('#album_add').attr("disabled","disabled");
        $('#album_add_form').css("opacity",".5");
      },
      success: function(data){ 
         if(data.status == 200)
         {
          $("#album_add_form").load(" #album_add_form");
          $('#album_add_form')[0].reset();
            $.toast({
              heading: data.title,
              text: data.message,
              showHideTransition: 'slide',
              icon: 'success',
              loaderBg: '#fff',
              position: 'top-right'
            })
         }
         if(data.status == 204)
         {
            $.toast({
              heading: data.title,
              text: data.message,
              showHideTransition: 'slide',
              icon: 'error',
              loaderBg: '#fff',
              position: 'top-right'
            })
         }
        $('#album_add_form').css("opacity","");
        $("#album_add").removeAttr("disabled");
      }
    });
  });
  
  // File type validation
  $("#album_cover").change(function() {
    var file = this.files[0];
    var imagefile = file.type;
    var match= ['image/jpeg', 'image/png', 'image/jpg'];
    if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2]) || (imagefile==match[3]) || (imagefile==match[4]) || (imagefile==match[5]))){
      alert('Sorry, only JPG, JPEG, & PNG files are allowed to upload.');
      $("#album_cover").val('');
      return false;
    }
  });


/*####################  ALBUM ADD END ############################*/


 /***************** EDIT ALBUM START ******************/

  $("#album_edit_form").on('submit', function(e){
    e.preventDefault();
    $.ajax({
      type: 'POST',
      url: '../core/ajax/edit_album.php',
      data: new FormData(this),
      dataType: 'json',
      contentType: false,
      cache: false,
      processData:false,
      beforeSend: function(){
        $('#album_edit').attr("disabled","disabled");
        $('#album_edit_form').css("opacity",".5");
      },
      success: function(data){ 
         if(data.status == 200)
         {
          $("#album_edit_form").load(" #album_edit_form");
          $('#album_edit_form')[0].reset();
            $.toast({
              heading: data.title,
              text: data.message,
              showHideTransition: 'slide',
              icon: 'success',
              loaderBg: '#fff',
              position: 'top-right'
            })
         }
         if(data.status == 204)
         {
            $.toast({
              heading: data.title,
              text: data.message,
              showHideTransition: 'slide',
              icon: 'error',
              loaderBg: '#fff',
              position: 'top-right'
            })
         }
        $('#album_edit_form').css("opacity","");
        $("#album_edit").removeAttr("disabled");
      }
    });
  });
  
  // File type validation
  $("#album_cover_photo").change(function() {
    var file = this.files[0];
    var imagefile = file.type;
    var match= ['image/jpeg', 'image/png', 'image/jpg'];
    if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2]) || (imagefile==match[3]) || (imagefile==match[4]) || (imagefile==match[5]))){
      alert('Sorry, only JPG, JPEG, & PNG files are allowed to upload.');
      $("#album_cover_photo").val('');
      return false;
    }
  });


/*####################  ALBUM EDIT END ############################*/



 /***************** ADD VIDEO START ******************/

  $("#video_add_form").on('submit', function(e){
    e.preventDefault();
    $.ajax({
      type: 'POST',
      url: 'core/ajax/add_video.php',
      data: new FormData(this),
      dataType: 'json',
      contentType: false,
      cache: false,
      processData:false,
      beforeSend: function(){
        $('#video_add').attr("disabled","disabled");
        $('#video_add_form').css("opacity",".5");
      },
      success: function(data){ 
         if(data.status == 200)
         {
          $("#video_add_form").load(" #video_add_form");
          $('#video_add_form')[0].reset();
            $.toast({
              heading: data.title,
              text: data.message,
              showHideTransition: 'slide',
              icon: 'success',
              loaderBg: '#fff',
              position: 'top-right'
            })
         }
         if(data.status == 204)
         {
            $.toast({
              heading: data.title,
              text: data.message,
              showHideTransition: 'slide',
              icon: 'error',
              loaderBg: '#fff',
              position: 'top-right'
            })
         }
        $('#video_add_form').css("opacity","");
        $("#video_add").removeAttr("disabled");
      }
    });
  });
  
  // File type validation
  $("#video_cover").change(function() {
    var file = this.files[0];
    var imagefile = file.type;
    var match= ['image/jpeg', 'image/png', 'image/jpg'];
    if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2]) || (imagefile==match[3]) || (imagefile==match[4]) || (imagefile==match[5]))){
      alert('Sorry, only JPG, JPEG, & PNG files are allowed to upload.');
      $("#video_cover").val('');
      return false;
    }
  });


/*####################  VIDEO ADD END ############################*/


/***************** ADD VIDEO START ******************/

  $("#video_edit_form").on('submit', function(e){
    e.preventDefault();
    $.ajax({
      type: 'POST',
      url: '../core/ajax/edit_video.php',
      data: new FormData(this),
      dataType: 'json',
      contentType: false,
      cache: false,
      processData:false,
      beforeSend: function(){
        $('#video_edit').attr("disabled","disabled");
        $('#video_edit_form').css("opacity",".5");
      },
      success: function(data){ 
         if(data.status == 200)
         {
          $("#video_edit_form").load(" #video_edit_form");
          $('#video_edit_form')[0].reset();
            $.toast({
              heading: data.title,
              text: data.message,
              showHideTransition: 'slide',
              icon: 'success',
              loaderBg: '#fff',
              position: 'top-right'
            })
         }
         if(data.status == 204)
         {
            $.toast({
              heading: data.title,
              text: data.message,
              showHideTransition: 'slide',
              icon: 'error',
              loaderBg: '#fff',
              position: 'top-right'
            })
         }
        $('#video_edit_form').css("opacity","");
        $("#video_edit").removeAttr("disabled");
      }
    });
  });
  
  // File type validation
  $("#video_cover_edit").change(function() {
    var file = this.files[0];
    var imagefile = file.type;
    var match= ['image/jpeg', 'image/png', 'image/jpg'];
    if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2]) || (imagefile==match[3]) || (imagefile==match[4]) || (imagefile==match[5]))){
      alert('Sorry, only JPG, JPEG, & PNG files are allowed to upload.');
      $("#video_cover_edit").val('');
      return false;
    }
  });


/*####################  VIDEO ADD END ############################*/

/*#################### STAFF ADD START #############################*/

  $("#add_staff_form").on('submit', function(e){
    e.preventDefault();
    $.ajax({
      type: 'POST',
      url: 'core/ajax/add_staff.php',
      data: new FormData(this),
      dataType: 'json',
      contentType: false,
      cache: false,
      processData:false,
      beforeSend: function(){
        $('#add_staff').attr("disabled","disabled");
        $('#add_staff_form').css("opacity",".5");
      },
      success: function(data){ 
         if(data.status == 200)
         {
          $('#add_staff_form')[0].reset();
            $.toast({
              heading: data.title,
              text: data.message,
              showHideTransition: 'slide',
              icon: 'success',
              loaderBg: '#fff',
              position: 'top-right'
            })
         }
         if(data.status == 204)
         {
            $.toast({
              heading: data.title,
              text: data.message,
              showHideTransition: 'slide',
              icon: 'error',
              loaderBg: '#fff',
              position: 'top-right'
            })
         }
        $('#add_staff_form').css("opacity","");
        $("#add_staff").removeAttr("disabled");
      }
    });
  });
  
  // File type validation
  $("#staff_photo").change(function() {
    var file = this.files[0];
    var imagefile = file.type;
    var match= ['application/pdf', 'application/msword', 'application/vnd.ms-office', 'image/jpeg', 'image/png', 'image/jpg'];
    if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2]) || (imagefile==match[3]) || (imagefile==match[4]) || (imagefile==match[5]))){
      alert('Sorry, only PDF, DOC, JPG, JPEG, & PNG files are allowed to upload.');
      $("#staff_photo").val('');
      return false;
    }
  });

/*#################################################################*/


/*#################### STAFF EDIT START #############################*/

  $("#edit_staff_form").on('submit', function(e){
    e.preventDefault();
    $.ajax({
      type: 'POST',
      url: '../core/ajax/edit_staff.php',
      data: new FormData(this),
      dataType: 'json',
      contentType: false,
      cache: false,
      processData:false,
      beforeSend: function(){
        $('#edit_staff').attr("disabled","disabled");
        $('#edit_staff_form').css("opacity",".5");
      },
      success: function(data){ 
         if(data.status == 200)
         {
          $('#edit_staff_form')[0].reset();
            $.toast({
              heading: data.title,
              text: data.message,
              showHideTransition: 'slide',
              icon: 'success',
              loaderBg: '#fff',
              position: 'top-right'
            })
         }
         if(data.status == 204)
         {
            $.toast({
              heading: data.title,
              text: data.message,
              showHideTransition: 'slide',
              icon: 'error',
              loaderBg: '#fff',
              position: 'top-right'
            })
         }
        $('#edit_staff_form').css("opacity","");
        $("#edit_staff").removeAttr("disabled");
      }
    });
  });
  
  // File type validation
  $("#staff_photo_edit").change(function() {
    var file = this.files[0];
    var imagefile = file.type;
    var match= ['application/pdf', 'application/msword', 'application/vnd.ms-office', 'image/jpeg', 'image/png', 'image/jpg'];
    if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2]) || (imagefile==match[3]) || (imagefile==match[4]) || (imagefile==match[5]))){
      alert('Sorry, only PDF, DOC, JPG, JPEG, & PNG files are allowed to upload.');
      $("#staff_photo_edit").val('');
      return false;
    }
  });

/*#################################################################*/



/*####################### STATISTICS UPDATE #######################*/


$("#statistics").on('submit', function(e){
    e.preventDefault();
    $.ajax({
      type: 'POST',
      url: 'core/ajax/statistics.php',
      data: new FormData(this),
      dataType: 'json',
      contentType: false,
      cache: false,
      processData:false,
      beforeSend: function(){
        $('#update_statistics').attr("disabled","disabled");
        $('#statistics').css("opacity",".5");
      },
      success: function(data){ 
         if(data.status == 200)
         {
          $('#statistics')[0].reset();
            $.toast({
              heading: data.title,
              text: data.message,
              showHideTransition: 'slide',
              icon: 'success',
              loaderBg: '#fff',
              position: 'top-right'
            })
         }
         if(data.status == 204)
         {
            $.toast({
              heading: data.title,
              text: data.message,
              showHideTransition: 'slide',
              icon: 'error',
              loaderBg: '#fff',
              position: 'top-right'
            })
         }
        $('#statistics').css("opacity","");
        $("#update_statistics").removeAttr("disabled");
      }
    });
  });

/*#################################################################*/


  /***************** SERVICE ADD ******************/

  $("#service_add_form").on('submit', function(e){
    e.preventDefault();
    $.ajax({
      type: 'POST',
      url: 'core/ajax/add_service.php',
      data: new FormData(this),
      dataType: 'json',
      contentType: false,
      cache: false,
      processData:false,
      beforeSend: function(){
        $('#add_service').attr("disabled","disabled");
        $('#service_add_form').css("opacity",".5");
      },
      success: function(data){ 
         if(data.status == 200)
         {
          $('#service_add_form')[0].reset();
            $.toast({
              heading: data.title,
              text: data.message,
              showHideTransition: 'slide',
              icon: 'success',
              loaderBg: '#fff',
              position: 'top-right'
            })
         }
         if(data.status == 204)
         {
            $.toast({
              heading: data.title,
              text: data.message,
              showHideTransition: 'slide',
              icon: 'error',
              loaderBg: '#fff',
              position: 'top-right'
            })
         }
        $('#service_add_form').css("opacity","");
        $("#add_service").removeAttr("disabled");
      }
    });
  });
  
  // File type validation
  $("#service_photo").change(function() {
    var file = this.files[0];
    var imagefile = file.type;
    var match= ['application/pdf', 'application/msword', 'application/vnd.ms-office', 'image/jpeg', 'image/png', 'image/jpg'];
    if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2]) || (imagefile==match[3]) || (imagefile==match[4]) || (imagefile==match[5]))){
      alert('Sorry, only PDF, DOC, JPG, JPEG, & PNG files are allowed to upload.');
      $("#cover_photo").val('');
      return false;
    }
  });
 

  /*************** SERVICE ADD END ***************/


 /***************** SERVICE EDIT FORM ******************/

  $("#service_edit_form").on('submit', function(e){
    e.preventDefault();
    $.ajax({
      type: 'POST',
      url: '../core/ajax/edit_service.php',
      data: new FormData(this),
      dataType: 'json',
      contentType: false,
      cache: false,
      processData:false,
      beforeSend: function(){
        $('#edit_service').attr("disabled","disabled");
        $('#service_edit_form').css("opacity",".5");
      },
      success: function(data){ 
         if(data.status == 200)
         {
          $('#service_edit_form')[0].reset();
            $.toast({
              heading: data.title,
              text: data.message,
              showHideTransition: 'slide',
              icon: 'success',
              loaderBg: '#fff',
              position: 'top-right'
            })
         }
         if(data.status == 204)
         {
            $.toast({
              heading: data.title,
              text: data.message,
              showHideTransition: 'slide',
              icon: 'error',
              loaderBg: '#fff',
              position: 'top-right'
            })
         }
        $('#service_edit_form').css("opacity","");
        $("#edit_service").removeAttr("disabled");
      }
    });
  });
  
  // File type validation
  $("#service_photo").change(function() {
    var file = this.files[0];
    var imagefile = file.type;
    var match= ['application/pdf', 'application/msword', 'application/vnd.ms-office', 'image/jpeg', 'image/png', 'image/jpg'];
    if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2]) || (imagefile==match[3]) || (imagefile==match[4]) || (imagefile==match[5]))){
      alert('Sorry, only PDF, DOC, JPG, JPEG, & PNG files are allowed to upload.');
      $("#cover_photo").val('');
      return false;
    }
  });
 
 /***************** REGION ADD FORM ******************/

  $("#region_add_form").on('submit', function(e){
    e.preventDefault();
    $.ajax({
      type: 'POST',
      url: 'core/ajax/add_region.php',
      data: new FormData(this),
      dataType: 'json',
      contentType: false,
      cache: false,
      processData:false,
      beforeSend: function(){
        $('#add_region').attr("disabled","disabled");
        $('#region_add_form').css("opacity",".5");
      },
      success: function(data){ 
         if(data.status == 200)
         {
          $('#region_add_form')[0].reset();
            $.toast({
              heading: data.title,
              text: data.message,
              showHideTransition: 'slide',
              icon: 'success',
              loaderBg: '#fff',
              position: 'top-right'
            })
         }
         if(data.status == 204)
         {
            $.toast({
              heading: data.title,
              text: data.message,
              showHideTransition: 'slide',
              icon: 'error',
              loaderBg: '#fff',
              position: 'top-right'
            })
         }
        $('#region_add_form').css("opacity","");
        $("#add_region").removeAttr("disabled");
      }
    });
  });
  

   /***************** REGION EDIT FORM ******************/

  $("#region_edit_form").on('submit', function(e){
    e.preventDefault();
    $.ajax({
      type: 'POST',
      url: '../core/ajax/edit_region.php',
      data: new FormData(this),
      dataType: 'json',
      contentType: false,
      cache: false,
      processData:false,
      beforeSend: function(){
        $('#edit_region').attr("disabled","disabled");
        $('#region_edit_form').css("opacity",".5");
      },
      success: function(data){ 
         if(data.status == 200)
         {
          $('#region_edit_form')[0].reset();
            $.toast({
              heading: data.title,
              text: data.message,
              showHideTransition: 'slide',
              icon: 'success',
              loaderBg: '#fff',
              position: 'top-right'
            })
         }
         if(data.status == 204)
         {
            $.toast({
              heading: data.title,
              text: data.message,
              showHideTransition: 'slide',
              icon: 'error',
              loaderBg: '#fff',
              position: 'top-right'
            })
         }
        $('#region_edit_form').css("opacity","");
        $("#edit_region").removeAttr("disabled");
      }
    });
  });
  

  /***************** SETTLEMENT ADD FORM ******************/

  $("#settlement_add_form").on('submit', function(e){
    e.preventDefault();
    $.ajax({
      type: 'POST',
      url: 'core/ajax/add_settlement.php',
      data: new FormData(this),
      dataType: 'json',
      contentType: false,
      cache: false,
      processData:false,
      beforeSend: function(){
        $('#add_settlement').attr("disabled","disabled");
        $('#settlement_add_form').css("opacity",".5");
      },
      success: function(data){ 
         if(data.status == 200)
         {
          $('#settlement_add_form')[0].reset();
            $.toast({
              heading: data.title,
              text: data.message,
              showHideTransition: 'slide',
              icon: 'success',
              loaderBg: '#fff',
              position: 'top-right'
            })
         }
         if(data.status == 204)
         {
            $.toast({
              heading: data.title,
              text: data.message,
              showHideTransition: 'slide',
              icon: 'error',
              loaderBg: '#fff',
              position: 'top-right'
            })
         }
        $('#settlement_add_form').css("opacity","");
        $("#add_settlement").removeAttr("disabled");
      }
    });
  });


   /***************** SETTLEMENT EDIT FORM ******************/

  $("#settlement_edit_form").on('submit', function(e){
    e.preventDefault();
    $.ajax({
      type: 'POST',
      url: '../core/ajax/edit_settlement.php',
      data: new FormData(this),
      dataType: 'json',
      contentType: false,
      cache: false,
      processData:false,
      beforeSend: function(){
        $('#edit_settlement').attr("disabled","disabled");
        $('#settlement_edit_form').css("opacity",".5");
      },
      success: function(data){ 
         if(data.status == 200)
         {
          $('#settlement_edit_form')[0].reset();
            $.toast({
              heading: data.title,
              text: data.message,
              showHideTransition: 'slide',
              icon: 'success',
              loaderBg: '#fff',
              position: 'top-right'
            })
         }
         if(data.status == 204)
         {
            $.toast({
              heading: data.title,
              text: data.message,
              showHideTransition: 'slide',
              icon: 'error',
              loaderBg: '#fff',
              position: 'top-right'
            })
         }
        $('#settlement_edit_form').css("opacity","");
        $("#edit_settlement").removeAttr("disabled");
      }
    });
  });
  

  /***************** HASHTAGS ADD FORM ******************/

  $("#hashtag_add_form").on('submit', function(e){
    e.preventDefault();
    $.ajax({
      type: 'POST',
      url: 'core/ajax/add_hashtags.php',
      data: new FormData(this),
      dataType: 'json',
      contentType: false,
      cache: false,
      processData:false,
      beforeSend: function(){
        $('#add_hashtag').attr("disabled","disabled");
        $('#hashtag_add_form').css("opacity",".5");
      },
      success: function(data){ 
         if(data.status == 200)
         {
          $('#hashtag_add_form')[0].reset();
            $.toast({
              heading: data.title,
              text: data.message,
              showHideTransition: 'slide',
              icon: 'success',
              loaderBg: '#fff',
              position: 'top-right'
            })
         }
         if(data.status == 204)
         {
            $.toast({
              heading: data.title,
              text: data.message,
              showHideTransition: 'slide',
              icon: 'error',
              loaderBg: '#fff',
              position: 'top-right'
            })
         }
        $('#hashtag_add_form').css("opacity","");
        $("#add_hashtag").removeAttr("disabled");
      }
    });
  });


  
  /***************** HASHTAGS EDIT FORM ******************/

  $("#hashtag_edit_form").on('submit', function(e){
    e.preventDefault();
    $.ajax({
      type: 'POST',
      url: '../core/ajax/edit_hashtags.php',
      data: new FormData(this),
      dataType: 'json',
      contentType: false,
      cache: false,
      processData:false,
      beforeSend: function(){
        $('#edit_hashtag').attr("disabled","disabled");
        $('#hashtag_edit_form').css("opacity",".5");
      },
      success: function(data){ 
         if(data.status == 200)
         {
          $('#hashtag_edit_form')[0].reset();
            $.toast({
              heading: data.title,
              text: data.message,
              showHideTransition: 'slide',
              icon: 'success',
              loaderBg: '#fff',
              position: 'top-right'
            })
         }
         if(data.status == 204)
         {
            $.toast({
              heading: data.title,
              text: data.message,
              showHideTransition: 'slide',
              icon: 'error',
              loaderBg: '#fff',
              position: 'top-right'
            })
         }
        $('#hashtag_edit_form').css("opacity","");
        $("#edit_hashtag").removeAttr("disabled");
      }
    });
  });



   /***************** METRO EDIT FORM ******************/

  $("#metro_add_form").on('submit', function(e){
    e.preventDefault();
    $.ajax({
      type: 'POST',
      url: 'core/ajax/add_metro.php',
      data: new FormData(this),
      dataType: 'json',
      contentType: false,
      cache: false,
      processData:false,
      beforeSend: function(){
        $('#add_metro').attr("disabled","disabled");
        $('#metro_add_form').css("opacity",".5");
      },
      success: function(data){ 
         if(data.status == 200)
         {
          $('#metro_add_form')[0].reset();
            $.toast({
              heading: data.title,
              text: data.message,
              showHideTransition: 'slide',
              icon: 'success',
              loaderBg: '#fff',
              position: 'top-right'
            })
         }
         if(data.status == 204)
         {
            $.toast({
              heading: data.title,
              text: data.message,
              showHideTransition: 'slide',
              icon: 'error',
              loaderBg: '#fff',
              position: 'top-right'
            })
         }
        $('#metro_add_form').css("opacity","");
        $("#add_metro").removeAttr("disabled");
      }
    });
  });

   /***************** ADS TYPE EDIT FORM ******************/

  $("#ads_type_edit_form").on('submit', function(e){
    e.preventDefault();
    $.ajax({
      type: 'POST',
      url: '../core/ajax/edit_ads_type.php',
      data: new FormData(this),
      dataType: 'json',
      contentType: false,
      cache: false,
      processData:false,
      beforeSend: function(){
        $('#edit_ads_type').attr("disabled","disabled");
        $('#ads_type_edit_form').css("opacity",".5");
      },
      success: function(data){ 
         if(data.status == 200)
         {
          $('#ads_type_edit_form')[0].reset();
            $.toast({
              heading: data.title,
              text: data.message,
              showHideTransition: 'slide',
              icon: 'success',
              loaderBg: '#fff',
              position: 'top-right'
            })
         }
         if(data.status == 204)
         {
            $.toast({
              heading: data.title,
              text: data.message,
              showHideTransition: 'slide',
              icon: 'error',
              loaderBg: '#fff',
              position: 'top-right'
            })
         }
        $('#ads_type_edit_form').css("opacity","");
        $("#edit_ads_type").removeAttr("disabled");
      }
    });
  });



  // File type validation
  $("#page_cover_photo").change(function() {
    var file = this.files[0];
    var imagefile = file.type;
    var match= ['application/pdf', 'application/msword', 'application/vnd.ms-office', 'image/jpeg', 'image/png', 'image/jpg'];
    if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2]) || (imagefile==match[3]) || (imagefile==match[4]) || (imagefile==match[5]))){
      alert('Sorry, only PDF, DOC, JPG, JPEG, & PNG files are allowed to upload.');
      $("#page_cover_photo").val('');
      return false;
    }
  });





});