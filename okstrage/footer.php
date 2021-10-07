<div class="f_top"></div>
<footer id="footer">
	<div class="container">
    	<div class="row">
        	<div class="col-sm-12">
            	<div class="cr">Copyright(C) 株式会社YKGホールディングス All rights Reserved.</div>
            </div>
        </div>
    </div>
</footer>

<script>
// sliderのjQuery
$('.slider').slick({
autoplay:true,
autoplaySpeed:5000,
dots:true,
});
</script>

<script>
	jQuery(function(){
		jQuery(".match").matchHeight();
	});
	jQuery(function(){
		var ua = navigator.userAgent.toLowerCase();
		var isMobile = /iphone/.test(ua)||/android(.+)?mobile/.test(ua);
	
		if (!isMobile) {
			jQuery('a[href^="tel:"]').on('click', function(e) {
				e.preventDefault();
			});
		}
	});
	
	jQuery(function(){
		var map;
		var marker;
		var center = {
		lat: 34.576899, // 緯度
		lng: 133.725054 // 経度
	};
	function initialize() {
		var mapOptions = {
			zoom: 15,
			scrollwheel: false,
			center: new google.maps.LatLng(34.576899,133.725054)
		};
	
		map = new google.maps.Map(document.getElementById('map'),
		mapOptions);
		marker = new google.maps.Marker({
			position: center,
			map: map // マーカーを立てる地図を指定
		});
	}
	google.maps.event.addDomListener(window, 'load', initialize);
});
</script>

<script>
    jQuery(function () {
        jQuery(".match").matchHeight();
    });
    jQuery(function () {
        var ua = navigator.userAgent.toLowerCase();
        var isMobile = /iphone/.test(ua) || /android(.+)?mobile/.test(ua);

        if (!isMobile) {
            jQuery('a[href^="tel:"]').on('click', function (e) {
                e.preventDefault();
            });
        }
    });

    jQuery(function () {
        var map;
        var marker;
        var center = {
            lat: 34.5897102, // 緯度
            lng: 133.7593876 // 経度
        };
        function initialize() {
            var mapOptions = {
                zoom: 15,
                scrollwheel: false,
                center: new google.maps.LatLng(34.5897102, 133.7593876)
            };

            map = new google.maps.Map(document.getElementById('map2'),
                mapOptions);
            marker = new google.maps.Marker({
                position: center,
                map: map // マーカーを立てる地図を指定
            });
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    });
</script>
<script>
    jQuery(function () {
        jQuery(".match").matchHeight();
    });
    jQuery(function () {
        var ua = navigator.userAgent.toLowerCase();
        var isMobile = /iphone/.test(ua) || /android(.+)?mobile/.test(ua);

        if (!isMobile) {
            jQuery('a[href^="tel:"]').on('click', function (e) {
                e.preventDefault();
            });
        }
    });

    jQuery(function () {
        var map;
        var marker;
        var center = {
            lat: 34.539750, // 緯度
            lng: 133.743806 // 経度
        };
        function initialize() {
            var mapOptions = {
                zoom: 15,
                scrollwheel: false,
                center: new google.maps.LatLng(34.539750, 133.743806)
            };

            map = new google.maps.Map(document.getElementById('map3'),
                mapOptions);
            marker = new google.maps.Marker({
                position: center,
                map: map // マーカーを立てる地図を指定
            });
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    });
</script>
<div id="pagetop">
    <a href="#"></a>
</div>
</body>

</html>