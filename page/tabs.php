<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Homepage</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">Accounts</button>
</div>

<div id="London" class="tabcontent">
    <?php include ('page/homepage.php');?>
</div>

<div id="Paris" class="tabcontent">
    <?php include ('page/account.php');?>
</div>