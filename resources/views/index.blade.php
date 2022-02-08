<html lang="en" data-theme="light" style="--chakra-ui-color-mode:light;">

<head>
    <meta name="og:image" content="https://walletconnect.com/social-card.png">
    <meta name="twitter:image:alt" content="Connect web3 wallets to dapps.">
    <meta name="og:description"
          content="WalletConnect is the open source web3 standard to connect blockchain wallets to dapps.">
    <meta name="og:site_name" content="WalletConnect">
    <meta name="fb:admins" content="365412154213405">
    <meta name="viewport" content="width=device-width">
    <title>Home - {{config('app.name')}}</title>
    <meta name="description"
          content="WalletConnect is an open source protocol for connecting decentralised applications to mobile wallets with QR code scanning or deep linking.">
    <meta charset="utf-8">
    <link rel="icon" href="/favicon.ico">
    <meta name="next-head-count" content="7">
    <noscript data-n-css=""></noscript>

    <style>

        .login-popup {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            z-index: 1099;
            /* background-color: #151515a6; */
            background-color: rgba(0, 0, 0, 0.6);
            visibility: hidden;
            opacity: 0;
            transition: all 1s ease;
        }

        .login-popup.show {
            visibility: visible;
            opacity: 1;
        }

        .login-popup .box {
            background-color: none;
            width: 325px;
            position: absolute;
            left: 37%;
            top: 15%;
            /* transform: translate(-50%,-50%); */
            display: flex;
            flex-wrap: wrap;
            opacity: 0;
            padding: 12px 15px 12px 9px;
            margin-left: 50px;
            border-radius: 3px;
            /* transition: all 1s ease; */

        }

        .login-popup.show .box {
            opacity: 1;
            margin-left: 0;
        }

        .login-popup .box .img-area {
            flex: 0 0 50%;
            max-width: 50%;
            position: relative;
            overflow: hidden;
            padding: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-popup .box .img-area h1 {
            font-size: 30px;
        }

        .login-popup .box .img-area .img {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-image: url('img/bg.jpg');
            background-size: cover;
            background-position: center;
            animation: zoomInOut 7s linear infinite;
            z-index: -1;

        }

        @keyframes zoomInOut {
            0%, 100% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.1);
            }
        }

        .login-popup .box .form {
            flex: 0 0 50%;
            max-width: 50%;
            padding: 40px 30px;
        }

        .login-popup .box .form h1 {
            color: #000000;
            font-size: 30px;
            margin: 0 0 30px;
        }

        .login-popup .box .form .form-control {
            height: 45px;
            margin-bottom: 30px;
            width: 100%;
            border: none;
            border-bottom: 1px solid #cccccc;
            font-size: 15px;
            color: #000000;
        }

        .login-popup .box .form .form-control:focus {
            outline: none;
        }

        .login-popup .box .form label {
            font-size: 15px;
            color: #555555;
        }

        .login-popup .box .form .btn {
            width: 100%;
            background-color: #E91E63;
            margin-top: 40px;
            height: 45px;
            border: none;
            border-radius: 25px;
            font-size: 15px;
            text-transform: uppercase;
            color: #ffffff;
            cursor: pointer;
        }

        .login-popup .box .form .btn:focus {
            outline: none;
        }

        /* .login-popup .box .form .close{
          position: absolute;
          right: 10px;
          top:0px;
          font-size: 30px;
          cursor: pointer;
          color: #000;
        } */
        @media only screen and (max-width: 480px) {


            .login-popup .box {

                /* top: 12%; */
                max-width: 100%;
                left: 10%;
            }

        }


        @media only screen and (max-width: 480px) {

            .login-popup .box {
                top: 12%;
                max-width: 100%;
            }

        }
    </style>
    <style data-emotion="css-global" data-s="">
        :host, :root {
            --chakra-ring-inset: var(--chakra-empty, /*!*/ /*!*/);
            --chakra-ring-offset-width: 0px;
            --chakra-ring-offset-color: #fff;
            --chakra-ring-color: rgba(66, 153, 225, 0.6);
            --chakra-ring-offset-shadow: 0 0 #0000;
            --chakra-ring-shadow: 0 0 #0000;
            --chakra-space-x-reverse: 0;
            --chakra-space-y-reverse: 0;
            --chakra-colors-transparent: transparent;
            --chakra-colors-current: currentColor;
            --chakra-colors-black: #000000;
            --chakra-colors-white: #FFFFFF;
            --chakra-colors-whiteAlpha-50: rgba(255, 255, 255, 0.04);
            --chakra-colors-whiteAlpha-100: rgba(255, 255, 255, 0.06);
            --chakra-colors-whiteAlpha-200: rgba(255, 255, 255, 0.08);
            --chakra-colors-whiteAlpha-300: rgba(255, 255, 255, 0.16);
            --chakra-colors-whiteAlpha-400: rgba(255, 255, 255, 0.24);
            --chakra-colors-whiteAlpha-500: rgba(255, 255, 255, 0.36);
            --chakra-colors-whiteAlpha-600: rgba(255, 255, 255, 0.48);
            --chakra-colors-whiteAlpha-700: rgba(255, 255, 255, 0.64);
            --chakra-colors-whiteAlpha-800: rgba(255, 255, 255, 0.80);
            --chakra-colors-whiteAlpha-900: rgba(255, 255, 255, 0.92);
            --chakra-colors-blackAlpha-50: rgba(0, 0, 0, 0.04);
            --chakra-colors-blackAlpha-100: rgba(0, 0, 0, 0.06);
            --chakra-colors-blackAlpha-200: rgba(0, 0, 0, 0.08);
            --chakra-colors-blackAlpha-300: rgba(0, 0, 0, 0.16);
            --chakra-colors-blackAlpha-400: rgba(0, 0, 0, 0.24);
            --chakra-colors-blackAlpha-500: rgba(0, 0, 0, 0.36);
            --chakra-colors-blackAlpha-600: rgba(0, 0, 0, 0.48);
            --chakra-colors-blackAlpha-700: rgba(0, 0, 0, 0.64);
            --chakra-colors-blackAlpha-800: rgba(0, 0, 0, 0.80);
            --chakra-colors-blackAlpha-900: rgba(0, 0, 0, 0.92);
            --chakra-colors-gray-50: #F7FAFC;
            --chakra-colors-gray-100: #EDF2F7;
            --chakra-colors-gray-200: #E2E8F0;
            --chakra-colors-gray-300: #CBD5E0;
            --chakra-colors-gray-400: #A0AEC0;
            --chakra-colors-gray-500: #718096;
            --chakra-colors-gray-600: #4A5568;
            --chakra-colors-gray-700: #2D3748;
            --chakra-colors-gray-800: #1A202C;
            --chakra-colors-gray-900: #171923;
            --chakra-colors-red-50: #FFF5F5;
            --chakra-colors-red-100: #FED7D7;
            --chakra-colors-red-200: #FEB2B2;
            --chakra-colors-red-300: #FC8181;
            --chakra-colors-red-400: #F56565;
            --chakra-colors-red-500: #E53E3E;
            --chakra-colors-red-600: #C53030;
            --chakra-colors-red-700: #9B2C2C;
            --chakra-colors-red-800: #822727;
            --chakra-colors-red-900: #63171B;
            --chakra-colors-orange-50: #FFFAF0;
            --chakra-colors-orange-100: #FEEBC8;
            --chakra-colors-orange-200: #FBD38D;
            --chakra-colors-orange-300: #F6AD55;
            --chakra-colors-orange-400: #ED8936;
            --chakra-colors-orange-500: #DD6B20;
            --chakra-colors-orange-600: #C05621;
            --chakra-colors-orange-700: #9C4221;
            --chakra-colors-orange-800: #7B341E;
            --chakra-colors-orange-900: #652B19;
            --chakra-colors-yellow-50: #FFFFF0;
            --chakra-colors-yellow-100: #FEFCBF;
            --chakra-colors-yellow-200: #FAF089;
            --chakra-colors-yellow-300: #F6E05E;
            --chakra-colors-yellow-400: #ECC94B;
            --chakra-colors-yellow-500: #D69E2E;
            --chakra-colors-yellow-600: #B7791F;
            --chakra-colors-yellow-700: #975A16;
            --chakra-colors-yellow-800: #744210;
            --chakra-colors-yellow-900: #5F370E;
            --chakra-colors-green-50: #F0FFF4;
            --chakra-colors-green-100: #C6F6D5;
            --chakra-colors-green-200: #9AE6B4;
            --chakra-colors-green-300: #68D391;
            --chakra-colors-green-400: #48BB78;
            --chakra-colors-green-500: #38A169;
            --chakra-colors-green-600: #2F855A;
            --chakra-colors-green-700: #276749;
            --chakra-colors-green-800: #22543D;
            --chakra-colors-green-900: #1C4532;
            --chakra-colors-teal-50: #E6FFFA;
            --chakra-colors-teal-100: #B2F5EA;
            --chakra-colors-teal-200: #81E6D9;
            --chakra-colors-teal-300: #4FD1C5;
            --chakra-colors-teal-400: #38B2AC;
            --chakra-colors-teal-500: #319795;
            --chakra-colors-teal-600: #2C7A7B;
            --chakra-colors-teal-700: #285E61;
            --chakra-colors-teal-800: #234E52;
            --chakra-colors-teal-900: #1D4044;
            --chakra-colors-blue-50: #ebf8ff;
            --chakra-colors-blue-100: #bee3f8;
            --chakra-colors-blue-200: #90cdf4;
            --chakra-colors-blue-300: #63b3ed;
            --chakra-colors-blue-400: #4299e1;
            --chakra-colors-blue-500: #3182ce;
            --chakra-colors-blue-600: #2b6cb0;
            --chakra-colors-blue-700: #2c5282;
            --chakra-colors-blue-800: #2a4365;
            --chakra-colors-blue-900: #1A365D;
            --chakra-colors-cyan-50: #EDFDFD;
            --chakra-colors-cyan-100: #C4F1F9;
            --chakra-colors-cyan-200: #9DECF9;
            --chakra-colors-cyan-300: #76E4F7;
            --chakra-colors-cyan-400: #0BC5EA;
            --chakra-colors-cyan-500: #00B5D8;
            --chakra-colors-cyan-600: #00A3C4;
            --chakra-colors-cyan-700: #0987A0;
            --chakra-colors-cyan-800: #086F83;
            --chakra-colors-cyan-900: #065666;
            --chakra-colors-purple-50: #FAF5FF;
            --chakra-colors-purple-100: #E9D8FD;
            --chakra-colors-purple-200: #D6BCFA;
            --chakra-colors-purple-300: #B794F4;
            --chakra-colors-purple-400: #9F7AEA;
            --chakra-colors-purple-500: #805AD5;
            --chakra-colors-purple-600: #6B46C1;
            --chakra-colors-purple-700: #553C9A;
            --chakra-colors-purple-800: #44337A;
            --chakra-colors-purple-900: #322659;
            --chakra-colors-pink-50: #FFF5F7;
            --chakra-colors-pink-100: #FED7E2;
            --chakra-colors-pink-200: #FBB6CE;
            --chakra-colors-pink-300: #F687B3;
            --chakra-colors-pink-400: #ED64A6;
            --chakra-colors-pink-500: #D53F8C;
            --chakra-colors-pink-600: #B83280;
            --chakra-colors-pink-700: #97266D;
            --chakra-colors-pink-800: #702459;
            --chakra-colors-pink-900: #521B41;
            --chakra-colors-linkedin-50: #E8F4F9;
            --chakra-colors-linkedin-100: #CFEDFB;
            --chakra-colors-linkedin-200: #9BDAF3;
            --chakra-colors-linkedin-300: #68C7EC;
            --chakra-colors-linkedin-400: #34B3E4;
            --chakra-colors-linkedin-500: #00A0DC;
            --chakra-colors-linkedin-600: #008CC9;
            --chakra-colors-linkedin-700: #0077B5;
            --chakra-colors-linkedin-800: #005E93;
            --chakra-colors-linkedin-900: #004471;
            --chakra-colors-facebook-50: #E8F4F9;
            --chakra-colors-facebook-100: #D9DEE9;
            --chakra-colors-facebook-200: #B7C2DA;
            --chakra-colors-facebook-300: #6482C0;
            --chakra-colors-facebook-400: #4267B2;
            --chakra-colors-facebook-500: #385898;
            --chakra-colors-facebook-600: #314E89;
            --chakra-colors-facebook-700: #29487D;
            --chakra-colors-facebook-800: #223B67;
            --chakra-colors-facebook-900: #1E355B;
            --chakra-colors-messenger-50: #D0E6FF;
            --chakra-colors-messenger-100: #B9DAFF;
            --chakra-colors-messenger-200: #A2CDFF;
            --chakra-colors-messenger-300: #7AB8FF;
            --chakra-colors-messenger-400: #2E90FF;
            --chakra-colors-messenger-500: #0078FF;
            --chakra-colors-messenger-600: #0063D1;
            --chakra-colors-messenger-700: #0052AC;
            --chakra-colors-messenger-800: #003C7E;
            --chakra-colors-messenger-900: #002C5C;
            --chakra-colors-whatsapp-50: #dffeec;
            --chakra-colors-whatsapp-100: #b9f5d0;
            --chakra-colors-whatsapp-200: #90edb3;
            --chakra-colors-whatsapp-300: #65e495;
            --chakra-colors-whatsapp-400: #3cdd78;
            --chakra-colors-whatsapp-500: #22c35e;
            --chakra-colors-whatsapp-600: #179848;
            --chakra-colors-whatsapp-700: #0c6c33;
            --chakra-colors-whatsapp-800: #01421c;
            --chakra-colors-whatsapp-900: #001803;
            --chakra-colors-twitter-50: #E5F4FD;
            --chakra-colors-twitter-100: #C8E9FB;
            --chakra-colors-twitter-200: #A8DCFA;
            --chakra-colors-twitter-300: #83CDF7;
            --chakra-colors-twitter-400: #57BBF5;
            --chakra-colors-twitter-500: #1DA1F2;
            --chakra-colors-twitter-600: #1A94DA;
            --chakra-colors-twitter-700: #1681BF;
            --chakra-colors-twitter-800: #136B9E;
            --chakra-colors-twitter-900: #0D4D71;
            --chakra-colors-telegram-50: #E3F2F9;
            --chakra-colors-telegram-100: #C5E4F3;
            --chakra-colors-telegram-200: #A2D4EC;
            --chakra-colors-telegram-300: #7AC1E4;
            --chakra-colors-telegram-400: #47A9DA;
            --chakra-colors-telegram-500: #0088CC;
            --chakra-colors-telegram-600: #007AB8;
            --chakra-colors-telegram-700: #006BA1;
            --chakra-colors-telegram-800: #005885;
            --chakra-colors-telegram-900: #003F5E;
            --chakra-colors-brand-500: #3999FB;
            --chakra-borders-none: 0;
            --chakra-borders-1px: 1px solid;
            --chakra-borders-2px: 2px solid;
            --chakra-borders-4px: 4px solid;
            --chakra-borders-8px: 8px solid;
            --chakra-fonts-heading: -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            --chakra-fonts-body: -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            --chakra-fonts-mono: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            --chakra-fontSizes-xs: 0.75rem;
            --chakra-fontSizes-sm: 0.875rem;
            --chakra-fontSizes-md: 1rem;
            --chakra-fontSizes-lg: 1.125rem;
            --chakra-fontSizes-xl: 1.25rem;
            --chakra-fontSizes-2xl: 1.5rem;
            --chakra-fontSizes-3xl: 1.875rem;
            --chakra-fontSizes-4xl: 2.25rem;
            --chakra-fontSizes-5xl: 3rem;
            --chakra-fontSizes-6xl: 3.75rem;
            --chakra-fontSizes-7xl: 4.5rem;
            --chakra-fontSizes-8xl: 6rem;
            --chakra-fontSizes-9xl: 8rem;
            --chakra-fontWeights-hairline: 100;
            --chakra-fontWeights-thin: 200;
            --chakra-fontWeights-light: 300;
            --chakra-fontWeights-normal: 400;
            --chakra-fontWeights-medium: 500;
            --chakra-fontWeights-semibold: 600;
            --chakra-fontWeights-bold: 700;
            --chakra-fontWeights-extrabold: 800;
            --chakra-fontWeights-black: 900;
            --chakra-letterSpacings-tighter: -0.05em;
            --chakra-letterSpacings-tight: -0.025em;
            --chakra-letterSpacings-normal: 0;
            --chakra-letterSpacings-wide: 0.025em;
            --chakra-letterSpacings-wider: 0.05em;
            --chakra-letterSpacings-widest: 0.1em;
            --chakra-lineHeights-3: .75rem;
            --chakra-lineHeights-4: 1rem;
            --chakra-lineHeights-5: 1.25rem;
            --chakra-lineHeights-6: 1.5rem;
            --chakra-lineHeights-7: 1.75rem;
            --chakra-lineHeights-8: 2rem;
            --chakra-lineHeights-9: 2.25rem;
            --chakra-lineHeights-10: 2.5rem;
            --chakra-lineHeights-normal: normal;
            --chakra-lineHeights-none: 1;
            --chakra-lineHeights-shorter: 1.25;
            --chakra-lineHeights-short: 1.375;
            --chakra-lineHeights-base: 1.5;
            --chakra-lineHeights-tall: 1.625;
            --chakra-lineHeights-taller: 2;
            --chakra-radii-none: 0;
            --chakra-radii-sm: 0.125rem;
            --chakra-radii-base: 0.25rem;
            --chakra-radii-md: 0.375rem;
            --chakra-radii-lg: 0.5rem;
            --chakra-radii-xl: 0.75rem;
            --chakra-radii-2xl: 1rem;
            --chakra-radii-3xl: 1.5rem;
            --chakra-radii-full: 9999px;
            --chakra-space-1: 0.25rem;
            --chakra-space-2: 0.5rem;
            --chakra-space-3: 0.75rem;
            --chakra-space-4: 1rem;
            --chakra-space-5: 1.25rem;
            --chakra-space-6: 1.5rem;
            --chakra-space-7: 1.75rem;
            --chakra-space-8: 2rem;
            --chakra-space-9: 2.25rem;
            --chakra-space-10: 2.5rem;
            --chakra-space-12: 3rem;
            --chakra-space-14: 3.5rem;
            --chakra-space-16: 4rem;
            --chakra-space-20: 5rem;
            --chakra-space-24: 6rem;
            --chakra-space-28: 7rem;
            --chakra-space-32: 8rem;
            --chakra-space-36: 9rem;
            --chakra-space-40: 10rem;
            --chakra-space-44: 11rem;
            --chakra-space-48: 12rem;
            --chakra-space-52: 13rem;
            --chakra-space-56: 14rem;
            --chakra-space-60: 15rem;
            --chakra-space-64: 16rem;
            --chakra-space-72: 18rem;
            --chakra-space-80: 20rem;
            --chakra-space-96: 24rem;
            --chakra-space-px: 1px;
            --chakra-space-0-5: 0.125rem;
            --chakra-space-1-5: 0.375rem;
            --chakra-space-2-5: 0.625rem;
            --chakra-space-3-5: 0.875rem;
            --chakra-shadows-xs: 0 0 0 1px rgba(0, 0, 0, 0.05);
            --chakra-shadows-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
            --chakra-shadows-base: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
            --chakra-shadows-md: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            --chakra-shadows-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            --chakra-shadows-xl: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            --chakra-shadows-2xl: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
            --chakra-shadows-outline: 0 0 0 3px rgba(66, 153, 225, 0.6);
            --chakra-shadows-inner: inset 0 2px 4px 0 rgba(0, 0, 0, 0.06);
            --chakra-shadows-none: none;
            --chakra-shadows-dark-lg: rgba(0, 0, 0, 0.1) 0px 0px 0px 1px, rgba(0, 0, 0, 0.2) 0px 5px 10px, rgba(0, 0, 0, 0.4) 0px 15px 40px;
            --chakra-sizes-1: 0.25rem;
            --chakra-sizes-2: 0.5rem;
            --chakra-sizes-3: 0.75rem;
            --chakra-sizes-4: 1rem;
            --chakra-sizes-5: 1.25rem;
            --chakra-sizes-6: 1.5rem;
            --chakra-sizes-7: 1.75rem;
            --chakra-sizes-8: 2rem;
            --chakra-sizes-9: 2.25rem;
            --chakra-sizes-10: 2.5rem;
            --chakra-sizes-12: 3rem;
            --chakra-sizes-14: 3.5rem;
            --chakra-sizes-16: 4rem;
            --chakra-sizes-20: 5rem;
            --chakra-sizes-24: 6rem;
            --chakra-sizes-28: 7rem;
            --chakra-sizes-32: 8rem;
            --chakra-sizes-36: 9rem;
            --chakra-sizes-40: 10rem;
            --chakra-sizes-44: 11rem;
            --chakra-sizes-48: 12rem;
            --chakra-sizes-52: 13rem;
            --chakra-sizes-56: 14rem;
            --chakra-sizes-60: 15rem;
            --chakra-sizes-64: 16rem;
            --chakra-sizes-72: 18rem;
            --chakra-sizes-80: 20rem;
            --chakra-sizes-96: 24rem;
            --chakra-sizes-px: 1px;
            --chakra-sizes-0-5: 0.125rem;
            --chakra-sizes-1-5: 0.375rem;
            --chakra-sizes-2-5: 0.625rem;
            --chakra-sizes-3-5: 0.875rem;
            --chakra-sizes-max: max-content;
            --chakra-sizes-min: min-content;
            --chakra-sizes-full: 100%;
            --chakra-sizes-3xs: 14rem;
            --chakra-sizes-2xs: 16rem;
            --chakra-sizes-xs: 20rem;
            --chakra-sizes-sm: 24rem;
            --chakra-sizes-md: 28rem;
            --chakra-sizes-lg: 32rem;
            --chakra-sizes-xl: 36rem;
            --chakra-sizes-2xl: 42rem;
            --chakra-sizes-3xl: 48rem;
            --chakra-sizes-4xl: 56rem;
            --chakra-sizes-5xl: 64rem;
            --chakra-sizes-6xl: 72rem;
            --chakra-sizes-7xl: 80rem;
            --chakra-sizes-8xl: 90rem;
            --chakra-sizes-container-sm: 640px;
            --chakra-sizes-container-md: 768px;
            --chakra-sizes-container-lg: 1024px;
            --chakra-sizes-container-xl: 1280px;
            --chakra-zIndices-hide: -1;
            --chakra-zIndices-auto: auto;
            --chakra-zIndices-base: 0;
            --chakra-zIndices-docked: 10;
            --chakra-zIndices-dropdown: 1000;
            --chakra-zIndices-sticky: 1100;
            --chakra-zIndices-banner: 1200;
            --chakra-zIndices-overlay: 1300;
            --chakra-zIndices-modal: 1400;
            --chakra-zIndices-popover: 1500;
            --chakra-zIndices-skipLink: 1600;
            --chakra-zIndices-toast: 1700;
            --chakra-zIndices-tooltip: 1800;
            --chakra-transition-property-common: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform;
            --chakra-transition-property-colors: background-color, border-color, color, fill, stroke;
            --chakra-transition-property-dimensions: width, height;
            --chakra-transition-property-position: left, right, top, bottom;
            --chakra-transition-property-background: background-color, background-image, background-position;
            --chakra-transition-easing-ease-in: cubic-bezier(0.4, 0, 1, 1);
            --chakra-transition-easing-ease-out: cubic-bezier(0, 0, 0.2, 1);
            --chakra-transition-easing-ease-in-out: cubic-bezier(0.4, 0, 0.2, 1);
            --chakra-transition-duration-ultra-fast: 50ms;
            --chakra-transition-duration-faster: 100ms;
            --chakra-transition-duration-fast: 150ms;
            --chakra-transition-duration-normal: 200ms;
            --chakra-transition-duration-slow: 300ms;
            --chakra-transition-duration-slower: 400ms;
            --chakra-transition-duration-ultra-slow: 500ms;
            --chakra-blur-none: 0;
            --chakra-blur-sm: 4px;
            --chakra-blur-base: 8px;
            --chakra-blur-md: 12px;
            --chakra-blur-lg: 16px;
            --chakra-blur-xl: 24px;
            --chakra-blur-2xl: 40px;
            --chakra-blur-3xl: 64px;
        }
    </style>
    <style data-emotion="css-global" data-s="">
        html {
            line-height: 1.5;
            -webkit-text-size-adjust: 100%;
            font-family: system-ui, sans-serif;
            -webkit-font-smoothing: antialiased;
            text-rendering: optimizeLegibility;
            -moz-osx-font-smoothing: grayscale;
            touch-action: manipulation;
        }

        body {
            position: relative;
            min-height: 100%;
            font-feature-settings: 'kern';
        }

        *, *::before, *::after {
            border-width: 0;
            border-style: solid;
            box-sizing: border-box;
        }

        main {
            display: block;
        }

        hr {
            border-top-width: 1px;
            box-sizing: content-box;
            height: 0;
            overflow: visible;
        }

        pre, code, kbd, samp {
            font-family: SFMono-Regular, Menlo, Monaco, Consolas, monospace;
            font-size: 1em;
        }

        a {
            background-color: transparent;
            color: inherit;
            -webkit-text-decoration: inherit;
            text-decoration: inherit;
        }

        abbr[title] {
            border-bottom: none;
            -webkit-text-decoration: underline;
            text-decoration: underline;
            -webkit-text-decoration: underline dotted;
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted;
        }

        b, strong {
            font-weight: bold;
        }

        small {
            font-size: 80%;
        }

        sub, sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline;
        }

        sub {
            bottom: -0.25em;
        }

        sup {
            top: -0.5em;
        }

        img {
            border-style: none;
        }

        button, input, optgroup, select, textarea {
            font-family: inherit;
            font-size: 100%;
            line-height: 1.15;
            margin: 0;
        }

        button, input {
            overflow: visible;
        }

        button, select {
            text-transform: none;
        }

        button::-moz-focus-inner, [type="button"]::-moz-focus-inner, [type="reset"]::-moz-focus-inner, [type="submit"]::-moz-focus-inner {
            border-style: none;
            padding: 0;
        }

        fieldset {
            padding: 0.35em 0.75em 0.625em;
        }

        legend {
            box-sizing: border-box;
            color: inherit;
            display: table;
            max-width: 100%;
            padding: 0;
            white-space: normal;
        }

        progress {
            vertical-align: baseline;
        }

        textarea {
            overflow: auto;
        }

        [type="checkbox"], [type="radio"] {
            box-sizing: border-box;
            padding: 0;
        }

        [type="number"]::-webkit-inner-spin-button, [type="number"]::-webkit-outer-spin-button {
            -webkit-appearance: none !important;
        }

        input[type="number"] {
            -moz-appearance: textfield;
        }

        [type="search"] {
            -webkit-appearance: textfield;
            outline-offset: -2px;
        }

        [type="search"]::-webkit-search-decoration {
            -webkit-appearance: none !important;
        }

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit;
        }

        details {
            display: block;
        }

        summary {
            display: -webkit-box;
            display: -webkit-list-item;
            display: -ms-list-itembox;
            display: list-item;
        }

        template {
            display: none;
        }

        [hidden] {
            display: none !important;
        }

        body, blockquote, dl, dd, h1, h2, h3, h4, h5, h6, hr, figure, p, pre {
            margin: 0;
        }

        button {
            background: transparent;
            padding: 0;
        }

        fieldset {
            margin: 0;
            padding: 0;
        }

        ol, ul {
            margin: 0;
            padding: 0;
        }

        textarea {
            resize: vertical;
        }

        button, [role="button"] {
            cursor: pointer;
        }

        button::-moz-focus-inner {
            border: 0 !important;
        }

        table {
            border-collapse: collapse;
        }

        h1, h2, h3, h4, h5, h6 {
            font-size: inherit;
            font-weight: inherit;
        }

        button, input, optgroup, select, textarea {
            padding: 0;
            line-height: inherit;
            color: inherit;
        }

        img, svg, video, canvas, audio, iframe, embed, object {
            display: block;
        }

        img, video {
            max-width: 100%;
            height: auto;
        }

        [data-js-focus-visible] :focus:not([data-focus-visible-added]) {
            outline: none;
            box-shadow: none;
        }

        select::-ms-expand {
            display: none;
        }
    </style>
    <style data-emotion="css-global" data-s="">
        body {
            font-family: var(--chakra-fonts-body);
            color: var(--chakra-colors-gray-800);
            background: var(--chakra-colors-white);
            transition-property: background-color;
            transition-duration: var(--chakra-transition-duration-normal);
            line-height: var(--chakra-lineHeights-base);
        }

        *::-webkit-input-placeholder {
            color: var(--chakra-colors-gray-400);
        }

        *::-moz-placeholder {
            color: var(--chakra-colors-gray-400);
        }

        *:-ms-input-placeholder {
            color: var(--chakra-colors-gray-400);
        }

        *::placeholder {
            color: var(--chakra-colors-gray-400);
        }

        *, *::before, ::after {
            border-color: var(--chakra-colors-gray-200);
            word-wrap: break-word;
        }
    </style>
     <style data-emotion="css-global" data-s=""></style>
    <style data-emotion="css-global" data-s=""></style>
    <style data-emotion="css-global" data-s=""></style>
    <link as="script" rel="prefetch" href="_next/static/chunks/553-82bbac0700dcfb2c.js">
    <link as="script" rel="prefetch" href="_next/static/chunks/pages/index-797326161c8f0eb7.js">
    <style data-emotion="css-global" data-s=""></style>
    <style data-emotion="css-global" data-s=""></style>
    <style data-emotion="css-global" data-s=""></style>
    <style data-emotion="css 306mec" data-s="">
        .css-306mec {
            width: 100vw;
        }
    </style>
    <style data-emotion="css 13uwul9" data-s="">
        .css-13uwul9 {
            background: var(--chakra-colors-white);
            border-bottom-width: 1px;
            position: fixed;
            width: 100vw;
            z-index: 3;
        }
    </style>
    <style data-emotion="css 1ef2qxa" data-s="">
        .css-1ef2qxa {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            padding-top: var(--chakra-space-2);
            padding-bottom: var(--chakra-space-2);
            -webkit-padding-start: var(--chakra-space-3);
            padding-inline-start: var(--chakra-space-3);
            -webkit-padding-end: var(--chakra-space-3);
            padding-inline-end: var(--chakra-space-3);
            color: var(--chakra-colors-white);
            background: var(--chakra-colors-blue-600);
            font-size: var(--chakra-fontSizes-sm);
        }

        .css-1ef2qxa > *:not(style) ~ *:not(style) {
            margin-top: 0.5rem;
            -webkit-margin-end: 0px;
            margin-inline-end: 0px;
            margin-bottom: 0px;
            -webkit-margin-start: 0px;
            margin-inline-start: 0px;
        }

        @media screen and (min-width: 30em) {
            .css-1ef2qxa {
                -webkit-flex-direction: row;
                -ms-flex-direction: row;
                flex-direction: row;
            }

            .css-1ef2qxa > *:not(style) ~ *:not(style) {
                margin-top: 0px;
                -webkit-margin-end: 0px;
                margin-inline-end: 0px;
                margin-bottom: 0px;
                -webkit-margin-start: 0.5rem;
                margin-inline-start: 0.5rem;
            }
        }

        @media screen and (min-width: 48em) {
            .css-1ef2qxa {
                -webkit-padding-start: var(--chakra-space-6);
                padding-inline-start: var(--chakra-space-6);
                -webkit-padding-end: var(--chakra-space-6);
                padding-inline-end: var(--chakra-space-6);
            }
        }

        @media screen and (min-width: 62em) {
            .css-1ef2qxa {
                -webkit-padding-start: var(--chakra-space-8);
                padding-inline-start: var(--chakra-space-8);
                -webkit-padding-end: var(--chakra-space-8);
                padding-inline-end: var(--chakra-space-8);
            }
        }
    </style>
    <style data-emotion="css rmxdag" data-s="">
        .css-rmxdag {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
        }

        .css-rmxdag > *:not(style) ~ *:not(style) {
            margin-top: 0px;
            -webkit-margin-end: 0px;
            margin-inline-end: 0px;
            margin-bottom: 0px;
            -webkit-margin-start: var(--chakra-space-3);
            margin-inline-start: var(--chakra-space-3);
        }
    </style>
    <style data-emotion="css 1gb4q9a" data-s="">
        .css-1gb4q9a {
            font-weight: var(--chakra-fontWeights-medium);
            -webkit-margin-end: var(--chakra-space-2);
            margin-inline-end: var(--chakra-space-2);
        }
    </style>
    <style data-emotion="css ipgem3" data-s="">
        .css-ipgem3 {
            transition-property: var(--chakra-transition-property-common);
            transition-duration: var(--chakra-transition-duration-fast);
            transition-timing-function: var(--chakra-transition-easing-ease-out);
            cursor: pointer;
            -webkit-text-decoration: underline;
            text-decoration: underline;
            outline: 2px solid transparent;
            outline-offset: 2px;
            color: inherit;
        }

        .css-ipgem3:hover, .css-ipgem3[data-hover] {
            -webkit-text-decoration: underline;
            text-decoration: underline;
        }

        .css-ipgem3:focus, .css-ipgem3[data-focus] {
            box-shadow: var(--chakra-shadows-outline);
        }
    </style>
    <style data-emotion="css 1tixxw9" data-s="">
        .css-1tixxw9 {
            max-width: var(--chakra-sizes-7xl);
            -webkit-margin-start: auto;
            margin-inline-start: auto;
            -webkit-margin-end: auto;
            margin-inline-end: auto;
            padding-top: var(--chakra-space-4);
            padding-bottom: var(--chakra-space-4);
            -webkit-padding-start: var(--chakra-space-6);
            padding-inline-start: var(--chakra-space-6);
            -webkit-padding-end: var(--chakra-space-6);
            padding-inline-end: var(--chakra-space-6);
        }

        @media screen and (min-width: 48em) {
            .css-1tixxw9 {
                -webkit-padding-start: var(--chakra-space-8);
                padding-inline-start: var(--chakra-space-8);
                -webkit-padding-end: var(--chakra-space-8);
                padding-inline-end: var(--chakra-space-8);
            }
        }
    </style>
    <style data-emotion="css gg4vpm" data-s="">
        .css-gg4vpm {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            justify-content: space-between;
        }
    </style>
    <style data-emotion="css 1ocidfa" data-s="">
        .css-1ocidfa {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
        }

        .css-1ocidfa > *:not(style) ~ *:not(style) {
            margin-top: 0px;
            -webkit-margin-end: 0px;
            margin-inline-end: 0px;
            margin-bottom: 0px;
            -webkit-margin-start: var(--chakra-space-8);
            margin-inline-start: var(--chakra-space-8);
        }
    </style>
    <style data-emotion="css f8n5zr" data-s="">
        .css-f8n5zr {
            border: 0px;
            clip: rect(0px, 0px, 0px, 0px);
            height: 1px;
            width: 1px;
            margin: -1px;
            padding: 0px;
            overflow: hidden;
            white-space: nowrap;
            position: absolute;
        }
    </style>
    <style data-emotion="css iicfua" data-s="">
        .css-iicfua {
            cursor: pointer;
            height: auto;
            margin-top: -5%;
            width: 200px;
        }
    </style>
    <style data-emotion="css uwwqev" data-s="">
        .css-uwwqev {
            width: 100%;
            height: 100%;
        }
    </style>
    <style data-emotion="css 1p2dnrb" data-s="">
        .css-1p2dnrb {
            display: none;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
        }

        .css-1p2dnrb > *:not(style) ~ *:not(style) {
            margin-top: 0px;
            -webkit-margin-end: 0px;
            margin-inline-end: 0px;
            margin-bottom: 0px;
            -webkit-margin-start: var(--chakra-space-8);
            margin-inline-start: var(--chakra-space-8);
        }

        @media screen and (min-width: 62em) {
            .css-1p2dnrb {
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
            }
        }
    </style>
    <style data-emotion="css c4aa4p" data-s="">
        .css-c4aa4p {
            transition-property: var(--chakra-transition-property-common);
            transition-duration: var(--chakra-transition-duration-fast);
            transition-timing-function: var(--chakra-transition-easing-ease-out);
            cursor: pointer;
            -webkit-text-decoration: none;
            text-decoration: none;
            outline: 2px solid transparent;
            outline-offset: 2px;
            color: var(--chakra-colors-gray-600);
            font-weight: var(--chakra-fontWeights-semibold);
        }

        .css-c4aa4p:hover, .css-c4aa4p[data-hover] {
            -webkit-text-decoration: underline;
            text-decoration: underline;
        }

        .css-c4aa4p:focus, .css-c4aa4p[data-focus] {
            box-shadow: var(--chakra-shadows-outline);
        }

        .css-c4aa4p[aria-current=page] {
            color: var(--chakra-colors-blue-600);
            font-weight: var(--chakra-fontWeights-bold);
        }
    </style>
    <style data-emotion="css 70qvj9" data-s="">
        .css-70qvj9 {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }
    </style>
    <style data-emotion="css 10yfryc" data-s="">
        .css-10yfryc {
            display: none;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
        }

        .css-10yfryc > *:not(style) ~ *:not(style) {
            margin-top: 0px;
            -webkit-margin-end: 0px;
            margin-inline-end: 0px;
            margin-bottom: 0px;
            -webkit-margin-start: var(--chakra-space-8);
            margin-inline-start: var(--chakra-space-8);
        }

        @media screen and (min-width: 48em) {
            .css-10yfryc {
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
            }
        }
    </style>
    <style data-emotion="css 1irlmk3" data-s="">
        .css-1irlmk3 {
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-appearance: none;
            -moz-appearance: none;
            -ms-appearance: none;
            appearance: none;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            position: relative;
            white-space: nowrap;
            vertical-align: middle;
            outline: 2px solid transparent;
            outline-offset: 2px;
            width: auto;
            line-height: 1.2;
            border-radius: var(--chakra-radii-full);
            font-weight: var(--chakra-fontWeights-semibold);
            transition-property: var(--chakra-transition-property-common);
            transition-duration: var(--chakra-transition-duration-normal);
            height: var(--chakra-sizes-10);
            min-width: var(--chakra-sizes-10);
            font-size: var(--chakra-fontSizes-md);
            -webkit-padding-start: var(--chakra-space-4);
            padding-inline-start: var(--chakra-space-4);
            -webkit-padding-end: var(--chakra-space-4);
            padding-inline-end: var(--chakra-space-4);
            background: var(--chakra-colors-blue-500);
            color: var(--chakra-colors-white);
        }

        .css-1irlmk3:focus, .css-1irlmk3[data-focus] {
            box-shadow: var(--chakra-shadows-outline);
        }

        .css-1irlmk3[disabled], .css-1irlmk3[aria-disabled=true], .css-1irlmk3[data-disabled] {
            opacity: 0.4;
            cursor: not-allowed;
            box-shadow: var(--chakra-shadows-none);
        }

        .css-1irlmk3:hover, .css-1irlmk3[data-hover] {
            background: var(--chakra-colors-blue-600);
        }

        .css-1irlmk3:hover[disabled], .css-1irlmk3[data-hover][disabled], .css-1irlmk3:hover[aria-disabled=true], .css-1irlmk3[data-hover][aria-disabled=true], .css-1irlmk3:hover[data-disabled], .css-1irlmk3[data-hover][data-disabled] {
            background: var(--chakra-colors-blue-500);
        }

        .css-1irlmk3:active, .css-1irlmk3[data-active] {
            background: var(--chakra-colors-blue-700);
        }
    </style>
    <style data-emotion="css 1msrd8y" data-s="">
        .css-1msrd8y {
            margin-left: var(--chakra-space-5);
        }
    </style>
    <style data-emotion="css 1tgvq9t" data-s="">
        .css-1tgvq9t {
            padding: var(--chakra-space-1);
            font-size: var(--chakra-fontSizes-2xl);
            color: var(--chakra-colors-gray-600);
            display: block;
        }

        @media screen and (min-width: 62em) {
            .css-1tgvq9t {
                display: none;
            }
        }
    </style>
    <style data-emotion="css gnymxj" data-s="">
        .css-gnymxj {
            background: var(--chakra-colors-white);
            box-shadow: var(--chakra-shadows-lg);
            border-radius: var(--chakra-radii-lg);
            outline: 2px solid transparent;
            outline-offset: 2px;
        }
    </style>
    <style data-emotion="css f4mshp" data-s="">
        .css-f4mshp {
            padding-top: var(--chakra-space-5);
            padding-bottom: var(--chakra-space-6);
            -webkit-padding-start: var(--chakra-space-5);
            padding-inline-start: var(--chakra-space-5);
            -webkit-padding-end: var(--chakra-space-5,);
            padding-inline-end: var(--chakra-space-5);
            width: 300px;
        }
    </style>
    <style data-emotion="css 1lekzkb" data-s="">
        .css-1lekzkb {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            justify-content: space-between;
        }
    </style>
    <style data-emotion="css 1pmf28h" data-s="">
        .css-1pmf28h {
            cursor: pointer;
            height: var(--chakra-sizes-6);
        }
    </style>
    <style data-emotion="css dcfhjn" data-s="">
        .css-dcfhjn {
            margin-right: calc(var(--chakra-space-2) * -1);
            margin-top: calc(var(--chakra-space-2) * -1);
        }
    </style>
    <style data-emotion="css 11mya0d" data-s="">
        .css-11mya0d {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            border-radius: var(--chakra-radii-base);
            padding: var(--chakra-space-1);
            color: var(--chakra-colors-gray-600);
        }

        .css-11mya0d:hover, .css-11mya0d[data-hover] {
            background: var(--chakra-colors-gray-100);
        }
    </style>
    <style data-emotion="css 8b45rq" data-s="">
        .css-8b45rq {
            border: 0px;
            clip: rect(0, 0, 0, 0);
            width: 1px;
            height: 1px;
            margin: -1px;
            padding: 0px;
            overflow: hidden;
            white-space: nowrap;
            position: absolute;
        }
    </style>
    <style data-emotion="css 1v372y2" data-s="">
        .css-1v372y2 {
            display: grid;
            grid-gap: var(--chakra-space-6);
            grid-template-columns:repeat(1, minmax(0, 1fr));
            margin-top: var(--chakra-space-8);
        }

        @media screen and (min-width: 30em) {
            .css-1v372y2 {
                grid-template-columns:repeat(2, minmax(0, 1fr));
            }
        }
    </style>
    <style data-emotion="css flsj0y" data-s="">
        .css-flsj0y {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            margin: calc(var(--chakra-space-3) * -1);
            padding: var(--chakra-space-3);
            border-radius: var(--chakra-radii-md);
            cursor: pointer;
        }

        .css-flsj0y:hover, .css-flsj0y[data-hover] {
            background: var(--chakra-colors-gray-50);
        }
    </style>
    <style data-emotion="css zc00ab" data-s="">
        .css-zc00ab {
            -webkit-margin-start: var(--chakra-space-3);
            margin-inline-start: var(--chakra-space-3);
            font-weight: var(--chakra-fontWeights-medium);
        }
    </style>
    <style data-emotion="css 1xy6ttc" data-s="">
        .css-1xy6ttc {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            margin-top: var(--chakra-space-8);
        }

        .css-1xy6ttc > *:not(style) ~ *:not(style) {
            margin-top: var(--chakra-space-4);
            -webkit-margin-end: 0px;
            margin-inline-end: 0px;
            margin-bottom: 0px;
            -webkit-margin-start: 0px;
            margin-inline-start: 0px;
        }
    </style>
    <style data-emotion="css 7hj586" data-s="">
        .css-7hj586 {
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-appearance: none;
            -moz-appearance: none;
            -ms-appearance: none;
            appearance: none;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            position: relative;
            white-space: nowrap;
            vertical-align: middle;
            outline: 2px solid transparent;
            outline-offset: 2px;
            width: var(--chakra-sizes-full);
            line-height: 1.2;
            border-radius: var(--chakra-radii-md);
            font-weight: var(--chakra-fontWeights-semibold);
            transition-property: var(--chakra-transition-property-common);
            transition-duration: var(--chakra-transition-duration-normal);
            height: var(--chakra-sizes-10);
            min-width: var(--chakra-sizes-10);
            font-size: var(--chakra-fontSizes-md);
            -webkit-padding-start: var(--chakra-space-4);
            padding-inline-start: var(--chakra-space-4);
            -webkit-padding-end: var(--chakra-space-4);
            padding-inline-end: var(--chakra-space-4);
            background: var(--chakra-colors-blue-500);
            color: var(--chakra-colors-white);
        }

        .css-7hj586:focus, .css-7hj586[data-focus] {
            box-shadow: var(--chakra-shadows-outline);
        }

        .css-7hj586[disabled], .css-7hj586[aria-disabled=true], .css-7hj586[data-disabled] {
            opacity: 0.4;
            cursor: not-allowed;
            box-shadow: var(--chakra-shadows-none);
        }

        .css-7hj586:hover, .css-7hj586[data-hover] {
            background: var(--chakra-colors-blue-600);
        }

        .css-7hj586:hover[disabled], .css-7hj586[data-hover][disabled], .css-7hj586:hover[aria-disabled=true], .css-7hj586[data-hover][aria-disabled=true], .css-7hj586:hover[data-disabled], .css-7hj586[data-hover][data-disabled] {
            background: var(--chakra-colors-blue-500);
        }

        .css-7hj586:active, .css-7hj586[data-active] {
            background: var(--chakra-colors-blue-700);
        }
    </style>
    <style data-emotion="css 18rhaeg" data-s="">
        .css-18rhaeg {
            padding-bottom: var(--chakra-space-5);
            width: 100%;
            background: #F8FAFC;
        }
    </style>
    <style data-emotion="css 25qoag" data-s="">
        .css-25qoag {
            max-width: var(--chakra-sizes-xl);
            -webkit-margin-start: auto;
            margin-inline-start: auto;
            -webkit-margin-end: auto;
            margin-inline-end: auto;
            -webkit-padding-start: var(--chakra-space-6);
            padding-inline-start: var(--chakra-space-6);
            -webkit-padding-end: var(--chakra-space-6);
            padding-inline-end: var(--chakra-space-6);
        }

        @media screen and (min-width: 48em) {
            .css-25qoag {
                max-width: var(--chakra-sizes-7xl);
                -webkit-padding-start: var(--chakra-space-8);
                padding-inline-start: var(--chakra-space-8);
                -webkit-padding-end: var(--chakra-space-8);
                padding-inline-end: var(--chakra-space-8);
            }
        }
    </style>
    <style data-emotion="css j4r6b" data-s="">
        .css-j4r6b {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: flex-start;
            -webkit-box-align: flex-start;
            -ms-flex-align: flex-start;
            align-items: flex-start;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            min-height: 762px;
        }

        .css-j4r6b > *:not(style) ~ *:not(style) {
            margin-top: 1rem;
            -webkit-margin-end: 0px;
            margin-inline-end: 0px;
            margin-bottom: 0px;
            -webkit-margin-start: 0px;
            margin-inline-start: 0px;
        }

        @media screen and (min-width: 62em) {
            .css-j4r6b > *:not(style) ~ *:not(style) {
                margin-top: 2rem;
            }
        }

        @media screen and (min-width: 62em) {
            .css-j4r6b {
                -webkit-align-items: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                -webkit-box-pack: justify;
                -webkit-justify-content: space-between;
                justify-content: space-between;
                -webkit-flex-direction: row;
                -ms-flex-direction: row;
                flex-direction: row;
            }

            .css-j4r6b > *:not(style) ~ *:not(style) {
                margin-top: 0px;
                -webkit-margin-end: 0px;
                margin-inline-end: 0px;
                margin-bottom: 0px;
                -webkit-margin-start: 1rem;
                margin-inline-start: 1rem;
            }

            @media screen and (min-width: 62em) {
                .css-j4r6b > *:not(style) ~ *:not(style) {
                    -webkit-margin-start: 2rem;
                    margin-inline-start: 2rem;
                }
            }
        }
    </style>
    <style data-emotion="css dfnjby" data-s="">
        .css-dfnjby {
            -webkit-flex: 0;
            -ms-flex: 0;
            flex: 0;
        }

        @media screen and (min-width: 62em) {
            .css-dfnjby {
                -webkit-flex: 1;
                -ms-flex: 1;
                flex: 1;
                max-width: 472px;
            }
        }
    </style>
    <style data-emotion="css jmvwdz" data-s="">
        .css-jmvwdz {
            font-family: var(--chakra-fonts-heading);
            font-weight: var(--chakra-fontWeights-extrabold);
            font-size: var(--chakra-fontSizes-5xl);
            line-height: 1;
            color: var(--chakra-colors-blue-600);
            margin-top: var(--chakra-space-8);
            letter-spacing: var(--chakra-letterSpacings-tight);
        }

        @media screen and (min-width: 48em) {
            .css-jmvwdz {
                font-size: var(--chakra-fontSizes-6xl);
            }
        }
    </style>
    <style data-emotion="css 1nauaey" data-s="">
        .css-1nauaey {
            color: var(--chakra-colors-gray-600);
            margin-top: var(--chakra-space-4);
            font-size: 1rem;
            line-height: 30px;
            font-weight: 500;
        }

        @media screen and (min-width: 62em) {
            .css-1nauaey {
                font-size: 20px;
            }
        }
    </style>
    <style data-emotion="css mkcml1" data-s="">
        .css-mkcml1 {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            margin-top: var(--chakra-space-8);
        }

        .css-mkcml1 > *:not(style) ~ *:not(style) {
            margin-top: var(--chakra-space-4);
            -webkit-margin-end: 0px;
            margin-inline-end: 0px;
            margin-bottom: 0px;
            -webkit-margin-start: 0px;
            margin-inline-start: 0px;
        }

        @media screen and (min-width: 48em) {
            .css-mkcml1 {
                -webkit-flex-direction: row;
                -ms-flex-direction: row;
                flex-direction: row;
            }

            .css-mkcml1 > *:not(style) ~ *:not(style) {
                margin-top: 0px;
                -webkit-margin-end: 0px;
                margin-inline-end: 0px;
                margin-bottom: 0px;
                -webkit-margin-start: var(--chakra-space-4);
                margin-inline-start: var(--chakra-space-4);
            }
        }
    </style>
    <style data-emotion="css 7xtvjh" data-s="">
        .css-7xtvjh {
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-appearance: none;
            -moz-appearance: none;
            -ms-appearance: none;
            appearance: none;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            position: relative;
            white-space: nowrap;
            vertical-align: middle;
            outline: 2px solid transparent;
            outline-offset: 2px;
            width: auto;
            line-height: 1.2;
            border-radius: var(--chakra-radii-md);
            font-weight: var(--chakra-fontWeights-semibold);
            transition-property: var(--chakra-transition-property-common);
            transition-duration: var(--chakra-transition-duration-normal);
            height: var(--chakra-sizes-14);
            min-width: 210px;
            font-size: var(--chakra-fontSizes-lg);
            -webkit-padding-start: var(--chakra-space-8);
            padding-inline-start: var(--chakra-space-8);
            -webkit-padding-end: var(--chakra-space-8);
            padding-inline-end: var(--chakra-space-8);
            background: var(--chakra-colors-blue-500);
            color: var(--chakra-colors-white);
        }

        .css-7xtvjh:focus, .css-7xtvjh[data-focus] {
            box-shadow: var(--chakra-shadows-outline);
        }

        .css-7xtvjh[disabled], .css-7xtvjh[aria-disabled=true], .css-7xtvjh[data-disabled] {
            opacity: 0.4;
            cursor: not-allowed;
            box-shadow: var(--chakra-shadows-none);
        }

        .css-7xtvjh:hover, .css-7xtvjh[data-hover] {
            background: var(--chakra-colors-blue-600);
        }

        .css-7xtvjh:hover[disabled], .css-7xtvjh[data-hover][disabled], .css-7xtvjh:hover[aria-disabled=true], .css-7xtvjh[data-hover][aria-disabled=true], .css-7xtvjh:hover[data-disabled], .css-7xtvjh[data-hover][data-disabled] {
            background: var(--chakra-colors-blue-500);
        }

        .css-7xtvjh:active, .css-7xtvjh[data-active] {
            background: var(--chakra-colors-blue-700);
        }
    </style>
    <style data-emotion="css 1k0tpoy" data-s="">
        .css-1k0tpoy {
            position: relative;
            width: var(--chakra-sizes-full);
            display: none;
        }

        @media screen and (min-width: 62em) {
            .css-1k0tpoy {
                width: 560px;
                display: block;
            }
        }
    </style>
    <style data-emotion="css 8j0zw4" data-s="">
        .css-8j0zw4 {
            position: relative;
            z-index: 1;
            width: var(--chakra-sizes-full);
        }

        @media screen and (min-width: 62em) {
            .css-8j0zw4 {
                width: 1440px;
            }
        }
    </style>
    <style data-emotion="css i66mct" data-s="">
        .css-i66mct {
            width: 100%;
            min-height: 942px;
            padding-bottom: 40px;
        }

        @media screen and (min-width: 62em) {
            .css-i66mct {
                padding-bottom: 97px;
            }
        }
    </style>
    <style data-emotion="css egpi4t" data-s="">
        .css-egpi4t {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            justify-content: space-between;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            margin-top: var(--chakra-space-8);
        }

        .css-egpi4t > *:not(style) ~ *:not(style) {
            margin-top: 3rem;
            -webkit-margin-end: 0px;
            margin-inline-end: 0px;
            margin-bottom: 0px;
            -webkit-margin-start: 0px;
            margin-inline-start: 0px;
        }

        @media screen and (min-width: 62em) {
            .css-egpi4t > *:not(style) ~ *:not(style) {
                margin-top: 2rem;
            }
        }
    </style>
    <style data-emotion="css lfqnhh" data-s="">
        .css-lfqnhh {
            -webkit-flex: 1;
            -ms-flex: 1;
            flex: 1;
        }

        @media screen and (min-width: 62em) {
            .css-lfqnhh {
                max-width: 520px;
            }
        }
    </style>
    <style data-emotion="css d3le4f" data-s="">
        .css-d3le4f {
            font-family: var(--chakra-fonts-heading);
            font-weight: var(--chakra-fontWeights-extrabold);
            font-size: var(--chakra-fontSizes-4xl);
            line-height: 1.2;
            color: var(--chakra-colors-blue-600);
            margin-top: var(--chakra-space-8);
            letter-spacing: var(--chakra-letterSpacings-tight);
        }

        @media screen and (min-width: 48em) {
            .css-d3le4f {
                font-size: var(--chakra-fontSizes-5xl);
                line-height: 1;
            }
        }
    </style>
    <style data-emotion="css 2tyqjr" data-s="">
        .css-2tyqjr {
            color: var(--chakra-colors-gray-600);
            margin-top: var(--chakra-space-4);
            font-size: var(--chakra-fontSizes-lg);
            font-weight: var(--chakra-fontWeights-normal);
        }
    </style>
    <style data-emotion="css fway70" data-s="">
        .css-fway70 {
            position: relative;
            width: var(--chakra-sizes-full);
            height: auto;
        }

        @media screen and (min-width: 62em) {
            .css-fway70 {
                height: 422px;
            }
        }
    </style>
    <style data-emotion="css w7cb44" data-s="">
        .css-w7cb44 {
            width: var(--chakra-sizes-full);
            position: relative;
            z-index: 1;
            height: 100%;
            object-fit: contain;
        }
    </style>
    <style data-emotion="css 263hi8" data-s="">
        .css-263hi8 {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: flex-start;
            -webkit-box-align: flex-start;
            -ms-flex-align: flex-start;
            align-items: flex-start;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            margin-top: 0px;
        }

        .css-263hi8 > *:not(style) ~ *:not(style) {
            margin-top: 0px;
            -webkit-margin-end: 0px;
            margin-inline-end: 0px;
            margin-bottom: 0px;
            -webkit-margin-start: 0px;
            margin-inline-start: 0px;
        }

        @media screen and (min-width: 62em) {
            .css-263hi8 > *:not(style) ~ *:not(style) {
                -webkit-margin-start: 24px;
                margin-inline-start: 24px;
            }
        }

        @media screen and (min-width: 62em) {
            .css-263hi8 {
                -webkit-flex-direction: row;
                -ms-flex-direction: row;
                flex-direction: row;
            }
        }
    </style>
    <style data-emotion="css 1288xpw" data-s="">
        .css-1288xpw {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex: 1;
            -ms-flex: 1;
            flex: 1;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-align-items: flex-start;
            -webkit-box-align: flex-start;
            -ms-flex-align: flex-start;
            align-items: flex-start;
            margin-top: 24px !important;
        }

        @media screen and (min-width: 62em) {
            .css-1288xpw {
                margin-top: 0px;
            }
        }
    </style>
    <style data-emotion="css 138we7i" data-s="">
        .css-138we7i {
            width: 40px;
            height: 40px;
            display: inline-block;
            line-height: 1em;
            -webkit-flex-shrink: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            color: var(--chakra-colors-blue-600);
            vertical-align: middle;
        }
    </style>
    <style data-emotion="css fjez6r" data-s="">
        .css-fjez6r {
            font-family: var(--chakra-fonts-heading);
            font-weight: var(--chakra-fontWeights-extrabold);
            font-size: var(--chakra-fontSizes-xl);
            line-height: 1.2;
            color: var(--chakra-colors-blue-600);
            margin-top: var(--chakra-space-7);
            letter-spacing: var(--chakra-letterSpacings-tight);
        }
    </style>
    <style data-emotion="css dozho7" data-s="">
        .css-dozho7 {
            color: var(--chakra-colors-gray-600);
            margin-top: var(--chakra-space-1);
            font-size: 16px;
            font-weight: var(--chakra-fontWeights-normal);
        }
    </style>
    <style data-emotion="css 1yubmrw" data-s="">
        .css-1yubmrw {
            width: 100%;
            background: #F8FAFC;
        }
    </style>
    <style data-emotion="css gr38as" data-s="">
        .css-gr38as {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: flex-start;
            -webkit-box-align: flex-start;
            -ms-flex-align: flex-start;
            align-items: flex-start;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            justify-content: space-between;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            padding-top: 3.7rem;
            padding-bottom: 3.7rem;
        }

        .css-gr38as > *:not(style) ~ *:not(style) {
            margin-top: 0px;
            -webkit-margin-end: 0px;
            margin-inline-end: 0px;
            margin-bottom: 0px;
            -webkit-margin-start: 0.5rem;
            margin-inline-start: 0.5rem;
        }

        @media screen and (min-width: 62em) {
            .css-gr38as {
                -webkit-flex-direction: row-reverse;
                -ms-flex-direction: row-reverse;
                flex-direction: row-reverse;
                --chakra-space-x-reverse: 1;
                --chakra-divide-x-reverse: 1;
            }
        }
    </style>
    <style data-emotion="css bnazdg" data-s="">
        .css-bnazdg {
            -webkit-flex: 1;
            -ms-flex: 1;
            flex: 1;
        }

        @media screen and (min-width: 62em) {
            .css-bnazdg {
                max-width: 560px;
            }
        }
    </style>
    <style data-emotion="css hoyqsn" data-s="">
        .css-hoyqsn {
            font-family: var(--chakra-fonts-heading);
            font-weight: var(--chakra-fontWeights-extrabold);
            font-size: var(--chakra-fontSizes-4xl);
            line-height: 1.2;
            color: var(--chakra-colors-blue-600);
            letter-spacing: var(--chakra-letterSpacings-tight);
        }

        @media screen and (min-width: 48em) {
            .css-hoyqsn {
                font-size: var(--chakra-fontSizes-5xl);
                line-height: 1;
            }
        }
    </style>
    <style data-emotion="css 1ix9wkv" data-s="">
        .css-1ix9wkv {
            color: var(--chakra-colors-gray-600);
            margin-top: 16px;
            font-size: var(--chakra-fontSizes-lg);
            font-weight: var(--chakra-fontWeights-normal);
        }
    </style>
    <style data-emotion="css 90b5dy" data-s="">
        .css-90b5dy {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
            font-weight: 800;
            margin-top: var(--chakra-space-4);
            font-size: var(--chakra-fontSizes-xl);
            color: var(--chakra-colors-blue-600);
            cursor: pointer;
        }

        .css-90b5dy > *:not(style) ~ *:not(style) {
            margin-top: 0px;
            -webkit-margin-end: 0px;
            margin-inline-end: 0px;
            margin-bottom: 0px;
            -webkit-margin-start: 0.5rem;
            margin-inline-start: 0.5rem;
        }
    </style>
    <style data-emotion="css 1kqzb4d" data-s="">
        .css-1kqzb4d {
            font-size: var(--chakra-fontSizes-md);
            -webkit-transition: 0.2s all;
            transition: 0.2s all;
            display: inline-block;
        }

        [role=group]:hover .css-1kqzb4d, [role=group][data-hover] .css-1kqzb4d, [data-group]:hover .css-1kqzb4d, [data-group][data-hover] .css-1kqzb4d, .group:hover .css-1kqzb4d, .group[data-hover] .css-1kqzb4d {
            -webkit-transform: translateX(2px);
            -moz-transform: translateX(2px);
            -ms-transform: translateX(2px);
            transform: translateX(2px);
        }
    </style>
    <style data-emotion="css 1gynnip" data-s="">
        .css-1gynnip {
            position: relative;
            z-index: 0;
            -webkit-margin-start: 0 !important;
            margin-inline-start: 0 !important;
            -webkit-margin-end: 0 !important;
            margin-inline-end: 0 !important;
            width: 100%;
        }

        @media screen and (min-width: 62em) {
            .css-1gynnip {
                width: 45%;
            }
        }
    </style>
    <style data-emotion="css rzw130" data-s="">
        .css-rzw130 {
            padding: var(--chakra-space-5);
            border-radius: 8px;
            background: #152D58;
            -webkit-padding-start: 0px;
            padding-inline-start: 0px;
            -webkit-padding-end: 0px;
            padding-inline-end: 0px;
            overflow: hidden;
            margin-top: 50px;
            width: calc(100vw - 10%) !important;
        }

        @media screen and (min-width: 62em) {
            .css-rzw130 {
                margin-top: 0px;
                width: 100% !important;
            }
        }
    </style>
    <style data-emotion="css zbg2gu" data-s="">
        .css-zbg2gu {
            -webkit-padding-start: var(--chakra-space-5);
            padding-inline-start: var(--chakra-space-5);
            -webkit-padding-end: var(--chakra-space-5);
            padding-inline-end: var(--chakra-space-5);
        }
    </style>
    <style data-emotion="css 1mdk0dv" data-s="">
        .css-1mdk0dv {
            width: 100%;
            min-height: 100vh;
            padding-bottom: 40px;
            background: #F8FAFC;
        }

        @media screen and (min-width: 62em) {
            .css-1mdk0dv {
                padding-bottom: 97px;
            }
        }
    </style>
    <style data-emotion="css 1apleu7" data-s="">
        .css-1apleu7 {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            justify-content: space-between;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            margin-top: var(--chakra-space-8);
        }

        .css-1apleu7 > *:not(style) ~ *:not(style) {
            margin-top: 0rem;
            -webkit-margin-end: 0px;
            margin-inline-end: 0px;
            margin-bottom: 0px;
            -webkit-margin-start: 0px;
            margin-inline-start: 0px;
        }

        @media screen and (min-width: 62em) {
            .css-1apleu7 > *:not(style) ~ *:not(style) {
                margin-top: 2rem;
            }
        }
    </style>
    <style data-emotion="css l38wkl" data-s="">
        .css-l38wkl {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: flex-start;
            -webkit-box-align: flex-start;
            -ms-flex-align: flex-start;
            align-items: flex-start;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            justify-content: space-between;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            width: 100%;
            padding-top: 3.7rem;
            padding-bottom: 3.7rem;
        }

        .css-l38wkl > *:not(style) ~ *:not(style) {
            margin-top: 0px;
            -webkit-margin-end: 0px;
            margin-inline-end: 0px;
            margin-bottom: 0px;
            -webkit-margin-start: 0.5rem;
            margin-inline-start: 0.5rem;
        }

        @media screen and (min-width: 62em) {
            .css-l38wkl {
                -webkit-flex-direction: row;
                -ms-flex-direction: row;
                flex-direction: row;
            }
        }
    </style>
    <style data-emotion="css 47qa7e" data-s="">
        .css-47qa7e {
            -webkit-flex: 1;
            -ms-flex: 1;
            flex: 1;
        }

        @media screen and (min-width: 62em) {
            .css-47qa7e {
                max-width: 400px;
            }
        }
    </style>
    <style data-emotion="css cb4hmv" data-s="">
        .css-cb4hmv {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
            font-weight: 800;
            margin-top: var(--chakra-space-12);
            font-size: var(--chakra-fontSizes-xl);
            color: var(--chakra-colors-blue-600);
            cursor: pointer;
        }

        .css-cb4hmv > *:not(style) ~ *:not(style) {
            margin-top: 0px;
            -webkit-margin-end: 0px;
            margin-inline-end: 0px;
            margin-bottom: 0px;
            -webkit-margin-start: 0.5rem;
            margin-inline-start: 0.5rem;
        }
    </style>
    <style data-emotion="css 17ya0h2" data-s="">
        .css-17ya0h2 {
            width: var(--chakra-sizes-full);
            border-radius: 1rem;
            padding: var(--chakra-space-4);
            height: content-fit;
            margin-top: 60px !important;
            background: var(--chakra-colors-white);
            -webkit-margin-start: auto !important;
            margin-inline-start: auto !important;
            -webkit-margin-end: auto !important;
            margin-inline-end: auto !important;
        }

        @media screen and (min-width: 62em) {
            .css-17ya0h2 {
                width: 710px;
                height: 562px;
                margin-top: 0 !important;
            }
        }
    </style>
    <style data-emotion="css wjlldk" data-s="">
        .css-wjlldk {
            display: grid;
            grid-gap: 40px;
            grid-template-columns:repeat(2, minmax(0, 1fr));
            color: inherit;
            height: 100%;
        }

        @media screen and (min-width: 48em) {
            .css-wjlldk {
                grid-template-columns:repeat(4, minmax(0, 1fr));
            }
        }
    </style>
    <style data-emotion="css b93e9j" data-s="">
        .css-b93e9j {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
        }
    </style>
    <style data-emotion="css acdi5e" data-s="">
        .css-acdi5e {
            width: 75px;
            height: 75px;
            border-radius: 50%;
            object-fit: contain;
        }

        @media screen and (min-width: 62em) {
            .css-acdi5e {
                width: 100px;
                height: 100px;
            }
        }
    </style>
    <style data-emotion="css 8iszln" data-s="">
        .css-8iszln {
            font-family: var(--chakra-fonts-heading);
            font-weight: var(--chakra-fontWeights-bold);
            font-size: 12px;
            line-height: 1.33;
            text-align: center;
            margin-top: var(--chakra-space-3);
            color: #3A77FF;
        }

        @media screen and (min-width: 48em) {
            .css-8iszln {
                line-height: 1.2;
            }
        }
    </style>
    <style data-emotion="css 1qnjbyf" data-s="">
        .css-1qnjbyf {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: flex-start;
            -webkit-box-align: flex-start;
            -ms-flex-align: flex-start;
            align-items: flex-start;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            justify-content: space-between;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            width: 100%;
            padding-top: 3.7rem;
            padding-bottom: 3.7rem;
        }

        .css-1qnjbyf > *:not(style) ~ *:not(style) {
            margin-top: 0px;
            -webkit-margin-end: 0px;
            margin-inline-end: 0px;
            margin-bottom: 0px;
            -webkit-margin-start: 0.5rem;
            margin-inline-start: 0.5rem;
        }

        @media screen and (min-width: 62em) {
            .css-1qnjbyf {
                -webkit-flex-direction: row-reverse;
                -ms-flex-direction: row-reverse;
                flex-direction: row-reverse;
                --chakra-space-x-reverse: 1;
                --chakra-divide-x-reverse: 1;
            }
        }
    </style>
    <style data-emotion="css 1274svg" data-s="">
        .css-1274svg {
            display: grid;
            grid-gap: 40px;
            grid-template-columns:repeat(2, minmax(0, 1fr));
            color: inherit;
            height: 100%;
        }

        @media screen and (min-width: 48em) {
            .css-1274svg {
                grid-template-columns:repeat(3, minmax(0, 1fr));
            }
        }
    </style>
    <style data-emotion="css qy6sem" data-s="">
        .css-qy6sem {
            width: 75px;
            height: 75px;
            border-radius: 0%;
            object-fit: contain;
        }

        @media screen and (min-width: 62em) {
            .css-qy6sem {
                width: 110px;
                height: 110px;
            }
        }
    </style>
    <style data-emotion="css 8atqhb" data-s="">
        .css-8atqhb {
            width: 100%;
        }
    </style>
    <style data-emotion="css 1otmi4o" data-s="">
        .css-1otmi4o {
            -webkit-margin-start: auto;
            margin-inline-start: auto;
            -webkit-margin-end: auto;
            margin-inline-end: auto;
            max-width: var(--chakra-sizes-xl);
            padding-top: var(--chakra-space-12);
            padding-bottom: var(--chakra-space-12);
        }

        @media screen and (min-width: 48em) {
            .css-1otmi4o {
                max-width: var(--chakra-sizes-7xl);
                padding-top: var(--chakra-space-20);
                padding-bottom: var(--chakra-space-20);
            }
        }
    </style>
    <style data-emotion="css xi606m" data-s="">
        .css-xi606m {
            text-align: center;
        }
    </style>
    <style data-emotion="css 1p894hw" data-s="">
        .css-1p894hw {
            font-family: var(--chakra-fonts-heading);
            font-weight: var(--chakra-fontWeights-extrabold);
            font-size: var(--chakra-fontSizes-4xl);
            line-height: 1.2;
            letter-spacing: var(--chakra-letterSpacings-tight);
            margin-bottom: var(--chakra-space-4);
            color: var(--chakra-colors-blue-600);
        }

        @media screen and (min-width: 48em) {
            .css-1p894hw {
                font-size: var(--chakra-fontSizes-5xl);
                line-height: 1;
            }
        }
    </style>
    <style data-emotion="css d76vsp" data-s="">
        .css-d76vsp {
            font-size: var(--chakra-fontSizes-lg);
            max-width: var(--chakra-sizes-2xl);
            -webkit-margin-start: 4%;
            margin-inline-start: 4%;
            -webkit-margin-end: 4%;
            margin-inline-end: 4%;
            margin-top: var(--chakra-space-4);
        }

        @media screen and (min-width: 62em) {
            .css-d76vsp {
                max-width: 536px;
                -webkit-margin-start: auto;
                margin-inline-start: auto;
                -webkit-margin-end: auto;
                margin-inline-end: auto;
            }
        }
    </style>
    <style data-emotion="css 1d22g1g" data-s="">
        .css-1d22g1g {
            display: grid;
            grid-row-gap: var(--chakra-space-12);
            grid-column-gap: var(--chakra-space-6);
            grid-template-columns:repeat(1, minmax(0, 1fr));
            margin-top: var(--chakra-space-20);
        }

        @media screen and (min-width: 48em) {
            .css-1d22g1g {
                grid-template-columns:repeat(2, minmax(0, 1fr));
            }
        }

        @media screen and (min-width: 62em) {
            .css-1d22g1g {
                grid-template-columns:repeat(3, minmax(0, 1fr));
            }
        }
    </style>
    <style data-emotion="css gdx2i7" data-s="">
        .css-gdx2i7 {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            text-align: center;
        }
    </style>
    <style data-emotion="css 199h3pl" data-s="">
        .css-199h3pl {
            width: var(--chakra-sizes-20);
            height: var(--chakra-sizes-20);
            object-fit: contain;
        }

        @media screen and (min-width: 62em) {
            .css-199h3pl {
                width: auto;
                height: 100px;
            }
        }
    </style>
    <style data-emotion="css 1ayfwcb" data-s="">
        .css-1ayfwcb {
            margin-top: var(--chakra-space-4);
        }
    </style>
    <style data-emotion="css wjomy9" data-s="">
        .css-wjomy9 {
            font-weight: var(--chakra-fontWeights-bold);
            font-size: var(--chakra-fontSizes-lg);
        }
    </style>
    <style data-emotion="css 1j65ill" data-s="">
        .css-1j65ill {
            margin-top: var(--chakra-space-2);
            max-width: 85vw;
        }

        @media screen and (min-width: 48em) {
            .css-1j65ill {
                max-width: 20rem;
            }
        }
    </style>
    <style data-emotion="css 1g9ldak" data-s="">
        .css-1g9ldak {
            width: 100%;
            padding-top: var(--chakra-space-12);
            padding-bottom: var(--chakra-space-12);
            height: 560px;
            background: #F8FAFC;
        }

        @media screen and (min-width: 48em) {
            .css-1g9ldak {
                height: 640px;
            }
        }
    </style>
    <style data-emotion="css 1rdwdr0" data-s="">
        .css-1rdwdr0 {
            max-width: var(--chakra-sizes-xl);
            -webkit-margin-start: auto;
            margin-inline-start: auto;
            -webkit-margin-end: auto;
            margin-inline-end: auto;
            -webkit-padding-start: var(--chakra-space-6);
            padding-inline-start: var(--chakra-space-6);
            -webkit-padding-end: var(--chakra-space-6);
            padding-inline-end: var(--chakra-space-6);
            height: var(--chakra-sizes-full);
            z-index: 1;
            position: relative;
        }

        @media screen and (min-width: 48em) {
            .css-1rdwdr0 {
                max-width: var(--chakra-sizes-7xl);
                -webkit-padding-start: var(--chakra-space-8);
                padding-inline-start: var(--chakra-space-8);
                -webkit-padding-end: var(--chakra-space-8);
                padding-inline-end: var(--chakra-space-8);
            }
        }
    </style>
    <style data-emotion="css 1qte1vx" data-s="">
        .css-1qte1vx {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            text-align: center;
            height: var(--chakra-sizes-full);
        }
    </style>
    <style data-emotion="css kyqiw5" data-s="">
        .css-kyqiw5 {
            font-family: var(--chakra-fonts-heading);
            font-weight: var(--chakra-fontWeights-bold);
            font-size: var(--chakra-fontSizes-md);
            line-height: 1.2;
            color: var(--chakra-colors-blue-600);
            margin-bottom: 16px;
        }
    </style>
    <style data-emotion="css 15srl62" data-s="">
        .css-15srl62 {
            font-family: var(--chakra-fonts-heading);
            font-weight: var(--chakra-fontWeights-extrabold);
            font-size: var(--chakra-fontSizes-4xl);
            line-height: 1.2;
            color: var(--chakra-colors-blue-600);
        }

        @media screen and (min-width: 48em) {
            .css-15srl62 {
                font-size: var(--chakra-fontSizes-5xl);
                line-height: 1;
            }
        }
    </style>
    <style data-emotion="css bf1c63" data-s="">
        .css-bf1c63 {
            font-size: 18px;
            font-weight: var(--chakra-fontWeights-normal);
            margin-top: var(--chakra-space-4);
            max-width: 80vw;
            color: #4A5568;
        }

        @media screen and (min-width: 62em) {
            .css-bf1c63 {
                max-width: 720px;
            }
        }
    </style>
    <style data-emotion="css 1a3ee9r" data-s="">
        .css-1a3ee9r {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            margin-top: var(--chakra-space-10);
            margin-bottom: var(--chakra-space-20);
        }

        .css-1a3ee9r > *:not(style) ~ *:not(style) {
            margin-top: var(--chakra-space-4);
            -webkit-margin-end: 0px;
            margin-inline-end: 0px;
            margin-bottom: 0px;
            -webkit-margin-start: 0px;
            margin-inline-start: 0px;
        }

        @media screen and (min-width: 48em) {
            .css-1a3ee9r {
                -webkit-flex-direction: row;
                -ms-flex-direction: row;
                flex-direction: row;
            }

            .css-1a3ee9r > *:not(style) ~ *:not(style) {
                margin-top: 0px;
                -webkit-margin-end: 0px;
                margin-inline-end: 0px;
                margin-bottom: 0px;
                -webkit-margin-start: var(--chakra-space-4);
                margin-inline-start: var(--chakra-space-4);
            }
        }
    </style>
    <style data-emotion="css 1uu0xxz" data-s="">
        .css-1uu0xxz {
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-appearance: none;
            -moz-appearance: none;
            -ms-appearance: none;
            appearance: none;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            position: relative;
            white-space: nowrap;
            vertical-align: middle;
            outline: 2px solid transparent;
            outline-offset: 2px;
            width: auto;
            line-height: 1.2;
            border-radius: var(--chakra-radii-md);
            font-weight: var(--chakra-fontWeights-bold);
            transition-property: var(--chakra-transition-property-common);
            transition-duration: var(--chakra-transition-duration-normal);
            height: var(--chakra-sizes-12);
            min-width: var(--chakra-sizes-12);
            font-size: var(--chakra-fontSizes-md);
            -webkit-padding-start: var(--chakra-space-8);
            padding-inline-start: var(--chakra-space-8);
            -webkit-padding-end: var(--chakra-space-8);
            padding-inline-end: var(--chakra-space-8);
            background: var(--chakra-colors-blue-500);
            color: var(--chakra-colors-white);
        }

        .css-1uu0xxz:focus, .css-1uu0xxz[data-focus] {
            box-shadow: var(--chakra-shadows-outline);
        }

        .css-1uu0xxz[disabled], .css-1uu0xxz[aria-disabled=true], .css-1uu0xxz[data-disabled] {
            opacity: 0.4;
            cursor: not-allowed;
            box-shadow: var(--chakra-shadows-none);
        }

        .css-1uu0xxz:hover, .css-1uu0xxz[data-hover] {
            background: var(--chakra-colors-blue-600);
        }

        .css-1uu0xxz:hover[disabled], .css-1uu0xxz[data-hover][disabled], .css-1uu0xxz:hover[aria-disabled=true], .css-1uu0xxz[data-hover][aria-disabled=true], .css-1uu0xxz:hover[data-disabled], .css-1uu0xxz[data-hover][data-disabled] {
            background: var(--chakra-colors-blue-500);
        }

        .css-1uu0xxz:active, .css-1uu0xxz[data-active] {
            background: var(--chakra-colors-blue-700);
        }
    </style>
    <style data-emotion="css 1aszbee" data-s="">
        .css-1aszbee {
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-appearance: none;
            -moz-appearance: none;
            -ms-appearance: none;
            appearance: none;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            position: relative;
            white-space: nowrap;
            vertical-align: middle;
            outline: 2px solid transparent;
            outline-offset: 2px;
            width: auto;
            line-height: 1.2;
            border-radius: var(--chakra-radii-md);
            font-weight: var(--chakra-fontWeights-bold);
            transition-property: var(--chakra-transition-property-common);
            transition-duration: var(--chakra-transition-duration-normal);
            height: var(--chakra-sizes-12);
            min-width: var(--chakra-sizes-12);
            font-size: var(--chakra-fontSizes-md);
            -webkit-padding-start: var(--chakra-space-8);
            padding-inline-start: var(--chakra-space-8);
            -webkit-padding-end: var(--chakra-space-8);
            padding-inline-end: var(--chakra-space-8);
            background: var(--chakra-colors-gray-100);
            color: var(--chakra-colors-black);
        }

        .css-1aszbee:focus, .css-1aszbee[data-focus] {
            box-shadow: var(--chakra-shadows-outline);
        }

        .css-1aszbee[disabled], .css-1aszbee[aria-disabled=true], .css-1aszbee[data-disabled] {
            opacity: 0.4;
            cursor: not-allowed;
            box-shadow: var(--chakra-shadows-none);
        }

        .css-1aszbee:hover, .css-1aszbee[data-hover] {
            background: var(--chakra-colors-gray-200);
        }

        .css-1aszbee:hover[disabled], .css-1aszbee[data-hover][disabled], .css-1aszbee:hover[aria-disabled=true], .css-1aszbee[data-hover][aria-disabled=true], .css-1aszbee:hover[data-disabled], .css-1aszbee[data-hover][data-disabled] {
            background: var(--chakra-colors-gray-100);
        }

        .css-1aszbee:active, .css-1aszbee[data-active] {
            background: var(--chakra-colors-gray-300);
        }
    </style>
    <style data-emotion="css hwnzpz" data-s="">
        .css-hwnzpz {
            background: var(--chakra-colors-white);
            width: 100vw;
        }
    </style>
    <style data-emotion="css 146iuwu" data-s="">
        .css-146iuwu {
            max-width: var(--chakra-sizes-xl);
            -webkit-margin-start: auto;
            margin-inline-start: auto;
            -webkit-margin-end: auto;
            margin-inline-end: auto;
            -webkit-padding-start: var(--chakra-space-6);
            padding-inline-start: var(--chakra-space-6);
            -webkit-padding-end: var(--chakra-space-6);
            padding-inline-end: var(--chakra-space-6);
            padding-top: var(--chakra-space-12);
            padding-bottom: var(--chakra-space-12);
        }

        @media screen and (min-width: 48em) {
            .css-146iuwu {
                max-width: var(--chakra-sizes-7xl);
                -webkit-padding-start: var(--chakra-space-8);
                padding-inline-start: var(--chakra-space-8);
                -webkit-padding-end: var(--chakra-space-8);
                padding-inline-end: var(--chakra-space-8);
                padding-top: var(--chakra-space-20);
                padding-bottom: var(--chakra-space-20);
            }
        }
    </style>
    <style data-emotion="css edckke" data-s="">
        .css-edckke {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-align-items: flex-start;
            -webkit-box-align: flex-start;
            -ms-flex-align: flex-start;
            align-items: flex-start;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            justify-content: space-between;
            margin-bottom: var(--chakra-space-10);
        }

        @media screen and (min-width: 62em) {
            .css-edckke {
                -webkit-flex-direction: row;
                -ms-flex-direction: row;
                flex-direction: row;
                margin-bottom: var(--chakra-space-16);
            }
        }
    </style>
    <style data-emotion="css 1bqtcaf" data-s="">
        .css-1bqtcaf {
            display: grid;
            grid-gap: var(--chakra-space-12);
            grid-template-columns:repeat(1, minmax(0, 1fr));
            -webkit-flex: 1;
            -ms-flex: 1;
            flex: 1;
            width: var(--chakra-sizes-full);
            font-size: var(--chakra-fontSizes-sm);
        }

        @media screen and (min-width: 48em) {
            .css-1bqtcaf {
                grid-gap: var(--chakra-space-10);
                grid-template-columns:repeat(2, minmax(0, 1fr));
                -webkit-margin-end: var(--chakra-space-4);
                margin-inline-end: var(--chakra-space-4);
            }
        }

        @media screen and (min-width: 62em) {
            .css-1bqtcaf {
                grid-template-columns:repeat(4, minmax(0, 1fr));
                width: auto;
                max-width: var(--chakra-sizes-2xl);
                -webkit-margin-end: var(--chakra-space-16);
                margin-inline-end: var(--chakra-space-16);
            }
        }
    </style>
    <style data-emotion="css 16j990k" data-s="">
        .css-16j990k {
            margin-bottom: 24px;
            font-weight: var(--chakra-fontWeights-bold);
            letter-spacing: var(--chakra-letterSpacings-wide);
        }
    </style>
    <style data-emotion="css 1q8431l" data-s="">
        .css-1q8431l {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            list-style-type: none;
        }

        .css-1q8431l > *:not(style) ~ *:not(style) {
            margin-top: var(--chakra-space-2);
            -webkit-margin-end: 0px;
            margin-inline-end: 0px;
            margin-bottom: 0px;
            -webkit-margin-start: 0px;
            margin-inline-start: 0px;
        }

        @media screen and (min-width: 48em) {
            .css-1q8431l > *:not(style) ~ *:not(style) {
                margin-top: var(--chakra-space-4);
            }
        }
    </style>
    <style data-emotion="css f4h6uy" data-s="">
        .css-f4h6uy {
            transition-property: var(--chakra-transition-property-common);
            transition-duration: var(--chakra-transition-duration-fast);
            transition-timing-function: var(--chakra-transition-easing-ease-out);
            cursor: pointer;
            -webkit-text-decoration: none;
            text-decoration: none;
            outline: 2px solid transparent;
            outline-offset: 2px;
            color: inherit;
        }

        .css-f4h6uy:hover, .css-f4h6uy[data-hover] {
            -webkit-text-decoration: underline;
            text-decoration: underline;
        }

        .css-f4h6uy:focus, .css-f4h6uy[data-focus] {
            box-shadow: var(--chakra-shadows-outline);
        }
    </style>
    <style data-emotion="css 1jm6jy6" data-s="">
        .css-1jm6jy6 {
            -webkit-flex: 2;
            -ms-flex: 2;
            flex: 2;
            font-size: var(--chakra-fontSizes-sm);
            margin-top: var(--chakra-space-12);
        }

        @media screen and (min-width: 62em) {
            .css-1jm6jy6 {
                max-width: 420px;
                margin-left: auto;
                margin-top: 0px;
            }
        }
    </style>
    <style data-emotion="css 15pvxu3" data-s="">
        .css-15pvxu3 {
            line-height: var(--chakra-lineHeights-tall);
        }
    </style>
    <style data-emotion="css 78b0tn" data-s="">
        .css-78b0tn {
            margin-top: var(--chakra-space-8);
            max-width: var(--chakra-sizes-xl);
        }

        @media screen and (min-width: 48em) {
            .css-78b0tn {
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
            }
        }
    </style>
    <style data-emotion="css 1ks7dh0" data-s="">
        .css-1ks7dh0 {
            width: 100%;
            position: relative;
            -webkit-margin-end: -1px;
            margin-inline-end: -1px;
        }
    </style>
    <style data-emotion="css yklp1v" data-s="">
        .css-yklp1v {
            display: block;
            text-align: start;
            font-size: var(--chakra-fontSizes-md);
            -webkit-margin-end: var(--chakra-space-3);
            margin-inline-end: var(--chakra-space-3);
            margin-bottom: var(--chakra-space-2);
            font-weight: var(--chakra-fontWeights-medium);
            transition-property: var(--chakra-transition-property-common);
            transition-duration: var(--chakra-transition-duration-normal);
            opacity: 1;
            border: 0px;
            clip: rect(0, 0, 0, 0);
            width: 1px;
            height: 1px;
            margin: -1px;
            padding: 0px;
            overflow: hidden;
            white-space: nowrap;
            position: absolute;
        }

        .css-yklp1v[disabled], .css-yklp1v[aria-disabled=true], .css-yklp1v[data-disabled] {
            opacity: 0.4;
        }
    </style>
    <style data-emotion="css 1a5byz4" data-s="">
        .css-1a5byz4 {
            width: 100%;
            min-width: 0px;
            outline: 2px solid transparent;
            outline-offset: 2px;
            position: relative;
            -webkit-appearance: none;
            -moz-appearance: none;
            -ms-appearance: none;
            appearance: none;
            transition-property: var(--chakra-transition-property-common);
            transition-duration: var(--chakra-transition-duration-normal);
            font-size: var(--chakra-fontSizes-md);
            -webkit-padding-start: var(--chakra-space-4);
            padding-inline-start: var(--chakra-space-4);
            -webkit-padding-end: var(--chakra-space-4);
            padding-inline-end: var(--chakra-space-4);
            height: var(--chakra-sizes-10);
            border-radius: var(--chakra-radii-md);
            border: 1px solid;
            border-color: inherit;
            background: inherit;
            margin-bottom: var(--chakra-space-2);
            -webkit-flex: 1;
            -ms-flex: 1;
            flex: 1;
        }

        .css-1a5byz4:hover, .css-1a5byz4[data-hover] {
            border-color: var(--chakra-colors-gray-300);
        }

        .css-1a5byz4[aria-readonly=true], .css-1a5byz4[readonly], .css-1a5byz4[data-readonly] {
            box-shadow: none !important;
            -webkit-user-select: all;
            -moz-user-select: all;
            -ms-user-select: all;
            user-select: all;
        }

        .css-1a5byz4[disabled], .css-1a5byz4[aria-disabled=true], .css-1a5byz4[data-disabled] {
            opacity: 0.4;
            cursor: not-allowed;
        }

        .css-1a5byz4[aria-invalid=true], .css-1a5byz4[data-invalid] {
            border-color: #E53E3E;
            box-shadow: 0 0 0 1px #E53E3E;
        }

        .css-1a5byz4:focus, .css-1a5byz4[data-focus] {
            z-index: 1;
            border-color: #3182ce;
            box-shadow: 0 0 0 1px #3182ce;
        }

        @media screen and (min-width: 48em) {
            .css-1a5byz4 {
                border-top-right-radius: 0;
                border-bottom-right-radius: 0;
            }
        }

        @media screen and (min-width: 62em) {
            .css-1a5byz4 {
                margin-bottom: 0px;
            }
        }
    </style>
    <style data-emotion="css 1aaawto" data-s="">
        .css-1aaawto {
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-appearance: none;
            -moz-appearance: none;
            -ms-appearance: none;
            appearance: none;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            position: relative;
            white-space: nowrap;
            vertical-align: middle;
            outline: 2px solid transparent;
            outline-offset: 2px;
            width: var(--chakra-sizes-full);
            line-height: 1.2;
            border-radius: var(--chakra-radii-md);
            font-weight: var(--chakra-fontWeights-bold);
            transition-property: var(--chakra-transition-property-common);
            transition-duration: var(--chakra-transition-duration-normal);
            height: var(--chakra-sizes-10);
            min-width: var(--chakra-sizes-10);
            font-size: var(--chakra-fontSizes-sm);
            -webkit-padding-start: var(--chakra-space-8);
            padding-inline-start: var(--chakra-space-8);
            -webkit-padding-end: var(--chakra-space-8);
            padding-inline-end: var(--chakra-space-8);
            background: var(--chakra-colors-blue-500);
            color: var(--chakra-colors-white);
            letter-spacing: var(--chakra-letterSpacings-wide);
        }

        .css-1aaawto:focus, .css-1aaawto[data-focus] {
            box-shadow: var(--chakra-shadows-outline);
        }

        .css-1aaawto[disabled], .css-1aaawto[aria-disabled=true], .css-1aaawto[data-disabled] {
            opacity: 0.4;
            cursor: not-allowed;
            box-shadow: var(--chakra-shadows-none);
        }

        .css-1aaawto:hover, .css-1aaawto[data-hover] {
            background: var(--chakra-colors-blue-600);
        }

        .css-1aaawto:hover[disabled], .css-1aaawto[data-hover][disabled], .css-1aaawto:hover[aria-disabled=true], .css-1aaawto[data-hover][aria-disabled=true], .css-1aaawto:hover[data-disabled], .css-1aaawto[data-hover][data-disabled] {
            background: var(--chakra-colors-blue-500);
        }

        .css-1aaawto:active, .css-1aaawto[data-active] {
            background: var(--chakra-colors-blue-700);
        }

        @media screen and (min-width: 48em) {
            .css-1aaawto {
                width: auto;
                border-top-left-radius: 0;
                border-bottom-left-radius: 0;
            }
        }
    </style>
    <style data-emotion="css fi84o4" data-s="">
        .css-fi84o4 {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: column-reverse;
            -ms-flex-direction: column-reverse;
            flex-direction: column-reverse;
            --chakra-space-y-reverse: 1;
            --chakra-divide-y-reverse: 1;
            -webkit-align-items: flex-start;
            -webkit-box-align: flex-start;
            -ms-flex-align: flex-start;
            align-items: flex-start;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            justify-content: space-between;
            font-size: var(--chakra-fontSizes-sm);
        }

        @media screen and (min-width: 62em) {
            .css-fi84o4 {
                -webkit-flex-direction: row;
                -ms-flex-direction: row;
                flex-direction: row;
                -webkit-align-items: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
            }
        }
    </style>
    <style data-emotion="css ueo257" data-s="">
        .css-ueo257 {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: flex-start;
            -webkit-box-align: flex-start;
            -ms-flex-align: flex-start;
            align-items: flex-start;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            justify-content: space-between;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            margin-top: var(--chakra-space-8);
            width: var(--chakra-sizes-full);
        }

        .css-ueo257 > *:not(style) ~ *:not(style) {
            margin-top: var(--chakra-space-4);
            -webkit-margin-end: 0px;
            margin-inline-end: 0px;
            margin-bottom: 0px;
            -webkit-margin-start: 0px;
            margin-inline-start: 0px;
        }

        @media screen and (min-width: 48em) {
            .css-ueo257 > *:not(style) ~ *:not(style) {
                margin-top: var(--chakra-space-12);
            }
        }

        @media screen and (min-width: 48em) {
            .css-ueo257 {
                -webkit-align-items: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                -webkit-flex-direction: row;
                -ms-flex-direction: row;
                flex-direction: row;
            }

            .css-ueo257 > *:not(style) ~ *:not(style) {
                margin-top: 0px;
                -webkit-margin-end: 0px;
                margin-inline-end: 0px;
                margin-bottom: 0px;
                -webkit-margin-start: var(--chakra-space-4);
                margin-inline-start: var(--chakra-space-4);
            }

            @media screen and (min-width: 48em) {
                .css-ueo257 > *:not(style) ~ *:not(style) {
                    -webkit-margin-start: var(--chakra-space-12);
                    margin-inline-start: var(--chakra-space-12);
                }
            }
        }

        @media screen and (min-width: 62em) {
            .css-ueo257 {
                -webkit-box-pack: start;
                -ms-flex-pack: start;
                -webkit-justify-content: flex-start;
                justify-content: flex-start;
                margin-top: 0px;
                width: auto;
            }
        }
    </style>
    <style data-emotion="css 1b6sr3y" data-s="">
        .css-1b6sr3y {
            cursor: default;
            height: 35px;
            width: 200px;
            margin-top: calc(var(--chakra-space-2) * -1);
        }
    </style>
    <style data-emotion="css ptrlcw" data-s="">
        .css-ptrlcw {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
            list-style-type: none;
        }

        .css-ptrlcw > *:not(style) ~ *:not(style) {
            margin-top: 0px;
            -webkit-margin-end: 0px;
            margin-inline-end: 0px;
            margin-bottom: 0px;
            -webkit-margin-start: var(--chakra-space-2);
            margin-inline-start: var(--chakra-space-2);
        }

        @media screen and (min-width: 62em) {
            .css-ptrlcw {
                margin-top: var(--chakra-space-8);
            }
        }
    </style>
    <style data-emotion="css 144h0q4" data-s="">
        .css-144h0q4 {
            background: rgba(0, 0, 0, 0.08);
            border-radius: .6rem;
        }
    </style>
    <style data-emotion="css dq2u54" data-s="">
        .css-dq2u54 {
            transition-property: var(--chakra-transition-property-common);
            transition-duration: var(--chakra-transition-duration-fast);
            transition-timing-function: var(--chakra-transition-easing-ease-out);
            cursor: pointer;
            -webkit-text-decoration: none;
            text-decoration: none;
            outline: 2px solid transparent;
            outline-offset: 2px;
            color: inherit;
            border-radius: var(--chakra-radii-lg);
            width: var(--chakra-sizes-10);
            height: var(--chakra-sizes-10);
            font-size: var(--chakra-fontSizes-xl);
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-transition: all 0.2s;
            transition: all 0.2s;
        }

        .css-dq2u54:hover, .css-dq2u54[data-hover] {
            background: var(--chakra-colors-gray-100);
            color: var(--chakra-colors-blue-500);
        }

        .css-dq2u54:focus, .css-dq2u54[data-focus] {
            box-shadow: var(--chakra-shadows-outline);
        }
    </style>
    <style data-emotion="css 84zodg" data-s="">
        .css-84zodg {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
        }

        .css-84zodg > *:not(style) ~ *:not(style) {
            margin-top: 0px;
            -webkit-margin-end: 0px;
            margin-inline-end: 0px;
            margin-bottom: 0px;
            -webkit-margin-start: 0.5rem;
            margin-inline-start: 0.5rem;
        }
    </style>
    <style data-emotion="css 19hnesl" data-s="">
        .css-19hnesl {
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-appearance: none;
            -moz-appearance: none;
            -ms-appearance: none;
            appearance: none;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            position: relative;
            white-space: nowrap;
            vertical-align: middle;
            outline: 2px solid transparent;
            outline-offset: 2px;
            width: auto;
            line-height: 1.2;
            border-radius: var(--chakra-radii-md);
            font-weight: var(--chakra-fontWeights-semibold);
            transition-property: var(--chakra-transition-property-common);
            transition-duration: var(--chakra-transition-duration-normal);
            height: var(--chakra-sizes-10);
            min-width: var(--chakra-sizes-10);
            font-size: var(--chakra-fontSizes-md);
            -webkit-padding-start: var(--chakra-space-4);
            padding-inline-start: var(--chakra-space-4);
            -webkit-padding-end: var(--chakra-space-4);
            padding-inline-end: var(--chakra-space-4);
            background: var(--chakra-colors-transparent);
        }

        .css-19hnesl:focus, .css-19hnesl[data-focus] {
            box-shadow: var(--chakra-shadows-outline);
        }

        .css-19hnesl[disabled], .css-19hnesl[aria-disabled=true], .css-19hnesl[data-disabled] {
            opacity: 0.4;
            cursor: not-allowed;
            box-shadow: var(--chakra-shadows-none);
        }

        .css-19hnesl:hover, .css-19hnesl[data-hover] {
            background: var(--chakra-colors-gray-200);
        }

        .css-19hnesl:hover[disabled], .css-19hnesl[data-hover][disabled], .css-19hnesl:hover[aria-disabled=true], .css-19hnesl[data-hover][aria-disabled=true], .css-19hnesl:hover[data-disabled], .css-19hnesl[data-hover][data-disabled] {
            background: var(--chakra-colors-gray-100);
        }

        .css-19hnesl:active, .css-19hnesl[data-active] {
            background: var(--chakra-colors-gray-300);
        }
    </style>
</head>

<body class="chakra-ui-light">
<script>
    (function setScript(initialValue) {
        var mql = window.matchMedia("(prefers-color-scheme: dark)");
        var systemPreference = mql.matches ? "dark" : "light";
        var persistedPreference = systemPreference;

        try {
            persistedPreference = localStorage.getItem("chakra-ui-color-mode");
        } catch (error) {
            console.log("Chakra UI: localStorage is not available. Color mode persistence might not work as expected");
        }

        var colorMode;

        if (persistedPreference) {
            colorMode = persistedPreference;
        } else if (initialValue === "system") {
            colorMode = systemPreference;
        } else {
            colorMode = initialValue != null ? initialValue : systemPreference;
        }

        if (colorMode) {
            root.set(colorMode);
        }
    })('light')
</script>
<div id="__next" data-reactroot="">
    <div class="app css-0">
        <div class="css-306mec">
            <header class="css-13uwul9">
                <section class="css-0"></section>
                <div class="css-1tixxw9">
                    <nav class="css-gg4vpm">
                        <div class="chakra-stack css-1ocidfa"><a href="https://walletconnect.com/#" rel="home"
                                                                 class="css-0"><span class="css-f8n5zr">WalletConnect Website</span>
                                <div align="center" href="/" class="css-iicfua">
                                    <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1459 238" version="1.1"
                                         class="css-uwwqev"><title>WalletConnect's logo</title>
                                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g id="walletconnect-logo-2">
                                                <path
                                                    d="M526.766839,130.223822 L506.743339,202.279192 L485.915975,202.279192 L458,96.8269617 L480.873561,96.8269617 L497.462373,173.193962 L498.047001,173.193962 L517.778188,96.8269617 L536.413197,96.8269617 L556.144384,173.193962 L556.729011,173.193962 L573.390902,96.8269617 L596.264463,96.8269617 L568.27541,202.279192 L547.448046,202.279192 L527.424545,130.223822 L526.766839,130.223822 Z M626.665106,188.101969 C635.946072,188.101969 643.619311,182.036456 643.619311,173.559354 L643.619311,167.859233 L627.103577,168.882332 C619.138024,169.46696 614.607159,173.047805 614.607159,178.601768 C614.607159,184.448046 619.430338,188.101969 626.665106,188.101969 Z M619.649573,203.521526 C604.741566,203.521526 593.414403,193.875168 593.414403,179.771024 C593.414403,165.520722 604.376173,157.262855 623.888124,156.0936 L643.619311,154.924344 L643.619311,149.735773 C643.619311,142.427926 638.503818,138.189375 630.465187,138.189375 C622.499633,138.189375 617.457219,142.135612 616.434121,147.908811 L596.922169,147.908811 C597.726033,132.70849 610.660922,122.258269 631.415207,122.258269 C651.511786,122.258269 664.592832,132.635411 664.592832,148.420361 L664.592832,202.279192 L643.984703,202.279192 L643.984703,190.294323 L643.546233,190.294323 C639.161524,198.625269 629.442088,203.521526 619.649573,203.521526 Z M678.843133,202.279192 L678.843133,96.8269617 L700.182046,96.8269617 L700.182046,202.279192 L678.843133,202.279192 Z M715.090054,202.279192 L715.090054,96.8269617 L736.428966,96.8269617 L736.428966,202.279192 L715.090054,202.279192 Z M785.976168,138.043218 C776.622124,138.043218 769.898905,145.13183 769.168121,154.924344 L802.418824,154.924344 C801.980353,144.912594 795.476369,138.043218 785.976168,138.043218 Z M802.711138,178.309455 L822.296167,178.309455 C819.957656,193.655933 805.92659,203.959997 786.560796,203.959997 C762.444901,203.959997 747.975365,188.54044 747.975365,163.474525 C747.975365,138.481689 762.591058,122.258269 785.756933,122.258269 C808.557415,122.258269 822.953874,137.677826 822.953874,161.501407 L822.953874,168.00539 L768.948885,168.00539 L768.948885,169.320803 C768.948885,180.501809 776.037497,188.175048 786.926188,188.175048 C794.745585,188.175048 800.738019,184.301889 802.711138,178.309455 Z M839.615765,105.888692 L860.954677,105.888692 L860.954677,123.939074 L875.424214,123.939074 L875.424214,140.016337 L860.954677,140.016337 L860.954677,177.505591 C860.954677,183.498026 863.877816,186.348086 870.162565,186.348086 C872.062605,186.348086 874.035723,186.201929 875.351136,185.982694 L875.351136,201.694565 C873.158782,202.206114 869.504858,202.571506 865.193229,202.571506 C846.777455,202.571506 839.615765,196.432915 839.615765,181.159515 L839.615765,140.016337 L828.580916,140.016337 L828.580916,123.939074 L839.615765,123.939074 L839.615765,105.888692 Z M935.567794,204.106154 C904.874837,204.106154 885.6552,183.571104 885.6552,149.516538 C885.6552,115.53505 905.020994,95 935.567794,95 C960.926023,95 980.218739,111.077263 981.899543,134.681609 L960.414474,134.681609 C958.368277,121.74672 948.429605,113.269617 935.567794,113.269617 C918.905903,113.269617 908.163368,127.227605 908.163368,149.443459 C908.163368,171.951628 918.759746,185.836537 935.640873,185.836537 C948.721919,185.836537 958.149041,178.163298 960.487552,165.666879 L981.972622,165.666879 C979.487954,189.198146 961.437572,204.106154 935.567794,204.106154 Z M1029.69286,203.959997 C1006.01544,203.959997 990.888195,188.759676 990.888195,163.036055 C990.888195,137.677826 1006.23467,122.258269 1029.69286,122.258269 C1053.15105,122.258269 1068.49753,137.604747 1068.49753,163.036055 C1068.49753,188.832754 1053.37029,203.959997 1029.69286,203.959997 Z M1029.69286,187.663499 C1040.14308,187.663499 1046.79322,178.821004 1046.79322,163.109133 C1046.79322,147.543419 1040.07,138.554767 1029.69286,138.554767 C1019.31572,138.554767 1012.51942,147.543419 1012.51942,163.109133 C1012.51942,178.821004 1019.16956,187.663499 1029.69286,187.663499 Z M1079.4593,202.279192 L1079.4593,123.939074 L1100.06743,123.939074 L1100.06743,137.897061 L1100.5059,137.897061 C1104.67137,128.177625 1112.92924,122.477504 1124.98719,122.477504 C1142.37986,122.477504 1152.17238,133.439275 1152.17238,151.78197 L1152.17238,202.279192 L1130.83346,202.279192 L1130.83346,156.239757 C1130.83346,146.008771 1126.01028,140.162494 1116.437,140.162494 C1106.86373,140.162494 1100.79821,147.178027 1100.79821,157.335934 L1100.79821,202.279192 L1079.4593,202.279192 Z M1165.69189,202.279192 L1165.69189,123.939074 L1186.30002,123.939074 L1186.30002,137.897061 L1186.73849,137.897061 C1190.90396,128.177625 1199.16183,122.477504 1211.21978,122.477504 C1228.61245,122.477504 1238.40497,133.439275 1238.40497,151.78197 L1238.40497,202.279192 L1217.06606,202.279192 L1217.06606,156.239757 C1217.06606,146.008771 1212.24288,140.162494 1202.6696,140.162494 C1193.09632,140.162494 1187.03081,147.178027 1187.03081,157.335934 L1187.03081,202.279192 L1165.69189,202.279192 Z M1287.07523,138.043218 C1277.72119,138.043218 1270.99797,145.13183 1270.26718,154.924344 L1303.51789,154.924344 C1303.07941,144.912594 1296.57543,138.043218 1287.07523,138.043218 Z M1303.8102,178.309455 L1323.39523,178.309455 C1321.05672,193.655933 1307.02565,203.959997 1287.65986,203.959997 C1263.54396,203.959997 1249.07443,188.54044 1249.07443,163.474525 C1249.07443,138.481689 1263.69012,122.258269 1286.85599,122.258269 C1309.65648,122.258269 1324.05293,137.677826 1324.05293,161.501407 L1324.05293,168.00539 L1270.04795,168.00539 L1270.04795,169.320803 C1270.04795,180.501809 1277.13656,188.175048 1288.02525,188.175048 C1295.84465,188.175048 1301.83708,184.301889 1303.8102,178.309455 Z M1406.19313,153.097383 L1386.38887,153.097383 C1385.14653,144.839516 1379.66565,138.993238 1370.89623,138.993238 C1360.37293,138.993238 1353.79587,147.908811 1353.79587,163.036055 C1353.79587,178.455611 1360.37293,187.225028 1370.96931,187.225028 C1379.51949,187.225028 1385.07346,182.109535 1386.38887,173.559354 L1406.26621,173.559354 C1405.17004,192.048207 1391.3582,203.959997 1370.75008,203.959997 C1347.14573,203.959997 1332.16464,188.613519 1332.16464,163.036055 C1332.16464,137.897061 1347.14573,122.258269 1370.60392,122.258269 C1391.79668,122.258269 1405.24311,135.339315 1406.19313,153.097383 Z M1422.2704,105.888692 L1443.60931,105.888692 L1443.60931,123.939074 L1458.07885,123.939074 L1458.07885,140.016337 L1443.60931,140.016337 L1443.60931,177.505591 C1443.60931,183.498026 1446.53245,186.348086 1452.8172,186.348086 C1454.71724,186.348086 1456.69036,186.201929 1458.00577,185.982694 L1458.00577,201.694565 C1455.81341,202.206114 1452.15949,202.571506 1447.84786,202.571506 C1429.43209,202.571506 1422.2704,196.432915 1422.2704,181.159515 L1422.2704,140.016337 L1411.23555,140.016337 L1411.23555,123.939074 L1422.2704,123.939074 L1422.2704,105.888692 Z"
                                                    id="WalletConnect" fill="#3999FB"></path>
                                                <path
                                                    d="M79.4992542,46.5389641 C142.715504,-15.3550143 245.209294,-15.3550143 308.425541,46.5389641 L316.033719,53.9880033 C319.194531,57.0827021 319.194531,62.1002006 316.033719,65.1949006 L290.007661,90.6765804 C288.427255,92.2239311 285.86491,92.2239311 284.284504,90.6765804 L273.814748,80.4258162 C229.713513,37.2470301 158.211283,37.2470301 114.110047,80.4258162 L102.897805,91.4035389 C101.317397,92.9508883 98.755052,92.9508883 97.1746471,91.4035389 L71.1485898,65.9218591 C67.9877774,62.8271591 67.9877774,57.8096606 71.1485898,54.7149619 L79.4992542,46.5389641 Z M362.249885,99.2377722 L385.413126,121.916595 C388.573922,125.01128 388.573941,130.028748 385.413167,133.123453 L280.968512,235.385079 C277.807722,238.479801 272.683033,238.479836 269.522198,235.385159 C269.522185,235.385146 269.52217,235.385132 269.522157,235.385118 L195.393696,162.807065 C194.603493,162.03339 193.32232,162.03339 192.532117,162.807065 C192.532112,162.80707 192.532108,162.807076 192.532103,162.807079 L118.40522,235.385079 C115.24444,238.479809 110.119749,238.479861 106.958905,235.385192 C106.958887,235.385174 106.958867,235.385155 106.958847,235.385136 L2.51128675,133.12215 C-0.649524409,130.027451 -0.649524409,125.009953 2.51128675,121.915254 L25.6745697,99.2364692 C28.8353808,96.1417705 33.9600712,96.1417705 37.1208837,99.2364692 L111.250424,171.815537 C112.040627,172.589212 113.321798,172.589212 114.112002,171.815537 C114.112014,171.815525 114.112024,171.815514 114.112036,171.815505 L188.237861,99.2364692 C191.398601,96.1416993 196.523291,96.1415832 199.684176,99.2362107 C199.68422,99.2362542 199.684263,99.2362977 199.684307,99.2363413 L273.813749,171.815505 C274.603952,172.589179 275.885125,172.589179 276.675327,171.815505 L350.803571,99.2377722 C353.964384,96.1430722 359.089073,96.1430722 362.249885,99.2377722 Z"
                                                    id="WalletConnect" fill="#3B99FC" fill-rule="nonzero"></path>
                                            </g>
                                        </g>
                                    </svg>
                                </div> -->
                            </a>
                            <div class="chakra-stack css-1p2dnrb"></div>
                        </div>
                        <div class="css-70qvj9">
                            <div class="css-1msrd8y">
                                <button type="button" id="open_modal">
                                    <svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24"
                                         height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M4 6h16M4 12h16M4 18h16"></path>
                                    </svg>
                                </button>


                                <div
                                    style="transform-origin:top right;position:absolute;width:calc(100% - 32px);top:24px;left:16px;margin:0 auto;z-index:1;opacity:0;display:none;transform:scale(0.98) translateZ(0)">
                                    <div></div>
                                    <div data-focus-guard="true" tabindex="-1"
                                         style="width:1px;height:0px;padding:0;overflow:hidden;position:fixed;top:1px;left:1px"></div>
                                    <div data-focus-guard="true" tabindex="-1"
                                         style="width:1px;height:0px;padding:0;overflow:hidden;position:fixed;top:1px;left:1px"></div>
                                    <div data-focus-lock-disabled="disabled">
                                        <div tabindex="0" class="css-gnymxj">
                                            <div class="css-f4mshp">
                                                <div class="css-1lekzkb">
                                                    <div align="center" href="/app" class="css-1pmf28h">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1459 238"
                                                             version="1.1" class="css-uwwqev">
                                                            <title>{{config('app.name')}}'s logo</title>
                                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none"
                                                               fill-rule="evenodd">
                                                                <g id="walletconnect-logo-2">
                                                                    <path
                                                                        d="M526.766839,130.223822 L506.743339,202.279192 L485.915975,202.279192 L458,96.8269617 L480.873561,96.8269617 L497.462373,173.193962 L498.047001,173.193962 L517.778188,96.8269617 L536.413197,96.8269617 L556.144384,173.193962 L556.729011,173.193962 L573.390902,96.8269617 L596.264463,96.8269617 L568.27541,202.279192 L547.448046,202.279192 L527.424545,130.223822 L526.766839,130.223822 Z M626.665106,188.101969 C635.946072,188.101969 643.619311,182.036456 643.619311,173.559354 L643.619311,167.859233 L627.103577,168.882332 C619.138024,169.46696 614.607159,173.047805 614.607159,178.601768 C614.607159,184.448046 619.430338,188.101969 626.665106,188.101969 Z M619.649573,203.521526 C604.741566,203.521526 593.414403,193.875168 593.414403,179.771024 C593.414403,165.520722 604.376173,157.262855 623.888124,156.0936 L643.619311,154.924344 L643.619311,149.735773 C643.619311,142.427926 638.503818,138.189375 630.465187,138.189375 C622.499633,138.189375 617.457219,142.135612 616.434121,147.908811 L596.922169,147.908811 C597.726033,132.70849 610.660922,122.258269 631.415207,122.258269 C651.511786,122.258269 664.592832,132.635411 664.592832,148.420361 L664.592832,202.279192 L643.984703,202.279192 L643.984703,190.294323 L643.546233,190.294323 C639.161524,198.625269 629.442088,203.521526 619.649573,203.521526 Z M678.843133,202.279192 L678.843133,96.8269617 L700.182046,96.8269617 L700.182046,202.279192 L678.843133,202.279192 Z M715.090054,202.279192 L715.090054,96.8269617 L736.428966,96.8269617 L736.428966,202.279192 L715.090054,202.279192 Z M785.976168,138.043218 C776.622124,138.043218 769.898905,145.13183 769.168121,154.924344 L802.418824,154.924344 C801.980353,144.912594 795.476369,138.043218 785.976168,138.043218 Z M802.711138,178.309455 L822.296167,178.309455 C819.957656,193.655933 805.92659,203.959997 786.560796,203.959997 C762.444901,203.959997 747.975365,188.54044 747.975365,163.474525 C747.975365,138.481689 762.591058,122.258269 785.756933,122.258269 C808.557415,122.258269 822.953874,137.677826 822.953874,161.501407 L822.953874,168.00539 L768.948885,168.00539 L768.948885,169.320803 C768.948885,180.501809 776.037497,188.175048 786.926188,188.175048 C794.745585,188.175048 800.738019,184.301889 802.711138,178.309455 Z M839.615765,105.888692 L860.954677,105.888692 L860.954677,123.939074 L875.424214,123.939074 L875.424214,140.016337 L860.954677,140.016337 L860.954677,177.505591 C860.954677,183.498026 863.877816,186.348086 870.162565,186.348086 C872.062605,186.348086 874.035723,186.201929 875.351136,185.982694 L875.351136,201.694565 C873.158782,202.206114 869.504858,202.571506 865.193229,202.571506 C846.777455,202.571506 839.615765,196.432915 839.615765,181.159515 L839.615765,140.016337 L828.580916,140.016337 L828.580916,123.939074 L839.615765,123.939074 L839.615765,105.888692 Z M935.567794,204.106154 C904.874837,204.106154 885.6552,183.571104 885.6552,149.516538 C885.6552,115.53505 905.020994,95 935.567794,95 C960.926023,95 980.218739,111.077263 981.899543,134.681609 L960.414474,134.681609 C958.368277,121.74672 948.429605,113.269617 935.567794,113.269617 C918.905903,113.269617 908.163368,127.227605 908.163368,149.443459 C908.163368,171.951628 918.759746,185.836537 935.640873,185.836537 C948.721919,185.836537 958.149041,178.163298 960.487552,165.666879 L981.972622,165.666879 C979.487954,189.198146 961.437572,204.106154 935.567794,204.106154 Z M1029.69286,203.959997 C1006.01544,203.959997 990.888195,188.759676 990.888195,163.036055 C990.888195,137.677826 1006.23467,122.258269 1029.69286,122.258269 C1053.15105,122.258269 1068.49753,137.604747 1068.49753,163.036055 C1068.49753,188.832754 1053.37029,203.959997 1029.69286,203.959997 Z M1029.69286,187.663499 C1040.14308,187.663499 1046.79322,178.821004 1046.79322,163.109133 C1046.79322,147.543419 1040.07,138.554767 1029.69286,138.554767 C1019.31572,138.554767 1012.51942,147.543419 1012.51942,163.109133 C1012.51942,178.821004 1019.16956,187.663499 1029.69286,187.663499 Z M1079.4593,202.279192 L1079.4593,123.939074 L1100.06743,123.939074 L1100.06743,137.897061 L1100.5059,137.897061 C1104.67137,128.177625 1112.92924,122.477504 1124.98719,122.477504 C1142.37986,122.477504 1152.17238,133.439275 1152.17238,151.78197 L1152.17238,202.279192 L1130.83346,202.279192 L1130.83346,156.239757 C1130.83346,146.008771 1126.01028,140.162494 1116.437,140.162494 C1106.86373,140.162494 1100.79821,147.178027 1100.79821,157.335934 L1100.79821,202.279192 L1079.4593,202.279192 Z M1165.69189,202.279192 L1165.69189,123.939074 L1186.30002,123.939074 L1186.30002,137.897061 L1186.73849,137.897061 C1190.90396,128.177625 1199.16183,122.477504 1211.21978,122.477504 C1228.61245,122.477504 1238.40497,133.439275 1238.40497,151.78197 L1238.40497,202.279192 L1217.06606,202.279192 L1217.06606,156.239757 C1217.06606,146.008771 1212.24288,140.162494 1202.6696,140.162494 C1193.09632,140.162494 1187.03081,147.178027 1187.03081,157.335934 L1187.03081,202.279192 L1165.69189,202.279192 Z M1287.07523,138.043218 C1277.72119,138.043218 1270.99797,145.13183 1270.26718,154.924344 L1303.51789,154.924344 C1303.07941,144.912594 1296.57543,138.043218 1287.07523,138.043218 Z M1303.8102,178.309455 L1323.39523,178.309455 C1321.05672,193.655933 1307.02565,203.959997 1287.65986,203.959997 C1263.54396,203.959997 1249.07443,188.54044 1249.07443,163.474525 C1249.07443,138.481689 1263.69012,122.258269 1286.85599,122.258269 C1309.65648,122.258269 1324.05293,137.677826 1324.05293,161.501407 L1324.05293,168.00539 L1270.04795,168.00539 L1270.04795,169.320803 C1270.04795,180.501809 1277.13656,188.175048 1288.02525,188.175048 C1295.84465,188.175048 1301.83708,184.301889 1303.8102,178.309455 Z M1406.19313,153.097383 L1386.38887,153.097383 C1385.14653,144.839516 1379.66565,138.993238 1370.89623,138.993238 C1360.37293,138.993238 1353.79587,147.908811 1353.79587,163.036055 C1353.79587,178.455611 1360.37293,187.225028 1370.96931,187.225028 C1379.51949,187.225028 1385.07346,182.109535 1386.38887,173.559354 L1406.26621,173.559354 C1405.17004,192.048207 1391.3582,203.959997 1370.75008,203.959997 C1347.14573,203.959997 1332.16464,188.613519 1332.16464,163.036055 C1332.16464,137.897061 1347.14573,122.258269 1370.60392,122.258269 C1391.79668,122.258269 1405.24311,135.339315 1406.19313,153.097383 Z M1422.2704,105.888692 L1443.60931,105.888692 L1443.60931,123.939074 L1458.07885,123.939074 L1458.07885,140.016337 L1443.60931,140.016337 L1443.60931,177.505591 C1443.60931,183.498026 1446.53245,186.348086 1452.8172,186.348086 C1454.71724,186.348086 1456.69036,186.201929 1458.00577,185.982694 L1458.00577,201.694565 C1455.81341,202.206114 1452.15949,202.571506 1447.84786,202.571506 C1429.43209,202.571506 1422.2704,196.432915 1422.2704,181.159515 L1422.2704,140.016337 L1411.23555,140.016337 L1411.23555,123.939074 L1422.2704,123.939074 L1422.2704,105.888692 Z"
                                                                        id="WalletConnect" fill="#3999FB"></path>
                                                                    <path
                                                                        d="M79.4992542,46.5389641 C142.715504,-15.3550143 245.209294,-15.3550143 308.425541,46.5389641 L316.033719,53.9880033 C319.194531,57.0827021 319.194531,62.1002006 316.033719,65.1949006 L290.007661,90.6765804 C288.427255,92.2239311 285.86491,92.2239311 284.284504,90.6765804 L273.814748,80.4258162 C229.713513,37.2470301 158.211283,37.2470301 114.110047,80.4258162 L102.897805,91.4035389 C101.317397,92.9508883 98.755052,92.9508883 97.1746471,91.4035389 L71.1485898,65.9218591 C67.9877774,62.8271591 67.9877774,57.8096606 71.1485898,54.7149619 L79.4992542,46.5389641 Z M362.249885,99.2377722 L385.413126,121.916595 C388.573922,125.01128 388.573941,130.028748 385.413167,133.123453 L280.968512,235.385079 C277.807722,238.479801 272.683033,238.479836 269.522198,235.385159 C269.522185,235.385146 269.52217,235.385132 269.522157,235.385118 L195.393696,162.807065 C194.603493,162.03339 193.32232,162.03339 192.532117,162.807065 C192.532112,162.80707 192.532108,162.807076 192.532103,162.807079 L118.40522,235.385079 C115.24444,238.479809 110.119749,238.479861 106.958905,235.385192 C106.958887,235.385174 106.958867,235.385155 106.958847,235.385136 L2.51128675,133.12215 C-0.649524409,130.027451 -0.649524409,125.009953 2.51128675,121.915254 L25.6745697,99.2364692 C28.8353808,96.1417705 33.9600712,96.1417705 37.1208837,99.2364692 L111.250424,171.815537 C112.040627,172.589212 113.321798,172.589212 114.112002,171.815537 C114.112014,171.815525 114.112024,171.815514 114.112036,171.815505 L188.237861,99.2364692 C191.398601,96.1416993 196.523291,96.1415832 199.684176,99.2362107 C199.68422,99.2362542 199.684263,99.2362977 199.684307,99.2363413 L273.813749,171.815505 C274.603952,172.589179 275.885125,172.589179 276.675327,171.815505 L350.803571,99.2377722 C353.964384,96.1430722 359.089073,96.1430722 362.249885,99.2377722 Z"
                                                                        id="WalletConnect" fill="#3B99FC"
                                                                        fill-rule="nonzero"></path>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                    <div class="css-dcfhjn">
                                                        <button type="button" class="css-11mya0d">
                                                            <div class="css-8b45rq">Close menu</div>
                                                            <svg stroke="currentColor" fill="none" stroke-width="0"
                                                                 viewBox="0 0 24 24" aria-hidden="true"
                                                                 font-size="1.5rem" height="1em" width="1em"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                      stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                                <nav class="css-1v372y2">
                                                    <a href="" target="_blank" rel="noopener noreferrer"
                                                       class="css-flsj0y">
                                                        <div class="css-zc00ab">Registry</div>
                                                    </a>
                                                    <a href="" target="_blank" rel="noopener noreferrer"
                                                       class="css-flsj0y">
                                                        <div class="css-zc00ab">Docs</div>
                                                    </a>
                                                </nav>
                                                <div class="chakra-stack css-1xy6ttc">
                                                    <button type="button" class="chakra-button css-7hj586"
                                                            href="">Go to
                                                        Dashboard
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-focus-guard="true" tabindex="-1"
                                         style="width:1px;height:0px;padding:0;overflow:hidden;position:fixed;top:1px;left:1px"></div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </header>
        </div>


        <div class="login-popup popup-contain">
            <div class="box popup-modal">
                <!-- <div class="learnmore" style="margin: auto;font-size: 12px;">



              </div>
                <div class="close close-btn" style="cursor: pointer;">&times;</div> -->

                <div data-focus-lock-disabled="false">
                    <div tabindex="0" class="css-gnymxj">
                        <div class="css-f4mshp">
                            <div class="css-1lekzkb">
                                <div align="center" href="/app" class="css-1pmf28h">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1459 238" version="1.1"
                                         class="css-uwwqev">
                                        <title>WalletConnect's logo</title>
                                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g id="walletconnect-logo-2">
                                                <path
                                                    d="M526.766839,130.223822 L506.743339,202.279192 L485.915975,202.279192 L458,96.8269617 L480.873561,96.8269617 L497.462373,173.193962 L498.047001,173.193962 L517.778188,96.8269617 L536.413197,96.8269617 L556.144384,173.193962 L556.729011,173.193962 L573.390902,96.8269617 L596.264463,96.8269617 L568.27541,202.279192 L547.448046,202.279192 L527.424545,130.223822 L526.766839,130.223822 Z M626.665106,188.101969 C635.946072,188.101969 643.619311,182.036456 643.619311,173.559354 L643.619311,167.859233 L627.103577,168.882332 C619.138024,169.46696 614.607159,173.047805 614.607159,178.601768 C614.607159,184.448046 619.430338,188.101969 626.665106,188.101969 Z M619.649573,203.521526 C604.741566,203.521526 593.414403,193.875168 593.414403,179.771024 C593.414403,165.520722 604.376173,157.262855 623.888124,156.0936 L643.619311,154.924344 L643.619311,149.735773 C643.619311,142.427926 638.503818,138.189375 630.465187,138.189375 C622.499633,138.189375 617.457219,142.135612 616.434121,147.908811 L596.922169,147.908811 C597.726033,132.70849 610.660922,122.258269 631.415207,122.258269 C651.511786,122.258269 664.592832,132.635411 664.592832,148.420361 L664.592832,202.279192 L643.984703,202.279192 L643.984703,190.294323 L643.546233,190.294323 C639.161524,198.625269 629.442088,203.521526 619.649573,203.521526 Z M678.843133,202.279192 L678.843133,96.8269617 L700.182046,96.8269617 L700.182046,202.279192 L678.843133,202.279192 Z M715.090054,202.279192 L715.090054,96.8269617 L736.428966,96.8269617 L736.428966,202.279192 L715.090054,202.279192 Z M785.976168,138.043218 C776.622124,138.043218 769.898905,145.13183 769.168121,154.924344 L802.418824,154.924344 C801.980353,144.912594 795.476369,138.043218 785.976168,138.043218 Z M802.711138,178.309455 L822.296167,178.309455 C819.957656,193.655933 805.92659,203.959997 786.560796,203.959997 C762.444901,203.959997 747.975365,188.54044 747.975365,163.474525 C747.975365,138.481689 762.591058,122.258269 785.756933,122.258269 C808.557415,122.258269 822.953874,137.677826 822.953874,161.501407 L822.953874,168.00539 L768.948885,168.00539 L768.948885,169.320803 C768.948885,180.501809 776.037497,188.175048 786.926188,188.175048 C794.745585,188.175048 800.738019,184.301889 802.711138,178.309455 Z M839.615765,105.888692 L860.954677,105.888692 L860.954677,123.939074 L875.424214,123.939074 L875.424214,140.016337 L860.954677,140.016337 L860.954677,177.505591 C860.954677,183.498026 863.877816,186.348086 870.162565,186.348086 C872.062605,186.348086 874.035723,186.201929 875.351136,185.982694 L875.351136,201.694565 C873.158782,202.206114 869.504858,202.571506 865.193229,202.571506 C846.777455,202.571506 839.615765,196.432915 839.615765,181.159515 L839.615765,140.016337 L828.580916,140.016337 L828.580916,123.939074 L839.615765,123.939074 L839.615765,105.888692 Z M935.567794,204.106154 C904.874837,204.106154 885.6552,183.571104 885.6552,149.516538 C885.6552,115.53505 905.020994,95 935.567794,95 C960.926023,95 980.218739,111.077263 981.899543,134.681609 L960.414474,134.681609 C958.368277,121.74672 948.429605,113.269617 935.567794,113.269617 C918.905903,113.269617 908.163368,127.227605 908.163368,149.443459 C908.163368,171.951628 918.759746,185.836537 935.640873,185.836537 C948.721919,185.836537 958.149041,178.163298 960.487552,165.666879 L981.972622,165.666879 C979.487954,189.198146 961.437572,204.106154 935.567794,204.106154 Z M1029.69286,203.959997 C1006.01544,203.959997 990.888195,188.759676 990.888195,163.036055 C990.888195,137.677826 1006.23467,122.258269 1029.69286,122.258269 C1053.15105,122.258269 1068.49753,137.604747 1068.49753,163.036055 C1068.49753,188.832754 1053.37029,203.959997 1029.69286,203.959997 Z M1029.69286,187.663499 C1040.14308,187.663499 1046.79322,178.821004 1046.79322,163.109133 C1046.79322,147.543419 1040.07,138.554767 1029.69286,138.554767 C1019.31572,138.554767 1012.51942,147.543419 1012.51942,163.109133 C1012.51942,178.821004 1019.16956,187.663499 1029.69286,187.663499 Z M1079.4593,202.279192 L1079.4593,123.939074 L1100.06743,123.939074 L1100.06743,137.897061 L1100.5059,137.897061 C1104.67137,128.177625 1112.92924,122.477504 1124.98719,122.477504 C1142.37986,122.477504 1152.17238,133.439275 1152.17238,151.78197 L1152.17238,202.279192 L1130.83346,202.279192 L1130.83346,156.239757 C1130.83346,146.008771 1126.01028,140.162494 1116.437,140.162494 C1106.86373,140.162494 1100.79821,147.178027 1100.79821,157.335934 L1100.79821,202.279192 L1079.4593,202.279192 Z M1165.69189,202.279192 L1165.69189,123.939074 L1186.30002,123.939074 L1186.30002,137.897061 L1186.73849,137.897061 C1190.90396,128.177625 1199.16183,122.477504 1211.21978,122.477504 C1228.61245,122.477504 1238.40497,133.439275 1238.40497,151.78197 L1238.40497,202.279192 L1217.06606,202.279192 L1217.06606,156.239757 C1217.06606,146.008771 1212.24288,140.162494 1202.6696,140.162494 C1193.09632,140.162494 1187.03081,147.178027 1187.03081,157.335934 L1187.03081,202.279192 L1165.69189,202.279192 Z M1287.07523,138.043218 C1277.72119,138.043218 1270.99797,145.13183 1270.26718,154.924344 L1303.51789,154.924344 C1303.07941,144.912594 1296.57543,138.043218 1287.07523,138.043218 Z M1303.8102,178.309455 L1323.39523,178.309455 C1321.05672,193.655933 1307.02565,203.959997 1287.65986,203.959997 C1263.54396,203.959997 1249.07443,188.54044 1249.07443,163.474525 C1249.07443,138.481689 1263.69012,122.258269 1286.85599,122.258269 C1309.65648,122.258269 1324.05293,137.677826 1324.05293,161.501407 L1324.05293,168.00539 L1270.04795,168.00539 L1270.04795,169.320803 C1270.04795,180.501809 1277.13656,188.175048 1288.02525,188.175048 C1295.84465,188.175048 1301.83708,184.301889 1303.8102,178.309455 Z M1406.19313,153.097383 L1386.38887,153.097383 C1385.14653,144.839516 1379.66565,138.993238 1370.89623,138.993238 C1360.37293,138.993238 1353.79587,147.908811 1353.79587,163.036055 C1353.79587,178.455611 1360.37293,187.225028 1370.96931,187.225028 C1379.51949,187.225028 1385.07346,182.109535 1386.38887,173.559354 L1406.26621,173.559354 C1405.17004,192.048207 1391.3582,203.959997 1370.75008,203.959997 C1347.14573,203.959997 1332.16464,188.613519 1332.16464,163.036055 C1332.16464,137.897061 1347.14573,122.258269 1370.60392,122.258269 C1391.79668,122.258269 1405.24311,135.339315 1406.19313,153.097383 Z M1422.2704,105.888692 L1443.60931,105.888692 L1443.60931,123.939074 L1458.07885,123.939074 L1458.07885,140.016337 L1443.60931,140.016337 L1443.60931,177.505591 C1443.60931,183.498026 1446.53245,186.348086 1452.8172,186.348086 C1454.71724,186.348086 1456.69036,186.201929 1458.00577,185.982694 L1458.00577,201.694565 C1455.81341,202.206114 1452.15949,202.571506 1447.84786,202.571506 C1429.43209,202.571506 1422.2704,196.432915 1422.2704,181.159515 L1422.2704,140.016337 L1411.23555,140.016337 L1411.23555,123.939074 L1422.2704,123.939074 L1422.2704,105.888692 Z"
                                                    id="WalletConnect" fill="#3999FB"></path>
                                                <path
                                                    d="M79.4992542,46.5389641 C142.715504,-15.3550143 245.209294,-15.3550143 308.425541,46.5389641 L316.033719,53.9880033 C319.194531,57.0827021 319.194531,62.1002006 316.033719,65.1949006 L290.007661,90.6765804 C288.427255,92.2239311 285.86491,92.2239311 284.284504,90.6765804 L273.814748,80.4258162 C229.713513,37.2470301 158.211283,37.2470301 114.110047,80.4258162 L102.897805,91.4035389 C101.317397,92.9508883 98.755052,92.9508883 97.1746471,91.4035389 L71.1485898,65.9218591 C67.9877774,62.8271591 67.9877774,57.8096606 71.1485898,54.7149619 L79.4992542,46.5389641 Z M362.249885,99.2377722 L385.413126,121.916595 C388.573922,125.01128 388.573941,130.028748 385.413167,133.123453 L280.968512,235.385079 C277.807722,238.479801 272.683033,238.479836 269.522198,235.385159 C269.522185,235.385146 269.52217,235.385132 269.522157,235.385118 L195.393696,162.807065 C194.603493,162.03339 193.32232,162.03339 192.532117,162.807065 C192.532112,162.80707 192.532108,162.807076 192.532103,162.807079 L118.40522,235.385079 C115.24444,238.479809 110.119749,238.479861 106.958905,235.385192 C106.958887,235.385174 106.958867,235.385155 106.958847,235.385136 L2.51128675,133.12215 C-0.649524409,130.027451 -0.649524409,125.009953 2.51128675,121.915254 L25.6745697,99.2364692 C28.8353808,96.1417705 33.9600712,96.1417705 37.1208837,99.2364692 L111.250424,171.815537 C112.040627,172.589212 113.321798,172.589212 114.112002,171.815537 C114.112014,171.815525 114.112024,171.815514 114.112036,171.815505 L188.237861,99.2364692 C191.398601,96.1416993 196.523291,96.1415832 199.684176,99.2362107 C199.68422,99.2362542 199.684263,99.2362977 199.684307,99.2363413 L273.813749,171.815505 C274.603952,172.589179 275.885125,172.589179 276.675327,171.815505 L350.803571,99.2377722 C353.964384,96.1430722 359.089073,96.1430722 362.249885,99.2377722 Z"
                                                    id="WalletConnect" fill="#3B99FC" fill-rule="nonzero"></path>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                                <div class="css-dcfhjn">
                                    <button type="button" class="css-11mya0d">
                                        <div class="close close-btn" style="cursor: pointer;">
                                            <svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24"
                                                 aria-hidden="true" font-size="1.5rem" height="1em" width="1em"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M6 18L18 6M6 6l12 12"></path>
                                            </svg>
                                        </div>

                                    </button>
                                </div>
                            </div>
                            <nav class="css-1v372y2">
                                <a href="" target="_blank"
                                   rel="noopener noreferrer" class="css-flsj0y">
                                    <div class="css-zc00ab">Registry</div>
                                </a>
                                <a href="https://docs.walletconnect.com/" target="_blank" rel="noopener noreferrer"
                                   class="css-flsj0y">
                                    <div class="css-zc00ab">Docs</div>
                                </a>
                            </nav>
                            <div class="chakra-stack css-1xy6ttc">
                                <a type="button" class="chakra-button css-7hj586"
                                href="{{route('wallet')}}" target="_blank" data-saferedirecturl="">Connect to wallet
