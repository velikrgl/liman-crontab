
<style>
.input-group-text{
width: 150px;
padding: 10px;
margin-bottom: 15px;
}
.form-crontabInput{
margin-bottom: 15px;
width: 35%;
font-size: 14px;
    font-weight: bolder;
  
}
.dropdown-selected-items{
  position: initial;
    display: flex;
    width: 53%;
    padding: 10px;
    margin-bottom: 30px;
    background: beige;
    font-weight: 600;
}
.dropdownItems{
  margin-bottom: 15px;
  width: 35%;
  margin-left: 15px;
  width: 35%;
}

</style>
<meta charset="utf-8">
<meta name="KeyWords" content="HTML5, HTML5, HTML5, HTML5, HTML 5, editing, html5, check, type, html 4.01, 4.0, template type, type, code, responsive, responsive">
<select name="mainMenu" onchange="getSelectedValue1()" class="dropdown-selected-items" id="dropdown-main-first">
<option selected disabled>--Hızlı İşlem Seç--</option>
    <option value="1">Dakika da 1 kere (* * * * *)</options> 
    <option value="2">Saatte 1 kere (0 * * * *)</option>
    <option value="3">Ay da bir kere(0 0 1 * *)</option>
    <option value="4">Hafta da bir kere (0 0 * * 0)</option>

</select>
<div class="form-group ">
  <form action="">
  <div class="input-group-prepend">

    <span class="input-group-text" >Dakika</span>
    <input type="text" class="form-crontabInput" id="new-minute"  placeholder="Kaç dakikada bir olacağını giriniz ..."  required >
    <select name="mainMenu" class="dropdownItems" onchange="getSelectedValue2()" id="dropdown-main-second">
      <option selected disabled>--Hızlı İşlem Seç--</option>
      <option value="1">Dakikada 1 kere (*)</option> 
      <option value="2">5 dk da bir (*/5)</option> 
      <option value="3">15 dk da bir (*/15)</option>
      <option value="4">30 dk da bir (*/30)</option>
    </select> 
  </div>


  <div class="input-group-prepend">
    <span class="input-group-text" >Saat</span>
    <input type="text" class="form-crontabInput" id="new-hour" placeholder="Kaç saatte bir olacağını giriniz ..."  required >
    <select name="mainMenu" class="dropdownItems" onchange="getSelectedValue3()" id="dropdown-main-third">
      <option selected disabled>--Hızlı İşlem Seç--</option>
     <option value="1">Saatte 1 kere (*)</option> 
      <option value="2">Her 3 saatte 1 ( */3)</option>
      <option value="3">Her 6 saatte 1 (*/6)</option> 
      <option value="4">Her 12 saatte 1 (*/12)</option>
     
    </select> 

  </div>

  <div class="input-group-prepend">
    <span class="input-group-text" >Ayın Günü</span>
    <input type="text" class="form-crontabInput" id="new-Mday" placeholder="Kaç günde bir olacağını giriniz ..."  required>
    <select name="mainMenu" class="dropdownItems" onchange="getSelectedValue4()" id="dropdown-main-fourth">
      <option selected disabled>--Hızlı İşlem Seç--</option>
     <option value="1">Her Ayın 1ine (1)</option> 
      <option value="2">Her Ayın 5ine (5)</option> 
      <option value="3">Her Ayın 15ine (15)</option>
      <option value="4">Her Ayın 20sine (20)</option>
    </select> 
  </div>

  <div class="input-group-prepend">
    <span class="input-group-text" >Ay</span>
    <input type="text" class="form-crontabInput" id="new-month" placeholder="Kaç ayda bir olacağını giriniz ..." required>
    <select name="mainMenu" class="dropdownItems" onchange="getSelectedValue5()" id="dropdown-main-fiveth">
      <option selected disabled>--Hızlı İşlem Seç--</option>
     <option value="1"> Her Ocakta Ayında (1)</option> 
      <option value="2">Her Mart Ayında (3)</option> 
      <option value="3">Her Haziran Ayında (6)</option>
      <option value="4">Her Aralık Ayında(12)</option>
    </select> 
  </div>

  <div class="input-group-prepend">
    <span class="input-group-text" >Haftanın Günü</span>
    <input type="text" class="form-crontabInput"  id="new-Wday" placeholder="Hangi haftanın gününde bir olacağını giriniz ..."  required>
    <select name="mainMenu" class="dropdownItems" onchange="getSelectedValue6()" id="dropdown-main-sixth">
      <option selected disabled>--Hızlı İşlem Seç--</option>
     <option value="1">Her Pazar (*)</option> 
      <option value="2">Her Pazartesi (1)</option> 
      <option value="3">Her Çarşamba (3)</option>
      <option value="4">Her Cuma (5)</option>
    </select> 
  </div>

  <div class="input-group-prepend">
    <span class="input-group-text" >Komut Giriniz</span>
    <input type="text" class="form-crontabInput" id="new-command" placeholder="Komutu giriniz ..."  required>
  </div>

  <button class="btn btn-primary" onclick="createCrontabJobs()" type="submit" id="submit-button" 
  style="    width: 15%;"
  >  
  {{ __("Kaydet") }}
  </button>

  </form>
</div>
  
@include("crontab.scripts")

