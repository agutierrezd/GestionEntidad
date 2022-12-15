/**
 * @license Copyright (c) 2003-2019, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
	config.filebrowserBrowseUrl = 'plugins/ckfinder/ckfinder.html';
config.filebrowserImageBrowseLinkUrl =
'plugins/ckfinder/ckfinder.html?type=Images';
config.filebrowserFlashBrowseUrl = 'plugins/ckfinder/ckfinder.html?type=Flash';
config.filebrowserUploadUrl =
'plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';
config.filebrowserImageUploadUrl =
'plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';
config.filebrowserFlashUploadUrl =
'plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';
};
