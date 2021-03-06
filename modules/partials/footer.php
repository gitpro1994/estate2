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
<script src="<?= site_url() ?>assets/js/iziModal.min.js"></script>
<script src="<?= site_url() ?>/assets/js/dropzone.js"></script>
<script src="<?= site_url() ?>/assets/js/jquery.cookie.js"></script>
<script src="<?= site_url() ?>/assets/js/toast.js"></script>
<?php if ($page == "items") { ?>
    <script src="<?= site_url() ?>/assets/js/jquery.nice-select.min.js"></script>
<?php } ?>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('.js-example-basic-single').select2({
            placeholder: '<?= translate('select_an_option') ?>'
        });
        $('.js-example-basic-multiple').select2({
            placeholder: '<?= translate('select_an_option') ?>'
            // tags: true
        });
    });

    //##################### LOGIN #####################

    $(document).ready(function() {

        /* SEARCH FORM */
        $("#search_button").click(function(e) {
            e.preventDefault();
            // $(".home_default").hide();
            // let city        = $("#city").val(); 
            // let keyword     = $("#keyword").val(); 
            // let bedroom     = $("#bedroom").val(); 
            // let menzil_type = $("#menzil_type").val();
            var form = $("#search-form").serialize();
            var url  = $("#base_url").val();
            $.ajax({
                 url: url + '/core/ajax/search.php',
                 method: "POST",
                 data: form,
                 success: function(data) {
                    // parsed_data = JSON.parse(data);
                    // console.log(parsed_data);
                    // if (settlement.length != 0) {
                    //    $('#settlements_div').fadeIn("slow");
                    //    for (var i = 0; i < settlement.length; i++) {
                    //       $('#settlement_id').append('<option value=' + settlement[i].settlement_id + '>' + settlement[i].settlement_name + '</option>');
                    //    }

                    // } else {
                    //    $('#settlement_id').val("");
                    //    $('#settlement_id').attr("required", false);
                    //    $('#settlements_div').fadeOut("slow");
                    // }
                 }
              });
        });


        $("#login").click(function(e) {
            e.preventDefault();
            let self = $(this);
            e.preventDefault();
            self.prop("disabled", true);

            var data = $("#login-form").serialize();
            var url = $("#base_url").val();
            $.ajax({
                url: url + '/core/ajax/login.php',
                type: "POST",
                data: data,
            }).done(function(res) {
                res = JSON.parse(res);
                if (res.status == 100) {
                    Swal.fire({
                        title: res.info,
                        text: res.message,
                        icon: res.icon,
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        cancelButtonText: '<?= translate('cancel') ?>',
                        confirmButtonText: '<?= translate('activate_account') ?>'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $.ajax({
                                url: "core/ajax/updatef_account.php",
                                type: "POST",
                                data: data,
                                success: function(data) {
                                    response = JSON.parse(data);
                                    if (response.status == 200) {
                                        Toast.fire({
                                            heading: 'Uğurlu!',
                                            text: response.message,
                                            showHideTransition: 'slide',
                                            icon: response.icon,
                                            loaderBg: '#fff',
                                            position: 'top-right'
                                        });
                                        location.href = "dashboard";
                                    } else if (response.status == 204) {

                                        Toast.fire({
                                            heading: 'Xəta',
                                            text: response.message,
                                            showHideTransition: 'slide',
                                            icon: response.icon,
                                            loaderBg: '#fff',
                                            position: 'top-right'
                                        })
                                    }
                                }
                            })

                        }
                    })
                } else if (res.status == 101) {
                    Toast.fire({
                        icon: res.icon,
                        text: res.message,
                    })
                } else if (res.status == 200) {
                    location.href = "dashboard";
                } else {
                    Toast.fire({
                        icon: res.icon,
                        title: res.message
                    });
                    self.prop("disabled", false);
                }

            }).fail(function() {
                Toast.fire({
                    icon: "error",
                    title: "Undefined Error"
                });
            }).always(function() {
                self.prop("disabled", false);
            });
        });
    });

    //#################### REGISTER ####################


    $(document).ready(function() {
        $("#register").click(function(e) {

            e.preventDefault();
            let self = $(this);
            e.preventDefault();
            self.prop("disabled", true);

            var data = $("#register-form").serialize();
            var url = $("#base_url").val();
            $.ajax({
                url: url + '/core/ajax/register.php',
                type: "POST",
                data: data,
            }).done(function(res) {
                res = JSON.parse(res);
                if (res.status == 204) {
                    Toast.fire({
                        icon: res.icon,
                        title: res.message,
                    })
                } else if (res.status == 200) {
                    location.href = "dashboard";
                } else {
                    Toast.fire({
                        icon: res.icon,
                        title: res.message
                    });
                    self.prop("disabled", false);
                }

            }).fail(function() {
                Toast.fire({
                    icon: "error",
                    title: "Undefined Error"
                });
            }).always(function() {
                self.prop("disabled", false);
            });
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        let url = $("#base_url").val();
        //Phone mask
        if ($("#phone_number").length > 0) {
            $("#phone_number").mask("9999999999");
        }

        //Form validation
        $("#check_number").click(function() {
            $('#check_number').prop("disabled", false);

            var form = $("#add_new_listing")

            if (form[0].checkValidity() === false) {
                event.preventDefault()
                event.stopPropagation()
            }
            form.addClass('was-validated');
            $("#estate_section").hide(1000);
            var phone_number = $('#phone_number').val();
            var name = $('#name').val();
            var email = $('#email').val();
            var user_kind = $('#type').val();
            let user_kind_with_int = Number(user_kind);
            console.log(user_kind_with_int);
            var url = $("#base_url").val();
            if (phone_number.length>0 && name.length>0 && email.length>0 && Number.isInteger(user_kind_with_int)) 
            {
                $('#check_number').prop("disabled", true);
                $.ajax({
                    url: url + "core/ajax/get_user.php",
                    method: "POST",
                    data: {
                        phone_number: phone_number
                    },
                    success: function(data) {
                        data = JSON.parse(data);
                        if (data['status'] == 200) {
                            $("#name").val(data.name + ' ' + data.surname);
                            $("#email").val(data.email);
                            $("#phone_number").val(data.phone_number);
                            $("#name").attr("disabled", true);
                            $("#email").attr("disabled", true);
                            $("#phone_number").attr("disabled", true);
                            $('#type').find('option[value="' + data.user_kind + '"]').attr('selected', true);
                            $('#check_number').prop("disabled", false);
                            $('#check_number').css("display", "none");
                            $("#estate_section").show(1000);
                            Toast.fire({
                                icon: data['icon'],
                                title: data['message']
                            })
                        } else if (data['status'] == 204) {
                            $("#name").val();
                            $("#email").val();
                            $("#name").attr("disabled", false);
                            $("#email").attr("disabled", false);
                            $('#check_number').prop("disabled", false);
                            $('#check_number').css("display", "none");
                            $("#estate_section").show(1000);
                            Toast.fire({
                                icon: data['icon'],
                                title: data['message']
                            })
                        } else {
                            $("#name").val();
                            $("#email").val();
                            $("#name").attr("disabled", false);
                            $("#email").attr("disabled", false);
                            $('#check_number').prop("disabled", false);
                            $("#estate_section").hide(1000);
                            Toast.fire({
                                icon: data['icon'],
                                title: data['message']
                            })
                        }
                    }
                })
            }
            else 
            {
                Toast.fire({
                    icon: 'error',
                    title: '<?= translate('enter_all_the_information') ?>'
                })
            }

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