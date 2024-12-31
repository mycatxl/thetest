<?php /*a:3:{s:42:"D:\phpEnv\www\cz_pay\view\admin\order.html";i:1728299869;s:50:"D:\phpEnv\www\cz_pay\view\layout\admin_header.html";i:1728299959;s:50:"D:\phpEnv\www\cz_pay\view\layout\admin_footer.html";i:1728115954;}*/ ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>订单列表 - 【<?php echo htmlentities((isset($config['name']) && ($config['name'] !== '')?$config['name']:'')); ?>】后台管理</title>
		<meta charset="utf-8" />
		<!--<meta name="viewport" content="width=device-width, initial-scale=1" />-->
		<meta name="viewport" content="width=1250">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<link href="/static/admin/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
		<link href="/static/admin/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
		<link href="/static/admin/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="/static/admin/css/style.bundle.css" rel="stylesheet" type="text/css" />
	</head>
	<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">
		<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
			<div class="app-page flex-column flex-column-fluid" id="kt_app_page">
				<div id="kt_app_header" class="app-header" data-kt-sticky="true" data-kt-sticky-activate="{default: true, lg: true}" data-kt-sticky-name="app-header-minimize" data-kt-sticky-offset="{default: '200px', lg: '0'}" data-kt-sticky-animation="false">
					<div class="app-container container-fluid d-flex align-items-stretch justify-content-between" id="kt_app_header_container">
						<div class="d-flex align-items-center d-lg-none ms-n3 me-1 me-md-2" title="Show sidebar menu">
							<div class="btn btn-icon btn-active-color-primary w-35px h-35px" id="kt_app_sidebar_mobile_toggle">
								<i class="ki-duotone ki-abstract-14 fs-2 fs-md-1">
									<span class="path1"></span>
									<span class="path2"></span>
								</i>
							</div>
						</div>
						<div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1" id="kt_app_header_wrapper">
							<div class="app-header-menu app-header-mobile-drawer align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="{default: 'append', lg: 'prepend'}" data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">
							</div>
							<div class="app-navbar flex-shrink-0">
								<div class="app-navbar-item ms-1 ms-md-4">
									<a href="#" class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px" data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
										<i class="ki-duotone ki-night-day theme-light-show fs-1">
											<span class="path1"></span>
											<span class="path2"></span>
											<span class="path3"></span>
											<span class="path4"></span>
											<span class="path5"></span>
											<span class="path6"></span>
											<span class="path7"></span>
											<span class="path8"></span>
											<span class="path9"></span>
											<span class="path10"></span>
										</i>
										<i class="ki-duotone ki-moon theme-dark-show fs-1">
											<span class="path1"></span>
											<span class="path2"></span>
										</i>
									</a>
									<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px" data-kt-menu="true" data-kt-element="theme-mode-menu">
										<div class="menu-item px-3 my-0">
											<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
												<span class="menu-icon" data-kt-element="icon">
													<i class="ki-duotone ki-night-day fs-2">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
														<span class="path4"></span>
														<span class="path5"></span>
														<span class="path6"></span>
														<span class="path7"></span>
														<span class="path8"></span>
														<span class="path9"></span>
														<span class="path10"></span>
													</i>
												</span>
												<span class="menu-title">Light</span>
											</a>
										</div>
										<div class="menu-item px-3 my-0">
											<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
												<span class="menu-icon" data-kt-element="icon">
													<i class="ki-duotone ki-moon fs-2">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</span>
												<span class="menu-title">Dark</span>
											</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3 my-0">
											<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
												<span class="menu-icon" data-kt-element="icon">
													<i class="ki-duotone ki-screen fs-2">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
														<span class="path4"></span>
													</i>
												</span>
												<span class="menu-title">System</span>
											</a>
										</div>
										<!--end::Menu item-->
									</div>
									<!--end::Menu-->
								</div>
								<div class="app-navbar-item ms-1 ms-md-4" id="kt_header_user_menu_toggle">
									<div class="cursor-pointer symbol symbol-35px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
										<img src="<?php echo htmlentities((isset($admin_info['avatar']) && ($admin_info['avatar'] !== '')?$admin_info['avatar']:'/static/admin/media/avatars/blank.png')); ?>" class="rounded-3" alt="user" />
									</div>
									<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-125px" data-kt-menu="true">
										<div class="menu-item px-5 my-1">
											<a href="<?php echo getConfig('backstage_entrance'); ?>/account" class="menu-link px-5">信息修改</a>
										</div>
										<div class="menu-item px-5">
											<a href="<?php echo getConfig('backstage_entrance'); ?>/logout" class="menu-link px-5">退出登录</a>
										</div>
									</div>
								</div>
								<div class="app-navbar-item d-lg-none ms-2 me-n2" title="Show header menu">
									<div class="btn btn-flex btn-icon btn-active-color-primary w-30px h-30px" id="kt_app_header_menu_toggle">
										<i class="ki-duotone ki-element-4 fs-1">
											<span class="path1"></span>
											<span class="path2"></span>
										</i>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
					<div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
						<div class="app-sidebar-logo px-6 ms-10" id="kt_app_sidebar_logo">
							<p style="color: #fff; font-size: 24px;">后台管理系统</p>
						</div>
						<div class="app-sidebar-menu overflow-hidden flex-column-fluid">
							<div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper">
								<div id="kt_app_sidebar_menu_scroll" class="scroll-y my-5 mx-3" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer" data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true">
									<div class="menu menu-column menu-rounded menu-sub-indention fw-semibold fs-6" id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">
										<div class="menu-item">
											<a class="menu-link <?php if('订单列表'=='首页概况总览'){echo 'active';}?>" href="<?php echo getConfig('backstage_entrance'); ?>">
												<span class="menu-icon">
													<span class="svg-icon svg-icon-2">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10ZM6.39999 9.89999C6.99999 8.19999 8.40001 6.9 10.1 6.4C10.6 6.2 10.9 5.7 10.7 5.1C10.5 4.6 9.99999 4.3 9.39999 4.5C7.09999 5.3 5.29999 7 4.39999 9.2C4.19999 9.7 4.5 10.3 5 10.5C5.1 10.5 5.19999 10.6 5.39999 10.6C5.89999 10.5 6.19999 10.2 6.39999 9.89999ZM14.8 19.5C17 18.7 18.8 16.9 19.6 14.7C19.8 14.2 19.5 13.6 19 13.4C18.5 13.2 17.9 13.5 17.7 14C17.1 15.7 15.8 17 14.1 17.6C13.6 17.8 13.3 18.4 13.5 18.9C13.6 19.3 14 19.6 14.4 19.6C14.5 19.6 14.6 19.6 14.8 19.5Z" fill="currentColor"></path>
															<path d="M16 12C16 14.2 14.2 16 12 16C9.8 16 8 14.2 8 12C8 9.8 9.8 8 12 8C14.2 8 16 9.8 16 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10Z" fill="currentColor"></path>
														</svg>
													</span>
												</span>
												<span class="menu-title">首页概况总览</span>
											</a>
										</div>
										<div class="menu-item pt-5">
											<div class="menu-content">
												<span class="menu-heading fw-bold text-uppercase fs-7">用户管理</span>
											</div>
										</div>
										<div class="menu-item">
											<a class="menu-link <?php if('订单列表'=='用户列表'){echo 'active';}?>" href="<?php echo getConfig('backstage_entrance'); ?>/user">
												<span class="menu-icon">
													<span class="svg-icon svg-icon-2">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10ZM6.39999 9.89999C6.99999 8.19999 8.40001 6.9 10.1 6.4C10.6 6.2 10.9 5.7 10.7 5.1C10.5 4.6 9.99999 4.3 9.39999 4.5C7.09999 5.3 5.29999 7 4.39999 9.2C4.19999 9.7 4.5 10.3 5 10.5C5.1 10.5 5.19999 10.6 5.39999 10.6C5.89999 10.5 6.19999 10.2 6.39999 9.89999ZM14.8 19.5C17 18.7 18.8 16.9 19.6 14.7C19.8 14.2 19.5 13.6 19 13.4C18.5 13.2 17.9 13.5 17.7 14C17.1 15.7 15.8 17 14.1 17.6C13.6 17.8 13.3 18.4 13.5 18.9C13.6 19.3 14 19.6 14.4 19.6C14.5 19.6 14.6 19.6 14.8 19.5Z" fill="currentColor"></path>
															<path d="M16 12C16 14.2 14.2 16 12 16C9.8 16 8 14.2 8 12C8 9.8 9.8 8 12 8C14.2 8 16 9.8 16 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10Z" fill="currentColor"></path>
														</svg>
													</span>
												</span>
												<span class="menu-title">用户列表</span>
											</a>
										</div>
										<div class="menu-item pt-5">
											<div class="menu-content">
												<span class="menu-heading fw-bold text-uppercase fs-7">产品管理</span>
											</div>
										</div>
										<div class="menu-item">
											<a class="menu-link <?php if('订单列表'=='充值业务 - 产品列表'){echo 'active';}?>" href="<?php echo getConfig('backstage_entrance'); ?>/product_cz">
												<span class="menu-icon">
													<span class="svg-icon svg-icon-2">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10ZM6.39999 9.89999C6.99999 8.19999 8.40001 6.9 10.1 6.4C10.6 6.2 10.9 5.7 10.7 5.1C10.5 4.6 9.99999 4.3 9.39999 4.5C7.09999 5.3 5.29999 7 4.39999 9.2C4.19999 9.7 4.5 10.3 5 10.5C5.1 10.5 5.19999 10.6 5.39999 10.6C5.89999 10.5 6.19999 10.2 6.39999 9.89999ZM14.8 19.5C17 18.7 18.8 16.9 19.6 14.7C19.8 14.2 19.5 13.6 19 13.4C18.5 13.2 17.9 13.5 17.7 14C17.1 15.7 15.8 17 14.1 17.6C13.6 17.8 13.3 18.4 13.5 18.9C13.6 19.3 14 19.6 14.4 19.6C14.5 19.6 14.6 19.6 14.8 19.5Z" fill="currentColor"></path>
															<path d="M16 12C16 14.2 14.2 16 12 16C9.8 16 8 14.2 8 12C8 9.8 9.8 8 12 8C14.2 8 16 9.8 16 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10Z" fill="currentColor"></path>
														</svg>
													</span>
												</span>
												<span class="menu-title">充值业务 - 产品列表</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link <?php if('订单列表'=='查询业务 - 产品列表'){echo 'active';}?>" href="<?php echo getConfig('backstage_entrance'); ?>/product_cx">
												<span class="menu-icon">
													<span class="svg-icon svg-icon-2">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10ZM6.39999 9.89999C6.99999 8.19999 8.40001 6.9 10.1 6.4C10.6 6.2 10.9 5.7 10.7 5.1C10.5 4.6 9.99999 4.3 9.39999 4.5C7.09999 5.3 5.29999 7 4.39999 9.2C4.19999 9.7 4.5 10.3 5 10.5C5.1 10.5 5.19999 10.6 5.39999 10.6C5.89999 10.5 6.19999 10.2 6.39999 9.89999ZM14.8 19.5C17 18.7 18.8 16.9 19.6 14.7C19.8 14.2 19.5 13.6 19 13.4C18.5 13.2 17.9 13.5 17.7 14C17.1 15.7 15.8 17 14.1 17.6C13.6 17.8 13.3 18.4 13.5 18.9C13.6 19.3 14 19.6 14.4 19.6C14.5 19.6 14.6 19.6 14.8 19.5Z" fill="currentColor"></path>
															<path d="M16 12C16 14.2 14.2 16 12 16C9.8 16 8 14.2 8 12C8 9.8 9.8 8 12 8C14.2 8 16 9.8 16 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10Z" fill="currentColor"></path>
														</svg>
													</span>
												</span>
												<span class="menu-title">查询业务 - 产品列表</span>
											</a>
										</div>
										<div class="menu-item pt-5">
											<div class="menu-content">
												<span class="menu-heading fw-bold text-uppercase fs-7">订单管理</span>
											</div>
										</div>
										<div class="menu-item">
											<a class="menu-link <?php if('订单列表'=='订单列表'){echo 'active';}?>" href="<?php echo getConfig('backstage_entrance'); ?>/order">
												<span class="menu-icon">
													<span class="svg-icon svg-icon-2">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10ZM6.39999 9.89999C6.99999 8.19999 8.40001 6.9 10.1 6.4C10.6 6.2 10.9 5.7 10.7 5.1C10.5 4.6 9.99999 4.3 9.39999 4.5C7.09999 5.3 5.29999 7 4.39999 9.2C4.19999 9.7 4.5 10.3 5 10.5C5.1 10.5 5.19999 10.6 5.39999 10.6C5.89999 10.5 6.19999 10.2 6.39999 9.89999ZM14.8 19.5C17 18.7 18.8 16.9 19.6 14.7C19.8 14.2 19.5 13.6 19 13.4C18.5 13.2 17.9 13.5 17.7 14C17.1 15.7 15.8 17 14.1 17.6C13.6 17.8 13.3 18.4 13.5 18.9C13.6 19.3 14 19.6 14.4 19.6C14.5 19.6 14.6 19.6 14.8 19.5Z" fill="currentColor"></path>
															<path d="M16 12C16 14.2 14.2 16 12 16C9.8 16 8 14.2 8 12C8 9.8 9.8 8 12 8C14.2 8 16 9.8 16 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10Z" fill="currentColor"></path>
														</svg>
													</span>
												</span>
												<span class="menu-title">充值业务 - 订单列表</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link <?php if('订单列表'=='订单列表'){echo 'active';}?>" href="<?php echo getConfig('backstage_entrance'); ?>/order">
												<span class="menu-icon">
													<span class="svg-icon svg-icon-2">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10ZM6.39999 9.89999C6.99999 8.19999 8.40001 6.9 10.1 6.4C10.6 6.2 10.9 5.7 10.7 5.1C10.5 4.6 9.99999 4.3 9.39999 4.5C7.09999 5.3 5.29999 7 4.39999 9.2C4.19999 9.7 4.5 10.3 5 10.5C5.1 10.5 5.19999 10.6 5.39999 10.6C5.89999 10.5 6.19999 10.2 6.39999 9.89999ZM14.8 19.5C17 18.7 18.8 16.9 19.6 14.7C19.8 14.2 19.5 13.6 19 13.4C18.5 13.2 17.9 13.5 17.7 14C17.1 15.7 15.8 17 14.1 17.6C13.6 17.8 13.3 18.4 13.5 18.9C13.6 19.3 14 19.6 14.4 19.6C14.5 19.6 14.6 19.6 14.8 19.5Z" fill="currentColor"></path>
															<path d="M16 12C16 14.2 14.2 16 12 16C9.8 16 8 14.2 8 12C8 9.8 9.8 8 12 8C14.2 8 16 9.8 16 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10Z" fill="currentColor"></path>
														</svg>
													</span>
												</span>
												<span class="menu-title">查询业务 - 订单列表</span>
											</a>
										</div>
										<div class="menu-item pt-5">
											<div class="menu-content">
												<span class="menu-heading fw-bold text-uppercase fs-7">财务管理</span>
											</div>
										</div>
										<div class="menu-item">
											<a class="menu-link <?php if('订单列表'=='充值订单记录'){echo 'active';}?>" href="<?php echo getConfig('backstage_entrance'); ?>/recharge">
												<span class="menu-icon">
													<span class="svg-icon svg-icon-2">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10ZM6.39999 9.89999C6.99999 8.19999 8.40001 6.9 10.1 6.4C10.6 6.2 10.9 5.7 10.7 5.1C10.5 4.6 9.99999 4.3 9.39999 4.5C7.09999 5.3 5.29999 7 4.39999 9.2C4.19999 9.7 4.5 10.3 5 10.5C5.1 10.5 5.19999 10.6 5.39999 10.6C5.89999 10.5 6.19999 10.2 6.39999 9.89999ZM14.8 19.5C17 18.7 18.8 16.9 19.6 14.7C19.8 14.2 19.5 13.6 19 13.4C18.5 13.2 17.9 13.5 17.7 14C17.1 15.7 15.8 17 14.1 17.6C13.6 17.8 13.3 18.4 13.5 18.9C13.6 19.3 14 19.6 14.4 19.6C14.5 19.6 14.6 19.6 14.8 19.5Z" fill="currentColor"></path>
															<path d="M16 12C16 14.2 14.2 16 12 16C9.8 16 8 14.2 8 12C8 9.8 9.8 8 12 8C14.2 8 16 9.8 16 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10Z" fill="currentColor"></path>
														</svg>
													</span>
												</span>
												<span class="menu-title">充值订单记录</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link <?php if('订单列表'=='提现订单记录'){echo 'active';}?>" href="<?php echo getConfig('backstage_entrance'); ?>/withdrawal">
												<span class="menu-icon">
													<span class="svg-icon svg-icon-2">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10ZM6.39999 9.89999C6.99999 8.19999 8.40001 6.9 10.1 6.4C10.6 6.2 10.9 5.7 10.7 5.1C10.5 4.6 9.99999 4.3 9.39999 4.5C7.09999 5.3 5.29999 7 4.39999 9.2C4.19999 9.7 4.5 10.3 5 10.5C5.1 10.5 5.19999 10.6 5.39999 10.6C5.89999 10.5 6.19999 10.2 6.39999 9.89999ZM14.8 19.5C17 18.7 18.8 16.9 19.6 14.7C19.8 14.2 19.5 13.6 19 13.4C18.5 13.2 17.9 13.5 17.7 14C17.1 15.7 15.8 17 14.1 17.6C13.6 17.8 13.3 18.4 13.5 18.9C13.6 19.3 14 19.6 14.4 19.6C14.5 19.6 14.6 19.6 14.8 19.5Z" fill="currentColor"></path>
															<path d="M16 12C16 14.2 14.2 16 12 16C9.8 16 8 14.2 8 12C8 9.8 9.8 8 12 8C14.2 8 16 9.8 16 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10Z" fill="currentColor"></path>
														</svg>
													</span>
												</span>
												<span class="menu-title">提现订单记录</span>
											</a>
										</div>
										<div class="menu-item pt-5">
											<div class="menu-content">
												<span class="menu-heading fw-bold text-uppercase fs-7">其他配置</span>
											</div>
										</div>
										<div class="menu-item">
											<a class="menu-link <?php if('订单列表'=='首页轮播图'){echo 'active';}?>" href="<?php echo getConfig('backstage_entrance'); ?>/slide">
												<span class="menu-icon">
													<span class="svg-icon svg-icon-2">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10ZM6.39999 9.89999C6.99999 8.19999 8.40001 6.9 10.1 6.4C10.6 6.2 10.9 5.7 10.7 5.1C10.5 4.6 9.99999 4.3 9.39999 4.5C7.09999 5.3 5.29999 7 4.39999 9.2C4.19999 9.7 4.5 10.3 5 10.5C5.1 10.5 5.19999 10.6 5.39999 10.6C5.89999 10.5 6.19999 10.2 6.39999 9.89999ZM14.8 19.5C17 18.7 18.8 16.9 19.6 14.7C19.8 14.2 19.5 13.6 19 13.4C18.5 13.2 17.9 13.5 17.7 14C17.1 15.7 15.8 17 14.1 17.6C13.6 17.8 13.3 18.4 13.5 18.9C13.6 19.3 14 19.6 14.4 19.6C14.5 19.6 14.6 19.6 14.8 19.5Z" fill="currentColor"></path>
															<path d="M16 12C16 14.2 14.2 16 12 16C9.8 16 8 14.2 8 12C8 9.8 9.8 8 12 8C14.2 8 16 9.8 16 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10Z" fill="currentColor"></path>
														</svg>
													</span>
												</span>
												<span class="menu-title">首页轮播图</span>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="app-sidebar-footer flex-column-auto pt-2 pb-6 px-6" id="kt_app_sidebar_footer">
							<a href="<?php echo getConfig('backstage_entrance'); ?>/setting" class="btn btn-flex flex-center btn-custom btn-primary overflow-hidden text-nowrap px-0 h-40px w-100">
								<span class="btn-label">系统设置管理</span>
								<i class="ki-duotone ki-document btn-icon fs-2 m-0">
									<span class="path1"></span>
									<span class="path2"></span>
								</i>
							</a>
						</div>
					</div>
                    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                        <div class="d-flex flex-column flex-column-fluid">
                            <div id="kt_app_content" class="app-content flex-column-fluid py-3 py-lg-6">
