@section('page_title', ($event->eventname))
@section('page_description', ('Great Exhibtion To Exhibit '.$event->shtdesc))
@section('page_keyword',  'The Exhibition Network, Exhibition, World largest business event platform, find all upcoming events, business conferences, exhibition 2023, trade shows, global seminars, networking meets and workshops. Browse and connect with visitors attending, participating exhibitors and view profiles of speakers and organizers. Manage, sell event tickets and promote your event on exhbition.org.in')

  <main>

          <style>
              * { box-sizing: border-box; }

              body {
                font-family: sans-serif;
              }

              /* ---- button ---- */

              .button {
                display: inline-block;
                padding: 0.5em 1.0em;
                background: #EEE;
                border: none;
                border-radius: 7px;
                background-image: linear-gradient( to bottom, hsla(0, 0%, 0%, 0), hsla(0, 0%, 0%, 0.2) );
                color: #222;
                font-family: sans-serif;
                font-size: 16px;
                text-shadow: 0 1px white;
                cursor: pointer;
              }

              .button:hover {
                background-color: #8CF;
                text-shadow: 0 1px hsla(0, 0%, 100%, 0.5);
                color: #222;
              }

              .button:active,
              .button.is-checked {
                background-color: #28F;
              }

              .button.is-checked {
                color: white;
                text-shadow: 0 -1px hsla(0, 0%, 0%, 0.8);
              }

              .button:active {
                box-shadow: inset 0 1px 10px hsla(0, 0%, 0%, 0.8);
              }

              /* ---- button-group ---- */

              .button-group {
                margin-bottom: 20px;
              }

              .button-group:after {
                content: '';
                display: block;
                clear: both;
              }

              .button-group .button {
                float: left;
                border-radius: 0;
                margin-left: 0;
                margin-right: 1px;
              }

              .button-group .button:first-child { border-radius: 0.5em 0 0 0.5em; }
              .button-group .button:last-child { border-radius: 0 0.5em 0.5em 0; }

              /* ---- isotope ---- */

              .grid {
                border: 1px solid #333;
              }

              /* clear fix */
              .grid:after {
                content: '';
                display: block;
                clear: both;
              }

              /* ---- .element-item ---- */

              .element-item {
                position: relative;
                float: left;
                width: 100px;
                height: 100px;
                margin: 5px;
                padding: 10px;
                background: #fff;
                color: #262524;
              }

              .element-item > * {
                margin: 0;
                padding: 0;
              }

              .element-item .name {
                position: absolute;

                left: 10px;
                top: 60px;
                text-transform: none;
                letter-spacing: 0;
                font-size: 12px;
                font-weight: normal;
              }

              .element-item .symbol {
                position: absolute;
                left: 10px;
                top: 0px;
                font-size: 12px;
                font-weight: bold;
                color: white;
              }

              .element-item .number {
                position: absolute;
                right: 8px;
                top: 5px;
              }

              .element-item .weight {
                position: absolute;
                left: 10px;
                top: 76px;
                font-size: 12px;
              }

              .element-item .symbol {
                position: absolute;
                left: 10px;
                top: 0px;
                font-size: 42px;
                font-weight: bold;
                color: white;
              }

              .element-item.alkali          { background: #F00; background: hsl(   0, 100%, 50%); }
              .element-item.alkaline-earth  { background: #F80; background: hsl(  36, 100%, 50%); }
              .element-item.lanthanoid      { background: #FF0; background: hsl(  72, 100%, 50%); }
              .element-item.actinoid        { background: #0F0; background: hsl( 108, 100%, 50%); }
              .element-item.transition      { background: #0F8; background: hsl( 144, 100%, 50%); }
              .element-item.post-transition { background: #0FF; background: hsl( 180, 100%, 50%); }
              .element-item.metalloid       { background: #08F; background: hsl( 216, 100%, 50%); }
              .element-item.diatomic        { background: #00F; background: hsl( 252, 100%, 50%); }
              .element-item.halogen         { background: #F0F; background: hsl( 288, 100%, 50%); }
              .element-item.noble-gas       { background: #F08; background: hsl( 324, 100%, 50%); }

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

                  h6, .h6, h5, .h5, h4, .h4, h3, .h3, h2, .h2, h1, .h1 {
                  margin-top: 0;
                  margin-bottom: 0.5rem;
                  font-family: "Instrument Sans", sans-serif;
                  font-weight: 700;
                  line-height: 1.25;
                  color: var(--bs-heading-color);
                  }

                  h1, .h1 {
                      font-size: 3.6rem;
                  }

                  @media (min-width: 1200px)
                  {h2, .h2 {
                    font-size: 2.75rem;
                  }}

                  @media (min-width: 1200px)
                  {h5, .h5 {
                    font-size: 1.5rem;
                  }}

                  /* h1, .h1 {
                  font-size: calc(1.375rem + 1.5vw);
                  } */

                  .fixed-buttons {
                    position: fixed;
                    bottom: 0;
                    left: 0;
                    width: 100%;
                    display: flex;
                    justify-content: center;
                    gap: 10px;
                    padding: 10px;
                    background: 1px solid #ddd;
                  }

                 
          </style>

          <style>
                      @keyframes _slideToRight_1rxdz_1 {
                      0% {
                          transform: translate(0)
                      }

                      to {
                          transform: translate(calc(-100% - var(--gap)))
                      }
                  }

                  @keyframes _slideToLeft_1rxdz_1 {
                      0% {
                          transform: translate(calc(-100% - var(--gap)))
                      }

                      to {
                          transform: translate(0)
                      }
                  }

                  ._Header_1rxdz_92 {
                      overflow: hidden;
                      position: relative;
                      font-family: Plus Jakarta Sans;
                      height: 100vh;
                      height: 100dvh
                  }

                  ._Header_1rxdz_92 * {
                      margin: 0;
                      padding: 0;
                      box-sizing: border-box
                  }

                  ._Header_1rxdz_92 ._VideoWrapper_1rxdz_104 {
                      position: absolute;
                      top: 0;
                      left: 0;
                      width: 100%;
                      height: 100%;
                      overflow: hidden
                  }

                  ._Header_1rxdz_92 ._VideoWrapper_1rxdz_104 video {
                      object-fit: cover;
                      height: 100%;
                      width: 100%
                  }

                  ._Header_1rxdz_92 ._Container_1rxdz_117 {
                      position: relative;
                      z-index: 2;
                      display: flex;
                      height: 100%;
                      align-items: flex-end;
                      background: linear-gradient(0deg,#000 24.34%,rgba(0,0,0,0) 91.66%)
                  }

                  ._Header_1rxdz_92 ._Container_1rxdz_117 ._ContentWrapper_1rxdz_125 {
                      padding: 0 20px 90px;
                      margin-inline:auto}

                  ._Header_1rxdz_92 ._Container_1rxdz_117 ._ContentWrapper_1rxdz_125 ._Content_1rxdz_125 {
                      display: flex;
                      flex-direction: column;
                      align-items: center
                  }

                  ._Header_1rxdz_92 ._Container_1rxdz_117 ._ContentWrapper_1rxdz_125 ._Content_1rxdz_125 ._OrangeCircle_1rxdz_134 {
                      visibility: hidden;
                      cursor: pointer;
                      display: flex;
                      width: 98px;
                      height: 98px;
                      padding: 10px 24px;
                      justify-content: center;
                      align-items: center;
                      border-radius: 150px;
                      background: #ff5000;
                      box-shadow: 0 4px 6px #00000040;
                      color: #fff;
                      text-align: center;
                      font-size: 16px;
                      font-style: normal;
                      font-weight: 700;
                      line-height: normal;
                      text-transform: uppercase;
                      align-self: flex-end;
                      margin-right: 0;
                      margin-bottom: 3px
                  }

                  ._Header_1rxdz_92 ._Container_1rxdz_117 ._ContentWrapper_1rxdz_125 ._Content_1rxdz_125 ._OrangeCircle_1rxdz_134:hover {
                      background: #e84a01
                  }

                  ._Header_1rxdz_92 ._Container_1rxdz_117 ._ContentWrapper_1rxdz_125 ._Content_1rxdz_125 ._OrangeCircle_1rxdz_134._es_1rxdz_162,._Header_1rxdz_92 ._Container_1rxdz_117 ._ContentWrapper_1rxdz_125 ._Content_1rxdz_125 ._OrangeCircle_1rxdz_134._pt_1rxdz_162 {
                      width: 115px;
                      height: 115px;
                      font-size: 12px
                  }

                  ._Header_1rxdz_92 ._Container_1rxdz_117 ._ContentWrapper_1rxdz_125 ._Content_1rxdz_125 ._AboveHeadingText_1rxdz_167 {
                      color: #fff;
                      font-size: 25px;
                      font-style: normal;
                      font-weight: 300;
                      line-height: 30px;
                      text-transform: uppercase;
                      text-align: center
                  }

                  ._Header_1rxdz_92 ._Container_1rxdz_117 ._ContentWrapper_1rxdz_125 ._Content_1rxdz_125 ._Heading_1rxdz_176 {
                      color: #fff;
                      font-size: 75px;
                      font-style: normal;
                      font-weight: 700;
                      line-height: 70px;
                      text-transform: uppercase;
                      margin-top: 6px;
                      text-align: center
                  }

                  ._Header_1rxdz_92 ._Container_1rxdz_117 ._ContentWrapper_1rxdz_125 ._Content_1rxdz_125 ._Heading_1rxdz_176._es_1rxdz_162,._Header_1rxdz_92 ._Container_1rxdz_117 ._ContentWrapper_1rxdz_125 ._Content_1rxdz_125 ._Heading_1rxdz_176._pt_1rxdz_162 {
                      font-size: 54px
                  }

                  ._Header_1rxdz_92 ._Container_1rxdz_117 ._ContentWrapper_1rxdz_125 ._Content_1rxdz_125 ._BelowHeadingContent_1rxdz_192 {
                      display: flex;
                      flex-direction: column
                  }

                  ._Header_1rxdz_92 ._Container_1rxdz_117 ._ContentWrapper_1rxdz_125 ._Content_1rxdz_125 ._BelowHeadingContent_1rxdz_192 ._Message_1rxdz_196 {
                      color: #fff;
                      font-size: 16px;
                      font-style: normal;
                      font-weight: 200;
                      line-height: normal;
                      letter-spacing: .32px;
                      max-width: 350px;
                      margin-top: 12px;
                      text-align: center
                  }

                  ._Header_1rxdz_92 ._Container_1rxdz_117 ._ContentWrapper_1rxdz_125 ._Content_1rxdz_125 ._BelowHeadingContent_1rxdz_192 ._BelowHeadingText_1rxdz_207 {
                      color: #fff;
                      font-size: 25px;
                      font-style: normal;
                      font-weight: 300;
                      line-height: normal;
                      text-transform: uppercase;
                      margin-top: 2px;
                      text-align: center
                  }

                  ._Header_1rxdz_92 ._Container_1rxdz_117 ._ContentWrapper_1rxdz_125 ._Content_1rxdz_125 ._GetYourPassButton_1rxdz_217 {
                      display: flex;
                      justify-content: center;
                      align-items: center;
                      margin-top: 26px;
                      font-family: Plus Jakarta Sans;
                      color: #fff;
                      font-size: 17px;
                      font-style: normal;
                      font-weight: 700;
                      line-height: normal;
                      text-transform: uppercase;
                      width: 350px;
                      height: 41px;
                      background-color: transparent;
                      border-radius: 5px;
                      border: 1px solid #fff
                  }

                  ._Header_1rxdz_92 ._Marquee_1rxdz_235 {
                      --gap: 20px;
                      height: 50px;
                      width: 100%;
                      border-top: 1px solid #404040;
                      background: #ff5000;
                      position: absolute;
                      display: flex;
                      overflow: hidden;
                      -webkit-user-select: none;
                      user-select: none;
                      gap: var(--gap);
                      bottom: 0;
                      z-index: 100
                  }

                  ._Header_1rxdz_92 ._MarqueeContentWrapper_1rxdz_249 {
                      flex-shrink: 0;
                      display: flex;
                      justify-content: space-around;
                      gap: var(--gap);
                      min-width: 100%
                  }

                  ._Header_1rxdz_92 ._MarqueeContentWrapper_1rxdz_249._forward_1rxdz_256 {
                      animation: 43s _slideToRight_1rxdz_1 infinite linear
                  }

                  ._Header_1rxdz_92 ._MarqueeContentWrapper_1rxdz_249._backward_1rxdz_259 {
                      animation: 43s _slideToLeft_1rxdz_1 infinite linear
                  }

                  ._Header_1rxdz_92 ._MarqueeContentWrapper_1rxdz_249 ._MarqueeContent_1rxdz_249 {
                      display: flex;
                      justify-content: center;
                      align-items: center;
                      gap: 20px
                  }

                  ._Header_1rxdz_92 ._MarqueeContentWrapper_1rxdz_249 ._MarqueeContent_1rxdz_249 ._TextLocation_1rxdz_268 {
                      color: #fff;
                      font-size: 18px;
                      font-style: normal;
                      font-weight: 700;
                      line-height: normal;
                      letter-spacing: .36px
                  }

                  ._Header_1rxdz_92 ._MarqueeContentWrapper_1rxdz_249 ._MarqueeContent_1rxdz_249 ._TextDate_1rxdz_276 {
                      color: #fff;
                      font-size: 18px;
                      font-style: normal;
                      font-weight: 600;
                      line-height: 32px
                  }

                  @media (min-width: 1024px) {
                      ._Header_1rxdz_92 {
                          display:flex;
                          height: 100vh
                      }

                      ._Header_1rxdz_92 ._Container_1rxdz_117 {
                          align-self: flex-end;
                          padding: 0px 4.861vw;
                          background: rgba(0,0,0,.6)
                      }

                      ._Header_1rxdz_92 ._Container_1rxdz_117 ._ContentWrapper_1rxdz_125 {
                          padding: 0;
                          margin-inline:unset}

                      ._Header_1rxdz_92 ._Container_1rxdz_117 ._ContentWrapper_1rxdz_125 ._Content_1rxdz_125 {
                          align-items: start
                      }

                      ._Header_1rxdz_92 ._Container_1rxdz_117 ._ContentWrapper_1rxdz_125 ._Content_1rxdz_125 ._AboveHeadingText_1rxdz_167 {
                          font-size: 2.8vw;
                          margin-bottom: .833vw;
                          font-weight: 500
                      }

                      ._Header_1rxdz_92 ._Container_1rxdz_117 ._ContentWrapper_1rxdz_125 ._Content_1rxdz_125 ._AboveHeadingText_1rxdz_167._es_1rxdz_162 {
                          margin-bottom: 3.633vw
                      }

                      ._Header_1rxdz_92 ._Container_1rxdz_117 ._ContentWrapper_1rxdz_125 ._Content_1rxdz_125 ._AboveHeadingText_1rxdz_167._pt_1rxdz_162 {
                          margin-bottom: .5vw
                      }

                      ._Header_1rxdz_92 ._Container_1rxdz_117 ._ContentWrapper_1rxdz_125 ._Content_1rxdz_125 ._Heading_1rxdz_176 {
                          font-size: 7.987vw;
                          margin-top: 0;
                          line-height: 7.7vw;
                          font-weight: 600;
                          text-wrap: nowrap;
                          white-space: nowrap
                      }

                      ._Header_1rxdz_92 ._Container_1rxdz_117 ._ContentWrapper_1rxdz_125 ._Content_1rxdz_125 ._Heading_1rxdz_176._es_1rxdz_162 {
                          font-size: 10.347vw
                      }

                      ._Header_1rxdz_92 ._Container_1rxdz_117 ._ContentWrapper_1rxdz_125 ._Content_1rxdz_125 ._Heading_1rxdz_176._pt_1rxdz_162 {
                          font-size: 5.625vw
                      }

                      ._Header_1rxdz_92 ._Container_1rxdz_117 ._ContentWrapper_1rxdz_125 ._Content_1rxdz_125 ._OrangeCircle_1rxdz_134 {
                          order: -1;
                          margin-right: 5.5vw;
                          margin-bottom: -.9vw;
                          width: 9.028vw;
                          height: 9.028vw;
                          font-size: 1.25vw;
                          font-style: normal;
                          font-weight: 700;
                          line-height: normal
                      }

                      ._Header_1rxdz_92 ._Container_1rxdz_117 ._ContentWrapper_1rxdz_125 ._Content_1rxdz_125 ._OrangeCircle_1rxdz_134._es_1rxdz_162,._Header_1rxdz_92 ._Container_1rxdz_117 ._ContentWrapper_1rxdz_125 ._Content_1rxdz_125 ._OrangeCircle_1rxdz_134._pt_1rxdz_162 {
                          width: 10vw;
                          height: 10vw;
                          font-size: 1vw
                      }

                      ._Header_1rxdz_92 ._Container_1rxdz_117 ._ContentWrapper_1rxdz_125 ._Content_1rxdz_125 ._BelowHeadingContent_1rxdz_192 {
                          flex-direction: row-reverse;
                          justify-content: space-between;
                          align-items: start;
                          max-width: 90.5vw;
                          margin-bottom: 7.7vw
                      }

                      ._Header_1rxdz_92 ._Container_1rxdz_117 ._ContentWrapper_1rxdz_125 ._Content_1rxdz_125 ._BelowHeadingContent_1rxdz_192 ._Message_1rxdz_196 {
                          margin-top: 0;
                          font-size: 1.68vw;
                          max-width: 53%;
                          padding-top: 10px;
                          text-align: start
                      }

                      ._Header_1rxdz_92 ._Container_1rxdz_117 ._ContentWrapper_1rxdz_125 ._Content_1rxdz_125 ._BelowHeadingContent_1rxdz_192 ._Message_1rxdz_196._es_1rxdz_162 {
                          padding-top: max(10px,1.667vw);
                          max-width: 60%
                      }

                      ._Header_1rxdz_92 ._Container_1rxdz_117 ._ContentWrapper_1rxdz_125 ._Content_1rxdz_125 ._BelowHeadingContent_1rxdz_192 ._Message_1rxdz_196._pt_1rxdz_162 {
                          padding-top: 0
                      }

                      ._Header_1rxdz_92 ._Container_1rxdz_117 ._ContentWrapper_1rxdz_125 ._Content_1rxdz_125 ._BelowHeadingContent_1rxdz_192 ._BelowHeadingText_1rxdz_207 {
                          margin-top: 0;
                          font-size: 2.8vw;
                          line-height: 3.8vw;
                          font-weight: 500;
                          margin-right: .208vw
                      }

                      ._Header_1rxdz_92 ._Container_1rxdz_117 ._ContentWrapper_1rxdz_125 ._Content_1rxdz_125 ._BelowHeadingContent_1rxdz_192 ._BelowHeadingText_1rxdz_207._es_1rxdz_162 {
                          padding-top: max(10px,1.667vw)
                      }

                      ._Header_1rxdz_92 ._Container_1rxdz_117 ._ContentWrapper_1rxdz_125 ._Content_1rxdz_125 ._BelowHeadingContent_1rxdz_192 ._BelowHeadingText_1rxdz_207._pt_1rxdz_162 {
                          line-height: 2.222vw;
                          padding-top: 0
                      }

                      ._Header_1rxdz_92 ._Container_1rxdz_117 ._ContentWrapper_1rxdz_125 ._Content_1rxdz_125 ._GetYourPassButton_1rxdz_217 {
                          display: none
                      }

                      ._Header_1rxdz_92 ._Marquee_1rxdz_235 {
                          --gap: 2.083vw;
                          gap: var(--gap);
                          height: 3.472vw
                      }

                      ._Header_1rxdz_92 ._MarqueeContentWrapper_1rxdz_249 {
                          gap: var(--gap)
                      }

                      ._Header_1rxdz_92 ._MarqueeContentWrapper_1rxdz_249._forward_1rxdz_256 {
                          animation: 70s _slideToRight_1rxdz_1 infinite linear
                      }

                      ._Header_1rxdz_92 ._MarqueeContentWrapper_1rxdz_249._backward_1rxdz_259 {
                          animation: 70s _slideToLeft_1rxdz_1 infinite linear
                      }

                      ._Header_1rxdz_92 ._MarqueeContentWrapper_1rxdz_249 ._MarqueeContent_1rxdz_249 {
                          gap: var(--gap)
                      }

                      ._Header_1rxdz_92 ._MarqueeContentWrapper_1rxdz_249 ._MarqueeContent_1rxdz_249 ._TextLocation_1rxdz_268 {
                          font-size: 1.528vw;
                          font-style: normal;
                          font-weight: 700;
                          line-height: normal;
                          letter-spacing: .031vw
                      }

                      ._Header_1rxdz_92 ._MarqueeContentWrapper_1rxdz_249 ._MarqueeContent_1rxdz_249 ._TextLocation_1rxdz_268:hover {
                          border-bottom: max(1px,.069vw) solid #fff;
                          cursor: pointer
                      }

                      ._Header_1rxdz_92 ._MarqueeContentWrapper_1rxdz_249 ._MarqueeContent_1rxdz_249 ._TextDate_1rxdz_276 {
                          font-size: 1.528vw;
                          font-style: normal;
                          font-weight: 600
                      }
                  }

                  ._NumericInfoCard_zazef_76 {
                      font-family: Plus Jakarta Sans;
                      display: flex
                  }

                  ._NumericInfoCard_zazef_76 * {
                      margin: 0;
                      padding: 0;
                      box-sizing: border-box
                  }

                  ._NumericInfoCard_zazef_76 ._ContentWrapper_zazef_85 {
                      display: flex;
                      flex-direction: column;
                      gap: 15px;
                      justify-content: center;
                      min-height: 126px;
                      padding-left: 20px
                  }

                  ._NumericInfoCard_zazef_76 ._ContentWrapper_zazef_85._es_zazef_93,._NumericInfoCard_zazef_76 ._ContentWrapper_zazef_85._pt_zazef_96 {
                      gap: 6px
                  }

                  ._NumericInfoCard_zazef_76 ._ContentWrapper_zazef_85 ._TopText_zazef_99 {
                      color: #fff;
                      font-size: 14px;
                      font-style: normal;
                      font-weight: 300;
                      line-height: 32px;
                      text-transform: uppercase
                  }

                  ._NumericInfoCard_zazef_76 ._ContentWrapper_zazef_85 ._NumberText_zazef_107 {
                      color: #fff;
                      font-size: 35px;
                      font-style: normal;
                      font-weight: 700;
                      line-height: 16px;
                      letter-spacing: .7px;
                      text-transform: uppercase
                  }

                  ._NumericInfoCard_zazef_76 ._ContentWrapper_zazef_85 ._NumberText_zazef_107 ._NumberTextSuffix_zazef_116._pt_zazef_96 {
                      font-size: 20px
                  }

                  ._NumericInfoCard_zazef_76 ._ContentWrapper_zazef_85 ._BottomText_zazef_119 {
                      color: #fff;
                      font-size: 14px;
                      font-style: normal;
                      font-weight: 300;
                      line-height: 32px;
                      text-transform: uppercase
                  }

                  ._NumericInfoCard_zazef_76 ._ContentWrapper_zazef_85 ._BottomText_zazef_119._pt_zazef_96 {
                      line-height: 20px
                  }

                  @media (min-width: 1024px) {
                      ._NumericInfoCard_zazef_76 ._ContentWrapper_zazef_85 {
                          padding-left:0;
                          padding-top: .833vw;
                          min-height: 10.694vw
                      }

                      ._NumericInfoCard_zazef_76 ._ContentWrapper_zazef_85._es_zazef_93,._NumericInfoCard_zazef_76 ._ContentWrapper_zazef_85._pt_zazef_96 {
                          padding-top: 2vw;
                          padding-bottom: 2.5vw
                      }

                      ._NumericInfoCard_zazef_76 ._ContentWrapper_zazef_85 ._TopText_zazef_99 {
                          line-height: 2.3vw;
                          font-size: 1.528vw;
                          margin-bottom: 1vw
                      }

                      ._NumericInfoCard_zazef_76 ._ContentWrapper_zazef_85 ._NumberText_zazef_107 {
                          font-size: 4.86vw
                      }

                      ._NumericInfoCard_zazef_76 ._ContentWrapper_zazef_85 ._NumberText_zazef_107 ._NumberTextSuffix_zazef_116._pt_zazef_96 {
                          font-size: 2.778vw
                      }

                      ._NumericInfoCard_zazef_76 ._ContentWrapper_zazef_85 ._BottomText_zazef_119 {
                          margin-top: 1vw;
                          line-height: 2.3vw;
                          font-size: 1.528vw
                      }

                      ._NumericInfoCard_zazef_76 ._ContentWrapper_zazef_85 ._BottomText_zazef_119._es_zazef_93,._NumericInfoCard_zazef_76 ._ContentWrapper_zazef_85 ._BottomText_zazef_119._pt_zazef_96 {
                          margin-top: 1.2vw
                      }
                  }

                  ._Section_1f398_76 {
                      background: rgba(0,0,0,.8)
                  }

                  ._Section_1f398_76 ._Content_1f398_79 ._SwiperWrapper_1f398_79 {
                      display: flex;
                      width: 100%;
                      background: #0b0908
                  }

                  ._Section_1f398_76 ._Content_1f398_79 ._SwiperWrapper_1f398_79 ._Swiper_1f398_79 {
                      width: 100%!important
                  }

                  ._Section_1f398_76 ._Content_1f398_79 ._SwiperWrapper_1f398_79 ._Swiper_1f398_79 ._SwiperSlide_1f398_87 {
                      width: 50%!important;
                      max-width: 140px!important
                  }

                  @media (min-width: 1024px) {
                      ._Section_1f398_76 ._Content_1f398_79 ._SwiperWrapper_1f398_79 ._Swiper_1f398_79 {
                          padding-inline:2.778vw
                      }

                      ._Section_1f398_76 ._Content_1f398_79 ._SwiperWrapper_1f398_79 ._Swiper_1f398_79 ._SwiperSlide_1f398_87 {
                          width: unset!important;
                          max-width: unset!important
                      }
                  }

                  ._PhotoSection_1p2ep_76 {
                      background: #eaeaea;
                      padding: 50px 20px;
                      display: flex;
                      flex-direction: column
                  }

                  ._PhotoSection_1p2ep_76 * {
                      margin: 0;
                      padding: 0;
                      box-sizing: border-box
                  }

                  ._PhotoSection_1p2ep_76 ._ContentWrapper_1p2ep_87 {
                      display: flex;
                      flex-direction: column
                  }

                  ._PhotoSection_1p2ep_76 ._ContentWrapper_1p2ep_87 ._Heading_1p2ep_91 {
                      color: #000;
                      font-size: 36px;
                      font-style: normal;
                      font-weight: 500;
                      line-height: normal;
                      letter-spacing: .18px
                  }

                  ._PhotoSection_1p2ep_76 ._ContentWrapper_1p2ep_87 ._Heading_1p2ep_91._pt_1p2ep_99 {
                      font-size: 32px
                  }

                  ._PhotoSection_1p2ep_76 ._ContentWrapper_1p2ep_87 ._Message_1p2ep_102 {
                      color: #000;
                      font-size: 16px;
                      font-style: normal;
                      font-weight: 300;
                      line-height: 25px;
                      letter-spacing: .08px;
                      margin-top: 20px
                  }

                  ._PhotoSection_1p2ep_76 ._ContentWrapper_1p2ep_87 ._Button_1p2ep_111 {
                      padding: 9px 0 16px;
                      display: flex;
                      width: 274px;
                      height: 39px;
                      border-radius: 10px;
                      align-items: center;
                      border: none;
                      margin-top: 20px;
                      color: #000;
                      font-size: 14px;
                      font-style: normal;
                      font-weight: 700;
                      line-height: 100%;
                      letter-spacing: .56px;
                      text-transform: uppercase;
                      background-color: transparent
                  }

                  ._PhotoSection_1p2ep_76 ._ImagesWrapper_1p2ep_129 {
                      display: flex;
                      flex-direction: column
                  }

                  ._PhotoSection_1p2ep_76 ._ImagesWrapper_1p2ep_129 ._Image_1p2ep_129 {
                      height: 210px;
                      border-radius: 10px
                  }

                  ._PhotoSection_1p2ep_76 ._ImagesWrapper_1p2ep_129 ._Image_1p2ep_129._Image1_1p2ep_137 {
                      margin-top: 20px
                  }

                  ._PhotoSection_1p2ep_76 ._ImagesWrapper_1p2ep_129 ._Image_1p2ep_129._Image1_1p2ep_137 img {
                      height: 210px;
                      width: 100%;
                      border-radius: 10px;
                      object-fit: cover
                  }

                  ._PhotoSection_1p2ep_76 ._ImagesWrapper_1p2ep_129 ._Image_1p2ep_129._Image2_1p2ep_146 {
                      margin-top: 11px
                  }

                  ._PhotoSection_1p2ep_76 ._ImagesWrapper_1p2ep_129 ._Image_1p2ep_129._Image2_1p2ep_146 img {
                      height: 210px;
                      width: 100%;
                      border-radius: 10px;
                      object-fit: cover
                  }

                  @media (min-width: 1024px) {
                      ._PhotoSection_1p2ep_76 {
                          padding:70px 0 60px;
                          flex-direction: row-reverse
                      }

                      ._PhotoSection_1p2ep_76 ._ContentWrapper_1p2ep_87 {
                          padding: 18px 70px 0 64px
                      }

                      ._PhotoSection_1p2ep_76 ._ContentWrapper_1p2ep_87 ._Heading_1p2ep_91 {
                          color: #000;
                          font-size: 3.34vw;
                          font-style: normal;
                          font-weight: 500;
                          line-height: normal;
                          letter-spacing: .24px
                      }

                      ._PhotoSection_1p2ep_76 ._ContentWrapper_1p2ep_87 ._Heading_1p2ep_91._es_1p2ep_172 {
                          font-size: 4.167vw
                      }

                      ._PhotoSection_1p2ep_76 ._ContentWrapper_1p2ep_87 ._Heading_1p2ep_91._pt_1p2ep_99 {
                          font-size: 2.708vw
                      }

                      ._PhotoSection_1p2ep_76 ._ContentWrapper_1p2ep_87 ._Message_1p2ep_102 {
                          font-size: 1.1115vw;
                          line-height: 1.944vw;
                          margin-top: 1.944vw
                      }

                      ._PhotoSection_1p2ep_76 ._ContentWrapper_1p2ep_87 ._Button_1p2ep_111 {
                          padding: .625vw 0px 1.111vw;
                          width: 19.028vw;
                          height: 2.708vw;
                          border-radius: .694vw;
                          margin-top: 1.389vw;
                          font-size: .972vw;
                          letter-spacing: .039vw
                      }

                      ._PhotoSection_1p2ep_76 ._ContentWrapper_1p2ep_87 ._Button_1p2ep_111:hover {
                          text-decoration: underline
                      }

                      ._PhotoSection_1p2ep_76 ._ImagesWrapper_1p2ep_129 {
                          flex-direction: row-reverse;
                          justify-content: start;
                          margin-right: auto;
                          gap: 30px
                      }

                      ._PhotoSection_1p2ep_76 ._ImagesWrapper_1p2ep_129 ._Image_1p2ep_129 {
                          border-radius: .694vw;
                          margin: 0
                      }

                      ._PhotoSection_1p2ep_76 ._ImagesWrapper_1p2ep_129 ._Image_1p2ep_129._Image1_1p2ep_137 {
                          margin: 0;
                          height: 32.3vw;
                          width: 33.7vw
                      }

                      ._PhotoSection_1p2ep_76 ._ImagesWrapper_1p2ep_129 ._Image_1p2ep_129._Image1_1p2ep_137 img {
                          height: 100%;
                          width: 100%;
                          object-fit: cover
                      }

                      ._PhotoSection_1p2ep_76 ._ImagesWrapper_1p2ep_129 ._Image_1p2ep_129._Image2_1p2ep_146 {
                          margin: 0;
                          height: 32.3vw;
                          width: 18.8vw
                      }

                      ._PhotoSection_1p2ep_76 ._ImagesWrapper_1p2ep_129 ._Image_1p2ep_129._Image2_1p2ep_146 img {
                          height: 100%;
                          width: 100%;
                          object-fit: cover
                      }
                  }

                  @media (min-width: 1440px) {
                      ._PhotoSection_1p2ep_76 ._ContentWrapper_1p2ep_87 ._Message_1p2ep_102 {
                          max-width:95%
                      }

                      ._PhotoSection_1p2ep_76 ._ContentWrapper_1p2ep_87 ._Button_1p2ep_111 {
                          margin-top: 2.083vw
                      }
                  }

                  ._LimitlessPossibilitiesSection_179b5_76 {
                      padding: 50px 0 50px 20px;
                      border-top: .5px solid rgba(0,0,0,.5);
                      background: #eaeaea
                  }

                  ._LimitlessPossibilitiesSection_179b5_76 * {
                      margin: 0;
                      padding: 0;
                      box-sizing: border-box
                  }

                  ._LimitlessPossibilitiesSection_179b5_76 ._Heading_179b5_86 {
                      color: #000;
                      font-size: 26px;
                      font-style: normal;
                      font-weight: 600;
                      line-height: 40px;
                      letter-spacing: 1.3px;
                      text-transform: uppercase
                  }

                  ._LimitlessPossibilitiesSection_179b5_76 ._Heading_179b5_86._es_179b5_95 {
                      font-size: 24px
                  }

                  ._LimitlessPossibilitiesSection_179b5_76 ._Heading_179b5_86._pt_179b5_98 {
                      font-size: 20px
                  }

                  ._LimitlessPossibilitiesSection_179b5_76 ._SwiperWrapper_179b5_101 {
                      overflow: hidden
                  }

                  ._LimitlessPossibilitiesSection_179b5_76 ._SwiperWrapper_179b5_101 ._Swiper_179b5_101 ._SwiperSlide_179b5_104 ._Card_179b5_104 {
                      padding: 32px 20px 0 26px;
                      margin-top: 30px;
                      border-radius: 10px;
                      background: linear-gradient(180deg,#000 15.03%,#38938f 98.37%);
                      min-height: 587px;
                      width: 297px
                  }

                  ._LimitlessPossibilitiesSection_179b5_76 ._SwiperWrapper_179b5_101 ._Swiper_179b5_101 ._SwiperSlide_179b5_104 ._Card_179b5_104._es_179b5_95,._LimitlessPossibilitiesSection_179b5_76 ._SwiperWrapper_179b5_101 ._Swiper_179b5_101 ._SwiperSlide_179b5_104 ._Card_179b5_104._pt_179b5_98 {
                      min-height: 600px
                  }

                  ._LimitlessPossibilitiesSection_179b5_76 ._SwiperWrapper_179b5_101 ._Swiper_179b5_101 ._SwiperSlide_179b5_104 ._Card_179b5_104 ._CardHeader_179b5_118 ._Title_179b5_118 {
                      color: #fff;
                      font-size: 18px;
                      font-style: normal;
                      font-weight: 500;
                      line-height: normal;
                      letter-spacing: .9px
                  }

                  ._LimitlessPossibilitiesSection_179b5_76 ._SwiperWrapper_179b5_101 ._Swiper_179b5_101 ._SwiperSlide_179b5_104 ._Card_179b5_104 ._CardHeader_179b5_118 ._CardHeading_179b5_126 {
                      color: #51c2bd;
                      font-size: 30px;
                      font-style: normal;
                      font-weight: 500;
                      line-height: normal;
                      letter-spacing: 1.5px;
                      margin-top: 2px
                  }

                  ._LimitlessPossibilitiesSection_179b5_76 ._SwiperWrapper_179b5_101 ._Swiper_179b5_101 ._SwiperSlide_179b5_104 ._Card_179b5_104 ._CardHeader_179b5_118 ._CardHeading_179b5_126._es_179b5_95 {
                      font-size: 24px
                  }

                  ._LimitlessPossibilitiesSection_179b5_76 ._SwiperWrapper_179b5_101 ._Swiper_179b5_101 ._SwiperSlide_179b5_104 ._Card_179b5_104 ._CardHeader_179b5_118 ._CardHeading_179b5_126._pt_179b5_98 {
                      font-size: 19px
                  }

                  ._LimitlessPossibilitiesSection_179b5_76 ._SwiperWrapper_179b5_101 ._Swiper_179b5_101 ._SwiperSlide_179b5_104 ._Card_179b5_104 ._CardHeader_179b5_118 ._Message_179b5_141 {
                      color: #fff;
                      font-size: 13px;
                      font-style: normal;
                      font-weight: 300;
                      line-height: normal;
                      letter-spacing: .7px;
                      margin-top: 16px;
                      margin-bottom: 30px;
                      max-width: 249px
                  }

                  ._LimitlessPossibilitiesSection_179b5_76 ._SwiperWrapper_179b5_101 ._Swiper_179b5_101 ._SwiperSlide_179b5_104 ._Card_179b5_104 ._CardHeader_179b5_118 ._Message_179b5_141._es_179b5_95,._LimitlessPossibilitiesSection_179b5_76 ._SwiperWrapper_179b5_101 ._Swiper_179b5_101 ._SwiperSlide_179b5_104 ._Card_179b5_104 ._CardHeader_179b5_118 ._Message_179b5_141._pt_179b5_98 {
                      min-height: 100px
                  }

                  ._LimitlessPossibilitiesSection_179b5_76 ._SwiperWrapper_179b5_101 ._Swiper_179b5_101 ._SwiperSlide_179b5_104 ._Card_179b5_104 ._CardHeader_179b5_118 ._Message_179b5_141 ._MessageBold_179b5_158 {
                      font-weight: 600
                  }

                  ._LimitlessPossibilitiesSection_179b5_76 ._SwiperWrapper_179b5_101 ._Swiper_179b5_101 ._SwiperSlide_179b5_104 ._Card_179b5_104 ._CardBody_179b5_161 ._BodyContent_179b5_161 {
                      margin-top: 30px
                  }

                  ._LimitlessPossibilitiesSection_179b5_76 ._SwiperWrapper_179b5_101 ._Swiper_179b5_101 ._SwiperSlide_179b5_104 ._Card_179b5_104 ._CardBody_179b5_161 ._BodyContent_179b5_161 ._BodyTitle_179b5_164 {
                      color: #fff;
                      font-size: 16px;
                      font-style: normal;
                      font-weight: 600;
                      line-height: normal;
                      letter-spacing: .8px;
                      margin-bottom: 18px
                  }

                  ._LimitlessPossibilitiesSection_179b5_76 ._SwiperWrapper_179b5_101 ._Swiper_179b5_101 ._SwiperSlide_179b5_104 ._Card_179b5_104 ._CardBody_179b5_161 ._BodyContent_179b5_161 ._CardGrid_179b5_173 {
                      display: grid;
                      grid-template-columns: 1fr 1fr;
                      justify-items: baseline;
                      row-gap: 5px;
                      column-gap: 28px
                  }

                  ._LimitlessPossibilitiesSection_179b5_76 ._SwiperWrapper_179b5_101 ._Swiper_179b5_101 ._SwiperSlide_179b5_104 ._Card_179b5_104 ._CardBody_179b5_161 ._BodyContent_179b5_161 ._CardGrid_179b5_173 ._CardGridItem_179b5_180 img {
                      max-height: 60px
                  }

                  ._LimitlessPossibilitiesSection_179b5_76 ._SwiperWrapper_179b5_101 ._Swiper_179b5_101 ._SwiperSlide_179b5_104 ._Card_179b5_104 ._CardBody_179b5_161 ._BodyContent_179b5_161 ._CardList_179b5_183 {
                      list-style-image: url(/assets/circle-arrow-8e636245.svg)
                  }

                  ._LimitlessPossibilitiesSection_179b5_76 ._SwiperWrapper_179b5_101 ._Swiper_179b5_101 ._SwiperSlide_179b5_104 ._Card_179b5_104 ._CardBody_179b5_161 ._BodyContent_179b5_161 ._CardList_179b5_183 ._CardListItem_179b5_186 {
                      color: #fff;
                      font-size: 14px;
                      font-style: normal;
                      font-weight: 400;
                      line-height: normal;
                      letter-spacing: .7px;
                      padding-top: 10px;
                      margin-left: 20px
                  }

                  @media (min-width: 768px) {
                      ._LimitlessPossibilitiesSection_179b5_76 ._Heading_179b5_86 {
                          color:#000;
                          font-size: 3.125vw;
                          font-style: normal;
                          font-weight: 600;
                          line-height: normal;
                          letter-spacing: .156vw;
                          text-transform: uppercase
                      }

                      ._LimitlessPossibilitiesSection_179b5_76 ._SwiperWrapper_179b5_101 ._Swiper_179b5_101 ._SwiperSlide_179b5_104 ._Card_179b5_104 {
                          min-width: max(325px,24.306vw)
                      }
                  }

                  @media (min-width: 1024px) {
                      ._LimitlessPossibilitiesSection_179b5_76 {
                          padding:50px 10px
                      }

                      ._LimitlessPossibilitiesSection_179b5_76 ._Heading_179b5_86 {
                          text-align: center;
                          font-size: max(32px,3.125vw);
                          line-height: normal;
                          letter-spacing: .156vw;
                          margin-bottom: 1.389vw;
                          margin-inline:auto}

                      ._LimitlessPossibilitiesSection_179b5_76 ._Heading_179b5_86._es_179b5_95,._LimitlessPossibilitiesSection_179b5_76 ._Heading_179b5_86._pt_179b5_98 {
                          font-size: max(32px,3.125vw);
                          max-width: 62.5vw
                      }

                      ._LimitlessPossibilitiesSection_179b5_76 ._SwiperWrapper_179b5_101 ._Swiper_179b5_101 {
                          display: flex;
                          align-items: center;
                          justify-content: center;
                          gap: 1vw
                      }

                      ._LimitlessPossibilitiesSection_179b5_76 ._SwiperWrapper_179b5_101 ._Swiper_179b5_101 ._SwiperSlide_179b5_104 {
                          display: flex;
                          justify-content: center
                      }

                      ._LimitlessPossibilitiesSection_179b5_76 ._SwiperWrapper_179b5_101 ._Swiper_179b5_101 ._SwiperSlide_179b5_104 ._Card_179b5_104 {
                          padding: 3.611vw 1.389vw 0px 1.806vw;
                          min-height: max(540px,40.764vw)
                      }

                      ._LimitlessPossibilitiesSection_179b5_76 ._SwiperWrapper_179b5_101 ._Swiper_179b5_101 ._SwiperSlide_179b5_104 ._Card_179b5_104._es_179b5_95,._LimitlessPossibilitiesSection_179b5_76 ._SwiperWrapper_179b5_101 ._Swiper_179b5_101 ._SwiperSlide_179b5_104 ._Card_179b5_104._pt_179b5_98 {
                          min-height: max(580px,43vw)
                      }

                      ._LimitlessPossibilitiesSection_179b5_76 ._SwiperWrapper_179b5_101 ._Swiper_179b5_101 ._SwiperSlide_179b5_104 ._Card_179b5_104 ._CardHeader_179b5_118 ._Title_179b5_118 {
                          font-size: max(16px,1.25vw);
                          letter-spacing: .063vw
                      }

                      ._LimitlessPossibilitiesSection_179b5_76 ._SwiperWrapper_179b5_101 ._Swiper_179b5_101 ._SwiperSlide_179b5_104 ._Card_179b5_104 ._CardHeader_179b5_118 ._CardHeading_179b5_126 {
                          font-size: max(28px,2.083vw);
                          letter-spacing: .104vw;
                          margin-top: .139vw
                      }

                      ._LimitlessPossibilitiesSection_179b5_76 ._SwiperWrapper_179b5_101 ._Swiper_179b5_101 ._SwiperSlide_179b5_104 ._Card_179b5_104 ._CardHeader_179b5_118 ._CardHeading_179b5_126._pt_179b5_98 {
                          font-size: max(23px,1.7vw)
                      }

                      ._LimitlessPossibilitiesSection_179b5_76 ._SwiperWrapper_179b5_101 ._Swiper_179b5_101 ._SwiperSlide_179b5_104 ._Card_179b5_104 ._CardHeader_179b5_118 ._Message_179b5_141 {
                          min-height: 6.25vw;
                          font-size: max(13px,.972vw);
                          letter-spacing: .049vw;
                          margin-top: 1.111vw;
                          margin-bottom: 2.361vw;
                          max-width: unset
                      }

                      ._LimitlessPossibilitiesSection_179b5_76 ._SwiperWrapper_179b5_101 ._Swiper_179b5_101 ._SwiperSlide_179b5_104 ._Card_179b5_104 ._CardHeader_179b5_118 ._Message_179b5_141._es_179b5_95,._LimitlessPossibilitiesSection_179b5_76 ._SwiperWrapper_179b5_101 ._Swiper_179b5_101 ._SwiperSlide_179b5_104 ._Card_179b5_104 ._CardHeader_179b5_118 ._Message_179b5_141._pt_179b5_98 {
                          min-height: 8vw
                      }

                      ._LimitlessPossibilitiesSection_179b5_76 ._SwiperWrapper_179b5_101 ._Swiper_179b5_101 ._SwiperSlide_179b5_104 ._Card_179b5_104 ._CardHeader_179b5_118 ._Message_179b5_141 ._MessageBold_179b5_158 {
                          font-weight: 600
                      }

                      ._LimitlessPossibilitiesSection_179b5_76 ._SwiperWrapper_179b5_101 ._Swiper_179b5_101 ._SwiperSlide_179b5_104 ._Card_179b5_104 ._CardBody_179b5_161 ._BodyContent_179b5_161 {
                          margin-top: 2.083vw
                      }

                      ._LimitlessPossibilitiesSection_179b5_76 ._SwiperWrapper_179b5_101 ._Swiper_179b5_101 ._SwiperSlide_179b5_104 ._Card_179b5_104 ._CardBody_179b5_161 ._BodyContent_179b5_161 ._BodyTitle_179b5_164 {
                          font-size: max(14px,1.111vw);
                          letter-spacing: .056vw;
                          margin-bottom: 1.25vw
                      }

                      ._LimitlessPossibilitiesSection_179b5_76 ._SwiperWrapper_179b5_101 ._Swiper_179b5_101 ._SwiperSlide_179b5_104 ._Card_179b5_104 ._CardBody_179b5_161 ._BodyContent_179b5_161 ._CardGrid_179b5_173 {
                          row-gap: 0px;
                          column-gap: 2.639vw
                      }

                      ._LimitlessPossibilitiesSection_179b5_76 ._SwiperWrapper_179b5_101 ._Swiper_179b5_101 ._SwiperSlide_179b5_104 ._Card_179b5_104 ._CardBody_179b5_161 ._BodyContent_179b5_161 ._CardGrid_179b5_173 ._CardGridItem_179b5_180 img {
                          max-height: max(56px,3.889vw)
                      }

                      ._LimitlessPossibilitiesSection_179b5_76 ._SwiperWrapper_179b5_101 ._Swiper_179b5_101 ._SwiperSlide_179b5_104 ._Card_179b5_104 ._CardBody_179b5_161 ._BodyContent_179b5_161 ._CardList_179b5_183 ._CardListItem_179b5_186 {
                          font-size: max(12px,.972vw);
                          letter-spacing: .049vw;
                          padding-top: .694vw;
                          margin-left: 1.389vw
                      }
                  }

                  @media (min-width: 1440px) {
                      ._LimitlessPossibilitiesSection_179b5_76 {
                          padding:5.556vw 4.861vw 7.083vw
                      }

                      ._LimitlessPossibilitiesSection_179b5_76 ._SwiperWrapper_179b5_101 ._Swiper_179b5_101 {
                          gap: 1.736vw
                      }
                  }

                  ._YourShowChoiceSection_16vhd_76 {
                      margin: 0;
                      padding: 50px 8px;
                      background: #111617
                  }

                  ._YourShowChoiceSection_16vhd_76 * {
                      margin: 0;
                      padding: 0;
                      box-sizing: border-box
                  }

                  ._YourShowChoiceSection_16vhd_76 ._Heading_16vhd_86 {
                      color: #fff;
                      padding-inline:12px;font-size: 36px;
                      font-style: normal;
                      font-weight: 500;
                      line-height: normal;
                      letter-spacing: 2.25px;
                      text-transform: uppercase;
                      margin-bottom: 41px
                  }

                  ._YourShowChoiceSection_16vhd_76 ._CardsWrapper_16vhd_97 ._Card_16vhd_97 ._Title_16vhd_97 {
                      font-size: 30px;
                      font-style: normal;
                      font-weight: 500;
                      line-height: 100%;
                      letter-spacing: 1.6px;
                      border-radius: 10px 10px 0 0;
                      padding: 32px 0 31px 26px
                  }

                  ._YourShowChoiceSection_16vhd_76 ._CardsWrapper_16vhd_97 ._Card_16vhd_97._SponsorCard_16vhd_106 {
                      border-radius: 10px;
                      border: 1px solid #51c2bd;
                      margin-bottom: 35px
                  }

                  ._YourShowChoiceSection_16vhd_76 ._CardsWrapper_16vhd_97 ._Card_16vhd_97._SponsorCard_16vhd_106 ._Title_16vhd_97 {
                      background: #00fff4;
                      color: #000
                  }

                  ._YourShowChoiceSection_16vhd_76 ._CardsWrapper_16vhd_97 ._Card_16vhd_97._SponsorCard_16vhd_106 ._CardButtonWrapper_16vhd_115 ._CardButton_16vhd_115 {
                      border-radius: 10px;
                      background: linear-gradient(270deg,#0aeae0 -22.92%,#074a46 80.32%);
                      box-shadow: 1px 2px 4px #00000080
                  }

                  ._YourShowChoiceSection_16vhd_76 ._CardsWrapper_16vhd_97 ._Card_16vhd_97._SponsorCard_16vhd_106 ._CardButtonWrapper_16vhd_115 ._CardButton_16vhd_115:hover span {
                      border-bottom: 1px solid #fff;
                      line-height: 20px
                  }

                  ._YourShowChoiceSection_16vhd_76 ._CardsWrapper_16vhd_97 ._Card_16vhd_97._ExhibitCard_16vhd_124 {
                      border-radius: 10px;
                      border: 1px solid #ff5000
                  }

                  ._YourShowChoiceSection_16vhd_76 ._CardsWrapper_16vhd_97 ._Card_16vhd_97._ExhibitCard_16vhd_124 ._Title_16vhd_97 {
                      background: #ff5000;
                      color: #fff
                  }

                  ._YourShowChoiceSection_16vhd_76 ._CardsWrapper_16vhd_97 ._Card_16vhd_97._ExhibitCard_16vhd_124 ._CardButtonWrapper_16vhd_115 ._CardButton_16vhd_115 {
                      border-radius: 10px;
                      background: linear-gradient(90deg,#ff5000 11.19%,#eb7b47 89.17%);
                      box-shadow: 1px 2px 4px #00000080
                  }

                  ._YourShowChoiceSection_16vhd_76 ._CardsWrapper_16vhd_97 ._Card_16vhd_97._ExhibitCard_16vhd_124 ._CardButtonWrapper_16vhd_115 ._CardButton_16vhd_115:hover span {
                      border-bottom: 1px solid #fff;
                      line-height: 20px
                  }

                  ._YourShowChoiceSection_16vhd_76 ._CardsWrapper_16vhd_97 ._Card_16vhd_97 ._CardList_16vhd_141 {
                      padding: 37px 18px 32px 26px;
                      list-style-type: none
                  }

                  ._YourShowChoiceSection_16vhd_76 ._CardsWrapper_16vhd_97 ._Card_16vhd_97 ._CardList_16vhd_141 ._ListItem_16vhd_145 {
                      display: flex;
                      color: #fffc;
                      font-size: 14px;
                      font-style: normal;
                      font-weight: 400;
                      line-height: 150%;
                      padding-bottom: 9px;
                      align-items: baseline
                  }

                  ._YourShowChoiceSection_16vhd_76 ._CardsWrapper_16vhd_97 ._Card_16vhd_97 ._CardList_16vhd_141 ._ListItem_16vhd_145 ._IconWrapper_16vhd_155 {
                      position: relative;
                      top: 2px
                  }

                  ._YourShowChoiceSection_16vhd_76 ._CardsWrapper_16vhd_97 ._Card_16vhd_97 ._CardList_16vhd_141 ._ListItem_16vhd_145 ._IconWrapper_16vhd_155 ._CheckMark_16vhd_159 {
                      min-width: 20px
                  }

                  ._YourShowChoiceSection_16vhd_76 ._CardsWrapper_16vhd_97 ._Card_16vhd_97 ._CardList_16vhd_141 ._ListItem_16vhd_145 ._ItemText_16vhd_162 {
                      padding-left: 10px;
                      line-height: normal
                  }

                  ._YourShowChoiceSection_16vhd_76 ._CardsWrapper_16vhd_97 ._Card_16vhd_97 ._CardList_16vhd_141 ._InactiveListItem_16vhd_166 {
                      color: #ffffff4d;
                      font-size: 14px;
                      font-style: normal;
                      font-weight: 400;
                      line-height: 150%
                  }

                  ._YourShowChoiceSection_16vhd_76 ._CardsWrapper_16vhd_97 ._Card_16vhd_97 ._CardButtonWrapper_16vhd_115 {
                      display: flex;
                      flex-direction: column;
                      justify-content: center;
                      align-items: center;
                      padding-bottom: 19px
                  }

                  ._YourShowChoiceSection_16vhd_76 ._CardsWrapper_16vhd_97 ._Card_16vhd_97 ._CardButtonWrapper_16vhd_115 ._CardButton_16vhd_115 {
                      border: none;
                      width: 277px;
                      height: 66px;
                      color: #fff;
                      font-family: Plus Jakarta Sans;
                      font-size: 18px;
                      font-style: normal;
                      font-weight: 700;
                      line-height: 100%;
                      letter-spacing: .72px;
                      text-transform: uppercase;
                      display: flex;
                      padding: 24px 40px;
                      justify-content: center;
                      align-items: center;
                      gap: 10px;
                      border-radius: 10px
                  }

                  ._YourShowChoiceSection_16vhd_76 ._CardsWrapper_16vhd_97 ._Card_16vhd_97 ._CardButtonWrapper_16vhd_115 ._ButtonMessage_16vhd_199 {
                      margin-top: 10px;
                      width: 277px;
                      color: #fff9;
                      font-family: Plus Jakarta Sans;
                      font-size: 11px;
                      font-style: normal;
                      font-weight: 400;
                      line-height: normal;
                      padding-left: 2px
                  }

                  @media (min-width: 1024px) {
                      ._YourShowChoiceSection_16vhd_76 {
                          padding:5.556vw 4.861vw 6.66vw
                      }

                      ._YourShowChoiceSection_16vhd_76 ._Heading_16vhd_86 {
                          text-align: center;
                          font-size: 3.125vw;
                          font-style: normal;
                          font-weight: 500;
                          line-height: normal;
                          letter-spacing: .156vw;
                          text-transform: uppercase;
                          margin-bottom: 3.472vw
                      }

                      ._YourShowChoiceSection_16vhd_76 ._CardsWrapper_16vhd_97 {
                          display: flex;
                          justify-content: center;
                          align-items: center;
                          gap: 6.944vw
                      }

                      ._YourShowChoiceSection_16vhd_76 ._CardsWrapper_16vhd_97 ._Card_16vhd_97 {
                          width: max(320px,25.903vw)
                      }

                      ._YourShowChoiceSection_16vhd_76 ._CardsWrapper_16vhd_97 ._Card_16vhd_97._es_16vhd_234,._YourShowChoiceSection_16vhd_76 ._CardsWrapper_16vhd_97 ._Card_16vhd_97._pt_16vhd_234 {
                          width: max(360px,28.7vw)
                      }

                      ._YourShowChoiceSection_16vhd_76 ._CardsWrapper_16vhd_97 ._Card_16vhd_97 ._Title_16vhd_97 {
                          padding: 2.569vw 0px 3.611vw 1.806vw;
                          font-size: 2.778vw;
                          font-style: normal;
                          font-weight: 500;
                          line-height: 100%;
                          letter-spacing: .111vw
                      }

                      ._YourShowChoiceSection_16vhd_76 ._CardsWrapper_16vhd_97 ._Card_16vhd_97._SponsorCard_16vhd_106 {
                          margin-bottom: 0
                      }

                      ._YourShowChoiceSection_16vhd_76 ._CardsWrapper_16vhd_97 ._Card_16vhd_97 ._CardList_16vhd_141 {
                          padding: 2.778vw .694vw 2.361vw 1.875vw
                      }

                      ._YourShowChoiceSection_16vhd_76 ._CardsWrapper_16vhd_97 ._Card_16vhd_97 ._CardList_16vhd_141 ._ListItem_16vhd_145 {
                          font-size: 1.25vw;
                          padding-bottom: .972vw;
                          font-style: normal;
                          font-weight: 400;
                          line-height: 150%
                      }

                      ._YourShowChoiceSection_16vhd_76 ._CardsWrapper_16vhd_97 ._Card_16vhd_97 ._CardList_16vhd_141 ._ListItem_16vhd_145 ._IconWrapper_16vhd_155 ._CheckMark_16vhd_159 {
                          min-width: 1.389vw
                      }

                      ._YourShowChoiceSection_16vhd_76 ._CardsWrapper_16vhd_97 ._Card_16vhd_97 ._CardList_16vhd_141 ._ListItem_16vhd_145 ._ItemText_16vhd_162 {
                          padding-left: 1.25vw;
                          line-height: 1.597vw
                      }

                      ._YourShowChoiceSection_16vhd_76 ._CardsWrapper_16vhd_97 ._Card_16vhd_97 ._CardButtonWrapper_16vhd_115 ._CardButton_16vhd_115 {
                          width: 19.236vw;
                          font-size: 1.25vw
                      }

                      ._YourShowChoiceSection_16vhd_76 ._CardsWrapper_16vhd_97 ._Card_16vhd_97 ._CardButtonWrapper_16vhd_115 ._ButtonMessage_16vhd_199 {
                          width: 19.236vw;
                          margin-top: 1.111vw;
                          font-size: 12px
                      }
                  }

                  ._WhoYouWillMeetSection_stgga_76 {
                      margin: 0;
                      padding: 50px 0;
                      border-top: .5px solid #4e4e4e;
                      background: #111617
                  }

                  ._WhoYouWillMeetSection_stgga_76 * {
                      margin: 0;
                      padding: 0;
                      box-sizing: border-box
                  }

                  ._WhoYouWillMeetSection_stgga_76 ._Heading_stgga_87 {
                      color: #fff;
                      font-size: 32px;
                      font-style: normal;
                      font-weight: 500;
                      line-height: normal;
                      letter-spacing: .72px;
                      text-transform: uppercase;
                      padding: 0 20px 25px
                  }

                  ._WhoYouWillMeetSection_stgga_76 ._SwiperWrapper_stgga_97 {
                      overflow: hidden
                  }

                  ._WhoYouWillMeetSection_stgga_76 ._SwiperWrapper_stgga_97 ._Swiper_stgga_97 {
                      width: 780px
                  }

                  ._WhoYouWillMeetSection_stgga_76 ._SwiperWrapper_stgga_97 ._Swiper_stgga_97 ._SwiperSlide_stgga_103 ._Card_stgga_103 {
                      border-right: 1px solid #000;
                      height: 283.235px;
                      width: 260px;
                      display: flex;
                      flex-direction: column;
                      justify-content: start;
                      align-items: center
                  }

                  ._WhoYouWillMeetSection_stgga_76 ._SwiperWrapper_stgga_97 ._Swiper_stgga_97 ._SwiperSlide_stgga_103 ._Card_stgga_103 ._Title_stgga_112 {
                      display: flex;
                      justify-content: center;
                      align-items: center;
                      color: #fff;
                      text-align: center;
                      font-size: 25px;
                      font-style: normal;
                      font-weight: 700;
                      line-height: normal;
                      letter-spacing: .5px;
                      text-transform: uppercase;
                      max-width: 165px;
                      min-height: 64px;
                      margin-top: 53px;
                      margin-bottom: 36px
                  }

                  ._WhoYouWillMeetSection_stgga_76 ._SwiperWrapper_stgga_97 ._Swiper_stgga_97 ._SwiperSlide_stgga_103 ._Card_stgga_103 ._Text_stgga_129 {
                      color: #51c2bd;
                      text-align: center;
                      font-size: 16px;
                      font-style: normal;
                      font-weight: 700;
                      line-height: 150%;
                      letter-spacing: .32px;
                      text-transform: uppercase;
                      max-width: 165px;
                      min-height: 72px
                  }

                  ._WhoYouWillMeetSection_stgga_76 ._SwiperWrapper_stgga_97 ._Swiper_stgga_97 ._SwiperSlide_stgga_103 ._Card_stgga_103 ._Text_stgga_129._es_stgga_141,._WhoYouWillMeetSection_stgga_76 ._SwiperWrapper_stgga_97 ._Swiper_stgga_97 ._SwiperSlide_stgga_103 ._Card_stgga_103 ._Text_stgga_129._pt_stgga_141 {
                      max-width: 185px
                  }

                  ._WhoYouWillMeetSection_stgga_76 ._LogosWrapper_stgga_144 {
                      padding-bottom: 50px
                  }

                  ._WhoYouWillMeetSection_stgga_76 ._LogosWrapper_stgga_144 ._LogosTitle_stgga_147 {
                      padding-left: 20px;
                      max-width: 350px;
                      color: #fff;
                      font-size: 18px;
                      font-style: normal;
                      font-weight: 300;
                      line-height: normal;
                      letter-spacing: .9px;
                      margin-top: 50px;
                      margin-bottom: 30px
                  }

                  ._WhoYouWillMeetSection_stgga_76 ._LogosWrapper_stgga_144 ._LogosGrid_stgga_159 {
                      display: grid;
                      grid-template-columns: 1fr 1fr 1fr;
                      justify-items: center;
                      row-gap: 15px
                  }

                  ._WhoYouWillMeetSection_stgga_76 ._LogosWrapper_stgga_144 ._LogosGrid_stgga_159 ._LogoWrapper_stgga_165 {
                      width: 91px;
                      height: 46px
                  }

                  ._WhoYouWillMeetSection_stgga_76 ._LogosWrapper_stgga_144 ._LogosGrid_stgga_159 ._LogoWrapper_stgga_165 img {
                      width: 100%;
                      height: 100%
                  }

                  ._WhoYouWillMeetSection_stgga_76 ._FreePassCardWrapper_stgga_173 {
                      padding: 56px 20px 0;
                      border-top: .5px solid #4e4e4e
                  }

                  ._WhoYouWillMeetSection_stgga_76 ._FreePassCardWrapper_stgga_173 ._Card_stgga_103 {
                      border-radius: 10px;
                      border: 1px solid #ff5000;
                      display: flex;
                      flex-direction: column;
                      padding-bottom: 30px
                  }

                  ._WhoYouWillMeetSection_stgga_76 ._FreePassCardWrapper_stgga_173 ._Card_stgga_103 ._TitleWrapper_stgga_184 {
                      background: #ff5000;
                      color: #fff;
                      border-radius: 10px 10px 0 0;
                      padding: 9px 33px 9px 20px
                  }

                  ._WhoYouWillMeetSection_stgga_76 ._FreePassCardWrapper_stgga_173 ._Card_stgga_103 ._TitleWrapper_stgga_184 ._Title_stgga_112 {
                      display: flex;
                      flex-wrap: wrap;
                      justify-content: center;
                      align-items: center;
                      text-align: center;
                      font-size: 40px;
                      font-style: normal;
                      font-weight: 700;
                      line-height: normal;
                      letter-spacing: 2px;
                      text-transform: uppercase
                  }

                  ._WhoYouWillMeetSection_stgga_76 ._FreePassCardWrapper_stgga_173 ._Card_stgga_103 ._TitleWrapper_stgga_184 ._Title_stgga_112._es_stgga_141 {
                      font-size: 34px
                  }

                  ._WhoYouWillMeetSection_stgga_76 ._FreePassCardWrapper_stgga_173 ._Card_stgga_103 ._TitleWrapper_stgga_184 ._Title_stgga_112._pt_stgga_141 {
                      font-size: 29px
                  }

                  ._WhoYouWillMeetSection_stgga_76 ._FreePassCardWrapper_stgga_173 ._Card_stgga_103 ._TitleWrapper_stgga_184 ._Title_stgga_112 ._UnderLine_stgga_209 {
                      border-bottom: 1px solid #fff
                  }

                  ._WhoYouWillMeetSection_stgga_76 ._FreePassCardWrapper_stgga_173 ._Card_stgga_103 ._TitleWrapper_stgga_184 ._TitleButton_stgga_212 {
                      display: none
                  }

                  ._WhoYouWillMeetSection_stgga_76 ._FreePassCardWrapper_stgga_173 ._Card_stgga_103 ._CardListWrapper_stgga_215 ._CardList_stgga_215 {
                      padding: 40px 10px 30px 20px;
                      list-style-type: none
                  }

                  ._WhoYouWillMeetSection_stgga_76 ._FreePassCardWrapper_stgga_173 ._Card_stgga_103 ._CardListWrapper_stgga_215 ._CardList_stgga_215 ._ListItem_stgga_219 {
                      display: flex;
                      color: #ffffffe6;
                      font-size: 16px;
                      font-style: normal;
                      font-weight: 500;
                      line-height: normal;
                      letter-spacing: .8px;
                      padding-bottom: 17px;
                      align-items: baseline
                  }

                  ._WhoYouWillMeetSection_stgga_76 ._FreePassCardWrapper_stgga_173 ._Card_stgga_103 ._CardListWrapper_stgga_215 ._CardList_stgga_215 ._ListItem_stgga_219 ._IconWrapper_stgga_230 {
                      position: relative;
                      top: 5px
                  }

                  ._WhoYouWillMeetSection_stgga_76 ._FreePassCardWrapper_stgga_173 ._Card_stgga_103 ._CardListWrapper_stgga_215 ._CardList_stgga_215 ._ListItem_stgga_219 ._IconWrapper_stgga_230 img {
                      min-width: 20px
                  }

                  ._WhoYouWillMeetSection_stgga_76 ._FreePassCardWrapper_stgga_173 ._Card_stgga_103 ._CardListWrapper_stgga_215 ._CardList_stgga_215 ._ListItem_stgga_219 ._ItemText_stgga_237 {
                      padding-left: 10px;
                      line-height: normal
                  }

                  ._WhoYouWillMeetSection_stgga_76 ._FreePassCardWrapper_stgga_173 ._Card_stgga_103 ._CardButton_stgga_241 {
                      color: #fff;
                      background-color: #111617;
                      font-family: Plus Jakarta Sans;
                      font-size: 18px;
                      font-style: normal;
                      font-weight: 700;
                      line-height: normal;
                      text-transform: uppercase;
                      border: none;
                      display: flex;
                      width: 310px;
                      height: 50px;
                      padding: 10px 24px;
                      justify-content: center;
                      align-items: center;
                      border-radius: 5px;
                      border: 1px solid #fff;
                      align-self: center
                  }

                  @media (min-width: 768px) {
                      ._WhoYouWillMeetSection_stgga_76 ._SwiperWrapper_stgga_97 ._Swiper_stgga_97 {
                          width:1040px
                      }
                  }

                  @media (min-width: 1024px) {
                      ._WhoYouWillMeetSection_stgga_76 {
                          padding:4.167vw 0px 3.681vw
                      }

                      ._WhoYouWillMeetSection_stgga_76 ._Heading_stgga_87 {
                          text-align: center;
                          font-size: 3.125vw;
                          font-style: normal;
                          font-weight: 500;
                          line-height: normal;
                          letter-spacing: .063vw;
                          text-transform: uppercase;
                          padding: 0px 0px 2.361vw
                      }

                      ._WhoYouWillMeetSection_stgga_76 ._SwiperWrapper_stgga_97 {
                          display: flex;
                          justify-content: center
                      }

                      ._WhoYouWillMeetSection_stgga_76 ._SwiperWrapper_stgga_97 ._Swiper_stgga_97 {
                          width: 90.278vw
                      }

                      ._WhoYouWillMeetSection_stgga_76 ._SwiperWrapper_stgga_97 ._Swiper_stgga_97 ._SwiperSlide_stgga_103 ._Card_stgga_103 {
                          border-right: 1px solid #000;
                          height: 19.669vw;
                          width: 18.056vw;
                          display: flex;
                          flex-direction: column;
                          justify-content: start;
                          align-items: center
                      }

                      ._WhoYouWillMeetSection_stgga_76 ._SwiperWrapper_stgga_97 ._Swiper_stgga_97 ._SwiperSlide_stgga_103 ._Card_stgga_103 ._Title_stgga_112 {
                          display: flex;
                          justify-content: center;
                          align-items: center;
                          color: #fff;
                          text-align: center;
                          font-size: 1.736vw;
                          font-style: normal;
                          font-weight: 700;
                          line-height: normal;
                          letter-spacing: .035vw;
                          text-transform: uppercase;
                          max-width: 11.458vw;
                          min-height: 4.444vw;
                          margin-top: 3.681vw;
                          margin-bottom: 2.5vw
                      }

                      ._WhoYouWillMeetSection_stgga_76 ._SwiperWrapper_stgga_97 ._Swiper_stgga_97 ._SwiperSlide_stgga_103 ._Card_stgga_103 ._Text_stgga_129 {
                          color: #51c2bd;
                          text-align: center;
                          font-size: 1.111vw;
                          font-style: normal;
                          font-weight: 700;
                          line-height: 150%;
                          letter-spacing: .022vw;
                          text-transform: uppercase;
                          max-width: 11.458vw;
                          min-height: 5vw
                      }

                      ._WhoYouWillMeetSection_stgga_76 ._SwiperWrapper_stgga_97 ._Swiper_stgga_97 ._SwiperSlide_stgga_103 ._Card_stgga_103 ._Text_stgga_129._es_stgga_141 {
                          max-width: 12.458vw
                      }

                      ._WhoYouWillMeetSection_stgga_76 ._SwiperWrapper_stgga_97 ._Swiper_stgga_97 ._SwiperSlide_stgga_103 ._Card_stgga_103 ._Text_stgga_129._pt_stgga_141 {
                          max-width: 13.458vw
                      }

                      ._WhoYouWillMeetSection_stgga_76 ._LogosWrapper_stgga_144 {
                          padding-inline:6.944vw}

                      ._WhoYouWillMeetSection_stgga_76 ._LogosWrapper_stgga_144 ._LogosTitle_stgga_147 {
                          max-width: unset;
                          font-size: 1.528vw;
                          font-style: normal;
                          font-weight: 300;
                          line-height: normal;
                          letter-spacing: .076vw;
                          margin-top: 5.556vw
                      }

                      ._WhoYouWillMeetSection_stgga_76 ._LogosWrapper_stgga_144 ._LogosGrid_stgga_159 {
                          grid-template-columns: repeat(5,1fr);
                          column-gap: 1.944vw;
                          row-gap: 1.736vw
                      }

                      ._WhoYouWillMeetSection_stgga_76 ._LogosWrapper_stgga_144 ._LogosGrid_stgga_159 ._LogoWrapper_stgga_165 {
                          width: 11.25vw;
                          height: 5.694vw
                      }

                      ._WhoYouWillMeetSection_stgga_76 ._LogosWrapper_stgga_144 ._LogosGrid_stgga_159 ._LogoWrapper_stgga_165 img {
                          width: 100%;
                          height: 100%
                      }

                      ._WhoYouWillMeetSection_stgga_76 ._FreePassCardWrapper_stgga_173 {
                          padding: 3.681vw 4.861vw 0px
                      }

                      ._WhoYouWillMeetSection_stgga_76 ._FreePassCardWrapper_stgga_173 ._Card_stgga_103 {
                          padding: 0;
                          max-width: 75.7vw;
                          margin-inline:auto}

                      ._WhoYouWillMeetSection_stgga_76 ._FreePassCardWrapper_stgga_173 ._Card_stgga_103 ._TitleWrapper_stgga_184 {
                          display: flex;
                          align-items: center;
                          justify-content: space-between;
                          padding: 1.875vw 1.875vw 1.181vw 1.389vw
                      }

                      ._WhoYouWillMeetSection_stgga_76 ._FreePassCardWrapper_stgga_173 ._Card_stgga_103 ._TitleWrapper_stgga_184._es_stgga_141 {
                          padding: 2.1vw 1.875vw 1.8vw 1.389vw
                      }

                      ._WhoYouWillMeetSection_stgga_76 ._FreePassCardWrapper_stgga_173 ._Card_stgga_103 ._TitleWrapper_stgga_184._pt_stgga_141 {
                          padding: 2.1vw 1.875vw 2vw 1.389vw
                      }

                      ._WhoYouWillMeetSection_stgga_76 ._FreePassCardWrapper_stgga_173 ._Card_stgga_103 ._TitleWrapper_stgga_184 ._Title_stgga_112 {
                          text-align: start;
                          font-size: 4.17vw;
                          letter-spacing: .208vw
                      }

                      ._WhoYouWillMeetSection_stgga_76 ._FreePassCardWrapper_stgga_173 ._Card_stgga_103 ._TitleWrapper_stgga_184 ._Title_stgga_112._es_stgga_141 {
                          font-size: 3.403vw;
                          letter-spacing: .17vw
                      }

                      ._WhoYouWillMeetSection_stgga_76 ._FreePassCardWrapper_stgga_173 ._Card_stgga_103 ._TitleWrapper_stgga_184 ._Title_stgga_112._pt_stgga_141 {
                          font-size: 3.125vw;
                          letter-spacing: .156vw
                      }

                      ._WhoYouWillMeetSection_stgga_76 ._FreePassCardWrapper_stgga_173 ._Card_stgga_103 ._TitleWrapper_stgga_184 ._TitleButton_stgga_212 {
                          background: #ff5000;
                          display: flex;
                          width: 13.9vw;
                          height: 3.48vw;
                          padding: .694vw 1.667vw;
                          justify-content: center;
                          align-items: center;
                          color: #fff;
                          font-size: 1.25vw;
                          font-style: normal;
                          font-weight: 700;
                          line-height: 1.25vw;
                          text-transform: uppercase
                      }

                      ._WhoYouWillMeetSection_stgga_76 ._FreePassCardWrapper_stgga_173 ._Card_stgga_103 ._TitleWrapper_stgga_184 ._TitleButton_stgga_212._pt_stgga_141 {
                          padding: 0;
                          width: 13.889vw;
                          height: 4.167vw;
                          white-space: normal;
                          word-wrap: break-word;
                          line-height: 1.6vw
                      }

                      ._WhoYouWillMeetSection_stgga_76 ._FreePassCardWrapper_stgga_173 ._Card_stgga_103 ._TitleWrapper_stgga_184 ._TitleButton_stgga_212._pt_stgga_141:hover span {
                          border-bottom: none;
                          line-height: 1.6vw;
                          text-decoration: underline
                      }

                      ._WhoYouWillMeetSection_stgga_76 ._FreePassCardWrapper_stgga_173 ._Card_stgga_103 ._TitleWrapper_stgga_184 ._TitleButton_stgga_212:hover span {
                          border-bottom: 1px solid #fff;
                          line-height: 1.25vw
                      }

                      ._WhoYouWillMeetSection_stgga_76 ._FreePassCardWrapper_stgga_173 ._Card_stgga_103 ._CardListWrapper_stgga_215 {
                          display: flex;
                          justify-content: space-between;
                          padding: 2.6vw 1.15vw 1.1vw;
                          gap: 0px
                      }

                      ._WhoYouWillMeetSection_stgga_76 ._FreePassCardWrapper_stgga_173 ._Card_stgga_103 ._CardListWrapper_stgga_215 ._CardList_stgga_215 {
                          display: flex;
                          flex-direction: column;
                          justify-content: space-between;
                          padding: 0
                      }

                      ._WhoYouWillMeetSection_stgga_76 ._FreePassCardWrapper_stgga_173 ._Card_stgga_103 ._CardListWrapper_stgga_215 ._CardList_stgga_215 ._ListItem_stgga_219 {
                          padding-bottom: 1.6vw
                      }

                      ._WhoYouWillMeetSection_stgga_76 ._FreePassCardWrapper_stgga_173 ._Card_stgga_103 ._CardListWrapper_stgga_215 ._CardList_stgga_215 ._ListItem_stgga_219 ._IconWrapper_stgga_230 img {
                          min-width: unset;
                          width: 1.4vw
                      }

                      ._WhoYouWillMeetSection_stgga_76 ._FreePassCardWrapper_stgga_173 ._Card_stgga_103 ._CardListWrapper_stgga_215 ._CardList_stgga_215 ._ListItem_stgga_219 ._ItemText_stgga_237 {
                          font-size: 1.11vw
                      }

                      ._WhoYouWillMeetSection_stgga_76 ._FreePassCardWrapper_stgga_173 ._Card_stgga_103 ._CardButton_stgga_241 {
                          display: none
                      }
                  }

                  @media (min-width: 1440px) {
                      ._WhoYouWillMeetSection_stgga_76 ._SwiperWrapper_stgga_97 ._Swiper_stgga_97 ._SwiperSlide_stgga_103 ._Card_stgga_103 ._Title_stgga_112 {
                          margin-top:5.347vw
                      }

                      ._WhoYouWillMeetSection_stgga_76 ._LogosWrapper_stgga_144 {
                          padding-inline:10.417vw;padding-bottom: 6.042vw
                      }

                      ._WhoYouWillMeetSection_stgga_76 ._LogosWrapper_stgga_144 ._LogosTitle_stgga_147 {
                          margin-top: 8.125vw;
                          margin-bottom: 1.597vw
                      }

                      ._WhoYouWillMeetSection_stgga_76 ._FreePassCardWrapper_stgga_173 ._Card_stgga_103 ._TitleWrapper_stgga_184 ._Title_stgga_112 {
                          font-style: normal;
                          font-weight: 700;
                          line-height: normal;
                          letter-spacing: .208vw;
                          text-align: start
                      }

                      ._WhoYouWillMeetSection_stgga_76 ._FreePassCardWrapper_stgga_173 ._Card_stgga_103 ._TitleWrapper_stgga_184 ._Title_stgga_112 ._UnderLine_stgga_209 {
                          border-bottom: .139vw solid #fff
                      }
                  }

                  *,*:before,*:after {
                      box-sizing: border-box
                  }

                  * {
                      margin: 0;
                      padding: 0;
                      font: inherit
                  }

                  ul[role=list],ol[role=list] {
                      list-style: none
                  }

                  html:focus-within {
                      scroll-behavior: smooth
                  }

                  html,body {
                      height: 100%
                  }

                  a:not([class]) {
                      text-decoration-skip-ink: auto
                  }

                  video,svg,img,picture {
                      max-width: 100%;
                      display: block
                  }

                  button {
                      cursor: pointer
                  }

                  @media (prefers-reduced-motion: reduce) {
                      html:focus-within {
                          scroll-behavior: auto
                      }

                      *,*:before,*:after {
                          animation-duration: .01ms!important;
                          animation-iteration-count: 1!important;
                          transition-duration: .01ms!important;
                          scroll-behavior: auto!important
                      }
                  }

                  body {
                      font-family: Plus Jakarta Sans;
                      font-size: 16px
                  }

                  ._TestimonialsSection_139ev_76 {
                      padding: 50px 0 50px 20px;
                      border-top: .5px solid #4e4e4e;
                      border-bottom: .5px solid #4e4e4e;
                      background: #eaeaea;
                      margin: 0
                  }

                  ._TestimonialsSection_139ev_76 * {
                      padding: 0;
                      margin: 0;
                      box-sizing: border-box
                  }

                  ._TestimonialsSection_139ev_76 ._TestimonialsWrapper_139ev_88 {
                      width: 100%;
                      height: 373px;
                      overflow: hidden
                  }

                  ._TestimonialsSection_139ev_76 ._TestimonialsWrapper_139ev_88 ._TestimonialsList_139ev_93 {
                      width: 100%;
                      display: table;
                      table-layout: fixed;
                      margin: 0;
                      padding: 0;
                      background: #111617
                  }

                  ._TestimonialsSection_139ev_76 ._TestimonialsWrapper_139ev_88 ._TestimonialsList_139ev_93 ._ListItem_139ev_101 {
                      display: table-cell;
                      vertical-align: bottom;
                      position: relative;
                      width: 16.666%;
                      height: 373px;
                      background-repeat: no-repeat;
                      background-position: center center;
                      transition: all .5s ease
                  }

                  ._TestimonialsSection_139ev_76 ._TestimonialsWrapper_139ev_88 ._TestimonialsList_139ev_93 ._ListItem_139ev_101._Active_139ev_111 {
                      width: 45%
                  }

                  ._TestimonialsSection_139ev_76 ._TestimonialsWrapper_139ev_88 ._TestimonialsList_139ev_93 ._ListItem_139ev_101._Active_139ev_111 ._ItemContent_139ev_114 {
                      padding: 50px 20px 0
                  }

                  ._TestimonialsSection_139ev_76 ._TestimonialsWrapper_139ev_88 ._TestimonialsList_139ev_93 ._ListItem_139ev_101._Active_139ev_111 ._ItemContent_139ev_114 * {
                      transition: all .2s ease;
                      opacity: 1;
                      transform: translate(0)
                  }

                  ._TestimonialsSection_139ev_76 ._TestimonialsWrapper_139ev_88 ._TestimonialsList_139ev_93 ._ListItem_139ev_101._Active_139ev_111 ._ItemContent_139ev_114 ._LogoWrapper_139ev_122 {
                      background-repeat: no-repeat;
                      background-position: 50%;
                      background-size: contain;
                      display: flex;
                      justify-content: center;
                      align-items: center;
                      width: 111px;
                      height: 101px;
                      border: 1px solid rgba(255,255,255,.2);
                      left: 77px;
                      opacity: 1
                  }

                  ._TestimonialsSection_139ev_76 ._TestimonialsWrapper_139ev_88 ._TestimonialsList_139ev_93 ._ListItem_139ev_101._Active_139ev_111 ._ItemContent_139ev_114 ._LogoWrapper_139ev_122 img {
                      height: 87px;
                      width: 97px;
                      object-fit: contain
                  }

                  ._TestimonialsSection_139ev_76 ._TestimonialsWrapper_139ev_88 ._TestimonialsList_139ev_93 ._ListItem_139ev_101 ._ItemContent_139ev_114 {
                      overflow: hidden;
                      display: flex;
                      flex-direction: column;
                      height: 373px;
                      width: 100%;
                      z-index: 3;
                      padding-top: 50px;
                      transition: all .2s ease;
                      flex: 1;
                      position: relative
                  }

                  ._TestimonialsSection_139ev_76 ._TestimonialsWrapper_139ev_88 ._TestimonialsList_139ev_93 ._ListItem_139ev_101 ._ItemContent_139ev_114 * {
                      opacity: 0;
                      margin: 0;
                      -webkit-transition: all .4s ease;
                      transition: all .4s ease
                  }

                  ._TestimonialsSection_139ev_76 ._TestimonialsWrapper_139ev_88 ._TestimonialsList_139ev_93 ._ListItem_139ev_101 ._ItemContent_139ev_114 ._LogoWrapper_139ev_122 {
                      background-repeat: no-repeat;
                      background-position: 50%;
                      background-size: contain;
                      opacity: .5;
                      display: flex;
                      width: 60px;
                      height: 54px;
                      border: 1px solid rgba(255,255,255,.2);
                      align-self: center;
                      position: absolute;
                      left: 50%;
                      transform: translate(-50%);
                      transition: left .5s ease
                  }

                  ._TestimonialsSection_139ev_76 ._TestimonialsWrapper_139ev_88 ._TestimonialsList_139ev_93 ._ListItem_139ev_101 ._ItemContent_139ev_114 ._LogoWrapper_139ev_122 img {
                      opacity: 1;
                      width: 59px;
                      height: 53px;
                      object-fit: contain
                  }

                  ._TestimonialsSection_139ev_76 ._TestimonialsWrapper_139ev_88 ._TestimonialsList_139ev_93 ._ListItem_139ev_101 ._ItemContent_139ev_114 ._MessageWrapper_139ev_180 {
                      margin-top: auto;
                      margin-bottom: 44px
                  }

                  ._TestimonialsSection_139ev_76 ._TestimonialsWrapper_139ev_88 ._TestimonialsList_139ev_93 ._ListItem_139ev_101 ._ItemContent_139ev_114 ._MessageWrapper_139ev_180 ._QuotationMarkWrapper_139ev_184 {
                      margin-top: 44px;
                      margin-bottom: 8px;
                      width: 26px;
                      height: 19px
                  }

                  ._TestimonialsSection_139ev_76 ._TestimonialsWrapper_139ev_88 ._TestimonialsList_139ev_93 ._ListItem_139ev_101 ._ItemContent_139ev_114 ._MessageWrapper_139ev_180 ._Message_139ev_180 {
                      color: #ffffffa3;
                      font-size: 13px;
                      font-style: normal;
                      font-weight: 400;
                      line-height: normal;
                      width: 150px
                  }

                  @media (min-width: 1024px) {
                      ._TestimonialsSection_139ev_76 {
                          padding:5.556vw 4.861vw 5.625vw
                      }

                      ._TestimonialsSection_139ev_76 ._TestimonialsWrapper_139ev_88,._TestimonialsSection_139ev_76 ._TestimonialsWrapper_139ev_88 ._TestimonialsList_139ev_93 ._ListItem_139ev_101 {
                          height: max(373px,25.903vw)
                      }

                      ._TestimonialsSection_139ev_76 ._TestimonialsWrapper_139ev_88 ._TestimonialsList_139ev_93 ._ListItem_139ev_101._Active_139ev_111 {
                          width: 83%
                      }

                      ._TestimonialsSection_139ev_76 ._TestimonialsWrapper_139ev_88 ._TestimonialsList_139ev_93 ._ListItem_139ev_101._Active_139ev_111 ._ItemContent_139ev_114 {
                          height: max(373px,25.903vw);
                          padding: 3.403vw 1.389vw 0px 3.611vw
                      }

                      ._TestimonialsSection_139ev_76 ._TestimonialsWrapper_139ev_88 ._TestimonialsList_139ev_93 ._ListItem_139ev_101._Active_139ev_111 ._ItemContent_139ev_114 ._LogoWrapper_139ev_122 {
                          width: 10.486vw;
                          height: 9.514vw;
                          left: 8.819vw;
                          opacity: 1
                      }

                      ._TestimonialsSection_139ev_76 ._TestimonialsWrapper_139ev_88 ._TestimonialsList_139ev_93 ._ListItem_139ev_101._Active_139ev_111 ._ItemContent_139ev_114 ._LogoWrapper_139ev_122 img {
                          width: 9.167vw;
                          height: 8.333vw;
                          object-fit: contain
                      }

                      ._TestimonialsSection_139ev_76 ._TestimonialsWrapper_139ev_88 ._TestimonialsList_139ev_93 ._ListItem_139ev_101._Active_139ev_111 ._ItemContent_139ev_114 ._MessageWrapper_139ev_180 {
                          margin-bottom: 3.681vw
                      }

                      ._TestimonialsSection_139ev_76 ._TestimonialsWrapper_139ev_88 ._TestimonialsList_139ev_93 ._ListItem_139ev_101 ._ItemContent_139ev_114 {
                          height: max(373px,25.903vw)
                      }

                      ._TestimonialsSection_139ev_76 ._TestimonialsWrapper_139ev_88 ._TestimonialsList_139ev_93 ._ListItem_139ev_101 ._ItemContent_139ev_114 ._LogoWrapper_139ev_122 {
                          width: 4.792vw;
                          height: 4.375vw
                      }

                      ._TestimonialsSection_139ev_76 ._TestimonialsWrapper_139ev_88 ._TestimonialsList_139ev_93 ._ListItem_139ev_101 ._ItemContent_139ev_114 ._LogoWrapper_139ev_122 img {
                          width: 4.792vw;
                          height: 4.375vw;
                          object-fit: contain
                      }

                      ._TestimonialsSection_139ev_76 ._TestimonialsWrapper_139ev_88 ._TestimonialsList_139ev_93 ._ListItem_139ev_101 ._ItemContent_139ev_114 ._MessageWrapper_139ev_180 ._Message_139ev_180 {
                          font-size: max(14px,1.25vw);
                          width: 43.194vw;
                          margin-top: 1.944vw
                      }
                  }

          </style>

          <style>
                      ._HorizontalMenu_1mbag_76 {
                    width: 100%;
                    background: transparent;
                    border: none!important;
                    color: #fff;
                    font-size: max(9px,.625vw)!important;
                    text-transform: uppercase!important
                }

                ._MenuItem_1mbag_85 {
                    text-transform: uppercase!important;
                    font-size: max(9px,.625vw)!important;
                    margin: 0!important;
                    padding: 0!important;
                    width: 100%!important
                }

                ._MenuItem_1mbag_85._SubMenuItem_1mbag_92 {
                    margin-block:8px!important}

                ._DropDownArrowIcon_1mbag_96 {
                    font-size: 8px!important;
                    margin-left: 4px!important
                }

                @media (min-width: 1024px) {
                    ._MenuItem_1mbag_85:after {
                        border:none!important
                    }
                }

                ._NavBar_1vqbc_76 {
                    display: flex;
                    width: 100%;
                    position: fixed;
                    z-index: 1010;
                    height: 90px;
                    transition: opacity .5s ease;
                    background-color: #0009;
                    -webkit-backdrop-filter: blur(9px);
                    backdrop-filter: blur(9px);
                    justify-content: space-between;
                    align-items: center;
                    font-family: Plus Jakarta Sans;
                    padding-inline:20px}

                ._NavBar_1vqbc_76 ._MobileMenuToggle_1vqbc_90 {
                    align-self: center
                }

                ._NavBar_1vqbc_76 ._LogoDatePlaceWrapper_1vqbc_93 {
                    display: flex;
                    align-items: flex-end
                }

                ._NavBar_1vqbc_76 ._LogoDatePlaceWrapper_1vqbc_93 img {
                    cursor: pointer;
                    max-height: unset;
                    width: 51px;
                    height: 53px
                }

                ._NavBar_1vqbc_76 ._LogoDatePlaceWrapper_1vqbc_93 ._DatePlaceWrapper_1vqbc_103 {
                    color: #fff;
                    font-size: 14px;
                    font-style: normal;
                    text-transform: uppercase;
                    margin-left: 27px
                }

                ._NavBar_1vqbc_76 ._LogoDatePlaceWrapper_1vqbc_93 ._DatePlaceWrapper_1vqbc_103 * {
                    padding: 0;
                    margin: 0;
                    box-sizing: border-box
                }

                ._NavBar_1vqbc_76 ._LogoDatePlaceWrapper_1vqbc_93 ._DatePlaceWrapper_1vqbc_103 ._Date_1vqbc_103 {
                    font-weight: 700;
                    letter-spacing: .28px
                }

                ._NavBar_1vqbc_76 ._LogoDatePlaceWrapper_1vqbc_93 ._DatePlaceWrapper_1vqbc_103 ._Place_1vqbc_119 {
                    font-weight: 400;
                    letter-spacing: .28px
                }

                ._HorizontalMenu_1vqbc_124 {
                    display: none!important
                }

                ._VerticalMenu_1vqbc_128 {
                    display: block!important;
                    font-size: 12px!important;
                    background: transparent;
                    color: #ddd
                }

                ._MenuItem_1vqbc_135 {
                    text-transform: uppercase!important;
                    font-size: 14px
                }

                ._MenuButtonWrapper_1vqbc_140 {
                    display: none
                }

                ._LanguageSelectorWrapper_1vqbc_144 {
                    margin-bottom: 12px
                }

                ._MenuItemButton_1vqbc_148 {
                    font-family: Plus Jakarta Sans!important;
                    width: 90%;
                    min-height: 38px;
                    border-radius: 5px!important;
                    border: 1px solid #fff;
                    color: #fff;
                    font-size: 14px;
                    font-weight: 700;
                    text-transform: uppercase;
                    background: transparent;
                    margin-top: 20px!important;
                    display: flex!important;
                    justify-content: center;
                    align-items: center;
                    align-self: center
                }

                ._MenuItemButton_1vqbc_148 span {
                    line-height: 20px
                }

                ._MenuItemButton_1vqbc_148._ActiveButton_1vqbc_168 {
                    color: #fff
                }

                ._MenuItemButton_1vqbc_148._ActiveButton_1vqbc_168 span {
                    border-bottom: 1px solid #fff;
                    line-height: 20px
                }

                ._MenuItemButton_1vqbc_148._Orange_1vqbc_175 {
                    margin-top: auto!important;
                    border: 1px solid #ff5000;
                    background-color: #ff5000
                }

                ._MenuItemIcon_1vqbc_180 {
                    display: inline-block!important
                }

                @media (min-width: 1200px) {
                    ._NavBar_1vqbc_76 {
                        padding-inline:30px;
                        justify-content: center;
                        height: 5.833vw
                    }

                    ._NavBar_1vqbc_76 ._LogoDatePlaceWrapper_1vqbc_93 {
                        align-items: flex-end;
                        margin-bottom: 0
                    }

                    ._NavBar_1vqbc_76 ._LogoDatePlaceWrapper_1vqbc_93 img {
                        width: 4.167vw;
                        height: 4.167vw
                    }

                    ._NavBar_1vqbc_76 ._LogoDatePlaceWrapper_1vqbc_93 ._DatePlaceWrapper_1vqbc_103 {
                        text-wrap: nowrap;
                        white-space: nowrap;
                        font-size: max(10px,.972vw);
                        margin-left: max(10px,2.1vw)
                    }

                    ._NavBar_1vqbc_76 ._MobileMenuToggle_1vqbc_90 {
                        display: none
                    }

                    ._HorizontalMenu_1vqbc_124 {
                        display: flex!important;
                        justify-content: flex-end;
                        background: transparent;
                        padding-right: 0!important;
                        font-size: 16px!important;
                        border: none!important;
                        width: 80%!important;
                        color: #fff;
                        font-size: max(11px,.972vw)!important;
                        text-transform: uppercase!important;
                        align-self: flex-end
                    }

                    ._VerticalMenu_1vqbc_128 {
                        display: none!important
                    }

                    ._MenuItem_1vqbc_135 {
                        text-transform: uppercase!important;
                        font-size: max(12px,.972vw)
                    }

                    ._MenuButtonWrapper_1vqbc_140 {
                        font-family: Plus Jakarta Sans!important;
                        display: flex;
                        align-self: flex-end
                    }

                    ._LanguageSelectorWrapper_1vqbc_144 {
                        align-self: flex-end;
                        margin-bottom: 0
                    }

                    ._MenuItemButton_1vqbc_148 {
                        font-size: max(10px,.972vw);
                        max-width: 10.903vw;
                        min-height: 2.639vw;
                        margin-top: 0!important;
                        margin-bottom: max(14px,.972vw)!important;
                        width: 9.861vw
                    }

                    ._MenuItemButton_1vqbc_148:hover {
                        background-color: transparent!important
                    }

                    ._MenuItemButton_1vqbc_148:hover span {
                        border-bottom: 1px solid #fff;
                        line-height: max(10px,.972vw)
                    }

                    ._MenuItemButton_1vqbc_148._ActiveButton_1vqbc_168 span {
                        line-height: 1.1vw
                    }

                    ._MenuItemButton_1vqbc_148._Orange_1vqbc_175 {
                        margin-right: max(10px,1.042vw)!important
                    }

                    ._MenuItemButton_1vqbc_148._Orange_1vqbc_175:hover {
                        background-color: #ff5000!important
                    }

                    ._MenuItemButton_1vqbc_148._Orange_1vqbc_175._es_1vqbc_260 {
                        min-height: 2.7vw;
                        width: 9.861vw
                    }

                    ._MenuItemButton_1vqbc_148._Orange_1vqbc_175._es_1vqbc_260 span {
                        line-height: 1.3vw;
                        white-space: normal;
                        word-wrap: break-word
                    }

                    ._MenuItemButton_1vqbc_148._Orange_1vqbc_175._pt_1vqbc_269 {
                        min-height: 2.7vw;
                        width: 9.861vw
                    }

                    ._MenuItemButton_1vqbc_148._Orange_1vqbc_175._pt_1vqbc_269 span {
                        line-height: 1.3vw;
                        white-space: normal;
                        word-wrap: break-word
                    }

                    ._MenuItemButton_1vqbc_148._es_1vqbc_260 {
                        min-height: 2.7vw;
                        width: 9.236vw
                    }

                    ._MenuItemButton_1vqbc_148._es_1vqbc_260._ActiveButton_1vqbc_168 span {
                        line-height: max(10px,1.3vw);
                        border-bottom: none;
                        text-decoration: underline
                    }

                    ._MenuItemButton_1vqbc_148._es_1vqbc_260 span {
                        line-height: 1.3vw;
                        white-space: normal;
                        word-wrap: break-word
                    }

                    ._MenuItemButton_1vqbc_148._es_1vqbc_260:hover span {
                        line-height: max(10px,1.3vw);
                        border-bottom: none;
                        text-decoration: underline
                    }

                    ._MenuItemButton_1vqbc_148._pt_1vqbc_269 {
                        min-height: 2.7vw;
                        width: 9.236vw
                    }

                    ._MenuItemButton_1vqbc_148._pt_1vqbc_269._ActiveButton_1vqbc_168 span {
                        line-height: max(10px,1.3vw);
                        border-bottom: none;
                        text-decoration: underline
                    }

                    ._MenuItemButton_1vqbc_148._pt_1vqbc_269 span {
                        line-height: 1.3vw;
                        white-space: normal;
                        word-wrap: break-word
                    }

                    ._MenuItemButton_1vqbc_148._pt_1vqbc_269:hover span {
                        line-height: max(10px,1.3vw);
                        border-bottom: none;
                        text-decoration: underline
                    }

                    ._DropDownArrowIcon_1vqbc_316 {
                        font-size: 8px!important;
                        margin-left: 4px!important
                    }
                }

                @media (min-width: 1440px) {
                    ._NavBar_1vqbc_76 {
                        padding-inline:max(30px,4.861vw)
                    }

                    ._HorizontalMenu_1vqbc_124 {
                        margin-right: .347vw
                    }
                }

                @media (min-width: 1920px) {
                    ._MenuItemButton_1vqbc_148 {
                        margin-bottom:.833vw!important
                    }
                }

                ._MainFooter_vlx90_76 {
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                    align-items: center;
                    background-color: #000;
                    margin: 0;
                    padding: 35px 20px 15px
                }

                ._MainFooter_vlx90_76 * {
                    padding: 0;
                    margin: 0;
                    box-sizing: border-box
                }

                ._MainFooter_vlx90_76 ._LogosWrapper_vlx90_90 {
                    cursor: pointer
                }

                ._MainFooter_vlx90_76 ._TitleIconsWrapper_vlx90_93 {
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                    align-items: center;
                    padding-top: 20px
                }

                ._MainFooter_vlx90_76 ._TitleIconsWrapper_vlx90_93 ._Title_vlx90_93 {
                    max-width: 215px;
                    color: #fff;
                    text-align: center;
                    font-size: 16px;
                    font-style: normal;
                    font-weight: 300;
                    line-height: normal;
                    letter-spacing: .8px;
                    text-transform: uppercase
                }

                ._MainFooter_vlx90_76 ._TitleIconsWrapper_vlx90_93 ._SocialIconWrapper_vlx90_111 {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    gap: 41px;
                    align-self: stretch;
                    margin-top: 48px;
                    margin-bottom: 34px
                }

                ._MainFooter_vlx90_76 ._TitleIconsWrapper_vlx90_93 ._SocialIconWrapper_vlx90_111 img {
                    width: 24px
                }

                ._MainFooter_vlx90_76 ._TermsWrapper_vlx90_123 {
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                    align-items: center
                }

                ._MainFooter_vlx90_76 ._TermsWrapper_vlx90_123 ._ListOfTerms_vlx90_129 {
                    display: flex;
                    list-style-type: none;
                    flex-direction: row;
                    color: #fff9;
                    text-align: center;
                    font-family: Helvetica;
                    font-size: 14px;
                    font-style: normal;
                    font-weight: 400;
                    line-height: 20px;
                    letter-spacing: .28px;
                    margin-bottom: 20px
                }

                ._MainFooter_vlx90_76 ._TermsWrapper_vlx90_123 ._ListOfTerms_vlx90_129._es_vlx90_144,._MainFooter_vlx90_76 ._TermsWrapper_vlx90_123 ._ListOfTerms_vlx90_129._pt_vlx90_144 {
                    font-size: 12px
                }

                ._MainFooter_vlx90_76 ._TermsWrapper_vlx90_123 ._ListOfTerms_vlx90_129 li:not(:last-child):after {
                    content: "|";
                    color: #fff9;
                    margin-left: 8px;
                    margin-right: 8px
                }

                ._MainFooter_vlx90_76 ._TermsWrapper_vlx90_123 ._ListOfTerms_vlx90_129 ._ListItem_vlx90_153 {
                    letter-spacing: .28px;
                    cursor: pointer
                }

                ._MainFooter_vlx90_76 ._TermsWrapper_vlx90_123 ._ListOfTerms_vlx90_129 ._ListItem_vlx90_153 a {
                    color: #fff9;
                    text-decoration: none
                }

                ._MainFooter_vlx90_76 ._TermsWrapper_vlx90_123 ._RightsReservedText_vlx90_161 {
                    color: #fff9;
                    font-family: Plus Jakarta Sans;
                    font-size: 12px;
                    font-style: normal;
                    font-weight: 300;
                    line-height: normal;
                    letter-spacing: .6px;
                    text-transform: uppercase
                }

                ._MainFooter_vlx90_76 ._TermsWrapper_vlx90_123 ._RightsReservedText_vlx90_161 span {
                    color: #fff9;
                    text-align: center;
                    font-family: Plus Jakarta Sans;
                    font-size: 12px;
                    font-style: normal;
                    font-weight: 300;
                    line-height: normal;
                    letter-spacing: .6px
                }

                ._MainFooter_vlx90_76 ._TermsWrapper_vlx90_123 ._RightsReservedText_vlx90_161._es_vlx90_144,._MainFooter_vlx90_76 ._TermsWrapper_vlx90_123 ._RightsReservedText_vlx90_161._es_vlx90_144 span {
                    font-size: 11px
                }

                @media (min-width: 1024px) {
                    ._MainFooter_vlx90_76 {
                        padding:4.861vw 4.861vw 1.458vw
                    }

                    ._MainFooter_vlx90_76 ._LogosWrapper_vlx90_90 {
                        align-self: flex-start
                    }

                    ._MainFooter_vlx90_76 ._LogosWrapper_vlx90_90 ._IfxLogo_vlx90_194 {
                        width: max(167px,11.597vw)
                    }

                    ._MainFooter_vlx90_76 ._TitleIconsWrapper_vlx90_93 {
                        display: flex;
                        flex-direction: row;
                        justify-content: space-between;
                        width: 100%;
                        padding-bottom: max(95px,6.597vw)
                    }

                    ._MainFooter_vlx90_76 ._TitleIconsWrapper_vlx90_93 ._Title_vlx90_93 {
                        max-width: unset;
                        font-size: max(16px,1.111vw);
                        letter-spacing: max(.8px,.056vw)
                    }

                    ._MainFooter_vlx90_76 ._TitleIconsWrapper_vlx90_93 ._SocialIconWrapper_vlx90_111 {
                        margin: 0;
                        gap: max(25px,1.736vw)
                    }

                    ._MainFooter_vlx90_76 ._TitleIconsWrapper_vlx90_93 ._SocialIconWrapper_vlx90_111 img {
                        width: max(15px,1.042vw)
                    }

                    ._MainFooter_vlx90_76 ._TermsWrapper_vlx90_123 {
                        display: flex;
                        flex-direction: row-reverse;
                        justify-content: space-between;
                        width: 100%
                    }

                    ._MainFooter_vlx90_76 ._TermsWrapper_vlx90_123 ._ListOfTerms_vlx90_129 {
                        margin: 0;
                        font-size: max(14px,.972vw);
                        line-height: max(20px,1.389vw);
                        letter-spacing: max(.28px,.019vw)
                    }

                    ._MainFooter_vlx90_76 ._TermsWrapper_vlx90_123 ._ListOfTerms_vlx90_129._es_vlx90_144,._MainFooter_vlx90_76 ._TermsWrapper_vlx90_123 ._ListOfTerms_vlx90_129._pt_vlx90_144 {
                        font-size: max(14px,.972vw)
                    }

                    ._MainFooter_vlx90_76 ._TermsWrapper_vlx90_123 ._ListOfTerms_vlx90_129 li:not(:last-child):after {
                        margin-left: max(8px,.556vw);
                        margin-right: max(8px,.556vw)
                    }

                    ._MainFooter_vlx90_76 ._TermsWrapper_vlx90_123 ._ListOfTerms_vlx90_129 ._ListItem_vlx90_153 {
                        cursor: pointer
                    }

                    ._MainFooter_vlx90_76 ._TermsWrapper_vlx90_123 ._RightsReservedText_vlx90_161,._MainFooter_vlx90_76 ._TermsWrapper_vlx90_123 ._RightsReservedText_vlx90_161 span {
                        font-size: max(12px,.833vw);
                        letter-spacing: max(.6px,.042vw)
                    }

                    ._MainFooter_vlx90_76 ._TermsWrapper_vlx90_123 ._RightsReservedText_vlx90_161._es_vlx90_144,._MainFooter_vlx90_76 ._TermsWrapper_vlx90_123 ._RightsReservedText_vlx90_161._es_vlx90_144 span {
                        font-size: max(12px,.833vw)
                    }
                }

                @media (min-width: 1440px) {
                    ._MainFooter_vlx90_76 ._TermsWrapper_vlx90_123 ._ListOfTerms_vlx90_129 ._ListItem_vlx90_153 {
                        cursor:pointer
                    }
                }

                *,*:before,*:after {
                    box-sizing: border-box
                }

                * {
                    margin: 0;
                    padding: 0;
                    font: inherit
                }

                ul[role=list],ol[role=list] {
                    list-style: none
                }

                html:focus-within {
                    scroll-behavior: smooth
                }

                html,body {
                    height: 100%
                }

                a:not([class]) {
                    text-decoration-skip-ink: auto
                }

                video,svg,img,picture {
                    max-width: 100%;
                    display: block
                }

                button {
                    cursor: pointer
                }

                @media (prefers-reduced-motion: reduce) {
                    html:focus-within {
                        scroll-behavior: auto
                    }

                    *,*:before,*:after {
                        animation-duration: .01ms!important;
                        animation-iteration-count: 1!important;
                        transition-duration: .01ms!important;
                        scroll-behavior: auto!important
                    }
                }

                body {
                    font-family: Plus Jakarta Sans;
                    font-size: 16px
                }

                .ant-segmented-thumb {
                    border-radius: 40px!important
                }

                .ant-segmented-item {
                    color: #808d9e!important;
                    border-radius: 40px!important;
                    margin-inline:9px!important}

                .ant-segmented .ant-segmented-item-selected {
                    color: #1d1e25!important
                }

                .ant-segmented .ant-segmented-item-label {
                    padding: 0!important
                }

                .ant-tabs {
                    font-family: Plus Jakarta Sans!important
                }

                .ant-tabs .ant-tabs-tab-btn {
                    color: #838383!important;
                    white-space: normal;
                    word-wrap: break-word;
                    max-width: 95px;
                    font-size: 18px;
                    font-weight: 600
                }

                .ant-tabs .ant-tabs-tab+.ant-tabs-tab {
                    margin: 0 0 0 36px
                }

                .ant-tabs .ant-tabs-tab.ant-tabs-tab-active .ant-tabs-tab-btn {
                    color: #000!important;
                    text-shadow: unset!important
                }

                .ant-tabs-top .ant-tabs-nav .ant-tabs-ink-bar {
                    height: 4px;
                    background: #000
                }

                .ant-tabs-top .ant-tabs-nav:before {
                    border-bottom: 4px solid #00000033!important
                }

                .ant-collapse>.ant-collapse-item>.ant-collapse-header {
                    padding: 0!important;
                    display: flex;
                    align-items: center
                }

                .ant-collapse-ghost>.ant-collapse-item>.ant-collapse-content>.ant-collapse-content-box {
                    padding: 0!important
                }

                .ant-drawer-close {
                    color: #fff!important
                }

                .ant-menu-light .ant-menu-submenu-title,.ant-menu-light .ant-menu-item {
                    color: #ddd
                }

                .ant-menu-light.ant-menu-submenu>.ant-menu,.ant-menu-light>.ant-menu.ant-menu-submenu>.ant-menu {
                    background: rgba(0,0,0);
                    -webkit-backdrop-filter: blur(9px);
                    backdrop-filter: blur(9px);
                    text-transform: uppercase;
                    color: #ddd;
                    margin-top: -10px;
                    border-radius: 0 0 10px 10px;
                    max-width: 12.708vw
                }

                .ant-menu-light.ant-menu-horizontal>.ant-menu-item-selected:after {
                    border-bottom-width: 1px
                }

                .ant-menu-light.ant-menu-horizontal>.ant-menu-item:after {
                    bottom: 13px
                }

                .ant-menu-submenu-popup .ant-menu-vertical .ant-menu-item {
                    line-height: 18px!important;
                    padding-inline:16px;overflow: hidden;
                    text-overflow: ellipsis;
                    margin-inline:4px;margin-block:17px;width: calc(100% - 8px)
                }

                .ant-menu-item .ant-menu-item-active .ant-menu-item-only-child {
                    text-decoration: underline!important
                }

                .ant-menu-submenu-popup .ant-menu-vertical .ant-menu-item:hover {
                    text-decoration: underline
                }

                .ant-menu-submenu-popup .ant-menu-vertical>.ant-menu-item {
                    white-space: normal;
                    height: auto
                }

                .ant-menu-light>.ant-menu .ant-menu-item-selected {
                    color: unset;
                    background-color: unset;
                    text-decoration: underline
                }

                .ant-select-multiple.ant-select-lg .ant-select-selector {
                    border: none;
                    border-bottom: 1px solid #8d8d8d;
                    border-radius: 0;
                    padding: 1px 4px 1px 0
                }

                .ant-select-multiple .ant-select-selection-placeholder {
                    inset-inline-start: 0px!important
                }

                .ant-select-multiple.ant-select-lg .ant-select-selection-search,.ant-select-multiple .ant-select-selection-search {
                    margin-inline-start:0px}

                .ant-select-single.ant-select-lg .ant-select-selector {
                    border: none;
                    border-bottom: 1px solid #8d8d8d;
                    border-radius: 0;
                    padding: 1px 4px 1px 0
                }

                .ant-select-single.ant-select-lg:not(.ant-select-customize-input) .ant-select-selector {
                    padding: 0
                }

                .ant-select-single.ant-select-lg .ant-select-selector .ant-select-selection-search {
                    inset-inline-start: 0px;
                    inset-inline-end: 0px
                }

                .ant-picker {
                    border: none;
                    border-bottom: 1px solid #8d8d8d;
                    font-weight: 400;
                    padding: 3px 11px 9px 0
                }

                @media (min-width: 768px) {
                    .ant-tabs .ant-tabs-tab-btn {
                        text-wrap:nowrap;
                        white-space: nowrap;
                        max-width: unset;
                        font-size: 20px;
                        font-weight: 600
                    }

                    .ant-tabs .ant-tabs-tab+.ant-tabs-tab {
                        margin: 0 0 0 32px
                    }
                }

                @media (min-width: 1024px) {
                    .ant-menu-horizontal {
                        line-height:max(46px,3.194vw)
                    }

                    .ant-tabs .ant-tabs-tab+.ant-tabs-tab {
                        margin: 0 0 0 2.222vw
                    }

                    .ant-tabs .ant-tabs-tab-btn {
                        font-size: 1.389vw!important
                    }

                    .ant-tabs .ant-tabs-tab {
                        padding: 1.667vw 0px!important
                    }

                    .ant-menu-horizontal .ant-menu-item,.ant-menu-horizontal .ant-menu-submenu {
                        padding-inline:max(10px,.694vw)}

                    .ant-menu-light.ant-menu-submenu>.ant-menu,.ant-menu-light>.ant-menu.ant-menu-submenu>.ant-menu {
                        font-size: max(11px,.972vw)
                    }

                    .ant-menu-light.ant-menu-horizontal>.ant-menu-submenu-active:after {
                        margin-left: -6px;
                        bottom: 25%;
                        border-bottom-width: 1px!important
                    }

                    .ant-menu-light.ant-menu-horizontal>.ant-menu-submenu-selected:after {
                        margin-left: -6px;
                        bottom: 25%;
                        border-bottom-width: 1px!important
                    }

                    .ant-menu-light.ant-menu-horizontal>.ant-menu-item-selected:after {
                        margin-left: -6px;
                        margin-right: -6px
                    }

                    .ant-menu-light.ant-menu-horizontal>.ant-menu-item-active:after {
                        margin-left: -6px;
                        margin-right: -6px;
                        border-bottom-width: 1px!important
                    }

                    .ant-menu-submenu-popup .ant-menu-vertical .ant-menu-item {
                        color: #ddd;
                        line-height: 1.25vw!important;
                        padding-inline:1.111vw;overflow: hidden;
                        text-overflow: ellipsis;
                        margin-inline:.278vw;margin-block:1.181vw;width: calc(100% - .5vw)
                    }

                    .ant-menu-light.ant-menu-horizontal>.ant-menu-item:after {
                        bottom: .903vw
                    }
                }

                @font-face {
                    font-family: swiper-icons;
                    src: url(data:application/font-woff;charset=utf-8;base64,\ d09GRgABAAAAAAZgABAAAAAADAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABGRlRNAAAGRAAAABoAAAAci6qHkUdERUYAAAWgAAAAIwAAACQAYABXR1BPUwAABhQAAAAuAAAANuAY7+xHU1VCAAAFxAAAAFAAAABm2fPczU9TLzIAAAHcAAAASgAAAGBP9V5RY21hcAAAAkQAAACIAAABYt6F0cBjdnQgAAACzAAAAAQAAAAEABEBRGdhc3AAAAWYAAAACAAAAAj//wADZ2x5ZgAAAywAAADMAAAD2MHtryVoZWFkAAABbAAAADAAAAA2E2+eoWhoZWEAAAGcAAAAHwAAACQC9gDzaG10eAAAAigAAAAZAAAArgJkABFsb2NhAAAC0AAAAFoAAABaFQAUGG1heHAAAAG8AAAAHwAAACAAcABAbmFtZQAAA/gAAAE5AAACXvFdBwlwb3N0AAAFNAAAAGIAAACE5s74hXjaY2BkYGAAYpf5Hu/j+W2+MnAzMYDAzaX6QjD6/4//Bxj5GA8AuRwMYGkAPywL13jaY2BkYGA88P8Agx4j+/8fQDYfA1AEBWgDAIB2BOoAeNpjYGRgYNBh4GdgYgABEMnIABJzYNADCQAACWgAsQB42mNgYfzCOIGBlYGB0YcxjYGBwR1Kf2WQZGhhYGBiYGVmgAFGBiQQkOaawtDAoMBQxXjg/wEGPcYDDA4wNUA2CCgwsAAAO4EL6gAAeNpj2M0gyAACqxgGNWBkZ2D4/wMA+xkDdgAAAHjaY2BgYGaAYBkGRgYQiAHyGMF8FgYHIM3DwMHABGQrMOgyWDLEM1T9/w8UBfEMgLzE////P/5//f/V/xv+r4eaAAeMbAxwIUYmIMHEgKYAYjUcsDAwsLKxc3BycfPw8jEQA/gZBASFhEVExcQlJKWkZWTl5BUUlZRVVNXUNTQZBgMAAMR+E+gAEQFEAAAAKgAqACoANAA+AEgAUgBcAGYAcAB6AIQAjgCYAKIArAC2AMAAygDUAN4A6ADyAPwBBgEQARoBJAEuATgBQgFMAVYBYAFqAXQBfgGIAZIBnAGmAbIBzgHsAAB42u2NMQ6CUAyGW568x9AneYYgm4MJbhKFaExIOAVX8ApewSt4Bic4AfeAid3VOBixDxfPYEza5O+Xfi04YADggiUIULCuEJK8VhO4bSvpdnktHI5QCYtdi2sl8ZnXaHlqUrNKzdKcT8cjlq+rwZSvIVczNiezsfnP/uznmfPFBNODM2K7MTQ45YEAZqGP81AmGGcF3iPqOop0r1SPTaTbVkfUe4HXj97wYE+yNwWYxwWu4v1ugWHgo3S1XdZEVqWM7ET0cfnLGxWfkgR42o2PvWrDMBSFj/IHLaF0zKjRgdiVMwScNRAoWUoH78Y2icB/yIY09An6AH2Bdu/UB+yxopYshQiEvnvu0dURgDt8QeC8PDw7Fpji3fEA4z/PEJ6YOB5hKh4dj3EvXhxPqH/SKUY3rJ7srZ4FZnh1PMAtPhwP6fl2PMJMPDgeQ4rY8YT6Gzao0eAEA409DuggmTnFnOcSCiEiLMgxCiTI6Cq5DZUd3Qmp10vO0LaLTd2cjN4fOumlc7lUYbSQcZFkutRG7g6JKZKy0RmdLY680CDnEJ+UMkpFFe1RN7nxdVpXrC4aTtnaurOnYercZg2YVmLN/d/gczfEimrE/fs/bOuq29Zmn8tloORaXgZgGa78yO9/cnXm2BpaGvq25Dv9S4E9+5SIc9PqupJKhYFSSl47+Qcr1mYNAAAAeNptw0cKwkAAAMDZJA8Q7OUJvkLsPfZ6zFVERPy8qHh2YER+3i/BP83vIBLLySsoKimrqKqpa2hp6+jq6RsYGhmbmJqZSy0sraxtbO3sHRydnEMU4uR6yx7JJXveP7WrDycAAAAAAAH//wACeNpjYGRgYOABYhkgZgJCZgZNBkYGLQZtIJsFLMYAAAw3ALgAeNolizEKgDAQBCchRbC2sFER0YD6qVQiBCv/H9ezGI6Z5XBAw8CBK/m5iQQVauVbXLnOrMZv2oLdKFa8Pjuru2hJzGabmOSLzNMzvutpB3N42mNgZGBg4GKQYzBhYMxJLMlj4GBgAYow/P/PAJJhLM6sSoWKfWCAAwDAjgbRAAB42mNgYGBkAIIbCZo5IPrmUn0hGA0AO8EFTQAA);
                    font-weight: 400;
                    font-style: normal
                }

                :root {
                    --swiper-theme-color: #007aff
                }

                :host {
                    position: relative;
                    display: block;
                    margin-left: auto;
                    margin-right: auto;
                    z-index: 1
                }

                .swiper {
                    margin-left: auto;
                    margin-right: auto;
                    position: relative;
                    overflow: hidden;
                    list-style: none;
                    padding: 0;
                    z-index: 1;
                    display: block
                }

                .swiper-vertical>.swiper-wrapper {
                    flex-direction: column
                }

                .swiper-wrapper {
                    position: relative;
                    width: 100%;
                    height: 100%;
                    z-index: 1;
                    display: flex;
                    transition-property: transform;
                    transition-timing-function: var(--swiper-wrapper-transition-timing-function, initial);
                    box-sizing: content-box
                }

                .swiper-android .swiper-slide,.swiper-ios .swiper-slide,.swiper-wrapper {
                    transform: translateZ(0)
                }

                .swiper-horizontal {
                    touch-action: pan-y
                }

                .swiper-vertical {
                    touch-action: pan-x
                }

                .swiper-slide {
                    flex-shrink: 0;
                    width: 100%;
                    height: 100%;
                    position: relative;
                    transition-property: transform;
                    display: block
                }

                .swiper-slide-invisible-blank {
                    visibility: hidden
                }

                .swiper-autoheight,.swiper-autoheight .swiper-slide {
                    height: auto
                }

                .swiper-autoheight .swiper-wrapper {
                    align-items: flex-start;
                    transition-property: transform,height
                }

                .swiper-backface-hidden .swiper-slide {
                    transform: translateZ(0);
                    -webkit-backface-visibility: hidden;
                    backface-visibility: hidden
                }

                .swiper-3d.swiper-css-mode .swiper-wrapper {
                    perspective: 1200px
                }

                .swiper-3d .swiper-wrapper {
                    transform-style: preserve-3d
                }

                .swiper-3d {
                    perspective: 1200px
                }

                .swiper-3d .swiper-slide,.swiper-3d .swiper-cube-shadow {
                    transform-style: preserve-3d
                }

                .swiper-css-mode>.swiper-wrapper {
                    overflow: auto;
                    scrollbar-width: none;
                    -ms-overflow-style: none
                }

                .swiper-css-mode>.swiper-wrapper::-webkit-scrollbar {
                    display: none
                }

                .swiper-css-mode>.swiper-wrapper>.swiper-slide {
                    scroll-snap-align: start start
                }

                .swiper-css-mode.swiper-horizontal>.swiper-wrapper {
                    scroll-snap-type: x mandatory
                }

                .swiper-css-mode.swiper-vertical>.swiper-wrapper {
                    scroll-snap-type: y mandatory
                }

                .swiper-css-mode.swiper-free-mode>.swiper-wrapper {
                    scroll-snap-type: none
                }

                .swiper-css-mode.swiper-free-mode>.swiper-wrapper>.swiper-slide {
                    scroll-snap-align: none
                }

                .swiper-css-mode.swiper-centered>.swiper-wrapper:before {
                    content: "";
                    flex-shrink: 0;
                    order: 9999
                }

                .swiper-css-mode.swiper-centered>.swiper-wrapper>.swiper-slide {
                    scroll-snap-align: center center;
                    scroll-snap-stop:always}

                .swiper-css-mode.swiper-centered.swiper-horizontal>.swiper-wrapper>.swiper-slide:first-child {
                    margin-inline-start:var(--swiper-centered-offset-before)}

                .swiper-css-mode.swiper-centered.swiper-horizontal>.swiper-wrapper: before {
                    height:100%;
                    min-height: 1px;
                    width: var(--swiper-centered-offset-after)
                }

                .swiper-css-mode.swiper-centered.swiper-vertical>.swiper-wrapper>.swiper-slide:first-child {
                    margin-block-start:var(--swiper-centered-offset-before)}

                .swiper-css-mode.swiper-centered.swiper-vertical>.swiper-wrapper: before {
                    width:100%;
                    min-width: 1px;
                    height: var(--swiper-centered-offset-after)
                }

                .swiper-3d .swiper-slide-shadow,.swiper-3d .swiper-slide-shadow-left,.swiper-3d .swiper-slide-shadow-right,.swiper-3d .swiper-slide-shadow-top,.swiper-3d .swiper-slide-shadow-bottom {
                    position: absolute;
                    left: 0;
                    top: 0;
                    width: 100%;
                    height: 100%;
                    pointer-events: none;
                    z-index: 10
                }

                .swiper-3d .swiper-slide-shadow {
                    background: rgba(0,0,0,.15)
                }

                .swiper-3d .swiper-slide-shadow-left {
                    background-image: linear-gradient(to left,rgba(0,0,0,.5),rgba(0,0,0,0))
                }

                .swiper-3d .swiper-slide-shadow-right {
                    background-image: linear-gradient(to right,rgba(0,0,0,.5),rgba(0,0,0,0))
                }

                .swiper-3d .swiper-slide-shadow-top {
                    background-image: linear-gradient(to top,rgba(0,0,0,.5),rgba(0,0,0,0))
                }

                .swiper-3d .swiper-slide-shadow-bottom {
                    background-image: linear-gradient(to bottom,rgba(0,0,0,.5),rgba(0,0,0,0))
                }

                .swiper-lazy-preloader {
                    width: 42px;
                    height: 42px;
                    position: absolute;
                    left: 50%;
                    top: 50%;
                    margin-left: -21px;
                    margin-top: -21px;
                    z-index: 10;
                    transform-origin: 50%;
                    box-sizing: border-box;
                    border: 4px solid var(--swiper-preloader-color, var(--swiper-theme-color));
                    border-radius: 50%;
                    border-top-color: transparent
                }

                .swiper:not(.swiper-watch-progress) .swiper-lazy-preloader,.swiper-watch-progress .swiper-slide-visible .swiper-lazy-preloader {
                    animation: swiper-preloader-spin 1s infinite linear
                }

                .swiper-lazy-preloader-white {
                    --swiper-preloader-color: #fff
                }

                .swiper-lazy-preloader-black {
                    --swiper-preloader-color: #000
                }

                @keyframes swiper-preloader-spin {
                    0% {
                        transform: rotate(0)
                    }

                    to {
                        transform: rotate(360deg)
                    }
                }

                .swiper-virtual .swiper-slide {
                    -webkit-backface-visibility: hidden;
                    transform: translateZ(0)
                }

                .swiper-virtual.swiper-css-mode .swiper-wrapper:after {
                    content: "";
                    position: absolute;
                    left: 0;
                    top: 0;
                    pointer-events: none
                }

                .swiper-virtual.swiper-css-mode.swiper-horizontal .swiper-wrapper:after {
                    height: 1px;
                    width: var(--swiper-virtual-size)
                }

                .swiper-virtual.swiper-css-mode.swiper-vertical .swiper-wrapper:after {
                    width: 1px;
                    height: var(--swiper-virtual-size)
                }

                :root {
                    --swiper-navigation-size: 44px
                }

                .swiper-button-prev.swiper-button-disabled,.swiper-button-next.swiper-button-disabled {
                    opacity: .35;
                    cursor: auto;
                    pointer-events: none
                }

                .swiper-button-prev.swiper-button-hidden,.swiper-button-next.swiper-button-hidden {
                    opacity: 0;
                    cursor: auto;
                    pointer-events: none
                }

                .swiper-navigation-disabled .swiper-button-prev,.swiper-navigation-disabled .swiper-button-next {
                    display: none!important
                }

                .swiper-button-prev svg,.swiper-button-next svg {
                    width: 100%;
                    height: 100%;
                    object-fit: contain;
                    transform-origin: center
                }

                .swiper-rtl .swiper-button-prev svg,.swiper-rtl .swiper-button-next svg {
                    transform: rotate(180deg)
                }

                .swiper-button-prev,.swiper-rtl .swiper-button-next {
                    left: var(--swiper-navigation-sides-offset, 10px);
                    right: auto
                }

                .swiper-button-lock {
                    display: none
                }

                .swiper-button-prev:after,.swiper-button-next:after {
                    font-family: swiper-icons;
                    font-size: var(--swiper-navigation-size);
                    text-transform: none!important;
                    letter-spacing: 0;
                    font-variant: initial;
                    line-height: 1
                }

                .swiper-button-prev:after,.swiper-rtl .swiper-button-next:after {
                    content: "prev"
                }

                .swiper-button-next,.swiper-rtl .swiper-button-prev {
                    right: var(--swiper-navigation-sides-offset, 10px);
                    left: auto
                }

                .swiper-button-next:after,.swiper-rtl .swiper-button-prev:after {
                    content: "next"
                }

                .swiper-pagination {
                    position: absolute;
                    text-align: center;
                    transition: .3s opacity;
                    transform: translateZ(0);
                    z-index: 10
                }

                .swiper-pagination.swiper-pagination-hidden {
                    opacity: 0
                }

                .swiper-pagination-disabled>.swiper-pagination,.swiper-pagination.swiper-pagination-disabled {
                    display: none!important
                }

                .swiper-pagination-fraction,.swiper-pagination-custom,.swiper-horizontal>.swiper-pagination-bullets,.swiper-pagination-bullets.swiper-pagination-horizontal {
                    bottom: var(--swiper-pagination-bottom, 8px);
                    top: var(--swiper-pagination-top, auto);
                    left: 0;
                    width: 100%
                }

                .swiper-pagination-bullets-dynamic {
                    overflow: hidden;
                    font-size: 0
                }

                .swiper-pagination-bullets-dynamic .swiper-pagination-bullet {
                    transform: scale(.33);
                    position: relative
                }

                .swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active,.swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-main {
                    transform: scale(1)
                }

                .swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-prev {
                    transform: scale(.66)
                }

                .swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-prev-prev {
                    transform: scale(.33)
                }

                .swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-next {
                    transform: scale(.66)
                }

                .swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-next-next {
                    transform: scale(.33)
                }

                .swiper-pagination-bullet {
                    width: var(--swiper-pagination-bullet-width, var(--swiper-pagination-bullet-size, 8px));
                    height: var(--swiper-pagination-bullet-height, var(--swiper-pagination-bullet-size, 8px));
                    display: inline-block;
                    border-radius: var(--swiper-pagination-bullet-border-radius, 50%);
                    background: var(--swiper-pagination-bullet-inactive-color, #000);
                    opacity: var(--swiper-pagination-bullet-inactive-opacity, .2)
                }

                button.swiper-pagination-bullet {
                    border: none;
                    margin: 0;
                    padding: 0;
                    box-shadow: none;
                    -webkit-appearance: none;
                    -moz-appearance: none;
                    appearance: none
                }

                .swiper-pagination-clickable .swiper-pagination-bullet {
                    cursor: pointer
                }

                .swiper-pagination-bullet:only-child {
                    display: none!important
                }

                .swiper-pagination-bullet-active {
                    opacity: var(--swiper-pagination-bullet-opacity, 1);
                    background: var(--swiper-pagination-color, var(--swiper-theme-color))
                }

                .swiper-vertical>.swiper-pagination-bullets,.swiper-pagination-vertical.swiper-pagination-bullets {
                    right: var(--swiper-pagination-right, 8px);
                    left: var(--swiper-pagination-left, auto);
                    top: 50%;
                    transform: translate3d(0,-50%,0)
                }

                .swiper-vertical>.swiper-pagination-bullets .swiper-pagination-bullet,.swiper-pagination-vertical.swiper-pagination-bullets .swiper-pagination-bullet {
                    margin: var(--swiper-pagination-bullet-vertical-gap, 6px) 0;
                    display: block
                }

                .swiper-vertical>.swiper-pagination-bullets.swiper-pagination-bullets-dynamic,.swiper-pagination-vertical.swiper-pagination-bullets.swiper-pagination-bullets-dynamic {
                    top: 50%;
                    transform: translateY(-50%);
                    width: 8px
                }

                .swiper-vertical>.swiper-pagination-bullets.swiper-pagination-bullets-dynamic .swiper-pagination-bullet,.swiper-pagination-vertical.swiper-pagination-bullets.swiper-pagination-bullets-dynamic .swiper-pagination-bullet {
                    display: inline-block;
                    transition: .2s transform,.2s top
                }

                .swiper-horizontal>.swiper-pagination-bullets .swiper-pagination-bullet,.swiper-pagination-horizontal.swiper-pagination-bullets .swiper-pagination-bullet {
                    margin: 0 var(--swiper-pagination-bullet-horizontal-gap, 4px)
                }

                .swiper-horizontal>.swiper-pagination-bullets.swiper-pagination-bullets-dynamic,.swiper-pagination-horizontal.swiper-pagination-bullets.swiper-pagination-bullets-dynamic {
                    left: 50%;
                    transform: translate(-50%);
                    white-space: nowrap
                }

                .swiper-horizontal>.swiper-pagination-bullets.swiper-pagination-bullets-dynamic .swiper-pagination-bullet,.swiper-pagination-horizontal.swiper-pagination-bullets.swiper-pagination-bullets-dynamic .swiper-pagination-bullet {
                    transition: .2s transform,.2s left
                }

                .swiper-horizontal.swiper-rtl>.swiper-pagination-bullets-dynamic .swiper-pagination-bullet {
                    transition: .2s transform,.2s right
                }

                .swiper-pagination-fraction {
                    color: var(--swiper-pagination-fraction-color, inherit)
                }

                .swiper-pagination-progressbar {
                    background: var(--swiper-pagination-progressbar-bg-color, rgba(0, 0, 0, .25));
                    position: absolute
                }

                .swiper-pagination-progressbar .swiper-pagination-progressbar-fill {
                    background: var(--swiper-pagination-color, var(--swiper-theme-color));
                    position: absolute;
                    left: 0;
                    top: 0;
                    width: 100%;
                    height: 100%;
                    transform: scale(0);
                    transform-origin: left top
                }

                .swiper-rtl .swiper-pagination-progressbar .swiper-pagination-progressbar-fill {
                    transform-origin: right top
                }

                .swiper-horizontal>.swiper-pagination-progressbar,.swiper-pagination-progressbar.swiper-pagination-horizontal,.swiper-vertical>.swiper-pagination-progressbar.swiper-pagination-progressbar-opposite,.swiper-pagination-progressbar.swiper-pagination-vertical.swiper-pagination-progressbar-opposite {
                    width: 100%;
                    height: var(--swiper-pagination-progressbar-size, 4px);
                    left: 0;
                    top: 0
                }

                .swiper-vertical>.swiper-pagination-progressbar,.swiper-pagination-progressbar.swiper-pagination-vertical,.swiper-horizontal>.swiper-pagination-progressbar.swiper-pagination-progressbar-opposite,.swiper-pagination-progressbar.swiper-pagination-horizontal.swiper-pagination-progressbar-opposite {
                    width: var(--swiper-pagination-progressbar-size, 4px);
                    height: 100%;
                    left: 0;
                    top: 0
                }

                .swiper-pagination-lock {
                    display: none
                }

                .swiper-scrollbar {
                    border-radius: var(--swiper-scrollbar-border-radius, 10px);
                    position: relative;
                    touch-action: none;
                    background: var(--swiper-scrollbar-bg-color, rgba(0, 0, 0, .1))
                }

                .swiper-scrollbar-disabled>.swiper-scrollbar,.swiper-scrollbar.swiper-scrollbar-disabled {
                    display: none!important
                }

                .swiper-horizontal>.swiper-scrollbar,.swiper-scrollbar.swiper-scrollbar-horizontal {
                    position: absolute;
                    left: var(--swiper-scrollbar-sides-offset, 1%);
                    bottom: var(--swiper-scrollbar-bottom, 4px);
                    top: var(--swiper-scrollbar-top, auto);
                    z-index: 50;
                    height: var(--swiper-scrollbar-size, 4px);
                    width: calc(100% - 2 * var(--swiper-scrollbar-sides-offset, 1%))
                }

                .swiper-vertical>.swiper-scrollbar,.swiper-scrollbar.swiper-scrollbar-vertical {
                    position: absolute;
                    left: var(--swiper-scrollbar-left, auto);
                    right: var(--swiper-scrollbar-right, 4px);
                    top: var(--swiper-scrollbar-sides-offset, 1%);
                    z-index: 50;
                    width: var(--swiper-scrollbar-size, 4px);
                    height: calc(100% - 2 * var(--swiper-scrollbar-sides-offset, 1%))
                }

                .swiper-scrollbar-drag {
                    height: 100%;
                    width: 100%;
                    position: relative;
                    background: var(--swiper-scrollbar-drag-bg-color, rgba(0, 0, 0, .5));
                    border-radius: var(--swiper-scrollbar-border-radius, 10px);
                    left: 0;
                    top: 0
                }

                .swiper-scrollbar-cursor-drag {
                    cursor: move
                }

                .swiper-scrollbar-lock {
                    display: none
                }

                .swiper-zoom-container {
                    width: 100%;
                    height: 100%;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    text-align: center
                }

                .swiper-zoom-container>img,.swiper-zoom-container>svg,.swiper-zoom-container>canvas {
                    max-width: 100%;
                    max-height: 100%;
                    object-fit: contain
                }

                .swiper-slide-zoomed {
                    cursor: move;
                    touch-action: none
                }

                .swiper .swiper-notification {
                    position: absolute;
                    left: 0;
                    top: 0;
                    pointer-events: none;
                    opacity: 0;
                    z-index: -1000
                }

                .swiper-free-mode>.swiper-wrapper {
                    transition-timing-function: ease-out;
                    margin: 0 auto
                }

                .swiper-grid>.swiper-wrapper {
                    flex-wrap: wrap
                }

                .swiper-grid-column>.swiper-wrapper {
                    flex-wrap: wrap;
                    flex-direction: column
                }

                .swiper-fade.swiper-free-mode .swiper-slide {
                    transition-timing-function: ease-out
                }

                .swiper-fade .swiper-slide {
                    pointer-events: none;
                    transition-property: opacity
                }

                .swiper-fade .swiper-slide .swiper-slide {
                    pointer-events: none
                }

                .swiper-fade .swiper-slide-active,.swiper-fade .swiper-slide-active .swiper-slide-active {
                    pointer-events: auto
                }

                .swiper-cube {
                    overflow: visible
                }

                .swiper-cube .swiper-slide {
                    pointer-events: none;
                    -webkit-backface-visibility: hidden;
                    backface-visibility: hidden;
                    z-index: 1;
                    visibility: hidden;
                    transform-origin: 0 0;
                    width: 100%;
                    height: 100%
                }

                .swiper-cube .swiper-slide .swiper-slide {
                    pointer-events: none
                }

                .swiper-cube.swiper-rtl .swiper-slide {
                    transform-origin: 100% 0
                }

                .swiper-cube .swiper-slide-active,.swiper-cube .swiper-slide-active .swiper-slide-active {
                    pointer-events: auto
                }

                .swiper-cube .swiper-slide-active,.swiper-cube .swiper-slide-next,.swiper-cube .swiper-slide-prev {
                    pointer-events: auto;
                    visibility: visible
                }

                .swiper-cube .swiper-cube-shadow {
                    position: absolute;
                    left: 0;
                    bottom: 0;
                    width: 100%;
                    height: 100%;
                    opacity: .6;
                    z-index: 0
                }

                .swiper-cube .swiper-cube-shadow:before {
                    content: "";
                    background: #000;
                    position: absolute;
                    left: 0;
                    top: 0;
                    bottom: 0;
                    right: 0;
                    filter: blur(50px)
                }

                .swiper-cube .swiper-slide-next+.swiper-slide {
                    pointer-events: auto;
                    visibility: visible
                }

                .swiper-cube .swiper-slide-shadow-cube.swiper-slide-shadow-top,.swiper-cube .swiper-slide-shadow-cube.swiper-slide-shadow-bottom,.swiper-cube .swiper-slide-shadow-cube.swiper-slide-shadow-left,.swiper-cube .swiper-slide-shadow-cube.swiper-slide-shadow-right {
                    z-index: 0;
                    -webkit-backface-visibility: hidden;
                    backface-visibility: hidden
                }

                .swiper-flip {
                    overflow: visible
                }

                .swiper-flip .swiper-slide {
                    pointer-events: none;
                    -webkit-backface-visibility: hidden;
                    backface-visibility: hidden;
                    z-index: 1
                }

                .swiper-flip .swiper-slide .swiper-slide {
                    pointer-events: none
                }

                .swiper-flip .swiper-slide-active,.swiper-flip .swiper-slide-active .swiper-slide-active {
                    pointer-events: auto
                }

                .swiper-flip .swiper-slide-shadow-flip.swiper-slide-shadow-top,.swiper-flip .swiper-slide-shadow-flip.swiper-slide-shadow-bottom,.swiper-flip .swiper-slide-shadow-flip.swiper-slide-shadow-left,.swiper-flip .swiper-slide-shadow-flip.swiper-slide-shadow-right {
                    z-index: 0;
                    -webkit-backface-visibility: hidden;
                    backface-visibility: hidden
                }

                .swiper-creative .swiper-slide {
                    -webkit-backface-visibility: hidden;
                    backface-visibility: hidden;
                    overflow: hidden;
                    transition-property: transform,opacity,height
                }

                .swiper-cards {
                    overflow: visible
                }

                .swiper-cards .swiper-slide {
                    transform-origin: center bottom;
                    -webkit-backface-visibility: hidden;
                    backface-visibility: hidden;
                    overflow: hidden
                }

                .swiper-grid-column>.swiper-wrapper {
                    flex-wrap: wrap;
                    flex-direction: row
                }

                .swiper-wrapper {
                    align-items: stretch
                }

                .swiper-button-prev,.swiper-button-next {
                    position: absolute;
                    top: var(--swiper-navigation-top-offset, 50%);
                    width: calc(var(--swiper-navigation-size) / 44 * 27);
                    height: var(--swiper-navigation-size);
                    margin-top: calc(0px - (var(--swiper-navigation-size) / 2));
                    z-index: 10;
                    cursor: pointer;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    color: var(--swiper-navigation-color, var(--swiper-theme-color))
                }

                .swiper-button-next:after {
                    font-size: 16px;
                    color: #cfcfcf;
                    display: none
                }

                .swiper-button-prev:after {
                    display: none
                }

                .swiper-pagination-bullet-active {
                    background: #000
                }

          </style>

          <style>
            #main-header{
              position :fixed;
              top: -100px;
              width:100%;
              background-color:#333;
              color:white;
              transition: top 0.3s ease;
              z-index:10;
            }
            .show-header {
              top:0;
            }
            .content{
              margin-top:100px;
            }
          </style>

          <div class="_NavBar_1vqbc_76" id="main-header">
              <div class="_LogoDatePlaceWrapper_1vqbc_93">
                  <img src="/assets/ifx-expo-6dde5c2a.svg" alt="iFX logo">
                  <div class="_DatePlaceWrapper_1vqbc_103">
                  <p class="_Date_1vqbc_103">9-11 APR 2024</p><p class="_Place_1vqbc_119">MEXICO CITY, MEXICO</p></div>
              </div>
              <ul class="ant-menu-overflow ant-menu ant-menu-root ant-menu-horizontal ant-menu-light _HorizontalMenu_1vqbc_124 css-jjxuhz" role="menu" tabindex="0" data-menu-list="true" style="font-family: Plus Jakarta Sans;">
                  <li class="ant-menu-overflow-item ant-menu-submenu ant-menu-submenu-horizontal _MenuItem_1vqbc_135" role="none" style="opacity: 1; order: 0;">
                      <div role="menuitem" class="ant-menu-submenu-title" tabindex="-1" aria-expanded="false" aria-haspopup="true" data-menu-id="rc-menu-uuid-60918-1-meet" aria-controls="rc-menu-uuid-60918-1-meet-popup"><span class="ant-menu-title-content">
                                  <div>
                                      <span>MEET</span>
                                      <span role="img" aria-label="down" class="anticon anticon-down _DropDownArrowIcon_1vqbc_316"><svg viewBox="64 64 896 896" focusable="false" data-icon="down" width="1em" height="1em" fill="currentColor" aria-hidden="true"><path d="M884 256h-75c-5.1 0-9.9 2.5-12.9 6.6L512 654.2 227.9 262.6c-3-4.1-7.8-6.6-12.9-6.6h-75c-6.5 0-10.3 7.4-6.5 12.7l352.6 486.1c12.8 17.6 39 17.6 51.7 0l352.6-486.1c3.9-5.3.1-12.7-6.4-12.7z"></path></svg></span>
                                  </div>
                          </span>
                          <i class="ant-menu-submenu-arrow"></i>
                  </div>
                  </li>

                  <li class="ant-menu-overflow-item ant-menu-item ant-menu-item-only-child _MenuItem_1vqbc_135" role="menuitem" tabindex="-1" data-menu-id="rc-menu-uuid-60918-1-agenda" style="opacity: 1; order: 1;"><span class="ant-menu-title-content"><a href="/en/agenda">AGENDA</a></span>
                  </li>

                  <li class="ant-menu-overflow-item ant-menu-submenu ant-menu-submenu-horizontal _MenuItem_1vqbc_135" role="none" style="opacity: 1; order: 2;">
                      <div role="menuitem" class="ant-menu-submenu-title" tabindex="-1" data-menu-id="rc-menu-uuid-60918-1-get-involved" aria-expanded="false" aria-haspopup="true" aria-controls="rc-menu-uuid-60918-1-get-involved-popup">
                      <span class="ant-menu-title-content">
                  
                          
                      <div>
                          <span>GET INVOLVED</span>

                          <span role="img" aria-label="down" class="anticon anticon-down _DropDownArrowIcon_1vqbc_316">
                              <svg viewBox="64 64 896 896" focusable="false" data-icon="down" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                  <path d="M884 256h-75c-5.1 0-9.9 2.5-12.9 6.6L512 654.2 227.9 262.6c-3-4.1-7.8-6.6-12.9-6.6h-75c-6.5 0-10.3 7.4-6.5 12.7l352.6 486.1c12.8 17.6 39 17.6 51.7 0l352.6-486.1c3.9-5.3.1-12.7-6.4-12.7z"></path></svg></span>
                      </div>
                      </span>
                      <i class="ant-menu-submenu-arrow"></i></div>
                  </li>
                  <li class="ant-menu-overflow-item ant-menu-item ant-menu-item-only-child _MenuItem_1vqbc_135" role="menuitem" tabindex="-1" data-menu-id="rc-menu-uuid-60918-1-traders-zone" style="opacity: 1; order: 3;"><span class="ant-menu-title-content"><a href="/en/traders-zone">TRADERS ZONE</a></span>
                  </li>
                  <li class="ant-menu-overflow-item ant-menu-item ant-menu-item-only-child _MenuItem_1vqbc_135" role="menuitem" tabindex="-1" data-menu-id="rc-menu-uuid-60918-1-about" style="opacity: 1; order: 4;"><span class="ant-menu-title-content"><a href="/en/about">ABOUT</a></span>
                  </li>
                  <li class="ant-menu-overflow-item ant-menu-submenu ant-menu-submenu-horizontal _MenuItem_1vqbc_135" role="none" style="opacity: 1; order: 5;">
                          <div role="menuitem" class="ant-menu-submenu-title" tabindex="-1" data-menu-id="rc-menu-uuid-60918-1-more" aria-expanded="false" aria-haspopup="true" aria-controls="rc-menu-uuid-60918-1-more-popup"><span class="ant-menu-title-content">
                          <div>
                              <span>MORE</span>
                              <span role="img" aria-label="down" class="anticon anticon-down _DropDownArrowIcon_1vqbc_316"><svg viewBox="64 64 896 896" focusable="false" data-icon="down" width="1em" height="1em" fill="currentColor" aria-hidden="true"><path d="M884 256h-75c-5.1 0-9.9 2.5-12.9 6.6L512 654.2 227.9 262.6c-3-4.1-7.8-6.6-12.9-6.6h-75c-6.5 0-10.3 7.4-6.5 12.7l352.6 486.1c12.8 17.6 39 17.6 51.7 0l352.6-486.1c3.9-5.3.1-12.7-6.4-12.7z"></path></svg></span>
                          </div>
                      </span>
                      <i class="ant-menu-submenu-arrow"></i></div>
                  </li>
                  <li class="ant-menu-overflow-item ant-menu-overflow-item-rest ant-menu-submenu ant-menu-submenu-horizontal ant-menu-submenu-disabled" aria-hidden="true" role="none" style="opacity: 0; height: 0px; overflow-y: hidden; order: 2147483647; pointer-events: none; position: absolute;">
                      <div role="menuitem" class="ant-menu-submenu-title" aria-expanded="false" aria-haspopup="true" data-menu-id="rc-menu-uuid-60918-1-rc-menu-more" aria-controls="rc-menu-uuid-60918-1-rc-menu-more-popup" aria-disabled="true"><span role="img" aria-label="ellipsis" class="anticon anticon-ellipsis"><svg viewBox="64 64 896 896" focusable="false" data-icon="ellipsis" width="1em" height="1em" fill="currentColor" aria-hidden="true"><path d="M176 511a56 56 0 10112 0 56 56 0 10-112 0zm280 0a56 56 0 10112 0 56 56 0 10-112 0zm280 0a56 56 0 10112 0 56 56 0 10-112 0z"></path></svg></span>
                      <i class="ant-menu-submenu-arrow"></i></div>
                  </li>
              </ul>
              <div aria-hidden="true" style="display: none;"></div>
          
              <div class="_MenuButtonWrapper_1vqbc_140"></div>
          
              <div class="_LanguageSelectorWrapper_1vqbc_144">
                <ul class="ant-menu ant-menu-root ant-menu-horizontal ant-menu-light _HorizontalMenu_1mbag_76 css-sj7gp7" role="menu" tabindex="0" data-menu-list="true" style="font-family: &quot;Plus Jakarta Sans&quot;;">
                          <li class="ant-menu-submenu ant-menu-submenu-horizontal _MenuItem_1mbag_85 ant-menu-submenu-selected" role="none" style="width: 53px;">
                              <div role="menuitem" class="ant-menu-submenu-title" tabindex="-1" aria-expanded="false" aria-haspopup="true" data-menu-id="rc-menu-uuid-60918-2-en" aria-controls="rc-menu-uuid-60918-2-en-popup"><span class="ant-menu-title-content">
                              <div role="img" aria-label="Flag for en" style="display: flex; align-items: baseline; justify-content: center; margin-left: 8px;">
                              <div style="width: 9px; height: 9px; margin-right: 2px;"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAPAAAADwCAYAAAA+VemSAAAACXBIWXMAACxLAAAsSwGlPZapAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAA05SURBVHgB7d1viJVVHsDx020gmnCyQqjmYiFsboFbRIGyIdtAr6bcsEFIM7NeNFMvtDczJisRLTXOvjBf1Iwvyv6YweJGa86bFnRZjFxWpNbFqAVRuVOCWP4Bd4Ok7u/WVce5M/c8z3POc87veb4fGC7NfXKGe8937r/znHPF/49O/HjV3JtNnl7cPN74KpIX1vQ2vtKoDY+aiY1jRpPuoX5TXTdg0tB+/991R9Xs3r7WzO7qtDr++2Nfmy8eeqpx6VK1fh9UfPzD7WQZ7EBIMcXbXf8DWvH1A9ohYmgTW7yi4vMHtSMBvzmy0gCxizFeUfH9A9t5om8RESNqscYrKpf/4IOLl5lzB780eSJixCrmeEXl8m+cP33WHKr/AkSMsosl3jmPLmkZr6i0+iYRo+xiinfe6y9Ne31luiuIGGWlJV5RmenKkBEf2LXe+gYEXNEUr6i0O6AZ8Zm9+02ekt6QQFba4hVtAxYSsfyiJ7bvNHkiYuTl1uoN6uIVVgE3HX52AxGjcGKJt3PB/ETxikQBCyJGkTTjlUsbPuO9/aM3TFKJAxYhI7a9oYF2ksb7wy8vJX3F23HtLJNUqoAFEUOzIsQrUgcsJOLjo9tMnpLe8MDl0sbr+uPUrPGKTAGLo+v/ZCY2jpo8ETHSKlK8InPAojY8RsSIXizxygo4LuIVTgIWRIyYFTFe4SxgQcSIUWzxulyDzmnAgogRkyLHK5wHLIgYMSh6vKLSPZRuadB2iBghpRkL2uIVleq6fkPEKJI0Y0DmNGiLVzSeQhMxiiJtvK5nFeYRr7jwGrioEcv0S5RD2eIVk97EKmbEzxFxCZQxXjHlXWjfER9bP2LyNLvraiIuuLLGK1p+jOQz4m9G32vceHki4uIqc7xi2s+BfUYsNx4RI6tY4pVpkSHilR0eZ5zIQcSIFfGOtw9YFDXihx+400Cn2OKVUwPzdOn+ylZTKYsY8Qdbnjar+hYa6JIm3trGsULGKyqnzpyz+h99R/zVY2sbc1HztHXkcSJWJG28E8NuP76MJV5R6Vn+qkkS8dyXB40P343vacxFJWK0IiuSEu/4lO9XPjtUM0kivmlghZn3WrK1a23JXFQixuViiVfEFK9ovAZOGvGc5UuIGLloxpvkkwNf8cqYjyleceFNrGbER2onjY2iRvzCml6DOMQWr4z5PLWLV0x6F5qITSNgIg6PeNvHK6Z8jCTxxhTxfxYvc76YdjtEHBbx2sUrWn4OHFPEvvaiaYeIwyBe+3jFtBM5iJiI81b2eN/e8WmieMWMM7GImIjzElO81aH+IPGuHnzXJNV2KiURE7FvscXbvc7PjMPppI1XWM2FJmIi9oV408crrNeFJmIido14s8UrEi3sTsRE7NKmPzxCvBkl3pmBiInYha0jK82qvkXWxxNva6m2ViFiIs5izer7ideR1HsjEfHPEb9ZfyRBMvLa1xbxzizT5mZEbMwT9UcSIvaDeNvLvDthmogX/OPPzjY4vlQzYtd73LQjEa9Z3WPgzvGx94jXgpPtRZNGLOdUutyl/FIS8aEAEcs6W3DjxPs7zdHn3W8AULR4hbP9gSXeux98uXFKog2fEZ8/fTZIxMhO4j38jPtFDkPEKy0898e/GJ+cbvB96sz/6o/Em4gYqfiKd86jS4LEm2SVm7ScBiyIGGn4jHfe637eOJ1OXvEK5wELIkYSxJuel4BFbBEfXLzM+eLeyI54s/EWsIgpYuFjew2kR7zZeQ1YEDFaIV43vAcsmhF/+LfPrY4n4mL7dny3l3hl3JQpXpFLwEIiXvr0lsYH2zaIuLh8vKHYHC95Ch2vyC3gJpmVQsRwyfc4aSWGeEXuAYvYIp7Y6H7OLfJR5nhFkIBFTBHXhseIWKGyxyuCBSyIGGmFiFfm+y/t3xJNvCJowIKIkdRVc28OEm+SM+7yEjxgkSZiuRONB0QcN+KdLIqAhURsu60EEZdTM15f93srMccroglYJNnYyfedScRxId7WogpYEDEuR7zTiy5gQcRoIt6ZRRmwIGIQb3vRBiyIuLyI107UAQsiLh/itRd9wCK2iGX+NPwg3mRUBCxiiljOYCJi94g3OTUBCyIuLuJNR1XAgoiLR6ZFEm866gIWRFwcxJuNyoBFbBEfH91mkEwzXpnbnpcixSs6tG9SLXfErdUb2h7XjPjE9r8aHzoX/NrATtd99zYur+/tyTVe8fd//tesemShKYorfqwzCKo2PFr/fHnMaNI91G+qOe83hKnUPoUGQMCAagQMKEbAgGIEDChGwIBiBAwoRsCAYgQMKEbAgGIEDChGwIBiBAwo1iFnwiCss5/sN9rI78zYCe+KfbN/w+mEgFI8hQYUI2BAMQIGFCNgQDECBhQjYEAxAgYUI2BAMQIGFCNgQDECBhQjYEAxAgYUI2BAMQIGFCNgQDECBhQjYEAxAgYUI2BAMQIGFCNgQDECBhQjYEAxAgYUI2BAMQIGFCNgQDECBhQjYEAxAgYUI2BAMQIGFCNgQDECBhQjYEAxAgYUI2BAMQIGFCNgQDECBhQjYEAxAgYU6+ge6jcI6+wn+82ZvfuNJl333WNm/fYeg7A6qusGDMKqDY+qC1jiZeyEx1NoQDECBhQjYEAxAgYUI2BAMQIGFCNgQDECBhQjYEAxAgYUI2BAMQIGFCNgQLGOFzePmyJYs/p+M7ur0+Tt2/Hd5tzBL03Xffc2TrFDe3Lm1Zm9/zKudC6Yb67v7bE+/q0d+8zRiZOmCAoR8NaRlUHiPfH+TnP4mQ0X/puA7Ui8ExvHjEvzXnvJzFm+xOrY3y38lelZPm6O1PRHrP4ptMS7qm+Rydvl8cLenOW/N1fNvdm4dPjZDfU/CqNWx95avcHs3r62camd6oCJVyeJ9/aP3nAecW14rHQRqw1404Y+4lWMiN1QGfALa3rrb1rZv2nhCvG6RcTZqQtY4pWvvBGvH7FEfGDXenPXHVWjjaqAibeYYoh4dtfV9Ufi59RFrCZg4i02Ik5HRcDEWw5EnFz0ARNvuRBxMlEHTLzlRMT2og2YeMuNiO1EGTDxQsQU8cMP3GliFF3AxItLNSO+ZsF845JEfGz9iNWxEvEHW542q/oWmthEFTDxohVfEX8z+l7jJAhbW0cejy7iaAImXszkymtneYn4xPadqiOOImDihQ0inip4wKHilVU0jj1v9xoI8SDiyYIGHDLeLx56yvxw+qyBPkR8UbCAixSvrMl048BjBvlpRnxdgrWwbEjEXz221np8hI44SMBFi1cGUkd9QCFfEvFt2zZZr4Vl67vxPYnGiUQc4vx0kXvAxAvXkixoZyvpeJEVYkKM61wDJl74EkPEIcZ3bgETL3wrY8S5BEy8yEvZIvYeMPEibxLxjf0rjEvN8fT9sa+tjs9r3HsNmHgRyi2vDJruoQHjUowRewuYeBFadV2/84gl3pgi9hIw8SIWRY/YecDEi9gUOWKnARMvYlXUiJ0FXOZ4PztUM5u37jGwc+rMORNCESN2EnDZ4+1Z/mqwQamR/LF7e8enJoSiRZw5YOIl3jRWD75LxA66yRRwkeKVdZdu2/Yq8eaIiLP3kzrgosWbZPnSI7WTZmn/FuJ1gIizdZQq4LLHK4+8cgk3iLjXvDmy0qSROGDiJV4fJOIXN4+bEGKI+Im+RakiThQw8RKvTxJwyIjnvjxoXJJ4Dy5e1hi/NtJEbB0w8RJvHkJGfNPAisaZTC6dr4/bQ/Xx6ytiq4BDxSt/wZIsMGaDeOMXMmI5l1hTxG0DDhlvktcQNohXDyK2i3jGgImXeEMi4vYRTxsw8RJvDIh45ohbBky8xBuT0BEnmaFnQyKWd6dlEXkbEvGBXevN7K7OKddNCZh4iTdGISO+rvd+L6eWyjYuthHfdUfV7N6+dkrEkwImXuKNWciIfZ0fnjXiCwETL/FqQMSTI24ETLzEqwkRX4y4QrzEqxER/xxxhXiJV6sYIrYdb7Yk4omNo1bHSsS5705IvHCpiBHXhsesI841YOKFDyEjTjr+bNlGnFvAxAufJOAnB98xIYSMOJeAiRd5eGvHvtJF7D1g4kWeyhax14CJFyGUKWJvARMvQipLxF4CjiFeWfKVeMutDBE7D5h4EZOiR+w04JjilZ0TACERL+0fC7IQv++InQVMvIjZhx//O9hWOD4jdhIw8UKDkPtZ+Yo4c8DEC01iiPiaBfONK5kCJl5oVKSIUwdMvNAsZMRXXjvLWcSpAiZeFEERIk4cMPGiSLRHnChg4kURyVi6+8FXgkz8yRqxdcDEiyILOW++GfF1vT0mKauAY4hXPDn4LvHCm9AR37ZtU2MniCTaBhxLvKsH3zEffvy5AXwKfQab7MWUJOIZA/YRb8cvTxeSxvv2jn0GyIOmiKcNmHhRZloibhmwz3g7E7zbRrwISUPEUwImXuCiGCK+sX/FtNdPCph4galCR3zLK4Ome2ig5XUXAiZeYHqhI66u628ZcSNg4gXaizHiCvEC9mKLuEK8QDIxRVwhXiC5WCL+Ceoq2mXMHgAuAAAAAElFTkSuQmCC" alt="Common.LanguagesShort.English" style="width: 9px; height: 9px;"></div>
                      <span style="font-size: 12px;">EN</span>
                      <span role="img" aria-label="down" class="anticon anticon-down _DropDownArrowIcon_1mbag_96"><svg viewBox="64 64 896 896" focusable="false" data-icon="down" width="1em" height="1em" fill="currentColor" aria-hidden="true"><path d="M884 256h-75c-5.1 0-9.9 2.5-12.9 6.6L512 654.2 227.9 262.6c-3-4.1-7.8-6.6-12.9-6.6h-75c-6.5 0-10.3 7.4-6.5 12.7l352.6 486.1c12.8 17.6 39 17.6 51.7 0l352.6-486.1c3.9-5.3.1-12.7-6.4-12.7z"></path></svg></span>
                  </div>
                      </span>
                      <i class="ant-menu-submenu-arrow"></i></div>
                      </li>

                          </ul>
                          <div aria-hidden="true" style="display: none;"></div>
              </div>
              
              <div class="_MobileMenuToggle_1vqbc_90">
                  <button type="button" class="ant-btn css-6n4eet ant-btn-default ant-btn-icon-only" style="background-color: transparent; color: rgba(255, 255, 255, 0.88); border-color: transparent; border-width: 2px; width: 40px; height: 40px;">
                      <span class="ant-btn-icon">
                      <span role="img" aria-label="menu" class="anticon anticon-menu" style="font-size: 20px;"><svg viewBox="64 64 896 896" focusable="false" data-icon="menu" width="1em" height="1em" fill="currentColor" aria-hidden="true"><path d="M904 160H120c-4.4 0-8 3.6-8 8v64c0 4.4 3.6 8 8 8h784c4.4 0 8-3.6 8-8v-64c0-4.4-3.6-8-8-8zm0 624H120c-4.4 0-8 3.6-8 8v64c0 4.4 3.6 8 8 8h784c4.4 0 8-3.6 8-8v-64c0-4.4-3.6-8-8-8zm0-312H120c-4.4 0-8 3.6-8 8v64c0 4.4 3.6 8 8 8h784c4.4 0 8-3.6 8-8v-64c0-4.4-3.6-8-8-8z"></path></svg>
                      </span>
                      </span>
                  </button>
              </div>
          </div>

          
          <section class="d-none d-sm-block position-relative bg-position-top-center bg-repeat-0 pt-5 pb-5 pt-md-7 pb-md-9">
            <div class="container">
              <div class="row">
                <div class="col-md-9">
                    

                @php
                  use Carbon\Carbon;
                  $startto = Carbon::parse ($event->startdate);
                  $endfrom = Carbon::parse ($event->enddate);
                  $now= carbon::now();
                  $name = $event->eventname;
                    $venue = $event->venue;
                    $city = $event->city;
                    $country = $event->country;
                    $link = Link::create($name, $startto , $endfrom)->description($name)->address($venue, $city, $country);
                @endphp

                @if ($now ->lt($startto))
                  <span class="badge rounded-pill bg-primary fs-xs mt-4">Upcoming</span>
                  <div class="">
                        <h5 class="text-dark fw-normal pt-2 pb-0">
                            @if(Carbon::parse ($event->startdate)->format('M') != Carbon::parse ($event->enddate)->format('M'))
                              {{Carbon::parse ($event->startdate)->format('D, d M')}} - {{Carbon::parse ($event->enddate)->format('D, d M Y')}}
                            @else
                              {{Carbon::parse ($event->startdate)->format('D, d ')}} - {{Carbon::parse ($event->enddate)->format('D, d M Y')}}
                            @endif 
                        </h5>
                  </div>
                @elseif($now->between($startto, $endfrom))
                      <span class="badge rounded-pill bg-primary fs-xs mt-4">Ongoing</span> 
                      <div class="">
                            <h5 class="text-dark fw-normal pt-2 pb-0">
                                @if(Carbon::parse ($event->startdate)->format('M') != Carbon::parse ($event->enddate)->format('M'))
                                  {{Carbon::parse ($event->startdate)->format('D, d M')}} - {{Carbon::parse ($event->enddate)->format('D, d M Y')}}
                                @else
                                  {{Carbon::parse ($event->startdate)->format('D, d ')}} - {{Carbon::parse ($event->enddate)->format('D, d M Y')}}
                                @endif 
                            </h5>
                      </div>
                @else
                      <span class="badge rounded-pill bg-primary fs-xs mt-4">Ended</span>
                @endif

                           
                      
                    
                  <div class="h1">{{$event->eventname}}</div>
                  <div class="">
                      <h5 class="text-dark fw-normal">{{ucwords(trans($event->venue))}}, {{ucwords(trans($event->city))}}, {{ucwords(trans($event->country))}} </h5></div>
                 
                  <div class="my-2 py-2"></div>
                 
                  <div class="row">
                    <style>
                      .custom-icon {
                        font-size: 1.1rem;
                        vertical-align: middle;
                        color: #3498db;
                      }
                      .stat-title {
                        font-size: 0.85rem;
                        color: #888;
                      }
                      .stat-value {
                        font-weight: bold;
                        font-size: 1.1rem;
                      }
                      .border-end:last-child {
                        border-right: none !important;
                      }
                    </style>

                    <!-- Stats Block -->
                    <div class="col-12 col-md-6 mb-3">
                      <div class="row g-0 text-center border rounded py-2">
                        <!-- Reviews -->
                        <div class="col-3 border-end">
                          <div class="stat-value">
                            {{ $commentedRates->count() }} <i class="bi bi-star-fill custom-icon"></i>
                          </div>
                          <div class="stat-title">Reviews</div>
                        </div>

                        <!-- Edition -->
                        <div class="col-3 border-end">
                          <div class="stat-value">
                            {{ $event->edition }} <i class="bi bi-patch-check-fill custom-icon"></i>
                          </div>
                          <div class="stat-title">Edition</div>
                        </div>

                        <!-- Visitors -->
                        @if(is_numeric($event->auidence) && $event->auidence > 0)
                          <div class="col-3 border-end">
                            <div class="stat-value">
                              {{ number_format(((float)$event->auidence / 1000), 1) . 'k' }}+
                            </div>
                            <div class="stat-title">Visitors</div>
                          </div>
                        @endif


                        <!-- Average Rating -->
                        <div class="col-3">
                          <div class="stat-value">
                            {{ round($commentedRates->avg('rate'), 1) }}
                          </div>
                          <div class="stat-title">Rated 3+</div>
                        </div>
                      </div>
                    </div>

                    
                  </div>


                  <div class="row">
                    <ul class="list-unstyled text-light">
                      <li class="d-flex">
                        <!-- <a class="btn btn-sm btn-primary mx-1" href="{{route('event.exhibit', ['board' => 'business'])}}">Plan to Visit</a> -->
                        <!-- updated calender --> check
                             {{$link->google()}}
                        <a class ="btn btn-sm btn-primary mx-1" href="#">Add to Calender</a> 
                        <a class="btn btn-sm btn-light" href=""> <i class=" fs-md fw-dark bi bi-share"></i> Share it</a>
                        <a class="btn btn-sm btn-light" href=""> <i class="bi bi-bookmark-plus-fill"></i>Add To whislist</a>
                      </li>
                    </ul>
                  </div>

                </div>
                <div class="col-md-3">
                  <style>
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

                    @media (min-width: 576px) {
                          .d-sm-block {
                              display: block !important;
                          }
                      }
                      .shadow {
                          --bs-box-shadow: 0px 0px 40px rgba(29, 58, 83, 0.1);
                          -webkit-box-shadow: var(--bs-box-shadow) !important;
                          box-shadow: var(--bs-box-shadow) !important;
                      }
                      .rounded-4 {
                          --bs-border-radius-xl: 0.6rem;
                          border-radius: var(--bs-border-radius-xl) !important;
                      }
                      .card-body {
                          -webkit-box-flex: 1;
                          -ms-flex: 1 1 auto;
                          flex: 1 1 auto;
                          padding: var(--bs-card-spacer-y) var(--bs-card-spacer-x);
                          color: var(--bs-card-color);
                      }
                      .dark-mode-item {
                          display: none !important;
                      }
                      .h-20px {
                          height: 20px !important;
                      }
                  </style>
                  <!-- new-top-additive -->
                  <!-- <div class="d-inline-block card card-body shadow rounded-4 position-absolute end-0 top-0 p-3 me-lg-n3 me-xxl-n7 mt-n5 d-none d-sm-block">
                    <img src="https://www.exhibition.org.in/public/image/trustpilot.svg" class="light-mode-item h-20px mb-2" alt="Client-img">
                    <img src="https://www.exhibition.org.in/public/image/trustpilot-light.svg" class="dark-mode-item h-20px mb-2" alt="Client-img">
                    <div class="d-flex align-items-center">
                      <img src="https://www.exhibition.org.in/public/image/trustpilot-star.svg" class="h-30px" alt="rating-img">
                      <h6 class="font-base fw-bold ms-1 mb-0">4.8/5.0</h6>
                    </div>
                    <p class="small mb-0 mt-2">Reviewed by 365 users</p>
                  </div> -->


                  <img class="p-1" width="230%" src="{{url('public/assets/image/exhibition/'.$event->image)}}"  alt="{{Str::limit($event->image, 24)}}">
                    
                  @php
                    $relativeevent = DB::table('events')->where('reference', $event->reference)->orderBy('startdate','desc')->limit(4)->get();
                    $countEvent = $relativeevent->count();
                    $pavillionmsmeactive = DB::table('pavillions')->where('event_id' , $event->id)->where('business', 'msme')->exists();
                    $pavillionstartupactive = DB::table('pavillions')->where('event_id' , $event->id)->where('business', 'startup')->exists();
                  @endphp

                    @if($countEvent > 1)
                            <div class="text-end">
                                <span class="badge rounded-pill bg-primary">Concurrent</span>
                                <p class="mb-1">Understanding Expo</p>
                                <hr class="mt-md-2 mb-2">

                                <div class="col text-end">
                                    <div class="stat-value d-flex flex-column align-items-end">
                                        <h6 class="text-dark mb-0">{{$event->view_count}}+</h6>
                                        <ul class="avatar-group mb-0 d-flex justify-content-end">
                                            @foreach($relativeevent as $rel)
                                                <li class="avatar avatar-xs ms-1">
                                                    <img class="avatar-img rounded-circle" src="https://www.exhibition.org.in/public/image/visi1.jpg" alt="avatar">
                                                </li>
                                            @endforeach
                                        
                                        </ul>
                                    </div>
                                </div>
                            </div>

                         @elseif($pavillionmsmeactive)
                            msme
                            <div class="text-end">
                                <span class="badge rounded-pill bg-primary">Membership</span>
                                <p class="mb-1">Register your  Brand</p>
                                <hr class="mt-md-2 mb-2">

                                <div class="col text-end">
                                    <div class="stat-value d-flex flex-column align-items-end">
                                        <h6 class="text-dark mb-0">5K+</h6>
                                        <ul class="avatar-group mb-0 d-flex justify-content-end">
                                            <p>Access Right place to artisan serve  approach right people at right time</p>
                                            <a href="" class="btn btn-primary">Activate</a>
                                        
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <span class="badge rounded-pill bg-primary"></span>
                            <p class="mb-1 text-right">See Who's Exhibit</p>
                        
                         @elseif($pavillionstartupactive)
                            startup
                            <div class="text-end">
                                <span class="badge rounded-pill bg-primary">Membership</span>
                                <p class="mb-1">Register your  Brand</p>
                                <hr class="mt-md-2 mb-2">

                                <div class="col text-end">
                                    <div class="stat-value d-flex flex-column align-items-end">
                                        <h6 class="text-dark mb-0">5K+</h6>
                                        <ul class="avatar-group mb-0 d-flex justify-content-end">
                                            <p>Access Right place to artisan serve  approach right people at right time</p>
                                            <a href="" class="btn btn-primary">Activate</a>
                                        
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <span class="badge rounded-pill bg-primary"></span>
                            <p class="mb-1 text-right">See Who's Exhibit</p>


                         @else
                            <div class="text-end">
                                <span class="badge rounded-pill bg-primary">Our Data, Your Customers</span>
                                <p class="mb-1">See Who's Exhibit</p>
                                <hr class="mt-md-2 mb-2">

                                <div class="col text-end">
                                    <div class="stat-value d-flex flex-column align-items-end">
                                        <small class="fw-bold">Explore. Connect. Grow. Find Exhibitors!</small>
                                        <small class="fs-xs fw-light mt-3"> Access verified exhibitor profiles, explore their offerings, and connect directly to discuss collaborations, partnerships, or bulk business deals — all in one place.</small>
                                        <ul class="avatar-group mb-0 d-flex justify-content-end">
                                            <a href="" class="btn btn-primary btn-sm">Download</a>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                    @endif
                </div>
              </div>
           </div>
          </section>

          <!--participants-->  
          <section class="container py-4 py-md-5 my-2 d-none d-sm-block">
            <div class="row text-center text-sm-start">
              <div class="col-lg-8 col-md-6 col-sm-8">
                  <ul class="list-unstyled fs-sm bg-secondary p-2">
                    {{-- <div class="fw-bold"> Click on interested to stay updated about this event.</div> -->

                    <li class="d-flex justify-content-between p-0 m-0">
                      <span class="text-dark fw-medium fs-sm">  
                      Add your rating & review <br><span class="text-muted fw-light fs-sm">Your ratings matter</span></span>
                  
                      @if( $rate == $event->id)
                      
                        <button class="btn btn-sm btn-outline-primary" type="button"> {{$rating}} /10</button>

                      @else
                          <div class="py-2 me-2"> 
                            <button class="btn btn-sm btn-outline-primary" type="button" ><i class="bi bi-star fs-lg me-2"></i> 
                            <a href="{{route('coi.ratenow',['slug' => $event->slug])}}">Rate Now</a> </button>
                          </div>
                      @endif --}}
                    
                    </li>

                    <li class="d-flex justify-content-between px-2 m-0 lh-1">
                      <span class="text-dark fw-medium fs-sm">  Become a Member <br><span class="text-muted fw-light fs-xs">Enjoy unlimited free registration for you and your guest(s) on every visit.</span></span>
                      <span><a href="{{route('coi.ratenow',['slug' => $event->slug])}}" class="btn btn-outline-primary btn-sm ">Join Today</a></span>
                    </li>
                  </ul>
              
                  
                <h5 class="mb-1">Understanding Expo</h5>
                <hr class="mt-md-2 mb-2">

                <style>
                    .categories-list {
                      display: flex;
                      overflow-x: auto;
                      padding: 5px;
                      gap: 5px;
                      white-space: nowrap;
                      scrollbar-width: none;
                    }

                    .categories-list::-webkit-scrollbar{
                      display: none;
                    }
                    
                    .category-badge {
                      flex: 0 0 auto;
                      padding: 4px 7px;
                      border-radius: 5px;
                      border: 1px solid #ccc ;
                      background-color: #fff;
                      
                      font-weight: 400;
                      text-align: center;
                      display: inline-block;
                      font-size: 14px;
                    }

                    .category-badge:hover {
                      background-color: black;
                      color: white;
                      
                    }

                </style>

              <div class="d-flex mb-3">
                <div class="categories-list">
                  <span>Industry</span> 
                    @foreach($category as $cat) 
                        <a class="category-badge" href="{{route ('coi.exhibitioncategory',['time' => 'upcoming','eventype' => 'exhibition', 'categry' => $cat->expo->slug])}}">{{$cat->expo->tag}}</a>
                    @endforeach
                </div>
              </div>
          
                <p class="fs-sm mb-3 mb-lg-4 pb-2">{{$event->shtdesc}}</p>
                
                <h5 class="mb-3">The Exhibition's Network</h5>

                      <!-- Card group -->
                      <!-- Card -->
                      <div class="row">
                        @foreach($pavillion as $pav)
                          <div class="col-4 card border-0 px-2">
                            <img src="{{url('assets/image/exhibition/'.$pav->image)}}" class="card-img-top" alt="Card image">
                          
                            <div class="card-image-overlay" >
                              <h5 class="card-title text-light">{{$pav -> pavillion_name}}</h5>
                              <p class="card-text fs-sm text-muted text-light">{{ $pav -> desc}}</p>
                            
                              <a href="#" class="text-primary text-light">Learn more</a>
                            </div>
                          </div>
                        @endforeach
                      </div>

                
                
                <div class="row">
                  <div class="col-6">
                      <h5 class="mb-3">Pre-request for space booking</h5>
                      <ul class="list-unstyled fs-sm mb-3 mb-lg-4 pb-1">
                        <li class="my-3 fs-sm fw-light">Update with your required space, budget before 3 months of exhibition start date, get special free and discounted deals</li>
                        <li><a href="{{route('event.exhibit', ['board'=> 'partner' ])}}" class="btn btn-sm btn-outline-primary">Partner with Space</a></li>
                      </ul>

                      <h5 class="mb-3">Our Data, Your Customers.</h5>
                      <ul class="list-unstyled fs-sm mb-3 mb-lg-4 pb-1">
                        <li class="my-3 fs-sm fw-light">Download the exhibitor, share your email to find exhibitor</li>
                        <li><a href="{{route('event.exhibit', ['board'=> 'partner' ])}}" class="btn btn-sm btn-outline-primary">Partner with Space</a></li>
                      </ul>

                      <h5 class="mb-3">Advertise</h5>
                      <ul class="list-unstyled fs-sm mb-3 mb-lg-4 pb-1">
                        <li class="my-3 fs-sm fw-light">Promote your product with your magazine The Exhibition Network distribute at airport, exhibition centre, goverment office and associations offices.</li>
                        <li><a href="{{route('event.exhibit', ['board'=> 'partner' ])}}" class="btn btn-sm btn-outline-primary">Advertise</a></li>
                      </ul>
                  </div>

                  <div class="col-6">
                    <h5 class="mb-3">Expo Initiatives</h5>
                    <ul class="list-unstyled fs-sm mb-3 mb-lg-4 pb-1">
                      <li class="my-3 fs-sm fw-light">Togethor with people from across the world, we are creating meaningful impact through a range of Expo programmes and initiatives. </li>
                      <li><!-- No image -->
                        <div class="card ">
                          <div class="expo_Initiatives">
                                <div class="card-body ">
                                  <h5 class="card-title">Expo live</h5>
                                  <p class="card-text fs-sm text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="#" class="btn btn-sm btn-primary">Go somewhere</a>
                                </div>

                                <div class="card-body">
                                  <h5 class="card-title">Global Best Practice Programme</h5>
                                  <p class="card-text fs-sm text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="#" class="btn btn-sm btn-primary">Go somewhere</a>
                                </div>

                                <div class="card-body">
                                  <h5 class="card-title">Start-up Program</h5>
                                  <p class="card-text fs-sm text-muted">This unique program for small, emerging companies allows you the opportunity to introduce your new products, tools, and services to a large audience.</p>
                                  <p class="card-text fs-sm text-muted">The Start-up Program gives you exposure for all three days of the expo floor with a dedicated booth space, including four (4) registrations for your personnel, giving you a home base to conduct meetings with an extensive network of clean energy professionals.</p>
                                  <a href="#" class="btn btn-sm btn-primary">Register with us.</a>
                                </div>

                                <div class="card-body">
                                  <h5 class="card-title">MSME Program</h5>
                                  <p class="card-text fs-sm text-muted">This unique program for small, emerging companies allows you the opportunity to introduce your new products, tools, and services to a large audience.</p>
                                  <p class="card-text fs-sm text-muted">The Start-up Program gives you exposure for all three days of the expo floor with a dedicated booth space, including four (4) registrations for your personnel, giving you a home base to conduct meetings with an extensive network of clean energy professionals.</p>
                                  <a href="#" class="btn btn-sm btn-primary">Register with us.</a>
                                </div>

                               
                          </div>
                        </div>
                      </li>
                    </ul>

                  </div>
                </div>
                

              </div>

              
              <div class="col-lg-4 col-md-4 col-sm-4">
                
                {{--<h5 class="m-3 fs-sm fw-light">Universal Register Now for a Seamless Expo Experience - Choose Your Event and Skip the Lines!      
                <br><small>Register online for your Chosen expo and get instant, queue-less entry with a unique QR code.</small>
                <span class="fw-bold text-primary">Skip the Lines</span></h5> --}}

                <section class="container mb-5">
                  <div class="list-unstyled pt-2 pb-0 px-0 pl-0">
                        <div class="d-flex justify-content-between px-0 m-0 lh-1 ">
                          <span class="fs-sm">Upcoming<br><span class="fw-medium h5">Event</span></span>
                          <a class="btn btn-outline-primary btn-sm" href="#">Submit event</a>
                            <!-- <a class="btn btn-outline-primary btn-sm dropdown-toggle" href="#">Submit event</a>
                            <ul class="dropdown-menu" width="auto">
                                  <li><a class="dropdown-item" href="{{route('coi.exhibition', ['eventype' => 'expo'])}}">More</a></li>
                                  <li><a class="dropdown-item" href="#">Exhibit</a></li>
                                  <li><a class="dropdown-item" href="{{route('coievent.add', ['board' => 'add-your-event'])}}">Add Event</a></li>
                                  <li><a class="dropdown-item" href="{{route('coievent.add', ['board' => 'add-your-event'])}}">Add Event</a></li>        
                                </ul> -->
                          </span>
                        </div>
                  </div>
                  @php
                    $evento = DB::table('events')->where('admstatus','1')->where('status','1')->where('eventype','expo')->wheredate('startdate', '>=' , $mytime)->orderBy('startdate','ASC')->limit(10)->get();
                  @endphp
                  <div class="row g-0 py-0 mx-n2 mt-2"> 
                    {{-- px-2 mb-1 --}}
                    @foreach ($evento as $franchise)
                      <div class="container" >
                          <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
                            <div class="col  pr-0">
                                @if(Carbon::parse ($franchise->startdate)->format('M') != Carbon::parse ($franchise->enddate)->format('M'))
                                    <div class="h4 fw-light mb-0"> {{Carbon::parse ($franchise->startdate)->format('d')}}</div> 
                                    <div class="small text-muted">{{Carbon::parse ($franchise->startdate)->format('M')}} </div>
                                  @else
                                    <div class="h4 fw-light mb-0"> {{Carbon::parse ($franchise->startdate)->format('d')}}</div> 
                                    <div class="small text-muted text-capitalize">{{Carbon::parse ($franchise->startdate)->format('M')}} </div>

                                @endif 
                               
                                @php 
                                  $from = DateTime::createFromFormat('Y-m-d H:i:s', $franchise->startdate . ' 10:00:00');
                                  $to   = DateTime::createFromFormat('Y-m-d H:i:s', $franchise->enddate . ' 17:00:00');

                                  $name = $franchise->eventname;
                                  $venue = $franchise->venue;
                                  $city = $franchise->city;
                                  $country = $franchise->country;
                                  $link = Link::create($name, $from , $to)->description($name)->address($venue, $city, $country);
                                  
                                @endphp
                                  <!-- testing -->
                                    <a href="{{$link->google()}}"><div class=" round-circle"><i class="bi bi-bookmark"></i></div> </a>
                            </div>

                            <div class="col-7  p-0">
                              <div class="fs-md fw-normal text-start"><a class="text-dark" href="{{route('event.details',['slug' => $franchise->slug])}}">
                                {{ucwords(trans(Str::limit($franchise->eventname, 24)))}}</a></div>
                              <div class="text-muted fs-sm text-start">
                                @if(Carbon::parse ($franchise->startdate)->format('M') != Carbon::parse ($franchise->enddate)->format('M'))
                                  {{Carbon::parse ($franchise->startdate)->format('D, d M')}} - {{Carbon::parse ($franchise->enddate)->format('D, d M')}}
                                @else
                                  {{Carbon::parse ($franchise->startdate)->format('D, d ')}} - {{Carbon::parse ($franchise->enddate)->format('D, d M')}}
                                @endif 
                              </div>  
                              <div class="text-muted fs-sm text-start">{{ucfirst(trans($franchise->venue))}}, {{ucfirst(trans($franchise->city))}}</div>
                            </div>

                            <div class="col-3  p-0">
                              <a class="card-img-top d-block overflow-hidden" href="#" wire:click.prevent = "selectItem('{{$franchise->id}}')">
                                  <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}"></a>
                            </div>
                          </div>  
                      </div>
                    @endforeach
                  </div>
                </section>
                
              </div>
            </div>
          </section>

          <section class="container py-5 d-none d-sm-block">                    
            <div class="card-group" >

                <div class="card border-0">
                    {{-- <img src="https://source.unsplash.com/1600x900/?Switzerland, office" class="card-img-top" alt="Card image"> --}}
                    <div class="card-body">
                    <div class="card-title text-primary fs-md">Find Business</div>
                    <p class="card-text fs-sm fw-light">Looking to partner with the right exhibitors for your event or business? Our Service connects you with a comprehensive exhibtor profiles. Find the perfect match for your needs whether you're organizing an event or seeking collaboration opportunities.</p>
                    <a href="{{route('event.exhibit', ['board' => 'business'])}}" class="btn btn-sm btn-primary">Get Directory</a>
                    </div>
                </div>

            </div>
          </section>

          <section class="container py-5 d-none d-sm-block">                    
            <div class="card-group" >

                <div class="card border-0">
                    {{-- <img src="https://source.unsplash.com/1600x900/?Switzerland, office" class="card-img-top" alt="Card image"> --}}
                    <div class="card-body">
                    <div class="card-title text-primary fs-md">why Network with us?</div>
                    <p class="card-text fs-sm fw-light">Introduce your business to 40,000 attendees and 30+ media outlets at North America’s largest energy event. Find new customers, get media attention, and build your network of clean energy thought leaders from leading companies.
                        <br>
                        The Start-up Program gives you exposure for all three days of the expo floor with a dedicated booth space, including four (4) registrations for your personnel, giving you a home base to conduct meetings with an extensive network of clean energy professionals.
                    </p>
                    <a href="{{route('event.exhibit', ['board' => 'business'])}}" class="btn btn-sm btn-primary">Get Membership</a>
                    </div>
                </div>

            </div>
          </section>

          <!-- mobile -->
          <section class=" d-lg-none bg-position-top-center bg-repeat-0 pt-0 pb-5 pt-md-7 pb-md-10" data-bs-theme="light">
            <!-- <section class=" d-lg-none bg-position-top-center bg-repeat-0 pt-0 pb-5 pt-md-7 pb-md-10" style="background-image: url('{{asset('/image/test.jpg')}}');"> -->
            
            <div class="container  mb-lg-0 bg-primary">
              <div class="d-flex justify-content-between py-2">

                      <i class="bi bi-list text-color-light fs-lg"></i>
                    
                    <a class="z-2 text-dark  pl-3 lh-1" href="{{route('design.strategy')}}"> 
                      <span class= "fw-bold text-light fs-xs">Great Exhibition To Business</span>
                      <br>
                      <span class="text-light fw-normal fs-xs">Certified</span>
                    </a>


                    <!-- @if( $event->businessrevenue == 'visitor' )  
                        <a href="{{route('event.exhibit', ['board' => 'business'])}}" class="btn btn-outline-light btn-sm">Advertise</a>
                      @else
                    
                      @if( $ticketOrExhibit != 0 )
                          <a href="#"  wire:click.prevent="insertEventToSess({{$event->id}})" class="btn btn-outline-light btn-sm">Plan Your Visit</a>
                        @elseif( $ticketOrExhibit == 0 )
                          {{--<a href="{{route('event.exhibit', ['board' => 'business'])}}" class="btn btn-outline-light btn-sm">Plan Your Visit</a>{{route('event.product',['slug' => $event->slug])}}--}}
                        
                          <a href="#" class="btn btn-outline-light btn-sm"  wire:click.prevent="insertEventToSess({{$event->id}})">Plan Your Visit</a>
                      @endif
                    @endif -->

                    <a class="navbar-tool navbar-stuck-toggler" href=""><span class="navbar-tool-tooltip">Toggle menu</span>
                      <div class="navbar-tool-icon-box"><i class="navbar-tool-icon bi bi-list"></i></div>
                    </a>

                    <!-- <a class="navbar-tool navbar-stuck-toggler" href=""><span class="navbar-tool-tooltip">Toggle menu</span>
                      <div class="navbar-tool-icon-box"><i class="navbar-tool-icon bi bi-list"></i></div>
                    </a> -->
                    <!-- <i class="navbar-tool-icon bi bi-list"></i> -->
                </div>


            </div>

            <div class="container pt-0 mb-3 mb-lg-0">
              <div class="row gy-0">
              
              
                <div class="col-lg-3 col-md-6 col-sm-8 px-1 d-none d-sm-block">
                      <a class="card-img-top d-block overflow-hidden"  href="{{route('event.product',['slug' => $event->slug])}}">
                          <img src="{{url('assets/image/exhibition/'.$event->image)}}" alt="{{Str::limit($event->eventname, 24)}}">
                      </a>
                </div>
                <div class="col-lg-7 col-md-6 col-sm-8">
                  <div class="col-lg-6 col-md-6  px-0 py-3">
                    @php 
                      $current = strtotime(Carbon::now());
                      $to = strtotime($event->startdate);
                      $from= strtotime($event->enddate);
                    @endphp
                      
                    @if($event->latestupdat == 'postpone')
                      <div class="h5">Sorry, Event has been postponed</div> 
                    @else
                      @if ($current < $to && $current < $from)
                        <span class="badge badge-primary bg-primary fs-xs mt-4">Upcoming</span>
                        <h5 class="text-dark fw-normal pt-2 pb-0">
                            @if(Carbon::parse ($event->startdate)->format('M') != Carbon::parse ($event->enddate)->format('M'))
                              {{Carbon::parse ($event->startdate)->format('D, d M')}} - {{Carbon::parse ($event->enddate)->format('D, d M Y ')}}
                            @else
                              {{Carbon::parse ($event->startdate)->format('D, d ')}} - {{Carbon::parse ($event->enddate)->format('D, d M Y')}}
                            @endif 
                        </h5>
                      @elseif ($current == $to && $current < $from) 
                        <span class="badge badge-primary bg-primary fs-xs mt-4">First Day</span>
                        <h5 class="text-dark fw-normal pt-2 pb-0">
                            @if(Carbon::parse ($event->startdate)->format('M') != Carbon::parse ($event->enddate)->format('M'))
                              {{Carbon::parse ($event->startdate)->format('D, d M')}} - {{Carbon::parse ($event->enddate)->format('D, d M Y ')}}
                            @else
                              {{Carbon::parse ($event->startdate)->format('D, d ')}} - {{Carbon::parse ($event->enddate)->format('D, d M Y')}}
                            @endif 
                        </h5>
                      @elseif ($current > $to && $current < $from) 
                        <span class="badge badge-primary bg-primary fs-xs mt-4">Ongoing</span>
                        <h5 class="text-dark fw-normal pt-2 pb-0">
                            @if(Carbon::parse ($event->startdate)->format('M') != Carbon::parse ($event->enddate)->format('M'))
                              {{Carbon::parse ($event->startdate)->format('D, d M')}} - {{Carbon::parse ($event->enddate)->format('D, d M Y ')}}
                            @else
                              {{Carbon::parse ($event->startdate)->format('D, d ')}} - {{Carbon::parse ($event->enddate)->format('D, d M Y')}}
                            @endif 
                        </h5>
                      @elseif ($current > $to && $current == $from) 
                        <span class="badge badge-primary bg-primary fs-xs mt-4">Last Business Day</span>
                        <h5 class="text-dark fw-normal pt-2 pb-0">
                            @if(Carbon::parse ($event->startdate)->format('M') != Carbon::parse ($event->enddate)->format('M'))
                              {{Carbon::parse ($event->startdate)->format('D, d M')}} - {{Carbon::parse ($event->enddate)->format('D, d M Y')}}
                            @else
                              {{Carbon::parse ($event->startdate)->format('D, d ')}} - {{Carbon::parse ($event->enddate)->format('D, d M Y')}}
                            @endif 
                        </h5>
                      @elseif ($current > $to && $current > $from)
                        <a class="badge badge-primary bg-primary fs-xs mt-4" href="{{route('event.exhibit', ['board' => 'business'])}}">want to participate!</a>
                      @endif
                    @endif
 
                      <h1 class="text-dark mb-0">{{ucwords(trans($event->eventname))}}</h1>
                      @php
                        $getLocationaddress = DB::table('locations')->find($event->location_id);
                      @endphp 

                      @if(!$event->location_id || $event->location_id == 0 )
                        <h5 class="text-dark fw-normal">{{ucwords(trans($event->venue ?? ''))}}</h5>
                      @elseif(!$getLocationaddress->address || $getLocationaddress->address == 0)
                        <h5 class="text-dark fw-normal">{{ucwords(trans($event->venue ?? ''))}}</h5>
                      @else
                        <h5 class="text-dark fw-normal">{{ucwords(trans($getLocationaddress->address ?? ''))}}</h5>
                      @endif

                         
                         
                      

                      <h3 class="text-dark fw-normal">{{ucwords(trans($event->city ?? ''))}}, {{ucwords(trans($event->country ?? ''))}}</h3>
                      @if(count($sponserbrand) > 0)
                          <span class="text-dark fs-sm fw-light"> <small>Powered by The Exhibtion Network</small></span>
                          <div class="d-flex bg-transparent border-bottom"> 
                            @foreach($sponserbrand as $franchise)
                                <img class="p-1" width="24%" src="{{url('public/assets/image/exhibition/'.$franchise->brand_logo)}}" >
                            @endforeach
                          </div>
                      @endif
                      
                      <h5 class="text-dark fw-light fs-xs mt-3">Book business Space with us. <br>Get pre-post business.</h5>
                      
                      <ul class="list-unstyled text-light mb-0 mt-2">
                            <li class="d-flex">
                                @if( $event->businessrevenue == 'visitor' )
                                  @if( $ticketOrExhibit != 0 )
                                        <a class="btn btn-primary btn-sm mx-2 d-none d-sm-block" type="button" 
                                        href="{{route('event.product',['slug' => $event->slug])}}">Book Tickets</a>
                                      @else( $ticketOrExhibit == 0 )
                                        <a class="btn btn-primary btn-sm mx-2 d-none d-sm-block" type="button" 
                                        href="{{route('event.exhibit', ['board' => 'business'])}}">Exhibit</a>
                                  @endif
                                @else
                                  <a class="btn btn-primary btn-sm mx-2 d-none d-sm-block" type="button" 
                                        href="{{route('event.exhibit', ['board' => 'business'])}}">Exhibit</a>
                                @endif  
                                <!-- calender -->
                              <a class="btn btn-primary btn-sm" href="#">Add to Calender</a>
                              <a href="#" id="shareBtn" class="btn btn-primary btn-sm mx-2"><i class="bi bi-share"></i></a>
                            </li>
                      </ul>
                      
                  </div>    
                </div>
              </div>
              <div class="container">
                          
              </div>
            </div>
          </section>

          <style>
            .nav-tabs-wrapper {
                overflow-x: auto;
                white-space: nowrap;
                -webkit-overflow-scrolling: touch;
                }

            .nav-tabs-scroll {
            display: flex;
            gap: 8px; /* Adjust spacing between tabs */
            }

            .nav-tab {
                flex: 0 0 auto;
                padding: 4px 6px;
                cursor: pointer;
                white-space: nowrap;
            }

          </style>

          <!-- tab heading-->  
          <section class=" d-lg-none nav-tabs-wrapper ">
              <ul class="nav-tabs-scroll p-0 m-0" role="tablist">
                  
              @if($event->eventype == 'conference')
                  <li class="nav-tab">
                    <a class="nav-link px-1 {{$currentTab === 'tabA' ? 'active' : ''}}" href="#" wire:click.prevent = "switchTab('tabA')">Overview</a>
                  </li>

                  <li class="nav-tab">
                   <a class="nav-link px-1 {{$currentTab === 'tabB' ? 'active' : ''}}" href="#" wire:click.prevent = "switchTab('tabB')">Key discussion points</a>  
                  </li>

                  <li class="nav-tab">
                   <a class="nav-link px-1 {{$currentTab === 'tabC' ? 'active' : ''}}" href="#" wire:click.prevent = "switchTab('tabC')">Speakers</a>
                  </li> 
                  
                  <li class="nav-tab">
                    <a class="nav-link px-1 {{$currentTab === 'tabD' ? 'active' : ''}}" href="#" wire:click.prevent = "switchTab('tabD')">Who should Attend</a>  
                  </li>

                  <li class="nav-tab">
                    <a class="nav-link px-1 {{$currentTab === 'tabE' ? 'active' : ''}}" href="#" wire:click.prevent = "switchTab('tabE')">Previous Edition</a>  
                  </li>

                  

                @else()

                  <li class="nav-item">
                    <a class="nav-link px-1 {{$currentTab === 'tab1' ? 'active' : ''}}" href="#" wire:click.prevent = "switchTab('tab1')">  Understanding</a>
                  </li>

                  <li class="nav-item">
                   <a class="nav-link px-1 {{$currentTab === 'tab3' ? 'active' : ''}}" href="#" wire:click.prevent = "switchTab('tab3')">  Exhibitor</a>  
                  </li>

                  <li class="nav-item">
                   <a class="nav-link px-1 {{$currentTab === 'tab2' ? 'active' : ''}}" href="#" wire:click.prevent = "switchTab('tab2')">  Service</a>
                  </li> 
                  
                  <li class="nav-item">
                    <a class="nav-link px-1 {{$currentTab === 'tab4' ? 'active' : ''}}" href="#" wire:click.prevent = "switchTab('tab4')">  FAQ</a>  
                  </li>
                @endif

              </ul>
          </section>
      
          <!--Tab Step up for mobile-->
          <section class="container mb-5 mb-lg-5 d-lg-none">
            <div class="tab-content pt-2">
         
            
              @if($currentTab === 'tabA')
                    <div class ="tab-pane fade show active">
                        <div class="container py-5 d-none d-sm-block">                    
                            <div class="card-group" >

                                <div class="card border-0">
                                    {{-- <img src="https://source.unsplash.com/1600x900/?Switzerland, office" class="card-img-top" alt="Card image"> --}}
                                    <div class="card-body">
                                    <div class="card-title text-primary fs-md">Find Business</div>
                                    <p class="card-text fs-sm fw-light">Looking to partner with the right exhibitors for your event or business? Our Service connects you with a comprehensive exhibtor profiles. Find the perfect match for your needs whether you're organizing an event or seeking collaboration opportunities.</p>
                                    <a href="{{route('event.exhibit', ['board' => 'business'])}}" class="btn btn-sm btn-primary">Get Directory</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                @elseif($currentTab === 'tabB')
                    <!-- membership tab-->
                    <div class="tab-pane fade show active">
                        <ul class="nav nav-tabs justify-content-center mb-4" id="agendaTabs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="day1-tab" data-bs-toggle="tab" data-bs-target="#day1" type="button" role="tab">Day 1</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="day2-tab" data-bs-toggle="tab" data-bs-target="#day2" type="button" role="tab">Day 2</button>
                            </li>
                        </ul>

                        <div class = "card mb-3 shadow-sm border-0">
                            <!-- Header section with time and title -->
                            <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">Registration & Welcome Breakfast</h5>
                                <span class="fw-semibold">9:00 AM – 9:15 AM</span>
                            </div>
                        </div>

                        <div class = "card mb-3 shadow-sm border-0">
                            <!-- Header section with time and title -->
                            <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">Opening Remarks</h5>
                                <span class="fw-semibold">9:30 AM – 9:45 AM</span>
                            </div>

                            <!-- Body section with description and speaker -->
                            <div class="card-body">
                                <p class="card-text mb-1">An overview of the summit's objectives and the significance of the insurance and finance sectors in the current economic landscape.</p>
                                
                                <div class="d-flex align-items-center mb-2">
                                    <img src="speaker.jpg" class="rounded-circle me-3" width="50" height="50" alt="Speaker Photo">
                                    <div>
                                        <small class="text-muted">Speaker: Mr. Rajesh Sharma, President, FADA</small>
                                        <strong>Jane Doe</strong><br>
                                        <small>CTO, TechCorp</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class = "card mb-3 shadow-sm border-0">
                            <!-- Header section with time and title -->
                            <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">Navigating the Future of Auto Insurance in India</h5>
                                <span class="fw-semibold">9:45 AM – 10:15 AM</span>
                            </div>

                            <!-- Body section with description and speaker -->
                            <div class="card-body">
                                <p class="card-text mb-1">Insights into emerging trends, regulatory changes, and technological advancements shaping the auto insurance industry.</p>
                                
                                <div class="d-flex align-items-center mb-2">
                                    <img src="speaker.jpg" class="rounded-circle me-3" width="50" height="50" alt="Speaker Photo">
                                    <div>
                                        <small class="text-muted">Speaker: Ms. Priya Menon, CEO, AutoSecure Ltd.</small>
                                        <strong>Jane Doe</strong><br>
                                        <small>CTO, TechCorp</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class = "card mb-3 shadow-sm border-0">
                            <!-- Header section with time and title -->
                            <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">

                                <div>
                                    <span class="badge bg-primary me-2">Panel Discussion:</span> <!-- Change to "Panel", "Workshop", etc. -->
                                    <h6 class="mb-0 d-inline-block">Digital Transformation in Automotive Financing</h6>
                                </div>
                                <small class="fw-semibold">10:15 AM – 10:45 AM</small>
                            </div>


                            <!-- Body section with description and speaker -->
                            <div class="card-body">
                                <p class="card-text mb-1">Exploring how digital tools and platforms are revolutionizing automotive financing, enhancing customer experience, and streamlining operations.</p>
                                
                                <div class="d-flex align-items-center mb-2">
                                    <img src="speaker.jpg" class="rounded-circle me-3" width="50" height="50" alt="Speaker Photo">
                                    <div>
                                        <small class="text-muted">Speaker: Ms. Sunita Rao, CTO, FinTech Innovations</small>
                                        <strong>Jane Doe</strong><br>
                                        <small>CTO, TechCorp</small>
                                    </div>
                                    <div>
                                        <small class="text-muted">Speaker: Mr. Anil Kapoor, Head of Auto Loans, XYZ Bank</small>
                                        <strong>Jane Doe</strong><br>
                                        <small>CTO, TechCorp</small>
                                    </div>
                                    <div>
                                        <small class="text-muted">Speaker: Mr. Vikram Desai, Director, AutoFinance Co.</small>
                                        <strong>Jane Doe</strong><br>
                                        <small>CTO, TechCorp</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-3 shadow-sm border-0">
                            <!-- Header section with session type, title, and time -->
                            <div class="card-header bg-light d-flex justify-content-between align-items-center flex-wrap">
                                <div>
                                    <span class="badge bg-primary me-2">Keynote</span> <!-- Change to "Panel", "Workshop", etc. -->
                                    <h6 class="mb-0 d-inline-block">Welcome Note</h6>
                                </div>
                                <small class="text-muted fw-semibold">09:00 AM</small>
                            </div>

                            <!-- Body section with description and speaker -->
                            <div class="card-body">
                                <p class="card-text mb-3 text-dark" style="font-size: 0.95rem;">
                                    Exploring how digital tools and platforms are revolutionizing automotive financing, enhancing customer experience, and streamlining operations.
                                </p>

                                <!-- Panelist Speakers List -->
                                <div class="row">
                                    <!-- Speaker 1 -->
                                    <div class="col-12 col-md-4 d-flex align-items-start mb-3">
                                    <img src="speaker1.jpg" class="rounded-circle me-3" width="50" height="50" alt="Ms. Sunita Rao">
                                    <div>
                                        <strong>Ms. Sunita Rao</strong><br>
                                        <small class="text-muted">CTO, FinTech Innovations</small>
                                    </div>
                                    </div>

                                    <!-- Speaker 2 -->
                                    <div class="col-12 col-md-4 d-flex align-items-start mb-3">
                                    <img src="speaker2.jpg" class="rounded-circle me-3" width="50" height="50" alt="Mr. Anil Kapoor">
                                    <div>
                                        <strong>Mr. Anil Kapoor</strong><br>
                                        <small class="text-muted">Head of Auto Loans, XYZ Bank</small>
                                    </div>
                                    </div>

                                    <!-- Speaker 3 -->
                                    <div class="col-12 col-md-4 d-flex align-items-start mb-3">
                                    <img src="speaker3.jpg" class="rounded-circle me-3" width="50" height="50" alt="Mr. Vikram Desai">
                                    <div>
                                        <strong>Mr. Vikram Desai</strong><br>
                                        <small class="text-muted">Director, AutoFinance Co.</small>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class = "card mb-3 shadow-sm border-0">
                            <!-- Header section with time and title -->
                            <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">Lunch Break</h5>
                                <span class="fw-semibold">12:15 PM – 1:15 PM</span>
                            </div>

                        </div>

                        <div class = "card mb-3 shadow-sm border-0">
                            <!-- Header section with time and title -->
                            <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">Workshop: "Compliance and Regulatory Updates in Insurance & Finance"</h5>
                                <span class="fw-semibold">1:15 PM – 1:45 PM</span>
                            </div>

                            <!-- Body section with description and speaker -->
                            <div class="card-body">
                                <p class="card-text mb-1">An interactive session covering recent regulatory changes and compliance requirements affecting the insurance and finance sectors.</p>
                                
                                <div class="d-flex align-items-center mb-2">
                                    <img src="speaker.jpg" class="rounded-circle me-3" width="50" height="50" alt="Speaker Photo">
                                    <div>
                                        <small class="text-muted">Facilitator: Mr. Arvind Patel, Legal Advisor, FADA</small>
                                        <strong>Jane Doe</strong><br>
                                        <small>CTO, TechCorp</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class = "card mb-3 shadow-sm border-0">
                            <!-- Header section with time and title -->
                            <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">Customer-Centric Approaches in Insurance Sales</h5>
                                <span class="fw-semibold">1:45 PM – 2:15 PM</span>
                            </div>

                            <!-- Body section with description and speaker -->
                            <div class="card-body">
                                <p class="card-text mb-1">Delving into strategies for enhancing customer engagement and satisfaction in insurance sales.</p>
                                
                                <div class="d-flex align-items-center mb-2">
                                    <img src="speaker.jpg" class="rounded-circle me-3" width="50" height="50" alt="Speaker Photo">
                                    <div>
                                        <small class="text-muted">Speaker: Ms. Leena Thomas, VP Sales, Trust Insurance</small>
                                        <strong>Jane Doe</strong><br>
                                        <small>CTO, TechCorp</small>
                                    </div>
                                    <div>
                                        <small class="text-muted">Speaker: Mr. Suresh Babu, Customer Experience Head, AutoCare Ltd.</small>
                                        <strong>Jane Doe</strong><br>
                                        <small>CTO, TechCorp</small>
                                    </div>
                                    <div>
                                        <small class="text-muted">Speaker: Ms. Anjali Mehta, CRM Consultant, EngagePlus</small>
                                        <strong>Jane Doe</strong><br>
                                        <small>CTO, TechCorp</small>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                        <div class = "card mb-3 shadow-sm border-0">
                            <!-- Header section with time and title -->
                            <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">Innovative Insurance Products for the Modern Consumer</h5>
                                <span class="fw-semibold">2:15 PM – 2:45 PM</span>
                            </div>

                            <!-- Body section with description and speaker -->
                            <div class="card-body">
                                <p class="card-text mb-1">Introducing cutting-edge insurance products designed to meet the evolving needs of today's consumers.</p>
                                
                                <div class="d-flex align-items-center mb-2">
                                    <img src="speaker.jpg" class="rounded-circle me-3" width="50" height="50" alt="Speaker Photo">
                                    <div>
                                        <small class="text-muted">Speaker: Mr. Deepak Verma, Product Manager, NewAge Insure</small>
                                        <strong>Jane Doe</strong><br>
                                        <small>CTO, TechCorp</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class = "card mb-3 shadow-sm border-0">
                            <!-- Header section with time and title -->
                            <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">Coffee Break & Networking</h5>
                                <span class="fw-semibold">2:45 PM – 3:15 PM</span>
                            </div>

                            <!-- Body section with description and speaker -->
                            <div class="card-body">
                                <p class="card-text mb-1">A short break to enjoy refreshments and continue networking with peers and industry experts.</p>
                            </div>
                        </div>

                        <div class = "card mb-3 shadow-sm border-0">
                            <!-- Header section with time and title -->
                            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">Leveraging Data Analytics for Strategic Decision Making</h5>
                                <span class="fw-semibold">3:15 PM – 3:45 PM</span>
                            </div>

                            <!-- Body section with description and speaker -->
                            <div class="card-body">
                                <p class="card-text mb-1">An exploration of how data analytics can inform strategic decisions in insurance and finance operations.</p>
                                
                                <div class="d-flex align-items-center mb-2">
                                    <img src="speaker.jpg" class="rounded-circle me-3" width="50" height="50" alt="Speaker Photo">
                                    <div>
                                        <!-- <small class="text-muted">Speaker: , Data Analyst, FinInsights</small> -->
                                        <strong>Ms. Ritu</strong><br>
                                        <small>Data Analyst, FinInsights</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class = "card mb-3 shadow-sm border-0">
                            <!-- Header section with time and title -->
                            <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">The Road Ahead for Dealers in the Insurance & Finance Ecosystem</h5>
                                <span class="fw-semibold">3:45 PM – 4:15 PM</span>
                            </div>

                            <!-- Body section with description and speaker -->
                            <div class="card-body">
                                <p class="card-text mb-1">Final thoughts on the evolving role of dealers and how they can adapt to and thrive in the changing landscape.</p>
                                
                                <div class="d-flex align-items-center mb-2">
                                    <img src="speaker.jpg" class="rounded-circle me-3" width="50" height="50" alt="Speaker Photo">
                                    <div>
                                        <small class="text-muted">Speaker: Mr. Ajay Khanna, Chairman, FADA Advisory Board</small>
                                        <strong>Jane Doe</strong><br>
                                        <small>CTO, TechCorp</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class = "card mb-3 shadow-sm border-0">
                            <!-- Header section with time and title -->
                            <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">Networking Cocktail Hour</h5>
                                <span class="fw-semibold">4:15 PM – 5:00 PM</span>
                            </div>

                            <!-- Body section with description and speaker -->
                            <div class="card-body">
                                <p class="card-text mb-1">Conclude the day with a relaxed networking session, offering beverages and light snacks.</p>
                            </div>
                        </div>
                        
                        <div class="collapse" id="session1">
                            <div class="card card-body">
                                Detailed description, speakers, presentation link, etc.
                            </div>
                        </div>
                    </div>
                @elseif($currentTab === 'tabC')
                    <!-- exhibitor tab-->
                    
                        <div class="d-flex badgese pb-2">
                        <span class="badge border border-1 text-right border-dark text-dark mr-1"> <a href="" class="text-dark"> 2022 </a></span>
                        <span class="badge border border-1 text-right border-dark text-dark mr-1"> <a href="" class="text-dark"> 2023 </a></span>
                        <span class="badge border border-1 text-right border-dark text-dark mr-1"> <a href="" class="text-dark">  2024 </a></span>
                        </div>
                    
                        <h3 class="h5 pt-2">The Exhibition Network: Our Data, Your Customer.</h3>
                        <p class="fs-xs">Find right customers you need - <span class="text-primary">select, plan your visit, business meet, get gifts products,</span> and much more...</p>
                    
                        <div class="row mb-5 pb-2">
                            @foreach ($exhibitor as $franchise) 
                            <div class=" ">
                                <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
                                
                                <div class="col  pr-0">
                                    
                                        <div class="h4 fw-light mb-0">B21</div> 
                                        <div class="small text-muted">Stall</div>
                                        <!-- <a href=""><div class=" round-circle"><i class="bi bi-bookmark"></i></div> </a> -->
                                </div>


                                <div class="col-7  p-0">
                                    <div class="fs-md fw-normal text-start"><a class="text-dark" href="#">
                                    {{ucwords(trans(Str::limit($franchise->brand_name, 24)))}}</a></div>
                                
                                    <div class="text-muted fs-sm text-start">category</div>
                                </div>

                                <div class="col-3  p-0">
                                    <a class="card-img-top d-block overflow-hidden" href="#">
                                    <i class="bi bi-download"></i></a>
                                </div>
                                </div>
                            </div>
                            @endforeach
                        </div> 
                    

                    
                        
                            <!-- <div class="grido">
                                @foreach($exhibitor as $participants)
                                <div class="element-item" data-category="post-transition">
                                <h3 class="name text-light">{{$participants->brand_name}}</h3>
                                <p class="symbol">{{$participants->brand_name}}</p>
                                <p class="number">82</p>
                                <p class="weight">Verified</p>
                                </div>
                                @endforeach
                            </div> -->
                        
                    
                @elseif($currentTab === 'tabD')
                        <!-- Faq tab-->
                        <div class="tab-pane fade show active">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                        
                        @php
                        $updateQuestion = DB::table('questions')->where('event_id' , $event->id)->get();
                        @endphp
                        
                        @foreach($updateQuestion as $questions)
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" 
                            data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                {{$questions->question}}
                            </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                            </div>
                        </div>
                        @endforeach

                        <!-- <div class="accordion-item">
                            <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                Accordion Item #2
                            </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                Accordion Item #3
                            </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                            </div>
                        </div> -->
                        </div>
                        </div>
              @endif

           

              @if($currentTab === 'tab1')
                    <div class="tab-pane fade show active">
                    <!--details-->
                    <!-- mobile -->
                    <div class="d-lg-none">
                            <!--<div class="col-lg-4 col-md-5 pt-2 pb-0">
                                <div class="star-rating me-2"><i class="bi bi-star-filled text-accent me-1"></i>
                                <span class="fs-md fw-bold">77% </span><span class="d-inline-block align-middle fs-sm"> 58K rating</span></div>        
                            </div>-->
                            
                                @if($commentedRates->count() > 0)
                                <div class="col-lg-4 col-md-5 pt-2 pb-0">
                                    <a class="star-rating me-2 pb-2" href="{{route('business.award', ['slug'=> $event->slug])}}"> 
                                    
                                            <i class = "bi bi-star-filled text-accent me-1"></i>
                                            <span class="fs-md fw-bold">
                                            <i class="bi bi-star-fill text-primary me-1"></i> {{round($commentedRates->avg('rate') , 1)}}/10 </span>
                                            <span class="d-inline-block align-middle fs-xs"> {{$commentedRates->count()}} Reviews</span>
                                        
                                                <i class="bi bi-chevron-right fs-xs text-primary me-1"></i>
                                    </a>        
                                </div>
                                @endif
                            
                            <ul class="list-unstyled  bg-secondary py-1">
                                    @if(Auth::check())
                                    @php
                                        $find = DB::table('rates')->where('user_id', Auth::user()->id)->get();
                                        $checkComment = DB::table('rates')->where('user_id', Auth::user()->id)->where('event_id', $findEvent)->get();
                                        $checkCommentop = DB::table('rates')->where('user_id', Auth::user()->id)->where('event_id', $findEvent)->value('rate');
                                    @endphp

                                    @if(count($checkComment) > '0')
                                        <li class="d-flex justify-content-between px-2 m-0 lh-1">
                                        <span class="text-dark fw-medium fs-sm">  Add your rating & review <br><span class="text-muted fw-light fs-xs">Your ratings matter</span></span>
                                        <span><a href="{{route('coi.ratenow',['slug' => $event->slug])}}" class="btn btn-outline-primary btn-sm ">{{$checkCommentop}}/10</a></span>
                                        </li>
                                    @else
                                        <li class="d-flex justify-content-between px-2 m-0 lh-1">
                                        <span class="text-dark fw-medium fs-sm">  Add your rating & review <br><span class="text-muted fw-light fs-xs">Your ratings matter</span></span>
                                        <span><a href="{{route('coi.ratenow',['slug' => $event->slug])}}" class="btn btn-outline-primary btn-sm"> Rate Now</a></span>
                                        </li>
                                    @endif

                                    @else
                                        <li class="d-flex justify-content-between px-2 m-0 lh-1">
                                        <span class="text-dark fw-medium fs-sm">  Add your rating & review <br><span class="text-muted fw-light fs-xs">Your ratings matter</span></span>
                                        <span><a href="{{route('coi.ratenow',['slug' => $event->slug])}}" class="btn btn-outline-primary btn-sm ">Rate Now</a></span>
                                        </li>
                                    @endif
                            </ul>
                            
                            
                            <div>
                                @if($event->exhibitors != null) <span class="fs-xs fw-bold"> + {{number_format(((float)$event->exhibitors / 1000) , 1). 'k'}}</span> <span class="fs-xs fw-normal">Exhibitors</span>  @endif |
                                
                                @if($event->exhibitors != null) <span class="fs-xs fw-bold">+ {{$event->auidence}}</span> 
                                <span class="fs-xs fw-normal"> Visitors </span>@endif
                                {{Carbon::parse($event->startdate)->diffInDays(Carbon::parse ($event->enddate))}} days
                                <div class="fs-lg fw-bolder"> {{Str::limit($event->eventname,289)}}</div>

                                <p class="fs-md fw-bold mt-0"> {{Str::limit($event->tagline,289)}}</p>
                                <div class="fs-xs fw-normal pb-2 pt-0">{{Str::limit($event->shtdesc,289)}}</div> 
                                <!-- 170 -->
                            </div>

                    </div>  
                    
                    <div class="grido mb-5">
                        <div class="element-item bg-light" data-category="post-transition">
                        <h3 class="name">Edition</h3>
                        <p class="symbol text-dark">{{$event->edition}}</p>
                        <p class="number"> <i class="bi bi-add"></i> </p>
                        @if($event->latestupdat == 'verfied')
                            <p class="weight">Verified</p>
                        @endif
                        </div>

                        @if($event->auidence == 0)
                        @else
                        <div class="element-item bg-light" data-category="post-transition">
                            <h3 class="name">Visitor</h3>
                            <p class="symbol text-dark">{{number_format(((float)$event->auidence / 1000) , 1)}}  <sub class="fw-normal fs-sm">K</sub></p>
                            <p class="number"></p>
                            @if($event->latestupdat == 'verfied')
                            <p class="weight">Verified</p>
                            @endif
                        </div>
                        @endif

                        @if($event->exhibitors == 0)
                        @else
                        <div class="element-item bg-light" data-category="post-transition">
                            <h3 class="name">Exhibitor</h3>
                            <p class="symbol text-dark">{{$event->exhibitors}}</p>
                            <p class="number"></p>
                            @if($event->latestupdat == 'verfied')
                            <p class="weight">Verified</p>
                            @endif
                        </div>
                        @endif

                        <div class="element-item bg-light" data-category="post-transition">
                        <h3 class="name">Great Exhibition To Exhibitd</h3>
                        <p class="symbol text-dark">{{round($commentedRates->avg('rate') , 1)}}</p>
                        <p class="number"><a href="{{route('business.membership')}}"><i class="bi bi-info-circle"></i></a></p>

                            @if($event->latestupdat == 'verfied')
                            <p class="weight">Verified</p>
                            @endif
                        </div>

                        <div class="element-item bg-light" data-category="post-transition">
                        <h3 class="name">Business Days</h3>
                        <p class="symbol text-dark">{{Carbon::parse($event->startdate)->diffInDays(Carbon::parse ($event->enddate)) + 1}}</p>
                        <p class="number"></p>
                        @if($event->latestupdat == 'verfied')
                            <p class="weight">Verified</p>
                        @endif
                        </div>

                        <div class="element-item bg-light" data-category="post-transition">
                        <h3 class="name">Support</h3>
                        <p class="symbol">Bi</p>
                        <p class="number"><i class="bi bi-info-circle"></i></p>
                        <p class="weight">Insights</p>
                        </div>
                    </div>
                    
                    </div>
                @elseif($currentTab === 'tab2')
                    <!-- membership tab-->
                    <div class="tab-pane fade show active">

                    <div class="container">
                        <div class="row gy-2">

                            <h3 class="h5 pt-2">The Exhibition Network: The leader in customisation </h3>
                            <p class="fs-xs">Find high quality customised products you need - Visiting cards, personalized clothing, gifting products, and much more.</p>
                            
                            <div class="row g-0 py-0 mx-n2">
            
                            <a class="element-item bg-light" data-category="post-transition" href="{{route('event.exhibit', ['board' => 'design'])}}">
                                <h3 class="name">Design</h3>
                                <p class="symbol">Bi</p>
                                <!-- <p class="number">83</p> -->
                                <p class="weight">Stall</p>
                            </a> 

                            <a class="element-item bg-light" data-category="post-transition" href="{{route('event.exhibit', ['board' => 'giveaway'])}}">
                                <h3 class="name">Material</h3>
                                <p class="symbol">Bi</p>
                                <!-- <p class="number">83</p> -->
                                <p class="weight">Giveaways</p>
                            </a>

                            <a class="element-item bg-light" data-category="post-transition" href="{{route('event.exhibit', ['board' => 'fabrication'])}}">
                                <h3 class="name">Fabrication</h3>
                                <p class="symbol">Bi</p>
                                <!-- <p class="number">83</p> -->
                                <p class="weight">Verified</p>
                            </a>

                            <a class="element-item bg-light" data-category="post-transition" href="{{route('event.exhibit', ['board' => 'printing'])}}">
                                <h3 class="name">Printing</h3>
                                <p class="symbol">Bi</p>
                                <!-- <p class="number">83</p> -->
                                <p class="weight">Verified</p>
                            </a>

                            <a class="element-item bg-light" data-category="post-transition" href="{{route('event.exhibit', ['board' => 'stay'])}}">
                                <h3 class="name">Stay</h3>
                                <p class="symbol">Bi</p>
                                <!-- <p class="number">83</p> -->
                                <p class="weight">Verified</p>
                            </a>

                            <a class="element-item bg-light" data-category="post-transition" href="{{route('event.exhibit', ['board' => 'invite'])}}">
                                <h3 class="name">Invite</h3>
                                <p class="symbol">Bi</p>
                                <!-- <p class="number">83</p> -->
                                <p class="weight">Verified</p>
                            </a>

                            <a class="element-item bg-light" data-category="post-transition" href="{{route('event.exhibit', ['board' => 'photography'])}}">
                                <h3 class="name">Photography</h3>
                                <p class="symbol">Bi</p>
                                <!-- <p class="number">83</p> -->
                                <p class="weight">Verified</p>
                            </a>

                            <a class="element-item bg-light" data-category="post-transition" href="{{route('event.exhibit', ['board' => 'plan_your_exhibition'])}}">
                                <h3 class="name">Plan</h3>
                                <p class="symbol">Bi</p>
                                <!-- <p class="number">83</p> -->
                                <p class="weight">your Exhibition</p>
                            </a>

                            <a class="element-item bg-light" data-category="post-transition" href="{{route('event.exhibit', ['board' => 'directory'])}}">
                                <h3 class="name">Business</h3>
                                <p class="symbol">Bi</p>
                                <!-- <p class="number">83</p> -->
                                <p class="weight">Directory</p>
                            </a>

                            <a class="element-item bg-light" data-category="post-transition" href="{{route('event.exhibit', ['board' => 'hostess'])}}">
                                <h3 class="name">Business</h3>
                                <p class="symbol">Bi</p>
                                <!-- <p class="number">83</p> -->
                                <p class="weight">Hostess</p>
                            </a>

                            <a class="element-item bg-light" data-category="post-transition" href="{{route('event.exhibit', ['board' => 'meet'])}}">
                                <h3 class="name">Business</h3>
                                <p class="symbol">Bi</p>
                                <!-- <p class="number">83</p> -->
                                <p class="weight">Meet up</p>
                            </a>

                            <a class="element-item bg-light" data-category="post-transition" href="{{route('event.exhibit', ['board' => 'plan_your_exhibition'])}}">
                                <h3 class="name">Delegates</h3>
                                <p class="symbol">Bi</p>
                                <!-- <p class="number">83</p> -->
                                <p class="weight">Right People</p>
                            </a>
                            </div>
                        <!-- <div class="col border-1"> <i class="bi bi-plus"></i><span class="fs-sm">Design</span> </div>
                        <div class="col border-1"> <i class="bi bi-plus"></i><span class="fs-sm">Fabrication</span></div>
                        <div class="col border-1"> <i class="bi bi-plus"></i><span class="fs-sm">Hostess</span></div>
                        <div class="col border-1"> <i class="bi bi-plus"></i><span class="fs-sm">Giveaways</span></div>

                        <div class="col border-1"> <i class="bi bi-plus"></i><span class="fs-sm">Printing</span></div>
                        <div class="col border-1"> <i class="bi bi-plus"></i><span class="fs-sm">Stay</span></div>
                        <div class="col border-1"> <i class="bi bi-plus"></i><span class="fs-sm">Invite</span></div>
                        <div class="col border-1"> <span class="fs-sm">Plan your Exhibition</span></div> -->

                            <!-- <p class="fs-md"> {{Str::limit($event->desc,289)}}...</p>-->
                            <ul class="mt-5">
                            <p class="fs-xs"> For more than 20 years of trust, <span class="text-primary">O'laro, The Exhibition Network product</span>  has helped business owners, entrepreneurs and individuals create their identities with custom designs and professional marketing. Our online printing services are intended to you 
                            find high quality customised products you need - Visiting cards, personalized clothing, gifting products, and much more.</p>
                            
                            <li><span class="fs-sm fw-bold">Even low Quantities @ Best Prices</span>
                                <p class="fs-xs">We offer low/single product quantities at affordable prices.</p>
                            </li>
                            <li><span class="fs-sm fw-bold">High quality products and Easy design</span>
                                <p class="fs-xs">Our wide selection of high-quality products and online design tools make it easy for you to customize and order your favourite products.</p>
                            </li>
                            <li><span class="fs-sm fw-bold">Free Replacement or Full Refund</span>
                                <p class="fs-xs">We stand by everything we sell. So if you're not satisfied, we'll make it right.</p>
                            </li>
                            </ul>
                        

                        </div>
                    </div>

                    </div>
                @elseif($currentTab === 'tab3')
                    <!-- exhibitor tab-->
                    
                        <div class="d-flex badgese pb-2">
                        <span class="badge border border-1 text-right border-dark text-dark mr-1"> <a href="" class="text-dark"> 2022 </a></span>
                        <span class="badge border border-1 text-right border-dark text-dark mr-1"> <a href="" class="text-dark"> 2023 </a></span>
                        <span class="badge border border-1 text-right border-dark text-dark mr-1"> <a href="" class="text-dark">  2024 </a></span>
                        </div>
                    
                        <h3 class="h5 pt-2">The Exhibition Network: Our Data, Your Customer.</h3>
                        <p class="fs-xs">Find right customers you need - <span class="text-primary">select, plan your visit, business meet, get gifts products,</span> and much more...</p>
                    
                        <div class="row mb-5 pb-2">
                            @foreach ($exhibitor as $franchise) 
                            <div class=" ">
                                <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
                                
                                <div class="col  pr-0">
                                    
                                        <div class="h4 fw-light mb-0">B21</div> 
                                        <div class="small text-muted">Stall</div>
                                        <!-- <a href=""><div class=" round-circle"><i class="bi bi-bookmark"></i></div> </a> -->
                                </div>

                                04/08/2025/test

                                <div class="col-7  p-0">
                                    <div class="fs-md fw-normal text-start"><a class="text-dark" href="#">
                                    {{ucwords(Str::limit($franchise->brand_name, 24))}}</a></div>
                                
                                    <div class="text-muted fs-sm text-start">category</div>
                                </div>

                                <div class="col-3  p-0">
                                    <a class="card-img-top d-block overflow-hidden" href="#">
                                    <i class="bi bi-download"></i></a>
                                </div>
                                </div>
                            </div>
                            @endforeach
                        </div> 
                    

                    
                        
                            <!-- <div class="grido">
                                @foreach($exhibitor as $participants)
                                <div class="element-item" data-category="post-transition">
                                <h3 class="name text-light">{{$participants->brand_name}}</h3>
                                <p class="symbol">{{$participants->brand_name}}</p>
                                <p class="number">82</p>
                                <p class="weight">Verified</p>
                                </div>
                                @endforeach
                            </div> -->
                        
                    
                @elseif($currentTab === 'tab4')
                        <!-- Faq tab-->
                        <div class="tab-pane fade show active">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                        
                        @php
                        $updateQuestion = DB::table('questions')->where('event_id' , $event->id)->get();
                        @endphp
                        
                        @foreach($updateQuestion as $questions)
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" 
                            data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                {{$questions->question}}
                            </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                            </div>
                        </div>
                        @endforeach

                        <!-- <div class="accordion-item">
                            <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                Accordion Item #2
                            </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                Accordion Item #3
                            </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                            </div>
                        </div> -->
                        </div>
                        </div>
              @endif

            </div>
          </section>
         
          <!--share hidden-->
          <div class="d-none">            
                <a href="#" id="gmail-btn">gmail</a>
                <a href="#" id="facebook-btn">facebook</a>
                <a href="#" id="twitter-btn">twitter</a>
                
                <a href="#" id="linkedin-btn">linkedin</a>
                <a href="#" id="whatsapp-btn">whatsapp</a> 
                <i class="bi bi-share"></i>
                <a href="#" id="shareBtn" class="btn btn-primary btn-sm mx-2"><i class="bi bi-share"></i></a>
          </div>
          
          <!--<section class="d-lg-none">
                <hr class="mt-md-2 mb-2">
                <div class="card text-center py-5 border-0"> 
                  <div class="card-body">
                    <h5 class="card-title h2">Plan your Expo Now </h5>
                    <p class="card-text fs-sm text-muted">Connect with The Exhibtion Network: Pre-book your ultra Premium Exhibtion Space - with exhibition demographic trends and save monthly calender, get space & sponser option to extend  businesss reach</p>
                    <a href="#" class="btn btn-sm btn-primary">Plan your Expo</a>
                  </div>
                </div>
              </section> -->

              <!-- Partner-->
              <hr class="mt-md-2 mb-2 d-lg-none">
              <section class="container py-2 pt-md-5 d-lg-none">
                <h6 class="text-left mb-2">Partner</h6>
                <div class="">
                      @foreach ($eventbrand as $franchise)
                        <div class="card product-card-alt">
                          <div class="product-thumb p-3">
                            <div class="product-card-actions p-2">
                              <div class="fs-sm text-light" href="">Booth 3</div>
                              <div class="fs-sm text-light" href="">Elite Sponsor</div>
                              <div class="fs-sm text-light" href="">View Website</div>
                            </div>   
                            <a class="product-thumb-overlay" href=""> </a>
                            <img class="p-3" width="auto" src="{{url('public/assets/images/exhibition/'.$franchise->brand_logo)}}"  alt="{{Str::limit($franchise->brand_name, 24)}}">
                          
                          </div>
                        </div>
                      @endforeach
                </div>
              </section>

              @php 
               $relativeEvent = DB::table('events')->where('reference' , $event->reference)->get();
              @endphp

              @if($relativeEvent->count() >= 2 )
                <div class = "container mb-5 d-lg-none">
                  <div class="row g-0 py-0 mx-n2 mt-2"> 
                    {{-- px-2 mb-1 --}}
                    @foreach($relativeEvent as $eventoi)
                      <div wire:ignore class="col-lg-2 col-md-4 col-sm-6 px-2 mb-1" href="{{route('event.details',['slug' => $eventoi->slug])}}">
                        <div class="card product-card">
                          <a class="card-img-top d-block overflow-hidden" href="{{route('event.details',['slug' => $eventoi->slug])}}">
                          <img src="{{url('public/assets/image/exhibition/'.$eventoi->image)}}" alt=""> </a>

                          <div class="card-body p-1">
                            <div class="d-flex justify-content-between">
                                <div class="product-price"><small>{{$eventoi -> edition}}

                                @if($event->latestupdat == 'verfied')
                                  <i class="bi bi-shield-check" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="certified" aria-label="certified">
                                @endif

                                  <span class="fs-xs">
                                        @php
                                            $to = strtotime($eventoi->startdate);
                                            $from= strtotime($eventoi->enddate);
                                        @endphp
                                        

                                        @if ($current < $to && $current < $from)
                                            Upcom
                                          @elseif ($current == $to && $current < $from) 
                                            First
                                          @elseif ($current > $to && $current < $from) 
                                            Ongoi
                                          @elseif ($current > $to && $current == $from) 
                                            Last 
                                          @elseif ($current > $to && $current > $from)
                                            Ended
                                        @endif
                                      </span>
                                    <i class="bi bi-lightning-fill" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="upcoming" aria-label="upcoming"></i></i></small>
                                  <div class="product-title fs-sm h3 mb-0">
                                  <a href="{{route('event.details',['slug' => $eventoi->slug])}}">{{ucwords(trans($eventoi -> eventname))}}
                                    </a></div>
                                </div>

                                <div class="star-rating d-none d-sm-block"> 
                                  <small> <span class="badge bg-primary opacity-75" style="position: unset;"> Visitor</span> | <span class="badge bg-primary opacity-75" style="position: unset;"> Exhibit</span></small>       
                                  <div class=" align-center fs-sm py-1"> 
                                    <small class="mx-0" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Visitor" aria-label="Visitor"> + {{$eventoi -> auidence}} <i class="bi bi-people-fill"></i></small> 
                                    <small class="mx-1" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Exhibitor" aria-label="Exhibior">+ {{$eventoi -> exhibitors}}K <i class="bi bi-person-workspace"></i></small>
                                  </div>
                                </div>
                            </div>
                            <!--<small>World's best demanding business</small><br>-->
                            <small class="text-bolder d-none d-sm-block"> <i class="bi bi-calendar3"></i>
                              @if(Carbon::parse ($eventoi->startdate)->format('M') != Carbon::parse ($eventoi->enddate)->format('M'))
                                {{Carbon::parse ($eventoi->startdate)->format('D, d M')}} - {{Carbon::parse ($eventoi->enddate)->format('D, d M Y ')}}
                              @else
                                {{Carbon::parse ($eventoi->startdate)->format('D, d ')}} - {{Carbon::parse ($eventoi->enddate)->format('D, d M Y')}}
                              @endif 

                            </small>
                            <small  class="d-none d-sm-block"><i class="bi bi-geo-alt-fill fs-sm"></i>{{ucwords(trans($eventoi -> venue ?? ''))}}, <br> {{ucwords(trans($eventoi -> city ?? ''))}}</small>

                            <small class="text-bolder d-lg-none"> <i class="bi bi-calendar3"></i>
                              @if(Carbon::parse ($eventoi->startdate)->format('M') != Carbon::parse ($eventoi->enddate)->format('M'))
                                {{Carbon::parse ($eventoi->startdate)->format('d M')}} - {{Carbon::parse ($eventoi->enddate)->format('d M, y')}}
                              @else
                                {{Carbon::parse ($eventoi->startdate)->format('d ')}} - {{Carbon::parse ($eventoi->enddate)->format('d M, y')}}
                              @endif 
                            </small><br>
                            <small class="d-lg-none"><i class="bi bi-geo-alt-fill fs-sm"></i>{{ucwords(trans($eventoi -> city ?? ''))}}</small> 
                            <!--ucfirst-->
                          </div>

                          
                          
                          <div class="card-body card-body-hidden">
                            <div class="d-flex justify-content-between mb-2">
                              <a class="btn btn-primary btn-sm d-block w-50 mx-1" type="button" href="#"><i class=" bi bi-brush fs-sm me-1"></i>Exhibit</a>
                              <a class="btn btn-primary btn-sm d-block w-50 mx-1" type="button" href="#"><i class=" bi bi-cart fs-sm me-1"></i>Visit</a>
                            </div>
                          
                            <div class="text-center">
                              @guest<a class="nav-link-style fs-ms" href="#" data-bs-toggle="modal">
                              <i class=" bi bi-eye align-middle me-1"></i>Contact</a>
                              @endguest
                            </div>
                          </div>
                        
                        </div>
                      </div>
                    @endforeach
                  </div>
                </div>
              @endif
                  



          <!--footer-->
          @if($event->eventype == 'award')
            <div class="handheld-toolbar bg-secondary">
              <div class="d-flex justify-content-between py-2 px-2">
                <div class="text-dark  pl-3 lh-1">  <span class = "fw-medium fs-sm">Rs.{{$productPrice}}</span><br><span class=" fw-normal fs-xs">Onwards</span></div>
                  @if( $event->businessrevenue == 'visitor' )  
                    @if( $ticketOrExhibit != 0 )
                        <a href="#"  wire:click.prevent="insertEventToSess({{$event->id}})" class="btn btn-primary btn-sm">Plan Your Visit</a>
                      @elseif( $ticketOrExhibit == 0 )
                        {{--<a href="{{route('event.exhibit', ['board' => 'business'])}}" class="btn btn-primary btn-sm">Book your Space</a>{{route('event.product',['slug' => $event->slug])}}--}}
                      
                        <a href="#" class="btn btn-primary btn-sm"  wire:click.prevent="insertEventToSess({{$event->id}})">Book your Space</a>
                    @endif
                  @else
                  <a href="{{route('event.exhibit', ['board' => 'business'])}}" class="btn btn-primary btn-sm">Book your Space</a>
                  @endif
              </div>
            </div>
          @elseif($event->eventype == 'conference')
            <div class="handheld-toolbar bg-secondary">
              <div class="d-flex justify-content-between py-2 px-2">
              <div class="text-dark  pl-3 lh-1">  <span class = "fw-medium fs-sm">Rs.{{$productPrice}}</span><br><span class=" fw-normal fs-xs">Onwards</span></div>
                @if( $event->businessrevenue == 'visitor' )  
                  @if( $ticketOrExhibit != 0 )
                      <a href="#"  wire:click.prevent="insertEventToSess({{$event->id}})" class="btn btn-primary btn-sm">Plan Your Visit</a>
                    @elseif( $ticketOrExhibit == 0 )
                      {{--<a href="{{route('event.exhibit', ['board' => 'business'])}}" class="btn btn-primary btn-sm">Book your Space</a>{{route('event.product',['slug' => $event->slug])}}--}}
                    
                      <a href="#" class="btn btn-primary btn-sm"  wire:click.prevent="insertEventToSess({{$event->id}})">Book your Space</a>
                  @endif
                @else
                <a href="{{route('event.exhibit', ['board' => 'business'])}}" class="btn btn-primary btn-sm">Book your Space</a>
                @endif
              </div>
            </div>
          @elseif($event->eventype == 'expo')

            @if($event->businessrevenue == 'visitor')
              <div class="handheld-toolbar bg-secondary">
                <div class="d-flex justify-content-between py-2 px-2">
                  @php
                    $currentTime = now()->format( 'H:m:s');
                    $currentDate = now()->format( 'Y-m-d'); 
                    $productfreeorcost = DB::table('tickets')->where('admstatus','1')->where('status','1')->where('event_id', $event -> id)->count();
                    $productminPrice = DB::table('tickets')->where('admstatus','1')->where('status','1')->where('event_id', $event -> id)->where('expiry_date', '>=' , $currentDate)->where('expiry_time', '>=' , $currentTime)->min('price');
                  @endphp
                  <div class="text-dark  pl-3 lh-1">
                    <span class = "fw-medium fs-sm">
                      @if($productfreeorcost == '0')
                        Free
                      @else
                        Rs.{{$productminPrice}}
                      @endif
                    </span>
                    <br>
                    <span class=" fw-normal fs-xs">Onwards</span>
                  </div>
                  <a href="{{route('event.exhibit', ['board' => 'registration-great-exhibition-to-visit'])}}" class="btn btn-primary btn-sm">Registration</a>
                    <!-- @if( $event->businessrevenue == 'visitor' )  
                      @if( $ticketOrExhibit != 0 )
                          <a href="#"  wire:click.prevent="insertEventToSess({{$event->id}})" class="btn btn-primary btn-sm">Plan Your Visit</a>
                        @elseif( $ticketOrExhibit == 0 )
                          {{--<a href="{{route('event.exhibit', ['board' => 'business'])}}" class="btn btn-primary btn-sm">Book your Space</a>{{route('event.product',['slug' => $event->slug])}}--}}
                        
                          <a href="#" class="btn btn-primary btn-sm"  wire:click.prevent="insertEventToSess({{$event->id}})">Book your Space</a>
                      @endif
                      @else
                      <a href="{{route('event.exhibit', ['board' => 'registration-great-exhibition-to-exhibit'])}}" class="btn btn-primary btn-sm">Book your Space</a>
                    @endif -->

                  </div>
              </div>
            @else
              <div class="handheld-toolbar bg-secondary">
                <div class="d-flex justify-content-between py-2 px-2">
                  <div class="text-dark  pl-3 lh-1">
                    <span class = "fw-medium fs-sm">Call us +91-999-185-6776</span><br>
                    <span class=" fw-normal fs-xs">Get extra ad-ons</span></div>
                        @if( $event->businessrevenue == 'visitor' )  
                        @if( $ticketOrExhibit != 0 )
                            <a href="#"  wire:click.prevent="insertEventToSess({{$event->id}})" class="btn btn-primary btn-sm">Plan Your Visit</a>
                            @elseif( $ticketOrExhibit == 0 )
                            {{--<a href="{{route('event.exhibit', ['board' => 'business'])}}" class="btn btn-primary btn-sm">Book your Space</a>{{route('event.product',['slug' => $event->slug])}}--}}
                            
                            <a href="#" class="btn btn-primary btn-sm"  wire:click.prevent="insertEventToSess({{$event->id}})">Book your Space</a>
                        @endif
                        @else
                        <a href="{{route('event.exhibit', ['board' => 'business'])}}" class="btn btn-primary btn-sm">Book your Space</a>
                        @endif
                  </div>
              </div>
            @endif
          @elseif($event->eventype == 'embassy')
            <div class="handheld-toolbar bg-secondary">
              <div class="d-flex justify-content-between py-2 px-2">
              <div class="text-dark  pl-3 lh-1">  <span class = "fw-medium fs-sm">Rs.{{$productPrice}}</span><br><span class=" fw-normal fs-xs">Onwards</span></div>
                
                <a href="{{route('event.exhibit', ['board' => 'embassy'])}}" class="btn btn-primary btn-sm">Plan your Visit</a>
                
              </div>
            </div>
          @endif

            
              <!-- left: 0; -->
                <style>
                    .fixed-bottom-div {
                        position: fixed;
                        bottom: 0;
                        width: 100%;
                        background-color: #fff; /* Light background color */
                        border-top: 1px solid #dee2e6; /* Optional border */
                        padding: 10px;
                        z-index: 9999; /* Ensures it stays on top */
                    }
                </style>

                <!-- fixedthis -->
               <div class="d-none d-sm-block fixed-bottom-div shadow-lg">
                <ul class="container list-unstyled fs-sm py-2">
                    <li class="d-flex justify-content-between p-0 m-0">
                    <span class="col bg-light mb-0">
                        <span class="badge bg-primary mt-0">{{$event->edition}}th</span>
                        <h3 class="mb-0">{{$event->eventname}}</h3>

                            @if(Carbon::parse($event->startdate)->format('M') != Carbon::parse($event->enddate)->format('M'))
                                {{Carbon::parse($event->startdate)->format('D, d M')}} - {{Carbon::parse($event->enddate)->format('D, d M y')}}
                            @else
                                {{Carbon::parse($event->startdate)->format('D, d ')}} - {{Carbon::parse($event->enddate)->format('D, d M, Y')}}
                            @endif

                        <i class="bi bi-geo-alt-fill"></i> {{ucwords(trans($event->venue))}}, {{ucwords(trans($event->city))}}, {{ucwords(trans($event->country))}}
                    </span>

                    <span class="text-end">
                        {{-- CTA Buttons --}}
                        @if($event->businessrevenue == 'visitor')       
                            @if($ticketOrExhibit != 0)
                                <a class="btn btn-primary btn-sm mt-3 me-1" href="{{route('event.product',['slug' => $event->slug])}}">Book your Tickets</a>
                            @elseif($ticketOrExhibit == 0)
                                <a class="btn btn-primary btn-sm mt-3 me-1" href="{{route('event.exhibit', ['board' => 'business'])}}">Plan your Visit</a>
                            @endif
                        @else
                            <a class="btn btn-primary btn-sm mt-3 me-1" href="{{route('event.exhibit', ['board' => 'business'])}}">Book your Space</a>
                            <a class="btn btn-primary btn-sm mt-3 me-1" href="{{route('event.product',['slug' => $event->slug])}}">Plan your Visit</a>
                        @endif

                        {{-- Call Info Below Buttons --}}
                        <div class="mt-2">
                        <span class="d-block fw-medium fs-sm">
                            📞 Call us <a href="tel:+919991856776" class="text-decoration-none text-dark">+91-999-185-6776</a>
                        </span>
                        <span class="d-block fw-normal fs-xs text-muted">Get extra ad-ons</span>
                        </div> 
                    </span>
                    </li>
                </ul>
               </div>



              
    @php
        $updateQuestion = DB::table('questions')->where('event_id' , $event->id)->get();
    @endphp
    
    
    @push('scripts')

          <script>
            document.addEventListener('DOMContentLoaded', function(){
              if(localStorage.getItem('currentTab')) {
                this.call('switchTab', localStorage.getItem('currentTab'));
              }

              document.querySelectorAll('.nav-link').forEach(function (element) {
                element.addEventListener('click', function(){
                  localStorage.setItem('currentTab', this.getAttribute('wire:click.prevent').replace('switchTab(','').replace(')',''));
                });
              });
            });
          </script>

          <script type = "application/ld+json">
            {
                  "@context": "https://schema.org",
                  "@type": "Event",
                  "name": "{{$event->eventname}}",
                  "startDate": "{{Carbon::parse ($event->startdate)->format('Y-m-d')}}",
                  "endDate": "{{Carbon::parse ($event->enddate)->format('Y-m-d')}}",
                  "eventAttendanceMode": "https://schema.org/OfflineEventAttendanceMode",
                  "eventStatus": "https://schema.org/EventScheduled",

                  "location": {
                    "@type": "Place",
                    "name": "{{$event->venue}}",

                    "address": {
                      "@type": "PostalAddress",
                      "streetAddress": "{{$event->venue}}",
                      "addressLocality": "{{$event->venue}}",
                      "postalCode": "110011",
                      "addressRegion": "{{$event->city}}",
                      "addressCountry": "IN"
                    }
                  },

                  "image": [
                    "{{url('assets/image/exhibition/'.$event->image)}}"
                  ],

                  "description": "{{$event->shtdesc}}",
                  "offers": {
                    "@type": "Offer",
                    "url": "{{route('event.product',['slug' => $event->slug])}}",
                    "price": "{{$productPrice}}",
                    "priceCurrency": "INR",
                    "availability": "{{Carbon::parse ($event->startdate)->format('Y-m-d')}}",
                    "validFrom": "{{Carbon::parse ($event->startdate)->format('Y-m-d')}}"
                  },


                  "performer": {
                    "@type": "PerformingGroup",
                    "name": "The Exhibition Network"
                  },

                  "organizer": {
                    "@type": "Organization",
                    "name": "The Exhibition Network",
                    "url": "https://exhibition.org.in"
                  },

                  "aggregateRating": {
                    "@type": "AggregateRating",
                    "ratingValue": "{{round($commentedRates->avg('rate') , 1)}}",
                    "ratingCount": "{{$commentedRates->count()}}",
                    "bestRating": "10"
                  }
                  
            }
          </script>

          <script type = "application/ld+json">
            {
              "@context" : "https:schema.org"
              "@type": "FAQPage",
              "mainEntity": [
                
                
                @foreach($updateQuestion as $questions)  
                  {
                    "@type" : "Question",
                    "name" : "",
                    "acceptedAnswer":{
                    "@type" : "Answer",
                    "text": "<p></p>"
                    }
                  },
                @endforeach
              ]
            }
          </script>

          <script type="text/javascript">

            const gmailbtn = document.getElementById('gmail-btn');
            const facebookbtn = document.getElementById('facebook-btn');
            const twitterbtn = document.getElementById('twitter-btn');
            const linkedinbtn = document.getElementById('linkedin-btn');
            const whatsappbtn = document.getElementById('whatsapp-btn');

            //url
            let postUrl = encodeURI(document.location.href);
            let postTitle = encodeURI('{{$event->eventname}}');
            let postIMage = encodeURI('{{$event->eventname}}');
          
           
            gmailbtn.setAttribute("href",'https://mail.gmail.com/mail/?view=cm&su=${postTitle}&body=${postUrl}');

            facebookbtn.setAttribute("href",'https://wwww.facebook.com/sharer.php?u=${postUrl}');

            twitterbtn.setAttribute("href",'https://twitter.com/share?url=${postUrl}&text=${postTitle}');

            linkedinbtn.setAttribute("href",'https://wwww.linkedin.com/shareArticle?url=${postUrl}&title=${postTitle}');
           
            whatsappbtn.setAttribute("href",'https://wa.me/?text=${postTitle}${postUrl}');

            const shareBtn = document.getElementById('shareBtn');
            if(navigator.share){
              shareBtn.style.display = 'block';
              shareBtn.addEventListener('click',()=>{
                navigator.share({
                  title : postTitle,
                  url : postUrl,

                }).then((result)=>{
                  alert('Thank you for sharing.')
                }).catch((err)=>{
                  console.log(err);
                });
                });
              }else{

            }

          </script>

          <script>
            window.addEventListener('scroll', function() {
             var header = document.getElementById('main-header');
             if(window.screenY > 50 ) {
              header.classList.add('show-header');
             }else{
              header.classList.remove('show-header');
             }

            });
          </script>
        
    @endpush

  </main>