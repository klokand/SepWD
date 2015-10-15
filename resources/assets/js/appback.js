/*create blog editor*/
  $('#blog_edit').editable({
		buttons: ["bold", "italic", "underline", "strikeThrough",'fontFamily',"fontSize", "color", "sep", "formatBlock", "align", "insertOrderedList", "insertUnorderedList", "outdent", "indent", "sep", "selectAll", "createLink", "insertImage", "undo", "redo", "html"],
		inlineMode: false,
		imageUploadURL: "/editor/image/upload",
		crossDomain: false,
		autosave: false,
		// Set the save param.
        saveParam: 'content',
        // Set the save URL.
        //saveURL: '/blog',
        // HTTP request type.
        //saveRequestType: 'POST',
		saveParams: {
			id: 'my_editor',
			_token: $('input[name=_token]').val()
		},
		imageUploadParams:{
			 id: 'editor_image',
			_token: $('input[name=_token]').val()
		}
	});
	$('#blog_edit').editable('setHTML', $('input[name=content]').val(), true);
	$('#blog_edit').editable('option', 'minHeight', '400');

$('#blog_saveButton').click (function () {
	$('input[name=content]').val($('div#blog_edit').editable('getHTML'));
    //$('#blog_edit').editable('save');
	 $('createBlog_form').submit;
	 console.log("blog created");
  });