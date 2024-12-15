@extends('userlayout')

@section('content')
    <main class="page-content" style="margin-top:-20px">
        <div class="container">
            <div class="row">
                <div class="col-12 col-xl-8">
                    <div class=" modal-account">
                        <div class="modal__overlay" data-dismiss="modal"></div>
                        <!-- <div class="modal__wrap"> -->
                        <div class="modal__window">
                            <div class="modal__content">

                                <div class="modal__body">

                                    <form method="POST" action="{{ url('user/account') }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-account__pane-header"
                                            style="background-color:#17705a; padding:10px;">
                                            <h4 style="color: #ffffff; font-size:18px">Account Profile</h4>
                                        </div>

                                        <h6 class="ml-4 ">Account information</h6>


                                        <div class="modal-account__right tab-content">

                                            <div class="modal-account__pane tab-pane show active" id="accountDetails">
                                                <div class="row row--md">
                                                    <div class="col-12">

                                                        <div class="profimg col-6" id="profimg" style="margin:0 auto;">
                                                            <div class="customer-profile__avatar mb-5">
                                                                <svg viewBox="0 0 252 272"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                    <g filter="url(#filter0_dd)">
                                                                        <path
                                                                            d="M55 199H197V221C197 221 153.752 224 126 224C98.248 224 55 221 55 221V199Z"
                                                                            fill="white"></path>
                                                                    </g>
                                                                    <g filter="url(#filter1_dd)">
                                                                        <path
                                                                            d="M18.235 43.2287C19.2494 23.1848 35.1848 7.24941 55.2287 6.23501C76.8855 5.13899 104.551 4 126 4C147.449 4 175.114 5.13898 196.771 6.23501C216.815 7.24941 232.751 23.1848 233.765 43.2287C234.861 64.8855 236 92.5512 236 114C236 135.449 234.861 163.114 233.765 184.771C232.751 204.815 216.815 220.751 196.771 221.765C175.114 222.861 147.449 224 126 224C104.551 224 76.8855 222.861 55.2287 221.765C35.1848 220.751 19.2494 204.815 18.235 184.771C17.139 163.114 16 135.449 16 114C16 92.5512 17.139 64.8855 18.235 43.2287Z"
                                                                            fill="url(#pattern0)"></path>
                                                                    </g>
                                                                    <defs>
                                                                        <filter id="filter0_dd" x="23" y="183"
                                                                            width="206" height="89"
                                                                            filterUnits="userSpaceOnUse"
                                                                            color-interpolation-filters="sRGB">
                                                                            <feFlood flood-opacity="0"
                                                                                result="BackgroundImageFix"></feFlood>
                                                                            <feColorMatrix in="SourceAlpha" type="matrix"
                                                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0">
                                                                            </feColorMatrix>
                                                                            <feOffset dy="8"></feOffset>
                                                                            <feGaussianBlur stdDeviation="8">
                                                                            </feGaussianBlur>
                                                                            <feColorMatrix type="matrix"
                                                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0">
                                                                            </feColorMatrix>
                                                                            <feBlend mode="normal" in2="BackgroundImageFix"
                                                                                result="effect1_dropShadow"></feBlend>
                                                                            <feColorMatrix in="SourceAlpha" type="matrix"
                                                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0">
                                                                            </feColorMatrix>
                                                                            <feOffset dy="16"></feOffset>
                                                                            <feGaussianBlur stdDeviation="16">
                                                                            </feGaussianBlur>
                                                                            <feColorMatrix type="matrix"
                                                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0">
                                                                            </feColorMatrix>
                                                                            <feBlend mode="normal" in2="effect1_dropShadow"
                                                                                result="effect2_dropShadow"></feBlend>
                                                                            <feBlend mode="normal" in="SourceGraphic"
                                                                                in2="effect2_dropShadow" result="shape">
                                                                            </feBlend>
                                                                        </filter>
                                                                        <filter id="filter1_dd" x="0" y="0" width="252"
                                                                            height="252" filterUnits="userSpaceOnUse"
                                                                            color-interpolation-filters="sRGB">
                                                                            <feFlood flood-opacity="0"
                                                                                result="BackgroundImageFix"></feFlood>
                                                                            <feColorMatrix in="SourceAlpha" type="matrix"
                                                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0">
                                                                            </feColorMatrix>
                                                                            <feOffset dy="12"></feOffset>
                                                                            <feGaussianBlur stdDeviation="8">
                                                                            </feGaussianBlur>
                                                                            <feColorMatrix type="matrix"
                                                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.2 0">
                                                                            </feColorMatrix>
                                                                            <feBlend mode="normal" in2="BackgroundImageFix"
                                                                                result="effect1_dropShadow"></feBlend>
                                                                            <feColorMatrix in="SourceAlpha" type="matrix"
                                                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0">
                                                                            </feColorMatrix>
                                                                            <feOffset dy="2"></feOffset>
                                                                            <feGaussianBlur stdDeviation="2">
                                                                            </feGaussianBlur>
                                                                            <feColorMatrix type="matrix"
                                                                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.05 0">
                                                                            </feColorMatrix>
                                                                            <feBlend mode="normal" in2="effect1_dropShadow"
                                                                                result="effect2_dropShadow"></feBlend>
                                                                            <feBlend mode="normal" in="SourceGraphic"
                                                                                in2="effect2_dropShadow" result="shape">
                                                                            </feBlend>
                                                                        </filter>
                                                                        <pattern id="pattern0"
                                                                            patternContentUnits="objectBoundingBox"
                                                                            width="1" height="1">
                                                                            <use xlink:href="#profileImage"
                                                                                transform="scale(0.00142857)"></use>
                                                                        </pattern>
                                                                        <image id="profileImage" alt="Profile Picture"
                                                                            width="700" height="700"
                                                                            xlink:href="{{ url('/') }}/asset/profile/{{ $cast }}">
                                                                        </image>
                                                                    </defs>
                                                                </svg>
                                                            </div>
                                                            <h4 class="customer-profile__title text-center"
                                                                style="font-size:18px">{{ $user->name }}
                                                                {{ $user->lastname }}</h4>
                                                            <div class="customer-profile__balance text-center mb-4">
                                                                <div class="label label--primary label--lg my-btn1"><span
                                                                        class="label__icon">
                                                                        <svg class="icon-icon-wallet">
                                                                            <use xlink:href="#icon-wallet"></use>
                                                                        </svg></span> Balance:
                                                                    {{ $user->Currency }}{{ number_format($user->balance) }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="row row--md">
                                                        <input type="hidden" name="uid" value="us5971">
                                                        <div class="col-12 col-lg-6 form-group form-group--lg">
                                                            <label class="form-label form-label--sm">Name </label>
                                                            <div class="input-group">
                                                                <input class="input" type="text" name="name"
                                                                    value="{{ $user->name }}" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-lg-6 form-group form-group--lg">
                                                            <label class="form-label form-label--sm">Mobile </label>
                                                            <div class="input-group">
                                                                <input class="input" type="text" name="phone"
                                                                    value="{{ $user->phone }}" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-lg-6 form-group form-group--lg">
                                                            <label class="form-label form-label--sm">Country </label>
                                                            <div class="input-group">
                                                                <input class="input" name="country"
                                                                    value="{{ $user->country }}" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-lg-6 form-group form-group--lg">
                                                            <label class="form-label form-label--sm">Account Type </label>
                                                            <div class="input-group">
                                                                <input class="input" name="account_type"
                                                                    value="{{ $user->account_type }}" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-lg-6 form-group form-group--lg">
                                                            <label class="form-label form-label--sm">Address </label>
                                                            <div class="input-group">
                                                                <input class="input" name="address"
                                                                    value="{{ $user->address }}" required>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>






                                            </div>

                                            <div class="card-order__footer-total pt-3">

                                                <div class="card__container pl-0">
                                                    <div class="row gutter-bottom-sm justify-content-end">


                                                        <div class="card-order__footer-submit  col-12 col-sm">
                                                            <button class="btn" style="background-color: #17705a;"
                                                                type="submit"><span class="button__text-x">UPDATE PROFILE
                                                                </span>
                                                            </button>
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

                    <br />
                    <br />
                    @if ($set->kyc)
                        <div class="card-x" id="kyc">
                            <div class="card-bod-x">
                                <h3 class="card-title-x mb-3">
                                    <font size="2px">Kyc verification</font>
                                </h3>
                                <p class="card-text-x mb-4">
                                    <font size="2px">Upload an identity document, for example, driver licence, voters
                                        card, international passport, national ID.</font>
                                </p>
                                <span class="badge badge-pill badge-primary">
                                    <font size="2px">
                                        @if ($user->kyc_status == 0)
                                            Unverified
                                        @else
                                            Verified
                                        @endif
                                    </font>
                                </span>

                                @if (empty($user->kyc_link))
                                    <form method="post" action="{{ url('user/kyc') }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="customFileLang1"
                                                        name="image" lang="en">
                                                    <label class="custom-file-label" for="customFileLang1">
                                                        <font size="2px">Select document</font>
                                                    </label>
                                                </div>
                                                <span class="form-text text-white">
                                                    <font size="2px">Accepted formats: png, jpg.</font>
                                                </span>
                                            </div>
                                            <div class="card-order__footer-submit  col-12 col-sm">
                                                <button class="btn" style="background-color: #17705a;"
                                                    type="submit"><span class="button__text">UPLOAD </span>
                                                </button>
                                            </div>
                                    </form>
                                @endif
                            </div>
                        </div>
                    @endif
                    <div class="card-x">
                        <div class="card-header-x header-elements-inline">
                            <h3 class="mb-0">
                                <font size="2px">Change account photo</font>
                            </h3>
                        </div>

                        <div class="card-body-x">
                            <form action="{{ url('user/avatar') }}" enctype="multipart/form-data" method="post">
                                @csrf
                                <div class="form-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFileLang"
                                            name="image" accept="image/*">
                                        <label class="custom-file-label" for="customFileLang">
                                            <font size="2px">Select photo</font>
                                        </label>
                                    </div>
                                    <input type="hidden" name="MAX_FILE_SIZE" value="1000000">
                                    <span class="form-text text-muted">
                                        <font size="2px">Accepted formats:png, jpg.</font>
                                    </span>
                                </div>
                                <div class="text-right card-order__footer-submit  col-12 col-sm">
                                    <button type="submit" class="btn" style="background-color: #17705a; color: #ffffff;">
                                        <font size="2px">UPLOAD</font><i class="icon-paperplane ml-2"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>




                </div>



            </div>
        </div>
    </main>
@stop
