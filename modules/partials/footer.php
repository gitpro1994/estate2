<footer class="footer-area">
   <div class="footer-bottom footer-bottom-style-2">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-lg-4 col-md-4">
               <div class="copyright-area1">
                  <ul>
                     <li><a href="#"><?= translate('terms_&_conditions') ?></a></li>
                     <li><a href="#"><?= translate('privacy_policy') ?></a></li>
                  </ul>
               </div>
            </div>
            <div class="col-lg-8 col-md-8">
               <div class="copyright-area2">
                  <p><?= settings("frontend_footer_text") ?></p>
               </div>
            </div>
         </div>
      </div>
   </div>
</footer>
<!-- start back to top -->
<a href="javascript:void(0)" id="back-to-top">
<i class="fas fa-angle-double-up"></i>
</a>
<!-- End back to top -->
</div>
<div id="template-search" class="template-search">
   <button type="button" class="close">×</button>
   <form class="search-form" id="mobile_search">
      <input type="search" value="" placeholder="<?= translate('search_with_estate_number') ?>" />
      <button type="submit" class="search-btn btn-ghost style-1">
      <i class="flaticon-search"></i>
      </button>
   </form>
</div>
<script src="<?= site_url() ?>assets/js/jquery-3.6.0.min.js"></script>
<script src="<?= site_url() ?>assets/js/popper.min.js"></script>
<script src="<?= site_url() ?>assets/js/bootstrap.min.js"></script>
<script src="<?= site_url() ?>assets/js/wow.min.js"></script>
<script src="<?= site_url() ?>assets/vendor/owlcarousel/owl.carousel.min.js"></script>
<script src="<?= site_url() ?>assets/js/swiper-bundle.min.js"></script>
<script src="<?= site_url() ?>assets/js/jquery.appear.min.js"></script>
<script src="<?= site_url() ?>assets/js/jquery.magnific-popup.min.js"></script>
<script src="<?= site_url() ?>assets/js/parallaxie.js"></script>
<script src="<?= site_url() ?>assets/js/tween-max.js"></script>
<script src="<?= site_url() ?>assets/js/appear.min.js"></script>
<script src="<?= site_url() ?>assets/js/isotope.pkgd.min.js"></script>
<script src="<?= site_url() ?>assets/js/imagesloaded.pkgd.min.js"></script>
<script src="<?= site_url() ?>assets/vendor/noUiSlider/nouislider.min.js"></script>
<script src="<?= site_url() ?>assets/vendor/noUiSlider/wNumb.js"></script>
<script src="<?= site_url() ?>assets/js/validator.min.js"></script>
<script src="<?= site_url() ?>assets/js/pannellum.js"></script>
<script src="<?= site_url() ?>assets/js/jquery.zoom.min.js"></script>
<script src="<?= site_url() ?>assets/js/main.js"></script>
<script src="<?= site_url() ?>assets/js/masked_input.js"></script>
<script src="<?= site_url()?>assets/js/iziModal.min.js"></script>
<script src="<?= site_url()?>/assets/js/dropzone.js"></script>

<script type="text/javascript">

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
   
let url = $("#base_url").val();
 //##################### LOGIN #####################

 
  $(document).ready(function() {
            $('#login').click(function(e) {
                e.preventDefault();
                let self = $(this);
                e.preventDefault(); // prevent default submit behavior
                self.prop('disabled', true);
                let url = "<?= site_url() ?>";
                var data = $('#rtcl-login-form').serialize(); // get form data
                // sending ajax request to login.php file, it will process login request and give response.

                $.ajax({
                    url: url + '/core/ajax/login.php',
                    type: "POST",
                    data: data,
                }).done(function(res) {
                    res = JSON.parse(res);
                    // if login successful redirect user to secure.php page.
                    if (res['status']==200) 
                    {
                        location.href = "dashboard"; // redirect user to secure.php location/page.
                    } else {
                        
                        // if there is any errors convert array of errors into html string, 
                        //here we are wrapping errors into a paragraph tag.
                        $.each(res['msg'], function(index, message) {
                            Toast.fire({
                               icon: res['icon'],
                               title: res['message'],
                            });
                        });
                        
                        self.prop('disabled', false);
                    }
                }).fail(function() {
                    alert("error");
                }).always(function() {
                    self.prop('disabled', false);
                });
            });
         });

</script>

<script type="text/javascript">
$(document).ready(function() {  
   let url = $("#base_url").val();
   //Phone mask
   if ($("#phone_number").length > 0) 
   {
      $("#phone_number").mask("9999999999");
   }

  //Form validation
   $("#check_number").click(function() {
      $('#check_number').prop("disabled",true);

      var form = $("#add_new_listing")

      if (form[0].checkValidity() === false) 
      {
         event.preventDefault()
         event.stopPropagation()
      }
      form.addClass('was-validated');
      $("#estate_section").hide(1000);
      var phone_number = $('#phone_number').val();
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
                  $("#name").val(data.name+' '+data.surname);
                  $("#email").val(data.email);
                  $("#phone_number").val(data.phone_number);
                  $("#name").attr("disabled",true);
                  $("#email").attr("disabled",true);
                  $("#phone_number").attr("disabled",true);
                  $('#type').find('option[value="'+data.user_kind+'"]').attr('selected', true);
                  $('#check_number').prop("disabled",false);
                  $('#check_number').css("display","none");
                  $("#estate_section").show(1000);
                  Toast.fire({
                    icon: data['icon'],
                    title: data['message']
                })
              }  else if(data['status']==204){
                  $("#name").val();
                  $("#email").val();
                  $("#name").attr("disabled",false);
                  $("#email").attr("disabled",false);
                  $('#check_number').prop("disabled",false);
                  $('#check_number').css("display","none");
                  $("#estate_section").show(1000);
                  Toast.fire({
                    icon: data['icon'],
                    title: data['message']
                })
              } else {
                  $("#name").val();
                  $("#email").val();
                  $("#name").attr("disabled",false);
                  $("#email").attr("disabled",false);
                  $('#check_number').prop("disabled",false);
                  $("#estate_section").hide(1000);
                  Toast.fire({
                    icon: data['icon'],
                    title: data['message']
                })
              }
          }
         })

  })



/****** IZI MODAL LANGUAGE *****/
$("#modal-demo").iziModal({
        title: "",
        subtitle: "",
        iconClass: '',
        background: null,
        theme: 'light',
        closeButton: true,
        overlay: true,
        overlayClose: true,
        transitionInOverlay: 'fadeIn',
        transitionOutOverlay: 'fadeOut',
        overlayColor: 'rgba(0, 0, 0, 0.85)',
        width: 500,
        padding: 20
    });
    $(document).on('click', '.trigger-link', function(event) {
        event.preventDefault();
        $('#modal-demo').iziModal('open');
    });
/******************************/
})
</script>


</body>
</html>