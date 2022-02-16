<?php 
$title = settings('site_title');
$desc  = settings('seo_description');
$keyw  = settings('seo_keywords');
?>
<!-- START HEAD -->
<?php include_once "partials/head.php"; ?>
<!-- END HEAD -->
<!-- START TOPBAR -->
<?php include_once "partials/topbar.php"; ?>


<div class="breadcrumb-wrap">
   <div class="container">
     <nav aria-label="breadcrumb">
       <ol class="breadcrumb">
         <li class="breadcrumb-item"><a href="index.html">Home</a></li>
         <li class="breadcrumb-item active" aria-current="page">My Account</li>
      </ol>
   </nav>
</div>
</div>

<main class="site-main content-area">
   <div class="container">
      <div class="row">
         <div class="col-lg-7 col-sm-12 col-12">
            <div class="page-content-block">
               <form id="add_listing_form" class="form-horizontal" method="POST">
                  <div class="col-md-12 rtcl-login-form-wrap" id="contact_section">
                     <h4><?= translate('add_listing') ?></h4>
                     <hr>
                        <div class="mb-3 row">
                          <label for="name" class="col-sm-4 col-form-label">Əlaqədar şəxs</label>
                           <div class="col-sm-8">
                              <input  name="name" type="text" id="name" class="form-control" placeholder="<?= translate("enter_your_name_and_surname") ?>" required>
                           </div>
                        </div>

                        <div class="mb-3 row">
                          <label for="phone_number" class="col-sm-4 col-form-label">Telefon</label>
                           <div class="col-sm-8">
                              <input  name="phone_number" type="text" id="phone_number" class="form-control" placeholder="<?= translate("enter_phone_number") ?>" required>
                           </div>
                        </div>

                        <div class="mb-3 row">
                          <label for="email" class="col-sm-4 col-form-label">E-Poçt ünvanı</label>
                          <div class="col-sm-8">
                              <input  name="email" type="email" id="email" class="form-control" placeholder="<?= translate("enter_email_address") ?>" required>
                              <div class="invalid-feedback">
                                  <?= translate('please_provide_a_valid_email') ?>
                              </div>
                           </div>
                        </div>

                        <div class="mb-3 row">
                          <label for="type" class="col-sm-4 col-form-label">Əlaqədar şəxs</label>
                          <div class="col-sm-8">
                             <select id="type" name="type" class="form-control" required>
                                <option value=""><?= translate('please_select_one_item') ?></option>
                                <option value="0"><?= translate('share_my_listing') ?></option>
                                <option value="1"><?= translate('a_rielitor') ?></option>
                              </select>
                           </div>
                        </div>

                        <div class="mb-3 row">
                          <div class="col-sm-8 float-right">
                              <button type="submit" id="check_number" name="continue" class="btn btn-outline-success ">Davam et</button>
                           </div>
                        </div>
                        <hr>
                  </div>

                  <div class="col-md-12 rtcl-login-form-wrap" id="estate_section" style="display:none;">
                     
                     <div class="mb-3 row" id="kind_id_div">
                       <label for="kind_id" class="col-sm-4 col-form-label"><?= translate('realty_kinds') ?></label>
                        <div class="col-sm-8">
                           <select required name="kind_id" id="kind_id" class="form-control">
                              <option value=""><?= translate('please_select_one_item') ?></option>
                              <?php 
                                 $rk  = "SELECT * FROM realty_kinds WHERE status=1";
                                 $rkr = mysqli_query($conn,$rk);
                                 while ($bax = mysqli_fetch_array($rkr)) {
                                  ?>
                              <option value="<?= $bax['id'] ?>">
                                 <?= translate($bax['kind_name']) ?>
                              </option>
                              <?php } ?>
                           </select>
                        </div>
                     </div>

                     <div class="mb-3 row" id="type_id_div">
                       <label for="type_id" class="col-sm-4 col-form-label"><?= translate('realty_types') ?></label>
                        <div class="col-sm-8">
                           <select required name="type_id" id="type_id" class="form-control">
                              <option value=""><?= translate('please_select_one_item') ?></option>
                              <?php 
                                 $rk  = "SELECT * FROM realty_types WHERE status=1";
                                 $rkr = mysqli_query($conn,$rk);
                                 while ($bax = mysqli_fetch_array($rkr)) {
                                     ?>
                              <option value="<?= $bax['id'] ?>">
                                 <?= translate($bax['type_name']) ?>
                              </option>
                              <?php } ?>
                           </select>
                        </div>
                     </div>

                     <div class="mb-3 row" id="cities_div">
                        <label for="city_id" class="col-sm-4 col-form-label"><?= translate('cities') ?></label>
                        <div class="col-sm-8">
                           <select required name="city_id" id="city_id" class="form-control">
                              <option value=""><?= translate('please_select_one_item') ?></option>
                              <?php 
                                 $rk  = "SELECT * FROM cities WHERE status=1";
                                 $rkr = mysqli_query($conn,$rk);
                                 while ($bax = mysqli_fetch_array($rkr)) {
                                     ?>
                              <option value="<?= $bax['id'] ?>">
                                 <?= translate($bax['city_name']) ?>
                              </option>
                              <?php } ?>
                           </select>
                        </div>
                     </div>

                     <div class="mb-3 row" id="office_kind_div">
                        <label for="office_kind" class="col-sm-4 col-form-label"><?= translate('office_kind') ?></label>
                        <div class="col-sm-8">
                           <select required name="office_kind" id="office_kind" class="form-control">
                              <option value=""><?= translate('please_select_one_item') ?></option>
                              <option value="0">Biznes mərkəzi</option>
                              <option value="1">Ev / Mənzil</option>
                              <option value="2">Villa</option>
                           </select>
                        </div>
                     </div>

                      <div class="mb-3 row" id="area_div">
                       <label for="area" class="col-sm-4 col-form-label"><?= translate('area') ?><span class="dec-icon"><i class="far fa-warehouse"></i></span></label>
                       <div class="col-sm-8">
                           <input  name="area" type="text" id="area" class="form-control" placeholder="<?= translate("enter_area") ?>" required>
                        </div>
                     </div>
                     
                     <div class="mb-3 row" id="space_div">
                       <label for="space" class="col-sm-4 col-form-label"><?= translate('space') ?><span class="dec-icon"><i class="far fa-warehouse"></i></span></label>
                       <div class="col-sm-8">
                           <input  name="space" type="text" id="space" class="form-control" placeholder="<?= translate("enter_space") ?>" required>
                        </div>
                     </div>

                     <div class="mb-3 row" id="rooms_div">
                       <label for="rooms" class="col-sm-4 col-form-label"><?= translate('rooms') ?><span class="dec-icon"><i class="far fa-warehouse"></i></span></label>
                       <div class="col-sm-8">
                           <input  name="rooms" type="text" id="rooms" class="form-control" placeholder="<?= translate("enter_room_count") ?>" required>
                        </div>
                     </div>

                     <div class="mb-3 row" id="floor_div">
                       <label for="floor_no" class="col-sm-4 col-form-label"><?= translate('floor_no') ?><span class="dec-icon"><i class="far fa-warehouse"></i></span></label>
                       <div class="col-sm-8">
                           <input  name="floor_no" type="text" id="floor_no" class="form-control" placeholder="<?= translate("enter_floor_number") ?>" required>
                        </div>
                     </div>

                     <div class="mb-3 row" id="building_floor_div">
                       <label for="building_floor_no" class="col-sm-4 col-form-label"><?= translate('building_floor_no') ?><span class="dec-icon"><i class="far fa-warehouse"></i></span></label>
                       <div class="col-sm-8">
                           <input  name="building_floor_no" type="text" id="building_floor_no" class="form-control" placeholder="<?= translate("enter_building_floor_no") ?>" required>
                        </div>
                     </div>

                     <div class="mb-3 row">
                       <label for="description" class="col-sm-4 col-form-label"><?= translate('description') ?><span class="dec-icon"><i class="far fa-warehouse"></i></span></label>
                       <div class="col-sm-8">
                           <textarea class="form-control" id="description" name="description" required></textarea>
                        </div>
                     </div>

                     <div class="mb-3 row" id="price_div">
                       <label for="price" class="col-sm-4 col-form-label"><?= translate('price') ?><span class="dec-icon"><i class="far fa-warehouse"></i></span></label>
                       <div class="col-sm-8">
                           <input  name="price" type="text" id="price" class="form-control" placeholder="<?= translate("enter_price") ?>" required>
                        </div>
                     </div>

                     <div class="mb-3 row" id="payment_method_div">
                        <label for="payment_method" class="col-sm-4 col-form-label"><?= translate('payment_method') ?></label>
                        <div class="col-sm-8">
                           <select required name="payment_method" id="payment_method" class="form-control">
                              <option value=""><?= translate('please_select_one_item') ?></option>
                              <option value="0">Gündəlik</option>
                              <option value="1">Aylıq</option>
                           </select>
                        </div>
                     </div>

                     <div class="mb-3 row">
                       <div class="col-sm-8 float-right">
                           <button type="submit" id="add" name="add" class="btn btn-outline-success ">Əlavə et</button>
                        </div>
                     </div>
                     <hr>
                  </div>
               </form>
            </div>
         </div>

         <div class="col-lg-5 col-sm-12 col-5">
            <div class="page-content-block">
               <div class="col-md-12 rtcl-login-form-wrap">
                  <h4><?= translate('rules') ?></h4>
                  <hr>
                  <p class="font-14 color-black bottom-20">- <b>Pulsuz</b> olaraq 2 elan əlavə edə bilərsiniz.</p>
                  <p class="font-14 color-black bottom-20">- Növbəti elan üçün əlavə <u>ödəniş tələb olunmur</u>.</p>
                  <p class="font-14 color-black">- <b>Reklam ilə tez sat</b> xidmətindən istifadə edərək elanınızı sosial şəbəkələrdə reklam edərək daha tez sata (kirayə verə) bilərsiniz.</p>
                  <div class="alert alert-success" id="message" role="alert" style="display: none;"></div>  
               </div>
            </div>
         </div>
      </div>
   </div>
