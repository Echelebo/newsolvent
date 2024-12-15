<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>

@extends('userlayout')

@section('content')
    <main class="page-content" style="margin-top:40px">
        <div class="container-fluid mt--6">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card-x bg-white">
                            <div class="card-body-x">
                                @foreach ($reference as $hh)
                                    <div class="text-center" style="width: 40px; margin: auto;">
                                        @if ($hh->status == 1)
                                            <img src="{{ url('/') }}/newe/img/mark.png"
                                            @elseif($hh->status == 0) <img
                                                src="{{ url('/') }}/newe/img/pending.png" @endif /
                                            >
                                    </div>
                                    <h4 class="text-center mt-5">
                                        @if ($hh->status == 1)
                                            Successful
                                        @elseif($hh->status == 0)
                                            Pending
                                        @endif
                                    </h4>
                                    @if ($hh->type == 1)
                                        <h3 class="text-center" style="color:darkred;"><b>-
                                                {{ $user->Currency }}{{ number_format($hh->amount) }}</b></h3>
                                    @elseif($hh->type == 2)
                                        <h3 class="text-center" style="color:#17705a;">
                                            <b>{{ $user->Currency }}{{ number_format($hh->amount) }}</b>
                                        </h3>
                                    @endif
                                    <p class="text-center">
                                        @if ($hh->valuex == 1)
                                            {{ $hh->dates }}
                                        @elseif($hh->valuex == 0)
                                            {{ $hh->created_at }}
                                        @endif
                                    </p>

                                    <div class="text-right" style="margin-right: 5px; margin-top: 100px;">
                                        <br />
                                        <a href="{{ route('user.dashboard') }}" class="btn"
                                            style="background-color: #17705a; color: #ffffff;">
                                            <font size="2px">OK</font><i class="icon-paperplane ml-2"></i>
                                        </a>
                                        <a href="#" data-toggle="modal" data-target="#modal-form{{ $hh->reference }}"
                                            class="btn"
                                            style="background-color: #17705a; color: #ffffff; margin-left: 10px;">
                                            <font size="2px">View Receipt</font><i class="icon-paperplane ml-2"></i>
                                        </a>
                                    </div>

                                    <div class="modal fade" id="modal-form{{ $hh->reference }}" tabindex="-1"
                                        role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                                        <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
                                            <div class="modal-content" id="modalContent">
                                                <div class="modal-body p-0">
                                                    <div class="card-x bg-white border-0 mb-0">
                                                        <div class="card-body-x p-5">

                                                            <div class="text-left" style="width: 100px; margin-left: 5px; ">
                                                                <img
                                                                    src="{{ url('/') }}/asset/{{ $logo->image_link }}" />
                                                            </div>

                                                            @if ($hh->type == 1)
                                                                <h3 class="text-center mt-5" style="color:darkred;"><b>-
                                                                        {{ $user->Currency }}{{ number_format($hh->amount) }}</b>
                                                                </h3>
                                                            @elseif($hh->type == 2)
                                                                <h3 class="text-center mt-5" style="color:#17705a;">
                                                                    <b>{{ $user->Currency }}{{ number_format($hh->amount) }}</b>
                                                                </h3>
                                                            @endif

                                                            <h4 class="text-center">
                                                                @if ($hh->status == 1)
                                                                    Successful Transaction
                                                                @elseif($hh->status == 0)
                                                                    Pending
                                                                @endif
                                                            </h4>
                                                            <p class="text-center">
                                                                @if ($hh->valuex == 1)
                                                                    {{ $hh->dates }}
                                                                @elseif($hh->valuex == 0)
                                                                    {{ $hh->created_at }}
                                                                @endif
                                                            </p>
                                                            <div class="conspbtw" style="width: 90%; margin: auto;">



                                                                <div class="lefutu">
                                                                    @if ($hh->type == 1)
                                                                        <span>Sender: </span><br />
                                                                        <span>Recipient: </span><br />
                                                                    @elseif($hh->type == 2)
                                                                        <span>Recipient: </span><br />
                                                                        <span>Sender: </span><br />
                                                                    @endif
                                                                    @if ($hh->type == 1)
                                                                        <span>Recipient Bank:</span><br />
                                                                    @elseif($hh->type == 2)
                                                                        <span>Sender Bank:</span><br />
                                                                    @endif
                                                                    <span>Reference: </span><br />
                                                                    <span>Amount: </span><br />
                                                                </div>
                                                                <div class="rightu">
                                                                    @if ($hh->type == 1)
                                                                        <span>{{ $hh->account }}</span><br />
                                                                        <span>{{ $hh->sender_acctno }}</span><br />
                                                                    @elseif($hh->type == 2)
                                                                        <span>{{ $hh->account }}</span><br />
                                                                        <span>{{ $hh->sender_acctno }}</span><br />
                                                                    @endif
                                                                    <span>{{ $hh->sender_bankname }}</span><br />
                                                                    <span>{{ $hh->reference }}</span><br />
                                                                    <span>{{ $user->Currency }}{{ number_format($hh->amount, 2) }}</span><br />
                                                                </div>
                                                            </div>
                                @endforeach


                                <div>

                                    <button class="text-left btn"
                                        style="margin-top: 20px; background-color: #17705a; color: #ffffff;"
                                        onclick="window.print();">
                                        <font size="2px">Save As PDF</font><i class="icon-paperplane ml-2"></i>
                                    </button>
                                    <button class="text-right btn"
                                        style="margin-left: 50px; margin-top: 20px; background-color: #17705a; color: #ffffff;"
                                        id="saveAsImageBtn">
                                        <font size="2px">Save As Image</font><i class="icon-paperplane ml-2"></i>
                                    </button>
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

    <script>
        document.getElementById('saveAsImageBtn').addEventListener('click', function() {
            var element = document.getElementById('modalContent'); // Your modal content ID
            html2canvas(element).then(function(canvas) {
                var link = document.createElement('a');
                link.download = 'receipt.png';
                link.href = canvas.toDataURL('image/png');
                link.click();
            });
        });
    </script>



@stop
