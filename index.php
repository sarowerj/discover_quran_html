<?php
include('header.php');
?>
<main>
    <!-- Slider Section -->
    <div class="slider">
        <div id="main_slider" class="carousel slide" data-ride="carousel" data-interval="false">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#main_slider" data-slide-to="0" class="active"></li>
                <li data-target="#main_slider" data-slide-to="1"></li>
                <li data-target="#main_slider" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="images/slider/slider.jpg" alt="Slider 1">
                    <div class="carousel-caption"></div>
                </div>
                <div class="item">
                    <img src="images/slider/slider_img_1.jpg" alt="Slider 1">
                    <div class="carousel-caption">
                        "This Book, there is no <br />
                        doubt in it, is a guide to those <br />
                        who guard (against evil)." <br />
                        <small>(Al-BAQARA 002.002)</small>
                    </div>
                </div>
                <div class="item">
                    <img src="images/slider/slider_img_2.jpg" alt="Slider 1">
                    <div class="carousel-caption">
                        "This Book, there is no <br />
                        doubt in it, is a guide to those <br />
                        who guard (against evil)." <br />
                        <small>(Al-BAQARA 002.002)</small>
                    </div>
                </div>
                <div class="item">
                    <img src="images/slider/slider_img_3.jpg" alt="Slider 1">
                    <div class="carousel-caption"></div>
                </div>
            </div>
        </div>
    </div><!-- End Slider -->


    <!-- All Languages -->
    <section class="section all_languages">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1 class="section_title">Quran Translation</h1>
                </div>
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-xs-12 col-md-8 col-md-offset-2 languages basic">
                            <div class="btn-group sj" data-animate="fadeIn" data-animation-delay="100" role="group" aria-label="Basic example">
                                <a href="javascript:void(0)" class="btn btn-default">English</a>
                            </div>
                            <div class="btn-group sj" data-animate="fadeIn" data-animation-delay="200" role="group" aria-label="Basic example">
                                <a href="javascript:void(0)" class="btn btn-default">Bangla ( বাংলা )</a>
                            </div>
                            <div class="btn-group sj" data-animate="fadeIn" data-animation-delay="300" role="group" aria-label="Basic example">
                                <a href="javascript:void(0)" class="btn btn-default">Urdu ( اردو )</a>
                            </div>
                            <div class="btn-group sj" data-animate="fadeIn" data-animation-delay="400" role="group" aria-label="Basic example">
                                <a href="javascript:void(0)" class="btn btn-default">English</a>
                            </div>
                            <div class="btn-group sj" data-animate="fadeIn" data-animation-delay="500" role="group" aria-label="Basic example">
                                <a href="javascript:void(0)" class="btn btn-default">Bangla ( বাংলা )</a>
                            </div>
                            <div class="btn-group sj" data-animate="fadeIn" data-animation-delay="600" role="group" aria-label="Basic example">
                                <a href="javascript:void(0)" class="btn btn-default">Urdu ( اردو )</a>
                            </div>
                            <div class="btn-group sj" data-animate="fadeIn" data-animation-delay="700" role="group" aria-label="Basic example">
                                <a href="javascript:void(0)" class="btn btn-default">English</a>
                            </div>
                            <div class="btn-group sj" data-animate="fadeIn" data-animation-delay="800" role="group" aria-label="Basic example">
                                <a href="javascript:void(0)" class="btn btn-default">Bangla ( বাংলা )</a>
                            </div>
                            <div class="btn-group sj" data-animate="fadeIn" data-animation-delay="900" role="group" aria-label="Basic example">
                                <a href="javascript:void(0)" class="btn btn-default">Urdu ( اردو )</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 languages all">
                            <?php
                            for ($i = 0; $i < 20; $i++) {
                                ?>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="javascript:void(0)" class="btn btn-default">Urdu ( اردو )</a>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12">
                        <div class="show_hide_button">
                            <a href="javascript:void(0)" id="show_hide_button" class="btn btn-default dark" data-status="hidden">Show All Languages</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(document).ready(function () {
                /*========== Languages Show Hide Button ==========*/
                $('#show_hide_button').click(function () {
                    var status = $(this).attr('data-status');
                    if (status === 'hidden') {
                        $('.languages.all').slideDown();
                        $(this).attr('data-status', 'show');
                    } else {
                        $('.languages.all').slideUp();
                        $(this).attr('data-status', 'hidden');
                    }
                });
            });
        </script>
    </section><!-- End All Languages -->

    <!-- Video Slider -->
    <section class="section video_slider sj" data-animate="fadeInUp" data-animation-delay="300">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1 class="section_title">Video</h1>
                </div>
                <div class="col-xs-12 col-md-8 col-md-offset-2">
                    <p>Watch Videos: Why people accepting Islam? Priests & Preachers Coming to Islam! (In order to watch any video below - You must have Internet)</p>
                </div>
                <div class="col-xs-12">
                    <div class="row">
                        <!-- Item Start -->
                        <div class="full_480 col-xs-6 col-sm-6 col-md-3"> 
                            <div class="item thumbnail click_for_modal" data-url="IYMKQKSV0bY" data-toggle="modal" data-target="#video_modal">
                                <img src="images/youtube_thumbs/thumb_1.jpg" alt="...">
                                <div class="caption click_for_modal">
                                    <h3><a href="javascript:void(0)">How the Bible Led Me to Islam</a></h3>
                                    <p>Hamza Yusuf is an American Islamic scholar, and is co-founder of Zaytuna College. He is a proponent of classical learning in Islam and has promoted Islamic sciences and classical teaching methodologies throughout the world.</p>
                                </div>
                            </div>
                        </div><!-- End Item -->

                        <!-- Item Start -->
                        <div class="full_480 col-xs-6 col-sm-6 col-md-3"> 
                            <div class="item thumbnail click_for_modal" data-url="dOZSrPF5GNo" data-toggle="modal" data-target="#video_modal">
                                <img src="images/youtube_thumbs/thumb_2.jpg" alt="...">
                                <div class="caption click_for_modal">
                                    <h3><a href="javascript:void(0)">A Christian Minister's Conversion to Islam</a></h3>
                                    <p>Jerald Dirks is a former minister of the United Methodist Church. He holds a Master's degree in Divinity from Harvard University and a Doctorate in Psychology from the University of Denver.</p>
                                </div>
                            </div>
                        </div><!-- End Item -->

                        <!-- Item Start -->
                        <div class="full_480 col-xs-6 col-sm-6 col-md-3"> 
                            <div class="item thumbnail click_for_modal" data-url="P8i0Xvps8sg" data-toggle="modal" data-target="#video_modal">
                                <img src="images/youtube_thumbs/thumb_3.jpg" alt="...">
                                <div class="caption click_for_modal">
                                    <h3><a href="javascript:void(0)">A Catholic TV asked Sheikh Yusuf Estes</a></h3>
                                    <p>Yusuf Estes is an American preacher from Texas who converted from Christianity to Islam in 1991. He claims to have been a Muslim Chaplain for the United States Bureau of Prisons through the 1990s.</p>
                                </div>
                            </div>
                        </div><!-- End Item -->

                        <!-- Item Start -->
                        <div class="full_480 col-xs-6 col-sm-6 col-md-3"> 
                            <div class="item thumbnail click_for_modal" data-url="Dm9tKqjp18Y" data-toggle="modal" data-target="#video_modal">
                                <img src="images/youtube_thumbs/thumb_4.jpg" alt="...">
                                <div class="caption click_for_modal">
                                    <h3><a href="javascript:void(0)">Why I came to Islam</a></h3>
                                    <p>Hamza Yusuf is an American Islamic scholar, and is co-founder of Zaytuna College. He is a proponent of classical learning in Islam and has promoted Islamic sciences throughout the world.</p>
                                </div>
                            </div>
                        </div><!-- End Item -->
                    </div> 
                </div>
            </div>
        </div>
    </section><!--End Video Slider-->

    <!-- Listen and Read Quran -->
    <section class="section listen_read">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <div class="item sj" data-animate="fadeInRight" data-animation-delay="400">
                        <h1 class="section_title">Listen Qur’an online</h1>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam.</p>
                        <div class="row">
                            <div class="full_480 col-xs-12 col-md-9">
                                <ul class="audio_links">
                                    <li>
                                        <a href="javascript:void(0)" data-satus="show" data-source="audio/BlueDucks_FourFlossFiveSix">
                                            <span class="text">SURAH 001 - AL-FATIHA</span>
                                            <audio class="audio" preload="auto" controls>' +
                                                <source src="audio/BlueDucks_FourFlossFiveSix.mp3">
                                                <source src="audio/BlueDucks_FourFlossFiveSix.ogg">
                                                <source src="audio/BlueDucks_FourFlossFiveSix.wav">
                                            </audio>
                                        </a>
                                    </li>
                                    <li><a href="javascript:void(0)" data-satus="hidden" data-source="audio/horse"><span class="text">SURAH 002 - AL-BAQRAH A</span></span></a></li>
                                    <li><a href="javascript:void(0)" data-satus="hidden" data-source="audio/BlueDucks_FourFlossFiveSix"><span class="text">SURAH 002 - AL-BAQRAH B</span></a></li>
                                    <li><a href="javascript:void(0)" data-satus="hidden" data-source="audio/BlueDucks_FourFlossFiveSix"><span class="text">SURAH 002 - AL-BAQRAH C</span></a></li>
                                    <li><a href="javascript:void(0)" data-satus="hidden" data-source="audio/BlueDucks_FourFlossFiveSix"><span class="text">SURAH 002 - AL-BAQRAH D</span></a></li>
                                </ul>
                            </div>
                            <script type="text/javascript">
                                $(document).ready(function () {
                                    $('.audio_links li a span').click(function () {
                                        var status = $(this).parent().attr('data-satus');
                                        var source = $(this).parent().attr('data-source');
                                        if (status === 'hidden') {
                                            $('.audio_links li a').attr('data-satus', 'hidden');
                                            $(this).parent().attr('data-satus', 'show');
                                            $('.audio_links li .mejs-container').remove();
                                            var html = '<audio class="audio" preload="auto" controls>' +
                                                    '<source src="' + source + '.mp3">' +
                                                    '<source src="' + source + '.ogg">' +
                                                    '<source src="' + source + '.wav">' +
                                                    '</audio>';
                                            var button = '<a href="' + source + '.mp3" class="download_btn" download="'+source+'"><i class="fa fa-download"></i></a>';
                                            $(this).parent().append(html);
                                            $('audio').mediaelementplayer();
                                            $('.audio_links li .mejs-controls').append(button);
                                        } else {
                                            $(this).parent().attr('data-satus', 'hidden');
                                            $('.audio_links li .audioplayer').remove();
                                        }
                                    });
                                });
                            </script>
                            <div class="full_480 col-xs-12 text-right text">
                                <a href="javascript:void(0)" class="btn btn-default dark read_button">All Audio</a>
                                <span class="hints">Click this button above to listen all audio.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6">
                    <div class="item sj read_quran" data-animate="fadeInLeft" data-animation-delay="400">
                        <h1 class="section_title">Read Qur’an online</h1>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam.</p>
                        <div class="row">
                            <div class="full_480 col-xs-9 col-md-9">
                                <ul class="read_quran_section">
                                    <li>
                                        <a class="read_quran_btn" href="javascript:void(0)" data-src="pdf/masayel-e-shirk-o-bid-at.pdf">We have collection of more than 70 languages.</a>
                                        <div class="options">
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <a href="pdf/masayel-e-shirk-o-bid-at.pdf" download="download"><i class="fa fa-download"></i> Download (25MB)</a>
                                                </div>
                                                <div class="col-xs-6 text-right">
                                                    <a href="pdf/masayel-e-shirk-o-bid-at.pdf" target="_blank"><i class="fa fa-eye"></i> Read Online</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="read_quran_btn" href="javascript:void(0)" data-src="pdf/masayel-e-shirk-o-bid-at.pdf">Fully free to listen or gift.</a>
                                    </li>
                                    <li>
                                        <a class="read_quran_btn" href="javascript:void(0)" data-src="pdf/masayel-e-shirk-o-bid-at.pdf">Can download to read in offline.</a>
                                    </li>
                                    <li>
                                        <a class="read_quran_btn" href="javascript:void(0)" data-src="pdf/masayel-e-shirk-o-bid-at.pdf">Can share with social network.</a>
                                    </li>
                                    <li>
                                        <a class="read_quran_btn" href="javascript:void(0)" data-src="pdf/masayel-e-shirk-o-bid-at.pdf">Can buy for publish.</a>
                                    </li> 
                                </ul>
                                <script type="text/javascript">
                                    $(document).ready(function () {
                                        /*========== Read Quran Online ===========*/
                                        $('.read_quran_btn').click(function () {
                                            $('.read_quran_section li .options').remove();
                                            var data_src = $(this).attr('data-src');
                                            var html = '<div class="options">' +
                                                    '<div class="row">' +
                                                    '<div class="col-xs-6">' +
                                                    '<a href="' + data_src + '" download><i class="fa fa-download"></i> Download (25MB)</a>' +
                                                    '</div>' +
                                                    '<div class="col-xs-6 text-right">' +
                                                    '<a href="' + data_src + '" target="_blank"><i class="fa fa-eye"></i> Read Online</a>' +
                                                    '</div>' +
                                                    '</div>' +
                                                    '</div>';
                                            $(this).parent().append(html);
                                        });
                                    });
                                </script>
                            </div>
                            <div class="full_480 col-xs-12 text-right text">
                                <a href="javascript:void(0)" class="btn btn-default dark read_button">All PDF</a>
                                <span class="hints">Click this button above to read in any language.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Read and Listen Quran -->


    <!-- Way of Life -->
    <section class="section way_of_life">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-8 col-md-offset-2 text-center">
                    <h1 class="section_title">The Way of Life</h1>
                    <p>The Qur'an is firred with information about Jesus, Mary Me angers and the Torah Ishmael. gsma a), Isaac °shalt), Jacob (Taguh), John (Yalya . Zakartyak and Hagar (Abraham's wife Hajira) in the Quran Ina </p>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="category_tab">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#adam" aria-controls="adam" role="tab" data-toggle="tab">Adam</a></li>
                            <li role="presentation"><a href="#noah" aria-controls="noah" role="tab" data-toggle="tab">Noah</a></li>
                            <li role="presentation"><a href="#abraham" aria-controls="abraham" role="tab" data-toggle="tab">Abraham</a></li>
                            <li role="presentation"><a href="#moses" aria-controls="moses" role="tab" data-toggle="tab">Moses</a></li>
                            <li role="presentation"><a href="#jesus" aria-controls="jesus" role="tab" data-toggle="tab">Jesus</a></li>
                            <li role="presentation"><a href="#mohammad_sm" aria-controls="mohammad_sm" role="tab" data-toggle="tab">Mohammad (SM)</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="adam">
                                <div class="row">
                                    <!-- Item Start -->
                                    <div class="full_480 col-xs-6 col-sm-6 col-md-3"> 
                                        <div class="item thumbnail click_for_modal sj" data-url="IYMKQKSV0bY" data-toggle="modal" data-target="#video_modal" data-animate="fadeInUp" data-animation-delay="100">
                                            <img src="images/youtube_thumbs/thumb_1.jpg" alt="...">
                                            <div class="caption click_for_modal">
                                                <h3><a href="javascript:void(0)">How the Bible Led Me to Islam</a></h3>
                                                <p>Hamza Yusuf is an American Islamic scholar, and is co-founder of Zaytuna College. He is a proponent of classical learning in Islam and has promoted Islamic sciences and classical teaching methodologies throughout the world.</p>
                                            </div>
                                        </div>
                                    </div><!-- End Item -->

                                    <!-- Item Start -->
                                    <div class="full_480 col-xs-6 col-sm-6 col-md-3"> 
                                        <div class="item thumbnail click_for_modal sj" data-url="dOZSrPF5GNo" data-toggle="modal" data-target="#video_modal" data-animate="fadeInUp" data-animation-delay="200">
                                            <img src="images/youtube_thumbs/thumb_2.jpg" alt="...">
                                            <div class="caption click_for_modal">
                                                <h3><a href="javascript:void(0)">A Christian Minister's Conversion to Islam</a></h3>
                                                <p>Jerald Dirks is a former minister of the United Methodist Church. He holds a Master's degree in Divinity from Harvard University and a Doctorate in Psychology from the University of Denver.</p>
                                            </div>
                                        </div>
                                    </div><!-- End Item -->

                                    <!-- Item Start -->
                                    <div class="full_480 col-xs-6 col-sm-6 col-md-3"> 
                                        <div class="item thumbnail click_for_modal sj" data-url="P8i0Xvps8sg" data-toggle="modal" data-target="#video_modal" data-animate="fadeInUp" data-animation-delay="300">
                                            <img src="images/youtube_thumbs/thumb_3.jpg" alt="...">
                                            <div class="caption click_for_modal">
                                                <h3><a href="javascript:void(0)">A Catholic TV asked Sheikh Yusuf Estes</a></h3>
                                                <p>Yusuf Estes is an American preacher from Texas who converted from Christianity to Islam in 1991. He claims to have been a Muslim Chaplain for the United States Bureau of Prisons through the 1990s.</p>
                                            </div>
                                        </div>
                                    </div><!-- End Item -->

                                    <!-- Item Start -->
                                    <div class="full_480 col-xs-6 col-sm-6 col-md-3"> 
                                        <div class="item thumbnail click_for_modal sj" data-url="Dm9tKqjp18Y" data-toggle="modal" data-target="#video_modal" data-animate="fadeInUp" data-animation-delay="400">
                                            <img src="images/youtube_thumbs/thumb_4.jpg" alt="...">
                                            <div class="caption click_for_modal">
                                                <h3><a href="javascript:void(0)">Why I came to Islam</a></h3>
                                                <p>Hamza Yusuf is an American Islamic scholar, and is co-founder of Zaytuna College. He is a proponent of classical learning in Islam and has promoted Islamic sciences throughout the world.</p>
                                            </div>
                                        </div>
                                    </div><!-- End Item -->
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="noah">
                                <div class="row"> 
                                    <?php
                                    for ($i = 4; $i >= 1; $i--) {
                                        ?>
                                        <div class="full_480 col-xs-6 col-sm-6 col-md-3"> 
                                            <div class="item thumbnail click_for_modal" data-url="Qh2OCerpfDk" data-toggle="modal" data-target="#video_modal">
                                                <img src="images/thumb_img_<?= $i ?>.png" alt="...">
                                                <div class="caption">
                                                    <h3><a href="#">Thumbnail label<?= $i ?></a></h3>
                                                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    ?> 
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="abraham">
                                <div class="row">
                                    <?php
                                    for ($i = 1; $i <= 4; $i++) {
                                        ?>
                                        <div class="full_480 col-xs-6 col-sm-6 col-md-3"> 
                                            <div class="item thumbnail">
                                                <img src="images/thumb_img_<?= $i ?>.png" alt="...">
                                                <div class="caption">
                                                    <h3><a href="#">Thumbnail label<?= $i ?></a></h3>
                                                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="moses">
                                <div class="row"> 
                                    <?php
                                    for ($i = 4; $i >= 1; $i--) {
                                        ?>
                                        <div class="full_480 col-xs-6 col-sm-6 col-md-3"> 
                                            <div class="item thumbnail">
                                                <img src="images/thumb_img_<?= $i ?>.png" alt="...">
                                                <div class="caption">
                                                    <h3><a href="#">Thumbnail label<?= $i ?></a></h3>
                                                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    ?> 
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="jesus">
                                <div class="row">
                                    <?php
                                    for ($i = 1; $i <= 4; $i++) {
                                        ?>
                                        <div class="full_480 col-xs-6 col-sm-6 col-md-3"> 
                                            <div class="item thumbnail">
                                                <img src="images/thumb_img_<?= $i ?>.png" alt="...">
                                                <div class="caption">
                                                    <h3><a href="#">Thumbnail label<?= $i ?></a></h3>
                                                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="mohammad_sm">
                                <div class="row"> 
                                    <?php
                                    for ($i = 4; $i >= 1; $i--) {
                                        ?>
                                        <div class="full_480 col-xs-6 col-sm-6 col-md-3"> 
                                            <div class="item thumbnail">
                                                <img src="images/thumb_img_<?= $i ?>.png" alt="...">
                                                <div class="caption">
                                                    <h3><a href="#">Thumbnail label<?= $i ?></a></h3>
                                                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    ?> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Way of Life -->


    <section class="section jesus_mary">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-8 pull-right">
                    <div class="content sj" data-animate="fadeInRight" data-animation-delay="400">
                        <h1 class="section_title">Jesus and mary in Quran</h1>
                        <p>The Quran MMus many wonderful things abounlesus (PEM) M a result, beheversin the Quran Love lesus (IMMO, honor him and believe in him_ In fact, no Muslim can be a Muslim unless be or she believes in Jesus, on whom be peace The Quran says that Jesus was Isom of a wrgin, that he spoke ;Able be was MP onlya baby, that he healed the Inhnd and the leper by Gm leave and that he raised the Mad by God's leave</p> 
                        <p>The Quran MMus many wonderful things aboodesus (MUM M a result, behevers in the Quran Love Jesus (IMMO, honor him and believe in him_ In fact, no Muslim can be a Muslim unless be or she believes in Jesus, on whom be peace the Quran says Itallesus was Isom of a virgin.</p>
                        <p>The Quran MMus many wonderful things aboodesus (MUM M a result, behevers in the Quran Love Jesus (MUM, honor him and believe in him_ In fact, no Muslim can be a Muslim unless be or she believes in Jesus, on whom be peace The Quran says Itallesus was Isom of a virgin. </p>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4">
                    <div class="content sj" data-animate="fadeInLeft" data-animation-delay="400">
                        <img src="images/mener_big.png" alt="" class="img-responsive" /> 
                        <audio preload="auto" controls>
                            <source src="audio/BlueDucks_FourFlossFiveSix.mp3">
                            <source src="audio/BlueDucks_FourFlossFiveSix.ogg">
                            <source src="audio/BlueDucks_FourFlossFiveSix.wav">
                        </audio>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="section faq">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1 class="section_title">Frequently Ask Question</h1>
                </div>
                <div class="col-xs-12">
                    <!-- FAQ --> 
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default sj" data-animate="fadeInUp" data-animation-delay="200">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        You should not delay in becoming a Muslim.
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    If someone advices you to delay your conversion to Islam. This is also incorrect. If you believe Islam is the truth then you should not delay your conversion to Islam. You should convert immediately because we are given a certain lifespan. Since we do not know when we are going to die. Not even a minute should be lost as your time to leave this life may be up the next minute. 
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default sj" data-animate="fadeInUp" data-animation-delay="300">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        If you have tattoos you can still become a Muslim.
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    Some one may say to you that you must remove all tattoos to be a Muslim. This is also incorrect. Tattoos are not allowed in Islam but they DO NOT prevent a person becoming Muslim. You should become Muslims and latter you can have the tattoos removed if you can afford it. If you can not afford it then do not worry there is no sin on you for what you did before becoming Muslim You are still a Muslim. 
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default sj" data-animate="fadeInUp" data-animation-delay="400">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        If you have a wild past of have committed a many of sins you can still become a Muslim. 
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body">
                                    <p>No matter what sins you have committed or how wild your past was. You can still become a Muslim.. Islam erases all sins committed prior to becoming a Muslim. Prophet (may the peace and blessings and mercy of Allah be upon him) said, Islam annuls what came before it. (narrated by Muslim in his Sahih, no. 121).As soon as you become a Muslim all your previous sins are forgiven and you start a blank state. Or a complete clean record. </p>
                                    <p>Muslim (121) narrated that Amr ibn al-Aas (may Allah be pleased with him) said: When Allah put Islam in my heart, I came to the Prophet (peace and blessings of Allah be upon him) and said: Give me your right hand so that I may swear allegiance to you. He held out his hand and I withdrew my hand. He said, What is the matter, Oh Amr? I said, I want to stipulate a condition. He said, What do you want to stipulate? I said, That I will be forgiven. He said, Do you not know that Islam destroys that which came before it? </p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default sj" data-animate="fadeInUp" data-animation-delay="500">
                            <div class="panel-heading" role="tab" id="headingFour">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                                        If you are a Small child you can still become a Muslim without your parents permission. 
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                <div class="panel-body">
                                    <p>If you are a child you do not need your parent's permission to become a Muslim. If you fear they may harm, you can become Muslim in secret and tell them when you are ready. </p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default sj" data-animate="fadeInUp" data-animation-delay="600">
                            <div class="panel-heading" role="tab" id="headingFive">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseThree">
                                        What if their are no Muslims (or no Mosque or Islamic center) in your town.
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                                <div class="panel-body">
                                    <p>Another common question is that there are no Muslims in the city. This too is not an obstacle in you becoming a Muslim. You do not have to go to a Masjid (Mosque) or Islamic center or know any Muslims in order to be a Muslim. You can say the declaration of faith (called the Shahadah) to yourself and from then onwards you are a Muslim. </p>
                                    <p>Some people have a wrong notion that entering into the Islamic fold requires an announcement from the concerned person in the presence of high ranking scholars or shaikhs or reporting this act to courts of justice or other authorities. It is also thought that the act of accepting Islam, should, as a condition, have a certificate issued by the authorities, as evidence to that effect. </p>
                                    <p>We wish to clarify that the whole matter is very easy and that none of these conditions or obligations are required. For Allah, Almighty, is above all comprehension and knows well the secrets of all hearts. Nevertheless, those who are going to adopt Islam as their religion are advised to register themselves as Muslims with the concerned governmental agency, as this procedure may facilitate for them many matters including the possibility of performing Hajj (Pilgrimage) and Umrah. </p>
                                    <p>If anyone has a real desire to be a Muslim and has full conviction and strong belief that Islam is the true religion ordained by Allah for all human-beings, then, one should pronounce the "Shahada", the testimony of faith, without further delay. </p>
                                    <p>Mohammad, the Prophet of Allah (Peace and blessing of Allah be upon him), said: <br /><br />
                                        "The superstructure of Islam is raised on five (pillars): testifying that there is no God (none truly to be worshipped) but Allah, and that Mohammad is the messenger of Allah, performing the prayer, paying the Zakah (poor-due), fasting the month of Ramadan, and performing Hajj".</p>
                                    <p>To become Muslim, you have to pronounce the Testimony of Faith 'Shahada', with sincere faith. </p>
                                    <p>If you accept this, the only thing that remains for you to become Muslim, is to say the Shahada, while believing in it with your heart word for word as follows: <br />The implication of the Shahada is that you believe that there is only one God, Allah, Who alone deserves to be worshipped. It also implies that you believe in Muhammad, peace be upon him, as the Messenger of God, and you believe in his message. It also means that you believe in all of God's Prophets, including Jesus, peace be upon him, who is a Messenger of God and NOT divine or son of God. </p>
                                    <p><em>"ASH-HADU ANLAA ILAHA ILLA ALLAH WA ASH HADU ANNA MUHAMMADAN ABDUHUWA RASUULUH."</em></p>
                                    <p>You may listen to the pronunciation by clicking here </p>
                                    <audio preload="auto" controls>
                                        <source src="audio/BlueDucks_FourFlossFiveSix.mp3">
                                        <source src="audio/BlueDucks_FourFlossFiveSix.ogg">
                                        <source src="audio/BlueDucks_FourFlossFiveSix.wav">
                                    </audio>
                                    <p>English translation is: <strong>"I bear witness that there is no deity worthy to be worshipped but Allah, and I bear witness that Muhammad is His servant and messenger."</strong></p>
                                </div>
                            </div>
                        </div>
                    </div><!--End Collapse --> 
                </div>
            </div>
        </div>
    </section><!--End Faq-->
    <section class="free_quran section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="img_cont">
                        <img src="images/free_quran_img.png" class="img-responsive" alt="" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="text">
                        <span class="free">
                            <img src="images/100_free_tag.png" alt="" />
                        </span>
                        <h4>Get A Quran</h4>
                        <h1>FREE</h1>
                        <h5>We have more than 60 languages</h5>
                        <p class="btn_cont">
                            <a href="#" class="btn btn-default dark">Download PDF</a>
                            <span class="btn btn-default dark translate_online_btn" data-toggle="modal" data-target="#translator_modal">Translate online</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="shade"></div>
    </section>
</main>
<?php
include('footer.php');
?>
