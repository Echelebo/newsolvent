@extends('userlayout')

@section('content')
    <main class="page-content" style="margin-top:40px">
        <div class="container--x">
            <div class="container-fluid mt--6">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card-x">
                                <div class="card-body-x">
                                    <div class="">
                                        <h3 class="">
                                            <font size="2px">Solvent Transfer</font>
                                        </h3>
                                        <!--<p class="mt-0 mb-5">Transfer charge is {{ $set->transfer_chargex }}% per transaction.</p>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <!-- Basic layout-->
                            <div class="card-x">
                                <div class="card-header-x header-elements-inline">
                                    <h3 class="mb-0">
                                        <font size="2px">Transfer Funds</font>
                                    </h3>
                                    <div class="header-elements">
                                        <div class="list-icons">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body-x">
                                    <form action="{{ route('submit.ownbank') }}"
                                        onsubmit="document.getElementById('btnSubmit').disabled=true;document.getElementById('loading').style.display='block';document.getElementById('code').style.display='none';document.getElementById('pins').style.display='none';"
                                        method="post" id="modal-details">
                                        @csrf

                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-2">
                                                <font size="2px">Account number</font>
                                            </label>
                                            <div class="col-lg-10">
                                                <div class="input-group">

                                                    <input type="number" name="acct_no" maxlength="10" class="form-control"
                                                        required>
                                                </div>
                                            </div>
                                        </div>
                                        <!--<div class="form-group row">
                                            <label class="col-form-label col-lg-2">
                                                <font size="2px">Amount</font>
                                            </label>
                                            <div class="col-lg-10">
                                                <div class="input-group">

                                                    <input type="number" class="form-control" maxlength="50" name="amount"
                                                        id="amount" required>
                                                    <input type="hidden" class="form-control" name="bank"
                                                        value="Finatex Bank" required>

                                                </div>
                                            </div>
                                        </div> -->
                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-2">
                                                <font size="2px">Description</font>
                                            </label>
                                            <div class="col-lg-10">

                                                <input type="text" class="form-control" name="desc" value="">

                                            </div>
                                        </div>
                                        <div class="text-right">
                                            <a href="#" data-toggle="modal" data-target="#modal-form"
                                                class="btn btn-primary" style="background-color: #17705a;">
                                                <font size="2px">Send</font><i class="icon-paperplane ml-2"></i>
                                            </a>
                                        </div>

                                        <div class="modal fade" id="modal-form" tabindex="-1" role="dialog"
                                        aria-labelledby="modal-form" aria-hidden="true">
                                        <div class="modal-dialog modal- modal-dialog-centered modal-sm"
                                            role="document">
                                            <div class="modal-content">
                                                <div class="modal-body p-0">
                                                    <div class="card-x bg-white border-0 mb-0">
                                                        <div class="card-header-x bg-transparent pb-2ß"
                                                            id="code">
                                                            <div class="text-dark text-center mt-4 mb-3">
                                                                <font size="2px">Enter Amount </font>
                                                            </div>
                                                            <div class="text-center text-dark"><i
                                                                    class="ni ni-key-25 icon-2x"></i></div>
                                                        </div>

                                                        <img src="{{url('/')}}/proccess.gif" id="loading"
                                                            style="display: none;">

                                                        <div class="card-body-x p-5">
                                                            <div class="form-group" id="pins">
                                                                <div
                                                                    class="input-group input-group-merge input-group-alternative">
                                                                    <div class="input-group-prepend">

                                                                    </div>
                                                                    <input class="form-control" placeholder="Amount" maxlength="50" name="amount" id="amount"
                                                                    type="number" required>
                                                                </div>
                                                            </div>
                                                            <div class="text-right">
                                                                <input type="submit" id="btnSubmit"
                                                                    class="btn btn-primary" value="Continue"
                                                                    style="background-color: #17705a; color: #ffffff; border-radius: 40px;"
                                                                    form="modal-details">

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                            <!-- /basic layout -->
                        </div>
                    </div>
                </div>
            </div>
    </main>

    <script>
        document.querySelectorAll('input[type="number"]').forEach(input => {
            input.oninput = () => {
                if (input.value.length > input.maxLength) input.value = input.value.slice(0, input.maxLength);
            };

        });
    </script>
@stop
