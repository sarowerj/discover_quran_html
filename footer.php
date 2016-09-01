<!-- Footer Section -->
<footer>
    <!--Foorer Top-->
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="full_480 col-xs-6 col-md-3">
                    <div class="item necessery_links sj" data-animate="fadeInUp" data-animation-delay="200">
                        <h3>Necessery Links</h3>
                        <div class="content">
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Success Stories</a></li>
                                <li><a href="#">Endorsement</a></li>
                                <li><a href="#">Compare</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="full_480 col-xs-6 col-md-3">
                    <div class="item latest_video sj" data-animate="fadeInUp" data-animation-delay="400">
                        <h3>Latest Videos</h3>
                        <div class="content">
                            <span class="video_modal_icon click_for_modal" data-url="IYMKQKSV0bY" data-toggle="modal" data-target="#video_modal">
                                <img src="images/youtube_thumbs/thumb_1.jpg" alt="Yoututbe Thumb" />
                            </span>
                            <script src="https://apis.google.com/js/platform.js"></script> 
                            <div class="g-ytsubscribe" data-channel="SarowerJahan" data-layout="default" data-count="hidden"></div>
                        </div>
                    </div>
                </div>
                <div class="full_480 col-xs-6 col-md-3">
                    <div class="item latest_tweets sj" data-animate="fadeInUp" data-animation-delay="600">
                        <h3>Latest Tweets</h3>
                        <div class="content">
                            <a class="twitter-timeline" data-height="200"  href="https://twitter.com/hasankeyf_1">Tweets by TwitterDev</a> 
                            <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                        </div>
                    </div>
                </div>
                <div class="full_480 col-xs-6 col-md-3">
                    <div class="item facebook_widget sj" data-animate="fadeInUp" data-animation-delay="800">
                        <h3>Our Facebook Fan Page</h3>
                        <div class="content">
                            <iframe 
                                src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FDiscoverQuran&tabs=timeline&width=340&height=200px&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
                                >
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--End footer top-->

    <!-- Footer Last-->
    <div class="footer_last">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-8">
                    <p class="copy_right_msg">Copyright &copy;2009 - 2014 Discover Quran. All Rights Reserved.
                        You are granted the right to copy and distribute contents free of charge for DAWA purposes, without changing the contents and the meaning of the contents. 
                        DISCLAIMER: The Project of Discover Quran does not necessarily share any of the views expressed on this site or any of the linked sites.</p>
                </div>
                <div class="col-xs-12 col-md-4 text-right">
                    <a href="#"><img src="images/site_lock.png" alt="" /></a>
                </div>
            </div>
        </div>
    </div><!-- End Footer Last-->

    <!-- Back to Top Button -->
    <span id="top-link-block" class="affix-top">
        <a href="‪#‎top‬" class="well well-sm btn default_btn" onclick="jQuery('html,body').animate({scrollTop: 0}, 'slow');return false;">
            <i class="glyphicon glyphicon-chevron-up"></i>
        </a>
    </span><!-- End back to top -->
</footer>

<!-- Bootstrap Modal for play youtube video -->
<div id="video_modal" class="modal fade video_modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Modal title</h4>
            </div>
            <div class="modal-body">
                <div id="iframe_video" class="iframe_video"> 
                </div>
            </div> 
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Bootstrap Modal for play youtube video -->
<div id="question_modal" class="modal fade question_modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-xs" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Selection</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="">Select your religion.</label>
                    <select name="select_language" class="selectpicker form-control">
                        <option value="hindu">I am Hindu</option>
                        <option value="buddh">I am Buddh</option>
                        <option value="christian">I am Christian</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Select your Language.</label>
                    <select name="select_language" class="selectpicker form-control" data-live-search="true">
                        <option value="hindu">Bangla</option>
                        <option value="buddh">English</option>
                        <option value="christian">Spanish</option>
                    </select>
                </div>
                <div class="form-group text-center">
                    <input data-dismiss="modal"  type="submit" value="Enter Site" class="btn btn-default dark" />
                </div>
            </div> 
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



<!-- Video Modal -->
<div class="modal fade video_modal" id="video_modal" tabindex="-1" role="dialog" aria-labelledby="video_modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>
            <div class="modal-body">
                <div class="video_frame"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div><!-- End video modal -->


<!-- Iframe Modal -->
<div class="modal fade translator_modal" id="translator_modal" tabindex="-1" role="dialog" aria-labelledby="translator_modal">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Translate Quran</h4>
            </div>
            <div class="modal-body">
                <div class="translator_iframe">

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div><!-- End video modal -->




<!-- Bootstrap Core JS -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Bootstrap Dropdown Select -->
<script src="bower_components/bootstrap-select/dist/js/bootstrap-select.min.js"></script>

<!-- JS for Core Waypoint -->
<script src="js/waypoints.min.js"></script>

<!-- JS for Audio Player -->
<script src="js/mediaelement-and-player.min.js"></script> 


<script type="text/javascript">
            $(document).ready(function () {
                /*========== Code for waypoint ==========*/
                $('.sj').waypoint(function () {
                    var anim = $(this).attr('data-animate'),
                            del = $(this).attr('data-animation-delay');
                    dur = $(this).attr('data-animation-duration');
                    $(this).addClass('animated ' + anim).css({
                        animationDelay: del + 'ms',
                        animationDuration: dur + 'ms'
                    });
                }, {offset: '100%', triggerOnce: true});


                /*===== Code for Mobile Menu =====*/
                $('.navbar-toggle').click(function () {
                    $(this).toggleClass('collapsed');
                    $('body').toggleClass('menu_opened');
                })

                /*========== Bootstrap Dropdown menu on hover ==========*/
                $('.navbar .navbar-nav li.dropdown').mouseover(function () {
                    $(this).addClass('open');
                    $(this).click(function () {
                        $(this).toggleClass('open');
                    });
                });
                $('.navbar .navbar-nav li.dropdown').mouseout(function () {
                    $(this).removeClass('open');
                });

                /*========== Back to top button ==========*/
                if ((jQuery(window).height() + 100) < jQuery(document).height()) {
                    jQuery('#top-link-block').removeClass('hidden').affix({
                        offset: {top: 100}
                    });
                }

                /*========= Bootstrap Dropdown Select ==========*/
                $('.selectpicker').selectpicker();

                /*========== HTML 5 Audio Player =========*/
                $('audio').mediaelementplayer();

                /*========== Bootstrap Modal ==========*/
                $('.click_for_modal').click(function () {
                    var video_url = $(this).attr('data-url');
                    var title = $(this).children().children('h3').text();
                    $('.video_modal .iframe_video').html('<iframe id="youtube_iframe" width="100%" height="400" src="https://www.youtube.com/embed/' + video_url + '" frameborder="0" allowfullscreen></iframe>');
                    $('.video_modal .modal-header h4').text(title);
                });

                /*========== Translate Online Button ==========*/
                $('.translate_online_btn').click(function () {
                    $('.translator_iframe').html('<iframe src="http://www.quranexplorer.com/quran/" frameborder="0"></iframe>');
                });
            });
</script>
</body>
</html>