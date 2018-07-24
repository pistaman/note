function deletePost(e){
  'use.strict';

  if (confirm('本当に削除しますか？')) {
    document.getElementById('form_' + e.dataset.id).submit();
  }
};


$(function() {
  $('.post__side--content').hide();
  $('.post__side--content').eq(0).show();
  $('.post__tab--toggle').eq(0).addClass('active');
  $('.post__tab--toggle').each(function () {
    $(this).on('click', function () {
      var index = $('.post__tab--toggle').index(this);
      $('.post__tab--toggle').removeClass('active');
      $(this).addClass('active');
      $('.post__side--content').hide();
      $('.post__side--content').eq(index).show();
    });
  });
});
