<form class="mb-5" action="./process_form.php" method="POST">
    <?php if (isset($_SESSION['message'])): ?>
        <div class="alert alert-<?php echo $_SESSION['message_type']; ?>">
            <?php echo $_SESSION['message']; ?>
        </div>
        <?php unset($_SESSION['message']);
        unset($_SESSION['message_type']); ?>
    <?php endif; ?>
    <div>
        <div class="row row-cols-md-2">
            <div class="mb-4">
                <input type="text" class="form-control ts-form-control text-black rounded-0" id="name"
                    name="name" placeholder="您的姓名：" required />
            </div>
            <div class="mb-4">
                <input type="email" class="form-control ts-form-control text-black rounded-0" id="email"
                    name="email" placeholder="邮箱：*" required />
            </div>
        </div>

        <div class="mb-4">
            <textarea style="min-height: 220px" class="form-control ts-form-control text-black rounded-0"
                id="message" name="message" placeholder="内容：*" rows="4" required></textarea>
        </div>
        <div class="text-center">
            <button class="btn btn-outline-secondary rounded-0 py-2" type="submit">
                <span class="px-4 ">
                    发送
                </span>
                <?php echo $chevronRight ?>
            </button>
        </div>
    </div>
</form>