<div class="widget-content">
    @foreach($items as $item)
        <p>{{$item->title}}</p>
    @endforeach
    <button class="btn btn-download-cv btn-primary rounded-pill"> <img src="assets/images/download.svg" alt="download"
                                                                       class="btn-img">DOWNLOAD CV </button>
</div>
