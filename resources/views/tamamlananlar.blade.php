<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">

    @extends('layouts.head')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

    <link href="/css/bootstrap.min.css" rel="stylesheet">



</head>

<body>
@section('icerik')

    <h1 class="well well-lg">Tamamlananlar</h1>
    <div class="container">


<?php $k=0?>
        @foreach($tamamlananlar as $i)
            <div class="table-bordered">
                <div class="media commnets">

                    <div class="media-body">
                        <h4 class="media-heading">İlan ID :{!! $i->ilanid !!}</h4>

                        <h4 class="media-heading">Tarih :{!! $i->zaman !!}</h4>
                        <h4 class="media-heading">Hacim:{!! $i->hacim !!}</h4>
                        <h4 class="media-heading">Ağırlık :{!! $i->agirlik !!}</h4>
                        <h4 class="media-heading">Açıklama :{!! $i->aciklama !!}</h4>
                        <h4 class="media-heading">Yükleme :{!! $yukleme[$k] !!}</h4>
                        <h4 class="media-heading">İndirme :{!! $indirme[$k] !!}</h4>
                        <h4 class="media-heading">Tutar :{!! $i->miktar !!} TL</h4>
                        <h4 class="media-heading">Nakliyeci Adi :{!! $nakliyeciadi[$k] !!}</h4>
                        <h4 class="media-heading">Nakliyeci Telefon :{!! $nakliyecitelefon[$k++]!!}</h4>



                    </div>
                </div>




            </div>
        @endforeach



    </div>
    <script type="text/javascript" src="/js//bootstrapl.min.js"></script>
    <script type="text/javascript" src="/js/jquery.scrollTo.min.js"></script>
    <script type="text/javascript" src="/js/prism.js"></script>
    <script type="text/javascript" src="/js/mainl.js"></script>
@endsection
</body>
</html>
