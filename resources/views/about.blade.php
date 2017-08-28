@extends('master')
@section('title', 'About')
@section('content')
<div class="container">
<div class="container" style="padding: 40px;">
 <div class="row visible-on"> 
 <div class="col-xs-6 col-sm-3" style="background-color: #dedef8; box-shadow: inset 1px -1px 1px #444, inset -1px 1px 1px #444;"> 
 <span class="hidden-xs">Extra small</span> 
 <span class="visible-xs">✔ Visible on x-small</span> 
 </div> <div class="col-xs-6 col-sm-3" style="background-color: #dedef8; box-shadow: inset 1px -1px 1px #444, inset -1px 1px 1px #444;">
  <span class="hidden-sm">Small</span> 
  <span class="visible-sm">✔ Visible on small</span> 
  </div> 
  <div class="clearfix visible-xs">
  </div> 
  <div class="col-xs-6 col-sm-3" style="background-color: #dedef8; box-shadow: inset 1px -1px 1px #444, inset -1px 1px 1px #444;">
   <span class="hidden-md">Medium</span> 
   <span class="visible-md">✔ Visible on medium</span> 
   </div>
    <div class="col-xs-6 col-sm-3" style="background-color: #dedef8; box-shadow: inset 1px -1px 1px #444, inset -1px 1px 1px #444;">
     <span class="hidden-lg">Large</span> <span class="visible-lg">✔ Visible on large</span>
      </div
      > </div>
</div>
@endsection