@extends('formpeople.wrap')

@section('content_insert')
<!-- content_insert -->
  <div class="table">
    {{ Form::open(['url' => '../public/formpeople', 'method' => 'get']) }}

      <div class="row_td">
      <div class="cell_td cell_td_mobile">
      Name
      </div>
      <div class="cell_td" style="background-color:white;">
          {{ Form::text('name', Input::old('name')) }}
      </div>
      </div>

      <div class="row_td">
      <div class="cell_td cell_td_mobile">
      Last Name
      </div>
      <div class="cell_td" style="background-color:white;">
          {{ Form::text('last_name', Input::old('last_name')) }}
      </div>
      </div>

      <div class="row_td">
      <div class="cell_td cell_td_mobile">
      Code
      </div>
      <div class="cell_td" style="background-color:white;">
          {{ Form::text('code', Input::old('code')) }}
      </div>
      </div>

      <div class="row_td">
      <div class="cell_td cell_td_mobile">
      Email
      </div>
      <div class="cell_td" style="background-color:white;">
          {{ Form::text('email', Input::old('email')) }}
      </div>
      </div>

      <div class="row_td">
      <div class="cell_td cell_td_mobile">
      Address
      </div>
      <div class="cell_td" style="background-color:white;">
          {{ Form::text('address', Input::old('address')) }}
      </div>
      </div>

      <div class="row_td">
      <div class="cell_td" style="background-color:white;">
          {{ Form::button('Save', array('name' => 'save', 'id' => 'save_id')) }}
      </div>
      <div class="cell_td" style="background-color:white;">
      &nbsp;
      </div>
      </div>

<div id="error_validate">
<?php
if(isset($message_array)) {
foreach($message_array as $message) {
echo $message;
}
}
?>
</div>
  </div>
<!-- content_insert -->
@endsection

@section('content_view')
<!-- content_view -->
<div class="table" style="width:100%;">
<div class="row_td">
      <div class="cell_th" style="width:15%;">
      Name
      </div>
      <div class="cell_th" style="width:20%;">
      Last Name
      </div>
      <div class="cell_th" style="width:15%;">
      Code
      </div>
      <div class="cell_th" style="width:25%;">
      Email
      </div>
      <div class="cell_th" style="width:25%;">
      Address
      </div>
</div>
<?php
if(isset($results)) {
foreach($results as $k1=>$results1) {
?>
<div class="row_td">
      <div class="cell_td" style="width:15%;">
      <?php echo($results1->name); ?>
      </div>
      <div class="cell_td" style="width:20%;">
      <?php echo($results1->last_name); ?>
      </div>
      <div class="cell_td" style="width:15%;">
      <?php echo($results1->code); ?>
      </div>
      <div class="cell_td" style="width:25%;">
      <?php echo($results1->email); ?>
      </div>
      <div class="cell_td" style="width:25%;">
      <?php echo($results1->address); ?>
      </div>
</div>
<?php
}
}
?>
</div>
<!-- content_view -->
@endsection