<div id="kt_content_container" class="app-container container-fluid">
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                <div class="d-flex align-items-center position-relative my-1 me-3">
                    <span class="svg-icon svg-icon-1 position-absolute ms-4">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                            <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
                        </svg>
                    </span>
                    <input type="text" data-kt="search" class="form-control form-control-solid w-250px ps-15 search" placeholder="模糊搜索 - 请输入内容"/>
                </div>
            </div>
        </div>
        <div class="card-body pb-5">
            <table id="kt_datatable_example_1" class="table align-middle table-row-dashed fs-6 gy-5">
                <thead>
                    <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                        <th class="min-w-25px">ID</th>
                        <th class="min-w-100px">归属用户</th>
                        <th class="min-w-100px">订单编号</th>
                        <th class="min-w-150px">业务信息</th>
                        <th class="min-w-225px">下单信息</th>
                        <th class="min-w-100px">充值金额</th>
                        <th class="min-w-100px">折扣金额</th>
                        <th class="min-w-100px">折扣比例</th>
                        <th class="min-w-100px">当前费率</th>
                        <th class="min-w-100px">支付金额</th>
                        <th class="min-w-100px">订单状态</th>
                        <th class="min-w-100px">确认状态</th>
                        <th class="min-w-175px">创建时间</th>
                        <th class="min-w-125px">操作</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 fw-semibold">
                </tbody>
            </table>
        </div>
    </div>
