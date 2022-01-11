<div class="animate fade-in-from-bottom <?= $variables['cssClasses']; ?>">
    <div class="card course">
        <div class="inner">
            <div class="front position-relative">
                <img src="<?= $variables['imageURL']; ?>" alt="Course Card: <?= $variables['title']; ?>" />
                <div class='overlay justify-content-end text-content'>
                    <h4><?= $variables['title']; ?></h4>
                    <h6 class="color-text-tertiary"><?= $variables['description']; ?></h6>
                </div>
                <button class="cta" aria-label="flip course card button">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="24" height="24" rx="12" fill="#9EA1AE"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 5C11.4477 5 11 5.44772 11 6C11 6.55228 11.4477 7 12 7C12.5523 7 13 6.55228 13 6C13 5.44772 12.5523 5 12 5ZM12 9C11.4477 9 11 9.44772 11 10V18C11 18.5523 11.4477 19 12 19C12.5523 19 13 18.5523 13 18V10C13 9.44772 12.5523 9 12 9Z" fill="white"/>
                    </svg>
                </button>
            </div>
            <div class="back color-text-dark position-relative">
                <div class="text-content">im the back</div>
                <button class="cta" aria-label="flip course card button">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="24" height="24" rx="12" fill="#9EA1AE"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.9706 6.65685C17.5801 6.26633 16.9469 6.26633 16.5564 6.65685L12.3137 10.8995L8.07108 6.65685C7.68056 6.26633 7.04739 6.26633 6.65687 6.65685C6.26634 7.04738 6.26634 7.68054 6.65687 8.07107L10.8995 12.3137L6.65687 16.5563C6.26634 16.9469 6.26634 17.58 6.65687 17.9706C7.04739 18.3611 7.68056 18.3611 8.07108 17.9706L12.3137 13.7279L16.5564 17.9706C16.9469 18.3611 17.5801 18.3611 17.9706 17.9706C18.3611 17.58 18.3611 16.9469 17.9706 16.5563L13.7279 12.3137L17.9706 8.07107C18.3611 7.68054 18.3611 7.04738 17.9706 6.65685Z" fill="white"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</div>

