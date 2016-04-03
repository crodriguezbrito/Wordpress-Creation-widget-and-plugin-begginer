jQuery(document).ready( function($) {
  $("div.tpp_posts").mouseover( function() {
	  var div = $(this);
	    
    /* only fetch results once */
   // $(this).unbind('mouseover').bind('mouseover', function(){return false;});
    
    $.post('wp-admin/admin-ajax.php', {
        action: "tpp_comments",
        post_id: $(this).find("a").attr("id")
      }, function(data) {
        div.append($(data));
      }
    );
    return false;
  });

  $("div.tpp_posts").mouseout( function() {
	  
	  $("#post").remove();
	  
  });
});