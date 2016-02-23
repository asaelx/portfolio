
<div class="profile col-12">
  <div class="photo"><img src="{{ url($admin->photo()->url) }}" width="100" height="100" alt="{{ $admin->name }}" class="img"/></div>
  <div class="name"><a href="{{ url('/') }}" title="{{ $admin->name }}" class="link">{{ $admin->name }}</a></div>
  <div class="bio col-12">{!! Markdown::convertToHtml($admin->bio) !!}</div>
  <div class="row">
    <button data-target="contact" class="btn green trigger-modal">Contact me</button>
    <button data-target="about" class="btn green trigger-modal">About me</button>
  </div>
</div>