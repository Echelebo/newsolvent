@extends('userlayout')

@section('content')
    <main class="page-content" style="margin-top:40px">
        <div class="container-fluid mt--6">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-x bg-white">
                            <div class="card-body-x text-dark">
                                <div class="">
                                    <h3 class="text-primary">{{ $gate->gateway['name'] }}</h3>
                                    <span
                                        class="mt-0 mb-5">Amount:{{ $user->Currency }}{{ number_format($gate->amount) }}</span><br>
                                    <span class="mt-0 mb-5">Charge:{{ $user->Currency }}{{ $gate->charge }}</span><br>
                                    <span
                                        class="mt-0 mb-5">Total:{{ $user->Currency }}{{ number_format($gate->amount + $gate->charge) }}</span><br><br>
                                    <form action="{{ route('deposit.confirm') }}" method="post">
                                        @csrf
                                        <button type="submit" class="btn btn-primary btn-sm">Confirm</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@stop
