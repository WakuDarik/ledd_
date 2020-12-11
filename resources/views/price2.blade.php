@extends('layouts/master')

@section('title', 'ilve - Кухонна техніка та меблі')
@section('keywords','ilve, кухонні прилади ilve, кухонна техніка Ilve')
@section('descr','Готувати з любов`ю означає покращення якості життя: важлива обіцянка, яку ILVE завжди дотримується.')


@section('content')
<div class="container">
    <div class="row">

        <div class="col-md-9">
            <div id="portfolio"></div>
        </div>

        <div class="col-md-3">
            <aside>
                <div class="aside-item contact-info">
                    <div class="table-title "><span class="wcms-text">Контактная информация</span></div>
                    <a href="" class="tel "><span class="wcms-text">(858)-733-2462</span></a>
                    <div class="mail "><span class="wcms-text">3557138@gmail.com</span></div>
                </div>
                <div class="aside-item location">
                    <div class="table-title "><span class="wcms-text">Офис</span></div>
                    <div class=""><span class="wcms-text">4975 Clairemont Mesa blvd, San Diego, CA, 92117</span></div>
                </div>
                <div class="aside-item work-time">
                    <div class="table-title "><span class="wcms-text">Рабочее вермя</div>
                    <div class="elementor-text-editor elementor-clearfix "><span class="wcms-text">Mon 08:00 am — 07:00
                            pm<br>
                            Tue 08:00 am — 07:00 pm<br>
                            Wed 08:00 am — 07:00 pm<br>
                            Thu 08:00 am — 07:00 pm<br>
                            Fri 08:00 am — 07:00 pm<br>
                            Sat 08:00 am — 07:00 pm<br>
                            Sun 09:00 am — 02:00 pm<br>
                        </span>
                    </div>
                </div>
            </aside>
        </div>
    </div>

</div>

<script src="/js/react.development.js" crossorigin></script>
<script src="/js/react-dom.development.js" crossorigin></script>
<script src="/js/babel.min.js"></script>
<script src="/js/xlsx.min.js"></script>
<!-- Load our React component. -->
<script type="text/babel" src="/react/price.js"></script>
@endsection