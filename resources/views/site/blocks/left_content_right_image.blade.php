<div class="row feature block h380 {{$block->input('theme')}}">
    <div class="col-12 col-md-6 col-lg-6 d-block d-md-none px-0"><img src="{{ $block->image('picture') }}" alt=""></div>
    <div class="col-12 col-md-6 info text-right">
        <div class="px-5 py-5">
            <h3 class="left-bordered">Lorem ipsum dolor sit ; amet consectetur adipisicing elit. Quas ; porro.</h3>
            {{ $block->translatedinput('side_content') }}
        </div>
    </div>
    <div class="col-12 col-md-6 col-6 px-0 d-none d-md-block cover" style="background-image: url({{ $block->image('picture') }})  ; background-size: cover  ;"></div>
</div>