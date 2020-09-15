{!! Modal::start($modal) !!}



<?php foreach ($modal['column'] as $key => $value): ?>
<?php if ( isset($modal['stgreject'][$key]) ): ?>
  <div class="form-group row">
      <label for="input_name" class="col-sm-4 col-form-label">{!! $key !!}</label>
      <div class="col-sm-8">
          <input type="text" class="form-control" id="{{$key}}" name="{{$key}}" <?php if(isset($value["editable"]) && !$value["editable"]) echo "disabled";?>
                 placeholder="Enter String" value="{{ $modal['stgreject'][$key] }}">
      </div>
  </div>
<?php endif; ?>
<?php endforeach; ?>




{!! Modal::end() !!}
