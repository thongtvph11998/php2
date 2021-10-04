<?php


require_once 'controller/mainController.php';
require_once 'controller/productController.php';
require_once 'controller/cateController.php';
require_once 'controller/sliderController.php';
require_once 'controller/userController.php';

function render() {
    $page=isset($_GET['page']) ? $_GET['page'] : "";
    switch ($page) {
        case '':
            $ctr=new mainController();
            $ctr->showHomeAdmin();
            break;
        case 'sp':
            $action=isset($_GET['action']) ? $_GET['action']:"";
            switch ($action) {
                case '':
                   $ctr=new productController();
                   $ctr->showProduct();
                    break;
                case 'insert':
                    $ctr= new productController();
                    $ctr->insertProduct();
                    break;
                case 'update':
                    $ctr= new productController();
                    $ctr->updateProduct();
                    break;
                case 'delete':
                    $ctr= new productController();
                    $ctr->deleteProduct();
                    break;
            
                
                default:
                  
                    break;
            }
            break;
		case 'cate':
			$action=isset($_GET['action']) ? $_GET['action']:"";
			switch ($action) {
				case '':
					$ctr=new cateController();
					$ctr->showCate();
						break;
				case 'insertCate':
					$ctr=new cateController();
					$ctr->insertCate();
					break;

				case 'updateCate':
					$ctr=new cateController();
					$ctr->updateCate();
					break;
				case 'delete':
					$ctr= new cateController();
					$ctr->deleteCate();
					break;
				default:
					
					break;
			}
			break;
			case 'slider':
				$action=isset($_GET['action']) ? $_GET['action']:"";
				switch ($action) {
					case '':
						$ctr=new sliderController();
						$ctr->showSlider();
							break;
					case 'insertSlider':
						$ctr=new sliderController();
						$ctr->insertSlider();
						break;
	
					case 'updateSlider':
						$ctr=new sliderController();
						$ctr->updateSlider();
						break;
					case 'delete':
						$ctr= new sliderController();
						$ctr->deleteSlider();
							break;
					default:
						
						break;
				}
				break;
				case 'user':
					$action=isset($_GET['action']) ? $_GET['action']:"";
					switch ($action) {
						case '':
							$ctr=new userController();
							$ctr->showUser();
								break;
						case 'delete':
							$ctr= new userController();
							$ctr->deleteUser();
								break;
						default:
							
							break;
					}
					break;
        
        default:
           echo"lỗi index";
            break;
    }
	
}

?>

<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head><base href="">
		<meta charset="utf-8" />
		<title>Metronic Live preview | Keenthemes</title>
		<meta name="description" content="Metronic admin dashboard live demo. Check out all the features of the admin panel. A large number of settings, additional services and widgets." />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<link rel="canonical" href="https://keenthemes.com/metronic" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Vendors Styles(used by this page)-->
		<link href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Page Vendors Styles-->
		<!--begin::Global Theme Styles(used by all pages)-->
		<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles-->
		<!--begin::Layout Themes(used by all pages)-->
		<link href="assets/css/themes/layout/header/base/light.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/themes/layout/header/menu/light.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/themes/layout/brand/dark.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/themes/layout/aside/dark.css" rel="stylesheet" type="text/css" />
		<!--end::Layout Themes-->
		<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
		<!--begin::Main-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="d-flex flex-row flex-column-fluid page">
				<!--begin::Aside-->
				<?php include 'view/layout/aside.php'; ?>
				<!--end::Aside-->
				<!--begin::Wrapper-->
				<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
					<!--begin::Header-->
					<?php include 'view/layout/header.php'; ?>
					<!--end::Header-->
					<!--begin::Content-->
					<?php render(); ?>
					<!--end::Content-->
					<!--begin::Footer-->
					<?php include 'view/layout/footer.php'; ?>
					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Main-->
		<!--end::Demo Panel-->
		<script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
		<!--begin::Global Config(global config for global JS scripts)-->
		<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#3699FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#E4E6EF", "dark": "#181C32" }, "light": { "white": "#ffffff", "primary": "#E1F0FF", "secondary": "#EBEDF3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#3F4254", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#EBEDF3", "gray-300": "#E4E6EF", "gray-400": "#D1D3E0", "gray-500": "#B5B5C3", "gray-600": "#7E8299", "gray-700": "#5E6278", "gray-800": "#3F4254", "gray-900": "#181C32" } }, "font-family": "Poppins" };</script>
		<!--end::Global Config-->
		<!--begin::Global Theme Bundle(used by all pages)-->
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		<!--end::Global Theme Bundle-->
		<!--begin::Page Vendors(used by this page)-->
		<script src="assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
		<!--end::Page Vendors-->
		<!--begin::Page Scripts(used by this page)-->
		<script src="assets/js/pages/widgets.js"></script>
		<!--end::Page Scripts-->
	</body>
	<!--end::Body-->
</html>
