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
               <form id="add_new_listing" class="forms-sample" method="POST" enctype="multipart/form-data">
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

          <div class="form-group mb-3 row">
           <label for="type" class="col-sm-4 col-form-label">Əlaqədar şəxs</label>
           <div class="col-sm-8">
              <select class="js-example-basic-single" id="type" name="user_kind" style="width:100%"  required>
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

      <div class="mb-3 row">
        <label for="kind_id" class="col-sm-4 col-form-label"><?= translate('realty_kinds') ?></label>
        <div class="col-sm-8">
         <select required name="kind_id" id="kind_id"  class="js-example-basic-single">
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

<div class="mb-3 row">
  <label for="type_id" class="col-sm-4 col-form-label"><?= translate('realty_types') ?></label>
  <div class="col-sm-8">
   <select required name="type_id" id="type_id"  class="js-example-basic-single" >
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
      <select required name="city_id" id="city_id"  class="js-example-basic-single">
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
      <select required name="office_kind" id="office_kind" class="js-example-basic-single" >
         <option value=""><?= translate('please_select_one_item') ?></option>
         <option value="0">Biznes mərkəzi</option>
         <option value="1">Ev / Mənzil</option>
         <option value="2">Villa</option>
      </select>
   </div>
</div>

<div class="mb-3 row" id="area_div">
  <label for="area" class="col-sm-4 col-form-label"><?= translate('area') ?> <span id="square"></span><span class="dec-icon"><i class="far fa-warehouse"></i></span></label>
  <div class="col-sm-8">
   <input  name="area" required type="text" id="area" class="form-control" placeholder="<?= translate("enter_area") ?>">
</div>
</div>

<div class="mb-3 row" id="space_div">
  <label for="space" class="col-sm-4 col-form-label"><?= translate('space') ?> <span>(sot)</span><span class="dec-icon"><i class="far fa-warehouse"></i></span></label>
  <div class="col-sm-8">
   <input  name="space" type="text" id="space" class="form-control" placeholder="<?= translate("enter_space") ?>">
</div>
</div>

<div class="mb-3 row" id="rooms_div">
  <label for="rooms" class="col-sm-4 col-form-label"><?= translate('rooms') ?><span class="dec-icon"><i class="far fa-warehouse"></i></span></label>
  <div class="col-sm-8">
   <input  name="rooms" type="text" id="rooms" class="form-control" placeholder="<?= translate("enter_room_count") ?>">
</div>
</div>

<div class="mb-3 row" id="floor_div">
  <label for="floor_no" class="col-sm-4 col-form-label"><?= translate('floor_no') ?><span class="dec-icon"><i class="far fa-warehouse"></i></span></label>
  <div class="col-sm-8">
   <input  name="floor_no" type="text" id="floor_no" class="form-control" placeholder="<?= translate("enter_floor_number") ?>">
</div>
</div>

<div class="mb-3 row" id="building_floor_div">
  <label for="building_floor_no" class="col-sm-4 col-form-label"><?= translate('building_floor_no') ?><span class="dec-icon"><i class="far fa-warehouse"></i></span></label>
  <div class="col-sm-8">
   <input  name="building_floor_no" type="text" id="building_floor_no" class="form-control" placeholder="<?= translate("enter_building_floor_no") ?>" >
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

<div class="mb-3 row" id="mortgage_div">
   <label for="mortgage" class="col-sm-4 col-form-label"><?= translate('mortgage') ?></label>
   <div class="col-sm-8">
      <label class="form-check-label" for="ipoteka">
         <input class="form-radio-input" name="mortgage" type="radio" value="0" id="mortgage">
         <?= translate('ipoteka') ?>
      </label>
      <br>                           
      <label class="form-check-label" for="kupcha">
         <input class="form-radio-input" name="mortgage" type="radio" value="1" id="mortgage">
         <?= translate('kupcha') ?>
      </label>
   </div>
</div>

<div class="mb-3 row" id="address_div">
  <label for="address" class="col-sm-4 col-form-label"><?= translate('address') ?><span class="dec-icon"><i class="far fa-warehouse"></i></span></label>
  <div class="col-sm-8">
   <input  name="address" type="text" id="address" class="form-control" placeholder="<?= translate("enter_address") ?>" required>
</div>
</div>

