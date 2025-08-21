// $(function () { // if document is ready
//   alert('hello world')
// });

$(function () {
  $(".menu-btn").on("click", function () {
    $(this).next().slideToggle(300);
    $(this).toggleClass("open", 300);
  });
});
