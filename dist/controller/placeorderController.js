

function loadcustId() {
    $('#custID').empty();
    $.ajax({
        url: "../posphp/api/service/CustomerService.php",
        method: "GET",
        async: true,
        dataType: "json"
    }).done(function (resp) {
        for (var i in resp) {

            var temp = resp[i];
            var row = "<option>" + temp[0] + "</option>";
            $('#custID').append(row);

        }

    });
};
loadcustId();

$('#custID').click(function () {

    $.ajax({
        url: "../posphp/api/service/CustomerService.php",
        method: "GET",
        async: true,
        dataType: "json"
    }).done(function (resp) {
        for (var i in resp) {

            var temp = resp[i];
            if ($('#custID').val()==temp[0]){
                $('#custName').val(temp[1]+"  "+temp[2])

            }


        }

    });
});


function loadItemCode() {
    $('#itemCode').empty();
    $.ajax({
        url: "../posphp/api/service/ItemService.php",
        method: "GET",
        async: true,
        dataType: "json"
    }).done(function (resp) {
        for (var i in resp) {

            var temp = resp[i];
            var row = "<option>" + temp[0] + "</option>";
            $('#itemCode').append(row);

        }

    });
};
loadItemCode();

$('#itemCode').click(function () {

    $.ajax({
        url: "../posphp/api/service/ItemService.php",
        method: "GET",
        async: true,
        dataType: "json"
    }).done(function (resp) {
        for (var i in resp) {
            var temp = resp[i];
            if ($('#itemCode').val()==temp[0]){
                $('#itemName').val(temp[1]);
                $('#unitPrice').val(temp[3]);
                $('#qtyonHand').val(temp[2]);
            }
        }
    });
});






let array =new Array();

$('#btnaddcart').click(function () {
    let itemcode=$('#itemCode').val();
    let itemname=$('#itemName').val();
    let orderedqty=$('#OrderedQty').val();
    let unitprice=$('#unitPrice').val();
    let amount=orderedqty*unitprice;
    array.push(new Array(itemcode,itemname,orderedqty,unitprice,amount));

    var row = "<tr><td>" +itemcode + "</td><td>" + itemname + "</td><td>" + orderedqty + "</td><td>" + unitprice + "</td><td>" + amount + "</td></tr>";
    $('#cartTable').append(row);
});

$('#subpayment').click(function () {

    $.ajax({
        url: "../posphp/api/service/OrderService.php",
        method: "POST",
        async: true,
        data:{
            orderID:$('#orderID').val(),
            custID:$('#custID').val(),
            order_Date:$('#OrderDate').val()

        }
    }).done(function (res) {
        array.forEach(function (item,index) {
            // alert(item);
            let itemcode=item[0];
            let itemname=item[1];
            let orderedqty= item[2];
            let unitprice=item[3];
            let amount=item[4];
            // console.log(item);

            function addOrder() {
                $.ajax({
                    url: "../posphp/api/service/OrderDetailService.php",
                    method: "POST",
                    async: true,
                    data:{
                        orderID:$('#orderID').val(),
                        itemCode:itemcode,
                        quantity:orderedqty,
                        unitPrice:unitprice
                    }
                }).done(function (res) {
                    if (res == 1) {
                        alert("Order Sucessfully");

                    } else {
                        alert("Order Not Sucessfully");
                    }
                });

            }
            addOrder();
        });
    });




});


