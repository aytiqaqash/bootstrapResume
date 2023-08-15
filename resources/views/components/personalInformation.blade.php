<div class="widget-content">
    @foreach($items as $item)
        <p>{{$item->title}}</p>
    @endforeach
    <?php $fileName = "ZiyaMammadov.docx"; ?>
    <a href="assets/files/<?=$fileName?>" download="{{$fileName}}"><button class="btn btn-download-cv btn-primary rounded-pill"> <img src="assets/images/download.svg" alt="download"
                                                                       class="btn-img">DOWNLOAD CV </button></a>
</div>
