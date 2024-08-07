<?php require_once base_path('views/partials/head.php'); ?>
<?php require_once base_path('views/partials/nav.php'); ?>
<?php require_once base_path('views/partials/banner.php'); ?>

<main>

  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <form method="POST">
      <div>
        <div class="col">
          <label for="body" class="block text-sm font-medium leading-6 text-gray-900">Notes</label>
          <div class="mt-2">
            <textarea id="body" name="body" rows="3" class="block w-96 rounded-md border-0
            py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400
            focus:ring-2 focus:ring-inset focus:ring-indigo-600 
            sm:text-sm sm:leading-6"><?= $_POST['body'] ?? '' ?></textarea>
            <?php if (isset($errors['body'])) : ?>
              <p class="text-red-500 text-xs mt-2"><?= $errors['body'] ?></p>
            <?php endif; ?>
          </div>
          <div class="mt-6 flex items-center gap-x-6">
            <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
            <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Create</button>
          </div>
        </div>

      </div>
    </form>

  </div>

</main>


<?php require_once base_path('views/partials/foot.php'); ?>