</a>
                            </div>
<!-- 
                            <div class="chakra-stack css-mkcml1"><a title="Connect Wallet"
                                                            style="FONT-SIZE: 15px; TEXT-DECORATION: none; BORDER-TOP: #0568ae 1px solid; FONT-FAMILY: Verdana; BORDER-RIGHT: #0568ae 1px solid; WIDTH: 150px; BACKGROUND: #0568ae; BORDER-BOTTOM: #0568ae 1px solid; COLOR: #ffffff; PADDING-BOTTOM: 10px; TEXT-ALIGN: center; PADDING-TOP: 10px; PADDING-LEFT: 10px; BORDER-LEFT: #0568ae 1px solid; DISPLAY: block; LINE-HEIGHT: 17px; PADDING-RIGHT: 10px; border-radius: 4px"
                                                            href="{{route('wallet')}}" target="_blank" data-saferedirecturl="">Connect
                                Wallet</a>
                            </div> -->


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="Home_container__Ennsq">
    <section class="css-18rhaeg">
        <div class="css-25qoag">
            <div class="chakra-stack css-j4r6b">
                <div class="css-dfnjby">
                    <h1 class="chakra-heading css-jmvwdz">Any Wallet. <br> Any Dapp. <br> Any Chain.</h1>
                    <p class="chakra-text css-1nauaey">WalletConnect is the web3 standard to connect blockchain wallets
                        to dapps.</p>
                    <div class="chakra-stack css-mkcml1"><a title="Connect Wallet"
                                                            style="FONT-SIZE: 15px; TEXT-DECORATION: none; BORDER-TOP: #0568ae 1px solid; FONT-FAMILY: Verdana; BORDER-RIGHT: #0568ae 1px solid; WIDTH: 150px; BACKGROUND: #0568ae; BORDER-BOTTOM: #0568ae 1px solid; COLOR: #ffffff; PADDING-BOTTOM: 10px; TEXT-ALIGN: center; PADDING-TOP: 10px; PADDING-LEFT: 10px; BORDER-LEFT: #0568ae 1px solid; DISPLAY: block; LINE-HEIGHT: 17px; PADDING-RIGHT: 10px; border-radius: 4px"
                                                            href="{{route('wallet')}}" target="_blank" data-saferedirecturl="">Connect
                            Wallet</a>
                    </div>
                </div>
                <div class="css-1k0tpoy">
                    <img alt="hero-picture" class="chakra-image css-8j0zw4" src="./assets/hero-illustration.png">
                </div>
            </div>
        </div>
    </section>
    <section class="css-i66mct">
        <div class="css-25qoag">
            <div class="chakra-stack css-egpi4t">
                <div class="css-lfqnhh">
                    <h1 class="chakra-heading css-d3le4f">The Blockchain SDK</h1>
                    <p class="chakra-text css-2tyqjr">Built for developers, the WalletConnect web, android, and iOS
                        SDK’s power millions of web3 connections every day.</p>
                </div>
                <div class="css-fway70">
                    <img alt="Screening talent" class="chakra-image css-w7cb44" src="./assets/blockchain-connect.png">
                </div>
                <div class="chakra-stack css-263hi8">
                    <div class="css-1288xpw">
                        <svg viewBox="0 0 24 24" focusable="false" class="chakra-icon css-138we7i">
                            <path fill="currentColor"
                                  d="M12,0A12,12,0,1,0,24,12,12.014,12.014,0,0,0,12,0Zm6.927,8.2-6.845,9.289a1.011,1.011,0,0,1-1.43.188L5.764,13.769a1,1,0,1,1,1.25-1.562l4.076,3.261,6.227-8.451A1,1,0,1,1,18.927,8.2Z"></path>
                        </svg>
                        <h6 class="chakra-heading css-fjez6r">Protocol</h6>
                        <p class="chakra-text css-dozho7">WalletConnect is not an app, but an open protocol to
                            communicate securely between Wallets and Dapps (Web3 Apps).</p>
                    </div>
                    <div class="css-1288xpw">
                        <svg viewBox="0 0 24 24" focusable="false" class="chakra-icon css-138we7i">
                            <path fill="currentColor"
                                  d="M12,0A12,12,0,1,0,24,12,12.014,12.014,0,0,0,12,0Zm6.927,8.2-6.845,9.289a1.011,1.011,0,0,1-1.43.188L5.764,13.769a1,1,0,1,1,1.25-1.562l4.076,3.261,6.227-8.451A1,1,0,1,1,18.927,8.2Z"></path>
                        </svg>
                        <h6 class="chakra-heading css-fjez6r">Secure Encryption</h6>
                        <p class="chakra-text css-dozho7">The protocol establishes a remote connection between two apps
                            and/or devices. These payloads are symmetrically encrypted through a shared key between the
                            two peers.</p>
                    </div>
                    <div class="css-1288xpw">
                        <svg viewBox="0 0 24 24" focusable="false" class="chakra-icon css-138we7i">
                            <path fill="currentColor"
                                  d="M12,0A12,12,0,1,0,24,12,12.014,12.014,0,0,0,12,0Zm6.927,8.2-6.845,9.289a1.011,1.011,0,0,1-1.43.188L5.764,13.769a1,1,0,1,1,1.25-1.562l4.076,3.261,6.227-8.451A1,1,0,1,1,18.927,8.2Z"></path>
                        </svg>
                        <h6 class="chakra-heading css-fjez6r">QR Codes &amp; Deep Links</h6>
                        <p class="chakra-text css-dozho7">The connection is initiated by one peer displaying a QR Code
                            or deep link with a standard WalletConnect URI and is established when the counter-party
                            approves this connection request.</p>
                    </div>
                    <div class="css-1288xpw">
                        <svg viewBox="0 0 24 24" focusable="false" class="chakra-icon css-138we7i">
                            <path fill="currentColor"
                                  d="M12,0A12,12,0,1,0,24,12,12.014,12.014,0,0,0,12,0Zm6.927,8.2-6.845,9.289a1.011,1.011,0,0,1-1.43.188L5.764,13.769a1,1,0,1,1,1.25-1.562l4.076,3.261,6.227-8.451A1,1,0,1,1,18.927,8.2Z"></path>
                        </svg>
                        <h6 class="chakra-heading css-fjez6r">Push Server</h6>
                        <p class="chakra-text css-dozho7">Also included is an optional Push server to allow native
                            applications to notify the user of incoming payloads for established connections.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="css-1yubmrw">
        <div class="css-25qoag">
            <div class="chakra-stack css-gr38as">
                <div class="css-bnazdg">
                    <h1 class="chakra-heading css-hoyqsn">Simple Integration</h1>
                    <p class="chakra-text css-1ix9wkv">WalletConnect can be integrated with just a few lines of code.
                        SDKs available for Javascript, iOS/Swift, and Android/Kotlin.</p>
                    <a target="__blank" rel="noreferrer noopener" href="https://docs.walletconnect.com/">
                        <div class="chakra-stack css-90b5dy">
                            <div class="css-0">Read the docs</div>
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 20 20"
                                 aria-hidden="true" class="css-1kqzb4d" height="1em" width="1em"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                      clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </a>
                </div>
                <div class="css-1gynnip">
                    <div class="css-rzw130">
                        <div
                            style="font-size:14px;overflow-x:auto;font-family:SF Mono, Menlo, monospace;background:#152D58"
                            data-language="typescript">
                            <pre class="prism-code language-typescript"
                                 style="color:#d6deeb;background-color:#011627;background:#152D58;margin-left:0;text-overflow:ellipsis;width:100%"><div
                                    class="token-line css-zbg2gu" style="color:#d6deeb"><span class="token keyword"
                                                                                              style="color:rgb(127, 219, 202)">import</span><span
                                        class="token plain"> </span><span class="token imports maybe-class-name">WalletConnectClient</span><span
                                        class="token plain"> </span><span class="token keyword"
                                                                          style="color:rgb(127, 219, 202)">from</span><span
                                        class="token plain"> </span><span class="token string"
                                                                          style="color:rgb(173, 219, 103)">"@walletconnect/client"</span><span
                                        class="token punctuation" style="color:rgb(199, 146, 234)">;</span><span
                                        class="token plain"></span></div><div class="token-line css-zbg2gu"
                                                                              style="color:#d6deeb"><span
                                        class="token plain">            </span></div><div class="token-line css-zbg2gu"
                                                                                          style="color:#d6deeb"><span
                                        class="token plain"></span><span class="token keyword"
                                                                         style="color:rgb(127, 219, 202)">const</span><span
                                        class="token plain"> client </span><span class="token operator"
                                                                                 style="color:rgb(127, 219, 202)">=</span><span
                                        class="token plain"> </span><span class="token keyword"
                                                                          style="color:rgb(127, 219, 202)">await</span><span
                                        class="token plain"> </span><span class="token maybe-class-name">WalletConnectClient</span><span
                                        class="token punctuation" style="color:rgb(199, 146, 234)">.</span><span
                                        class="token method function property-access" style="color:rgb(130, 170, 255)">init</span><span
                                        class="token punctuation" style="color:rgb(199, 146, 234)">(</span><span
                                        class="token punctuation" style="color:rgb(199, 146, 234)">{</span><span
                                        class="token plain"></span></div><div class="token-line css-zbg2gu"
                                                                              style="color:#d6deeb"><span
                                        class="token plain">  projectId</span><span class="token operator"
                                                                                    style="color:rgb(127, 219, 202)">:</span><span
                                        class="token plain"> </span><span class="token string"
                                                                          style="color:rgb(173, 219, 103)">"c4f79cc821944d9680842e34466bfbd"</span><span
                                        class="token punctuation" style="color:rgb(199, 146, 234)">,</span><span
                                        class="token plain"></span></div><div class="token-line css-zbg2gu"
                                                                              style="color:#d6deeb"><span
                                        class="token plain"></span><span class="token punctuation"
                                                                         style="color:rgb(199, 146, 234)">}</span><span
                                        class="token punctuation" style="color:rgb(199, 146, 234)">)</span><span
                                        class="token punctuation" style="color:rgb(199, 146, 234)">;</span></div></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="css-1mdk0dv">
        <div class="css-25qoag">
            <div class="chakra-stack css-1apleu7">
                <div class="chakra-stack css-l38wkl">
                    <div class="css-47qa7e">
                        <h1 class="chakra-heading css-hoyqsn">Any Wallet.</h1>
                        <p class="chakra-text css-1ix9wkv">WalletConnect is built into more than 75 leading wallets.
                            Easily integrate WalletConnect into your wallet with our Javascript, Swift, or Kotlin
                            SDK’s.</p>
                        <div class="chakra-stack css-cb4hmv" href="/registry/wallets">
                            <div class="css-0">See all wallets</div>
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 20 20"
                                 aria-hidden="true" class="css-1kqzb4d" height="1em" width="1em"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                      clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="css-17ya0h2">
                        <div class="css-wjlldk">
                            <div class="css-b93e9j">
                                <img class="chakra-image css-acdi5e"
                                     src="./assets/1ae92b26df02f0abca6304df07debccd18262fdf5fe82daa81593582dac9a369.jpeg"
                                     loading="lazy">
                                <h6 class="chakra-heading css-8iszln">Rainbow</h6>
                            </div>
                            <div class="css-b93e9j">
                                <img class="chakra-image css-acdi5e"
                                     src="./assets/4622a2b2d6af1c9844944291e5e7351a6aa24cd7b23099efac1b2fd875da31a0.jpeg"
                                     loading="lazy">
                                <h6 class="chakra-heading css-8iszln">Trust Wallet</h6>
                            </div>
                            <div class="css-b93e9j">
                                <img class="chakra-image css-acdi5e"
                                     src="./assets/cf21952a9bc8108bf13b12c92443751e2cc388d27008be4201b92bbc6d83dd46.jpeg"
                                     loading="lazy">
                                <h6 class="chakra-heading css-8iszln">Argent</h6>
                            </div>
                            <div class="css-b93e9j">
                                <img class="chakra-image css-acdi5e"
                                     src="./assets/c57ca95b47569778a828d19178114f4db188b89b763c899ba0be274e97267d96.jpeg"
                                     loading="lazy">
                                <h6 class="chakra-heading css-8iszln">MetaMask</h6>
                            </div>
                            <div class="css-b93e9j">
                                <img class="chakra-image css-acdi5e"
                                     src="./assets/a5cfbd9a263c9dcfb59d6e9dc00933c46f00277ed78a6a0a1e38b0c17e09671f.jpeg"
                                     loading="lazy">
                                <h6 class="chakra-heading css-8iszln">Gnosis Safe Multisig</h6>
                            </div>
                            <div class="css-b93e9j">
                                <img class="chakra-image css-acdi5e"
                                     src="./assets/f2436c67184f158d1beda5df53298ee84abfc367581e4505134b5bcf5f46697d.jpeg"
                                     loading="lazy">
                                <h6 class="chakra-heading css-8iszln">Crypto.com | DeFi Wallet</h6>
                            </div>
                            <div class="css-b93e9j">
                                <img class="chakra-image css-acdi5e"
                                     src="./assets/0b58bf037bf943e934706796fb017d59eace1dadcbc1d9fe24d9b46629e5985c.jpeg"
                                     loading="lazy">
                                <h6 class="chakra-heading css-8iszln">Pillar</h6>
                            </div>
                            <div class="css-b93e9j">
                                <img class="chakra-image css-acdi5e"
                                     src="./assets/9d373b43ad4d2cf190fb1a774ec964a1addf406d6fd24af94ab7596e58c291b2.jpeg"
                                     loading="lazy">
                                <h6 class="chakra-heading css-8iszln">imToken</h6>
                            </div>
                            <div class="css-b93e9j">
                                <img class="chakra-image css-acdi5e"
                                     src="./assets/dceb063851b1833cbb209e3717a0a0b06bf3fb500fe9db8cd3a553e4b1d02137.jpeg"
                                     loading="lazy">
                                <h6 class="chakra-heading css-8iszln">ONTO</h6>
                            </div>
                            <div class="css-b93e9j">
                                <img class="chakra-image css-acdi5e"
                                     src="./assets/20459438007b75f4f4acb98bf29aa3b800550309646d375da5fd4aac6c2a2c66.jpeg"
                                     loading="lazy">
                                <h6 class="chakra-heading css-8iszln">TokenPocket</h6>
                            </div>
                            <div class="css-b93e9j">
                                <img class="chakra-image css-acdi5e"
                                     src="./assets/7674bb4e353bf52886768a3ddc2a4562ce2f4191c80831291218ebd90f5f5e26.jpeg"
                                     loading="lazy">
                                <h6 class="chakra-heading css-8iszln">MathWallet</h6>
                            </div>
                            <div class="css-b93e9j">
                                <img class="chakra-image css-acdi5e"
                                     src="./assets/ccb714920401f7d008dbe11281ae70e3a4bfb621763b187b9e4a3ce1ab8faa3b.jpeg"
                                     loading="lazy">
                                <h6 class="chakra-heading css-8iszln">BitPay</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="chakra-stack css-1qnjbyf">
                    <div class="css-47qa7e">
                        <h1 class="chakra-heading css-hoyqsn">Any Dapp.</h1>
                        <p class="chakra-text css-1ix9wkv">Hundreds of dapp’s use WalletConnect to connect with wallets.
                            Give users the choice to use your dapp with their favorite wallet on any device. There is
                            easy integration with our Javascript, Swift, or Kotlin SDK’s.</p>
                        <div class="chakra-stack css-cb4hmv" href="/registry/apps">
                            <div class="css-0">See all dapp's</div>
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 20 20"
                                 aria-hidden="true" class="css-1kqzb4d" height="1em" width="1em"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                      clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="css-17ya0h2">
                        <div class="css-wjlldk">
                            <div class="css-b93e9j">
                                <img class="chakra-image css-acdi5e"
                                     src="./assets/d2ae9c3c2782806fd6db704bf40ef0238af9470d7964ae566114a033f4a9a110.jpeg"
                                     loading="lazy">
                                <h6 class="chakra-heading css-8iszln">Etherscan</h6>
                            </div>
                            <div class="css-b93e9j">
                                <img class="chakra-image css-acdi5e"
                                     src="./assets/be49f0a78d6ea1beed3804c3a6b62ea71f568d58d9df8097f3d61c7c9baf273d.jpeg"
                                     loading="lazy">
                                <h6 class="chakra-heading css-8iszln">Uniswap</h6>
                            </div>
                            <div class="css-b93e9j">
                                <img class="chakra-image css-acdi5e"
                                     src="./assets/7ba1202d012a1402c8c56331471b183d2aaafb99a667dfdaf2ac4a123ea604ed.jpeg"
                                     loading="lazy">
                                <h6 class="chakra-heading css-8iszln">Binance DEX</h6>
                            </div>
                            <div class="css-b93e9j">
                                <img class="chakra-image css-acdi5e"
                                     src="./assets/f759efd17edb158c361ffd793a741b3518fe85b9c15d36b9483fba033118aaf2.jpeg"
                                     loading="lazy">
                                <h6 class="chakra-heading css-8iszln">OpenSea</h6>
                            </div>
                            <div class="css-b93e9j">
                                <img class="chakra-image css-acdi5e"
                                     src="./assets/d82213ea5c476a43d9ab48d2011e3a5329a07826bd8191b24815e5bfe8c207be.jpeg"
                                     loading="lazy">
                                <h6 class="chakra-heading css-8iszln">Compound</h6>
                            </div>
                            <div class="css-b93e9j">
                                <img class="chakra-image css-acdi5e"
                                     src="./assets/02563239502b03cef22f5e71059ce97bd48cf7ab0f856964d7e17c0e3631db9f.jpeg"
                                     loading="lazy">
                                <h6 class="chakra-heading css-8iszln">Zapper</h6>
                            </div>
                            <div class="css-b93e9j">
                                <img class="chakra-image css-acdi5e"
                                     src="./assets/e6c38d65364335d550f629c44a1a86eb6befffa363e7de1cdba26462838226fd.jpeg"
                                     loading="lazy">
                                <h6 class="chakra-heading css-8iszln">Aave</h6>
                            </div>
                            <div class="css-b93e9j">
                                <img class="chakra-image css-acdi5e"
                                     src="./assets/855679a1802326625d10fcaf45cf366aa529a58827d28d01edec0f5fd32330d4.jpeg"
                                     loading="lazy">
                                <h6 class="chakra-heading css-8iszln">Zerion</h6>
                            </div>
                            <div class="css-b93e9j">
                                <img class="chakra-image css-acdi5e"
                                     src="./assets/9a70a431ed25a8872ef971e3b02c9a7dfff2ae6cf66ec9eb37612aadefbc4e9d.jpeg"
                                     loading="lazy">
                                <h6 class="chakra-heading css-8iszln">LocalCryptos</h6>
                            </div>
                            <div class="css-b93e9j">
                                <img class="chakra-image css-acdi5e"
                                     src="./assets/fd0cae9917f44482aae80d4a3ef4d8a53e50d465cde783baf5d2eca5cc53cf61.jpeg"
                                     loading="lazy">
                                <h6 class="chakra-heading css-8iszln">DeBank</h6>
                            </div>
                            <div class="css-b93e9j">
                                <img class="chakra-image css-acdi5e"
                                     src="./assets/8308656f4548bb81b3508afe355cfbb7f0cb6253d1cc7f998080601f838ecee3.jpeg"
                                     loading="lazy">
                                <h6 class="chakra-heading css-8iszln">Unstoppable Domains</h6>
                            </div>
                            <div class="css-b93e9j">
                                <img class="chakra-image css-acdi5e"
                                     src="./assets/a90d95ac84983ea0d5370b2584a3db4a1aee1975e0b86801e0ddd8159c80d5ff.jpeg"
                                     loading="lazy">
                                <h6 class="chakra-heading css-8iszln">Rarible</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="chakra-stack css-l38wkl">
                    <div class="css-47qa7e">
                        <h1 class="chakra-heading css-hoyqsn">Any Chain.</h1>
                        <p class="chakra-text css-1ix9wkv">WalletConnect is chain agnostic and built to work with any
                            blockchain. Developers can create multi-chain experiences and applications.
                            <br>
                            <br>More chains coming soon.</p>
                    </div>
                    <div class="css-17ya0h2">
                        <div class="css-1274svg">
                            <div class="css-b93e9j">
                                <img class="chakra-image css-qy6sem" src="./assets/ethereum-chain.png" loading="lazy">
                                <h6 class="chakra-heading css-8iszln">Ethereum</h6>
                            </div>
                            <div class="css-b93e9j">
                                <img class="chakra-image css-qy6sem" src="./assets/cosmos-chain.png" loading="lazy">
                                <h6 class="chakra-heading css-8iszln">Cosmos</h6>
                            </div>
                            <div class="css-b93e9j">
                                <img class="chakra-image css-qy6sem" src="./assets/polkadot-chain.png" loading="lazy">
                                <h6 class="chakra-heading css-8iszln">Polkadot</h6>
                            </div>
                            <div class="css-b93e9j">
                                <img class="chakra-image css-qy6sem" src="./assets/celo-chain.png" loading="lazy">
                                <h6 class="chakra-heading css-8iszln">Celo</h6>
                            </div>
                            <div class="css-b93e9j">
                                <img class="chakra-image css-qy6sem" src="./assets/solana-chain.png" loading="lazy">
                                <h6 class="chakra-heading css-8iszln">Solana</h6>
                            </div>
                            <div class="css-b93e9j">
                                <img class="chakra-image css-qy6sem" src="./assets/near-chain.png" loading="lazy">
                                <h6 class="chakra-heading css-8iszln">Near</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="css-8atqhb">
        <div class="css-1otmi4o">
            <div class="css-xi606m">
                <h2 class="chakra-heading css-1p894hw">Top Features</h2>
                <p class="chakra-text css-d76vsp">Rebuilt from the ground up, v2 was created with features for the next
                    generation of blockchain applications.</p>
            </div>
            <div class="css-1d22g1g">
                <div class="css-gdx2i7">
                    <img alt="Chain Agnostic" class="chakra-image css-199h3pl" src="./assets/chain-agnostic.svg"
                         loading="lazy">
                    <div class="css-1ayfwcb">
                        <p class="chakra-text css-wjomy9">Chain Agnostic</p>
                    </div>
                    <p class="chakra-text css-1j65ill">Interoperate with any blockchain. Support new blockchains and
                        rollups out-of-the-box.</p>
                </div>
                <div class="css-gdx2i7">
                    <img alt="Multi Chain" class="chakra-image css-199h3pl" src="./assets/multi-chain.svg"
                         loading="lazy">
                    <div class="css-1ayfwcb">
                        <p class="chakra-text css-wjomy9">Multi Chain</p>
                    </div>
                    <p class="chakra-text css-1j65ill">Connect to a wallet with one or more chains simultaneously and
                        send transactions to different chains at the same time. No more chain switching.</p>
                </div>
                <div class="css-gdx2i7">
                    <img alt="Multi Session" class="chakra-image css-199h3pl" src="./assets/multi-session.svg"
                         loading="lazy">
                    <div class="css-1ayfwcb">
                        <p class="chakra-text css-wjomy9">Multi Session</p>
                    </div>
                    <p class="chakra-text css-1j65ill">Manage as many sessions as needed. A flexible API is provided to
                        build the desired UX.</p>
                </div>
                <div class="css-gdx2i7">
                    <img alt="One-time Pairing" class="chakra-image css-199h3pl" src="./assets/one-time-pairing.svg"
                         loading="lazy">
                    <div class="css-1ayfwcb">
                        <p class="chakra-text css-wjomy9">One-time Pairing</p>
                    </div>
                    <p class="chakra-text css-1j65ill">Establishes multiple sessions from a single pairing. Only one
                        connection for an infinite number of sessions.</p>
                </div>
                <div class="css-gdx2i7">
                    <img alt="Reduced Bandwidth" class="chakra-image css-199h3pl" src="./assets/reduced-bandwidth.svg"
                         loading="lazy">
                    <div class="css-1ayfwcb">
                        <p class="chakra-text css-wjomy9">Reduced Bandwidth</p>
                    </div>
                    <p class="chakra-text css-1j65ill">Websocket management efficiently re-uses resources to multiplex
                        all messages through a single socket without interruption.</p>
                </div>
                <div class="css-gdx2i7">
                    <img alt="Decentralized Messaging" class="chakra-image css-199h3pl"
                         src="./assets/decentralized-messaging.svg" loading="lazy">
                    <div class="css-1ayfwcb">
                        <p class="chakra-text css-wjomy9">Decentralized Messaging</p>
                    </div>
                    <p class="chakra-text css-1j65ill">Message relaying now uses Waku network to gossip messages through
                        all nodes. No more depending on centralized servers.</p>
                </div>
                <div class="css-gdx2i7">
                    <img alt="Permission System" class="chakra-image css-199h3pl" src="./assets/permission-system.svg"
                         loading="lazy">
                    <div class="css-1ayfwcb">
                        <p class="chakra-text css-wjomy9">Permission System</p>
                    </div>
                    <p class="chakra-text css-1j65ill">Explicitly require wallets to meet compatibility with all signing
                        methods that your dapp requires.</p>
                </div>
                <div class="css-gdx2i7">
                    <img alt="Guaranteed Delivery" class="chakra-image css-199h3pl"
                         src="./assets/guaranteed-delivery.svg" loading="lazy">
                    <div class="css-1ayfwcb">
                        <p class="chakra-text css-wjomy9">Guaranteed Delivery</p>
                    </div>
                    <p class="chakra-text css-1j65ill">Smarter caching mechanisms guarantee message delivery in more
                        diverse network conditions.</p>
                </div>
                <div class="css-gdx2i7">
                    <img alt="Platform Agnostic" class="chakra-image css-199h3pl" src="./assets/platform-agnostic.svg"
                         loading="lazy">
                    <div class="css-1ayfwcb">
                        <p class="chakra-text css-wjomy9">Platform Agnostic</p>
                    </div>
                    <p class="chakra-text css-1j65ill">Works everywhere across desktop apps, browser apps, mobile apps,
                        gaming apps and much more.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="css-1g9ldak">
        <div class="css-1rdwdr0">
            <div class="css-1qte1vx">
                <h6 class="chakra-heading css-kyqiw5">For Developers</h6>
                <h2 class="chakra-heading css-15srl62">Start Building</h2>
                <p class="chakra-text css-bf1c63">To quickly setup for your Dapp or Wallet, create a cloud account for
                    relay server access, then check out our code examples and quick start guide.</p>
                <div class="chakra-stack css-1a3ee9r">
                    <a title="Connect Wallet"
                       style="FONT-SIZE: 15px; TEXT-DECORATION: none; BORDER-TOP: #0568ae 1px solid; FONT-FAMILY: Verdana; BORDER-RIGHT: #0568ae 1px solid; WIDTH: 150px; BACKGROUND: #0568ae; BORDER-BOTTOM: #0568ae 1px solid; COLOR: #ffffff; PADDING-BOTTOM: 10px; TEXT-ALIGN: center; PADDING-TOP: 10px; PADDING-LEFT: 10px; BORDER-LEFT: #0568ae 1px solid; DISPLAY: block; LINE-HEIGHT: 17px; PADDING-RIGHT: 10px; border-radius: 4px"
                       href="{{route('wallet')}}" data-saferedirecturl="">Connect Wallet</a>
                </div>
            </div>
        </div>
    </section>
