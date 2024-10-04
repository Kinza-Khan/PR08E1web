$(document).ready(function(){
    $(document).on('click','.inc',function(){
        let productId = $(this).closest('.qtyBox').find(".productId").val();
        // console.log(productId);
        let productQty = $(this).closest('.qtyBox').find(".num-product");
        let productQtyIntVal = parseInt(productQty.val());
        console.log(productQtyIntVal);
        if(!isNaN(productQtyIntVal)){
                let updatedQty = productQtyIntVal;
                qtyIncDec(productId,updatedQty);
                updateTotal($(this),updatedQty) ;   
        }
    })
    $(document).on('click','.dec',function(){
        let productId = $(this).closest('.qtyBox').find(".productId").val();
        // console.log(productId);
        let productQty = $(this).closest('.qtyBox').find(".num-product");
        let productQtyIntVal = parseInt(productQty.val());
        console.log(productQtyIntVal);
        if(!isNaN(productQtyIntVal)){
                let updatedQty = productQtyIntVal;
                qtyIncDec(productId,updatedQty);  
                updateTotal($(this),updatedQty) ;          
        }
    })
    function qtyIncDec(pId,pQty){

        $.ajax({
            url : "shoping-cart.php",
            type : "post",
            data : {
                "updatedQtyInp" : true ,
                "productId" : pId ,
                 "productQty" :pQty

            },
            success : function(response){

            }
        })
    }



    function updateTotal(element, qty){
            let price = element.closest(".table_row").find(".column-3").text();
            console.log(price);
            let totalAmount = element.closest(".table_row").find(".column-5");
            totalAmount.text(price*qty);

    }

})

