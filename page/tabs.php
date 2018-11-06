<div id="myHeader" class="tab">
  <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Homepage</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">Accounts</button>
</div>

<div id="London" class="tabcontent">
    <?php include ('page/homepage.php');?>
</div>

<div id="Paris" class="tabcontent">
    <?php include ('page/account.php');?>
</div>

<script>
window.onscroll = function() {myFunction()};

var tab = document.getElementById("myHeader");
var sticky = tab.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    tab.classList.add("sticky");
  } else {
    tab.classList.remove("sticky");
  }
}
</script>