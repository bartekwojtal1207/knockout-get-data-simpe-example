<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>strona testowa dla knockout.js</title>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css"
          integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.1/bootstrap-table.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"
            integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
<!--    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.1/locale/bootstrap-table-zh-CN.min.js"></script>-->
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.1/bootstrap-table.min.js"></script>
    <script type="text/javascript" src="assets/ko/index.js"></script>
    <script type="text/javascript" src="assets/index.js"></script>
    <script type="text/javascript" src="assets/form.js"></script>


    <style>
        .active{
            color: red;
        }
    </style>

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

<!--test dla table bootsrap-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="test-table">
                <table data-search="true"
                       id="mainTable">
                    <thead>
                    <tr>
                        <th>Item ID</th>
                        <th>Item Name</th>
                        <th>Item Price</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Item 1</td>
                        <td>$1</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Item 2</td>
                        <td>$2</td>
                    </tr>
                    </tbody>
                </table>

            </div>

        </div>
    </div>
    <br><br>
    <form action="form.php" id="test-form" method="post">
        <input type="text" name="text_input_two" placeholder="podaj teks 2">
        <input type="text" name="number_input_two" placeholder="podaj liczbe 2">
        <input required>
        <input type="submit" value="wyślij">
    </form>
    <button href="form.php" role="button" class="active buttonAjax">ajax</button>


</div>


<script src="assets/jq-validate/jquery.validate.js"></script>
<script type="text/javascript">
var mainTable = $('#mainTable');
var self = $(this);

$(mainTable).on('click',function (e) {
    // $(this).bootstrapTable('toggleView');
});

$(mainTable).bootstrapTable({
    onClickRow: function (row, $element, field) {

            console.log($element);

            addTestClass($element);
            // deleteTest($element);
    }
});

 function addTestClass ($element) {
     $element.toggleClass('active')
}
// function deleteTest($element){
//     mainTable.bootstrapTable('remove');
// }



</script>



</body>
</html>