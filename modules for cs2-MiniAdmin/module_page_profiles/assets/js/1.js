// izitoast copy
var copyds = new ClipboardJS('.copybtn');
copyds.on('success', function (e) {
    noty('Discord Copied', 'success')
    e.clearSelection();
});

var steam = new ClipboardJS('.copybtn2');
steam.on('success', function (e) {
    noty('STEAM Copied', 'success')
    e.clearSelection();
});

$(document).on("mouseover", ".back_video", function () {
    $(this).get(0).play();
});
$(document).on("mouseout", ".back_video", function () {
    $(this).get(0).pause();
});

// hide ip
$('.hideinfo').click(function (event) {
    $('.hideinfo').toggleClass('stopblur');
});

// weapon slider
$(document).ready(function () {
    $('.wslider').slick({
        autoplay: true,
        autoplaySpeed: 2500,
        arrows: false,
        dots: false,
        infinite: true,
        speed: 1200,
        slidesToShow: 6,
        slidesToScroll: 3,
        responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
        ]
    });
});

$(function () {
    const update = function () {
        $.ajax({
            type: 'POST',
            url: domain + "app/modules/module_page_profiles/includes/js_controller.php",
            data: ({ online: info }),
            dataType: 'json',
            global: false,
            async: true,
            success: function (data) {
                //console.log(data);
                var last_seen = document.getElementById('online_status');
                var last_seen_link = document.getElementById("connect_link");
                const tippyInstance = last_seen._tippy;
                last_seen.innerHTML = data['online'];
                if (data['ip']) {
                    last_seen_link.setAttribute("href", 'steam://connect/' + data['ip'] + '');
                    last_seen.classList.add("button_playing_server");
                    if (tippyInstance) {
                        tippyInstance.destroy();
                    };
                    tippy(last_seen, {
                        placement: 'bottom',
                        animation: 'fade',
                        theme: 'rich',
                        arrow: false,
                        allowHTML: true,
                        content: data['text']

                    });
                    last_seen.classList.remove("lastconnect");
                } else {
                    last_seen.classList.remove("button_playing_server");
                    last_seen.classList.add("lastconnect");
                    last_seen_link.removeAttribute("href");
                    if (tippyInstance) {
                        tippyInstance.destroy();
                    };
                    tippy(last_seen, {
                        placement: 'bottom',
                        animation: 'rich',
                        arrow: false,
                        theme: 'overpro',
                        allowHTML: true,
                        content: data['text']
                    });
                }
            }
        });
    };
    setInterval(update, 5000);
    update();
});


$(document).ready(function () {
    $.ajax({
        type: 'POST',
        url: domain + "app/modules/module_page_profiles/includes/js_controller.php",
        data: ({ faceit: faceit }),
        dataType: 'json',
        global: false,
        async: true,
        success: function (data) {
            if (data['faceit_elo'] && document.getElementById("faceit_elo") !== null) {
                var faceit_elo = document.getElementById('faceit_elo').innerHTML;
                document.getElementById('faceit_elo').innerHTML = faceit_elo.replace('0', data['faceit_elo']);
            }
            if (data['faceit_nickname'] && document.getElementById('faceit_nickname') !== null) {
                document.getElementById('faceit_nickname').innerHTML = data['faceit_nickname'];
            }
            if (data['skill_level'] && document.getElementById('skill_level') !== null) {
                document.getElementById('skill_level').src = data['skill_level'];
            }
            document.getElementById('country_id').innerHTML = `${data["faceit_country"] ? data["faceit_country_long"] : "World" } <img class="size_image" src="//stats.chill.lv/app/modules/module_page_profiles/assets/img/flags/${data["faceit_country"] ? data["faceit_country_long"] : "World"}@2x.svg" onerror="this.src='//stats.chill.lv/app/modules/module_page_profiles/assets/img/flags/World@2x.svg'" alt="" title="">`;
            document.getElementById('faceit_url').href = data['faceit_url'];
            if (data['faceit_url'] && data['faceit_url'] !== '') {
                document.getElementById('faceit_url').style.removeProperty("display");
            }
        }
    });
});