@extends ('app')
@section ('title', 'Inumite')
@section ('content')
<div id="post-form" class="container">
    <form method="POST" action="/post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm">
                <div class="form-group row">
                    <label for="title" class="col-sm-3 col-form-label">タイトル</label>
                    <div class="col-sm">
                        <input type="text" id="title" name="title" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="image" class="col-sm-3 col-form-label">画像</label>
                    <div class="col-sm">
                        <input type="file" id="image" name="image" class="form-control">
                    </div>
                </div>
                <button class="btn btn-primary btn-block">投稿</button>
            </div>
            <div class="col-sm-3"></div>
        </div>
    </form>
</div>
<div id="main" class="pt-4">
    @if (count($posts) >= 1)
        <h1>最新の投稿</h1>
        <div class="row">
            @foreach ($posts as $post)
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <div>
                            <img src="{{ $post->image_url }}" alt="{{ $post->title }}"
                                style="width:auto;height:auto;max-width:100%;max-height:100%">
                        </div>
                        <div class="card-body">
                            <p class="card-text">{{ $post->title }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
