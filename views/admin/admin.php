<?php
  $user = db::fetchAll("select * from user");
  ?>

<main>
  <div class="main-title">회원 관리</div>

  <table>
    <thead>
      <tr>
        <th>아이디</th>
        <th>암호화 된 비밀번호</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($user as $value) { ?>
      <tr>
        <td><?= $value['id'] ?></td>
        <td><?= $value['pw'] ?></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</main>