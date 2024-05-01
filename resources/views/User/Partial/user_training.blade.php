<div class="mt-4">
    <span class="fs-3">Training information:</span>
</div>
<form action="" method="post">
    @csrf

    <div class="row mt-3">
        <div class="col-lg-12 col-md-12">
            <label for="mandatory_training" class="form-label">Highest mandatory training:</label>
            <select name="mandatory_training" id="mandatory_training" class="form-select">
                
            </select>
        </div>
        <div class="col-lg-6 col-md-12">
            <label for="qlrf" class="form-label">Date of graduation from the latest mandatory schooling:</label>
            <input type="date" name="qlrf" id="qlrf" class="form-control" require>
        </div>
        <div class="col-lg-6 col-md-12">
            <label for="order_of_merit" class="form-label">Order of merit in the last mandatory training (Ranking):</label>
            <input type="text" name="order_of_merit" id="order_of_merit" class="form-control" require>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-lg-4 col-md-12">
            <label for="ftoc" class="form-label">FTOC (For PSOAC & PSSLC ONLY):</label>
            <select name="ftoc" id="ftoc" class="form-select">
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select>
        </div>
        <div class="col-lg-4 col-md-12">
            <label for="eq_result" class="form-label">QE Result:</label>
            <select name="eq_result" id="eq_result" class="form-select">
                <option value="Passed">Passed</option>
                <option value="Failed">Failed</option>
            </select>
        </div>
        <div class="col-lg-4 col-md-12">
            <label for="date_qualifying_exam" class="form-label">Date of qualifying exam:</label>
            <select name="date" id="date_qualifying_exam" class="form-select">
                
            </select>
        </div>
    </div>
    <input type="submit" value="Submit" class="btn btn-primary mt-3">
</form>