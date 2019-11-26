@if($bike->hasImage('desktop_cover'))
<div id="cover" class="container-fluid">
    <div class="row">
        <div class="col-12 px-0">
            <div class="cover-picture"><img src="{{ $bike->image('desktop_cover', 'default') }}" alt="" width="100%"></div>
            <div class="cover-overlay"></div>
        </div>
    </div>
</div>
@endif