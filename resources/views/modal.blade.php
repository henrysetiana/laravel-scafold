{!! Modal::start($modal) !!}


<?php
  $error_fields = [];
  if(isset($modal['stgreject']['error_fields']))
  {
    $error_fields = explode("|",strtoupper($modal['stgreject']['error_fields']));
    // var_dump($error_fields);
  }
  $error_descs = [];
  if(isset($modal['stgreject']['error_desc']))
  {
    $error_descs = explode("|",strtoupper($modal['stgreject']['error_desc']));
    // var_dump($error_fields);
  }
?>
<?php foreach ($modal['column'] as $key => $value): ?>
<?php if ( isset($modal['stgreject'][$key]) ): ?>
  <?php
    $input_class = "";
    if(in_array(strtoupper($key),$error_fields))
      $input_class = "has_error";
  ?>
  <div class="form-group row">
      <label for="input_name" class="col-sm-4 col-form-label">{!! $key !!}</label>
      <div class="col-sm-8">
          <input type="text" class="form-control {{$input_class}}" id="{{$key}}" name="{{$key}}" <?php if(isset($value["editable"]) && !$value["editable"] || $input_class!="has_error") echo "disabled";?>
                 placeholder="Enter String" value="{{ $modal['stgreject'][$key] }}">
          <?php foreach($error_descs as $error_desc):?>
            <?php //echo explode(" ",$error_desc)[0];?>
            <?php if(strtoupper(explode(" ",$error_desc)[0])==strtoupper($key)):?>
              <span style="color:red; font-size:70%;">{!!$error_desc!!}</span><br/>
            <?php endif;?>
          <?php endforeach;?>
      </div>
  </div>
<?php endif; ?>
<?php endforeach; ?>




{!! Modal::end() !!}