<div class="mb-3 row" id="regions_div">
   <label for="region_id" class="col-sm-4 col-form-label"><?= translate('regions') ?></label>
   <div class="col-sm-8">
      <select name="region_id" id="region_id" class="form-control">
         <option value=""><?= translate('please_select_one_item') ?></option>
         <?php 
         $rk  = "SELECT * FROM regions WHERE status=1";
         $rkr = mysqli_query($conn,$rk);
         while ($rayon = mysqli_fetch_array($rkr)) {
          ?>
          <option value="<?= $rayon['id'] ?>">
            <?= translate($rayon['region_name']) ?>
         </option>
      <?php } ?>
   </select>
</div>
</div>

<div class="mb-3 row" id="hashtags_div">
   <label for="hashtags" class="col-sm-4 col-form-label"><?= translate('hashtags') ?></label>
   <div class="col-sm-8">
      <select  name="hashtag_id" id="hashtag_id" class="form-control">
         <option value=""><?= translate('please_select_one_item') ?></option>
      </select>
   </div>
</div>

<div class="mb-3 row" id="settlements_div">
   <label for="settlements" class="col-sm-4 col-form-label"><?= translate('settlements') ?></label>
   <div class="col-sm-8">
      <select name="settlement_id" id="settlement_id" class="form-control">
         <option value=""><?= translate('please_select_one_item') ?></option>
      </select>
   </div>
</div>

<div class="mb-3 row" id="settlements_div">
   <label for="images" class="col-sm-4 col-form-label"><?= translate('images') ?></label>
   <div class="col-sm-8">
      <input type="hidden" name="estate_photos" id="foto">
      <input id="uplbtn" class="col-12" required type="button" value="<?= translate('add_images') ?>" multiple><br>
      <pform action="uploadfile" class="dropzone dz-clickable" id="my-dropzone">
         <div class="dz-default dz-message"><span></span></div>
      </pform>
   </div>
</div>


