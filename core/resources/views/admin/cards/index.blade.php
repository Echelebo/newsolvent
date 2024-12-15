@extends('master')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h6 class="card-title font-weight-semibold">Cards</h6>
                    </div>
                    <div class="">
                        <table class="table datatable-show-all">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Card Type</th>
                                    <th>Card Option</th>                                                                      
                                    <th>Subject</th>
                                    <th>Status</th>
                                    <th>Created</th>
                                    <th>Updated</th>
                                    <th class="text-center">Action</th>    
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($card as $k=>$val)
                                <tr>
                                    <td>{{++$k}}.</td>
                                    <td>{{$val->cardtype}}</td>
                                    <td>{{$val->cardoption}}</td>
                                    <td>{{$val->subject}}</td>
                                    <td>
                                        @if($val->status==0)
                                            <span class="badge badge-danger">Pending</span>
                                        @elseif($val->status==1)
                                            <span class="badge badge-info">Approved</span> 
                                        @endif
                                    </td>   
                                    <td>{{date("Y/m/d", strtotime($val->created_at))}}</td>  
                                    <td>{{date("Y/m/d h:i:A", strtotime($val->updated_at))}}</td>
                                    <td class="text-center">
                                        <div class="list-icons">
                                            <div class="dropdown">
                                                <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                    <i class="icon-menu9"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class='dropdown-item' href="{{url('/')}}/admin/manage-card/{{$val->id}}/{{$val->user_id}}"><i class="icon-cogs spinner mr-2"></i>Manage Card</a>
                                            
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </td>                   
                                </tr>
                                
                                @endforeach               
                            </tbody>                    
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop