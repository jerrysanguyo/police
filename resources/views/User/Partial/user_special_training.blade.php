<div class="mt-4">
    <span class="fs-3">Special training information:</span>
</div>
@if($hasUserSpecial)
    @php $actionRoute = route('user.user_special.update', ['user_special' => $userSpecial->id]); @endphp
    @php $method = 'post'; @endphp
@else
    @php $actionRoute = route('user.user_special.store'); @endphp
    @php $method = 'post'; @endphp
@endif
<form action="{{ $actionRoute }}" method="POST">
    @csrf
    @if($hasUserSpecial)
        <input type="hidden" name="_method" value="PUT">
    @endif

    <div class="row mt-3">
        <div class="col-lg-12 col-md-12">
            <label for="special_course_training" class="form-label">Specialized Course and Training:</label>
            <input type="text" name="special_course_training" id="special_course_training" class="form-control" value="{{ $userSpecial->special_course_training ?? '' }}">
        </div>
        <div class="col-lg-12 col-md-12">
            <label for="duration" class="form-label">Duration of training:</label>
            <input type="number" name="duration" id="duration" class="form-control" value="{{ $userSpecial->duration ?? '' }}" require>
        </div>
    </div>
    <input type="submit" value="{{$hasUserSpecial ? 'Update' : 'Submit'}}" class="btn btn-primary mt-3">
</form>