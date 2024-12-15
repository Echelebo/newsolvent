
@extends('userlayout')

@section('content')
<main class="page-content">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-xl-8">
                        <div class=" modal-account">
                            <div class="modal__overlay" data-dismiss="modal"></div>
                            <!-- <div class="modal__wrap"> -->
                            <div class="modal__window">
                                <div class="modal__content">

                                <div class="modal__body">


                                        <div class="modal-account__pane-header" style="background-color:#17705a; padding:10px;">
                                                    <h4 style="color: #ffffff; font-size:18px">Online Deposit</h4>
                                                </div>

                                                    <h6 class="ml-4 text-danger">Use the below information to make deposit. </h6>
                                        <div class="modal-account__right tab-content">
                                            <div class="modal-account__pane tab-pane show active" id="accountDetails">
                                                    <div class="row row--md">
                                                    <div class="col-12">
                                                            <div class="row row--md">
                                                                <p><a class="text-success"
                                                                    href="mailto:{{$set->csemail}}">Request
                                                                    Account Details</a></p>

                                                                    <br /><br /><p>Contact Customer Billing
                                                                Department for account information</p>
                                                            </div>
                                                        </div>


                                                        <div class="col-md-8"><br /><br />
        <div class="card-x">
          <div class="card-header-x header-elements-inline">
            <h3 class="mb-0">Upload proof</h3>
                <div class="header-elements">
              </div>
          </div>
          <div class="card-body-x">
          <form method="post" action="{{route('bank_transfersubmit')}}" enctype="multipart/form-data">
          @csrf
           <div class="form-group row">
              <div class="col-lg-12">
                <div class="input-group">
                  <span class="input-group-prepend">
                    <span class="input-group-text">{{$user->Currency}}</span>
                  </span>
                <input type="number" step="any" name="amount" max-length="10" class="form-control" placeholder="amount">
                  </div>
                </div>
            </div>
            <div class="form-group row">
              <div class="col-lg-12">
                  <textarea type="text" class="form-control" rows="3" placeholder="Details" name="details" required></textarea>
              </div>
            </div>
            <div class="form-group">
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFileLang1" name="image" lang="en">
                <label class="custom-file-label" for="customFileLang1">Payment proof</label>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
            <div class="text-right">
                <button type="submit" style="background-color: #17705a; color: #ffffff;" class="btn">Proceed</button>
            </div>
                </div>
              </div>
            </div>
          </form>
          </div>
        </div>
      </div>





                                                    <!-- <h6 class="">Account Owner Authorization:</h6> -->





                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                 </div>
            </div>
        </div>
    </main>

@stop