var listLink = [
    "http://m.mp3.zing.vn/bai-hat/My-Love-Westlife/ZWZBW0DF.html",
    "http://mp3.zing.vn/bai-hat/My-Everything-Tien-Tien/ZW6FEBZA.html",
    "http://mp3.zing.vn/bai-hat/Yen-Binh-Nguyen-Hong-Hai-Trieu-Hoang/ZW6WUZ9F.html",
    "http://mp3.zing.vn/album/Tuyen-Tap-Nhung-Ca-Khuc-Hay-Nhat-Cua-Son-Tung-M-TP-Son-Tung-M-TP/ZWZAC9BF.html",
    "http://m.mp3.zing.vn/album/Chao-Xuan-2015-Gala-Nhac-Viet-5-Various-Artists/ZWZBB9WO.html"
];

var i = 0;

function incIndex() {
    if (i<listLink.length - 1) i++;
    else i = 0;
}

function getLink() {
    $("#reset").hide();
    var link = $("#link-mp3").val();
    if (link) {
        $(document).ready(function () {
            link = encodeURI(link);
            $("#load").fadeIn('fast');
            $("#result").load("php/solution.php?url=" + link);
        });
    }
    else alert("Vui lòng dán link vào!");
}

function insertLink() {
    $(document).ready(function () {
        $("#link-mp3").val(listLink[i]);
        incIndex();
    });
}

function playMusic() {
    $(document).ready(function () {
        $("#btn-play").fadeOut(1000);
        $("#player").delay(1000).animate({width: 'toggle'});
    });
}

function playMusicAlbum(index) {
    $(document).ready(function () {
        $("#btn-" + index).fadeOut(1000);
        $("#player-" + index).delay(1000).animate({width: 'toggle'});
    });
}