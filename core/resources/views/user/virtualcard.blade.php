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

                                <!-- <a class="modal__close text-danger">
                                <svg class="icon-icon-help">
                                        <use xlink:href="#icon-help"></use>
                                    </svg>
                             </a> -->

                                <div class="modal__body">

                                        <form method="POST" action="{{route('submit.virtualcards')}}">
                                            @csrf
                                        <div class="modal-account__pane-header" style="background-color:#17705a; padding:10px;">
                                                    <h4 style="color: #ffffff; font-size:18px">Request Debit Card</h4>
                                                </div>
                                        <div class="modal-account__right tab-content">

                                            <div class="modal-account__pane tab-pane show active" id="accountDetails">

                                                    <div class="row row--md">

                                                        <div class="col-12">
                                                            <div class="row row--md">

                                                                <div class="col-12 col-lg-6 form-group form-group--lg">
                                                                    <label class="form-label form-label--sm">Subject</label>
                                                                    <div class="input-group">
                                                                        <input class="input" type="text" name="subject" placeholder="Subject">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-12">
                                                            <div class="row row--md">
                                                            <div class="col-12 col-lg-6 form-group form-group--lg mb-5">
                                                                    <label class="form-label form-label--sm text-danger">Card Type</label>
                                                                    <div class="input-group input-group--append">
                                                                        <select class="input js-input-select-x input--fluid-x select2-hidden-accessible-x" name="cardtype" data-placeholder="Select Card Type" required="" tabindex="-1" aria-hidden="true">
                                                                            <option value="" selected="selected">Select Card Type
                                                                            </option>
                                                                            <option value="visa">Visa
                                                                            </option>
                                                                            <option value="master">Master
                                                                            </option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-lg-6 form-group form-group--lg mb-5">
                                                                    <label class="form-label form-label--sm text-danger">Card Options</label>
                                                                    <div class="input-group input-group--append">
                                                                        <select class="input js-input-select-x input--fluid-x select2-hidden-accessible-x" name="cardoption" data-placeholder="Select Card Options" required="" tabindex="-1" aria-hidden="true">
                                                                            <option value="" selected="selected">Select Card Options
                                                                            </option>
                                                                            <option value="credit">Credit
                                                                            </option>
                                                                            <option value="debit">Debit
                                                                            </option>
                                                                        </select><!--<span class="input-group__arrow">
                                                                        <svg class="icon-icon-keyboard-down">
                                                                            <use xlink:href="#icon-keyboard-down"></use>
                                                                        </svg></span>-->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-12">
                                                            <div class="row row--md">
                                                                <div class="col-12 col-lg-6 form-group form-group--lg">
                                                                    <label class="form-label form-label--sm">Application(Description)</label>
                                                                    <div class="input-group">
                                                                        <textarea class="input" style="height:50px" type="text" name="message" placeholder="Description" required=""></textarea>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>


                                                    </div>
                                                    <!-- <h6 class="">Account Owner Authorization:</h6> -->
                                                    <div class="card-order__footer-total pt-3">

                                                        <div class="card__container pl-0">
                                                            <div class="row gutter-bottom-sm justify-content-end">
                                                            <!-- <div class="col-12 col-lg-12 form-group form-group--lg mb-0">
                                                                    <label class="form-label form-label--sm">Account Pin</label>
                                                                    <div class="input-group">
                                                                        <input class="input" type="text" name="mname" placeholder="Enter Your Pin" >
                                                                    </div>
                                                                </div> -->
                                                                <div class="card-order__footer-submit col-12 col-sm">
                                                                    <button class="btn" type="subnit" style="background-color: #17705a; color: #ffffff;" ><span class="button__text">MAKE REQUEST</span>
                                                                    </button>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>




                                        </div>
                                    </div></form>
                                </div>

                            </div>
                        </div>
                    </div>
                 </div>
            </div>
        </div>
    </main>

     <script>
        document.querySelectorAll('input[type="number"]').forEach(input =>{
            input.oninput = () => {
                if(input.value.length > input.maxLength) input.value = input.value.slice(0, input.maxLength);
            };

        });
    </script>
@stop