<meta http-equiv="content-type" content="text/html;charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" type="text/css" href="../css/default.css">
<script type="text/javascript" src="../js/jquery-1.10.1.min.js"></script>
<script type="text/javascript" src="../js/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="../js/jquery.quovolver.min.js"></script>
<script type="text/javascript" src="../js/jquery.queryloader2.js"></script>
<script src="../js/jquery.slicknav.min.js"></script>
<script>
   $(document).ready(function () {
    $("body").queryLoader2({
        barColor: "#f98900",
        backgroundColor: "#fff",
        percentage: true,
        barHeight: 2,
        completeAnimation: "fade"
    });
}); </script>
<script>$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
</script>