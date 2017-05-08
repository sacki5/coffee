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
            <p>Bagers plats 1, 211 18 Malmö</p>
            <p>070 123 45 67</p>
            <p>coffee@gmail.com</p>
        </div>
        <div class="col-sm-6">
            <h1>Kontakt formulär</h1>
            <form data-toggle="validator">

                <div class="form-group has-feedback">
                    <label for="inputTwitter" class="control-label">Namn</label>
                    <input type="text" class="form-control" required>
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>

                </div>

                <div class="form-group has-feedback">
                    <label for="inputTwitter" class="control-label">Epost</label>
                    <input type="email" class="form-control" required>
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                </div>

                <div class="form-group has-feedback">
                    <label for="inputTwitter" class="control-label">Telefonnummer</label>
                    <input type="tel" pattern="^[- 0-9]{1,}$" class="form-control" data-error='Ange en giltligt telefonnummer'>
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <div class="help-block with-errors"></div>
                </div>

                <div class="form-group has-feedback">
                    <label for="inputTwitter" class="control-label">Meddelande</label>
                    <textarea type="text" class="form-control" rows="4" required></textarea>
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                </div>

                <button type="submit" class="btn btn-custom">Submit</button>

            </form>
        </div>
    </div>
</div>



<?php include "includes/footer.php"; ?>