</div>

                            </div>
                        </div>
                        <div id="kt_app_footer" class="app-footer">
                            <div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
                                <div class="text-gray-900 order-2 order-md-1">
                                    <span class="text-muted fw-semibold me-1">2024&copy;</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
		</div>

		<script src="/static/admin/plugins/global/plugins.bundle.js"></script>
		<script src="/static/admin/js/scripts.bundle.js"></script>
		<script src="/static/admin/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
		<script src="/static/admin/plugins/custom/datatables/datatables.bundle.js"></script>
		<script src="/static/admin/js/widgets.bundle.js"></script>
		<script src="/static/admin/js/custom/widgets.js"></script>
		<script src="/static/admin/js/custom/apps/chat/chat.js"></script>
		<script src="/static/admin/js/custom/utilities/modals/users-search.js"></script>

	</body>
</html>
<script src="/static/admin/js/highlight.min.js"></script>
<script src="/static/admin/js/quill.min.js"></script>
<script type="text/javascript">
    var KTDatatablesServerSide = function () {
        var table;
        var dt;
        var filterPayment;
        var initDatatable = function () {
            dt = $("#kt_datatable_example_1").DataTable({
                searchDelay: 500,
                processing: true,
                serverSide: true,
                order: [[12, 'desc']],
                stateSave: true,
                ajax: {
                    url: "<?php echo getConfig('backstage_entrance'); ?>/order_list",
                },
                columns: [
                    { data: 'id' },
                    { data: null },
                    { data: 'order_number' },
                    { data: null },
                    { data: 'order_info' },
                    { data: 'amount_money' },
                    { data: 'discount_amount' },
                    { data: 'discount' },
                    { data: 'rate' },
                    { data: 'cny_amount' },
                    { data: null },
                    { data: null },
                    { data: 'create_time' },
                    { data: null },
                ],
                columnDefs: [
                    {
                        targets: 0,
                        orderable: false,
                    },
                    {
                        targets: 1,
                        orderable: false,
                        render: function (data, type, row) {
                            return `
                            <div class="symbol symbol-50px">
                                <img src="${row.user_info.avatar}" alt="">
							</div><br>
                            ${row.user_info.mobile}`;
                        },
                    },
                    {
                        targets: 2,
                        orderable: false,
                    },
                    {
                        targets: 3,
                        orderable: false,
                        render: function (data, type, row) {
                            return `
                            <div class="d-flex align-items-center mb-7">
                                <div class="symbol symbol-50px me-5">
                                    <div class="symbol symbol-40px">
                                        <img src="${row.product_info.image}" alt="">
                                    </div>
                                </div>
                                <div class="d-flex flex-column">
                                    <a href="#" class="text-gray-900 text-hover-primary fs-6 fw-bold">${row.product_info.name}</a>
                                    <span class="text-muted fw-bold">充值业务</span>
                                </div>
                            </div>`;
                        },
                    },
                    {
                        targets: 4,
                        orderable: false,
                    },
                    {
                        targets: 5,
                        orderable: false,
                        render: function (amount_money) {
                            return `${amount_money} 元`;
                        },
                    },
                    {
                        targets: 6,
                        orderable: false,
                        render: function (discount_amount) {
                            return `${discount_amount} 元`;
                        },
                    },
                    {
                        targets: 7,
                        orderable: false,
                        render: function (discount) {
                            if(discount){
                                return `${discount} 折`;
                            }else{
                                return `无折扣`;
                            }
                        },
                    },
                    {
                        targets: 8,
                        orderable: false,
                    },
                    {
                        targets: 9,
                        orderable: false,
                        render: function (cny_amount) {
                            return `$ ${cny_amount} USDT`;
                        },
                    },
                    {
                        targets: 10,
                        orderable: false,
                        render: function (data, type, row) {
                            if(row.status == 0){
                                return `<span class="badge badge-outline badge-primary">待充值</span>`;
                            }else if(row.status == 1){
                                return `<span class="badge badge-outline badge-warning">充值中</span>`;

                            }else if(row.status == 2){
                                return `<span class="badge badge-outline badge-success">已完成</span>`;

                            }else if(row.status == 3){
                                return `<span class="badge badge-outline badge-danger">已取消</span>`;

                            }
                        },
                    },
                    {
                        targets: 11,
                        orderable: false,
                        render: function (data, type, row) {
                            if(row.confirm_status == 0){
                                return `<span class="badge badge-outline badge-dark">未完成</span>`;
                            }else if(row.confirm_status == 1){
                                return `<span class="badge badge-outline badge-warning">待确认</span>`;
                            }else if(row.confirm_status == 2){
                                return `<span class="badge badge-outline badge-success">已确认</span>`;
                            }else if(row.confirm_status == 3){
                                return `<span class="badge badge-outline badge-danger">未收到</span>`;

                            }
                        },
                    },
                    {
                        targets: -1,
                        orderable: false,
                        className: 'text-end',
                        render: function (data, type, row) {
                            var status = '';
                            if(row.status == 0){
                                var status = `
                                    <a class="menu-link" onclick="audit(1, ${row.id})">充值中</a>
                                    <a class="menu-link" onclick="audit(2, ${row.id})">已完成</a>
                                    <a class="menu-link" onclick="audit(3, ${row.id})">已取消</a>`;
                            }
                            if(row.status == 1){
                                var status = `
                                    <a class="menu-link" onclick="audit(2, ${row.id})">已完成</a>
                                    <a class="menu-link" onclick="audit(3, ${row.id})">已取消</a>`;
                            }
                            return `
                            <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">更多操作
                                <span class="svg-icon svg-icon-5 m-0">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor"></path>
                                    </svg>
                                </span>
                            </a>
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-100px py-4" data-kt-menu="true">
                                <div class="menu-item px-3">
                                    ${status}
                                    <a class="menu-link" onclick="del(${row.id})">删除数据</a>
                                </div>
                            </div>`;
                        },
                    }
                ],
            });
            table = dt.$;
            dt.on('draw', function () {
                KTMenu.createInstances();
            });
        }
        
        var search = function () {
            const filterSearch = document.querySelector('[data-kt="search"]');
            filterSearch.addEventListener('keyup', function (e) {
                dt.search(e.target.value).draw();
            });
        }
        return {
            init: function (id) {
                initDatatable();
                search();
            }
        }
    }();
    KTUtil.onDOMContentLoaded(function () {
        KTDatatablesServerSide.init();
    });
    
    function audit(status, id) {
        Swal.fire({
            html: '<h2>是否确认审核？</h2>',
            showDenyButton: true,
            reverseButtons: true,
            denyButtonText: '取消',
            confirmButtonText: '确定',
            customClass: {
                denyButton: "btn btn-danger me-6",
                confirmButton: 'btn btn-primary'
            }
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "<?php echo getConfig('backstage_entrance'); ?>/order_post/audit",
                    method: 'POST',
                    data: {
                        status: status,
                        id: id,
                    },
                    dataType: 'json',
                    success: function(res) {
                        if (res.code === 200) {
                            toastr.success(
                                res.message,
                                {closeButton :!0, timeOut : "3000"}
                            );
                            setTimeout(function (){
                                window.location.reload();
                            },1500);
                        } else {
                            toastr.error(
                                res.message,
                                {closeButton :!0, timeOut : "3000"}
                            );
                        }
                    }
                });
            }
        })
    }
    
    
    function del(id) {
        Swal.fire({
            html: '<h2>是否确认删除？</h2>',
            showDenyButton: true,
            reverseButtons: true,
            denyButtonText: '取消',
            confirmButtonText: '确定',
            customClass: {
                denyButton: "btn btn-danger me-6",
                confirmButton: 'btn btn-primary'
            }
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "<?php echo getConfig('backstage_entrance'); ?>/withdrawal_post/del",
                    method: 'POST',
                    data: {
                        id: id,
                    },
                    success: function(res) {
                        if (res.code === 200) {
                            toastr.success(
                                res.message,
                                {closeButton :!0, timeOut : "3000"}
                            );
                            
                            setTimeout(function() {
                                window.location.reload();
                            }, 1500);
                        } else {
                            swal.fire({
                                icon: 'warning',
                                title: res.message
                            });
                        }
                    }
                });
            }
        })
    }
    
    
</script>