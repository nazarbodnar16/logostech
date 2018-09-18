<?php global $webshowcase; ?>

<footer id="footer" class="main-footer">
    <div class="container">
        <div class="top-footer">
            <div class="row">
                <div class="col-md-7 right-offset">
                    <h4>More than imagery. security.</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis saepe perspiciatis soluta assumenda fugit, commodi voluptatum corporis asperiores quae inventore dicta quidem, laudantium eligendi, corrupti tenetur quod deserunt amet libero consequuntur cupiditate provident earum! Perspiciatis officia ut, delectus facilis laborum quaerat, illo autem id corporis mollitia laboriosam illum eum consectetur hic nisi explicabo, sed ducimus. Harum, quo esse assumenda earum illum laboriosam suscipit vitae ipsum libero eos, culpa repellat reiciendis! Fugiat quas distinctio saepe sit officia eligendi ad perferendis earum magnam molestias voluptatum cumque reprehenderit tenetur animi eos, sapiente rem, tempora porro numquam. Blanditiis saepe nam inventore maiores dolor aspernatur.</p>
                </div>
                <div class="col-md-5 offset-md-3">
                    <div class="recent-news">
                        <h5>Recent news</h5>
                        <ul class="recent-news-list">
                            <li><a href="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi, nesciunt.</a></li>
                            <li><a href="">Corrupti animi consectetur perferendis tempora iusto, eligendi fuga adipisci commodi.</a></li>
                            <li><a href="">Consectetur fugit autem soluta, esse minus molestias atque, quaerat excepturi!</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-footer clearfix">
            <span class="copy">
                &copy; copyright logos technologies
            </span>
            <nav class="footer-nav">
                <ul>
                    <li><a href="">privacy policy</a></li>
                    <li><a href="">contact us</a></li>
                    <li><a href="">careers</a></li>
                    <li><a href="">Employeers</a></li>
                </ul>
            </nav>
        </div>
    </div>
</footer>
<div class="search-desctop">
    <form action="">
        <input class="input-search" type="text" placeholder="Type something">
        <input class="input-submit" type="submit" value="Seacrh">
    </form>
</div>
<?php wp_footer(); ?>

<!-- <script>

    $(document).ready(function () {
        setTimeout(function typeit() {
            $("#type-name").typeIt({
                strings: [
                    <?php $banner_phrases = $webshowcase['header_banner_phrases'];
                    if ( ! empty( $banner_phrases ) ) { ?>
                    <?php foreach ( $banner_phrases as $key => $value ) { ?>
                    "<?php if ( ! empty( $value['header_banner_phrase'] ) ) {echo $value['header_banner_phrase'];} ?>",
                    <?php } ?>
                    <?php } ?>],
                speed: 200,
                loop: true,
                loopDelay: 2000,
                autoStart: false,
                lifeLike: true,
                breakLines: false,
                deleteDelay: 1000
            });
        }, 1100);
    });

    function initMap() {
        var lviv = {lat: <?php if( !empty($webshowcase['gmap_latitude']) ) echo $webshowcase['gmap_latitude'];?>,
            lng: <?php if( !empty($webshowcase['gmap_longitude']) ) echo $webshowcase['gmap_longitude'];?>};
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: <?php if( !empty($webshowcase['gmap_zoom']) ) echo $webshowcase['gmap_zoom'];?>,
            center: lviv,
            gestureHandling: "cooperative",
            disableDefaultUI: true,
            scrollwheel: false,
            zoomControl: true,
            streetViewControl: true,
            styles: <?php if( !empty($webshowcase['gmap_style']) ) echo $webshowcase['gmap_style'];?>
        });
        var marker = new google.maps.Marker({
            position: lviv,
            map: map,
            icon: "<?php if( !empty($webshowcase['gmap_icon']) ) echo $webshowcase['gmap_icon']['url'];?>"
        });
    }
</script>

<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=<?php if( !empty($webshowcase['gmap_api_key']) ) echo $webshowcase['gmap_api_key'];?>&callback=initMap">
    </script> -->

</body>
</html>
