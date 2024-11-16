<div
	class="d-sm-flex text-center justify-content-between align-items-center mb-4">
	<h3 class="mb-sm-0 mb-1 fs-18">
		<?= $title ?? 'Trang Chủ' ?>
	</h3>
	<ul class="ps-0 mb-0 list-unstyled d-flex justify-content-center">
		<?php
		if (isset($title)): ?>
			<li>
				<a href="<?= base_url() ?>/dashboard/"
				   class="text-decoration-none">
					<i class="ri-home-2-line"
					   style="position: relative; top: -1px;"></i>
					<span>Trang Chủ</span>
				</a>
			</li>
			<li>
                    <span
						class="fw-semibold fs-14 heading-font text-dark dot ms-2">
                        <?= $title ?>
                    </span>
			</li>
		<?php
		endif ?>
	</ul>
</div>