<section class="section listen_read">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <div class="item sj" data-animate="fadeInRight" data-animation-delay="400">
                    <h1 class="section_title">Listen Qur’an Online</h1>
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
                                <li class="no_icon"><a href="javascript:void(0)">Click for more</a></li>
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
                                        var button = '<a href="' + source + '.mp3" class="download_btn" download="' + source + '"><i class="fa fa-download"></i></a>';
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
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-6">
                <div class="item sj read_quran" data-animate="fadeInLeft" data-animation-delay="400">
                    <h1 class="section_title">Read Qur’an Online</h1>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam.</p>
                    <p class="btn_cont">
                        <a href="#translator_modal" data-toggle="modal" data-target="#translator_modal" class="btn btn-default dark translate_online_btn">Read Quran Online</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>