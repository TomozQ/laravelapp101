<html>
    <head>
        <title>hello/Rest</title>
        <style>
             body{
                font-size: 16px;
                color: #999;
                margin: 5px;    
            }
            h1{
                font-size: 50pt;
                text-align: right;
                color: #e2e2e2;
                margin: -20px 0 -30px 0;
                letter-spacing: -4pt;
            }
            ul{
                font-size: 12pt;
            }
            hr{
                margin: 25px 100px;
                border-top: 1px dashed #ddd;
            }
            .menutitle{
                font-size: 14pt;
                font-weight: bold;
                margin: 0;
            }
            .content{
                margin: 10px;
            }
            .footer{
                text-align: right;
                font-size: 10pt;
                margin: 10px;
                border-bottom: solid 1px #ccc;
                color: #ccc;
            }
            th{
                background-color: #999;
                color: #fff;
                padding: 5px 10px;
            }
            td{
                border: 1px solid #aaa;
                color: #999;
                padding: 5px 10px;
            }
        </style>
    </head>
    <body>
        <h1>Rest</h1>
        @include('rest.create')
    </body>
</html>