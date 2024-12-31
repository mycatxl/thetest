<?php /*a:3:{s:47:"D:\phpEnv\www\cz_pay\view\admin\product_cx.html";i:1728717030;s:50:"D:\phpEnv\www\cz_pay\view\layout\admin_header.html";i:1728714339;s:50:"D:\phpEnv\www\cz_pay\view\layout\admin_footer.html";i:1728804732;}*/ ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>查询业务 - 产品列表 - 【<?php echo htmlentities((isset($config['name']) && ($config['name'] !== '')?$config['name']:'')); ?>】后台管理</title>
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
								<div class="app-navbar-item ms-1 ms-lg-3">
									<a class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px w-md-40px h-md-40px" onclick="refreshPage()">
										<span class="svg-icon svg-icon-2">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M14.5 20.7259C14.6 21.2259 14.2 21.826 13.7 21.926C13.2 22.026 12.6 22.0259 12.1 22.0259C9.5 22.0259 6.9 21.0259 5 19.1259C1.4 15.5259 1.09998 9.72592 4.29998 5.82592L5.70001 7.22595C3.30001 10.3259 3.59999 14.8259 6.39999 17.7259C8.19999 19.5259 10.8 20.426 13.4 19.926C13.9 19.826 14.4 20.2259 14.5 20.7259ZM18.4 16.8259L19.8 18.2259C22.9 14.3259 22.7 8.52593 19 4.92593C16.7 2.62593 13.5 1.62594 10.3 2.12594C9.79998 2.22594 9.4 2.72595 9.5 3.22595C9.6 3.72595 10.1 4.12594 10.6 4.02594C13.1 3.62594 15.7 4.42595 17.6 6.22595C20.5 9.22595 20.7 13.7259 18.4 16.8259Z" fill="currentColor"></path>
												<path opacity="0.3" d="M2 3.62592H7C7.6 3.62592 8 4.02592 8 4.62592V9.62589L2 3.62592ZM16 14.4259V19.4259C16 20.0259 16.4 20.4259 17 20.4259H22L16 14.4259Z" fill="currentColor"></path>
											</svg>
										</span>
									</a>
								</div>
								
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
											<a class="menu-link <?php if('查询业务 - 产品列表'=='首页概况总览'){echo 'active';}?>" href="<?php echo getConfig('backstage_entrance'); ?>">
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
										<?php if(power($admin_info['power'],'用户管理') == 1 || power($admin_info['power'],'支付管理') == 1): ?>
										<div class="menu-item pt-5">
											<div class="menu-content">
												<span class="menu-heading fw-bold text-uppercase fs-7">用户管理</span>
											</div>
										</div>
										<?php endif; if(power($admin_info['power'],'用户列表') == 1): ?>
										<div class="menu-item">
											<a class="menu-link <?php if('查询业务 - 产品列表'=='用户列表'){echo 'active';}?>" href="<?php echo getConfig('backstage_entrance'); ?>/user">
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
										<?php endif; if(power($admin_info['power'],'支付管理') == 1): ?>
										<div class="menu-item">
											<a class="menu-link <?php if('查询业务 - 产品列表'=='支付管理'){echo 'active';}?>" href="<?php echo getConfig('backstage_entrance'); ?>/bank_card">
												<span class="menu-icon">
													<span class="svg-icon svg-icon-2">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10ZM6.39999 9.89999C6.99999 8.19999 8.40001 6.9 10.1 6.4C10.6 6.2 10.9 5.7 10.7 5.1C10.5 4.6 9.99999 4.3 9.39999 4.5C7.09999 5.3 5.29999 7 4.39999 9.2C4.19999 9.7 4.5 10.3 5 10.5C5.1 10.5 5.19999 10.6 5.39999 10.6C5.89999 10.5 6.19999 10.2 6.39999 9.89999ZM14.8 19.5C17 18.7 18.8 16.9 19.6 14.7C19.8 14.2 19.5 13.6 19 13.4C18.5 13.2 17.9 13.5 17.7 14C17.1 15.7 15.8 17 14.1 17.6C13.6 17.8 13.3 18.4 13.5 18.9C13.6 19.3 14 19.6 14.4 19.6C14.5 19.6 14.6 19.6 14.8 19.5Z" fill="currentColor"></path>
															<path d="M16 12C16 14.2 14.2 16 12 16C9.8 16 8 14.2 8 12C8 9.8 9.8 8 12 8C14.2 8 16 9.8 16 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10Z" fill="currentColor"></path>
														</svg>
													</span>
												</span>
												<span class="menu-title">支付管理</span>
											</a>
										</div>
										<?php endif; if(power($admin_info['power'],'充值业务 - 产品列表') == 1 || power($admin_info['power'],'查询业务 - 产品列表') == 1): ?>
										<div class="menu-item pt-5">
											<div class="menu-content">
												<span class="menu-heading fw-bold text-uppercase fs-7">产品管理</span>
											</div>
										</div>
										<?php endif; if(power($admin_info['power'],'充值业务 - 产品列表') == 1): ?>
										<div class="menu-item">
											<a class="menu-link <?php if('查询业务 - 产品列表'=='充值业务 - 产品列表'){echo 'active';}?>" href="<?php echo getConfig('backstage_entrance'); ?>/product_cz">
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
										<?php endif; if(power($admin_info['power'],'查询业务 - 产品列表') == 1): ?>
										<div class="menu-item">
											<a class="menu-link <?php if('查询业务 - 产品列表'=='查询业务 - 产品列表'){echo 'active';}?>" href="<?php echo getConfig('backstage_entrance'); ?>/product_cx">
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
										<?php endif; if(power($admin_info['power'],'充值业务 - 订单列表') == 1 || power($admin_info['power'],'查询业务 - 订单列表') == 1): ?>
										<div class="menu-item pt-5">
											<div class="menu-content">
												<span class="menu-heading fw-bold text-uppercase fs-7">订单管理</span>
											</div>
										</div>
										<?php endif; if(power($admin_info['power'],'充值业务 - 订单列表') == 1): ?>
										<div class="menu-item">
											<a class="menu-link <?php if('查询业务 - 产品列表'=='充值业务 - 订单列表'){echo 'active';}?>" href="<?php echo getConfig('backstage_entrance'); ?>/order_cz">
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
										<?php endif; if(power($admin_info['power'],'查询业务 - 订单列表') == 1): ?>
										<div class="menu-item">
											<a class="menu-link <?php if('查询业务 - 产品列表'=='查询业务 - 订单列表'){echo 'active';}?>" href="<?php echo getConfig('backstage_entrance'); ?>/order_cx">
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
										<?php endif; if(power($admin_info['power'],'充值订单记录') == 1  || power($admin_info['power'],'提现订单记录') == 1 || power($admin_info['power'],'返佣记录') == 1): ?>
										<div class="menu-item pt-5">
											<div class="menu-content">
												<span class="menu-heading fw-bold text-uppercase fs-7">财务管理</span>
											</div>
										</div>
										<?php endif; if(power($admin_info['power'],'充值订单记录') == 1): ?>
										<div class="menu-item">
											<a class="menu-link <?php if('查询业务 - 产品列表'=='充值订单记录'){echo 'active';}?>" href="<?php echo getConfig('backstage_entrance'); ?>/recharge">
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
										<?php endif; if(power($admin_info['power'],'提现订单记录') == 1): ?>
										<div class="menu-item">
											<a class="menu-link <?php if('查询业务 - 产品列表'=='提现订单记录'){echo 'active';}?>" href="<?php echo getConfig('backstage_entrance'); ?>/withdrawal">
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
										<?php endif; if(power($admin_info['power'],'返佣记录') == 1): ?>
										<div class="menu-item">
											<a class="menu-link <?php if('查询业务 - 产品列表'=='返佣记录'){echo 'active';}?>" href="<?php echo getConfig('backstage_entrance'); ?>/rebate_record">
												<span class="menu-icon">
													<span class="svg-icon svg-icon-2">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10ZM6.39999 9.89999C6.99999 8.19999 8.40001 6.9 10.1 6.4C10.6 6.2 10.9 5.7 10.7 5.1C10.5 4.6 9.99999 4.3 9.39999 4.5C7.09999 5.3 5.29999 7 4.39999 9.2C4.19999 9.7 4.5 10.3 5 10.5C5.1 10.5 5.19999 10.6 5.39999 10.6C5.89999 10.5 6.19999 10.2 6.39999 9.89999ZM14.8 19.5C17 18.7 18.8 16.9 19.6 14.7C19.8 14.2 19.5 13.6 19 13.4C18.5 13.2 17.9 13.5 17.7 14C17.1 15.7 15.8 17 14.1 17.6C13.6 17.8 13.3 18.4 13.5 18.9C13.6 19.3 14 19.6 14.4 19.6C14.5 19.6 14.6 19.6 14.8 19.5Z" fill="currentColor"></path>
															<path d="M16 12C16 14.2 14.2 16 12 16C9.8 16 8 14.2 8 12C8 9.8 9.8 8 12 8C14.2 8 16 9.8 16 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10Z" fill="currentColor"></path>
														</svg>
													</span>
												</span>
												<span class="menu-title">返佣记录</span>
											</a>
										</div>
										<?php endif; if(power($admin_info['power'],'交易挂单数据') == 1 || power($admin_info['power'],'交易订单数据') == 1): ?>
										<div class="menu-item pt-5">
											<div class="menu-content">
												<span class="menu-heading fw-bold text-uppercase fs-7">交易管理</span>
											</div>
										</div>
										<?php endif; if(power($admin_info['power'],'交易挂单数据') == 1): ?>
										<div class="menu-item">
											<a class="menu-link <?php if('查询业务 - 产品列表'=='交易挂单数据'){echo 'active';}?>" href="<?php echo getConfig('backstage_entrance'); ?>/transaction_product">
												<span class="menu-icon">
													<span class="svg-icon svg-icon-2">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10ZM6.39999 9.89999C6.99999 8.19999 8.40001 6.9 10.1 6.4C10.6 6.2 10.9 5.7 10.7 5.1C10.5 4.6 9.99999 4.3 9.39999 4.5C7.09999 5.3 5.29999 7 4.39999 9.2C4.19999 9.7 4.5 10.3 5 10.5C5.1 10.5 5.19999 10.6 5.39999 10.6C5.89999 10.5 6.19999 10.2 6.39999 9.89999ZM14.8 19.5C17 18.7 18.8 16.9 19.6 14.7C19.8 14.2 19.5 13.6 19 13.4C18.5 13.2 17.9 13.5 17.7 14C17.1 15.7 15.8 17 14.1 17.6C13.6 17.8 13.3 18.4 13.5 18.9C13.6 19.3 14 19.6 14.4 19.6C14.5 19.6 14.6 19.6 14.8 19.5Z" fill="currentColor"></path>
															<path d="M16 12C16 14.2 14.2 16 12 16C9.8 16 8 14.2 8 12C8 9.8 9.8 8 12 8C14.2 8 16 9.8 16 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10Z" fill="currentColor"></path>
														</svg>
													</span>
												</span>
												<span class="menu-title">交易挂单数据</span>
											</a>
										</div>
										<?php endif; if(power($admin_info['power'],'交易订单数据') == 1): ?>
										<div class="menu-item">
											<a class="menu-link <?php if('查询业务 - 产品列表'=='交易订单数据'){echo 'active';}?>" href="<?php echo getConfig('backstage_entrance'); ?>/transaction_order">
												<span class="menu-icon">
													<span class="svg-icon svg-icon-2">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10ZM6.39999 9.89999C6.99999 8.19999 8.40001 6.9 10.1 6.4C10.6 6.2 10.9 5.7 10.7 5.1C10.5 4.6 9.99999 4.3 9.39999 4.5C7.09999 5.3 5.29999 7 4.39999 9.2C4.19999 9.7 4.5 10.3 5 10.5C5.1 10.5 5.19999 10.6 5.39999 10.6C5.89999 10.5 6.19999 10.2 6.39999 9.89999ZM14.8 19.5C17 18.7 18.8 16.9 19.6 14.7C19.8 14.2 19.5 13.6 19 13.4C18.5 13.2 17.9 13.5 17.7 14C17.1 15.7 15.8 17 14.1 17.6C13.6 17.8 13.3 18.4 13.5 18.9C13.6 19.3 14 19.6 14.4 19.6C14.5 19.6 14.6 19.6 14.8 19.5Z" fill="currentColor"></path>
															<path d="M16 12C16 14.2 14.2 16 12 16C9.8 16 8 14.2 8 12C8 9.8 9.8 8 12 8C14.2 8 16 9.8 16 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10Z" fill="currentColor"></path>
														</svg>
													</span>
												</span>
												<span class="menu-title">交易订单数据</span>
											</a>
										</div>
										<?php endif; if(power($admin_info['power'],'首页轮播图') == 1 || power($admin_info['power'],'管理员列表') == 1): ?>
										<div class="menu-item pt-5">
											<div class="menu-content">
												<span class="menu-heading fw-bold text-uppercase fs-7">其他配置</span>
											</div>
										</div>
										<?php endif; if(power($admin_info['power'],'首页轮播图') == 1): ?>
										<div class="menu-item">
											<a class="menu-link <?php if('查询业务 - 产品列表'=='首页轮播图'){echo 'active';}?>" href="<?php echo getConfig('backstage_entrance'); ?>/slide">
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
										<?php endif; if(power($admin_info['power'],'管理员列表') == 1): ?>
										<div class="menu-item">
											<a class="menu-link <?php if('查询业务 - 产品列表'=='管理员列表'){echo 'active';}?>" href="<?php echo getConfig('backstage_entrance'); ?>/admin">
												<span class="menu-icon">
													<span class="svg-icon svg-icon-2">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10ZM6.39999 9.89999C6.99999 8.19999 8.40001 6.9 10.1 6.4C10.6 6.2 10.9 5.7 10.7 5.1C10.5 4.6 9.99999 4.3 9.39999 4.5C7.09999 5.3 5.29999 7 4.39999 9.2C4.19999 9.7 4.5 10.3 5 10.5C5.1 10.5 5.19999 10.6 5.39999 10.6C5.89999 10.5 6.19999 10.2 6.39999 9.89999ZM14.8 19.5C17 18.7 18.8 16.9 19.6 14.7C19.8 14.2 19.5 13.6 19 13.4C18.5 13.2 17.9 13.5 17.7 14C17.1 15.7 15.8 17 14.1 17.6C13.6 17.8 13.3 18.4 13.5 18.9C13.6 19.3 14 19.6 14.4 19.6C14.5 19.6 14.6 19.6 14.8 19.5Z" fill="currentColor"></path>
															<path d="M16 12C16 14.2 14.2 16 12 16C9.8 16 8 14.2 8 12C8 9.8 9.8 8 12 8C14.2 8 16 9.8 16 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10Z" fill="currentColor"></path>
														</svg>
													</span>
												</span>
												<span class="menu-title">管理员列表</span>
											</a>
										</div>
										<?php endif; ?>

									</div>
								</div>
							</div>
						</div>
						<?php if(power($admin_info['power'],'系统设置管理') == 1): ?>
						<div class="app-sidebar-footer flex-column-auto pt-2 pb-6 px-6" id="kt_app_sidebar_footer">
							<a href="<?php echo getConfig('backstage_entrance'); ?>/setting" class="btn btn-flex flex-center btn-custom btn-primary overflow-hidden text-nowrap px-0 h-40px w-100">
								<span class="btn-label">系统设置管理</span>
								<i class="ki-duotone ki-document btn-icon fs-2 m-0">
									<span class="path1"></span>
									<span class="path2"></span>
								</i>
							</a>
						</div>
						<?php endif; ?>
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
            <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                <button type="button" class="btn btn-sm btn-light btn-light-primary" onclick="product_add_modify(0)" data-kt-menu-trigger="click" id="merchant_add_modify">
                    添加产品
                </button>
            </div>
        </div>
        <div class="card-body pb-5">
            <table id="kt_datatable_example_1" class="table align-middle table-row-dashed fs-6 gy-5">
                <thead>
                    <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                        <th class="min-w-25px">ID</th>
                        <th class="min-w-100px">产品名称</th>
                        <th class="min-w-100px">产品描述</th>
                        <th class="min-w-100px">产品图标</th>
                        <th class="min-w-100px">状态</th>
                        <th class="min-w-100px">排序</th>
                        <th class="min-w-100px">创建时间</th>
                        <th class="min-w-100px">操作</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 fw-semibold">
                </tbody>
            </table>
        </div>
    </div>
