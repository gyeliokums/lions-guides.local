/**
 * @license Copyright (c) 2003-2014, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
        // Define changes to default configuration here.
        // For complete reference see:
        // http://docs.ckeditor.com/#!/api/CKEDITOR.config

        // The toolbar groups arrangement, optimized for two toolbar rows.
        config.toolbarGroups = [
                { name: 'clipboard',   groups: [ 'clipboard', 'undo' ] },
                { name: 'editing',     groups: [ 'find', 'selection'/*, 'spellchecker'*/ ] },
                { name: 'links' },
                { name: 'insert' },
                { name: 'forms' },
                { name: 'tools' },
                { name: 'document',           groups: [ 'mode', 'document', 'doctools' ] },
                { name: 'others' },
                '/',
                { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
                { name: 'paragraph',   groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ] },
                { name: 'styles' },
                { name: 'colors' },
                { name: 'about' }
        ];
        // Remove spellcheker
        config.scayt_autoStartup = false;
        config.disableNativeSpellChecker = false;
        config.removePlugins = 'liststyle,tabletools,scayt,menubutton,contextmenu';

        // Remove some buttons provided by the standard plugins, which are
        // not needed in the Standard(s) toolbar.
        config.removeButtons = 'Underline,Subscript,Superscript';

        // Set the most common block elements.
        config.format_tags = 'p;h1;h2;h3;pre';

        // Simplify the dialog windows.
        config.removeDialogTabs = 'image:advanced;link:advanced';

//        config.filebrowserBrowseUrl = 'js/kcfinder/browse.php?opener=ckeditor&type=files&dir=/uploads/kcfinder';
//        config.filebrowserImageBrowseUrl = 'http://tourism.local/admin/js/kcfinder/browse.php?opener=ckeditor&type=images&dir=/uploads/kcfinder';
//        config.filebrowserFlashBrowseUrl = 'js/kcfinder/browse.php?opener=ckeditor&type=flash&dir=/uploads/kcfinder';
//        config.filebrowserUploadUrl = 'js/kcfinder/upload.php?opener=ckeditor&type=files&dir=/uploads/kcfinder';
//        config.filebrowserImageUploadUrl = 'http://tourism.local/admin/js/kcfinder/upload.php?opener=ckeditor&type=images&dir=/uploads/kcfinder';
//        config.filebrowserFlashUploadUrl = 'js/kcfinder/upload.php?opener=ckeditor&type=flash&dir=/uploads/kcfinder';
};
