<div class="col-4 mb-4">
    <h5>@lang('common.social_networks')</h5>
    <ul>
        @if($facebook != '')
        <li class="nav-item current-item"><a href="{{ $facebook }}" target='_blank'><i class="fab fa-facebook mr-2"></i> Facebook</i></a></li>
        @endif
        @if($twitter != '')
        <li class="nav-item current-item"><a href="{{ $twitter }}" target='_blank'><i class="fab fa-twitter mr-2"></i> Twitter</a></li>
        @endif
        @if($youtube != '')
        <li class="nav-item current-item"><a href="{{ $youtube }}" target='_blank'><i class="fab fa-youtube mr-2"></i> Youtube</a></li>
        @endif
        @if($instagram != '')
        <li class="nav-item current-item"><a href="{{ $instagram }}" target='_blank'><i class="fab fa-instagram mr-2"></i> Instagram</a></li>
        @endif
    </ul>
</div>