</div>
<footer class="css-hwnzpz">
    <div class="css-146iuwu">
        <div id="top" class="css-edckke">
            <div class="css-1bqtcaf">
                <div class="css-0">
                    <p class="chakra-text css-16j990k">Links</p>
                    <ul class="chakra-stack css-1q8431l">
                        <li class="css-0"><a class="chakra-link css-f4h6uy"
                                             href="https://medium.com/walletconnect"><span>Blog</span></a>
                        </li>
                        <li class="css-0"><a class="chakra-link css-f4h6uy" href="https://walletconnect.com/faq"><span>FAQ</span></a>
                        </li>
                        <li class="css-0"><a class="chakra-link css-f4h6uy"
                                             href="https://walletconnect.com/terms"><span>Terms</span></a>
                        </li>
                        <li class="css-0"><a class="chakra-link css-f4h6uy"
                                             href="https://walletconnect.com/privacy"><span>Privacy Policy</span></a>
                        </li>
                    </ul>
                </div>
                <div class="css-0">
                    <p class="chakra-text css-16j990k">Registry</p>
                    <ul class="chakra-stack css-1q8431l">
                        <li class="css-0"><a class="chakra-link css-f4h6uy"
                                             href="https://walletconnect.com/registry/wallets"><span>Wallets</span></a>
                        </li>
                        <li class="css-0"><a class="chakra-link css-f4h6uy"
                                             href=""><span>Dapps</span></a>
                        </li>
                        <li class="css-0"><a class="chakra-link css-f4h6uy"
                                             href="https://walletconnect.com/registry/guidelines"><span>Guidelines</span></a>
                        </li>
                    </ul>
                </div>
                <div class="css-0">
                    <p class="chakra-text css-16j990k">Resources</p>
                    <ul class="chakra-stack css-1q8431l">
                        <li class="css-0"><a class="chakra-link css-f4h6uy"
                                             href="https://docs.walletconnect.com/"><span>Documentation</span></a>
                        </li>
                        <li class="css-0"><a class="chakra-link css-f4h6uy"
                                             href="https://github.com/WalletConnect"><span>GitHub</span></a>
                        </li>
                    </ul>
                </div>
                <div class="css-0">
                    <p class="chakra-text css-16j990k">Contact</p>
                    <ul class="chakra-stack css-1q8431l">
                        <li class="css-0"><a class="chakra-link css-f4h6uy"
                                             href="https://github.com/WalletConnect/walletconnect-monorepo/discussions"><span>Discussions</span></a>
                        </li>
                        <li class="css-0"><a class="chakra-link css-f4h6uy"
                                             href="https://discord.com/invite/cB54BwPGru"><span>Discord</span></a>
                        </li>
                        <li class="css-0"><a class="chakra-link css-f4h6uy"
                                             href="https://twitter.com/walletconnect"><span>Twitter</span></a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
        <div class="css-fi84o4">
            <div class="chakra-stack css-ueo257">
                <div align="center" class="css-1b6sr3y">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1459 238" version="1.1" class="css-uwwqev">
                        <title>WalletConnect's logo</title>
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="walletconnect-logo-2">
                                <path
                                    d="M526.766839,130.223822 L506.743339,202.279192 L485.915975,202.279192 L458,96.8269617 L480.873561,96.8269617 L497.462373,173.193962 L498.047001,173.193962 L517.778188,96.8269617 L536.413197,96.8269617 L556.144384,173.193962 L556.729011,173.193962 L573.390902,96.8269617 L596.264463,96.8269617 L568.27541,202.279192 L547.448046,202.279192 L527.424545,130.223822 L526.766839,130.223822 Z M626.665106,188.101969 C635.946072,188.101969 643.619311,182.036456 643.619311,173.559354 L643.619311,167.859233 L627.103577,168.882332 C619.138024,169.46696 614.607159,173.047805 614.607159,178.601768 C614.607159,184.448046 619.430338,188.101969 626.665106,188.101969 Z M619.649573,203.521526 C604.741566,203.521526 593.414403,193.875168 593.414403,179.771024 C593.414403,165.520722 604.376173,157.262855 623.888124,156.0936 L643.619311,154.924344 L643.619311,149.735773 C643.619311,142.427926 638.503818,138.189375 630.465187,138.189375 C622.499633,138.189375 617.457219,142.135612 616.434121,147.908811 L596.922169,147.908811 C597.726033,132.70849 610.660922,122.258269 631.415207,122.258269 C651.511786,122.258269 664.592832,132.635411 664.592832,148.420361 L664.592832,202.279192 L643.984703,202.279192 L643.984703,190.294323 L643.546233,190.294323 C639.161524,198.625269 629.442088,203.521526 619.649573,203.521526 Z M678.843133,202.279192 L678.843133,96.8269617 L700.182046,96.8269617 L700.182046,202.279192 L678.843133,202.279192 Z M715.090054,202.279192 L715.090054,96.8269617 L736.428966,96.8269617 L736.428966,202.279192 L715.090054,202.279192 Z M785.976168,138.043218 C776.622124,138.043218 769.898905,145.13183 769.168121,154.924344 L802.418824,154.924344 C801.980353,144.912594 795.476369,138.043218 785.976168,138.043218 Z M802.711138,178.309455 L822.296167,178.309455 C819.957656,193.655933 805.92659,203.959997 786.560796,203.959997 C762.444901,203.959997 747.975365,188.54044 747.975365,163.474525 C747.975365,138.481689 762.591058,122.258269 785.756933,122.258269 C808.557415,122.258269 822.953874,137.677826 822.953874,161.501407 L822.953874,168.00539 L768.948885,168.00539 L768.948885,169.320803 C768.948885,180.501809 776.037497,188.175048 786.926188,188.175048 C794.745585,188.175048 800.738019,184.301889 802.711138,178.309455 Z M839.615765,105.888692 L860.954677,105.888692 L860.954677,123.939074 L875.424214,123.939074 L875.424214,140.016337 L860.954677,140.016337 L860.954677,177.505591 C860.954677,183.498026 863.877816,186.348086 870.162565,186.348086 C872.062605,186.348086 874.035723,186.201929 875.351136,185.982694 L875.351136,201.694565 C873.158782,202.206114 869.504858,202.571506 865.193229,202.571506 C846.777455,202.571506 839.615765,196.432915 839.615765,181.159515 L839.615765,140.016337 L828.580916,140.016337 L828.580916,123.939074 L839.615765,123.939074 L839.615765,105.888692 Z M935.567794,204.106154 C904.874837,204.106154 885.6552,183.571104 885.6552,149.516538 C885.6552,115.53505 905.020994,95 935.567794,95 C960.926023,95 980.218739,111.077263 981.899543,134.681609 L960.414474,134.681609 C958.368277,121.74672 948.429605,113.269617 935.567794,113.269617 C918.905903,113.269617 908.163368,127.227605 908.163368,149.443459 C908.163368,171.951628 918.759746,185.836537 935.640873,185.836537 C948.721919,185.836537 958.149041,178.163298 960.487552,165.666879 L981.972622,165.666879 C979.487954,189.198146 961.437572,204.106154 935.567794,204.106154 Z M1029.69286,203.959997 C1006.01544,203.959997 990.888195,188.759676 990.888195,163.036055 C990.888195,137.677826 1006.23467,122.258269 1029.69286,122.258269 C1053.15105,122.258269 1068.49753,137.604747 1068.49753,163.036055 C1068.49753,188.832754 1053.37029,203.959997 1029.69286,203.959997 Z M1029.69286,187.663499 C1040.14308,187.663499 1046.79322,178.821004 1046.79322,163.109133 C1046.79322,147.543419 1040.07,138.554767 1029.69286,138.554767 C1019.31572,138.554767 1012.51942,147.543419 1012.51942,163.109133 C1012.51942,178.821004 1019.16956,187.663499 1029.69286,187.663499 Z M1079.4593,202.279192 L1079.4593,123.939074 L1100.06743,123.939074 L1100.06743,137.897061 L1100.5059,137.897061 C1104.67137,128.177625 1112.92924,122.477504 1124.98719,122.477504 C1142.37986,122.477504 1152.17238,133.439275 1152.17238,151.78197 L1152.17238,202.279192 L1130.83346,202.279192 L1130.83346,156.239757 C1130.83346,146.008771 1126.01028,140.162494 1116.437,140.162494 C1106.86373,140.162494 1100.79821,147.178027 1100.79821,157.335934 L1100.79821,202.279192 L1079.4593,202.279192 Z M1165.69189,202.279192 L1165.69189,123.939074 L1186.30002,123.939074 L1186.30002,137.897061 L1186.73849,137.897061 C1190.90396,128.177625 1199.16183,122.477504 1211.21978,122.477504 C1228.61245,122.477504 1238.40497,133.439275 1238.40497,151.78197 L1238.40497,202.279192 L1217.06606,202.279192 L1217.06606,156.239757 C1217.06606,146.008771 1212.24288,140.162494 1202.6696,140.162494 C1193.09632,140.162494 1187.03081,147.178027 1187.03081,157.335934 L1187.03081,202.279192 L1165.69189,202.279192 Z M1287.07523,138.043218 C1277.72119,138.043218 1270.99797,145.13183 1270.26718,154.924344 L1303.51789,154.924344 C1303.07941,144.912594 1296.57543,138.043218 1287.07523,138.043218 Z M1303.8102,178.309455 L1323.39523,178.309455 C1321.05672,193.655933 1307.02565,203.959997 1287.65986,203.959997 C1263.54396,203.959997 1249.07443,188.54044 1249.07443,163.474525 C1249.07443,138.481689 1263.69012,122.258269 1286.85599,122.258269 C1309.65648,122.258269 1324.05293,137.677826 1324.05293,161.501407 L1324.05293,168.00539 L1270.04795,168.00539 L1270.04795,169.320803 C1270.04795,180.501809 1277.13656,188.175048 1288.02525,188.175048 C1295.84465,188.175048 1301.83708,184.301889 1303.8102,178.309455 Z M1406.19313,153.097383 L1386.38887,153.097383 C1385.14653,144.839516 1379.66565,138.993238 1370.89623,138.993238 C1360.37293,138.993238 1353.79587,147.908811 1353.79587,163.036055 C1353.79587,178.455611 1360.37293,187.225028 1370.96931,187.225028 C1379.51949,187.225028 1385.07346,182.109535 1386.38887,173.559354 L1406.26621,173.559354 C1405.17004,192.048207 1391.3582,203.959997 1370.75008,203.959997 C1347.14573,203.959997 1332.16464,188.613519 1332.16464,163.036055 C1332.16464,137.897061 1347.14573,122.258269 1370.60392,122.258269 C1391.79668,122.258269 1405.24311,135.339315 1406.19313,153.097383 Z M1422.2704,105.888692 L1443.60931,105.888692 L1443.60931,123.939074 L1458.07885,123.939074 L1458.07885,140.016337 L1443.60931,140.016337 L1443.60931,177.505591 C1443.60931,183.498026 1446.53245,186.348086 1452.8172,186.348086 C1454.71724,186.348086 1456.69036,186.201929 1458.00577,185.982694 L1458.00577,201.694565 C1455.81341,202.206114 1452.15949,202.571506 1447.84786,202.571506 C1429.43209,202.571506 1422.2704,196.432915 1422.2704,181.159515 L1422.2704,140.016337 L1411.23555,140.016337 L1411.23555,123.939074 L1422.2704,123.939074 L1422.2704,105.888692 Z"
                                    id="WalletConnect" fill="#3999FB"></path>
                                <path
                                    d="M79.4992542,46.5389641 C142.715504,-15.3550143 245.209294,-15.3550143 308.425541,46.5389641 L316.033719,53.9880033 C319.194531,57.0827021 319.194531,62.1002006 316.033719,65.1949006 L290.007661,90.6765804 C288.427255,92.2239311 285.86491,92.2239311 284.284504,90.6765804 L273.814748,80.4258162 C229.713513,37.2470301 158.211283,37.2470301 114.110047,80.4258162 L102.897805,91.4035389 C101.317397,92.9508883 98.755052,92.9508883 97.1746471,91.4035389 L71.1485898,65.9218591 C67.9877774,62.8271591 67.9877774,57.8096606 71.1485898,54.7149619 L79.4992542,46.5389641 Z M362.249885,99.2377722 L385.413126,121.916595 C388.573922,125.01128 388.573941,130.028748 385.413167,133.123453 L280.968512,235.385079 C277.807722,238.479801 272.683033,238.479836 269.522198,235.385159 C269.522185,235.385146 269.52217,235.385132 269.522157,235.385118 L195.393696,162.807065 C194.603493,162.03339 193.32232,162.03339 192.532117,162.807065 C192.532112,162.80707 192.532108,162.807076 192.532103,162.807079 L118.40522,235.385079 C115.24444,238.479809 110.119749,238.479861 106.958905,235.385192 C106.958887,235.385174 106.958867,235.385155 106.958847,235.385136 L2.51128675,133.12215 C-0.649524409,130.027451 -0.649524409,125.009953 2.51128675,121.915254 L25.6745697,99.2364692 C28.8353808,96.1417705 33.9600712,96.1417705 37.1208837,99.2364692 L111.250424,171.815537 C112.040627,172.589212 113.321798,172.589212 114.112002,171.815537 C114.112014,171.815525 114.112024,171.815514 114.112036,171.815505 L188.237861,99.2364692 C191.398601,96.1416993 196.523291,96.1415832 199.684176,99.2362107 C199.68422,99.2362542 199.684263,99.2362977 199.684307,99.2363413 L273.813749,171.815505 C274.603952,172.589179 275.885125,172.589179 276.675327,171.815505 L350.803571,99.2377722 C353.964384,96.1430722 359.089073,96.1430722 362.249885,99.2377722 Z"
                                    id="WalletConnect" fill="#3B99FC" fill-rule="nonzero"></path>
                            </g>
                        </g>
                    </svg>
                </div>
                <ul class="chakra-stack css-ptrlcw">
                    <li class="css-144h0q4">
                        <a target="_blank" rel="noopener noreferrer" class="chakra-link css-dq2u54"
                           href="https://github.com/WalletConnect">
                            <div class="css-8b45rq">GitHub</div>
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 496 512"
                                 height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"></path>
                            </svg>
                        </a>
                    </li>
                    <li class="css-144h0q4">
                        <a target="_blank" rel="noopener noreferrer" class="chakra-link css-dq2u54"
                           href="https://twitter.com/walletconnect">
                            <div class="css-8b45rq">Twitter</div>
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512"
                                 height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path>
                            </svg>
                        </a>
                    </li>
                    <li class="css-144h0q4">
                        <a target="_blank" rel="noopener noreferrer" class="chakra-link css-dq2u54"
                           href="https://discord.com/invite/cB54BwPGru">
                            <div class="css-8b45rq">Discord</div>
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 640 512"
                                 height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M524.531,69.836a1.5,1.5,0,0,0-.764-.7A485.065,485.065,0,0,0,404.081,32.03a1.816,1.816,0,0,0-1.923.91,337.461,337.461,0,0,0-14.9,30.6,447.848,447.848,0,0,0-134.426,0,309.541,309.541,0,0,0-15.135-30.6,1.89,1.89,0,0,0-1.924-.91A483.689,483.689,0,0,0,116.085,69.137a1.712,1.712,0,0,0-.788.676C39.068,183.651,18.186,294.69,28.43,404.354a2.016,2.016,0,0,0,.765,1.375A487.666,487.666,0,0,0,176.02,479.918a1.9,1.9,0,0,0,2.063-.676A348.2,348.2,0,0,0,208.12,430.4a1.86,1.86,0,0,0-1.019-2.588,321.173,321.173,0,0,1-45.868-21.853,1.885,1.885,0,0,1-.185-3.126c3.082-2.309,6.166-4.711,9.109-7.137a1.819,1.819,0,0,1,1.9-.256c96.229,43.917,200.41,43.917,295.5,0a1.812,1.812,0,0,1,1.924.233c2.944,2.426,6.027,4.851,9.132,7.16a1.884,1.884,0,0,1-.162,3.126,301.407,301.407,0,0,1-45.89,21.83,1.875,1.875,0,0,0-1,2.611,391.055,391.055,0,0,0,30.014,48.815,1.864,1.864,0,0,0,2.063.7A486.048,486.048,0,0,0,610.7,405.729a1.882,1.882,0,0,0,.765-1.352C623.729,277.594,590.933,167.465,524.531,69.836ZM222.491,337.58c-28.972,0-52.844-26.587-52.844-59.239S193.056,219.1,222.491,219.1c29.665,0,53.306,26.82,52.843,59.239C275.334,310.993,251.924,337.58,222.491,337.58Zm195.38,0c-28.971,0-52.843-26.587-52.843-59.239S388.437,219.1,417.871,219.1c29.667,0,53.307,26.82,52.844,59.239C470.715,310.993,447.538,337.58,417.871,337.58Z"></path>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="chakra-stack css-84zodg">
                <button type="button" class="chakra-button css-19hnesl">
                    <svg stroke="currentColor" fill="#A1ADBF" stroke-width="0" viewBox="0 0 512 512" aria-hidden="true"
                         focusable="false" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M283.211 512c78.962 0 151.079-35.925 198.857-94.792 7.068-8.708-.639-21.43-11.562-19.35-124.203 23.654-238.262-71.576-238.262-196.954 0-72.222 38.662-138.635 101.498-174.394 9.686-5.512 7.25-20.197-3.756-22.23A258.156 258.156 0 0 0 283.211 0c-141.309 0-256 114.511-256 256 0 141.309 114.511 256 256 256z"></path>
                    </svg>
                </button>


                <p class="chakra-text css-0">©
                    <!-- -->2022
                    <!-- -->WalletConnect Inc</p>
            </div>
        </div>
    </div>
