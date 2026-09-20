
  function logout() {
    const confirmLogout = confirm("Are you sure you want to log out?");
    if (confirmLogout) {
        alert("You have successfully logged out.");
        window.location.href = "pageLogin.php";
    }
}