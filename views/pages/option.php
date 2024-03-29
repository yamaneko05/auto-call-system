<?php require './views/templates/header.php'; ?>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">ホーム</a></li>
    <li class="breadcrumb-item"><a href="/surveys/<?= $survey["id"] ?>"><?= $survey["title"] ?></a></li>
    <li class="breadcrumb-item"><a href="/faqs/<?= $faq["id"] ?>"><?= $faq["title"] ?></a></li>
    <li class="breadcrumb-item active">選択肢: <?= $option["title"] ?></li>
  </ol>
</nav>
<?= Components::h2("選択肢: {$option["title"]}") ?>

<section id="summary">
  <?= Components::h3("設定"); ?>
  <div style="max-width: 480px;">
    <form action="/options/<?= $option["id"] ?>" method="post">
      <?= csrf() ?>
      <?= method("PUT") ?>
      <div class="mb-3">
        <label class="form-label">選択肢のタイトル</label>
        <input type="text" name="title" class="form-control" value="<?= $option["title"] ?>" required>
      </div>
      <div class="mb-3">
        <label class="form-label">NEXT</label>
        <select class="form-select" name="next_faq_id" required>
          <option value="0" <?= !$option["next_faq_id"] ? "selected" : ""; ?>>終了</option>
          <?php foreach ($surveyFaqs as $surveyFaq): ?>
          <option
          value="<?= $surveyFaq["id"] ?>"
          <?= $option["next_faq_id"] === $surveyFaq["id"] ? "selected" : ""; ?>
          >
          <?= $surveyFaq["title"] ?>
          </option>
          <?php endforeach; ?>
        </select>
        <div id="passwordHelpBlock" class="form-text">
          この選択肢が選択された場合の次の操作を指定してください
        </div>
      </div>
      <div class="mb-3">
        <label class="form-label">ダイヤル番号</label>
        <input type="number" class="form-control" value="<?= $option["dial"] ?>" disabled>
        <div id="passwordHelpBlock" class="form-text">
          ダイヤル番号は質問ページの選択肢一覧から変更できます
        </div>
      </div>
      <div class="form-check form-switch mb-3">
        <input class="form-check-input" type="checkbox" role="switch" checked>
        <label class="form-check-label">採用フラグ</label>
      </div>
      <div class="text-end">
        <button type="submit" class="btn btn-dark">更新</button>
      </div>
    </form>
    <form method="post" onsubmit="return window.confirm('本当に削除しますか？')">
      <?= csrf() ?>
      <?= method("DELETE") ?>
      <div class="text-end">
        <input type="submit" class="btn btn-link" value="この選択肢を削除">
      </div>
    </form>
  </div>
</section>
<?php require './views/templates/footer.php'; ?>