<div class="bg-white ts-breadcrumb-wrapper">
    <div class="ts-container-fluid ">
        <div class="d-flex justify-content-between align-items-center">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb fw-bold py-4 mb-0">
                    <?php foreach ($breadcrumbs as $index => $breadcrumb): ?>
                    <?php if ($index === count($breadcrumbs) - 1): ?>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo $breadcrumb['text']; ?></li>
                    <?php else: ?>
                    <li class="breadcrumb-item">
                        <a class="text-black text-decoration-none" href="<?php echo $breadcrumb['url']; ?>">
                            <?php echo $breadcrumb['text']; ?>
                        </a>
                    </li>
                    <?php endif; ?>
                    <?php endforeach; ?>
                </ol>
            </nav>

        </div>
    </div>
    <hr class="m-0">
</div>