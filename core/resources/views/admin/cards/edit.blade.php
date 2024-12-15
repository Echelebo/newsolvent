@extends('master')

@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h6 class="card-title font-weight-semibold">Update Card</h6>
                </div>
                <div class="card-body">
                        <form action="{{url('admin/card-update')}}" method="post">
                        @csrf
                        
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Subject:</label>
                            <div class="col-lg-10">
                                <input type="" hidden value="{{$card->id}}" name="id">
                                <input type="text" name="subject" class="form-control" value="{{$card->subject}}">
                                <input type="hidden" name="user_id" class="form-control" value="{{$user_id}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Card Number:</label>
                            <div class="col-lg-10">
                                <input type="text" name="cardnumber" class="form-control" value="{{$card->cardnumber}}">
                            </div>
                        </div>  
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Card Type:</label>
                            <div class="col-lg-10">
                                <input type="text" name="cardtype" class="form-control" value="{{$card->cardtype}}">
                            </div>
                        </div> 
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Card Option:</label>
                            <div class="col-lg-10">
                                <input type="text" name="cardoption" class="form-control" value="{{$card->cardoption}}">
                            </div>
                        </div> 
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Status:</label>
                            <div class="col-lg-10 id_100">
                                <select name="status" class="form-control">
                                    <option value="1">Approved</option>
                                    <option value="0">Pending</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Description:</label>
                            <div class="col-lg-10">
                                
                                <input type="text" name="descrip" class="form-control" value="{{$card->descrip}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Expiring Month:</label>
                            <div class="col-lg-10">
                                
                                <input type="number" name="exmonth" class="form-control" value="{{$card->exmonth}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Expiring Year:</label>
                            <div class="col-lg-10">
                                
                                <input type="number" name="exyear" class="form-control" value="{{$card->exyear}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Card CVV:</label>
                            <div class="col-lg-10">
                                
                                <input type="number" name="cardcvv" class="form-control" value="{{$card->cardcvv}}">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Card Pin:</label>
                            <div class="col-lg-10">
                                <input type="number" name="cardpin" class="form-control" value="{{$card->cardpin}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Card Balance:</label>
                            <div class="col-lg-10">
                                <input type="text" name="cardbal" class="form-control" value="{{$card->cardbal}}">
                            </div>
                        </div>   
                          
                    
                        <div class="text-right">
                            <button type="submit" class="btn bg-dark">Update<i class="icon-paperplane ml-2"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
    
    
    </div>
    
</div>
<script>
$("div.id_100 select").val("<?php echo $card->status; ?>");

</script>

@stop
