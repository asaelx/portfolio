
<div class="topbar">
  <!-- Languages-->
  <div class="languages">
    <div class="lang">English</div>
    <div class="switch">
      <label for="lang_switch" class="sp">Language</label>
@if(isset($data['lang']) && $data['lang'] == 'sp')

      <input id="lang_switch" type="checkbox" name="lang_switch" checked="checked"/>
@else

      <input id="lang_switch" type="checkbox" name="lang_switch"/>
@endif

    </div>
    <div class="lang">Español</div>
  </div>
  <!-- About--><a href="#" data-target="about" class="about trigger-modal green btn">{{ $data['about_title'] }}</a>
</div>