</main>

<!-- START  -->
<?php include_once "partials/footer.php"; ?>
<!-- END  -->
<script type="text/javascript">
    $('#add_new').click(function (e) {
      $('#add_new').prop("disabled","true");
      loadphoto();
      e.preventDefault();

      var form = $("#add_new_listing");
      $.ajax
      ({
        type: "POST",
        url: "core/ajax/add_listing.php",
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




   $('.upload').click(function(){
     var n = $('.img-box').length;
     if(n<21){
       $('#file').click();
    }
    else
    {
       Toast.fire({
          icon: 'warning',
          title: 'Maksimum şəkil limitini doldurdunuz.'
       })
    }
 });     
   
   $('body').on('click','#uplbtn',function () {
      var n = $('.dz-preview').length;
      if(n<5)
      {
         if( document.createEvent ) 
         {
            var evt = document.createEvent("MouseEvents");  
            evt.initMouseEvent("click", true, true, window, 0, 0, 0, 0, 0, false, false, false, false, 0, null);  
            document.getElementById('my-dropzone').dispatchEvent(evt);
         } 
         else if( document.createEventObject ) 
         { 
            var evObj = document.createEventObject();
            document.getElementById('my-dropzone').fireEvent('onclick', evObj);
         }
         loadphoto();
      }
      else
      {
         Toast.fire({
          icon: 'warning',
          title: 'Maksimum şəkil limitini doldurdunuz.'
       })
      }   


   }); 
   
   $('body').on('click','#add_new',function () {
     if($('.dz-preview').length>$('.dz-success').length){
       Toast.fire({
          icon: 'warning',
          title: 'Zəhmət olmasa şəkillərin tam yüklənməsini gözləyin.'
       })
       return false;
    }
    loadphoto();
 });
   
   $('body').on('click','.up',function () {
    $(this).parents('.dz-preview').insertBefore($(this).parents('.dz-preview').prev());
    loadphoto();
 });
   $('body').on('click','.down',function () {
    $(this).parents('.dz-preview').insertAfter($(this).parents('.dz-preview').next());
    loadphoto();
 });
   $('body').on('click','.rotate',function () {
     let url = "<?= site_url() ?>";
     var file=$(this).parents('.dz-preview').children('.dz-image').children('.image').attr('alt');
     var box=$(this).parents('.dz-preview');
   // $(box).html('<div class="dz-processing dz-image-preview"><img src="loading.gif" width="150px"></div>');
   $.ajax({
     url: url+'/file-control?rotate-img=ok',
     type: 'POST',
     data: {'file':file},
     cache: false,
     dataType: 'json',
     success: function( respond, textStatus, jqXHR ){
       if( typeof respond.error === 'undefined' )
       {
         if(respond.status==1)
         {
           $(box).html('<div class="dz-image"><img class="image" data-dz-thumbnail alt="'+file+'" src="uploads/'+respond.file+'" ></div><div class="up"></div><div class="down"></div><div class="rotate"></div><div class="trash"></div>');
           loadphoto();
        }
        else
        {
           alert('silinmədi');
           $(box).remove();
           loadphoto();
        }

     }
     else
     {
      alert(respond.error);
      $(box).remove();
      loadphoto();
   }
},
error: function( jqXHR, textStatus, errorThrown ){
 alert('cavid!');
 $(box).remove();
 loadphoto();
}
}); 
}); 
   $('body').on('click','.trash',function () {
     let url = "<?= site_url() ?>";
     var file=$(this).parents('.dz-preview').children('.dz-image').children('.image').attr('alt');
     var box=$(this).parents('.dz-preview');
     $(box).remove();
     $.ajax({
       url: url+'/file-control?remove-img=ok',
       type: 'POST',
       data: {'file':file},
       cache: false,
       dataType: 'json',
       success: function( respond, textStatus, jqXHR ){loadphoto();},
       error: function( jqXHR, textStatus, errorThrown ){loadphoto();}
    }); 
  });
   
   function loadphoto(){
     var photos='';
     var s='';
     $('#my-dropzone .dz-preview .dz-image img').each(function () {
       photos += s+$(this).attr('alt');
       s=',';
    });
     $('#foto').val(photos);
  }
</script>
<script type="text/javascript">

   $('#add_listing_phone_number').keypress(function (e) {
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57))
     {
       return false;
    }
 });
   const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
     toast.addEventListener('mouseenter', Swal.stopTimer)
     toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
})
   
   let url = "<?= site_url() ?>";
   
   $('#office_kind_div').hide();
   $('#rooms_div').hide();
   $('#space_div').hide();
   $('#floor_div').hide();
   $('#building_floor_div').hide();
   $('#payment_method_div').hide();
   $('#mortgage_div').hide();
   $('#regions_div').hide();
   $('#hashtags_div').hide();
   $('#settlements_div').hide();
   $('#square').html('(m<sup>2</sup>)');
   

   /* CHECK PHONE NUMBER*/
   $("#add_listing_phone_number").focusout(function(){
    var phone_number = $('#add_listing_phone_number').val();
    $.ajax({
     url: url + "core/ajax/get_user.php",
     method: "POST",
     data: {
       phone_number:phone_number
    },
    success:function(data)
    {
       data = JSON.parse(data);
       if(data['status']==200){
         console.log(data.user_kind);
         document.getElementById('add_listing_name').value               = data.name;
         document.getElementById('add_listing_email').value              = data.email;
         document.getElementById('add_listing_phone_number').value       = data.phone_number;
         $('#user_kind').find('option[value="'+data.user_kind+'"]').attr('selected', true);
         document.getElementById('add_listing_name').disabled            = true;
         document.getElementById('add_listing_email').disabled           = true;
         Toast.fire({
          icon: data['icon'],
          title: data['message']
       })
      }  else if(data['status']==200){
         document.getElementById('add_listing_name').value       = '';
         document.getElementById('add_listing_email').value      = '';
         document.getElementById('add_listing_name').disabled            = false;
         document.getElementById('add_listing_email').disabled           = false;
         Toast.fire({
          icon: data['icon'],
          title: data['message']
       })
      } else {
         document.getElementById('add_listing_name').disabled            = false;
         document.getElementById('add_listing_email').disabled           = false;
         document.getElementById('add_listing_name').value       = '';
         document.getElementById('add_listing_email').value      = '';
         Toast.fire({
          icon: data['icon'],
          title: data['message']

       })
      }
   }
})
 });
   

   
   $('#kind_id').on("change", function(e) {
     var kind_id = $(this).val();
     if (kind_id == 1) {
       $('#mortgage_div').fadeIn("slow");
       $('#payment_method_div').hide();
    } else if (kind_id == 2) {
       $('#mortgage_div').hide();
       $('#payment_method_div').fadeIn("slow");
    }

 });
   
   $('#type_id').on("change", function(e) {
     var type_id = $(this).val();

     if (type_id == 1 || type_id == 2 || type_id == 3) {
       $('#rooms_div').fadeIn("slow");
       $('#floor_div').fadeIn("slow");
       $('#building_floor_div').fadeIn("slow");
       $('#office_kind_div').fadeOut("slow");
       $('#space_div').fadeOut("slow");
       $('#settlement_div').fadeOut("slow");
       $('#square').html('m<sup>2</sup>');


    } else if (type_id == 4) {


       $('#rooms_div').fadeIn("slow");
       $('#space_div').fadeIn("slow");
       $('#floor_div').fadeOut("slow");
       $('#building_floor_div').fadeOut("slow");
       $('#office_kind_div').fadeOut("slow");
       $('#settlement_div').fadeOut("slow");
       $('#square').html('(m<sup>2</sup>)');

    } else if (type_id == 5) {
       $('#space_div').fadeIn("slow");
       $('#office_kind_div').fadeOut("slow");
       $('#rooms_div').fadeOut("slow");
       $('#floor_div').fadeOut("slow");
       $('#building_floor_div').fadeOut("slow");
       $('#settlement_div').fadeOut("slow");
       $('#square').html('(m<sup>2</sup>)');

    } else if (type_id == 6) {

       $('#office_kind_div').fadeIn("slow");
       $('#rooms_div').fadeIn("slow");
       $('#space_div').fadeOut("slow");
       $('#floor_div').fadeOut("slow");
       $('#building_floor_div').fadeOut("slow");
       $('#settlement_div').fadeOut("slow");
       $('#square').html('(m<sup>2</sup>)');

    } else if (type_id == 8) {
       $('#rooms_div').fadeOut("slow");
       $('#space_div').fadeOut("slow");
       $('#floor_div').fadeOut("slow");
       $('#building_floor_div').fadeOut("slow");
       $('#settlement_div').fadeOut("slow");
       $('#square').html('(sot)');
    } else {
       $('#rooms_div').fadeOut("slow");
       $('#space_div').fadeOut("slow");
       $('#floor').fadeOut("slow");
       $('#building_floor_divui').fadeOut("slow");
       $('#settlement_div').fadeOut("slow");
       $('#square').html('(m<sup>2</sup>)');
    }
 });
   
   $('#city_id').on("change", function(e) {
     var city_id = $(this).val();
     if (city_id == 8) {
       $.ajax({
         url: url + '/core/ajax/get_regions.php',
         method: "POST",
         data: {
           city_id:city_id
        },
        success: function(data) {
           data_parsed = JSON.parse(data);
           $.each(data_parsed, function(i, value) {
             $('#region_id').append('<option value='+data_parsed.id+'>'+data_parsed.region_name+'</option>');
          });

           $('#regions_div').fadeIn("slow");
        }
     });

    } else {
       $('#regions_div').fadeOut("slow");
       $('#settlement_div').fadeOut("slow");
    }
 });
   
   $('#region_id').on("change", function(e) {
     var region_id = $(this).val();
     $.ajax({
       url: url + '/core/ajax/get_settlements.php',
       method: "POST",
       data: {
         region_id:region_id
      },
      success: function(data) {
         data_settlement_parsed = JSON.parse(data);
         console.log(data_settlement_parsed);
         if(data_settlement_parsed.content_settlement == 'yes')
         {
           $.each(data_settlement_parsed, function(i, value) {
             $('#settlements_div').fadeIn("slow");
             $('#settlement_id').append('<option value='+data_settlement_parsed.settlement_id+'>'+data_settlement_parsed.settlement_name+'</option>');
          });
        } 
        else 
        {
           $('#settlements_div').fadeOut("slow");
        }


     }
  });

  });

   $('#region_id').on("change", function(e) {
     var region_id = $(this).val();
     $.ajax({
       url: url + '/core/ajax/get_hashtags.php',
       method: "POST",
       data: {
         region_id:region_id
      },
      success: function(data) {
         data_settlement_parsed = JSON.parse(data);
         console.log(data_settlement_parsed);


         if(data_settlement_parsed.content_hashtag == 'yes')
         {
           $.each(data_settlement_parsed, function(i, value) {
             $('#hashtags_div').fadeIn("slow");
             $('#hashtag_id').append('<option value='+data_settlement_parsed.hashtag_id+'>'+data_settlement_parsed.hashtag_id+'</option>');
          });
        } 
        else 
        {
           $('#hashtags_div').fadeOut("slow");
        }


     }
  });

  });



   
   
</script>