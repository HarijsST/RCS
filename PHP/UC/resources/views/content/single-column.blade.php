<div class="col-md-4">
    <div class="card mb-4 shadow-sm">
        <div class="card">
            <img src="/UC/public/img/{{ $UC_item->poster }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $UC_item->title }}</h5>
                <p class="card-text text-truncate">{{ $UC_item->body }}</p>
                <small class="text-muted">{{ $UC_item->created_at }}</small>
                <br>
                <div class="btn-group">
                    <a href="/UC/public/task/{{ $UC_item->id }}" type="button" class="btn btn-primary">Read more</a>
                </div>
            </div>
        </div>
    </div>
</div>