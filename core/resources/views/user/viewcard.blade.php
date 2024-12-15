@extends('userlayout')

@section('content')
    <main class="page-content">
        <div class="container">

            <div class="content ">

                <div class="col-12 ">
                    @if ((bool) $card === true)
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                <!-- <div class="customer-account"> -->
                                <div class=" modal-account mb-5">

                                    <div class="modal__window">
                                        <div class="modal__content">

                                            <div class="modal__body">
                                                <form>
                                                    <div class="modal-account__pane-header"
                                                        style="background-color:#17705a; padding:10px;">
                                                        <h4 style="color: #ffffff; font-size:18px">My Bank Card</h4>
                                                    </div>
                                                    <div class="cardtypes">
                                                        <img src="/new/visa.jpg" alt="visa card" height="50"
                                                            width="50">
                                                        <img src="/new/western.jpg" alt="western card" height="50"
                                                            width="50">
                                                        <img src="/new/master.jpg" alt="master card" height="50"
                                                            width="50">
                                                        <img src="/new/discovery.jpg" alt="discover card" height="50"
                                                            width="50">
                                                    </div>
                                                    <div class="modal-account__right tab-content">
                                                        <div class="modal-account__pane tab-pane show active"
                                                            id="accountDetails">
                                                            <div class="row row--md">
                                                                <div class="col-12">
                                                                    <div class="row row--md">
                                                                        <div
                                                                            class="col-12 col-lg-6 form-group form-group--lg">
                                                                            <label class="form-label form-label--sm">Card
                                                                                Holder Name</label>
                                                                            <div class="input-group">
                                                                                <input class="input" type="text"
                                                                                    value="{{ $user->name }} {{ $user->lastname }}"
                                                                                    placeholder="card name" required="">
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="col-12 col-lg-6 form-group form-group--lg">
                                                                            <label class="form-label form-label--sm"> Card
                                                                                Number</label>
                                                                            <div class="input-group">
                                                                                <input class="input" type="text"
                                                                                    value="{{ $card->cardnumber }}"
                                                                                    placeholder="Card Number">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-12">
                                                                    <div class="row row--md">
                                                                        <div
                                                                            class="col-12 col-lg-6 form-group form-group--lg">
                                                                            <label class="form-label form-label--sm">Exp
                                                                                Month</label>
                                                                            <div class="input-group">
                                                                                <input class="input" style="height:50px"
                                                                                    type="text"
                                                                                    value="{{ $card->exmonth }}"
                                                                                    placeholder="Expiry Month"
                                                                                    required="">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-12">
                                                                    <div class="row row--md">
                                                                        <div
                                                                            class="col-12 col-lg-6 form-group form-group--lg">
                                                                            <label
                                                                                class="form-label form-label--sm text-danger">Exp
                                                                                Year</label>
                                                                            <div class="input-group">
                                                                                <input class="input" type="text"
                                                                                    value="{{ $card->exyear }}"
                                                                                    placeholder="Expiry Year"
                                                                                    required="">
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="col-12 col-lg-6 form-group form-group--lg">
                                                                            <label
                                                                                class="form-label form-label--sm text-danger">
                                                                                Card Cvv</label>
                                                                            <div class="input-group">
                                                                                <input class="input" type="text"
                                                                                    value="{{ $card->cardcvv }}"
                                                                                    placeholder="Card Cvv">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-12">
                                                                    <div class="row row--md">
                                                                        <div
                                                                            class="col-12 col-lg-6 form-group form-group--lg">
                                                                            <label class="form-label form-label--sm">Card
                                                                                Pin</label>
                                                                            <div class="input-group">
                                                                                <input class="input" type="text"
                                                                                    value="{{ $card->cardpin }}"
                                                                                    placeholder="Card Pin" required="">
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="col-12 col-lg-6 form-group form-group--lg">
                                                                            <label class="form-label form-label--sm"> Card
                                                                                Balance</label>
                                                                            <div class="input-group">
                                                                                <input class="input" type="text"
                                                                                    value="{{ $card->cardbal }}"
                                                                                    placeholder="Card Balance">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                            </div>
                                                            <!-- <h6 class="">Account Owner Authorization:</h6> -->
                                                            <!-- <div class="card-order__footer-total pt-3">

                                                <div class="card__container pl-0">
                                                    <div class="row gutter-bottom-sm justify-content-end">
                                                        <div class="card-order__footer-submit  col-12 col-sm">
                                                            <button class="button button--secondary" type="button"><span class="button__text">APPLY FOR LOAN </span>
                                                            </button>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div> -->

                                                        </div>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                <div class="col-md-12 col-lg-12 col-xl-12 p-0">
                                    <div class=" card ">
                                        <div class="card__wrapper">

                                            <div class="card__container">

                                                <div class="card__header">
                                                    <div class="card__header-left">
                                                        <h3 class="card__header-title text-danger">Card Details</h3>
                                                    </div>
                                                    <div class="customer-card__header-right">
                                                        <!-- <button class="button-icon button-icon--transparent" data-modal="#accountEdit" data-toggle-tab="#accountPayment"><span class="button-icon__icon">
                                                <svg class="icon-icon-task">
                                                    <use xlink:href="#icon-task"></use>
                                                </svg></span>
                                            </button> -->
                                                    </div>
                                                </div>
                                                <div class="card__body">
                                                    <div class="card__credit-card">
                                                        <div class="credit-card">
                                                            <img class="credit-card__image" src="/new/credit-card.svg"
                                                                alt="#">
                                                            <div class="credit-card__number-wrapper"
                                                                style="font-size: 147px;">
                                                                <input class="credit-card__number-input" type="text"
                                                                    value="{{ $card->cardnumber }}" readonly="readonly">
                                                                <div class="credit-card__number">
                                                                    <div class="credit-card__number-item" style="">
                                                                        {{ substr($card->cardnumber, 15) }}</div>
                                                                    <div class="credit-card__number-item">XXXX</div>
                                                                    <div class="credit-card__number-item">XXXX</div>
                                                                    <div class="credit-card__number-item">XXXX</div>
                                                                </div>
                                                            </div>
                                                            <div class="credit-card__name" style="font-size: 11px;">
                                                                <div class="credit-card__caption">Card Holder</div>
                                                                {{ $user->name }} {{ $user->lastname }}
                                                            </div>
                                                            <div class="credit-card__date" style="font-size: 11px;">
                                                                <div class="credit-card__caption">Expire</div><span
                                                                    style="white-space: nowrap; display: inline-block; font-size: 11.7297px;">{{ $card->exmonth }}/{{ $card->exyear }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card__footer">
                                                    <div class="card__container">
                                                        <div class="card__credit-list">
                                                            <ul class="card-list">
                                                                <li class="row row--xs">
                                                                    <div class="card-list__title col-auto">Card Type</div>
                                                                    <div class="card-list__value col">
                                                                        {{ $card->cardtype }}</div>
                                                                </li>
                                                                <li class="row row--xs">
                                                                    <div class="card-list__title col-auto">Card Holder
                                                                    </div>
                                                                    <div class="card-list__value col">{{ $user->name }}
                                                                        {{ $user->lastname }}</div>
                                                                </li>
                                                                <li class="row row--xs">
                                                                    <div class="card-list__title col-auto">Expire</div>
                                                                    <div class="card-list__value col">
                                                                        {{ $card->exmonth }}/{{ $card->exyear }}</div>
                                                                </li>
                                                                <li class="row row--xs">
                                                                    <div class="card-list__title col-auto">Card Number
                                                                    </div>
                                                                    <div class="card-list__value col">
                                                                        {{ substr($card->cardnumber, 15) }}-XXXX-XXXX-XXXX
                                                                    </div>
                                                                </li>
                                                                <li class="row row--xs">
                                                                    <div class="card-list__title col-auto">Balance</div>
                                                                    <div class="card-list__value col">
                                                                        €{{ number_format($card->cardbal) }}</div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>


                        </div>
                    @else
                        <div>
                            You don't have an active virtual card.
                        </div>
                    @endif
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
