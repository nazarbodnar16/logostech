<footer id="footer" class="main-footer">
    <div class="container">
        <div class="top-footer">
            <div class="row">
                <div class="col-md-7 right-offset">
                    <h4>More than imagery. security.</h4>
                    <p>Logos Technologies LLC is a diversified science, engineering and technology company specializing in the fields of advanced sensors, wide area motion imagery, advanced analytics and processing of large, multi-source datasets. Logos serves government customers including the Department of Defense, Department of Energy and Department of Homeland Security, as well as a range of customers in commercial and international markets.</p>
                </div>
                <div class="col-md-5 offset-md-3">
                    <div class="recent-news">
                        <h5>Recent news</h5>
                        <ul class="recent-news-list">
                            <li><a href="">Logos Wide-Area Motion Imagery Sensor for Insitu Integrator at Eurosatory 2018</a></li>
                            <li><a href="">Logos Wide-Area Motion Imagery Sensor for Insitu Integrator at Eurosatory 2018</a></li>
                            <li><a href="">Logos Wide-Area Motion Imagery Sensor for Insitu Integrator at Eurosatory 2018</a></li>
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
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <h3 class="services-name h4 red-text">Greg D. Poe, Ph.D.</h3>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis ducimus veniam, iste velit repudiandae consequatur, atque doloribus debitis ut voluptates, numquam eaque provident molestias. Similique nobis aperiam ut, veritatis quos ea in ex amet voluptatum modi, soluta et, voluptate aliquid deserunt. Minima voluptatibus, ut eum. Laboriosam, perferendis minus sint quibusdam quia molestiae ullam. Maiores reprehenderit dolorem, consequatur dignissimos iure expedita. Ipsam repellat facere excepturi nostrum enim ratione, ab id voluptates, incidunt voluptatem dignissimos expedita quos velit, inventore corporis. Itaque, incidunt ipsum facere accusamus porro cumque! Magni, voluptatem, expedita sapiente iste, praesentium neque tenetur minus reprehenderit repellat quidem facilis commodi, velit.
    </div>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
  </button>
</div>
</div>
</html>
