
  $("#foto").fileinput({
    theme: 'fas',
    showUpload: false,
    showCaption: false,
    browseClass: "btn btn-primary btn-lg",
    fileType: "any",
    previewFileIcon: "<i class='glyphicon glyphicon-king'></i>",
    overwriteInitial: false,
    initialPreviewAsData: true,
    initialPreview: [
        "http://lorempixel.com/1920/1080/transport/1",
        "http://lorempixel.com/1920/1080/transport/2",
        "http://lorempixel.com/1920/1080/transport/3"
    ],
    initialPreviewConfig: [
        {caption: "transport-1.jpg", size: 329892, width: "120px", url: "{$url}", key: 1},
        {caption: "transport-2.jpg", size: 872378, width: "120px", url: "{$url}", key: 2},
        {caption: "transport-3.jpg", size: 632762, width: "120px", url: "{$url}", key: 3}
    ]
});
