
<style>
.input-group-text{

width: 150px;
padding: 10px;
margin-bottom: 15px;
}
.form{
margin-bottom: 15px;
width: 35%;
  
}
.dropdown{
  position: initial;
 display: flex;
  width: 60%;
}

</style>
<div class="dropdown config" style="display: block;"> 
<h5>Ortak Ayarlarlardan Ekle  </h5>
  <button class="btn btn-secondary dropdown-toggle common-settings " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
  style="background-color:white; color:black;margin-bottom:15px; width:35%; "
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
<div class="form-group ">
  <div class="input-group-prepend">
    <span class="input-group-text" id="new-minute">Dakika</span>
    <input type="text" class="form" placeholder="Kaç dakikada bir olacağını giriniz ..."  >
    <div class="dropdown"> 
   
      <button class="btn btn-secondary dropdown-toggle config-dropdown" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
       style="background-color:white; color:black;margin-bottom:15px; width:35%; "
       >  
         {{ __("Ayar") }}
        </button>
 
        </button>
         <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="#">Once Per Minute (* * * * *)</a>
         <a class="dropdown-item" href="#">Once Per Five Minute (*/5 * * * *)</a>
         <a class="dropdown-item" href="#">Twice per Hour (0,30 * * * *)</a>
        <a class="dropdown-item" href="#">One per Hour (0 * * * *)</a>
  
    
  </div>
</div>
  </div>


  <div class="input-group-prepend">
    <span class="input-group-text" id="new-hour">Saat</span>
    <input type="text" class="form" placeholder="Kaç saatte bir olacağını giriniz ..."  >
    <div class="dropdown"> 
      
      <button class="btn btn-secondary dropdown-toggle config-dropdown " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
       style="background-color:white; color:black;margin-bottom:15px; width:35%; "
       >  
         {{ __("Ayar") }}
        </button>
 
        </button>
         <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="#">Once Per Minute (* * * * *)</a>
         <a class="dropdown-item" href="#">Once Per Five Minute (*/5 * * * *)</a>
         <a class="dropdown-item" href="#">Twice per Hour (0,30 * * * *)</a>
        <a class="dropdown-item" href="#">One per Hour (0 * * * *)</a>
  
    
  </div>
</div>
  </div>

  <div class="input-group-prepend">
    <span class="input-group-text" id="new-Mday">Ayın Günü</span>
    <input type="text" class="form" placeholder="Kaç günde bir olacağını giriniz ..."  >
    <div class="dropdown"> 
     
      <button class="btn btn-secondary dropdown-toggle config-dropdown" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
       style="background-color:white; color:black;margin-bottom:15px; width:35%; "
       >  
         {{ __("Ayar") }}
        </button>
 
        </button>
         <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="#">Once Per Minute (* * * * *)</a>
         <a class="dropdown-item" href="#">Once Per Five Minute (*/5 * * * *)</a>
         <a class="dropdown-item" href="#">Twice per Hour (0,30 * * * *)</a>
        <a class="dropdown-item" href="#">One per Hour (0 * * * *)</a>
  
    
  </div>
</div>
  </div>

  <div class="input-group-prepend">
    <span class="input-group-text" id="new-month">Ay</span>
    <input type="text" class="form" placeholder="Kaç ayda bir olacağını giriniz ..."  >
    <div class="dropdown"> 
     
      <button class="btn btn-secondary dropdown-toggle config-dropdown" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
       style="background-color:white; color:black;margin-bottom:15px; width:35%; "
       >  
         {{ __("Ayar") }}
        </button>
 
        </button>
         <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="#">Once Per Minute (* * * * *)</a>
         <a class="dropdown-item" href="#">Once Per Five Minute (*/5 * * * *)</a>
         <a class="dropdown-item" href="#">Twice per Hour (0,30 * * * *)</a>
        <a class="dropdown-item" href="#">One per Hour (0 * * * *)</a>
  
    
  </div>
</div>
  </div>

  <div class="input-group-prepend">
    <span class="input-group-text" id="new-Wday">Haftanın Günü</span>
    <input type="text" class="form" placeholder="Hangi haftanın gününde bir olacağını giriniz ..."  >
    <div class="dropdown"> 
  
      <button class="btn btn-secondary dropdown-toggle config-dropdown" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
       style="background-color:white; color:black;margin-bottom:15px; width:35%; "
       >  
         {{ __("Ayar") }}
        </button>
 
        </button>
         <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="#">Once Per Minute (* * * * *)</a>
         <a class="dropdown-item" href="#">Once Per Five Minute (*/5 * * * *)</a>
         <a class="dropdown-item" href="#">Twice per Hour (0,30 * * * *)</a>
        <a class="dropdown-item" href="#">One per Hour (0 * * * *)</a>
  
    
  </div>
</div>
  
  </div>

  <div class="input-group-prepend">
    <span class="input-group-text" id="new-command">Komut Giriniz</span>
    <input type="text" class="form" placeholder="Komutu giriniz ..."  >
  </div>

  <button class="btn btn-primary" type="submit" id="submit-button" >  
  {{ __("Kaydet") }}
  </button>


</div>
  
@include("crontab.scripts")

