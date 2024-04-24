<div class="tab-pane fade" id="service-tab-pane" role="tabpanel" aria-labelledby="service-tab" tabindex="0">
    <div class="mt-4">
        <span class="fs-3">Service information:</span>
    </div>
    <form action="" method="post">
        @csrf

        <div class="row mt-3">
            <div class="col-lg-4 col-md-12">
                <label for="rank" class="form-label">Rank:</label>
                <select name="rank" id="rank" class="form-select">
                    
                </select>
            </div>
            <div class="col-lg-4 col-md-12">
                <label for="qlrf" class="form-label">Qlrf:</label>
                <input type="text" name="qlrf" id="qlrf" class="form-control" require>
            </div>
            <div class="col-lg-4 col-md-12">
                <label for="badge_number" class="form-label">Badge number:</label>
                <input type="number" name="badge_number" id="badge_number" class="form-control" require>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-4 col-md-12">
                <label for="entered_service" class="form-label">Date of entered service:</label>
                <input type="date" name="entered_service" id="entered_service" class="form-control" require>
            </div>
            <div class="col-lg-4 col-md-12">
                <label for="last_promotion" class="form-label">Date of Last promotion:</label>
                <input type="date" name="last_promotion" id="last_promotion" class="form-control" require>
            </div>
            <div class="col-lg-4 col-md-12">
                <label for="unit" class="form-label">Unit:</label>
                <select name="unit" id="unit" class="form-select">
                    
                </select>
            </div>
        </div>
        <input type="button" value="Submit" class="btn btn-primary mt-3">
    </form>
</div>