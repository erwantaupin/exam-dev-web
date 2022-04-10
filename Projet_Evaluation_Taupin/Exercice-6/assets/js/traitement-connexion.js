function validation() {
  $.post(
    "assets/php/traitement-insert-chien.php",
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
function chercher() {
  $.post(
    "assets/php/traitement-chercher-chien.php",
    {
      race: document.getElementById("race").value,
    },
    function (data) {
      $(".cherche").html(data);
    }
  );
}
