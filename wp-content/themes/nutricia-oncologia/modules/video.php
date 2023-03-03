<?php if($video = get_sub_field('video')):
    $poster = get_sub_field('cover'); ?>
    <section class="video" >
        <div class="container">            
            <div class="video__cont" data-aos="fade-right" data-aos-delay="300">
                <video preload playsinline loop >
                    <source src="<?php echo $video['url']; ?>#t=0.4" type="video/mp4">
                </video>
                <?php echo ($poster)? '<img class="cover" src="'.$poster['sizes']['large'].'" alt="Cover"/>':''; ?>
                <div class="controls">
                    <div class="video-controls pause">PAUSE</div>
                </div>
                <svg class="play-button" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="100px" width="100px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                <path fill="#51308F" d="M256,0C114.833,0,0,114.844,0,256s114.833,256,256,256s256-114.844,256-256S397.167,0,256,0z M256,490.667
                    C126.604,490.667,21.333,385.396,21.333,256S126.604,21.333,256,21.333S490.667,126.604,490.667,256S385.396,490.667,256,490.667
                    z"/>
                <path fill="#51308F" d="M357.771,247.031l-149.333-96c-3.271-2.135-7.5-2.25-10.875-0.396C194.125,152.51,192,156.094,192,160v192
                    c0,3.906,2.125,7.49,5.563,9.365c1.583,0.865,3.354,1.302,5.104,1.302c2,0,4.021-0.563,5.771-1.698l149.333-96
                    c3.042-1.958,4.896-5.344,4.896-8.969S360.813,248.99,357.771,247.031z M213.333,332.458V179.542L332.271,256L213.333,332.458z"
                    />
                </svg>
            </div>
        </div>
    </section>
<?php endif; ?>