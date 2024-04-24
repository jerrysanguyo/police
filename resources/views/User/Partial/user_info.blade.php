<div class="tab-pane fade show active" id="personal-tab-pane" role="tabpanel" aria-labelledby="personal-tab" tabindex="0">
    <div class="mt-4">
        <span class="fs-3">Personal information:</span>
    </div>
    <div class="row mt-3">
        <div class="col-lg-4 col-md-4">
            <label for="fn" class="form-label">First name:</label>
            <input type="text" name="first_name" id="fn" class="form-control" value="{{ Auth::user()->first_name }}" readonly>
        </div>
        <div class="col-lg-4 col-md-4">
            <label for="mn" class="form-label">Middle name:</label>
            <input type="text" name="middle_name" id="mn" class="form-control" value="{{ Auth::user()->middle_name }}" readonly>
        </div>
        <div class="col-lg-4 col-md-4">
            <label for="ln" class="form-label">Last name:</label>
            <input type="text" name="last_name" id="ln" class="form-control" value="{{ Auth::user()->last_name }}" readonly>
        </div>
    </div>
    <form action="" method="post">
        @csrf

        <div class="row mt-3">
            <div class="col-lg-3 col-md-6">
                <label for="birthdate" class="form-label">Birthdate:</label>
                <input type="date" name="birthdate" id="birthdate" class="form-control" require>
            </div>
            <div class="col-lg-3 col-md-6">
                <label for="age" class="form-label">Age:</label>
                <input type="number" name="age" id="age" class="form-control" require>
            </div>
            <div class="col-lg-3 col-md-6">
                <label for="height" class="form-label">Height:</label>
                <input type="number" name="height" id="height" class="form-control" require>
            </div>
            <div class="col-lg-3 col-md-6">
                <label for="weight" class="form-label">Weight:</label>
                <input type="number" name="weight" id="weight" class="form-control" require>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-3 col-md-6">
                <label for="hip" class="form-label">Hip:</label>
                <input type="number" name="hip" id="hip" class="form-control" require>
            </div>
            <div class="col-lg-3 col-md-6">
                <label for="waist" class="form-label">Waist:</label>
                <input type="number" name="waist" id="waist" class="form-control" require>
            </div>
            <div class="col-lg-3 col-md-6">
                <label for="bmi_result" class="form-label">BMI result:</label>
                <input type="text" name="bmi_result" id="bmi_result" class="form-control" require>
            </div>
            <div class="col-lg-3 col-md-6">
                <label for="bmi_category" class="form-label">BMI category:</label>
                <select name="bmi_category" id="bmi_category" class="form-select" require>
                    <option value="Under weight">Under weight</option>
                    <option value="Normal weight">Normal weight</option>
                    <option value="Over weight">Over weight</option>
                    <option value="Obese 1">Obese 1</option>
                    <option value="Obese 2">Obese 2</option>
                </select>
            </div>
        </div>
        <input type="button" value="Submit" class="btn btn-primary mt-3">
    </form>
</div>