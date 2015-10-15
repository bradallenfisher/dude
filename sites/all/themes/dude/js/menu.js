(function ($) {
  $(document).ready(function () {
    $('.menu-button').click(
      function () {
        $('ul.menu').toggleClass('open');
      }
    );
    $('a.open').click(
      function () {
        $('.phase-more').toggleClass('open');
        $('a.open').hide();
      }
    );
    $('a.close').click(
      function () {
        $('.phase-more').removeClass('open');
        $('a.open').show();

      }
    );
  });
})(jQuery);
