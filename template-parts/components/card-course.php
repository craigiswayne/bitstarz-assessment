<div>
    <div class="card course position-relative <?= $variables['cssClasses']; ?>">
        <img src="<?= $variables['imageURL']; ?>" />
        <div class='overlay justify-content-end text-content'>
            <h4><?= $variables['title']; ?></h4>
            <h6 class="color-text-tertiary"><?= $variables['description']; ?></h6>
        </div>
        <button class="cta">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="24" height="24" rx="12" fill="#9EA1AE"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M12 5C11.4477 5 11 5.44772 11 6C11 6.55228 11.4477 7 12 7C12.5523 7 13 6.55228 13 6C13 5.44772 12.5523 5 12 5ZM12 9C11.4477 9 11 9.44772 11 10V18C11 18.5523 11.4477 19 12 19C12.5523 19 13 18.5523 13 18V10C13 9.44772 12.5523 9 12 9Z" fill="white"/>
            </svg>
        </button>
    </div>
</div>

