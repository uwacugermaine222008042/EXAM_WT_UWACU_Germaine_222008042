document.addEventListener("DOMContentLoaded", function() {
    var profileButton = document.getElementById("profile-button");
    var profileMenu = document.getElementById("profile-menu");
  
    profileButton.addEventListener("click", function() {
      if (profileMenu.style.display === "block") {
        profileMenu.style.display = "none";
      } else {
        profileMenu.style.display = "block";
      }
    });
  
    document.addEventListener("click", function(event) {
      if (!profileMenu.contains(event.target) && !profileButton.contains(event.target)) {
        profileMenu.style.display = "none";
      }
    });
  });
  