</div>


<div class="bg-body" data-kt-drawer="true" data-kt-drawer-name="activities" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'lg': '500px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#merchant_add_modify" data-kt-drawer-close="#kt_activities_close">
    <div class="card w-100 shadow-none border-0 rounded-0">
        <div class="card-header">
            <h3 class="card-title fw-bold text-dark merchant_name"></h3>
            <div class="card-toolbar">
                <button type="button" class="btn btn-sm btn-icon btn-active-light-primary me-n5" id="kt_activities_close">
                    <span class="svg-icon svg-icon-1">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                        </svg>
                    </span>
                </button>
            </div>
        </div>
        <div class="card-body scroll-y">
            <input type="hidden" id="pid">
            <div class="d-flex fs-6 fw-semibold align-items-center mb-6">
                <div class="bullet w-8px h-6px rounded-2 bg-primary me-3"></div>
                <div class="fs-6 fw-semibold text-gray-400 flex-shrink-0">基础信息配置</div>
                <div class="separator separator-dashed min-w-10px flex-grow-1 mx-2"></div>
            </div>
            <div class="fv-row mb-6">
                <label class="required form-label">产品名称</label>
                <input type="text" id="name" class="form-control form-control-solid" placeholder="请输入产品名称">
            </div>
            <div class="fv-row mb-6">
                <label class="required form-label">产品描述</label>
                <textarea type="text" id="describe" placeholder="请输入产品描述" class="form-control form-control-solid" rows="5"></textarea>
            </div>
            <div class="fv-row mb-6">
                <label class="required form-label">查询价格</label>
                <input type="text" id="quiry_price" class="form-control form-control-solid" placeholder="请输入查询价格">
            </div>
            <div class="fv-row mb-6">
                <label class="required form-label">分佣比例</label>
                <div class="row mb-2">
                    <div class="col-md-6">
                        <div class="input-group">
                            <span class="input-group-text">一级：</span>
                            <input type="text" id="kickback_rtion_1" class="form-control" placeholder="请输入比例">
                            <span class="input-group-text">%</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group">
                            <span class="input-group-text">二级：</span>
                            <input type="text" id="kickback_rtion_2" class="form-control" placeholder="请输入比例">
                            <span class="input-group-text">%</span>
                        </div>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-6">
                        <div class="input-group">
                            <span class="input-group-text">三级：</span>
                            <input type="text" id="kickback_rtion_3" class="form-control" placeholder="请输入比例">
                            <span class="input-group-text">%</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group">
                            <span class="input-group-text">四级：</span>
                            <input type="text" id="kickback_rtion_4" class="form-control" placeholder="请输入比例">
                            <span class="input-group-text">%</span>
                        </div>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-6">
                        <div class="input-group">
                            <span class="input-group-text">五级：</span>
                            <input type="text" id="kickback_rtion_5" class="form-control" placeholder="请输入比例">
                            <span class="input-group-text">%</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group">
                            <span class="input-group-text">六级：</span>
                            <input type="text" id="kickback_rtion_6" class="form-control" placeholder="请输入比例">
                            <span class="input-group-text">%</span>
                        </div>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-6">
                        <div class="input-group">
                            <span class="input-group-text">七级：</span>
                            <input type="text" id="kickback_rtion_7" class="form-control" placeholder="请输入比例">
                            <span class="input-group-text">%</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group">
                            <span class="input-group-text">八级：</span>
                            <input type="text" id="kickback_rtion_8" class="form-control" placeholder="请输入比例">
                            <span class="input-group-text">%</span>
                        </div>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-6">
                        <div class="input-group">
                            <span class="input-group-text">九级：</span>
                            <input type="text" id="kickback_rtion_9" class="form-control" placeholder="请输入比例">
                            <span class="input-group-text">%</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group">
                            <span class="input-group-text">十级：</span>
                            <input type="text" id="kickback_rtion_10" class="form-control" placeholder="请输入比例">
                            <span class="input-group-text">%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer py-5 text-center">
            <button type="button" class="btn btn-sm btn-primary w-100 button_name" onclick="add_modify()"></button>
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
        <script>
            function refreshPage() {
                location.reload(); // 刷新当前页面
            }

            out_order();
            function out_order() {
                $.ajax({
                    url: "<?php echo getConfig('backstage_entrance'); ?>/admin_footer/out_order",
                    method: 'POST',
                    dataType: 'json',
                    success: function(res) {
                        if (res.code === 200) {
                            if(res.data.order_cz != 0){
                                var utterThis = new window.SpeechSynthesisUtterance('您有'+res.data.order_cz+'笔业务充值订单带处理');
                                utterThis.pitch=1
                                utterThis.rate=1.2
                                utterThis.voiceURI='BaiduMandarinMale'
                                window.speechSynthesis.speak(utterThis);
                            }
                            if(res.data.order_cx != 0){
                                var utterThis = new window.SpeechSynthesisUtterance('您有'+res.data.order_cx+'笔业务查询订单带处理');
                                utterThis.pitch=1
                                utterThis.rate=1.2
                                utterThis.voiceURI='BaiduMandarinMale'
                                window.speechSynthesis.speak(utterThis);
                            }
                            if(res.data.recharge != 0){
                                var utterThis = new window.SpeechSynthesisUtterance('您有'+res.data.recharge+'笔余额充值订单带处理');
                                utterThis.pitch=1
                                utterThis.rate=1.2
                                utterThis.voiceURI='BaiduMandarinMale'
                                window.speechSynthesis.speak(utterThis);
                            }
                            if(res.data.withdrawal != 0){
                                var utterThis = new window.SpeechSynthesisUtterance('您有'+res.data.withdrawal+'笔余额提现订单带处理');
                                utterThis.pitch=1
                                utterThis.rate=1.2
                                utterThis.voiceURI='BaiduMandarinMale'
                                window.speechSynthesis.speak(utterThis);
                            }
                            setTimeout(function (){
                                out_order();
                            }, 600000);
                        }else{
                            setTimeout(function (){
                                out_order();
                            },10000);
                        }
                    }
                });
            };
        </script>
	</body>
