<main>
@section('page_title', 'Great Exhibition To Exhibit')
@section('page_description', '')
@section('page_keyword',  'The Exhibition Network, Exhibition, World largest business event platform, find all upcoming events, business conferences, exhibition 2023, trade shows, global seminars, networking meets and workshops. Browse and connect with visitors attending, participating exhibitors and view profiles of speakers and organizers. Manage, sell event tickets and promote your event on exhbition.org.in')

<style>
	[data-bs-theme=light] {
			--bs-blue: #1d3b53;
			--bs-indigo: #6610f2;
			--bs-purple: #6f42c1;
			--bs-pink: #e83e8c;
			--bs-red: #d6293e;
			--bs-orange: #fd7e14;
			--bs-yellow: #f7c32e;
			--bs-green: #0cbc87;
			--bs-teal: #20c997;
			--bs-cyan: #17a2b8;
			--bs-black: #000;
			--bs-white: #fff;
			--bs-gray: #606261;
			--bs-gray-dark: #222427;
			--bs-gray-100: #f8f8f8;
			--bs-gray-200: #dce0e5;
			--bs-gray-300: #c5c5c7;
			--bs-gray-400: #96969a;
			--bs-gray-500: #85878a;
			--bs-gray-600: #606261;
			--bs-gray-700: #3e403f;
			--bs-gray-800: #222427;
			--bs-gray-900: #202124;
			--bs-primary: #09B850;
			--bs-white: #fff;
			--bs-secondary: #85878a;
			--bs-success: #0cbc87;
			--bs-info: #17a2b8;
			--bs-warning: #f7c32e;
			--bs-danger: #d6293e;
			--bs-light: #f8f8f8;
			--bs-dark: #202124;
			--bs-primary-rgb: 9, 184, 80;
			--bs-white-rgb: 255, 255, 255;
			--bs-secondary-rgb: 133, 135, 138;
			--bs-success-rgb: 12, 188, 135;
			--bs-info-rgb: 23, 162, 184;
			--bs-warning-rgb: 247, 195, 46;
			--bs-danger-rgb: 214, 41, 62;
			--bs-light-rgb: 248, 248, 248;
			--bs-dark-rgb: 32, 33, 36;
			--bs-primary-text-emphasis: #068138;
			--bs-secondary-text-emphasis: #5d5f61;
			--bs-success-text-emphasis: #08845f;
			--bs-info-text-emphasis: #107181;
			--bs-warning-text-emphasis: #ad8920;
			--bs-danger-text-emphasis: #961d2b;
			--bs-light-text-emphasis: #3e403f;
			--bs-dark-text-emphasis: #161719;
			--bs-primary-bg-subtle: #cef1dc;
    --bs-primary-bg-subtle: #cef1dc;
    --bs-secondary-bg-subtle: #e7e7e8;
    --bs-success-bg-subtle: #cef2e7;
    --bs-info-bg-subtle: #d1ecf1;
    --bs-warning-bg-subtle: #fdf3d5;
    --bs-danger-bg-subtle: #f7d4d8;
    --bs-light-bg-subtle: #fcfcfc;
    --bs-dark-bg-subtle: #d2d3d3;
    --bs-primary-border-subtle: #9de3b9;
    --bs-secondary-border-subtle: #cecfd0;
    --bs-success-border-subtle: #9ee4cf;
    --bs-info-border-subtle: #a2dae3;
    --bs-warning-border-subtle: #fce7ab;
    --bs-danger-border-subtle: #efa9b2;
    --bs-light-border-subtle: #dce0e5;
    --bs-dark-border-subtle: #a6a6a7;
    --bs-white-rgb: 255, 255, 255;
    --bs-black-rgb: 0, 0, 0;
    --bs-font-sans-serif: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", "Noto Sans", "Liberation Sans", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    --bs-font-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
    --bs-gradient: linear-gradient(180deg, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0));
    --bs-body-font-family: "Inter", sans-serif;
    --bs-body-font-size: 1rem;
    --bs-body-font-weight: 400;
    --bs-body-line-height: 1.5;
    --bs-body-color: #606261;
    --bs-body-color-rgb: 96, 98, 97;
    --bs-body-bg: #fff;
    --bs-body-bg-rgb: 255, 255, 255;
    --bs-emphasis-color: #000;
    --bs-emphasis-color-rgb: 0, 0, 0;
    --bs-secondary-color: rgba(96, 98, 97, 0.75);
    --bs-secondary-color-rgb: 96, 98, 97;
    --bs-secondary-bg: #dce0e5;
    --bs-secondary-bg-rgb: 220, 224, 229;
    --bs-tertiary-color: rgba(96, 98, 97, 0.5);
    --bs-tertiary-color-rgb: 96, 98, 97;
    --bs-tertiary-bg: #f8f8f8;
    --bs-tertiary-bg-rgb: 248, 248, 248;
    --bs-heading-color: var(--bs-gray-900);
    --bs-link-color: #09B850;
    --bs-link-color-rgb: 9, 184, 80;
    --bs-link-decoration: none;
    --bs-link-hover-color: #079340;
    --bs-link-hover-color-rgb: 7, 147, 64;
    --bs-code-color: #d63384;
    --bs-highlight-color: #212529;
    --bs-highlight-bg: #fff3cd;
    --bs-border-width: 1px;
    --bs-border-style: solid;
    --bs-border-color: var(--bs-gray-200);
    --bs-border-color-translucent: rgba(0, 0, 0, 0.175);
    --bs-border-radius: 0.313rem;
    --bs-border-radius-sm: 0.2rem;
    --bs-border-radius-lg: 0.4rem;
    --bs-border-radius-xl: 0.6rem;
    --bs-border-radius-xxl: 2rem;
    --bs-border-radius-2xl: var(--bs-border-radius-xxl);
    --bs-border-radius-pill: 50rem;
    --bs-box-shadow: 0px 0px 40px rgba(29, 58, 83, 0.1);
    --bs-box-shadow-sm: 0 0.125rem 0.25rem rgba(29, 58, 83, 0.15);
    --bs-box-shadow-lg: 0 1rem 3rem rgba(29, 58, 83, 0.15);
    --bs-box-shadow-inset: inset 0 1px 2px rgba(0, 0, 0, 0.075);
    --bs-focus-ring-width: 0.25rem;
    --bs-focus-ring-opacity: 0.25;
    --bs-focus-ring-color: rgba(13, 110, 253, 0.25);
    --bs-form-valid-color: #198754;
    --bs-form-valid-border-color: rgba(12, 188, 135, 0.8);
    --bs-form-invalid-color: #dc3545;
    --bs-form-invalid-border-color: rgba(214, 41, 62, 0.5);

		}

		[data-bs-theme=dark] {
    --bs-light: #292a2d;
    --bs-gray-100: #1f2122;
    --bs-gray-200: #3c3e41;
    --bs-gray-300: #5f5f68;
    --bs-gray-400: #a1a1a8;
    --bs-gray-500: #bfc0c9;
    --bs-gray-600: #c5c6cc;
    --bs-gray-700: #ffffffb3;
    --bs-gray-800: #ffffffd9;
    --bs-gray-900: #fff;
    --bs-body-bg: #161618;
    --bs-body-bg-rgb: #161618;
    --bs-body-color: #c4c5c7;
    --bs-heading-color: var(--bs-gray-900);
    --bs-mode: #191b1d;
    --bs-border-color: rgba(255, 255, 255, 0.07);
}

		[data-bs-theme=dark] 
		.bg-light {
			background-color: var(--bs-light) !important;
		}

		small, .small {
			font-weight: 400;
		}

		small, .small {
			font-size: 0.875em !important;
		}

		@media (min-width: 1200px)
		{.display-2 {
			font-size: 5.5rem;
		}}

		.display-2 {
			font-size: calc(1.675rem + 5.1vw);
			font-weight: 700;
			line-height: 1.25;
		}

		@media (min-width: 1200px)
		{h2, .h2 {
			font-size: 2.75rem;
		}}

		@media (min-width: 1200px)
		{h5, .h5 {
			font-size: 1.5rem;
		}}

		
		.card-footer:last-child {
			border-radius: 0 0 var(--bs-card-inner-border-radius) var(--bs-card-inner-border-radius);
		}

		[data-bs-theme=dark] body, [data-bs-theme=dark] p, [data-bs-theme=dark] ul, [data-bs-theme=dark] ol {
			--bs-body-color: #c4c5c7;
			color: var(--bs-body-color);
		}

		.card {
			--bs-card-spacer-y: 1.25rem;
			--bs-card-spacer-x: 1.25rem;
			--bs-card-title-spacer-y: 0.5rem;
			--bs-gray-900: #202124;
			--bs-card-title-color: var(--bs-gray-900);
			--bs-card-subtitle-color: ;
			--bs-card-border-width: 0;
			--bs-gray-200: #dce0e5;
			--bs-border-color: var(--bs-gray-200);
			--bs-card-border-color: var(--bs-border-color);
			--bs-card-border-radius: 0.4rem;
			--bs-card-box-shadow: ;
			--bs-card-inner-border-radius: 0.4rem;
			--bs-card-cap-padding-y: 1.25rem;
			--bs-card-cap-padding-x: 1.25rem;
			--bs-body-bg: #fff;
			--bs-card-cap-bg: var(--bs-body-bg);
			--bs-card-cap-color: ;
			--bs-card-height: ;
			--bs-body-color: #606261;
			--bs-card-color: var(--bs-body-color);
			--bs-card-bg: var(--bs-body-bg);
			--bs-card-img-overlay-padding: 1.25rem;
			--bs-card-group-margin: 0.9375rem;
			position: relative;
			display: -webkit-box;
			display: -ms-flexbox;
			display: flex;
			-webkit-box-orient: vertical;
			-webkit-box-direction: normal;
			-ms-flex-direction: column;
			flex-direction: column;
			min-width: 0;
			height: var(--bs-card-height);
			color: var(--bs-body-color);
			word-wrap: break-word;
			background-color: var(--bs-card-bg);
			background-clip: border-box;
			border: var(--bs-card-border-width) solid var(--bs-card-border-color);
			border-radius: var(--bs-card-border-radius);
		}

		@media (min-width: 576px)
		{.text-sm-start {
			text-align: left !important;
		}}

		@media (min-width: 576px)
		{.col-sm-6 {
			-webkit-box-flex: 0;
			-ms-flex: 0 0 auto;
			flex: 0 0 auto;
			width: 50%;
		}}

		.fill-primary {
			fill: #09B850 !important;
		}

		.fill-mode {
			fill: var(--bs-gray-900) !important;
		}

		.badge {
			--bs-badge-padding-x: 0.65em;
			--bs-badge-padding-y: 0.35em;
			--bs-badge-font-size: 0.75em;
			--bs-badge-font-weight: 400;
			--bs-badge-color: #fff;
			--bs-badge-border-radius: var(--bs-border-radius-sm);
			display: inline-block;
			padding: var(--bs-badge-padding-y) var(--bs-badge-padding-x);
			font-size: var(--bs-badge-font-size);
			font-weight: var(--bs-badge-font-weight);
			line-height: 1;
			color: var(--bs-badge-color);
			text-align: center;
			white-space: nowrap;
			vertical-align: baseline;
			border-radius: var(--bs-badge-border-radius);
		}

		.me-n9 {
			margin-right: -11rem !important;
		}
		.mt-n7 {
			margin-top: -4rem !important;
		}

		.fa-fw {
			text-align: center;
			width: 1.25em;
		}

		.bi.fa-fw {
			display: inline-block;
		}

		h1 > a, h2 > a, h3 > a, h4 > a, h5 > a, h6 > a, .h1 > a, .h2 > a, .h3 > a, .h4 > a, .h5 > a, .h6 > a {
			--bs-gray-900: #fff;
			color: var(--bs-gray-900);
		}

		a {
			color: rgba(var(--bs-link-color-rgb), var(--bs-link-opacity, 1));
			text-decoration: none;
		}

		.bg-light {
			--bs-bg-opacity: 1;
			background-color: rgba(var(--bs-light-rgb), var(--bs-bg-opacity)) !important;
		}

		.bg-primary {
			--bs-bg-opacity: 1;
			background-color: rgba(var(--bs-primary-rgb), var(--bs-bg-opacity)) !important;
		}

		/* .texto-bg{
			color: #202124 !important;
		} */

		@media (min-width: 1200px)
		{h2, .h2 {
			font-size: 2.75rem;
		}}

		.row {
			--bs-gutter-x: 1.875rem;
			--bs-gutter-y: 0;
			display: -webkit-box;
			display: -ms-flexbox;
			display: flex;
			-ms-flex-wrap: wrap;
			flex-wrap: wrap;
			margin-top: calc(-1* var(--bs-gutter-y));
			margin-right: calc(-0.5* var(--bs-gutter-x));
			margin-left: calc(-0.5* var(--bs-gutter-x));
		}

		.bg-transparent {
			--bs-bg-opacity: 1;
			background-color: transparent !important;
		}

		.card-body {
			-webkit-box-flex: 1;
			-ms-flex: 1 1 auto;
			flex: 1 1 auto;
			padding: var(--bs-card-spacer-y) var(--bs-card-spacer-x);
			color: var(--bs-card-color);
		}

		.bg-colo{
			background-color: #09B850 !important;
		}
		
		.text-pri {
			--bs-light: #09B850;
		}

		.heading-color {
			color: var(--bs-gray-900) !important;
		}

		.bg-light {
			--bs-bg-opacity: 1;
			background-color: rgba(var(--bs-light-rgb), var(--bs-bg-opacity)) !important;
		}

		@media (min-width: 1200px)
		{h2, .h2 {
			font-size: 2.75rem;
		}}

		@media (min-width: 1200px)
        {h4, .h4 {
			font-size: 2.5rem;
		}}

		h2, .h2 {
			font-size: calc(1.4rem + 1.8vw);
		}

		.sectionlevel { 
			padding-bottom: 7.5rem;
			padding-top: 7.5rem;
		}

		h6, .h6, h5, .h5, h4, .h4, h3, .h3, h2, .h2, h1, .h1 {
			margin-top: 0;
			margin-bottom: 0.5rem;
			font-family: "Instrument Sans", sans-serif;
			font-weight: 700;
			line-height: 1.25;
			--bs-gray-900: #202124;
			--bs-heading-color: var(--bs-gray-900);
			color: var(--bs-heading-color);   
		}

		@media (min-width: 1200px)
		{h3, .h3 {
			font-size: 2.38rem;
		}}

		.text-white {
			--bs-text-opacity: 1;
			--bs-white-rgb: 255, 255, 255;
			color: rgba(var(--bs-white-rgb), var(--bs-text-opacity)) !important;
		}
		
		h6, .h6 {
			font-size: 1.2rem;
		}

		.bg-dark {
			--bs-bg-opacity: 1;
			--bs-dark-rgb: 32, 33, 36;
			background-color: rgba(var(--bs-dark-rgb), var(--bs-bg-opacity)) !important;
		}

		.inner-container-small {
			max-width: 700px;
			margin-right: auto;
			margin-left: auto;
		}

		.inner-container {
			max-width: 900px;
			margin-right: auto;
			margin-left: auto;
		}

		.icon-lg {
			width: 3.5rem;
			height: 3.5rem;
			line-height: 3.5rem;
			text-align: center;
			font-size: 1.2rem;
		}

		.icon-link {
			display: -webkit-inline-box;
			display: -ms-inline-flexbox;
			display: inline-flex;
			gap: 0.375rem;
			-webkit-box-align: center;
			-ms-flex-align: center;
			align-items: center;
			text-decoration-color: rgba(var(--bs-link-color-rgb), var(--bs-link-opacity, 0.5));
			text-underline-offset: 0.25em;
			-webkit-backface-visibility: hidden;
			backface-visibility: hidden;
		}

		.fill-white {
			fill: #fff !important;
		}

		.vr {
			display: inline-block;
			-ms-flex-item-align: stretch;
			align-self: stretch;
			width: var(--bs-border-width);
			min-height: 1em;
			background-color: currentcolor;
			opacity: 0.25;
		}

		.list-group {
			--bs-list-group-color: var(--bs-gray-600);
			--bs-list-group-bg: transparent;
			--bs-list-group-border-color: var(--bs-border-color);
			--bs-list-group-border-width: var(--bs-border-width);
			--bs-list-group-border-radius: 0.313rem;
			--bs-list-group-item-padding-x: 1rem;
			--bs-list-group-item-padding-y: 0.5rem;
			--bs-list-group-action-color: var(--bs-secondary-color);
			--bs-list-group-action-hover-color: var(--bs-gray-700);
			--bs-list-group-action-hover-bg: rgba(var(--bs-primary-rgb), 0.1);
			--bs-list-group-action-active-color: var(--bs-gray-700);
			--bs-list-group-action-active-bg: rgba(var(--bs-primary-rgb), 0.1);
			--bs-list-group-disabled-color: var(--bs-secondary-color);
			--bs-list-group-disabled-bg: var(--bs-body-bg);
			--bs-list-group-active-color: #fff;
			--bs-list-group-active-bg: #09B850;
			--bs-list-group-active-border-color: #09B850;
			display: -webkit-box;
			display: -ms-flexbox;
			display: flex;
			-webkit-box-orient: vertical;
			-webkit-box-direction: normal;
			-ms-flex-direction: column;
			flex-direction: column;
			padding-left: 0;
			margin-bottom: 0;
			border-radius: var(--bs-list-group-border-radius);
		}

		.list-group-borderless .list-group-item {
			border: none !important;
			padding: 0.425rem 0;
		}
		.list-group-item:first-child {
			border-top-left-radius: inherit;
			border-top-right-radius: inherit;
		}

		.list-group-item {
			position: relative;
			display: block;
			padding: var(--bs-list-group-item-padding-y) var(--bs-list-group-item-padding-x);
			color: var(--bs-list-group-color);
			background-color: var(--bs-list-group-bg);
			border: var(--bs-list-group-border-width) solid var(--bs-list-group-border-color);
		}

		.text-primary {
			--bs-text-opacity: 1;
			color: rgba(var(--bs-primary-rgb), var(--bs-text-opacity)) !important;
		}

		

		.btn {
			--bs-btn-padding-x: 1rem;
			--bs-btn-padding-y: 0.5rem;
			--bs-btn-font-family: Inter, sans-serif;
			--bs-btn-font-size: 1rem;
			--bs-btn-font-weight: 500;
			--bs-btn-line-height: 1.5;
			--bs-btn-color: var(--bs-body-color);
			--bs-btn-bg: transparent;
			--bs-btn-border-width: 1px;
			--bs-btn-border-color: transparent;
			--bs-btn-border-radius: 0.313rem;
			--bs-btn-hover-border-color: transparent;
			--bs-btn-box-shadow: none;
			--bs-btn-disabled-opacity: 0.65;
			--bs-btn-focus-box-shadow: 0 0 0 0.25rem rgba(var(--bs-btn-focus-shadow-rgb), .5);
			display: inline-block;
			padding: var(--bs-btn-padding-y) var(--bs-btn-padding-x);
			font-family: var(--bs-btn-font-family);
			font-size: var(--bs-btn-font-size);
			font-weight: var(--bs-btn-font-weight);
			line-height: var(--bs-btn-line-height);
			color: var(--bs-btn-color);
			text-align: center;
			vertical-align: middle;
			cursor: pointer;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
			border: var(--bs-btn-border-width) solid var(--bs-btn-border-color);
			border-radius: var(--bs-btn-border-radius);
			background-color: var(--bs-btn-bg);
			-webkit-transition: all 0.3s ease-in-out;
			transition: all 0.3s ease-in-out;
		}

		.btn {
			letter-spacing: 0.5px;
			position: relative;
			overflow: hidden;
			outline: 0;
			margin-bottom: 6px;
		}

		.btn-dark {
			--bs-btn-color: #fff;
			--bs-btn-bg: #202124;
			--bs-btn-border-color: #202124;
			--bs-btn-hover-color: #fff;
			--bs-btn-hover-bg: #414245;
			--bs-btn-hover-border-color: #36373a;
			--bs-btn-focus-shadow-rgb: 65, 66, 69;
			--bs-btn-active-color: #fff;
			--bs-btn-active-bg: #4d4d50;
			--bs-btn-active-border-color: #36373a;
			--bs-btn-active-shadow: none;
			--bs-btn-disabled-color: #fff;
			--bs-btn-disabled-bg: #202124;
			--bs-btn-disabled-border-color: #202124;
		}

		.opacity-2 {
			opacity: 0.2 !important;
		}
		.h-200px {
			height: 200px !important;
		}

		.btn-white {
			background: #fff;
			color: #222427;
		}
		.btn {
			letter-spacing: 0.5px;
			position: relative;
			overflow: hidden;
			outline: 0;
			margin-bottom: 6px;
		}

		.btn-white {
			--bs-btn-color: #000;
			--bs-btn-bg: #fff;
			--bs-btn-border-color: #fff;
			--bs-btn-hover-color: #000;
			--bs-btn-hover-bg: white;
			--bs-btn-hover-border-color: white;
			--bs-btn-focus-shadow-rgb: 217, 217, 217;
			--bs-btn-active-color: #000;
			--bs-btn-active-bg: white;
			--bs-btn-active-border-color: white;
			--bs-btn-active-shadow: none;
			--bs-btn-disabled-color: #000;
			--bs-btn-disabled-bg: #fff;
			--bs-btn-disabled-border-color: #fff;
		}

		.card-footer:last-child {
			border-radius: 0 0 var(--bs-card-inner-border-radius) var(--bs-card-inner-border-radius);
		}

		.card-footer {
			padding: var(--bs-card-cap-padding-y) var(--bs-card-cap-padding-x);
			color: var(--bs-card-cap-color);
			background-color: var(--bs-card-cap-bg);
			border-top: var(--bs-card-border-width) solid var(--bs-card-border-color);
		}

		.bg-transparent {
			--bs-bg-opacity: 1;
			background-color: transparent !important;
		}

		