<div class="mb-3 row">
  <div class="col-sm-8 float-right">
   <button type="submit" name="add_new" id="add_new"  class="btn btn-outline-success "><?= translate('save') ?></button>
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
   else if(n>=5)
   {
      Toast.fire({
       icon: 'warning',
       title: 'Maksimum şəkil limitini doldurdunuz.'
    })
   }
   else
   {
      Toast.fire({
       icon: 'warning',
       title: 'Zəhmət olmasa şəkil seçin.'
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
       $('#mortgage').attr("required", true);
       $('#payment_method_div').hide();
       $('#payment_method').attr("required", false);
    } else if (kind_id == 2) {
       $('#mortgage_div').hide();
       $('#mortgage').attr("required", false);
       $('#payment_method_div').fadeIn("slow");
       $('#payment_method').attr("required", true);
    }
    // he ela isledi nese deyirdin? yox ayqa daavam eliyim ?
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

       $('#rooms').attr("required", true);
       $('#floor_no').attr("required", true);
       $('#building_floor_no').attr("required", true);
       $('#office_kind').attr("required", false);
       $('#space').attr("required", false);
       $('#settlement_id').attr("required", false);
       $('#square').html('m<sup>2</sup>');


    } else if (type_id == 4) {


       $('#rooms_div').fadeIn("slow");
       $('#space_div').fadeIn("slow");
       $('#floor_div').fadeOut("slow");
       $('#building_floor_div').fadeOut("slow");
       $('#office_kind_div').fadeOut("slow");
       $('#settlement_div').fadeOut("slow");
       $('#square').html('(m<sup>2</sup>)');

       $('#rooms').attr("required", true);
       $('#space').attr("required", true);
       $('#floor_no').attr("required", false);
       $('#building_floor_no').attr("required", false);
       $('#office_kind').attr("required", false);
       $('#settlement_id').attr("required", false);

    } else if (type_id == 5) {
       $('#space_div').fadeIn("slow");
       $('#office_kind_div').fadeOut("slow");
       $('#rooms_div').fadeOut("slow");
       $('#floor_div').fadeOut("slow");
       $('#building_floor_div').fadeOut("slow");
       $('#settlement_div').fadeOut("slow");
       $('#square').html('(m<sup>2</sup>)');

       $('#space').attr("required", true);
       $('#office_kind').attr("required", false);
       $('#rooms').attr("required", false);
       $('#floor_no').attr("required", false);
       $('#building_floor_no').attr("required", false);
       $('#settlement_id').attr("required", false);


    } else if (type_id == 6) {

       $('#office_kind_div').fadeIn("slow");
       $('#rooms_div').fadeIn("slow");
       $('#space_div').fadeOut("slow");
       $('#floor_div').fadeOut("slow");
       $('#building_floor_div').fadeOut("slow");
       $('#settlement_div').fadeOut("slow");
       $('#square').html('(m<sup>2</sup>)');

       $('#office_kind').attr("required", true);
       $('#rooms').attr("required", true);
       $('#space').attr("required", false);
       $('#floor_no').attr("required", false);
       $('#building_floor_no').attr("required", false);
       $('#settlement_id').attr("required", false);

    } else if (type_id == 8) {

       $('#rooms_div').fadeOut("slow");
       $('#space_div').fadeOut("slow");
       $('#floor_div').fadeOut("slow");
       $('#building_floor_div').fadeOut("slow");
       $('#settlement_div').fadeOut("slow");
       $('#square').html('(sot)');

       $('#rooms').attr("required", false);
       $('#space').attr("required", false);
       $('#floor_no').attr("required", false);
       $('#building_floor_no').attr("required", false);
       $('#settlement_id').attr("required", false);

    } else {

       $('#rooms_div').fadeOut("slow");
       $('#space_div').fadeOut("slow");
       $('#floor').fadeOut("slow");
       $('#building_floor_divui').fadeOut("slow");
       $('#settlement_div').fadeOut("slow");
       $('#square').html('(m<sup>2</sup>)');

       $('#rooms').attr("required", false);
       $('#space').attr("required", false);
       $('#floor_no').attr("required", false);
       $('#building_floor_no').attr("required", false);
       $('#settlement_id').attr("required", false);

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

           $('#regions_div').fadeIn("slow"); 
           for (var i = 0; i < data_parsed.length; i++)
           {
             $('#region_id').append('<option value='+data_parsed[i].id+'>'+data_parsed[i].region_name+'</option>');
           }
       }

    });

    } else {
       $('#regions_div').fadeOut("slow");
       $('#settlement_div').fadeOut("slow");
    }
 });
   
   $('#region_id').on("change", function(e) {
     var region_id = $(this).val();
     var settlement_id = $("#settlement_id").val("");
    
     $.ajax({
       url: url + '/core/ajax/get_settlements.php',
       method: "POST",
       data: {
         region_id:region_id
      },
      success: function(data) {
         settlement = JSON.parse(data);
         console.log(settlement);
         if(settlement.length != 0)
         {
           $('#settlements_div').fadeIn("slow");
           for (var i = 0; i < settlement.length; i++)
           {
            $('#settlement_id').append('<option value='+settlement[i].settlement_id+'>'+settlement[i].settlement_name+'</option>');
           }
        
         } 
         else 
         {
           $('#settlement_id').val(""); 
           $('#settlement_id').attr("required",false); 
           $('#settlements_div').fadeOut("slow");
         }
  }
});

  });

   $('#region_id').on("change", function(e) {
     var region_id = $(this).val();
     var hashtag_id = $("#hashtag_id").val("");
     $.ajax({
       url: url + '/core/ajax/get_hashtags.php',
       method: "POST",
       data: {
         region_id:region_id
      },
      success: function(data) {
         hashtags = JSON.parse(data);
         console.log(hashtags);
         if(hashtags.length != 0)
         {
            $('#hashtags_div').fadeIn('slow');
            for (var i = 0; i < hashtags.length; i++)
            {
               $('#hashtag_id').append('<option value='+hashtags[i].hashtag_id+'>'+hashtags[i].hashtag_name+'</option>');
            } 
         }
         else 
         {
           $("#hashtag_id").val(""); 
           $("#hashtag_id").attr("required",false); 
           $('#hashtags_div').fadeOut("slow");
         }

     }
  });

  });

   $('#add_new').click(function (e) {
   
   var is_empty = false;
   $('[required]').each( function(idx, elem) {
       is_empty = is_empty || ($(elem).val() == '');
   });
   if ( ! is_empty) {
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
}
else
{
   console.log("BOSDUR");
}
});

   
   
</script>