function opencontactForm() {
    document.getElementById("mycontForm").style.display = "block";
  }
  function closeForm() {
    document.getElementById("mycontForm").style.display = "none";
  }
  function openloginForm() {
    document.getElementById("myloginForm").style.display = "block";
  }
  function closeloginForm() {
    document.getElementById("myloginForm").style.display = "none";
  }
  function fprofilemenu() {
    document.getElementById("profilemenu").classList.toggle("show");
  }
  
  /* When the user clicks on the button, 
  toggle between hiding and showing the dropdown content */
  function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
  }
  
  // Close the dropdown if the user clicks outside of it
  window.onclick = function(event) {
    if (!event.target.matches('#catr')) {
      var dropdowns = document.getElementsByClassName("dropdown-content");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      }
    }
  }