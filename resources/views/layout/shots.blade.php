
<div class="shots">
  <ul class="slider">
<?php $i=0; ?>
@foreach($data['shots'] as $shot)

<?php 
    if($i%12 == 0):
        echo $i > 0 ? "</ul></li>" : "";
        echo '<li class="slide"><ul class="list">';
    endif;
?>
    <li class="shot"><a href="{{ url('shot/' . $shot->slug) }}" class="link"><img src="{{ url($shot->image_small) }}" class="img"/></a></li>
<?php $i++; ?>
@endforeach

  </ul>
</div>