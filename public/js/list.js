function deletePost(e){
  'use.strict';

  if (confirm('本当に削除しますか？')) {
    document.getElementById('form_' + e.dataset.id).submit();
  }
};


$(document).ready(function(){
  $("#session__message").fadeOut(3000);
});