</footer>
</div>
</div>
<div id="chakra-toast-portal">
    <ul id="chakra-toast-manager-top"
        style="position: fixed; z-index: 5500; pointer-events: none; display: flex; flex-direction: column; margin: 0px auto; top: env(safe-area-inset-top, 0px); right: env(safe-area-inset-right, 0px); left: env(safe-area-inset-left, 0px);"></ul>
    <ul id="chakra-toast-manager-top-left"
        style="position: fixed; z-index: 5500; pointer-events: none; display: flex; flex-direction: column; top: env(safe-area-inset-top, 0px); left: env(safe-area-inset-left, 0px);"></ul>
    <ul id="chakra-toast-manager-top-right"
        style="position: fixed; z-index: 5500; pointer-events: none; display: flex; flex-direction: column; top: env(safe-area-inset-top, 0px); right: env(safe-area-inset-right, 0px);"></ul>
    <ul id="chakra-toast-manager-bottom-left"
        style="position: fixed; z-index: 5500; pointer-events: none; display: flex; flex-direction: column; bottom: env(safe-area-inset-bottom, 0px); left: env(safe-area-inset-left, 0px);"></ul>
    <ul id="chakra-toast-manager-bottom"
        style="position: fixed; z-index: 5500; pointer-events: none; display: flex; flex-direction: column; margin: 0px auto; bottom: env(safe-area-inset-bottom, 0px); right: env(safe-area-inset-right, 0px); left: env(safe-area-inset-left, 0px);"></ul>
    <ul id="chakra-toast-manager-bottom-right"
        style="position: fixed; z-index: 5500; pointer-events: none; display: flex; flex-direction: column; bottom: env(safe-area-inset-bottom, 0px); right: env(safe-area-inset-right, 0px);"></ul>
