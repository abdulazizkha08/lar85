require('./bootstrap');

define(['jquery', 'jquery-typeahead'], function($) {
    $(document).ready(function () {
        $('#name').on('input', function (e) {
            var search = $(this).val();
            $('.typeahead__result').empty();
            e.preventDefault();
            $.ajax({
                url: "/client/products/json",  // Обновите этот URL на правильный маршрут
                method: "get",
                data: {search: search},

                success:function(result){
                    $('#name').typeahead({
                        source: {
                            data: result.map(record => record.name + " - " + numberFormat(record.amount) + " UZS " + record.measurement.short)
                        },
                        onselect: function(obj) {
                            console.log(obj);
                        }
                    });
                }
            });
        });

        $('#name').on('typeahead:select', function (e, datum) {
            console.log("selected");
            console.log(datum);
            $('#name').val(datum);
        });
    });

    function numberFormat(input) {
        try {
            var amount = parseInt(input);
            if (isNaN(amount)) {
                return 0;
            }
        } catch (error) {
            return 0;
        }
        amount = amount / 100;
        return formatNumber(amount);
    }

    function formatNumber(number) {
        const numberString = number.toFixed(2).replace(/\B(?=(\d{3})+(?!\d))/g, " ");
        return numberString.replace(".", ",");
    }

    function calculateTotal(input) {
        var row = input.parentNode.parentNode;
        var quantity = parseFloat(input.value);
        var amount = parseFloat(row.cells[4].innerText);
        var total = quantity * amount;
        var totalCell = row.cells[6];
        totalCell.innerText = total.toFixed(2);
    }
});
