<html>

<head>

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    @extends('layouts.head')

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>

    <script>
        $( function() {

            $( "#date" ).datepicker({
                minDate: '0',
                dateFormat: "dd-mm-yy",
                altFormat: "yy-mm-dd",
                altField:"#tarihdb",
                monthNames: [ "Ocak", "Şubat", "Mart", "Nisan", "Mayıs", "Haziran", "Temmuz", "Ağustos", "Eylül", "Ekim", "Kasım", "Aralık" ],
                dayNamesMin: [ "Pa", "Pt", "Sl", "Ça", "Pe", "Cu", "Ct" ],
                firstDay:1
            });

        } );

    </script>
</head>
<body data-spy="scroll">

@section('icerik')


    <div class="container">
        <div class="about section">
        <h2 class="title text-center" style="margin-top:100px">İlanları Görüntüle</h2>
    @if(isset($success))
            <div class="alert alert-success"> {{$success}} </div>
        @endif

        {!! Form::open(['action'=>'IlanController@bul']) !!}

        <div class="form-group">

            {!! Form::label('Yükleme:') !!}
            {!! Form::select('yukleme',$iller,null, ['class'=>'form-control']) !!}

        </div>


        <div class="form-group">
            {!! Form::label('Zaman:') !!}
            {!!  Form::text('datepicker', 'tarih seçiniz', array('id' => 'date','class'=>'form-control')) !!}
            {!! Form::hidden('tarih','',array('id'=>'tarihdb')) !!}

        </div>




        <div style="margin-bottom:10%">
            <div class="form-group">
                {!! Form::submit('Ara', array( 'class'=>'btn btn-danger form-control' )) !!}
            </div>
        </div>



        {!! Form::close() !!}
        </div>
        <div class="alert-warning">
            @foreach( $errors->all() as $error )
                <br> {{ $error }}
            @endforeach
        </div>

    </div>
    <!--<script type="text/javascript" src="/js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="/js/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="/js/jquery.easing.1.3.js"></script>-->
    <script type="text/javascript" src="/js//bootstrapl.min.js"></script>
    <script type="text/javascript" src="/js/jquery.scrollTo.min.js"></script>
    <script type="text/javascript" src="/js/prism.js"></script>
    <script type="text/javascript" src="/js/mainl.js"></script>
@endsection

</body>

</html>