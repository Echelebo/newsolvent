@extends('userlayout')

@section('content')
<main class="page-content" style="margin-top:40px">
<div class="container-fluid mt--6">

  <div class="content-wrapper">
    <div class="row">
      <div class="col-lg-12">
        <div class="card-x bg-white">
          <div class="card-body-x">
            <div class="">
              <h3 class="">Loan management</h3>
              <a href="#" data-toggle="modal" data-target="#modal-formx" class="btn" style="background-color: #17705a;">Submit a proposal</a>
              <a href="#" data-toggle="modal" data-target="#modal-form" class="btn" style="background-color: #17705a;">Update bank details</a>
            </div>
            <br />
            <br />
          </div>
        </div>
      </div>
    </div>
    @if (count($loan) > 0)
    <div>
    <div class="row">
      @foreach($loan as $val)
       <div class="col-md-4">
        <div class="card-x bg-white">
          <!-- Card body -->
          <div class="card-body-x">
            <div class="row align-items-center">
              <div class="col-8">
                <!-- Title -->
                <h5 class="h3 mb-0 text-primary"># {{$val->reference}}</h5>
              </div>
              @if($val->status==1)
              <div class="col-4 text-right">
                <a href="{{url('/')}}/user/payloan/{{$val->id}}" class="btn btn-sm btn-danger">Pay</a>
              </div>
              @endif
            </div>
            <div class="row align-items-center">
              <div class="col ml--2">
                <p class="text-sm text-dark mb-0">Payback: {{$currency->symbol.number_format($val->amount)}}</p>
                <p class="text-sm text-dark mb-0">Created: {{date("Y/m/d h:i:A", strtotime($val->created_at))}}</p>
                <p class="text-sm text-dark mb-0">Details: {{$val->details}}</p>
                <span class="text-success">●</span>
                <small class="text-success">
                 @if($val->status==1)
                    Paid out
                  @elseif($val->status==0)
                    On hold
                  @elseif($val->status==2)
                    Completed
                  @endif
                </small>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    <div class="modal fade" id="modal-formx" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
            <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
              <div class="modal-content">
                <div class="modal-body p-0">
                  <div class="card-x border-0 mb-0">
                    <div class="card-header-x bg-transparent pb-2ß">
                      <div class="text-primary text-center mt-2 mb-3">Submit loan proposal</div>
                    </div>
                    <div class="card-body-x px-lg-5 py-lg-5">
                      <form role="form" action="{{url('user/loansubmit')}}" method="post">
                        @csrf
                        <div class="form-group">
                          <div class="input-group input-group-merge input-group-alternative">
                            <div class="input-group-prepend">
                              <span class="input-group-text">{{$user->Currency}}</span>
                            </div>
                            <input type="number" name="amount" class="form-control">
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="input-group input-group-merge input-group-alternative">
                            <textarea type="text" name="details" placeholder="Details" rows="5" class="form-control"></textarea>
                          </div>
                        </div>
                        <div class="text-right">
                          <button type="submit" class="btn" style="background-color: #17705a;">Submit</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
            <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
              <div class="modal-content">
                <div class="modal-body p-0">
                  <div class="card-x border-0 mb-0">
                    <div class="card-header-x bg-transparent pb-2ß">
                      <div class="text-primary text-center mt-2 mb-3">Ensure your currency corresponds with ours!. payments will be delayed for decrepancies</div>
                    </div>
                    <div class="card-body-x px-lg-5 py-lg-5">
                      <form role="form" action="{{url('user/bankupdate')}}" method="post">
                      @csrf
                        <div class="form-group">
                          <div class="input-group input-group-merge input-group-alternative">
                            <input type="text" name="name" placeholder="Bank name" class="form-control" value="{{$bank['name']}}">
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="input-group input-group-merge input-group-alternative">
                            <input type="text" name="acct_name" placeholder="Account name" class="form-control" value="{{$bank['acct_name']}}">
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="input-group input-group-merge input-group-alternative">
                            <input type="text" name="address" placeholder="Bank address" class="form-control" value="{{$bank['address']}}">
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="input-group input-group-merge input-group-alternative">
                            <input type="text" name="iban" placeholder="Iban code" class="form-control" value="{{$bank['iban']}}">
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="input-group input-group-merge input-group-alternative">
                            <input type="text" name="swift" placeholder="Swift code" class="form-control" value="{{$bank['swift']}}">
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="input-group input-group-merge input-group-alternative">
                            <input type="number" name="acct_no" placeholder="Account number" class="form-control" value="{{$bank['acct_no']}}">
                          </div>
                        </div>
                        <div class="text-right">
                          <button type="submit" class="btn" style="background-color: #17705a;">Submit</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

 </div>
 </div>
 @else
 <div>You don't have any active loan.
     </div>
 @endif
 </div>
 </main>





  @stop