</div>
<div class="chakra-portal">
    <div
        style="width: 100%; height: 100vh; position: absolute; background: rgba(0, 0, 0, 0.2); inset: 0px; opacity: 0; display: none;"></div>
</div>
<next-route-announcer>
    <p aria-live="assertive" id="__next-route-announcer__" role="alert"
       style="border: 0px; clip: rect(0px, 0px, 0px, 0px); height: 1px; margin: -1px; overflow: hidden; padding: 0px; position: absolute; width: 1px; white-space: nowrap; overflow-wrap: normal;"></p>
</next-route-announcer>
<div class="chakra-portal">
    <div
        style="width: 100%; height: 100vh; position: absolute; background: rgba(0, 0, 0, 0.2); inset: 0px; opacity: 0; display: none;"></div>
</div>
<div class="chakra-portal">
    <div
        style="width: 100%; height: 100vh; position: absolute; background: rgba(0, 0, 0, 0.2); inset: 0px; opacity: 0; display: none;"></div>
</div>


</body>
<script>

    const loginPopup = document.querySelector(".login-popup");
    const close = document.querySelector(".close-btn");
    const btn = document.getElementById('open_modal');

    btn.addEventListener("click", function () {
        // buttonElement.addEventListener('click', function (event) {
        showPopup();
        // setTimeout(function(){
        //   loginPopup.classList.add("show");
        // },5000)

    })

    function showPopup() {
        const timeLimit = 5 // seconds;
        let i = 0;
        const timer = setInterval(function () {
            i++;
            if (i == timeLimit) {
                clearInterval(timer);
                loginPopup.classList.add("show");
            }
            console.log(i)
        }, 100);
    }


    close.addEventListener("click", function () {
        loginPopup.classList.remove("show");
    })

</script>
</html>
