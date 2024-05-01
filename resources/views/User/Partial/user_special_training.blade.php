<div class="mt-4">
    <span class="fs-3">Special training information:</span>
</div>
<form action="" method="post">
    @csrf

    <div class="row mt-3">
        <div class="col-lg-12 col-md-12">
            <label for="special_course_training" class="form-label">Specialized Course and Training:</label>
            <input type="text" name="special_course_training" id="special_course_training" class="form-control">
        </div>
        <div class="col-lg-12 col-md-12">
            <label for="duration" class="form-label">Duration of training:</label>
            <input type="number" name="duration" id="duration" class="form-control" require>
        </div>
    </div>
    <input type="submit" value="Submit" class="btn btn-primary mt-3">
</form>