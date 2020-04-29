var folder = window.location.origin + "/Team-Project//assets/imgs/";


$.ajax({
    url: folder,
    success: function(data) {
        $(data).find("a").attr("href", function(i, val) {
            if (val.match(/\.(jpe?g|png|gif|PNG)$/)) {
                // $("body").append("<img src='" + folder + val + "'>");
                $("#c").append("<div class='col-lg-4 col-sm-6'><a herf='#' class='d-block mb-4 h-100'><img class='img-fluid img-thumbnail' src='" + folder + val + "'> </a></div >");
            }
        });
    }
});