<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>strona testowa dla knockout.js</title>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>
    <script type="text/javascript" src="assets/ko/index.js"></script>
    <script type="text/javascript" src="assets/index.js"></script>
</head>
<body>

    <h3> test ko.js = wysyłanie $data z klasy</h3>


<!--    <p class="p-class" > Moje imie to <span class="span-class" data-bind="text: name('Bartek')"></span></p>-->
        <ul class="ul-class" data-bind="foreach: people">
            <li class="li-class" data-bind="text: $data, style: { color: $data == 'bartek' ? 'red' : 'orange' }" > </li>
        </ul>

    <div id="ul">
        <ul id="results">
        </ul>
    </div>




</body>
</html>