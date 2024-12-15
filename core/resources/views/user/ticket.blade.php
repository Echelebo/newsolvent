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
                                    <h3 class="">
                                        <font size="2px">Customer support</font>
                                    </h3>
                                    <a data-toggle="modal" data-target="#modal-formx" href=""
                                        class="btn btn-sm btn-neutral"><i class="fa fa-arrow-right"></i>
                                        <font size="2px">Create request</font>
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
                                        <div class="card-x bg-white border-0 mb-0">
                                            <div class="card-body-x px-5 py-5 px-lg-5 py-lg-5">
                                                <form action="{{ route('submit-ticket') }}" method="post">
                                                    @csrf
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-lg-2">
                                                            <font size="2px">Subject</font>
                                                        </label>
                                                        <div class="col-lg-10">
                                                            <div class="input-group input-group-merge">
                                                                <input type="text" name="subject" maxlength="10"
                                                                    class="form-control" required="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-lg-2">
                                                            <font size="2px">Priority</font>
                                                        </label>
                                                        <div class="col-lg-10">
                                                            <font size="2px"><select class="form-control select"
                                                                    name="category" data-dropdown-css-class="bg-slate-800"
                                                                    data-fouc required>
                                                                    <option value="Low">Low</option>
                                                                    <option value="Medium">Medium</option>
                                                                    <option value="High">High</option>
                                                                </select></font>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-lg-2">
                                                            <font size="2px">Details</font>
                                                        </label>
                                                        <div class="col-lg-10">
                                                            <textarea name="details" class="form-control" rows="4" required></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="text-right">
                                                        <button type="submit" class="btn"
                                                            style="background-color: #17705a; color: #ffffff;">
                                                            <font size="2px">Submit</font>
                                                        </button>
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
                    @foreach ($ticket as $k => $val)
                        <div class="col-md-6">
                            <div class="card-x">
                                <!-- Card body -->
                                <div class="card-body-x">
                                    <div class="row align-items-center">
                                        <div class="col-8">
                                            <!-- Title -->
                                            <h5 class="h3 mb-0 text-primary">
                                                <font size="2px">#{{ $val->ticket_id }}</font>
                                            </h5>
                                        </div>
                                        <div class="col-4 text-right">
                                            <a href="{{ url('/') }}/user/reply-ticket/{{ $val->id }}"
                                                class="btn btn-sm btn-neutral">
                                                <font size="2px">Reply</font>
                                            </a>
                                            <a href="{{ url('/') }}/user/ticket/delete/{{ $val->id }}"
                                                class="btn btn-sm btn-danger">
                                                <font size="2px">Delete</font>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col ml--2">
                                            <font size="2px">
                                                <p class="text-sm text-dark mb-0">Subject: {{ $val->subject }}</p>
                                                <p class="text-sm text-dark mb-0">Priority: {{ $val->priority }}</p>
                                                <p class="text-sm text-dark mb-0">Created:
                                                    {{ date('Y/m/d h:i:A', strtotime($val->created_at)) }}</p>
                                                <p class="text-sm text-dark mb-0">Updated:
                                                    {{ date('Y/m/d h:i:A', strtotime($val->updated_at)) }}</p>
                                                @if ($val->status == 0)
                                                    <span class="badge badge-info">Open</span>
                                                @elseif($val->status == 1)
                                                    <span class="badge badge-danger">Closed</span>
                                                @elseif($val->status == 2)
                                                    <span class="badge badge-success">Resolved</span>
                                                @endif
                                            </font>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>
@stop
