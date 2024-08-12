@extends(backpack_view('blank'))
@section('content')

<style>
    .col{
        margin: 5px;
        background-color: rgba(0, 0, 0, .02);
    }
</style>

<div class="container-md">

<div class="row">
        <div class="col-sm-12">
            <div class="jumbotron">
                <h1>Добро пожаловать Bestequip!</h1>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Каталог товаров</a></p>
            </div>
        </div>
</div>

<div class="row">
    <div class="col col-lg-3 col-md-6 col-sm-12">
        {!! $chart->container() !!}
    </div>
    <div class="col col-lg-3 col-md-6 col-sm-12">
        {!! $donut->container() !!}
    </div>  
    <div class="col col-lg-4 col-md-8 col-sm-12">
        {!! $radialChart->container() !!}
    </div>    
</div>
<div class="row">
    <div class="col col-lg-3 col-md-6 col-sm-12">
        {!! $polarChart->container() !!}
    </div>
    <div class="col col-lg-3 col-md-6 col-sm-12">
        {!! $buildBar->container() !!}
    </div>
</div>


</div>




<script src="{{ $chart->cdn() }}"></script>
{{ $chart->script() }}
{{ $donut->script() }}
{{ $radialChart->script() }}
{{ $polarChart->script() }}
{{ $buildBar->script() }}

@endsection