</html>
<script src="/static/admin/plugins/custom/formrepeater/formrepeater.bundle.js"></script>

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
                order: [[6, 'desc']],
                stateSave: true,
                ajax: {
                    url: "<?php echo getConfig('backstage_entrance'); ?>/product_list?type=2",
                },
                columns: [
                    { data: 'id' },
                    { data: 'name' },
                    { data: 'describe' },
                    { data: 'image' },
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
                    },
                    {
                        targets: 2,
                        orderable: false,
                    },
                    {
                        targets: 3,
                        orderable: false,
                        render: function (image) {
                            return `
                            <div class="cursor-pointer symbol symbol-35px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                                <img src="${image||'/static/admin/media/avatars/blank.png'}" class="rounded-3" alt="user">
                            </div>`;
                        },
                    },
                    {
                        targets: 4,
                        orderable: false,
                        render: function (data, type, row) {
                            return `
                                <div class="card-toolbar">
                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" ${row.status ? 'checked="checked"' : '5'}  onclick="status_switch(${row.id})"/>
                                    </label>
                                </div>`;
                        },
                    },
                    {
                        targets: 5,
                        orderable: false,
                        render: function (data, type, row) {
                            return `<input type="text" class="form-control form-control-transparent w-80px" style="padding: 0rem;" placeholder="点击编辑" value="${row.sort}" id="sort_${row.id}" onblur="sort(${row.id});">`;
                        },
                    },
                    {
                        targets: -1,
                        orderable: false,
                        className: 'text-end',
                        render: function (data, type, row) {
                            return `
                            <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">更多操作
                                <span class="svg-icon svg-icon-5 m-0">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor"></path>
                                    </svg>
                                </span>
                            </a>
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <div class="menu-item px-3">
                                    <a class="menu-link" onclick="product_add_modify(1, ${row.id})" data-kt-menu-trigger="click" id="merchant_add_modify">修改信息</a>
                                    <a class="menu-link" onclick="del(${row.id})">删除产品</a>
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
        var getSavedSearchContent = function () {
            var state = dt.state.loaded();
            $(".search").val(state.search.search);
        };
        return {
            init: function (id) {
                initDatatable();
                search();
                getSavedSearchContent();
            }
        }
    }();
    KTUtil.onDOMContentLoaded(function () {
        KTDatatablesServerSide.init();
    });

    
    function product_add_modify(type, id) {
        if(type == 1){
            $.ajax({
                url: "<?php echo getConfig('backstage_entrance'); ?>/product_post/info",
                method: 'POST',
                data: {
                    id: id,
                },
                dataType: 'json',
                success: function(res) {
                    if (res.code === 200) {
                        $("#pid").val(res.data.id);
                        $("#name").val(res.data.name);
                        $("#describe").val(res.data.describe);
                        $("#quiry_price").val(res.data.quiry_price);
                        $("#kickback_rtion_1").val(res.data.kickback_rtion_1);
                        $("#kickback_rtion_2").val(res.data.kickback_rtion_2);
                        $("#kickback_rtion_3").val(res.data.kickback_rtion_3);
                        $("#kickback_rtion_4").val(res.data.kickback_rtion_4);
                        $("#kickback_rtion_5").val(res.data.kickback_rtion_5);
                        $("#kickback_rtion_6").val(res.data.kickback_rtion_6);
                        $("#kickback_rtion_7").val(res.data.kickback_rtion_7);
                        $("#kickback_rtion_8").val(res.data.kickback_rtion_8);
                        $("#kickback_rtion_9").val(res.data.kickback_rtion_9);
                        $("#kickback_rtion_10").val(res.data.kickback_rtion_10);
                        $(".button_name").html('确认修改');
                        $(".merchant_name").html('修改产品');
                    } else {
                        toastr.error(
                            res.message,
                            {closeButton :!0, timeOut : "3000"}
                        );
                    }
                }
            });
        }else if(type == 0){
            $("#name").val('');
            $("#describe").val('');
            $("#quiry_price").val('');
            $("#kickback_rtion_1").val('');
            $("#kickback_rtion_2").val('');
            $("#kickback_rtion_3").val('');
            $("#kickback_rtion_4").val('');
            $("#kickback_rtion_5").val('');
            $("#kickback_rtion_6").val('');
            $("#kickback_rtion_7").val('');
            $("#kickback_rtion_8").val('');
            $("#kickback_rtion_9").val('');
            $("#kickback_rtion_10").val('');
            $(".button_name").html('确认添加');
            $(".merchant_name").html('添加产品');
        }
    }
    

    function add_modify() {
        $.ajax({
            url: "<?php echo getConfig('backstage_entrance'); ?>/product_post/add_modify",
            method: 'POST',
            data: {
                type: 2,
                id: $('#pid').val(),
                name: $('#name').val(),
                describe: $('#describe').val(),
                quiry_price: $('#quiry_price').val(),
                kickback_rtion_1: $('#kickback_rtion_1').val(),
                kickback_rtion_2: $('#kickback_rtion_2').val(),
                kickback_rtion_3: $('#kickback_rtion_3').val(),
                kickback_rtion_4: $('#kickback_rtion_4').val(),
                kickback_rtion_5: $('#kickback_rtion_5').val(),
                kickback_rtion_6: $('#kickback_rtion_6').val(),
                kickback_rtion_7: $('#kickback_rtion_7').val(),
                kickback_rtion_8: $('#kickback_rtion_8').val(),
                kickback_rtion_9: $('#kickback_rtion_9').val(),
                kickback_rtion_10: $('#kickback_rtion_10').val(),
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


    function status_switch(id) {
        $.ajax({
            url: "<?php echo getConfig('backstage_entrance'); ?>/product_post/status_switch",
            method: 'POST',
            data: {
                id: id,
            },
            dataType: 'json',
            success: function(res) {
                if (res.code === 200) {
                    toastr.success(
                        res.message,
                        {closeButton :!0, timeOut : "3000"}
                    );
                } else {
                    toastr.error(
                        res.message,
                        {closeButton :!0, timeOut : "3000"}
                    );
                }
            }
        });
    }


    function sort(id) {
        $.ajax({
            url: "<?php echo getConfig('backstage_entrance'); ?>/product_post/sort",
            method: 'POST',
            data: {
                id: id,
                sort: $('#sort_'+id).val(),
            },
            dataType: 'json',
            success: function(res) {
                if (res.code === 200) {
                    toastr.success(
                        res.message,
                        {closeButton :!0, timeOut : "3000"}
                    );
                } else {
                    toastr.error(
                        res.message,
                        {closeButton :!0, timeOut : "3000"}
                    );
                }
            }
        });
    }



    function upload(name) {
        var myDropzone = new Dropzone("#" + name, {
            url: "<?php echo getConfig('backstage_entrance'); ?>/upload_post",
            paramName: name,
            maxFiles: 1,
            maxFilesize: 5, // MB
            uploadMultiple: false,
            addRemoveLinks: true,
            success: function (file, res) {
                if (res.code === 200) {
                    $('#image').val(res.data);
                    toastr.success(
                        res.message,
                        {closeButton :!0, timeOut : "3000"}
                    );
                } else {
                    toastr.error(
                        res.message,
                        {closeButton :!0, timeOut : "3000"}
                    );
                }
            }
        });
        myDropzone.on("addedfile", function(file) {
            if (myDropzone.files.length > 1) {
            myDropzone.removeFile(myDropzone.files[0]);
            }
        });
    }
    window.onload = function() {
        upload('upload');
    };
</script>