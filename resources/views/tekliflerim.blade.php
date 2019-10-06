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

    <h1 class="well well-lg">Tekliflerim</h1>
    <div class="container">


<?php $s=0 ?>
        @foreach($teklifler as $i)
            <div class="table-bordered">
                <div class="media commnets">

                    <div class="media-body">
                        <h4 class="media-heading">İlan ID :{!! $i->ilanid !!}</h4>
                        <h4 class="media-heading">Yükleme:{!! $yukleme[$s] !!}</h4>
                        <h4 class="media-heading">İndirme:{!! $indirme[$s] !!}</h4>
                        <h4 class="media-heading">En Uygun Teklif:{!! $enuygun[$s] !!} TL</h4>
                        <h4 class="media-heading">{!! $bilgilendirme[$s] !!}</h4>
@if($bilgilendirme[$s]=='Yeni bir teklif yapabilirsiniz')
                            {!! Form::open(['method' => 'POST', 'action'=>'TeklifController@teklifguncelle']) !!}
                            {!! Form::hidden('ilanid',$i->ilanid) !!}
                            <h4 class="media-heading">{!! Form::text('miktar','miktar giriniz') !!}</h4>
                            {!! Form::submit('Teklif Ver', array( 'class'=>'btn btn-primary' ))!!}
                            {!! Form::close() !!}
                        @endif
                        <?php $s++ ?>

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
