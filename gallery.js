var folder = "https://richardquach.com/CarpetCleaning/v4/imgs/";


$.ajax({
    url: folder,
    success: function(data) {
        $(data).find("a").attr("href", function(i, val) {
            if (val.match(/\.(jpe?g|png|gif)$/)) {
                // $("body").append("<img src='" + folder + val + "'>");
                $("#c").append("<div class='col-lg-4 col-sm-6'><a herf='#' class='d-block mb-4 h-100'><img class='img-fluid img-thumbnail' src='" + folder + val + "'> </a></div >");
            }
        });
    }
});