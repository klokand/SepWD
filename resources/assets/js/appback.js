/*create blog editor*/
 	$('#blogContent').jqte({
		format: false,
		fsize: false,
		placeholder:true,
		placeholder: "description",
	});
	
	$('#blog_saveButton').click (function () {
		var mysave = $(".jqte_editor").html();
		$('input[name=blogContent]').val(mysave);
		$('#create_post').submit();
  });