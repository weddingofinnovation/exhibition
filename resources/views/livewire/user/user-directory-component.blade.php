<main>


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

		[data-bs-theme=dark] .card {
			--bs-card-cap-bg: var(--bs-mode);
			--bs-card-bg: var(--bs-mode);
		}

		/* .card {
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
		} */

		.card-footer:last-child {
			border-radius: 0 0 var(--bs-card-inner-border-radius) var(--bs-card-inner-border-radius);
		}

		/* @media (min-width: 1200px)
		{.container-xl, .container-lg, .container-md, .container-sm, .container {
			max-width: 1140px;
		}} */


		@media (min-width: 1200px)
		{.col-xl-5 {
			-webkit-box-flex: 0;
			-ms-flex: 0 0 auto;
			flex: 0 0 auto;
			width: 41.66666667%;
		}}
		
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
			/* --bs-gray-900: #202124;
			--bs-heading-color: var(--bs-gray-900); */
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
   <div class="container">
    @if($this->directorydetails == 'contact-details')
      name,phone, email Designation
        <form  wire:submit.prevent="contactdetails" >
            <div class="mb-3">
                <!-- <label class="form-label" for="recover-email">Enter your email address</label> -->
                <input class="form-control" type="name"  wire:model.lazy="name" required="" placeholder="Enter your name">
                <div class="invalid-feedback">Please provide valid email address.</div>
            </div>
            <div class="mb-3">
                <!-- <label class="form-label" for="recover-email">Enter your email address</label> -->
                <input class="form-control" type="designation"  wire:model.lazy="designation" required="" placeholder="Enter your designation">
                <div class="invalid-feedback">Please provide valid email address.</div>
            </div>
            <div class="mb-3">
                <!-- <label class="form-label" for="recover-email">Enter your email address</label> -->
                <input class="form-control" type="email"  wire:model.lazy="email" required="" placeholder="Enter your email address">
                <div class="invalid-feedback">Please provide valid email address.</div>
            </div>
            <div class="mb-3">
                <!-- <label class="form-label" for="recover-email">Enter your phone</label> -->
                <input class="form-control" type="number"  wire:model.lazy="phone" required="" placeholder="Enter your phone">
                <div class="invalid-feedback">Please provide valid phone.</div>
            </div>
            <button class="btn btn-primary" type="submit">Submit</button>
        </form>
    @elseif($this->directorydetails == 'stall-details')
      hall number, stall number
        <form  wire:submit.prevent="stalldetails" >
            <div class="mb-3">
                <!-- <label class="form-label" for="recover-email">Enter your email address</label> -->
                <input class="form-control" type="text"  wire:model.lazy="hall" required="" placeholder="Enter your hall">
                <div class="invalid-feedback">Please provide valid email address.</div>
            </div>
            <div class="mb-3">
                <!-- <label class="form-label" for="recover-email">Enter your phone</label> -->
                <input class="form-control" type="text"  wire:model.lazy="stall" required="" placeholder="Enter your stall">
                <div class="invalid-feedback">Please provide valid phone.</div>
            </div>
            <button class="btn btn-primary" type="submit">Submit</button>
        </form>
    @elseif($this->directorydetails == 'product-details')  
      category, products
        <form  wire:submit.prevent="productdetails" >
            <div class="mb-3">
                <!-- <label class="form-label" for="recover-email">Enter your email address</label> -->
                <input class="form-control" type="text"  wire:model.lazy="category" required="" placeholder="Enter your category">
                <div class="invalid-feedback">Please provide valid email address.</div>
            </div>
            <div class="mb-3">
                <!-- <label class="form-label" for="recover-email">Enter your phone</label> -->
                <input class="form-control" type="text"  wire:model.lazy="product" required="" placeholder="Enter your product">
                <div class="invalid-feedback">Please provide valid phone.</div>
            </div>
            <button class="btn btn-primary" type="submit">Submit</button>
        </form>
    @elseif($this->directorydetails == 'directory-details')
       company, address, country, about
        <form  wire:submit.prevent="directorydetails" >
            <div class="mb-3">
                <!-- <label class="form-label" for="recover-email">Enter your email address</label> -->
                <input class="form-control" type="name"  wire:model.lazy="company" required="" placeholder="Enter your company">
                <div class="invalid-feedback">Please provide valid email address.</div>
            </div>
           
            <div class="mb-3">
                <!-- <label class="form-label" for="recover-email">Enter your phone</label> -->
                <input class="form-control" type="text"  wire:model.lazy="address" required="" placeholder="Enter your address">
                <div class="invalid-feedback">Please provide valid phone.</div>
            </div>
            <div class="mb-3">
                <!-- <label class="form-label" for="recover-email">Enter your phone</label> -->
                <input class="form-control" type="text"  wire:model.lazy="country" required="" placeholder="country">
                <div class="invalid-feedback">Please provide valid phone.</div>
            </div>
            <div class="mb-3">
                <!-- <label class="form-label" for="recover-email">Enter your phone</label> -->
                <input class="form-control" type="text"  wire:model.lazy="about" required="" placeholder="about your company">
                <div class="invalid-feedback">Please provide valid phone.</div>
            </div>
            <button class="btn btn-primary" type="submit">Submit</button>
        </form>
    @elseif($this->directorydetails == 'submit&thanks')
        <div class="container pb-5 mb-sm-4">
            <div class="pt-5">
            <div class="card py-3 mt-sm-3">
                <div class="card-body text-center">
                <h2 class="h4 pb-3">Thank you for your sharing!</h2>
                <p class="fs-sm mb-2">Your details has been saved and will be processed as soon as possible.</p>

                <p class="fs-sm mb-2">Your Contact: <span class="text-dark  fw-bold">{{$directory->phone}}</span></p>
                <p class="fs-sm mb-2">Your Email: <span class="text-dark  fw-bold">{{$directory->email}}</span></p>
                <p class="fs-sm">You will be receiving an email shortly with confirmation of your shared details. <u>You can now:</u>
                </p>
                <a class="btn btn-secondary mt-3 me-3" href="shop-grid-ls.html">Preview</a>
                <a class="btn btn-primary mt-3" href="order-tracking.html"><i class="ci-location"></i>
                Print</a>
                </div>
            </div>
            </div>
        </div>
                
        <div class="container">
            Thanks details has been saved and sent for print.
            You'll get detail cross-check call and email 
            suggested email:  {{$directory->email}}
            suggested phone:   {{$directory->phone}}

            Print Date: 17 Apr 2024 
            For reference, verified your posted details to be print in the directory.

        </div>
		
			<section class="sectionlevel" data-bs-theme="light">
				<div class="container">
					<div class="row g-4 align-items-xl-center">

						<!-- About image START -->
						<div class="col-lg-7">
							<div class="row pe-xl-5">
								<div class="col-sm-6">
									<!-- About image  -->
									<img src="http://127.0.0.1:8000/public/image/02.jpg" class="rounded" alt="about-img">

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
												<span class="h2 text-white">10+</span>
												<p class="mb-0 text-white">years of experience</p>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="bg-colo rounded text-center p-3">
												<span class="h2 text-white">571</span>
												<p class="mb-0 text-white">event in a year</p>
											</div>
										</div>
									</div>
									
									<!-- About image -->
									<img src="http://127.0.0.1:8000/public/image/01.jpg" class="rounded" alt="about-img-2">
								</div>
							</div> <!-- Row END -->
						</div>
						<!-- About image END -->

						<!-- About content START -->
						<div class="col-lg-5">
							
							<h2 class="my-4 texto-bg">{{$directory -> company}}</h2>
                            <span class="heading-color text-dark bg-light small rounded-3 px-3 py-2">{{$directory->address}}</span>
							<p class="mb-4">Streamline event planning with The Exhibition Navigator, offering comprehensive solutions for successful exhibitions.</p>
							<!-- List -->
							<ul class="list-group list-group-borderless mb-4">
								<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check-fill text-primary me-2"></i>Tie-ups with leading industry events for enchanced exposure and opportunities.</li>
								<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check-fill text-primary me-2"></i>Over 571 events successfully managed, ensuring industry expertise and reliability.</li>
								<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check-fill text-primary me-2"></i>The Exhibition Network handles end-to-end event management, from planning to execution, for seamless experiences.</li>
							</ul>
							<!-- Button -->
							<a href="about-v1.html" class="btn btn-dark mb-0">Discover more</a>
						</div>
						<!-- About content END -->

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
    @else($this->directorydetails == 'preview')

    @endif
   </div>
</main>