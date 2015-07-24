tinyMCE.init({
        // General options
        selector : "textarea#description",
        language : "ru",
        //theme: "advanced",
        plugins : "jbimages,table,save,contextmenu,paste,fullscreen,lists,link,anchor,advlist,textcolor,preview,code,image",
        tools: "inserttable",
        toolbar: "fullscreen preview | undo redo | anchor link jbimages image | bold italic underline strikethrough | styleselect formatselect fontselect fontsizeselect | alignleft aligncenter alignright alignjustify  | bullist numlist outdent indent | forecolor backcolor",
        // Theme options
        style_formats: [
			{title: "Цитата", inline: "cite"},
			{title: "NoFollow", inline: "noindex"}
        ],
		rel_list: [
			{title: "Follow", value: ""},
			{title: "No follow", value: "nofollow"}
		],
        theme_advanced_toolbar_location : "top",
        theme_advanced_toolbar_align : "left",
        theme_advanced_blockformats : "p,h1,h2",
        theme_advanced_resizing : true,
        // Other options
        relative_urls : false
});
