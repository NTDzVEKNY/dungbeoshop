<?= $this->extend('layouts/_main') ?>

<?= $this->section('content') ?>
<div id="blue-wrapper">
	<div class="row justify-content-center">
		<div class="col-xxl-8">
			<div class="row justify-content-center">
				<div class="col-lg-4 col-sm-6">
					<div
						class="stats-box card bg-white border-0 rounded-10 mb-4">
						<div class="card-body p-4">
							<div
								class="d-flex justify-content-between align-items-center mb-3 pb-1">
								<div class="flex-grow-1 me-3">
									<h3 class="body-font fw-bold fs-3 mb-2">
										$25,890</h3>
									<span>Total Sales</span>
								</div>
								<div class="flex-shrink-0">
									<div class="icon transition">
										<i class="flaticon-donut-chart"></i>
									</div>
								</div>
							</div>
							<div class="d-flex align-items-center">
								<div class="svg-success me-2">
									<i data-feather="trending-up"></i>
								</div>
								<p class="fw-semibold"><span
										class="text-success">1.3%</span>
									Up from past week</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6">
					<div
						class="stats-box card bg-white border-0 rounded-10 mb-4">
						<div class="card-body p-4">
							<div
								class="d-flex justify-content-between align-items-center mb-3 pb-1">
								<div class="flex-grow-1 me-3">
									<h3 class="body-font fw-bold fs-3 mb-2">
										$24,890</h3>
									<span>Total Order</span>
								</div>
								<div class="flex-shrink-0">
									<div class="icon transition">
										<i class="flaticon-goal"></i>
									</div>
								</div>
							</div>
							<div class="d-flex align-items-center">
								<div class="svg-danger me-2">
									<i data-feather="trending-down"></i>
								</div>
								<p class="fw-semibold"><span
										class="text-danger">1.3%</span>
									Down from past week</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6">
					<div
						class="stats-box card bg-white border-0 rounded-10 mb-4">
						<div class="card-body p-4">
							<div
								class="d-flex justify-content-between align-items-center mb-3 pb-1">
								<div class="flex-grow-1 me-3">
									<h3 class="body-font fw-bold fs-3 mb-2">
										183.35M</h3>
									<span>Total Customers</span>
								</div>
								<div class="flex-shrink-0">
									<div class="icon transition">
										<i class="flaticon-award"></i>
									</div>
								</div>
							</div>
							<div class="d-flex align-items-center">
								<div class="svg-success me-2">
									<i data-feather="trending-up"></i>
								</div>
								<p class="fw-semibold"><span
										class="text-success">1.3%</span>
									Up from past week</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="card bg-white border-0 rounded-10 mb-4">
				<div class="card-body p-4">
					<div
						class="d-flex justify-content-between align-items-center border-bottom pb-20 mb-20">
						<h4 class="fw-semibold fs-18 mb-0">Audience
							Overview</h4>
						<div class="dropdown action-opt">
							<button class="btn bg-transparent p-0" type="button"
									data-bs-toggle="dropdown"
									aria-expanded="false">
								<i data-feather="more-horizontal"></i>
							</button>
							<ul
								class="dropdown-menu dropdown-menu-end bg-white border box-shadow">
								<li>
									<a class="dropdown-item"
									   href="javascript:;">
										<i data-feather="clock"></i>
										Today
									</a>
								</li>
								<li>
									<a class="dropdown-item"
									   href="javascript:;">
										<i data-feather="pie-chart"></i>
										Last 7 Days
									</a>
								</li>
								<li>
									<a class="dropdown-item"
									   href="javascript:;">
										<i data-feather="rotate-cw"></i>
										Last Month
									</a>
								</li>
								<li>
									<a class="dropdown-item"
									   href="javascript:;">
										<i data-feather="calendar"></i>
										Last 1 Year
									</a>
								</li>
								<li>
									<a class="dropdown-item"
									   href="javascript:;">
										<i data-feather="bar-chart"></i>
										All Time
									</a>
								</li>
								<li>
									<a class="dropdown-item"
									   href="javascript:;">
										<i data-feather="eye"></i>
										View
									</a>
								</li>
								<li>
									<a class="dropdown-item"
									   href="javascript:;">
										<i data-feather="trash"></i>
										Delete
									</a>
								</li>
							</ul>
						</div>
					</div>
					<div id="audience_overview"></div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-8">
					<div class="card bg-white border-0 rounded-10 mb-4">
						<div class="card-body p-4">
							<div
								class="d-flex justify-content-between align-items-center border-bottom pb-20 mb-20">
								<h4 class="fw-semibold fs-18 mb-0">Visits by
									Day</h4>
								<span>Total 248.5k Visits</span>
							</div>
							<div id="visits_by_day"></div>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div
						class="stats-box card bg-primary-div border-0 rounded-10 mb-4">
						<div class="card-body p-4">
							<p class="fw-semibold text-white mb-1">
								Impressions</p>
							<h3 class="body-font fw-bold fs-3 mb-1 text-white">
								$12,875 <sub
									class="fw-normal"><i
										class="ri-arrow-up-s-fill"></i>
									10%</sub></h3>
							<span class="text-white" style="opacity: 0.7">Compared to $21,490 last year</span>
						</div>
					</div>
					<div class="card bg-white border-0 rounded-10 mb-4">
						<div class="card-body p-4">
							<div
								class="d-flex justify-content-between align-items-center border-bottom pb-20 mb-20">
								<h4 class="fw-bold fs-18 mb-0">Activity
									Timeline</h4>
								<div class="dropdown action-opt">
									<button class="btn bg-transparent p-0"
											type="button"
											data-bs-toggle="dropdown"
											aria-expanded="false">
										<i data-feather="more-horizontal"></i>
									</button>
									<ul
										class="dropdown-menu dropdown-menu-end bg-white border box-shadow">
										<li>
											<a class="dropdown-item"
											   href="javascript:;">
												<i data-feather="clock"></i>
												Today
											</a>
										</li>
										<li>
											<a class="dropdown-item"
											   href="javascript:;">
												<i data-feather="pie-chart"></i>
												Last 7 Days
											</a>
										</li>
										<li>
											<a class="dropdown-item"
											   href="javascript:;">
												<i data-feather="rotate-cw"></i>
												Last Month
											</a>
										</li>
										<li>
											<a class="dropdown-item"
											   href="javascript:;">
												<i data-feather="calendar"></i>
												Last 12 Months
											</a>
										</li>
										<li>
											<a class="dropdown-item"
											   href="javascript:;">
												<i data-feather="bar-chart"></i>
												All Time
											</a>
										</li>
										<li>
											<a class="dropdown-item"
											   href="javascript:;">
												<i data-feather="eye"></i>
												View
											</a>
										</li>
										<li>
											<a class="dropdown-item"
											   href="javascript:;">
												<i data-feather="trash"></i>
												Delete
											</a>
										</li>
									</ul>
								</div>
							</div>
							<ul class="ps-0 mb-0 list-unstyled activity-timeline max-h-402"
								data-simplebar>
								<li class="activity-item">
									<a href="notification.html"
									   class="text-decoration-none">
										<h4>8 Invoices have been paid</h4>
										<div class="activity-wrap">
											<div
												class="d-flex align-items-center">
												<div class="flex-shrink-0">
													<img
														src="assets/images/pdf.svg"
														alt="pdf">
												</div>
												<div class="flex-grow-1 ms-3">
													<p>Invoices have been paid
														to the company.</p>
												</div>
											</div>
											<span>11:47 PM Wednesday</span>
										</div>
									</a>
								</li>
								<li class="activity-item">
									<a href="notification.html"
									   class="text-decoration-none">
										<h4>Create a new project for client</h4>
										<div class="activity-wrap">
											<div
												class="d-flex align-items-center">
												<div class="flex-shrink-0">
													<img
														src="assets/images/notifications-1.jpg"
														alt="notifications">
												</div>
												<div class="flex-grow-1 ms-3">
													<p>Allow users to like
														products in your
														WooCommerce</p>
												</div>
											</div>
											<span>April, 18</span>
										</div>
									</a>
								</li>
								<li class="activity-item">
									<a href="notification.html"
									   class="text-decoration-none">
										<h4>Added new style collection</h4>
										<div class="activity-wrap">
											<div
												class="d-flex align-items-center">
												<div class="flex-shrink-0">
													<img
														src="assets/images/notifications-2.jpg"
														alt="notifications">
												</div>
												<div class="flex-grow-1 ms-3">
													<p>Product uploaded By Nesta
														Technologies</p>
												</div>
											</div>
											<span>02:14 PM Today</span>
										</div>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="card bg-white border-0 rounded-10 mb-4">
				<div class="card-body p-4">
					<div
						class="d-flex justify-content-between align-items-center border-bottom pb-20 mb-20">
						<h4 class="fw-semibold fs-18 mb-0">Revenu Status</h4>
						<div class="dropdown action-opt">
							<button class="btn bg-transparent p-0" type="button"
									data-bs-toggle="dropdown"
									aria-expanded="false">
								<i data-feather="more-horizontal"></i>
							</button>
							<ul
								class="dropdown-menu dropdown-menu-end bg-white border box-shadow">
								<li>
									<a class="dropdown-item"
									   href="javascript:;">
										<i data-feather="clock"></i>
										Today
									</a>
								</li>
								<li>
									<a class="dropdown-item"
									   href="javascript:;">
										<i data-feather="pie-chart"></i>
										Last 7 Days
									</a>
								</li>
								<li>
									<a class="dropdown-item"
									   href="javascript:;">
										<i data-feather="rotate-cw"></i>
										Last Month
									</a>
								</li>
								<li>
									<a class="dropdown-item"
									   href="javascript:;">
										<i data-feather="calendar"></i>
										Last 1 Year
									</a>
								</li>
								<li>
									<a class="dropdown-item"
									   href="javascript:;">
										<i data-feather="bar-chart"></i>
										All Time
									</a>
								</li>
								<li>
									<a class="dropdown-item"
									   href="javascript:;">
										<i data-feather="eye"></i>
										View
									</a>
								</li>
								<li>
									<a class="dropdown-item"
									   href="javascript:;">
										<i data-feather="trash"></i>
										Delete
									</a>
								</li>
							</ul>
						</div>
					</div>
					<div id="revenu_status"></div>
				</div>
			</div>
		</div>
		<div class="col-xxl-4">
			<div
				class="stats-box ratings card bg-white border-0 rounded-10 mb-4">
				<div class="card-body p-4">
					<div
						class="d-sm-flex justify-content-between align-items-center">
						<div class="flex-grow-1 mb-3 mb-sm-0">
							<h4 class="fs-18 fw-semibold mb-2">Ratings</h4>
							<span
								class="fw-semibold d-block mb-3 text-gray-light">YEAR OF 2024</span>
							<h3 class="body-font fw-bold fs-24 mb-3">8.14k <sub
									class="text-gray-light fw-normal">Review</sub>
							</h3>
							<div class="d-flex align-items-center">
								<div class="svg-warning me-2">
									<i data-feather="star"
									   style="width: 20px; height: 20px;"></i>
								</div>
								<p class="fw-semibold"><span
										class="text-body me-1">4.5</span>
									<span class="text-primary">+15.6%</span>
									From previous
									period</p>
							</div>
						</div>
						<div class="flex-shrink-0">
							<div id="ratings_chart"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="card bg-white border-0 rounded-10 mb-4">
				<div class="card-body p-4">
					<div
						class="d-flex justify-content-between align-items-center border-bottom pb-20 mb-20">
						<h4 class="fw-bold fs-18 mb-0">Live Visits on Our
							Site</h4>
						<div class="dropdown action-opt">
							<button class="btn bg-transparent p-0" type="button"
									data-bs-toggle="dropdown"
									aria-expanded="false">
								<i data-feather="more-horizontal"></i>
							</button>
							<ul
								class="dropdown-menu dropdown-menu-end bg-white border box-shadow">
								<li>
									<a class="dropdown-item"
									   href="javascript:;">
										<i data-feather="clock"></i>
										Today
									</a>
								</li>
								<li>
									<a class="dropdown-item"
									   href="javascript:;">
										<i data-feather="pie-chart"></i>
										Last 7 Days
									</a>
								</li>
								<li>
									<a class="dropdown-item"
									   href="javascript:;">
										<i data-feather="rotate-cw"></i>
										Last Month
									</a>
								</li>
								<li>
									<a class="dropdown-item"
									   href="javascript:;">
										<i data-feather="calendar"></i>
										Last 1 Year
									</a>
								</li>
								<li>
									<a class="dropdown-item"
									   href="javascript:;">
										<i data-feather="bar-chart"></i>
										All Time
									</a>
								</li>
								<li>
									<a class="dropdown-item"
									   href="javascript:;">
										<i data-feather="eye"></i>
										View
									</a>
								</li>
								<li>
									<a class="dropdown-item"
									   href="javascript:;">
										<i data-feather="trash"></i>
										Delete
									</a>
								</li>
							</ul>
						</div>
					</div>
					<div id="live_visits_on_our_site"></div>
				</div>
			</div>
			<div class="card bg-white border-0 rounded-10 mb-4">
				<div class="card-body p-4">
					<div
						class="d-flex justify-content-between align-items-center border-bottom pb-20 mb-20">
						<h4 class="fw-bold fs-18 mb-0">Sales By Locations</h4>
						<div class="dropdown action-opt">
							<button class="btn bg-transparent p-0" type="button"
									data-bs-toggle="dropdown"
									aria-expanded="false">
								<i data-feather="more-horizontal"></i>
							</button>
							<ul
								class="dropdown-menu dropdown-menu-end bg-white border box-shadow">
								<li>
									<a class="dropdown-item"
									   href="javascript:;">
										<i data-feather="clock"></i>
										Today
									</a>
								</li>
								<li>
									<a class="dropdown-item"
									   href="javascript:;">
										<i data-feather="pie-chart"></i>
										Last 7 Days
									</a>
								</li>
								<li>
									<a class="dropdown-item"
									   href="javascript:;">
										<i data-feather="rotate-cw"></i>
										Last Month
									</a>
								</li>
								<li>
									<a class="dropdown-item"
									   href="javascript:;">
										<i data-feather="calendar"></i>
										Last 1 Year
									</a>
								</li>
								<li>
									<a class="dropdown-item"
									   href="javascript:;">
										<i data-feather="bar-chart"></i>
										All Time
									</a>
								</li>
								<li>
									<a class="dropdown-item"
									   href="javascript:;">
										<i data-feather="eye"></i>
										View
									</a>
								</li>
								<li>
									<a class="dropdown-item"
									   href="javascript:;">
										<i data-feather="trash"></i>
										Delete
									</a>
								</li>
							</ul>
						</div>
					</div>
					<div id="sales_by_locations"></div>
					<ul class="ps-0 mb-0 list-unstyled sales_by_locations mt-4">
						<li>
							<span class="fw-semibold d-block mb-2">Canada</span>
							<div class="progress" role="progressbar"
								 aria-label="Example with label"
								 aria-valuenow="75"
								 aria-valuemin="0" aria-valuemax="100">
								<div class="progress-bar" style="width: 75%">
									<span class="count fw-semibold text-body">75%</span>
								</div>
							</div>
						</li>
						<li>
							<span class="fw-semibold d-block mb-2">Russia</span>
							<div class="progress" role="progressbar"
								 aria-label="Example with label"
								 aria-valuenow="55"
								 aria-valuemin="0" aria-valuemax="100">
								<div class="progress-bar" style="width: 55%">
									<span class="count fw-semibold text-body">55%</span>
								</div>
							</div>
						</li>
						<li>
                            <span
								class="fw-semibold d-block mb-2">Greenland</span>
							<div class="progress" role="progressbar"
								 aria-label="Example with label"
								 aria-valuenow="45"
								 aria-valuemin="0" aria-valuemax="100">
								<div class="progress-bar" style="width: 45%">
									<span class="count fw-semibold text-body">45%</span>
								</div>
							</div>
						</li>
						<li>
							<span class="fw-semibold d-block mb-2">USA</span>
							<div class="progress" role="progressbar"
								 aria-label="Example with label"
								 aria-valuenow="35"
								 aria-valuemin="0" aria-valuemax="100">
								<div class="progress-bar" style="width: 35%">
									<span class="count fw-semibold text-body">35%</span>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<div class="card bg-white border-0 rounded-10 mb-4">
				<div class="card-body p-4">
					<div
						class="d-flex justify-content-between align-items-center border-bottom pb-20 mb-20">
						<h4 class="fw-bold fs-18 mb-0">New Customers</h4>
						<div class="dropdown action-opt">
							<button class="btn bg-transparent p-0" type="button"
									data-bs-toggle="dropdown"
									aria-expanded="false">
								<i data-feather="more-horizontal"></i>
							</button>
							<ul
								class="dropdown-menu dropdown-menu-end bg-white border box-shadow">
								<li>
									<a class="dropdown-item"
									   href="javascript:;">
										<i data-feather="clock"></i>
										Today
									</a>
								</li>
								<li>
									<a class="dropdown-item"
									   href="javascript:;">
										<i data-feather="pie-chart"></i>
										Last 7 Days
									</a>
								</li>
								<li>
									<a class="dropdown-item"
									   href="javascript:;">
										<i data-feather="rotate-cw"></i>
										Last Month
									</a>
								</li>
								<li>
									<a class="dropdown-item"
									   href="javascript:;">
										<i data-feather="calendar"></i>
										Last 1 Year
									</a>
								</li>
								<li>
									<a class="dropdown-item"
									   href="javascript:;">
										<i data-feather="bar-chart"></i>
										All Time
									</a>
								</li>
								<li>
									<a class="dropdown-item"
									   href="javascript:;">
										<i data-feather="eye"></i>
										View
									</a>
								</li>
								<li>
									<a class="dropdown-item"
									   href="javascript:;">
										<i data-feather="trash"></i>
										Delete
									</a>
								</li>
							</ul>
						</div>
					</div>
					<ul class="ps-0 mb-0 list-unstyled max-h-198"
						data-simplebar>
						<li class="border-bottom border-color-gray mb-3 pb-3">
							<div
								class="d-sm-flex justify-content-between align-content-center">
								<div class="d-flex align-items-center">
									<div class="flex-shrink-0">
										<img src="assets/images/user-1.jpg"
											 class="rounded-circle wh-44"
											 alt="user-1">
									</div>
									<div class="flex-grow-1 ms-10">
										<h4 class="fw-semibold fs-16 mb-0">
											Jordan Stevenson</h4>
										<span class="text-gray-light">@jstevenson5c</span>
									</div>
								</div>
								<div
									class="d-flex align-items-center mt-2 mt-sm-0">
									<span>$289.50</span>
									<span
										class="bg-opacity-10 bg-primary fs-13 fw-semibold text-primary py-1 px-3 rounded-pill ms-10">15 Orders</span>
								</div>
							</div>
						</li>
						<li class="border-bottom border-color-gray mb-3 pb-3">
							<div
								class="d-sm-flex justify-content-between align-content-center">
								<div class="d-flex align-items-center">
									<div class="flex-shrink-0">
										<img src="assets/images/user-2.jpg"
											 class="rounded-circle wh-44"
											 alt="user-2">
									</div>
									<div class="flex-grow-1 ms-10">
										<h4 class="fw-semibold fs-16 mb-0">Lydia
											Reese</h4>
										<span
											class="text-gray-light">@lreese3b</span>
									</div>
								</div>
								<div
									class="d-flex align-items-center mt-2 mt-sm-0">
									<span>$852.50</span>
									<span
										class="bg-opacity-10 bg-primary fs-13 fw-semibold text-primary py-1 px-3 rounded-pill ms-10">17 Orders</span>
								</div>
							</div>
						</li>
						<li>
							<div
								class="d-sm-flex justify-content-between align-content-center">
								<div class="d-flex align-items-center">
									<div class="flex-shrink-0">
										<img src="assets/images/user-3.jpg"
											 class="rounded-circle wh-44"
											 alt="user-3">
									</div>
									<div class="flex-grow-1 ms-10">
										<h4 class="fw-semibold fs-16 mb-0">Easin
											Arafat</h4>
										<span class="text-gray-light">@jstevenson6c</span>
									</div>
								</div>
								<div
									class="d-flex align-items-center mt-2 mt-sm-0">
									<span>$456.50</span>
									<span
										class="bg-opacity-10 bg-primary fs-13 fw-semibold text-primary py-1 px-3 rounded-pill ms-10">19 Orders</span>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="card bg-white border-0 rounded-10 mb-4">
		<div class="card-body p-4">
			<div
				class="d-flex justify-content-between align-items-center border-bottom pb-20 mb-20">
				<h4 class="fw-bold fs-18 mb-0">Recent Orders</h4>
				<div class="dropdown action-opt">
					<button class="btn bg-transparent p-0" type="button"
							data-bs-toggle="dropdown" aria-expanded="false">
						<i data-feather="more-horizontal"></i>
					</button>
					<ul
						class="dropdown-menu dropdown-menu-end bg-white border box-shadow">
						<li>
							<a class="dropdown-item" href="javascript:;">
								<i data-feather="clock"></i>
								Today
							</a>
						</li>
						<li>
							<a class="dropdown-item" href="javascript:;">
								<i data-feather="pie-chart"></i>
								Last 7 Days
							</a>
						</li>
						<li>
							<a class="dropdown-item" href="javascript:;">
								<i data-feather="rotate-cw"></i>
								Last Month
							</a>
						</li>
						<li>
							<a class="dropdown-item" href="javascript:;">
								<i data-feather="calendar"></i>
								Last 12 Months
							</a>
						</li>
						<li>
							<a class="dropdown-item" href="javascript:;">
								<i data-feather="bar-chart"></i>
								All Time
							</a>
						</li>
						<li>
							<a class="dropdown-item" href="javascript:;">
								<i data-feather="eye"></i>
								View
							</a>
						</li>
						<li>
							<a class="dropdown-item" href="javascript:;">
								<i data-feather="trash"></i>
								Delete
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="default-table-area recent-orders">
				<div class="table-responsive">
					<table class="table align-middle">
						<thead>
						<tr>
							<th scope="col" class="text-primary">Order ID</th>
							<th scope="col">Product</th>
							<th scope="col">Customer</th>
							<th scope="col">Price</th>
							<th scope="col">Vendor</th>
							<th scope="col">Date</th>
							<th scope="col">Status</th>
							<th scope="col">Rating</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td class="fw-semibold">#SK258</td>
							<td>
								<a href="product-details.html"
								   class="d-flex align-items-center">
									<img src="assets/images/product-1.jpg"
										 class="wh-55 rounded-3"
										 alt="product-1">
									<h6>Laptop Macos Pro</h6>
								</a>
							</td>
							<td>Colin Firth</td>
							<td>$289.50</td>
							<td>Boetic Fashion</td>
							<td>2024-12-19</td>
							<td>
                  <span
					  class="badge bg-primary bg-opacity-10 text-primary py-2 px-3 fw-semibold">Pending</span>
							</td>
							<td>5.0 (61 Votes)</td>
						</tr>
						<tr>
							<td class="fw-semibold">#AA257</td>
							<td>
								<a href="product-details.html"
								   class="d-flex align-items-center">
									<img src="assets/images/product-2.jpg"
										 class="wh-55 rounded-3"
										 alt="product-2">
									<h6>Smart Camera XD6</h6>
								</a>
							</td>
							<td>Alina Smith</td>
							<td>$876.55</td>
							<td>Camera</td>
							<td>02-12-2024</td>
							<td>
                  <span
					  class="badge bg-danger bg-opacity-10 text-danger py-2 px-3 fw-semibold">Out of Stock</span>
							</td>
							<td>4.9 (55 Votes)</td>
						</tr>
						<tr>
							<td class="fw-semibold">#BB256</td>
							<td>
								<a href="product-details.html"
								   class="d-flex align-items-center">
									<img src="assets/images/product-3.jpg"
										 class="wh-55 rounded-3"
										 alt="product-3">
									<h6>Pixi 8 Wireless Airphone</h6>
								</a>
							</td>
							<td>James Andy</td>
							<td>$654.76</td>
							<td>Wireless</td>
							<td>03-12-2024</td>
							<td>
                  <span
					  class="badge bg-success bg-opacity-10 text-success py-2 px-3 fw-semibold">Delivered</span>
							</td>
							<td>5.0 (61 votes)</td>
						</tr>
						<tr>
							<td class="fw-semibold">#CC255</td>
							<td>
								<a href="product-details.html"
								   class="d-flex align-items-center">
									<img src="assets/images/product-4.jpg"
										 class="wh-55 rounded-3"
										 alt="product-4">
									<h6>Jebble Smart Watch</h6>
								</a>
							</td>
							<td>Sarah Taylor</td>
							<td>$654.99</td>
							<td>Jebble</td>
							<td>04-12-2024</td>
							<td>
                  <span
					  class="badge bg-primary bg-opacity-10 text-primary py-2 px-3 fw-semibold">Pending</span>
							</td>
							<td>5.0 (196 Votes)</td>
						</tr>
						<tr>
							<td class="fw-semibold">#DD254</td>
							<td>
								<a href="product-details.html"
								   class="d-flex align-items-center">
									<img src="assets/images/product-5.jpg"
										 class="wh-55 rounded-3"
										 alt="product-5">
									<h6>Smart Watch F8 Pro</h6>
								</a>
							</td>
							<td>David Warner</td>
							<td>$432.00</td>
							<td>Watch</td>
							<td>05-12-2024</td>
							<td>
                  <span
					  class="badge bg-success bg-opacity-10 text-success py-2 px-3 fw-semibold">Delivered</span>
							</td>
							<td>3.0 (54 Votes)</td>
						</tr>
						</tbody>
					</table>
				</div>
				<div
					class="d-sm-flex justify-content-between align-items-center text-center">
					<span class="fs-14">Showing 1 To 5 Of 20 Entries</span>
					<nav aria-label="Page navigation example">
						<ul class="pagination mb-0 mt-3 mt-sm-0 justify-content-center">
							<li class="page-item">
								<a class="page-link icon" href="index.html"
								   aria-label="Previous">
									<i data-feather="arrow-left"></i>
								</a>
							</li>
							<li class="page-item"><a class="page-link active"
													 href="index.html">1</a>
							</li>
							<li class="page-item"><a class="page-link"
													 href="index.html">2</a>
							</li>
							<li class="page-item"><a class="page-link"
													 href="index.html">3</a>
							</li>
							<li class="page-item">
								<a class="page-link icon" href="index.html"
								   aria-label="Next">
									<i data-feather="arrow-right"></i>
								</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xxl-8 col-xxxl-6">
			<div class="card bg-white border-0 rounded-10 mb-4">
				<div class="card-body p-4">
					<div
						class="d-flex justify-content-between align-items-center border-bottom pb-20 mb-20">
						<h4 class="fw-bold fs-18 mb-0">Team Members List</h4>
						<div class="dropdown action-opt">
							<button class="btn bg-transparent p-0" type="button"
									data-bs-toggle="dropdown"
									aria-expanded="false">
								<i data-feather="more-horizontal"></i>
							</button>
							<ul
								class="dropdown-menu dropdown-menu-end bg-white border box-shadow">
								<li>
									<a class="dropdown-item"
									   href="javascript:;">
										<i data-feather="clock"></i>
										Today
									</a>
								</li>
								<li>
									<a class="dropdown-item"
									   href="javascript:;">
										<i data-feather="pie-chart"></i>
										Last 7 Days
									</a>
								</li>
								<li>
									<a class="dropdown-item"
									   href="javascript:;">
										<i data-feather="rotate-cw"></i>
										Last Month
									</a>
								</li>
								<li>
									<a class="dropdown-item"
									   href="javascript:;">
										<i data-feather="calendar"></i>
										Last 1 Year
									</a>
								</li>
								<li>
									<a class="dropdown-item"
									   href="javascript:;">
										<i data-feather="bar-chart"></i>
										All Time
									</a>
								</li>
								<li>
									<a class="dropdown-item"
									   href="javascript:;">
										<i data-feather="eye"></i>
										View
									</a>
								</li>
								<li>
									<a class="dropdown-item"
									   href="javascript:;">
										<i data-feather="trash"></i>
										Delete
									</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="default-table-area team-members-list">
						<div class="table-responsive">
							<table class="table align-middle">
								<thead>
								<tr>
									<th scope="col" class="text-primary">User
									</th>
									<th scope="col">Email</th>
									<th scope="col">Role</th>
									<th scope="col">Status</th>
								</tr>
								</thead>
								<tbody>
								<tr>
									<td>
										<div class="d-flex align-items-center">
											<div class="flex-shrink-0">
												<img
													src="assets/images/user-4.jpg"
													class="rounded-circle wh-44"
													alt="user-4">
											</div>
											<div class="flex-grow-1 ms-10">
												<h4 class="fw-semibold fs-16 mb-0">
													Lucile Young</h4>
												<span class="text-gray-light">@lyoung4a</span>
											</div>
										</div>
									</td>
									<td><a
											href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection"
											class="__cf_email__"
											data-cfemail="365357455f5857445750574218515a53450f0e765c595f5a1855595b">[email&#160;protected]</a>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<i data-feather="edit-3"></i>
											<span>Editor</span>
										</div>
									</td>
									<td>
                      <span
						  class="badge bg-success bg-opacity-10 text-success py-2 px-3 fw-semibold">Active</span>
									</td>
								</tr>
								<tr>
									<td>
										<div class="d-flex align-items-center">
											<div class="flex-shrink-0">
												<img
													src="assets/images/user-5.jpg"
													class="rounded-circle wh-44"
													alt="user-5">
											</div>
											<div class="flex-grow-1 ms-10">
												<h4 class="fw-semibold fs-16 mb-0">
													Jordan
													Stevenson</h4>
												<span class="text-gray-light">@jstevenson5c</span>
											</div>
										</div>
									</td>
									<td><a
											href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection"
											class="__cf_email__"
											data-cfemail="05697c6a706b6231645a666a69696c6b76456f6a6c692b666a68">[email&#160;protected]</a>
									</td>
									<td>
										<div
											class="d-flex align-items-center admin">
											<i data-feather="monitor"></i>
											<span>Admin</span>
										</div>
									</td>
									<td>
                      <span
						  class="badge bg-danger bg-opacity-10 text-danger py-2 px-3 fw-semibold">Inactive</span>
									</td>
								</tr>
								<tr>
									<td>
										<div class="d-flex align-items-center">
											<div class="flex-shrink-0">
												<img
													src="assets/images/user-6.jpg"
													class="rounded-circle wh-44"
													alt="user-6">
											</div>
											<div class="flex-grow-1 ms-10">
												<h4 class="fw-semibold fs-16 mb-0">
													Francis Frank</h4>
												<span class="text-gray-light">@ffrank7e</span>
											</div>
										</div>
									</td>
									<td><a
											href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection"
											class="__cf_email__"
											data-cfemail="77110516191c40124e4f371d181e1b5914181a">[email&#160;protected]</a>
									</td>
									<td>
										<div
											class="d-flex align-items-center maintainer">
											<i data-feather="sliders"></i>
											<span>Maintainer</span>
										</div>
									</td>
									<td>
                      <span
						  class="badge bg-success bg-opacity-10 text-success py-2 px-3 fw-semibold">Active</span>
									</td>
								</tr>
								<tr>
									<td>
										<div class="d-flex align-items-center">
											<div class="flex-shrink-0">
												<img
													src="assets/images/user-7.jpg"
													class="rounded-circle wh-44"
													alt="user-7">
											</div>
											<div class="flex-grow-1 ms-10">
												<h4 class="fw-semibold fs-16 mb-0">
													Phoebe
													Patterson</h4>
												<span class="text-gray-light">@ppatterson2g</span>
											</div>
										</div>
									</td>
									<td><a
											href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection"
											class="__cf_email__"
											data-cfemail="630602100a0d0211020502174d040f06105a5b23090c0a0f4d000c0e">[email&#160;protected]</a>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<i data-feather="settings"></i>
											<span>Editor</span>
										</div>
									</td>
									<td>
                      <span
						  class="badge bg-success bg-opacity-10 text-success py-2 px-3 fw-semibold">Active</span>
									</td>
								</tr>
								</tbody>
							</table>
						</div>
						<div
							class="d-sm-flex justify-content-between align-items-center text-center">
                            <span
								class="fs-14">Showing 1 To 5 Of 20 Entries</span>
							<nav aria-label="Page navigation example">
								<ul
									class="pagination mb-0 mt-3 mt-sm-0 justify-content-center">
									<li class="page-item">
										<a class="page-link icon"
										   href="index.html"
										   aria-label="Previous">
											<i data-feather="arrow-left"></i>
										</a>
									</li>
									<li class="page-item"><a
											class="page-link active"
											href="index.html">1</a></li>
									<li class="page-item"><a class="page-link"
															 href="index.html">2</a>
									</li>
									<li class="page-item"><a class="page-link"
															 href="index.html">3</a>
									</li>
									<li class="page-item">
										<a class="page-link icon"
										   href="index.html"
										   aria-label="Next">
											<i data-feather="arrow-right"></i>
										</a>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xxl-4 col-xxxl-6">
			<div class="card bg-white border-0 rounded-10 mb-4">
				<div class="card-body p-4">
					<div
						class="d-flex justify-content-between align-items-center border-bottom pb-20 mb-20">
						<h4 class="fw-bold fs-18 mb-0">Best Selling
							Products</h4>
						<div class="dropdown action-opt">
							<button class="btn bg-transparent p-0" type="button"
									data-bs-toggle="dropdown"
									aria-expanded="false">
								<i data-feather="more-horizontal"></i>
							</button>
							<ul
								class="dropdown-menu dropdown-menu-end bg-white border box-shadow">
								<li>
									<a class="dropdown-item"
									   href="javascript:;">
										<i data-feather="clock"></i>
										Today
									</a>
								</li>
								<li>
									<a class="dropdown-item"
									   href="javascript:;">
										<i data-feather="pie-chart"></i>
										Last 7 Days
									</a>
								</li>
								<li>
									<a class="dropdown-item"
									   href="javascript:;">
										<i data-feather="rotate-cw"></i>
										Last Month
									</a>
								</li>
								<li>
									<a class="dropdown-item"
									   href="javascript:;">
										<i data-feather="calendar"></i>
										Last 1 Year
									</a>
								</li>
								<li>
									<a class="dropdown-item"
									   href="javascript:;">
										<i data-feather="bar-chart"></i>
										All Time
									</a>
								</li>
								<li>
									<a class="dropdown-item"
									   href="javascript:;">
										<i data-feather="eye"></i>
										View
									</a>
								</li>
								<li>
									<a class="dropdown-item"
									   href="javascript:;">
										<i data-feather="trash"></i>
										Delete
									</a>
								</li>
							</ul>
						</div>
					</div>
					<ul class="ps-0 mb-0 list-unstyled max-h-406"
						data-simplebar>
						<li class="border-bottom border-color-gray mb-3 pb-3">
							<div
								class="d-sm-flex justify-content-between align-content-center">
								<a href="product-details.html"
								   class="d-flex align-items-center text-decoration-none">
									<div class="flex-shrink-0">
										<img src="assets/images/product-6.jpg"
											 class="rounded-3 wh-54"
											 alt="product-6">
									</div>
									<div class="flex-grow-1 ms-10">
										<h4 class="fw-semibold fs-15 mb-0 text-body">
											Admas Airpod
											x-Zon</h4>
										<span class="text-primary fs-14">ID: A3652</span>
									</div>
								</a>
								<div
									class="d-flex align-items-center mt-2 mt-sm-0">
									<span>$289.50</span>
									<span class="ms-4">10 <span
											class="text-gray-light">(1000)</span></span>
									<span
										class=" fs-14 fw-semibold text-primary ms-4">Stock</span>
								</div>
							</div>
						</li>
						<li class="border-bottom border-color-gray mb-3 pb-3">
							<div
								class="d-sm-flex justify-content-between align-content-center">
								<a href="product-details.html"
								   class="d-flex align-items-center text-decoration-none">
									<div class="flex-shrink-0">
										<img src="assets/images/product-7.jpg"
											 class="rounded-3 wh-54"
											 alt="product-7">
									</div>
									<div class="flex-grow-1 ms-10">
										<h4 class="fw-semibold fs-15 mb-0 text-body">
											Smart Watch
											F8 Pro</h4>
										<span class="text-primary fs-14">ID: A3653</span>
									</div>
								</a>
								<div
									class="d-flex align-items-center mt-2 mt-sm-0">
									<span>$284.50</span>
									<span class="ms-4">545 <span
											class="text-gray-light">(600)</span></span>
									<span
										class=" fs-14 fw-semibold text-primary ms-4">Stock</span>
								</div>
							</div>
						</li>
						<li class="border-bottom border-color-gray mb-3 pb-3">
							<div
								class="d-sm-flex justify-content-between align-content-center">
								<a href="product-details.html"
								   class="d-flex align-items-center text-decoration-none">
									<div class="flex-shrink-0">
										<img src="assets/images/product-8.jpg"
											 class="rounded-3 wh-54"
											 alt="product-8">
									</div>
									<div class="flex-grow-1 ms-10">
										<h4 class="fw-semibold fs-15 mb-0 text-body">
											Nord Fold
											ZL</h4>
										<span class="text-primary fs-14">ID: A3658</span>
									</div>
								</a>
								<div
									class="d-flex align-items-center mt-2 mt-sm-0">
									<span>$283.50</span>
									<span class="ms-4">99 <span
											class="text-gray-light">(199)</span></span>
									<span
										class=" fs-14 fw-semibold text-primary ms-4">Stock</span>
								</div>
							</div>
						</li>
						<li class="border-bottom border-color-gray mb-3 pb-3">
							<div
								class="d-sm-flex justify-content-between align-content-center">
								<a href="product-details.html"
								   class="d-flex align-items-center text-decoration-none">
									<div class="flex-shrink-0">
										<img src="assets/images/product-9.jpg"
											 class="rounded-3 wh-54"
											 alt="product-9">
									</div>
									<div class="flex-grow-1 ms-10">
										<h4 class="fw-semibold fs-15 mb-0 text-body">
											Wall Clock
											Cimbina</h4>
										<span class="text-primary fs-14">ID: A3659</span>
									</div>
								</a>
								<div
									class="d-flex align-items-center mt-2 mt-sm-0">
									<span>$282.50</span>
									<span class="ms-4">300 <span
											class="text-gray-light">(321)</span></span>
									<span
										class=" fs-14 fw-semibold text-primary ms-4">Stock</span>
								</div>
							</div>
						</li>
						<li class="mb-1">
							<div
								class="d-sm-flex justify-content-between align-content-center">
								<a href="product-details.html"
								   class="d-flex align-items-center text-decoration-none">
									<div class="flex-shrink-0">
										<img src="assets/images/product-10.jpg"
											 class="rounded-3 wh-54"
											 alt="product-10">
									</div>
									<div class="flex-grow-1 ms-10">
										<h4 class="fw-semibold fs-15 mb-0 text-body">
											Galaxo T6
											Munsun</h4>
										<span class="text-primary fs-14">ID: A3656</span>
									</div>
								</a>
								<div
									class="d-flex align-items-center mt-2 mt-sm-0">
									<span>$281.50</span>
									<span class="ms-4">450 <span
											class="text-gray-light">(550)</span></span>
									<span
										class=" fs-14 fw-semibold text-primary ms-4">Stock</span>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
    console.log('Manager Dashboard init')
</script>
<?= $this->endSection() ?>

