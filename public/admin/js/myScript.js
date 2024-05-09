$(document).ready(function () {

    new DataTable("#myDataTable");

    $('.select2').select2();


    // Ajax Change Ordering
    let $inputOrdering = $("input.ordering");
    $inputOrdering.on("change", function () {
        let $currentElement = $(this);
        let value = $currentElement.val();
        let $url = $currentElement.data("url");
        $.ajax({
            url: $url.replace("value_new", value),
            type: "GET",
            dataType: "json",
            success: function (result) {
                if (result) {
                    // $(".modified-" + result.id).html(result.modified);
                    showNotify($currentElement, result.message);
                } else {
                    console.log(result);
                }
            },
        });
    });

    // Ajax Change Status
    let $btnStatus = $("button.status-ajax");
    $btnStatus.on("click", function () {
        let $currentElement = $(this);
        let $url = $currentElement.data("url");
        $.ajax({
            type: "GET",
            url: $url,
            dataType: "json",
            success: function (result) {
                if (result) {
                    // $(".modified-" + result.id).html(result.modified);
                    $currentElement.text(result.statusObj.name);
                    $currentElement.removeClass($currentElement.data('class'));
                    $currentElement.addClass(result.statusObj.class);
                    $currentElement.data('class', result.statusObj.class);
                    $currentElement.data("url", result.link);
                    showNotify($currentElement, result.message);
                } else {
                    console.log(result);
                }
            },
        });
    });

    // Ajax Change Category
    let $selectCategory = $("select.category");
    $selectCategory.on("change", function () {
        let $currentElement = $(this);
        let value = $currentElement.val();
        let $url = $currentElement.data("url");
        $.ajax({
            url: $url.replace("value_new", value),
            type: "GET",
            dataType: "json",
            success: function (result) {
                if (result) {
                    // $(".modified-" + result.id).html(result.modified);
                    showNotify($currentElement, result.message);
                } else {
                    console.log(result);
                }
            },
        });
    });

    // Delete Row Index
    myTable = document.querySelector(".myTable");
    if (myTable) {
        myTable.addEventListener("submit", function (e) {
            e.preventDefault();
            const target = e.target;
            if (target.classList.contains("form-delete")) {
                if (confirm("ban co chac chan muon xoa khong?")) {
                    target.submit();
                }
            }
        });
    }

    // CKEditor
    var token = document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content");
    window.addEventListener("load", function () {
        var options = {
            filebrowserImageBrowseUrl: "/laravel-filemanager?type=Images",
            filebrowserImageUploadUrl: "/laravel-filemanager/upload?type=Images&_token=" + token,
            filebrowserBrowseUrl: "/laravel-filemanager?type=Files",
            filebrowserUploadUrl: "/laravel-filemanager/upload?type=Files&_token=" + token,


            // Define the toolbar: https://ckeditor.com/docs/ckeditor4/latest/features/toolbar.html
            // The standard preset from CDN which we used as a base provides more features than we need.
            // Also by default it comes with a 2-line toolbar. Here we put all buttons in a single row.
            toolbar: [
                { name: 'clipboard', items: ['Undo', 'Redo'] },
                { name: 'styles', items: ['Styles', 'Format'] },
                { name: 'basicstyles', items: ['Bold', 'Italic', 'Strike', '-', 'RemoveFormat'] },
                { name: 'paragraph', items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote'] },
                { name: 'links', items: ['Link', 'Unlink'] },
                { name: 'insert', items: ['Image', 'EmbedSemantic', 'Table'] },
                { name: 'tools', items: ['Maximize'] },
                { name: 'editing', items: ['Scayt'] }
            ],

            // Since we define all configuration options here, let's instruct CKEditor to not load config.js which it does by default.
            // One HTTP request less will result in a faster startup time.
            // For more information check https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-customConfig
            customConfig: '',

            // Enabling extra plugins, available in the standard-all preset: https://ckeditor.com/cke4/presets-all
            extraPlugins: 'autoembed,embedsemantic,image2,uploadimage,uploadfile',

            /*********************** File management support ***********************/
            // In order to turn on support for file uploads, CKEditor has to be configured to use some server side
            // solution with file upload/management capabilities, like for example CKFinder.
            // For more information see https://ckeditor.com/docs/ckeditor4/latest/guide/dev_ckfinder_integration.html

            // Uncomment and correct these lines after you setup your local CKFinder instance.
            // filebrowserBrowseUrl: 'http://example.com/ckfinder/ckfinder.html',
            // filebrowserUploadUrl: 'http://example.com/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
            /*********************** File management support ***********************/

            // Remove the default image plugin because image2, which offers captions for images, was enabled above.
            removePlugins: 'image',

            // Make the editing area bigger than default.
            height: 100,

            // An array of stylesheets to style the WYSIWYG area.
            // Note: it is recommended to keep your own styles in a separate file in order to make future updates painless.
            contentsCss: ['https://cdn.ckeditor.com/4.8.0/standard-all/contents.css', 'mystyles.css'],

            // This is optional, but will let us define multiple different styles for multiple editors using the same CSS file.
            bodyClass: 'article-editor',

            // Reduce the list of block elements listed in the Format dropdown to the most commonly used.
            format_tags: 'p;h1;h2;h3;pre',

            // Simplify the Image and Link dialog windows. The "Advanced" tab is not needed in most cases.
            removeDialogTabs: 'image:advanced;link:advanced',

            // Define the list of styles which should be available in the Styles dropdown list.
            // If the "class" attribute is used to style an element, make sure to define the style for the class in "mystyles.css"
            // (and on your website so that it rendered in the same way).
            // Note: by default CKEditor looks for styles.js file. Defining stylesSet inline (as below) stops CKEditor from loading
            // that file, which means one HTTP request less (and a faster startup).
            // For more information see https://ckeditor.com/docs/ckeditor4/latest/features/styles.html
            stylesSet: [
                /* Inline Styles */
                { name: 'Marker', element: 'span', attributes: { 'class': 'marker' } },
                { name: 'Cited Work', element: 'cite' },
                { name: 'Inline Quotation', element: 'q' },

                /* Object Styles */
                {
                    name: 'Special Container',
                    element: 'div',
                    styles: {
                        padding: '5px 10px',
                        background: '#eee',
                        border: '1px solid #ccc'
                    }
                },
                {
                    name: 'Compact table',
                    element: 'table',
                    attributes: {
                        cellpadding: '5',
                        cellspacing: '0',
                        border: '1',
                        bordercolor: '#ccc'
                    },
                    styles: {
                        'border-collapse': 'collapse'
                    }
                },
                { name: 'Borderless Table', element: 'table', styles: { 'border-style': 'hidden', 'background-color': '#E6E6FA' } },
                { name: 'Square Bulleted List', element: 'ul', styles: { 'list-style-type': 'square' } },

                /* Widget Styles */
                // We use this one to style the brownie picture.
                { name: 'Illustration', type: 'widget', widget: 'image', attributes: { 'class': 'image-illustration' } },
                // Media embed
                { name: '240p', type: 'widget', widget: 'embedSemantic', attributes: { 'class': 'embed-240p' } },
                { name: '360p', type: 'widget', widget: 'embedSemantic', attributes: { 'class': 'embed-360p' } },
                { name: '480p', type: 'widget', widget: 'embedSemantic', attributes: { 'class': 'embed-480p' } },
                { name: '720p', type: 'widget', widget: 'embedSemantic', attributes: { 'class': 'embed-720p' } },
                { name: '1080p', type: 'widget', widget: 'embedSemantic', attributes: { 'class': 'embed-1080p' } }
            ]
        };
        CKEDITOR.replace("description", options)
        CKEDITOR.replace("content", options)

    });

    // Preview Image
    const image = document.getElementById('image');
    const imagePreview = document.getElementById('image-preview');
    if (image) {
        image.addEventListener("change", function (e) {
            if (e.target.files.length) {
                const src = URL.createObjectURL(e.target.files[0]);
                imagePreview.hidden = "";
                imagePreview.src = src;
            }
        });
    }

    // Show Notify
    function showNotify(element, message, style = 'success') {
        console.log(element);
        element.notify(message, {
            position: "top left",
            className: style,
        });
    };


});



