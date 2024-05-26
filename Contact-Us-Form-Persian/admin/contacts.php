<?php
@include '../config/config.php';
@include '../controller/helper.php';
if (!isset($_GET['page'])) {
  $page = 1;
} else {
  $page = $_GET['page'];
}
$pagination = pagination();
$contacts = allContacts($page);
$showMessage = false;
if (isset($_GET['Num'])) {
  $showMessage = true;
} ?>
<!-- 
Developed by Hero Expert 
Telegram channel: @HeroExpert_ir 
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="https://fonts.cdnfonts.com/css/iranian-sans" rel="stylesheet">
  <link rel="stylesheet" href="../assets/css/panelAdmin.css">
</head>

<body>
  <?php if (!$showMessage) { ?>
    <div class="container py-5 text-center">
      <p class="header-title"><a href="https://t.me/HeroExpert_ir" class="HeroExpert">
          <span>D</span>
          <span>e</span>
          <span>v</span>
          <span>e</span>
          <span>l</span>
          <span>o</span>
          <span>p</span>
          <span>e</span>
          <span>d</span>
          <span> </span>
          <span>B</span>
          <span>y</span>
          <span> </span>
          <span>H</span>
          <span>e</span>
          <span>r</span>
          <span>o</span>
          <span>E</span>
          <span>x</span>
          <span>p</span>
          <span>e</span>
          <span>r</span>
          <span>t</span>
          <span> </span>
          <span>T</span>
          <span>e</span>
          <span>a</span>
          <span>m</span></a></p>
      <table class="table-container">
        <thead class="table-header-bg">
          <tr>
            <th scope="col">ردیف</th>
            <th scope="col">نام</th>
            <th scope="col">ایمیل</th>
            <th scope="col">شماره تماس</th>
            <th scope="col">پیام</th>
            <th scope="col">وضعیت</th>
          </tr>
        </thead>
        <tbody class="table-light">
          <?php foreach ($contacts as $contact) { ?>
            <tr>
              <th><?= $contact->id ?></th>
              <td><?= $contact->name ?></td>
              <td><?= $contact->email ?></td>
              <td><?= $contact->phone ?? '-'  ?></td>
              <td><a style="height: 35px;" href="<?= '?page=' . $page . '&Num=' . $contact->id ?>" class="view-btn view">دیدن پیام</a></td>
              <td><span class="status badge rounded-pill <?= ($contact->status == 'read') ? "text-bg-success" : "text-bg-danger" ?>"><?= ($contact->status == 'read') ? "خوانده شده" : "خوانده نشده" ?></span></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
      
    <nav aria-label="Page navigation example">
      <div class="pagination justify-content-center">
        <a href="<?= "contacts.php?page=" . $page - 1 ?>" class="<?= ($page == 1) ? "page-item page-link disabled" : "page-item page-link" ?>">
          قبل
        </a>
        <?php for ($pages = 1; $pages <= $pagination; $pages++) { ?>
        <a href="<?= "contacts.php?page=$pages" ?>" class="<?= ($page == $pages) ? "page-item page-link disabled" : "page-item page-link" ?>">
        <?= $pages ?>
        </a>
        <?php } ?>
        <a href="<?= "contacts.php?page=" . $page + 1 ?>" class="<?= ($pagination <= $page) ? "page-item page-link disabled" : "page-item page-link" ?>">
          بعد
        </a>
      </div>
    </nav>
    <?php } else {
    $idMessage = $_GET['Num'];
    $getMessage = contact($idMessage);
    $status = updateStatus($idMessage) ?>
    <div class="message">
      <div class="alert alert-info"><?= $getMessage->message ?></div>
      <td><a href="./contacts.php?page=<?= $page ?>" class="btn btn-danger close">بستن</a></td>
    </div>
  <?php } ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>