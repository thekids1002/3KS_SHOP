$(document).ready(function () {

    // Search
    $("#search-inp").focusin(function () {
        $("#result-search").css("display", "block");
    });
    $("#search-inp").focusout(function () {
        $("#result-search").css("display", "none");
    });


    // Làm hiệu ứng mượt khi scroll
    $("a[href*='#']:not([href='#])").click(function () {
        // a[href*='#']:not([href='#]) => bỏ qua thẻ a có href là "#"
        let target = $(this).attr("href"); // lấy đường dẫn trong thẻ a

        $('html,body').stop().animate({
            scrollTop: $(target).offset().top // srcoll lên top element
        }, 1000); //1s
        event.preventDefault(); //chặn event mặc định khi click thẻ a
    });

    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        responsive: {
          0: {
            items: 1
          },
          600: {
            items: 2
          },
          1000: {
            items: 3
          }
        }
      })
});