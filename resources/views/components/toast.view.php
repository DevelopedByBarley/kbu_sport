  <?php $toast = $_SESSION['_flash']['toast'] ?? null ?>


  <?php if (isset($toast)): ?>
    <div id="toast" class="toast show position-fixed z-3" style="top:50%; left:50%; transform:translate(-50%)" role="alert" aria-live="assertive" aria-atomic="true">
      <div class="toast-header text-white bg-<?= $toast['bg'] ?? '' ?>">
        <!--  <img src="..." class="rounded me-2" alt="..."> -->
        <strong class="me-auto"><?= 'KBU üzenete' ?> </strong>
        <small><?= $toast['time'] ?? '' ?></small>
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
      <div class="toast-body p-3 fw-bold">
        <?= $toast['message'] ?? '' ?>
      </div>
    </div>
  <?php endif ?>