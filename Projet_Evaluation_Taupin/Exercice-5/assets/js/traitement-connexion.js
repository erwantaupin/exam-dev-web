function validation() {
  $.post(
    "assets/php/traitement.php",
    {
      name: document.getElementById("name").value,
      surname: document.getElementById("surname").value,
      mail: document.getElementById("mail").value,
    },
    function (data) {
      $(".message").html(data);
    }
  );
}
