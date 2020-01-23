@extends('layouts.app')

@section('content')
<div class="album py-5">
    <div class="container">
      <div class="row">
            @foreach ($UC_items as $UC_item)
                @include('content.single-column')
            @endforeach
      </div>
    </div>
</div>
@endsection
