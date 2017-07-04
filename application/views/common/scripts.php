<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- BLOCK SCRIPTS -->
<!-- Jquery -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<!-- Bootstrap -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript">
!function ($) { //ensure $ always references jQuery
  $(function () { //when dom has finished loading
    //make top text appear aligned to bottom: http://stackoverflow.com/questions/13841387/how-do-i-bottom-align-grid-elements-in-bootstrap-fluid-layout
    function fixHeader() {
      //for each element that is classed as 'pull-down'
      //reset margin-top for all pull down items
      $('.pull-down').each(function () {
        $(this).css('margin-top', 0);
      });

      //set its margin-top to the difference between its own height and the height of its parent
      $('.pull-down').each(function () {
        if ($(window).innerWidth() >= 768) {
          $(this).css('margin-top', $(this).parent().height() - $(this).height());
        }
      });
    }

    $(window).resize(function () {
      fixHeader();
    });

    fixHeader();
  });
}(window.jQuery);
</script>
<!-- FIN BLOCK SCRIPTS -->
