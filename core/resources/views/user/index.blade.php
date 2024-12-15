@extends('userlayout')

@section('content')
    <main class="page-content" style="margin-top:-20px">
        <div class="container">

            <div class="row gutter-bottom-xl">
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">

                    <div class="widget1 widget1-account-invoice-three">

                        <div class="widget1-heading">
                            <div class="wallet-usr-info">
                                <div class="usr-name">
                                    <span>
                                        <font size="3px"><b>Hi, {{ strtoupper($user->name) }} </b></font>
                                    </span>
                                </div>
                                <div class="add">
                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                                            <line x1="12" y1="5" x2="12" y2="19"></line>
                                            <line x1="5" y1="12" x2="19" y2="12"></line>
                                        </svg></span>
                                </div>
                            </div>
                            <div class="wallet-balance conspbtw">




                                <div class="lefutu">
                                    <p style="font-size: 15px;">Balance</p>
                                </div>
                                <div class="rightu">
                                    <b><span style="font-size:24px; color:#ffffff;">{{ $user->Currency }}<input
                                                type="text" id="balance" value="{{ number_format($user->balance) }}"
                                                style="border-width: 0px; width:50%;" readonly></span></b>
                                    <span class="eye" id="eye" style="font-size:15px; color: #ffffff;"
                                        onclick="toggleEye()"><i class="fa fa-eye-slash"></i></span>

                                </div>




                            </div>
                        </div>

                        <div class="widget1-amount">

                            <div class="w-a-info funds-received">
                                <span>Deposit <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up">
                                        <polyline points="18 15 12 9 6 15"></polyline>
                                    </svg></span>
                                <div class="btn-group mb-3 mt-3 group d-block text-center">
                                    <button class="btn btn-success dropdown-toggle" type="button" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        Deposit
                                    </button>
                                    <div class="dropdown-menu">
                                        <a href="{{ route('user.bank_transfer') }}" class="dropdown-item">Online Deposit</a>
                                        <a href="{{ route('user.fund') }}" class="dropdown-item">Bank Deposit</a>
                                    </div>
                                </div>
                            </div>

                            <div class="w-a-info funds-spent">
                                <span>Transfer <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                                        <polyline points="6 9 12 15 18 9"></polyline>
                                    </svg></span>
                                <div class="btn-group mb-3 mt-3 group d-block text-center">
                                    <button class="btn btn-danger dropdown-toggle" type="button" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        Transfer
                                    </button>
                                    <div class="dropdown-menu">
                                        <a href="{{ route('user.ownbank') }}" class="dropdown-item">Domestic Transfer</a>
                                        <a href="{{ route('user.otherbank') }}" class="dropdown-item">Wire Transfer</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="widget1-content">

                            <div class="bills-stats  text-center">
                                <span class="bg-success">Active</span>
                            </div>

                            <div class="invoice-list">
                                <style>
                                    .inv-detail p {
                                        font-weight: 400 !important;
                                        font-size: 12px !important;
                                    }

                                    .inv-detail span {
                                        font-weight: 400 !important;
                                        font-size: 12px !important;
                                    }
                                </style>
                                <div class="inv-detail">
                                    <div class="info-detail-1">
                                        <p>Name:</p>
                                        <p> <span class="bill-amount text-danger"><b>{{ $user->name }}
                                                    {{ $user->lastname }}</b></span></p>
                                    </div>
                                    <!--<div class="info-detail-2">-->
                                    <!--    <p>Transfer Limit Remain</p>-->
                                    <!--    <p><span class="w-currency text-danger">€</span> <span class="bill-amount text-danger">-350,000</span></p>-->
                                    <!--</div>-->
                                    <!--<div class="info-detail-3">-->
                                    <!--    <p>Last Transaction:</p>-->
                                    <!--    <p><span class="w-currency text-dark">€</span> <span class="bill-amount">350,000</span></p>-->
                                    <!--</div>-->
                                    <div class="info-detail-4">
                                        <p>Account No:</p>
                                        <p><span class="bill-amount text-danger">{{ $user->acct_no }}</span></p>
                                    </div>
                                    <div class="info-detail-5">
                                        <p>Account Type:</p>
                                        <p><span class="bill-amount text-danger">{{ $user->account_type }}</span></p>
                                    </div>
                                    @if ($user->ledger > 0)
                                        <div class="info-detail-5">
                                            <p>Pending Balance:</p>
                                            <p><span class="bill-amount text-danger"><b>${{ $user->ledger }}</b></span>
                                            </p>
                                        </div>
                                        <div class="info-detail-5">
                                            <p><span class="bill-amount text-danger"><i>Attention!!! Your current account
                                                        type is unable to process the credited balance. Please upgrade your
                                                        account to access your pending balance on your available
                                                        balance.</i></span></p>
                                        </div>
                                    @endif
                                </div>
                                <div class="inv-action">
                                    <a href="{{ route('user.statement') }}"
                                        class="btn btn-outline-primary view-details">View Transactions</a>
                                    <a href="{{ route('user.otherbank') }}" class="btn btn-outline-primary pay-now">Wire
                                        Transfer</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


                <div class="col-xl-8 col-lg-6 col-md-6 col-sm-12 col-12 d-flex">
                    <div class="card pb-0">
                        <div class="card__wrapper">
                            <div class="card__container ">
                                <div class="card__header">
                                    <div class="card__header-left">
                                        <h3 class="card__header-title text-success">Recent Transactions</h3>
                                    </div>
                                    <div class="card__tools-more">
                                        <button class="items-more__button">
                                            <svg class="icon-icon-more">
                                                <use xlink:href="#icon-more"></use>
                                            </svg>
                                        </button>
                                    </div>
                                </div>

                                <div class="card__body-x">
                                    <div class="card__scrollbar-x card__table-x">
                                        <div class="card__table-transactions-x scrollbar-thin scrollbar-visible"
                                            data-simplebar="init">
                                            <div class="simplebar-wrapper" style="margin: 0px;">
                                                <div class="simplebar-height-auto-observer-wrapper">
                                                    <div class="simplebar-height-auto-observer"></div>
                                                </div>
                                                <div class="simplebar-mask">
                                                    <div class="simplebar-offset" style="right: 0px; bottom: -17px;">
                                                        <div class="simplebar-content-wrapper"
                                                            style="height: auto; overflow: scroll hidden;">
                                                            <div class="simplebar-content" style="padding: 0px;">
                                                                <table class="table table--lines table--striped p-2">
                                                                    <colgroup>
                                                                        <col class="colgroup-1">
                                                                        <col class="colgroup-2">
                                                                        <col class="colgroup-3">
                                                                        <col class="colgroup-4">
                                                                        <col class="colgroup-5">
                                                                        <col class="colgroup-6">
                                                                        <col>
                                                                    </colgroup>
                                                                    <thead class="table__header table__header--sticky">
                                                                        <tr>
                                                                            <th><span class="text-nowrap">Date</span>
                                                                            </th>
                                                                            <th><span>Type</span>
                                                                            </th>
                                                                            <th><span>Amount</span>
                                                                            </th>
                                                                            <th><span>Status</span>
                                                                            </th>
                                                                            <th><span>Action</span></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @foreach ($alertx as $hh)
                                                                            <tr class="table__row">
                                                                                <td class="table__td">
                                                                                    @if ($hh->valuex == 1)
                                                                                        <span
                                                                                            class="text-grey">{{ date('Y/m/d h:i:A', strtotime($hh->dates)) }}</span>
                                                                                    @elseif($hh->valuex == 0)
                                                                                        <span class="text-grey">
                                                                                            {{ date('Y/m/d h:i:A', strtotime($hh->created_at)) }}</span>
                                                                                    @endif
                                                                                </td>
                                                                                <td class="table__td">
                                                                                    <span>
                                                                                        @if ($hh->type == 1)
                                                                                            <span
                                                                                                style="color: #dc3546">Debit</span>
                                                                                        @elseif($hh->type == 2)
                                                                                            <span
                                                                                                style="color: #17705a">Credit</span>
                                                                                        @endif
                                                                                    </span>
                                                                                </td>
                                                                                <td class="table__td"><span
                                                                                        class="text-grey">{{ $user->Currency }}{{ number_format($hh->amount, 2) }}</span>
                                                                                </td>
                                                                                <td class="table__td">
                                                                                    <div class="media-item">
                                                                                        <div class="media-item__right">
                                                                                            @if ($hh->status == 1)
                                                                                                <h5
                                                                                                    class="media-item__title">
                                                                                                    <font size="2px"
                                                                                                        color="green">
                                                                                                        <b>Successful</b>
                                                                                                    </font>
                                                                                                </h5>
                                                                                            @elseif($hh->status == 0)
                                                                                                <h5
                                                                                                    class="media-item__title">
                                                                                                    <font size="2px"
                                                                                                        color="red">
                                                                                                        <b>Pending</b>
                                                                                                    </font>
                                                                                                </h5>
                                                                                            @endif
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td class="table__td">
                                                                                    <a
                                                                                        href="{{ url('user/dashboard/viewr') }}/{{ $hh->reference }}">View</a>
                                                                                </td>
                                                                            </tr>
                                                                        @endforeach


                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="simplebar-placeholder" style="width: auto; height: 211px;">
                                                </div>
                                            </div>
                                            <div class="simplebar-track simplebar-horizontal"
                                                style="visibility: visible;">
                                                <div class="simplebar-scrollbar"
                                                    style="width: 379px; transform: translate3d(0px, 0px, 0px); display: block;">
                                                </div>
                                            </div>
                                            <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                                                <div class="simplebar-scrollbar"
                                                    style="transform: translate3d(0px, 0px, 0px); display: none;"></div>
                                            </div>
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

    @if (session('alert'))
        <script>
            Swal.fire({
                title: 'Transaction restricted',
                text: '{{ session('alert') }}',
                icon: 'alert',
                confirmButtonText: 'OK'
            });
        </script>
    @endif

    <script>
        function toggleEye() {
            var passInput = document.getElementById('balance');
            var eyeIcon = document.getElementById('eye');
            if (passInput.type === 'password') {
                passInput.type = 'text';
                eyeIcon.innerHTML = '<i class="fa fa-eye-slash"></i>';
            } else {
                passInput.type = 'password';
                eyeIcon.innerHTML = '<i class="fa fa-eye"></i>';
            }
        }
    </script>
@stop
