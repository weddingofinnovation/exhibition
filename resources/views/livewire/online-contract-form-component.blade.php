<main>
@section('page_title', 'Great Exhibition To Exhibit')
@section('page_description', '')
@section('page_keyword',  'The Exhibition Network, Exhibition, World largest business event platform, find all upcoming events, business conferences, exhibition 2023, trade shows, global seminars, networking meets and workshops. Browse and connect with visitors attending, participating exhibitors and view profiles of speakers and organizers. Manage, sell event tickets and promote your event on exhbition.org.in')

<style>
	
:root [data-bs-theme=light] {
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

		.card-footer:last-child {
			border-radius: 0 0 var(--bs-card-inner-border-radius) var(--bs-card-inner-border-radius);
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
			--bs-gray-900: #202124;
			fill: var(--bs-gray-900) !important;
		}

		.badge {
			--bs-badge-padding-x: 0.65em;
			--bs-badge-padding-y: 0.35em;
			--bs-badge-font-size: 0.75em;
			--bs-badge-font-weight: 400;
			--bs-badge-color: #fff;
			--bs-border-radius-sm: 0.2rem;
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
			
			color: var(--bs-gray-900);
		}

		
		a {
			--bs-link-color-rgb: 9, 184, 80;
			color: rgba(var(--bs-link-color-rgb), var(--bs-link-opacity, 1));
			text-decoration: none;
		}

		a:hover {
			--bs-link-color-rgb: 9, 184, 80;
			color: rgba(var(--bs-link-color-rgb), var(--bs-link-opacity, 1));
			text-decoration: none;
		}

		/* .bg-light {
			--bs-bg-opacity: 1;
			background-color: rgba(var(--bs-light-rgb), var(--bs-bg-opacity)) !important;
		} */

		.bg-primary {
			--bs-bg-opacity: 1;
			--bs-primary-rgb: 9, 184, 80;
			background-color: rgba(var(--bs-primary-rgb), var(--bs-bg-opacity)) !important;
		}

		/* .texto-bg{
			color: #202124 !important;
		} */

		@media (min-width: 1200px)
		{h2, .h2 {
			font-size: 2.75rem;
		}}

		/* .row {
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
		} */

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

		.text-primary {
			--bs-text-opacity: 1;
			--bs-primary-rgb: 9, 184, 80;
			color: rgba(var(--bs-primary-rgb), var(--bs-text-opacity)) !important;
		}

		

		@media (min-width: 1200px)
		{h5, .h5 {
			font-size: 1.5rem;
		}}

		.bg-colo{
			background-color: #09B850 !important;
		}
		
		.text-pri {
			--bs-light: #09B850;
		}

		.heading-color {
			/* --bs-gray-900: #202124; */
			color: var(--bs-gray-900) !important;
		}

		.bg-light {
			--bs-bg-opacity: 1;
			/* --bs-light-rgb: 248, 248, 248; */
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
			--bs-link-color-rgb: 9, 184, 80;
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
			--bs-border-width: 1px;
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
			--bs-primary-rgb: 9, 184, 80;
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
			--bs-primary-rgb: 9, 184, 80;
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

		.avatar-img {
			width: 100%;
			height: 100%;
			-o-object-fit: cover;
			object-fit: cover;
		}
		
		.avatar-group {
			padding: 0;
			display: -webkit-box;
			display: -ms-flexbox;
			display: flex;
		}

		.avatar-group > li:not(:last-child) {
			margin-right: -0.8rem;
		}
		.avatar-group > li {
			position: relative;
		}
		.avatar-xs {
			height: 2.1875rem;
			width: 2.1875rem;
		}
		.avatar {
			height: 3rem;
			width: 3rem;
			position: relative;
			display: inline-block !important;
		}

		.rounded-4 {
			--bs-border-radius-xl: 0.6rem;
			border-radius: var(--bs-border-radius-xl) !important;
		}

		.h-20px {
			height: 20px !important;
		}

		.dark-mode-item {
			display: none !important;
		}

		.shadow {
			--bs-box-shadow: 0px 0px 40px rgba(29, 58, 83, 0.1);
			-webkit-box-shadow: var(--bs-box-shadow) !important;
			box-shadow: var(--bs-box-shadow) !important;
		}

		.lh-base {
			line-height: 1.5 !important;
		}

		@media (min-width: 1200px)
		{h1, .h1 {
			font-size: 3.6rem;
		}}

		.z-index-n1 {
			z-index: -1 !important;
		}

		@media (min-width: 576px)
		{.d-sm-block {
			display: block !important;
		}}

		.ms-n2 {
			margin-left: -0.5rem !important;
		}
		.translate-middle {
			-webkit-transform: translate(-50%, -50%) !important;
			transform: translate(-50%, -50%) !important;
		}

		@media (min-width: 1200px)
		{.mt-xl-5 {
			margin-top: 2.5rem !important;
		}}
		@media (min-width: 576px)
		{.gap-sm-3 {
			gap: 1rem !important;
		}}
		.gap-1 {
			gap: 0.25rem !important;
		}
		.mt-4 {
			margin-top: 1.6rem !important;
		}
		.flex-wrap {
			-ms-flex-wrap: wrap !important;
			flex-wrap: wrap !important;
		}
		.d-flex {
			display: -webkit-box !important;
			display: -ms-flexbox !important;
			display: flex !important;
		}
		.btn-outline-dark {
			--bs-btn-color: #202124;
			--bs-btn-border-color: #202124;
			--bs-btn-hover-color: #fff;
			--bs-btn-hover-bg: #202124;
			--bs-btn-hover-border-color: #202124;
			--bs-btn-focus-shadow-rgb: 32, 33, 36;
			--bs-btn-active-color: #fff;
			--bs-btn-active-bg: #202124;
			--bs-btn-active-border-color: #202124;
			--bs-btn-active-shadow: none;
			--bs-btn-disabled-color: #202124;
			--bs-btn-disabled-bg: transparent;
			--bs-btn-disabled-border-color: #202124;
			--bs-gradient: none;
		}

		hr {
			margin: 1rem 0;
			color: #85878a;
			border: 0;
			border-top: var(--bs-border-width) solid;
			opacity: 0.25;
		}

		.fs-6 {
			font-size: 1.2rem !important;
		}

		@media (min-width: 768px)
		{.text-md-end {
			text-align: right !important;
		}}
		.ms-auto {
			margin-left: auto !important;
		}
		@media (min-width: 1200px)
		{.col-xl-3 {
			-webkit-box-flex: 0;
			-ms-flex: 0 0 auto;
			flex: 0 0 auto;
			width: 25%;
		}}
		@media (min-width: 992px)
		{.col-lg-5 {
			-webkit-box-flex: 0;
			-ms-flex: 0 0 auto;
			flex: 0 0 auto;
			width: 41.66666667%;
		}}
		@media (min-width: 768px)
		{.col-md-6 {
			-webkit-box-flex: 0;
			-ms-flex: 0 0 auto;
			flex: 0 0 auto;
			width: 50%;
		}}
		@media (min-width: 768px)
		{.mt-md-4 {
			margin-top: 1.5rem !important;
		}}

		@media (min-width: 768px)
		{.justify-content-md-end {
			-webkit-box-pack: end !important;
			-ms-flex-pack: end !important;
			justify-content: flex-end !important;
		}}

		@media (min-width: 576px)
		{.mx-sm-4 {
			margin-right: 1.6rem !important;
			margin-left: 1.6rem !important;
		}}

		p{
			--bs-body-font-family: "Inter", sans-serif;
			--bs-body-font-size: 1rem;
			--bs-body-font-weight: 400;
			--bs-body-line-height: 1.5;
			
			font-family: var(--bs-body-font-family);
			font-size: var(--bs-body-font-size);
			font-weight: var(--bs-body-font-weight);
			line-height: var(--bs-body-line-height);
			
		}
		
		.bi-quote::before {
    content: "\f6b0";
}
.bi::before, [class^="bi-"]::before, [class*=" bi-"]::before {
    display: inline-block;
    font-family: bootstrap-icons !important;
    font-style: normal;
    font-weight: normal !important;
    font-variant: normal;
    text-transform: none;
    line-height: 1;
    vertical-align: -.125em;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

.nav-pills .nav-link {
    cursor: pointer;
    padding: 0.5rem 1rem;
    color: var(--bs-primary);
    white-space: nowrap;
}
.nav-pills .nav-link {
    border-radius: var(--bs-nav-pills-border-radius);
}
.nav-link {
    display: block;
    padding: var(--bs-nav-link-padding-y) var(--bs-nav-link-padding-x);
    font-size: var(--bs-nav-link-font-size);
    font-weight: var(--bs-nav-link-font-weight);
    color: var(--bs-nav-link-color);
    background: none;
    border: 0;
    -webkit-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out;
}

@media (min-width: 768px)
{.flex-md-column {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: column !important;
    flex-direction: column !important;
}}

.gap-1 {
    gap: 0.25rem !important;
}
.nav-pills {
    --bs-nav-pills-border-radius: 0.313rem;
    --bs-nav-pills-link-active-color: #fff;
    --bs-nav-pills-link-active-bg: #09B850;
}

.nav-pills-primary .nav-link.active, .nav-pills-primary .nav-link:hover {
    color: var(--bs-white);
    background-color: var(--bs-primary);
}

.nav-pills-primary .nav-item {
    padding: 0 !important;
    margin-right: 2px;
    margin-left: 2px;
    border-bottom: 0 !important;
}

.btn-light {
    background: var(--bs-light);
    border-color: var(--bs-light);
    color: var(--bs-gray-900);
}
.btn {
    letter-spacing: 0.5px;
    position: relative;
    overflow: hidden;
    outline: 0;
    margin-bottom: 6px;
}

.ms-2 {
    margin-left: 0.5rem !important;
}
.fa-solid, .fas {
    font-weight: 900;
}
.fa-classic, .fa-regular, .fa-solid, .far, .fas {
    font-family: "Font Awesome 6 Free";
}
.fa, .fa-brands, .fa-classic, .fa-regular, .fa-sharp, .fa-solid, .fab, .far, .fas {
    -moz-osx-font-smoothing: grayscale;
    -webkit-font-smoothing: antialiased;
    display: var(--fa-display, inline-block);
    font-style: normal;
    font-variant: normal;
    line-height: 1;
    text-rendering: auto;
}

.nav {
    --bs-nav-link-padding-x: 0.75rem;
    --bs-nav-link-padding-y: 1rem;
    --bs-nav-link-font-size: 0.938rem;
    --bs-nav-link-font-weight: 500;
    --bs-nav-link-color: #606261;
    --bs-nav-link-hover-color: var(--bs-primary);
    --bs-nav-link-disabled-color: var(--bs-gray-500) !important;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    padding-left: 0;
    margin-bottom: 0;
    list-style: none;
}

.card-metro-hover {
    overflow: hidden;
}
.card {
    --bs-card-spacer-y: 1.25rem;
    --bs-card-spacer-x: 1.25rem;
    --bs-card-title-spacer-y: 0.5rem;
    --bs-card-title-color: var(--bs-gray-900);
    --bs-card-subtitle-color: ;
    --bs-card-border-width: 0;
    --bs-card-border-color: var(--bs-border-color);
    --bs-card-border-radius: 0.4rem;
    --bs-card-box-shadow: ;
    --bs-card-inner-border-radius: 0.4rem;
    --bs-card-cap-padding-y: 1.25rem;
    --bs-card-cap-padding-x: 1.25rem;
    --bs-card-cap-bg: var(--bs-body-bg);
    --bs-card-cap-color: ;
    --bs-card-height: ;
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

.mt-9{
	margin-top: 11rem !important;
}


.accordion {
    --bs-accordion-color: var(--bs-body-color);
    --bs-accordion-bg: var(--bs-body-bg);
    --bs-accordion-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, border-radius 0.15s ease;
    --bs-accordion-border-color: var(--bs-border-color);
    --bs-accordion-border-width: var(--bs-border-width);
    --bs-accordion-border-radius: var(--bs-border-radius);
    --bs-accordion-inner-border-radius: calc(var(--bs-border-radius) -(var(--bs-border-width)));
    --bs-accordion-btn-padding-x: 1.25rem;
    --bs-accordion-btn-padding-y: 1rem;
    --bs-accordion-btn-color: var(--bs-body-color);
    --bs-accordion-btn-bg: var(--bs-accordion-bg);
    --bs-accordion-btn-icon: url(data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='none' stroke='%23212529' stroke-linecap='round' stroke-linejoin='round'%3e%3cpath d='M2 5L8 11L14 5'/%3e%3c/svg%3e);
    --bs-accordion-btn-icon-width: 1.25rem;
    --bs-accordion-btn-icon-transform: rotate(-180deg);
    --bs-accordion-btn-icon-transition: transform 0.2s ease-in-out;
    --bs-accordion-btn-active-icon: url(data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='var%28--bs-primary%29'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e);
    --bs-accordion-btn-focus-box-shadow: none;
    --bs-accordion-body-padding-x: 1.25rem;
    --bs-accordion-body-padding-y: 1rem;
    --bs-accordion-active-color: var(--bs-primary);
    --bs-accordion-active-bg: rgba(var(--bs-primary-rgb), 0.2);
}

.accordion.accordion-bg-light .accordion-item {
    border: none;
    background-color: transparent;
}
.accordion .accordion-item {
    color: var(--bs-body-color);
}
.accordion-item:first-of-type {
    border-top-left-radius: var(--bs-accordion-border-radius);
    border-top-right-radius: var(--bs-accordion-border-radius);
}
.accordion.accordion-bg-light .accordion-item {
    border: none;
    background-color: transparent;
}
.accordion .accordion-item {
    color: var(--bs-body-color);
}
.accordion-item:first-of-type {
    border-top-left-radius: var(--bs-accordion-border-radius);
    border-top-right-radius: var(--bs-accordion-border-radius);
}

.accordion.accordion-bg-light .accordion-button {
	background-color: var(--bs-light) !important; 
    color: var(--bs-gray-900) !important;
}
</style>

    
		<section class="position-relative overflow-hidden pb-0 pt-xl-9" data-bs-theme="light">
			<!-- SVG decoration -->
			<div class="position-absolute top-0 start-0 ms-n7 d-none d-xl-block">
				<img src="{{asset('public/image/decoration-pattern.svg')}}" alt="">
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
									<span class="typed" data-type-text="Web Design Web Dev UI/UX Design">Web Dev</span><span class="ityped-cursor">|</span>
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
						<img src="{{asset('public/image/01.jpg')}}" class="rounded" alt="hero-img">

						<!-- Visitor box START -->
						<div class="d-inline-block bg-dark rounded-4 position-absolute start-0 bottom-0 mb-md-4 ms-md-n5 p-3">
							<div class="d-flex align-items-center">
								<h6 class="text-white mb-0 me-2">5K+</h6>
								<ul class="avatar-group mb-0 align-items-center">
									<li class="avatar avatar-xs">
										<img class="avatar-img rounded-circle" src="{{asset('public/image/visi1.jpg')}}" alt="avatar">
									</li>
									<li class="avatar avatar-xs">
										<img class="avatar-img rounded-circle" src="{{asset('public/image/visi5.jpg')}}" alt="avatar">
									</li>
									<li class="avatar avatar-xs">
										<img class="avatar-img rounded-circle" src="{{asset('public/image/visi2.jpg')}}" alt="avatar">
									</li>
									<li class="avatar avatar-xs">
										<img class="avatar-img rounded-circle" src="{{asset('public/image/visi3.jpg')}}" alt="avatar">
									</li>
									<li class="avatar avatar-xs">
										<img class="avatar-img rounded-circle" src="{{asset('public/image/visi4.jpg')}}" alt="avatar">
									</li>
								</ul>
							</div>
							<p class="text-white mb-0 mt-2">Total visitors per month</p>
						</div>
						<!-- Visitor box END -->

						<!-- Trustpilot review START -->
						<div class="d-inline-block card card-body shadow rounded-4 position-absolute end-0 top-0 p-3 me-lg-n3 me-xxl-n7 mt-n5 d-none d-sm-block">
							<img src="{{asset('public/image/trustpilot.svg')}}" class="light-mode-item h-20px mb-2" alt="Client-img">
							<img src="{{asset('public/image/trustpilot-light.svg')}}" class="dark-mode-item h-20px mb-2" alt="Client-img">
							<div class="d-flex align-items-center">
								<img src="{{asset('public/image/trustpilot-star.svg')}}" class="h-30px" alt="rating-img">
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

		<section class="pb-0" data-bs-theme="light">
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
									<img src="{{asset('public/image/04.svg')}}" class="grayscale" alt="client-img">
								</div>
								<div class="swiper-slide swiper-slide-active" role="group" aria-label="5 / 6" data-swiper-slide-index="4" style="width: 125px; margin-right: 50px;">
									<img src="{{asset('public/image/05.svg')}}" class="grayscale" alt="client-img">
								</div>
								<div class="swiper-slide swiper-slide-next" role="group" aria-label="6 / 6" data-swiper-slide-index="5" style="width: 125px; margin-right: 50px;">
									<img src="{{asset('public/image/01.svg')}}" class="grayscale" alt="client-img">
								</div>
								<div class="swiper-slide" role="group" aria-label="1 / 6" data-swiper-slide-index="0" style="width: 125px; margin-right: 50px;">
									<img src="{{asset('public/image/01.svg')}}" class="grayscale" alt="client-img">
								</div>
								<div class="swiper-slide" role="group" aria-label="2 / 6" data-swiper-slide-index="1" style="width: 125px; margin-right: 50px;">
									<img src="{{asset('public/image/02.svg')}}" class="grayscale" alt="client-img">
								</div>
								<div class="swiper-slide" role="group" aria-label="3 / 6" data-swiper-slide-index="2" style="width: 125px; margin-right: 50px;">
									<img src="{{asset('public/image/03.svg')}}" class="grayscale" alt="client-img">
								</div>
							</div>

						<span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
						<!-- Slider END -->
					</div>
				</div> <!-- Row END -->
			</div>
		</section>

		<section class="sectionlevel" data-bs-theme="light">
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
								<div class="icon-lg bg-white text-primary rounded-circle mb-4 mt-n5">
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
									<i class="bi bi-box fa-fw fs-5"></i>
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
										<li class="list-group-item heading-color mb-0"><i class="bi bi-check-lg text-primary me-1"></i>Free 5 host   domain</li>
										<li class="list-group-item heading-color mb-0"><i class="bi bi-check-lg text-primary me-1"></i>Google Docs style editors</li>
										<li class="list-group-item heading-color mb-0"><i class="bi bi-check-lg text-primary me-1"></i>Support for 30+ languages</li>
										<li class="list-group-item heading-color mb-0"><i class="bi bi-check-lg text-primary me-1"></i>Landing pages   Web widgets</li>
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
								<img src="{{asset('public/image/decoration-pattern-2.svg')}}" class="opacity-2 h-200px" alt="">
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

		<section class="sectionlevel" data-bs-theme="light">
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
						<img src="{{asset('public/image/03.jpg')}}" class="rounded" alt="testimonial-img">

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
									<img class="avatar-img rounded-circle" src="{{asset('public/image/visi1.jpg')}}" alt="avatar">
								</div>
								<p class="text-light small mb-0">The best Bootstrap theme we've ever used 🔥</p>
							</div>
						</div>

						
					</div>
				</div>
			</div>
		</section>

		<section class=" sectionlevel position-relative z-index-2 py-0 mb-n7" data-bs-theme="light">
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
		<section class="sectionlevel pt-xl-8 pb-0" data-bs-theme="light">
			<div class="container pt-2 pt-sm-5">
				<!-- Hero START -->
				<div class="row g-4 g-xxl-5">
					<!-- Hero content START -->
					<div class="col-xl-6">
						<!-- Title -->
						<h1 class="mb-0 lh-base">Transforming ideas into
							<span class="position-relative">digital
								<!-- SVG START -->
								<span class="position-absolute top-50 start-50 translate-middle z-index-n1 ms-n2 d-none d-sm-block">
									<svg width="182" height="53" viewBox="0 0 182 53" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path class="fill-primary" d="M3.39646 26.6791C5.18665 34.7553 18.564 38.9851 25.9087 41.4254C46.0791 47.4215 67.3652 48.7695 88.3693 49.6062C104.15 50.0478 119.955 49.7573 135.662 48.1885C149.211 46.7243 164.06 45.5158 174.924 36.9051C179.694 33.0239 179.89 27.2834 175.537 22.9954C164.011 11.8166 134.166 7.57514 117.871 4.98378C99.9319 2.36919 81.7603 3.171 63.7112 4.27494C75.4946 4.49573 87.278 5.19295 98.9755 6.57578C103.978 7.27301 109.202 8.35371 113.297 11.3053C109.484 10.457 105.535 10.4338 101.649 10.1084C74.3665 7.19166 45.6622 4.62355 19.2875 13.5713C13.5245 15.8256 2.88147 19.5442 3.39646 26.6791ZM0 25.7727C1.02997 10.1897 38.4891 5.03027 51.6213 4.43763C49.4878 4.29818 47.3543 4.07739 45.233 3.78688C48.7766 2.79915 52.3938 2.04382 56.06 1.60224C63.466 0.939879 70.9088 0.753952 78.327 0.323997C91.0913 -0.349987 103.88 0.0102456 116.571 1.56738C132.45 4.10063 191.085 11.3983 180.797 34.918C178.664 38.8573 174.642 41.4603 170.645 43.5403C160.86 48.6068 149.591 49.8618 138.691 51.1285C122.42 52.7902 106.063 53.3131 89.7058 52.825C65.575 51.907 40.8311 50.501 18.0981 42.1459C10.8025 39.1943 0.122616 34.3834 0 25.7727Z"></path>
									</svg>
								</span>
								<!-- SVG END -->
							</span>
							realities
						</h1>

						<p class="mb-0 mt-4 mt-xl-5">Your ideas are the driving force behind your business, and our digital agency is here to turn those ideas into tangible digital realities.</p>

						<!-- Buttons -->
						<div class="d-flex gap-1 gap-sm-3 flex-wrap mt-4 mt-xl-5">
							<button class="btn btn-dark" type="button">Get started</button>
							<button class="btn btn-outline-dark" type="button">Start a 14 days free trial</button>
						</div>

						<!-- Features -->
						<ul class="list-inline d-flex flex-wrap gap-2 gap-sm-4 mb-0 mt-4 mt-xl-5">
							<li class="list-inline-item heading-color"> <i class="bi bi-stopwatch me-1"></i>24/7 Supports</li>
							<li class="list-inline-item heading-color"> <i class="bi bi-fire me-1"></i>Free updates</li>
							<li class="list-inline-item heading-color"> <i class="bi bi-life-preserver me-1"></i>Access premium doc</li>
						</ul>
					</div>
					<!-- Hero content END -->

					<!-- Hero image START -->
					<div class="col-xl-6 text-center">
						<img src="" alt="hero-img">
					</div>
					<!-- Hero image END -->
				</div>
				<!-- Hero END -->

				<hr class="border-primary opacity-2 mt-sm-7 my-5"> <!-- Divider -->

				<!-- Client and skill sets START -->
				<div class="row">
					<!-- Client -->
					<div class="col-md-6 col-xl-7 mb-5 mb-md-0">
						<p class="mb-0"><i class="bi bi-shield-check"></i> | We believe in going above and beyond to exceed. We reached <b class="text-primary fs-6">19k</b></p>
						
						<!-- Slider START -->
						<div class="swiper mt-2 mt-md-4 swiper-initialized swiper-horizontal swiper-backface-hidden" data-swiper-options="{
								&quot;loop&quot;: true, 
								&quot;slidesPerView&quot;: 2, 
								&quot;spaceBetween&quot;: 30, 
								&quot;autoplay&quot;:{
									&quot;delay&quot;: 2000, 
									&quot;disableOnInteraction&quot;: false
								},
								&quot;breakpoints&quot;: { 
									&quot;576&quot;: {&quot;slidesPerView&quot;: 3}, 
									&quot;768&quot;: {&quot;slidesPerView&quot;: 2}, 
									&quot;992&quot;: {&quot;slidesPerView&quot;: 3}, 
									&quot;1200&quot;: {&quot;slidesPerView&quot;: 4}
								}}">

								<!-- Slider items -->
								<div class="swiper-wrapper align-items-center" id="swiper-wrapper-3a7110b9f8d794ce5" aria-live="off">
									<!-- Image -->
									
									<!-- Image -->
									
									<!-- Image -->
									
									<!-- Image -->
									
								<div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 4" style="width: 123px; margin-right: 30px;" data-swiper-slide-index="0">
										<img src="assets/images/client/01.svg" class="px-3 ps-0" alt="client-img">
									</div><div class="swiper-slide swiper-slide-next" role="group" aria-label="2 / 4" data-swiper-slide-index="1" style="width: 123px; margin-right: 30px;">
										<img src="assets/images/client/02.svg" class="px-3" alt="client-img">
									</div><div class="swiper-slide" role="group" aria-label="3 / 4" data-swiper-slide-index="2" style="width: 123px; margin-right: 30px;">
										<img src="assets/images/client/03.svg" class="px-3" alt="client-img">
									</div><div class="swiper-slide" role="group" aria-label="4 / 4" data-swiper-slide-index="3" style="width: 123px; margin-right: 30px;">
										<img src="assets/images/client/04.svg" class="px-3" alt="client-img">
									</div></div>
						<span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
					</div>

					<!-- Skill sets -->
					<div class="col-md-6 col-lg-5 col-xl-3 ms-auto text-md-end">
						<!-- Title -->
						<p class="mb-0 me-2">Trusted by Customers <span class="badge bg-dark">Active</span></p>

						<!-- Counter -->
						<div class="d-flex justify-content-md-end mt-2 mt-md-4">
							<!-- Counter item -->
							<div>
								<div class="d-flex justify-content-md-end">
									<h4 class="purecounter mb-0" data-purecounter-start="0" data-purecounter-end="15" data-purecounter-delay="300" data-purecounter-duration="0">15</h4>
									<span class="h4 mb-0">k+</span>
								</div>
								<p class="mb-0">Active users</p>
							</div>

							<div class="vr mx-3 mx-sm-4"></div> <!-- Divider -->

							<!-- Counter item -->
							<div>
								<div class="d-flex justify-content-md-end">
									<h4 class="purecounter mb-0" data-purecounter-start="0" data-purecounter-end="56" data-purecounter-delay="300" data-purecounter-duration="0">56</h4>
									<span class="h4 mb-0">+</span>
								</div>
								<p class="mb-0">Completed projects</p>
							</div>
						</div>
					</div>
				</div>
				<!-- Client and skill sets END -->
			</div>	
		</section>
		<!-- =======================
		Main Banner END -->



		<!-- =======================
		About START -->
		<section class="sectionlevel pb-0" data-bs-theme="light">
			<div class="container">
				<!-- Main title -->
				<div class="row mb-3 mb-xl-0">
					<div class="col-xl-9">
						<h4 class="lh-base mb-0">Our digital agency specializes in crafting customized strategies that give your business the competitive edge it deserves.</h4>
					</div>
				</div>

				<!-- About detail START -->
				<div class="row align-items-center">
					<!-- Content -->
					<div class="col-lg-7 pe-lg-5">
						<p class="mb-5">With a track record of success, we're here to guide you through the ever-evolving digital landscape. Discover how our innovative solutions and expert insights can make a real difference in your brand's digital journey</p>

						<!-- Goal and Mission tab START -->
						<div class="card card-body bg-light p-sm-5 h-100">
							<!-- SVG decoration -->
							<figure class="position-absolute bottom-0 end-0 mb-0 me-3 d-none d-sm-block">
								<svg width="116" height="177" viewBox="0 0 116 177" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path class="fill-mode" d="M54.2742 58.113H50.0625V177H54.2742V58.113Z"></path>
									<path class="fill-mode" d="M62.0829 55.1344L57.9297 55.8303L78.1605 175.597L82.3137 174.901L62.0829 55.1344Z"></path>
									<path class="fill-mode" d="M75.4696 136.02H28.2031V140.641H75.4696V136.02Z"></path>
									<path class="fill-mode" d="M21.2999 174.91L25.4531 175.606L45.684 55.8399L41.5308 55.144L21.2999 174.91Z"></path>
									<path class="fill-primary" d="M91.1643 90.7959C111.953 70.0913 111.953 36.5225 91.1643 15.8179C70.3759 -4.88673 36.6713 -4.88673 15.8829 15.8179C-4.90549 36.5225 -4.90549 70.0913 15.8829 90.7959C36.6713 111.5 70.3759 111.501 91.1643 90.7959Z"></path>
									<path d="M103.519 35.0652L103.418 34.9452L103.338 34.8651L103.144 34.9385C103.164 34.9785 103.177 35.0119 103.184 35.0385C103.224 35.1319 103.258 35.2186 103.284 35.312L103.566 35.2119C103.559 35.1519 103.539 35.1052 103.519 35.0652ZM102.012 75.2055C102.066 75.1121 102.106 75.0121 102.146 74.9121C102.066 74.8387 101.985 74.7587 101.912 74.6786C101.872 74.7787 101.831 74.8787 101.778 74.9787C99.4276 80.1605 96.2404 84.8954 92.4036 89.0302C92.3433 89.1102 92.2697 89.1836 92.2027 89.2503C92.1425 89.3303 92.0688 89.4036 92.0019 89.4703L92.2764 89.6437C92.35 89.5704 92.417 89.5037 92.4773 89.4303L92.7317 89.5904C92.8054 89.517 92.8723 89.4503 92.9326 89.377C96.7827 85.2222 99.903 80.5273 102.247 75.3989C102.16 75.3455 102.079 75.2788 102.012 75.2055ZM103.519 35.0652L103.418 34.9452L103.338 34.8651L103.144 34.9385C103.164 34.9785 103.177 35.0119 103.184 35.0385C103.224 35.1319 103.258 35.2186 103.284 35.312L103.566 35.2119C103.559 35.1519 103.539 35.1052 103.519 35.0652ZM102.139 74.9121C102.059 74.8387 101.979 74.7587 101.905 74.6786C101.865 74.7787 101.825 74.8787 101.771 74.9787C99.4209 80.1605 96.2337 84.8954 92.3969 89.0302C92.3366 89.1102 92.263 89.1836 92.196 89.2503C92.1358 89.3303 92.0621 89.4036 91.9952 89.4703L92.2697 89.6437C92.3433 89.5704 92.4103 89.5037 92.4706 89.4303L92.725 89.5904C92.7987 89.517 92.8656 89.4503 92.9259 89.377C96.776 85.2222 99.8963 80.5273 102.24 75.3989C102.16 75.3389 102.079 75.2655 102.006 75.1988C102.059 75.1188 102.099 75.0188 102.139 74.9121ZM107.048 52.5845C106.994 48.0296 106.358 43.5614 105.166 39.2466C105.146 39.1466 105.112 39.0532 105.086 38.9665C105.066 38.8665 105.032 38.7665 105.005 38.6731C104.845 38.1129 104.684 37.5594 104.503 37.0059C104.349 36.5324 104.202 36.0722 104.028 35.6187C103.974 35.4453 103.914 35.2786 103.847 35.1186C103.813 35.0185 103.773 34.9185 103.746 34.8251C103.733 34.7918 103.726 34.7518 103.706 34.7251C103.686 34.6651 103.666 34.6117 103.633 34.5517C103.633 34.5117 103.613 34.4784 103.592 34.4383C103.559 34.345 103.532 34.2583 103.492 34.1649C103.459 34.0849 103.432 33.9915 103.398 33.9115C103.218 33.458 103.037 33.0045 102.843 32.551C102.588 31.9508 102.32 31.3573 102.032 30.7638C101.992 30.6704 101.952 30.5904 101.898 30.5037C101.865 30.4103 101.825 30.3236 101.778 30.2436C99.1732 24.8151 95.6779 19.9067 91.3657 15.6053C86.4442 10.7036 80.7326 6.86233 74.3514 4.18142C67.7626 1.40714 60.7587 0 53.5271 0C46.3022 0 39.2983 1.40714 32.6894 4.18142C26.3149 6.86899 20.5899 10.7103 15.6818 15.6053C15.2399 16.0454 14.8047 16.4989 14.3761 16.9524C14.3159 17.0258 14.2422 17.0925 14.1752 17.1658C14.115 17.2392 14.0413 17.3059 13.9744 17.3859C13.519 17.8794 13.0771 18.3796 12.6486 18.8931C12.287 19.3065 11.9388 19.7267 11.6107 20.1535C11.5973 20.1668 11.5772 20.1735 11.5772 20.1935C11.5036 20.2669 11.4433 20.3469 11.3831 20.4269C11.3496 20.4603 11.3228 20.5003 11.3027 20.5403C11.2625 20.5803 11.229 20.6203 11.2023 20.6603C11.1688 20.7003 11.142 20.7337 11.1219 20.7737C11.0483 20.8537 10.988 20.9271 10.9411 21.0071C10.8809 21.0805 10.8273 21.1405 10.7871 21.2072C10.0974 22.1008 9.45463 23.0145 8.82521 23.9548C8.77165 24.0348 8.71138 24.1148 8.66451 24.2082C8.60425 24.2882 8.55068 24.3683 8.50381 24.4616C6.84992 27.0292 5.4036 29.7301 4.19834 32.571C1.41284 39.1266 0 46.109 0 53.3114C0 60.5005 1.41284 67.4829 4.21173 74.0651C6.91018 80.4139 10.767 86.1158 15.6818 91.0108C20.5899 95.8992 26.3149 99.7538 32.6894 102.428C32.9506 102.541 33.2117 102.648 33.4796 102.748C34.8054 103.288 36.1445 103.775 37.5105 104.189C41.5816 105.469 45.78 106.243 50.0653 106.503C51.2037 106.583 52.3687 106.623 53.5271 106.623C53.7816 106.623 54.0293 106.623 54.2838 106.609C58.3549 106.556 62.3657 106.056 66.2494 105.102C67.622 104.782 68.988 104.389 70.3272 103.949C71.6931 103.495 73.0323 102.995 74.3581 102.428C78.5498 100.667 82.4401 98.4134 86.0157 95.6658C86.1094 95.6124 86.1764 95.5524 86.2568 95.4857C86.3371 95.4323 86.4175 95.3723 86.4978 95.3056C88.2053 93.9785 89.8324 92.5514 91.3724 91.0108C91.7675 90.6174 92.1492 90.2239 92.5241 89.8238C92.5978 89.7504 92.6647 89.6837 92.725 89.6037C92.7987 89.5303 92.8656 89.4637 92.9259 89.3903C96.776 85.2356 99.8963 80.5406 102.24 75.4122C102.293 75.3189 102.334 75.2322 102.374 75.1321C102.427 75.0388 102.468 74.9387 102.508 74.8387C102.628 74.5853 102.742 74.3252 102.849 74.0651C104.363 70.4839 105.487 66.7826 106.184 62.988C106.217 62.7946 106.257 62.6079 106.284 62.4145C106.505 61.1474 106.679 59.8603 106.807 58.5732C106.84 58.2131 106.867 57.8463 106.9 57.4795C106.914 57.3794 106.92 57.2794 106.92 57.1794C106.934 57.086 106.94 56.986 106.94 56.8859C107.021 55.7122 107.061 54.5118 107.061 53.3181C107.061 53.0713 107.061 52.8246 107.048 52.5845ZM106.465 53.3114C106.465 54.5051 106.425 55.7055 106.344 56.8793C106.331 56.9793 106.331 57.0727 106.324 57.1727C106.311 57.2727 106.311 57.3728 106.304 57.4728C106.271 57.8863 106.231 58.2864 106.19 58.6999C106.057 59.927 105.896 61.1474 105.688 62.3545C105.655 62.5479 105.615 62.7279 105.574 62.928C104.838 66.9293 103.633 70.7707 102.039 74.3919C101.999 74.4919 101.959 74.5853 101.905 74.6853C101.865 74.7853 101.825 74.8854 101.771 74.9854C99.4209 80.1672 96.2337 84.9021 92.3969 89.0368C92.3366 89.1169 92.263 89.1902 92.196 89.2569C92.1358 89.3369 92.0621 89.4103 91.9952 89.477C90.1471 91.431 88.145 93.2383 86.0291 94.8855L85.788 95.0656C85.7077 95.1389 85.6273 95.1989 85.547 95.2456C80.9603 98.7268 75.8044 101.481 70.2267 103.335C68.8943 103.775 67.5283 104.169 66.1489 104.509C62.339 105.436 58.3616 105.956 54.2838 106.009C54.0293 106.023 53.7816 106.023 53.5271 106.023C52.3687 106.023 51.2037 105.983 50.0653 105.909C45.7532 105.629 41.5816 104.836 37.6109 103.588C36.245 103.155 34.9058 102.675 33.5934 102.128C14.2489 94.2853 0.595936 75.3589 0.595936 53.3114C0.595936 42.8279 3.68945 33.0512 8.99931 24.8351C9.03279 24.7817 9.05957 24.735 9.09305 24.695C9.12653 24.6417 9.14662 24.615 9.16671 24.5817C9.20688 24.5216 9.24706 24.4616 9.28054 24.4083C9.31402 24.3683 9.32071 24.3549 9.3341 24.3349C9.96352 23.3879 10.6063 22.4743 11.296 21.5806C11.3362 21.5206 11.3897 21.4473 11.45 21.3806C11.5036 21.3072 11.5638 21.2272 11.6241 21.1472C11.6576 21.1138 11.6844 21.0738 11.7178 21.0338C11.7312 21.0271 11.7379 21.0138 11.7513 20.9938C11.7714 20.9604 11.7915 20.9338 11.8116 20.9004C11.8451 20.8671 11.8719 20.8404 11.8919 20.8004C11.9522 20.727 12.0125 20.647 12.0727 20.567C12.1129 20.5336 12.1263 20.5136 12.1464 20.4869C12.903 19.5533 13.6798 18.633 14.49 17.7594C14.5502 17.686 14.6239 17.606 14.6908 17.5393C14.7511 17.4659 14.8248 17.3992 14.8917 17.3259C24.5204 7.02905 38.2872 0.580197 53.5271 0.580197C74.5121 0.580197 92.6714 12.8043 101.222 30.4503C101.276 30.5437 101.316 30.6237 101.356 30.7104C101.396 30.8038 101.436 30.8838 101.477 30.9705C101.959 31.9975 102.414 33.0512 102.843 34.1182C102.876 34.1983 102.903 34.2783 102.936 34.3717C102.976 34.465 103.017 34.5517 103.05 34.6451C103.063 34.6784 103.084 34.7184 103.084 34.7451C103.124 34.8185 103.144 34.8785 103.157 34.9252C103.177 34.9652 103.191 34.9985 103.197 35.0252C103.238 35.1186 103.271 35.2053 103.298 35.2986C103.378 35.512 103.452 35.7121 103.512 35.8988C103.867 36.8725 104.182 37.8728 104.47 38.8732C104.49 38.9665 104.523 39.0666 104.543 39.1533C104.577 39.2533 104.604 39.3467 104.624 39.4467C105.782 43.6681 106.418 48.1096 106.472 52.6712C106.465 52.8979 106.465 53.098 106.465 53.3114ZM102.012 75.2055C102.066 75.1121 102.106 75.0121 102.146 74.9121C102.066 74.8387 101.985 74.7587 101.912 74.6786C101.872 74.7787 101.831 74.8787 101.778 74.9787C99.4276 80.1605 96.2404 84.8954 92.4036 89.0302C92.3433 89.1102 92.2697 89.1836 92.2027 89.2503C92.1425 89.3303 92.0688 89.4036 92.0019 89.4703L92.2764 89.6437C92.35 89.5704 92.417 89.5037 92.4773 89.4303L92.7317 89.5904C92.8054 89.517 92.8723 89.4503 92.9326 89.377C96.7827 85.2222 99.903 80.5273 102.247 75.3989C102.16 75.3455 102.079 75.2788 102.012 75.2055ZM103.519 35.0652L103.418 34.9452L103.338 34.8651L103.144 34.9385C103.164 34.9785 103.177 35.0119 103.184 35.0385C103.224 35.1319 103.258 35.2186 103.284 35.312L103.566 35.2119C103.559 35.1519 103.539 35.1052 103.519 35.0652ZM102.012 75.2055C102.066 75.1121 102.106 75.0121 102.146 74.9121C102.066 74.8387 101.985 74.7587 101.912 74.6786C101.872 74.7787 101.831 74.8787 101.778 74.9787C99.4276 80.1605 96.2404 84.8954 92.4036 89.0302C92.3433 89.1102 92.2697 89.1836 92.2027 89.2503C92.1425 89.3303 92.0688 89.4036 92.0019 89.4703L92.2764 89.6437C92.35 89.5704 92.417 89.5037 92.4773 89.4303L92.7317 89.5904C92.8054 89.517 92.8723 89.4503 92.9326 89.377C96.7827 85.2222 99.903 80.5273 102.247 75.3989C102.16 75.3455 102.079 75.2788 102.012 75.2055ZM103.519 35.0652L103.418 34.9452L103.338 34.8651L103.144 34.9385C103.164 34.9785 103.177 35.0119 103.184 35.0385C103.224 35.1319 103.258 35.2186 103.284 35.312L103.566 35.2119C103.559 35.1519 103.539 35.1052 103.519 35.0652Z" fill="#202124"></path>
									<path d="M83.5774 83.2415C100.177 66.7091 100.177 39.9047 83.5774 23.3723C66.9781 6.83984 40.0652 6.83984 23.4659 23.3723C6.86657 39.9047 6.86657 66.7091 23.4659 83.2415C40.0652 99.7739 66.9781 99.7739 83.5774 83.2415Z" fill="white"></path>
									<path d="M79.8329 86.1626C79.5784 86.3626 79.3173 86.5627 79.0561 86.7628L79.19 86.8762L79.3039 86.9762C79.4646 86.8561 79.6253 86.7361 79.7793 86.6161L79.9601 86.4627L81.4131 84.8421C80.8908 85.2956 80.3685 85.7358 79.8329 86.1626ZM79.8329 86.1626C79.5784 86.3626 79.3173 86.5627 79.0561 86.7628L79.19 86.8762L79.3039 86.9762C79.4646 86.8561 79.6253 86.7361 79.7793 86.6161L79.9601 86.4627L81.4131 84.8421C80.8908 85.2956 80.3685 85.7358 79.8329 86.1626ZM93.8005 38.8132C93.6465 38.4131 93.4992 38.0196 93.3452 37.6261C93.2247 37.3127 93.1042 37.0126 92.9702 36.7125C90.8075 31.6308 87.7206 27.0759 83.7901 23.1612C79.8596 19.2466 75.2863 16.1722 70.184 14.0248C64.9144 11.8041 59.3099 10.677 53.5179 10.677C50.9132 10.677 48.3353 10.9104 45.8109 11.3706C45.7172 11.3839 45.6167 11.4039 45.5163 11.4239C45.4159 11.4439 45.3221 11.4639 45.2217 11.4839C44.0298 11.704 42.858 11.9841 41.6996 12.3309C41.5791 12.3642 41.4854 12.3842 41.3983 12.4243C41.3581 12.4243 41.3247 12.4376 41.2845 12.4576C41.2242 12.4709 41.1706 12.4909 41.1104 12.511C41.0702 12.511 41.0367 12.5243 40.9966 12.5443C40.9028 12.5643 40.8158 12.5977 40.7153 12.6377C40.635 12.6577 40.5412 12.6777 40.4609 12.7177C40.327 12.751 40.1863 12.7977 40.0591 12.8377C39.1485 13.1378 38.2445 13.4713 37.354 13.8447C37.2602 13.8781 37.1598 13.9181 37.0728 13.9581C36.9991 13.9915 36.9321 14.0181 36.8585 14.0515C36.8384 14.0648 36.8183 14.0715 36.7982 14.0715C31.716 16.2122 27.1628 19.2933 23.2524 23.1812C22.0739 24.355 20.9691 25.5821 19.9513 26.8625C19.6902 27.1959 19.429 27.536 19.1746 27.8762C17.1256 30.6038 15.4182 33.5714 14.0723 36.7258C11.8425 41.9876 10.7109 47.5695 10.7109 53.3248C10.7109 59.0801 11.8425 64.662 14.0723 69.9237C16.2351 74.9921 19.3152 79.547 23.2524 83.475C26.7744 86.9828 30.8255 89.8238 35.2983 91.9112C35.8139 92.1513 36.3295 92.3847 36.8518 92.6048C37.662 92.9449 38.4789 93.2583 39.2958 93.5518C42.7576 94.7655 46.3667 95.5257 50.0427 95.8125C51.1944 95.9059 52.3461 95.9526 53.5045 95.9526C53.759 95.9526 54.0067 95.9526 54.2612 95.9392C57.7363 95.8792 61.1379 95.4191 64.4389 94.5521C65.8116 94.192 67.1642 93.7652 68.4967 93.265C69.0524 93.0516 69.6082 92.8315 70.164 92.5981C73.0499 91.3843 75.7818 89.8705 78.3129 88.0699C78.3932 88.0099 78.487 87.9498 78.5673 87.8765C78.6678 87.8031 78.7682 87.7364 78.8686 87.6564C78.9222 87.6231 78.9825 87.5831 79.0293 87.543C79.1097 87.483 79.19 87.423 79.2704 87.363C79.3507 87.303 79.4244 87.2429 79.5048 87.1829C80.5962 86.3493 81.6474 85.4623 82.6585 84.5287C82.7322 84.4553 82.7991 84.3953 82.8728 84.3286C82.9464 84.2686 83.0134 84.1952 83.0871 84.1286C83.1875 84.0352 83.2879 83.9352 83.3884 83.8351C83.462 83.7751 83.529 83.7017 83.5893 83.6351C83.6495 83.5817 83.7098 83.5217 83.7701 83.4617C87.7206 79.5203 90.8008 74.9721 92.9501 69.9104C94.4232 66.4426 95.4142 62.8413 95.9164 59.1268C96.0169 58.3798 96.0972 57.6396 96.1575 56.8927C96.2579 55.7056 96.3115 54.5119 96.3115 53.3115C96.3316 48.3098 95.4812 43.4548 93.8005 38.8132ZM95.5013 57.6729C95.4879 57.8463 95.4678 58.0264 95.441 58.1931C94.3228 67.8364 89.9035 76.4793 83.3616 83.0082C83.2879 83.0682 83.2277 83.1415 83.1473 83.2082C83.0871 83.2816 83.0134 83.3483 82.9465 83.4083C82.846 83.5083 82.7456 83.6017 82.6451 83.7017C82.5715 83.7751 82.5045 83.8351 82.4309 83.9018C82.3572 83.9752 82.2903 84.0352 82.2166 84.1019C81.9555 84.3553 81.6742 84.5954 81.3997 84.8355C80.8841 85.2889 80.3618 85.7291 79.8262 86.1559C79.5717 86.356 79.3106 86.556 79.0494 86.7561C78.9758 86.8161 78.8954 86.8695 78.8151 86.9295C78.7347 86.9895 78.6544 87.0495 78.574 87.1096C75.4805 89.3903 72.0723 91.251 68.4163 92.6314C67.0905 93.1316 65.738 93.5651 64.3586 93.9319C61.1379 94.7855 57.7564 95.2723 54.2812 95.3324C54.0268 95.3457 53.7791 95.3457 53.5246 95.3457C52.3662 95.3457 51.2011 95.2923 50.0628 95.2056C46.3533 94.9055 42.7911 94.1319 39.4163 92.9249C38.0437 92.4514 36.7112 91.8979 35.4189 91.2776C21.1767 84.5154 11.3203 70.0438 11.3203 53.3181C11.3203 43.9349 14.4339 35.252 19.6634 28.2496C19.9178 27.9095 20.179 27.5627 20.4401 27.2359C24.7924 21.7741 30.4773 17.4059 36.9924 14.6317C37.0259 14.6183 37.046 14.6117 37.0728 14.5917C37.1464 14.5717 37.2067 14.5383 37.2669 14.5183C37.3607 14.4783 37.4477 14.4383 37.5415 14.4049C37.7825 14.2916 38.037 14.2049 38.2914 14.1115C39.1016 13.7981 39.8582 13.518 40.6551 13.2645C40.7354 13.2312 40.8158 13.2112 40.9095 13.1845C41.0033 13.1512 41.0903 13.1245 41.1907 13.0912C41.2242 13.0778 41.251 13.0711 41.2912 13.0578C41.3514 13.0445 41.4117 13.0245 41.472 13.0045C41.5054 12.9911 41.5456 12.9844 41.5724 12.9711C41.6661 12.9378 41.7666 12.9111 41.8536 12.8911C43.0321 12.551 44.2039 12.2642 45.3958 12.0375C45.4962 12.0175 45.59 11.9974 45.6904 11.9774C45.7908 11.9574 45.8846 11.9441 45.985 11.9241C48.4424 11.4839 50.9534 11.2505 53.5313 11.2505C71.329 11.2505 86.5823 22.2743 92.7761 37.8262C92.9368 38.2197 93.0908 38.6131 93.2381 39.0133C94.8518 43.4814 95.7423 48.2897 95.7423 53.2981C95.7423 54.7653 95.662 56.2124 95.508 57.6529C95.5013 57.6663 95.4946 57.6663 95.5013 57.6729ZM79.8329 86.1626C79.5784 86.3626 79.3173 86.5627 79.0561 86.7628L79.19 86.8762L79.3039 86.9762C79.4646 86.8561 79.6253 86.7361 79.7793 86.6161L79.9601 86.4627L81.4131 84.8421C80.8908 85.2956 80.3685 85.7358 79.8329 86.1626ZM79.8329 86.1626C79.5784 86.3626 79.3173 86.5627 79.0561 86.7628L79.19 86.8762L79.3039 86.9762C79.4646 86.8561 79.6253 86.7361 79.7793 86.6161L79.9601 86.4627L81.4131 84.8421C80.8908 85.2956 80.3685 85.7358 79.8329 86.1626Z" fill="#202124"></path>
									<path class="fill-primary" d="M53.5277 85.3824C71.3153 85.3824 85.735 71.0208 85.735 53.3048C85.735 35.5889 71.3153 21.2273 53.5277 21.2273C35.74 21.2273 21.3203 35.5889 21.3203 53.3048C21.3203 71.0208 35.74 85.3824 53.5277 85.3824Z"></path>
									<path d="M75.8429 76.4326L75.6889 76.1592C75.6152 76.2326 75.5349 76.2993 75.4679 76.3726C75.2536 76.566 75.0461 76.7528 74.8318 76.9462C74.7514 77.0262 74.6711 77.0995 74.5907 77.1596L74.9121 77.2996C74.9925 77.2262 75.0728 77.1462 75.1532 77.0862L75.4478 77.2062C75.5416 77.1262 75.6286 77.0462 75.7224 76.9528V76.8128L75.6219 76.6394C75.7023 76.586 75.7692 76.5127 75.8429 76.4326ZM70.8812 79.9738C70.8611 79.9938 70.8276 80.0072 70.8075 80.0139L71.0821 80.1939C71.0955 80.1939 70.8812 79.9738 70.8812 79.9738ZM69.9973 80.7608L69.8366 80.6207C69.7429 80.6808 69.6559 80.7341 69.5621 80.7941C68.6314 81.3343 67.6605 81.8278 66.6762 82.2813C65.3705 82.8615 64.0313 83.3683 62.6452 83.7818C59.987 84.5687 57.1814 85.0222 54.282 85.0889V85.3823H54.3557C54.7507 85.369 55.1257 85.349 55.5074 85.329C55.8221 85.309 56.1435 85.289 56.4582 85.2556C56.8131 85.2156 57.1747 85.1823 57.5296 85.1356C57.563 85.1356 57.6032 85.1223 57.63 85.1223C58.0317 85.0689 58.4469 85.0089 58.842 84.9422C59.2035 84.8888 59.5718 84.8222 59.92 84.7488C59.9535 84.7355 59.9937 84.7355 60.0204 84.7288C60.2213 84.6888 60.4222 84.6488 60.6231 84.5954C60.8976 84.5354 61.1587 84.4754 61.4333 84.402C61.7346 84.3287 62.0426 84.2486 62.3439 84.1619C62.4644 84.1286 62.5783 84.0886 62.6988 84.0619C62.7189 84.0486 62.7323 84.0486 62.7524 84.0419C62.9332 83.9819 63.1273 83.9285 63.3081 83.8818C63.3483 83.8618 63.3885 83.8485 63.4287 83.8418C63.4487 83.8285 63.4621 83.8285 63.4822 83.8218C63.6161 83.7818 63.7367 83.7418 63.8639 83.6884C64.0849 83.6151 64.2991 83.5484 64.5201 83.455C64.5937 83.435 64.6741 83.4017 64.7411 83.375C65.0223 83.275 65.2968 83.1749 65.5713 83.0616C65.9664 82.9015 66.3481 82.7414 66.7297 82.5681C66.79 82.5347 66.8436 82.5147 66.9038 82.488C67.1851 82.368 67.4663 82.2279 67.7542 82.0879C68.1359 81.9078 68.5109 81.7078 68.8858 81.5077C69.1068 81.3877 69.3278 81.2676 69.5554 81.1342C69.6492 81.0809 69.7295 81.0342 69.8166 80.9809C69.9103 80.9275 69.9973 80.8675 70.0911 80.8208L69.9973 80.7608ZM75.8429 76.4326L75.6889 76.1592C75.6152 76.2326 75.5349 76.2993 75.4679 76.3726C75.2536 76.566 75.0461 76.7528 74.8318 76.9462C74.7514 77.0262 74.6711 77.0995 74.5907 77.1596L74.9121 77.2996C74.9925 77.2262 75.0728 77.1462 75.1532 77.0862L75.4478 77.2062C75.5416 77.1262 75.6286 77.0462 75.7224 76.9528V76.8128L75.6219 76.6394C75.7023 76.586 75.7692 76.5127 75.8429 76.4326ZM70.8142 80.0139L71.0888 80.1939C71.1022 80.1939 70.8879 79.9738 70.8879 79.9738C70.8611 79.9938 70.8343 80.0072 70.8142 80.0139ZM69.8366 80.6207C69.7429 80.6808 69.6559 80.7341 69.5621 80.7941C68.6314 81.3343 67.6605 81.8278 66.6762 82.2813C65.3705 82.8615 64.0313 83.3683 62.6452 83.7818C59.987 84.5687 57.1814 85.0222 54.282 85.0889V85.3823H54.3557C54.7507 85.369 55.1257 85.349 55.5074 85.329C55.8221 85.309 56.1435 85.289 56.4582 85.2556C56.8131 85.2156 57.1747 85.1823 57.5296 85.1356C57.563 85.1356 57.6032 85.1223 57.63 85.1223C58.0317 85.0689 58.4469 85.0089 58.842 84.9422C59.2035 84.8888 59.5718 84.8222 59.92 84.7488C59.9535 84.7355 59.9937 84.7355 60.0204 84.7288C60.2213 84.6888 60.4222 84.6488 60.6231 84.5954C60.8976 84.5354 61.1587 84.4754 61.4333 84.402C61.7346 84.3287 62.0426 84.2486 62.3439 84.1619C62.4644 84.1286 62.5783 84.0886 62.6988 84.0619C62.7189 84.0486 62.7323 84.0486 62.7524 84.0419C62.9332 83.9819 63.1273 83.9285 63.3081 83.8818C63.3483 83.8618 63.3885 83.8485 63.4287 83.8418C63.4487 83.8285 63.4621 83.8285 63.4822 83.8218C63.6161 83.7818 63.7367 83.7418 63.8639 83.6884C64.0849 83.6151 64.2991 83.5484 64.5201 83.455C64.5937 83.435 64.6741 83.4017 64.7411 83.375C65.0223 83.275 65.2968 83.1749 65.5713 83.0616C65.9664 82.9015 66.3481 82.7414 66.7297 82.5681C66.79 82.5347 66.8436 82.5147 66.9038 82.488C67.1851 82.368 67.4663 82.2279 67.7542 82.0879C68.1359 81.9078 68.5109 81.7078 68.8858 81.5077C69.1068 81.3877 69.3278 81.2676 69.5554 81.1342C69.6492 81.0809 69.7295 81.0342 69.8166 80.9809C69.9103 80.9275 69.9973 80.8675 70.0911 80.8208L70.0107 80.7474L69.8366 80.6207ZM84.1458 42.3744C83.9918 41.9743 83.8445 41.5675 83.6838 41.1807C82.0701 37.1994 79.6528 33.5448 76.5125 30.4171C70.3723 24.3016 62.21 20.9338 53.5254 20.9338C50.4721 20.9338 47.4857 21.3473 44.6399 22.1609C44.2248 22.2743 43.823 22.3943 43.4213 22.5344C38.6136 24.0816 34.2211 26.7558 30.545 30.4171C29.6478 31.3107 28.7974 32.2577 28.0274 33.2447C27.7461 33.5781 27.4917 33.9182 27.2372 34.2584C23.1929 39.7602 21.0234 46.3691 21.0234 53.3115C21.0234 61.9611 24.3982 70.0905 30.5383 76.2059C32.527 78.1866 34.7367 79.8871 37.1137 81.2676C38.3792 82.0212 39.6983 82.6748 41.0509 83.2416C43.9101 84.4153 46.9366 85.1823 50.0569 85.5024C51.1952 85.6358 52.3603 85.6958 53.5187 85.6958C53.7731 85.6958 54.0209 85.6958 54.2753 85.6758C57.1814 85.6224 60.0204 85.1756 62.739 84.3753C64.1116 83.9752 65.4642 83.4817 66.7699 82.8882C67.8881 82.408 68.993 81.8411 70.0509 81.2009C70.1446 81.1609 70.2451 81.1009 70.3321 81.0409C70.4125 80.9875 70.5062 80.9408 70.5866 80.8808C70.7674 80.7808 70.9482 80.6674 71.1223 80.5474C71.2227 80.4874 71.3231 80.414 71.4236 80.354C72.6556 79.5404 73.8341 78.6334 74.959 77.6464C75.0394 77.573 75.1331 77.5063 75.2135 77.4263C75.2938 77.3663 75.3675 77.2929 75.4478 77.2129C75.5416 77.1329 75.6286 77.0529 75.7224 76.9595C75.8161 76.8795 75.9031 76.7994 75.9835 76.6994C76.0638 76.6394 76.1442 76.566 76.2178 76.486C76.3183 76.3926 76.412 76.3059 76.5125 76.2059C76.566 76.1525 76.6129 76.1059 76.6665 76.0458C76.7401 75.9725 76.8071 75.9058 76.8807 75.8324C76.9544 75.7591 77.0214 75.6924 77.095 75.6124C82.8736 69.577 86.0407 61.6943 86.0407 53.3115C86.0341 49.5169 85.3845 45.8356 84.1458 42.3744ZM74.5907 77.1596C74.5104 77.2396 74.43 77.3129 74.3363 77.3796C73.6801 77.9532 72.9904 78.4933 72.2873 79.0068C72.1467 79.1069 72.0128 79.2069 71.8722 79.3003C71.6311 79.4737 71.3901 79.6404 71.1357 79.8005C71.0553 79.8605 70.9616 79.9138 70.8812 79.9738C70.8611 79.9938 70.8276 80.0072 70.8075 80.0139C70.7138 80.0739 70.6335 80.1339 70.5464 80.1873C70.3924 80.2873 70.2451 80.3806 70.0911 80.4673C69.9973 80.5207 69.917 80.5674 69.8299 80.6207C69.7362 80.6808 69.6492 80.7341 69.5554 80.7941C68.6247 81.3343 67.6538 81.8278 66.6695 82.2813C65.3638 82.8615 64.0246 83.3683 62.6385 83.7818C59.9803 84.5687 57.1747 85.0222 54.2753 85.0889C54.0209 85.0956 53.7731 85.0956 53.5187 85.0956C52.3469 85.0956 51.1952 85.0356 50.0569 84.9155C46.9366 84.5754 43.9502 83.7885 41.1514 82.6147C39.7854 82.0412 38.473 81.3743 37.2209 80.6207C27.8801 75.0655 21.606 64.9087 21.606 53.3115C21.606 46.3291 23.8692 39.8736 27.7127 34.6318C27.9537 34.2917 28.2148 33.9449 28.4827 33.6181C32.3328 28.7832 37.5623 25.0819 43.582 23.1079C43.9837 22.9745 44.3922 22.8478 44.8006 22.7344C47.566 21.9475 50.4988 21.5274 53.5187 21.5274C66.8904 21.5274 78.3605 29.7568 83.1079 41.3941C83.2686 41.7876 83.4226 42.1877 83.5633 42.5878C84.7752 45.9356 85.4314 49.5502 85.4314 53.3115C85.4314 61.741 82.1169 69.4236 76.7133 75.1189C76.6397 75.1922 76.5727 75.2722 76.4991 75.3389C76.4254 75.4123 76.3652 75.479 76.2848 75.5523C76.1643 75.6857 76.0304 75.8124 75.9031 75.9458C75.8295 76.0192 75.7491 76.0859 75.6822 76.1659C75.6085 76.2392 75.5282 76.3059 75.4612 76.3793C75.2469 76.5727 75.0394 76.7594 74.8251 76.9528C74.7514 77.0262 74.6711 77.0995 74.5907 77.1596ZM69.9973 80.7608L69.8366 80.6207C69.7429 80.6808 69.6559 80.7341 69.5621 80.7941C68.6314 81.3343 67.6605 81.8278 66.6762 82.2813C65.3705 82.8615 64.0313 83.3683 62.6452 83.7818C59.987 84.5687 57.1814 85.0222 54.282 85.0889V85.3823H54.3557C54.7507 85.369 55.1257 85.349 55.5074 85.329C55.8221 85.309 56.1435 85.289 56.4582 85.2556C56.8131 85.2156 57.1747 85.1823 57.5296 85.1356C57.563 85.1356 57.6032 85.1223 57.63 85.1223C58.0317 85.0689 58.4469 85.0089 58.842 84.9422C59.2035 84.8888 59.5718 84.8222 59.92 84.7488C59.9535 84.7355 59.9937 84.7355 60.0204 84.7288C60.2213 84.6888 60.4222 84.6488 60.6231 84.5954C60.8976 84.5354 61.1587 84.4754 61.4333 84.402C61.7346 84.3287 62.0426 84.2486 62.3439 84.1619C62.4644 84.1286 62.5783 84.0886 62.6988 84.0619C62.7189 84.0486 62.7323 84.0486 62.7524 84.0419C62.9332 83.9819 63.1273 83.9285 63.3081 83.8818C63.3483 83.8618 63.3885 83.8485 63.4287 83.8418C63.4487 83.8285 63.4621 83.8285 63.4822 83.8218C63.6161 83.7818 63.7367 83.7418 63.8639 83.6884C64.0849 83.6151 64.2991 83.5484 64.5201 83.455C64.5937 83.435 64.6741 83.4017 64.7411 83.375C65.0223 83.275 65.2968 83.1749 65.5713 83.0616C65.9664 82.9015 66.3481 82.7414 66.7297 82.5681C66.79 82.5347 66.8436 82.5147 66.9038 82.488C67.1851 82.368 67.4663 82.2279 67.7542 82.0879C68.1359 81.9078 68.5109 81.7078 68.8858 81.5077C69.1068 81.3877 69.3278 81.2676 69.5554 81.1342C69.6492 81.0809 69.7295 81.0342 69.8166 80.9809C69.9103 80.9275 69.9973 80.8675 70.0911 80.8208L69.9973 80.7608ZM70.8812 79.9738C70.8611 79.9938 70.8276 80.0072 70.8075 80.0139L71.0821 80.1939C71.0955 80.1939 70.8812 79.9738 70.8812 79.9738ZM75.8429 76.4326L75.6889 76.1592C75.6152 76.2326 75.5349 76.2993 75.4679 76.3726C75.2536 76.566 75.0461 76.7528 74.8318 76.9462C74.7514 77.0262 74.6711 77.0995 74.5907 77.1596L74.9121 77.2996C74.9925 77.2262 75.0728 77.1462 75.1532 77.0862L75.4478 77.2062C75.5416 77.1262 75.6286 77.0462 75.7224 76.9528V76.8128L75.6219 76.6394C75.7023 76.586 75.7692 76.5127 75.8429 76.4326ZM69.9973 80.7608L69.8366 80.6207C69.7429 80.6808 69.6559 80.7341 69.5621 80.7941C68.6314 81.3343 67.6605 81.8278 66.6762 82.2813C65.3705 82.8615 64.0313 83.3683 62.6452 83.7818C59.987 84.5687 57.1814 85.0222 54.282 85.0889V85.3823H54.3557C54.7507 85.369 55.1257 85.349 55.5074 85.329C55.8221 85.309 56.1435 85.289 56.4582 85.2556C56.8131 85.2156 57.1747 85.1823 57.5296 85.1356C57.563 85.1356 57.6032 85.1223 57.63 85.1223C58.0317 85.0689 58.4469 85.0089 58.842 84.9422C59.2035 84.8888 59.5718 84.8222 59.92 84.7488C59.9535 84.7355 59.9937 84.7355 60.0204 84.7288C60.2213 84.6888 60.4222 84.6488 60.6231 84.5954C60.8976 84.5354 61.1587 84.4754 61.4333 84.402C61.7346 84.3287 62.0426 84.2486 62.3439 84.1619C62.4644 84.1286 62.5783 84.0886 62.6988 84.0619C62.7189 84.0486 62.7323 84.0486 62.7524 84.0419C62.9332 83.9819 63.1273 83.9285 63.3081 83.8818C63.3483 83.8618 63.3885 83.8485 63.4287 83.8418C63.4487 83.8285 63.4621 83.8285 63.4822 83.8218C63.6161 83.7818 63.7367 83.7418 63.8639 83.6884C64.0849 83.6151 64.2991 83.5484 64.5201 83.455C64.5937 83.435 64.6741 83.4017 64.7411 83.375C65.0223 83.275 65.2968 83.1749 65.5713 83.0616C65.9664 82.9015 66.3481 82.7414 66.7297 82.5681C66.79 82.5347 66.8436 82.5147 66.9038 82.488C67.1851 82.368 67.4663 82.2279 67.7542 82.0879C68.1359 81.9078 68.5109 81.7078 68.8858 81.5077C69.1068 81.3877 69.3278 81.2676 69.5554 81.1342C69.6492 81.0809 69.7295 81.0342 69.8166 80.9809C69.9103 80.9275 69.9973 80.8675 70.0911 80.8208L69.9973 80.7608ZM70.8812 79.9738C70.8611 79.9938 70.8276 80.0072 70.8075 80.0139L71.0821 80.1939C71.0955 80.1939 70.8812 79.9738 70.8812 79.9738ZM75.8429 76.4326L75.6889 76.1592C75.6152 76.2326 75.5349 76.2993 75.4679 76.3726C75.2536 76.566 75.0461 76.7528 74.8318 76.9462C74.7514 77.0262 74.6711 77.0995 74.5907 77.1596L74.9121 77.2996C74.9925 77.2262 75.0728 77.1462 75.1532 77.0862L75.4478 77.2062C75.5416 77.1262 75.6286 77.0462 75.7224 76.9528V76.8128L75.6219 76.6394C75.7023 76.586 75.7692 76.5127 75.8429 76.4326Z" fill="#202124"></path>
									<path d="M53.5274 74.4186C65.2354 74.4186 74.7266 64.9656 74.7266 53.3047C74.7266 41.6439 65.2354 32.1909 53.5274 32.1909C41.8194 32.1909 32.3281 41.6439 32.3281 53.3047C32.3281 64.9656 41.8194 74.4186 53.5274 74.4186Z" fill="white"></path>
									<path d="M73.7992 46.1757C73.6586 45.7756 73.5046 45.3821 73.3439 44.9886C72.2726 42.4745 70.7191 40.1603 68.717 38.1663C64.6593 34.125 59.2624 31.8909 53.5173 31.8909C51.5487 31.8909 49.6203 32.151 47.7722 32.6645C47.3571 32.7778 46.9419 32.8979 46.5402 33.0446C43.4801 34.0783 40.6746 35.8189 38.3176 38.1663C37.715 38.7732 37.1458 39.4067 36.6235 40.067C36.3624 40.4004 36.1012 40.7405 35.8535 41.094C33.3693 44.6419 32.0234 48.87 32.0234 53.3048C32.0234 59.0201 34.2532 64.4019 38.3176 68.4433C38.5787 68.7034 38.8533 68.9634 39.1345 69.2169C40.3063 70.2705 41.5919 71.1909 42.9445 71.9511C45.1474 73.1915 47.5379 74.0318 50.0555 74.4253C51.1871 74.6187 52.3455 74.7054 53.5173 74.7054C53.7718 74.7054 54.0195 74.7054 54.274 74.6854C56.564 74.612 58.787 74.1852 60.8895 73.4049C62.2756 72.9114 63.5947 72.2779 64.8468 71.491C66.2329 70.6373 67.5319 69.6103 68.717 68.4299C72.7748 64.3885 75.0179 59.0067 75.0179 53.2915C75.0246 50.844 74.6094 48.4298 73.7992 46.1757ZM54.2807 74.1119C54.0262 74.1319 53.7785 74.1319 53.524 74.1319C52.3455 74.1319 51.1938 74.0318 50.0622 73.8384C47.5446 73.4249 45.1876 72.558 43.065 71.3242C41.6923 70.5306 40.4067 69.5836 39.2684 68.51C35.1906 64.7087 32.6328 59.2935 32.6328 53.3115C32.6328 48.9233 34.0054 44.8419 36.349 41.4808C36.5901 41.1273 36.8445 40.7872 37.1056 40.4538C39.563 37.346 42.8909 34.9386 46.721 33.6248C47.1227 33.4847 47.5379 33.3514 47.953 33.2447C49.7274 32.7512 51.5956 32.4911 53.5307 32.4911C62.1751 32.4911 69.6076 37.7395 72.7815 45.202C72.9556 45.5955 73.1029 45.989 73.2435 46.3891C74.0202 48.5632 74.4353 50.884 74.4353 53.3115C74.4353 60.674 70.5785 67.1695 64.7531 70.8641C63.521 71.6577 62.1952 72.3246 60.8025 72.8247C58.7535 73.585 56.564 74.0385 54.2807 74.1119Z" fill="#202124"></path>
									<path class="fill-primary" d="M61.5638 61.314C66.0039 56.8918 66.0039 49.722 61.5638 45.2998C57.1237 40.8776 49.9249 40.8776 45.4848 45.2998C41.0447 49.722 41.0447 56.8918 45.4848 61.314C49.9249 65.7362 57.1237 65.7362 61.5638 61.314Z"></path>
									<path d="M44.9272 60.2404L44.867 60.6338C45.0076 60.7939 45.1482 60.954 45.3022 61.114C45.5365 61.3674 45.7843 61.5942 46.0521 61.8276C46.0655 61.8476 46.0856 61.8609 46.1057 61.8676C46.3066 62.0477 46.5208 62.221 46.7284 62.3811C46.7887 62.4345 46.8423 62.4745 46.9025 62.5145C47.0364 62.6078 47.1637 62.6945 47.3043 62.7879C47.7462 63.0813 48.2015 63.3281 48.6903 63.5615C48.7104 63.5748 48.7238 63.5748 48.7439 63.5815C49.1657 63.7749 49.6144 63.955 50.0697 64.095V63.7816C48.0207 63.108 46.253 61.8676 44.9272 60.2404ZM44.9272 60.2404L44.867 60.6338C45.0076 60.7939 45.1482 60.954 45.3022 61.114C45.5365 61.3674 45.7843 61.5942 46.0521 61.8276C46.0655 61.8476 46.0856 61.8609 46.1057 61.8676C46.3066 62.0477 46.5208 62.221 46.7284 62.3811C46.7887 62.4345 46.8423 62.4745 46.9025 62.5145C47.0364 62.6078 47.1637 62.6945 47.3043 62.7879C47.7462 63.0813 48.2015 63.3281 48.6903 63.5615C48.7104 63.5748 48.7238 63.5748 48.7439 63.5815C49.1657 63.7749 49.6144 63.955 50.0697 64.095V63.7816C48.0207 63.108 46.253 61.8676 44.9272 60.2404ZM64.573 49.5901C64.4391 49.1766 64.2784 48.7832 64.0909 48.403C62.2295 44.4417 58.2052 41.6941 53.5248 41.6941C52.507 41.6941 51.516 41.8275 50.5786 42.0676C50.1634 42.1809 49.7483 42.3076 49.3599 42.4677C47.3578 43.2346 45.6236 44.5284 44.3313 46.1889C44.0701 46.5224 43.8291 46.8758 43.6014 47.236C42.5033 49.0032 41.8672 51.0906 41.8672 53.3114C41.8672 53.9649 41.9208 54.5985 42.0279 55.2253C42.3895 57.4194 43.3805 59.4068 44.8134 61.0073C46.1994 62.5745 48.014 63.7749 50.063 64.4085C51.1611 64.7486 52.3262 64.9286 53.5248 64.9286C53.7792 64.9286 54.027 64.9153 54.2814 64.9086C56.0558 64.7886 57.7365 64.2751 59.2096 63.4481C60.676 62.6345 61.9482 61.5075 62.9392 60.1603C64.3521 58.2397 65.1891 55.8656 65.1891 53.3114C65.1891 52.0109 64.9748 50.7572 64.573 49.5901ZM54.2814 64.3018C54.027 64.3218 53.7792 64.3351 53.5248 64.3351C52.3128 64.3351 51.1544 64.1417 50.063 63.7816C48.0207 63.108 46.253 61.8676 44.9339 60.2404C43.7956 58.8532 42.9921 57.1727 42.6506 55.332C42.5167 54.6785 42.4564 54.0049 42.4564 53.3114C42.4564 51.2307 43.039 49.27 44.0634 47.6094C44.2844 47.236 44.5255 46.8825 44.7933 46.5557C46.0187 44.9885 47.6391 43.7615 49.5273 43.0345C49.9224 42.8745 50.3241 42.7411 50.7527 42.6411C51.6432 42.401 52.5673 42.281 53.5315 42.281C57.9575 42.281 61.7741 44.8685 63.5486 48.6098C63.7293 48.9899 63.89 49.3967 64.024 49.7968C64.4056 50.9039 64.6065 52.0909 64.6065 53.318C64.6065 55.5321 63.9369 57.6062 62.7986 59.3334C61.8679 60.7739 60.5957 61.9676 59.1092 62.8346C57.6762 63.6615 56.029 64.1951 54.2814 64.3018ZM44.9272 60.2404L44.867 60.6338C45.0076 60.7939 45.1482 60.954 45.3022 61.114C45.5365 61.3674 45.7843 61.5942 46.0521 61.8276C46.0655 61.8476 46.0856 61.8609 46.1057 61.8676C46.3066 62.0477 46.5208 62.221 46.7284 62.3811C46.7887 62.4345 46.8423 62.4745 46.9025 62.5145C47.0364 62.6078 47.1637 62.6945 47.3043 62.7879C47.7462 63.0813 48.2015 63.3281 48.6903 63.5615C48.7104 63.5748 48.7238 63.5748 48.7439 63.5815C49.1657 63.7749 49.6144 63.955 50.0697 64.095V63.7816C48.0207 63.108 46.253 61.8676 44.9272 60.2404ZM44.9272 60.2404L44.867 60.6338C45.0076 60.7939 45.1482 60.954 45.3022 61.114C45.5365 61.3674 45.7843 61.5942 46.0521 61.8276C46.0655 61.8476 46.0856 61.8609 46.1057 61.8676C46.3066 62.0477 46.5208 62.221 46.7284 62.3811C46.7887 62.4345 46.8423 62.4745 46.9025 62.5145C47.0364 62.6078 47.1637 62.6945 47.3043 62.7879C47.7462 63.0813 48.2015 63.3281 48.6903 63.5615C48.7104 63.5748 48.7238 63.5748 48.7439 63.5815C49.1657 63.7749 49.6144 63.955 50.0697 64.095V63.7816C48.0207 63.108 46.253 61.8676 44.9272 60.2404Z" fill="#202124"></path>
									<path d="M53.527 57.6461C55.9344 57.6461 57.886 55.7023 57.886 53.3046C57.886 50.9069 55.9344 48.9631 53.527 48.9631C51.1196 48.9631 49.168 50.9069 49.168 53.3046C49.168 55.7023 51.1196 57.6461 53.527 57.6461Z" fill="#202124"></path>
									<path d="M58.0323 51.951C57.7711 51.951 57.5234 51.791 57.4296 51.5309C57.3091 51.1974 57.4765 50.8306 57.8113 50.7106L113.87 30.0569C114.204 29.9369 114.573 30.1036 114.693 30.4371C114.814 30.7705 114.646 31.1373 114.311 31.2573L58.2532 51.911C58.1796 51.9377 58.1059 51.951 58.0323 51.951Z" fill="#1C1C1C"></path>
									<path d="M53.5273 53.3048L58.6028 48.6099L60.1764 52.878L53.5273 53.3048Z" fill="white"></path>
									<path d="M60.4497 52.7781L59.9074 51.2976L59.4721 50.1038L58.8896 48.5033C58.8494 48.4099 58.7691 48.3432 58.6753 48.3232C58.5749 48.3032 58.4744 48.3232 58.4008 48.3966L56.5125 50.1438L53.3186 53.0915C53.2784 53.1315 53.2449 53.1849 53.2382 53.2316C53.2182 53.2916 53.2249 53.3649 53.2516 53.425C53.2851 53.4983 53.3454 53.5583 53.4123 53.5783C53.4458 53.5983 53.486 53.6117 53.5262 53.6117C53.5463 53.6117 57.8919 53.3383 57.8919 53.3383L60.202 53.1849C60.2957 53.1715 60.3761 53.1249 60.423 53.0448C60.4698 52.9648 60.4832 52.8648 60.4497 52.7781ZM54.3431 52.9581L56.921 50.5773L58.4878 49.1302L58.9231 50.3039L59.365 51.4976L59.7668 52.6113L57.845 52.7314L54.3431 52.9581Z" fill="#1C1C1C"></path>
									<path d="M99.7578 35.8722L100.293 31.1106L112.246 26.6558L111.924 31.3373L99.7578 35.8722Z" fill="white"></path>
									<path d="M112.428 26.4224C112.348 26.3624 112.234 26.3424 112.147 26.3824L109.013 27.5495L103.429 29.6302C103.409 29.6302 103.389 29.6435 103.369 29.6502L101.782 30.2437L101.507 30.3437L101.213 30.4571L100.181 30.8372C100.081 30.8706 100.001 30.9706 99.9872 31.0773L99.5051 35.3454C99.5051 35.3588 99.4515 35.8389 99.4515 35.8389C99.4381 35.939 99.485 36.039 99.5653 36.1124C99.5854 36.1324 99.6189 36.1457 99.639 36.1457C99.6791 36.1657 99.7126 36.179 99.7528 36.179C99.793 36.179 99.8265 36.1657 99.8666 36.159L102.806 35.0653L103.141 34.9453L103.335 34.8719L103.429 34.8319L103.71 34.7319L105.893 33.9183C105.906 33.9183 106.328 33.7582 106.328 33.7582L108.578 32.9113L109.04 32.7379L110.727 32.1043L111.189 31.9309L112.026 31.6175C112.1 31.5842 112.147 31.5375 112.18 31.4774C112.214 31.4441 112.221 31.4041 112.221 31.3641L112.274 30.6505L112.549 26.6758C112.549 26.5758 112.509 26.4824 112.428 26.4224ZM111.665 30.8772L111.645 31.1307L103.496 34.165L103.215 34.2651L102.933 34.3784L100.114 35.4255L100.148 35.1254C100.148 35.1187 100.57 31.3241 100.57 31.3241L101.48 30.9839L101.762 30.8839C101.775 30.8839 102.043 30.7705 102.043 30.7705L103.134 30.3704L103.77 30.137L105.813 29.3701L106.442 29.13C106.455 29.13 108.772 28.263 108.772 28.263L109.408 28.0296L111.933 27.0826L111.665 30.8772Z" fill="#1C1C1C"></path>
									<path d="M103.215 32.1976C103.014 32.1709 102.9 32.0242 102.92 31.8641L103.195 29.8768C103.215 29.7167 103.369 29.6034 103.53 29.6234C103.69 29.6434 103.804 29.7968 103.784 29.9568L103.509 31.9442C103.489 32.0909 103.362 32.1976 103.215 32.1976Z" fill="#1C1C1C"></path>
									<path d="M105.672 32.8645C105.471 32.8379 105.357 32.6911 105.377 32.5311L105.866 28.9432C105.886 28.7832 106.04 28.6698 106.201 28.6898C106.362 28.7098 106.475 28.8632 106.455 29.0232L105.967 32.6111C105.94 32.7578 105.819 32.8645 105.672 32.8645Z" fill="#1C1C1C"></path>
									<path d="M108.738 30.9772C108.537 30.9505 108.424 30.8038 108.444 30.6438L108.839 27.7828C108.859 27.6228 109.013 27.5094 109.174 27.5294C109.334 27.5494 109.448 27.7028 109.428 27.8628L109.033 30.7238C109.006 30.8705 108.879 30.9772 108.738 30.9772Z" fill="#1C1C1C"></path>
									<path d="M115.704 35.0787L112.122 31.7576L99.9219 36.2191L103.297 39.6202L115.704 35.0787Z" fill="white"></path>
									<path d="M110.815 32.3778C110.774 32.3444 110.754 32.2977 110.741 32.2577L109.154 32.8379L108.578 33.0513L106.429 33.8383L105.886 34.0383L103.744 34.8253L103.462 34.9253L103.409 34.9453L103.509 35.0653C103.529 35.1053 103.55 35.1587 103.563 35.2054L103.623 35.1854L103.844 35.1054L106.054 34.2917L106.663 34.0717L108.786 33.2981L109.388 33.078C109.402 33.078 110.942 32.5045 110.942 32.5045L110.815 32.3778ZM110.815 32.3778C110.774 32.3444 110.754 32.2977 110.741 32.2577L109.154 32.8379L108.578 33.0513L106.429 33.8383L105.886 34.0383L103.744 34.8253L103.462 34.9253L103.409 34.9453L103.509 35.0653C103.529 35.1053 103.55 35.1587 103.563 35.2054L103.623 35.1854L103.844 35.1054L106.054 34.2917L106.663 34.0717L108.786 33.2981L109.388 33.078C109.402 33.078 110.942 32.5045 110.942 32.5045L110.815 32.3778ZM115.904 34.8653L112.669 31.8709L112.314 31.5508C112.274 31.5108 112.234 31.4908 112.174 31.4775C112.12 31.4574 112.06 31.4641 112.013 31.4908L110.895 31.9043L108.746 32.6912L103.637 34.5652L103.362 34.6652L103.067 34.7652L103.007 34.7986L99.8266 35.9523C99.7262 35.9923 99.6659 36.0657 99.6458 36.1524C99.6123 36.2657 99.6458 36.3658 99.7195 36.4325L99.8735 36.5925L103.088 39.8403C103.148 39.8936 103.228 39.9203 103.302 39.9203C103.342 39.9203 103.375 39.9203 103.402 39.907L104.614 39.4668L104.895 39.3668L105.177 39.2534L115.81 35.3588C115.91 35.3254 115.984 35.2454 116.004 35.1454C116.017 35.0453 115.977 34.932 115.904 34.8653ZM103.369 39.2801L100.469 36.3658C100.449 36.3458 103.014 35.3988 103.014 35.3988L103.275 35.3054L103.556 35.2054L103.616 35.1854L103.837 35.1054L106.047 34.2917L106.656 34.0717L108.779 33.2981L109.382 33.078C109.395 33.078 110.935 32.5045 110.935 32.5045L111.565 32.2711L112.04 32.0977L115.14 34.972L105.003 38.6732L104.728 38.7866L104.447 38.8866L103.369 39.2801ZM110.815 32.3778C110.774 32.3444 110.754 32.2977 110.741 32.2577L109.154 32.8379L108.578 33.0513L106.429 33.8383L105.886 34.0383L103.744 34.8253L103.462 34.9253L103.409 34.9453L103.509 35.0653C103.529 35.1053 103.55 35.1587 103.563 35.2054L103.623 35.1854L103.844 35.1054L106.054 34.2917L106.663 34.0717L108.786 33.2981L109.388 33.078C109.402 33.078 110.942 32.5045 110.942 32.5045L110.815 32.3778ZM110.815 32.3778C110.774 32.3444 110.754 32.2977 110.741 32.2577L109.154 32.8379L108.578 33.0513L106.429 33.8383L105.886 34.0383L103.744 34.8253L103.462 34.9253L103.409 34.9453L103.509 35.0653C103.529 35.1053 103.55 35.1587 103.563 35.2054L103.623 35.1854L103.844 35.1054L106.054 34.2917L106.663 34.0717L108.786 33.2981L109.388 33.078C109.402 33.078 110.942 32.5045 110.942 32.5045L110.815 32.3778Z" fill="#1C1C1C"></path>
									<path d="M113.347 34.5518C113.273 34.5518 113.206 34.5251 113.146 34.4784L110.822 32.3777C110.702 32.271 110.695 32.0843 110.802 31.9642C110.909 31.8442 111.097 31.8375 111.217 31.9442L113.541 34.0449C113.661 34.1516 113.668 34.3384 113.561 34.4584C113.507 34.5184 113.427 34.5518 113.347 34.5518Z" fill="#1C1C1C"></path>
									<path d="M110.291 34.6452C110.217 34.6452 110.143 34.6185 110.083 34.5585L108.643 33.158C108.53 33.0446 108.523 32.8579 108.637 32.7379C108.751 32.6245 108.938 32.6178 109.059 32.7312L110.498 34.1317C110.612 34.245 110.619 34.4318 110.505 34.5451C110.445 34.6185 110.371 34.6452 110.291 34.6452Z" fill="#1C1C1C"></path>
									<path d="M108.934 37.0127C108.861 37.0127 108.78 36.986 108.727 36.926L105.968 34.205C105.854 34.0917 105.854 33.9049 105.968 33.7916C106.082 33.6782 106.27 33.6782 106.39 33.7916L109.149 36.5125C109.263 36.6259 109.263 36.8126 109.149 36.926C109.082 36.9793 109.008 37.0127 108.934 37.0127Z" fill="#1C1C1C"></path>
									<path d="M105.143 37.5529C105.063 37.5529 104.983 37.5195 104.922 37.4595L102.887 35.2588C102.773 35.1387 102.786 34.952 102.907 34.8453C103.027 34.7319 103.215 34.7453 103.322 34.8653L105.358 37.0661C105.472 37.1861 105.458 37.3728 105.338 37.4795C105.284 37.5262 105.217 37.5529 105.143 37.5529Z" fill="#1C1C1C"></path>
									<path d="M51.7799 48.97C51.5054 48.97 51.2509 48.7899 51.1639 48.5098L38.589 6.36219C38.4885 6.02208 38.6827 5.66862 39.0242 5.56859C39.3657 5.46856 39.7206 5.66196 39.821 6.00207L52.3959 48.1497C52.4964 48.4898 52.3022 48.8433 51.9607 48.9433C51.9004 48.9633 51.8402 48.97 51.7799 48.97Z" fill="#1C1C1C"></path>
									<path d="M53.103 51.7109L49.8555 48.0963L53.5114 46.6292L53.103 51.7109Z" fill="white"></path>
									<path d="M53.6863 46.4024C53.606 46.3424 53.5055 46.3224 53.4051 46.3624L52.019 46.9159L50.8272 47.3894L49.7491 47.8162C49.6554 47.8562 49.5884 47.9362 49.5683 48.0296C49.5483 48.123 49.5817 48.223 49.642 48.2897L49.7759 48.4297L50.9879 49.7769L51.0682 49.8769L52.8962 51.8976C52.9498 51.9709 53.0301 51.9976 53.1105 51.9976C53.144 51.9976 53.1841 51.9976 53.2109 51.9843C53.3247 51.9443 53.4051 51.8442 53.4118 51.7242L53.6328 48.9566L53.8135 46.6425C53.8135 46.5491 53.7734 46.4624 53.6863 46.4024ZM53.0301 48.9966L52.8694 50.9973L51.4968 49.4701L50.3652 48.2097L51.0013 47.9562L52.1931 47.4761L53.1841 47.0826L53.0301 48.9966Z" fill="#1C1C1C"></path>
									<path d="M42.3516 16.9525L37.9323 16.7258L35.207 7.73608L39.5728 7.80944L42.3516 16.9525Z" fill="white"></path>
									<path d="M42.6388 16.8658L41.9826 14.7118L41.8219 14.1782L41.467 13.0112L41.3867 12.7311L41.293 12.451L41.2729 12.391L41.139 11.9308L40.6635 10.3836L40.5095 9.89012L40.168 8.76307C40.168 8.74974 40.014 8.26957 40.014 8.26957L39.8533 7.72939C39.8199 7.64936 39.773 7.58934 39.6993 7.556C39.6592 7.52265 39.619 7.51599 39.5654 7.51599L38.9159 7.50265L35.1863 7.44263C35.0925 7.44263 35.0055 7.48264 34.9519 7.56267C34.8917 7.63603 34.8716 7.73606 34.8984 7.82276L35.6148 10.1836L36.7866 14.0449L36.8803 14.3383L36.9138 14.4317L36.9741 14.6251L37.6303 16.8058C37.6705 16.9258 37.7709 17.0192 37.9048 17.0192L41.8152 17.2193L42.3174 17.2526C42.4313 17.2526 42.5116 17.2126 42.5719 17.1392C42.5853 17.1259 42.592 17.1059 42.592 17.0992C42.6455 17.0259 42.6656 16.9458 42.6388 16.8658ZM38.1526 16.4457L37.6102 14.6451L37.5365 14.405L37.4428 14.1116L37.4227 14.0382L37.3625 13.8248L37.0009 12.6311L36.8201 12.0242L36.3246 10.4036L36.1438 9.79009L35.6081 8.02949L39.1034 8.08951H39.3578L40.7305 12.6177L40.8242 12.8911L40.9046 13.1846L41.9558 16.6324L41.6545 16.6124L38.1526 16.4457Z" fill="#1C1C1C"></path>
									<path d="M39.0365 14.7517C39.0164 14.7517 37.1817 14.6183 37.1817 14.6183C37.021 14.605 36.8938 14.465 36.9072 14.3049C36.9206 14.1449 37.0612 14.0181 37.2219 14.0315L39.0566 14.1649C39.2173 14.1782 39.3445 14.3182 39.3311 14.4783C39.3244 14.6317 39.1905 14.7517 39.0365 14.7517Z" fill="#1C1C1C"></path>
									<path d="M39.9655 12.8445C39.9454 12.8445 36.631 12.6044 36.631 12.6044C36.4703 12.5911 36.343 12.451 36.3564 12.291C36.3698 12.1309 36.5104 12.0042 36.6711 12.0176L39.9856 12.2576C40.1463 12.271 40.2735 12.411 40.2602 12.5711C40.2468 12.7311 40.1195 12.8445 39.9655 12.8445Z" fill="#1C1C1C"></path>
									<path d="M38.5605 10.5703C38.5404 10.5703 35.8888 10.3769 35.8888 10.3769C35.7281 10.3636 35.6009 10.2235 35.6142 10.0635C35.6276 9.9034 35.7683 9.77669 35.929 9.79003L38.5738 9.98343C38.7345 9.99676 38.8618 10.1368 38.8484 10.2969C38.8484 10.4503 38.7145 10.5703 38.5605 10.5703Z" fill="#1C1C1C"></path>
									<path d="M43.5572 4.7749L39.9883 7.64254L42.7001 16.819L46.3159 14.1047L43.5572 4.7749Z" fill="white"></path>
									<path d="M41.7677 12.6243L41.6873 12.3442L41.6539 12.2641L41.4798 11.6506L41.0579 10.2101L40.8771 9.60991L40.5758 8.5829L40.4218 8.70294C40.3816 8.72294 40.3482 8.74295 40.308 8.75629L40.6227 9.80331L40.7968 10.3835L41.232 11.844L41.3927 12.4042C41.4061 12.4242 41.4865 12.7043 41.4865 12.7043L41.5668 12.9844C41.6606 12.951 41.761 12.9244 41.848 12.9044L41.7677 12.6243ZM41.7677 12.6243L41.6873 12.3442L41.6539 12.2641L41.4798 11.6506L41.0579 10.2101L40.8771 9.60991L40.5758 8.5829L40.4218 8.70294C40.3816 8.72294 40.3482 8.74295 40.308 8.75629L40.6227 9.80331L40.7968 10.3835L41.232 11.844L41.3927 12.4042C41.4061 12.4242 41.4865 12.7043 41.4865 12.7043L41.5668 12.9844C41.6606 12.951 41.761 12.9244 41.848 12.9044L41.7677 12.6243ZM45.9794 11.9374L45.8991 11.6573L45.8187 11.3772L43.8367 4.68824C43.8033 4.59488 43.7363 4.52819 43.6425 4.49484C43.5421 4.4615 43.4417 4.48151 43.368 4.5482L40.1473 7.1224L39.7924 7.41583C39.7388 7.45585 39.7121 7.5092 39.6987 7.55588C39.6786 7.6159 39.6786 7.66925 39.6987 7.72927L39.933 8.48286C39.933 8.52288 39.9464 8.56289 39.9531 8.6029L40.4151 10.1701C40.4285 10.2101 40.4486 10.2501 40.4687 10.2835L41.1182 12.5042L41.1985 12.7843L41.2789 13.0644L41.694 14.4649C41.694 14.4982 41.7074 14.5182 41.7141 14.5382L42.4105 16.899C42.444 16.9924 42.5109 17.0724 42.6047 17.0991C42.6382 17.1125 42.6649 17.1125 42.6984 17.1125C42.7587 17.1125 42.819 17.0924 42.8792 17.0524L43.0734 16.9124L46.4883 14.3448C46.5888 14.2715 46.6289 14.1448 46.6021 14.0247L45.9794 11.9374ZM42.8591 16.3255L42.3368 14.5449L42.1628 13.9447L41.848 12.911L41.7677 12.6309L41.6873 12.3508L41.6539 12.2708L41.4798 11.6573L41.0579 10.2168L40.8771 9.61658L40.5758 8.58957L40.395 7.96269L40.3348 7.76262C40.3415 7.74928 43.3948 5.28845 43.3948 5.28845L45.2295 11.4972L45.3098 11.7773L45.3902 12.0574L45.966 13.9981L42.8859 16.2988L42.8591 16.3255ZM41.7677 12.6243L41.6873 12.3442L41.6539 12.2641L41.4798 11.6506L41.0579 10.2101L40.8771 9.60991L40.5758 8.5829L40.4218 8.70294C40.3816 8.72294 40.3482 8.74295 40.308 8.75629L40.6227 9.80331L40.7968 10.3835L41.232 11.844L41.3927 12.4042C41.4061 12.4242 41.4865 12.7043 41.4865 12.7043L41.5668 12.9844C41.6606 12.951 41.761 12.9244 41.848 12.9044L41.7677 12.6243ZM41.7677 12.6243L41.6873 12.3442L41.6539 12.2641L41.4798 11.6506L41.0579 10.2101L40.8771 9.60991L40.5758 8.5829L40.4218 8.70294C40.3816 8.72294 40.3482 8.74295 40.308 8.75629L40.6227 9.80331L40.7968 10.3835L41.232 11.844L41.3927 12.4042C41.4061 12.4242 41.4865 12.7043 41.4865 12.7043L41.5668 12.9844C41.6606 12.951 41.761 12.9244 41.848 12.9044L41.7677 12.6243Z" fill="#1C1C1C"></path>
									<path d="M40.2344 8.7696C40.1474 8.7696 40.067 8.73625 40.0067 8.66289C39.8996 8.53618 39.9197 8.34945 40.0469 8.24942L42.3101 6.38879C42.4374 6.28209 42.6248 6.30209 42.7253 6.4288C42.8324 6.55551 42.8123 6.74224 42.6851 6.84228L40.4219 8.70291C40.3683 8.74292 40.3014 8.7696 40.2344 8.7696Z" fill="#1C1C1C"></path>
									<path d="M40.7175 10.3902C40.6304 10.3902 40.5434 10.3502 40.4831 10.2769C40.3827 10.1502 40.4095 9.96342 40.5367 9.86339L42.0299 8.70966C42.1571 8.60963 42.3446 8.63631 42.445 8.76302C42.5454 8.88973 42.5187 9.07646 42.3914 9.17649L40.8983 10.3302C40.8447 10.3702 40.7777 10.3902 40.7175 10.3902Z" fill="#1C1C1C"></path>
									<path d="M41.3659 12.4108C41.2789 12.4108 41.1918 12.3708 41.1315 12.2974C41.0311 12.1707 41.0579 11.984 41.1851 11.884L44.0844 9.66987C44.2117 9.56984 44.3991 9.59651 44.4996 9.72322C44.6 9.84993 44.5732 10.0367 44.446 10.1367L41.5467 12.3508C41.4931 12.3908 41.4262 12.4108 41.3659 12.4108Z" fill="#1C1C1C"></path>
									<path d="M41.99 14.7183C41.8962 14.7183 41.8092 14.6783 41.7489 14.5916C41.6552 14.4583 41.6887 14.2782 41.8159 14.1782L44.1394 12.5309C44.2733 12.4376 44.4608 12.4709 44.5545 12.5976C44.6483 12.731 44.6148 12.9111 44.4876 13.0111L42.1641 14.6583C42.1105 14.6983 42.0502 14.7183 41.99 14.7183Z" fill="#1C1C1C"></path>
									<path d="M49.4551 51.7108C49.3144 51.7108 49.1738 51.6642 49.0533 51.5708L7.1034 18.2662C6.82887 18.0461 6.782 17.646 7.00296 17.3659C7.22393 17.0924 7.62568 17.0458 7.90691 17.2658L49.8635 50.5704C50.138 50.7905 50.1849 51.1907 49.9639 51.4708C49.83 51.6308 49.6425 51.7108 49.4551 51.7108Z" fill="#1C1C1C"></path>
									<path d="M53.1184 53.5848L47.4336 51.7575L49.9245 48.6631L53.1184 53.5848Z" fill="white"></path>
									<path d="M53.3728 53.4313L53.2388 53.2313L51.056 49.8835L50.9957 49.7701L50.1654 48.503C50.1119 48.4296 50.0248 48.383 49.9311 48.3696C49.8708 48.3696 49.8105 48.3896 49.757 48.4297C49.7235 48.443 49.7034 48.463 49.6833 48.483L48.7124 49.6767L47.9156 50.6704L47.2058 51.5774C47.1456 51.6507 47.1255 51.7508 47.1523 51.8375C47.1857 51.9375 47.2527 52.0109 47.3464 52.0375L49.2347 52.6444L53.0313 53.8715C53.0648 53.8848 53.0915 53.8848 53.125 53.8848C53.2188 53.8848 53.3058 53.8448 53.3594 53.7715C53.4129 53.7114 53.433 53.6381 53.4196 53.5714C53.4129 53.518 53.4062 53.4714 53.3728 53.4313ZM49.3552 52.0709L47.929 51.6107L48.3843 51.0505L49.1945 50.0435L49.9043 49.1699L50.5404 50.1569L52.4286 53.0646L49.3552 52.0709Z" fill="#1C1C1C"></path>
									<path d="M18.1658 26.3155L13.7465 28.1894L4.75391 21.1137L9.01251 19.113L18.1658 26.3155Z" fill="white"></path>
									<path d="M18.3472 26.0821L16.1844 24.3749C16.171 24.3749 15.7492 24.0414 15.7492 24.0414L13.8676 22.5543C13.8542 22.5543 13.4859 22.2608 13.4859 22.2608L11.8521 20.9737L11.7785 20.9137L11.524 20.7203L11.4437 20.6469L11.3031 20.5336L10.225 19.6866L9.82998 19.3665L9.19387 18.873C9.13361 18.833 9.07334 18.813 8.99969 18.813C8.95951 18.813 8.91934 18.813 8.87916 18.833L8.20957 19.1464L4.61386 20.8337C4.52012 20.887 4.45986 20.9671 4.43977 21.0671C4.42638 21.1805 4.47325 21.2805 4.5536 21.3405L6.90387 23.1945C6.91726 23.2078 8.49749 24.4549 8.49749 24.4549L8.73185 24.635L8.98629 24.835L11.1491 26.5356C11.1826 26.5556 11.2093 26.5756 11.2428 26.589L13.5529 28.4296C13.6065 28.4696 13.6667 28.4896 13.7337 28.4896C13.7739 28.4896 13.814 28.4763 13.8475 28.4696L17.8182 26.7824L18.2735 26.589C18.374 26.5489 18.4342 26.4556 18.4543 26.3555V26.3022C18.4543 26.2155 18.4141 26.1288 18.3472 26.0821ZM17.2892 26.3622L13.7873 27.8494L11.9258 26.3822L11.3834 25.9621L9.91033 24.795L9.37466 24.3749L9.32109 24.3415L9.06665 24.1415L8.83229 23.9481L7.68059 23.0411L7.14492 22.6209L5.30354 21.1738L8.72515 19.5666L8.96621 19.4532L10.9348 21.0004L11.1692 21.1805L11.4236 21.3805L17.5838 26.2288L17.2892 26.3622Z" fill="#1C1C1C"></path>
									<path d="M11.3385 26.589C11.218 26.589 11.1108 26.5156 11.064 26.4023C11.0037 26.2489 11.0774 26.0822 11.2314 26.0221L13.0928 25.2819C13.2468 25.2219 13.4142 25.2952 13.4745 25.4486C13.5348 25.602 13.4611 25.7687 13.3071 25.8287L11.4523 26.569C11.4122 26.5823 11.3787 26.589 11.3385 26.589Z" fill="#1C1C1C"></path>
									<path d="M9.38146 24.9818C9.26094 24.9818 9.1538 24.9151 9.10693 24.795C9.04667 24.6417 9.12032 24.4749 9.27433 24.4149L12.6424 23.0678C12.7964 23.0078 12.9638 23.0811 13.024 23.2345C13.0843 23.3879 13.0106 23.5546 12.8566 23.6146L9.4886 24.9618C9.45512 24.9751 9.42164 24.9818 9.38146 24.9818Z" fill="#1C1C1C"></path>
									<path d="M7.09631 23.2545C6.97578 23.2545 6.86865 23.1811 6.82178 23.0678C6.76151 22.9144 6.83517 22.7476 6.98917 22.6876L9.68093 21.6139C9.83494 21.5539 10.0023 21.6273 10.0626 21.7807C10.1229 21.934 10.0492 22.1008 9.8952 22.1608L7.20344 23.2345C7.16996 23.2478 7.12979 23.2545 7.09631 23.2545Z" fill="#1C1C1C"></path>
									<path d="M10.7069 14.3982L9.30078 18.7597L18.4005 26.0221L19.9674 21.7874L10.7069 14.3982Z" fill="white"></path>
									<path d="M11.8057 20.3802L11.5914 20.2201C11.5713 20.2001 10.4598 19.3131 10.4598 19.3131L10.3995 19.5065C10.3862 19.5465 10.3661 19.5799 10.346 19.6066L11.3838 20.4335L11.4843 20.5135L11.6182 20.6136L11.8593 20.8136C11.9195 20.7403 11.9798 20.6603 12.04 20.5802L11.8057 20.3802ZM11.8057 20.3802L11.5914 20.2201C11.5713 20.2001 10.4598 19.3131 10.4598 19.3131L10.3995 19.5065C10.3862 19.5465 10.3661 19.5799 10.346 19.6066L11.3838 20.4335L11.4843 20.5135L11.6182 20.6136L11.8593 20.8136C11.9195 20.7403 11.9798 20.6603 12.04 20.5802L11.8057 20.3802ZM20.1488 21.5539L14.8657 17.3391L14.6113 17.1391L14.3769 16.959L10.895 14.1714C10.8147 14.1114 10.7143 14.0914 10.6205 14.118C10.5268 14.138 10.4464 14.2181 10.4196 14.3114L9.14741 18.2661L9.01349 18.6662C8.9934 18.7196 8.9934 18.7663 9.0001 18.8196C9.01349 18.893 9.06036 18.9397 9.11393 18.993L9.93083 19.6466C9.96431 19.6666 11.2031 20.6603 11.2031 20.6603L11.4374 20.8403L11.5111 20.9003C11.5445 20.9337 11.5646 20.9404 11.5847 20.9537C11.5981 20.9737 11.6182 20.9737 11.6383 20.987L11.6986 21.0471L15.85 24.3548C15.8701 24.3748 15.8902 24.3949 15.9237 24.4082L18.2271 26.2622C18.2806 26.3022 18.3409 26.3222 18.4079 26.3222C18.4279 26.3222 18.448 26.3222 18.4681 26.3088C18.5819 26.2888 18.6489 26.2155 18.6824 26.1288L18.7761 25.8954L20.2626 21.894C20.2894 21.7673 20.2492 21.6339 20.1488 21.5539ZM18.2605 25.5352L16.379 24.0347L15.9036 23.6546L14.1158 22.2275L13.6337 21.834L12.0869 20.6069L12.0467 20.5736L11.8057 20.3735L11.5914 20.2134C11.5713 20.1934 10.4598 19.3065 10.4598 19.3065L10.1451 19.053L9.96431 18.8997L9.64291 18.6462L10.8549 14.885L13.9752 17.3791L14.2095 17.5592L14.464 17.7593L19.6131 21.874L18.2672 25.4952L18.2605 25.5352ZM11.8057 20.3802L11.5914 20.2201C11.5713 20.2001 10.4598 19.3131 10.4598 19.3131L10.3995 19.5065C10.3862 19.5465 10.3661 19.5799 10.346 19.6066L11.3838 20.4335L11.4843 20.5135L11.6182 20.6136L11.8593 20.8136C11.9195 20.7403 11.9798 20.6603 12.04 20.5802L11.8057 20.3802ZM11.8057 20.3802L11.5914 20.2201C11.5713 20.2001 10.4598 19.3131 10.4598 19.3131L10.3995 19.5065C10.3862 19.5465 10.3661 19.5799 10.346 19.6066L11.3838 20.4335L11.4843 20.5135L11.6182 20.6136L11.8593 20.8136C11.9195 20.7403 11.9798 20.6603 12.04 20.5802L11.8057 20.3802Z" fill="#1C1C1C"></path>
									<path d="M10.1259 19.7133C10.0992 19.7133 10.0657 19.7066 10.0389 19.6999C9.88489 19.6533 9.79785 19.4865 9.84472 19.3332L10.7085 16.5322C10.7554 16.3788 10.9228 16.2921 11.0768 16.3388C11.2308 16.3855 11.3178 16.5522 11.2709 16.7056L10.4072 19.5065C10.367 19.6266 10.2532 19.7133 10.1259 19.7133Z" fill="#1C1C1C"></path>
									<path d="M11.7392 21.0005C11.7057 21.0005 11.6723 20.9938 11.6388 20.9871C11.4848 20.9338 11.4044 20.767 11.458 20.6137L12.0807 18.8331C12.1343 18.6797 12.3017 18.5996 12.4557 18.653C12.6097 18.7063 12.69 18.8731 12.6365 19.0265L12.0138 20.8071C11.9736 20.9204 11.8597 21.0005 11.7392 21.0005Z" fill="#1C1C1C"></path>
									<path d="M13.7861 22.5675C13.7526 22.5675 13.7191 22.5608 13.6857 22.5475C13.5317 22.4942 13.4513 22.3274 13.5049 22.174L14.7369 18.7396C14.7905 18.5862 14.9579 18.5061 15.1119 18.5595C15.2659 18.6128 15.3462 18.7796 15.2927 18.933L14.0606 22.3674C14.0205 22.4875 13.9066 22.5675 13.7861 22.5675Z" fill="#1C1C1C"></path>
									<path d="M16.0231 24.4216C15.9829 24.4216 15.9494 24.415 15.9092 24.4016C15.7552 24.3416 15.6883 24.1682 15.7485 24.0148L16.8266 21.3873C16.8868 21.2339 17.0609 21.1672 17.2149 21.2272C17.3689 21.2872 17.4359 21.4606 17.3756 21.614L16.2976 24.2416C16.2507 24.3549 16.1436 24.4216 16.0231 24.4216Z" fill="#1C1C1C"></path>
								</svg>
							</figure>

							<!-- Tabs -->
							<div class="nav nav-pills nav-pills-dark" id="nav-tab" role="tablist">
								<button class="nav-link active" id="nav-mission-tab" data-bs-toggle="tab" data-bs-target="#nav-mission" type="button" role="tab" aria-controls="nav-mission" aria-selected="true">Our Mission</button>
								<button class="nav-link" id="nav-goal-tab" data-bs-toggle="tab" data-bs-target="#nav-goal" type="button" role="tab" aria-controls="nav-goal" aria-selected="false" tabindex="-1">Our Goal</button>
							</div>

							<!-- Tab content -->
							<div class="tab-content mt-4" id="nav-tabContent">
								<!-- Mission content -->
								<div class="tab-pane fade show active" id="nav-mission" role="tabpanel" aria-labelledby="nav-mission-tab" tabindex="0">
									<h5 class="mb-3">Our Commitment to Your Success</h5>
									<p class="mb-2">At Mizzle, our mission is to empower businesses with digital tools, research and strategies.</p>
									<!-- List -->
									<ul class="list-group list-group-borderless mb-3">
										<li class="list-group-item heading-color d-flex pb-0"><i class="bi bi-patch-check-fill me-2"></i>Client-Centric Approach</li>
										<li class="list-group-item heading-color d-flex pb-0"><i class="bi bi-patch-check-fill me-2"></i>Experienced Team</li>
										<li class="list-group-item heading-color d-flex pb-0"><i class="bi bi-patch-check-fill me-2"></i>Measurable Results</li>
									</ul>
									<!-- Button -->
									<a class="icon-link icon-link-hover" href="about-v2.html">Know about more<i class="bi bi-arrow-right"></i> </a>
								</div>

								<!-- Goal content -->
								<div class="tab-pane fade" id="nav-goal" role="tabpanel" aria-labelledby="nav-goal-tab" tabindex="0">
									<h5 class="mb-3">Charting the Future of Digital Innovation</h5>
									<p class="mb-2"> We envision a future where businesses of all sizes can harness the full potential of the digital world to achieve their dreams.</p>
									<!-- List -->
									<ul class="list-group list-group-borderless mb-3">
										<li class="list-group-item heading-color d-flex pb-0"><i class="bi bi-patch-check-fill me-2"></i>Digital Pioneers</li>
										<li class="list-group-item heading-color d-flex pb-0"><i class="bi bi-patch-check-fill me-2"></i>Continuous Learning</li>
										<li class="list-group-item heading-color d-flex pb-0"><i class="bi bi-patch-check-fill me-2"></i>Inspiring Transformation</li>
									</ul>
									<!-- Button -->
									<a class="icon-link icon-link-hover" href="about-v1.html">Know about more<i class="bi bi-arrow-right"></i> </a>
								</div>
							</div>
						</div>
						<!-- Goal and Mission tab END -->
					</div>

					<!-- Image -->
					<div class="col-lg-5 mt-7 mt-lg-0">
						<div class="position-relative d-flex justify-content-center">
							<!-- Hero image -->
							<img src="{{asset('public/image/04.jpg')}}" class="rounded" alt="">

							<!-- Trustpilot review START -->
							<div class="d-inline-block bg-dark shadow  rounded-4 position-absolute end-0 top-0 p-3 mt-n5 me-5" data-bs-theme="dark">
								<!-- Trustpilot logo -->
								<figure class="mb-2">
									<svg width="103" height="25" viewBox="0 0 103 25" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path class="fill-mode" d="M27.2904 9.09106L37.5808 9.09106V10.9814L33.5291 10.9814V21.6377H31.3082V10.9814H27.2734L27.2904 9.09106ZM37.1401 12.5539H39.0388V14.3104H39.0727C39.1405 14.0595 39.2592 13.8253 39.4287 13.5911C39.5982 13.3569 39.8017 13.1394 40.056 12.9554C40.2933 12.7547 40.5646 12.6041 40.8697 12.487C41.1579 12.3699 41.4631 12.303 41.7682 12.303C42.0056 12.303 42.1751 12.3197 42.2599 12.3197C42.3446 12.3364 42.4463 12.3532 42.5311 12.3532V14.277C42.3955 14.2435 42.2429 14.2268 42.0903 14.2101C41.9377 14.1933 41.8021 14.1766 41.6495 14.1766C41.3105 14.1766 40.9884 14.2435 40.6832 14.3774C40.3781 14.5112 40.1238 14.7119 39.8864 14.9629C39.666 15.2305 39.4796 15.5484 39.3439 15.9331C39.2083 16.3179 39.1405 16.7696 39.1405 17.2714V21.5875H37.1062L37.1401 12.5539ZM51.8552 21.6377H49.8548V20.3663H49.8209C49.5666 20.8347 49.1936 21.186 48.702 21.4704C48.2103 21.7548 47.7018 21.8886 47.1932 21.8886C45.9895 21.8886 45.108 21.6042 44.5655 21.002C44.023 20.4164 43.7517 19.5131 43.7517 18.3253V12.5539H45.7861V18.1246C45.7861 18.9276 45.9386 19.4964 46.2608 19.8142C46.5659 20.1488 47.0067 20.3161 47.5661 20.3161C47.9899 20.3161 48.346 20.2492 48.6342 20.1153C48.9224 19.9815 49.1597 19.8142 49.3292 19.5967C49.5157 19.3793 49.6344 19.1116 49.7192 18.8105C49.8039 18.5094 49.8378 18.1748 49.8378 17.8235V12.5539H51.8722V21.6377H51.8552ZM55.3136 18.7268C55.3814 19.3123 55.6018 19.7138 55.9917 19.9648C56.3817 20.199 56.8563 20.3161 57.3988 20.3161C57.5853 20.3161 57.8057 20.2993 58.0431 20.2659C58.2804 20.2324 58.5177 20.1822 58.7212 20.0986C58.9416 20.015 59.1111 19.8979 59.2467 19.7306C59.3823 19.5633 59.4502 19.3625 59.4332 19.1116C59.4162 18.8607 59.3315 18.6432 59.145 18.4759C58.9585 18.3086 58.7381 18.1915 58.4669 18.0744C58.1956 17.974 57.8735 17.8904 57.5175 17.8235C57.1615 17.7566 56.8055 17.6729 56.4325 17.5893C56.0596 17.5056 55.6866 17.4053 55.3306 17.2882C54.9746 17.1711 54.6694 17.0205 54.3812 16.803C54.11 16.6023 53.8726 16.3514 53.7201 16.0335C53.5505 15.7157 53.4658 15.3476 53.4658 14.8792C53.4658 14.3774 53.5844 13.9759 53.8387 13.6413C54.0761 13.3067 54.3982 13.0391 54.7711 12.8383C55.1441 12.6376 55.5679 12.487 56.0257 12.4034C56.4834 12.3197 56.9242 12.2863 57.331 12.2863C57.8057 12.2863 58.2634 12.3364 58.6873 12.4368C59.1111 12.5372 59.518 12.6878 59.857 12.922C60.213 13.1394 60.5012 13.4405 60.7216 13.7918C60.959 14.1432 61.0946 14.5781 61.1624 15.08H59.0433C58.9416 14.5948 58.7212 14.277 58.3821 14.1097C58.0261 13.9424 57.6362 13.8588 57.1785 13.8588C57.0428 13.8588 56.8563 13.8755 56.6699 13.8922C56.4664 13.9257 56.2969 13.9591 56.1104 14.0261C55.9409 14.093 55.7883 14.1933 55.6696 14.3104C55.551 14.4275 55.4832 14.5948 55.4832 14.7956C55.4832 15.0465 55.5679 15.2305 55.7375 15.3811C55.907 15.5316 56.1274 15.6487 56.4156 15.7658C56.6868 15.8662 57.0089 15.9499 57.3649 16.0168C57.721 16.0837 58.0939 16.1673 58.4669 16.251C58.8398 16.3346 59.1959 16.435 59.5519 16.5521C59.9079 16.6692 60.23 16.8198 60.5012 17.0372C60.7725 17.238 61.0098 17.4889 61.1794 17.79C61.3489 18.0911 61.4336 18.4759 61.4336 18.9109C61.4336 19.4462 61.315 19.8979 61.0607 20.2826C60.8064 20.6507 60.4843 20.9685 60.0944 21.2027C59.7044 21.4369 59.2467 21.6042 58.772 21.7213C58.2804 21.8217 57.8057 21.8886 57.331 21.8886C56.7546 21.8886 56.2121 21.8217 55.7205 21.6878C55.2289 21.554 54.7881 21.3533 54.4321 21.1023C54.0761 20.8347 53.7879 20.5168 53.5844 20.1153C53.381 19.7306 53.2623 19.2622 53.2454 18.7101H55.2967V18.7268H55.3136ZM62.01 12.5539H63.5528V9.8104L65.5871 9.8104V12.5372H67.418V14.0261L65.5871 14.0261V18.8774C65.5871 19.0949 65.6041 19.2622 65.621 19.4294C65.638 19.58 65.6888 19.7138 65.7397 19.8142C65.8075 19.9146 65.9092 19.9982 66.0279 20.0484C66.1635 20.0986 66.3331 20.1321 66.5704 20.1321C66.706 20.1321 66.8586 20.1321 66.9942 20.1153C67.1298 20.0986 67.2824 20.0819 67.418 20.0484V21.6042C67.1977 21.6376 66.9773 21.6544 66.7569 21.6711C66.5365 21.7046 66.3331 21.7046 66.0957 21.7046C65.5532 21.7046 65.1294 21.6544 64.8073 21.554C64.4852 21.4536 64.2309 21.3031 64.0444 21.1191C63.8579 20.9183 63.7392 20.6841 63.6714 20.3997C63.6036 20.1153 63.5697 19.764 63.5528 19.396V14.0428H62.01V12.5205V12.5539ZM68.8421 12.5539H70.7578V13.7918H70.7917C71.0799 13.2565 71.4698 12.8885 71.9784 12.6543C72.487 12.4201 73.0295 12.303 73.6398 12.303C74.3688 12.303 74.996 12.4201 75.5385 12.6878C76.081 12.9387 76.5218 13.2733 76.8778 13.7249C77.2338 14.1599 77.5051 14.6785 77.6746 15.264C77.8441 15.8495 77.9458 16.4852 77.9458 17.1376C77.9458 17.7566 77.8611 18.3421 77.7085 18.9109C77.539 19.4796 77.3016 19.9982 76.9795 20.4332C76.6574 20.8681 76.2505 21.2194 75.7419 21.4871C75.2334 21.7547 74.657 21.8886 73.9788 21.8886C73.6906 21.8886 73.3855 21.8551 73.0973 21.8049C72.8091 21.7548 72.5209 21.6711 72.2496 21.554C71.9784 21.4369 71.7241 21.2863 71.5037 21.1023C71.2664 20.9183 71.0799 20.7008 70.9273 20.4666H70.8934V25.0001H68.859V12.5539H68.8421ZM75.9454 17.1041C75.9454 16.7027 75.8945 16.3012 75.7759 15.9164C75.6741 15.5316 75.5046 15.1971 75.2842 14.8959C75.0638 14.5948 74.7926 14.3606 74.4874 14.1766C74.1653 13.9926 73.7924 13.909 73.3855 13.909C72.5378 13.909 71.8936 14.1933 71.4528 14.7789C71.029 15.3644 70.8086 16.1506 70.8086 17.1209C70.8086 17.5893 70.8595 18.0075 70.9782 18.3923C71.0968 18.777 71.2494 19.1116 71.4868 19.396C71.7071 19.6804 71.9784 19.8979 72.3005 20.0651C72.6226 20.2324 72.9786 20.3161 73.4024 20.3161C73.8771 20.3161 74.2501 20.2157 74.5722 20.0317C74.8943 19.8477 75.1486 19.5967 75.369 19.3123C75.5724 19.0112 75.725 18.6767 75.8098 18.2919C75.8945 17.8904 75.9454 17.5056 75.9454 17.1041ZM79.5225 9.09106H81.5568V10.9814H79.5225V9.09106ZM79.5225 12.5539H81.5568V21.6377H79.5225V12.5539ZM83.3708 9.09106H85.4051V21.6377H83.3708V9.09106ZM91.6099 21.8886C90.8809 21.8886 90.2198 21.7715 89.6434 21.5205C89.067 21.2696 88.5923 20.9518 88.1854 20.5335C87.7955 20.1153 87.4903 19.5967 87.2869 19.0112C87.0835 18.4257 86.9648 17.7733 86.9648 17.0874C86.9648 16.4015 87.0665 15.7658 87.2869 15.1803C87.4903 14.5948 87.7955 14.093 88.1854 13.658C88.5753 13.2398 89.067 12.9052 89.6434 12.671C90.2198 12.4368 90.8809 12.303 91.6099 12.303C92.3389 12.303 93.0001 12.4201 93.5765 12.671C94.1529 12.9052 94.6275 13.2398 95.0344 13.658C95.4243 14.0762 95.7295 14.5948 95.9329 15.1803C96.1364 15.7658 96.255 16.4015 96.255 17.0874C96.255 17.79 96.1533 18.4257 95.9329 19.0112C95.7125 19.5967 95.4243 20.0986 95.0344 20.5335C94.6445 20.9518 94.1529 21.2863 93.5765 21.5205C93.0001 21.7547 92.3558 21.8886 91.6099 21.8886ZM91.6099 20.2993C92.0507 20.2993 92.4576 20.199 92.7797 20.015C93.1187 19.8309 93.373 19.58 93.5934 19.2789C93.8138 18.9778 93.9664 18.6265 94.0681 18.2584C94.1698 17.8737 94.2207 17.4889 94.2207 17.0874C94.2207 16.7027 94.1698 16.3179 94.0681 15.9331C93.9664 15.5484 93.8138 15.2138 93.5934 14.9127C93.373 14.6116 93.1018 14.3774 92.7797 14.1933C92.4406 14.0093 92.0507 13.909 91.6099 13.909C91.1691 13.909 90.7623 14.0093 90.4402 14.1933C90.1011 14.3774 89.8468 14.6283 89.6264 14.9127C89.406 15.2138 89.2534 15.5484 89.1517 15.9331C89.05 16.3179 88.9992 16.7027 88.9992 17.0874C88.9992 17.4889 89.05 17.8737 89.1517 18.2584C89.2534 18.6432 89.406 18.9778 89.6264 19.2789C89.8468 19.58 90.1181 19.8309 90.4402 20.015C90.7792 20.2157 91.1691 20.2993 91.6099 20.2993ZM96.8653 12.5539H98.4081V9.8104H100.442V12.5372H102.273V14.0261H100.442V18.8774C100.442 19.0949 100.459 19.2622 100.476 19.4294C100.493 19.58 100.544 19.7138 100.595 19.8142C100.663 19.9146 100.765 19.9982 100.883 20.0484C101.019 20.0986 101.188 20.1321 101.426 20.1321C101.561 20.1321 101.714 20.1321 101.85 20.1153C101.985 20.0986 102.138 20.0819 102.273 20.0484V21.6042C102.053 21.6376 101.833 21.6544 101.612 21.6711C101.392 21.7046 101.188 21.7046 100.951 21.7046C100.409 21.7046 99.9847 21.6544 99.6626 21.554C99.3405 21.4536 99.0862 21.3031 98.8997 21.1191C98.7132 20.9183 98.5945 20.6841 98.5267 20.3997C98.4589 20.1153 98.425 19.764 98.4081 19.396V14.0428H96.8653V12.5205V12.5539Z"></path>
										<path d="M25 8.68493L15.4488 8.68493L12.5087 0L9.55113 8.68493L0 8.6683L7.72441 14.0423L4.76687 22.7272L12.4913 17.3532L20.2157 22.7272L17.2755 14.0423L25 8.68493Z" fill="#00B67A"></path>
										<path d="M18.1818 16.7942L17.4898 14.7727L12.5 18.1818L18.1818 16.7942Z" fill="#005128"></path>
									</svg>
								</figure>
								<!-- Rating -->
								<img src="{{asset('public/image/trustpilot-star.svg')}}" class="h-20px" alt="Rating-img">
								<p class="small mb-0 mt-2">Trustpilot score <span class="fw-bold heading-color">4.7 | 27 reviews</span></p>
							</div>
							<!-- Trustpilot review END -->
						</div>
					</div>
				</div>
				<!-- About detail END -->
			</div>	
		</section>
		<!-- =======================
		About END -->


		<!-- =======================
		Services START -->
		<section class="sectionlevel pb-0">
			<div class="container">
				<!-- Title -->
				<div class="inner-container text-center mb-4 mb-sm-6">
					<h2 class="mb-0">Our Comprehensive Services</h2>
				</div>

				<!-- Service list START -->
				<div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4">
					<!-- Service item -->
					<div class="col">
						<div class="card card-hover-shadow border h-100 p-4">
							<!-- Card body -->
							<div class="card-body p-0">
								<!-- Icon -->
								<figure class="text-primary mb-4">
									<svg width="50" height="50" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M2.25 12C2.25 17.3848 6.61522 21.75 12 21.75C16.567 21.75 20.4006 18.6099 21.4597 14.371C21.6257 13.7068 21.7086 13.3746 21.5327 13.0378C21.4825 12.9418 21.3914 12.8252 21.3104 12.7532C21.0263 12.5009 20.6322 12.5009 19.844 12.5009H13.3C12.5501 12.5009 12.1751 12.5009 11.9122 12.3099C11.8273 12.2482 11.7527 12.1736 11.691 12.0887C11.5 11.8258 11.5 11.4508 11.5 10.7009V4.15582C11.5 3.36765 11.5 2.97356 11.2477 2.68947C11.1758 2.60848 11.0591 2.51736 10.9631 2.4672C10.6263 2.29125 10.2942 2.37418 9.63002 2.54005C5.39056 3.59874 2.25 7.43262 2.25 12Z" fill="currentColor" fill-opacity="0.25"></path>
										<path d="M12.8 9.4V4.25994C12.8 3.42978 12.8 3.0147 13.0698 2.72637C13.1465 2.64435 13.2702 2.55404 13.3717 2.50592C13.7284 2.33679 14.0733 2.44702 14.7632 2.6675C17.8775 3.66283 20.3372 6.12259 21.3326 9.23688C21.553 9.92672 21.6633 10.2716 21.4941 10.6284C21.446 10.7299 21.3557 10.8536 21.2737 10.9303C20.9853 11.2 20.5703 11.2 19.7401 11.2H14.6C13.8501 11.2 13.4751 11.2 13.2123 11.009C13.1274 10.9473 13.0527 10.8727 12.991 10.7878C12.8 10.5249 12.8 10.1499 12.8 9.4Z" fill="currentColor"></path>
									</svg>
								</figure>
			
								<!-- Content -->
								<h5 class="mb-3"><a href="#">Business analysis</a></h5>
								<p>Our Business Analysis service is the first step in understanding your organization's current state.</p>
							</div>

							<!-- Card footer -->
							<div class="card-footer mt-auto p-0 pt-2">
								<a class="icon-link icon-link-hover stretched-link z-index-2" href="#">View detail<i class="bi bi-arrow-right"></i> </a>
							</div>
						</div>
					</div>

					<!-- Service item -->
					<div class="col">
						<div class="card card-hover-shadow border h-100 p-4">
							<!-- Card body -->
							<div class="card-body p-0">
								<!-- Icon -->
								<figure class="text-primary mb-4">
									<svg width="50" height="50" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M3 5.75H5M10.5 5.75H21M3 18.25H5M10.5 18.25H21M21 12H19M13.5 12H3" stroke="currentColor" stroke-opacity="0.25" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
										<path d="M4.25 5.75C4.25 3.817 5.817 2.25 7.75 2.25V2.25C9.683 2.25 11.25 3.817 11.25 5.75V5.75C11.25 7.683 9.683 9.25 7.75 9.25V9.25C5.817 9.25 4.25 7.683 4.25 5.75V5.75Z" fill="currentColor"></path>
										<path d="M4.25 18.25C4.25 16.317 5.817 14.75 7.75 14.75V14.75C9.683 14.75 11.25 16.317 11.25 18.25V18.25C11.25 20.183 9.683 21.75 7.75 21.75V21.75C5.817 21.75 4.25 20.183 4.25 18.25V18.25Z" fill="currentColor"></path>
										<path d="M12.75 12C12.75 10.067 14.317 8.5 16.25 8.5V8.5C18.183 8.5 19.75 10.067 19.75 12V12C19.75 13.933 18.183 15.5 16.25 15.5V15.5C14.317 15.5 12.75 13.933 12.75 12V12Z" fill="currentColor"></path>
									</svg>
								</figure>
			
								<!-- Content -->
								<h5 class="mb-3"><a href="#">Strategic planning</a></h5>
							<p>We work closely with you to develop a tailored roadmap that aligns with your goals and objectives.</p>
							</div>

							<!-- Card footer -->
							<div class="card-footer mt-auto p-0 pt-2">
								<a class="icon-link icon-link-hover stretched-link z-index-2" href="#">View detail<i class="bi bi-arrow-right"></i> </a>
							</div>
						</div>
					</div>

					<!-- Service item -->
					<div class="col">
						<div class="card card-hover-shadow border h-100 p-4">
							<!-- Card body -->
							<div class="card-body p-0">
								<!-- Icon -->
								<figure class="text-primary mb-4">
									<svg width="50" height="50" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M20.2402 6.75391C21.2543 9.81065 21.2543 11.8485 20.2402 14.9052" stroke="currentColor" stroke-opacity="0.25" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
										<path d="M2.25047 12.9739C2.25055 14.0922 3.15715 14.9988 4.27547 14.9988V14.9988L4.25651 19.4911C4.25125 20.7361 5.25945 21.7481 6.50452 21.7474V21.7474C7.74497 21.7468 8.75021 20.741 8.75021 19.5006V15.1105H10V6.55981H6.46978C5.09959 6.55981 4.41449 6.55981 3.87962 6.79848C3.26038 7.07479 2.76505 7.57015 2.48879 8.18941C2.25016 8.72431 2.25021 9.4094 2.25031 10.7796L2.25047 12.9739Z" fill="currentColor"></path>
										<path d="M11.0002 15.8122C13.9211 18.3111 15.3815 19.5606 16.6274 19.37C17.1377 19.2919 17.6157 19.0718 18.0068 18.7348C18.9616 17.912 18.9616 15.99 18.9616 12.146V9.4287C18.9616 5.58267 18.9616 3.65966 18.0199 2.83775C17.6138 2.48322 17.1124 2.2559 16.5781 2.18405C15.3393 2.01748 13.893 3.28476 11.0002 5.81933V5.81933V15.8122V15.8122Z" fill="currentColor" fill-opacity="0.25"></path>
									</svg>
								</figure>
			
								<!-- Content -->
								<h5 class="mb-3"><a href="#">Marketing strategy</a></h5>
								<p>Our Marketing Strategy service is designed to elevate your brand's visibility and engagement. </p>
							</div>

							<!-- Card footer -->
							<div class="card-footer mt-auto p-0 pt-2">
								<a class="icon-link icon-link-hover stretched-link z-index-2" href="#">View detail<i class="bi bi-arrow-right"></i> </a>
							</div>
						</div>
					</div>

					<!-- Service item -->
					<div class="col">
						<div class="card card-hover-shadow border h-100 p-4">
							<!-- Card body -->
							<div class="card-body p-0">
								<!-- Icon -->
								<figure class="text-primary mb-4">
									<svg width="50" height="50" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M17.523 8.92914C17.523 9.94279 16.6746 10.7645 15.6281 10.7645C14.5816 10.7645 13.7333 9.94279 13.7333 8.92914C13.7333 7.91548 14.5816 7.09375 15.6281 7.09375C16.6746 7.09375 17.523 7.91548 17.523 8.92914Z" fill="currentColor"></path>
										<path d="M10.485 8.92914C10.485 9.94279 9.63664 10.7645 8.59015 10.7645C7.54366 10.7645 6.69531 9.94279 6.69531 8.92914C6.69531 7.91548 7.54366 7.09375 8.59015 7.09375C9.63664 7.09375 10.485 7.91548 10.485 8.92914Z" fill="currentColor"></path>
										<path d="M11.0264 15.2219C11.0264 16.2355 10.178 17.0573 9.13154 17.0573C8.08504 17.0573 7.2367 16.2355 7.2367 15.2219C7.2367 14.2082 8.08504 13.3865 9.13154 13.3865C10.178 13.3865 11.0264 14.2082 11.0264 15.2219Z" fill="currentColor"></path>
										<path d="M21.748 9.45998C21.4753 4.55256 14.4854 1.4706 9.28231 2.41642C4.07925 3.36223 1.56208 8.48915 2.41245 13.4547C3.23924 18.2826 8.68956 21.7459 12.1134 21.7459C15 21.7459 17.25 20.6058 17.25 18.9959C17.25 18.9959 17.2846 18.5254 16.98 17.9961C16.7157 17.5369 16.4642 17.3392 16.07 16.9961C15.8584 16.8119 15.5273 16.5296 15.15 15.9959C14.9079 15.6534 14.8139 15.4137 14.8 15.3435C14.7846 14.9174 15.0127 14.407 15.5 14.2561C15.6439 14.2115 15.8105 14.2221 16 14.2459C18 14.3961 22 13.9961 21.748 9.45998Z" fill="currentColor" fill-opacity="0.25"></path>
										</svg>
								</figure>
			
								<!-- Content -->
								<h5 class="mb-3"><a href="#">Experience design</a></h5>
								<p>From website design to app development, we blend aesthetics with usability to leave a lasting impression.</p>
							</div>

							<!-- Card footer -->
							<div class="card-footer mt-auto p-0 pt-2">
								<a class="icon-link icon-link-hover stretched-link z-index-2" href="#">View detail<i class="bi bi-arrow-right"></i> </a>
							</div>
						</div>
					</div>

					<!-- Service item -->
					<div class="col">
						<div class="card card-hover-shadow border h-100 p-4">
							<!-- Card body -->
							<div class="card-body p-0">
								<!-- Icon -->
								<figure class="text-primary mb-4">
									<svg width="50" height="50" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M8 18V15M12 13V18M16 18V11M6.5 11.5L7.9646 9.7913C8.91547 8.68195 10.3837 8.16067 11.8212 8.42204V8.42204C13.812 8.78401 15.8538 8.14622 17.2846 6.71542L17.5 6.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
										<path d="M13.2 2.25H10.8C7.23775 2.25 5.45663 2.25 4.20802 3.15717C3.80477 3.45015 3.45015 3.80477 3.15717 4.20802C2.25 5.45663 2.25 7.23775 2.25 10.8V13.2C2.25 16.7622 2.25 18.5434 3.15717 19.792C3.45015 20.1952 3.80477 20.5499 4.20802 20.8428C5.45663 21.75 7.23775 21.75 10.8 21.75H13.2C16.7622 21.75 18.5434 21.75 19.792 20.8428C20.1952 20.5499 20.5499 20.1952 20.8428 19.792C21.75 18.5434 21.75 16.7622 21.75 13.2V10.8C21.75 7.23775 21.75 5.45663 20.8428 4.20802C20.5499 3.80477 20.1952 3.45015 19.792 3.15717C18.5434 2.25 16.7622 2.25 13.2 2.25Z" fill="currentColor" fill-opacity="0.25"></path>
									</svg>
								</figure>
			
								<!-- Content -->
								<h5 class="mb-3"><a href="#">Business consulting</a></h5>
								<p>Our consultants become your trusted advisors on the path to success.</p>
							</div>

							<!-- Card footer -->
							<div class="card-footer mt-auto p-0 pt-2">
								<a class="icon-link icon-link-hover stretched-link z-index-2" href="#">View detail<i class="bi bi-arrow-right"></i> </a>
							</div>
						</div>
					</div>

					<!-- Service item -->
					<div class="col">
						<div class="card card-hover-shadow border h-100 p-4">
							<!-- Card body -->
							<div class="card-body p-0">
								<!-- Icon -->
								<figure class="text-primary mb-4">
									<svg width="50" height="50" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M12 21.75C17.3848 21.75 21.75 17.3848 21.75 12C21.75 6.61522 17.3848 2.25 12 2.25C6.61522 2.25 2.25 6.61522 2.25 12C2.25 17.3848 6.61522 21.75 12 21.75Z" fill="currentColor" fill-opacity="0.25"></path>
										<path d="M14.5 10V10C14.5 8.89543 13.6046 8 12.5 8H12M12 8H11.5C10.3954 8 9.5 8.89543 9.5 10V10C9.5 11.1046 10.3954 12 11.5 12H12M12 8V6.5M12 8V12M12 12H12.5C13.6046 12 14.5 12.8954 14.5 14V14C14.5 15.1046 13.6046 16 12.5 16H12M12 12V16M12 16H11.5C10.3954 16 9.5 15.1046 9.5 14V14M12 16V17.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
									</svg>
								</figure>
			
								<!-- Content -->
								<h5 class="mb-3"><a href="#">Tax consultant</a></h5>
								<p>We're here to optimize your tax strategy, so you can focus on what matters most to your business.</p>
							</div>

							<!-- Card footer -->
							<div class="card-footer mt-auto p-0 pt-2">
								<a class="icon-link icon-link-hover stretched-link z-index-2" href="#">View detail<i class="bi bi-arrow-right"></i> </a>
							</div>
						</div>
					</div>
				</div>
				<!-- Service list END -->
			</div>	
		</section>
				<!-- =======================
				Services END -->

		<!-- =======================
		Work START -->
		<section class="sectionlevel pb-0" data-bs-theme="light">
			<div class="container">
				<!-- Title -->
				<div class="inner-container text-center mb-4 mb-sm-6">
					<h2 class="mb-4">Showcasing Recent Projects</h2>
					<p class="mb-0">Discover a selection of our most recent client projects, showcasing our expertise, creativity, and commitment to delivering outstanding results.</p>
				</div>

				<div class="row g-4">
					<!-- Tabs -->
					<div class="col-md-4 col-lg-3">
						<div class="d-flex flex-column h-100">
							<h6 class="mb-sm-3">Browse by:</h6>
							<!-- Tab item START -->
							<div class="grid-menu mb-4" data-target=".filter-container">
								<ul class="nav flex-md-column gap-1 nav-pills nav-pills-primary">
									<li class="nav-item">
										<a class="nav-link active" data-filter="*">All work</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-filter=".marketing">Digital Marketing</a>          
									</li>
									<li class="nav-item">
										<a class="nav-link" data-filter=".design">Web design</a>        
									</li>
									<li class="nav-item">
											<a class="nav-link" data-filter=".business">Business development</a>        
									</li>
									<li class="nav-item">
										<a class="nav-link" data-filter=".brand">Brand design</a>        
									</li>
									<li class="nav-item">
										<a class="nav-link" data-filter=".ui">UI/UX design</a>        
									</li>
								</ul>

								<!--Tab item END  -->
							</div>
							
							<!-- Button -->
							<a href="portfolio-showcase.html" class="btn btn-light mt-auto mb-5">View all projects<i class="fa-solid fa-arrow-right-long ms-2"></i></a>
						</div>
					</div>

					<!-- Tab content START -->
					<div class="col-md-8 col-lg-9">
						<div class="row g-4 filter-container" data-isotope-collection data-isotope="{"layoutMode": "masonry"}" style="position: relative; height: 1833.76px;">
							<!-- Work item -->
							<div class="col-sm-6 col-lg-4 grid-item marketing business brand" style="position: absolute; left: 0px; top: 0px;">
								<div class="card card-element-hover card-metro-hover">
									<!-- Card Image -->              
									<img src="{{asset('image/01.jpg')}}" alt="portfolio-image">  

									<!-- Card elements -->
									<div class="card-img-overlay hover-element d-flex"> 
										<!-- Info -->
										<div class="card-text mt-auto">
											<h6 class="mb-0"><a href="portfolio-case-studies-v1.html" class="text-white stretched-link">Dynamic Workflows Website</a></h6>
											<small class="text-white">UI/UX design</small>
										</div>
									</div>						
								</div>
							</div>

							<!-- Work item -->
							<div class="col-sm-6 col-lg-4 grid-item brand ui" style="position: absolute; left: 0px; top: 371px;">
								<div class="card card-element-hover card-metro-hover">
									<!-- Card Image -->              
									<img src="{{asset('image/01.jpg')}}" alt="portfolio-image">  
										
									<!-- Card elements -->
									<div class="card-img-overlay hover-element d-flex"> 
										<!-- Info -->
										<div class="card-text mt-auto">
											<h6 class="mb-0"><a href="portfolio-case-studies-v1.html" class="text-white stretched-link">ElevateTech Redesign</a></h6>
											<small class="text-white">Brand design</small>
										</div>
									</div>
								</div>
							</div>

							<!-- Work item -->
							<div class="col-sm-6 col-lg-4 grid-item business design brand" style="position: absolute; left: 0px; top: 638px;">
								<div class="card card-element-hover card-metro-hover">
									<!-- Card Image -->              
									<img src="{{asset('image/01.jpg')}}" alt="portfolio-image">  	
									
									<!-- Card elements -->
									<div class="card-img-overlay hover-element d-flex"> 
										<!-- Info -->
										<div class="card-text mt-auto">
											<h6 class="mb-0"><a href="portfolio-case-studies-v1.html" class="text-white stretched-link">User-Centric Redesign</a></h6>
											<small class="text-white">Web design</small>
										</div>
									</div>
								</div>
							</div>

							<!-- Work item -->
							<div class="col-sm-6 col-lg-4 grid-item design marketing" style="position: absolute; left: 0px; top: 905px;">
								<div class="card card-element-hover card-metro-hover">
									<!-- Card Image -->              
									<img src="{{asset('image/01.jpg')}}" alt="portfolio-image">
									
									<!-- Card elements -->
									<div class="card-img-overlay hover-element d-flex"> 
										<!-- Info -->
										<div class="card-text mt-auto">
											<h6 class="mb-0"><a href="portfolio-case-studies-v1.html" class="text-white stretched-link">Sustainability Initiative</a></h6>
											<small class="text-white">Business dev</small>
										</div>
									</div>
								</div>
							</div>

							<!-- Work item -->
							<div class="col-sm-6 col-lg-4 grid-item business design" style="position: absolute; left: 0px; top: 1231px;">
								<div class="card card-element-hover card-metro-hover">
									<!-- Card Image -->              
									<img src="{{asset('image/01.jpg')}}" alt="portfolio-image"> 
									
									<!-- Card elements -->
									<div class="card-img-overlay hover-element d-flex"> 
										<!-- Info -->
										<div class="card-text mt-auto">
											<h6 class="mb-0"><a href="portfolio-case-studies-v1.html" class="text-white stretched-link">E-commerce Expansion</a></h6>
											<small class="text-white">Digital Marketing</small>
										</div>
									</div>
								</div>
							</div>

							<!-- Work item -->
							<div class="col-sm-6 col-lg-4 grid-item ui" style="position: absolute; left: 0px; top: 1602px;">
								<div class="card card-element-hover card-metro-hover">
									<!-- Card Image -->              
									<img src="{{asset('image/01.jpg')}}" alt="portfolio-image"> 
									
									<!-- Card elements -->
									<div class="card-img-overlay hover-element d-flex"> 
										<!-- Info -->
										<div class="card-text mt-auto">
											<h6 class="mb-0"><a href="portfolio-case-studies-v1.html" class="text-white stretched-link">Social Media Engagement</a></h6>
											<small class="text-white">UI/UX design</small>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Tab content END -->
				</div> <!-- Row END -->
			</div>	
		</section>
		<!-- =======================
		Work END -->

		<!-- =======================
		Testimonials START -->
		<section class="pt-md-0 pb-0" data-bs-theme="light">
			<div class="container">
				<div class="bg-primary position-relative rounded p-4 pt-sm-5 px-sm-5 mb-n9">
					<span class="display-4 heading-color position-absolute top-0 start-0 mt-n4 mt-md-n5 ms-4">
						<i class="bi bi-quote"></i>
					</span>
					<!-- <div class="swiper-slide" role="group" aria-label="2 / 3" data-swiper-slide-index="1" style="width: 225px;"> -->
							<div class="swiper-slide" role="group" aria-label="2 / 3" data-swiper-slide-index="1" >
								<p class="fs-5 text-white mb-0">It consistently delivers accurate and well-crafted responses, saving me a lot of time and effort. Thank you for this invaluable resource!</p>

								<hr class="border-white my-5"> <!-- Divider -->

								<!-- Avatar and logo -->
								<div class="d-sm-flex justify-content-between">
									<!-- Avatar info -->
									<div class="d-sm-flex align-items-center">
										<!-- Avatar -->
										<div class="avatar flex-shrink-0">
											<img class="avatar-img rounded-circle" src="assets/images/avatar/07.jpg" alt="avatar">
										</div>
										<!-- Info -->
										<div class="ms-sm-2 mt-2 mt-sm-0">
											<h6 class="text-white mb-0">Dennis Barrett</h6>
											<p class="mb-0 small text-white">Ceo and manager of Blogzine</p>
										</div>
									</div>

									<!-- Logo -->
									<img src="assets/images/client/04.svg" class="h-40px mt-3 mt-sm-0" alt="Client logo">
								</div>
							</div>


					
				</div>
			</div>
		</section>
		<!-- =======================
		Testimonials END -->

		<!-- =======================
		About accordion START -->
		<section class="bg-dark" data-bs-theme="dark">
			<div class="container mt-9">
				<div class="row align-items-start">
					<!-- About feature image -->
					<div class="col-md-6 col-xl-5 position-relative">

						<!-- SVG decoration -->
						<figure class="position-absolute top-0 start-0 mt-n6 ms-n5">
							<svg width="117" height="98" viewBox="0 0 117 98" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path class="fill-mode" d="M53.9804 0.725277C52.9701 1.69222 52.9701 5.07654 53.9804 11.1683C54.9906 17.1634 55.7123 18.5654 57.5885 18.5654C58.3582 18.5654 59.128 18.3237 59.3685 18.0336C59.561 17.6952 59.2723 13.9241 58.7912 9.52449C58.1177 3.52942 57.6847 1.45049 57.0112 0.773624C55.9047 -0.241669 54.9425 -0.290017 53.9804 0.725277Z"></path>
								<path class="fill-mode" d="M94.055 9.62103C87.2236 16.3413 84.8182 19.3872 85.0106 21.2244C85.1068 22.3847 85.3955 22.7715 86.3095 22.9165C87.2236 23.0616 88.3782 22.2397 91.6015 19.0004C96.9415 13.7305 101.512 8.46069 101.512 7.54209C101.512 6.62349 100.165 5.31812 99.2026 5.31812C98.7696 5.36646 96.4604 7.25201 94.055 9.62103Z"></path>
								<path class="fill-mode" d="M23.2866 15.2294C22.2763 15.8096 22.1801 17.5984 23.046 18.7104C24.1044 20.0641 34.0148 25.9625 35.2656 25.9625C35.891 25.9625 36.7088 25.6241 37.0937 25.2373C38.537 23.4001 36.4202 21.1278 29.1077 16.5348C25.9806 14.6492 24.7779 14.3108 23.2866 15.2294Z"></path>
								<path class="fill-mode" d="M103.433 40.37L97.8047 41.4337V42.8357C97.8047 43.851 98.1414 44.4312 99.0555 45.0114C100.21 45.6399 101.124 45.6399 107.09 44.8663C116.038 43.7543 116.038 43.7543 116.663 42.3523C117.096 41.337 117.048 40.9985 116.326 40.1283C115.22 38.8713 110.986 38.9196 103.433 40.37Z"></path>
								<path class="fill-mode" d="M3.94616 46.1232C0.193694 46.8485 -1.20145 49.2175 1.20397 50.7646C1.97371 51.2481 2.83967 51.4414 3.80184 51.1997C4.57157 51.0547 8.42026 50.7162 12.4133 50.5228C17.8495 50.2328 19.7739 49.9427 20.3512 49.4109C21.5058 48.2505 20.3993 46.8001 17.8495 46.1232C15.3479 45.4947 7.12133 45.4947 3.94616 46.1232Z"></path>
								<path class="fill-mode" d="M89.1454 69.9584C88.9529 70.1034 88.8086 70.7803 88.8086 71.4088C88.8086 72.7142 90.2518 73.8262 97.6125 77.9357C103.915 81.465 104.877 81.7551 106.416 80.4981C108.244 79.0477 107.234 77.5006 102.664 74.8898C95.3032 70.6352 90.3 68.7981 89.1454 69.9584Z"></path>
								<path class="fill-mode" d="M30.8398 72.8111C28.3382 74.9384 21.2181 86.9769 20.0635 91.038C19.0532 94.519 21.9397 95.9211 24.0565 93.0203C24.6819 92.1984 26.3657 89.2975 27.7609 86.6868C29.1079 84.0277 31.369 80.1115 32.6198 77.8876C34.929 74.0681 35.2177 72.8111 33.9187 71.9408C33.0047 71.3123 32.3312 71.5541 30.8398 72.8111Z"></path>
								<path class="fill-mode" d="M60.9544 80.7401C60.1365 81.707 60.0884 93.6488 60.9063 95.7277C61.243 96.4529 62.0128 97.3232 62.7825 97.6616C63.889 98.1935 64.1776 98.1451 65.0436 97.0815C65.5247 96.4529 65.8133 95.631 65.669 95.1959C65.5247 94.8091 65.2841 91.6666 65.0917 88.2823C64.9474 84.8979 64.6106 81.6103 64.4182 80.9818C63.889 79.6764 61.9165 79.5314 60.9544 80.7401Z"></path>
							</svg>
						</figure>

						<!-- Decoration -->
						<div class="card card-body position-absolute top-0 end-0 mt-5 me-xl-n5">
							<p>Our lovely customers</p>
							<div class="d-flex align-items-center">
								<ul class="avatar-group mb-0 align-items-center">
									<li class="avatar avatar-xs">
										<img class="avatar-img rounded-circle" src="{{asset('public/image/06.jpg')}}" alt="avatar">
									</li>
									<li class="avatar avatar-xs">
										<img class="avatar-img rounded-circle" src="{{asset('public/image/05.jpg')}}" alt="avatar">
									</li>
									<li class="avatar avatar-xs">
										<img class="avatar-img rounded-circle" src="{{asset('public/image/02.jpg')}}" alt="avatar">
									</li>
									<li class="avatar avatar-xs">
										<img class="avatar-img rounded-circle" src="{{asset('public/image/03.jpg')}}" alt="avatar">
									</li>
									<li class="avatar avatar-xs">
										<img class="avatar-img rounded-circle" src="{{asset('public/image/04.jpg')}}" alt="avatar">
									</li>
								</ul>
								<h6 class="text-white mb-0 ms-2">5K+</h6>
							</div>
							<hr>
							<!-- Progress bar -->
							<div class="overflow-hidden">
								<div class="d-flex justify-content-between mb-2">
									<small>Satisfaction Rate</small>
									<small>80%</small>
								</div>
								<div class="progress progress-sm bg-primary bg-opacity-10">
									<div class="progress-bar bg-primary aos aos-init" role="progressbar" data-aos="slide-right" data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out" style="width: 80%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
									</div>
								</div>
							</div>
						</div>

						<!-- Image -->
						<img src="{{asset('public/image/04.jpg')}}" class="rounded" alt="about-img">
					</div>

					<!-- About feature content -->
					<div class="col-md-6 position-relative ms-auto mt-5 mt-md-0">
						<h2 class="mb-4 mb-md-5">Exploring Essential Platform Feature</h2>
						<!-- Accordion START -->
						<div class="accordion accordion-icon accordion-icon-start accordion-bg-light" id="accordionFaq">
							<!-- Item -->
							<div class="accordion-item mb-3">
								<div class="accordion-header font-base" id="heading-1">
									<button class="accordion-button fw-semibold rounded collapsed ps-6" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
										Real-time Collaboration
									</button>
								</div>
								<!-- Body -->
								<div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="heading-1" data-bs-parent="#accordionFaq">
									<div class="accordion-body mt-3 pb-0">
										Collaborate seamlessly with team members in real time. Share drafts, make edits, and work together efficiently to create content that meets your goals. Sight House has sex never. No visit raising gravity outward subject.
									</div>
								</div>
							</div>

							<!-- Item -->
							<div class="accordion-item mb-3">
								<div class="accordion-header font-base" id="heading-2">
									<button class="accordion-button fw-semibold rounded collapsed ps-6" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
										Robust API Integration
									</button>
								</div>
								<!-- Body -->
								<div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="heading-2" data-bs-parent="#accordionFaq">
									<div class="accordion-body mt-3 pb-0">
										Our platform offers robust API integration options, allowing you to integrate our content generation capabilities into your existing software, apps, or platforms.
									</div>
								</div>
							</div>

							<!-- Item -->
							<div class="accordion-item mb-3">
								<div class="accordion-header font-base" id="heading-3">
									<button class="accordion-button fw-semibold collapsed rounded ps-6" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
										Privacy and Security
									</button>
								</div>
								<!-- Body -->
								<div id="collapse-3" class="accordion-collapse collapse" aria-labelledby="heading-3" data-bs-parent="#accordionFaq">
									<div class="accordion-body mt-3 pb-0">
										We prioritize your data's security and privacy. Our platform adheres to the highest standards of data protection to ensure your content remains confidential and secure.
									</div>
								</div>
							</div>

							<!-- Item -->
							<div class="accordion-item mb-3">
								<div class="accordion-header font-base" id="heading-4">
									<button class="accordion-button fw-semibold collapsed rounded ps-6" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
										Cost-Effective Solutions
									</button>
								</div>
								<!-- Body -->
								<div id="collapse-4" class="accordion-collapse collapse" aria-labelledby="heading-4" data-bs-parent="#accordionFaq">
									<div class="accordion-body mt-3 pb-0">
										We offer flexible pricing options to suit your needs, ensuring you get the most value from our platform without breaking the bank.Subjects he prospect elegance followed no overcame possible it on. Improved own provided blessing may peculiar domestic.
									</div>
								</div>
							</div>

							<!-- Item -->
							<div class="accordion-item mb-3">
								<div class="accordion-header font-base" id="heading-5">
									<button class="accordion-button fw-semibold collapsed rounded ps-6" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
										Data Analytics
									</button>
								</div>
								<!-- Body -->
								<div id="collapse-5" class="accordion-collapse collapse" aria-labelledby="heading-5" data-bs-parent="#accordionFaq">
									<div class="accordion-body mt-3 pb-0">
										Offices for highest and replied one venture pasture. Applauded no discovery in newspaper allowance am northward. Frequently partiality possession resolution at or appearance unaffected me..
									</div>
								</div>
							</div>
						</div>
						<!-- Accordion END -->
					</div>
				</div> <!-- Row END -->
			</div>
		</section>
		<!-- =======================
		About accordion END -->

		<!-- =======================
		Blog START -->
		<section class="pb-0" data-bs-theme="light">
			<div class="container">
				<!-- Title -->
				<div class="inner-container text-center mb-4 mb-sm-6">
					<h2 class="mb-0">Our news & articles</h2>
				</div>

				<!-- Slider START -->
				<div class="swiper swiper-initialized swiper-horizontal swiper-backface-hidden" data-swiper-options="{
						spaceBetween: 30, 
						loop: false,
						breakpoints: {
							576: {slidesPerView: 1}, 
							768: {slidesPerView: 2}, 
							992: {slidesPerView: 3}
						},
						navigation:{
							nextEl:.swiper-button-next,
							prevEl:.swiper-button-prev
						}}">

					<div class="swiper-wrapper" id="swiper-wrapper-2317b9c9a0e3b2103" aria-live="off" style="transition-duration: 300ms; transform: translate3d(-612px, 0px, 0px);">
						<!-- Slider item -->
						<div class="swiper-slide" role="group" aria-label="1 / 5" style="width: 276px; margin-right: 30px;">
							<article class="card bg-transparent">
								<!-- Image -->
								<img src="assets/images/blog/4by3/01.jpg" class="card-img" alt="blog-image">
								<div class="card-body px-0 pb-0">
									<h6 class="card-title">Mastering Responsive Web Design with Bootstrap</h6>
									<div class="d-flex justify-content-between align-items-center">
										<p class="mb-0">By Jacqueline Miller</p>
										<a class="icon-link icon-link-hover stretched-link me-1" href="blog-single-v1.html">Read more<i class="bi bi-arrow-right"></i> </a>
									</div>
								</div>
							</article>
						</div>

						<!-- Slider item -->
						<div class="swiper-slide swiper-slide-prev" role="group" aria-label="2 / 5" style="width: 276px; margin-right: 30px;">
							<article class="card bg-transparent">
								<!-- Image -->
								<img src="assets/images/blog/4by3/02.jpg" class="card-img" alt="blog-image">
								<div class="card-body px-0 pb-0">
									<h6 class="card-title">Bootstrap Mastery: Designing Stunning Websites</h6>
									<div class="d-flex justify-content-between align-items-center">
										<p class="mb-0">By Dennis Barrett</p>
										<a class="icon-link icon-link-hover stretched-link me-1" href="blog-single-v2.html">Read more<i class="bi bi-arrow-right"></i> </a>
									</div>
								</div>
							</article>
						</div>

						<!-- Slider item -->
						<div class="swiper-slide swiper-slide-active" role="group" aria-label="3 / 5" style="width: 276px; margin-right: 30px;">
							<article class="card bg-transparent">
								<!-- Image -->
								<img src="assets/images/blog/4by3/03.jpg" class="card-img" alt="blog-image">
								<div class="card-body px-0 pb-0">
									<h6 class="card-title">Interactive Web Design with Bootstrap and Webestica</h6>
									<div class="d-flex justify-content-between align-items-center">
										<p class="mb-0">By Carolyn Ortiz</p>
										<a class="icon-link icon-link-hover stretched-link me-1" href="blog-single-v1.html">Read more<i class="bi bi-arrow-right"></i> </a>
									</div>
								</div>
							</article>
						</div>

						
					</div>

					<!-- Add pagination and navigation elements here -->
					<div class="d-flex justify-content-between position-absolute top-50 start-0 w-100">
						<a href="#" class="btn btn-dark btn-icon btn-lg rounded-circle mb-0 swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-2317b9c9a0e3b2103" aria-disabled="false"><i class="bi bi-arrow-left"></i></a>
						<a href="#" class="btn btn-dark btn-icon btn-lg rounded-circle mb-0 swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-2317b9c9a0e3b2103" aria-disabled="false"><i class="bi bi-arrow-right"></i></a>
					</div>
				<span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
				<!-- Slider END -->
			</div>	
		</section>
		<!-- =======================
		Blog END -->



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
						<img src="" alt="hero-img">

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
									<img class="avatar-img rounded-circle" src="{{asset('public/image/07.jpg')}}" alt="avatar">
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

@push('scripts')
    <script>
      var slider = tns({
        "container": '.badgese',   
        
        "responsive": {
          "300": {
            "items": 3,
            "controls": false,
            "fixedWidth": 100,
            "mouseDrag": true,
            "autoplay": false,
            "autoplayButtonOutput": false,
            "autoplayHoverPause": true,
          },
          "500": {
            "items": 1,
            "nav": false,
            "controls": false,
            "autoplayHoverPause": true,
            "autoplay": false,
            "autoplayButtonOutput": false,
            "fixedWidth": 100,
          },
          
        },
        "autoplayButtonOutput":false
      });
    </script>

    <script type="text/javascript" src="assets/js/isotope.pkgd.min.js"></script>
@endpush