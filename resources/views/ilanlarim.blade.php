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

    <h1 class="well well-lg">İlanlarım</h1>
    <div class="container">

        <?php $k=0 ?>

        @foreach($ilanlar as $i)
            <div class="table-bordered">
                <div class="media commnets">

                    <div class="media-body">
                        <h4 class="media-heading">İlan ID :{!! $i->id !!}</h4>
                        <h4 class="media-heading">Yükleme :{!! $yukleme[$k] !!}</h4>
                        <h4 class="media-heading">İndirme :{!! $indirme[$k] !!}</h4>
                        <h4 class="media-heading">Tarih :{!! $i->zaman !!}</h4>
                        <h4 class="media-heading">Hacim:{!! $i->hacim !!} (m^3)</h4>
                        <h4 class="media-heading">Ağırlık :{!! $i->agirlik !!} (ton)</h4>
                        <h4 class="media-heading">Açıklama :{!! $i->aciklama !!}</h4>
                      <h4 class="media-heading">En Uygun Teklif :{!! $enuygun[$k++] !!} TL</h4>
                        <?php if($enuygun[$k-1]=="henüz bir teklif yok"){ ?>
                        {!! Form::open(['action'=>'IlanController@duzenle']) !!}

                            {!! Form::hidden('ilanid', $i->id) !!}
                                {!! Form::submit('Düzenle') !!}

                    {!! Form::close() !!}
                        <?php } ?>
                        <?php if($enuygun[$k-1]!="henüz bir teklif yok"){ ?>
                        {!! Form::open(['action'=>'TeklifController@tamamla']) !!}

                        {!! Form::hidden('ilanid', $i->id) !!}
                        {!! Form::submit('Teklifi Kabul Et') !!}

                        {!! Form::close() !!}

<?php }?>


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