</style>

		<section class="position-relative overflow-hidden pb-0 pt-xl-9">
			<!-- SVG decoration -->
			<div class="position-absolute top-0 start-0 ms-n7 d-none d-xl-block">
				<img src="assets/images/elements/decoration-pattern.svg" alt="">
			</div>

			<!-- SVG decoration -->
			<figure class="position-absolute top-0 end-0 me-n4 mt-n7 d-none d-xl-block">
					<svg class="fill-mode opacity-1" width="775px" height="834px" viewBox="0 0 775 834" style="enable-background:new 0 0 775 834;" xml:space="preserve">
						<path d="M486.1,564.4c-3.6,2.5-7.4,4.8-11.3,6.4c-12,5.5-25.7,7.9-42.2,7.4c-30.6-1.1-65.6-12.5-102.8-24.4 c-50.7-16.2-103.3-33.4-152.5-27c-56.1,7.2-97.9,44.4-128,114l-0.4-0.2c67.5-156.1,181-119.5,281.1-87.1c37,12,72,23.2,102.5,24.3 c34.3,1.2,58.1-10.7,74.9-37.4C530.1,505,547.1,466,565,425.1C619.4,301,675.6,172.7,892.1,141.3l0.1,0.4 c-216.2,31.4-272.5,159.5-326.8,283.5c-18.1,41.1-35,79.7-57.7,115.6C501.6,550.7,494.5,558.5,486.1,564.4z"></path>
						<path d="M500.9,551.4c-43.7,31-103,15.8-165.5-0.2c-49.9-12.7-101.5-25.8-148.7-16.7c-53.3,10.5-93.2,49-121.6,118 l-0.5-0.1c15.3-37.1,33.3-64.7,55.1-84.7c19.5-17.7,41.3-28.6,66.7-33.7c47.4-9.2,99,3.9,148.9,16.6 c70.4,17.9,137.1,34.9,181.3-14.4c35.7-39.9,57.3-91.7,80.2-146.7c23.8-56.7,48.2-115.5,90.2-163.6c22.7-25.9,48.4-46.4,78.4-62.4 c33.9-18.1,72.2-30.3,117.1-37.1l0.1,0.4C695,155.3,645.2,274.5,597.1,389.7c-22.9,55-44.5,106.8-80.4,146.8 C512.3,542.4,506.6,547.3,500.9,551.4z"></path>
						<path d="M521.3,536.4c-21.9,15.5-48.4,23.4-80.8,23.8c-31.2,0.5-65.1-5.8-97.9-11.9c-49.3-9.2-100.2-18.7-145.7-6.5 c-51.1,13.7-88.9,53.7-116,122.6l-0.6-0.2c60.5-154.1,163.3-135,262.6-116.5c68.1,12.7,132.6,24.6,183.6-15.8 c48.1-38.2,71.1-100.6,95.6-166.5c20.3-55,41.4-111.6,78.3-158.1c20-25.1,42.7-44.9,69.2-60.5c30.1-17.5,64.2-29.1,104.3-35.4 l0.2,0.6c-167.2,26.3-210,141.9-251.4,253.5C598.3,431.5,575,493.8,527,532.2C525.1,533.8,523.2,535.1,521.3,536.4z"></path>
						<path d="M548.9,520.3c-4,2.9-8.2,5.6-12.6,8c-56.6,31.5-120.9,23.8-183,16.6c-51.7-6-100.4-11.8-144.6,3.2 c-49.9,16.9-85.5,57.7-111.3,128.2l-0.6-0.2c13.7-37.3,30.1-66,49.9-87.8c17.8-19.4,37.9-32.8,61.8-40.9 c44.3-15,93.1-9.3,144.9-3.2c62.1,7.2,126.3,14.8,182.8-16.6c59.6-33.2,82-104.7,105.9-180.4c17.1-54.3,34.7-110.5,67.2-156.6 c36.7-52,87.8-82.8,155.7-94l0.2,0.6c-151.9,25-187.8,139.3-222.3,250C620.4,417.6,599.4,484.5,548.9,520.3z"></path>
						<path d="M573.5,509.5c-8.2,5.8-17.4,10.7-27.7,14.6c-59.3,22-119.1,18.8-176.8,15.8c-53.2-2.8-103.3-5.3-147.1,12.5 C172.6,572.3,138.1,615.5,113,688l-0.5-0.1c25.1-72.7,59.6-115.9,108.9-136c44-18,94.2-15.3,147.6-12.6 c57.7,3,117.4,6.1,176.6-15.9c70.7-26.2,91.1-106.3,112.8-191.4c13.9-54.5,28.3-111,56.7-156.9C747,123.2,793,92.6,855.6,82l0,0.7 C716.3,106.5,687,221.4,658.9,332.2C640.4,405,622.6,474.4,573.5,509.5z"></path>
						<path d="M595.2,502.3c-11.3,8-24.6,14-40,17.4c-56.8,12.7-112,12.7-160.5,12.9c-60.2,0.1-112,0.2-157,21.1 c-49.5,23-84,69.3-108.5,146l-0.6-0.2c24.3-76.7,58.9-123.1,108.6-146.3c45.1-21.1,97.2-21.1,157.4-21.2 c48.6,0,103.6-0.1,160.5-12.9c81.6-18.3,99-106.7,117.4-200.6c10.7-55,22-112,46.6-158.2C747,108,788.6,77.5,846.5,67.2l0.1,0.8 C718,91.2,695.2,206.9,673.2,318.9C658.3,394.9,643.8,467.8,595.2,502.3z"></path>
						<path d="M615.3,497.4c-13.7,9.7-30.2,16-50.8,18c-44.4,4.6-86.5,5.8-123.6,6.8c-71.2,2-132.8,3.7-182,27.7 C206,575.6,169.8,627,145,711.3l-0.8-0.1c13-44.6,29-79.3,48.6-106.3c18.1-24.9,39.5-43.1,65.6-55.7 c49.5-24.1,110.9-25.8,182.4-27.7c37.1-1,79.3-2.2,123.5-6.7c92.6-9.4,106.2-106.5,120.5-209.2c7.8-55.9,15.9-113.6,37-160 c23.8-52.7,61.6-83.1,115.3-93.4l0.3,0.7c-53.4,10.1-91,40.4-114.6,92.9c-21.1,46.4-29.2,104.1-36.8,159.9 C674.6,386,663.8,463,615.3,497.4z"></path>
						<path d="M634.4,494c-15.5,11-35.2,17.2-60.4,17.3c-12.3,0.1-24.5,0.1-36.1,0.1c-103.7,0-185.5-0.1-246.4,26.4 c-63.5,27.7-103.7,85-130.5,185.5l-0.8-0.1c13.9-52.5,31.3-92.6,53.2-122.9c20.7-28.8,46.2-49.4,77.8-63.2 c61-26.6,142.9-26.4,246.6-26.4c11.7,0.1,23.8,0,36.1-0.1c103.8-0.2,112.9-105.6,122.5-217.2c4.7-56.9,9.9-115.5,27.5-162.4 c20-53.1,54.1-83.7,104.1-93.7l0.1,0.8c-49.5,9.8-83.5,40.3-103.3,93.1c-17.6,46.9-22.7,105.4-27.6,162 C690.1,378.2,682.9,459.6,634.4,494z"></path>
						<path d="M652.7,491.8c-17.9,12.7-40.7,17.7-69.2,15.4C328,486.2,228.3,517.5,177.2,735.2l-0.9-0.3 c25.9-110.7,64-171.6,127-204c66.6-34.2,160.2-34.6,280.3-24.7c32.2,2.6,56.9-4.1,75.4-20.5c42.1-37.4,45.1-118.6,48-204.7 c4-116.5,8.1-236.8,112.1-258.6l0.1,0.8C715.9,44.8,711.8,164.8,707.8,280.9c-3.1,86.3-5.8,167.7-48.3,205.2 C657.3,488.3,655,490.1,652.7,491.8z"></path>
						<path d="M670.6,490.3c-19.3,13.7-44.8,17.9-77.7,12.7c-138.5-21.4-227.1-13-287.3,27 c-55.4,36.8-89.1,101.7-112.4,216.9l-0.9-0.3C215.8,631,249.6,566,305.1,528.9c60.3-40.1,149.1-48.6,288.1-27.3 c35.9,5.5,63,0,82.6-16.9c43.2-37.5,42.2-124.3,40.9-216.1C714.9,151,713,28.8,809.9,7.7l0.1,0.8c-96,21.1-94.3,142.7-92.7,260.6 c1.3,92.1,2.4,179-41.1,216.7C674.3,487.4,672.6,488.9,670.6,490.3z"></path>
					</svg>
			</figure>

			<div class="container pt-4 pt-sm-5">
				<div class="row g-xl-5">

					<!-- Hero content START -->
					<div class="col-xl-7 mb-5 mb-xl-0">
						<div class="pe-xxl-4">
							<span class="heading-color d-inline-block bg-light small rounded-3 px-3 py-2">🤩 Award-winning digital services</span>

							<!-- Title -->
							<h1 class="mt-3 lh-base">Creative studio focused on
								<span class="cd-headline clip big-clip is-full-width text-primary mb-0 d-block d-xxl-inline-block">
									<span class="typed" data-type-text="Web Design&amp;&amp;Web Dev&amp;&amp;UI/UX Design">Web Dev</span><span class="ityped-cursor">|</span>
								</span>
							</h1>
							<p class="mb-0 mt-4 mt-md-5">From concept to execution, we deliver web designs that make an impact. Let your brand shine with our innovative and visually stunning websites.</p>

							<!-- Search -->
							<form class="col-md-10 bg-body border rounded-2 position-relative p-2 mt-4 mt-md-5">
								<div class="input-group">
									<input class="form-control focus-shadow-none border-0 me-1" type="email" placeholder="Enter your email address">
									<button type="button" class="btn btn-dark rounded-2 mb-0">Start trial!</button>
								</div>
							</form>

							<!-- Features -->
							<div class="row mt-5">
								<div class="col-md-6 mb-5 mb-md-0">
									<!-- Features item -->
									<div class="d-flex align-items-center">
										<!-- Svg icon -->
										<figure class="text-primary mb-0">
											<svg width="50" height="50" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M2.25 11.9994C2.25 11.2426 2.33278 10.5061 2.48954 9.79839C3.52877 11.4668 4.9817 12.8444 6.70303 13.7805C6.89642 15.2744 7.31649 16.8492 7.91754 18.3021C8.4287 19.5376 9.08647 20.7226 9.87759 21.7036C5.52106 20.7171 2.25 16.7562 2.25 11.9994Z" fill="currentColor" fill-opacity="0.25"></path>
												<path d="M6.58273 11.9511C5.09625 10.9367 3.89759 9.51584 3.14064 7.84162C4.39913 5.05845 6.8817 2.97347 9.87759 2.2951C9.08647 3.2761 8.4287 4.46106 7.91754 5.69662C7.07721 7.72786 6.59064 9.99757 6.58273 11.9511Z" fill="currentColor" fill-opacity="0.25"></path>
												<path d="M16.0799 18.3021C15.5688 19.5376 14.911 20.7226 14.1199 21.7036C18.4764 20.7171 21.7475 16.7562 21.7475 11.9994C21.7475 11.2426 21.6647 10.5061 21.508 9.79841C20.4687 11.4668 19.0158 12.8445 17.2944 13.7805C17.1011 15.2744 16.681 16.8492 16.0799 18.3021Z" fill="currentColor" fill-opacity="0.25"></path>
												<path d="M17.4148 11.9511C18.9012 10.9367 20.0999 9.51585 20.8569 7.84164C19.5984 5.05847 17.1158 2.97347 14.1199 2.29511C14.911 3.2761 15.5688 4.46106 16.0799 5.69662C16.9203 7.72786 17.4069 9.99758 17.4148 11.9511Z" fill="currentColor" fill-opacity="0.25"></path>
												<path d="M9.3035 6.27003C10.0004 4.58556 10.9365 3.14358 11.9986 2.25C13.0608 3.14358 13.9969 4.58556 14.6938 6.27003C15.4761 8.16121 15.9147 10.2571 15.9147 11.9993C15.9147 12.26 15.9049 12.5287 15.8856 12.8033C14.694 13.3321 13.3792 13.625 11.9986 13.625C10.618 13.625 9.30329 13.3321 8.11167 12.8033C8.09234 12.5287 8.08252 12.26 8.08252 11.9993C8.08252 10.2571 8.52111 8.16121 9.3035 6.27003Z" fill="currentColor"></path>
												<path d="M11.9986 15.125C13.2807 15.125 14.5119 14.907 15.6587 14.5059C15.4523 15.5799 15.1253 16.6854 14.6938 17.7287C13.9969 19.4131 13.0608 20.8551 11.9986 21.7487C10.9365 20.8551 10.0004 19.4131 9.3035 17.7287C8.87192 16.6854 8.54495 15.5799 8.3385 14.5059C9.48539 14.907 10.7166 15.125 11.9986 15.125Z" fill="currentColor"></path>
											</svg>
										</figure>
										<div class="ms-3">
											<h6 class="mb-1">24/7 Support</h6>
											<p class="mb-0">We're always here to help</p>
										</div>
									</div>
								</div>

								<div class="col-md-6">
									<!-- Features item -->
									<div class="d-flex align-items-center">
										<!-- Svg icon -->
										<figure class="text-primary mb-0">
											<svg width="50" height="50" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M8.55681 21.7488H15.443C17.9932 21.7488 19.2684 21.7488 19.8663 21.0613C20.054 20.8455 20.1933 20.5919 20.2746 20.3176C20.5338 19.4441 19.8493 18.3682 18.4804 16.2165L18.3427 16C15 19.5 9 19.5 5.65709 16L5.51933 16.2166C4.15054 18.3683 3.46614 19.4441 3.72526 20.3176C3.80662 20.5919 3.94586 20.8455 4.1336 21.0614C4.73154 21.7488 6.00663 21.7488 8.55681 21.7488Z" fill="currentColor" fill-opacity="0.25"></path>
												<path d="M19.5 9.75C19.5 12.0563 18.459 14.1195 16.8212 15.4953C15.5176 16.5904 13.8358 17.25 12 17.25C10.164 17.25 8.48209 16.5903 7.17838 15.495C5.54084 14.1192 4.5 12.0561 4.5 9.75C4.5 5.60786 7.85786 2.25 12 2.25C16.1421 2.25 19.5 5.60786 19.5 9.75Z" fill="currentColor"></path>
											</svg>
										</figure>

										<div class="ms-3">
											<h6 class="mb-1">Award Winning agency</h6>
											<p class="mb-0">You are in safe hand</p>
										</div>
									</div>
								</div>
							</div> <!-- Row END -->
						</div>
					</div>
					<!-- Hero content END -->

					<!-- Hero Image START -->
					<div class="col-md-10 col-xl-5 position-relative mx-auto mt-7 mt-xl-0">
						<!-- SVG Decoration -->
						<figure class="position-absolute top-0 start-0 translate-middle mt-2">
							<svg width="124.2px" height="76.9px" viewBox="0 0 124.2 76.9" style="enable-background:new 0 0 124.2 76.9;" xml:space="preserve">
								<path class="fill-mode" d="M70.4,13c0-0.2,0-0.2,0-0.3c0,0,0-0.1,0-0.1c0,0-0.1,0,0,0c-0.4,0.2-0.8,0.3-1.1,0.4c-0.3,0.1-0.5,0.7-1,0.4 c-0.5-0.3-0.6,0.5-1,0.3c0-0.1,0-0.2,0-0.5l-1.2,1c0-0.2,0-0.2,0-0.3c0,0,0-0.1,0-0.1c0,0-0.1,0-0.1-0.1c-0.3,0.1-0.6,0.7-1,0.3 c-0.3,0.2-0.5,0.4-0.8,0.6c-0.1,0.1-0.3-0.1-0.5-0.2c-0.3,0.2-0.6,0.4-0.9,0.6c-0.5-0.5-0.7,0.1-1,0.2c-0.1,0.1-0.3,0.2-0.3,0.1 c-0.5-0.5-0.7,0.1-1,0.3c-0.2,0.1-0.3,0.2-0.5,0c0,0-0.3,0-0.4,0.1c-0.2,0.2-0.4,0.3-0.6,0.5c-0.7-0.6-0.9,0.4-1.3,0.3 c-0.1-0.1-0.2-0.2-0.4-0.3L56,17.5c0-0.2,0-0.3,0-0.4c-1.1,0.1-2.1,0.6-3.2,0.9c-0.8,0.2-1.8,0.4-2.4,1.2c0,0-0.1,0-0.2,0.1 c0-0.1,0-0.2,0-0.4c-0.6,0.2-1.3,0.3-1.8,0.5c-1.1,0.5-2.4,0.5-3.2,1.5c0,0-0.1,0-0.2,0c0-0.1,0-0.2,0-0.3c-0.9,0.2-1.3,0.4-2,1 c0-0.1,0-0.2,0-0.4c-1,0.3-1.9,0.7-2.9,1c0,0-0.9,0.7-0.9,0.7c-0.1,0-0.1,0-0.2,0c0-0.1,0-0.2,0-0.4c-0.4,0.2-0.8,0.5-1.1,0.5 c-0.7-0.2-0.4,0.8-0.9,0.6c0-0.1,0-0.2,0-0.4c-1.3,0.5-2.7,0.9-4,1.4c-0.2,0.1-0.3,0.2-0.4,0.4c0,0.1-0.2,0.2-0.3,0.4 c0-0.3,0-0.4,0-0.5c-0.7,0.2-1.4,0.4-2.1,0.7c-0.1,0-0.1,0.2-0.2,0.4c-0.1,0.1-0.2,0.2-0.4,0.4c0-0.3,0-0.4,0-0.5 c-0.7,0.2-1.4,0.4-2.1,0.7c-0.1,0-0.1,0.3-0.2,0.4c-0.1,0.1-0.2,0.2-0.4,0.4c0-0.3,0-0.4,0-0.5c-0.7,0.2-1.4,0.4-2.1,0.7 c-0.1,0-0.1,0.3-0.2,0.4c-0.1,0.1-0.2,0.2-0.4,0.4c0-0.3,0-0.4,0-0.6c-0.6,0.3-1.2,0.5-1.8,0.8c-0.1,0-1.5,0.9-1.5,0.9 c0,0-0.1,0-0.1,0c0-0.1,0-0.2,0-0.4c-1.4,0.5-2.9,1-4.3,1.5c-2.2,0.8-4.5,1.7-6.7,2.5c-1.5,0.6-3,1-4.5,1.6c-1.1,0.4-2.2,0.7-3.4,1 c-0.2,0.1-0.5,0.1-0.7,0.1c0,0-0.1,0-0.1,0c0.2-0.5-0.3-0.3-0.4-0.5c-0.3-0.3,0-0.5,0-0.7c-0.2-0.1-0.4-0.2-0.6-0.4 c0.3-0.2,0.4-0.4,0.6-0.5c0.2-0.1,0.4-0.1,0.6-0.2c-0.4-0.5-1,0.3-1.3-0.5c0.2-0.1,0.5-0.4,0.7-0.5c2-0.5,3.9-1.3,5.9-2.1 c2.6-1,5.2-1.9,7.7-3c1.7-0.7,3.5-1.3,5.2-1.9c1.4-0.6,2.8-1.1,4.3-1.6c2.4-0.8,4.7-1.9,7.1-2.6c1.6-0.5,3.2-1.2,4.8-1.7 c2.5-0.9,5-1.8,7.5-2.6c1.4-0.5,2.8-1,4.2-1.5c1.7-0.5,3.3-1.3,5-1.8c2-0.6,3.9-1.3,5.8-1.9c1.3-0.4,2.7-0.8,4-1.2 c2-0.7,4-1.3,6-1.9c1.1-0.3,2.2-0.7,3.3-0.9c1-0.3,2-0.6,3-0.9c1-0.4,2.1-0.6,3.2-0.9c1.6-0.5,3.3-0.9,4.9-1.4 c1.4-0.4,2.9-0.7,4.4-1.1c2.2-0.6,4.4-0.9,6.7-1.5c2.1-0.5,4.1-0.9,6.1-1.6c0.3-0.1,0.8-0.4,1.1,0.2c-0.2,0.2-0.4,0.4-0.6,0.5 c-0.3,0.1-0.6,0.1-0.8,0.5c0.7-0.2,1.2-0.4,2-0.6c-0.3,0.4-0.4,0.7-0.6,1.1c0.1,0.1,0.3,0.2,0.3,0.3c-0.1,0.4,0,0.8-0.1,1.2 c-0.1,0.4-0.5,0.4-0.8,0.4c-0.1,0-0.1,0.2-0.2,0.3c0,0.1-0.1,0.1-0.2,0.1c-0.6,0-1,0.1-1.3,0.6c-0.1,0.1-0.2,0.1-0.3,0.2 c0-0.2,0-0.3,0-0.4c-0.9,0.1-1.8,0.5-2.5,1.2c-0.1-0.2-0.1-0.3-0.1-0.6c-0.6,0.3-1.2,0.7-1.7,1c0-0.1,0-0.3,0-0.4 c-0.7,0-1.2,0.5-1.7,0.9c0-0.2-0.1-0.3-0.1-0.5C91.5,6.7,90.7,7,90,7.3c0-0.1,0-0.2,0-0.4c-0.8,0.4-1.6,0.7-2.3,1.1 c0-0.1,0-0.2,0-0.4c-0.8,0.4-1.6,0.7-2.3,1.1c0-0.1,0-0.2,0-0.4c-0.8,0.4-1.6,0.7-2.3,1c0-0.1,0-0.2,0-0.4c-0.8,0.4-1.6,0.7-2.3,1.1 c0-0.1,0-0.2,0-0.4c-0.6,0.3-1.2,0.6-1.8,0.9c0-0.2,0-0.3,0-0.5c-0.4,0.3-0.7,0.5-1.1,0.6c-0.4,0.2-0.5-0.3-0.7-0.1 c-0.2,0.2-0.4,0.4-0.7,0.5c-0.4,0.2-0.7,0.3-1.1,0.4c0-0.1,0-0.2,0-0.4c-0.6,0.3-1.2,0.6-1.8,0.9c0-0.1,0-0.3,0-0.4 c-0.6,0.3-1.2,0.6-1.8,0.9c0-0.2,0-0.3,0-0.5L70.4,13z"></path>
								<path class="fill-mode" d="M52.9,71.2c3.7-2.9,4-3.1,4.3-3.3c4.2-3.4,8.4-6.8,12.5-10.2c0.4-0.3,0.6-0.8,1.2-0.7c0.1-0.5,0.5-0.7,0.8-0.9 c0.3-0.2,0.7-0.3,0.9-0.6c0.2-0.2,0.5-0.3,0.6-0.6c1.9-0.9,3.2-2.4,4.8-3.6c1.6-1.2,3.2-2.6,4.8-3.9c0.2-0.2,0.4-0.5,0.8-0.4 c0-0.4,0.3-0.5,0.5-0.7c0.2-0.2,0.4-0.4,0.8-0.4c0-0.5,0.4-0.6,0.7-0.8c0.2-0.1,0.5-0.1,0.6-0.2c0.1-0.1,0.1-0.4,0.4-0.3 c0.1,0,0.3-0.3,0.4-0.4c0.1-0.1,0.2-0.4,0.2-0.4c0.5,0.1,0.8-0.4,1.1-0.6c1.3-1,2.5-2.1,3.8-3.1c0.2-0.2,0.5-0.3,0.6-0.6 c0.2-0.3,0.6,0,0.7-0.5c0-0.2,0.4-0.4,0.6-0.6c1.8-0.9,3.2-2.4,4.8-3.6c0.2-0.2,0.7,0,0.6-0.5c0.5,0.2,0.3-0.3,0.5-0.4 c1.6-0.7,2.6-2.2,4.1-3c1.6-0.9,2.7-2.3,4.3-3.2c1.3-0.7,2.3-1.7,3.5-2.6c0.1-0.1,0.2-0.2,0.3-0.4c-0.1,0.1-0.2,0.1-0.3,0.2 c-0.6,0.5-1.2,1.2-1.9,1.5c-0.8,0.3-1.2,0.9-1.8,1.3c-0.7,0.5-1.2,1.2-1.9,1.5c-1.5,0.8-2.6,2.2-4.1,3c-1.8,1.1-3.2,2.7-5,3.8 c-2,1.2-3.5,2.9-5.4,4.1c-2.6,1.6-4.7,3.7-7.1,5.5c-0.3,0.2-0.7,0.4-0.9,0.7c-0.2,0.2-0.6,0.4-0.9,0.5c-0.3,0.1-0.6,0.4-0.7,0.6 c-0.1,0.3-0.2,0.4-0.5,0.4c-0.1,0-0.1,0.1-0.2,0.1c-0.4,0.1-0.4,0.7-0.9,0.8c-0.3,0.1-0.7,0.3-0.7,0.9c-0.3-0.2-0.3,0.3-0.5,0.3 c-0.6,0.2-1,0.6-1.4,1.1c-0.2,0.2-0.4,0.6-0.6,0.7c-0.9,0.3-1.4,1-2.2,1.5c-0.4,0.2-0.6,0.7-1.1,0.6c-0.1,0-0.2,0.2-0.2,0.2 c0,0.5-0.4,0.6-0.7,0.8c-4.5,3.7-9,7.4-13.5,11c-0.3,0.2-0.5,0.6-1,0.5c-0.1,0-0.3,0.2-0.4,0.3c-0.1,0.1-1.2,0.9-1.3,1.1 c-0.3,0.3-0.5,0.6-0.7,1C56.3,68.5,56.3,68.5,52.9,71.2c-1.5,1.1,0.3-0.4,2.2-1.9c0.1-0.1,0.3-0.3,0.4-0.3c0.4,0.1,0.4-0.3,0.5-0.4 c0.1-0.1,0.1-0.2,0.1-0.2c-0.1,0-0.2,0-0.2,0c-1.4,1.1-2.8,2.2-4.2,3.4c-0.7,0.6-1.5,0.9-2.2,1.4c-0.1,0-0.3-0.2-0.4-0.3 c1.4-1.2,2.8-2.2,4.1-3.4c0.4-0.4,1.2-0.3,1.3-1c1.1-0.3,1.8-1.2,2.6-1.9c6.2-5.1,12.4-10.1,18.6-15.2c0.3-0.3,0.7-0.7,1.1-0.8 c0.4-0.1,0.4-0.7,1-0.6c0.1,0,0.3-0.4,0.5-0.6c0.1-0.1,0.2-0.2,0.3-0.4c0.2-0.2,0.7,0.1,0.7-0.5c0-0.4,0.7,0,0.7-0.6 c0-0.1,0.4-0.4,0.6-0.4c0.5,0.1,0.2-0.6,0.5-0.5c0.5,0.1,0.7-0.3,1-0.5c0.8-0.6,1.6-1.3,2.4-1.9c0.3-0.2,0.8-0.3,0.9-0.5 c0.1-0.5,0.5-0.6,0.8-0.9c0.2-0.2,0.5-0.4,0.8-0.6l0.7-0.5l0.8-0.6l0.8-0.6l0.7-0.5c0.3-0.2,0.5-0.4,0.8-0.6 c0.2-0.2,0.7-0.2,0.7-0.4c0.1-0.3,0.6-0.2,0.5-0.6c0.3,0.1,0.5-0.1,0.7-0.3c0.3-0.2,0.5-0.4,0.8-0.6c2.1-1.6,4-3.5,6.3-4.9 c1.7-1.1,3.1-2.6,4.8-3.6c1.4-0.8,2.4-2.2,4-2.9c0.8-0.4,1.4-1.1,2.1-1.7c0.7-0.6,1.5-0.8,2.2-1.4c0.5-0.5,1-1,1.8-1.2 c0.5-0.2,0.9-0.7,1.3-1c0.5-0.3,1-0.6,1.5-0.9c0.6-0.4,1.1-1.1,1.9-1.2c0.9-0.8,2.1-1.3,3.1-1.9c0.6-0.4,1.2-0.5,1.9-0.4 c0.1,0,0.1,0.1,0.2,0.2c0,0.2,0,0.5,0,0.7c0.6,0.3,0.9,0.9,0.7,1.5c-0.1,0.3-0.2,0.5-0.1,0.9c0.1,0.4-0.3,0.8-0.1,1.2 c0,0.1-0.4,0.3-0.6,0.5c-0.6-0.4-1.1-0.2-1.6,0.1c-0.5,0.3-1,0.7-1.6,1c-1,0.6-2,1.3-2.9,2c-0.5,0.4-1,0.8-1.4,1.2c0,0-0.1,0-0.2,0 c0.2-0.3,0.4-0.5,0.7-0.7c-0.5,0.2-1,0.4-1.1,0.7c-0.1,0.6-0.8,0.5-0.8,0.8c0,0.5-0.8,0.1-0.6,0.6c-0.3,0.3-0.6,0.5-0.9,0.8 c0,0-0.1,0-0.2-0.1c0.1-0.2,0.3-0.4,0.4-0.6c-0.5,0.2-1,0.5-1.3,0.9c-0.6,1-1.5,1.4-2.4,1.9c0.2-0.2,0.5-0.5,0.7-0.7 c-0.2,0-0.3,0-0.4,0.1c-0.6,0.4-0.9,1-1.4,1.4c-0.7,0.6-1.4,1.2-2.1,1.7c0,0-0.1,0-0.2-0.1c0.2-0.2,0.4-0.5,0.6-0.7 c-0.6,0.3-1.1,0.8-1.6,1.1c-0.3,0.2-0.6,0.2-0.7,0.6c-0.1,0.4-0.5,0.3-0.8,0.1c0,0.3,0.1,0.6,0.1,0.9c-0.2-0.1-0.3-0.2-0.5-0.3 c-0.9,0.7-1.8,1.5-2.7,2.2c-0.3,0.2-0.6,0.4-1.1,0.6c0,1.1-1.1,1.3-1.8,1.8c0.3-0.3,0.6-0.6,0.8-0.8c-0.6,0.3-1.1,0.7-1.6,1.1 c-0.6,0.4-1.1,1.1-1.9,1.2c-0.3,0.1-0.6,0.4-0.5,0.9c0,0.1,0,0.1-0.1,0.2c-0.1-0.1-0.3-0.2-0.4-0.3l-1,0.8c-0.2-0.1-0.4-0.4-0.6-0.1 c0,0,0.2,0.2,0.3,0.4c-0.9,0.5-1.4,1.4-2.4,1.7c-0.5,0.8-1.3,1.4-2.2,1.8c0,0.2,0,0.4,0,0.6c-0.9-0.3-1.3,0.6-1.7,0.8 c-0.4,0-0.6,0-0.8,0c0,0.2,0,0.4,0.1,0.6c-0.9,0.7-1.7,1.4-2.6,2.1c-0.2,0.2-0.6,0.2-0.7,0.4c-0.2,0.3-0.3,0.5-0.7,0.5 c-0.2,0.1-0.3,0.5-0.6,0.6c-0.1,0.1-0.4,0.1-0.6,0.1c-0.1,0-0.3-0.1-0.4-0.2c0,0-0.1,0.1-0.2,0.1c0,0,0,0.1,0,0.2 c0.3,0,0.4,0.1,0.3,0.3c-0.1,0.2-0.2,0.4-0.3,0.4c-0.4,0-0.6,0.1-0.7,0.6c-0.1,0.3-0.8,0.1-0.8,0.7c0,0-0.1,0.1-0.1,0.1 c-0.5-0.1-0.8,0.3-1.1,0.6c-3,2.4-6,4.9-8.9,7.3c-0.2,0.2-0.4,0.5-0.7,0.5c-0.7,0.1-1.1,0.4-1.1,1.2c0,0.1-0.1,0.1-0.1,0.2 c-0.3,0.3-0.7,0.6-1,0.9c-0.3,0.3-0.7,0.5-1,0.8c0,0-0.1-0.1-0.1-0.1c0.2-0.2,0.4-0.5,0.7-0.8c-0.1,0-0.2,0-0.2,0 c-0.3,0.3-0.6,0.5-1,0.8c-0.3,0.3-0.6,0.5-0.9,0.8l-1,0.9c-0.3,0.3-0.6,0.7-1,0.7c-0.5,0.1-0.5,0.5-0.8,0.7 c-0.9,0.7-1.8,1.3-2.7,1.9c-1.2,0.7-2.2,1.7-3.2,2.6c-1,0.9-2.3,1.4-3.3,2.4c0,0-0.1,0-0.2,0c0-0.1,0-0.2,0-0.3c-0.3,0-0.6,0-1,0.1 c0.3-0.4,0.4-0.7,0.6-1C50.2,73.7,50,74.5,52.9,71.2"></path>
								<path class="fill-mode" d="M84.4,23.7c0.4-0.1,0.6-0.2,0.8-0.2c0.6-0.3,1.2-0.5,1.7-1.1c0.5,0.2,0.6-0.4,1.1-0.4c0.5,0,0.7-0.4,1-0.6 c0.5-0.3,1.1-0.4,1.6-0.7c0.8-0.5,1.7-0.8,2.5-1.3c0.5-0.3,1-0.5,1.5-0.8c0.8-0.4,1.7-0.7,2.5-1.2c0.7-0.5,1.6-0.8,2.4-1.2 c0.6-0.3,1.4-0.5,2-0.8c1.3-0.8,2.8-1.2,4.1-1.7c0.4,0.3,0.7,0.5,1.1,0.8c-0.3,0.5-0.2,1.1-0.4,1.8c-0.2,0.1-0.5,0.3-0.8,0.3 c-0.5,0-1-0.1-1.3,0.4c-1.7,0.4-3,1.4-4.6,1.9c-0.9,0.3-1.8,0.7-2.6,1.2c-0.9,0.6-1.9,0.6-2.7,1.4c-1.7,0.6-3.2,1.6-4.8,2.4 c-0.7-0.1-1.1,0.7-1.7,0.9c-0.8,0.2-1.4,1.1-2.4,1c0,0,0,0.1,0,0.1c-0.4,0.5-1.1,0.6-1.6,1.1C83.4,27,83.2,27.1,83,27 c-0.2,0-0.5-0.4-0.6-0.1c-0.1,0.3-0.3,0.3-0.5,0.5c-0.2,0.2-0.4,0.5-0.6,0.7c-0.4,0.2-0.9,0.4-1.3,0.4c-0.5,0-0.4,0.4-0.7,0.7 c-0.3,0-0.7-0.1-1.1-0.1c-0.5,0.5-0.9,1-1.4,1.5c0-0.3,0-0.4,0-0.5c-0.6,0.1-0.7,0.6-0.9,1c-0.2-0.1-0.3-0.2-0.5-0.3 c0.1,0.6-0.7,0.4-0.8,0.8c-0.2-0.1-0.3-0.3-0.5-0.4c-0.1,0.2-0.2,0.4-0.3,0.5c-0.4,0.4-1.1,0.5-1.4,1.1c0,0-0.3,0.1-0.4,0 c-0.3-0.2-0.4,0.2-0.6,0.2c-0.3-0.1-0.3,0.3-0.5,0.3l-0.5-0.6c0.7-1,1.9-1.2,2.7-1.9c0.7,0,0.9-0.5,1.3-0.9 c-0.5,0.2-1.1,0.5-1.6,0.7c0-0.1-0.1-0.1-0.1-0.2c1.1-0.6,2.1-1.2,3.2-1.9l0.1,0.1c-0.4,0.4-0.9,0.8-1.3,1.2 c0.8-0.4,1.6-0.7,2.3-1.1c0.8-0.4,1.5-1,2.2-1.5c-0.4,0-0.8,0.2-1.2,0.4c-0.4,0.2-0.6,0.8-1.3,0.4c0.3-0.3,0.6-0.7,0.9-0.7 c0.5,0,0.7-0.5,1.1-0.5c0.5,0,0.7-0.5,1.1-0.7c0.2-0.1,0.5-0.2,0.7-0.3c0.1,0,0.3,0.1,0.4,0.2c-0.7,0.1-1,0.6-1.3,1.1 c0.6-0.6,1.6-0.5,2-1.3c-0.2-0.2-0.6,0.4-0.7-0.3c0.3-0.1,0.6-0.3,0.9-0.4c0.6-0.3,1.1-0.7,1.7-1.1c0.3-0.1,0.6-0.2,0.9-0.3 c0.1,0,0.2,0.1,0.3,0.2c-0.1,0.1-0.2,0.2-0.2,0.3c-0.1,0.1-0.1,0.2-0.2,0.3c0,0,0.1,0,0.1,0.1l0.9-0.7C85,23.9,84.8,23.9,84.4,23.7"></path>
							</svg>
						</figure>

						<!-- Hero image -->
						<img src="assets/images/bg/01.jpg" class="rounded" alt="hero-img">

						<!-- Visitor box START -->
						<div class="d-inline-block bg-dark rounded-4 position-absolute start-0 bottom-0 mb-md-4 ms-md-n5 p-3">
							<div class="d-flex align-items-center">
								<h6 class="text-white mb-0 me-2">5K+</h6>
								<ul class="avatar-group mb-0 align-items-center">
									<li class="avatar avatar-xs">
										<img class="avatar-img rounded-circle" src="assets/images/avatar/06.jpg" alt="avatar">
									</li>
									<li class="avatar avatar-xs">
										<img class="avatar-img rounded-circle" src="assets/images/avatar/05.jpg" alt="avatar">
									</li>
									<li class="avatar avatar-xs">
										<img class="avatar-img rounded-circle" src="assets/images/avatar/02.jpg" alt="avatar">
									</li>
									<li class="avatar avatar-xs">
										<img class="avatar-img rounded-circle" src="assets/images/avatar/03.jpg" alt="avatar">
									</li>
									<li class="avatar avatar-xs">
										<img class="avatar-img rounded-circle" src="assets/images/avatar/04.jpg" alt="avatar">
									</li>
								</ul>
							</div>
							<p class="text-white mb-0 mt-2">Total visitors per month</p>
						</div>
						<!-- Visitor box END -->

						<!-- Trustpilot review START -->
						<div class="d-inline-block card card-body shadow rounded-4 position-absolute end-0 top-0 p-3 me-lg-n3 me-xxl-n7 mt-n5 d-none d-sm-block">
							<img src="assets/images/elements/trustpilot.svg" class="light-mode-item h-20px mb-2" alt="Client-img">
							<img src="assets/images/elements/trustpilot-light.svg" class="dark-mode-item h-20px mb-2" alt="Client-img">
							<div class="d-flex align-items-center">
								<img src="assets/images/elements/trustpilot-star.svg" class="h-30px" alt="rating-img">
								<h6 class="font-base fw-bold ms-1 mb-0">4.8/5.0</h6>
							</div>
							<p class="small mb-0 mt-2">Reviewed by 365 users</p>
						</div>
						<!-- Trustpilot review END -->
					</div>
					<!-- Hero Image END -->

				</div>
			</div>
		</section>

		<section class="pb-0">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-3 mb-2 mb-md-0">
						<h5 class="pe-6">100+ Companies trust us</h5>
					</div>

					<div class="col-md-9">
						<!-- Slider START -->
						<div class="swiper swiper-initialized swiper-horizontal swiper-backface-hidden" data-swiper-options="{
								slidesPerView: 2, 
								spaceBetween: 50,
								breakpoints: { 
									576: {slidesPerView: 3}, 
									992: {slidesPerView: 4}, 
									1200: {slidesPerView: 5}
								}}">

							<!-- Slider items -->
							<div class="swiper-wrapper align-items-center" id="swiper-wrapper-d501451f1b936b47" aria-live="off" style="transition-duration: 0ms; transform: translate3d(-175px, 0px, 0px); transition-delay: 0ms;">
								
								<div class="swiper-slide swiper-slide-prev" role="group" aria-label="4 / 6" data-swiper-slide-index="3" style="width: 125px; margin-right: 50px;">
									<img src="assets/images/client/04.svg" class="grayscale" alt="client-img">
								</div>
								<div class="swiper-slide swiper-slide-active" role="group" aria-label="5 / 6" data-swiper-slide-index="4" style="width: 125px; margin-right: 50px;">
									<img src="assets/images/client/05.svg" class="grayscale" alt="client-img">
								</div>
								<div class="swiper-slide swiper-slide-next" role="group" aria-label="6 / 6" data-swiper-slide-index="5" style="width: 125px; margin-right: 50px;">
									<img src="assets/images/client/01.svg" class="grayscale" alt="client-img">
								</div>
								<div class="swiper-slide" role="group" aria-label="1 / 6" data-swiper-slide-index="0" style="width: 125px; margin-right: 50px;">
									<img src="assets/images/client/01.svg" class="grayscale" alt="client-img">
								</div>
								<div class="swiper-slide" role="group" aria-label="2 / 6" data-swiper-slide-index="1" style="width: 125px; margin-right: 50px;">
									<img src="assets/images/client/02.svg" class="grayscale" alt="client-img">
								</div>
								<div class="swiper-slide" role="group" aria-label="3 / 6" data-swiper-slide-index="2" style="width: 125px; margin-right: 50px;">
									<img src="assets/images/client/03.svg" class="grayscale" alt="client-img">
								</div>
							</div>

						<span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
						<!-- Slider END -->
					</div>
				</div> <!-- Row END -->
			</div>
		</section>

        <section class="sectionlevel container-fluid py-5 my-5 py-lg-5  ">
          <div class="text-center mt-4 mb-3">
            <div class="masthead-followup-icon d-inline-block mb-2 text-light bg-danger">
             
            </div>
              <h2 class="display-5 fw-normal">Insta Contract</h2>
            <p class="col-md-10 col-lg-8 mx-auto lead">Streamline your Event Contracts with our online Contract Form.</p>
            <small class="col-md-10 col-lg-8 mx-auto lead"></small>            
            <a href="#opening" class="btn btn-lg btn-md-sm btn-outline-primary mb-3">Create</a>
          </div>
        </section>

		<section class="sectionlevel">
			<div class="container">
				<div class="row g-4 align-items-xl-center">

					<!-- About image START -->
					<div class="col-lg-7">
						<div class="row pe-xl-5">
							<div class="col-sm-6">
								<!-- About image  -->
								<img src="{{asset('public/image/02.jpg')}}" class="rounded" alt="about-img">

								<!-- SVG decoration -->
								<figure class="text-end me-3 mt-n3">
									<svg class="fill-primary" width="106px" height="96px" viewBox="0 0 106 96" style="enable-background:new 0 0 106 96;" xml:space="preserve">
										<path d="M104.7,50.4c0,0.1-0.1,0.4-0.3,0.7c0.1,0.1,0.2,0.1,0.4,0.2c0.1,0.3,0.5,0.6,0.3,1c-0.2,0.4,0.4,0.7-0.1,1 c0.1,0.7-0.4,1.3-0.8,1.8c-0.3,0.5-0.4,1.1-0.9,1.5c-0.4,0.4-0.6,0.9-1,1.4c-0.3,0-0.5,0-0.9,0c0.1,0.2,0.1,0.4,0.2,0.6 c-0.1,0.1-0.2,0.3-0.4,0.5c0.1,0.3,0.2,0.6,0.3,1c-0.2,0.2-0.3,0.4-0.5,0.6c0.1,0,0.3,0.1,0.5,0.2c-0.3,0.2-0.5,0.3-0.7,0.5 c0,0.1,0.1,0.1,0.2,0.2c-0.7,0.3-1.4-0.4-2.2-0.1c-0.5,0.4-0.9,1.1-1.6,1.4c-0.3,0.1,0,0.6-0.5,0.6c-0.2,0,0,0.6-0.5,0.4 c-0.2,0.5-0.6,0.7-1,1.1c-0.3,0.3-0.6,0.6-0.8,1c-0.2,0.3-0.4,0.6-0.6,0.9c-0.2,0.3-0.4,0.5-0.6,0.8c-0.1,0.2-0.1,0.6-0.3,0.8 c-0.2,0.1-0.4,0.3-0.5,0.6c-0.2-0.1-0.4-0.2-0.5-0.3c-0.5,0.2-0.9,0.4-1.4-0.1v-1.2c-0.9-0.5-1.8-0.9-2.2-2.1c0-0.4-0.1-0.9,0.2-1.3 c-0.5-1-0.1-1.9,0.4-2.8c0.6-1.1,1.4-1.9,2.3-2.8c-0.5-0.8-1.1-1.6-1.6-2.4c-0.3-0.6-0.7-1.2-0.7-1.8c0-0.7-0.2-1.4,0.2-2.1 c0.2-0.3,0-0.8,0.2-1.2c0.1-0.2,0.2-0.5,0.4-0.7c0.1-0.1,0.1-0.3,0.2-0.7c0.2-0.2,0.7-0.4,0.7-0.7c0.1-0.5,0.8-0.3,0.8-0.9 c0.2,0.1,0.2,0.2,0.3,0.3c0.3-0.1,0.6-0.2,0.9-0.3c0.1,0.2,0.2,0.4,0.3,0.6c-0.2,0.4-0.5,0.9-0.8,1.4c0.6-0.1,1-0.1,1.4-0.1 c0.2,0.2,0.2,0.2,0.3,0.3c-0.2,0.3-0.3,0.6-0.5,1c0.4,0,0.6,0.1,1,0.1c-0.1,0.4-0.2,0.8-0.3,1.2c-0.1,0.1-0.3,0.3-0.5,0.4 c0.1,0.1,0.1,0.2,0.2,0.2c0.1-0.1,0.3-0.2,0.5-0.3c0.1,0.2,0.1,0.3,0.1,0.4c-0.3,0.2-0.6,0.3-1,0.5c0.2,0.1,0.3,0.1,0.5,0.2 c-0.3,0.3-0.5,0.5-0.8,0.8c0.4,0.3,0.7,0.6,1.1,0.9c0.6,0.1,1-0.1,1.4-0.5c1-0.9,2.1-1.6,3.1-2.5c1-0.9,2.1-1.8,2.8-3 c0.2-0.3,0.5-0.5,0.7-0.7h1.2c0.1,0.1,0.2,0.2,0.3,0.4c-0.1,0.4-0.3,0.8-0.4,1.2c0.4-0.1,0.7-0.2,1-0.3 C104.4,50,104.5,50.1,104.7,50.4"></path>
										<path d="M33,74.2c-0.4,0.1-0.7,0.2-1.1,0.3c0.1-0.2,0.2-0.3,0.2-0.5c-0.3-0.4-0.6-0.7-1.1-0.7c0-0.2-0.1-0.3-0.1-0.4H30 c-0.1-0.1-0.2-0.1-0.2-0.2c-0.1-0.4-0.2-0.9-0.4-1.3c-0.3-0.4-0.2-0.9-0.2-1.3c0-0.3,0.1-0.7,0.2-1c0.3-1.2,0.8-2.4,1.4-3.5 c0.4-0.7,0.8-1.3,1.2-2c0.4-0.6,1-1.2,1.4-1.8c-0.1-0.1-0.3-0.2-0.4-0.3c-1.5-0.9-2.8-2-4-3.2c-0.6-0.6-0.6-1.4-0.7-2.1 c-0.1-0.3,0-0.6,0-0.9c0.3-0.6,0.9-0.6,1.5-0.9c0.2,0.4,0.4,0.7,0.6,1.1c0,0,0.1-0.1,0.2-0.2c0.1,0.1,0.2,0.2,0.3,0.3 c0.2,0.7,0.8,1,1.4,1.3c1.2,0.6,2.4,1.2,3.7,1.8c0.3-0.3,0.6-0.8,1-1c0.4-0.2,0.4-0.9,1-0.8c-0.1-0.1-0.2-0.2-0.2-0.3 c0.2-0.1,0.4-0.3,0.7-0.5c0.1-0.2,0.2-0.5,0.3-0.8c0.2,0,0.4,0,0.6,0c-0.1-0.1-0.2-0.2-0.3-0.3c0.5-0.1,0.5-0.6,0.8-0.8 c0.3-0.3,0.5-0.7,0.8-1.1c0.1,0,0.1,0.1,0.3,0.2c0.1-0.1,0.1-0.3,0.2-0.4c0.1,0.1,0.2,0.1,0.3,0.2c0.1-0.8,0.6-1.4,1.1-2 c0.5-0.6,0.9-1.3,1.7-1.7c0.1,0.1,0.2,0.2,0.4,0.3c-0.3,0.6-0.6,1.2-1.3,1.5v0.9c0.2,0,0.3,0,0.3-0.1c0.1-0.2,0.2-0.5,0.3-0.6 c0.5-0.4,1-0.8,1.5-1.3c0,0.4,0.1,0.7,0.1,1c-0.2,0.1-0.3,0.1-0.4,0.2c0,0,0.1,0.1,0.1,0.1c0.3-0.1,0.5-0.1,0.9-0.2 c0.1,0.2,0.2,0.4,0.3,0.6c-0.1,0.1-0.1,0.2-0.2,0.2c0,0.3,0.4,0.6,0.1,1c-0.1-0.1-0.2-0.2-0.2-0.2c0,0.1-0.1,0.1-0.1,0.2 c0,0.1,0.1,0.3,0.2,0.4c-0.1,0.6-0.5,1-0.9,1.3c-0.4,0.4-0.8,0.7-1.4,1.1c0.2,0.1,0.4,0.2,0.6,0.3c-0.1,0.2-0.2,0.4-0.3,0.6 c0,0.1,0.1,0.1,0.2,0.3c-0.2,0-0.5,0.1-0.7,0.1c0.1,0.2,0.1,0.4,0.2,0.6h-0.8c-0.1,0.3-0.3,0.5-0.4,0.8c0.1,0.1,0.2,0.2,0.3,0.3 c-0.2,0-0.4,0.1-0.7,0.1c0.1,0.2,0.1,0.4,0.2,0.6c-0.2,0-0.4,0.1-0.7,0.1c0.1,0.2,0.1,0.4,0.3,0.7c-0.3-0.1-0.5-0.2-0.8-0.3 c-0.1,0.2-0.2,0.5-0.4,0.7c0,0.1,0.1,0.2,0.1,0.2c0.1,0,0.2,0,0.3,0.1c0.3,0.2,0.4,0.6,0.8,0.8c0.4,0.2,0.5,0.6,0.8,0.9 c0.2,0.3,0.4,0.5,0.3,0.9c0,0.1,0.1,0.3,0.2,0.4c-0.1,0.1-0.1,0.2-0.3,0.4c-0.3,0-0.5,0.4-1.1,0.2c-1-0.4-2-0.7-3-0.8 c-0.1,0-0.1-0.1-0.2-0.2c-0.3,0.3-0.6,0.7-1,1.1c0,0,0,0.2,0,0.4c-0.2,0-0.4,0.1-0.7,0.1c0.2,0.3,0.4,0.5,0.6,0.9 c-0.3-0.1-0.4-0.1-0.7-0.2c0,0.1-0.1,0.2-0.2,0.3c0.1,0.4,0,0.6-0.4,0.8c-0.1,0.5-0.2,0.9-0.4,1.3c-0.2,0.1-0.3,0.1-0.4,0.2L36,69 c-0.3,0.3-0.7,0.5-1,0.8c-0.2,0.3-0.3,0.7-0.5,1.1c0,0,0.1,0.1,0.2,0.3c-0.2,0.3-0.5,0.5-0.7,0.8c0.1,0.1,0.2,0.2,0.3,0.3 c-0.2,0.2-0.3,0.4-0.5,0.6v0.7C33.4,73.7,33.2,74,33,74.2"></path>
										<path d="M60.7,78.7c0.5,0.6,0.5,0.6,1.2,0.3c0,0.2,0,0.4,0.1,0.5c0,0.1,0.1,0.2,0.2,0.3C62.1,79.9,62,80,62,80 c0.2,0.1,0.3,0.1,0.6,0.3c-0.3,0.4-0.5,0.7-0.7,1.1c0.3,0.6-0.3,0.7-0.4,1c-0.1,0.5-0.7,0.6-0.7,1.1c0,0.6-0.6,0.6-0.9,1 c-0.2,0.3-0.6,0.5-0.7,0.9c0.1,0.2,0.2,0.3,0.3,0.5c-0.3,0.2-0.6,0.4-0.9,0.5l-0.7,0.3c-0.2,0.3-0.4,0.5-0.7,0.8v0.2 c-0.7,0.5-1.4,1-2.2,1.6c0.2,0.1,0.4,0.2,0.6,0.3c-0.3,0.4-0.6,0.9-1,1.3c0.9,0.3,1.7,0.6,2.5,0.9c-0.1,0.2-0.2,0.3-0.2,0.5 c0.4,0.1,0.7,0.3,1.1,0.4v0.5c0.3,0.2,0.5,0.4,0.7,0.6c0,0.3,0,0.5,0,0.8l0.4,0.4l-1,0.9c-0.2,0.3-0.5,0.2-0.8,0 c-0.1-0.1-0.2-0.1-0.3-0.1c-1.2,0-2.2-0.4-3.3-0.8c-0.8-0.3-1.5-0.7-2.3-1c-0.2,0.2-0.6,0.4-0.6,0.8c-0.5,0.1-0.9,0.2-1.4,0.3 c-0.2-0.2-0.4-0.4-0.6-0.6c0.1-0.1,0.1-0.2,0.3-0.3c-0.1-0.2-0.2-0.5-0.3-0.6c-0.3,0.1-0.7,0.1-1,0.1c-0.2-0.3-0.3-0.6-0.5-0.9 c-0.1,0.1-0.1,0.1-0.1,0.1c-0.2-0.3-0.5-0.5-0.8-0.9c0.1-0.8-0.4-1.7-0.3-2.7c0-0.2-0.1-0.5-0.3-0.7c-0.7-0.6-0.7-1.5-1-2.3 c-0.1-0.3-0.2-0.7-0.3-1c0-0.6-0.1-1.1,0-1.7c0.2-0.9,0.3-1.8,1.3-2.1c0.3-0.1,0.7-0.1,1.1-0.2v1.8c0.4-0.2,0.6-0.4,1-0.7 c0.1,0.2,0.1,0.3,0.2,0.5c0.1,0,0.1-0.1,0.2-0.1v1c0.2-0.1,0.3-0.2,0.5-0.2c0.5,0.4,0.5,1,0.4,1.5c0.2,0.1,0.3,0.1,0.5,0.2 c-0.1,0.2-0.2,0.5-0.3,0.8c0.1,0,0.2,0,0.2,0c0.1-0.1,0.1-0.2,0.2-0.2c1-0.4,1.5-1.4,2.4-1.7c0.2-0.7,0.9-0.9,1.4-1.3 c0.4-0.5,1.1-0.8,1.6-1.2c0.5-0.4,0.8-1.1,1.5-1.3c0.4-0.8,1.1-1.4,1.9-1.9c0-0.6,0.7-0.6,0.7-1.2h1c0.1,0.1,0.2,0.2,0.3,0.3 c-0.5,0.2-0.7,0.7-1,1.2c0.7,0.1,1.1-0.7,1.7-0.3C61.1,78.5,61,78.6,60.7,78.7"></path>
										<path d="M58.1,66.7c-0.1-0.5,0.7-0.6,0.3-1.1c-0.1,0.1-0.2,0.2-0.2,0.2c0,0-0.1-0.1-0.1-0.1c-0.1-0.6-0.1-1.1,0.3-1.5 c0.4-0.5,0.9-1,1.3-1.5c0.1-0.2,0.2-0.4,0.3-0.6c-0.2-0.5-0.5-1.1-0.7-1.6c-0.3-0.6-0.3-1.2-0.5-1.8c-0.2-0.3,0.2-0.9,0.2-1.2 c-0.1-0.4-0.4-0.8,0-1.2c0-1.1,0.8-1.8,1.4-2.6h1.9c0.1,0.1,0.2,0.2,0.4,0.4c-0.3,0.4-0.6,0.7-0.9,1.1c0,0.1,0.1,0.3,0.2,0.5 c0.1,0,0.3,0.1,0.4,0c0.3-0.3,0.7-0.2,1-0.2c0.1,0.3,0.2,0.5,0.3,0.7c-0.2,0.2-0.3,0.4-0.6,0.8c0.4,0.1,0.7,0.1,1,0.1v1.1 c0.8,0,0.8-0.9,1.5-0.9c0.3-0.4,0.7-0.8,1.1-1.1c0.4-0.4,0.9-0.8,1.3-1.3c0.4-0.4,0.8-0.8,1.1-1.2c0.4-0.4,0.7-0.9,0.9-1.2 c0.5-0.2,0.7-0.3,1.1-0.4c0.1,0.2,0.3,0.3,0.3,0.5c0,0.1-0.1,0.3-0.2,0.5c-0.1,0.2-0.2,0.3-0.2,0.6c0.3-0.1,0.7-0.3,1-0.4 c0.2,0.4,0.4,0.8,0.7,1.4c0,0,0,0.2,0,0.4c0,0.2,0.1,0.3,0.2,0.5c0,0.1-0.1,0.2-0.2,0.4c0.1,0.1,0.2,0.2,0.3,0.3 c-0.7,1-1.2,2.1-2,3.1c-0.6,0.9-0.5,0.9-1,1.2c0.1,0.1,0.1,0.2,0.2,0.2c-0.9,1-1.8,2-2.7,3v0.4c0.7,0.5,1.4,0.9,2.1,1.3 c-0.1,0.2-0.2,0.3-0.3,0.5c0.3,0.2,0.5,0.7,1,0.5c0.1,0.2,0.2,0.4,0.3,0.6c-0.1,0.1-0.1,0.2-0.3,0.4c0.3,0.3,0.5,0.5,0.8,0.8 c-0.1,0.3-0.2,0.5-0.3,0.8c0.1,0.1,0.2,0.3,0.2,0.4c0,0.1-0.1,0.2-0.1,0.2c-0.1,0.1-0.3,0.1-0.4,0.2c-0.5,0.5-0.6,0.6-1.2,0.4 c-0.8-0.3-1.6-0.4-2.4-0.8c-1-0.5-1.8-1.2-2.8-1.9c-0.4,0.3-0.9,0.7-1.3,1.2c-0.4,0.5-1,0.8-1.8,1.1c0.1-0.2,0.2-0.3,0.3-0.5 c-0.5,0.1-0.9,0.2-1.3,0.3l-0.1-0.1c0.3-0.2,0.5-0.4,0.8-0.6l-0.4-0.4h-0.8c-0.1-0.3-0.2-0.5-0.4-0.9h-0.9 C58.3,67.2,58.2,66.9,58.1,66.7"></path>
										<path d="M63,44.6c-0.4,0.1-0.7,0.2-1.2,0.3c-0.5-0.4-1.1-0.8-1.7-1.2c-0.7-0.5-1.4-1.2-2.2-1.5 c-0.2-0.1-0.4-0.1-0.7-0.2c-0.3-0.5-0.4-1.4-1.3-1.3c-0.4-0.4-0.5-1.1-1.1-1.1c-0.2-0.4-0.3-0.8-0.6-1c-1.2-1.1-2.1-2.5-2.9-4.2 c-0.1-0.5-0.1-1.2-0.2-1.9c-0.2-1.1,0.4-2,1.3-2.6c0.3-0.2,0.4-0.5,0.8-0.5c0.3,0,0.6-0.1,1-0.2c0.1,0.1,0.3,0.2,0.5,0.4 c-0.3,0.5-0.9,0.9-1,1.6c0.7,0.2,1-0.6,1.7-0.6c0.1,0.1,0.2,0.2,0.4,0.3c-0.3,0.4-0.4,0.6-0.7,1.1c0.5-0.2,0.8-0.2,1-0.3 c0.3-0.4,0.8-0.6,1.2-1.1c0.3-0.4,0.7-0.8,1.2-1.1c0.7-0.4,1.2-1.1,1.8-1.6c0.9-0.7,1.8-1.6,2.8-2.2c0.4-0.2,0.7-0.7,1-1 c0.3-0.3,0.8-0.5,0.9-0.9h1.5v1c0,0-0.2,0.2-0.4,0.4c0.2,0,0.4-0.1,0.6-0.1c0.2,0,0.4-0.1,0.7-0.2c0,0.7,0,1.4,0.5,1.8 c-0.1,0.1-0.2,0.2-0.3,0.4c0.2,0.1,0.3,0.2,0.7,0.4c-0.4,0.1-0.5,0.1-0.6,0.2c0.1,0.1,0.1,0.3,0.2,0.4c0,0.1,0,0.3,0,0.4 c-0.4,0.6-0.8,1.1-1.3,1.8c-0.1,0-0.3,0-0.5,0.1c0.1,0.1,0.1,0.2,0.2,0.3c-0.1,0.2-0.1,0.3-0.2,0.5c-1,0-1,1-1.6,1.4 c0.1,0.2,0.2,0.3,0.2,0.3c-0.4,0.4-0.8,0.8-1.2,1.2c0,0,0,0,0,0c-0.2,0.2-0.4,0.4-0.6,0.6c-0.1,0-0.1-0.1-0.2-0.1V35 c-0.1-0.1-0.2-0.2-0.4-0.3c0,0.3,0.1,0.4,0.1,0.7c-0.3,0.4-0.6,0.8-1,1.3c-0.2-0.1-0.3-0.2-0.4-0.3c-0.4,0.5-0.8,1-1.2,1.5 c0.2,0.1,0.3,0.2,0.5,0.3c-0.2,0.3-0.4,0.5-0.5,0.7c0,0.1,0,0.2,0.1,0.2c0.7,0.8,1.5,1.5,2,2.3C62.6,42.3,63.4,43.3,63,44.6"></path>
										<path d="M78.7,28.3c0.1-0.1,0.1-0.1,0.2-0.2c0-0.1-0.1-0.1-0.1-0.2c-0.3-0.3-0.7-0.5-0.9-0.8c-0.2-0.3-0.5-0.5-0.7-0.7 c-0.3-0.3-0.7-0.8-0.7-1.2c0-0.7-0.1-1.4,0.1-2.2c0.3-1.3,1-2.3,1.9-3.2c1.1-1.1,2.3-2.3,3.5-3.5c-0.5-0.4-0.5-1.1-1.2-1.3 c-0.3-0.6-0.6-1.2-0.9-1.8c-0.3-0.5-0.2-1.1-0.2-1.7c0-0.4,0-0.8,0-1.2c0.4-0.5,0.8-1,1.1-1.4h1.9c-0.3,0.5-0.6,1-0.8,1.4 c0.7,0.5,1-0.6,1.6-0.3c0.4,0.5-0.3,0.8-0.6,1.3c0.4-0.1,0.7-0.2,1-0.2c0.2,0.5,0.1,1-0.2,1.5c0.2,0.1,0.3,0.1,0.5,0.2 c0.1,0.1-0.1,0.2-0.2,0.4c0.2,0.3,0.4,0.6,0.7,1c1.9-2,4.2-3.3,5.7-5.5h1.1c-0.1,0.4-0.2,0.7-0.3,1.1c0.3-0.1,0.6-0.2,0.9-0.3v0.9 c0.2,0,0.3,0.1,0.4,0.1c0,0.1,0.1,0.1,0.1,0.2c0,0.1,0,0.2,0,0.3c0.2,1.2-0.4,2.1-1,3c-0.7,1-1.4,1.8-2.2,2.8c0.6,0.7,1.4,1,2.2,1.6 c0,0.1,0,0.3,0.1,0.5c0.2,0.3,0.5,0.5,0.6,0.8c0.2,0.7,0.7,1.4,0.4,2.3c-0.1,0-0.3,0.1-0.5,0.2c-0.2,0.1-0.4,0.2-0.6,0.2 c-0.3-0.3-1-0.2-0.9-0.8c-0.7-0.2-1.3-0.4-1.9-0.5c-0.1-0.2-0.3-0.4-0.4-0.7h-1.2c0-0.1-0.1-0.2-0.1-0.4c-0.5-0.4-0.8,0.1-1.1,0.1 c-0.4,0.4-0.7,0.8-1,1.1c-0.1-0.1-0.2-0.1-0.3-0.2c-0.1,0.2-0.3,0.4-0.5,0.6c0,0,0,0,0.1,0.2c-0.5,0.1-0.6,0.7-0.8,1.1 c-0.2-0.1-0.3-0.2-0.5-0.3c0,0.2-0.1,0.4-0.1,0.6c-0.1,0-0.2,0-0.4,0.1c0,0.5-0.1,1-0.8,0.9c-0.2,0.3-0.6,0.6-0.6,0.8 c0.1,0.7-0.5,1-0.7,1.6c-0.1,0.7-0.1,0.7,0.1,1.1c-0.5,0.4-1,0.7-1.7,0.8C78.9,28.5,78.8,28.4,78.7,28.3"></path>
										<path d="M12.6,15.5c-0.3,0-0.5,0.1-0.7,0.1c0.1,0.1,0.2,0.2,0.3,0.4c-0.3,0.5-0.8,0.8-1.2,1.3l0.2,0.2 c-0.3,0.2-0.6,0.5-0.8,0.6c-0.1,0.4,0.2,0.8-0.3,1c0.4,0.3,0.8,0.5,1.2,0.8c1.2,0.8,2.5,1.5,3.4,2.6c0.6,0.6,1.1,1.2,1.1,2.1 c0,0.2,0.2,0.3,0.3,0.5c-0.3,0.2-0.7,0.4-1.1,0.7c-2.3-1.3-4.6-2.5-6.7-4.2c-0.2,0.1-0.5,0.2-0.5,0.3c-0.2,0.7-0.7,1.2-1.2,1.6 c-0.1,0.1,0,0.2-0.1,0.3c-0.2,0-0.4,0-0.7,0.1C6,24.1,6,24.2,6.1,24.5c-0.4,0.4-0.8,0.9-0.9,1.6c-0.1,0.4-0.5,0.7-0.8,1.2v2.5 c-0.2,0-0.4,0-0.6,0c0,0.1-0.1,0.3-0.1,0.4H2.8c-0.1-0.4-0.2-0.7-0.4-1.1c-0.2,0.1-0.4,0.2-0.7,0.3c-0.1-0.2-0.1-0.3-0.1-0.4 c-0.1,0-0.1-0.1-0.2-0.1c-0.5,0.1-0.8-0.3-0.9-0.6c-0.2-1-0.9-2.1-0.3-3.2c0-1.1,0.7-2,1.1-2.9c0.1-0.3,0.7-0.3,0.5-0.8 c-0.1-0.2,0.3-0.6,0.5-0.9c0.2-0.3,0.4-0.5,0.6-0.8c0.2-0.3,0.5-0.5,0.8-0.8c0.2-0.2,0.4-0.5,0.6-0.8c-1.4-1-2.2-2.5-3.2-3.9 c-0.3-1.3-0.8-2.6-0.6-4.2c0.3-0.4,0.7-0.8,1.2-1.3c0.5,0.1,1-0.2,1.5,0.3c-0.3,0.4-0.6,0.8-0.9,1.2c0.1,0.1,0.2,0.2,0.2,0.2 C3.1,10.6,3.4,9.7,4,9.9c0.1,0.2,0.2,0.4,0.3,0.6c-0.2,0.1-0.4,0.3-0.7,0.4C3.8,11,3.9,11.1,4,11.2c0.3-0.3,0.6-0.3,1,0.1 c0,0.3,0.2,0.6-0.2,0.9c0.2,0.1,0.3,0.1,0.5,0.3C5.1,12.7,5,13,4.8,13.2c0.2,0.1,0.3,0.1,0.6,0.2c-0.3,0.1-0.4,0.1-0.6,0.2 c0,0.2,0,0.4,0.1,0.6c0.4,0.6,0.9,1.1,1.4,1.8c0.3-0.3,0.5-0.4,0.7-0.6c1.2-1.2,2.3-2.5,3.8-3.4c0-0.4,0.4-0.4,0.6-0.6 c0.2-0.3,0.5-0.5,0.6-0.7h0.8c-0.3,0.5-0.9,0.8-0.7,1.5c0.5-0.3,1-0.6,1.6-0.9c-0.1,0.3-0.1,0.6-0.1,0.9c0.2,0.1,0.5,0.3,0.8,0.4 c-0.1,0.2-0.2,0.3-0.2,0.5c0.1,0,0.2,0,0.3,0.1c0,0,0.1,0.1,0,0.1c-0.3,0.4-0.6,0.7-0.8,1.1C13.4,14.8,12.9,15.1,12.6,15.5"></path>
										<path d="M33.3,27c0.9-1.1,1.7-2,2.4-3c0.7-0.9,1.3-1.8,1.9-2.8c-0.1-0.1-0.1-0.2-0.3-0.3c0.2-0.2,0.4-0.4,0.6-0.7h0.7 c0.3,0.3,0.5,0.7,0.8,0.8c0.4,0.1,0.4,0.4,0.6,0.7c0.5,0.8,0.9,1.6,0.5,2.7c-0.3,0.6-0.5,1.3-0.8,1.9c-0.1,0.2-0.1,0.4-0.2,0.7 l-0.6,0.6v0.7c-0.4,0.8-0.8,1.5-1.2,2.2c0.6,0.4,1.1,0.8,1.6,1.1c1.1,0.7,1.9,1.5,2.5,2.7c0.1,0.3,0.2,0.5,0.3,0.9 c0,0.1-0.1,0.3-0.2,0.5c-0.2,0.1-0.5,0.2-0.7,0.3c-0.5-0.2-1-0.3-1.4-0.5c-0.4-0.2-0.9-0.4-1.3-0.6c-0.1-0.7-0.8-0.4-1.1-0.8 c-0.3-0.4-0.8-0.5-1.3-0.8c-1.5,1.5-2.8,3.1-4,4.9c-0.1,0.1-0.1,0.3-0.1,0.5c-0.5,0.4-1,0.3-1.5,0v-0.4c-0.7-0.4-1.3-0.8-2-1.2 c-0.3-0.4-0.2-1-0.4-1.5c-0.2-0.5,0-1-0.1-1.4c0.7-1.7,1.6-3.1,2.9-4.4v-0.8c-0.7-0.5-1.2-1.3-1.6-2.1c-0.2-0.3-0.2-0.6-0.2-0.9 c-0.1-0.6-0.4-1.2-0.3-1.9c0-1.3,0.8-2.2,2-2.6c0.8-0.3,1.5-0.1,2.3-0.2c-0.4,0.9-1.5,0.8-2.1,1.6c1.1,0,1.7-1.1,2.8-0.9 c0,0.3-0.1,0.5-0.1,0.8c0.2,0.1,0.5,0.2,0.8,0.3v1.4c-0.3,0.5-0.6,1-0.9,1.5C33.2,26.3,33.3,26.6,33.3,27"></path>
										<path d="M52.3,13c-0.4,0.5-0.8,1-1.2,1.6V16c-0.4,0.2-0.8,0.3-1.2,0.5c-0.5-0.5-0.7-1.2-0.9-1.8 c-0.2,0.1-0.4,0.2-0.7,0.3c-0.2-0.3-0.5-0.6-0.7-1c-0.4-1-0.4-2.1-0.4-3.2c0.2-0.4,0.4-0.8,0.6-1.3c-0.3,0-0.6,0-0.7-0.1 c-0.7-0.7-1.5-1.5-2.1-2.3c-0.4-0.4-0.7-0.9-0.9-1.4c-0.2-0.8-0.2-1.6-0.3-2.4c0.3-0.5,0.6-1,1.1-1.4c0.4-0.4,1-0.5,1.6-0.8 c0.1,0.2,0.3,0.3,0.4,0.5c-0.1,0.1-1.2,1.1-1.2,1.1c0.1,0.1,0.2,0.2,0.3,0.3c0.5-0.4,1-0.8,1.8-0.5c-0.2,0.3-0.4,0.5-0.6,0.9 c0.4-0.1,0.6-0.2,0.9-0.3c0.1,0.2,0.3,0.4,0.5,0.7c-0.3,0.3-0.6,0.6-0.9,0.9c0.2,0,0.3,0.1,0.5,0.1c-0.3,0.4-0.1,1-0.8,1.2 C48,6.5,48.7,7,49.5,7.5c2.5-2.1,4.9-4.1,7.4-6.1H58c-0.2,0.4-0.3,0.7-0.5,1c0.3,0.2,0.6,0,0.9-0.2c0.8,0.8,1,1.8,0.9,2.8 c-0.3,0.4-0.7,0.9-1.1,1.4c0,0,0.1,0.1,0.2,0.2c-0.2,0-0.4,0.1-0.6,0.1c0.1,0.1,0.2,0.2,0.2,0.2h-0.4c-0.8,1.5-2.1,2.4-3,3.8 c1.3,0.7,2.8,1.3,4.2,2.1c0,0.2,0.1,0.4,0.1,0.7c0.2-0.2,0.3-0.3,0.4-0.4c0.6,0.1,0.5,0.7,1,1c0.4,0.2,0.7,0.8,1,1.2v1.3 c-0.1,0.1-0.2,0.2-0.4,0.4c-1.2-0.1-2.1-0.8-3.2-1.3c0,0-0.1,0.1-0.1,0.1c-0.7-0.2-1.2-1-2-0.9c-0.4-0.5-1.1-0.6-1.6-0.9 C53.5,13.7,53,13.3,52.3,13"></path>
										<path d="M85.2,31c0.2,0.1,0.4,0.2,0.7,0.4c-0.1,0.4-0.1,0.7-0.2,1.2c0.2,0.3,0.3,0.8,0.9,1c0.3-0.4,0.4-0.8,0.9-1 c0.3-0.1,0.6-0.6,0.8-1c0.3-0.4,0.7-0.6,0.9-1.1c0.2-0.4,0.6-0.6,0.9-1c0.3-0.4,0.5-0.8,0.7-1.2h1.3c0.1,0.4,0.2,0.7-0.2,1.1 c0.4,0,0.6,0,0.9,0c0.1,0.5,0.2,1,0.3,1.5c-0.2,0.1-0.3,0.1-0.5,0.2c0,0.1,0,0.2,0.1,0.3c0.3,0.8,0.3,1-0.3,1.6 c-0.3,0.3-0.4,0.6-0.3,0.9c0.2,0.4-0.3,0.2-0.1,0.6c-0.2-0.2-0.3-0.3-0.5-0.4v0.6c-0.2,0-0.4,0.1-0.7,0.1v0.6 c-0.3,0.3-0.5,0.5-0.7,0.7c0.4,0.4,0.8,0.7,1.1,1v0.9c0.2,0.2,0.5,0.5,0.8,0.8c-0.1,0.1-0.1,0.2-0.2,0.4c0.1,0.2,0.3,0.5,0.5,0.9 c-0.2,0.5-0.5,1-0.7,1.4h-0.9c-1.1-0.6-2.2-1.2-3.2-1.8c-0.2,0.3-0.3,0.5-0.5,0.7c-0.2-0.1-0.3-0.2-0.6-0.3v1.1 c-0.3-0.1-0.6-0.2-1-0.4c0.2,0.3,0.2,0.3,0.3,0.5c-0.2,0.2-0.4,0.4-0.8,0.7c-0.1-0.4-0.1-0.7-0.2-1c0.2-0.1,0.3-0.1,0.5-0.2 c0-0.1,0-0.2,0.1-0.3c-0.1,0-0.3-0.1-0.4-0.1c0-0.2,0.1-0.4,0.2-0.7c-0.2,0.2-0.3,0.3-0.3,0.3c-0.5-0.1-0.9-0.2-1.4-0.3 c-0.1-0.1-0.2-0.3-0.3-0.5c0.1-0.3,0.2-0.7,0.3-1.1c0.2,0,0.5,0.1,0.8,0.1c0,0,0-0.1,0-0.1c-0.3-0.1-0.6-0.3-0.8-0.4 c0.2-0.3,0.3-0.6,0.5-0.9c-0.7-1.3-1.6-2.5-2-3.8c-0.3-0.9,0.1-1.9,0.2-2.8c0.1-0.7,0.7-1.2,1.4-1.6c0.1-0.1,0.2-0.1,0.3-0.2h1.1 c0.2,0.2,0.3,0.3,0.4,0.4c-0.2,0.2-0.4,0.4-0.6,0.6v0.7c0.2-0.1,0.5-0.1,0.8-0.2c0.1,0.1,0.3,0.3,0.5,0.4 C85.6,30.6,85.4,30.8,85.2,31"></path>
										<path d="M17.3,42.6c0.1,0.1,0.2,0.2,0.4,0.4c-0.7,0.6-1.4,1.2-2.1,1.8c0,0,0,0.1,0,0.1c0.1,0,0.3,0,0.4-0.1 c0.2-0.2,0.4-0.4,0.6-0.4c0.5-0.3,1-0.5,1.4-0.8c0.4,0.3,0.1,0.6-0.1,1c0.3-0.1,0.4-0.2,0.6-0.2c0.1,0.1,0.2,0.2,0.3,0.3 c0,0.5,0,0.9,0,1.4c-0.1,0.1-0.3,0.3-0.4,0.4c0,0.1,0,0.1,0.1,0.2c0.3,0.2,0.5,0.4,0.8,0.6c0.3,0.2,0.7,0.2,0.7,0.7 c0,0.1,0.1,0.1,0.2,0.2c0.2,0.2,0.5,0.3,0.7,0.5c0.2,0.2,0.3,0.5,0.5,0.8c0,0.2,0,0.5,0,0.8c-0.2,0.2-0.4,0.4-0.5,0.5 c-1.4-0.5-2.8-1-4.2-1.5c-0.3,0.2-0.6,0.3-1,0.5c0,0,0,0,0-0.1c-0.3,0.3-0.6,0.6-1,1c0,0.1,0,0.3,0,0.5c-0.6,0.6-1.2,1.2-1.7,1.7 c-0.3,0.8-0.1,1.6-1.2,1.7c-0.2-0.3-1-0.4-0.8-1.2c-0.2-0.1-0.5-0.1-0.8-0.2c-0.1,0-0.2,0.1-0.3,0.2c-0.3-0.3-0.5-0.6-0.9-1 c-0.1-0.7-0.2-1.6-0.3-2.6c0.9-1,1.9-2,2.8-3.1c-0.4-0.2-0.8-0.4-1.1-0.7c-0.4-0.3-0.6-0.6-1-1c0.1-0.3,0.2-0.6,0.3-0.9 c-0.2-0.1-0.3-0.1-0.5-0.2v-0.8c0.1-0.1,0.1-0.1,0.2-0.2c0.3-0.1,0.7-0.1,1.1-0.2c1.1,0.6,2.3,1.3,3.5,2C15.4,44,16.1,43,17.3,42.6"></path>
									</svg>
								</figure>
							</div>

							<div class="col-sm-6">
								<!-- Skill set -->
								<div class="row mb-4">
									<div class="col-sm-6 mb-4 mb-sm-0">
										<div class="bg-dark rounded text-center p-3">
											<span class="h2 text-white" >10+</span>
											<p class="mb-0 text-white">Years of experience</p>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="bg-colo rounded text-center p-3">
											<span class="h2 text-white">1.2K</span>
											<p class="mb-0 text-white">Happy customers</p>
										</div>
									</div>
								</div>
								
								<!-- About image -->
								<img src="{{asset('public/image/01.jpg')}}" class="rounded" alt="about-img-2">
							</div>
						</div> <!-- Row END -->
					</div>
					<!-- About image END -->

					<!-- About content START -->
					<div class="col-lg-5">
						<span class="heading-color text-dark bg-light small rounded-3 px-3 py-2">🤝 Your gateway to digital success</span>
						<h2 class="my-4 texto-bg">Defining the future of online experiences!</h2>
						<p class="mb-4">Embrace a new era of digital success with Mizzle. Our team combines cutting-edge design with robust development to deliver websites that captivate and convert.</p>
						<!-- List -->
						<ul class="list-group list-group-borderless mb-4">
							<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check-fill text-primary me-2"></i>Emphasis on ROI-driven solutions</li>
							<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check-fill text-primary me-2"></i>Expert team with diverse skill</li>
							<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check-fill text-primary me-2"></i>Proven track record of delivering results</li>
						</ul>
						<!-- Button -->
						<a href="about-v1.html" class="btn btn-dark mb-0">Discover more</a>
					</div>
					<!-- About content END -->

				</div>
			</div>
		</section>

        <section class="sectionlevel bg-dark position-relative overflow-hidden" data-bs-theme="dark">
			<!-- SVG decoration -->
			<figure class="position-absolute top-0 end-0 me-n9 mt-n7 d-none d-md-block">
				<svg class="fill-white" width="768.8px" height="1386px" viewBox="0 0 768.8 1386" style="enable-background:new 0 0 768.8 1386; opacity: 0.07;" xml:space="preserve">
					<path d="M647.6,748.4c1.9,6,3.3,12.2,3.8,18.4c2.2,18.9-0.7,38.9-9.1,61.5c-15.6,41.9-47.8,85.3-81.6,131.5 c-46.1,63.1-94.5,128.4-108.1,199.1c-15.7,80.6,17.2,154.5,101.1,226.1l-0.4,0.4c-188.1-160.7-84.4-301.8,7.3-426.2 c33.9-46,65.8-89.6,81.4-131.2c17.5-46.8,11.8-84.9-18-119.6c-39.6-46.6-86.5-86.9-135.7-129.3C339.1,450.3,184.9,317.3,240.6,4.6 l0.6,0.1C185.7,317,339.7,450.1,488.7,578.7c49.3,42.7,95.8,82.8,135.8,129.6C635.5,721,643.1,734.2,647.6,748.4z"></path>
					<path d="M636.2,722.3c23.4,73.7-25.2,149.2-76.5,228.7c-40.8,63.5-83,129.1-91.9,198.3c-9.9,78.2,25.9,150,109.6,219 l-0.4,0.7c-45-37.1-75.4-74-93.5-112.7c-15.9-34.5-21.2-69.5-16.5-106.8c8.9-69.5,51-135.1,91.9-198.6 C616.4,861.3,671,776.5,622,694.1c-39.6-66.6-102.4-118.8-169-174.2c-68.7-57.3-140-116.4-188.1-195.3 c-25.9-42.6-42.9-86.9-51.5-135.2c-9.8-54.6-9.2-112.9,2-177.9l0.6,0.1c-46.5,271.4,97.9,391.7,237.5,507.9 c66.7,55.4,129.4,107.7,169.1,174.5C628.8,702.7,633.1,712.6,636.2,722.3z"></path>
					<path d="M624.6,687.5c11.7,37,10.5,76.9-3.8,121.9c-13.7,43.3-38.1,87.4-61.8,130.2c-35.7,64.2-72.5,130.4-76.3,198.6 c-4.4,76.5,34.5,146.1,118.7,213.3l-0.6,0.8c-188.5-150.2-114.3-284-42.6-413.2c49.3-88.7,95.7-172.7,62.4-260.6 c-31.5-83-108.5-141.7-189.7-204C363,422.5,293.2,369,244.9,298c-26.1-38.5-43.3-78.4-53-121.8C181.2,127,180.6,75,190.2,16.8l0.9,0 C151,259.3,293.5,368.3,431.2,473.7c81.5,62.2,158.3,121.3,190.1,204.2C622.6,681.2,623.6,684.4,624.6,687.5z"></path>
					<path d="M614.6,642.5c2.2,6.8,4.1,13.7,5.4,20.8c18.1,91.8-22.3,177.4-61.1,260.2c-32.2,68.8-62.8,133.6-62.1,201.3 c0.8,76.3,41.6,143,128.7,209.2l-0.6,0.8c-46.1-35.1-78.8-70-100.3-106.8c-19.1-32.9-28.6-66.6-28.9-103.1 c-0.6-67.6,29.8-132.7,62.3-201.6c38.8-82.7,79-168.2,60.9-259.8c-19.1-96.7-109.2-158.6-204.5-224.2 c-68.3-47.1-139.2-95.6-188.9-160.4c-56.1-73.2-75.8-157-60.3-255.8l0.9,0c-34.9,220.7,109.1,319.7,248.6,415.2 C503.4,499.3,587.6,557.2,614.6,642.5z"></path>
					<path d="M610.8,603.9c4.4,13.9,7.1,28.7,7.8,44.6c3.6,91.5-28.4,172.7-59.3,251.2c-28.5,72.3-55.1,140.5-50.2,208.8 c5.2,76.6,49.9,143,140.1,208.8l-0.4,0.7c-90.5-66-135.2-132.4-140.8-209.2c-5-68.6,21.9-136.9,50.3-209.4 c30.9-78.5,62.6-159.6,59.1-250.9c-4.2-109-107.3-171.8-216.8-238.5c-70.1-42.7-142.8-87-194.2-146.1 c-58.1-66.8-79.9-143.6-66-234.6l1,0.3c-30.7,202.9,117.1,292.9,259.8,379.6C494.9,466.2,584.1,520.8,610.8,603.9z"></path>
					<path d="M610.7,570.7c6.1,19.2,8.4,40.1,6,62.8c-8.3,84.1-33.8,160.3-55.9,227.3c-27.6,83.2-51.4,154.9-42.7,226 c9.5,78.4,58.7,146,155,213l-0.6,0.8c-96.5-66.7-145.8-134.6-155.4-213.2c-8.8-71.4,15.2-143.4,42.8-226.7 c22.3-67.1,47.6-143.3,55.9-227.3c12-120.7-104.2-182.9-227.6-248.9c-72.3-38.6-147.1-78.7-200.6-132.7 c-60.6-61-84.2-131.8-72-216.2l1.2,0.2C89.9,223.5,242,305,389.1,383.7C488.9,437.2,584.6,488.6,610.7,570.7z"></path>
					<path d="M613,540.8c7.3,23.1,8.5,48.7,1.9,77.9c-14,63.3-31.8,122.1-47.4,173.8c-30,99.3-56,185.2-45,263.4 c11.7,84.3,67.2,156.6,174.2,227.2l-0.5,1c-56.6-37.2-98.1-74.3-126.8-113.1c-26.6-35.7-42.3-73.2-47.9-114.7 c-11.1-78.8,14.9-164.4,45.1-264c15.7-51.7,33.4-110.5,47.5-173.6C643.5,486.7,513.4,426,375.8,361.9 c-74.9-34.9-152.2-71-207.6-120.1c-63-55.7-88.3-121-78-199.6l1.1-0.1c-10.5,78.1,14.8,143.1,77.7,198.6 c55.4,49.1,132.7,85.3,207.5,119.9C484,410.7,587.1,458.9,613,540.8z"></path>
					<path d="M617.2,512.9c8.3,26.2,8,56.1-3.5,90.9c-5.6,17.1-11.2,33.9-16.5,50c-47.8,143.4-85.7,256.4-76.5,351.9 c9.7,99.7,71.5,180,200.4,260.4l-0.5,1c-67.3-41.9-115.6-83.2-148.1-126.6c-30.9-41-48.1-85.2-52.8-134.8 c-9.3-95.8,28.8-208.9,76.6-352.3c5.6-16.2,10.9-32.9,16.5-50c47.5-143.5-96.3-201.6-248.6-263.1c-77.7-31.1-157.6-63.5-215.4-108.2 C83.3,181.7,56.1,121.4,65.2,48l1.2,0.2c-9,72.7,18.1,132.8,83.1,183c57.8,44.6,137.6,76.8,214.8,108.1 C480.2,386,591.2,431,617.2,512.9z"></path>
					<path d="M622.4,486.7c9.6,30.2,6.1,63.9-10.3,102.3C465,933,463,1084.4,745.1,1249l-0.8,1.1 c-143.5-83.6-211.5-162.5-227.9-263.5c-17.4-106.8,25.3-236.4,94.5-398.1c18.6-43.4,20.4-80.4,6-113.1 C583.7,401.1,471.1,362,351.5,320.8C189.7,265,22.7,207.3,40,54.3l1.2,0.2C23.8,206.4,190.5,263.8,351.7,319.6 C471.4,361,584.6,400,617.6,475C619.7,478.9,621.2,482.8,622.4,486.7z"></path>
					<path d="M628.6,461.4c10.3,32.5,4.4,69.6-18,112.8c-93.9,182.2-122.9,308.3-94.5,408.8c26.1,92.5,101.7,167,252.8,249 l-0.8,1.1c-151.5-82.5-227.2-157.2-253.6-249.9c-28.5-100.7,0.5-227.1,94.5-409.9c24.3-47.3,29-87.1,14.3-121.5 c-32.7-76-155.1-112-284.6-149.7C172.6,253.7,0.1,203.5,15.1,60.4l1.2,0.2c-14.6,141.8,157,191.9,323.2,240.6 c129.9,37.9,252.4,73.9,285.3,150.4C626.2,454.9,627.5,458,628.6,461.4z"></path>
				</svg>
			</figure>

			<div class="container position-relative">
				<!-- Title -->
				<div class="inner-container-small text-center">
					<span class="bg-light heading-color small rounded-3 px-3 py-2">🚀 Innovative solutions, Measurable results</span>
					<h2 class="h2 text-white mb-0 mt-4">We specialize in the following services</h2>
				</div>

				<!-- Service list START -->
				<div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4 gy-5 gy-md-7 mt-3">
					<!-- Service item -->
					<div class="col">
						<div class="card bg-light h-100">
							<div class="card-body pb-0">
								<!-- Icon -->
								<div class="icon-lg bg-white  rounded-circle mb-4 mt-n5">
									<i class="bi bi-stack fa-fw fs-5"></i>
								</div>
								<!-- Content -->
								<h5 class="mb-3 "><a  class="text-coloro" href="#">Digital Marketing</a></h5>
								<p>Growing brands online through digital channels.</p>
							</div>
							<div class="card-footer bg-light mt-auto pt-2">
								<a class="icon-link icon-link-hover" href="#">Know more<i class="bi bi-arrow-right"></i> </a>
							</div>
						</div>
					</div>

					<!-- Service item -->
					<div class="col">
						<div class="card bg-light h-100">
							<div class="card-body pb-0">
								<!-- Icon -->
								<div class="icon-lg bg-white text-primary rounded-circle mb-4 mt-n5">
									<i class="bi bi-boxes fa-fw fs-5"></i>
								</div>
								<!-- Content -->
								<h5 class="mb-3"><a href="#" class="text-coloro">Product Design</a></h5>
								<p >Creating products that users love and businesses need .</p>
							</div>
							<div class="card-footer bg-light mt-auto pt-2">
								<a class="icon-link icon-link-hover" href="#">Know more<i class="bi bi-arrow-right"></i> </a>
							</div>
						</div>
					</div>

					<!-- Service item -->
					<div class="col">
						<div class="card bg-light h-100">
							<div class="card-body pb-0">
								<!-- Icon -->
								<div class="icon-lg bg-white text-primary rounded-circle mb-4 mt-n5">
									<i class="bi bi-circle-square fa-fw fs-5"></i>
								</div>
								<!-- Content -->
								<h5 class="mb-3"><a href="#" class="text-coloro" >Web Design</a></h5>
								<p>Designing websites that are visually appealing user-friendly.</p>
							</div>
							<div class="card-footer bg-light mt-auto pt-2">
								<a class="icon-link icon-link-hover" href="#">Know more<i class="bi bi-arrow-right"></i> </a>
							</div>
						</div>
					</div>

					<!-- Service item -->
					<div class="col">
						<div class="card bg-light h-100">
							<div class="card-body pb-0">
								<!-- Icon -->
								<div class="icon-lg bg-white text-primary rounded-circle mb-4 mt-n5">
									<i class="bi bi-vector-pen fa-fw fs-5"></i>
								</div>
								<!-- Content -->
								<h5 class="mb-3"><a href="#" class="text-coloro">UI/UX Design</a></h5>
								<p >Creating user interfaces that are both efficient and enjoyable.</p>
							</div>
							<div class="card-footer bg-light mt-auto pt-2">
								<a class="icon-link icon-link-hover" href="#">Know more<i class="bi bi-arrow-right"></i> </a>
							</div>
						</div>
					</div>

					<!-- Service item -->
					<div class="col">
						<div class="card bg-light h-100">
							<div class="card-body pb-0">
								<!-- Icon -->
								<div class="icon-lg bg-white text-primary rounded-circle mb-4 mt-n5">
									<i class="bi bi-briefcase fa-fw fs-5"></i>
								</div>
								<!-- Content -->
								<h5 class="mb-3"><a href="#" class="text-coloro">Business Strategy</a></h5>
								<p >Developing and executing plans to achieve business goals.</p>
							</div>
							<div class="card-footer bg-light mt-auto pt-2">
								<a class="icon-link icon-link-hover" href="#">Know more<i class="bi bi-arrow-right"></i> </a>
							</div>
						</div>
					</div>
					
					<!-- Service item -->
					<div class="col">
						<div class="card bg-light h-100">
							<div class="card-body pb-0">
								<!-- Icon -->
								<div class="icon-lg bg-white text-primary rounded-circle mb-4 mt-n5">
									<i class="bi bi-binoculars fa-fw fs-5"></i>
								</div>
								<!-- Content -->
								<h5 class="mb-3"><a href="#" class="text-coloro">Research</a></h5>
								<p>Gathering and analyzing data to inform decision-making.</p>
							</div>
							<div class="card-footer bg-light mt-auto pt-2">
								<a class="icon-link icon-link-hover" href="#">Know more<i class="bi bi-arrow-right"></i> </a>
							</div>
						</div>
					</div>

					<!-- Service item -->
					<div class="col">
						<div class="card bg-light h-100">
							<div class="card-body pb-0">
								<!-- Icon -->
								<div class="icon-lg bg-white text-primary rounded-circle mb-4 mt-n5"><i class="bi bi-code-slash fa-fw fs-5"></i></div>
								<!-- Content -->
								<h5 class="mb-3"><a href="#" class="text-coloro">Web Development</a></h5>
								<p >Building and maintaining websites and web applications.</p>
							</div>
							<div class="card-footer bg-light mt-auto pt-2">
								<a class="icon-link icon-link-hover" href="#">Know more<i class="bi bi-arrow-right"></i> </a>
							</div>
						</div>
					</div>

					<!-- Service item -->
					<div class="col">
						<div class="card bg-light h-100">
							<div class="card-body pb-0">
								<!-- Icon -->
								<div class="icon-lg bg-white text-primary rounded-circle mb-4 mt-n5">
									<i class="bi bi-bullseye fa-fw fs-5"></i>
								</div>
								<!-- Content -->
								<h5 class="mb-3"><a class="text-coloro" href="#">Brand Design</a></h5>
								<p >Creating brands that are unique, memorable, and meaningful.</p>
							</div>
							<div class="card-footer bg-light mt-auto pt-2">
								<a class="icon-link icon-link-hover" href="#">Know more<i class="bi bi-arrow-right"></i> </a>
							</div>
						</div>
					</div>
				</div>
				<!-- Service list END -->
			</div>
		</section>

		<section class=" sectionlevel pb-0" data-bs-theme="light">
			<div class="container">
				<!-- Title -->
				<div class="inner-container text-center mb-4 mb-sm-6">
					<span class="heading-color bg-light small rounded-3 px-3 py-2">💵 Transparent pricing packages</span>
					<h2 class="mb-0 mt-4 texto-bg">Get a plan that grows with you</h2>
				</div>

				<!-- Pricing options START -->
				<div class="row">
					<!-- Single Pricing -->
					<div class="col-lg-8">
						<div class="card card-body bg-transparent h-100 px-0">
							<div class="row text-center text-sm-start">
								<!-- Price -->
								<div class="col-sm-6">
									<div class="d-flex justify-content-between mb-4 mb-sm-0">
										<div>
											<!-- Svg image -->
											<figure>
												<svg width="120px" height="156px" viewBox="0 0 120 156" style="enable-background:new 0 0 120 156;" xml:space="preserve">
													<path class="fill-primary" d="M46.8,18.5c-0.3,0-0.6,0.1-0.8,0.2c-0.3,0.1-0.5,0.3-0.7,0.5c-0.2,0.2-0.3,0.5-0.4,0.8 c-0.1,0.3-0.1,0.6-0.1,0.9c0.1,1.3,0.2,2.7,0.2,4c0,0.2,0.1,0.4,0.2,0.6c0.1,0.2,0.2,0.4,0.4,0.5c0.2,0.1,0.4,0.2,0.6,0.3 c0.2,0.1,0.4,0.1,0.6,0.1c3.5-0.2,4.9-1.5,4.8-4.2C51.4,19.4,49.7,18.5,46.8,18.5z"></path>
													<path class="fill-primary" d="M47.3,29.7c-0.4,0.1-0.8,0.3-1.1,0.6c-0.3,0.3-0.4,0.7-0.4,1.2c0.1,1.6,0.2,3,0.4,4.6c0,0.2,0.1,0.5,0.2,0.7 c1.6-2.2,3.6-4.2,5.8-5.8C51.4,29.9,49.7,29.4,47.3,29.7z"></path>
													<path class="fill-primary" d="M37.8,11.9c-6.2,2.3-11.1,6.3-13.3,11.7c-1.2,4.5-0.9,9.2,0.8,13.5c1.6,4,4.4,7.5,8,10c2.9-0.7,5.8-1,8.8-0.9 c0.4-1.6,0.9-3.1,1.5-4.6l0.4-0.7l-4.3,0.6c-0.1,0-0.2,0-0.3,0c-0.1,0-0.2-0.1-0.3-0.1c-0.1-0.1-0.1-0.2-0.2-0.3 c0-0.1-0.1-0.2,0-0.3c0-0.4,0.2-0.8,0.6-0.8c0.8-0.2,1.4-0.6,1.9-1.2c0.5-0.6,0.7-1.4,0.7-2.2c-0.1-2.2-1.1-13.1-1.3-15.5 c-0.1-0.8-0.4-1.5-1-2.1c-0.6-0.6-1.3-0.9-2.1-0.9c-0.5,0-0.7-0.4-0.8-0.8c0-0.2,0.1-0.4,0.2-0.6c0.1-0.2,0.3-0.2,0.5-0.3l6.2-0.1 h0.7L44.1,14c-0.1-0.3,0-0.5,0-0.8c0.1-0.3,0.2-0.5,0.3-0.7c0.2-0.2,0.4-0.4,0.6-0.5c0.2-0.1,0.5-0.2,0.8-0.2c1.1,0,1.9,1.1,2,2.3 l0.1,2.2c4.1,0.2,6.6,2.5,6.8,5.6c0.1,0.9-0.1,1.8-0.5,2.6c-0.4,0.8-1,1.5-1.7,2c-0.1,0.1-0.2,0.2-0.3,0.4s-0.1,0.3-0.1,0.5 c0,0.2,0.1,0.3,0.2,0.5c0.1,0.1,0.2,0.2,0.4,0.3c0.8,0.2,1.5,0.6,2.1,1.2c1.1-0.6,2.2-1.1,3.3-1.5c2.4-0.8,4.9-1.4,7.4-1.8 c-0.1-0.6-0.4-1.2-0.5-1.6C61.3,13.4,49.1,7.8,37.8,11.9z"></path>
													<path class="fill-primary" d="M74.7,61.3c3.7,0,5.6-1.3,5.8-3.9c0.2-2.7-1.4-4.2-5.5-4.4c-0.4,0-0.9,0.1-1.2,0.5c-0.3,0.3-0.5,0.7-0.5,1.2 c-0.1,1.6-0.2,3.3-0.2,4.8c0,0.2,0,0.5,0,0.7c0.1,0.2,0.2,0.4,0.3,0.6c0.2,0.2,0.4,0.3,0.6,0.4C74.2,61.2,74.4,61.3,74.7,61.3z"></path>
													<path class="fill-primary" d="M75,49.4c3.7,0.2,5.4-0.8,5.5-3.6c0.2-2.9-1.3-4.1-4.4-4.4c-0.3,0-0.6,0-0.9,0.1c-0.3,0.1-0.6,0.2-0.8,0.4 c-0.2,0.2-0.4,0.4-0.6,0.7c-0.1,0.3-0.2,0.6-0.2,0.9c-0.1,1.4-0.2,2.8-0.2,4.1c0,0.2,0,0.5,0.1,0.7c0.1,0.2,0.2,0.4,0.3,0.6 c0.2,0.2,0.3,0.3,0.5,0.4C74.6,49.4,74.8,49.4,75,49.4z"></path>
													<path class="fill-primary" d="M92.1,45.9c-4-10.9-16.2-16.5-27.5-12.4c-3.1,1.1-5.8,2.9-8.2,5.2c-2.3,2.3-4.1,5-5.3,8.1c0,0.2,0,0.3-0.1,0.5 c1.7,0.4,3.3,0.9,4.9,1.6c5.3,2.4,9.6,6.7,11.9,12.1c0.4-0.5,0.6-1,0.6-1.6c0.1-2.3,0.8-13.7,0.9-16.2c0-0.8-0.2-1.7-0.7-2.3 c-0.5-0.7-1.3-1.1-2.1-1.3c-0.2,0-0.4-0.2-0.5-0.3c-0.1-0.2-0.2-0.4-0.2-0.6c0-0.1,0-0.2,0.1-0.3c0.1-0.1,0.1-0.2,0.2-0.3 c0.1-0.1,0.2-0.1,0.3-0.1c0.1,0,0.2,0,0.3,0l7.3,0.9l0.1-2.2c0.1-1.3,1.1-2.3,2.1-2.1c1.1,0.1,1.9,1.4,1.8,2.7l-0.1,2.2 c4.2,0.8,6.4,3.5,6.2,6.8c0,1-0.4,1.9-0.9,2.7c-0.5,0.8-1.3,1.4-2.2,1.9c-0.2,0.1-0.3,0.2-0.4,0.4c-0.1,0.2-0.1,0.3-0.1,0.5 c0,0.2,0,0.4,0.1,0.5c0.1,0.2,0.2,0.3,0.4,0.4c2.5,1.3,3.4,3.2,3.3,5.4c-0.2,2.9-2.6,6-8.1,6.3l-0.1,2.5c-0.1,1.2-0.9,2.2-2,2.2 c-0.3,0-0.5-0.1-0.8-0.2c-0.2-0.1-0.4-0.3-0.6-0.5c-0.2-0.2-0.3-0.5-0.3-0.7c-0.1-0.3-0.1-0.5,0-0.8l0.1-2.5H69 c0.7,2.3,1,4.8,0.9,7.3c5.9-1.4,11.8-2.4,17.8-3.2C93,62,94.9,53.5,92.1,45.9z"></path>
													<path class="fill-primary" d="M46.8,63.8c-1.8-2.2-3.6-2.1-6.2-0.4c-0.2,0.2-0.5,0.4-0.6,0.7c-0.2,0.3-0.2,0.5-0.3,0.8c0,0.3,0,0.6,0.1,0.9 c0.1,0.3,0.2,0.5,0.4,0.8c0.8,1.1,1.8,2.2,2.6,3.3c0.3,0.4,0.7,0.6,1.2,0.7s0.9,0,1.3-0.3C48.1,67.9,48.6,66.1,46.8,63.8z"></path>
													<path class="fill-primary" d="M54.5,72.4c-1.6-2.1-3.9-2.2-7,0.4c-0.3,0.3-0.6,0.7-0.6,1.2c0,0.5,0.1,0.9,0.4,1.3c0.4,0.5,0.7,0.8,1.1,1.3 c2.3-0.6,4.7-1.3,7.1-1.9C55.4,73.8,55,73,54.5,72.4z"></path>
													<path class="fill-primary" d="M65.4,66.1c-4-10.9-16.2-16.5-27.5-12.4c-11.6,4.2-17.7,17-13.7,28.3c0.2,0.4,0.4,0.8,0.6,1.2 c4.9-1.4,11.6-3.4,18.8-5.4c-0.5-0.5-5.4-6.8-6.9-8.7c-0.6-0.6-1.3-1.1-2.1-1.2c-0.8-0.1-1.7,0-2.4,0.4c-0.2,0.1-0.4,0.1-0.6,0.1 c-0.2,0-0.4-0.2-0.5-0.3c-0.1-0.1-0.1-0.2-0.2-0.3c0-0.1,0-0.2,0-0.3c0-0.1,0-0.2,0.1-0.3s0.1-0.2,0.2-0.2l6-4.2l-1.4-1.8 c-0.8-1.1-0.8-2.5,0.1-3c0.5-0.3,1.1-0.3,1.7-0.2c0.6,0.2,1,0.5,1.4,1l1.4,1.8c3.7-2.2,7.1-1.8,9.1,0.9c0.6,0.7,1,1.6,1.1,2.6 c0.1,0.9,0,1.9-0.3,2.8c-0.1,0.2-0.1,0.4,0,0.5c0,0.2,0.1,0.3,0.2,0.5c0.1,0.1,0.3,0.2,0.4,0.3c0.2,0.1,0.4,0.1,0.5,0 c1.1-0.4,2.2-0.4,3.3-0.1c1.1,0.3,2.1,0.9,2.8,1.8c0.9,1.1,1.3,2.5,1.3,3.9c2.6-0.7,5.1-1.3,7.7-1.9C66.5,69.8,66.1,67.9,65.4,66.1z "></path>
													<path class="fill-mode" d="M113.8,123.8l-3-12.5c1.1-0.4,2-1.1,2.7-2c0.3-0.5,0.6-1,0.7-1.6c0.1-0.6,0.1-1.2,0-1.8l-4.3-17.8 c-0.4-1.5-2.1-2.8-5.3-2.5l-2.9-12.1c-1.6-6.7-2.3-6.8-9.1-6.1h-0.4c1.8-2.1,3.3-4.4,4.4-6.9c2.6-5.9,2.8-12.5,0.6-18.5 c-1.1-3-2.7-5.7-4.9-8c-2.2-2.3-4.7-4.2-7.6-5.5c-2.1-0.9-4.2-1.5-6.4-1.9c-2.8-0.7-5.7-1-8.5-0.9c-0.1-2.1-0.6-4.1-1.3-6.1 c-1.1-2.9-2.7-5.5-4.7-7.7c-2.1-2.2-4.6-4-7.3-5.3c-2-0.9-4.1-1.5-6.2-1.9c-6.3-1.5-12.9-1.2-19,0.9c-6.3,2.3-11.3,7.1-14.2,13.1 c-1.3,2.9-2.1,6-2.2,9.2c-0.1,3.2,0.4,6.3,1.6,9.3c1.9,4.7,5.7,8.8,10.9,11.6c-5.4,2.7-9.7,7.2-12.3,12.6c-0.9,2-1.5,4.1-1.9,6.2 C3.4,71.2,0.8,76.8,1.7,81l14.8,61.5c0.4,1.6,1.2,3.1,2.2,4.4c1,1.3,2.3,2.4,3.8,3.1c2.7,1.4,5.8,2.2,8.9,2.1c3.4,0,6.8-0.7,10-1.9 c15.2-5.3,47.8-13.1,63.3-15.2c5-0.7,7.5-1.6,8.7-3.4C115,129.6,114.5,126.8,113.8,123.8z M112.4,106.3c0.1,0.3,0.1,0.7,0,1 c-0.1,0.3-0.2,0.7-0.5,0.9l-0.4,0.4c-0.9,0.8-2,1.3-3.2,1.4c-0.4,0-0.7,0.1-1.1,0.1c-5.3,0.9-10.6,2.2-15.7,3.9 c-1.2,0.5-1.4,0.4-1.5,0.4c-0.4-0.4-4.2-16.8-4.2-16.9c1.5-1.5,14.8-4.1,16.7-4.4l1.8-0.4c0.5-0.1,0.9-0.2,1.4-0.2 c0.6-0.1,1.3-0.3,1.9-0.6c0.4-0.2,0.8-0.5,1.2-0.8L112.4,106.3z M18.6,19.7c1.2-2.8,3.1-5.3,5.3-7.4c2.3-2.1,4.9-3.7,7.8-4.7 c2.3-0.8,4.7-1.4,7.1-1.6C38.6,6,38.5,6,38.3,6.1C32,8.5,26.9,13.2,24.1,19.2c-1.3,2.9-2.1,6-2.2,9.2c-0.1,3.2,0.4,6.3,1.6,9.3 c1.5,3.9,4.1,7.4,7.5,9.9c-0.5,0.2-1,0.4-1.5,0.6c-5.4-2.7-9.5-6.8-11.4-11.4c-1.1-2.8-1.6-5.7-1.5-8.7 C16.7,25.3,17.4,22.4,18.6,19.7z M89.4,67.7c-0.5,0-1.1,0.1-1.5,0.1c-5.3,0.7-11.4,1.8-17.8,3.2c0-2.5-0.3-4.9-0.9-7.3 c-0.1-0.5-0.4-1.1-0.5-1.5c-0.2-0.5-0.4-1-0.6-1.5c-2.4-5.3-6.6-9.6-11.9-12.1c-1.6-0.7-3.2-1.3-4.9-1.6c0-0.2,0-0.3,0.1-0.5 c0.3-1.5,0.9-3,1.5-4.4c1.3-2.9,3.2-5.6,5.6-7.8c2.4-2.2,5.1-3.9,8.1-5c2.5-0.9,5.2-1.4,8-1.4c4.6,0,9.1,1.3,12.8,3.9 c3.8,2.6,6.6,6.3,8.2,10.6c1.5,4.4,1.7,9.1,0.6,13.6C95.1,60.5,92.8,64.5,89.4,67.7L89.4,67.7z M66.7,71.9c-2.6,0.6-5.1,1.2-7.7,1.9 c-1.2,0.2-2.3,0.6-3.4,0.8c-2.5,0.6-4.8,1.3-7.1,1.9c-1.5,0.5-3,0.8-4.6,1.3c-7.3,2-13.9,4-18.8,5.4c-0.2-0.4-0.4-0.8-0.6-1.2 l-0.7-1.4c-1.1-2.9-1.6-5.9-1.6-9c0.1-3.1,0.8-6.1,2-8.9c1.3-2.9,3.2-5.6,5.6-7.8c2.4-2.2,5.1-3.9,8.1-5c2.6-0.9,5.2-1.4,8-1.4 c4.6,0,9.1,1.3,12.8,3.9c3.8,2.6,6.6,6.3,8.2,10.6c1,2.7,1.5,5.6,1.4,8.5C67.8,71.7,67.2,71.8,66.7,71.9L66.7,71.9z M65.9,27.9 c-3.3,1.2-6.2,3-8.8,5.3c-2.5,2.4-4.6,5.2-6,8.3c-0.7,1.7-1.3,3.5-1.8,5.3c-1.8-0.5-3.6-0.7-5.5-0.8c0.4-1.4,0.8-2.7,1.4-4 c1.3-2.9,3.2-5.6,5.6-7.8c2.4-2.2,5.1-3.9,8.1-5c2.6-1,5.2-1.5,8-1.8L65.9,27.9z M65.8,26c-2.5,0.3-5,0.9-7.4,1.8 c-1.1,0.4-2.2,0.9-3.3,1.5c-1,0.5-1.9,1.1-2.8,1.8c-2.3,1.6-4.2,3.6-5.8,5.8c-0.9,1.3-1.7,2.6-2.3,4c-0.1,0.2-0.2,0.5-0.4,0.7 c-0.7,1.5-1.2,3-1.5,4.6c-3,0-5.9,0.3-8.8,0.9c-3.7-2.3-6.5-5.8-8-10c-1.7-4.3-2-9-0.8-13.5c0.3-1.2,0.7-2.5,1.3-3.6 c1.2-2.8,3.1-5.3,5.3-7.4c2.3-2.1,4.9-3.7,7.8-4.7c5.3-2,11.2-1.9,16.4,0.5c5.2,2.3,9.3,6.6,11.3,11.9c0.7,1.8,1.1,3.7,1.2,5.6 C67.2,25.8,66.5,25.9,65.8,26L65.8,26z M38.4,47.9l-1.1,0.4c-3.3,1.2-6.2,3-8.8,5.3C26,56,24,58.8,22.6,62c-1.4,3-2.2,6.3-2.3,9.6 c-0.1,3.3,0.5,6.6,1.7,9.7c0.3,0.8,0.7,1.7,1.2,2.5c-1.4,0.4-2.6,0.7-3.6,1.1c-0.2,0.1-0.5,0.1-0.7,0.2c-1.1-1.4-2-2.9-2.7-4.6 c-1.1-2.9-1.6-5.9-1.6-9c0.1-3.1,0.8-6.1,2-8.9c1.3-2.9,3.2-5.6,5.6-7.8c2.4-2.2,5.1-3.9,8.1-5C32.9,48.8,35.6,48.1,38.4,47.9z  M13,69.8c-0.1,1.5-0.1,3,0,4.6c-1.9,0.8-3.6,2.1-4.9,3.7c-1.3,1.6-2.3,3.4-2.8,5.5C4.4,82.7,1,73.7,13,69.8z M112.2,130.6 c-0.8,1.3-3.2,2.1-7.5,2.7c-15.6,2.1-48.3,10.1-63.7,15.3c-6.8,2.3-13,2.3-17.6-0.1c-2.7-1.5-4.6-3.7-5.1-6.3L4.7,85.4 c0.2,0.8,2.8,1.4,3.4,1.6c1.6,0.4,3.3,0.6,4.9,0.6c2.4,0,4.7-0.4,6.9-1.2c1.4-0.4,3.2-0.9,5-1.5c15.3-4.4,47.2-13.8,65.7-15.6 c1.9-0.2,5.6-1.3,7.4-0.1c0.7,0.5,1.2,1.8,1.9,4.7l4.1,17.1c-6.1,1.2-12.2,2.1-17.9,4.4c-2,0.8-2.2,1.3-1.8,3.5l3.5,14.5 c0,0.5,0.2,1,0.4,1.4c0.2,0.4,0.6,0.8,1,1.1c0.3,0.1,0.7,0.2,1.1,0.2c1.5,0,3-0.8,4.6-1.3c1.6-0.5,3.3-0.9,4.9-1.3 c2.9-0.7,6-1.4,9-1.9h0.4l3,12.4C112.8,127.4,113.1,129.4,112.2,130.6z"></path>
													<path class="fill-mode" d="M101.6,102.2c-0.1-0.6-0.4-1.1-0.8-1.6s-0.8-0.8-1.3-1.1c-1.1-0.6-2.4-0.8-3.6-0.5c-1.2,0.3-2.3,1-3,2.1 c-0.3,0.5-0.6,1-0.7,1.6c-0.1,0.6-0.1,1.2,0.1,1.7c0.6,2.5,3.4,3.7,5.7,3.2C100.2,107,102.2,104.7,101.6,102.2z"></path>
													<path class="fill-mode" d="M95.6,87.4c0.1,0.2,0.2,0.4,0.4,0.5c0.2,0.1,0.4,0.1,0.6,0.1c0.1,0,0.2-0.1,0.3-0.1c0.1-0.1,0.2-0.2,0.2-0.3 c0.1-0.1,0.1-0.2,0.1-0.3c0-0.1,0-0.2,0-0.3c-0.5-3.1-1.5-6.1-2.8-9c-0.6-1.1-2.1-0.1-1.5,0.9C94.2,81.5,95.1,84.4,95.6,87.4z"></path>
													<path class="fill-mode" d="M86.5,75.2c-3.9,0.2-7.5,1.4-11.2,2.3c-1.1,0.2-0.6,2,0.5,1.6c3.5-0.9,7.1-2.1,10.8-2.3c0.1,0,0.2,0,0.4-0.1 s0.2-0.1,0.3-0.2c0.1-0.1,0.2-0.2,0.2-0.3c0-0.1,0.1-0.2,0.1-0.4c-0.1-0.2-0.2-0.4-0.4-0.5C86.9,75.3,86.7,75.2,86.5,75.2z"></path>
													<path class="fill-mode" d="M55.6,85.1C59.3,84.1,63,83,66.7,82c1.1-0.4,0.6-2-0.5-1.6c-3.6,1.1-7.4,2.1-11.1,3.2 C54.1,83.7,54.5,85.4,55.6,85.1z"></path>
													<path class="fill-mode" d="M34.5,91.5c3.5-1.2,7-2.1,10.5-3.2c1.1-0.4,0.6-2-0.5-1.6c-3.5,1.1-7,2-10.5,3.2c-0.1,0-0.2,0.1-0.3,0.1 c-0.1,0.1-0.2,0.2-0.2,0.3c-0.1,0.1-0.1,0.2-0.1,0.3c0,0.1,0,0.2,0,0.3c0,0.1,0.1,0.2,0.2,0.3c0.1,0.1,0.2,0.2,0.3,0.2 c0.1,0.1,0.2,0.1,0.3,0.1C34.3,91.5,34.4,91.5,34.5,91.5z"></path>
													<path class="fill-mode" d="M23.5,92.6c-1.9,0.5-3.8,0.7-5.7,0.8c-2.1,0.1-4.2,0-6.2-0.5c-1.1-0.2-1.5,1.4-0.5,1.6c2.6,0.6,5.3,0.7,8,0.5 c1.7-0.2,3.3-0.4,4.9-0.8C25.1,94.2,24.7,92.4,23.5,92.6z"></path>
													<path class="fill-mode" d="M103.8,117.6c0.3,1.3,0.6,2.6,0.8,4c0.2,2.3-0.5,2.9-0.8,3.2c-0.8,0.5-1.6,0.8-2.5,0.9 c-1.2,0.3-2.5,0.5-3.7,0.6c-0.2,0-0.5,0.1-0.7,0.3c-0.2,0.2-0.3,0.4-0.3,0.7s0.1,0.5,0.3,0.7c0.2,0.2,0.4,0.3,0.7,0.3 c2.2-0.2,4.6-0.5,6.6-1.4c1.8-0.9,2.3-2.6,2.3-4.4c-0.1-1.8-0.4-3.5-0.9-5.1C105.3,116,103.6,116.5,103.8,117.6z"></path>
													<path class="fill-mode" d="M88.2,127.5c-3.4,0.4-6.8,0.9-10.2,1.6c-0.2,0.1-0.4,0.2-0.5,0.4c-0.1,0.2-0.1,0.4-0.1,0.6 c0,0.1,0.1,0.2,0.1,0.3c0.1,0.1,0.2,0.2,0.3,0.2c0.1,0.1,0.2,0.1,0.3,0.1c0.1,0,0.2,0,0.3,0c3.2-0.7,6.5-1.2,9.7-1.5 c0.1,0,0.2,0,0.4-0.1c0.1,0,0.2-0.1,0.3-0.2c0.1-0.1,0.2-0.2,0.2-0.3c0-0.1,0.1-0.2,0.1-0.4c0-0.2-0.1-0.4-0.3-0.6 C88.7,127.6,88.5,127.5,88.2,127.5z"></path>
													<path class="fill-mode" d="M68.9,131.4c-3,0.8-6.2,1.8-9.2,2.7c-1.1,0.4-0.6,2,0.5,1.6c3-0.9,6.1-1.9,9.2-2.7 C70.4,132.8,70,131,68.9,131.4z"></path>
													<path class="fill-mode" d="M50.3,137c-3.6,1.2-7.2,2.1-10.9,2.9c-0.2,0.1-0.4,0.2-0.5,0.4c-0.1,0.2-0.1,0.4-0.1,0.6c0,0.1,0.1,0.2,0.1,0.3 s0.2,0.2,0.3,0.2c0.1,0.1,0.2,0.1,0.3,0.1c0.1,0,0.2,0,0.3,0c3.7-0.8,7.3-1.7,10.9-2.9c0.1,0,0.2-0.1,0.3-0.1 c0.1-0.1,0.2-0.2,0.3-0.3c0.1-0.1,0.1-0.2,0.1-0.3c0-0.1,0-0.2,0-0.4c0-0.1-0.1-0.2-0.2-0.3c-0.1-0.1-0.2-0.2-0.3-0.2 c-0.1-0.1-0.2-0.1-0.3-0.1C50.5,136.9,50.4,137,50.3,137z"></path>
													<path class="fill-mode" d="M29.9,140.9c-1.6,0.4-3.3,0.3-4.9-0.1c-1.6-0.4-3.1-1.2-4.3-2.3c-0.2-0.2-0.4-0.3-0.6-0.3s-0.5,0.1-0.6,0.3 c-0.2,0.2-0.3,0.4-0.3,0.6c0,0.2,0.1,0.5,0.3,0.6c1.5,1.3,3.2,2.2,5.1,2.7c1.9,0.4,3.9,0.4,5.8,0c0.2-0.1,0.4-0.2,0.5-0.4 c0.1-0.2,0.1-0.4,0.1-0.6C31,141,30.4,140.7,29.9,140.9z"></path>
												</svg>
											</figure>
											<!-- Price & content -->
											<div class="badge bg-dark text-white mb-3">Boss mode</div>
											<h6 class="mb-3"> <span class="display-2">$59</span> /month</h6>
											<p class="mb-0">The all-in-one solution for businesses that want to succeed online.</p>
										</div>
										<!-- Divider line -->
										<div class="vr opacity-1 ms-2 ms-md-5 d-none d-sm-block"></div>
									</div>
								</div>

								<!-- Feature -->
								<div class="col-sm-6 ps-md-5">
									<h6 class="mb-sm-4">Features list of your need</h6>
									<!-- List -->
									<ul class="list-group list-group-borderless mb-3 mb-sm-4">
										<li class="list-group-item heading-color mb-0"><i class="bi bi-check-lg text-primary me-1"></i>Up to 05 users monthly</li>
										<li class="list-group-item heading-color mb-0"><i class="bi bi-check-lg text-primary me-1"></i>Free 5 host &amp; domain</li>
										<li class="list-group-item heading-color mb-0"><i class="bi bi-check-lg text-primary me-1"></i>Google Docs style editors</li>
										<li class="list-group-item heading-color mb-0"><i class="bi bi-check-lg text-primary me-1"></i>Support for 30+ languages</li>
										<li class="list-group-item heading-color mb-0"><i class="bi bi-check-lg text-primary me-1"></i>Landing pages &amp; Web widgets</li>
										<li class="list-group-item heading-color mb-0"><i class="bi bi-check-lg text-primary me-1"></i>24/7 Dedicated Support</li>
									</ul>
									<!-- Button -->
									<a href="#" class="btn btn-dark">Start a free 7-day trial</a>
									<p class="mb-0">No credit card is required!</p>
								</div>
							</div>
						</div>
					</div>

					<!-- Custom plan -->
					<div class="col-lg-4 ms-auto mt-4 mt-lg-0">
						<div class="card bg-colo rounded h-100 overflow-hidden p-4">
							<!-- SVG decoration -->
							<div class="position-absolute top-0 end-0 mt-n3 me-n4">
								<img src="assets/images/elements/decoration-pattern-2.svg" class="opacity-2 h-200px" alt="">
							</div>

							<!-- Card body -->
							<div class="card-body bg-transparent position-relative p-0">
								<div class="badge bg-dark text-white">Enterprise</div>
								<h4 class="text-white mb-0 mt-3">Custom pricing plan</h4>
							</div>

							<!-- Card footer -->
							<div class="card-footer bg-transparent d-grid text-center p-0 mt-8">
								<a href="contact-v1.html" class="btn btn-white">Contact Sales</a>
								<p class="mb-0 text-white">Get personalized demo and custom plan</p>
							</div>
						</div>
					</div>
				</div>
				<!-- Pricing options END -->
			</div>
		</section>

		<section class="sectionlevel">
			<div class="container">
				<div class="row">
					<!-- Testimonials content -->
					<div class="col-lg-6 mb-5 mb-lg-0">
						<span class="heading-color bg-light small rounded-3 px-3 py-2">💖 Real results from real clients</span>
						<!-- Title -->
						<h2 class="my-4">See how we've helped our clients succeed</h2>

						<h6 class="mb-0">More than 1500+ agencies using Mizzle</h6>

						
						
					</div>

					<!-- Testimonials image -->
					<div class="col-sm-10 col-lg-6 col-xl-5 position-relative ms-xl-auto">
						<!-- Image -->
						<img src="{{asset('/image/03.jpg')}}" class="rounded" alt="testimonial-img">

						<!-- SVG decoration -->
						<figure class="position-absolute top-50 start-0 translate-middle ms-n5 d-none d-xl-block">
							<svg width="144" height="166" viewBox="0 0 144 166" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path class="fill-mode" d="M113.199 50.9244C112.596 46.339 111.938 41.4066 111.26 36.313C112.477 36.3608 113.16 36.4563 113.239 37.7452C113.369 39.8372 113.688 41.9264 113.989 44.0007C114.229 45.6329 114.566 47.2491 114.897 49.0506C117.03 47.6646 117.874 46.1495 117.754 43.8625C117.641 41.7025 118.148 39.5274 118.187 37.3447C118.221 35.5034 117.932 33.6609 117.853 31.811C117.829 31.3058 118.035 30.7983 118.146 30.2141C119.83 30.6233 119.847 31.8334 119.855 32.9165C119.897 35.9832 119.846 39.0464 119.837 42.1101C119.837 42.3492 119.859 42.5836 119.875 42.8375C122.111 41.9771 122.784 40.9163 122.955 38.5496C123.128 36.2147 123.525 33.8969 123.718 31.5671C123.824 30.3267 123.712 29.0814 123.71 27.8129C125.609 27.9977 125.795 28.2023 125.63 29.7908C125.378 32.1883 125.114 34.5929 124.879 37.0052C124.83 37.4706 124.935 37.945 124.983 38.5602C126.484 38.2771 127.287 37.8324 127.854 36.2239C128.914 33.2062 129.092 30.0932 129.676 27.0238C129.805 26.33 129.876 25.621 130.006 24.6052C130.829 24.9658 131.427 25.2262 131.756 25.364C131.26 28.4149 130.848 31.1862 130.345 33.9443C130.06 35.5121 130.568 36.5179 131.95 37.3262C134.454 38.8228 136.874 40.4429 139.316 42.0169C139.513 42.1411 139.64 42.3718 139.879 42.6526C139.608 43.091 139.335 43.5392 139.074 43.9802C138.723 43.8885 138.454 43.8806 138.277 43.7615C136.522 42.5855 134.718 41.4798 133.055 40.1926C130.88 38.5119 128.793 38.5274 126.425 40.2157C128.777 43.1693 132.676 43.9498 135.203 46.7932C134.962 47.1564 134.722 47.5196 134.379 48.0328C130.718 46.4208 127.533 44.1018 124.116 41.5972C122.968 42.721 121.793 43.8689 120.334 45.3063C123.046 46.8053 125.495 48.1525 127.944 49.4997C128.508 49.8134 129.18 50.0307 129.603 50.4843C129.954 50.8566 130.013 51.5061 130.36 52.4906C125.841 51.569 122.873 48.6621 118.973 47.2059C118.045 48.2834 117.073 49.4117 115.864 50.8104C118.379 51.9876 120.706 53.0846 123.041 54.1525C123.403 54.32 123.991 54.2241 124.184 54.4824C124.526 54.9254 124.654 55.5513 124.866 56.0952C124.383 56.2703 123.817 56.6835 123.432 56.562C122.211 56.1702 121.037 55.6033 119.87 55.0487C117.99 54.1518 116.123 53.2063 114.36 52.3401C101.683 64.3771 98.5715 79.9025 96.6302 95.9314C98.838 96.7685 100.8 97.4687 102.733 98.2442C105.629 99.3964 107.415 101.766 109.175 104.159C112.643 108.818 113.566 114.173 113.972 119.829C114.177 122.71 112.879 124.366 111.236 126.109C109.163 128.301 106.714 129.781 103.514 129.432C100.468 129.093 98.4789 127.419 97.3542 124.631C95.5645 120.203 95.1947 115.523 95.0572 110.83C94.951 107.372 95.1356 103.918 95.1638 100.464C95.1655 99.8203 95.0939 99.1779 95.0524 98.4603C93.7898 97.9119 92.5297 98.0709 91.25 98.2249C85.6593 98.8938 80.6937 101.275 75.9535 104.068C71.1493 106.907 66.5711 110.117 63.3385 114.833C62.6662 115.811 62.0884 116.865 61.467 117.888C63.1573 118.673 64.6318 119.526 66.2098 120.063C68.5452 120.85 70.6979 122.058 72.4806 123.605C73.9072 124.84 74.7815 126.794 75.68 128.536C76.2551 129.643 76.4419 130.96 76.7886 132.183C77.2903 134.009 76.8058 135.265 75.2357 136.33C70.9711 139.217 66.3749 137.516 63.3267 134.515C59.5648 130.819 57.9099 126.354 58.8783 121.056C58.9376 120.75 58.8995 120.418 58.9114 119.735C56.044 119.827 53.2131 119.7 50.4457 120.047C39.6355 121.399 29.0725 123.678 19.2226 128.607C15.317 130.558 11.2246 132.149 7.23048 133.921C6.44252 134.266 5.70244 134.707 4.77628 135.182C8.44174 136.14 11.7953 137.017 15.2073 137.909C15.1894 139.172 14.7731 139.729 13.5952 139.494C12.8832 139.349 12.1639 139.192 11.4442 139.077C8.9676 138.71 6.49146 138.301 4.00173 138.025C2.4322 137.853 0.871129 137.809 0.406275 135.723C2.35553 129.622 4.3726 123.342 6.45539 116.85C7.20773 117.119 7.83587 117.346 8.51997 117.597C6.46861 122.933 3.95908 127.911 3.54167 133.809C5.90092 132.753 8.06434 131.728 10.2659 130.797C16.6519 128.122 22.9218 125.094 29.4786 122.921C35.9446 120.777 42.5734 118.966 49.4688 118.565C51.1413 118.462 52.8063 118.149 54.486 118.058C56.0899 117.978 57.7044 118.058 59.7423 118.071C62.8516 111.556 68.2989 106.775 74.7006 103.044C80.9918 99.378 87.3981 95.9081 95.2331 96.3353C95.5427 94.036 95.8141 91.6437 96.1881 89.2573C97.7904 78.8668 100.196 68.7487 106.203 59.9151C108.283 56.8625 110.728 54.0824 113.199 50.9244ZM96.5665 98.087C96.4799 99.374 96.3642 100.414 96.3387 101.468C96.1764 107.745 95.9505 114.026 97.1035 120.252C97.2721 121.2 97.4403 122.19 97.8642 123.039C98.8148 124.94 99.834 126.817 102.03 127.662C106.876 129.521 112.689 124.576 112.545 120.547C112.401 116.675 112.304 112.824 110.609 109.19C107.868 103.339 103.835 99.1664 96.5665 98.087ZM60.8018 120.073C59.5762 123.526 60.0775 126.827 61.4557 129.921C62.583 132.46 64.8013 134.173 67.2834 135.436C69.8578 136.743 72.7973 136.534 74.5229 134.834C74.9303 134.431 75.3948 133.69 75.2872 133.225C74.4812 129.616 73.8495 125.938 70.0607 123.897C67.1494 122.325 64.3622 120.557 60.8018 120.073Z" fill="#202124"></path>
							</svg>
						</figure>

						<!-- Message decoration -->
						<div class="col-11 col-sm-8 position-absolute top-0 start-0 mt-n2 mt-sm-7 ms-n2 ms-sm-n7">
							<div class="bg-dark rounded d-flex align-items-center px-3 py-2">
								<!-- Avatar -->
								<div class="avatar avatar-sm flex-shrink-0 me-2">
									<img class="avatar-img rounded-circle" src="assets/images/avatar/09.jpg" alt="avatar">
								</div>
								<p class="text-light small mb-0">The best Bootstrap theme we've ever used 🔥</p>
							</div>
						</div>

						
					</div>
				</div>
			</div>
		</section>

		<section class=" sectionlevel position-relative z-index-2 py-0 mb-n7">
			<div class="container position-relative">
				<div class="bg-primary  bg-colo rounded position-relative overflow-hidden p-4 p-sm-5">

					<!-- SVG decoration -->
					<figure class="position-absolute bottom-0 end-0 mb-n3">
						<svg class="fill-dark opacity-5" width="400" height="145" viewBox="0 0 400 145" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M0.437348 59.1519C0.291566 59.1519 0.121486 59.0549 0.0485943 58.9093C-0.0485943 58.7153 0 58.4728 0.194377 58.3515L60.0625 18.9131L70.899 31.5499C71.0205 31.6954 71.0691 31.8652 71.0205 32.035C70.9719 32.2047 70.8504 32.3503 70.6803 32.423L0.583131 59.1034C0.534537 59.1276 0.485943 59.1519 0.437348 59.1519ZM59.9167 19.8833L2.86706 57.4541L70.1701 31.8409L59.9167 19.8833Z" fill="#202124"></path>
							<path d="M0.851004 59.2979C0.63233 59.2979 0.413656 59.1281 0.389359 58.9098C0.365061 58.6673 0.510844 58.449 0.729518 58.4005L76.9253 38.7783L90.7504 55.7082L0.851004 59.2979ZM76.658 39.603L3.30501 58.4733L89.2683 55.0291L76.658 39.603Z" fill="#202124"></path>
							<path d="M70.8969 32.0817L70.168 32.0859L70.2189 40.7934L70.9478 40.7892L70.8969 32.0817Z" fill="#202124"></path>
							<path d="M72.6739 60.5583L0.851562 59.297V58.5694L71.9207 59.8064L71.7749 56.1439L72.5038 56.1196L72.6739 60.5583Z" fill="#202124"></path>
							<path d="M16.2865 52.6087L12.1719 55.7021L12.318 55.8959L16.4327 52.8025L16.2865 52.6087Z" fill="#202124"></path>
							<path d="M21.6213 50.601L17.4219 54.1704L17.5794 54.3551L21.7789 50.7856L21.6213 50.601Z" fill="#202124"></path>
							<path d="M27.4394 48.3802L23.1289 52.8901L23.3047 53.0576L27.6152 48.5476L27.4394 48.3802Z" fill="#202124"></path>
							<path d="M33.4909 46.1008L28.8633 51.4375L29.047 51.5962L33.6746 46.2596L33.4909 46.1008Z" fill="#202124"></path>
							<path d="M39.2488 43.9004L34.6523 49.9487L34.8459 50.0953L39.4424 44.047L39.2488 43.9004Z" fill="#202124"></path>
							<path d="M45.6875 41.4253L40.9922 48.2988L41.1929 48.4355L45.8883 41.562L45.6875 41.4253Z" fill="#202124"></path>
							<path d="M52.8514 38.7208L47.2773 46.6982L47.4766 46.837L53.0507 38.8596L52.8514 38.7208Z" fill="#202124"></path>
							<path d="M59.6794 36.1172L53.5391 45.0894L53.7397 45.2262L59.88 36.254L59.6794 36.1172Z" fill="#202124"></path>
							<path d="M66.3562 33.5847L59.6758 43.5107L59.8775 43.646L66.5579 33.72L66.3562 33.5847Z" fill="#202124"></path>
							<path d="M70.4459 34.1845L65.8281 41.9414L66.037 42.0653L70.6548 34.3084L70.4459 34.1845Z" fill="#202124"></path>
							<path d="M393.661 145L392.273 144.88L393.152 140.401L394.54 140.521L393.661 145ZM189.936 138.628C187.484 138.568 185.124 138.297 182.949 137.846L183.366 136.975C185.448 137.395 187.669 137.636 190.028 137.696L189.936 138.628ZM196.969 138.357L196.737 137.455C198.866 137.245 201.133 136.884 203.4 136.433L203.817 137.305C201.503 137.786 199.19 138.147 196.969 138.357ZM395.419 136.073L394.031 135.953C394.309 134.45 394.586 132.977 394.864 131.474L396.252 131.564C395.974 133.067 395.697 134.57 395.419 136.073ZM176.518 135.862C174.621 135.021 172.816 133.969 171.243 132.766L172.307 132.195C173.834 133.337 175.5 134.329 177.304 135.141L176.518 135.862ZM210.387 135.712L209.832 134.9C211.868 134.329 213.95 133.668 215.986 132.917L216.633 133.698C214.598 134.45 212.469 135.111 210.387 135.712ZM222.695 131.354L221.954 130.602C223.851 129.791 225.748 128.919 227.599 128.017L228.432 128.739C226.535 129.67 224.592 130.542 222.695 131.354ZM167.31 128.949C166.246 127.687 165.32 126.274 164.488 124.771L165.783 124.47C166.57 125.943 167.495 127.296 168.513 128.528L167.31 128.949ZM396.992 127.085L395.604 126.995C395.882 125.462 396.113 123.959 396.298 122.517L397.686 122.607C397.501 124.05 397.27 125.552 396.992 127.085ZM233.799 125.883L232.874 125.192C234.586 124.23 236.252 123.208 237.825 122.216L237.917 122.156L238.889 122.787L238.797 122.847C237.27 123.869 235.558 124.891 233.799 125.883ZM162.59 120.382C162.128 118.94 161.804 117.437 161.619 115.874L163.007 115.814C163.192 117.347 163.516 118.819 163.932 120.232L162.59 120.382ZM243.794 119.541L242.776 118.91C244.303 117.858 245.876 116.745 247.449 115.603L248.467 116.204C246.894 117.377 245.321 118.489 243.794 119.541ZM398.334 118.098L396.946 118.038C397.131 116.505 397.316 115.002 397.455 113.559L398.843 113.619C398.704 115.062 398.519 116.565 398.334 118.098ZM253.094 112.838L252.03 112.237C253.464 111.155 254.945 110.042 256.518 108.81L257.582 109.381C256.009 110.614 254.528 111.756 253.094 112.838ZM162.822 111.335L161.434 111.305C161.48 109.862 161.619 108.329 161.896 106.766L163.285 106.856C163.007 108.419 162.868 109.922 162.822 111.335ZM399.213 109.081L397.825 109.051C397.918 107.548 398.01 106.015 398.057 104.542L399.445 104.572C399.398 106.045 399.306 107.578 399.213 109.081ZM262.024 105.894L260.96 105.323C262.44 104.151 263.875 103.009 265.355 101.837L266.419 102.408C264.939 103.58 263.504 104.752 262.024 105.894ZM164.21 102.408L162.822 102.257C163.007 101.476 163.238 100.664 163.47 99.8528C163.655 99.1615 163.886 98.5002 164.071 97.8089L165.413 97.9892C165.182 98.6806 164.996 99.3418 164.811 100.033C164.58 100.845 164.395 101.656 164.21 102.408ZM398.149 100.063C398.149 98.5603 398.103 97.0274 398.01 95.5545L399.398 95.5245C399.491 96.9973 399.491 98.5303 399.537 100.033L398.149 100.063ZM270.815 98.921L269.751 98.3499C271.232 97.1777 272.666 96.0054 274.146 94.8632L275.211 95.4343C273.73 96.5765 272.249 97.7488 270.815 98.921ZM166.94 93.6308L165.598 93.4204C166.107 92.0377 166.662 90.5949 167.264 89.0319L168.606 89.2724C168.004 90.8054 167.449 92.2181 166.94 93.6308ZM279.606 91.9476L278.542 91.3765C280.115 90.1441 281.596 89.0019 283.03 87.9198L284.094 88.5209C282.66 89.573 281.179 90.7152 279.606 91.9476ZM397.686 91.0759C397.548 89.573 397.362 88.0701 397.131 86.5972L398.519 86.507C398.751 87.9799 398.936 89.5129 399.074 91.0158L397.686 91.0759ZM288.629 85.1244L287.611 84.5232C289.184 83.381 290.757 82.2388 292.284 81.1868L293.302 81.818C291.775 82.87 290.202 83.9822 288.629 85.1244ZM170.41 84.914L169.068 84.6735C169.67 83.2307 170.317 81.7879 170.919 80.3151L172.261 80.5556C171.659 82.0284 171.012 83.4712 170.41 84.914ZM396.298 82.1486C396.252 81.9082 396.206 81.6677 396.159 81.4272C395.882 80.1648 395.512 78.9324 395.095 77.7602L396.437 77.5498C396.854 78.7521 397.224 80.0145 397.501 81.307C397.548 81.5475 397.594 81.7879 397.64 82.0284L396.298 82.1486ZM298.114 78.5717L297.143 77.9405C298.808 76.8584 300.52 75.7763 302.14 74.7844L303.111 75.4457C301.446 76.4376 299.78 77.4896 298.114 78.5717ZM174.158 76.2272L172.816 75.9867C173.464 74.544 174.065 73.1012 174.713 71.6584L176.055 71.8988C175.453 73.3416 174.806 74.7844 174.158 76.2272ZM393.198 73.4619C392.412 72.0491 391.44 70.6665 390.422 69.404L391.625 68.9832C392.689 70.2757 393.661 71.6884 394.494 73.1613L393.198 73.4619ZM308.201 72.4399L307.276 71.7486C309.08 70.7566 310.885 69.7647 312.643 68.863L313.522 69.5844C311.764 70.4861 309.959 71.448 308.201 72.4399ZM177.859 67.5404L176.518 67.3C177.165 65.7369 177.721 64.3242 178.23 62.9415L179.571 63.152C179.062 64.5346 178.507 65.9774 177.859 67.5404ZM319.074 66.9092L318.288 66.1578C320.185 65.2861 322.174 64.4444 324.118 63.6329L324.858 64.3843C322.868 65.1959 320.971 66.0375 319.074 66.9092ZM386.674 65.7069C385.24 64.5346 383.667 63.4525 382.001 62.4907L382.926 61.7993C384.685 62.7913 386.304 63.9034 387.785 65.1358L386.674 65.7069ZM330.781 62.16L330.133 61.3785C330.364 61.2884 330.595 61.1982 330.873 61.1381C332.724 60.5068 334.575 59.9057 336.425 59.3947L336.981 60.2363C335.176 60.7473 333.325 61.3184 331.521 61.9496C331.243 62.0097 331.012 62.0699 330.781 62.16ZM376.449 59.9658C374.505 59.2444 372.423 58.6432 370.249 58.1924L370.665 57.3207C372.932 57.8016 375.107 58.4028 377.143 59.1542L376.449 59.9658ZM181.191 58.7334L179.849 58.5531C180.358 57.0502 180.821 55.5473 181.237 54.1345L182.625 54.2848C182.163 55.7276 181.7 57.2305 181.191 58.7334ZM343.366 58.6432L342.949 57.7716C345.217 57.3207 347.53 56.9299 349.751 56.6594L349.982 57.5612C347.808 57.8317 345.587 58.1924 343.366 58.6432ZM363.632 57.2606C361.457 57.0802 359.144 57.0201 356.83 57.0802L356.784 56.1785C359.19 56.1184 361.55 56.1785 363.817 56.3588L363.632 57.2606ZM183.689 49.8362L182.301 49.716C182.625 48.2131 182.903 46.7102 183.134 45.2674L184.522 45.3576C184.291 46.8004 184.013 48.3033 183.689 49.8362ZM184.985 40.8188L183.597 40.7888C183.643 39.857 183.689 38.9252 183.689 38.0535C183.689 37.4824 183.689 36.9113 183.643 36.3101L185.031 36.2801C185.031 36.8512 185.077 37.4523 185.077 38.0234C185.077 38.9552 185.031 39.887 184.985 40.8188ZM75.8812 36.6708L74.8633 36.0396C76.2976 35.0777 77.7783 33.9956 79.4902 32.7032L80.5544 33.3043C78.8425 34.5968 77.3156 35.709 75.8812 36.6708ZM183.227 31.8315C182.995 30.3286 182.671 28.8557 182.301 27.4129L183.689 27.2626C184.106 28.7355 184.383 30.2384 184.615 31.7714L183.227 31.8315ZM85.0889 29.8777L84.0247 29.3066C85.1814 28.4049 86.3844 27.4731 87.5874 26.5112L88.4665 25.8199L89.5307 26.391L88.6516 27.0823C87.4486 28.0141 86.2456 28.9459 85.0889 29.8777ZM180.821 23.0545C180.451 22.1528 180.034 21.251 179.618 20.3493C179.34 19.8383 179.062 19.2973 178.785 18.7863L180.08 18.4556C180.404 18.9967 180.682 19.5077 180.96 20.0487C181.422 20.9505 181.839 21.8823 182.209 22.784L180.821 23.0545ZM93.9264 22.9343L92.8622 22.3632C94.5279 21.1007 96.0085 19.9585 97.3966 18.9366L98.4608 19.5377C97.0727 20.5296 95.5921 21.6418 93.9264 22.9343ZM103.088 16.1712L102.07 15.5701C103.736 14.3978 105.355 13.3157 106.928 12.3238L107.9 12.955C106.373 13.9169 104.753 14.999 103.088 16.1712ZM175.916 14.7585C174.806 13.4359 173.603 12.1735 172.261 11.0012L173.371 10.4602C174.759 11.6625 176.009 12.9851 177.165 14.3076L175.916 14.7585ZM112.989 9.91915L112.064 9.22782C113.915 8.20585 115.766 7.24399 117.524 6.40236L118.357 7.12376C116.598 7.96538 114.794 8.89718 112.989 9.91915ZM167.819 7.63474C166.153 6.58271 164.441 5.62085 162.59 4.77923L163.377 4.02778C165.274 4.89946 167.079 5.89138 168.791 6.97347L167.819 7.63474ZM124.094 4.68906L123.4 3.90755C125.482 3.12604 127.611 2.4347 129.693 1.89366L130.202 2.73528C128.212 3.24627 126.176 3.90755 124.094 4.68906ZM156.668 2.58499C154.586 1.98383 152.411 1.53296 150.19 1.26244L150.468 0.390755C152.735 0.691335 155.002 1.14221 157.223 1.77342L156.668 2.58499ZM136.726 1.41273L136.448 0.541045C138.762 0.210406 141.121 0.030058 143.435 0L143.481 0.901741C141.26 0.931799 138.993 1.11215 136.726 1.41273Z" fill="#202124"></path>
						</svg>
					</figure>

					<div class="row g-4 position-relative">
						<!-- Title and inputs -->
						<div class="col-lg-6">
							<!-- Title -->
							<h3 class="text-white text-coloro text-light ">Let's talk about your digital agency goals</h3>

							<!-- Search -->
							<form class="col-md-10 bg-body rounded-2 p-2 mt-4">
								<div class="input-group">
									<input class="form-control focus-shadow-none border-0 me-1" type="email" placeholder="Your email address">
									<button type="button" class="btn btn-dark rounded-2">Subscribe</button>
								</div>
							</form>
						</div>

						<!-- Content -->
						<div class="col-lg-5 col-xl-4 ms-auto text-lg-end">
							<ul class="list-group list-group-borderless mb-0">
								<li class="list-group-item mb-0">
									<a href="#" class="text-white fw-normal">
										<i class="bi bi-headset me-1"></i> Call on: 0125 258 993 22
								</a>
								</li>
								<li class="list-group-item text-white fw-normal mb-0">
									<i class="bi bi-clock me-1"></i> Time: 9am to 5pm (Sunday close)
								</li>
								<li class="list-group-item mb-0">
									<a href="#" class="text-white fw-normal">
										<i class="bi bi-envelope me-1"></i> Email: example@gmail.com
								</a>
								</li>
							</ul>
						</div>
					</div> <!-- Row END -->
				</div>
			</div>
		</section>

		

		<!-- =======================
		Main Banner START -->
		<section class="bg-light position-relative overflow-hidden">
			<!-- Big text decoration -->
			<div class="text-end position-absolute top-0 end-0 mt-md-6 me-n4">
				<h6 class="mb-0" style="font-size:350px; opacity:0.03;">Air</h6>
				<h6 class="mb-0" style="font-size:350px; opacity:0.03;">Pods</h6>
			</div>

			<!-- SVG decoration -->
			<figure class="position-absolute bottom-0 start-0 mb-n8 ms-n7">
				<svg class="fill-body" width="805" height="234" viewBox="0 0 805 234" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M397.811 234.041H407.242L407.242 0.0406647H397.811V234.041Z"></path>
					<path d="M375.791 199.177H385.223V34.9041H375.791V199.177Z"></path>
					<path d="M287.248 195.945H296.68V38.021H287.248V195.945Z"></path>
					<path d="M220.959 195.945H230.391L230.391 38.0206H220.959L220.959 195.945Z"></path>
					<path d="M66.2796 195.945H75.7109L75.7109 38.021H66.2796L66.2796 195.945Z"></path>
					<path d="M419.944 199.177H429.375V34.9041H419.944V199.177Z"></path>
					<path d="M353.655 182.438H363.086V51.6427H353.655V182.438Z"></path>
					<path d="M442.08 182.438H451.512V51.6427H442.08V182.438Z"></path>
					<path d="M486.237 182.438H495.668V51.6427H486.237V182.438Z"></path>
					<path d="M530.506 182.438H539.938V51.6427H530.506V182.438Z"></path>
					<path d="M508.373 195.945H517.805V38.0206H508.373V195.945Z"></path>
					<path d="M574.662 195.945H584.094V38.0206H574.662V195.945Z"></path>
					<path d="M309.385 182.669H318.816V51.4123H309.385V182.669Z"></path>
					<path d="M265.229 182.669H274.66V51.4123H265.229V182.669Z"></path>
					<path d="M154.666 182.669H164.098L164.098 51.4123H154.666L154.666 182.669Z"></path>
					<path d="M88.4163 182.669H97.8477L97.8477 51.4123H88.4163L88.4163 182.669Z"></path>
					<path d="M331.518 159.119H340.949V74.9622H331.518V159.119Z"></path>
					<path d="M464.217 159.119H473.648V74.9622H464.217V159.119Z"></path>
					<path d="M552.643 151.5H562.074V82.5815H552.643V151.5Z"></path>
					<path d="M596.799 151.5H606.23V82.5815H596.799V151.5Z"></path>
					<path d="M685.104 151.5H694.535V82.581H685.104V151.5Z"></path>
					<path d="M751.51 162.928H760.941V71.0368H751.51V162.928Z"></path>
					<path d="M773.491 154.386H782.922V79.6949H773.491V154.386Z"></path>
					<path d="M795.627 142.38H805.059V91.7008H795.627V142.38Z"></path>
					<path d="M618.932 169.624H628.363V64.457H618.932V169.624Z"></path>
					<path d="M663.084 169.624H672.516V64.457H663.084V169.624Z"></path>
					<path d="M640.991 182.669H650.422V51.4123H640.991V182.669Z"></path>
					<path d="M707.241 182.669H716.672V51.4118H707.241V182.669Z"></path>
					<path d="M729.377 195.945H738.809V38.0206H729.377V195.945Z"></path>
					<path d="M44.1468 162.929H53.5781L53.5781 71.0372H44.1468L44.1468 162.929Z"></path>
					<path d="M176.803 169.624H186.234V64.457H176.803V169.624Z"></path>
					<path d="M132.573 169.624H142.004V64.457H132.573V169.624Z"></path>
					<path d="M243.092 151.5H252.523V82.581H243.092V151.5Z"></path>
					<path d="M198.823 151.5H208.254V82.581H198.823V151.5Z"></path>
					<path d="M110.553 151.5H119.984L119.984 82.581H110.553L110.553 151.5Z"></path>
					<path d="M22.1663 154.386H31.5977L31.5977 79.6954H22.1663L22.1663 154.386Z"></path>
					<path d="M0.0295906 142.38H9.46094L9.46094 91.7012H0.0295906L0.0295906 142.38Z"></path>
				</svg>
			</figure>

			<div class="container position-relative pt-5">
				<div class="row">
					<!-- Hero Title and content -->
					<div class="col-lg-7 mb-6 mb-lg-0">
						<!-- Title -->
						<h1 class="display-4 lh-base mb-4">Magic Like You've Never Heard</h1>
						<p class="mb-4">Welcome to our AirPods landing page! Here, you will discover everything you need to know about the revolutionary wireless earbuds from Mizzle.</p>
						<a href="#" class="btn btn-lg btn-primary mb-0">Purchase Now</a>
						<hr class="my-4 my-sm-6"> <!-- Divider -->

						<!-- Product options -->
						<div class="row g-4 align-items-center">
							<!-- Product Image -->
							<div class="col-6 col-sm-3">
								<img src="assets/images/products/01.png" alt="product-img">
							</div>

							<!-- Product Content -->
							<div class="col-sm-8">
								<h5 class="mb-3">Now with 4 new exciting colors</h5>
								<p class="heading-color mb-3">AirPods are also designed with comfort in mind. They come with different ear tip sizes to fit a variety of ear shapes and sizes.</p>
								
								<!-- Radio color tabs -->
								<div class="nav nav-tabs nav-tabs-radio border-0" role="tablist">
									<!-- Item -->
									<div class="nav-link p-0 me-2" data-bs-toggle="tab" data-bs-target="#white" aria-selected="false" tabindex="-1" role="tab">
										<input class="btn-check" type="radio" name="color" id="white-color" checked="">
										<label class="btn btn-icon btn-xs mb-0" for="white-color">
											<span class="d-block" style="background-color: #fff;"></span>
										</label>
									</div>
									<!-- Item -->
									<div class="nav-link p-0 me-2" data-bs-toggle="tab" data-bs-target="#yellow" aria-selected="false" tabindex="-1" role="tab">
										<input class="btn-check" type="radio" name="color" id="yellow-color">
										<label class="btn btn-icon btn-xs mb-0" for="yellow-color">
											<span class="d-block" style="background-color: #F7C32E;"></span>
										</label>
									</div>
									<!-- Item -->
									<div class="nav-link p-0 me-2" data-bs-toggle="tab" data-bs-target="#blue" aria-selected="false" role="tab" tabindex="-1">
										<input class="btn-check" type="radio" name="color" id="blue-color">
										<label class="btn btn-icon btn-xs mb-0" for="blue-color">
											<span class="d-block" style="background-color: #32C7F5;"></span>
										</label>
									</div>
									<!-- Item -->
									<div class="nav-link p-0 me-2" data-bs-toggle="tab" data-bs-target="#green" aria-selected="false" role="tab">
										<input class="btn-check" type="radio" name="color" id="green-color">
										<label class="btn btn-icon btn-xs mb-0" for="green-color">
											<span class="d-block" style="background-color: #348866;"></span>
										</label>
									</div>
								</div>
								
							</div>
						</div>
					</div>

					<!-- Hero Image -->
					<div class="col-sm-10 col-lg-5 position-relative px-5 mx-auto">
						<img src="assets/images/products/hero-img.png" alt="hero-img">

						<!-- Navigation decoration -->
						<div class="position-absolute top-0 start-0">
							<div class="position-relative">
								<button type="button" class="btn btn-white btn-ripple btn-round text-primary z-index-1" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-content="And here's some amazing content. It's very engaging. Right?">
									<i class="bi bi-plus-lg"></i>
								</button>
								<!-- SVG decoration -->
								<figure class="position-absolute top-50 start-50 mt-n1">
									<svg width="249" height="69" viewBox="0 0 249 69" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M244 66V1H0" stroke="#DCE0E5"></path>
										<circle class="fill-primary" cx="244" cy="64" r="5"></circle>
									</svg>
								</figure>
							</div>
						</div>

						<!-- Navigation decoration -->
						<div class="position-absolute bottom-0 end-0 me-lg-4 me-xl-8 mb-lg-9 mb-xl-7">
							<div class="position-relative">
								<button type="button" class="btn btn-white btn-ripple btn-round text-primary z-index-1 mb-0 mt-n1" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-content="And here's some amazing content. It's very engaging. Right?">
									<i class="bi bi-plus-lg"></i>
								</button>
								<!-- SVG decoration -->
								<figure class="position-absolute bottom-100 end-100 mb-n3">
									<svg width="175" height="90" viewBox="0 0 175 90" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M5 4V89H175" stroke="#DCE0E5"></path>
										<circle class="fill-primary" cx="5" cy="5" r="5" transform="rotate(180 5 5)"></circle>
									</svg>
								</figure>
							</div>
						</div>
					</div>
				</div> <!-- Row END -->
			</div>
		</section>
		<!-- =======================
		Main Banner END -->

		<!-- =======================
		Technical details START -->
		<section class="pb-0">
			<div class="container">
				<!-- Title -->
				<div class="inner-container text-center mb-4 mb-sm-6">
					<h2 class="mb-4">Technical details</h2>
					<p class="mb-0">The sound quality of AirPods is impressive. They offer rich, clear, and well-balanced audio performance, making them ideal for listening to music, watching movies, or making calls.</p>
				</div>

				<!-- Technical features START -->
				<div class="row g-4 align-items-center">
					<!-- Features -->
					<div class="col-lg-4 order-1">
						<!-- Item -->
						<div class="d-flex justify-content-lg-end mb-4 mb-lg-8">
							<div class="text-lg-end order-1 ms-3 ms-lg-0 me-lg-3">
								<h6 class="mb-1">Audio Specification</h6>
								<small>(Custom high-excursion, Noise Cancellation, Adaptive Transparency, Adaptive EQ)</small>
							</div>
							<!-- Icon -->
							<div class="icon-lg bg-light heading-color rounded flex-shrink-0 order-lg-2"><i class="bi bi-volume-up fa-xl"></i></div>
						</div>

						<!-- Item -->
						<div class="d-flex justify-content-lg-end mb-4 mb-lg-8 me-5">
							<div class="text-lg-end order-1 ms-3 ms-lg-0 me-lg-3">
								<h6 class="mb-1">Physical Units</h6>
								<small>Height: 1.78 inches, Width: 2.39 inches, Depth: 0.85 inches, Weight: 1.79 ounces</small>
							</div>
							<!-- Icon -->
							<div class="icon-lg bg-light heading-color rounded flex-shrink-0 order-lg-2"><i class="bi bi-rulers fa-xl"></i></div>
						</div>

						<!-- Item -->
						<div class="d-flex justify-content-lg-end">
							<div class="text-lg-end order-1 ms-3 ms-lg-0 me-lg-3">
								<h6 class="mb-1">Immersive Sound</h6>
								<small>Personalized Spatial Audio with dynamic head tracking</small>
							</div>
							<!-- Icon -->
							<div class="icon-lg bg-light heading-color rounded flex-shrink-0 order-lg-2"><i class="bi bi-soundwave fa-xl"></i></div>
						</div>
					</div>

					<!-- Image -->
					<div class="col-md-7 col-lg-4 mx-auto position-relative order-lg-2">
						<img src="assets/images/products/02.png" class="px-4 z-index-1 position-relative" alt="Technical-img">
						<!-- SVG decoration -->
						<figure class="position-absolute top-50 start-0 mt-n8 ms-n7 ms-xl-n3 d-none d-md-block">
							<svg class="fill-dark" style="opacity:0.04;" width="462" height="134" viewBox="0 0 462 134" xmlns="http://www.w3.org/2000/svg">
								<path d="M228.306 134.023H233.719L233.719 0.0231934H228.306L228.306 134.023Z"></path>
								<path d="M215.669 114.059H221.082V19.9878H215.669V114.059Z"></path>
								<path d="M164.853 112.208H170.266V21.7726H164.853V112.208Z"></path>
								<path d="M126.81 112.208H132.223V21.7724H126.81L126.81 112.208Z"></path>
								<path d="M38.0364 112.208H43.4492L43.4492 21.7726H38.0364L38.0364 112.208Z"></path>
								<path d="M241.009 114.059H246.422V19.9878H241.009V114.059Z"></path>
								<path d="M202.966 104.473H208.379V29.573H202.966V104.473Z"></path>
								<path d="M253.712 104.473H259.125V29.573H253.712V104.473Z"></path>
								<path d="M279.056 104.473H284.469V29.573H279.056V104.473Z"></path>
								<path d="M304.462 104.473H309.875V29.573H304.462V104.473Z"></path>
								<path d="M291.759 112.208H297.172V21.7724H291.759V112.208Z"></path>
								<path d="M329.806 112.208H335.219V21.7724H329.806V112.208Z"></path>
								<path d="M177.556 104.605H182.969V29.4412H177.556V104.605Z"></path>
								<path d="M152.216 104.605H157.629V29.4412H152.216V104.605Z"></path>
								<path d="M88.763 104.605H94.1758L94.1758 29.4412H88.763L88.763 104.605Z"></path>
								<path d="M50.7396 104.605H56.1523L56.1523 29.4412H50.7396L50.7396 104.605Z"></path>
								<path d="M190.259 91.1194H195.672V42.927H190.259V91.1194Z"></path>
								<path d="M266.419 91.1194H271.832V42.927H266.419V91.1194Z"></path>
								<path d="M317.165 86.7563H322.578V47.2901H317.165V86.7563Z"></path>
								<path d="M342.509 86.7563H347.922V47.2901H342.509V86.7563Z"></path>
								<path d="M393.189 86.7561H398.602V47.2899H393.189V86.7561Z"></path>
								<path d="M431.298 93.3008H436.711V40.6792H431.298V93.3008Z"></path>
								<path d="M443.915 88.4087H449.328V45.6371H443.915V88.4087Z"></path>
								<path d="M456.618 81.5334H462.031V52.5122H456.618V81.5334Z"></path>
								<path d="M355.212 97.1353H360.625V36.9113H355.212V97.1353Z"></path>
								<path d="M380.552 97.1353H385.965V36.9113H380.552V97.1353Z"></path>
								<path d="M367.872 104.605H373.285V29.4412H367.872V104.605Z"></path>
								<path d="M405.892 104.605H411.305V29.4409H405.892V104.605Z"></path>
								<path d="M418.595 112.208H424.008V21.7724H418.595V112.208Z"></path>
								<path d="M25.3333 93.301H30.7461L30.7461 40.6794H25.3333L25.3333 93.301Z"></path>
								<path d="M101.466 97.1353H106.879L106.879 36.9113H101.466V97.1353Z"></path>
								<path d="M76.0833 97.1353H81.4961L81.4961 36.9113H76.0833V97.1353Z"></path>
								<path d="M139.513 86.7561H144.926V47.2899H139.513V86.7561Z"></path>
								<path d="M114.103 86.7561H119.516V47.2899H114.103V86.7561Z"></path>
								<path d="M63.4466 86.7561H68.8594V47.2899H63.4466L63.4466 86.7561Z"></path>
								<path d="M12.72 88.4092H18.1328L18.1328 45.6376H12.72L12.72 88.4092Z"></path>
								<path d="M0.0169144 81.5337H5.42969L5.42969 52.5125H0.0169144L0.0169144 81.5337Z"></path>
							</svg>
						</figure>
					</div>

					<!-- Features -->
					<div class="col-lg-4 order-3">
						<!-- Item -->
						<div class="d-flex mb-4 mb-lg-8">
							<!-- Icon -->
							<div class="icon-lg bg-light heading-color rounded flex-shrink-0"><i class="bi bi-box-seam fa-xl"></i></div>
							<div class="ms-3">
								<h6 class="mb-1">Included In Box</h6>
								<small>AirPods Pro, Charging Casen, USB-C Cable, Documentation</small>
							</div>
						</div>

						<!-- Item -->
						<div class="d-flex mb-4 mb-lg-8 ms-lg-5">
							<!-- Icon -->
							<div class="icon-lg bg-light heading-color rounded flex-shrink-0"><i class="bi bi-battery-charging fa-xl"></i></div>
							<div class="ms-3">
								<h6 class="mb-1">Best Battery Life</h6>
								<small>Up to 30 hours of listening time, Up to 24 hours of talk time</small>
							</div>
						</div>

						<!-- Item -->
						<div class="d-flex">
							<!-- Icon -->
							<div class="icon-lg bg-light heading-color rounded flex-shrink-0"><i class="bi bi-fingerprint fa-xl"></i></div>
							<div class="ms-3">
								<h6 class="mb-1">Sensors</h6>
								<small>Dual beamforming microphones, Skin-detect sensor, Touch control</small>
							</div>
						</div>
					</div>
				</div>
				<!-- Technical features END -->
			</div>
		</section>
		<!-- =======================
		Technical details END -->

		<!-- =======================
		Featured START -->
		<section class="pb-0">
			<div class="container">
				<div class="row g-0 bg-light rounded overflow-hidden">
					<!-- Content -->
					<div class="col-md-6">
						<div class="card card-body bg-transparent d-block p-4 p-md-5 p-lg-7 h-100">
							<!-- Title -->
							<h2 class="mb-4">With special audio that places sound all around you</h2>
							<p class="mb-4">Why end might ask civil again spoil. Dinner she our horses depend remember at children by reserved to vicinity. </p>
							<!-- List -->
							<ul class="list-group list-group-borderless mb-4">
								<li class="list-group-item d-flex heading-color pb-0"><i class="bi bi-patch-check-fill text-primary me-2"></i>Press once to play, pause or answer a phone call</li>
								<li class="list-group-item d-flex heading-color pb-0"><i class="bi bi-patch-check-fill text-primary me-2"></i>Press twice to skip forward</li>
								<li class="list-group-item d-flex heading-color pb-0"><i class="bi bi-patch-check-fill text-primary me-2"></i>Press three times to skip back</li>
								<li class="list-group-item d-flex heading-color pb-0"><i class="bi bi-patch-check-fill text-primary me-2"></i>Press and hold to switch between Active Noise Cancellation.</li>
								<li class="list-group-item d-flex heading-color pb-0"><i class="bi bi-patch-check-fill text-primary me-2"></i>Swipe up or down to adjust volume</li>
							</ul>
							<!-- Button -->
							<a href="#" class="btn btn-dark mb-0">Click here for more detail</a>
						</div>
					</div>

					<!-- Image -->
					<div class="col-md-6"> 
						<div class="h-100 py-8 py-md-0" style="background:url(assets/images/about/08.jpg) no-repeat; background-size:cover;"></div>
					</div>
				</div> <!-- Row END -->
			</div>
		</section>
		<!-- =======================
		Featured END -->

		<!-- =======================
		product image START -->
		<section class="pb-0">
			<div class="container">
				<div class="row">
					<div class="col-md-10 mx-auto">
						<img src="assets/images/products/detail-img.png" alt="product-mechanism">
					</div>
				</div>
			</div>
		</section>
		<!-- =======================
		product image END -->

		<!-- =======================
		Featured START -->
		<section class="pb-0">
			<div class="container">
				<div class="row g-0 bg-light rounded overflow-hidden">
					<!-- Image -->
					<div class="col-md-6"> 
						<div class="h-100 py-8 py-md-0" style="background:url(assets/images/about/09.jpg) no-repeat; background-size:cover; background-position:center;"></div>
					</div>

					<!-- Content -->
					<div class="col-md-6">
						<div class="card card-body bg-transparent d-block p-4 p-md-5 p-lg-7 h-100">
							<!-- Title -->
							<h2 class="mb-4">A magical connection to your devices.</h2>
							<p class="mb-4">Why end might ask civil again spoil. Dinner she our horses depend remember at children by reserved to vicinity.</p>
							<!-- Feature -->
							<div class="row row-cols-2 row-cols-lg-3 g-4 mb-4">
								<div class="col">
									<span class="heading-color">More than</span>
									<h4 class="my-2">24</h4>
									<p class="mb-0">Of battery life with charging case</p>
								</div>
								<div class="col">
									<span class="heading-color">Up to</span>
									<h4 class="my-2">5 hr</h4>
									<p class="mb-0">Of listing time on one charge</p>
								</div>
								<div class="col">
									<span class="heading-color">Connectivity</span>
									<h4 class="my-2"><i class="fa-brands fa-bluetooth-b"></i></h4>
									<p class="mb-0">Bluetooth 5.3 wireless technology</p>
								</div>
							</div>
							<!-- Button -->
							<a href="#" class="btn btn-dark mb-0">View full specifications</a>
						</div>
					</div>
				</div> <!-- Row END -->
			</div>
		</section>
		<!-- =======================
		Featured END -->

		<!-- =======================
		Product list START -->
		<section>
			<div class="container">
				<div class="row g-4">
					<!-- Title -->
					<div class="col-md-4">
						<h2 class="text-center text-md-start">The perfect Airpods that suit you</h2>
						<!-- Slider arrow -->
						<div class="d-flex justify-content-center justify-content-md-start gap-3 position-relative mt-5 mt-md-6">
							<a href="#" class="btn btn-dark btn-icon rounded-circle mb-0 swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-44e517c9dd4a35c5" aria-disabled="false"><i class="bi bi-arrow-left"></i></a>
							<a href="#" class="btn btn-dark btn-icon rounded-circle mb-0 swiper-button-next swiper-button-disabled" tabindex="-1" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-44e517c9dd4a35c5" aria-disabled="true"><i class="bi bi-arrow-right"></i></a>
						</div>	
					</div>

					<!-- Products -->
					<div class="col-md-8">
						<!-- Slider START -->
						<div class="swiper swiper-initialized swiper-horizontal swiper-backface-hidden" data-swiper-options="{
							&quot;loop&quot;: false, 
							&quot;spaceBetween&quot;: 30,
							&quot;navigation&quot;:{
								&quot;nextEl&quot;:&quot;.swiper-button-next&quot;,
								&quot;prevEl&quot;:&quot;.swiper-button-prev&quot;
							},
							&quot;breakpoints&quot;: {
								&quot;576&quot;: {&quot;slidesPerView&quot;: 2}, 
								&quot;768&quot;: {&quot;slidesPerView&quot;: 2}, 
								&quot;992&quot;: {&quot;slidesPerView&quot;: 3}
							}}">

							<!-- Slider items -->
							<div class="swiper-wrapper" id="swiper-wrapper-44e517c9dd4a35c5" aria-live="off" style="transition-duration: 0ms; transform: translate3d(-507.333px, 0px, 0px); transition-delay: 0ms;">

								<!-- Slider item -->
								<div class="swiper-slide" role="group" aria-label="1 / 5" style="width: 223.667px; margin-right: 30px;">
									<div class="card bg-transparent text-center p-0">
										<!-- Image -->
										<img src="assets/images/products/03.png" class="px-5" alt="product-img">
										<div class="card-body p-0 mt-3">
											<!-- Title -->
											<h6 class="card-title mb-3"><a href="#">Airpods Drop 2</a></h6>
											<!-- Price -->
											<div class="d-flex align-items-center justify-content-center mb-3">
												<h6 class="fw-normal mb-0 me-1">$225</h6>
												<span class="text-decoration-line-through">$305</span>
											</div>
											<!-- Button -->
											<a href="#" class="btn btn-sm btn-primary mb-0">Buy now</a>
										</div>
									</div>
								</div>

								<!-- Slider item -->
								<div class="swiper-slide swiper-slide-prev" role="group" aria-label="2 / 5" style="width: 223.667px; margin-right: 30px;">
									<div class="card bg-transparent text-center p-0">
										<!-- Image -->
										<img src="assets/images/products/04.png" class="px-5" alt="product-img">
										<div class="card-body p-0 mt-3">
											<!-- Title -->
											<h6 class="card-title mb-3"><a href="#">Airpods pro Drop</a></h6>
											<!-- Price -->
											<h6 class="fw-normal mb-3 me-1">$350</h6>
											<!-- Button -->
											<a href="#" class="btn btn-sm btn-primary mb-0">Buy now</a>
										</div>
									</div>
								</div>

								<!-- Slider item -->
								<div class="swiper-slide swiper-slide-active" role="group" aria-label="3 / 5" style="width: 223.667px; margin-right: 30px;">
									<div class="card bg-transparent text-center p-0">
										<!-- Image -->
										<img src="assets/images/products/05.png" class="px-5" alt="product-img">
										<div class="card-body p-0 mt-3">
											<!-- Title -->
											<h6 class="card-title mb-3"><a href="#">Airpods pro max</a></h6>
											<!-- Price -->
											<div class="d-flex align-items-center justify-content-center mb-3">
												<h6 class="fw-normal mb-0 me-1">$315</h6>
												<span class="text-decoration-line-through">$350</span>
											</div>
											<!-- Button -->
											<a href="#" class="btn btn-sm btn-primary mb-0">Buy now</a>
										</div>
									</div>
								</div>

								<!-- Slider item -->
								<div class="swiper-slide swiper-slide-next" role="group" aria-label="4 / 5" style="width: 223.667px; margin-right: 30px;">
									<div class="card bg-transparent text-center p-0">
										<!-- Image -->
										<img src="assets/images/products/04.png" class="px-5" alt="product-img">
										<div class="card-body p-0 mt-3">
											<!-- Title -->
											<h6 class="card-title mb-3"><a href="#">Airpods pro Drop</a></h6>
											<!-- Price -->
											<h6 class="fw-normal mb-3 me-1">$350</h6>
											<!-- Button -->
											<a href="#" class="btn btn-sm btn-primary mb-0">Buy now</a>
										</div>
									</div>
								</div>

								<!-- Slider item -->
								<div class="swiper-slide" role="group" aria-label="5 / 5" style="width: 223.667px; margin-right: 30px;">
									<div class="card bg-transparent text-center p-0">
										<!-- Image -->
										<img src="assets/images/products/05.png" class="px-5" alt="product-img">
										<div class="card-body p-0 mt-3">
											<!-- Title -->
											<h6 class="card-title mb-3"><a href="#">Airpods pro 2.0</a></h6>
											<!-- Price -->
											<h6 class="fw-normal mb-3 me-1">$285</h6>
											<!-- Button -->
											<a href="#" class="btn btn-sm btn-primary mb-0">Buy now</a>
										</div>
									</div>
								</div>
							</div>
						<span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>		
						<!-- Slider END -->
					</div>

				</div>
			</div>
		</section>
		<!-- =======================
		Product list START -->

		<!-- =======================
		Video START -->
		<section class="bg-parallax position-relative h-400px h-xl-600px" style="background: none center center / cover no-repeat; z-index: 0;" data-jarallax-original-styles="background:url(assets/images/products/video-img.jpg) no-repeat; background-size:cover; background-position:center;">
			<div class="position-absolute top-50 start-50 translate-middle">
				<a href="https://www.youtube.com/embed/tXHviS-4ygo" class="btn btn-icon btn-xl btn-dark btn-round mb-0 stretched-link" data-glightbox="" data-gallery="Video"><i class="bi bi-play-fill fa-lg"></i></a>
			</div>
		<div id="jarallax-container-0" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; z-index: -100;"><div style="background-position: 50% 50%; background-size: cover; background-repeat: no-repeat; background-image: url(&quot;https://mizzle.webestica.com/assets/images/products/video-img.jpg&quot;); position: absolute; top: 0px; left: 0px; width: 1349px; height: 507.2px; overflow: hidden; pointer-events: none; transform-style: preserve-3d; backface-visibility: hidden; will-change: transform, opacity; margin-top: -69.6px; transform: translate3d(0px, -256.875px, 0px);"></div></div></section> 
		<!-- =======================
		Video END -->

		<!-- =======================
		Testimonials and contact form START -->
		<section>
			<div class="container">
				<div class="row g-4">
					<!-- Testimonials -->
					<div class="col-lg-5">
						<div class="card card-body bg-dark p-sm-5">
							<!-- Quote icon -->
							<span class="display-5 text-primary"><i class="bi bi-quote"></i></span>
							<p class="text-white fs-5">The sound quality is impressive for earbuds of this size. The audio is clear, with balanced mids and highs. The bass isn't overpowering, but it's adequate for most music genres.</p>
							<!-- Star -->
							<ul class="list-inline mb-0">
								<li class="list-inline-item me-0"><i class="bi bi-star-fill text-white fs-6"></i></li>
								<li class="list-inline-item me-0"><i class="bi bi-star-fill text-white fs-6"></i></li>
								<li class="list-inline-item me-0"><i class="bi bi-star-fill text-white fs-6"></i></li>
								<li class="list-inline-item me-0"><i class="bi bi-star-fill text-white fs-6"></i></li>
								<li class="list-inline-item me-0"><i class="bi bi-star-fill text-white fs-6"></i></li>
							</ul>
							<hr class="opacity-1 my-4"> <!-- Divider -->

							<!-- Avatar -->
							<div class="d-sm-flex align-items-center">
								<!-- Avatar -->
								<div class="avatar flex-shrink-0">
									<img class="avatar-img rounded-circle" src="assets/images/avatar/07.jpg" alt="avatar">
								</div>
								<!-- Info -->
								<div class="ms-sm-2 mt-2 mt-sm-0">
									<h6 class="text-white mb-0">Dennis Barrett</h6>
									<p class="mb-0 small text-white">CEO and co-founder, MacoInfo</p>
								</div>
							</div>
						</div>
					</div>

					<!-- Contact detail -->
					<div class="col-lg-7 ps-lg-5">
						<!-- Title -->
						<h2 class="mb-4">Discover the Future of Sound with AirPods</h2>

						<!-- Features -->
						<div class="row g-4 g-lg-5">
							<div class="col-md-6">
								<div class="card card-body bg-transparent p-0">
									<div class="icon-md bg-primary bg-opacity-10 text-primary rounded mb-3"><i class="bi bi-fire fa-xl"></i></div>
									<h6 class="mb-2">Seamless Connectivity</h6>
									<p class="mb-0">Effortlessly pair your AirPods with your devices for a hassle-free listening.</p>
								</div>
							</div>

							<div class="col-md-6">
								<div class="card card-body bg-transparent p-0">
									<div class="icon-md bg-primary bg-opacity-10 text-primary rounded mb-3"><i class="bi bi-truck fa-xl"></i></div>
									<h6 class="mb-2">Get flexible delivery</h6>
									<p class="mb-0">Get free delivery or pickup at your Airpods store.</p>
								</div>
							</div>

							<div class="col-md-6">
								<div class="card card-body bg-transparent p-0">
									<div class="icon-md bg-primary bg-opacity-10 text-primary rounded mb-3"><i class="bi bi-earbuds fa-xl"></i></div>
									<h6 class="mb-2">Accessories and Customization</h6>
									<p class="mb-0">Explore a range of accessories and customization options to your AirPods.</p>
								</div>
							</div>

							<div class="col-md-6">
								<div class="card card-body bg-transparent p-0">
									<div class="icon-md bg-primary bg-opacity-10 text-primary rounded mb-3"><i class="bi bi-shield-fill-check fa-xl"></i></div>
									<h6 class="mb-2">Worry-Free Warranty</h6>
									<p class="mb-0">Rest easy with a comprehensive warranty that covers your AirPods against defects.</p>
								</div>
							</div>


						</div>
						
					</div>
				</div> <!-- Row END -->
			</div>
		</section>
		<!-- =======================
		Testimonials and contact form END -->


</main>
