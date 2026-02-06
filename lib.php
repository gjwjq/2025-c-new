<?php

function ss() {
  return $_SESSION['ss'] ?? false;
}

function script($s) {
  echo "<script>$s</script>";
}

function alert($a) {
  script("alert('$a')");
}

function move($m, $a = null) {
  if($a) alert($a);
  script("location.href = '$m'");
}

function back($a = null) {
  if($a) alert($a);
  script("history.back()");
}

function views($page, $data = []) {
  extract($data);
    require_once "../views/templates/header.php";
    require_once "../views/$page.php";
    require_once "../views/templates/footer.php";
}