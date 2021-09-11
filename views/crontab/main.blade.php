
<div class="dropdown">
  <h5>Ortak Ayarlarlardan Ekle  </h5>
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
  style="background-color:white; color:black; "
  >  
  {{ __("Ortak Ayarlar") }}
  </button>
 
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Once Per Minute (* * * * *)</a>
    <a class="dropdown-item" href="#">Once Per Five Minute (*/5 * * * *)</a>
    <a class="dropdown-item" href="#">Twice per Hour (0,30 * * * *)</a>
    <a class="dropdown-item" href="#">One per Hour (0 * * * *)</a>
    <a class="dropdown-item" href="#">Twice per Day (0 0,12 * * *)</a>
    <a class="dropdown-item" href="#">Once per Day (0 0 * * *)</a>
    <a class="dropdown-item" href="#">Once per Week (0 0 * * 0)</a>
    <a class="dropdown-item" href="#">Once per Month (0 0 1 * *)</a>
    <a class="dropdown-item" href="#">Once per Year (0 0 1 1 *)</a>
    
  </div>
</div>



@include("crontab.scripts")

