<?php $title = "Kontakt"; ?>
<?php include "includes/header.php"; ?>
<div id="content">
<div class="head-image plugga">
        <div class="head-content">
            <h1>Kontakta oss</h1>
        </div>
</div>

<div class="container content">
    <div class="row">
        <div class="col-sm-6">
            <h1>Kontakt uppgifter</h1>
            <p>Bagers plats 1, 211 18 Malmö<br />
            <a href="tel:0701234567">070 123 45 67</a><br />
            <a href="mailto:coffee@gmail.com">coffee@gmail.com</a></p><br />
            <div id="map"></div>
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
        <div class="col-sm-6">
            <h1>Kontakt formulär</h1>
            <form data-toggle="validator">

                <div class="form-group has-feedback">
                    <label class="control-label">Namn *</label>
                    <input type="text" class="form-control" data-error="Detta fält är obligatoriskt" required>
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <div class="help-block with-errors"></div>
                </div>

                <div class="form-group has-feedback">
                    <label class="control-label">Epost *</label>
                    <input type="email" class="form-control" data-error="Du måste fylla i en giltlig epost" required>
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <div class="help-block with-errors"></div>
                </div>

                <div class="form-group has-feedback">
                    <label class="control-label">Telefonnummer</label>
                    <input type="tel" pattern="^[- 0-9]{1,}$" class="form-control" data-error='Ange en giltligt telefonnummer'>
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <div class="help-block with-errors"></div>
                </div>

                <div class="form-group has-feedback">
                    <label class="control-label">Meddelande *</label>
                    <textarea type="text" class="form-control" rows="4" data-error="Detta fält är obligatoriskt" required></textarea>
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <div class="help-block with-errors"></div>
                </div>
                <label class="help-block">Obligatorisk  = * </label><br />
                <button type="submit" class="btn btn-custom">Skicka meddelande</button>

            </form>
        </div>
    </div>
</div>



<?php include "includes/footer.php"; ?>
