@extends('userlayout')

@section('content')
    <div class="container-fluid mt--6">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card bg-white">
                        <div class="card-body">
                            <div class="">
                                <h3 class="">
                                    <font size="2px">Service charge {{ $set->saving_charge }}%, intereset
                                        {{ $set->saving_interest }}%</font>
                                </h3>
                                <a data-toggle="modal" data-target="#modal-formx" href=""
                                    class="btn btn-sm btn-neutral"><i class="fa fa-arrow-right"></i>
                                    <font size="2px"> Apply now</font>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="modal fade" id="modal-formx" tabindex="-1" role="dialog" aria-labelledby="modal-form"
                        aria-hidden="true">
                        <div class="modal-dialog modal- modal-dialog-centered modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-body p-0">
                                    <div class="card bg-white border-0 mb-0">
                                        <div class="card-body px-lg-5 py-lg-5">
                                            <form action="{{ route('submitsave') }}" method="post" id="modal-details">
                                                @csrf
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-2">
                                                        <font size="2px">Amount</font>
                                                    </label>
                                                    <div class="col-lg-10">
                                                        <div class="input-group">
                                                            <span class="input-group-prepend">
                                                                <span
                                                                    class="input-group-text">{{ $currency->symbol }}</span>
                                                            </span>
                                                            <input type="number" class="form-control" name="amount"
                                                                id="amount" required>
                                                            <span class="input-group-append">
                                                                <span class="input-group-text">00</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-2" for="exampleDatepicker">
                                                        <font size="2px">End date</font>
                                                    </label>
                                                    <div class="col-lg-10">
                                                        <div class="input-group">
                                                            <span class="input-group-prepend">
                                                                <span class="input-group-text"><i
                                                                        class="ni ni-calendar-grid-58"></i></span>
                                                            </span>
                                                            <input type="text" class="form-control datepicker"
                                                                name="end_date"value="06/20/2020" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-2">
                                                        <font size="2px">Target
                                                    </label>
                                                    <div class="col-lg-10">
                                                        <font size="2px"><select class="form-control"
                                                                id="exampleFormControlSelect1" name="target">
                                                                <option>Birthday</option>
                                                                <option>Birth of child</option>
                                                                <option>Christmas</option>
                                                                <option>Holiday</option>
                                                                <option>Rent</option>
                                                                <option>Salah</option>
                                                                <option>School fees</option>
                                                                <option>Wedding</option>
                                                                <option>Other</option>
                                                            </select></font>
                                                    </div>
                                                </div>
                                                <div class="text-right">
                                                    <a href="#" data-toggle="modal" data-target="#modal-form"
                                                        class="btn btn-primary">
                                                        <font size="2px">Process</font><i
                                                            class="icon-paperplane ml-2"></i>
                                                    </a>
                                                </div>
                                                <div class="modal fade" id="modal-form" tabindex="-1" role="dialog"
                                                    aria-labelledby="modal-form" aria-hidden="true">
                                                    <div class="modal-dialog modal- modal-dialog-centered modal-sm"
                                                        role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-body p-0">
                                                                <div class="card bg-white border-0 mb-0">
                                                                    <div class="">
                                                                    </div>
                                                                    <div class="card-body px-lg-5 py-lg-5">
                                                                        <div class="text-dark text-center mt-2 mb-3">
                                                                            <font size="2px">The entered amount will be
                                                                                removed from your account and won't be
                                                                                available to you till the end date.</font>
                                                                        </div>
                                                                        <div class="text-center">
                                                                            <button type="submit" class="btn btn-primary"
                                                                                form="modal-details">
                                                                                <font size="2px">Confirm</font>
                                                                            </button>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($save as $val)
                    <div class="col-md-4">
                        <div class="card bg-white">
                            <!-- Card body -->
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                    </div>
                                    <div class="col ml--2">
                                        <h4 class="mb-0">
                                            <a href="JAVASCRIPT:VOID;" class="text-primary">
                                                <font size="2px">{{ $val->target }} </font><span
                                                    class="badge badge-pill badge-danger">
                                                    <font size="2px">Ref: #{{ $val->reference }}</font>
                                                </span>
                                            </a>
                                        </h4>
                                        <p class="text-sm text-dark mb-0">
                                            <font size="2px">Amount:
                                                {{ $currency->symbol }}{{ number_format($val->amount) }}</font> <span
                                                class="text-success">
                                                <font size="2px">
                                                    +{{ $currency->symbol }}{{ number_format(($val->amount * $set->saving_interest) / 100) }}(interest)
                                                </font>
                                            </span>
                                        </p>
                                        <p class="text-sm text-dark mb-0">
                                            <font size="2px">End date:
                                                {{ date('Y/m/d h:i:A', strtotime($val->end_date)) }}</font>
                                        </p>
                                        <p class="text-sm text-dark mb-0">
                                            <font size="2px">Created:
                                                {{ date('Y/m/d h:i:A', strtotime($val->created_at)) }}</font>
                                        </p>
                                        <span class="badge badge-pill badge-info">
                                            <font size="2px">Fee:
                                                {{ $currency->symbol }}{{ number_format(($val->amount * $set->saving_charge) / 100) }}
                                            </font>
                                        </span>
                                        <span class="text-success">●</span>
                                        <small class="text-success">
                                            <font size="2px">
                                                @if ($val->status == 1)
                                                    Paid out
                                                @else
                                                    On hold
                                                @endif
                                            </font>
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @stop
