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
<?php //dd($modal['stgreject']);?>
<?php foreach ($modal['column'] as $key => $value): ?>
<?php if ( isset($modal['stgreject'][$key]) || $modal['stgreject'][$key]==null ): ?>
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


          <?php if(isset($value["acuan_columns"]) && $input_class=="has_error"):?>
            <div style="display: block;
              width: 100%;
              padding: 0.375rem 0.75rem;
              line-height: 1.5;
              color: #495057;
              background-color: #fff;
              background-clip: padding-box;
              border: 1px solid #ced4da;
              margin-top:5px;
              border-radius: 0.25rem;">
              <?php foreach($value["acuan_columns"] as $idx=>$additional_data_key):?>
                <?php if($idx==$value["correct_acuan_column_index"]):?>
                  <span style="color:green; font-size:70%; padding:5px;"><?php echo $modal['stgreject'][$additional_data_key];?></span>
                <?php elseif($modal['stgreject'][$additional_data_key]!=""):?>
                  <span style="color:red; font-size:70%; padding:5px; background:#efefef;"><?php echo $modal['stgreject'][$additional_data_key];?></span>
                <?php endif;?>
              <?php endforeach;?>
            </div>
          <?php endif;?>

          <?php if(count($error_descs) > 0):?>
            <ul style="padding-left:15px;margin-bottom:0px;">
          <?php endif;?>
          <?php foreach($error_descs as $error_desc):?>
            <?php //echo explode(" ",$error_desc)[0];?>
            <?php if(strtoupper(explode(" ",$error_desc)[0])==strtoupper($key)):?>
              <li style="color:red; font-size:70%;">{!!$error_desc!!}</li>
            <?php endif;?>
          <?php endforeach;?>
          <?php if(count($error_descs) > 0):?>
            </ul>
          <?php endif;?>
      </div>
  </div>
<?php endif; ?>
<?php endforeach; ?>




{!! Modal::end() !!}
