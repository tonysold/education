<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Autofill Inputs Example</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <form>
        <label for="itemSelect">Select an item:</label>
        <select id="itemSelect">
            <option value="">--Select--</option>
            <option value="1">Item 1</option>
            <option value="2">Item 2</option>
            <option value="3">Item 3</option>
        </select>

        <div>
            <label for="input1">Input 1:</label>
            <input type="text" id="input1" name="input1" readonly>
        </div>
        <div>
            <label for="input2">Input 2:</label>
            <input type="text" id="input2" name="input2" readonly>
        </div>
    </form>

    <script>
        $(document).ready(function() {
            $('#itemSelect').change(function() {
                var selectedValue = $(this).val();
                if (selectedValue) {
                    $.ajax({
                        url: 'get_item_data.php',
                        type: 'POST',
                        data: { id: selectedValue },
                        success: function(response) {
                            var data = JSON.parse(response);
                            $('#input1').val(data.input1);
                            $('#input2').val(data.input2);
                        }
                    });
                } else {
                    $('#input1').val('');
                    $('#input2').val('');
                }
            });
        });
    </script>
</body>
</html>
