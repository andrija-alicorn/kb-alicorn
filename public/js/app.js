function myFunction() {
    document.getElementsByClassName("topnav")[0].classList.toggle("responsive");
}

/* COMMENTS LAST BORDER REMOVAL */
$(function() {
  var comments = $('div.article-comment-top');
  var last = comments.last();
  last.css({ borderBottom : 'none' });

  $("#category").change(function(){
      var selector = $(this).find("option:selected").data("category");
      if (selector == "all") {
          $("#subcategory option").show();
      }
      else {
          $("#subcategory option:not(.all)").hide();
          $("#subcategory option.category-"+selector).show();
          $("#subcategory option.all").prop("selected", true);
      }
    });
        
});
