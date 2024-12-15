@extends('userlayout')

@section('content')
    <main class="page-content" style="margin-top:40px">
        <div class="container-fluid mt--6">
            <div class="content-wrapper">

                <div class="col-lg-9">
                    <div class="profile-content">
                        <h3 class="admin-heading bg-offwhite">
                            <p>Recent Transactions </p>
                            <span>{{ $user->name }} Transactions</span>
                        </h3>

                        <!-- Admin Heading Title  -->
                        <!-- Admin Heading Title End -->

                        <!-- Transaction List -->
                        <div class="transaction-area">
                            @foreach ($alertx as $hh)
                                <div class="items">
                                    <a href="#" data-toggle="modal" data-target="#modal-form{{ $hh['reference'] }}"
                                        class="" style="background-color: #17705a;">

                                        <div class="row">

                                            <div class="col-md-12 pay-date">

                                                <span class="date">
                                                    <font size="2">Date: @if ($hh->valuex == 1)
                                                            {{ $hh->dates }}
                                                        @elseif($hh->valuex == 0)
                                                            {{ $hh->created_at }}
                                                        @endif, Amt:
                                                        {{ $user->Currency }}{{ number_format($hh->amount, 2) }} , Ref:
                                                        {{ $hh->reference }}, Desc: {{ $hh->details }}</font>
                                                </span>
                                            </div>





                                        </div>

                                    </a>
                                </div>
                            @endforeach
                        </div>
                        <!-- Transaction List End -->



                    </div>
                    <!-- Recent Activity End -->
                </div>

                @foreach ($alertx as $hh)
                    <div class="modal fade" id="modal-form{{ $hh['reference'] }}" tabindex="-1" role="dialog"
                        aria-labelledby="modal-form" aria-hidden="true">
                        <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
                            <div class="modal-content">
                                <div class="modal-body p-0">
                                    <div class="card-x bg-white border-0 mb-0">

                                        <div class="card-header-x bg-transparent pb-2ß">
                                            <center>
                                                @if ($hh->type == 1)
                                                    <i class="ni ni-bold-up" style="color: red; font-size: 50px;"></i><br />
                                                    <font color="black" size="5px"><b>- {{ $user->Currency }}
                                                            {{ number_format($hh->amount, 2) }}</b></font>
                                                @elseif($hh->type == 2)
                                                    <i class="ni ni-bold-down"
                                                        style="color: green; font-size: 50px;"></i><br />
                                                    <font color="black" size="5px"><b>{{ $user->Currency }}
                                                            {{ number_format($hh->amount, 2) }}</b></font>
                                                @endif

                                            </center>

                                        </div>
                                        <div class="row" style="padding-left: 20px;">
                                            <div class="col-md-6 col-sm-4">
                                                <div class="text-dark">
                                                    <font size="2px">Transaction Date: </font>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-4">
                                                @if ($hh->valuex == 1)
                                                    {{ $hh->dates }}
                                                @elseif($hh->valuex == 0)
                                                    {{ $hh->created_at }}
                                                @endif
                                            </div>
                                        </div>
                                        <hr
                                            style="height:1px;width:90%;margin-top: 0.5em;margin-bottom: 0.5em;margin-left: auto;margin-right: auto;border-width: 1px;">
                                        @if ($hh->type == 1)
                                            <div class="row" style="padding-left: 20px;">
                                                <div class="col-md-6 col-sm-4">
                                                    <div class="text-dark">
                                                        <font size="2px">Debit Account: </font>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-4">
                                                    {{ $hh->account }}
                                                </div>
                                            </div>
                                            <hr
                                                style="height:0.5px;width:90%;margin-top: 0.5em;margin-bottom: 0.5em;margin-left: auto;margin-right: auto;border-width: 1px;">

                                            <div class="row" style="padding-left: 20px;">
                                                <div class="col-md-6 col-sm-4">
                                                    <div class="text-dark">
                                                        <font size="2px">Credit Account: </font>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-4">
                                                    {{ $hh->sender_acctno }}
                                                </div>
                                            </div>
                                        @elseif($hh->type == 2)
                                            <div class="row" style="padding-left: 20px;">
                                                <div class="col-md-6 col-sm-4">
                                                    <div class="text-dark">
                                                        <font size="2px">Credit Account: </font>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-4">
                                                    {{ $hh->account }}
                                                </div>
                                            </div>
                                            <hr
                                                style="height:0.5px;width:90%;margin-top: 0.5em;margin-bottom: 0.5em;margin-left: auto;margin-right: auto;border-width: 1px;">

                                            <div class="row" style="padding-left: 20px;">
                                                <div class="col-md-6 col-sm-4">
                                                    <div class="text-dark">
                                                        <font size="2px">Debit Account: </font>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-4">
                                                    {{ $hh->sender_acctno }}
                                                </div>
                                            </div>
                                        @endif
                                        <hr
                                            style="height:0.5px;width:90%;margin-top: 0.5em;margin-bottom: 0.5em;margin-left: auto;margin-right: auto;border-width: 1px;">

                                        <div class="row" style="padding-left: 20px;">
                                            <div class="col-md-6 col-sm-4">
                                                <div class="text-dark">
                                                    <font size="2px">
                                                        @if ($hh->type == 1)
                                                            Beneficiary Bank:
                                                        @elseif($hh->type == 2)
                                                            Sender Bank:
                                                        @endif
                                                    </font>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-4">
                                                {{ $hh->sender_bankname }}
                                            </div>
                                        </div>
                                        <hr
                                            style="height:0.5px;width:90%;margin-top: 0.5em;margin-bottom: 0.5em;margin-left: auto;margin-right: auto;border-width: 1px;">

                                        <div class="row" style="padding-left: 20px;">
                                            <div class="col-md-6 col-sm-4">
                                                <div class="text-dark">
                                                    <font size="2px">Reference: </font>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-4">
                                                {{ $hh->reference }}
                                            </div>
                                        </div>
                                        <hr
                                            style="height:0.5px;width:90%;margin-top: 0.5em;margin-bottom: 0.5em;margin-left: auto;margin-right: auto;border-width: 1px;">

                                        <div class="row" style="padding-left: 20px;">
                                            <div class="col-md-6 col-sm-4">
                                                <div class="text-dark">
                                                    <font size="2px">Balance: </font>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-4">
                                                {{ $user->Currency }}{{ number_format($hh->balance, 2) }}
                                            </div>
                                        </div>
                                        <hr
                                            style="height:0.5px;width:90%;margin-top: 0.5em;margin-bottom: 0.5em;margin-left: auto;margin-right: auto;border-width: 1px;">
                                        <div class="row" style="padding-left: 20px;">
                                            <div class="col-md-6 col-sm-4">
                                                <div class="text-dark">
                                                    <font size="2px">Amount: </font>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-4">
                                                {{ $user->Currency }}{{ number_format($hh->amount, 2) }}
                                            </div>
                                        </div>
                                        <hr
                                            style="height:0.5px;width:90%;margin-top: 0.5em;margin-bottom: 0.5em;margin-left: auto;margin-right: auto;border-width: 1px;">
                                        <div class="row" style="padding-left: 20px;">
                                            <div class="col-md-6 col-sm-4">
                                                <div class="text-dark">
                                                    <font size="2px">Status: </font>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-4">
                                                @if ($hh->status == 1)
                                                    Successful
                                                @elseif($hh->status == 0)
                                                    Pending
                                                @endif
                                            </div>
                                        </div>
                                        <hr
                                            style="height:0.5px;width:90%;margin-top: 0.5em;margin-bottom: 0.5em;margin-left: auto;margin-right: auto;border-width: 1px;">
                                        <div class="row" style="padding-left: 20px;">
                                            <div class="col-md-6 col-sm-6">
                                                <div class="text-dark">
                                                    <font size="2px">Type: </font>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-4">
                                                @if ($hh->type == 1)
                                                    Debit
                                                @elseif($hh->type == 2)
                                                    Credit
                                                @endif
                                            </div>
                                        </div>
                                        <hr
                                            style="height:0.5px;width:90%;margin-top: 0.5em;margin-bottom: 0.5em;margin-left: auto;margin-right: auto;border-width: 1px;">
                                    </div>
                                    <br />
                                    <br />
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@stop
