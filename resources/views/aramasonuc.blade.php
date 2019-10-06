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

    <h1 class="well well-lg">Sonuçlar</h1>
    <div class="container">

        <?php $i=0 ?>
@if($bulunan=='[]')
   <p>Sonuç bulunamadı</p>
@endif
        @foreach($bulunan as $b)
                <?php if($kisi[$i]->id!=Auth::id()){?>
            <div class="table-bordered">

                <div class="media commnets">

                    <div class="media-body">

                        <h4 class="media-heading">İlan ID :{!! $b->id !!}</h4>
                        <h4 class="media-heading">İlan Sahibi :{!! $kisi[$i]->name !!}</h4>
                        <h4 class="media-heading">Yükleme :{!! $yuksehir !!}</h4>
                        <h4 class="media-heading">İndirme :{!! $insehir[$i] !!}</h4>
                        <h4 class="media-heading">Tarih :{!! $b->zaman !!}</h4>
                        <h4 class="media-heading">Hacim:{!! $b->hacim !!}</h4>
                        <h4 class="media-heading">Ağırlık :{!! $b->agirlik !!}</h4>
                        <h4 class="media-heading">Açıklama :{!! $b->aciklama !!}</h4>
                        <h4 class="media-heading">En Uygun Teklif :{!! $enuygun[$i] !!}</h4>

                        {!! Form::open(['method' => 'POST', 'action'=>'TeklifController@ekle']) !!}


                        {!! Form::hidden('ilanid',$b->id) !!}
                        <h4 class="media-heading">{!! Form::text('miktar','miktar giriniz') !!} TL</h4>
                        {!! Form::submit('Teklif Ver', array( 'class'=>'btn btn-primary' ))!!}
                                        {!! Form::close() !!}



                    </div>

                </div>




            </div>
                    <?php  } ?>
                    <?php $i=$i+1; ?>
        @endforeach



    </div>
    <script type="text/javascript" src="/js//bootstrapl.min.js"></script>
    <script type="text/javascript" src="/js/jquery.scrollTo.min.js"></script>
    <script type="text/javascript" src="/js/prism.js"></script>
    <script type="text/javascript" src="/js/mainl.js"></script>
@endsection
</body>
</html>
