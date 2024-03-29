<?php $title = "Startsida"; ?>
<?php include "includes/header.php"; ?>
<main id="content">
<div class="head-image fp">
    <div class="head-content">
        <h1>Öppettider</h1>
        <h3>Mån - Fre: 7.00 - 21.00</h3>
        <a href="#hitta" aria-label="hidden" class="btn btn-custom">Hitta hit</a>
    </div>
</div>

<div class="container content">
    <h1>Coffee</h1>
    <p>Vi på coffee vill ge dig det bästa kaffet som möjligt i en trivsam miljö som uppmanar till umgänge och kreativitet.
       Vi vill skapa en möteplats där människor träffas och har det trevligt och ha möjlighet att kunna vara produktiva.</p>
</div>
<div class="study-ad">
    <div class="container">

    <h1>Behöver du ett ställe att plugga?</h1>
    <h4>Vi ger alla studenter 20% rabbatt!</h4>
    <p>
        Visa upp ditt mecenat/studentkort i kassan
    </p>
    <a href="plugga.php" aria-label="Read more about studying and working on coffe" class="btn btn-custom">Läs mer</a>
    </div>
</div>

<div class="container">
    <div id="hitta" class="anchor"></div>
    <div class="row">
        <div class="col-sm-6">
            <h1>Hitta hit</h1>
            <p>Coffee är placerat centralt i Malmö i närhet till centralstationen och högskolan.</p>
            <p>Bagers plats 1, 211 18 Malmö</p>
            <a  target="_blank" href="https://www.google.se/maps/place/55%C2%B036'31.4%22N+12%C2%B059'45.9%22E/@55.6087077,12.9947467,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x0!8m2!3d55.6087077!4d12.9960739" class="btn btn-custom">Visa i Google Maps</a>
        </div>

        <div class="col-sm-6">
            <div id="map" aria-label="Map over Bagers plats 1, 211 18 Malmö"></div>
            <script type="text/javascript">
            function initMap() {
                var myLatLng = {lat: 55.6087077, lng: 12.9960739};
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 13,
                    center: myLatLng,
                    disableDefaultUI: true
                });

                var marker = new google.maps.Marker({
                  position: myLatLng,
                  map: map,
                  title: 'Hello World!'
                });
            }
            </script>
            <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAciCS1aAGBmQKIUzMlpV8OPK4Nt58OyCM&callback=initMap"></script>
        </div>
    </div>
</div>



<?php include "includes/footer.php"; ?>
