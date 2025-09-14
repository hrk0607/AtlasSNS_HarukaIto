// $(function () { // if document is ready
//   alert('hello world')
// });

$(function () {
  $(".menu-btn").on("click", function () {
    // ボタンにopenクラスを付け外し
    $(this).toggleClass("open");

    // クリックしたボタンの親(.accordion)内の.menuを取得して開閉
    $(this).closest(".accordion").find(".menu").slideToggle(300);
  });

  // メニュー以外をクリックしたらメニューを閉じる
  $(document).on("click", function (e) {
    if (!$(e.target).closest(".accordion").length) {
      $(".menu").slideUp(300);
      $(".menu-btn").removeClass("open");
    }
  });
});
$(function () {
  // 編集ボタンが押されたとき
  $('.js-edit-btn').on('click', function () {
    var post_id = $(this).data('id');           // 投稿id
    var post_content = $(this).data('content'); // 投稿内容

    // テキストエリアに値を入れる
    $('.modal_post').val(post_content);
    $('.modal_id').val(post_id);

    // フォームのactionをid付きにする
    $('#editForm').attr('action', '/posts/' + post_id);

    // モーダルを表示
    $('.js-modal').fadeIn();
    return false;
  });

  // 閉じる
  $('.js-modal-close').on('click', function () {
    $('.js-modal').fadeOut();
    return false;
  });
});

$(function () {
  $('.js-delete-btn').on('click', function () {
    var postId = $(this).data('id');
    $('#deleteForm').attr('action', '/posts/' + postId);
    $('.js-delete-modal').fadeIn();
  });

  $('.js-modal-close').on('click', function () {
    $('.js-delete-modal').fadeOut();
  });
});
