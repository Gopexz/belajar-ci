<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url('assets/jquery/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

<!-- Core plugin JavaScript-->
<script src="<?php echo base_url('assets/jquery-easing/jquery.easing.min.js') ?>"></script>
<!-- Page level plugin JavaScript-->
<script src="<?php echo base_url('assets/chart.js/Chart.min.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables/dataTables.bootstrap4.js') ?>"></script>
<!-- Custom scripts for all pages-->
<script src="<?php echo base_url('js/sb-admin.min.js') ?>"></script>
<!-- Demo scripts for this page-->
<script src="<?php echo base_url('js/demo/datatables-demo.js') ?>"></script>
<script src="<?php echo base_url('js/demo/chart-area-demo.js') ?>"></script>
<script>
function deleteConfirm(url){
	$('#btn-delete').attr('href', url);
	$('#deleteModal').modal();
}
</script>
<!-- JQUERY SCRIPTS -->
<script src="plugins/jquery/jquery-1.11.1.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="plugins/flexslider/jquery.flexslider.js"></script>
<script src="plugins/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="plugins/selectbox/jquery.selectbox-0.1.3.min.js"></script>
<script src="plugins/pop-up/jquery.magnific-popup.js"></script>
<script src="plugins/animation/waypoints.min.js"></script>
<script src="plugins/count-up/jquery.counterup.js"></script>
<script src="plugins/animation/wow.min.js"></script>
<script src="plugins/animation/moment.min.js"></script>
<script src="plugins/calender/fullcalendar.min.js"></script>
<script src="plugins/owl-carousel/owl.carousel.js"></script>
<script src="plugins/timer/jquery.syotimer.js"></script>
<script src="plugins/smoothscroll/SmoothScroll.js"></script>
<script src="js/custom.js"></script>
<script>
$(window).load(function(){
$('.version2 ').each(function(){
  var header_area = $('.header-v2');
  var main_area = header_area.children('.header');

  var logo = main_area.find('.navbar-header');
  var navigation = main_area.find('.navbar-collapse');
  var original = {
    nav_top: navigation.css('margin-top')
  };

  $(window).scroll(function(){
    if( main_area.hasClass('bb-fixed-header') && ($(this).scrollTop() === 0 )){
      main_area.removeClass('bb-fixed-header').appendTo(header_area);
      navigation.animate({'margin-top': original.nav_top}, {duration: 300, queue: false, complete: function(){
        header_area.css('height', 'auto');
      }});
    }else if( !main_area.hasClass('bb-fixed-header') && $(this).width() > 250 &&
      $(this).scrollTop() > header_area.offset().top + header_area.height() - parseInt($('html').css('margin-top'),10) ){
      header_area.css('height', header_area.height());
      main_area.css({'opacity': '0'}).addClass('bb-fixed-header');
      main_area.appendTo($('body')).animate({'opacity': 1});

      navigation.css({'margin-top': '0px'});
    }
  });
});

$(window).trigger('resize');
$(window).trigger('scroll');
});
</script>