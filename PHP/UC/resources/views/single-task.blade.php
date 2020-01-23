@extends('layouts.app')

@section('content')
<section class="jumbotron text-center">
    <div class="container">
        @include('inc.showcase')
    </div>
</section>
<div class="album py-5">
    <div id="desc-bc" class="container">
        <div class="row">
            <div class="col-md-12">
                <?php var_dump($UC_item->getBar()); ?>
                <h1>{{ $UC_item->title }}</h1>
                <p class="card-text">{{ $UC_item->body }}</p>
                <small class="text-muted">{{ $UC_item->created_at }}</small><br/>
                <a href="http://localhost/UC/public/" type="button" class="btn btn-primary">Atgriesties</a>
            </div>
        </div>
    </div>
</div>
@endsection