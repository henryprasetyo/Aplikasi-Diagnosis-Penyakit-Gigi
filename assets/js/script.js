// event pada saat link di klik
$('.page-scroll').on('click', function (e) {

    //ambil isi href
    var tujuan = $(this).attr('href');
    //tangkap elemen 
    var elementujuan = $(tujuan);

    //pindahkan scroll
    $('body').animate({
        scrollTop: elementujuan.offset().top
    }, 1000);

    e.preventDefault();
});