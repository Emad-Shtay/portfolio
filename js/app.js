/* ------------------------------------------------------------
 * Only works nice in fullscreen :I
 * Test it out, just open the link in the corner in a new tab!
 > ------------------------------------------------------------
 */

$(document).ready(function() {
    $('#body').width('600px').height('600px');
    $('#abutton').on('click', albert);
    function albert() {
      $('h1').html('<span>Oh</span> <span>gosh</span><span>,</span> <span>it</span> <span>crashed!</span><span>"!"+!</span>');
      $(' span, button,svg').attr('style', 'cursor:move !important;')

      $('body').jGravity({
        target: 'span',
        ignoreClass: 'ignoreMe',
        weight: 25,
        depth: 50,
        drag: true
      });
      $('#abutton').off('click', albert);
    }
  });