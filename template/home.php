<html lang="en">
<head>
    <title>The Technikolor Framework</title>
</head>
<body>

<div class="box">
    <h1>Hi ho let's go!</h1>
</div>

</body>
<style>
    @font-face{
        font-family: 'JetBrains Mono';
        src: url('https://raw.githubusercontent.com/JetBrains/JetBrainsMono/master/web/eot/JetBrainsMono-Regular.eot') format('embedded-opentype'),
        url('https://raw.githubusercontent.com/JetBrains/JetBrainsMono/master/web/woff2/JetBrainsMono-Regular.woff2') format('woff2'),
        url('https://raw.githubusercontent.com/JetBrains/JetBrainsMono/master/web/woff/JetBrainsMono-Regular.woff') format('woff'),
        url('https://raw.githubusercontent.com/JetBrains/JetBrainsMono/master/ttf/JetBrainsMono-Regular.ttf') format('truetype');
        font-weight: normal;
        font-style: normal;
    }

    * {
        -webkit-font-feature-settings: "liga" on, "calt" on;
        -webkit-font-smoothing: antialiased;
        text-rendering: optimizeLegibility;
        font-family: 'JetBrains Mono';
    }

    .box {
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }
</style>
</html>
